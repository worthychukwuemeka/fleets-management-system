<?php  

include("./php_DB/connect.php");
include("./php_DB/profiles.php");

$id = 1111;
$type = new Profiles();
$data_type = $type->get_user_table($id);

if(is_array($data_type)){
  $user_data = $data_type[0];
}
?>



<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <title>Fleet Management System | Dashboard</title>


  <!-- Google fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Work+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
    rel="stylesheet">

  <!-- Bootstrap icons -->
  <link rel="stylesheet" href="./dist/icons/bootstrap-icons-1.4.0/bootstrap-icons.min.css" type="text/css" />
  <!-- Bootstrap Docs -->
  <link rel="stylesheet" href="./dist/css/bootstrap-docs.css" type="text/css" />

  <!-- Slick -->
  <link rel="stylesheet" href="./libs/slick/slick.css" type="text/css" />

  <!-- Main style file -->
  <link rel="stylesheet" href="./dist/css/app.min.css" type="text/css" />

  <!--Hidden bootstrap style elements (Hid it because it is creating a pop up on the webpage that is not neccessary)-->
  <style>
    .item-action-buttons {
      display: none;
      visibility: hidden;
    }
  </style>

</head>

<body>
  <!-- preloader -->
  <div class="preloader">
    <img src="./assets/images/fleeets.png" alt="logo" />
    <div class="preloader-icon"></div>
  </div>
  <!-- ./ preloader -->

  <!-- sidebars -->

  <!-- notifications sidebar -->
  <div class="sidebar" id="notifications">
    <div class="sidebar-header d-block align-items-end">
      <div class="align-items-center d-flex justify-content-between py-4">
        Notifications
        <button data-sidebar-close>
          <i class="fa-solid fa-arrow-right"></i>
        </button>
      </div>
      <ul class="nav nav-pills">
        <li class="nav-item">
          <a class="nav-link active nav-link-notify" data-bs-toggle="tab" href="#activities">Actions</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-bs-toggle="tab" href="#alerts">Alerts</a>
        </li>
      </ul>
    </div>
    <div class="sidebar-content">
      <div class="tab-content">
        <div class="tab-pane active" id="activities">
          <div class="tab-pane-body">
            <ul class="list-group list-group-flush">
              <li class="px-0 list-group-item">
                <a href="#" class="d-flex">
                  <div class="flex-shrink-0">
                    <figure class="avatar avatar-info me-3">
                      <span class="avatar-text rounded-circle">
                        <i class="fa-solid fa-user"></i>
                      </span>
                    </figure>
                  </div>
                  <div class="flex-grow-1">
                    <p class="mb-0 fw-bold d-flex justify-content-between">
                      You added a new car: Toyota Corolla
                    </p>
                    <span class="text-muted small">
                      <i class="fa-regular fa-clock"></i> Today
                    </span>
                  </div>
                </a>
              </li>
              <li class="px-0 list-group-item">
                <a href="#" class="d-flex">
                  <div class="flex-shrink-0">
                    <figure class="avatar avatar-warning me-3">
                      <span class="avatar-text rounded-circle">
                        <i class="fa-solid fa-ban" style="color: #ffffff;"></i>
                      </span>
                    </figure>
                  </div>
                  <div class="flex-grow-1">
                    <p class="mb-0 fw-bold d-flex justify-content-between">
                      A trip got cancelled
                    </p>
                    <span class="text-muted small">
                      <i class="fa-regular fa-clock"></i> Today
                    </span>
                  </div>
                </a>
              </li>
              <li class="px-0 list-group-item">
                <a href="#" class="d-flex">
                  <div class="flex-shrink-0">
                    <figure class="avatar avatar-secondary me-3">
                      <span class="avatar-text rounded-circle">
                        <i class="fa-solid fa-star" style="color: #ffffff;"></i>
                      </span>
                    </figure>
                  </div>
                  <div class="flex-grow-1">
                    <p class="mb-0 d-flex justify-content-between">
                      1 person gave a car review
                    </p>
                    <span class="text-muted small">
                      <i class="fa-regular fa-clock"></i> Yesterday
                    </span>
                  </div>
                </a>
              </li>
              <li class="px-0 list-group-item">
                <a href="#" class="d-flex">
                  <div class="flex-shrink-0">
                    <figure class="avatar avatar-success me-3">
                      <span class="avatar-text rounded-circle">
                        <i class="fa-solid fa-file-invoice"></i>
                      </span>
                    </figure>
                  </div>
                  <div class="flex-grow-1">
                    <p class="mb-0 d-flex justify-content-between">
                      Reports ready to download
                    </p>
                    <span class="text-muted small">
                      <i class="fa-regular fa-clock"></i> Yesterday
                    </span>
                  </div>
                </a>
              </li>
              <li class="px-0 list-group-item">
                <a href="#" class="d-flex">
                  <div class="flex-shrink-0">
                    <figure class="avatar avatar-info me-3">
                      <span class="avatar-text rounded-circle">
                        <i class="fa-solid fa-lock" style="color: #ffffff;"></i>
                      </span>
                    </figure>
                  </div>
                  <div class="flex-grow-1">
                    <p class="mb-0 d-flex justify-content-between">
                      2 steps verification
                    </p>
                    <span class="text-muted small">
                      <i class="fa-regular fa-clock"></i> 20 min ago
                    </span>
                  </div>
                </a>
              </li>
            </ul>
          </div>
           
        </div>

        <div class="tab-pane" id="alerts">
          <div class="tab-pane-body">
            <ul class="list-group list-group-flush">
              <li class="px-0 list-group-item d-flex">
                <div class="flex-shrink-0">
                  <figure class="avatar avatar-warning me-3">
                    <span class="avatar-text rounded-circle">
                      <i class="fa-solid fa-lock" style="color: #ffffff;"></i>
                    </span>
                  </figure>
                </div>
                <div class="flex-grow-1">
                  <p class="mb-0 fw-bold d-flex justify-content-between">
                    Signed in with a different device.
                  </p>
                  <span class="text-muted small">
                    <i class="fa-regular fa-clock"></i> Yesterday
                  </span>
                </div>
              </li>
              <li class="px-0 list-group-item d-flex">
                <div class="flex-shrink-0">
                  <figure class="avatar avatar-warning me-3">
                    <span class="avatar-text fw-bold rounded-circle">
                      <i class="fa-solid fa-star" style="color: #ffffff;"></i>
                    </span>
                  </figure>
                </div>
                <div class="flex-grow-1">
                  <p class="mb-0 fw-bold d-flex justify-content-between">
                    Driver #6666 is not active.
                  </p>
                  <span class="text-muted small">
                    <i class="fa-regular fa-clock"></i> Yesterday
                  </span>
                </div>
              </li>

            </ul>
          </div>
           
        </div>
      </div>
    </div>
  </div>
  <!-- ./ notifications sidebar -->

  <!-- ./ sidebars -->

  <!-- menu -->
  <div class="menu">
    <div class="menu-header">
      <a href="/index.php" class="menu-header-logo">
        <img src="./assets/images/fleeets.png" alt="logo" />
      </a>
      <a href="/index.php" class="btn btn-sm menu-close-btn">
        <i class="bi bi-x"></i>
      </a>
    </div>
    <div class="menu-body">

      <ul id="navLinks">
        <li>
          <a class="active" href="./fleet-manager-dashboard.php">
            <span class="nav-link-icon">
              <i class="fa-solid fa-gauge"></i>
            </span>
            <span style="color: #470A34;">Dashboard</span>
          </a>
        </li>
        
        <li>
          <a href="./vehicles/vehicles.php">
            <span class="nav-link-icon">
              <i class="fa-solid fa-car"></i>
            </span>
            <span style="color: #470A34;">Vehicles</span>
          </a>

        </li>
        <li>
          <a href="./drivers/drivers.php">
            <span class="nav-link-icon">
              <i class="fa-solid fa-users"></i>
            </span>
            <span style="color: #470A34;">Drivers</span>
          </a>
        </li>
        <li>
          <a href="#">
            <span class="nav-link-icon">
              <i class="fa-solid fa-wrench"></i>
            </span>
            <span style="color: #470A34;">Maintenance <i class="fa-solid fa-chevron-down"></i></span>
          </a>
          <ul>
            <li>
              <a href="../maintenance/maintenance-req.html">View Requests</a>
            </li>
            <li>
              <a href="../maintenance//maintenance-history.php">View History</a>
            </li>
          </ul>
        </li>
        <li>
          <a href="#">
            <span class="nav-link-icon">
              <i class="fa-solid fa-car-side"></i>
            </span>
            <span style="color: #470A34;">Trips <i class="fa-solid fa-chevron-down"></i></span>
          </a>
          <ul>
            <li>
              <a href="./trips/trips-history.php">View History</a>
            </li>
            <li>
              <a href="./trips/trips-guest.html">View Guest Requests</a>
            </li>
          </ul>
        </li>
        <li>
          <a href="../reports/reports.php">
            <span class="nav-link-icon">
              <i class="fa-solid fa-file-invoice"></i>
            </span>
            <span style="color: #470A34;">Reports</span>
          </a>
        </li>
        <li>
          <a href="/index.php">
            <span class="nav-link-icon">
              <i class="fa-solid fa-right-from-bracket"></i>
            </span>
            <span style="color: #470A34;">Logout</span>
          </a>
        </li>

      </ul>
    </div>
  </div>
  <!-- ./  menu -->

  <!-- layout-wrapper -->
  <div class="layout-wrapper">
    <!-- header -->
    <div class="header">
      <div class="menu-toggle-btn">
        <!-- Menu close button for mobile devices -->
        <a href="#">
          <i class="bi bi-list"></i>
        </a>
      </div>

      <!-- Logo -->
      <a href="./fleet-manager-dashboard.html" class="logo">
        <img width="100" src="./assets/images/fleeets.png" alt="logo" />
      </a>
      <!-- ./ Logo -->

      <div class="header-bar ms-auto">
        <ul class="navbar-nav justify-content-end">
          <li class="nav-item" style="margin-right: 30px;">
            <a href="#" class="nav-link nav-link-notify" data-count="2" data-sidebar-target="#notifications">
              <i style="font-size: 20px;" class="fa-solid fa-bell"></i>
            </a>
          </li>
        </ul>
      </div>

      <!--Avatar-->
      <div class="dropdown">
        <a style="text-align: right;" href="#" class="d-flex align-items-center" data-bs-toggle="dropdown">
          <div style="margin-right: 20px;">
            <div class="fw-bold" style="color: #222222;"><?php echo $user_data['name']?></div>
            <small class="text-muted"><?php echo $user_data['role']?></small>
          </div>

          <div class="avatar me-3">
            <img src="./vehicles/assets/images/user/avatar.jpg" class="rounded-circle" alt="image" />
          </div>
        </a>
        <div class="dropdown-menu dropdown-menu-end">
          <a href="#" class="dropdown-item d-flex align-items-center">
            <i class="bi bi-person dropdown-item-icon"></i> Profile
          </a>
           
          <a href="/index.php" class="dropdown-item d-flex align-items-center text-danger" target="_blank">
            <i class="bi bi-box-arrow-right dropdown-item-icon"></i> Logout
          </a>
        </div>
      </div>

    </div>
    <!-- ./ header -->

    <!-- content -->
    <div class="content">
      <div class="row row-cols-1 row-cols-md-3 g-4">
        <div class="col-lg-5 col-md-12">
          <div class="card widget h-100">
            <div class="card-header d-flex">
              <h6 class="card-title">
                Vehicles
                <a href="#" class="bi bi-question-circle ms-1 small" data-bs-toggle="tooltip" style="color: #470A34;"
                  title="In this section, you can check how many active, inactive and out-of-service vehicles you have in your fleet."></a>
              </h6>
              <div class="d-flex gap-3 align-items-center ms-auto">
                <div class="dropdown">
                  <a href="#" data-bs-toggle="dropdown" class="btn btn-sm" aria-haspopup="true" aria-expanded="false">
                    <i class="bi bi-three-dots"></i>
                  </a>
                  <div class="dropdown-menu dropdown-menu-end">
                    <a href="#" class="dropdown-item">View Detail</a>
                    <a href="#" class="dropdown-item">Download</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="card-body">
              <div id="vehicle-freq"></div>
              <div class="row text-center mb-5 mt-4">
                <div class="col-4">
                  <div class="display-7">48%</div>
                  <div class="text-success my-2 small">
                  </div>
                  <div class="d-flex align-items-center justify-content-center">
                    <i class="bi bi-circle-fill text-orange me-2 small"></i>
                    <span class="text-muted">Active</span>
                  </div>
                </div>
                <div class="col-4">
                  <div class="display-7">30%</div>
                  <div class="text-danger my-2 small">
                  </div>
                  <div class="d-flex align-items-center justify-content-center">
                    <i class="bi bi-circle-fill text-cyan me-2 small"></i>
                    <span class="text-muted">Inactive</span>
                  </div>
                </div>
                <div class="col-4">
                  <div class="display-7">22%</div>
                  <div class="text-success my-2 small">
                  </div>
                  <div class="d-flex align-items-center justify-content-center">
                    <i class="bi bi-circle-fill text-indigo me-2 small"></i>
                    <span class="text-muted">Out of Service</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>


        <div class="col-lg-7 col-md-12">
          <div class="card widget h-100">
            <div class="card-header d-flex">
              <h6 class="card-title">
                Drivers
                <a href="#" class="bi bi-question-circle ms-1 small" data-bs-toggle="tooltip" title=""
                  data-bs-original-title="Daily orders and sales" aria-label="Daily orders and sales"></a>
              </h6>
              <div class="d-flex gap-3 align-items-center ms-auto">
                <div class="dropdown">
                  <a href="#" data-bs-toggle="dropdown" class="btn btn-sm" aria-haspopup="true" aria-expanded="false">
                    <i class="bi bi-three-dots"></i>
                  </a>
                  <div class="dropdown-menu dropdown-menu-end">
                    <a href="#" class="dropdown-item">View Detail</a>
                    <a href="#" class="dropdown-item">Download</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="card-body" style="position: relative;">
              <div id="vehicle-freq"></div>
              <div>
                <div id="apexchartsfc3noor2" class="apexcharts-canvas apexchartsfc3noor2 apexcharts-theme-light"
                  style="width: 380px; height: 247.7px;"><svg id="SvgjsSvg1061" width="380" height="247.70000000000002"
                    xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink"
                    xmlns:svgjs="http://svgjs.dev" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)"
                    style="background: transparent;">
                    <foreignObject x="0" y="0" width="380" height="247.70000000000002">
                      <div class="apexcharts-legend apexcharts-align-center apx-legend-position-right"
                        xmlns="http://www.w3.org/1999/xhtml"
                        style="height: 230px; position: absolute; left: auto; top: 20px; right: 5px;">
                        <div class="apexcharts-legend-series" rel="1" seriesname="series-1" data:collapsed="false"
                          style="margin: 2px 5px;"><span class="apexcharts-legend-marker" rel="1" data:collapsed="false"
                            style="background: #470A34 !important; color: #470A34; height: 12px; width: 12px; left: 0px; top: 0px; border-width: 0px; border-color: rgb(255, 255, 255); border-radius: 12px;"></span><span
                            class="apexcharts-legend-text" rel="1" i="0" data:default-text="series-1" data:collapsed="false"
                            style="color: rgb(55, 61, 63); font-size: 12px; font-weight: 400; font-family: 'Work Sans', sans-serif;">Active</span>
                        </div>
                        <div class="apexcharts-legend-series" rel="2" seriesname="series-2" data:collapsed="false"
                          style="margin: 2px 5px;"><span class="apexcharts-legend-marker" rel="2" data:collapsed="false"
                            style="background: #00BB90 !important; color: #00BB90; height: 12px; width: 12px; left: 0px; top: 0px; border-width: 0px; border-color: rgb(255, 255, 255); border-radius: 12px;"></span><span
                            class="apexcharts-legend-text" rel="2" i="1" data:default-text="series-2" data:collapsed="false"
                            style="color: rgb(55, 61, 63); font-size: 12px; font-weight: 400; font-family: 'Work Sans', sans-serif;">Inactive</span>
                        </div>
                      </div>
                      <style>
                        .apexcharts-legend {
                          display: flex;
                          overflow: auto;
                          padding: 0 10px;
                        }
              
                        .apexcharts-legend.apx-legend-position-bottom,
                        .apexcharts-legend.apx-legend-position-top {
                          flex-wrap: wrap
                        }
              
                        .apexcharts-legend.apx-legend-position-right,
                        .apexcharts-legend.apx-legend-position-left {
                          flex-direction: column;
                          bottom: 0;
                        }
              
                        .apexcharts-legend.apx-legend-position-bottom.apexcharts-align-left,
                        .apexcharts-legend.apx-legend-position-top.apexcharts-align-left,
                        .apexcharts-legend.apx-legend-position-right,
                        .apexcharts-legend.apx-legend-position-left {
                          justify-content: flex-start;
                        }
              
                        .apexcharts-legend.apx-legend-position-bottom.apexcharts-align-center,
                        .apexcharts-legend.apx-legend-position-top.apexcharts-align-center {
                          justify-content: center;
                        }
              
                        .apexcharts-legend.apx-legend-position-bottom.apexcharts-align-right,
                        .apexcharts-legend.apx-legend-position-top.apexcharts-align-right {
                          justify-content: flex-end;
                        }
              
                        .apexcharts-legend-series {
                          cursor: pointer;
                          line-height: normal;
                        }
              
                        .apexcharts-legend.apx-legend-position-bottom .apexcharts-legend-series,
                        .apexcharts-legend.apx-legend-position-top .apexcharts-legend-series {
                          display: flex;
                          align-items: center;
                        }
              
                        .apexcharts-legend-text {
                          position: relative;
                          font-size: 14px;
                        }
              
                        .apexcharts-legend-text *,
                        .apexcharts-legend-marker * {
                          pointer-events: none;
                        }
              
                        .apexcharts-legend-marker {
                          position: relative;
                          display: inline-block;
                          cursor: pointer;
                          margin-right: 3px;
                          border-style: solid;
                        }
              
                        .apexcharts-legend.apexcharts-align-right .apexcharts-legend-series,
                        .apexcharts-legend.apexcharts-align-left .apexcharts-legend-series {
                          display: inline-block;
                        }
              
                        .apexcharts-legend-series.apexcharts-no-click {
                          cursor: auto;
                        }
              
                        .apexcharts-legend .apexcharts-hidden-zero-series,
                        .apexcharts-legend .apexcharts-hidden-null-series {
                          display: none !important;
                        }
              
                        .apexcharts-inactive-legend {
                          opacity: 0.45;
                        }
                      </style>
                    </foreignObject>
                    <g id="SvgjsG1063" class="apexcharts-inner apexcharts-graphical" transform="translate(22, 0)">
                      <defs id="SvgjsDefs1062">
                        <clipPath id="gridRectMaskfc3noor2">
                          <rect id="SvgjsRect1064" width="251" height="269" x="-3" y="-1" rx="0" ry="0" opacity="1" stroke-width="0"
                            stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                        </clipPath>
                        <clipPath id="forecastMaskfc3noor2"></clipPath>
                        <clipPath id="nonForecastMaskfc3noor2"></clipPath>
                        <clipPath id="gridRectMarkerMaskfc3noor2">
                          <rect id="SvgjsRect1065" width="249" height="271" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0"
                            stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                        </clipPath>
                      </defs>
                      <g id="SvgjsG1066" class="apexcharts-pie">
                        <g id="SvgjsG1067" transform="translate(0, 0) scale(1)">
                          <circle id="SvgjsCircle1068" r="73.7829268292683" cx="122.5" cy="122.5" fill="transparent"></circle>
                          <g id="SvgjsG1069" class="apexcharts-slices">
                            <g id="SvgjsG1070" class="apexcharts-series apexcharts-pie-series" seriesName="series-1" rel="1"
                              data:realIndex="0">
                              <path id="SvgjsPath1071"
                                d="M 122.5 8.987804878048763 A 113.51219512195124 113.51219512195124 0 0 1 161.32345724482104 229.16657212530777 L 147.7352472091337 191.83327188145006 A 73.7829268292683 73.7829268292683 0 0 0 122.5 48.717073170731695 L 122.5 8.987804878048763 z"
                                fill="#470A34" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="2"
                                stroke-dasharray="0" class="apexcharts-pie-area apexcharts-donut-slice-0" index="0" j="0"
                                data:angle="160" data:startAngle="0" data:strokeWidth="2" data:value="44"
                                data:pathOrig="M 122.5 8.987804878048763 A 113.51219512195124 113.51219512195124 0 0 1 161.32345724482104 229.16657212530777 L 147.7352472091337 191.83327188145006 A 73.7829268292683 73.7829268292683 0 0 0 122.5 48.717073170731695 L 122.5 8.987804878048763 z"
                                stroke="#ffffff"></path>
                            </g>
                            <g id="SvgjsG1072" class="apexcharts-series apexcharts-pie-series" seriesName="series-2" rel="2"
                              data:realIndex="1">
                              <path id="SvgjsPath1073"
                                d="M 161.32345724482104 229.16657212530777 A 113.51219512195124 113.51219512195124 0 1 1 122.48018838464012 8.98780660693835 L 122.48712245001607 48.71707429450993 A 73.7829268292683 73.7829268292683 0 1 0 147.7352472091337 191.83327188145006 L 161.32345724482104 229.16657212530777 z"
                                fill="#00BB90" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="2"
                                stroke-dasharray="0" class="apexcharts-pie-area apexcharts-donut-slice-1" index="0" j="1"
                                data:angle="200" data:startAngle="160" data:strokeWidth="2" data:value="55"
                                data:pathOrig="M 161.32345724482104 229.16657212530777 A 113.51219512195124 113.51219512195124 0 1 1 122.48018838464012 8.98780660693835 L 122.48712245001607 48.71707429450993 A 73.7829268292683 73.7829268292683 0 1 0 147.7352472091337 191.83327188145006 L 161.32345724482104 229.16657212530777 z"
                                stroke="#ffffff"></path>
                            </g>
                          </g>
                        </g>
                      </g>
                      <line id="SvgjsLine1074" x1="0" y1="0" x2="245" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1"
                        stroke-linecap="butt" class="apexcharts-ycrosshairs"></line>
                      <line id="SvgjsLine1075" x1="0" y1="0" x2="245" y2="0" stroke-dasharray="0" stroke-width="0"
                        stroke-linecap="butt" class="apexcharts-ycrosshairs-hidden"></line>
                    </g>
                  </svg>
                  <div class="apexcharts-tooltip apexcharts-theme-dark">
                    <div class="apexcharts-tooltip-series-group" style="order: 1;"><span class="apexcharts-tooltip-marker"
                        style="background-color: #470A34;"></span>
                      <div class="apexcharts-tooltip-text" style="font-family: 'Work Sans', sans-serif; font-size: 12px;">
                        <div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-y-label"></span><span
                            class="apexcharts-tooltip-text-y-value"></span></div>
                        <div class="apexcharts-tooltip-goals-group"><span class="apexcharts-tooltip-text-goals-label"></span><span
                            class="apexcharts-tooltip-text-goals-value"></span></div>
                        <div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span
                            class="apexcharts-tooltip-text-z-value"></span></div>
                      </div>
                    </div>
                    <div class="apexcharts-tooltip-series-group" style="order: 2;"><span class="apexcharts-tooltip-marker"
                        style="background-color: #00BB90;"></span>
                      <div class="apexcharts-tooltip-text" style="font-family: 'Work Sans', sans-serif; font-size: 12px;">
                        <div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-y-label"></span><span
                            class="apexcharts-tooltip-text-y-value"></span></div>
                        <div class="apexcharts-tooltip-goals-group"><span class="apexcharts-tooltip-text-goals-label"></span><span
                            class="apexcharts-tooltip-text-goals-value"></span></div>
                        <div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span
                            class="apexcharts-tooltip-text-z-value"></span></div>
                      </div>
                    </div>

                  </div>
                </div>
              </div>
              <div class="row text-center mb-5 mt-4" style="margin-left: 14%;">
                <div class="col-4">
                  <div class="display-7">70%</div>
                  <div class="text-success my-2 small">
                  </div>
                  <div class="d-flex align-items-center justify-content-center">
                    <i class="bi bi-circle-fill text-orange me-2 small"></i>
                    <span class="text-muted">Active</span>
                  </div>
                </div>
                <div class="col-4">
                  <div class="display-7">30%</div>
                  <div class="text-danger my-2 small">
                  </div>
                  <div class="d-flex align-items-center justify-content-center">
                    <i class="bi bi-circle-fill text-cyan me-2 small"></i>
                    <span class="text-muted">Inactive</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!--Trips Board-->
        <div class="col-lg-7 col-md-12">
          <div class="card widget h-100">
            <div class="card-header d-flex">
              <h6 class="card-title">
                Trips
                <a href="#"  data-bs-toggle="tooltip" title="" aria-label="Daily orders and sales"></a>
              </h6>
              <div class="d-flex gap-3 align-items-center ms-auto">
                <div class="dropdown">
                  <a href="./trips/trips-history.php" class="btn btn-sm" 
                  aria-haspopup="true" aria-expanded="false"
                  style="color: #00BB90; text-decoration: underline;">
                    View All
                  </a>
                </div>
              </div>
            </div>
            <div class="card-body">
              <p style="color: #6B6B6B;">
                <i style="font-size: 20px; color: #22222264;" class="fa-solid fa-car-side"></i>
                 From: <span style="color: #222222;">Senate Building</span></p>
              <p style="color: #6B6B6B;">
                <i style="font-size: 20px; color: #22222264;" class="fa-solid fa-car"></i>
                To: <span style="color: #222222;">Faith Tabernacle</span></p>
              <p style="color: #6B6B6B;">
                <i style="font-size: 20px; color: #22222264;" class="fa-solid fa-user"></i>
                Driver: <span style="color: #222222;">Ayotunde Babalola</span></p>
              
            </div>
          </div>
        </div>

        <!--Maintenance board-->
        <div class="col-lg-7 col-md-12">
          <div class="card widget h-100">
            <div class="card-header d-flex">
              <h6 class="card-title">
                Maintenance Requests
                <a href="#"  data-bs-toggle="tooltip" title="" aria-label="Daily orders and sales"></a>
              </h6>
            </div>
            <div class="card-body">
              <p style="align-items: center; text-align: center; margin-top: 50px; color: #6B6B6B;"><img src="./maintenance/assets/images/wrenchh.png" alt=""> No new requests</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- ./ content -->

    <!-- content-footer -->
    <footer class="content-footer">
      <div>
        © 2023 Ohue Bernice
      </div>
      <div>
        <nav class="nav gap-4">
          <a href="#" class="nav-link">Licenses</a>
          <a href="#" class="nav-link">Change Log</a>
          <a href="#" class="nav-link">Get Help</a>
        </nav>
      </div>
    </footer>
    <!-- ./ content-footer -->
  </div>
  <!-- ./ layout-wrapper -->

  <script>
    window.Promise ||
      document.write(
        '<script src="https://cdn.jsdelivr.net/npm/promise-polyfill@8/dist/polyfill.min.js"><\/script>'
      )
    window.Promise ||
      document.write(
        '<script src="https://cdn.jsdelivr.net/npm/eligrey-classlist-js-polyfill@1.2.20171210/classList.min.js"><\/script>'
      )
    window.Promise ||
      document.write(
        '<script src="https://cdn.jsdelivr.net/npm/findindex_polyfill_mdn"><\/script>'
      )
  </script>

  <script>
    // Replace Math.random() with a pseudo-random number generator to get reproducible results in e2e tests
    // Based on https://gist.github.com/blixt/f17b47c62508be59987b
    var _seed = 42;
    Math.random = function () {
      _seed = _seed * 16807 % 2147483647;
      return (_seed - 1) / 2147483646;
    };
  </script>

  <!-- Bundle scripts -->
  <script src="./libs/bundle.js"></script>

  <!-- Apex chart -->
  <script src="./libs/charts/apex/apexcharts.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
  <script src="libs/charts/apex/apexcharts.min.js"></script>

  <!-- Slick -->
  <script src="./libs/slick/slick.min.js"></script>

  <!-- Examples -->
  <script src="./dist/js/examples/dashboard.js"></script>

  <!-- Main Javascript file -->
  <script src="./dist/js/app.min.js"></script>

  <!--Font awesome link-->
  <script src="https://kit.fontawesome.com/08d9b1877f.js" crossorigin="anonymous"></script>
  
</body>

</html>