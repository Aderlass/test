<?php
/* Smarty version 3.1.39, created on 2021-12-23 15:10:01
  from '/Users/devweb-creation/Desktop/DevWeb - Creation/htdocs/test/themes/classic/templates/_partials/helpers.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_61c4833993ce94_09579639',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0fabbf7179ecd4f9b12b56602547d9a5f9081331' => 
    array (
      0 => '/Users/devweb-creation/Desktop/DevWeb - Creation/htdocs/test/themes/classic/templates/_partials/helpers.tpl',
      1 => 1640267795,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61c4833993ce94_09579639 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->_tplFunction->registerTplFunctions($_smarty_tpl, array (
  'renderLogo' => 
  array (
    'compiled_filepath' => '/Users/devweb-creation/Desktop/DevWeb - Creation/htdocs/test/var/cache/prod/smarty/compile/classiclayouts_layout_full_width_tpl/0f/ab/bf/0fabbf7179ecd4f9b12b56602547d9a5f9081331_2.file.helpers.tpl.php',
    'uid' => '0fabbf7179ecd4f9b12b56602547d9a5f9081331',
    'call_name' => 'smarty_template_function_renderLogo_190886492261c483399328e2_99968060',
  ),
));
?> 

<?php }
/* smarty_template_function_renderLogo_190886492261c483399328e2_99968060 */
if (!function_exists('smarty_template_function_renderLogo_190886492261c483399328e2_99968060')) {
function smarty_template_function_renderLogo_190886492261c483399328e2_99968060(Smarty_Internal_Template $_smarty_tpl,$params) {
foreach ($params as $key => $value) {
$_smarty_tpl->tpl_vars[$key] = new Smarty_Variable($value, $_smarty_tpl->isRenderingCache);
}
?>

  <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['pages']['index'], ENT_QUOTES, 'UTF-8');?>
">
    <img
      class="logo img-fluid"
      src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['logo_details']['src'], ENT_QUOTES, 'UTF-8');?>
"
      alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['name'], ENT_QUOTES, 'UTF-8');?>
"
      loading="lazy"
      width="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['logo_details']['width'], ENT_QUOTES, 'UTF-8');?>
"
      height="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['logo_details']['height'], ENT_QUOTES, 'UTF-8');?>
">
  </a>
<?php
}}
/*/ smarty_template_function_renderLogo_190886492261c483399328e2_99968060 */
}
