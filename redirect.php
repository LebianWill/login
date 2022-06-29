<?php
if(isset($_POST['submit'])){
// Recevoir les données depuis la page index.php c'est à dire depuis le html
$name = $_POST['name'];
$email = $_POST['email'];
$contact = $_POST['contact'];
$address = $_POST['address'];

// Teste d'abord si les champs sont vraiment bien remplis
if($name !=''&& $email !=''&& $contact !=''&& $address !='')
{
    // Insérer en base de données et rediriger vers le home.php
    // Maintenant il faut que tu t'assure que les identifiants dans le
    // Tableau $_POST soient égaux aux identifiants qui se trouvent dans le fichier index.php
    // Redirige vers la page Home
header("Location:home.php");
}
else{
?><span><?php echo "Remplir tous les champs";?></span> <?php
}
}
?>