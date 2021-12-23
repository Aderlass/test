<?php
/* Smarty version 3.1.39, created on 2021-12-23 15:09:37
  from '/Users/devweb-creation/Desktop/DevWeb - Creation/htdocs/test/admin003yjees2/themes/default/template/content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_61c483212fb878_71263968',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6b97120fc8495cec7b80cd877ab9cb331c6273a7' => 
    array (
      0 => '/Users/devweb-creation/Desktop/DevWeb - Creation/htdocs/test/admin003yjees2/themes/default/template/content.tpl',
      1 => 1640267799,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61c483212fb878_71263968 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="ajax_confirmation" class="alert alert-success hide"></div>
<div id="ajaxBox" style="display:none"></div>

<div class="row">
	<div class="col-lg-12">
		<?php if ((isset($_smarty_tpl->tpl_vars['content']->value))) {?>
			<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

		<?php }?>
	</div>
</div>
<?php }
}
