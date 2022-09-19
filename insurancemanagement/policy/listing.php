<?php
include "../connection.php";    

// print_r($_GET);
$id = $_GET['id']; // $id is now defined

// or assuming your column is indeed an int
// $id = (int)$_GET['id'];

   
$sql = "delete from policy_data where Policy_Num = '".$id."'";    
$result = mysqli_query($conn,$sql);
header("Location: modified.php");
?> 