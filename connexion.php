<?php
session_start();
require_once 'config/init.conf.php';
require_once 'config/bdd.conf.php';
require_once 'include/fonction.inc.php';
//Insertion de l'html
require_once 'include/connexion.inc.php';
include_once 'include/header.inc.php';
include_once 'include/nav.inc.php';

require_once("libs/Smarty.class.php");

if (isset($_SESSION['notification'])) {
    $color_notification = $_SESSION['notification']['result'] == TRUE ? 'success' : 'danger';
}

if (isset($_POST['submit'])) {
  print_r2($_POST);
  print_r2($_FILES);

  $notification ="";

  $sql_insert = "SELECT * "
                ."FROM utilisateur "
                ."WHERE email = :email "
                ."AND mdp = :mdp";
//Requête pour la connexion
      $sth = $bdd->prepare($sql_insert);

$sth->bindValue(':email',$_POST['email'], PDO::PARAM_STR);
$sth->bindValue(':mdp',cryptPassword($_POST['mdp']), PDO::PARAM_STR);

$result = $sth->execute();

var_dump($result);


if ($sth->rowCount() <1) {
  $notification = '<b>Attention</b> login et/ou mot de passe incorrect.';
  $result_notification = FALSE;
  $url_redirect ='connexion.php';
}else {

  $sid = sid($_POST['email']);

  $sql_update = "UPDATE utilisateur "
                ."SET sid = :sid "
                ."WHERE email = :email;";

  $sth_update = $bdd->prepare($sql_update);

  //Sécurisation des variables
  $sth_update->bindValue(':email',$_POST['email'], PDO::PARAM_STR);
  $sth_update->bindValue(':sid',$sid, PDO::PARAM_STR);

  $result_update = $sth_update->execute();

  setcookie('sid', $sid, time() +86400);

  $notification = '<b>Félicitation</b> Vous êtes bien connecté.';

  $result_notification = TRUE;

  $url_redirect ='index.php';
}

$_SESSION['notification']['message'] = $notification;
$_SESSION['notification']['result'] = $result_notification;

header("Location:$url_redirect");
exit();
}
else{


   
$smarty = new Smarty();

$smarty->setTemplateDir('templates/');
$smarty->setCompileDir('templates_c/');

if (isset($_SESSION['notification'])) {
$smarty->assign('session_var', $_SESSION);
$smarty->assign('color_notification', $color_notification);
unset($_SESSION['notifications']);
}



include_once 'include/header.inc.php';
include_once 'include/nav.inc.php';

$smarty->display('connexion.tpl');

include_once 'include/footer.inc.php';


}

?>
