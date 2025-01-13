<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="author" content="Yinka Enoch Adedokun">
  <title>Login Page</title>
  <link rel="stylesheet" type="text/css" href="assets/bootstrap-4.6.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>
<style type="text/css">
  * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Poppins', sans-serif;
  }
  html, body {
    display: grid;
    height: 100%;
    width: 100%;
    place-items: center;
    background: linear-gradient(135deg, #6a11cb, #2575fc);
  }
  .wrapper {
    width: 400px;
    background: #fff;
    border-radius: 15px;
    box-shadow: 0px 15px 25px rgba(0, 0, 0, 0.2);
    padding: 30px;
  }
  .wrapper .title {
    font-size: 30px;
    font-weight: bold;
    text-align: center;
    margin-bottom: 20px;
    color: #6a11cb;
  }
  .wrapper .field {
    margin-top: 20px;
    position: relative;
  }
  .wrapper .field input {
    width: 100%;
    padding: 10px 20px;
    font-size: 16px;
    border: 1px solid #ddd;
    border-radius: 25px;
    outline: none;
    transition: 0.3s;
  }
  .wrapper .field input:focus {
    border-color: #6a11cb;
    box-shadow: 0 0 5px rgba(106, 17, 203, 0.5);
  }
  .wrapper .field label {
    position: absolute;
    top: 50%;
    left: 20px;
    transform: translateY(-50%);
    color: #aaa;
    pointer-events: none;
    transition: 0.3s;
  }
  .wrapper .field input:focus ~ label,
  .wrapper .field input:not(:placeholder-shown) ~ label {
    top: 0;
    font-size: 14px;
    color: #6a11cb;
  }
  .wrapper .field i {
    position: absolute;
    top: 50%;
    right: 20px;
    transform: translateY(-50%);
    color: #aaa;
  }
  .wrapper .checkbox {
    display: flex;
    align-items: center;
    margin: 15px 0;
  }
  .wrapper .checkbox input {
    margin-right: 10px;
  }
  .wrapper .checkbox label {
    font-size: 14px;
    color: #555;
  }
  .wrapper .field input {
  width: 100%;
  padding: 10px 20px;
  font-size: 16px;
  border: none;
  border-bottom: 2px solid #ddd; /* Initial bottom border */
  outline: none;
  transition: 0.3s;
  background: transparent; /* Remove background color for cleaner look */
}

.wrapper .field input:focus {
  border-bottom: 2px solid #6a11cb; /* Highlight the bottom border on focus */
  box-shadow: none; /* Remove the outer glow effect */
}

.wrapper .field label {
  position: absolute;
  top: 50%;
  left: 20px;
  transform: translateY(-50%);
  color: #aaa;
  pointer-events: none;
  transition: 0.3s;
}

.wrapper .field input:focus ~ label,
.wrapper .field input:not(:placeholder-shown) ~ label {
  top: -10px;
  font-size: 14px;
  color: #6a11cb;
}

  .wrapper .btn {
    width: 100%;
    background: linear-gradient(135deg, #6a11cb, #2575fc);
    border: none;
    padding: 10px 0;
    border-radius: 25px;
    color: #fff;
    font-size: 18px;
    font-weight: bold;
    cursor: pointer;
    transition: 0.3s;
  }
  .wrapper .btn:hover {
    background: linear-gradient(135deg, #2575fc, #6a11cb);
  }
  .wrapper .signup-link {
    text-align: center;
    margin-top: 15px;
  }
  .wrapper .signup-link a {
    text-decoration: none;
    color: #6a11cb;
    font-weight: bold;
  }
  .wrapper .signup-link a:hover {
    text-decoration: underline;
  }
</style>
<body>
<div class="wrapper">
    <div class="title">Login</div>
    <form action="login_action.php" method="post" onsubmit="return validateLoginForm();">
      <div class="field">
        <input type="text" id="lemail" name="email" required placeholder=" ">
        <label>Email Address</label>
        <i class="fas fa-envelope"></i>
      </div>
      <div class="field">
        <input type="password" id="lpassword" name="pass" required placeholder=" ">
        <label>Password</label>
        <i class="fas fa-lock" onclick="togglePassword()" style="cursor: pointer;"></i><!-- Lock icon clickable -->
        <p id="message" style="display: none;">Password is <span id="strength"></span></p><!-- Password strength message -->
      </div>
      <div class="checkbox">
        <input type="checkbox" id="remember-me">
        <label for="remember-me">Remember me</label>
      </div>
      <input type="submit" value="Login" class="btn">
      <div class="signup-link">
        Not a member? <a href="registration.php">Signup now</a>
      </div>
      <div class="signup-link">
        <a href="forgot-password.php">Forgot Password</a>
      </div>
    </form>
  </div>

  <script>
    var pass = document.getElementById("lpassword");
    var msg = document.getElementById("message");
    var str = document.getElementById("strength");
    var lockIcon = document.querySelector(".field i.fa-lock");

    pass.addEventListener('input', () => {
      if (pass.value.length > 0) {
        msg.style.display = "block"; // Show the password strength message
      } else {
        msg.style.display = "none"; // Hide the message if password is empty
      }

      if (pass.value.length < 4) {
        str.innerHTML = "weak";
        pass.style.borderColor = "red";
        msg.style.color = "red";
        lockIcon.style.transform = "translateY(-20px)";
      } else if (pass.value.length >= 4 && pass.value.length < 8) {
        str.innerHTML = "medium";
        pass.style.borderColor = "blue";
        msg.style.color = "blue";
        lockIcon.style.transform = "translateY(-20px)";
      } else if (pass.value.length >= 8) {
        str.innerHTML = "strong";
        pass.style.borderColor = "green";
        msg.style.color = "green";
        lockIcon.style.transform = "translateY(-20px)";
      }
    });

    // Toggle password visibility
    function togglePassword() {
      if (pass.type === "password") {
        pass.type = "text"; // Show password
        lockIcon.classList.remove("fa-lock");
        lockIcon.classList.add("fa-unlock"); // Change lock icon to unlocked
      } else {
        pass.type = "password"; // Hide password
        lockIcon.classList.remove("fa-unlock");
        lockIcon.classList.add("fa-lock"); // Change back to lock icon
      }
    }
  </script>

  <script type="text/javascript" src="assets/js/jquery-3.7.0.min.js"></script>
  <script type="text/javascript" src="assets/bootstrap-4.6.2/js/bootstrap.bundle.min.js"></script>
  <script type="text/javascript" src="assets/bootstrap-4.6.2/js/bootstrap.min.js"></script>
</body>
</html>
