<?php

$con= new mysqli('localhost','root','','nisdb')or die("Could not connect to mysql".mysqli_error($con));


if (isset($_SESSION['profile'])) { 


    $result = mysqli_query($con, "SELECT token FROM user_token where username='".$_SESSION['profile']."'");
 
    if (mysqli_num_rows($result) > 0) {
      
        $row = mysqli_fetch_array($result); 
        $token = $row['token']; 
        

        if($_SESSION['token'] != $token){
          
            session_destroy();
            header('Location: index.php');
        }
    }
      
}