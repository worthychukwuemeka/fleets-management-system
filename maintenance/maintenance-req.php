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
  <title>Fleet Management System | Maintenance - Requests</title>


  <!-- Google fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Work+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

  <!-- Bootstrap icons -->
  <link rel="stylesheet" href="../dist/icons/bootstrap-icons-1.4.0/bootstrap-icons.min.css" type="text/css" />
  <!-- Bootstrap Docs -->
  <link rel="stylesheet" href="../dist/css/bootstrap-docs.css" type="text/css" />

  <!-- Slick -->
  <link rel="stylesheet" href="../libs/slick/slick.css" type="text/css" />

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



  <!-- menu -->
  <div class="menu">
    <div class="menu-header">
      <a href="/index.php" class="menu-header-logo">
        <img src="../assets/images/fleeets.png" alt="logo" />
      </a>
      <a href="/index.php" class="btn btn-sm menu-close-btn">
        <i class="bi bi-x"></i>
      </a>
    </div>
    <div class="menu-body">

      <ul id="navLinks">
        <li>
          <a href="./fleet-manager-dashboard.html">
            <span class="nav-link-icon">
              <i class="fa-solid fa-gauge"></i>
            </span>
            <span style="color: #470A34;">Dashboard</span>
          </a>
        </li>

        <li>
          <a href="../vehicles/vehicles.html">
            <span class="nav-link-icon">
              <i class="fa-solid fa-car"></i>
            </span>
            <span style="color: #470A34;">Vehicles</span>
          </a>

        </li>
        <li>
          <a href="../drivers/drivers.html">
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
              <a class="active" style="color: #470A34;" href="../maintenance/maintenance-req.html">View Requests</a>
            </li>
            <li>
              <a href="../maintenance/maintenance-history.php" style="color: #470A34;">View History</a>
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
              <a href="../trips/trips-history.php">View History</a>
            </li>
            <li>
              <a href="../trips/trips-guest.html">View Guest Requests</a>
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
        <img width="100" src="../assets/images/fleeets.png" alt="logo" />
      </a>
      <!-- ./ Logo -->
      <div class="page-title">Maintenance Requests</div>

      <div class="header-bar ms-auto">
        <ul class="navbar-nav justify-content-end">
          <li class="nav-item">
            <a href="#" class="nav-link nav-link-notify" data-count="2" data-sidebar-target="#notifications">
              <i style="font-size: 20px;" class="fa-solid fa-bell"></i>
            </a>
          </li>

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
              <a href="#" class="dropdown-item d-flex align-items-center" data-sidebar-target="#settings">
                <i class="bi bi-gear dropdown-item-icon"></i> Settings
              </a>
            </div>
          </div>

        </ul>
      </div>
      <!-- Header mobile buttons -->
      <div class="header-mobile-buttons">
        <a href="#" class="search-bar-btn">
          <i class="bi bi-search"></i>
        </a>
        <a href="#" class="actions-btn">
          <i class="bi bi-three-dots"></i>
        </a>
      </div>
      <!-- ./ Header mobile buttons -->
    </div>
    <!-- ./ header -->

    <!-- content -->
    <div class="content">
      <div class="mb-4">
        <div class="search-box">
          <input type="text" id="searchInput" class="search-input" placeholder="Search...">
          <button onclick="search()" class="search-button"><i class="fas fa-search"></i></button>
        </div>
      </div>
      <div class="card">
        <div class="card-body">
          <div class="d-md-flex gap-4 align-items-center">
            <div class="d-none d-md-flex">
              <img src="../maintenance/assets/images/wrench.svg" alt="">
              <h1 style="display: flex;
              width: 94.875px;
              height: 23.918px;
              flex-direction: column;
              flex-shrink: 0; 
              color: #222;
              font-size: 20px;
              font-weight: 700;
              margin-left: 16px;
              margin-bottom: 30px;">50 <span style="display: flex;
              width: 137px;
              height: 17px;
              flex-direction: column;
              flex-shrink: 0;
              color: #6B6B6B;
              font-size: 14px;
              font-weight: 400;">Total Requests</span></h1>

              <img src="../maintenance/assets/images/wrench.svg" alt="" style="margin-left: 90px;">
              <h1 style="display: flex;
