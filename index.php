<?php
include "fonction.php";
temperature();
get_color_pollution(0,$data_pollution->list[0]->components->no2);
get_color_pollution(1,$data_pollution->list[0]->components->pm10);
get_color_pollution(2,$data_pollution->list[0]->components->o3);
get_color_pollution(3,$data_pollution->list[0]->components->pm2_5);
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Dashboard</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</head>

<body id="page-top" class="">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion toggled" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-icon rotate-n-15">
                    <img src="61903.png" height="80px" width="80px">
                </div>
                <div class="sidebar-brand-text mx-3">Panneau de controle <sup></sup></div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="index.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>


            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>



        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Search --><br><br>
                    <!--<p>Attention le niveau d'Ozone, 0³ dans l'air est dangeureux pour votre santé. Isolez vous et évitez les activitées de plein air. En cas de gêne respiratoire prennais immédiatement conseil auprès d'un professionel de santé.<a href="https://solidarites-sante.gouv.fr/sante-et-environnement/air-exterieur/qualite-de-l-air-exterieur-10984/article/recommandations-en-cas-d-episode-de-pollution-a-l-ozone#:~:text=L'ozone%20est%20un%20gaz,effets%20cardiovasculaires%20sont%20%C3%A9galement%20constat%C3%A9s.">Cliquez ici pour plus d'informations</a></p>
                    -->
                                        <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                                aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small"
                                            placeholder="Search for..." aria-label="Search"
                                            aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>

                        <!-- Nav Item - Alerts -->
                        <li class="nav-item dropdown no-arrow mx-1">
                            <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-bell fa-fw"></i>
                                <!-- Counter - Alerts -->
                                <span class="badge badge-danger badge-counter">3+</span>
                            </a>
                            <!-- Dropdown - Alerts -->
                            <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="alertsDropdown">
                                <h6 class="dropdown-header">
                                    Alerts Center
                                </h6>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-danger">
                                            <i class="fas fa-sun text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">15 mai 2022</div>
                                        <span class="font-weight-bold">Nouveau record de température pour l'année 2022 : 32.52°C</span>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-primary">
                                            <i class="fas fa-cloud-rain text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">17 mai 2022</div>
                                        Attention il risque de pleuvoir cet après midi
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-warning">
                                            <i class="fas fa-exclamation-triangle text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">18 mai 2022</div>
                                        Attention le niveau d'ozone est élevé depuis 5 jours jours concecutif. Evitez de sortir l'après midi.
                                    </div>
                                </a>
                                <a class="dropdown-item text-center small text-gray-500" href="#">Show All Alerts</a>
                            </div>
                        </li>

                        </li>

                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Polytech Tours</span>
                                <img class="img-profile rounded-circle"
                                    src="img/undraw_profile.svg">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profile
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Settings
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Activity Log
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4" onclick="swaltest();">
                        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
                        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                                class="fas fa-cog fa-sm text-white-50"></i> Paramètres</a>
                    </div>

                    <!-- Content Row -->
                    <div class="row">

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-warning shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                                Température</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo round($temperature_now,2)?>°C</div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-thermometer-empty fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                Humidité</div>
                                            <div class="row no-gutters align-items-center">
                                                <div class="col-auto">
                                                    <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800"><?php echo round($humidity_now,2) ?>%</div>
                                                </div>
                                                <div class="col">
                                                    <div class="progress progress-sm mr-2">
                                                        <div class="progress-bar bg-info" role="progressbar"
                                                             style="width: <?php echo round($humidity_now,2) ?>%" aria-valuenow="<?php echo round($humidity_now,2) ?>" aria-valuemin="0"
                                                             aria-valuemax="100"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-hand-holding-water fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-<?php echo get_color_pollution(4, $pollution_now) ?> shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-<?php echo get_color_pollution(4, $pollution_now) ?> text-uppercase mb-1">Qualité de l'air
                                            </div>
                                            <div class="row no-gutters align-items-center">
                                                <div class="col-auto">
                                                    <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800"><?php echo get_statut_pollution() ?></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-air-freshener fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Pending Requests Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-info shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">
                                                Altitude</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo round($altitude_now,1) ?> mètres</div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-mountain fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Content Row -->

                    <div class="row">

                        <!-- Area Chart -->
                        <div class="col-xl-4 col-lg-7">
                            <div class="card shadow mb-4">
                                <!-- Card Header - Dropdown -->
                                <div
                                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-primary">Température</h6>
                                    <div class="dropdown no-arrow">
                                        <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in"
                                            aria-labelledby="dropdownMenuLink">
                                            <div class="dropdown-header">Dropdown Header:</div>
                                            <a class="dropdown-item" href="#">Action</a>
                                            <a class="dropdown-item" href="#">Another action</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="#">Something else here</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- Card Body -->
                                <div class="card-body">
                                    <div class="chart-area">
                                        <canvas id="myAreaChart"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Area Chart -->
                        <div class="col-xl-4 col-lg-7">
                            <div class="card shadow mb-4">
                                <!-- Card Header - Dropdown -->
                                <div
                                        class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-primary">Humidité</h6>
                                    <div class="dropdown no-arrow">
                                        <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                                           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in"
                                             aria-labelledby="dropdownMenuLink">
                                            <div class="dropdown-header">Dropdown Header:</div>
                                            <a class="dropdown-item" href="#">Action</a>
                                            <a class="dropdown-item" href="#">Another action</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="#">Something else here</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- Card Body -->
                                <div class="card-body">
                                    <div class="chart-area">
                                        <canvas id="myAreaChart2"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Area Chart -->
                        <div class="col-xl-4 col-lg-7">
                            <div class="card shadow mb-4">
                                <!-- Card Header - Dropdown -->
                                <div
                                        class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-primary">Altitude</h6>
                                    <div class="dropdown no-arrow">
                                        <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                                           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in"
                                             aria-labelledby="dropdownMenuLink">
                                            <div class="dropdown-header">Dropdown Header:</div>
                                            <a class="dropdown-item" href="#">Action</a>
                                            <a class="dropdown-item" href="#">Another action</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="#">Something else here</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- Card Body -->
                                <div class="card-body">
                                    <div class="chart-area">
                                        <canvas id="myAreaChart3"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                    <!-- Content Row -->
                    <div class="row">

                        <!-- Content Column -->
                        <div class="col-lg-6 mb-4">


                            <!-- Project Card Example -->
                            <div class="card shadow mb-4">
                                <!-- Card Header - Dropdown -->
                                <div
                                        class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-primary">Pollution</h6>
                                    <div class="dropdown no-arrow">
                                        <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                                           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in"
                                             aria-labelledby="dropdownMenuLink">
                                            <div class="dropdown-header">Modifier les seuils de :</div>
                                            <a class="dropdown-item" onclick="swaltest()">NO<autre style="font-size: 8px">2</autre></a>
                                            <a class="dropdown-item" onclick="swaltest()">PM<autre style="font-size: 8px">10</autre></a>
                                            <a class="dropdown-item" onclick="swaltest()">0³</a>
                                            <a class="dropdown-item" onclick="swaltest()">PM<autre style="font-size: 8px">25</autre></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <h4 class="small font-weight-bold">NO<autre style="font-size: 8px">2</autre> <span
                                                class="float-right"><?php echo $data_pollution->list[0]->components->no2 ?>µg/m³</span></h4>
                                    <div class="progress mb-4">
                                        <div class="progress-bar bg-<?php echo get_color_pollution(0,$data_pollution->list[0]->components->no2) ?>" role="progressbar" style="width: <?php echo $data_pollution->list[0]->components->no2/2 ?>%"
                                             aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <h4 class="small font-weight-bold">PM<autre style="font-size: 8px">10</autre> <span
                                                class="float-right"><?php echo $data_pollution->list[0]->components->pm10 ?>µg/m³</span></h4>
                                    <div class="progress mb-4">
                                        <div class="progress-bar bg-<?php echo get_color_pollution(1,$data_pollution->list[0]->components->pm10) ?>" role="progressbar" style="width: <?php echo $data_pollution->list[0]->components->pm10/0.9 ?>%"
                                             aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <h4 class="small font-weight-bold">0³ <span
                                                class="float-right"><?php echo $data_pollution->list[0]->components->o3 ?>µg/m³</span></h4>
                                    <div class="progress mb-4">
                                        <div class="progress-bar bg-<?php echo get_color_pollution(2,$data_pollution->list[0]->components->o3) ?>" role="progressbar" style="width: <?php echo $data_pollution->list[0]->components->o3/1.8 ?>%"
                                             aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <h4 class="small font-weight-bold">PM<autre style="font-size: 8px">25</autre> <span
                                                class="float-right"><?php echo $data_pollution->list[0]->components->pm2_5 ?>µg/m³</span></h4>
                                    <div class="progress mb-4">
                                        <div class="progress-bar bg-<?php echo get_color_pollution(3,$data_pollution->list[0]->components->pm2_5) ?>" role="progressbar" style="width: <?php echo $data_pollution->list[0]->components->pm2_5/0.55 ?>%"
                                             aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6 mb-4">

                            <!-- Illustrations -->
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Prévision</h6>
                                </div>
                                <div class="card-body">
                                    <img
                                            src="http://openweathermap.org/img/w/<?php echo $data->weather[0]->icon; ?>.png"
                                            class="weather-icon" height="100px" width="100px"/>
                                    <?php echo ucwords($data->weather[0]->description); ?> <span
                                            class="min-temperature">de <?php echo $data->main->temp_min; ?> °C à </span>
                                    <?php echo $data->main->temp_max; ?>°C<br> <?php echo date("H:i",$data_forecast->list[0]->dt) ." à ". date("H:i",$data_forecast->list[1]->dt)?>
                                    <img
                                            src="http://openweathermap.org/img/w/<?php echo $data_forecast->list[0]->weather[0]->icon; ?>.png"
                                            class="weather-icon" height="50px" width="50px"/>
                                    <?php echo ucwords($data_forecast->list[0]->weather[0]->description); ?> <span
                                            class="min-temperature"><?php echo $data_forecast->list[0]->main->temp_min; ?>/</span>
                                    <?php echo $data_forecast->list[0]->main->temp_max; ?>°C<br> <?php echo date("H:i",$data_forecast->list[1]->dt) ." à ". date("H:i",$data_forecast->list[2]->dt)?>
                                    <img
                                            src="http://openweathermap.org/img/w/<?php echo $data_forecast->list[1]->weather[0]->icon; ?>.png"
                                            class="weather-icon" height="50px" width="50px"/>
                                    <?php echo ucwords($data_forecast->list[1]->weather[0]->description); ?> <span
                                            class="min-temperature"><?php echo $data_forecast->list[1]->main->temp_min; ?>/</span>
                                    <?php echo $data_forecast->list[1]->main->temp_max; ?>°C<br> <?php echo date("H:i",$data_forecast->list[2]->dt) ." à ". date("H:i",$data_forecast->list[3]->dt)?>
                                    <img
                                            src="http://openweathermap.org/img/w/<?php echo $data_forecast->list[2]->weather[0]->icon; ?>.png"
                                            class="weather-icon" height="50px" width="50px"/>
                                    <?php echo ucwords($data_forecast->list[2]->weather[0]->description); ?> <span
                                            class="min-temperature"><?php echo $data_forecast->list[2]->main->temp_min; ?>/</span>
                                    <?php echo $data_forecast->list[2]->main->temp_max; ?>°C<br> <?php echo date("H:i",$data_forecast->list[3]->dt) ." à ". date("H:i",$data_forecast->list[4]->dt)?>
                                    <img
                                            src="http://openweathermap.org/img/w/<?php echo $data_forecast->list[3]->weather[0]->icon; ?>.png"
                                            class="weather-icon" height="50px" width="50px"/>
                                    <?php echo ucwords($data_forecast->list[3]->weather[0]->description); ?> <span
                                            class="min-temperature"><?php echo $data_forecast->list[3]->main->temp_min; ?>/</span>
                                    <?php echo $data_forecast->list[3]->main->temp_max; ?>°C<br> <?php echo date("H:i",$data_forecast->list[4]->dt) ." à ". date("H:i",$data_forecast->list[5]->dt)?>
                                    <img
                                            src="http://openweathermap.org/img/w/<?php echo $data_forecast->list[4]->weather[0]->icon; ?>.png"
                                            class="weather-icon" height="50px" width="50px"/>
                                    <?php echo ucwords($data_forecast->list[4]->weather[0]->description); ?> <span
                                            class="min-temperature"><?php echo $data_forecast->list[4]->main->temp_min; ?>/</span>
                                    <?php echo $data_forecast->list[4]->main->temp_max; ?>°C
                                </div>
                            </div>

                            <!-- Approach -->


                        </div>
                    </div>
                    <!-- Content Row -->

                    <div class="row">


                        <!-- Pie Chart -->
                        <div class="col-xl-12 col-lg-5">
                            <div class="card shadow mb-4">
                                <!-- Card Header - Dropdown -->
                                <div
                                        class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-primary">Etat de la connexion</h6>
                                    <div class="dropdown no-arrow">
                                        <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                                           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in"
                                             aria-labelledby="dropdownMenuLink">
                                            <div class="dropdown-header">Dropdown Header:</div>
                                            <a class="dropdown-item" href="#">Action</a>
                                            <a class="dropdown-item" href="#">Another action</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="#">Something else here</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- Card Body -->
                                <div class="card-body">
                                    <div class="chart-pie pt-4 pb-2">
                                        <canvas id="myPieChart"></canvas>
                                    </div>
                                    <div class="mt-4 text-center small">
                                        <span class="mr-2">
                                            <i class="fas fa-circle text-danger"></i> Echec
                                        </span>
                                        <span class="mr-2">
                                            <i class="fas fa-circle text-success"></i> Réussie
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>SmartAlert&copy; Darnet Regache 2022</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/chart-area-demo.js"></script>
    <script src="js/demo/chart-pie-demo.js"></script>

