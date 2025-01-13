<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>registration</title>

    <!-- <link rel="stylesheet" type="text/css" href="Assets/css/all.min.css" />
    <link
      rel="stylesheet"
      type="text/css"
      href="Assets/css/bootstrap.min.css"
    /> -->
    <link rel="stylesheet" type="text/css" href="assets/bootstrap-4.6.2/css/bootstrap.min.css">
    <!-- <link type="text/css" href="Assets/css/registration.css"> -->
    <style>
      /* @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap"); */
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
      padding: 20px;
      background: rgb(130, 106, 251);
    }
    .container {
      position: relative;
      max-width: 700px;
      width: 100%;
      background: #fff;
      padding: 25px;
      border-radius: 8px;
      box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
    }
    .container header {
      font-size: 1.5rem;
      color: #333;
      font-weight: 500;
      text-align: center;
    }
    .container .form {
      margin-top: 30px;
    }
    .form .input-box {
      width: 100%;
      margin-top: 20px;
    }
    .input-box label {
      color: #333;
    }
    .form :where(.input-box input, .select-box) {
      position: relative;
      height: 50px;
      width: 100%;
      outline: none;
      font-size: 1rem;
      color: #707070;
      margin-top: 8px;
      border: 1px solid #ddd;
      border-radius: 6px;
      padding: 0 15px;
    }
    .input-box input:focus {
      box-shadow: 0 1px 0 rgba(0, 0, 0, 0.1);
    }
    .form .column {
      display: flex;
      column-gap: 15px;
    }
    .form .gender-box {
      margin-top: 20px;
    }
    .gender-box h3 {
      color: #333;
      font-size: 1rem;
      font-weight: 400;
      margin-bottom: 8px;
    }
    .form :where(.gender-option, .gender) {
      display: flex;
      align-items: center;
      column-gap: 50px;
      flex-wrap: wrap;
    }
    .form .gender {
      column-gap: 5px;
    }
    .gender input {
      accent-color: rgb(130, 106, 251);
    }
    .form :where(.gender input, .gender label) {
      cursor: pointer;
    }
    .gender label {
      color: #707070;
    }
    .address :where(input, .select-box) {
      margin-top: 15px;
    }
    .select-box select {
      height: 100%;
      width: 100%;
      outline: none;
      border: none;
      color: #707070;
      font-size: 1rem;
    }
    .form button {
      height: 55px;
      width: 100%;
      color: #fff;
      font-size: 1rem;
      font-weight: 400;
      margin-top: 30px;
      border: none;
      cursor: pointer;
      transition: all 0.2s ease;
      background: rgb(130, 106, 251);
    }
    .form button:hover {
      background: rgb(88, 56, 250);
    }
    /*Responsive*/
    @media screen and (max-width: 500px) {
      .form .column {
        flex-wrap: wrap;
      }
      .form :where(.gender-option, .gender) {
        row-gap: 15px;
      }
    }
    </style>
  
  </head>
  <body>
    

    <section class="container">
      <header style="color: green;">Registration</header>
      <form action="registration_action.php" class="form" method="post" onsubmit="return validateRegistrationForm();" enctype="multipart/form-data">
        <div class="input-box">
          <label>Full Name</label><span class="text-danger">*</span>
          <input type="text" placeholder="Enter full name" id="rname" name="name" required />
        </div>
        <div class="input-box">
          <label>Email Address</label><span class="text-danger">*</span>
          <input type="text" placeholder="Enter email address" id="remail" name="email" required />
        </div>

        <div class="input-box">
          <label>Password</label><span class="text-danger">*</span>
          <input type="password" placeholder="Password" id="rpassword" name="upass" required />
        </div>

        <div class="input-box">
          <label>Confirm Password</label><span class="text-danger">*</span>
          <input type="password" placeholder="Re-enter Password" id="rcpassword" name="urepass" required />
        </div>

        <div class="input-box">
          <!-- <label>Image(Optional)</label> -->
          <label for="dob" class="form-label">Profile Picture </label><span class="text-danger">(Optional)</span> 
          <input type="file" placeholder="Image" id="uimage" name="image" value="<?php echo $data['password']; ?>"/>
        </div>

        <button>Submit</button>
      </form>
    </section>

    


    <script>
      function validateRegistrationForm() {
        // Get the form values
        let name = document.getElementById("rname").value;
        let email = document.getElementById("remail").value;
        let password = document.getElementById("rpassword").value;
        let confirmPassword = document.getElementById("rcpassword").value;

        // Regular expression for email validation
        //let emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        let emailPattern=/^[A-Za-z0-9.-_+/]+@[A-za-z]+\.[A-Za-z]{2,}/;

        // Check if name field is empty
        if (name === "") {
            alert("Please enter your full name.");
            document.getElementById("rname").focus();
            return false;
        }

        // Check if email field is empty
        if (email === "") {
            alert("Please enter your email address.");
            return false;
        }

        // Validate the email format
        if (!emailPattern.test(email)) {
            alert("Please enter a valid email address.");
            return false;
        }

        // Check if password field is empty
        if (password === "") {
            alert("Please enter your password.");
            return false;
        }

        // Validate password length (minimum 6 characters)
        if (password.length < 6) {
            alert("Password must be at least 6 characters long.");
            return false;
        }

        // Check if confirm password field is empty
        if (confirmPassword === "") {
            alert("Please confirm your password.");
            return false;
        }

        // Check if password and confirm password match
        if (password !== confirmPassword) {
            alert("Passwords do not match.");
            return false;
        }

        // If all validations pass, return true to allow form submission
        return true;
    }

    </script>




    <!-- <script
      type="text/javascript"
      src="Assets/js/code.jquery.com_jquery-3.7.0.min.js"
    ></script>
    <script
      type="text/javascript"
      src="Assets/bootstrap/js/bootstrap.bundle.min.js"
    ></script> -->
    <script type="text/javascript" src="assets/js/jquery-3.7.0.min.js"></script>
    <script type="text/javascript" src="assets/bootstrap-4.6.2/js/bootstrap.bundle.min.js"></script>  
    <script type="text/javascript" src="assets/bootstrap-4.6.2/js/bootstrap.min.js"></script>
  </body>
</html>