width: 94.875px;
height: 23.918px;
flex-direction: column;
flex-shrink: 0; 
color: #222;
font-size: 20px;
font-weight: 700;
margin-left: 16px;
margin-bottom: 30px;">50 <span style="display: flex;
width: 137px;
height: 17px;
flex-direction: column;
flex-shrink: 0;
color: #6B6B6B;
font-size: 14px;
font-weight: 400;">Opened Requests</span></h1>

              <img src="../maintenance/assets/images/wrench.svg" alt="" style="margin-left: 90px;">
              <h1 style="display: flex;
width: 94.875px;
height: 23.918px;
flex-direction: column;
flex-shrink: 0; 
color: #222;
font-size: 20px;
font-weight: 700;
margin-left: 16px;
margin-bottom: 30px;">25 <span style="display: flex;
width: 137px;
height: 17px;
flex-direction: column;
flex-shrink: 0;
color: #6B6B6B;
font-size: 14px;
font-weight: 400;">Approved Requests</span></h1>

              <img src="../maintenance/assets/images/wrench.svg" alt="" style="margin-left: 90px;">
              <h1 style="display: flex;
width: 94.875px;
height: 23.918px;
flex-direction: column;
flex-shrink: 0; 
color: #222;
font-size: 20px;
font-weight: 700;
margin-left: 16px;
margin-bottom: 30px;">25 <span style="display: flex;
width: 137px;
height: 17px;
flex-direction: column;
flex-shrink: 0;
color: #6B6B6B;
font-size: 14px;
font-weight: 400;">Rejected Requests</span></h1>
            </div>
          </div>


        </div>
      </div>

      <div class="table-responsive">
        <table id="drivers" class="table table-custom table-lg">
          <thead>

          </thead>
          <tbody id="requestTableBody">
            <tr id="rowToBeRemoved">
              <td style="display: grid; align-items: center;">
                <figure class="avatar me-3">
                  <img src="../maintenance/assets/images/info-circle.svg" class="rounded-circle" style="margin-top: 65px;" alt="avatar" />
                </figure>
                <h1 style="display: flex; width: 94.875px; height: 23.918px; flex-direction: column; flex-shrink: 0; color: #222; font-size: 20px; font-weight: 500; margin-left: 56px; margin-bottom: 56px;">
                  Brake Light
                  <span style="display: flex; width: 137px; height: 17px; flex-direction: column; flex-shrink: 0; color: #6B6B6B; font-size: 14px; font-weight: 400;">123CUF Toyota Corolla</span>
                </h1>
                <p style="margin-bottom: 15px; line-height: 150%;">Description: Driver side brake light is out</p>
              </td>
              <td style="color: #222; font-size: 16px; line-height: 142.023%; gap: -16px;">
                Reported 2 days ago by Ayotunde Babalola
              </td>
              <td>
                <button type="button" style="display: flex; width: 111px; padding: 12px 39px; justify-content: center; align-items: center; gap: 8px; background-color: #470a34; border-color: #470a34;" class="btn btn-secondary" onclick="approveRequest()">Approve</button>
              </td>
              <td>
                <button type="button" style="background-color: #470a34; border-color: #470a34;" class="btn btn-secondary" onclick="rejectRequest()">Reject</button>
              </td>
            </tr>

            <tr>
              <td style="display: grid;
              align-items: center;">
                <figure class="avatar me-3">
                  <img src="../maintenance/assets/images/info-circle.svg" class="rounded-circle" style="margin-top: 65px;" alt="avatar" />
                </figure>
                <h1 style="display: flex;
              width: 94.875px;
              height: 23.918px;
              flex-direction: column;
              flex-shrink: 0; 
              color: #222;
              font-size: 20px;
              font-weight: 500;
              margin-left: 56px;
              margin-bottom: 56px;">Brake Light <span style="display: flex;
              width: 137px;
              height: 17px;
              flex-direction: column;
              flex-shrink: 0;
              color: #6B6B6B;
              font-size: 14px;
              font-weight: 400;">123CUF Toyota Corolla</span></h1>
                <p style="margin-bottom: 15px;
                line-height: 150%;">Description: Driver side brake light is out</p>
              </td>
              <td style="color: #222;
              font-size: 16px;
              line-height: 142.023%;
              gap: -16px;">
                Reported 2 days ago by Ayotunde Babalola
              </td>

              <td>
                <button type="button" style="
                display: flex;
