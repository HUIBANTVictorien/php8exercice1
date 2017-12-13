<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>exercice 1 partie 8 php</title>
  </head>
  <body>
    <?php
    echo('Le user agent est : ' . $_SERVER['HTTP_USER_AGENT'] . '. L\'adresse ip est : ' . $_SERVER['REMOTE_ADDR'] . '. Le nom du serveur est : ' . $_SERVER['SERVER_NAME']);
    ?>
  </body>
</html>
