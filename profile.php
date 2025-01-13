<?php
//session_start();
include("headerlink.php");
include("header.php");

$conn = mysqli_connect('localhost', 'root', '', 'ecom');
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}


?>
<style>
    .btn-primary {
        color: blue;
        background-color: transparent;
        border-color: none;

        margin-left: 70px;
        margin-top: -69px;
    }
    
    .btn-primary {
        color: blue;
        background-color: transparent;
        border-color: none;

        margin-left: 70px;
        margin-top: -69px;
    }
    .profile-content {
            background-color: #fff;
            padding: 20px;
            margin-right: -143px;
        }
        .profile-header {
    padding: 20px;
    background-color: #fff;
    border-bottom: 1px solid #ddd;
    margin-bottom: 20px;
    margin-right: -143px;
}
</style>
</style>

<!-- Main content -->
<div class="col-md-10">
    <section id="home" class="home">
        <div class="profile-header">
            <h3>My Profile</h3>

        </div>
        <div class="profile-content">
            <div class="row">
                <div class="col-md-4">
                    <div>
                        <?php
                        if (isset($_SESSION['useremail'])) {
                            $email = mysqli_real_escape_string($conn, $_SESSION['useremail']);
                            $query = "SELECT * FROM data WHERE email = '$email'";
                            $query_run = mysqli_query($conn, $query);

                            if (mysqli_num_rows($query_run) > 0) {
                                $row = mysqli_fetch_assoc($query_run);
                                // Check if the image is set and not empty
                                if (!empty($row['image'])) {
                                    echo '<img src="images/' . htmlspecialchars($row['image']) . '" width="100" height="100" alt="Profile image" style="border-radius: 48px;">';
                                } else {
                                    // Default image if no profile image is set
                                    echo '<img src="defaultimg.jpg" alt="Profile" width="100" height="100" style="border-radius: 48px;">';
                                }
                            } else {
                                // Default image for users not found
                                echo '<img src="defaultimg.jpg" alt="Profile" width="100" height="100" style="border-radius: 48px;">';
                            }
                        } else {
                            // Default image for users not logged in
                            echo '<img src="defaultimg.jpg" alt="Profile" width="100" height="100" style="border-radius: 48px;">';
                        }
                        ?>

                    </div>
                    <form action="editprofile.php" method="POST">
                        <input type="hidden" name="edit_id"
                            value="<?php echo isset($row['id']) ? htmlspecialchars($row['id']) : ''; ?>">
                        <button type="submit" name="edit_data_btn" class="btn btn-primary"><i
                                class="fa-solid fa-pen-to-square"></i></button>
                    </form>
                </div>

                <div class="col-md-8">
                    <h4>Personal Information</h4>
                    <p><strong>Name:</strong>
                        <?php echo isset($_SESSION['first_name']) ? htmlspecialchars($_SESSION['first_name']) : 'N/A'; ?>
                    </p>
                    <p><strong>Email:</strong>
                        <?php echo isset($_SESSION['useremail']) ? htmlspecialchars($_SESSION['useremail']) : 'N/A'; ?>
                    </p>
                    <p><strong>Gender:</strong>
                        <?php echo isset($_SESSION['gender_name']) ? htmlspecialchars($_SESSION['gender_name']) : 'N/A'; ?>
                    </p>
                </div>
            </div>
        </div>
    </section>
</div>

<?php
include("footerlink.php");
?>