<?php
/* Smarty version 3.1.33, created on 2019-01-18 12:27:29
  from 'C:\wamp64\www\bootstrap2\templates\modifierpage.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c41c631461010_75909654',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b9fdc9ead42c1d498955851743d4e29853c3a331' => 
    array (
      0 => 'C:\\wamp64\\www\\bootstrap2\\templates\\modifierpage.tpl',
      1 => 1547645950,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c41c631461010_75909654 (Smarty_Internal_Template $_smarty_tpl) {
?><html>
    <body>
	
<form action = "modifierpage.php" method = "post">
		<input name="texte" id="texte" placeholder="texte">
		<input name="titre" id="titre" placeholder="titre">
		<!-- pour recupéré l'id passé en get -->    
		<input type="hidden" value="" id="id" name="id">
		<input type="submit" value="Modifier"/>
	</form>	
	</body>
</html><?php }
}
