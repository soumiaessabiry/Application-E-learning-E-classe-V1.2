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
    
    <title>add student</title>
   
</head>
<body>
<div class="continaire  col offset-md-3">
        <form method="POST" action="indexstudent.php">
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
                <input type="text" name="phone" id="phone">
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
      @$nom=htmlspecialchars($_POST['nom']);
       @$email=$_POST['email'];
       @$phone=$_POST['phone'];
       @$enroll=$_POST['enroll'];
       @$date=$_POST['date'];
    //    echo"hello".$nom.$email.$phone;
       if (isset($_POST['submit'])) {
        if(empty($_POST['nom'])) {
            echo" add user name !!!<br>";
        }else {
            $nom=htmlspecialchars($_POST['nom']);
        }

        if(empty($_POST['email'])) {
            echo" add user email !!!<br>";
        }else {
            $nom=htmlspecialchars($_POST['email']);
        }
        if(empty($_POST['phone'])) {
            echo" add user phone !!!<br>";
        }else {
            $nom=htmlspecialchars($_POST['phone']);
        }
        if(empty($_POST['enroll'])) {
            echo" add user enroll !!!<br>";
        }else {
            $nom=htmlspecialchars($_POST['enroll']);
        }
        if(empty($_POST['date'])) {
            echo" add user date !!!<br>";
        }else {
            $nom=htmlspecialchars($_POST['date']);
        }
       }
       
       mysqli_select_db($conn,'e_classe_db');
       $sql=" INSERT INTO `students`(`name`, `email`, `phone`, `enroll_number`, `date_of_admission`) VALUES ('$nom','$email','$phone','$enroll','$date')";
       $res=mysqli_query($conn,$sql);
       if (!$res) {
           echo"vous avez un probleme pour l'insertion".mysqli_error($conn);
        
       }
      
    ?>  

</body>
</html>