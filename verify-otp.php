<?php
include("headerlink.php");
?>
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <h3 class="card-title text-center">Enter OTP</h3>
                    <form action="verifi_otp_action.php" method="POST">
                        <div class="mb-3">
                            <label for="otp" class="form-label">Enter OTP</label>
                            <input type="text" class="form-control" id="otp" name="otp">
                        </div>
                    
                            <div>OTP expire in :</div><b><div class="timer" id="timer"></div></b><br>
                        
                        <input type="hidden" name="email" value="<?php echo $_GET['email']; ?>"> <!-- Pass the email -->
                        <button type="submit" id="submitBtn" class="btn btn-primary w-100" name="submit_otp">Verify OTP</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    // Set the time limit in seconds
    let countdownTime = 60; // 5 minutes (300 seconds)

    // Get the timer element
    const timerElement = document.getElementById('timer');

    // Function to format time (mm:ss)
    function formatTime(seconds) {
        let minutes = Math.floor(seconds / 60);
        let remainingSeconds = seconds % 60;
        if (remainingSeconds < 10) {
            remainingSeconds = '0' + remainingSeconds; // add leading zero
        }
        return `${minutes}:${remainingSeconds}`;
    }

    // Function to start the countdown timer
    function startTimer() {
        const timerInterval = setInterval(() => {
            // Update the displayed time
            timerElement.textContent = formatTime(countdownTime);

            // When time is up, stop the timer
            if (countdownTime === 0) {
                clearInterval(timerInterval);
                timerElement.textContent = "OTP expired!";
                document.getElementById('submitBtn').disabled = true; // Disable submit button
            }

            countdownTime--;
        }, 1000); // Update every second
    }

    // Start the timer when the page loads
    startTimer();
</script>
<?php
include('footerlink.php');
?>