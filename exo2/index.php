<?php SESSION_start() ?>
<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title>partie7 ex1 Php</title>
</head>
<body>
<?php
$_SESSION['firstname']='fredj';
$_SESSION['lastname']='nourhene';
$_SESSION['age']='29';
?>

<a href="page2?$session">lien vers la page 2 </a>

</body>
</html>