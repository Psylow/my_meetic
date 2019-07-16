<?php

include('register.php');

?>
<!DOCTYPE html>
<html>
<head>
    <title>My_Meetic</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="header">

</div>
    <form method="post" action="index.php">
        <div class="bold-line"></div>
        <div class="container">
            <div class="window">
                <div class="overlay"></div>
                <div class="content">
                    <div class="input-fields">
        <label>Vous êtes : </label><br><br>
        <label>Homme</label><input type="radio" name="boy" value="homme" class='input-line full-width'>
        <label>Femme</label><input type="radio" name="girl" value="femme" class='input-line full-width'>
        <label>Autre</label><input type="radio" name="other" value="autre" class='input-line full-width'><br><br>
        <label>Nom : </label><input type="text" name="nom" class='input-line full-width'><br>
        <label>Prénom : </label><input type="text" name="prenom" class='input-line full-width'><br>
        <label>Date de naissance : </label><input type="date" name="date" class='input-line full-width'><br>
        <label>Ville : </label><input type="text" name="ville" class='input-line full-width'><br>
        <label>Adresse-mail : </label><input type="text" name="email" class='input-line full-width'><br>
        <label>Mot de passe : </label><input type="password" name="password" class='input-line full-width'><br>
        <label>Confirmer le mot de passe : </label><input type="password" name="password1" class='input-line full-width'><br>
        <input type="checkbox"><label>J'atteste avoir plus de 18 ans.</label><br>
        <input type="checkbox"><label>Je souhaite recevoir la newsletter par e-mail.</label><br>
        <input type="submit" value="Je confirme mon inscription" name="reg_user" class='ghost-round full-width'>
                    </div>
                </div>
            </div>
    </form>
</body>
</html>
