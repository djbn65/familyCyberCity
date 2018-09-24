<?php /* Smarty version Smarty-3.1.16, created on 2017-02-27 21:04:12
         compiled from "/home/vol15_8/byethost8.com/b8_19720712/htdocs/booked/tpl/Admin/manage_quotas.tpl" */ ?>
<?php /*%%SmartyHeaderCode:90561849258b4da9c4ba925-48422438%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8a8b3e7e7fa5082e2976ed04859fdf0230b09b51' => 
    array (
      0 => '/home/vol15_8/byethost8.com/b8_19720712/htdocs/booked/tpl/Admin/manage_quotas.tpl',
      1 => 1487738750,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '90561849258b4da9c4ba925-48422438',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'Schedules' => 0,
    'schedule' => 0,
    'Resources' => 0,
    'resource' => 0,
    'Groups' => 0,
    'group' => 0,
    'scope' => 0,
    'Quotas' => 0,
    'quota' => 0,
    'day' => 0,
    'DayNames' => 0,
    'rowCss' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_58b4da9c735a27_24808020',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58b4da9c735a27_24808020')) {function content_58b4da9c735a27_24808020($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_replace')) include '/home/vol15_8/byethost8.com/b8_19720712/htdocs/booked/lib/Common/../../lib/external/Smarty/plugins/modifier.replace.php';
if (!is_callable('smarty_function_cycle')) include '/home/vol15_8/byethost8.com/b8_19720712/htdocs/booked/lib/Common/../../lib/external/Smarty/plugins/function.cycle.php';
?>
<?php echo $_smarty_tpl->getSubTemplate ('globalheader2.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('Timepicker'=>true), 0);?>

<div id="page-manage-quotas" class="admin-page" style="margin-top: 8rem">
	<h1><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'ManageQuotas'),$_smarty_tpl);?>
</h1>

	<form id="addQuotaForm" method="post" role="form" class="form-inline">

		<div class="panel panel-default" id="add-quota-panel">
			<div class="panel-heading"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>"AddQuota"),$_smarty_tpl);?>
 <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['showhide_icon'][0][0]->ShowHideIcon(array(),$_smarty_tpl);?>
</div>
			<div class="panel-body" id="addQuota">
				<?php $_smarty_tpl->_capture_stack[0][] = array("schedules", "schedules", null); ob_start(); ?>
					<select class='form-control' <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0][0]->GetFormName(array('key'=>'SCHEDULE_ID'),$_smarty_tpl);?>
 title='Select Schedule'>
						<option selected='selected' value=''><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'AllSchedules'),$_smarty_tpl);?>
</option>
						<?php  $_smarty_tpl->tpl_vars['schedule'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['schedule']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['Schedules']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['schedule']->key => $_smarty_tpl->tpl_vars['schedule']->value) {
$_smarty_tpl->tpl_vars['schedule']->_loop = true;
?>
							<option value='<?php echo $_smarty_tpl->tpl_vars['schedule']->value->GetId();?>
'><?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['schedule']->value->GetName(),',',' ');?>
</option>
						<?php } ?>
					</select>
				<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

				<?php $_smarty_tpl->_capture_stack[0][] = array("resources", "resources", null); ob_start(); ?>
					<select class='form-control' <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0][0]->GetFormName(array('key'=>'RESOURCE_ID'),$_smarty_tpl);?>
 title='Select Resource'>
						<option selected='selected' value=''><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'AllResources'),$_smarty_tpl);?>
</option>
						<?php  $_smarty_tpl->tpl_vars['resource'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['resource']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['Resources']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['resource']->key => $_smarty_tpl->tpl_vars['resource']->value) {
$_smarty_tpl->tpl_vars['resource']->_loop = true;
?>
							<option value='<?php echo $_smarty_tpl->tpl_vars['resource']->value->GetResourceId();?>
'><?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['resource']->value->GetName(),',',' ');?>
</option>
						<?php } ?>
					</select>
				<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

				<?php $_smarty_tpl->_capture_stack[0][] = array("groups", "groups", null); ob_start(); ?>
					<select class='form-control' <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0][0]->GetFormName(array('key'=>'GROUP'),$_smarty_tpl);?>
 title='Select Group'>
						<option selected='selected' value=''><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'AllGroups'),$_smarty_tpl);?>
</option>
						<?php  $_smarty_tpl->tpl_vars['group'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['group']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['Groups']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['group']->key => $_smarty_tpl->tpl_vars['group']->value) {
$_smarty_tpl->tpl_vars['group']->_loop = true;
?>
							<option value='<?php echo $_smarty_tpl->tpl_vars['group']->value->Id;?>
'><?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['group']->value->Name,',',' ');?>
</option>
						<?php } ?>
					</select>
				<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

				<?php $_smarty_tpl->_capture_stack[0][] = array("amount", "amount", null); ob_start(); ?>
					<input type='number' step='any' class='form-control mid-number' min='0' max='10000' value='0' <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0][0]->GetFormName(array('key'=>'LIMIT'),$_smarty_tpl);?>
 title='Quota number'/>
				<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

				<?php $_smarty_tpl->_capture_stack[0][] = array("unit", "unit", null); ob_start(); ?>
					<select class='form-control' <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0][0]->GetFormName(array('key'=>'UNIT'),$_smarty_tpl);?>
 title='Quota unit'>
						<option value='<?php echo QuotaUnit::Hours;?>
'><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'hours'),$_smarty_tpl);?>
</option>
						<option value='<?php echo QuotaUnit::Reservations;?>
'><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'reservations'),$_smarty_tpl);?>
</option>
					</select>
				<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

				<?php $_smarty_tpl->_capture_stack[0][] = array("duration", "duration", null); ob_start(); ?>
					<select class='form-control' <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0][0]->GetFormName(array('key'=>'DURATION'),$_smarty_tpl);?>
 title='Quota frequency'>
						<option value='<?php echo QuotaDuration::Day;?>
'><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'day'),$_smarty_tpl);?>
</option>
						<option value='<?php echo QuotaDuration::Week;?>
'><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'week'),$_smarty_tpl);?>
</option>
						<option value='<?php echo QuotaDuration::Month;?>
'><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'month'),$_smarty_tpl);?>
</option>
						<option value='<?php echo QuotaDuration::Year;?>
'><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'year'),$_smarty_tpl);?>
</option>
					</select>
				<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

				<?php $_smarty_tpl->_capture_stack[0][] = array("enforceHours", "enforceHours", null); ob_start(); ?>
					<div class='checkbox'>
						<input type='checkbox' id='enforce-all-day' checked='checked' value='1' <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0][0]->GetFormName(array('key'=>'ENFORCE_ALL_DAY'),$_smarty_tpl);?>
/>
						<label for='enforce-all-day'><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'AllDay'),$_smarty_tpl);?>
</label>
					</div>
					<div id='enforce-hours-times' class='inline no-show'>
						<div class='form-group form-group-sm'>
							<span><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Between'),$_smarty_tpl);?>
</span>
							<input type='text' class='form-control time' id='enforce-time-start' size='6' value='12:00am' <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0][0]->GetFormName(array('key'=>'BEGIN_TIME'),$_smarty_tpl);?>
/>
							-
							<input type='text' class='form-control time' id='enforce-time-end' size='6' value='12:00am' <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0][0]->GetFormName(array('key'=>'END_TIME'),$_smarty_tpl);?>
/>
						</div>
					</div>
				<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

				<?php $_smarty_tpl->_capture_stack[0][] = array("enforceDays", "enforceDays", null); ob_start(); ?>
					<div class='checkbox'>
						<input type='checkbox' id='enforce-every-day' checked='checked' value='1' <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0][0]->GetFormName(array('key'=>'ENFORCE_EVERY_DAY'),$_smarty_tpl);?>
/>
						<label for='enforce-every-day'><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Everyday'),$_smarty_tpl);?>
</label>
					</div>
					<div id='enforce-days' class='inline no-show'>
						<div class='checkbox'>
							<input type='checkbox' id='enforce-sun' value='0' <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0][0]->GetFormName(array('key'=>'DAY','multi'=>true),$_smarty_tpl);?>
/>
							<label for='enforce-sun'><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>"DaySundayAbbr"),$_smarty_tpl);?>
</label>
						</div>
						<div class='checkbox'>
							<input type='checkbox' id='enforce-mon' value='1' <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0][0]->GetFormName(array('key'=>'DAY','multi'=>true),$_smarty_tpl);?>
/>
							<label for='enforce-mon'><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>"DayMondayAbbr"),$_smarty_tpl);?>
</label>
						</div>
						<div class='checkbox'>
							<input type='checkbox' id='enforce-tue' value='2' <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0][0]->GetFormName(array('key'=>'DAY','multi'=>true),$_smarty_tpl);?>
/>
							<label for='enforce-tue'><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>"DayTuesdayAbbr"),$_smarty_tpl);?>
</label>
						</div>
						<div class='checkbox'>
							<input type='checkbox' id='enforce-wed' value='3' <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0][0]->GetFormName(array('key'=>'DAY','multi'=>true),$_smarty_tpl);?>
/>
							<label for='enforce-wed'><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>"DayWednesdayAbbr"),$_smarty_tpl);?>
</label>
						</div>
						<div class='checkbox'>
							<input type='checkbox' id='enforce-thu'
								   value='4' <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0][0]->GetFormName(array('key'=>'DAY','multi'=>true),$_smarty_tpl);?>
/>
							<label for='enforce-thu'><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>"DayThursdayAbbr"),$_smarty_tpl);?>
</label>
						</div>
						<div class='checkbox'>
							<input type='checkbox'
								   id='enforce-fri'
								   value='5' <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0][0]->GetFormName(array('key'=>'DAY','multi'=>true),$_smarty_tpl);?>
/>
							<label for='enforce-fri'><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>"DayFridayAbbr"),$_smarty_tpl);?>
</label>
						</div>
						<div class='checkbox'>
							<input type='checkbox'
								   id='enforce-sat'
								   value='6' <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0][0]->GetFormName(array('key'=>'DAY','multi'=>true),$_smarty_tpl);?>
/>
							<label for='enforce-sat'><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>"DaySaturdayAbbr"),$_smarty_tpl);?>
</label>
						</div>
					</div>
				<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

				<?php $_smarty_tpl->_capture_stack[0][] = array("scope", "scope", null); ob_start(); ?>
					<div class='form-group'>
						<select class='form-control' <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0][0]->GetFormName(array('key'=>'QUOTA_SCOPE'),$_smarty_tpl);?>
>
							<option value='<?php echo QuotaScope::IncludeCompleted;?>
'><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'IncludingCompletedReservations'),$_smarty_tpl);?>
</option>
							<option value='<?php echo QuotaScope::ExcludeCompleted;?>
'><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'NotCountingCompletedReservations'),$_smarty_tpl);?>
</option>
						</select>
					</div>
				<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

				<div class="add-quota-line"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'QuotaConfiguration','args'=>((string)$_smarty_tpl->tpl_vars['schedules']->value).",".((string)$_smarty_tpl->tpl_vars['resources']->value).",".((string)$_smarty_tpl->tpl_vars['groups']->value).",".((string)$_smarty_tpl->tpl_vars['amount']->value).",".((string)$_smarty_tpl->tpl_vars['unit']->value).",".((string)$_smarty_tpl->tpl_vars['duration']->value)),$_smarty_tpl);?>
 <?php echo $_smarty_tpl->tpl_vars['scope']->value;?>
</div>
				<div class="add-quota-line"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'QuotaEnforcement','args'=>((string)$_smarty_tpl->tpl_vars['enforceHours']->value).",".((string)$_smarty_tpl->tpl_vars['enforceDays']->value)),$_smarty_tpl);?>
</div>

				<div class="note"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'QuotaReminder'),$_smarty_tpl);?>
</div>
			</div>

			<div class="panel-footer">
				<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['add_button'][0][0]->AddButton(array('class'=>"btn-sm"),$_smarty_tpl);?>

				<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['reset_button'][0][0]->ResetButton(array('class'=>"btn-sm"),$_smarty_tpl);?>

				<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['indicator'][0][0]->DisplayIndicator(array(),$_smarty_tpl);?>

			</div>
		</div>
	</form>

	<div class="panel panel-default" id="list-quotas-panel">
		<div class="panel-heading"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>"AllQuotas"),$_smarty_tpl);?>
</div>
		<div class="panel-body no-padding" id="quotaList">
			<?php  $_smarty_tpl->tpl_vars['quota'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['quota']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['Quotas']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['quota']->key => $_smarty_tpl->tpl_vars['quota']->value) {
$_smarty_tpl->tpl_vars['quota']->_loop = true;
?>
				<?php $_smarty_tpl->_capture_stack[0][] = array("scheduleName", "scheduleName", null); ob_start(); ?>
					<span class='bold'><?php if ($_smarty_tpl->tpl_vars['quota']->value->ScheduleName!='') {?>
							<?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['quota']->value->ScheduleName,',',' ');?>

						<?php } else { ?>
							<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>"AllSchedules"),$_smarty_tpl);?>

						<?php }?>
					</span>
				<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
				<?php $_smarty_tpl->_capture_stack[0][] = array("resourceName", "resourceName", null); ob_start(); ?>
					<span class='bold'><?php if ($_smarty_tpl->tpl_vars['quota']->value->ResourceName!='') {?>
							<?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['quota']->value->ResourceName,',',' ');?>

						<?php } else { ?>
							<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>"AllResources"),$_smarty_tpl);?>

						<?php }?>
					</span>
				<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
				<?php $_smarty_tpl->_capture_stack[0][] = array("groupName", "groupName", null); ob_start(); ?>
					<span class='bold'>
						<?php if ($_smarty_tpl->tpl_vars['quota']->value->GroupName!='') {?>
							<?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['quota']->value->GroupName,',',' ');?>

						<?php } else { ?>
							<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>"AllGroups"),$_smarty_tpl);?>

						<?php }?>
					</span>
				<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
				<?php $_smarty_tpl->_capture_stack[0][] = array("amount", "amount", null); ob_start(); ?>
					<span class='bold'><?php echo $_smarty_tpl->tpl_vars['quota']->value->Limit;?>
</span>
				<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
				<?php $_smarty_tpl->_capture_stack[0][] = array("unit", "unit", null); ob_start(); ?>
					<span class='bold'><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>$_smarty_tpl->tpl_vars['quota']->value->Unit),$_smarty_tpl);?>
</span>
				<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
				<?php $_smarty_tpl->_capture_stack[0][] = array("duration", "duration", null); ob_start(); ?>
					<span class='bold'><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>$_smarty_tpl->tpl_vars['quota']->value->Duration),$_smarty_tpl);?>
</span>
				<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
				<?php $_smarty_tpl->_capture_stack[0][] = array("enforceHours", "enforceHours", null); ob_start(); ?>
					<span class='bold'>
					<?php if ($_smarty_tpl->tpl_vars['quota']->value->AllDay) {?>
						<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'AllDay'),$_smarty_tpl);?>

					<?php } else { ?>
						<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Between'),$_smarty_tpl);?>
 <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formatdate'][0][0]->FormatDate(array('date'=>$_smarty_tpl->tpl_vars['quota']->value->EnforcedStartTime,'key'=>'period_time'),$_smarty_tpl);?>
 - <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formatdate'][0][0]->FormatDate(array('date'=>$_smarty_tpl->tpl_vars['quota']->value->EnforcedEndTime,'key'=>'period_time'),$_smarty_tpl);?>

					<?php }?>
					</span>
				<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
				<?php $_smarty_tpl->_capture_stack[0][] = array("enforceDays", "enforceDays", null); ob_start(); ?>
					<span class='bold'>
					<?php if ($_smarty_tpl->tpl_vars['quota']->value->Everyday) {?>
						<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Everyday'),$_smarty_tpl);?>

					<?php } else { ?>
						<?php  $_smarty_tpl->tpl_vars['day'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['day']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['quota']->value->EnforcedDays; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['day']->key => $_smarty_tpl->tpl_vars['day']->value) {
$_smarty_tpl->tpl_vars['day']->_loop = true;
?>
							<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>$_smarty_tpl->tpl_vars['DayNames']->value[$_smarty_tpl->tpl_vars['day']->value]),$_smarty_tpl);?>

						<?php } ?>
					<?php }?>
					</span>
				<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
				<?php $_smarty_tpl->_capture_stack[0][] = array("scope", "scope", null); ob_start(); ?>
					<?php if ($_smarty_tpl->tpl_vars['quota']->value->Scope==QuotaScope::IncludeCompleted) {?>
						<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'IncludingCompletedReservations'),$_smarty_tpl);?>

					<?php } else { ?>
						<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'NotCountingCompletedReservations'),$_smarty_tpl);?>

					<?php }?>
				<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
				<?php echo smarty_function_cycle(array('values'=>'row0,row1','assign'=>'rowCss'),$_smarty_tpl);?>

				<div class="quotaItem <?php echo $_smarty_tpl->tpl_vars['rowCss']->value;?>
">
					<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'QuotaConfiguration','args'=>((string)$_smarty_tpl->tpl_vars['scheduleName']->value).",".((string)$_smarty_tpl->tpl_vars['resourceName']->value).",".((string)$_smarty_tpl->tpl_vars['groupName']->value).",".((string)$_smarty_tpl->tpl_vars['amount']->value).",".((string)$_smarty_tpl->tpl_vars['unit']->value).",".((string)$_smarty_tpl->tpl_vars['duration']->value)),$_smarty_tpl);?>
 <span class="bold"><?php echo $_smarty_tpl->tpl_vars['scope']->value;?>
</span>.
					<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'QuotaEnforcement','args'=>((string)$_smarty_tpl->tpl_vars['enforceHours']->value).",".((string)$_smarty_tpl->tpl_vars['enforceDays']->value)),$_smarty_tpl);?>

					<a href="#" quotaId="<?php echo $_smarty_tpl->tpl_vars['quota']->value->Id;?>
" class="delete pull-right"><span class="fa fa-trash icon remove"></span></a>
				</div>
				<?php }
if (!$_smarty_tpl->tpl_vars['quota']->_loop) {
?>
				<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'None'),$_smarty_tpl);?>

			<?php } ?>
		</div>
	</div>

	<div class="modal fade" id="deleteDialog" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					<h4 class="modal-title" id="deleteModalLabel"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Delete'),$_smarty_tpl);?>
</h4>
				</div>
				<div class="modal-body">
					<div class="alert alert-warning">
						<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'DeleteWarning'),$_smarty_tpl);?>

					</div>
				</div>
				<div class="modal-footer">
					<form id="deleteQuotaForm" method="post">
						<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['cancel_button'][0][0]->CancelButton(array(),$_smarty_tpl);?>

						<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['delete_button'][0][0]->DeleteButton(array(),$_smarty_tpl);?>

						<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['indicator'][0][0]->DisplayIndicator(array(),$_smarty_tpl);?>

					</form>
				</div>
			</div>
		</div>
	</div>

	<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['csrf_token'][0][0]->CSRFToken(array(),$_smarty_tpl);?>

	<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['jsfile'][0][0]->IncludeJavascriptFile(array('src'=>"ajax-helpers.js"),$_smarty_tpl);?>

	<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['jsfile'][0][0]->IncludeJavascriptFile(array('src'=>"admin/quota.js"),$_smarty_tpl);?>

	<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['jsfile'][0][0]->IncludeJavascriptFile(array('src'=>"js/jquery.form-3.09.min.js"),$_smarty_tpl);?>


	<script type="text/javascript">
		$(document).ready(function () {

			var actions = {
				addQuota: '<?php echo ManageQuotasActions::AddQuota;?>
',
				deleteQuota: '<?php echo ManageQuotasActions::DeleteQuota;?>
'
			};

			var quotaOptions = {
				submitUrl: '<?php echo $_SERVER['SCRIPT_NAME'];?>
',
				saveRedirect: '<?php echo $_SERVER['SCRIPT_NAME'];?>
',
				actions: actions
			};

			$('#enforce-time-start').timepicker({
				show24Hours: false
			});
			$('#enforce-time-end').timepicker({
				show24Hours: false
			});

			var quotaManagement = new QuotaManagement(quotaOptions);
			quotaManagement.init();

			$('#add-quota-panel').showHidePanel();
		});
	</script>
</div>
<?php echo $_smarty_tpl->getSubTemplate ('globalfooter.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
