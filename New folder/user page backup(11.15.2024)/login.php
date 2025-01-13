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
  <style type="text/css">
    *{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Poppins', sans-serif;
  }
  html,body{
    display: grid;
    height: 100%;
    width: 100%;
    place-items: center;
    background: #f2f2f2;
    /* background: linear-gradient(-135deg, #c850c0, #4158d0); */
  }
  ::selection{
    background: #4158d0;
    color: #fff;
  }
  .wrapper{
    width: 380px;
    background: #fff;
    border-radius: 15px;
    box-shadow: 0px 15px 20px rgba(0,0,0,0.1);
  }
  .wrapper .title{
    font-size: 35px;
    font-weight: 600;
    text-align: center;
    line-height: 100px;
    color: #fff;
    user-select: none;
    border-radius: 15px 15px 0 0;
    background: linear-gradient(-135deg, #c850c0, #4158d0);
  }
  .wrapper form{
    padding: 10px 30px 50px 30px;
  }
  .wrapper form .field{
    height: 50px;
    width: 100%;
    margin-top: 20px;
    position: relative;
  }
  .wrapper form .field input{
    height: 100%;
    width: 100%;
    outline: none;
    font-size: 17px;
    padding-left: 20px;
    border: 1px solid lightgrey;
    border-radius: 25px;
    transition: all 0.3s ease;
  }
  .wrapper form .field input:focus,
  form .field input:valid{
    border-color: #4158d0;
  }
  .wrapper form .field label{
    position: absolute;
    top: 50%;
    left: 20px;
    color: #999999;
    font-weight: 400;
    font-size: 17px;
    pointer-events: none;
    transform: translateY(-50%);
    transition: all 0.3s ease;
  }
  form .field input:focus ~ label,
  form .field input:valid ~ label{
    top: 0%;
    font-size: 16px;
    color: #4158d0;
    background: #fff;
    transform: translateY(-50%);
  }
  form .content{
    display: flex;
    width: 100%;
    height: 50px;
    font-size: 16px;
    align-items: center;
    justify-content: space-around;
  }
  form .content .checkbox{
    display: flex;
    align-items: center;
    justify-content: center;
  }
  form .content input{
    width: 15px;
    height: 15px;
    background: red;
  }
  form .content label{
    color: #262626;
    user-select: none;
    padding-left: 5px;
    margin-bottom: 0px;
  }
  form .content .pass-link{
    color: "";
  }
  form .field input[type="submit"]{
    color: #fff;
    border: none;
    padding-left: 0;
    margin-top: -10px;
    font-size: 20px;
    font-weight: 500;
    cursor: pointer;
    background: linear-gradient(-135deg, #c850c0, #4158d0);
    transition: all 0.3s ease;
  }
  form .field input[type="submit"]:active{
    transform: scale(0.95);
  }
  form .signup-link{
    color: #262626;
    margin-top: 20px;
    text-align: center;
  }
  form .pass-link a,
  form .signup-link a{
    color: #4158d0;
    text-decoration: none;
  }
  form .pass-link a:hover,
  form .signup-link a:hover{
    text-decoration: underline;
  }
  </style>
   <body>
        <div class="wrapper">
           <div class="title">
              Login Form
           </div>
           <form action="login_action.php" method="post" onsubmit="return validateLoginForm();">
              <div class="field">
                 <input type="text" id="lemail" name="email" required>
                 <label>Email Address</label>
              </div>
              <div class="field">
                 <input type="password" id="lpassword" name="pass" required>
                 <label>Password</label>
              </div>
              <div class="content">
                 <div class="checkbox">
                    <input type="checkbox" id="remember-me">
                    <label for="remember-me">Remember me</label>
                 </div>
              </div>
              <div class="field">
                 <input type="submit" value="Login">
              </div>
              <div class="signup-link">
                 Not a member? <a href="registration.php">Signup now</a>
              </div>
           </form>
        </div>


      <script>
        function validateLoginForm() {
          // Get the form values
          let email = document.getElementById("lemail").value;
          let password = document.getElementById("lpassword").value;


          // Regular expression for email validation
          //let emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
          let emailPattern=/^[A-Za-z0-9.-_+/]+@[A-za-z]+\.[A-Za-z]{2,}/;

          // Check if email is empty
          if (email === "") {
              alert("Please enter your email.");
              document.getElementById("lemail").focus();
              return false;
          }

          // Validate the email format
          if (!emailPattern.test(email)) {
              alert("Please enter a valid email address.");
              document.getElementById("lemail").focus();
              return false;
          }

          // Check if password is empty
          if (password === "") {
              alert("Please enter your password.");
              document.getElementById("lpassword").focus();
              return false;
          }

          // Validate password length (minimum 6 characters)
          if (password.length < 6) {
              alert("Password must be at least 6 characters long.");
              document.getElementById("lpassword").focus();
              return false;
          }

          // If all validations pass, return true to allow form submission
          return true;
      }

      </script>


    <script type="text/javascript" src="assets/js/jquery-3.7.0.min.js"></script>
    <script type="text/javascript" src="assets/bootstrap-4.6.2/js/bootstrap.bundle.min.js"></script>  
    <script type="text/javascript" src="assets/bootstrap-4.6.2/js/bootstrap.min.js"></script>
  </body>
</html>
