<!DOCTYPE html>
<html lang="en">
<?php
		  include 'configdb.php';
    ?>  
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Addstudent.css">
    <link rel="stylesheet" href="styleboot/css/bootstrap.min.css">
     <link rel="stylesheet" href="styleboot/js/bootstrap.min.js">
    
    <title>Document</title>
   
</head>
<body>
<div class="continaire  col offset-md-3">
        <form method="POST" action=#>
            <label for="nom" class="label-class">
                Name:
                <input type="text" name="nom" id="nom">
            </label>
            <br><br>
            <label for="email" class="label-class">
               Email:
                <input type="email" name="email" id="email">
            </label>
            <br><br>
            <label for="phone" class="label-class">
               Phone:
                <input type="number" name="phone" id="phone">
            </label>
            <br><br>
            <label for="enroll" class="label-class">
               Enroll number:
                <input type="text" name="enroll" id="enroll">
            </label>
            <br><br>
            <label for="date" class="label-class">
               date of admission:
                <input type="date" name="date" id="date">
            </label>
            <br><br>
            <input type="submit" name="submit" value="S'inscrire">
         </form> 
    </div>   
    <?php
    // recuperer les donner de formulaire
       $nom=$_POST['nom'];
       $email=$_POST['email'];
       $phone=$_POST['phone'];
       $enroll=$_POST['enroll'];
       $date=$_POST['date'];
    //    echo"hello".$nom.$email.$phone;

   
    ?>  

</body>
</html>