</body>

</html>

<script>
    // Area Chart Example
    var temp = <?php echo get_temperature() ?>;
    var ctx = document.getElementById("myAreaChart");
    var myLineChart = new Chart(ctx, {
        type: 'line',
        data: {
            labels: <?php $i=$max;$labels="[";while($i>=0){$labels.=$i.',';$i--;}echo $labels."]"?>,
            datasets: [{
                label: "Température",
                lineTension: 0.3,
                backgroundColor: "rgba(78, 115, 223, 0.05)",
                borderColor: "rgba(78, 115, 223, 1)",
                pointRadius: 3,
                pointBackgroundColor: "rgba(78, 115, 223, 1)",
                pointBorderColor: "rgba(78, 115, 223, 1)",
                pointHoverRadius: 3,
                pointHoverBackgroundColor: "rgba(78, 115, 223, 1)",
                pointHoverBorderColor: "rgba(78, 115, 223, 1)",
                pointHitRadius: 10,
                pointBorderWidth: 2,
                data: temp,
            }],
        },
        options: {
            maintainAspectRatio: false,
            layout: {
                padding: {
                    left: 10,
                    right: 25,
                    top: 25,
                    bottom: 0
                }
            },
            scales: {
                xAxes: [{
                    time: {
                        unit: 'date'
                    },
                    gridLines: {
                        display: false,
                        drawBorder: false
                    },
                    ticks: {
                        maxTicksLimit: 6
                    }
                }],
                yAxes: [{
                    ticks: {
                        maxTicksLimit: 5,
                        padding: 10,
                        // Include a dollar sign in the ticks
                        callback: function(value, index, values) {
                            return number_format(value,2)+"°C";
                        }
                    },
                    gridLines: {
                        color: "rgb(234, 236, 244)",
                        zeroLineColor: "rgb(234, 236, 244)",
                        drawBorder: false,
                        borderDash: [2],
                        zeroLineBorderDash: [2]
                    }
                }],
            },
            legend: {
                display: false
            },
            tooltips: {
                backgroundColor: "rgb(255,255,255)",
                bodyFontColor: "#858796",
                titleMarginBottom: 10,
                titleFontColor: '#6e707e',
                titleFontSize: 14,
                borderColor: '#dddfeb',
                borderWidth: 1,
                xPadding: 15,
                yPadding: 15,
                displayColors: false,
                intersect: false,
                mode: 'index',
                caretPadding: 10,
                callbacks: {
                    label: function(tooltipItem, chart) {
                        var datasetLabel = chart.datasets[tooltipItem.datasetIndex].label || '';
                        return datasetLabel + " " + number_format(tooltipItem.yLabel,2) + ' °C';
                    }
                }
            }
        }
    });
