<?php
/* Smarty version 3.1.34-dev-7, created on 2020-10-23 03:51:33
  from 'app:controllersgridannounceme' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f925345c7cd45_31316655',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5c6a7722bbac5b7162725bab527910e2ed88bf35' => 
    array (
      0 => 'app:controllersgridannounceme',
      1 => 1593209567,
      2 => 'app',
    ),
  ),
  'includes' => 
  array (
    'app:controllers/notification/inPlaceNotification.tpl' => 1,
  ),
),false)) {
function content_5f925345c7cd45_31316655 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
>
	$(function() {
		// Attach the form handler.
		$('#announcementForm').pkpHandler('$.pkp.controllers.form.AjaxFormHandler');
	});
<?php echo '</script'; ?>
>

<form class="pkp_form" id="announcementForm" method="post" action="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('router'=>@constant('ROUTE_COMPONENT'),'component'=>"grid.announcements.ManageAnnouncementGridHandler",'op'=>"updateAnnouncement"),$_smarty_tpl ) );?>
">
	<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['csrf'][0], array( array(),$_smarty_tpl ) );?>

	<?php if ($_smarty_tpl->tpl_vars['readOnly']->value) {?>
		
		<?php $_block_plugin1 = isset($_smarty_tpl->smarty->registered_plugins['block']['fbvFormArea'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['fbvFormArea'][0][0] : null;
if (!is_callable(array($_block_plugin1, 'smartyFBVFormArea'))) {
throw new SmartyException('block tag \'fbvFormArea\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('fbvFormArea', array('id'=>"announcementInfo"));
$_block_repeat=true;
echo $_block_plugin1->smartyFBVFormArea(array('id'=>"announcementInfo"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
			<?php $_block_plugin2 = isset($_smarty_tpl->smarty->registered_plugins['block']['fbvFormSection'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['fbvFormSection'][0][0] : null;
if (!is_callable(array($_block_plugin2, 'smartyFBVFormSection'))) {
throw new SmartyException('block tag \'fbvFormSection\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('fbvFormSection', array());
$_block_repeat=true;
echo $_block_plugin2->smartyFBVFormSection(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
				<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'strip_unsafe_html' ][ 0 ], array( $_smarty_tpl->tpl_vars['announcement']->value->getLocalizedDescriptionShort() ));?>

			<?php $_block_repeat=false;
echo $_block_plugin2->smartyFBVFormSection(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
			<?php $_block_plugin3 = isset($_smarty_tpl->smarty->registered_plugins['block']['fbvFormSection'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['fbvFormSection'][0][0] : null;
if (!is_callable(array($_block_plugin3, 'smartyFBVFormSection'))) {
throw new SmartyException('block tag \'fbvFormSection\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('fbvFormSection', array('title'=>"announcement.posted"));
$_block_repeat=true;
echo $_block_plugin3->smartyFBVFormSection(array('title'=>"announcement.posted"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
				<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['announcement']->value->getDatePosted() ));?>

			<?php $_block_repeat=false;
echo $_block_plugin3->smartyFBVFormSection(array('title'=>"announcement.posted"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
			<?php $_block_plugin4 = isset($_smarty_tpl->smarty->registered_plugins['block']['fbvFormSection'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['fbvFormSection'][0][0] : null;
if (!is_callable(array($_block_plugin4, 'smartyFBVFormSection'))) {
throw new SmartyException('block tag \'fbvFormSection\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('fbvFormSection', array());
$_block_repeat=true;
echo $_block_plugin4->smartyFBVFormSection(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
				<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'strip_unsafe_html' ][ 0 ], array( $_smarty_tpl->tpl_vars['announcement']->value->getLocalizedDescription() ));?>

			<?php $_block_repeat=false;
echo $_block_plugin4->smartyFBVFormSection(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
		<?php $_block_repeat=false;
echo $_block_plugin1->smartyFBVFormArea(array('id'=>"announcementInfo"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
	<?php } else { ?>
		
		<?php $_smarty_tpl->_subTemplateRender("app:controllers/notification/inPlaceNotification.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('notificationId'=>"announcementFormNotification"), 0, false);
?>
		<?php $_block_plugin5 = isset($_smarty_tpl->smarty->registered_plugins['block']['fbvFormArea'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['fbvFormArea'][0][0] : null;
if (!is_callable(array($_block_plugin5, 'smartyFBVFormArea'))) {
throw new SmartyException('block tag \'fbvFormArea\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('fbvFormArea', array('id'=>"announcementInfo"));
$_block_repeat=true;
echo $_block_plugin5->smartyFBVFormArea(array('id'=>"announcementInfo"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
			<?php if ($_smarty_tpl->tpl_vars['announcement']->value) {?>
				<input type="hidden" name="announcementId" value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['announcement']->value->getId() ));?>
" />
			<?php }?>
			<?php if ($_smarty_tpl->tpl_vars['announcementTypes']->value) {?>
				<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['fbvElement'][0], array( array('type'=>"select",'id'=>"typeId",'from'=>$_smarty_tpl->tpl_vars['announcementTypes']->value,'selected'=>$_smarty_tpl->tpl_vars['selectedTypeId']->value,'label'=>"manager.announcements.form.typeId",'translate'=>false),$_smarty_tpl ) );?>

			<?php }?>
			<?php $_block_plugin6 = isset($_smarty_tpl->smarty->registered_plugins['block']['fbvFormSection'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['fbvFormSection'][0][0] : null;
if (!is_callable(array($_block_plugin6, 'smartyFBVFormSection'))) {
throw new SmartyException('block tag \'fbvFormSection\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('fbvFormSection', array('title'=>"manager.announcements.form.title",'for'=>"title",'required'=>"true"));
$_block_repeat=true;
echo $_block_plugin6->smartyFBVFormSection(array('title'=>"manager.announcements.form.title",'for'=>"title",'required'=>"true"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
				<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['fbvElement'][0], array( array('type'=>"text",'multilingual'=>"true",'id'=>"title",'value'=>$_smarty_tpl->tpl_vars['title']->value,'maxlength'=>"255",'required'=>"true"),$_smarty_tpl ) );?>

			<?php $_block_repeat=false;
echo $_block_plugin6->smartyFBVFormSection(array('title'=>"manager.announcements.form.title",'for'=>"title",'required'=>"true"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
			<?php $_block_plugin7 = isset($_smarty_tpl->smarty->registered_plugins['block']['fbvFormSection'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['fbvFormSection'][0][0] : null;
if (!is_callable(array($_block_plugin7, 'smartyFBVFormSection'))) {
throw new SmartyException('block tag \'fbvFormSection\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('fbvFormSection', array('title'=>"manager.announcements.form.descriptionShort",'for'=>"descriptionShort",'required'=>"true"));
$_block_repeat=true;
echo $_block_plugin7->smartyFBVFormSection(array('title'=>"manager.announcements.form.descriptionShort",'for'=>"descriptionShort",'required'=>"true"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
				<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['fbvElement'][0], array( array('type'=>"textarea",'multilingual'=>"true",'id'=>"descriptionShort",'value'=>$_smarty_tpl->tpl_vars['descriptionShort']->value,'label'=>"manager.announcements.form.descriptionShortInstructions",'required'=>"true",'rich'=>true,'height'=>$_smarty_tpl->tpl_vars['fbvStyles']->value['height']['SHORT']),$_smarty_tpl ) );?>

			<?php $_block_repeat=false;
echo $_block_plugin7->smartyFBVFormSection(array('title'=>"manager.announcements.form.descriptionShort",'for'=>"descriptionShort",'required'=>"true"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
			<?php $_block_plugin8 = isset($_smarty_tpl->smarty->registered_plugins['block']['fbvFormSection'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['fbvFormSection'][0][0] : null;
if (!is_callable(array($_block_plugin8, 'smartyFBVFormSection'))) {
throw new SmartyException('block tag \'fbvFormSection\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('fbvFormSection', array('title'=>"manager.announcements.form.description",'for'=>"description"));
$_block_repeat=true;
echo $_block_plugin8->smartyFBVFormSection(array('title'=>"manager.announcements.form.description",'for'=>"description"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
				<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['fbvElement'][0], array( array('type'=>"textarea",'multilingual'=>"true",'id'=>"description",'value'=>$_smarty_tpl->tpl_vars['description']->value,'label'=>"manager.announcements.form.descriptionInstructions",'rich'=>true),$_smarty_tpl ) );?>

			<?php $_block_repeat=false;
echo $_block_plugin8->smartyFBVFormSection(array('title'=>"manager.announcements.form.description",'for'=>"description"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
			<?php $_block_plugin9 = isset($_smarty_tpl->smarty->registered_plugins['block']['fbvFormSection'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['fbvFormSection'][0][0] : null;
if (!is_callable(array($_block_plugin9, 'smartyFBVFormSection'))) {
throw new SmartyException('block tag \'fbvFormSection\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('fbvFormSection', array('title'=>"manager.announcements.form.dateExpire",'for'=>"dataExpire"));
$_block_repeat=true;
echo $_block_plugin9->smartyFBVFormSection(array('title'=>"manager.announcements.form.dateExpire",'for'=>"dataExpire"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
				<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['fbvElement'][0], array( array('type'=>"text",'id'=>"dateExpire",'name'=>"dateExpire",'value'=>$_smarty_tpl->tpl_vars['dateExpire']->value,'label'=>"manager.announcements.form.dateExpireInstructions",'class'=>"datepicker"),$_smarty_tpl ) );?>

			<?php $_block_repeat=false;
echo $_block_plugin9->smartyFBVFormSection(array('title'=>"manager.announcements.form.dateExpire",'for'=>"dataExpire"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
			<?php if ($_smarty_tpl->tpl_vars['announcement']->value) {
$_smarty_tpl->_assignInScope('checked', false);
} else {
$_smarty_tpl->_assignInScope('checked', true);
}?>
			<?php $_block_plugin10 = isset($_smarty_tpl->smarty->registered_plugins['block']['fbvFormSection'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['fbvFormSection'][0][0] : null;
if (!is_callable(array($_block_plugin10, 'smartyFBVFormSection'))) {
throw new SmartyException('block tag \'fbvFormSection\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('fbvFormSection', array('for'=>"sendAnnouncementNotification",'list'=>"true"));
$_block_repeat=true;
echo $_block_plugin10->smartyFBVFormSection(array('for'=>"sendAnnouncementNotification",'list'=>"true"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
				<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['fbvElement'][0], array( array('type'=>"checkbox",'name'=>"sendAnnouncementNotification",'id'=>"sendAnnouncementNotification",'checked'=>$_smarty_tpl->tpl_vars['checked']->value,'label'=>"notification.sendNotificationConfirmation",'inline'=>true),$_smarty_tpl ) );?>

			<?php $_block_repeat=false;
echo $_block_plugin10->smartyFBVFormSection(array('for'=>"sendAnnouncementNotification",'list'=>"true"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
		<?php $_block_repeat=false;
echo $_block_plugin5->smartyFBVFormArea(array('id'=>"announcementInfo"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
		<p><span class="formRequired"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"common.requiredField"),$_smarty_tpl ) );?>
</span></p>
		<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['fbvFormButtons'][0], array( array('id'=>"announcementFormSubmit",'submitText'=>"common.save"),$_smarty_tpl ) );?>

	<?php }?>
</form>
<?php }
}
