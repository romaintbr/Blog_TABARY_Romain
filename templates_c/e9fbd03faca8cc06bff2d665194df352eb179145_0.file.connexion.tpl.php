<?php
/* Smarty version 3.1.33, created on 2019-01-19 12:42:50
  from 'C:\wamp64\www\BLOG\templates\connexion.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c431b4a29ebc8_75003002',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e9fbd03faca8cc06bff2d665194df352eb179145' => 
    array (
      0 => 'C:\\wamp64\\www\\BLOG\\templates\\connexion.tpl',
      1 => 1547901766,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c431b4a29ebc8_75003002 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- Page Content -->
<div class="container">
    <div class="row">
      <div class="col-lg-12 text-center">
        <h1 class="mt-5">Connexion</h1>
        <?php if (isset($_smarty_tpl->tpl_vars['session_var']->value['notifications'])) {?>
       
          <div class="alert alert-<?php echo $_smarty_tpl->tpl_vars['color_notification']->value;
echo '?>';?> alert-dismissible fade show" role="alert">
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
              </button>
              <?php echo $_smarty_tpl->tpl_vars['session_var']->value['notifications']['message'];?>

                     </div>
                <?php }?>

          <?php echo '<?php ';?>} <?php echo '?>';?>
        <div class="container">
    <div class="row">
      <div class="col-lg-12 text-center">
        <form action="connexion.php" method="post" enctype="multipart/form-data" id="form_connexion">

          <div class="form-group">
            <label for="email" class="col-form-label">Adresse Mail :</label>
            <input type="email" class="form-control" id="email" name="email" placeholder="Veuillez entrer votre adresse mail" value="" required>
          </div>

          <div class="form-group">
            <label for="mdp">Mot de Passe :</label>
            <input type="password" class="form-control" id="password" name="mdp" placeholder="Veuillez entrer votre mot de passe" value="" required>
          </div>

          <div class="form-group">
            <label for="souvenir">Garder ma session active </label>
            <input type="checkbox" name="souvenir" />
          </div>

          <button type="submit" class="btn btn-primary" name="submit" value="ajouter">Se connecter</button>
        </form>
      </div>
    </div>
  </div>
</div>
</div>
</div><?php }
}
