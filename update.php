<?php
include 'connect.php';

$id=$_GET['updateid'];
// if(isset($id)){
//     // $sql="Select * from `ancestor` where id=$id";
//     $result=mysqli_query ($con, $sq1);
//     $row= mysqli_fetch_assoc($result);
//     $name=$row['name'];
//     $occupation=$row['occupation'];
//     $location=$row['location'];
//     $status=$row['status'];
//     $dateofdeath= $row['dateofdeath'];
//     $placeofdeath= $row['placeofdeath'];
//     $causeofdeath= $row['causeofdeath'];
// }

if (isset($_POST['submit'])){
    $name=$_POST['name'];
    $occupation=$_POST['occupation'];
    $location=$_POST['location'];
    $status=$_POST['status'];
    $dateofdeath= $_POST['dateofdeath'];
    $placeofdeath= $_POST['placeofdeath'];
    $causeofdeath= $_POST['causeofdeath'];
        

    $sql="update `ancestor` set name='$name',occupation='$occupation',location='$location', status='$status',dateofdeath='$dateofdeath',placeofdeath='$placeofdeath',causeofdeath='$causeofdeath'
    where ancestor_id='$id'";
    $result=mysqli_query ($conn, $sql);
    if($result){
        echo "
        <script>
        alert('updated successfully');
        document.location.href='display.php';
        </script>
        ";
    }else{
        echo "
        <script>
        alert('updated failed');
        window.history.back();
        </script>
        ";
        die (mysqli_error($conn));
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
    
    <!-- <link rel="stylesheet" href="updateform.css"> -->
    <title>Operation</title>
  </head>
  <body>
    <div class="container my-5">
    <?php
    $query = "SELECT * from ancestor where ancestor_id='$id'";
    $result=mysqli_query($conn,$query);
    $row=mysqli_fetch_assoc($result);
    
    ?>
    <form action="" method="post">
        <div class="col-md-6 form group mt-3 mt-md-0">
             <label for=>Name</label>
             <input type="text" name="name"class="form-control"
            placeholder="Enter name" autocomplete="off" value="<?php echo $row['name']; ?>">
        </div>

        <div class="col-md-6 form group mt-3 mt-md-0">
            <label for=>Occupation</label>
            <input type="text" name="occupation" class="form-control"
            placeholder="Enter occupation" autocomplete="off" value="<?php echo $row['occupation']; ?>">
        </div>

        <div class="col-md-6 form group mt-3 mt-md-0">
            <label for=>Location</label>
            <input type="text" name="location" class="form-control"
            placeholder="Enter last located" autocomplete="off" value="<?php echo $row['location']; ?>">
         </div>

        <div class="col-md-6 form group mt-3 mt-md-0">
            <label for=>Status</label>
            <input type="text" name="status" class="form-control"
            placeholder="Enter status" autocomplete="off" value="<?php echo $row['status']; ?>">
        </div>

        <div class="col-md-6 form group mt-3 mt-md-0">
            <label for=>Date of Death</label>
            <input type="date" name="dateofdeath" class="form-control"
            placeholder="Enter date of death"  autocomplete="off" value="<?php echo $row['dateofdeath']; ?>">
        </div>

        <div class="col-md-6 form group mt-3 mt-md-0">
            <label for=>Place of Death</label>
            <input type="text" name="placeofdeath" class="form-control"
            placeholder="Enter place of death" autocomplete="off" value="<?php echo $row['placeofdeath']; ?>">
        </div>

        <div class="col-md-6 form group mt-3 mt-md-0">
            <label for=>Cause of Death</label>
            <input type="text" name="causeofdeath" class="form-control"
            placeholder="Enter cause of death" autocomplete="off" value="<?php echo $row['causeofdeath']; ?>">
        </div>

        <button type="submit" name="submit" class= "btn btn-primary">Submit</button> 

        <!-- <button type ="submit" class="btn btn-primary" name="submit" style="text-decoration: none; color: #fff;">Submit</button> -->
    </form>
    
  </div>
 

     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
   
  </body>
</html>