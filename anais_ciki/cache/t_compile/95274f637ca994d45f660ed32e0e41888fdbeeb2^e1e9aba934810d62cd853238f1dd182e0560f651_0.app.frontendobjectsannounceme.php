<?php
/* Smarty version 3.1.34-dev-7, created on 2020-10-19 22:49:36
  from 'app:frontendobjectsannounceme' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f8e1800764126_17461735',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e1e9aba934810d62cd853238f1dd182e0560f651' => 
    array (
      0 => 'app:frontendobjectsannounceme',
      1 => 1593209567,
      2 => 'app',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f8e1800764126_17461735 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/srv/apps/anais_ciki/lib/pkp/lib/vendor/smarty/smarty/libs/plugins/modifier.date_format.php','function'=>'smarty_modifier_date_format',),));
?>

<article class="obj_announcement_full">
	<h1>
		<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['announcement']->value->getLocalizedTitle() ));?>

	</h1>
	<div class="date">
		<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['announcement']->value->getDatePosted(),$_smarty_tpl->tpl_vars['dateFormatShort']->value);?>

	</div>
	<div class="description">
		<?php if ($_smarty_tpl->tpl_vars['announcement']->value->getLocalizedDescription()) {?>
			<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'strip_unsafe_html' ][ 0 ], array( $_smarty_tpl->tpl_vars['announcement']->value->getLocalizedDescription() ));?>

		<?php } else { ?>
			<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'strip_unsafe_html' ][ 0 ], array( $_smarty_tpl->tpl_vars['announcement']->value->getLocalizedDescriptionShort() ));?>

		<?php }?>
	</div>
</article><!-- .obj_announcement_full -->
<?php }
}
