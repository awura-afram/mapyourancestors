<?php require 'connect.php';

if (isset($_POST['create'])) {
    $firstname =        $_POST['first_name'];
    $middlename =       $_POST['middle_name'];
    $lastname =         $_POST['last_name'];
    $age =              $_POST['age'];
    $gender =           $_POST['gender'];
    $dateofbirth =      $_POST['date_of_birth'];
    $placeofbirth =     $_POST['place_of_birth'];
    $nationality =      $_POST['nationality'];
    $email =            $_POST['email'];
    $password =         $_POST['password'];
    $confirmpassword =  $_POST['confirmpassword'];


    if (($password == $confirmpassword) && !(empty($firstname) || !empty($middlename) || !empty($lastname) || !empty($age) || !empty($gender) || !empty($dateofbirth) || !empty($placeofbirth) || !empty($nationality) || !empty($email) ||
        !empty($password) ||!empty($confirmpassword))) {
        $sql = "INSERT INTO `person`(`first_name`, `middle_name`, `last_name`, `age`, `gender`, `date_of_birth`, `place_of_birth`, `nationality`, `email`, `password`) VALUES ('$firstname','$middlename','$lastname','$age','$gender','$dateofbirth','$placeofbirth','$nationality','$email','$password')";
        $result = $conn->query($sql);

        if ($result) {
            header("location:login.php");
        } else {
            echo "Error: " . $sql . ":-" . mysqli_error($conn);
        }
    } else {
        if (empty($password) &&  empty($confirmpassword)) {
            $match = "";
        } else {
            $match =  "Passwords do not match";
        }
    }


    $result = '';
    if (
        empty($firstname) || empty($middlename) || empty($lastname) || empty($age) || empty($dateofbirth) || empty($placeofbirth) || empty($email) || empty($nationality) || empty($email) ||
        empty($password) || empty($confirmpassword)
    ) {
        $error = "enter required fields!";
    }
}
?>


<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/0594667512.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="register.css">

</head>

<body>
    <div class="card col-4 " id="login-card">
        <div class="card-body">
            <form class="row g-9" method='POST' action="./register.php">
                <h1>SIGN UP</h1>
                <div class="col-lg-7">
                    <form action="forms/register.php" method="post" role="form">
                        <div class="row">
                            <div class="col-md-7 form-group">
                                <input type="text" name="first_name" class="form-control" id="name" placeholder="First Name" required>
                            </div>
                            <div class="col-md-7 form-group mt-3 mt-md-6">
                                <input type="text" class="form-control" name="middle_name" id="name" placeholder="Middle Name" required>
                            </div>
                            <div class="form-group mt-3">
                                <input type="text" class="form-control" name="last_name" id="name" placeholder="Last Name" required>
                            </div>
                            <div class="col-md-7 form-group mt-3 mt-md-9">
                                <input type="number" class="form-control" name="age" id="age" placeholder="Age" required>
                            </div>
                            <label for="gender" class="form-label">Gender</label>
                            <div class="form-group mt-3">
                                <input type="radio" name="gender" value="male"> Male<br>
                                <input type="radio" name="gender" value="female"> Female<br>
                                <class="form-control" name="gender" id="gender" placeholder="Gender" required>
                            </div>
                            <div class="form-group mt-3">
                                <label for="dob" class="form-label">Date of Birth</label>
                                <input type="date" class="form-control" name="date_of_birth" id="dob" placeholder="Date of Birth" required>
                            </div>
                            <div class="form-group mt-3">
                                <input type="text" class="form-control" name="place_of_birth" id="pob" placeholder="Place of Birth" required>
                            </div>
                            <div class="col-md-9 form-group mt-3 mt-md-6">
                                <input type="text" class="form-control" name="nationality" id="name" placeholder="Nationality" required>
                            </div>
                            <div class="col-md-9 form-group mt-3 mt-md-6">
                                <input type="text" class="form-control" name="email" id="email" placeholder="Email" required>
                            </div>
                            <div class="form-group mt-3">
                                <input type="password" class="form-control" name="password" id="password" placeholder="Password" required>
                            </div>
                            <div class="form-group mt-3">
                                <input type="password" class="form-control" name="confirmpassword" id="password" placeholder="Confirm Password" required>
                            </div>
                        </div>
                        <div class="col-md-6 form-group mt-3 mt-md-6 text-sm-center"><input name = "create" type="submit" class="btn btn-warning"> </input></div>
                        <p>Already have an account ? <a href="login.php">Log in</a></p>
                    </form>
                </div>



                <!-- Optional JavaScript; choose one of the two! -->

                <!-- Option 1: Bootstrap Bundle with Popper -->
                <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

                <!-- Option 2: Separate Popper and Bootstrap JS -->
                <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
</body>

</html>
