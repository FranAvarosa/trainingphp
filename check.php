<?php
require_once "../config/connect.php" ;
require_once "../config/configuration.php";



$sql = "SELECT pseudo FROM supersuser";
        if($user = $mysqli->query($sql)){
            if($user->num_rows > 0){
            echo "true";
            } else{
            echo "false";
            }
        }else {
            echo $mysqli->error;
        }
        
?>