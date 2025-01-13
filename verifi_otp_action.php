<?php
include("headerlink.php");
?>
<?php
// Include database connection
include('db1_connection.php');
global $conn;

if (isset($_POST['submit_otp'])) {
    $otp = $_POST['otp'];
    $email = $_POST['email'];

    // Check if OTP exists and is not expired
    $sql = "SELECT * FROM data WHERE email = '" . $email . "' AND otp = '" . $otp . "'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        // OTP is valid, show password reset form


?>

        <!-- <div class="container mt-5">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <h3 class="card-title text-center">Reset Password</h3>
                            <form action="reset-password.php" method="POST">
                                <div class="mb-3">
                                    <label for="new_password" class="form-label">New Password</label>
                                    <input type="password" class="form-control" id="new_password" name="new_password" required>
                                </div>
                                <div class="mb-3">
                                    <label for="confirm_password" class="form-label">Confirm Password</label>
                                    <input type="password" class="form-control" id="confirm_password" name="confirm_password" required>
                                </div>
                                <input type="hidden" name="email" value="<?php echo $email; ?>">
                                <button type="submit" class="btn btn-primary w-100" name="reset_password">Reset Password</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->




        <style>
            body {
                font-family: Arial, sans-serif;
                display: flex;
                justify-content: center;
                align-items: center;
                height: 100vh;
                background-color: #f4f4f4;
                margin: 0;
            }

            .form-container {
                background: #fff;
                padding: 20px;
                border-radius: 8px;
                box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
                width: 100%;
                max-width: 400px;
            }

            .form-group {
                margin-bottom: 15px;
            }

            label {
                display: block;
                margin-bottom: 5px;
            }

            input {
                width: 100%;
                padding: 10px;
                border: 1px solid #ddd;
                border-radius: 4px;
                box-sizing: border-box;
            }

            .error {
                color: red;
                font-size: 0.875rem;
            }

            .success {
                color: green;
                font-size: 0.875rem;
            }

            .submit-btn {
                background-color: #007bff;
                color: #fff;
                border: none;
                padding: 10px;
                border-radius: 4px;
                cursor: pointer;
                width: 100%;
                font-size: 1rem;
                opacity: 0.6;
                /* Initially disabled */
                pointer-events: none;
                /* Initially disabled */
            }

            .submit-btn.enabled {
                opacity: 1;
                /* Enabled */
                pointer-events: auto;
                /* Enabled */
            }

            .submit-btn:hover {
                background-color: #0056b3;
            }
        </style>

        <div class="form-container">
            <h2>Create Account</h2>
            <form id="registrationForm" action="reset-password.php" method="post">
                
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password" placeholder="Enter Password" required>
                </div>
                <div class="form-group">
                    <label for="confirmPassword">Confirm Password</label>
                    <input type="password" id="confirmPassword" name="confirm_password" placeholder="Confirm Password" required>
                    <span id="passwordError" class="error"></span>
                </div>
                <input type="hidden" name="email" value="<?php echo $email; ?>">
                <button type="submit" class="submit-btn" name="reset_password" id="submitBtn">Submit</button>
            </form>
        </div>
        <script>
            document.getElementById('registrationForm').addEventListener('input', function() {
                validateForm();
            });

            function validateForm() {
                const password = document.getElementById('password').value;
                const confirmPassword = document.getElementById('confirmPassword').value;
                const submitBtn = document.getElementById('submitBtn');
                const errorElement = document.getElementById('passwordError');

                let isValid = true;

                if ( !password || !confirmPassword) {
                    isValid = false;
                }

                if (password !== confirmPassword) {
                    errorElement.textContent = 'Passwords do not match';
                    errorElement.classList.remove('success');
                    errorElement.classList.add('error');
                    isValid = false;
                } else {
                    errorElement.textContent = 'Passwords match';
                    errorElement.classList.remove('error');
                    errorElement.classList.add('success');
                }

                if (isValid) {
                    submitBtn.classList.add('enabled');
                    submitBtn.disabled = false;
                } else {
                    submitBtn.classList.remove('enabled');
                    submitBtn.disabled = true;
                }
            }
        </script>
<?php
    } else {
        echo "<p class='text-center'>Invalid OTP or OTP has expired.</p>";
    }
}
?>


<?php
include('footerlink.php');
?>