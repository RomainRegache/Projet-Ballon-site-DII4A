<?php
session_start();
global $data,$max,$temperature_now,$humidity_now,$pollution_now,$temps_package,$altitude_now,$refresh;
$max=60;
$pollution_now=0;
$temps_package=10;
if (!isset($_SESSION["refresh"])) {
    $_SESSION["refresh"]=60;
}

$apiKey = "ad2567625c923b3c21f5946cfd1bf77f";
$cityId = "2972191";
$googleApiUrl = "http://api.openweathermap.org/data/2.5/weather?id=" . $cityId . "&lang=fr&units=metric&APPID=" . $apiKey;

$ch = curl_init();

curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_URL, $googleApiUrl);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_VERBOSE, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
$response = curl_exec($ch);

curl_close($ch);
$data = json_decode($response);
$currentTime = time();


function temperature() {
    generate_pakage();
    humidity();
    altitude();
    global $data,$max,$temperature_now;
    $i = 0;
    $j = 0;
    $temperature = [];
    if (($handle = fopen("./CSV/temperature.csv", "r")) !== FALSE) {
        while (($data_a = fgetcsv($handle, 1000, ",")) !== FALSE) {
            array_push($temperature,$data_a[0]);
        }
        //$temperature = array_reverse($temperature);
        $temperature_now = $data->main->temp+rand(-99,99)/1000;
        if ($data->main->temp==0) {
            $temperature_now="";
        }
        array_push($temperature,$temperature_now);
        //print_r($temperature);
        fclose($handle);
    }
    if (($handle = fopen("./CSV/temperature.csv", "w")) !== FALSE) {
        while (isset($temperature[($max*100+$j)])) {
            unset($temperature[$j]);
            $j++;
        }
        foreach ($temperature as $item) {
            $i++;
        }
        while ($i<$max) {
            fputcsv($handle,[0]);
            $i++;
        }
        foreach ($temperature as $item) {
            fputcsv($handle,[$item]);
        }
    }
}

function get_temperature() {
    global $max;
    $temperature = [];
    $temperature_selected=[];
    $i=0;
    if (($handle = fopen("./CSV/temperature.csv", "r")) !== FALSE) {
        while (($data_a = fgetcsv($handle, 1000, ",")) !== FALSE) {
            array_push($temperature,$data_a[0]);
        }
        fclose($handle);
    }
    $temperature=array_reverse($temperature);
    while($i<$max) {
        array_push($temperature_selected,$temperature[$i]);
        $i++;
    }
    $temperature_selected=array_reverse($temperature_selected);
    return json_encode($temperature_selected);
}

function generate_pakage() {
    if (rand(0,10)+rand(-5,5)*0.25>8) {
        if (($handle = fopen("./CSV/signal.csv", "a")) !== FALSE) {
            fputcsv($handle,[0]);
        }
    }
    else {
        if (($handle = fopen("./CSV/signal.csv", "a")) !== FALSE) {
            fputcsv($handle,[1]);
        }
    }
}

function get_number_pakage($number) {
    global $temps_package;
    $compt = 0;
    $value = [];
    $i=0;
    if (($handle = fopen("./CSV/signal.csv", "r")) !== FALSE) {
        while (($data_a = fgetcsv($handle, 1000, ",")) !== FALSE) {
            array_push($value,$data_a[0]);
        }
        fclose($handle);
    }
    $value=array_reverse($value);
    while ($i<$temps_package) {
        if ($value[$i]==$number) {
            $compt++;
        }
        $i++;
    }
    return $compt;
}

function humidity() {
    global $data,$max,$humidity_now;
    $i = 0;
    $j = 0;
    $temperature = [];
    if (($handle = fopen("./CSV/humidity.csv", "r")) !== FALSE) {
        while (($data_a = fgetcsv($handle, 1000, ",")) !== FALSE) {
            array_push($temperature,$data_a[0]);
        }
        //$temperature = array_reverse($temperature);
        $humidity_now = $data->main->humidity+rand(-99,99)/1000;
        if ($data->main->humidity==0) {
            $humidity_now="";
        }
        array_push($temperature,$humidity_now);
        //print_r($temperature);
        fclose($handle);
    }
    if (($handle = fopen("./CSV/humidity.csv", "w")) !== FALSE) {
        while (isset($temperature[($max*100+$j)])) {
            unset($temperature[$j]);
            $j++;
        }
        foreach ($temperature as $item) {
            $i++;
        }
        while ($i<$max) {
            fputcsv($handle,[0]);
            $i++;
        }
        foreach ($temperature as $item) {
            fputcsv($handle,[$item]);
        }
    }
}

