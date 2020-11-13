<?php
/* Smarty version 3.1.34-dev-7, created on 2020-11-11 18:21:13
  from 'plugins-plugins-pubIds-doi-pubIds-doi:doiAssignCheckBox.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5fac2b99906389_96041135',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c87c80130f9ccdfa6db9e51bb4fd3d125ba0b10c' => 
    array (
      0 => 'plugins-plugins-pubIds-doi-pubIds-doi:doiAssignCheckBox.tpl',
      1 => 1593209318,
      2 => 'plugins-plugins-pubIds-doi-pubIds-doi',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fac2b99906389_96041135 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', 'translatedObjectType', null);
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>("plugins.pubIds.doi.editor.doiObjectType").($_smarty_tpl->tpl_vars['pubObjectType']->value)),$_smarty_tpl ) );
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', 'assignCheckboxLabel', null);
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"plugins.pubIds.doi.editor.assignDoi",'pubId'=>$_smarty_tpl->tpl_vars['pubId']->value,'pubObjectType'=>$_smarty_tpl->tpl_vars['translatedObjectType']->value),$_smarty_tpl ) );
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
$_block_plugin1 = isset($_smarty_tpl->smarty->registered_plugins['block']['fbvFormSection'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['fbvFormSection'][0][0] : null;
if (!is_callable(array($_block_plugin1, 'smartyFBVFormSection'))) {
throw new SmartyException('block tag \'fbvFormSection\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('fbvFormSection', array('list'=>true));
$_block_repeat=true;
echo $_block_plugin1->smartyFBVFormSection(array('list'=>true), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
	<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['fbvElement'][0], array( array('type'=>"checkbox",'id'=>"assignDoi",'checked'=>"true",'value'=>"1",'label'=>$_smarty_tpl->tpl_vars['assignCheckboxLabel']->value,'translate'=>false,'disabled'=>$_smarty_tpl->tpl_vars['disabled']->value),$_smarty_tpl ) );?>

<?php $_block_repeat=false;
echo $_block_plugin1->smartyFBVFormSection(array('list'=>true), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}
}
