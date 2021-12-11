<?php require ('connect.php');

  if(isset($_POST["dna"])){
         $fname = $_POST["fname"];
         $lname = $_POST["lname"];
         $city = $_POST["city"];
      

      // Create connection
      $con = new mysqli(servername,username,password,dbname);
       // Check connection
      if ($con->connect_error) {
        die("Connection failed: " . $con->connect_error);
      }
     $sql ="SELECT `fname`, `lname`,`city` FROM `ancestor` WHERE `fname`='$fname',`lname`='$lname' AND `city`='$city'";
       $result = $con->query($sql);
      
      //check if record exist
       if($result->num_rows>0){
         header("location:ances.php");
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
    <link rel="stylesheet" href="">

  </head>
  <body>
        <div class="card col-6 " id="login-card">
        <div class="col-lg-6">
        <div class="card-body">
            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
              <div class="row">
              <div class="dropdown">
            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown button
            </button>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                <li><a class="dropdown-item" href="#">Grandparent</a></li>
                <li><a class="dropdown-item" href="#">Greatgrandparent</a></li>
                <li><a class="dropdown-item" href="#">Cousin</a></li>
                <li><a class="dropdown-item" href="#">Aunt/Uncle</a></li>

            </ul>
        </div>
                <div class="col-md-7 form-group mt-3 mt-md-6">
                <label for="dob" class="form-label">First Name</label>
                <input type="text" class="form-control" name="name" id="name" placeholder="First name" required>
                </div>

                <div class=" col-md-7 form-group mt-3 mt-md-6">
                <label for="dob" class="form-label">Last Name</label>
                <input type="text" class="form-control" name="name" id="name" placeholder="Last name" required>
                </div>

                <div class=" col-md-9 form-group mt-3 mt-md-7">
                <label for="dob" class="form-label">Place your ancestor might have lived</label>
                <input type="text" class="form-control" name="place" id="place" placeholder="City,Country,State" required>
                </div>
                <div class="text-center"><button type="submit" class="btn btn-warning">Explore Now</button></div>
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



