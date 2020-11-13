<?php
/* Smarty version 3.1.34-dev-7, created on 2020-10-26 20:23:03
  from 'app:controllersgridfilesrevie' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f9730275f7fd2_53379342',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3930a78a8a582bbcfa0dab5ce0ff8118095fe942' => 
    array (
      0 => 'app:controllersgridfilesrevie',
      1 => 1593209567,
      2 => 'app',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f9730275f7fd2_53379342 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
>
	$(function() {
		// Attach the form handler.
		$('#manageReviewFilesForm').pkpHandler('$.pkp.controllers.form.AjaxFormHandler');
	});
<?php echo '</script'; ?>
>
<form class="pkp_form" id="manageReviewFilesForm" action="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('component'=>"grid.files.review.ManageReviewFilesGridHandler",'op'=>"updateReviewFiles",'submissionId'=>call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['submissionId']->value )),'stageId'=>call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['stageId']->value )),'reviewRoundId'=>call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['reviewRoundId']->value ))),$_smarty_tpl ) );?>
" method="post">
	<!-- Current review files -->
	<div id="existingFilesContainer">
		<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['csrf'][0], array( array(),$_smarty_tpl ) );?>

		<!-- Available submission files -->
		<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', 'availableReviewFilesGridUrl', null);
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('router'=>@constant('ROUTE_COMPONENT'),'component'=>"grid.files.review.ManageReviewFilesGridHandler",'op'=>"fetchGrid",'submissionId'=>$_smarty_tpl->tpl_vars['submissionId']->value,'stageId'=>$_smarty_tpl->tpl_vars['stageId']->value,'reviewRoundId'=>$_smarty_tpl->tpl_vars['reviewRoundId']->value,'escape'=>false),$_smarty_tpl ) );
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
		<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['load_url_in_div'][0], array( array('id'=>"availableReviewFilesGrid",'url'=>$_smarty_tpl->tpl_vars['availableReviewFilesGridUrl']->value),$_smarty_tpl ) );?>

		<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['fbvFormButtons'][0], array( array(),$_smarty_tpl ) );?>

	</div>
</form>
<?php }
}
