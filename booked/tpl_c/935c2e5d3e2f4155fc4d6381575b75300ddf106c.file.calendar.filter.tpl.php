<?php /* Smarty version Smarty-3.1.16, created on 2017-06-29 11:51:40
         compiled from "/home/vol15_8/byethost8.com/b8_19720712/htdocs/booked/tpl/Calendar/calendar.filter.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13645583075955220ccc5a76-70989593%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '935c2e5d3e2f4155fc4d6381575b75300ddf106c' => 
    array (
      0 => '/home/vol15_8/byethost8.com/b8_19720712/htdocs/booked/tpl/Calendar/calendar.filter.tpl',
      1 => 1487738765,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13645583075955220ccc5a76-70989593',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'GroupName' => 0,
    'filters' => 0,
    'filter' => 0,
    'subfilter' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_5955220cee4894_59973693',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5955220cee4894_59973693')) {function content_5955220cee4894_59973693($_smarty_tpl) {?>
<div class="row form-inline">
    <div id="filter">

		<?php if ($_smarty_tpl->tpl_vars['GroupName']->value) {?>
		<span class="groupName"><?php echo $_smarty_tpl->tpl_vars['GroupName']->value;?>
</span>
		<?php } else { ?>
		<div>
            <div class="inline"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['indicator'][0][0]->DisplayIndicator(array('id'=>'loadingIndicator'),$_smarty_tpl);?>
</div>
			<label for="calendarFilter"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>"ChangeCalendar"),$_smarty_tpl);?>
</label>
			<select id="calendarFilter">
				<?php  $_smarty_tpl->tpl_vars['filter'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['filter']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['filters']->value->GetFilters(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['filter']->key => $_smarty_tpl->tpl_vars['filter']->value) {
$_smarty_tpl->tpl_vars['filter']->_loop = true;
?>
					<option value="s<?php echo $_smarty_tpl->tpl_vars['filter']->value->Id();?>
" class="schedule" <?php if ($_smarty_tpl->tpl_vars['filter']->value->Selected()) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['filter']->value->Name();?>
</option>
					<?php  $_smarty_tpl->tpl_vars['subfilter'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['subfilter']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['filter']->value->GetFilters(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['subfilter']->key => $_smarty_tpl->tpl_vars['subfilter']->value) {
$_smarty_tpl->tpl_vars['subfilter']->_loop = true;
?>
						<option value="r<?php echo $_smarty_tpl->tpl_vars['subfilter']->value->Id();?>
" class="resource" <?php if ($_smarty_tpl->tpl_vars['subfilter']->value->Selected()) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['subfilter']->value->Name();?>
</option>
					<?php } ?>
				<?php } ?>
				<?php }?>
			</select>
			<a href="#" id="showResourceGroups"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'ResourceGroups'),$_smarty_tpl);?>
</a>
		</div>
	</div>

	<div id="resourceGroupsContainer">
		<div id="resourceGroups"></div>
	</div>
</div>

<script type="text/javascript">
	$(function(){
		$('#calendarFilter').select2();
	});

</script><?php }} ?>