width: 111px;
padding: 12px 39px;
justify-content: center;
align-items: center;
gap: 8px;
background-color: #470a34;
border-color: #470a34;" class="btn btn-secondary" onclick="approveRequest()">Approve</button>
              </td>
              <td>
                <button type="button" style="background-color: #470a34;
border-color: #470a34;" class="btn btn-secondary" onclick="rejectRequest()" onclick="rejectRequest('row1')">Reject</button>
              </td>
            </tr>

            <tr>
              <td style="display: grid;
              align-items: center;">
                <figure class="avatar me-3">
                  <img src="../maintenance/assets/images/info-circle.svg" class="rounded-circle" style="margin-top: 65px;" alt="avatar" />
                </figure>
                <h1 style="display: flex;
              width: 94.875px;
              height: 23.918px;
              flex-direction: column;
              flex-shrink: 0; 
              color: #222;
              font-size: 20px;
              font-weight: 500;
              margin-left: 56px;
              margin-bottom: 56px;">Brake Light <span style="display: flex;
              width: 137px;
              height: 17px;
              flex-direction: column;
              flex-shrink: 0;
              color: #6B6B6B;
              font-size: 14px;
              font-weight: 400;">123CUF Toyota Corolla</span></h1>
                <p style="margin-bottom: 15px;
                line-height: 150%;">Description: Driver side brake light is out</p>
              </td>
              <td style="color: #222;
              font-size: 16px;
              line-height: 142.023%;
              gap: -16px;">
                Reported 2 days ago by Ayotunde Babalola
              </td>

              <td>
                <button type="button" style="
                display: flex;
width: 111px;
padding: 12px 39px;
justify-content: center;
align-items: center;
gap: 8px; background-color: #470a34;
border-color: #470a34;" class="btn btn-secondary" onclick="approveRequest()">Approve</button>
              </td>
              <td>
                <button type="button" style="background-color: #470a34;
border-color: #470a34;" class="btn btn-secondary" onclick="rejectRequest()">Reject</button>
              </td>
            </tr>

          </tbody>
        </table>
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

  <!-- Bundle scripts -->
  <script src="../libs/bundle.js"></script>

  <!-- Examples -->
  <script src="../dist/js/examples/users.js"></script>

  <!-- Main Javascript file -->
  <script src="../dist/js/app.min.js"></script>

  <!--Font awesome link-->
  <script src="https://kit.fontawesome.com/08d9b1877f.js" crossorigin="anonymous"></script>

  <!-- Include jQuery library -->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

  <!-- Include jQuery library -->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>


  <!-- Include jQuery library -->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

  <script>
    function approveRequest() {
      // Display alert message
      alert("Request Approved!");
    }

    function removeItem() {
      // Remove the row from the table
      $(this).closest("tr").remove();
    }

    function rejectRequest() {
      // Display alert message
      alert("Request Rejected!");

      // Get a reference to the table body
      var tableBody = document.getElementById("requestTableBody");

      // Find the row to be removed
      var rowToRemove = document.getElementById("rowToBeRemoved");

      // Remove the row from the table
      tableBody.removeChild(rowToRemove);

      // Send AJAX request to the server
      $.ajax({
        url: "process.php", // Replace with the actual PHP script URL
        method: "POST",
        data: {
          action: "reject"
        }, // Include any necessary data for processing
        success: function(response) {
          // Process the server response
          if (response === "success") {
            console.log("Request rejected successfully!");
          } else {
            console.log("An error occurred while rejecting the request.");
          }
        },
        error: function(xhr, status, error) {
          // Handle any errors
          console.log(error);
        }
      });
    }
  </script>


</body>

</html>