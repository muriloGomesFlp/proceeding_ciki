<?php
/* Smarty version 3.1.34-dev-7, created on 2020-10-19 21:01:15
  from 'app:controllersgridfeaturecol' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f8dfe9b42a985_81763686',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '92cad1571673b04316cfee05e9afc7e4df433a7d' => 
    array (
      0 => 'app:controllersgridfeaturecol',
      1 => 1593209567,
      2 => 'app',
    ),
  ),
  'includes' => 
  array (
    'app:linkAction/linkAction.tpl' => 1,
  ),
),false)) {
function content_5f8dfe9b42a985_81763686 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("app:linkAction/linkAction.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('action'=>$_smarty_tpl->tpl_vars['controlLink']->value,'contextId'=>'collapsibleGridControl'), 0, false);
}
}
