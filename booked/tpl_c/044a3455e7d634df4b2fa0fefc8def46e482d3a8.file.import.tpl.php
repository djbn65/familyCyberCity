<?php /* Smarty version Smarty-3.1.16, created on 2017-03-01 00:33:37
         compiled from "/home/vol15_8/byethost8.com/b8_19720712/htdocs/booked/tpl/Admin/Import/import.tpl" */ ?>
<?php /*%%SmartyHeaderCode:47010872858b65d3104e3d5-87656474%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '044a3455e7d634df4b2fa0fefc8def46e482d3a8' => 
    array (
      0 => '/home/vol15_8/byethost8.com/b8_19720712/htdocs/booked/tpl/Admin/Import/import.tpl',
      1 => 1487739361,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '47010872858b65d3104e3d5-87656474',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_58b65d3109b425_96593855',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58b65d3109b425_96593855')) {function content_58b65d3109b425_96593855($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('globalheader2.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<div id="page-import" class="admin-page" style="margin-top: 8rem">
    <h1><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Import'),$_smarty_tpl);?>
</h1>
    <a href="ics_import.php" class="btn btn-default"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'ImportICS'),$_smarty_tpl);?>
</a>
    <a href="quartzy_import.php" class="btn btn-default"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'ImportQuartzy'),$_smarty_tpl);?>
</a>
</div>

<?php echo $_smarty_tpl->getSubTemplate ('globalfooter.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }} ?>
