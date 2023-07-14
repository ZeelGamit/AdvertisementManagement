<?php
session_start();

$connect = mysqli_connect('localhost', 'root', '');
$db = mysqli_select_db($connect, 'AdManager');
$email = $_SESSION['uEmail'];

if (!$db) {
    echo 'Connection failed!';
    return;
} else {
    $query = "select * from clienttb where Email='" . $_SESSION['uEmail'] . "'";

    // echo $query;
    $res = mysqli_query($connect, $query);

    if (mysqli_num_rows($res) == 0) {
        echo 'No data found!';
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700" rel="stylesheet">

    <title>Ramayana - Simple HTML Page</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!--
Ramayana CSS Template
https://templatemo.com/tm-529-ramayana
-->

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/templatemo-style.css">
    <link rel="stylesheet" href="assets/css/owl.css">

</head>

<body class="is-preload">

    <!-- Wrapper -->
    <div id="wrapper">

        <!-- Main -->
        <div id="main">
            <div class="inner">

                <!-- Header -->
                <header id="header">
                    <div class="logo">
                        <a href="index.html">Grow</a>
                    </div>
                </header>
            </div>
            <!-- Page Data -->
            <div>
                <div>
                    <div class="Image">
                        <img src="assets/images/Female.jpeg" alt="profile Image" class="avtar">
                    </div>

                    <div>
                        <label>
                            Email: <?php echo $email; ?>

                        </label>
                    </div>
                </div>
            </div>

        </div>

        <!-- Sidebar -->
        <div id="sidebar">

            <div class="inner">

                <!-- Search Box -->
                <section id="search" class="alt">
                    <form method="get" action="#">
                        <input type="text" name="search" id="search" placeholder="Search..." />
                    </form>
                </section>

                <!-- Menu -->
                <nav id="menu">
                    <ul>
                        <li><a href="index.html">Home</a></li>
                        <li><a href="PostAd.php">Add advertisement</a></li>
                        <li><a href="PublisherInfo.php">Publishers information</a></li>

                        <li>
                            <span class="opener">History</span>
                            <ul>
                                <li><a href="#">Posted advertisements</a></li>
                                <li><a href="#">Payment history</a></li>
                            </ul>
                        </li>
                        <li><a href="index.html">Notifications</a></li>
                        <li>
                            <span class="opener">Profile</span>
                            <ul>
                                <li><a href="#">Edit Profile</a></li>
                                <li><a href="#">Remove account</a></li>
                                <li><a href="#">Show profile</a></li>
                            </ul>
                        </li>
                        <li><a href="#">Logout</a></li>
                    </ul>
                </nav>

                <!-- Featured Posts -->
                <div class="featured-posts">
                    <div class="heading">
                        <h2>Featured Posts</h2>
                    </div>
                    <div class="owl-carousel owl-theme">
                        <a href="#">
                            <div class="featured-item">
                                <img src="assets/images/featured_post_01.jpg" alt="featured one">
                                <p>Aliquam egestas convallis eros sed gravida. Curabitur consequat sit.</p>
                            </div>
                        </a>
                        <a href="#">
                            <div class="featured-item">
                                <img src="assets/images/featured_post_01.jpg" alt="featured two">
                                <p>Donec a scelerisque massa. Aliquam non iaculis quam. Duis arcu turpis.</p>
                            </div>
                        </a>
                        <a href="#">
                            <div class="featured-item">
                                <img src="assets/images/featured_post_01.jpg" alt="featured three">
                                <p>Suspendisse ac convallis urna, vitae luctus ante. Donec sit amet.</p>
                            </div>
                        </a>
                    </div>
                </div>

                <!-- Footer -->
                <footer id="footer">
                    <p class="copyright">Copyright &copy; 2019 Company Name
                        <br>Designed by <a rel="nofollow" href="https://www.facebook.com/templatemo">Template Mo</a>
                    </p>
                </footer>

            </div>
        </div>



        <!-- Scripts -->
        <!-- Bootstrap core JavaScript -->
        <script src="vendor/jquery/jquery.min.js"></script>
        <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

        <script src="assets/js/browser.min.js"></script>
        <script src="assets/js/breakpoints.min.js"></script>
        <script src="assets/js/transition.js"></script>
        <script src="assets/js/owl-carousel.js"></script>
        <script src="assets/js/custom.js"></script>
</body>


</body>

</html>