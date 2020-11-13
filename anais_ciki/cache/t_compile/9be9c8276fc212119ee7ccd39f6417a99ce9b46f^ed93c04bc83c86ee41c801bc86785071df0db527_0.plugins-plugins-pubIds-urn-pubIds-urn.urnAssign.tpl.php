<?php
/* Smarty version 3.1.34-dev-7, created on 2020-11-11 13:35:25
  from 'plugins-plugins-pubIds-urn-pubIds-urn:urnAssign.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5fabe89dc7fe51_74515607',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ed93c04bc83c86ee41c801bc86785071df0db527' => 
    array (
      0 => 'plugins-plugins-pubIds-urn-pubIds-urn:urnAssign.tpl',
      1 => 1593209318,
      2 => 'plugins-plugins-pubIds-urn-pubIds-urn',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fabe89dc7fe51_74515607 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_assignInScope('pubObjectType', $_smarty_tpl->tpl_vars['pubIdPlugin']->value->getPubObjectType($_smarty_tpl->tpl_vars['pubObject']->value));
$_smarty_tpl->_assignInScope('enableObjectURN', $_smarty_tpl->tpl_vars['pubIdPlugin']->value->getSetting($_smarty_tpl->tpl_vars['currentContext']->value->getId(),"enable".((string)$_smarty_tpl->tpl_vars['pubObjectType']->value)."URN"));
if ($_smarty_tpl->tpl_vars['enableObjectURN']->value) {?>
	<?php $_block_plugin5 = isset($_smarty_tpl->smarty->registered_plugins['block']['fbvFormArea'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['fbvFormArea'][0][0] : null;
if (!is_callable(array($_block_plugin5, 'smartyFBVFormArea'))) {
throw new SmartyException('block tag \'fbvFormArea\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('fbvFormArea', array('id'=>"pubIdURNFormArea",'class'=>"border",'title'=>"plugins.pubIds.urn.editor.urn"));
$_block_repeat=true;
echo $_block_plugin5->smartyFBVFormArea(array('id'=>"pubIdURNFormArea",'class'=>"border",'title'=>"plugins.pubIds.urn.editor.urn"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
	<?php if ($_smarty_tpl->tpl_vars['pubObject']->value->getStoredPubId($_smarty_tpl->tpl_vars['pubIdPlugin']->value->getPubIdType())) {?>
		<?php $_block_plugin6 = isset($_smarty_tpl->smarty->registered_plugins['block']['fbvFormSection'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['fbvFormSection'][0][0] : null;
if (!is_callable(array($_block_plugin6, 'smartyFBVFormSection'))) {
throw new SmartyException('block tag \'fbvFormSection\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('fbvFormSection', array());
$_block_repeat=true;
echo $_block_plugin6->smartyFBVFormSection(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
			<p class="pkp_help"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"plugins.pubIds.urn.editor.assignURN.assigned",'pubId'=>$_smarty_tpl->tpl_vars['pubObject']->value->getStoredPubId($_smarty_tpl->tpl_vars['pubIdPlugin']->value->getPubIdType())),$_smarty_tpl ) );?>
</p>
		<?php $_block_repeat=false;
echo $_block_plugin6->smartyFBVFormSection(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
	<?php } else { ?>
		<?php $_smarty_tpl->_assignInScope('pubId', $_smarty_tpl->tpl_vars['pubIdPlugin']->value->getPubId($_smarty_tpl->tpl_vars['pubObject']->value));?>
		<?php if (!$_smarty_tpl->tpl_vars['canBeAssigned']->value) {?>
			<?php $_block_plugin7 = isset($_smarty_tpl->smarty->registered_plugins['block']['fbvFormSection'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['fbvFormSection'][0][0] : null;
if (!is_callable(array($_block_plugin7, 'smartyFBVFormSection'))) {
throw new SmartyException('block tag \'fbvFormSection\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('fbvFormSection', array());
$_block_repeat=true;
echo $_block_plugin7->smartyFBVFormSection(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
				<?php if (!$_smarty_tpl->tpl_vars['pubId']->value) {?>
					<p class="pkp_help"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"plugins.pubIds.urn.editor.assignURN.emptySuffix"),$_smarty_tpl ) );?>
</p>
				<?php } else { ?>
					<p class="pkp_help"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"plugins.pubIds.urn.editor.assignURN.pattern",'pubId'=>$_smarty_tpl->tpl_vars['pubId']->value),$_smarty_tpl ) );?>
</p>
				<?php }?>
			<?php $_block_repeat=false;
echo $_block_plugin7->smartyFBVFormSection(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
		<?php } else { ?>
			<?php $_smarty_tpl->_assignInScope('templatePath', $_smarty_tpl->tpl_vars['pubIdPlugin']->value->getTemplateResource('urnAssignCheckBox.tpl'));?>
			<?php $_smarty_tpl->_subTemplateRender($_smarty_tpl->tpl_vars['templatePath']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('pubId'=>$_smarty_tpl->tpl_vars['pubId']->value,'pubObjectType'=>$_smarty_tpl->tpl_vars['pubObjectType']->value), 0, true);
?>
		<?php }?>
	<?php }?>
	<?php $_block_repeat=false;
echo $_block_plugin5->smartyFBVFormArea(array('id'=>"pubIdURNFormArea",'class'=>"border",'title'=>"plugins.pubIds.urn.editor.urn"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}
}
}
