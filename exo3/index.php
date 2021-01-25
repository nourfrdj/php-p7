<?php
setcookie('login', 'log', time() + 365 * 24 * 3600);
// time() + 365*24*3600 permet de conserver le cookies pendant un an 
?>
<!doctype html>
<html lang="fr">

<head>
  <meta charset="utf-8">
  <title>partie7 exo3</title>
</head>

<body>
  <?=var_dump ($_COOKIE['login']);?>
  <? if(isset($_POST['envoyer'])){
//     setcookie('login', "$_POST['login']", time() + 365 * 24 * 3600);
//         //header("refresh");
//  var_dump($_COOKIE['login']);} 
  echo "dfghjkuytretyuiougfhj";?>
  <? else  {?>
  
  <form method="POST">
    <!-- si on ne fait rien pour le action il reste dur la meme page par defaut -->

    <p>login : <input type="text" name="login" required /></p>
    <?$login=$_POST['login']?>
    <p>Votre mot de passe : <input type="password" name="passwrd" required /></p>
    <?$mdp=$_POST['passwrd']?>
    <p><input type="submit" value="envoyer"></p>
    <? } ?>

  </form>
</body>

</html>