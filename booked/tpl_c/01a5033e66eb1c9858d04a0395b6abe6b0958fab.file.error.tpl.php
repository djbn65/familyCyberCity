<?php /* Smarty version Smarty-3.1.16, created on 2017-03-27 01:47:05
         compiled from "/home/vol15_8/byethost8.com/b8_19720712/htdocs/booked/tpl/error.tpl" */ ?>
<?php /*%%SmartyHeaderCode:199572796158d8a7591b1534-62432691%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '01a5033e66eb1c9858d04a0395b6abe6b0958fab' => 
    array (
      0 => '/home/vol15_8/byethost8.com/b8_19720712/htdocs/booked/tpl/error.tpl',
      1 => 1487737781,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '199572796158d8a7591b1534-62432691',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'ErrorMessage' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_58d8a75966ee82_32858434',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58d8a75966ee82_32858434')) {function content_58d8a75966ee82_32858434($_smarty_tpl) {?>
<?php echo $_smarty_tpl->getSubTemplate ('globalheader.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<div class="error">
    <h3><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>$_smarty_tpl->tpl_vars['ErrorMessage']->value),$_smarty_tpl);?>
</h3>
    <h5><a href="//<?php echo $_SERVER['HTTP_HOST'];?>
<?php echo $_SERVER['REQUEST_URI'];?>
"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'ReturnToPreviousPage'),$_smarty_tpl);?>
</a></h5>
</div>


<?php echo $_smarty_tpl->getSubTemplate ('globalfooter.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
