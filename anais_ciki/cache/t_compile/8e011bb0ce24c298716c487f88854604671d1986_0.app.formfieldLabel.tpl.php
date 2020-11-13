<?php
/* Smarty version 3.1.34-dev-7, created on 2020-10-21 19:41:13
  from 'app:formfieldLabel.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f908ed9bbe599_59386850',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8e011bb0ce24c298716c487f88854604671d1986' => 
    array (
      0 => 'app:formfieldLabel.tpl',
      1 => 1593209567,
      2 => 'app',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f908ed9bbe599_59386850 (Smarty_Internal_Template $_smarty_tpl) {
?>
<label<?php if (!$_smarty_tpl->tpl_vars['FBV_suppressId']->value) {?> for="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['FBV_name']->value ));?>
"<?php }
if ($_smarty_tpl->tpl_vars['FBV_class']->value) {?> class="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['FBV_class']->value ));?>
"<?php }?> >
	<?php echo $_smarty_tpl->tpl_vars['FBV_label']->value;
if ($_smarty_tpl->tpl_vars['FBV_required']->value) {?><span class="req">*</span><?php }?>
</label>

<?php }
}
