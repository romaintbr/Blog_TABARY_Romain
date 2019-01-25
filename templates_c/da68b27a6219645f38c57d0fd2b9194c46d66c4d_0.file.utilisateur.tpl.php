<?php
/* Smarty version 3.1.33, created on 2019-01-19 12:45:09
  from 'C:\wamp64\www\BLOG\templates\utilisateur.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c431bd546e8b2_86505772',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'da68b27a6219645f38c57d0fd2b9194c46d66c4d' => 
    array (
      0 => 'C:\\wamp64\\www\\BLOG\\templates\\utilisateur.tpl',
      1 => 1547901906,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c431bd546e8b2_86505772 (Smarty_Internal_Template $_smarty_tpl) {
?>
    <!-- Page Content -->
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h1 class ="mt-5">Ajouter un utilisateur</h1>
            </div>
        </div>
        
        <div class="row">
            <div class="col-lg-12 text-center">
                <form action="utilisateur.php" method="post" enctype="multipart/form-data" id="form_article">
                    <div class="form-group">
                        <label for="nom" class="col-form-label">Nom</label>
                        <input type="text" class="form-control" id="nom" name="nom" placeholder="Veuillez entrer votre nom" value="" required>
                    </div>
                    
                     <div class="form-group">
                        <label for="prenom" class="col-form-label">Prénom</label>
                        <input type="text" class="form-control" id="prenom" name="prenom" placeholder="Veuillez entrer votre prénom" value="" required>
                    </div>
                    
                     <div class="form-group">
                        <label for="email" class="col-form-label">Email</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="Veuillez entrer votre adresse mail" value="" required>
                    </div>
                    
                     <div class="form-group">
                        <label for="mdp" class="col-form-label">Mot de passe</label>
                        <input type="password" class="form-control" id="mdp" name="mdp" placeholder="Veuillez entrer votre mot de passe" value="" required>
                    </div>

                    <button type="submit" class="btn btn-primary" name="submit" value="ajouter">Ajouter l'utilisateur</button>
                </form>
            </div>
        </div>
    </div>
<?php }
}
