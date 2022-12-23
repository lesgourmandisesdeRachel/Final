<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>Aux Gourmandises de Rachel</title>
</head>

<body>
    <?php
    $retour = mail("carreau.v@free.fr", "Renseignement ", $_POST['message'], "");
    if ($retour)
        echo '<p>Votre message a bien été envoyé.</p>';
    ?>
</body>
</html>