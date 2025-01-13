<html>
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Yinka Enoch Adedokun">
    <title>Login Page</title>
    <!-- <link rel="stylesheet" type="text/css" href="Assests/css/all.min.css" >
    <link rel="stylesheet" type="text/css" href="Assests/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="Assests/css/login.css"> -->
    <link rel="stylesheet" type="text/css" href="assets/bootstrap-4.6.2/css/bootstrap.min.css">
  </head>
  <html>

  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: 'Poppins', sans-serif;
    }

    html, body {
      height: 100%;
      display: flex;
      justify-content: center;
      align-items: center;
      background: #eef2f3;
      background: linear-gradient(120deg, #89f7fe, #66a6ff);
    }

    .wrapper {
      width: 400px;
      background: white;
      border-radius: 10px;
      box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
      overflow: hidden;
    }

    .wrapper .title {
      background: linear-gradient(120deg, #89f7fe, #66a6ff);
      color: white;
      font-size: 28px;
      text-align: center;
      padding: 20px 0;
      font-weight: 600;
    }

    .wrapper form {
      padding: 20px 30px;
    }

    .wrapper .field {
      margin-bottom: 20px;
      position: relative;
    }

    .wrapper .field input {
      width: 100%;
      padding: 12px 15px;
      border: 1px solid #ddd;
      border-radius: 5px;
      font-size: 16px;
      transition: 0.3s;
    }

    .wrapper .field input:focus {
      border-color: #66a6ff;
      box-shadow: 0 0 5px rgba(102, 166, 255, 0.5);
    }

    .wrapper .field label {
      position: absolute;
      top: 50%;
      left: 15px;
      transform: translateY(-50%);
      background: white;
      padding: 0 5px;
      font-size: 14px;
      color: #888;
      pointer-events: none;
      transition: 0.3s;
    }

    .wrapper .field input:focus ~ label,
    .wrapper .field input:not(:placeholder-shown) ~ label {
      top: -5px;
      font-size: 12px;
      color: #66a6ff;
    }

    .wrapper .field input[type="submit"] {
      background: linear-gradient(120deg, #89f7fe, #66a6ff);
      color: white;
      border: none;
      cursor: pointer;
      font-size: 16px;
      font-weight: 600;
      transition: 0.3s;
    }

    .wrapper .field input[type="submit"]:hover {
      background: linear-gradient(120deg, #66a6ff, #89f7fe);
    }

    .content {
      display: flex;
      justify-content: space-between;
      align-items: center;
      font-size: 14px;
    }

    .content .checkbox label {
      margin-left: 5px;
    }

    .content a {
      color: #66a6ff;
      text-decoration: none;
    }

    .content a:hover {
      text-decoration: underline;
    }

    .signup-link {
      text-align: center;
      margin-top: 15px;
      font-size: 14px;
    }

    .signup-link a {
      color: #66a6ff;
      font-weight: bold;
      text-decoration: none;
    }

    .signup-link a:hover {
      text-decoration: underline;
    }
  </style>
</head>
<body>
  <div class="wrapper">
    <div class="title">Admin Login</div>
    <form action="login_action.php" method="post" onsubmit="return validateLoginForm();">
      <div class="field">
        <input type="text" id="lemail" name="email" required placeholder=" ">
        <label for="lemail">Email Address</label>
      </div>
      <div class="field">
        <input type="password" id="lpassword" name="pass" required placeholder=" ">
        <label for="lpassword">Password</label>
      </div>
      <div class="content" style="margin-bottom: 20px;">
        <div class="checkbox">
          <input type="checkbox" id="remember-me">
          <label for="remember-me">Remember me</label>
        </div>
        <!-- <a href="#">Forgot Password?</a> -->
      </div>
      <div class="field">
        <input type="submit" value="Login" name="admin_login">
      </div>
    </form>
  </div>

  <script>
    function validateLoginForm() {
      let email = document.getElementById("lemail").value;
      let password = document.getElementById("lpassword").value;
      let emailPattern = /^[A-Za-z0-9._%+-]+@[A-Za-z]+\.[A-Za-z]{2,}$/;

      if (!email) {
        alert("Please enter your email.");
        return false;
      }
      if (!emailPattern.test(email)) {
        alert("Please enter a valid email address.");
        return false;
      }
      if (!password) {
        alert("Please enter your password.");
        return false;
      }
      return true;
    }
  </script>





    <script type="text/javascript" src="assets/js/jquery-3.7.0.min.js"></script>
    <script type="text/javascript" src="assets/bootstrap-4.6.2/js/bootstrap.bundle.min.js"></script>  
    <script type="text/javascript" src="assets/bootstrap-4.6.2/js/bootstrap.min.js"></script>
  </body>
</html>
