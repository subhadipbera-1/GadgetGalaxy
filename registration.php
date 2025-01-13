<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Registration</title>

  <link rel="stylesheet" href="assets/fontawesome-free-6.6.0-web/css/all.min.css">
  <link rel="stylesheet" href="assets/bootstrap-4.6.2/css/bootstrap.min.css">
  
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: "Poppins", sans-serif;
    }

    body {
      min-height: 100vh;
      display: flex;
      align-items: center;
      justify-content: center;
      background: linear-gradient(to right, #00c6ff, #0072ff); /* Soft gradient background */
      padding: 20px;
      color: #fff;
    }

    .container {
      max-width: 600px;
      width: 100%;
      background: #fff;
      color: #333;
      border-radius: 20px;
      box-shadow: 0 6px 15px rgba(0, 0, 0, 0.1);
      padding: 40px;
    }

    .container header {
      font-size: 2rem;
      font-weight: 600;
      text-align: center;
      margin-bottom: 25px;
      color: #0072ff;
    }

    .form .input-box {
      margin-bottom: 25px;
      position: relative;
    }

    .input-box label {
      font-weight: 500;
      margin-bottom: 8px;
      display: block;
      color: #333;
    }

    .form input, .form select {
      width: 100%;
      height: 50px;
      border-radius: 15px;
      border: 1px solid #ddd;
      padding: 0 20px;
      font-size: 1rem;
      color: #555;
      transition: 0.3s;
      background-color: #f9f9f9;
    }

    .form input:focus {
      border-color: #0072ff;
      box-shadow: 0 0 10px rgba(0, 114, 255, 0.3);
      background-color: #fff;
    }

    .form button {
      width: 100%;
      height: 50px;
      border: none;
      border-radius: 15px;
      background: #0072ff;
      color: #fff;
      font-size: 1.1rem;
      font-weight: 600;
      cursor: pointer;
      transition: 0.3s;
    }

    .form button:hover {
      background: #005bb5;
    }

    .form span.text-danger {
      color: #e63946;
      font-size: 0.9rem;
    }

    .signup-link {
      text-align: center;
      margin-top: 20px;
    }

    .signup-link a {
      text-decoration: none;
      color: #0072ff;
      font-weight: bold;
    }

    .signup-link a:hover {
      text-decoration: underline;
    }

    /* Lock Icon Styling */
    .input-box .lock-icon {
      position: absolute;
      right: 15px;
      top: 50%;
      transform: translateY(-50%);
      color: #aaa;
    }

    /* Adjusting input fields to fit lock icon */
    .input-box input {
      padding-right: 40px; /* Space for the lock icon */
    }

    #message {
      display: none;
      font-size: 0.9rem;
      margin-top: 10px;
    }

    #strength {
      font-weight: bold;
    }

    .password-mismatch {
      color: red;
      display: none;
    }

    /* Responsiveness */
    @media (max-width: 768px) {
      .container {
        padding: 30px;
      }

      .container header {
        font-size: 1.7rem;
      }

      .form input {
        font-size: 0.9rem;
      }
    }
  </style>
</head>
<body>

  <section class="container">
    <header>Registration</header>
    <form action="registration_action.php" class="form" method="post" onsubmit="return validateRegistrationForm();" enctype="multipart/form-data">
      <div class="input-box">
        <label>Full Name <span class="text-danger">*</span></label>
        <input type="text" placeholder="Enter full name" id="rname" name="name" required />
      </div>
      <div class="input-box">
        <label>Email Address <span class="text-danger">*</span></label>
        <input type="email" placeholder="Enter email address" id="remail" name="email" required />
      </div>
      <div class="input-box">
        <label>Password <span class="text-danger">*</span></label>
        <input type="password" placeholder="Password" id="rpassword" name="upass" required />
        <i class="fas fa-lock lock-icon"></i>
        <div id="message">
          <span>Password strength: </span><span id="strength">weak</span>
        </div>
      </div>
      <div class="input-box">
        <label>Confirm Password <span class="text-danger">*</span></label>
        <input type="password" placeholder="Re-enter Password" id="rcpassword" name="urepass" required />
        <i class="fas fa-lock lock-icon"></i>
        <div id="passwordMismatch" class="password-mismatch">Passwords do not match!</div>
      </div>
      <div class="input-box">
        <label>Profile Picture <span class="text-danger">(Optional)</span></label>
        <input type="file" id="uimage" name="image" />
      </div>
      <button type="submit">Submit</button>

      <div class="signup-link">
        Already a member? <a href="login.php">Login now</a>
      </div>
    </form>
  </section>

  <script>
    function validateRegistrationForm() {
      let name = document.getElementById("rname").value;
      let email = document.getElementById("remail").value;
      let password = document.getElementById("rpassword").value;
      let confirmPassword = document.getElementById("rcpassword").value;
      let emailPattern = /^[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,}$/;

      if (name.trim() === "") {
        alert("Please enter your full name.");
        return false;
      }
      if (!emailPattern.test(email)) {
        alert("Please enter a valid email address.");
        return false;
      }
      if (password.length < 6) {
        alert("Password must be at least 6 characters long.");
        return false;
      }
      if (password !== confirmPassword) {
        alert("Passwords do not match.");
        return false;
      }
      return true;
    }

    // Password Strength Script
    var pass = document.getElementById("rpassword");
    var msg = document.getElementById("message");
    var str = document.getElementById("strength");
    var confirmPass = document.getElementById("rcpassword");
    var mismatchMsg = document.getElementById("passwordMismatch");

    pass.addEventListener('input', () => {
      if (pass.value.length > 0) {
        msg.style.display = "block";
      } else {
        msg.style.display = "none";
      }
      if (pass.value.length < 4) {
        str.innerHTML = "weak";
        pass.style.borderColor = "red";
        msg.style.color = "red";
      } else if (pass.value.length >= 4 && pass.value.length < 8) {
        str.innerHTML = "medium";
        pass.style.borderColor = "blue";
        msg.style.color = "blue";
      } else if (pass.value.length >= 8) {
        str.innerHTML = "strong";
        pass.style.borderColor = "green";
        msg.style.color = "green";
      }
    });

    confirmPass.addEventListener('input', () => {
      if (pass.value !== confirmPass.value) {
        mismatchMsg.style.display = "block";
      } else {
        mismatchMsg.style.display = "none";
      }
    });
  </script>

  <script type="text/javascript" src="assets/js/jquery-3.7.0.min.js"></script>
  <script type="text/javascript" src="assets/bootstrap-4.6.2/js/bootstrap.bundle.min.js"></script>  
  <script type="text/javascript" src="assets/bootstrap-4.6.2/js/bootstrap.min.js"></script>
</body>
</html>
