<?php

require_once "config/connect.php" ;
require_once "config/configuration.php";
require_once "form/indexForm.php";

?>

<!doctype html>
<html lang="fr">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="style/index.css">
    <title>Petit formulaire php</title>
</head>
<body>
<?php
    if(isset($_SESSION['msg_flash']) && !empty($_SESSION['msg_flash'])){
        echo '<div id="creation" class="alert alert-success">'.$_SESSION['msg_flash'].'</div>';
        unset($_SESSION['msg_flash']);
        $_SESSION['msg_flash'] = null;
    }
?>

<form class="form-center" method="POST">
    <?php
        echo '<p class="error">';
        if (isset($error)){
            // echo '<p class="error">'.$error.'</p>';
            // echo _dump($error);
            if(is_array($error)){
                foreach ($error as $values){
                    echo $values.'<br><br>';
                }
            }
        }
        echo '</p>';
    ?>
  <div class="form-group">
    <label for="superuser_pseudo">Nom d'utilisateur</label>
    <input type="text" class="form-control" id="superuser_pseudo" name="superuser_pseudo" placeholder="Nom d'utilisateur">
  </div>
  <div class="form-group">
    <label for="superuser_email">Email address</label>
    <input type="email" class="form-control" id="superuser_email" name="superuser_email" placeholder="Enter email">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="superuser_password">Mot de passe</label>
    <input type="password" class="form-control" id="superuser_password" name="superuser_password" placeholder="Mot de passe">
  </div>
  <div class="form-group">
    <label for="superuser_passwordconfirm">Confirmer votre mot de passe</label>
    <input type="password" class="form-control" id="superuser_passwordconfirm" name="superuser_passwordconfirm" placeholder="réentrer votre Mot de passe">
  </div>
  <div class="form-check">
    <input type="checkbox" class="form-check-input" id="superuser_newsletter" name="superuser_newsletter">
    <label class="form-check-label" for="superuser_newsletter" >Voulez vous recevoir notre newsletter ?</label>
  </div>
    </br>
  <button type="submit" class="btn btn-primary" id="superuser_submit">Submit</button>
</form>

<button type="button" class="btn btn-success" id="showall">Afficher tout les utilisateurs</button>
<div id="reponse"></div>
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<script src="js/main.js"></script>
</body>
