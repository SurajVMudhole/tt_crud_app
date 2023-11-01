<?php
$con = new mysqli('localhost','root','','tt_crud_db');
if(!$con){
    die(mysqli_error($con));
}
?>