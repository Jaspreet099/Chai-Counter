<?php

$hostname = "localhost";
   $userid = "root";
   $pass = "";
   $dbname = "chai-counter";
   
   $conn = new mysqli($hostname,$userid,$pass,$dbname);
   
   if(!$conn){
       echo "error in getting connection";
   }
   else{
         echo "d";
   }
?>