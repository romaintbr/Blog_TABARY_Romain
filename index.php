<?php
session_start();
include_once 'config/bdd.conf.php';
include_once 'config/init.conf.php';
//Insertion de l'html
require_once 'include/connexion.inc.php';
include_once 'include/header.inc.php';
include_once 'include/nav.inc.php';
require_once 'include/fonction.inc.php';

if (isset($_SESSION['notification'])){
    $color_notification = $_SESSION['notification']['result'] == TRUE ? 'succes' : 'danger';
}

$page_courante = !empty($_GET['page']) ? $_GET['page'] : 1;

$index_depart_MySQL = indexPagination($page_courante, _nb_art_par_page);

$nb_total_article_publie = nb_total_article_publie($bdd);

$nb_pages = ceil($nb_total_article_publie / _nb_art_par_page);

?>

    <!-- Page Content -->
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <h1 class="mt-5">Articles publiés</h1>
          <?php if (isset($_SESSION['notification'])) { ?>
          <div class="alert alert-<?= $color_notification ?> alert dismissible fade show" role="alert">
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
              </button>
            <?= $_SESSION['notification']['message'] ?>
            <?php unset($_SESSION['notification']) ?>
          </div>
          <?php } ?>
        </div>
      </div>
          <?php
          $search = !empty($_GET['search']) ? $_GET['search'] : NULL; 
          $sql_select = "SELECT "
				  ."id, "
                  ."titre, "
                  ."texte, "
                  ."publie, "
                  ."DATE_FORMAT(date, '%d/%m/%y') as date_fr "
                  ."FROM bootstrap "
                  ."WHERE publie = :publie "
                  ."LIMIT :index_depart, :nb_limit ";
          /*@var $bdd PDO*/
          $sth = $bdd->prepare($sql_select);
          
          $sth->bindValue(':publie', 1, PDO::PARAM_BOOL);
          $sth->bindValue(':index_depart', $index_depart_MySQL, PDO::PARAM_INT);
          $sth->bindValue(':nb_limit', _nb_art_par_page, PDO::PARAM_INT);
          
          $sth->execute();
          $tab_bootstrap = $sth->fetchAll(PDO::FETCH_ASSOC);
          

$publie = 1;
//Recherche dans une chaîne de caractère
$texte = !empty($_GET['search']) ? "%".$_GET['search']."%" : NULL;

if($search){
  $s = explode(" ", $search);

	   $sql = "SELECT * FROM bootstrap "
                   . "WHERE publie = :publie "
                   . "AND titre= :recherche "
                   . "OR texte like :texte";
  //Requête de recherche
 $sth = $bdd->prepare($sql); 
 $sth->execute(array(
        "recherche"=> $_GET['search'],
		"publie"=> $publie,
		"texte"=> $texte
    ));
	
while($data = $sth->fetch()){
	  ?>
                <div class="col-md-12">
                 <div class="card">
                   <div class="card-body">
                     <h5 class="card-title"><?= $data['titre']; ?></h5>
                     <p class="card-text"><?= $data['texte']; ?></p>
                     <a href="#" class="btn btn-primary " name="btn" ><?= $data['date']; ?></a>
                     <?php if(($is_connect) == "TRUE"){
                      echo'<a href="modifierpage.php" class="btn btn-warning">Modifier</a>';
                      } ?>
                   </div>
                 </div>
               </div>
          <?php
  }
}
 if(!$search){        
          foreach ($tab_bootstrap as $value) {
           ?>
                <div class="col-md-12">
                 <div class="card">
                   <div class="card-body">
                     <h5 class="card-title"><?= $value['titre']; ?></h5>
                     <p class="card-text"><?= $value['texte']; ?></p>
                     <a href="#" class="btn btn-primary " name="btn" ><?= $value['date_fr']; ?></a>
                     <?php if(($is_connect) == "TRUE"){
                      echo'<a href="modifierpage.php?id='.$value['id'].'" class="btn btn-warning">Modifier</a>';
                      } ?>
                   </div>
                 </div>
               </div>
          <?php
          }
 }
          ?>
            <ul class="pagination">
                <?php for ($i = 1; $i <=$nb_pages; $i++){?>
                <li class="page-item"><a class="page-link" href="?page=<?php echo $i; ?>"><?php echo $i; ?></a></li>
                <?php } ?>
            </ul>
      </div>
    


<?php
include_once 'include/footer.inc.php';
?>