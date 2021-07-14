<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bussiness Dashboard</title>
    <link rel="stylesheet" href="<?php echo base_url().'assets/css/bootstrap.min.css';?>">
    <script src="<?php echo base_url().'assets/js/jquery-3.6.0.min.js';?>"></script>
    <script src="<?php echo base_url().'assets/js/bootstrap.min.js';?>"></script>
    <script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
    <link rel="stylesheet" href="<?php echo base_url('/assets/css/dashboard.css');?>">
    <style>
.business-panel .restro-name{
    color:#f8cd21;
    letter-spacing:2px;
}
.business-panel .navbar {
    background-color: #000;
}
.business-panel .business-data{
    display:flex;
}
.business-panel .business-data .card{
    background-color: #2b281e;
    padding: 10px;
    text-align: center;
    font-size: 44px;
    margin-right: 50px;
}
.business-panel .business-data .card .btn-prmary{
    color:#f8cd21;
    background-color:#f8cd21;
    text-transform:uppercase;

}
</style>
</head>

<body class="business-panel">

    <!-- Navigation -->
    <nav class="navbar navbar-expand-md navbar-light sticky-top mb-3 border-bottom">
        <div class="container-fluid">
            <a class="navbar-brand text-white" href="<?php echo base_url().'admin/home';?>">Bussiness Panel</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarRes">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarRes">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item dropdown active">
                        <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdown" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Home
                        </a>
                    </li>
                    <li class="nav-item dropdown active ">
                        <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdown" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            About
                        </a>
                    </li>
                    <li class="nav-item dropdown active">
                        <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdown" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                           Serivices
                        </a>
                    </li>
                    <li class="nav-item dropdown active">
                        <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdown" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                           Contact
                        </a>
                    </li>
                    <li class="nav-item active">
                        <a href="<?php echo base_url().'login/logout';?>"
                            class="nav-link">Login </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <script>
    $(document).ready(function() {
        $(".dropdown").hover(function() {
            var dropdownMenu = $(this).children(".dropdown-menu");
            if (dropdownMenu.is(":visible")) {
                dropdownMenu.parent().toggleClass("open");
            }
        });
    });
    </script>