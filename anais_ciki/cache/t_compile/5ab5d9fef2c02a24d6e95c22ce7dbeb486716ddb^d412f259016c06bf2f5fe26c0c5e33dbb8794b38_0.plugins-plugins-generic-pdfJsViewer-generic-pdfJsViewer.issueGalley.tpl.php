<?php
/* Smarty version 3.1.34-dev-7, created on 2020-10-20 01:10:39
  from 'plugins-plugins-generic-pdfJsViewer-generic-pdfJsViewer:issueGalley.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f8e390f3d3d07_98201738',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd412f259016c06bf2f5fe26c0c5e33dbb8794b38' => 
    array (
      0 => 'plugins-plugins-generic-pdfJsViewer-generic-pdfJsViewer:issueGalley.tpl',
      1 => 1593209568,
      2 => 'plugins-plugins-generic-pdfJsViewer-generic-pdfJsViewer',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f8e390f3d3d07_98201738 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/srv/apps/anais_ciki/lib/pkp/lib/vendor/smarty/smarty/libs/plugins/modifier.date_format.php','function'=>'smarty_modifier_date_format',),));
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', "pdfUrl", null);
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('op'=>"download",'path'=>call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'to_array' ][ 0 ], array( $_smarty_tpl->tpl_vars['issue']->value->getBestIssueId($_smarty_tpl->tpl_vars['currentJournal']->value),$_smarty_tpl->tpl_vars['galley']->value->getBestGalleyId($_smarty_tpl->tpl_vars['currentJournal']->value) )),'escape'=>false),$_smarty_tpl ) );
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', "parentUrl", null);
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('page'=>"issue",'op'=>"view",'path'=>$_smarty_tpl->tpl_vars['issue']->value->getBestIssueId($_smarty_tpl->tpl_vars['currentJournal']->value)),$_smarty_tpl ) );
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', "galleyTitle", null);
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"submission.representationOfTitle",'representation'=>$_smarty_tpl->tpl_vars['galley']->value->getLabel(),'title'=>call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['issue']->value->getIssueIdentification() ))),$_smarty_tpl ) );
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', "datePublished", null);
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"submission.outdatedVersion",'datePublished'=>smarty_modifier_date_format($_smarty_tpl->tpl_vars['issue']->value->getData('datePublished'),$_smarty_tpl->tpl_vars['dateFormatLong']->value),'urlRecentVersion'=>$_smarty_tpl->tpl_vars['parentUrl']->value),$_smarty_tpl ) );
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
$_smarty_tpl->_subTemplateRender($_smarty_tpl->tpl_vars['displayTemplateResource']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>$_smarty_tpl->tpl_vars['issue']->value->getIssueIdentification(),'parentUrl'=>$_smarty_tpl->tpl_vars['parentUrl']->value,'pdfUrl'=>$_smarty_tpl->tpl_vars['pdfUrl']->value,'galleyTitle'=>$_smarty_tpl->tpl_vars['galleyTitle']->value,'datePublished'=>$_smarty_tpl->tpl_vars['datePublished']->value), 0, true);
}
}