</script>
<script>
    var ctx = document.getElementById("myPieChart");
    var myPieChart = new Chart(ctx, {
        type: 'doughnut',
        data: {
            labels: ["Réussie", "Echec", "Social"],
            datasets: [{
                data: [<?php echo get_number_pakage(1) ?>, <?php echo get_number_pakage(0) ?>],
                backgroundColor: ['#1cc88a', '#fc003a'],
                hoverBackgroundColor: ['#17a673', '#cc0000'],
                hoverBorderColor: "rgba(234, 236, 244, 1)",
            }],
        },
        options: {
            maintainAspectRatio: false,
            tooltips: {
                backgroundColor: "rgb(255,255,255)",
                bodyFontColor: "#858796",
                borderColor: '#dddfeb',
                borderWidth: 1,
                xPadding: 15,
                yPadding: 15,
                displayColors: false,
                caretPadding: 10,
            },
            legend: {
                display: false
            },
            cutoutPercentage: 80,
        },
    });
</script>
<script>
    setTimeout(() => {   location.reload(); }, <?php echo $_SESSION["refresh"]*10000000 ?>);
</script>

<script>
    // Area Chart Example
    var temp = <?php echo get_humidity() ?>;
    var ctx = document.getElementById("myAreaChart2");
    var myLineChart = new Chart(ctx, {
        type: 'line',
        data: {
            labels: <?php $i=$max;$labels="[";while($i>=0){$labels.=$i.',';$i--;}echo $labels."]"?>,
            datasets: [{
                label: "Humidité",
                lineTension: 0.3,
                backgroundColor: "rgba(78, 115, 223, 0.05)",
                borderColor: "rgba(78, 115, 223, 1)",
                pointRadius: 3,
                pointBackgroundColor: "rgba(78, 115, 223, 1)",
                pointBorderColor: "rgba(78, 115, 223, 1)",
                pointHoverRadius: 3,
                pointHoverBackgroundColor: "rgba(78, 115, 223, 1)",
                pointHoverBorderColor: "rgba(78, 115, 223, 1)",
                pointHitRadius: 10,
                pointBorderWidth: 2,
                data: temp,
            }],
        },
        options: {
            maintainAspectRatio: false,
            layout: {
                padding: {
                    left: 10,
                    right: 25,
                    top: 25,
                    bottom: 0
                }
            },
            scales: {
                xAxes: [{
                    time: {
                        unit: 'date'
                    },
                    gridLines: {
                        display: false,
                        drawBorder: false
                    },
                    ticks: {
                        maxTicksLimit: 6
                    }
                }],
                yAxes: [{
                    ticks: {
                        maxTicksLimit: 5,
                        padding: 10,
                        // Include a dollar sign in the ticks
                        callback: function(value, index, values) {
                            return number_format(value,2)+"%";
                        }
                    },
                    gridLines: {
                        color: "rgb(234, 236, 244)",
                        zeroLineColor: "rgb(234, 236, 244)",
                        drawBorder: false,
                        borderDash: [2],
                        zeroLineBorderDash: [2]
                    }
                }],
            },
            legend: {
                display: false
            },
            tooltips: {
                backgroundColor: "rgb(255,255,255)",
                bodyFontColor: "#858796",
                titleMarginBottom: 10,
                titleFontColor: '#6e707e',
                titleFontSize: 14,
                borderColor: '#dddfeb',
                borderWidth: 1,
                xPadding: 15,
                yPadding: 15,
                displayColors: false,
                intersect: false,
                mode: 'index',
                caretPadding: 10,
                callbacks: {
                    label: function(tooltipItem, chart) {
                        var datasetLabel = chart.datasets[tooltipItem.datasetIndex].label || '';
                        return datasetLabel + " " + number_format(tooltipItem.yLabel,2) + ' %';
                    }
                }
            }
        }
    });
