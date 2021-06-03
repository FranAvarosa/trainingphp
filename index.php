<?

require_once "config/connect.php" ;
require_once "config/configuration.php";
require_once "form/loginForm.php";

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
    <title>Mon portfolio</title>
</head>
<body>

<form method="POST">
  <div class="form-group">
    <label for="Email">Email address</label>
    <input type="email" class="form-control" id="Email" aria-describedby="emailHelp" placeholder="Enter email">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="Password">Mot de passe</label>
    <input type="password" class="form-control" id="Password" placeholder="Mot de passe">
  </div>
  <div class="form-group">
    <label for="Passwordconfirm">Confirmer votre mot de passe</label>
    <input type="password" class="form-control" id="Passwordconfirm" placeholder="réentrer votre Mot de passe">
  </div>
  <div class="form-check">
    <input type="checkbox" class="form-check-input" id="Check">
    <label class="form-check-label" for="Check">Voulez vous recevoir notre newsletter ?</label>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<script src="main.js"></script>
</body>
