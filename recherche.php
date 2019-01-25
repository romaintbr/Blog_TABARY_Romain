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

error_reporting(E_ALL);
ini_set('display-errors','on');

try{

   $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   $bdd->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
   //Activation des erreurs de PDO
} catch (Exception $e){
  echo "Erreur : ".$e->getMessage();
}

$search = !empty($_GET['search']) ? $_GET['search'] : NULL; 
//Récupération de ce que l'on recherche
$publie = "oui";
$texte = !empty($_GET['search']) ? "%".$_GET['search']."%" : NULL;
//% puis que la recherche se fait dans une chaîne de caractère
if($search){
  $s = explode(" ", $search);

	   $sql = "SELECT * "
                   . "FROM bootstrap "
                   . "WHERE publie = :publie "
                   . "AND (titre= :recherche "
                   . "OR texte like :texte)";
//Requête de recherche
 $sth = $bdd->prepare($sql); 
 $sth->execute(array(
        "recherche"=> $_GET['search'],
		"publie"=> $publie,
		"texte"=> $texte
    ));
  $i = 0;
  
  while($data = $sth->fetch()){
	  echo $data['texte'];
	  echo "<br>";
  }
}


$smarty = new Smarty();

$smarty->setTemplateDir('templates/');
$smarty->setCompileDir('templates_c/');

include_once 'include/header.inc.php';
include_once 'include/nav.inc.php';

$smarty->display('recherche.tpl');

include_once 'include/footer.inc.php';

?>