<?php
include("headerlink.php");

?>

    <!-- <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h3 class="card-title text-center">Forgot Password</h3>
                        <form action="forgot-password.php" method="POST">
                            <div class="mb-3">
                                <label for="email" class="form-label">Enter your email</label>
                                <input type="email" class="form-control" id="email" name="email" required>
                            </div>
                            <button type="submit" class="btn btn-primary w-100" name="submit_email">Send OTP</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div> -->

    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h3 class="card-title text-center">Forgot Password</h3>
                        <form id="forgot-password-form" action="forgot_password_otp.php" method="POST">
                            <div class="mb-3">
                                <label for="email" class="form-label">Enter your email</label>
                                <input type="email" class="form-control" id="email" name="email" required style="font-size: medium;">
                                <small id="emailHelp" class="form-text text-muted">We'll send you an OTP to reset your password.</small>
                            </div>
                            <button type="submit" class="btn btn-primary btn-lg w-100" name="submit_email">Send OTP</button>
                        </form>
                        <div id="success-message" class="alert alert-success mt-3 d-none" role="alert">
                            OTP has been sent to your email address.
                        </div>
                        <div id="error-message" class="alert alert-danger mt-3 d-none" role="alert">
                            There was an error sending the OTP. Please try again.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        // Handle form submission
        $('#forgot-password-form').on('submit', function(e) {
            e.preventDefault(); // Prevent the default form submission

            var email = $('#email').val(); // Get the entered email

            // Simple email validation
            if (!validateEmail(email)) {
                alert("Please enter a valid email address.");
                return;
            }

            // Simulate sending OTP via AJAX or form submission
            // Here you can use AJAX to send the email to your server-side script
            // For demo, we will simulate success or error response

            // Simulate sending OTP
            setTimeout(function() {
                // Show success message (simulate success)
                $('#success-message').removeClass('d-none').show();
                $('#error-message').addClass('d-none').hide();
            }, 1000);
        });

        // Basic email validation function
        function validateEmail(email) {
            var regex = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
            return regex.test(email);
        }
    </script>
    
<?php
include("footerlink.php");
?>




