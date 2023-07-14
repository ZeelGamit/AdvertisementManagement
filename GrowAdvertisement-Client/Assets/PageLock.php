<?php
session_start();
include 'connection.php';

if (isset($_POST['btnUnlock'])) {
    $pass = $_POST['Password'];
    $qry =
        "select Email,Password from clienttb where Email='" .
        $_SESSION['uEmail'] .
        "'";
    $res = mysqli_query($connect, $qry);
    $row = mysqli_fetch_array($res);

    if ($pass == $row[1]) {
        header('Location: Home.php');
    } else {
        echo "<script>alert('Invalid Password! Try again')</script>";
    }

    if (mysqli_num_rows($res) == 0) {
        echo 'No data found!';
    }
}
?>

<!DOCTYPE html>
<html class="h-100" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Quixlab - Bootstrap Admin Dashboard Template by Themefisher.com</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="../../assets/images/favicon.png">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css"
        integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <link href="css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
</head>

<body class="h-100">

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

    <div class="login-form-bg h-100">
        <div class="container h-100">
            <div class="row justify-content-center h-100">
                <div class="col-xl-6">
                    <div class="form-input-content">
                        <div class="card login-form mb-0">
                            <div class="card-body pt-5">
                                <a class="text-center" href="index.html">
                                    <h4>Rosella</h4>
                                </a>
                                <form class="mt-5 mb-3 login-input" method="post">
                                    <div class="form-group">
                                        <input type="password" name="Password" class="form-control"
                                            placeholder="Password" required>
                                    </div>
                                    <button class="btn login-form__btn submit w-100" type="submit"
                                        name="btnUnlock">Unlock</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>

    <!--**********************************
        Scripts
    ***********************************-->
    <script src="plugins/common/common.min.js"></script>
    <script src="js/custom.min.js"></script>
    <script src="js/settings.js"></script>
</body>

</html>