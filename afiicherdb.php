<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>afficher data</title>
</head>
<body>
<?php
			include 'configdb.php';
            $sql=" SELECT * FROM students";
            $res=mysqli_query($conn,$sql);
            if ($res) {
                echo" there problem in retrive user data".mysqli_errno($conn);
                
            }
           $student= mysqli_fetch_array($res);
           
           while ( $student= mysqli_fetch_array($res)) {

              
           }

			
?>
    
</body>
</html>