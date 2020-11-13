<?php
/* Smarty version 3.1.34-dev-7, created on 2020-11-11 14:38:37
  from 'plugins-plugins-importexport-users-importexport-users:index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5fabf76dcabc37_16103253',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c83f77529b4f39b939837d12b062ed05c5ea0a8d' => 
    array (
      0 => 'plugins-plugins-importexport-users-importexport-users:index.tpl',
      1 => 1593209318,
      2 => 'plugins-plugins-importexport-users-importexport-users',
    ),
  ),
  'includes' => 
  array (
    'app:common/header.tpl' => 1,
    'app:controllers/fileUploadContainer.tpl' => 1,
    'app:common/footer.tpl' => 1,
  ),
),false)) {
function content_5fabf76dcabc37_16103253 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_assignInScope('pageTitle', "plugins.importexport.users.displayName");
$_smarty_tpl->_subTemplateRender("app:common/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php echo '<script'; ?>
 type="text/javascript">
	// Attach the JS file tab handler.
	$(function() {
		$('#importExportTabs').pkpHandler('$.pkp.controllers.TabHandler');
		$('#importExportTabs').tabs('option', 'cache', true);
	});
<?php echo '</script'; ?>
>
<div id="importExportTabs">
	<ul>
		<li><a href="#import-tab"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"plugins.importexport.users.import.importUsers"),$_smarty_tpl ) );?>
</a></li>
		<li><a href="#export-tab"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"plugins.importexport.users.export.exportUsers"),$_smarty_tpl ) );?>
</a></li>
	</ul>
	<div id="import-tab">
		<?php echo '<script'; ?>
 type="text/javascript">
			$(function() {
				// Attach the form handler.
				$('#importXmlForm').pkpHandler('$.pkp.controllers.form.FileUploadFormHandler',
					{
						$uploader: $('#plupload'),
							uploaderOptions: {
								uploadUrl: <?php echo json_encode(call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['plugin_url'][0], array( array('path'=>"uploadImportXML",'escape'=>false),$_smarty_tpl ) ));?>
,
								baseUrl: <?php echo json_encode($_smarty_tpl->tpl_vars['baseUrl']->value);?>

							}
					}
				);
			});
		<?php echo '</script'; ?>
>
		<form id="importXmlForm" class="pkp_form" action="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['plugin_url'][0], array( array('path'=>"importBounce"),$_smarty_tpl ) );?>
" method="post">
			<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['csrf'][0], array( array(),$_smarty_tpl ) );?>

			<?php $_block_plugin1 = isset($_smarty_tpl->smarty->registered_plugins['block']['fbvFormArea'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['fbvFormArea'][0][0] : null;
if (!is_callable(array($_block_plugin1, 'smartyFBVFormArea'))) {
throw new SmartyException('block tag \'fbvFormArea\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('fbvFormArea', array('id'=>"importForm"));
$_block_repeat=true;
echo $_block_plugin1->smartyFBVFormArea(array('id'=>"importForm"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
								<p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"plugins.importexport.users.import.instructions"),$_smarty_tpl ) );?>
</p>

				<input type="hidden" name="temporaryFileId" id="temporaryFileId" value="" />
				<?php $_block_plugin2 = isset($_smarty_tpl->smarty->registered_plugins['block']['fbvFormArea'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['fbvFormArea'][0][0] : null;
if (!is_callable(array($_block_plugin2, 'smartyFBVFormArea'))) {
throw new SmartyException('block tag \'fbvFormArea\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('fbvFormArea', array('id'=>"file"));
$_block_repeat=true;
echo $_block_plugin2->smartyFBVFormArea(array('id'=>"file"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
					<?php $_block_plugin3 = isset($_smarty_tpl->smarty->registered_plugins['block']['fbvFormSection'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['fbvFormSection'][0][0] : null;
if (!is_callable(array($_block_plugin3, 'smartyFBVFormSection'))) {
throw new SmartyException('block tag \'fbvFormSection\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('fbvFormSection', array('title'=>"common.file"));
$_block_repeat=true;
echo $_block_plugin3->smartyFBVFormSection(array('title'=>"common.file"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
						<?php $_smarty_tpl->_subTemplateRender("app:controllers/fileUploadContainer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('id'=>"plupload"), 0, false);
?>
					<?php $_block_repeat=false;
echo $_block_plugin3->smartyFBVFormSection(array('title'=>"common.file"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
				<?php $_block_repeat=false;
echo $_block_plugin2->smartyFBVFormArea(array('id'=>"file"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

				<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['fbvFormButtons'][0], array( array('submitText'=>"plugins.importexport.users.import.importUsers",'hideCancel'=>"true"),$_smarty_tpl ) );?>

			<?php $_block_repeat=false;
echo $_block_plugin1->smartyFBVFormArea(array('id'=>"importForm"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
		</form>
	</div>
	<div id="export-tab">
		<?php echo '<script'; ?>
 type="text/javascript">
			$(function() {
				// Attach the form handler.
				$('#exportXmlForm').pkpHandler('$.pkp.controllers.form.FormHandler');
			});
		<?php echo '</script'; ?>
>
		<form id="exportXmlForm" class="pkp_form" action="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['plugin_url'][0], array( array('path'=>"export"),$_smarty_tpl ) );?>
" method="post">
			<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['csrf'][0], array( array(),$_smarty_tpl ) );?>

			<?php $_block_plugin4 = isset($_smarty_tpl->smarty->registered_plugins['block']['fbvFormArea'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['fbvFormArea'][0][0] : null;
if (!is_callable(array($_block_plugin4, 'smartyFBVFormArea'))) {
throw new SmartyException('block tag \'fbvFormArea\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('fbvFormArea', array('id'=>"exportForm"));
$_block_repeat=true;
echo $_block_plugin4->smartyFBVFormArea(array('id'=>"exportForm"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
				<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', 'usersGridUrl', null);
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('router'=>@constant('ROUTE_COMPONENT'),'component'=>"grid.users.exportableUsers.ExportableUsersGridHandler",'pluginName'=>"UserImportExportPlugin",'op'=>"fetchGrid",'escape'=>false),$_smarty_tpl ) );
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
				<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['load_url_in_div'][0], array( array('id'=>"usersGridContainer",'url'=>$_smarty_tpl->tpl_vars['usersGridUrl']->value),$_smarty_tpl ) );?>

				<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['fbvFormButtons'][0], array( array('submitText'=>"plugins.importexport.users.export.exportUsers",'hideCancel'=>"true"),$_smarty_tpl ) );?>

			<?php $_block_repeat=false;
echo $_block_plugin4->smartyFBVFormArea(array('id'=>"exportForm"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
		</form>
	</div>
</div>

<?php $_smarty_tpl->_subTemplateRender("app:common/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
