<?php
include 'connect.php';
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ancestor Information</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    

</head>
<body>

<div class ="container">
<button class= "btn btn-primary my-5"><a href="adminn.php" style="text-decoration: none; color: #fff;">
 Add user </a>


 </button>

 <table class="table">
  <thead>
    <tr>
      <th scope="col">Name</th>
      <th scope="col">Occupation</th>
      <th scope="col">Location</th>
      <th scope="col">Status</th>
      <th scope="col">Date of death</th>
      <th scope="col">Place of death</th>
      <th scope="col">Cause of death</th>
    </tr>
  </thead>
  <tbody>

<?php




$sql="Select * from `ancestor`";
$result=mysqli_query($conn,$sql);

// print_r($result);
if($result){
    while($row=mysqli_fetch_assoc($result)){
        $name=$row['name'];
        $occupation=$row['occupation'];
        $location=$row['location'];
        $status=$row['status'];
        $dateofdeath=$row['dateofdeath'];
        $placeofdeath=$row['placeofdeath'];
        $causeofdeath=$row['causeofdeath'];
        echo ' <tr>
        <td>'.$name.'</td>
        <td>'.$occupation.'</td>
        <td>'.$location.'</td>
        <td>'.$status.'</td>
        <td>'.$dateofdeath.'</td>
        <td>'.$placeofdeath.'</td>
        <td>'.$causeofdeath.'</td>
        <td>
        <button class= "btn btn-primary"><a href="update.php?updateid='.$row['ancestor_id'].'" style="text-decoration: none; color: #fff;">Update</a></button>
        <button class="btn btn-danger"><a href="delete.php?deleteid='.$row['ancestor_id'].'" style="text-decoration: none; color: #fff;">Delete</a></button>
        
        </td>
        
      </tr>';
    }
}




?>





   
 </tbody>
 </table>
 </div>
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

 </body>
</html>
