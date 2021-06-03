<?php
require_once "config/connect.php" ;
require_once "config/configuration.php";

$result=[];

$sql = "SELECT * FROM superuser";
        if($user = $mysqli->query($sql)){
            if($user->num_rows > 0){
                while($row = $user->fetch_assoc()){
                    array_push($result, $row);
                }
                echo json_encode($result);
            }
            else{
            echo "pas de resultat";
            }
        }else {
            echo $mysqli->error;
        }
        
?>