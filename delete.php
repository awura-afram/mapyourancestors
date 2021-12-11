<?php
include 'connect.php';
if(isset($_GET['deleteid'])){
    $id=$_GET['deleteid'];

    $sql="delete from ancestor where ancestor_id='$id'";
   $result=mysqli_query($conn,$sql);
    if ($result){
        //echo "Deleted succesfully";
        // header('location:display.php');
        echo "
        <script>
        alert('deleted successfully');
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
        die(mysqli_error($con));
    }
}