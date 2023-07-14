<!DOCTYPE html>
<html lang="en">
<title>Registration</title>
<link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
<link rel="stylesheet" type="text/css" href="assets/css/style.css">
</head>

<body>
    <div class="container ">
        <div class="registermain">
            <div class="panel panel-primary w-100">
                <div class="panel-heading text-center" style="padding-top: 10px; color: #5c9f24;">
                    <h1>Registration Form</h1>
                </div>
                <form method="post" name="regForm">
                    <div class="panel-body" style="padding: 20px;">

                        <div class="d-lg-flex">
                            <div class="w-100 me-2">
                                <label for="firstName">First name</label>
                                <input type="text" name="firstName" class="form-control" id="firstName" />
                            </div>
                            <div class="w-100 me-2">
                                <label for="lastName">Last name</label>
                                <input type="text" name="lastName" class="form-control" id="lastName" />
                            </div>
                            <div class="w-100">
                                <label for="sureName">Surename</label>
                                <input type="text" name="sureName" class="form-control" id="sureName" />
                            </div>
                        </div>

                        <div class="form-group w-50">
                            <label for="email">Email</label>
                            <input type="text" name="email" class="form-control" id="email" />
                        </div>

                        <div class="form-group">
                            <label for="gender">Gender</label>
                            <div>
                                <label for="male" class="radio-inline me-2"><input type="radio" value="Male"
                                        name="gender" id="male" /> Male</label>
                                <label for="female" class="radio-inline me-2"><input type="radio" value="Female"
                                        name="gender" id="female" /> Female</label>
                                <label for="other" class="radio-inline"><input type="radio" name="gender" value="Other"
                                        id="other" />
                                    Other</label>
                            </div>
                        </div>

                        <div class="form-group w-25">
                            <label for="dob">Date of birth</label>
                            <input type="date" name="dob" class="form-control" id="dob" />
                        </div>

                        <div class="form-group">
                            <label for="address">Address</label>
                            <input type="text" name="address" class="form-control" id="address" />
                        </div>

                        <div class="form-group w-50">
                            <label for="contno">Contact Number</label>
                            <input type="text" name="contno" class="form-control" id="contno" />
                        </div>

                        <div class="form-group w-50">
                            <label for="password">Password</label>
                            <input type="text" name="password" class="form-control" id="password" />
                        </div>

                        <div class="form-group w-50">
                            <label for="repassword">Confirm Password</label>
                            <input type="text" class="form-control" id="repassword" />
                        </div>

                    </div>

                    <div class="panel-footer" style="margin-left: 10px; padding: 10px;">
                        <input type="submit" name="btnSubmit" value="Submit" class="btn btn-primary">
                    </div>
                </form>
                <div>
                </div>
            </div>
        </div>
</body>

</html>

<?php
include 'connection.php';
if (isset($_POST['btnSubmit']) == 'Submit') {
    $fname = $_POST['firstName'];
    $lname = $_POST['lastName'];
    $surename = $_POST['sureName'];
    $addr = $_POST['address'];
    $email = $_POST['email'];
    $pass = $_POST['password'];
    $gender = $_POST['gender'];
    $dob = $_POST['dob'];
    //$dob1 = date('d-m-Y', strtotime($dob));
    $contactno = $_POST['contno'];
    $currdate = date('d.m.y');

    $qry = "insert into clientTB values('$email','$fname','$lname','$surename','$contactno','$dob','$addr',1,1,1,'$pass','xyz','$currdate','$gender')";
    $res = mysqli_query($connect, $qry);

    if ($res == 1) {
        echo 'data inserted!';
    } else {
        echo '<br>Insertion failed!';
    }
}
mysqli_close($connect);


?>