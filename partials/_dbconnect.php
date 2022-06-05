<?php

$hostname = "localhost";
   $userid = "root";
   $pass = "sneha";
   $dbname = "phpwebsite";
   $conn = new mysqli($hostname,$userid,$pass,$dbname);
   
   if(!$conn){
       echo "error in getting connection";
   }
   else{
         echo "";
   }
?>