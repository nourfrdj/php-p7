<?php SESSION_start() ?>
<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title>partie7 ex2 Php</title>
</head>
<body>
<p>votre nom est : <?=$_SESSION['firstname']?></p>
<p>votre prenom est : <?=$_SESSION['lastname']?></p>
<p>votre age est : <?=$_SESSION['age']?> </p>
</body>
</html>