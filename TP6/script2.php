<!DOCTYPE html>
<html lang="fr">
<head>
  <title>Page résultat</title>
  <meta charset="utf-8" />
</head>

<body>
  <h1> Les paramètres reçus par le serveur sont : </h1>
  <?php
    echo "<ul>";
    if(!empty($_POST)) {
        foreach($_POST as $key => $value) {
          echo "<li> <strong>$key</strong> : ", htmlentities($value), "</li>";}
        }
    else {
        foreach($_GET as $key => $value) {
          echo "<li> <strong>$key</strong> : ", htmlentities($value), "</li>";
        }
    }
    echo "</ul>";
  ?>
 </body>
</html>
