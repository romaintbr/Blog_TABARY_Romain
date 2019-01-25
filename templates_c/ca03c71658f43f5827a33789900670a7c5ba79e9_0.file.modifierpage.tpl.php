<?php
/* Smarty version 3.1.33, created on 2019-01-19 13:18:57
  from 'C:\wamp64\www\BLOG\templates\modifierpage.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c4323c13ec257_58254774',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ca03c71658f43f5827a33789900670a7c5ba79e9' => 
    array (
      0 => 'C:\\wamp64\\www\\BLOG\\templates\\modifierpage.tpl',
      1 => 1547903929,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c4323c13ec257_58254774 (Smarty_Internal_Template $_smarty_tpl) {
?><html>
    <body>
	
<form action = "modifierpage.php" method = "post">
                <input name="titre" id="titre" placeholder="Titre"> 
		<input name="texte" id="texte" placeholder="Contenu">
		<input type="hidden" value="" id="id" name="id">
		<input type="submit" value="Modifier"/>
	</form>	
	</body>
</html><?php }
}
