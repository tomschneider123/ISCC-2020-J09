<!DOCTYPE html>

<html>
<head>
<meta charset="utf8" />
<title>Mini Site Routing</title>
<body>
<?php
if (isset($_GET["page"]))
{
if ($_GET['page'] == "1")
{
    echo "<h1> Accueil </h1>"
}
elseif ($_GET['page'] == "2")
{
    echo "<h1> Page 2 </h1>"
}
elseif ($_GET['page'] == "3")
{
    echo "<h1> Page 3 </h1>"
}
elseif ($_GET['page'] == "connexion")
{
    echo "<h1> Connexion </h1>"
}
}
?>
</body>
</head>
</html>