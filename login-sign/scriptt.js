function togglePasswordVisibility() {
  var passwordInput = document.getElementById("password");
  var eyeIcon = document.querySelector(".toggle-password");

  if (passwordInput.type === "password") {
    passwordInput.type = "text";
    eyeIcon.classList.remove("fa-eye");
    eyeIcon.classList.add("fa-eye-slash");
  } else {
    passwordInput.type = "password";
    eyeIcon.classList.remove("fa-eye-slash");
    eyeIcon.classList.add("fa-eye");
  }
}

function redirectToDashboard() {
  var userTypeSelect = document.getElementById("user-type");
  var selectedUserType = userTypeSelect.value;

  if (selectedUserType === "fleet-manager") {
    window.location.href = "fleet-manager-dashboard.php";
  } else if (selectedUserType === "driver") {
    window.location.href = "./driver-dashboard.php";
  }
}
