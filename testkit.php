<?php require ('connect.php');

  if(isset($_POST["dna"])){
         $height = $_POST["height"];
         $haircolor = $_POST["haircolor"];
         $eyecolor = $_POST["eyecolor"];
      

      // Create connection
      $con = new mysqli(servername,username,password,dbname);
       // Check connection
      if ($con->connect_error) {
        die("Connection failed: " . $con->connect_error);
      }
     $sql ="SELECT `height`, `haircolor`,`eyecolor` FROM `DNA` WHERE `height`='$height',`haircolor`='$haircolor' AND `eyecolor`='$eyecolor'";
       $result = $con->query($sql);
      
      //check if record exist
       if($result->num_rows>0){
         header("location:testkit.php");
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


        <div class="col-lg-6">
            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
              <div class="row">
                <div class="col-md-6 form-group mt-3 mt-md-6">
                  <input type="text" name="height" class="form-control" id="height" placeholder="Your height" required>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-6">
                  <input type="text" class="form-control" name="haircolor" id="haircolor" placeholder="Your hair color" required>
                </div>
              </div>
              <div class=" col-md-6 form-group mt-3 mt-md-6">
                <input type="text" class="form-control" name="eyecolor" id="eyecolor" placeholder="Your eye color" required>
              </div>
              <div class="col-md-9 form-group mt-3 mt-md-6">
                <textarea class="form-control" name="message" rows="5" placeholder="Additional Information" required></textarea>
              </div>
              <!-- <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div> -->
              <div class="text-center"><button type="submit" class="btn btn-warning">Submit</button></div>
            </form>
        </div>