</script>
<script>
    // Area Chart Example
    var temp = <?php echo get_altitude() ?>;
    var ctx = document.getElementById("myAreaChart3");
    var myLineChart = new Chart(ctx, {
        type: 'line',
        data: {
            labels: <?php $i=$max;$labels="[";while($i>=0){$labels.=$i.',';$i--;}echo $labels."]"?>,
            datasets: [{
                label: "Altitute",
                lineTension: 0.3,
                backgroundColor: "rgba(78, 115, 223, 0.05)",
                borderColor: "rgba(78, 115, 223, 1)",
                pointRadius: 3,
                pointBackgroundColor: "rgba(78, 115, 223, 1)",
                pointBorderColor: "rgba(78, 115, 223, 1)",
                pointHoverRadius: 3,
                pointHoverBackgroundColor: "rgba(78, 115, 223, 1)",
                pointHoverBorderColor: "rgba(78, 115, 223, 1)",
                pointHitRadius: 10,
                pointBorderWidth: 2,
                data: temp,
            }],
        },
        options: {
            maintainAspectRatio: false,
            layout: {
                padding: {
                    left: 10,
                    right: 25,
                    top: 25,
                    bottom: 0
                }
            },
            scales: {
                xAxes: [{
                    time: {
                        unit: 'date'
                    },
                    gridLines: {
                        display: false,
                        drawBorder: false
                    },
                    ticks: {
                        maxTicksLimit: 6
                    }
                }],
                yAxes: [{
                    ticks: {
                        maxTicksLimit: 5,
                        padding: 10,
                        // Include a dollar sign in the ticks
                        callback: function(value, index, values) {
                            return number_format(value,2)+"m";
                        }
                    },
                    gridLines: {
                        color: "rgb(234, 236, 244)",
                        zeroLineColor: "rgb(234, 236, 244)",
                        drawBorder: false,
                        borderDash: [2],
                        zeroLineBorderDash: [2]
                    }
                }],
            },
            legend: {
                display: false
            },
            tooltips: {
                backgroundColor: "rgb(255,255,255)",
                bodyFontColor: "#858796",
                titleMarginBottom: 10,
                titleFontColor: '#6e707e',
                titleFontSize: 14,
                borderColor: '#dddfeb',
                borderWidth: 1,
                xPadding: 15,
                yPadding: 15,
                displayColors: false,
                intersect: false,
                mode: 'index',
                caretPadding: 10,
                callbacks: {
                    label: function(tooltipItem, chart) {
                        var datasetLabel = chart.datasets[tooltipItem.datasetIndex].label || '';
                        return datasetLabel + " " + number_format(tooltipItem.yLabel,2) + ' m';
                    }
                }
            }
        }
    });
</script>

<script>
    function swaltest() {
        Swal.fire({
            title: 'Modification paramètre',
            html: `<label>Fréquence :</label><br><input type="number" id="frequence" class="swal2-input" placeholder="Fréquence" value="<?php echo 60 ?>">
  <label>Nombre de données :</label><input type="number" id="nombrededonnees" class="swal2-input" placeholder="Nombre de données" value="<?php echo $max ?>">`,
            confirmButtonText: 'Valider',
            focusConfirm: false,
            preConfirm: () => {
                const login = Swal.getPopup().querySelector('#frequence').value
                const password = Swal.getPopup().querySelector('#nombrededonnees').value
                if (!login || !password) {
                    Swal.showValidationMessage(`Please enter login and password`)
                }
                return { login: login, password: password }
            }
        })
    }
</script>