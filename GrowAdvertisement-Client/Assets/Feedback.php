<?php
include 'connection.php';
session_start();
$sql = 'select * from PublisherTB';
$publisherList = mysqli_query($connect, $sql);

if (isset($_POST['btnSubmit']) == 'Submit') {
    $file = $_POST['val-imgurl'];
    $compname = $_POST['val-companyname'];
    $pubID = $_POST['val-publisher'];
    $email = 'ansh@gmail.com';
    $days = $_POST['val-addays'];
    // $adtype = $_POST['AdType'];
    $currdate = date('y.m.d');
    $qry = "insert into PostAdTB values('NULL','$email','$file','$compname','$pubID','$days','$currdate')";
    $res = mysqli_query($connect, $qry);

    if ($res == 1) {
        echo "<script>alert('Record inserted successfully!')</script>";
    } else {
        echo "<script>alert('Record insertion failed!')</script>";
    }
}
mysqli_close($connect);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Grow Advertisement-Client Area</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon.png">
    <!-- Custom Stylesheet -->
    <link href="css/style.css?v=2" rel="stylesheet">
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
            <div style="margin: 2rem 2rem 2rem 2rem;">
                <!-- row -->
                <div class="row justify-content-center" style="margin: 0rem">
                    <div class="col-lg-12" style="padding: 0rem">
                        <div class="card" style="margin-bottom: 0rem;">
                            <div class="card-body col-lg-12 d-flex">
                                <div class="col-lg-2">

                                </div>
                                <div class="col-lg-8">

                                    <div style="margin-bottom: 25px;" class="row d-flex justify-content-center">
                                        <h1 class="title-page-info">
                                            Feedback
                                        </h1>
                                    </div>
                                    <div class="form-validation">
                                        <form class="form-valide" method="post">
                                            <div class="form-group row">
                                                <label class="col-lg-3 col-form-label" for="val-email">Email
                                                    <span class="text-danger">*</span>
                                                </label>
                                                <div class="col-lg-9">
                                                    <input type="text" class="form-control" id="val-email"
                                                        name="val-email" value="<?php echo $_SESSION[
                                                            'uEmail'
                                                        ]; ?>" readonly>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-lg-3 col-form-label"
                                                    for="val-feedbacktitle">Title<span class="text-danger">*</span>
                                                </label>
                                                <div class="col-lg-9">
                                                    <input type="text" class="form-control" id="val-feedbacktitle"
                                                        name="val-feedbacktitle" required>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-lg-3 col-form-label"
                                                    for="val-feedbackdesc">Description
                                                    <span class="text-danger">*</span>
                                                </label>
                                                <div class="col-lg-9">
                                                    <input type="number" class="form-control" id="val-feedbackdesc"
                                                        name="val-feedbackdesc" required>
                                                </div>
                                            </div>
                                            <div class="form-group row d-flex justify-content-center">
                                                <div class="">
                                                    <button type="submit" class="btn submit-for-feedback"
                                                        name="btnSubmit" id="btnSubmit" value="Submit">Submit</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>

                                <div class="col-lg-2">

                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #/ container -->
        </div>
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

    <script src="./plugins/validation/jquery.validate.min.js"></script>
    <script src="./plugins/validation/jquery.validate-init.js"></script>

</body>

</html>