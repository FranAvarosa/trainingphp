<?php

$error = null;

/*if (isset($_POST) && !empty($_POST)){
    $error = [];

    if (empty($_POST['superuser_email']) or filter_var($_POST['superuser_email'], FILTER_VALIDATE_EMAIL === FALSE)){
        $error['email'] = "Votre email comporte une erreur";
    }
    if (empty($_POST['superuser_password']) && empty($_POST['superuser_passwordconfirm']) or $_POST['superuser_password'] !== $_POST['superuser_passwordconfirm']){
        $error['password'] = "mot de passe ne correspond pas à la confirmation";
    }
    if (strlen($_POST['superuser_password']) < 4 && strlen($_POST['superuser_password']) > 30){
        $error['password2'] = "Votre mot de passe doit etre de au moins 4 caractere et pas plus que 30";
    }
    if (strlen($_POST['superuser_pseudo']) < 3 && strlen($_POST['superuser_pseudo']) > 30){
        $error['pseudo'] = "Votre pseudo doit etre de au moins 3 caractere et pas plus que 30";
    }

    if(empty($error)){
        $pseudo = $_POST['superuser_pseudo'];
        $password = password_hash($_POST['superuser_password'], PASSWORD_DEFAULT);
        $email = $_POST['superuser_email'];
        if($_POST['superuser_newsletter'] == true){
            $newsletter = 1;
        }else{
            $newsletter = 0;
        }
        $role = json_encode(['superuser']);

        $sql = "INSERT INTO superuser(pseudo,email,password,newsletter,role) VALUES ('$pseudo','$email','$password','$newsletter','$role')";
        if($mysqli->query($sql) === true){
            $_SESSION['msg_flash'] = 'Votre compte à été créer avec succès !!';
            redirect('index.php');
        }
        else {
            $error = 'Une erreur est survenue, compte non créer !!';
        }

         echo '<br>'.$newsletter;
    }
}*/
