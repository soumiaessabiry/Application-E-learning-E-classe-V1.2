<?php 
include ('connexion.php');
//delet data
$del=$_GET['id'];
$query=" DELETE FROM `students` WHERE id='$del'";
 mysqli_query($conn,$query);

header('location:./indexstudent.php');





?>