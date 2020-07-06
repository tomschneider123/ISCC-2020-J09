<html>

<?php

session_start();

  if($var == '2020'):
    $_SESSION["id"]=$login;
    <a href="mini-site-routing.php">Accueil</a>
  else:
      if($var == 'Something Else'):
      echo "Mauvais couple identifiant / mot de passe."
      <a href="connexion.php">Connexion</a>
      endif;
  endif;

?>

</html>