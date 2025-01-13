<?php

include('admin_function.php');

$user_id=base64_decode($_GET['uid']);
$data=getuserdetails($user_id);

?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>User Edit form</title>

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
      <header>User Edit Form</header>
      <form action="edit_user_action.php" class="form" method="post" enctype="multipart/form-data">
      <div class="input-box">
          <label>user id:</label>
          <input type="number" id="rname" name="user_id" value="<?php echo $data['id']; ?>"  />
        </div>
        <div class="input-box">
          <label>Full Name</label>
          <input type="text" placeholder="Enter full name" id="rname" name="name" value="<?php echo $data['name']; ?>"  />
        </div>
        <div class="input-box">
          <label>Email Address</label>
          <input type="text" placeholder="Enter email address" id="remail" name="email" value="<?php echo $data['email']; ?>"/>
        </div>

        <div class="input-box">
          <!-- <label>Password</label> -->
          <input type="hidden" placeholder="Password" id="rpassword" name="upass" value="<?php echo $data['password']; ?>"/>
        </div>

        <div class="input-box">
          <!-- <label>Confirm Password</label> -->
          <input type="hidden" placeholder="Re-enter Password" id="rcpassword" name="urepass" value="<?php echo $data['password']; ?>"/>
        </div>

        <!-- <div class="input-box">
          <label>Image(Optional)</label>
          <input type="file" placeholder="Image" id="uimage" name="image" value=""/>
        </div> -->

        <div class="">
          <!-- <br> -->
          <label>Image(Optional)</label><br><br>
          <input type="file" placeholder="Image" id="uimage" name="image" value="<?php echo $data['image']; ?>"/>
        </div>

        <div class="mb-2 mt-2 row"> 
          <div class="col-md-5"> 
            <img src="../images/<?php echo $data['image'] ? $data['image'] : 'no-image.png'; ?>" alt="<?php echo $data['name']; ?>" style="height:100px;width:150px" id="view_profile_pic">
          </div> 
        </div> 
        <button type="submit" name="useredit">Submit</button>
      </form>
    </section>

    





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
