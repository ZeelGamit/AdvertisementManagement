<?php
$connect = mysqli_connect('localhost', 'root', '');
$db = mysqli_select_db($connect, 'AdManager');

if (!$db) {
    echo 'Connection failed!';
    return;
} else {
    $query = 'select * from publishertb';
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
    <link rel="stylesheet" href="assets/css/templatemo-style.css">
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

                <!-- Page Heading -->
                <div>
                    <div class="section-heading">
                        <h1>
                            <center>Publisher Information</center>
                        </h1>
                    </div>
                    <section class="tables">
                        <div class="container-fluid">
                            <div class="row">

                                <div class="col-md-12">
                                    <div class="default-table">
                                        <table border="2">
                                            <tr>
                                                <th>ID</th>
                                                <th>Name</th>
                                                <th>Description</th>
                                            </tr>

                                            <?php
                                            while (
                                                $row = mysqli_fetch_array($res)
                                            ) { ?>
                                            <tr>
                                                <td><?php echo $row[0]; ?></td>
                                                <td><?php echo $row[1]; ?></td>
                                                <td><?php echo $row[3]; ?></td>
                                            </tr>
                                            <?php }
                                            mysqli_close($connect);
                                            ?>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
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
                        <li><a href="index.php">Home</a></li>
                        <li><a href="PostAd.php">Add advertisement</a></li>
                        <li><a href="ListAd.php">Publishers information</a></li>

                        <li>
                            <span class="opener">History</span>
                            <ul>
                                <li><a href="#">Posted advertisements</a></li>
                                <li><a href="#">Payment history</a></li>
                            </ul>
                        </li>
                        <li><a href="index.php">Notifications</a></li>
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

    </div>

    <!-- Scripts -->
    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js">
    < /sc> <
    script src = "vendor/bootstrap/js/bootstrap.bundle.min.js" >
    </script>

    <script src="assets/js/browser.min.js"></script>
    <script src="assets/js/breakpoints.min.js"></script>
    <script src="assets/js/transition.js"></script>
    <script src="assets/js/owl-carousel.js"></script>
    <script src="assets/js/custom.js"></script>
</body>


</body>

</html>