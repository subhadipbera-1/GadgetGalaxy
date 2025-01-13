<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <!--<meta http-equiv="X-UA-Compatible" content="IE=edge" />-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link rel="stylesheet" type="text/css" href="../assets/bootstrap-4.6.2/css/bootstrap.min.css">
    <!--<link rel="stylesheet" href="assets\font-awesome-4.7.0\css\font-awesome.min.css">-->
    <!--<link rel="stylesheet" href="assets/font-awesome-4.7.0/css/font-awesome.css">-->
    <!--<link rel="stylesheet" href="assets/font-awesome-4.7.0/css/font-awesome.min.css">-->
    <!--<link rel="stylesheet" href="assets/fontawesome-free-6.5.1-web/css/all.min.css">-->
    <link rel="stylesheet" href="../assets/fontawesome-free-6.6.0-web/css/all.min.css">
    <link rel="stylesheet" href="../assets/OwlCarousel2-2.3.4/dist/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="../assets/OwlCarousel2-2.3.4/dist/assets/owl.theme.default.css">
    <!-- Custom StyleSheet -->
    <link rel="stylesheet" href="style.css">
    <title>Admin Dashbord</title>


    <style>
        body {
            font-family: 'Arial', sans-serif;
        }
        .sidebar {
            height: 100vh;
            width: 250px;
            position: fixed;
            top: 0;
            left: 0;
            background-color: #343a40;
            padding-top: 1rem;
            transition: all 0.3s;
        }
        .sidebar a {
            padding: 10px;
            text-align: left;
            display: block;
            color: #c2c7d0;
            text-decoration: none;
            margin: 10px 0;
        }
        .sidebar a:hover {
            background-color: #007bff;
            color: white;
        }
        .sidebar-hide {
            margin-left: -250px;
        }
        .content {
            margin-left: 250px;
            padding: 20px;
            transition: all 0.3s;
        }
        .content-expanded {
            margin-left: 0;
        }
        .navbar {
            background-color: #007bff;
            padding: 10px 20px;
        }
        .navbar-toggler-icon {
            color: white;
        }


    </style>
  </head>
  <body>
  <nav class="navbar navbar-expand-lg navbar-dark">
        <button class="navbar-toggler" type="button" id="menu-toggle">
            <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand ms-3" href="#">Admin Dashboard</a>
    </nav>

    <!-- Sidebar -->
    <div class="sidebar" id="sidebar">
        <a href="#">Dashboard</a>
        <a href="#">Orders</a>
        <a href="#">Products</a>
        <a href="#">Customers</a>
        <a href="#">Reports</a>
        <a href="#">Settings</a>
    </div>

    <!-- Main Content -->
    <div class="content" id="main-content">
        <h2>Welcome to Admin Dashboard</h2>
        <p>Manage your eCommerce site with ease. Here is the overview of your site’s performance and settings.</p>
        <!-- Add additional content here -->
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        document.getElementById('menu-toggle').addEventListener('click', function() {
            const sidebar = document.getElementById('sidebar');
            const content = document.getElementById('main-content');
            sidebar.classList.toggle('sidebar-hide');
            content.classList.toggle('content-expanded');
        });
    </script>

    <script type="text/javascript" src="../assets/js/jquery-3.7.0.min.js"></script>
    <script type="text/javascript" src="../assets/bootstrap-4.6.2/js/bootstrap.bundle.min.js"></script>  
    <script type="text/javascript" src="../assets/bootstrap-4.6.2/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="../assets/OwlCarousel2-2.3.4/dist/owl.carousel.js"></script>
    <script type="text/javascript" src="../assets/OwlCarousel2-2.3.4/dist/owl.carousel.min.js"></script>
    

</body>  
</html>
