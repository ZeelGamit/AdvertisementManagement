<?php
session_start();
include 'connection.php';

$qry =
    "select Email,CFname,CLname,CSurename,ContactNo,DOB,Address,CName,StateName,CityName,Gender from clienttb u, CountryTB c , StateTB s , CityTB ct where u.CountryID = c.CountryID and u.StateID = s.StateID and u.CityID = ct.CityID and Email='" .
    $_SESSION['uEmail'] .
    "'";
$res = mysqli_query($connect, $qry);

if (mysqli_num_rows($res) == 0) {
    echo 'No data found!';
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Quixlab - Bootstrap Admin Dashboard Template by Themefisher.com</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon.png">
    <!-- Custom Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
</head>

<body>

    <!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
        <div class="loader">
            <svg class="circular" viewBox="25 25 50 50">
                <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="3" stroke-miterlimit="10" />
            </svg>
        </div>
    </div>
    <!--*******************
        Preloader end
    ********************-->


    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">

        <!--**********************************
            Nav header start
        ***********************************-->
        <div class="nav-header">
            <div class="brand-logo">
                <a href="Home.php">
                    <b class="logo-abbr"><img src="images/logo.png" alt=""> </b>
                    <span class="logo-compact"><img src="./images/logo-compact.png" alt=""></span>
                    <span class="brand-title">
                        <img src="images/logo-text.png" alt="">
                    </span>
                </a>
            </div>
        </div>
        <!--**********************************
            Nav header end
        ***********************************-->

        <!--**********************************
            Header start
        ***********************************-->
        <div class="header">
            <div class="header-content clearfix">
                <div class="nav-control">
                    <div class="hamburger">
                        <span class="toggle-icon"><i class="icon-menu"></i></span>
                    </div>
                </div>
                <div class="header-left">
                    <div class="input-group icons">
                        <div class="drop-down animated flipInX d-md-none">
                            <form action="#">
                                <input type="text" class="form-control" placeholder="Search">
                            </form>
                        </div>
                    </div>
                </div>
                <div class="header-right">
                    <ul class="clearfix">
                        <li class="icons dropdown"><a href="javascript:void(0)" data-toggle="dropdown">
                                <i class="mdi mdi-bell-outline"></i>
                                <span class="badge badge-pill gradient-2">3</span>
                            </a>
                            <div class="drop-down animated fadeIn dropdown-menu dropdown-notfication">
                                <div class="dropdown-content-heading d-flex justify-content-between">
                                    <span class="">2 New Notifications</span>
                                    <a href="javascript:void()" class="d-inline-block">
                                        <span class="badge badge-pill gradient-2">5</span>
                                    </a>
                                </div>
                                <div class="dropdown-content-body">
                                    <ul>
                                        <li>
                                            <a href="javascript:void()">
                                                <span class="mr-3 avatar-icon bg-success-lighten-2"><i
                                                        class="icon-present"></i></span>
                                                <div class="notification-content">
                                                    <h6 class="notification-heading">Events near you</h6>
                                                    <span class="notification-text">Within next 5 days</span>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void()">
                                                <span class="mr-3 avatar-icon bg-danger-lighten-2"><i
                                                        class="icon-present"></i></span>
                                                <div class="notification-content">
                                                    <h6 class="notification-heading">Event Started</h6>
                                                    <span class="notification-text">One hour ago</span>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void()">
                                                <span class="mr-3 avatar-icon bg-success-lighten-2"><i
                                                        class="icon-present"></i></span>
                                                <div class="notification-content">
                                                    <h6 class="notification-heading">Event Ended Successfully</h6>
                                                    <span class="notification-text">One hour ago</span>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void()">
                                                <span class="mr-3 avatar-icon bg-danger-lighten-2"><i
                                                        class="icon-present"></i></span>
                                                <div class="notification-content">
                                                    <h6 class="notification-heading">Events to Join</h6>
                                                    <span class="notification-text">After two days</span>
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </li>

                        <li class="icons dropdown">
                            <div class="user-img c-pointer position-relative" data-toggle="dropdown">
                                <span class="activity active"></span>
                                <img src="images/user/1.png" height="40" width="40" alt="">
                            </div>
                            <div class="drop-down dropdown-profile animated fadeIn dropdown-menu">
                                <div class="dropdown-content-body">
                                    <ul>
                                        <li>
                                            <a href="ViewProfile.php"><i class="icon-user"></i>
                                                <span>Profile</span></a>
                                        </li>
                                        <li>
                                            <a href="PageLock.php"><i class="icon-lock"></i> <span>Lock
                                                    Screen</span></a>
                                        </li>
                                        <li><a href="PageLogout.php"><i class="icon-key"></i> <span>Logout</span></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!--**********************************
            Header end ti-comment-alt
        ***********************************-->

        <!--**********************************
            Sidebar start
        ***********************************-->
        <div class="nk-sidebar">
            <div class="nk-nav-scroll">
                <ul class="metismenu" id="menu">
                    <li>
                        <a href="Home.php" aria-expanded="false">
                            <i class="bi bi-house-door"></i><span class="nav-text">Home</span>
                        </a>
                    </li>

                    <li>
                        <a href="AddAdvertisement.php" aria-expanded="false">
                            <i class="bi bi-plus-square"></i><span class="nav-text">Add Advertisement</span>
                        </a>
                    </li>

                    <li>
                        <a href="PublisherInfo.php" aria-expanded="false">
                            <i class="bi bi-person-badge"></i><span class="nav-text">Publisher</span>
                        </a>
                    </li>

                    <li>
                        <a href="PostedAdvertisements.php" aria-expanded="false">
                            <i class="bi bi-file-post"></i><span class="nav-text">History</span>
                        </a>
                    </li>
                    <li>
                        <a href="Feedback.php" aria-expanded="false">
                            <i class="bi bi-chat-left-dots"></i><span class="nav-text">Feedback</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <!--**********************************
            Sidebar end
        ***********************************-->

        <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
            <div class="container-fluid">
                <div class="card">
                    <div class="card-body">

                        <ul class="card-profile__info">
                            <li>
                                <?php
                                $row = mysqli_fetch_array($res);

                                if ($row[10] == 'Female') { ?>
                                <img class="avatar-icon" style="height: 120px; width: 120px;border-radius: 60px;"
                                    src="images/avatar/female.jpeg" width="100" height="100" alt="">
                                <?php } else { ?>
                                <img class="avatar-icon" style="height: 100px; width: 100px;border-radius: 60px;"
                                    src="images/avatar/male.jpeg" width="100" height="100" alt="">
                                <?php }
                                ?>
                            </li>

                            <li class="mb-1"><strong class="text-dark mr-4">Name </strong>
                                <span><?php echo "$row[1]" .
                                    ' ' .
                                    "$row[2]" .
                                    ' ' .
                                    "$row[3]"; ?></span>
                            </li>

                            <li class="mb-1"><strong class="text-dark mr-10">Email </strong>
                                <span><?php echo "$row[0]"; ?></span>
                            </li>

                            <li class="mb-1"><strong class="text-dark mr-4">Contact No </strong>
                                <span><?php echo "$row[4]"; ?></span>
                            </li>

                            <li class="mb-1"><strong class="text-dark mr-4">Date of birth </strong></strong>
                                <span><?php echo "$row[5]"; ?></span>
                            </li>

                            <li class="mb-1"><strong class="text-dark mr-4">Address</strong>
                                <span><?php echo "$row[6]"; ?></span>
                            </li>
                            <li><strong class="text-dark mr-4">Gender</strong> <span><?php echo "$row[10]"; ?></span>
                            </li>

                            <li class="mb-1"><strong class="text-dark mr-4">City</strong>
                                <span><?php echo "$row[9]"; ?></span>
                            </li>

                            <li class="mb-1"><strong class="text-dark mr-4">State</strong>
                                <span><?php echo "$row[8]"; ?></span>
                            </li>

                            <li class="mb-1"><strong class="text-dark mr-4">Country</strong>
                                <span><?php echo "$row[7]"; ?></span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- #/ container -->
        </div>
        <!--**********************************
            Content body end
        ***********************************-->


        <!--**********************************
            Footer start
        ***********************************-->
        <div class="footer">
            <div class="copyright">
                <p>Copyright &copy; Designed & Developed by <a href="https://themeforest.net/user/quixlab">Quixlab</a>
                    2018</p>
            </div>
        </div>
        <!--**********************************
            Footer end
        ***********************************-->
    </div>
    <!--**********************************
        Main wrapper end
    ***********************************-->

    <!--**********************************
        Scripts
    ***********************************-->
    <script src="plugins/common/common.min.js"></script>
    <script src="js/custom.min.js"></script>
    <script src="js/settings.js"></script>
    <script src="js/gleek.js"></script>
    <script src="js/styleSwitcher.js"></script>

</body>

</html>