<?php

error_reporting(E_ALL);
ini_set('display_errors', '1');

    validate_login($_POST['username'], $_POST['psw']);

  
    function validate_login($username,$password){
    include 'connect.php';
    
    $sql = "SELECT * FROM php.users  WHERE name='".$username."' AND password='".$password."'  ";
    $result = $conn->query($sql)or die ("Failed to validate user " .mysqli_error($conn) );
    $count = mysqli_num_rows($result) ;
    if($count > 0){
        echo '<script>';
        echo 'alert("Welcome!!");';
    echo '</script>';
    }else{
        echo '<script>';
				echo 'alert("Wrong password or Username");';
				echo 'window.location.href="index.php";';
			echo '</script>';
    }
}
    ?>