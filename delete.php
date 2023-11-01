<?php 
include 'connect.php';
if(isset($_GET['deleteid'])){
    $id=$_GET['deleteid'];
    $sql="delete from `crud` where id=$id";
    $result = $con->query($sql);
    if($result){
        header('location:index.php');

    }else{
        die(mysqli_error($con));
    }
}
?>