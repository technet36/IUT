<?php
$nom = ISSET($_GET["nom"])?$_GET["nom"]:"";
$prenom = ISSET($_GET["prenom"])?$_GET["prenom"]:"";
$email = ISSET($_GET["mail"])?$_GET["mail"]:"";
if($email)
    preg_match('/^[A-z0-9_\-]+[@][A-z0-9_\-]+([.][A-z0-9_\-]+)+[A-z.]{2,4}$/', $email)?$email:"invalid mail";

$myArray = array("email"=>$email);
$myArray += array("satus"=>ISSET($_GET["status"])?$_GET["status"]:"");
$myArray += array("msg"=>ISSET($_GET["msg"])?$_GET["msg"]:"");
$myArray += array("newsletter1"=>ISSET($_GET["newsletter1"])?"Suscribed":"Not subscribed");
$myArray += array("newsletter2"=>ISSET($_GET["newsletter2"])?"Suscribed":"Not subscribed");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Merci</title>
    <link rel="stylesheet" href="contact.css">
</head>
<body>
    <section>
        <div id="header">
            <a href="../index.html"><img src="logo.png" alt="Bon plan logo"></a>
            <h2>Formulaire de contact</h2>
        </div>
        <article>
            <?php
                echo "<p>Bonjour ".$prenom." ".$nom."</p>";
                echo "<ul>";
                if(!empty($myArray)) {
                    foreach($myArray as $key => $value) {
                        echo "<li> <strong>$key</strong> : ", htmlentities($value), "</li>";}
                }
                echo "</ul>";
            ?>

        </article>
    </section>
</body>
</html>

<?php
