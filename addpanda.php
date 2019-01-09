<?php

$pagelevel = 4;

require_once("logincheck.php");
require_once("db.php");
require_once("header.php");

$Name = $_POST[Name];
$Gender = $_POST[Gender];
$Age = $_POST[Age];
$Spouse = $_POST[Spouse];
$Posterity = $_POST[Posterity];
$Birthday = $_POST[Birthday];
$Room = $_POST[Room];
$Collar_number = $_POST[Collar_number];



$query  = "INSERT INTO panda (Name, Gender, Age, Spouse, Posterity, Birthday, Room, Collar_number,) ";
$query .= "VALUES ('$Name', '$Gender', '$Age', '$Spouse', '$Posterity', '$Birthday', '$Room', '$Collar_number') ";


mysqli_query($connection, $query);


?>


<form action="addpanda.php" method="post">
   
    <p>Name</p> <input type="text" name="Name"><br>
    
     <p>Gender</p><input type="text" name="Gender"><br>
    
    <p>Age</p><input type="varchar" name="Age"><br>
    
    <p>Spouse</p><input type="text" name="Spouse"><br>
    
    <p>Posterity</p><input type="text" name="Posterity"><br>
    
    <p>Birthday</p><input type="date" name="Birthday"><br>
    
    <p>Room</p><input type="varchar" name="Room"><br>
    
    <p>Collar_number</p><input type="int" name="Collar_number"><br>
    
    
     
    <input type="submit" name="submit" value="Submit">
    


</form>


<html>
<head>
    <link rel="stylesheet" type="text/css" href="css/information.css">
    </head>


<body>
     <style type="text/css">
         body {
        background-image: url();
        background-size: cover;
        }
         </body>
         </html>  
         



<?php

mysqli_close($connection);
?>