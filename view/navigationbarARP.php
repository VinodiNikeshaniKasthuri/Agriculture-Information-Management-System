
<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" type="image/icon" href="../image/logo/logo1.png">       <!--head eke icon eka tab ekata-->

    <title>AIMS</title>
    
    <link rel="stylesheet" href="../resources/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../resources/DataTables/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="../resources/fontawesome/css/all.css">
    <link rel="stylesheet" href="../resources/fancybox/jquery.fancybox.css">
    <link rel="stylesheet" href="../resources/animate.css/animate.min.css">
    <link rel="stylesheet" href="../css/custom.css">

    <script src="../resources/jquery/jquery-3.6.0.min.js"></script>
    <script src="../resources/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="../resources/DataTables/js/jquery.dataTables.min.js"></script>
    <script src="../resources/fancybox/jquery.fancybox.js"></script>
    <script src="../resources/sweetAlerts2/dist/sweetalert2.all.min.js"></script>

    <style>
        .sec-nav {
            min-height: 80px;
            height: auto;
            background-color: rgba(255, 255, 255, 0.8);
            margin: 0px;
            padding: 0px;
        }
    </style>
</head>







<body>
<div style="background-color: black; height:8px;"></div>    <!--nav bar ekata uda orange color bar eka-->



















    <!-- /////////////////////////////////// 2nd Navbar ///////////////////////////////////// -->

        <!-- 1. sticky-top navbar kiynne eka hide wenne na top eke thiyenwa contet eka witharai scroll wenne.
        

         -->

    <nav id="sec-nav" class="navbar sec-nav sticky-top navbar-expand-sm justify-content-center">

        <!-- <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
            <span class="navbar-toggler-icon"></span>
        </button> -->

        <div class="mid-logo mr-auto">
            <div class="navbar-brand">
                <img src="../image/NewLogo.png" width="100px" height="100px" margin-left="5px"class="align-top" alt="logo">
            </div>
        </div>

        <ul class="navbar-nav text-uppercase font-weight-bolder">
            <li class="nav-item">
                <a class="nav-link navmenu" href="../newlogin/user4.php" style="color:rgba(11, 87, 4)"> Admin Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link navmenu" href="../view/farmer_reg.php"style="color:rgba(11, 87, 4)">Add Farmer Details</a>
            </li>
            <li class="nav-item">
                <a class="nav-link navmenu" href="../view/view_farmer.php"style="color:rgba(11, 87, 4)">View Farmer Details</a>
            </li>
            <li class="nav-item">
                <a class="nav-link navmenu" href="../view/addnews.php"style="color:rgba(11, 87, 4)">Manage News</a>
            </li>
            <li class="nav-item">
                <a class="nav-link navmenu" href="../view/lands.php"style="color:rgba(11, 87, 4)">Manage Land</a>
            </li>
            <li class="nav-item">
                <a class="nav-link navmenu" href="../newlogin/changepassword.php"style="color:rgba(11, 87, 4)">Change Password</a>
            </li>
            <li class="nav-item">
            <a class="nav-link navmenu" href=""> </a>

            </li>
            <li class="nav-item">
                <a class="nav-link navmenu" href=""> </a>
            </li>
            <div>
                    <a id="loginBtn" href="../newlogin/logout.php" class="button btn border-0 text-white text-uppercase text-decoration-none btn btn-primary" style="color:#808080">
                        <i class="fas fa-sign-in"></i> LogOut </a>
            </span>&nbsp;&nbsp;
        </div>
        </ul>
    </nav>

    <!--body html tag close krnne na-->