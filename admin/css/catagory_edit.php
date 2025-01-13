<?php
include('../db1_connection.php');
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>User Edit Form</title>
    <link rel="stylesheet" type="text/css" href="assets/bootstrap-4.6.2/css/bootstrap.min.css">
    <style>
        /* * {
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
        .form .form-group {
            width: 100%;
            margin-top: 20px;
        }
        .form-group label {
            color: #333;
        }
        .form :where(.form-group input, .select-box) {
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
        } */


        /* General container styling */
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
/* .container-fluid {
    width: 100%;
    padding: 0 20px;
} */

/* Card styling */
/* .card {
    border: 1px solid #ddd;
    border-radius: 8px;
    box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
    overflow: hidden;
}

.card-header {
    background-color: #007bff;
    color: #fff;
    padding: 15px;
    border-bottom: 1px solid #007bff;
}

.card-header h6 {
    margin: 0;
    font-weight: bold;
} */

/* Card body styling */
.card-body {
    padding: 20px;
}

/* Form elements */
.form-group label {
    font-weight: bold;
    margin-bottom: 5px;
}

.form-group input[type="file"] {
    border: 1px solid #ddd;
    border-radius: 4px;
    padding: 10px;
    width: 100%;
    margin-bottom: 10px;
}

.form-text.text-muted {
    font-size: 0.85em;
    color: #6c757d;
}

/* Button styling */
.btn {
    padding: 10px 20px;
    font-size: 0.9em;
    font-weight: bold;
    border-radius: 4px;
}

.btn-primary {
    background-color: #007bff;
    border: none;
    color: white;
}

.btn-danger {
    background-color: #dc3545;
    border: none;
    color: white;
    margin-right: 10px;
}

.btn:hover {
    opacity: 0.9;
}

    </style>
</head>
<body>

<section class="container">


<div class="container-fluid">
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h3 class="m-0 font-weight-bold text-primary">Update Image</h3>
        </div>
        <div class="card-body">
            <?php
            if (isset($_POST['edit_btn'])) {
                $id = $_POST['edit_id'];
                $query = "SELECT * FROM slider WHERE id='$id'";
                $query_run = mysqli_query($conn, $query);

                foreach ($query_run as $row) {
                    ?>
                    <form action="catagory_action.php" method="POST" enctype="multipart/form-data">
                        <input type="hidden" name="edit_id" value="<?php echo $row['id']; ?>">
                        <div class="form-group">
                            <label>Image</label>
                            <input type="file" name="faculty_image" id="faculty_image" class="form-control">
                            <small class="form-text text-muted">Current image: <?php echo htmlspecialchars($row['image']); ?></small>
                        </div>
                        <a href="catagory.php" class="btn btn-danger">Cancel</a>
                        <button type="submit" name="updatebtn" class="btn btn-primary">Update</button>
                    </form>
                    <?php
                }
            }
            ?>
        </div>
    </div>
</div>


</section>
<script type="text/javascript" src="assets/js/jquery-3.7.0.min.js"></script>
<script type="text/javascript" src="assets/bootstrap-4.6.2/js/bootstrap.bundle.min.js"></script>  
<script type="text/javascript" src="assets/bootstrap-4.6.2/js/bootstrap.min.js"></script>
</body>
</html>
