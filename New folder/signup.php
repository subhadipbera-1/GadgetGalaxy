<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup</title>
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <link rel="stylesheet" type="text/css" href="assets/bootstrap-4.6.2/css/bootstrap.min.css">
    <!--<link rel="stylesheet" href="assets\font-awesome-4.7.0\css\font-awesome.min.css">-->
    <!--<link rel="stylesheet" href="assets/font-awesome-4.7.0/css/font-awesome.css">-->
    <!--<link rel="stylesheet" href="assets/font-awesome-4.7.0/css/font-awesome.min.css">-->
    <!--<link rel="stylesheet" href="assets/fontawesome-free-6.5.1-web/css/all.min.css">-->
    <link rel="stylesheet" href="assets/fontawesome-free-6.6.0-web/css/all.min.css">
    <!--Favicon-->
    <!--<link rel="icon" type="image/x-icon" href="assets/img/favicon5.png">-->
    <!--Favicon End-->
    <link rel="stylesheet" href="assets/css/style.css">
    <style>
        body {
            background-color: #f8f9fa; /* Light grey background */
        }
        .signup-container {
            max-width: 500px;
            margin: 50px auto;
            padding: 20px;
            background-color: #ffffff;
            border: 1px solid #ddd;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        .signup-container .form-group {
            margin-bottom: 1.5rem;
        }
        .signup-container .btn-primary {
            background-color: #2874f0;
            border: none;
        }
        .signup-container .btn-primary:hover {
            background-color: #1a63e0;
        }
        .signup-container .text-center {
            margin-top: 1rem;
        }
        .signup-container .form-check-label {
            font-size: 0.875rem;
        }
        .signup-container .text-muted {
            font-size: 0.875rem;
        }
    </style>
</head>
<body>
    


    
    <div class="signup-container">
        <h2 class="text-center mb-4">Create Account</h2>
        <form action="signup_action.php" method="post">
            <!-- <div class="form-row">
                <div class="form-group col-md-12">
                    <label for="firstName">Full Name</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="First Name">
                </div>
                -- <div class="form-group col-md-6">
                    <label for="lastName">Last Name</label>
                    <input type="text" class="form-control" id="lastName" placeholder="Last Name">
                </div> --
            </div> -->
            <div class="form-group">
                <label for="firstName">Full Name</label>
                <input type="text" class="form-control" id="name" name="uname" placeholder="First Name">
            </div>
            <div class="form-group">
                <label for="email">Email address</label>
                <input type="email" class="form-control" id="email" name="uemail" placeholder="Enter your email">
            </div>
            <!-- <div class="form-group">
                <label for="phone">Phone Number</label>
                <input type="text" class="form-control" id="phone" name="number" placeholder="Enter your phone number">
            </div> --> 

            <div class="form-row">
                <div class="form-group col-md-6">
                <label for="phone">Phone Number</label>
                <input type="text" class="form-control" id="phone" name="unumber" placeholder="Enter your phone number">
                </div>
                <div class="form-group col-md-6">
                    <label for="lastName">Birth date</label>
                    <input type="date" class="form-control" id="dob" name="dob" placeholder="Enter birth date">
                    <!-- <label>Birth Date</label>
                    <input type="date" placeholder="Enter birth date" name="dob" required /> -->
                </div>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" id="password" name="upassword" placeholder="Enter your password">
            </div>
            <div class="form-group">
                <label for="confirmPassword">Confirm Password</label>
                <input type="password" class="form-control" id="confirmpassword" name="cpassword" placeholder="Confirm your password">
            </div>
            <div class="form-check">
                <input type="checkbox" class="form-check-input" id="termsConditions">
                <label class="form-check-label" for="termsConditions">I agree to the <a href="#">Terms and Conditions</a></label>
            </div>
            <button type="submit" class="btn btn-primary btn-block">Sign Up</button>
            <div class="text-center">
                <p class="text-muted">Already have an account? <a href="login.html">Login here</a></p>
            </div>
        </form>
    </div>
    

<!-- <script>
    function formValidateSignup() {
        // Get the form values
        let firstName = document.getElementById("firstName").value;
        let lastName = document.getElementById("lastName").value;
        let email = document.getElementById("email").value;
        let phone = document.getElementById("phone").value;
        let password = document.getElementById("password").value;
        let confirmPassword = document.getElementById("confirmPassword").value;
        let termsConditions = document.getElementById("termsConditions").checked;
    
        // Regular expression for email and phone validation
        let emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        let phonePattern = /^[0-9]{10}$/; // Assumes 10-digit phone numbers
    
        // Check if first name is empty
        if (firstName === "") {
            alert("Please enter your first name.");
            document.getElementById("firstName").focus();
            return false;
        }
    
        // Check if last name is empty
        if (lastName === "") {
            alert("Please enter your last name.");
            document.getElementById("lastName").focus();
            return false;
        }
    
        // Check if email field is empty
        if (email === "") {
            alert("Please enter your email.");
            document.getElementById("email").focus();
            return false;
        }
    
        // Validate email format
        if (!emailPattern.test(email)) {
            alert("Please enter a valid email address.");
            document.getElementById("email").focus();
            return false;
        }
    
        // Check if phone field is empty
        if (phone === "") {
            alert("Please enter your phone number.");
            document.getElementById("phone").focus();
            return false;
        }
    
        // Validate phone format
        if (!phonePattern.test(phone)) {
            alert("Please enter a valid 10-digit phone number.");
            document.getElementById("phone").focus();
            return false;
        }
    
        // Check if password field is empty
        if (password === "") {
            alert("Please enter your password.");
            document.getElementById("password").focus();
            return false;
        }
    
        // Validate password length (min 6 characters as an example)
        if (password.length < 6) {
            alert("Password must be at least 6 characters long.");
            document.getElementById("password").focus();
            return false;
        }
    
        // Check if confirm password field is empty
        if (confirmPassword === "") {
            alert("Please confirm your password.");
            document.getElementById("confirmPassword").focus();
            return false;
        }
    
        // Check if passwords match
        if (password !== confirmPassword) {
            alert("Passwords do not match.");
            document.getElementById("confirmPassword").focus();
            return false;
        }
    
        // Check if terms and conditions are accepted
        if (!termsConditions) {
            alert("You must agree to the Terms and Conditions.");
            document.getElementById("termsConditions").focus();
            return false;
        }
    
        // If all validations pass, submit the form
        return true;
    }
    
</script>     -->



    <script type="text/javascript" src="assets/js/jquery-3.7.0.min.js"></script>
    <script type="text/javascript" src="assets/bootstrap-4.6.2/js/bootstrap.bundle.min.js"></script>  
    <script type="text/javascript" src="assets/bootstrap-4.6.2/js/bootstrap.min.js"></script>
</body>
</html>