function get_humidity() {
    global $max;
    $temperature = [];
    $temperature_selected=[];
    $i=0;
    if (($handle = fopen("./CSV/humidity.csv", "r")) !== FALSE) {
        while (($data_a = fgetcsv($handle, 1000, ",")) !== FALSE) {
            array_push($temperature,$data_a[0]);
        }
        fclose($handle);
    }
    $temperature=array_reverse($temperature);
    while($i<$max) {
        array_push($temperature_selected,$temperature[$i]);
        $i++;
    }
    $temperature_selected=array_reverse($temperature_selected);
    return json_encode($temperature_selected);
}

$googleApiUrl = "https://api.openweathermap.org/data/2.5/air_pollution?lat=47.367125&lon=0.685211&appid=ad2567625c923b3c21f5946cfd1bf77f";

$ch = curl_init();

curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_URL, $googleApiUrl);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_VERBOSE, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
$response = curl_exec($ch);

curl_close($ch);
$data_pollution = json_decode($response);
//print_r($data_pollution);

function get_color_pollution($type,$value) {
    global $pollution_now;
    $range = [[50,100,200,400],[25,50,90,180],[60,120,180,240],[15,30,55,110],[1,2,3,4]];
    if ($value<$range[$type][0]) {
        return "success";
    }
    elseif ($value<$range[$type][1]) {
        if ($pollution_now<1) {
            $pollution_now=1;
        }
        return "warning";
    }
    elseif ($value<$range[$type][2]) {
        if ($pollution_now<2) {
            $pollution_now=2;
        }
        return "danger";
    }
    elseif ($value<$range[$type][3]) {
        if ($pollution_now<3) {
            $pollution_now=3;
        }
        return "dark";
    }
}

$googleApiUrl = "https://api.openweathermap.org/data/2.5/forecast?lat=47.367125&lon=0.685211&appid=ad2567625c923b3c21f5946cfd1bf77f&lang=FR&units=metric";
$ch = curl_init();

curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_URL, $googleApiUrl);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_VERBOSE, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
$response = curl_exec($ch);

curl_close($ch);
$data_forecast = json_decode($response);
//print_r($data_forecast);

function get_statut_pollution() {
    global $pollution_now;
    $statut_pollution=["Excellente","Correcte","Mauvaise","Très mauvaise"];
    return $statut_pollution[$pollution_now];
}

function altitude() {
    global $data,$max,$altitude_now;
    $i = 0;
    $j = 0;
    $temperature = [];
    if (($handle = fopen("./CSV/altitude.csv", "r")) !== FALSE) {
        while (($data_a = fgetcsv($handle, 1000, ",")) !== FALSE) {
            array_push($temperature,$data_a[0]);
        }
        //$temperature = array_reverse($temperature);
        $humidity_now = 10+rand(-99,99)/1000;
        if ($humidity_now==0) {
            $humidity_now="";
        }
        $altitude_now=$humidity_now;
        array_push($temperature,$humidity_now);
        //print_r($temperature);
        fclose($handle);
    }
    if (($handle = fopen("./CSV/altitude.csv", "w")) !== FALSE) {
        while (isset($temperature[($max*100+$j)])) {
            unset($temperature[$j]);
            $j++;
        }
        foreach ($temperature as $item) {
            $i++;
        }
        while ($i<$max) {
            fputcsv($handle,[0]);
            $i++;
        }
        foreach ($temperature as $item) {
            fputcsv($handle,[$item]);
        }
    }
}

function get_altitude() {
    global $max;
    $temperature = [];
    $temperature_selected=[];
    $i=0;
    if (($handle = fopen("./CSV/altitude.csv", "r")) !== FALSE) {
        while (($data_a = fgetcsv($handle, 1000, ",")) !== FALSE) {
            array_push($temperature,$data_a[0]);
        }
        fclose($handle);
    }
    $temperature=array_reverse($temperature);
    while($i<$max) {
        array_push($temperature_selected,$temperature[$i]);
        $i++;
    }
    $temperature_selected=array_reverse($temperature_selected);
    return json_encode($temperature_selected);
}