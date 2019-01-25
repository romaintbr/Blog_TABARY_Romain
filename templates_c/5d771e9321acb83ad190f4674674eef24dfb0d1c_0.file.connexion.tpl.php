<?php
/* Smarty version 3.1.33, created on 2019-01-18 12:27:18
  from 'C:\wamp64\www\bootstrap2\templates\connexion.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c41c62640bf62_77980802',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5d771e9321acb83ad190f4674674eef24dfb0d1c' => 
    array (
      0 => 'C:\\wamp64\\www\\bootstrap2\\templates\\connexion.tpl',
      1 => 1547217005,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c41c62640bf62_77980802 (Smarty_Internal_Template $_smarty_tpl) {
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
            <input type="email" class="form-control" id="email" name="email" placeholder="Entrer votre Adresse Mail" value="" required>
          </div>

          <div class="form-group">
            <label for="mdp">Mot de Passe :</label>
            <input type="password" class="form-control" id="password" name="mdp" placeholder="Entrer votre Mot de Passe" value="" required>
          </div>

          <div class="form-group">
            <label for="souvenir">Garder ma session active</label>
            <input type="checkbox" name="souvenir" />
          </div>

          <button type="submit" class="btn btn-primary" name="submit" value="ajouter">Se Connecter</button>
        </form>
      </div>
    </div>
  </div>
</div>
</div>
</div><?php }
}
