<?php
include 'connect.php';

 if(isset($_POST['submit'])){
     echo "works";
    $name= $_POST['name'];
    $occupation= $_POST['occupation'];
    $location= $_POST['location'];
    $status= $_POST['status'];
    $dateofdeath= $_POST['dateofdeath'];
    $placeofdeath= $_POST['placeofdeath'];
    $causeofdeath= $_POST['causeofdeath'];
    

    $sql = "INSERT INTO `ancestor` (`name`, `occupation`, `location`,`status`,`dateofdeath`,`placeofdeath`, `causeofdeath`) values('$name','$occupation','$location','$status','$dateofdeath','$placeofdeath','$causeofdeath')";
    $result=mysqli_query($conn, $sql);
     if($result){
        //echo "Data inserted successfully";
        header('location:display.php');

        // echo $name." ".$occupation." ".$location."".$status." ".$dateofdeath."".$placeofdeath." ".$causeofdeath;
    }
    else{
         echo "failed";
        //  die($mysqli_error($conn));
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
    <link rel="stylesheet" href="admin.css">

  </head>

  <body>
    <div class="card col-4 " id="login-card">
      <div class="card-body">
        <form class="row g-9" method= 'POST' action= "./login.php">
        <h1>Ancestor Information</h1>
      <div class="col-lg-7">
        <!-- <form action="forms/login.php" method="post" role="form" class="php-email-form"> -->
        <div class="row">
        <div class="form-group mt-3">
        <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control" name="name" id="name" placeholder="Enter name" required>
        </div>
        <div class="form-group mt-3">
        <label for="occupation" class="form-label">Occupation</label>
            <input type="text" class="form-control" name="occupation" id="occupation" placeholder="Enter occupation" required>
        </div>
        <div class="form-group mt-3">
        <label for="location" class="form-label">Location</label>
            <input type="text" class="form-control" name="location" id="location" placeholder="Enter last located" required>
        </div>
        <div class="form-group mt-3">
        <label for="status" class="form-label">Status</label>
            <input type="text" class="form-control" name="status" id="status" placeholder="Enter status" required>
        </div>
        <div class="form-group mt-3">
        <label for="dateofdeath" class="form-label">Date of death</label>
            <input type="date" class="form-control" name="dateofdeath" id="dateofdeath" placeholder="Enter date of death" required>
        </div>
        <div class="form-group mt-3">
        <label for="placeofdeath" class="form-label">Place of death</label>
            <input type="text" class="form-control" name="placeofdeath" id="placeofdeath" placeholder="Enter place of death" required>
        </div>
          <div class="form-group mt-3">
          <label for="causeofdeath" class="form-label">Cause of death</label>
            <input type="text" class="form-control" name="causeofdeath" id="causeofdeath" placeholder="Enter cause of death" required>
          </div>
        <div class="col-md-6 form-group mt-3 mt-md-6 text-center"><input type="submit" name="Submit" class="btn" value="Submit"></div> 
      </form> 
    </div> 
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
   </body>
</html>
 
           

        
