<!DOCTYPE html>
<html>
<head>
<title>Login</title>
<meta content="noindex, nofollow" name="robots">
<link href='form.css' rel='stylesheet' type='text/css'> <!--== Include CSS File Here ==-->
</head>
<body>
<div class="main">
<div class="first">
<h2>Se connecter</h2>
<form action="index.php" id="#form" method="post" name="#form">
<label>Nom :</label>
<input id="name" name="name" placeholder='Votre nom' type='text'>
<label>Adresse Mail :</label>
<input id="email" name="email" placeholder='Adresse mail valide' type='text'>
<label>Contact :</label>
<input id="contact" name="contact" placeholder='N° de Téléphone' type='text'>
<label>Adresse:</label>
<input id="address" name="address" placeholder='Votre addresse' type='text' value="">
<input id='btn' name="submit" type='submit' value='Se connecter'>
<!---- Inclure le fichier Php de redirection ici ---->
<?php 
    include('redirect.php');
?>
</form>
</div>
</div>
</body>
</html>