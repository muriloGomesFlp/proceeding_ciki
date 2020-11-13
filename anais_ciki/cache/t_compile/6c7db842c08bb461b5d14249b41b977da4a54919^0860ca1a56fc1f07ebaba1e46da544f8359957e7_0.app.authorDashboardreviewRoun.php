<?php
/* Smarty version 3.1.34-dev-7, created on 2020-10-19 21:29:44
  from 'app:authorDashboardreviewRoun' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f8e05488a46b4_29748609',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0860ca1a56fc1f07ebaba1e46da544f8359957e7' => 
    array (
      0 => 'app:authorDashboardreviewRoun',
      1 => 1593209567,
      2 => 'app',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f8e05488a46b4_29748609 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
 type="text/javascript">
	// Attach the JS file tab handler.
	$(function() {
		$('#<?php echo $_smarty_tpl->tpl_vars['reviewRoundTabsId']->value;?>
').pkpHandler(
			'$.pkp.controllers.TabHandler',
			{
				<?php $_smarty_tpl->_assignInScope('roundIndex', $_smarty_tpl->tpl_vars['lastReviewRoundNumber']->value-1);?>
				selected: <?php echo $_smarty_tpl->tpl_vars['roundIndex']->value;?>

			}
		);
	});
<?php echo '</script'; ?>
>
<div id="<?php echo $_smarty_tpl->tpl_vars['reviewRoundTabsId']->value;?>
" class="pkp_controllers_tab">
	<ul>
		<?php $_block_plugin1 = isset($_smarty_tpl->smarty->registered_plugins['block']['iterate'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['iterate'][0][0] : null;
if (!is_callable(array($_block_plugin1, 'smartyIterate'))) {
throw new SmartyException('block tag \'iterate\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('iterate', array('from'=>'reviewRounds','item'=>'reviewRound'));
$_block_repeat=true;
echo $_block_plugin1->smartyIterate(array('from'=>'reviewRounds','item'=>'reviewRound'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
			<li><a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('router'=>@constant('ROUTE_COMPONENT'),'component'=>"tab.authorDashboard.AuthorDashboardReviewRoundTabHandler",'op'=>"fetchReviewRoundInfo",'submissionId'=>$_smarty_tpl->tpl_vars['submission']->value->getId(),'stageId'=>$_smarty_tpl->tpl_vars['reviewRound']->value->getStageId(),'reviewRoundId'=>$_smarty_tpl->tpl_vars['reviewRound']->value->getId(),'escape'=>false),$_smarty_tpl ) );?>
"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"submission.round",'round'=>$_smarty_tpl->tpl_vars['reviewRound']->value->getRound()),$_smarty_tpl ) );?>
</a></li>
		<?php $_block_repeat=false;
echo $_block_plugin1->smartyIterate(array('from'=>'reviewRounds','item'=>'reviewRound'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
	</ul>
</div>
<?php }
}
