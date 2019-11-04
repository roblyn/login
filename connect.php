<?php 
 $server ='localhost';
 $username='root';
 $password='';
 $db='php';

 $conn = new mysqli($server,$username,$password);

 if($conn->connect_error){

     die("Connection failed" . $conn->connect_error);

 }else {
        echo 'Connected';
 }
 


?>