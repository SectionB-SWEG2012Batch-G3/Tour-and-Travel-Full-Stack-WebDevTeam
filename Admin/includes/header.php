<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Boxicons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <!-- My CSS --> 
    <link rel="stylesheet" href="styles/style.css">
    <style>
        .modal-body{
            color:#dc3545;
        }
        form.form{
                max-width: 500px;
                margin:25px 0 0 200px;
        }
    </style>
    <title>AdminHub</title>
</head>
<body>

    <!-- SIDEBAR -->
    <section id="sidebar">
        <a href="#" class="brand">
            <i class='bx bxs-smile'></i>
            <span class="text">Admin Dashboard</span>
        </a>
        <ul class="side-menu top">
            <li class="<?php echo $_GET['active'] === 'index' ? 'active' : '';?>">
                <a href="index.php?active=index">
                    <i class='bx bxs-dashboard' ></i>
                    <span class="text">Dashboard</span>
                </a>
            </li>
            <li class="">
                <a href="#">
                    <i class='bx bxs-shopping-bag-alt' ></i>
                    <span class="text">Homepage</span>
                </a>
            </li>
            <li class="<?php echo $_GET['active'] === 'destination' ? 'active' : '';?>">
                <a href="destinations.php?active=destination">
                    <i class='bx bxs-doughnut-chart' ></i>
                    <span class="text">Destinations</span>
                </a>
            </li>
            <li class="<?php echo $_GET['active'] === 'hotel' ? 'active' : '';?>">
                <a href="hotels.php?active=hotel">
                    <i class='bx bxs-message-dots' ></i>
                    <span class="text">Hotels</span>
                </a>
            </li>
            <li class="<?php echo $_GET['active'] === 'cars' ? 'active' : '';?>">
                <a href="cars.php?active=cars">
                    <i class='bx bxs-group' ></i>
                    <span class="text">Cars</span>
                </a>
            </li>
            <li class="<?php echo $_GET['active'] === 'tourguide' ? 'active' : '';?>">
                <a href="tourguides.php?active=tourguide">
                    <i class='bx bxs-group' ></i>
                    <span class="text">Tour Guides</span>
                </a>
            </li>
        </ul>
        <ul class="side-menu">
            <li>
                <a href="#">
                    <i class='bx bxs-cog' ></i>
                    <span class="text">Settings</span>
                </a>
            </li>
            <li>
                <a href="logout.php" class="logout">
                    <i class='bx bxs-log-out-circle' ></i>
                    <span class="text">Logout</span>
                </a>
            </li>
        </ul>
    </section>
    <!-- SIDEBAR -->



    <!-- CONTENT -->
    <section id="content">
        <!-- NAVBAR -->
        <nav>
            <i class='bx bx-menu' ></i>
            <a href="#" class="nav-link">Categories</a>
            <form action="#">
                <div class="form-input">
                    <input type="search" placeholder="Search...">
                    <button type="submit" class="search-btn"><i class='bx bx-search' ></i></button>
                </div>
            </form>
            <input type="checkbox" id="switch-mode" hidden>
            <label for="switch-mode" class="switch-mode"></label>
            <a href="#" class="notification">
                <i class='bx bxs-bell' ></i>
                <span class="num">8</span>
            </a>
            <a href="#" class="profile">
                <img src="img/people.png">
            </a>
        </nav>
        <!-- NAVBAR -->

        <!-- MAIN -->
        <main>
            <div class="head-title">
                <div class="left">
                    <h1>Dashboard</h1>
                    <ul class="breadcrumb">
                        <li>
                            <a href="#">Dashboard</a>
                        </li>
                        <li><i class='bx bx-chevron-right' ></i></li>
                        


