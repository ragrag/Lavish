<?php  //Connect to db and add connection

function OpenCon()
 {
 $dbhost = "localhost:3306";
 $dbuser = "root";
 $dbpass = "";
 $db = "lavishdb";


 $conn = new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $conn -> error);

 
 return $conn;
 }
 
function CloseCon($conn)
 {
 $conn -> close();
 }
   
?>