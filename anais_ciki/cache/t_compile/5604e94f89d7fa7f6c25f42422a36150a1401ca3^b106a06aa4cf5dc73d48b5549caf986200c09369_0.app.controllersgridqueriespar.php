<?php
/* Smarty version 3.1.34-dev-7, created on 2020-10-19 21:06:42
  from 'app:controllersgridqueriespar' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f8dffe26290a3_15880111',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b106a06aa4cf5dc73d48b5549caf986200c09369' => 
    array (
      0 => 'app:controllersgridqueriespar',
      1 => 1593209567,
      2 => 'app',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f8dffe26290a3_15880111 (Smarty_Internal_Template $_smarty_tpl) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['participants']->value, 'user');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['user']->value) {
?>
	<li><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['user']->value->getFullName() ));?>
 (<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['user']->value->getUsername() ));?>
)</li>
<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
}
