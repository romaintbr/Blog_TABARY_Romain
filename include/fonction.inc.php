<?php

function cryptPassword($mdp){
    $mdp_crypt = sha1($mdp);
    return $mdp_crypt;
    //Fonction de cryptage pour le mot de passe
}

function sid($email){
    $sid = md5($email .time());
    return $sid;
}

function indexPagination($page_courante, $nb_articles_par_page){
    $index = ($page_courante -1) * $nb_articles_par_page;
    return $index;
    //Fonction pour la pagination
}

function nb_total_article_publie($bdd){
    $sql = "SELECT COUNT(*) as nb_total_article_publie "
            ."FROM bootstrap "
            ."WHERE publie = 1 ";
    
    $sth = $bdd->prepare($sql);
    $sth->execute();
    $tab_result = $sth->fetch(PDO::FETCH_ASSOC);
    
    return $tab_result['nb_total_article_publie'];
    //Fonction pour le nombre total d'articles publiés
}
