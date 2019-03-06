<?php /* Smarty version Smarty-3.1.16, created on 2017-06-27 23:24:55
         compiled from "/home/vol15_8/byethost8.com/b8_19720712/htdocs/booked/tpl/Admin/Resources/manage_resources_capacity.tpl" */ ?>
<?php /*%%SmartyHeaderCode:100697658659532187d280f8-21396423%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'df870f7ea61f443a6852b1e85b99c1dc18c5442e' => 
    array (
      0 => '/home/vol15_8/byethost8.com/b8_19720712/htdocs/booked/tpl/Admin/Resources/manage_resources_capacity.tpl',
      1 => 1487739370,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '100697658659532187d280f8-21396423',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'resource' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_59532187d423f6_92619161',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59532187d423f6_92619161')) {function content_59532187d423f6_92619161($_smarty_tpl) {?>
<div class="maxParticipants"
	 data-value="<?php echo $_smarty_tpl->tpl_vars['resource']->value->GetMaxParticipants();?>
">
	<?php if ($_smarty_tpl->tpl_vars['resource']->value->HasMaxParticipants()) {?>
		<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'ResourceCapacity','args'=>$_smarty_tpl->tpl_vars['resource']->value->GetMaxParticipants()),$_smarty_tpl);?>

	<?php } else { ?>
		<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'ResourceCapacityNone'),$_smarty_tpl);?>

	<?php }?>
</div><?php }} ?>
