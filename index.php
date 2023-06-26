<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fleet Management System - Login</title>

    <!--Fonts used: Geologica & Joesfin Sans-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Geologica:wght@100;200;300;400;500;600;700;800;900&family=Josefin+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700&display=swap"
        rel="stylesheet">

    <!--Stylesheets-->
    <link rel="stylesheet" href="./login-sign/style.css">

</head>

<body>
<div class="container">
  <img src="./assets/images/cu-logoo.png" alt="Logo" class="logo" width="110" height="100">
  <form class="login-form" id="registrationForm">
  <h4>Welcome to CU Fleet Management System</h4>
    <h1>Log in</h1>
    <input type="text" placeholder="Driver ID" id="driverID" required>
    <div class="password-input"> 
      <input type="password" id="password" placeholder="Password" required>
      <i class="toggle-password fas fa-eye" onclick="togglePasswordVisibility()"></i>
    </div>
    <div class="user-type">
      <select id="user-type" required>
        <option value="">Account Type</option>
        <option value="fleet-manager">Fleet Manager</option>
        <option value="driver">Driver</option>
      </select>
    </div>
    <a href="#" class="forgot-password">Forgot Password?</a>
    <a class="btn" style="text-decoration: none;" onclick="redirectToDashboard()" role="button">Login</a>
    <a class="btn" style="text-decoration: none; background: transparent; border: 2px solid #470A34; color:#470A34;" onclick="redirectToGuestPage()" role="button">Continue as Guest</a>
  </form>
</div>

    <!--Font awesome icons link-->
    <script src="https://kit.fontawesome.com/08d9b1877f.js" crossorigin="anonymous"></script>

    <!--Password eye toggler & Page redirect functions-->
    <script src="./login-sign/script.js"></script>
</body>

</html>