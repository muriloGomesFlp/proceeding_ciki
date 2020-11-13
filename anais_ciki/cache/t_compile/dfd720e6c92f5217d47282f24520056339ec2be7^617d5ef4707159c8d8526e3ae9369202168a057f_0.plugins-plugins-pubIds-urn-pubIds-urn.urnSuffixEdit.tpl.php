<?php
/* Smarty version 3.1.34-dev-7, created on 2020-10-19 23:09:15
  from 'plugins-plugins-pubIds-urn-pubIds-urn:urnSuffixEdit.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f8e1c9b429813_55993931',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '617d5ef4707159c8d8526e3ae9369202168a057f' => 
    array (
      0 => 'plugins-plugins-pubIds-urn-pubIds-urn:urnSuffixEdit.tpl',
      1 => 1593209318,
      2 => 'plugins-plugins-pubIds-urn-pubIds-urn',
    ),
  ),
  'includes' => 
  array (
    'app:linkAction/linkAction.tpl' => 2,
  ),
),false)) {
function content_5f8e1c9b429813_55993931 (Smarty_Internal_Template $_smarty_tpl) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['load_script'][0], array( array('context'=>"publicIdentifiersForm",'scripts'=>$_smarty_tpl->tpl_vars['scripts']->value),$_smarty_tpl ) );?>


<?php $_smarty_tpl->_assignInScope('pubObjectType', $_smarty_tpl->tpl_vars['pubIdPlugin']->value->getPubObjectType($_smarty_tpl->tpl_vars['pubObject']->value));
$_smarty_tpl->_assignInScope('enableObjectURN', $_smarty_tpl->tpl_vars['pubIdPlugin']->value->getSetting($_smarty_tpl->tpl_vars['currentContext']->value->getId(),"enable".((string)$_smarty_tpl->tpl_vars['pubObjectType']->value)."URN"));
if ($_smarty_tpl->tpl_vars['enableObjectURN']->value) {?>
	<?php $_smarty_tpl->_assignInScope('storedPubId', $_smarty_tpl->tpl_vars['pubObject']->value->getStoredPubId($_smarty_tpl->tpl_vars['pubIdPlugin']->value->getPubIdType()));?>
	<?php $_block_plugin7 = isset($_smarty_tpl->smarty->registered_plugins['block']['fbvFormArea'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['fbvFormArea'][0][0] : null;
if (!is_callable(array($_block_plugin7, 'smartyFBVFormArea'))) {
throw new SmartyException('block tag \'fbvFormArea\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('fbvFormArea', array('id'=>"pubIdURNFormArea",'class'=>"border",'title'=>"plugins.pubIds.urn.editor.urn"));
$_block_repeat=true;
echo $_block_plugin7->smartyFBVFormArea(array('id'=>"pubIdURNFormArea",'class'=>"border",'title'=>"plugins.pubIds.urn.editor.urn"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
		<?php $_smarty_tpl->_assignInScope('formArea', true);?>
		<?php if ($_smarty_tpl->tpl_vars['pubIdPlugin']->value->getSetting($_smarty_tpl->tpl_vars['currentJournal']->value->getId(),'urnSuffix') == 'customId' || $_smarty_tpl->tpl_vars['storedPubId']->value) {?>
			<?php if (empty($_smarty_tpl->tpl_vars['storedPubId']->value)) {?> 				<?php $_block_plugin8 = isset($_smarty_tpl->smarty->registered_plugins['block']['fbvFormSection'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['fbvFormSection'][0][0] : null;
if (!is_callable(array($_block_plugin8, 'smartyFBVFormSection'))) {
throw new SmartyException('block tag \'fbvFormSection\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('fbvFormSection', array());
$_block_repeat=true;
echo $_block_plugin8->smartyFBVFormSection(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
					<?php $_smarty_tpl->_assignInScope('checkNo', $_smarty_tpl->tpl_vars['pubIdPlugin']->value->getSetting($_smarty_tpl->tpl_vars['currentContext']->value->getId(),'urnCheckNo'));?>
					<p class="pkp_help"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"plugins.pubIds.urn.manager.settings.urnSuffix.description"),$_smarty_tpl ) );?>
</p>
					<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['fbvElement'][0], array( array('type'=>"text",'label'=>"plugins.pubIds.urn.manager.settings.urnPrefix",'id'=>"urnPrefix",'disabled'=>true,'value'=>$_smarty_tpl->tpl_vars['pubIdPlugin']->value->getSetting($_smarty_tpl->tpl_vars['currentContext']->value->getId(),'urnPrefix'),'size'=>$_smarty_tpl->tpl_vars['fbvStyles']->value['size']['SMALL'],'inline'=>true),$_smarty_tpl ) );?>

					<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['fbvElement'][0], array( array('type'=>"text",'label'=>"plugins.pubIds.urn.manager.settings.urnSuffix",'id'=>"urnSuffix",'value'=>$_smarty_tpl->tpl_vars['urnSuffix']->value,'size'=>$_smarty_tpl->tpl_vars['fbvStyles']->value['size']['MEDIUM'],'inline'=>true),$_smarty_tpl ) );?>

					<?php if ($_smarty_tpl->tpl_vars['checkNo']->value) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['fbvElement'][0], array( array('type'=>"button",'label'=>"plugins.pubIds.urn.editor.addCheckNo",'id'=>"checkNo",'inline'=>true),$_smarty_tpl ) );
}?>
				<?php $_block_repeat=false;
echo $_block_plugin8->smartyFBVFormSection(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
				<?php if ($_smarty_tpl->tpl_vars['canBeAssigned']->value) {?>
					<p class="pkp_help"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"plugins.pubIds.urn.editor.canBeAssigned"),$_smarty_tpl ) );?>
</p>
					<?php $_smarty_tpl->_assignInScope('templatePath', $_smarty_tpl->tpl_vars['pubIdPlugin']->value->getTemplateResource('urnAssignCheckBox.tpl'));?>
					<?php $_smarty_tpl->_subTemplateRender($_smarty_tpl->tpl_vars['templatePath']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('pubId'=>'','pubObjectType'=>$_smarty_tpl->tpl_vars['pubObjectType']->value), 0, true);
?>
				<?php } else { ?>
					<p class="pkp_help"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"plugins.pubIds.urn.editor.customSuffixMissing"),$_smarty_tpl ) );?>
</p>
				<?php }?>
			<?php } else { ?> 				<p>
					<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['storedPubId']->value ));?>
<br />
					<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', 'translatedObjectType', null);
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>("plugins.pubIds.urn.editor.urnObjectType").($_smarty_tpl->tpl_vars['pubObjectType']->value)),$_smarty_tpl ) );
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
					<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', 'assignedMessage', null);
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"plugins.pubIds.urn.editor.assigned",'pubObjectType'=>$_smarty_tpl->tpl_vars['translatedObjectType']->value),$_smarty_tpl ) );
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
					<p class="pkp_help"><?php echo $_smarty_tpl->tpl_vars['assignedMessage']->value;?>
</p>
					<?php $_smarty_tpl->_subTemplateRender("app:linkAction/linkAction.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('action'=>$_smarty_tpl->tpl_vars['clearPubIdLinkActionURN']->value,'contextId'=>"publicIdentifiersForm"), 0, false);
?>
				</p>
			<?php }?>
		<?php } else { ?> 			<p><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['pubIdPlugin']->value->getPubId($_smarty_tpl->tpl_vars['pubObject']->value) ));?>
</p>
			<?php if ($_smarty_tpl->tpl_vars['canBeAssigned']->value) {?>
				<p class="pkp_help"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"plugins.pubIds.urn.editor.canBeAssigned"),$_smarty_tpl ) );?>
</p>
				<?php $_smarty_tpl->_assignInScope('templatePath', $_smarty_tpl->tpl_vars['pubIdPlugin']->value->getTemplateResource('urnAssignCheckBox.tpl'));?>
				<?php $_smarty_tpl->_subTemplateRender($_smarty_tpl->tpl_vars['templatePath']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('pubId'=>'','pubObjectType'=>$_smarty_tpl->tpl_vars['pubObjectType']->value), 0, true);
?>
			<?php } else { ?>
				<p class="pkp_help"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"plugins.pubIds.urn.editor.patternNotResolved"),$_smarty_tpl ) );?>
</p>
			<?php }?>
		<?php }?>
	<?php $_block_repeat=false;
echo $_block_plugin7->smartyFBVFormArea(array('id'=>"pubIdURNFormArea",'class'=>"border",'title'=>"plugins.pubIds.urn.editor.urn"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}
if ($_smarty_tpl->tpl_vars['pubObjectType']->value == 'Issue') {?>
	<?php $_smarty_tpl->_assignInScope('enablePublicationURN', $_smarty_tpl->tpl_vars['pubIdPlugin']->value->getSetting($_smarty_tpl->tpl_vars['currentContext']->value->getId(),"enablePublicationURN"));?>
	<?php $_smarty_tpl->_assignInScope('enableRepresentationURN', $_smarty_tpl->tpl_vars['pubIdPlugin']->value->getSetting($_smarty_tpl->tpl_vars['currentContext']->value->getId(),"enableRepresentationURN"));?>
	<?php if ($_smarty_tpl->tpl_vars['enablePublicationURN']->value || $_smarty_tpl->tpl_vars['enableRepresentationURN']->value) {?>
		<?php if (!$_smarty_tpl->tpl_vars['formArea']->value) {?>
			<?php $_smarty_tpl->_assignInScope('formAreaTitle', "plugins.pubIds.urn.editor.urn");?>
		<?php } else { ?>
			<?php $_smarty_tpl->_assignInScope('formAreaTitle', '');?>
		<?php }?>
		<?php $_block_plugin9 = isset($_smarty_tpl->smarty->registered_plugins['block']['fbvFormArea'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['fbvFormArea'][0][0] : null;
if (!is_callable(array($_block_plugin9, 'smartyFBVFormArea'))) {
throw new SmartyException('block tag \'fbvFormArea\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('fbvFormArea', array('id'=>"pubIdURNIssueobjectsFormArea",'class'=>"border",'title'=>$_smarty_tpl->tpl_vars['formAreaTitle']->value));
$_block_repeat=true;
echo $_block_plugin9->smartyFBVFormArea(array('id'=>"pubIdURNIssueobjectsFormArea",'class'=>"border",'title'=>$_smarty_tpl->tpl_vars['formAreaTitle']->value), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
			<?php $_block_plugin10 = isset($_smarty_tpl->smarty->registered_plugins['block']['fbvFormSection'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['fbvFormSection'][0][0] : null;
if (!is_callable(array($_block_plugin10, 'smartyFBVFormSection'))) {
throw new SmartyException('block tag \'fbvFormSection\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('fbvFormSection', array('list'=>"true",'description'=>"plugins.pubIds.urn.editor.clearIssueObjectsURN.description"));
$_block_repeat=true;
echo $_block_plugin10->smartyFBVFormSection(array('list'=>"true",'description'=>"plugins.pubIds.urn.editor.clearIssueObjectsURN.description"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
				<?php $_smarty_tpl->_subTemplateRender("app:linkAction/linkAction.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('action'=>$_smarty_tpl->tpl_vars['clearIssueObjectsPubIdsLinkActionURN']->value,'contextId'=>"publicIdentifiersForm"), 0, true);
?>
			<?php $_block_repeat=false;
echo $_block_plugin10->smartyFBVFormSection(array('list'=>"true",'description'=>"plugins.pubIds.urn.editor.clearIssueObjectsURN.description"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
		<?php $_block_repeat=false;
echo $_block_plugin9->smartyFBVFormArea(array('id'=>"pubIdURNIssueobjectsFormArea",'class'=>"border",'title'=>$_smarty_tpl->tpl_vars['formAreaTitle']->value), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
	<?php }
}
}
}
