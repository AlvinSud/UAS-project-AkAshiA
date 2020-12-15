<!DOCTYPE html>
<html lang="en">

<head>
    <title>@yield('judul') - Week 09</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>        
    <div class="jumbotron text-center" style="margin-bottom:0; background-image:url('assets/img/bale-of-straw.jpg'); background-position: center;" >
        <h1>AkAshiA</h1>
        <p>Animal Fooder</p>
        
    </div>
    @yield('navigasi')
    <nav class="navbar navbar-expand-md navbar-dark bg-dark">
    <a class="navbar-brand" href="/">Home</a>
    <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="navbar-collapse collapse show" id="navbarCollapse" style>
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="items">Items</a>
            </li>
            <?php /*<div class="dropdown">
                <button class="btn btn-info dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Category
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <a class="dropdown-item" href="chicken">Pakan Ayam</a>
                    <a class="dropdown-item" href="fish">Pakan Ikan</a>
                    <a class="dropdown-item" href="others">Lainnya</a>
                </div>
            </div> */ ?>
            <li class="nav-item active">
                <a class="nav-link" href="about">About Us</a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="contact">Contact</a>
            </li>
            <li>
                <a class="fa fa-shopping-cart" href="shopcart" style="font-size:36px", color:red></a>
            </li>

        </ul>
        <ul class="nav navbar-nav navbar-right">
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
            <?php 
                $is_login = Session::has('login');
                if ($is_login==false){
            ?>
                <li class="nav-item">
                    <a class="nav-link" href="login">Login</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link btn btn-primary" href="register">Register</a>
                </li>   
            <?php
                } else {
            ?>
                <li class="nav-item">
                    <a class="nav-link" href="logout">Log Out</a>
                </li>
            <?php
                }
            ?>       
        </ul>
        
    </div>
</nav>
    <div class="container" style="margin-top:30px">
        @yield('isi_konten')
    </div>

    <div class="jumbotron text-center" style="margin-bottom:0">
        <p>&copy;2020. AkAshiA</p>
    </div>

    <!--styles-->
    <style>
        .fakeimg {
            height: 200px;
            background: #aaa;
        }
    </style>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel='stylesheet' href='assets/css/fontawesome.min.css'>
    <link rel="stylesheet" href="assets/css/style.css">

    <!--scripts-->
    <script src="assets/js/jquery3.5.1.js"></script>
    <script src="assets/popper/js/popper.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script>
        $(function () {
            $('[data-toggle="tooltip"]').tooltip();
        })
    </script>
</body>

</html>
