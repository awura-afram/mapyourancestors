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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">

    <title>Operation</title>
  </head>
  <body>
    <div class="container my-5">
    <form action="" method="post">
        <div class="col-md-6 form group mt-3 mt-md-0">
             <label for=>Name</label>
             <input type="text" name="name"class="form-control"
            placeholder="Enter name" autocomplete="off">
        </div>

        <div class="col-md-6 form group mt-3 mt-md-0">
            <label for=>Occupation</label>
            <input type="text" name="occupation" class="form-control"
            placeholder="Enter occupation" autocomplete="off">
        </div>

        <div class="col-md-6 form group mt-3 mt-md-0">
            <label for=>Location</label>
            <input type="text" name="location" class="form-control"
            placeholder="Enter last located" autocomplete="off">
         </div>

        <div class="col-md-6 form group mt-3 mt-md-0">
            <label for=>Status</label>
            <input type="text" name="status" class="form-control"
            placeholder="Enter status" autocomplete="off">
        </div>

        <div class="col-md-6 form group mt-3 mt-md-0">
            <label for=>Date of Death</label>
            <input type="date" name="dateofdeath" class="form-control"
            placeholder="Enter date of death"  autocomplete="off">
        </div>

        <div class="col-md-6 form group mt-3 mt-md-0">
            <label for=>Place of Death</label>
            <input type="text" name="placeofdeath" class="form-control"
            placeholder="Enter place of death" autocomplete="off">
        </div>

        <div class="col-md-6 form group mt-3 mt-md-0">
            <label for=>Cause of Death</label>
            <input type="text" name="causeofdeath" class="form-control"
            placeholder="Enter cause of death" autocomplete="off">
        </div>

        <button type="submit" name="submit" class= "btn btn-primary">Submit</button> 

        <!-- <button type ="submit" class="btn btn-primary" name="submit" style="text-decoration: none; color: #fff;">Submit</button> -->
    </form>
    
  </div>
 

   
  </body>
</html>