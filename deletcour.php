<?php 
include ('connexion.php');
//delet data
$cour=$_GET['id'];
$query=" DELETE FROM  `courses` WHERE id='$cour'";
 mysqli_query($conn,$query);

header('location:./indexcour.php');

?>