<?php
/* it is getting the info from the other file and puting it into this file
 */
  require_once(__DIR__ . '/../model/database.php');
 //conecting to mysql database
  $connection = new mysqli($host, $username, $password);
 //if statement to see if it is a succesful conection
  if($connection->connect_error){
   //program will die if the connection is unseccesful
      die("error: " . "$connection->connect_error");
 }
 
 $exsist = $connection->select_db($database) ;
//if statement to see if databse is created if not create
 if(!$exsist) {
   $query =$connection->query("CREATE DATABASE $database");
 
   if($query){
      echo "succesfully created database" . $database; 
   }
 }
   else{
       echo"<p>database already exsits.</p> ";
   }
//creating a tabel in the database
 $query = $connection->query("CREATE TABLE post ("
         . "id int(11) NOT NULL AUTO_INCREMENT,"
         ."title varchar(255)NOT NULL,"
         ."post text NOT NULL,"
         ."PRIMARY KEY(id))");
 //saying the table was created succesfully
 if($query){
     echo"Succesfully created table: post";
 }
 //echoing pable post already exsists
 else{
     echo"<p>$connection->error</p>";
 }
 
$connection->close();