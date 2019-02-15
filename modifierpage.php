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

if (isset($_POST['titre']) && isset($_POST['texte'])) {

		$sql = 'UPDATE bootstrap SET texte=:texte, titre=:titre WHERE id=:id';
		//Requête de modification
		$sth = $bdd->prepare($sql); 
                //Preparation de la base
                //Execution de la requête
		$sth->execute(array(
                "texte"=> $_POST['texte'],
		"id"=> $_POST['id'],
		"titre"=>$_POST['titre']
    ));
		
		$sth =null;
		
		$url_redirect ='index.php';
        
           header("Location:$url_redirect");
}
else {
$smarty = new Smarty();

$smarty->setTemplateDir('templates/');
$smarty->setCompileDir('templates_c/');

include_once 'include/header.inc.php';
include_once 'include/nav.inc.php';

$smarty->display('modifierpage.tpl');
//Affichage du template modifierpage.tpl et insertion du header, de la barre de navigation et du footer

include_once 'include/footer.inc.php';

}
?>

<script type="text/javascript">
    document.getElementById('id').value = <?php echo $_GET['id']?>;
 </script>             
</body>
</html>
