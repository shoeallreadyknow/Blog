<?php
/* it is getting the info from the other file and puting it into this file
 */
  require_once(__DIR__ . '/../model/database.php');
 //conecting to mysql database
  $connection = new mysqli($host, $user, $password);
 //if statement to see if it is a succesful conection
  if($connection->connect_error){
   //program will die if the connection is unseccesful
      die("error: " . "$connection->connect_error");
 }
 //this will run if it is a succesful conection
 else {
     //will say succces if program is succesful
    echo"success" . $connection->connect_error;
}
$connection->close();