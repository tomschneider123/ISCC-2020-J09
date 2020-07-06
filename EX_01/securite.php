<html>

<?php

session_start();
if (isset($_POST['mot de passe']))
{
    if ($_POST['mot de passe'] == "2020")
    {
      $_SESSION["id"]=$_POST['nom d_utilisateur'];
      setcookie("id", $_SESSION["id"]);
      <a href="connexion.php">Connexion</a>
      exit();
    }
    else
    {
      echo "Mauvais couple identifiant / mot de passe."
    }

}

?>

</html>