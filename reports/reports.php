<?php

include("../php_DB/connect.php");
include("../php_DB/profiles.php");

$id = 1111;
$type = new Profiles();
$data_type = $type->get_user_table($id);

if (is_array($data_type)) {
  $user_data = $data_type[0];
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <title>Fleet Management System | Reports</title>


  <!-- Google fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Work+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

  <!-- Bootstrap icons -->
  <link rel="stylesheet" href="./vehicles/dist/icons/bootstrap-icons-1.4.0/bootstrap-icons.min.css" type="text/css" />
  <!-- Bootstrap Docs -->
  <link rel="stylesheet" href="./dist/css/bootstrap-docs.css" type="text/css" />

  <!-- Slick -->
  <link rel="stylesheet" href="./libs/slick/slick.css" type="text/css" />

  <!-- Main style file -->
  <link rel="stylesheet" href="../dist/css/app.min.css" type="text/css" />

  <!--Hidden bootstrap style elements (Hid it because it is creating a pop up on the webpage that is not neccessary)-->
  <style>
    .item-action-buttons {
      display: none;
      visibility: hidden;
    }

    .search-form {
      display: inline-block;
      border-radius: 20px;
      padding: 10px;
      background-color: #f1f1f1;
    }

    .search-input {
      width: 200px;
      height: 40px;
      border: none;
      padding: 8px;
      border-radius: 20px 0 0 20px;
    }

    .search-button {
      width: 80px;
      background-color: #470A34;
      color: #fff;
      border: none;
      border-radius: 0 20px 20px 0;
      padding: 10px;
      cursor: pointer;
    }

    .search-button:hover {
      background-color: #845C78;
    }
  </style>

</head>

<body>
  <!-- preloader -->
  <div class="preloader">
    <img src="../assets/images/fleeets.png" alt="logo" />
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
                    Driver #1445D is not active.
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
        <img src="./assets/fleeet.png" alt="logo" />
      </a>
      <a href="/index.php" class="btn btn-sm menu-close-btn">
        <i class="bi bi-x"></i>
      </a>
    </div>
    <div class="menu-body">

      <ul id="navLinks">
        <li>
          <a href="../fleet-manager-dashboard.php">
            <span class="nav-link-icon">
              <i class="fa-solid fa-gauge"></i>
            </span>
            <span style="color: #470A34;">Dashboard</span>
          </a>
        </li>

        <li>
          <a href="../vehicles/vehicles.php">
            <span class="nav-link-icon">
              <i class="fa-solid fa-car"></i>
            </span>
            <span style="color: #470A34;">Vehicles</span>
          </a>

        </li>
        <li>
          <a href="../drivers/drivers.php">
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
            <span style="color: #470A34;">Maintenance<i class="fa-solid fa-chevron-down"></i> </span>
          </a>
          <ul>
            <li>
              <a href="../maintenance/maintenance-req.html">View Requests</a>
            </li>
            <li>
              <a href=".../maintenance/maintenance-history.php">View History</a>
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
              <a href="../trips/trips-guest.php">View Requests</a>
            </li>
            <li>
              <a href="../trips/trips-history.php">View History</a>
            </li>
          </ul>
        </li>
        <li>
          <a class="active" href="../reports/reports.php">
            <span class="nav-link-icon">
              <i class="fa-solid fa-file-invoice"></i>
            </span>
            <span style="color: #470A34;">Reports</span>
          </a>
        </li>
        <li>
          <a href="../index.php">
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
      <a href="/index.php" class="logo">
        <img width="100" src="../assets/fleeets.png" alt="logo" />
      </a>
      <!-- ./ Logo -->

      <div class="page-title">Reports</div>

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
            <div class="fw-bold" style="color: #222222;"><?php echo $user_data["name"] ?></div>
            <small class="text-muted"><?php echo $user_data["role"] ?></small>
          </div>

          <div class="avatar me-3">
            <img src="../vehicles/assets/images/user/avatar.jpg" class="rounded-circle" alt="image" />
          </div>
        </a>
        <div class="dropdown-menu dropdown-menu-end">
          <a href="#" class="dropdown-item d-flex align-items-center">
            <i class="bi bi-person dropdown-item-icon"></i> Profile
          </a>

        </div>
      </div>

    </div>
    <!-- ./ header -->

    <!-- content -->
    <div class="content">
      <div class="mb-4">
        <div class="search-box">
          <input type="text" id="searchInput" class="search-input" placeholder="Search...">
          <button onclick="search()" class="search-button"><i class="fas fa-search"></i></button>

          <div class="dropdown ms-auto">
            <a href="#" class="btn btn-primary" aria-haspopup="true" aria-expanded="false" style="margin-left: 485px;">
              Generate Report</a>
          </div>
        </div>


      </div>




    </div>

    <div class="table-responsive">
      <table class="table table-custom table-lg mb-0" id="Vehicles">
        <thead>
          <tr>
            <th>Name</th>
            <th>Date</th>
            <th>Actions</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>
              <a href="#" style="color: #292D32;">
              <i class="fa-solid fa-file"></i>
                Document 1
              </a>
            </td>
            <td>23/06</td>
            <td>
              <i style="display: flex;
                  font-size: 25px;
                  color: #BB0000;
                  flex-direction: row;
                  justify-content: flex-start;
                  align-items: center;
                  padding: 0px;
                  gap: 5px;
                  cursor: pointer;" class="fa-solid fa-trash-can"></i>
            </td>
          </tr>

          <tr>
            <td>
              <a href="#" style="color: #292D32;">
              <i class="fa-solid fa-file"></i>
                Document 2
              </a>
            </td>
            <td>23/06</td>
            <td>
              <i style="display: flex;
                  font-size: 25px;
                  color: #BB0000;
                  flex-direction: row;
                  justify-content: flex-start;
                  align-items: center;
                  padding: 0px;
                  gap: 5px;
                  cursor: pointer;" class="fa-solid fa-trash-can"></i>
            </td>
          </tr>

          <tr>
            <td>
              <a href="#" style="color: #292D32;">
              <i class="fa-solid fa-file"></i>
                Document 3
              </a>
            </td>
            <td>23/06</td>
            <td>
              <i style="display: flex;
                  font-size: 25px;
                  color: #BB0000;
                  flex-direction: row;
                  justify-content: flex-start;
                  align-items: center;
                  padding: 0px;
                  gap: 5px;
                  cursor: pointer;" class="fa-solid fa-trash-can"></i>
            </td>
          </tr>

          <tr>
            <td>
              <a href="#" style="color: #292D32;">
              <i class="fa-solid fa-file"></i>
                Document 4
              </a>
            </td>
            <td>23/06</td>
            <td>
              <i style="display: flex;
                  font-size: 25px;
                  color: #BB0000;
                  flex-direction: row;
                  justify-content: flex-start;
                  align-items: center;
                  padding: 0px;
                  gap: 5px;
                  cursor: pointer;" class="fa-solid fa-trash-can"></i>
            </td>
          </tr>

          <tr>
            <td>
              <a href="#" style="color: #292D32;">
              <i class="fa-solid fa-file"></i>
                Document 5
              </a>
            </td>
            <td>23/06</td>
            <td>
              <i style="display: flex;
                  font-size: 25px;
                  color: #BB0000;
                  flex-direction: row;
                  justify-content: flex-start;
                  align-items: center;
                  padding: 0px;
                  gap: 5px;
                  cursor: pointer;" class="fa-solid fa-trash-can"></i>
            </td>
          </tr>

          <tr>
            <td>
              <a href="#" style="color: #292D32;">
              <i class="fa-solid fa-file"></i>
                Document 6
              </a>
            </td>
            <td>23/06</td>
            <td>
              <i style="display: flex;
                  font-size: 25px;
                  color: #BB0000;
                  flex-direction: row;
                  justify-content: flex-start;
                  align-items: center;
                  padding: 0px;
                  gap: 5px;
                  cursor: pointer;" class="fa-solid fa-trash-can"></i>
            </td>
          </tr>

          <tr>
            <td>
              <a href="#" style="color: #292D32;">
              <i class="fa-solid fa-file"></i>
                Document 7
              </a>
            </td>
            <td>23/06</td>
            <td>
              <i style="display: flex;
                  font-size: 25px;
                  color: #BB0000;
                  flex-direction: row;
                  justify-content: flex-start;
                  align-items: center;
                  padding: 0px;
                  gap: 5px;
                  cursor: pointer;" class="fa-solid fa-trash-can"></i>
            </td>
          </tr>
        </tbody>
      </table>
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

  <!-- Bundle scripts -->
  <script src="../libs/bundle.js"></script>

  <!-- Examples -->
  <script src="../dist/js/examples/orders.js"></script>

  <!-- Main Javascript file -->
  <script src="../dist/js/app.min.js"></script>

  <!--Font awesome link-->
  <script src="https://kit.fontawesome.com/08d9b1877f.js" crossorigin="anonymous"></script>

  <!--JQuery link-->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

</body>

</html>