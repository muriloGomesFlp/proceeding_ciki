<?php
/* Smarty version 3.1.34-dev-7, created on 2020-10-19 23:09:15
  from 'plugins-plugins-pubIds-doi-pubIds-doi:doiSuffixEdit.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f8e1c9b3cc292_06843103',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd52dd7e3e14d024b6c08511d8f6343917e5a4993' => 
    array (
      0 => 'plugins-plugins-pubIds-doi-pubIds-doi:doiSuffixEdit.tpl',
      1 => 1593209318,
      2 => 'plugins-plugins-pubIds-doi-pubIds-doi',
    ),
  ),
  'includes' => 
  array (
    'app:linkAction/linkAction.tpl' => 2,
  ),
),false)) {
function content_5f8e1c9b3cc292_06843103 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_assignInScope('pubObjectType', $_smarty_tpl->tpl_vars['pubIdPlugin']->value->getPubObjectType($_smarty_tpl->tpl_vars['pubObject']->value));
$_smarty_tpl->_assignInScope('enableObjectDoi', $_smarty_tpl->tpl_vars['pubIdPlugin']->value->getSetting($_smarty_tpl->tpl_vars['currentContext']->value->getId(),"enable".((string)$_smarty_tpl->tpl_vars['pubObjectType']->value)."Doi"));
if ($_smarty_tpl->tpl_vars['enableObjectDoi']->value) {?>
	<?php $_smarty_tpl->_assignInScope('storedPubId', $_smarty_tpl->tpl_vars['pubObject']->value->getStoredPubId($_smarty_tpl->tpl_vars['pubIdPlugin']->value->getPubIdType()));?>
	<?php $_block_plugin2 = isset($_smarty_tpl->smarty->registered_plugins['block']['fbvFormArea'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['fbvFormArea'][0][0] : null;
if (!is_callable(array($_block_plugin2, 'smartyFBVFormArea'))) {
throw new SmartyException('block tag \'fbvFormArea\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('fbvFormArea', array('id'=>"pubIdDOIFormArea",'class'=>"border",'title'=>"plugins.pubIds.doi.editor.doi"));
$_block_repeat=true;
echo $_block_plugin2->smartyFBVFormArea(array('id'=>"pubIdDOIFormArea",'class'=>"border",'title'=>"plugins.pubIds.doi.editor.doi"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
		<?php $_smarty_tpl->_assignInScope('formArea', true);?>
		<?php if ($_smarty_tpl->tpl_vars['pubIdPlugin']->value->getSetting($_smarty_tpl->tpl_vars['currentContext']->value->getId(),'doiSuffix') == 'customId' || $_smarty_tpl->tpl_vars['storedPubId']->value) {?>
			<?php if (empty($_smarty_tpl->tpl_vars['storedPubId']->value)) {?> 				<?php $_block_plugin3 = isset($_smarty_tpl->smarty->registered_plugins['block']['fbvFormSection'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['fbvFormSection'][0][0] : null;
if (!is_callable(array($_block_plugin3, 'smartyFBVFormSection'))) {
throw new SmartyException('block tag \'fbvFormSection\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('fbvFormSection', array());
$_block_repeat=true;
echo $_block_plugin3->smartyFBVFormSection(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
					<p class="pkp_help"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"plugins.pubIds.doi.manager.settings.doiSuffix.description"),$_smarty_tpl ) );?>
</p>
					<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['fbvElement'][0], array( array('type'=>"text",'label'=>"plugins.pubIds.doi.manager.settings.doiPrefix",'id'=>"doiPrefix",'disabled'=>true,'value'=>$_smarty_tpl->tpl_vars['pubIdPlugin']->value->getSetting($_smarty_tpl->tpl_vars['currentContext']->value->getId(),'doiPrefix'),'size'=>$_smarty_tpl->tpl_vars['fbvStyles']->value['size']['SMALL']),$_smarty_tpl ) );?>

					<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['fbvElement'][0], array( array('type'=>"text",'label'=>"plugins.pubIds.doi.manager.settings.doiSuffix",'id'=>"doiSuffix",'value'=>$_smarty_tpl->tpl_vars['doiSuffix']->value,'size'=>$_smarty_tpl->tpl_vars['fbvStyles']->value['size']['MEDIUM']),$_smarty_tpl ) );?>

				<?php $_block_repeat=false;
echo $_block_plugin3->smartyFBVFormSection(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
				<?php if ($_smarty_tpl->tpl_vars['canBeAssigned']->value) {?>
					<?php $_smarty_tpl->_assignInScope('templatePath', $_smarty_tpl->tpl_vars['pubIdPlugin']->value->getTemplateResource('doiAssignCheckBox.tpl'));?>
					<?php $_smarty_tpl->_subTemplateRender($_smarty_tpl->tpl_vars['templatePath']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('pubId'=>'','pubObjectType'=>$_smarty_tpl->tpl_vars['pubObjectType']->value), 0, true);
?>
				<?php } else { ?>
					<p class="pkp_help"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"plugins.pubIds.doi.editor.customSuffixMissing"),$_smarty_tpl ) );?>
</p>
				<?php }?>
			<?php } else { ?> 			<?php $_block_plugin4 = isset($_smarty_tpl->smarty->registered_plugins['block']['fbvFormSection'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['fbvFormSection'][0][0] : null;
if (!is_callable(array($_block_plugin4, 'smartyFBVFormSection'))) {
throw new SmartyException('block tag \'fbvFormSection\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('fbvFormSection', array());
$_block_repeat=true;
echo $_block_plugin4->smartyFBVFormSection(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
				<p>
					<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['storedPubId']->value ));?>
<br />
					<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', 'translatedObjectType', null);
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>("plugins.pubIds.doi.editor.doiObjectType").($_smarty_tpl->tpl_vars['pubObjectType']->value)),$_smarty_tpl ) );
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
					<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', 'assignedMessage', null);
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"plugins.pubIds.doi.editor.assigned",'pubObjectType'=>$_smarty_tpl->tpl_vars['translatedObjectType']->value),$_smarty_tpl ) );
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
					<p class="pkp_help"><?php echo $_smarty_tpl->tpl_vars['assignedMessage']->value;?>
</p>
					<?php $_smarty_tpl->_subTemplateRender("app:linkAction/linkAction.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('action'=>$_smarty_tpl->tpl_vars['clearPubIdLinkActionDoi']->value,'contextId'=>"publicIdentifiersForm"), 0, false);
?>
				</p>
				<?php $_block_repeat=false;
echo $_block_plugin4->smartyFBVFormSection(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
			<?php }?>
		<?php } else { ?> 			<p><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['pubIdPlugin']->value->getPubId($_smarty_tpl->tpl_vars['pubObject']->value) ));?>
</p>
			<?php if ($_smarty_tpl->tpl_vars['canBeAssigned']->value) {?>
				<p class="pkp_help"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"plugins.pubIds.doi.editor.canBeAssigned"),$_smarty_tpl ) );?>
</p>
				<?php $_smarty_tpl->_assignInScope('templatePath', $_smarty_tpl->tpl_vars['pubIdPlugin']->value->getTemplateResource('doiAssignCheckBox.tpl'));?>
				<?php $_smarty_tpl->_subTemplateRender($_smarty_tpl->tpl_vars['templatePath']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('pubId'=>'','pubObjectType'=>$_smarty_tpl->tpl_vars['pubObjectType']->value), 0, true);
?>
			<?php } else { ?>
				<p class="pkp_help"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"plugins.pubIds.doi.editor.patternNotResolved"),$_smarty_tpl ) );?>
</p>
			<?php }?>
		<?php }?>
	<?php $_block_repeat=false;
echo $_block_plugin2->smartyFBVFormArea(array('id'=>"pubIdDOIFormArea",'class'=>"border",'title'=>"plugins.pubIds.doi.editor.doi"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}
if ($_smarty_tpl->tpl_vars['pubObjectType']->value == 'Issue') {?>
	<?php $_smarty_tpl->_assignInScope('enablePublicationDoi', $_smarty_tpl->tpl_vars['pubIdPlugin']->value->getSetting($_smarty_tpl->tpl_vars['currentContext']->value->getId(),"enablePublicationDoi"));?>
	<?php $_smarty_tpl->_assignInScope('enableRepresentationDoi', $_smarty_tpl->tpl_vars['pubIdPlugin']->value->getSetting($_smarty_tpl->tpl_vars['currentContext']->value->getId(),"enableRepresentationDoi"));?>
	<?php if ($_smarty_tpl->tpl_vars['enablePublicationDoi']->value || $_smarty_tpl->tpl_vars['enableRepresentationDoi']->value) {?>
		<?php if (!$_smarty_tpl->tpl_vars['formArea']->value) {?>
			<?php $_smarty_tpl->_assignInScope('formAreaTitle', "plugins.pubIds.doi.editor.doi");?>
		<?php } else { ?>
			<?php $_smarty_tpl->_assignInScope('formAreaTitle', '');?>
		<?php }?>
		<?php $_block_plugin5 = isset($_smarty_tpl->smarty->registered_plugins['block']['fbvFormArea'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['fbvFormArea'][0][0] : null;
if (!is_callable(array($_block_plugin5, 'smartyFBVFormArea'))) {
throw new SmartyException('block tag \'fbvFormArea\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('fbvFormArea', array('id'=>"pubIdDOIFormArea",'class'=>"border",'title'=>$_smarty_tpl->tpl_vars['formAreaTitle']->value));
$_block_repeat=true;
echo $_block_plugin5->smartyFBVFormArea(array('id'=>"pubIdDOIFormArea",'class'=>"border",'title'=>$_smarty_tpl->tpl_vars['formAreaTitle']->value), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
			<?php $_block_plugin6 = isset($_smarty_tpl->smarty->registered_plugins['block']['fbvFormSection'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['fbvFormSection'][0][0] : null;
if (!is_callable(array($_block_plugin6, 'smartyFBVFormSection'))) {
throw new SmartyException('block tag \'fbvFormSection\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('fbvFormSection', array('list'=>"true",'description'=>"plugins.pubIds.doi.editor.clearIssueObjectsDoi.description"));
$_block_repeat=true;
echo $_block_plugin6->smartyFBVFormSection(array('list'=>"true",'description'=>"plugins.pubIds.doi.editor.clearIssueObjectsDoi.description"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
				<?php $_smarty_tpl->_subTemplateRender("app:linkAction/linkAction.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('action'=>$_smarty_tpl->tpl_vars['clearIssueObjectsPubIdsLinkActionDoi']->value,'contextId'=>"publicIdentifiersForm"), 0, true);
?>
			<?php $_block_repeat=false;
echo $_block_plugin6->smartyFBVFormSection(array('list'=>"true",'description'=>"plugins.pubIds.doi.editor.clearIssueObjectsDoi.description"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
		<?php $_block_repeat=false;
echo $_block_plugin5->smartyFBVFormArea(array('id'=>"pubIdDOIFormArea",'class'=>"border",'title'=>$_smarty_tpl->tpl_vars['formAreaTitle']->value), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
	<?php }
}
}
}
