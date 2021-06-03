<?php
require_once "../config/connect.php" ;
require_once "../config/configuration.php";



$sql = "SELECT * FROM supersuser";
        if($user = $mysqli->query($sql)){
            if($user->num_rows > 0){
            echo json_encode($user->fetch_assoc());
            }
            else{
            echo "pas de resultat";
            }
        }else {
            echo $mysqli->error;
        }
        
?>