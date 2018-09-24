<?php /* Smarty version Smarty-3.1.16, created on 2017-02-28 19:27:00
         compiled from "/home/vol15_8/byethost8.com/b8_19720712/htdocs/booked/tpl/Admin/manage_schedules.tpl" */ ?>
<?php /*%%SmartyHeaderCode:114614088158b615548c4c25-35532734%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c7e582bd9e99eb1cc905bb5d94cbedc0aeb2ca41' => 
    array (
      0 => '/home/vol15_8/byethost8.com/b8_19720712/htdocs/booked/tpl/Admin/manage_schedules.tpl',
      1 => 1487966886,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '114614088158b615548c4c25-35532734',
  'function' => 
  array (
    'display_periods' => 
    array (
      'parameter' => 
      array (
      ),
      'compiled' => '',
    ),
    'display_slot_inputs' => 
    array (
      'parameter' => 
      array (
      ),
      'compiled' => '',
    ),
  ),
  'variables' => 
  array (
    'Schedules' => 0,
    'schedule' => 0,
    'id' => 0,
    'dayOfWeek' => 0,
    'Today' => 0,
    'DayNames' => 0,
    'daysVisible' => 0,
    'GroupLookup' => 0,
    'AdminGroups' => 0,
    'CreditsEnabled' => 0,
    'Layouts' => 0,
    'Months' => 0,
    'day' => 0,
    'period' => 0,
    'showReservable' => 0,
    'PageInfo' => 0,
    'dayIndex' => 0,
    'dayName' => 0,
    'SourceSchedules' => 0,
    'suffix' => 0,
    'TimezoneValues' => 0,
    'TimezoneOutput' => 0,
    'DefaultDate' => 0,
    'month' => 0,
    'DayList' => 0,
    'group' => 0,
    'TimeFormat' => 0,
  ),
  'has_nocache_code' => 0,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_58b61554ca1ed5_56542915',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58b61554ca1ed5_56542915')) {function content_58b61554ca1ed5_56542915($_smarty_tpl) {?><?php if (!is_callable('smarty_function_html_options')) include '/home/vol15_8/byethost8.com/b8_19720712/htdocs/booked/lib/Common/../../lib/external/Smarty/plugins/function.html_options.php';
?>
<?php echo $_smarty_tpl->getSubTemplate ('globalheader2.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('InlineEdit'=>true), 0);?>


<div id="page-manage-schedules" class="admin-page" style="margin-top: 8rem">

	<h1><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'ManageSchedules'),$_smarty_tpl);?>
</h1>

	<div class="panel panel-default admin-panel" id="list-schedules-panel">
		<div class="panel-heading"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>"AllSchedules"),$_smarty_tpl);?>

			<a href="#" class="add-link pull-right" id="add-schedule"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>"AddSchedule"),$_smarty_tpl);?>

				<span class="fa fa-plus-circle icon add"></span>
			</a>
		</div>
		<div class="panel-body no-padding" id="scheduleList">
			<?php  $_smarty_tpl->tpl_vars['schedule'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['schedule']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['Schedules']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['schedule']->key => $_smarty_tpl->tpl_vars['schedule']->value) {
$_smarty_tpl->tpl_vars['schedule']->_loop = true;
?>
				<?php $_smarty_tpl->tpl_vars['id'] = new Smarty_variable($_smarty_tpl->tpl_vars['schedule']->value->GetId(), null, 0);?>
				<?php $_smarty_tpl->_capture_stack[0][] = array('daysVisible', null, null); ob_start(); ?><span class='propertyValue daysVisible inlineUpdate' data-type='number' data-pk='<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
'
												data-name='<?php echo FormKeys::SCHEDULE_DAYS_VISIBLE;?>
'  data-min='0'><?php echo $_smarty_tpl->tpl_vars['schedule']->value->GetDaysVisible();?>
</span><?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
				<?php $_smarty_tpl->tpl_vars['dayOfWeek'] = new Smarty_variable($_smarty_tpl->tpl_vars['schedule']->value->GetWeekdayStart(), null, 0);?>
				<?php $_smarty_tpl->_capture_stack[0][] = array('dayName', null, null); ob_start(); ?><span class='propertyValue dayName inlineUpdate' data-type='select' data-pk='<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
'
											data-name='<?php echo FormKeys::SCHEDULE_WEEKDAY_START;?>
'
											data-value='<?php echo $_smarty_tpl->tpl_vars['dayOfWeek']->value;?>
'><?php if ($_smarty_tpl->tpl_vars['dayOfWeek']->value==Schedule::Today) {?><?php echo $_smarty_tpl->tpl_vars['Today']->value;?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['DayNames']->value[$_smarty_tpl->tpl_vars['dayOfWeek']->value];?>
<?php }?></span><?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
				<div class="scheduleDetails" data-schedule-id="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
">
					<div class="col-xs-12 col-sm-6">
						<input type="hidden" class="id" value="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
"/>
						<input type="hidden" class="daysVisible" value="<?php echo $_smarty_tpl->tpl_vars['daysVisible']->value;?>
"/>
						<input type="hidden" class="dayOfWeek" value="<?php echo $_smarty_tpl->tpl_vars['dayOfWeek']->value;?>
"/>

						<div>
					<span class="title scheduleName" data-type="text" data-pk="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
"
						  data-name="<?php echo FormKeys::SCHEDULE_NAME;?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['schedule']->value->GetName(), ENT_QUOTES, 'UTF-8', true);?>
</span>
							<a class="update renameButton" href="#"><span class="fa fa-pencil-square-o"></span></a>
						</div>

						<div><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>"LayoutDescription",'args'=>((string)Smarty::$_smarty_vars['capture']['dayName']).", ".((string)Smarty::$_smarty_vars['capture']['daysVisible'])),$_smarty_tpl);?>
</div>

						<div><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'ScheduleAdministrator'),$_smarty_tpl);?>

							<span class="propertyValue scheduleAdmin"
								  data-type="select" data-pk="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" data-value="<?php echo $_smarty_tpl->tpl_vars['schedule']->value->GetAdminGroupId();?>
"
								  data-name="<?php echo FormKeys::SCHEDULE_ADMIN_GROUP_ID;?>
"><?php echo $_smarty_tpl->tpl_vars['GroupLookup']->value[$_smarty_tpl->tpl_vars['schedule']->value->GetAdminGroupId()]->Name;?>
</span>
							<?php if (count($_smarty_tpl->tpl_vars['AdminGroups']->value)>0) {?>
								<a class="update changeScheduleAdmin" href="#"><span class="fa fa-pencil-square-o"></span></a>
							<?php }?>
						</div>

						<?php if ($_smarty_tpl->tpl_vars['CreditsEnabled']->value) {?>
							<span><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'PeakTimes'),$_smarty_tpl);?>
</span>
							<a class="update changePeakTimes" href="#"><span class="fa fa-pencil-square-o"></span></a>
							<div class="peakPlaceHolder">
								<?php echo $_smarty_tpl->getSubTemplate ("Admin/Schedules/manage_peak_times.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('Layout'=>$_smarty_tpl->tpl_vars['Layouts']->value[$_smarty_tpl->tpl_vars['id']->value],'Months'=>$_smarty_tpl->tpl_vars['Months']->value,'DayNames'=>$_smarty_tpl->tpl_vars['DayNames']->value), 0);?>

							</div>
						<?php }?>
					</div>

					<div class="layout col-xs-12 col-sm-6">
						<?php if (!function_exists('smarty_template_function_display_periods')) {
    function smarty_template_function_display_periods($_smarty_tpl,$params) {
    $saved_tpl_vars = $_smarty_tpl->tpl_vars;
    foreach ($_smarty_tpl->smarty->template_functions['display_periods']['parameter'] as $key => $value) {$_smarty_tpl->tpl_vars[$key] = new Smarty_variable($value);};
    foreach ($params as $key => $value) {$_smarty_tpl->tpl_vars[$key] = new Smarty_variable($value);}?>
							<?php  $_smarty_tpl->tpl_vars['period'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['period']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['Layouts']->value[$_smarty_tpl->tpl_vars['id']->value]->GetSlots($_smarty_tpl->tpl_vars['day']->value); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['period']->key => $_smarty_tpl->tpl_vars['period']->value) {
$_smarty_tpl->tpl_vars['period']->_loop = true;
?>
								<?php if ($_smarty_tpl->tpl_vars['period']->value->IsReservable()==$_smarty_tpl->tpl_vars['showReservable']->value) {?>
									<?php echo $_smarty_tpl->tpl_vars['period']->value->Start->Format("H:i");?>
 - <?php echo $_smarty_tpl->tpl_vars['period']->value->End->Format("H:i");?>

									<?php if ($_smarty_tpl->tpl_vars['period']->value->IsLabelled()) {?>
										<?php echo $_smarty_tpl->tpl_vars['period']->value->Label;?>

									<?php }?>,
								<?php }?>
								<?php }
if (!$_smarty_tpl->tpl_vars['period']->_loop) {
?>
								<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'None'),$_smarty_tpl);?>

							<?php } ?>
						<?php $_smarty_tpl->tpl_vars = $saved_tpl_vars;
foreach (Smarty::$global_tpl_vars as $key => $value) if(!isset($_smarty_tpl->tpl_vars[$key])) $_smarty_tpl->tpl_vars[$key] = $value;}}?>


						<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'ScheduleLayout','args'=>$_smarty_tpl->tpl_vars['schedule']->value->GetTimezone()),$_smarty_tpl);?>
:<br/>
						<input type="hidden" class="timezone" value="<?php echo $_smarty_tpl->tpl_vars['schedule']->value->GetTimezone();?>
"/>

						<?php if (!$_smarty_tpl->tpl_vars['Layouts']->value[$_smarty_tpl->tpl_vars['id']->value]->UsesDailyLayouts()) {?>
							<input type="hidden" class="usesDailyLayouts" value="false"/>
							<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'ReservableTimeSlots'),$_smarty_tpl);?>

							<div class="reservableSlots" id="reservableSlots" ref="reservableEdit">
								<?php smarty_template_function_display_periods($_smarty_tpl,array('showReservable'=>true,'day'=>null));?>

							</div>
							<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'BlockedTimeSlots'),$_smarty_tpl);?>

							<div class="blockedSlots" id="blockedSlots" ref="blockedEdit">
								<?php smarty_template_function_display_periods($_smarty_tpl,array('showReservable'=>false,'day'=>null));?>

							</div>
						<?php } else { ?>
							<input type="hidden" class="usesDailyLayouts" value="true"/>
							<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'LayoutVariesByDay'),$_smarty_tpl);?>
 -
							<a href="#" class="showAllDailyLayouts"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'ShowHide'),$_smarty_tpl);?>
</a>
							<div class="allDailyLayouts">
								<?php  $_smarty_tpl->tpl_vars['day'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['day']->_loop = false;
 $_from = DayOfWeek::Days(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['day']->key => $_smarty_tpl->tpl_vars['day']->value) {
$_smarty_tpl->tpl_vars['day']->_loop = true;
?>
									<?php echo $_smarty_tpl->tpl_vars['DayNames']->value[$_smarty_tpl->tpl_vars['day']->value];?>

									<div class="reservableSlots" id="reservableSlots_<?php echo $_smarty_tpl->tpl_vars['day']->value;?>
" ref="reservableEdit_<?php echo $_smarty_tpl->tpl_vars['day']->value;?>
">
										<?php smarty_template_function_display_periods($_smarty_tpl,array('showReservable'=>true,'day'=>$_smarty_tpl->tpl_vars['day']->value));?>

									</div>
									<div class="blockedSlots" id="blockedSlots_<?php echo $_smarty_tpl->tpl_vars['day']->value;?>
" ref="blockedEdit_<?php echo $_smarty_tpl->tpl_vars['day']->value;?>
">
										<?php smarty_template_function_display_periods($_smarty_tpl,array('showReservable'=>false,'day'=>$_smarty_tpl->tpl_vars['day']->value));?>

									</div>
								<?php } ?>
							</div>
						<?php }?>
					</div>
					<div class="actions col-xs-12">
						<?php if ($_smarty_tpl->tpl_vars['schedule']->value->GetIsDefault()) {?>
							<span class="note"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'ThisIsTheDefaultSchedule'),$_smarty_tpl);?>
</span>
							|
							<span class="note"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'DefaultScheduleCannotBeDeleted'),$_smarty_tpl);?>
</span>
							|
						<?php } else { ?>
							<a class="update makeDefaultButton" href="#"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'MakeDefault'),$_smarty_tpl);?>
</a>
							|
							<a class="update deleteScheduleButton" href="#"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Delete'),$_smarty_tpl);?>
</a>
							|
						<?php }?>
						<a class="update changeLayoutButton" href="#"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'ChangeLayout'),$_smarty_tpl);?>
</a> |
						<?php if ($_smarty_tpl->tpl_vars['schedule']->value->GetIsCalendarSubscriptionAllowed()) {?>
							<a class="update disableSubscription"
							   href="#"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'TurnOffSubscription'),$_smarty_tpl);?>
</a>
						<?php } else { ?>
							<a class="update enableSubscription" href="#"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'TurnOnSubscription'),$_smarty_tpl);?>
</a>
						<?php }?>

						<?php if ($_smarty_tpl->tpl_vars['schedule']->value->GetIsCalendarSubscriptionAllowed()) {?>
							<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['html_image'][0][0]->PrintImage(array('src'=>"feed.png"),$_smarty_tpl);?>

							<a target="_blank" href="<?php echo $_smarty_tpl->tpl_vars['schedule']->value->GetSubscriptionUrl()->GetAtomUrl();?>
">Atom</a>
							|
							<a target="_blank" href="<?php echo $_smarty_tpl->tpl_vars['schedule']->value->GetSubscriptionUrl()->GetWebcalUrl();?>
">iCalendar</a>
						<?php }?>
						<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['indicator'][0][0]->DisplayIndicator(array('id'=>"action-indicator"),$_smarty_tpl);?>

						<div class="clear"></div>
					</div>
				</div>
			<?php } ?>
		</div>
	</div>

	<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['pagination'][0][0]->CreatePagination(array('pageInfo'=>$_smarty_tpl->tpl_vars['PageInfo']->value),$_smarty_tpl);?>


	<div id="addDialog" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="addScheduleDialogLabel" aria-hidden="true">
		<form id="addScheduleForm" method="post">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						<h4 class="modal-title" id="addScheduleDialogLabel"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'AddSchedule'),$_smarty_tpl);?>
</h4>
					</div>
					<div class="modal-body">
						<div class="form-group has-feedback">
							<label for="addName"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Name'),$_smarty_tpl);?>
</label>
							<input type="text" id="addName" class="form-control required" <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0][0]->GetFormName(array('key'=>'SCHEDULE_NAME'),$_smarty_tpl);?>
 />
							<i class="glyphicon glyphicon-asterisk form-control-feedback" data-bv-icon-for="addName"></i>
						</div>
						<div class="form-group">
							<label for="addStartsOn"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'StartsOn'),$_smarty_tpl);?>
</label>
							<select <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0][0]->GetFormName(array('key'=>'SCHEDULE_WEEKDAY_START'),$_smarty_tpl);?>
 class="form-control" id="addStartsOn">
								<option value="<?php echo Schedule::Today;?>
"><?php echo $_smarty_tpl->tpl_vars['Today']->value;?>
</option>
								<?php  $_smarty_tpl->tpl_vars["dayName"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["dayName"]->_loop = false;
 $_smarty_tpl->tpl_vars["dayIndex"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['DayNames']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["dayName"]->key => $_smarty_tpl->tpl_vars["dayName"]->value) {
$_smarty_tpl->tpl_vars["dayName"]->_loop = true;
 $_smarty_tpl->tpl_vars["dayIndex"]->value = $_smarty_tpl->tpl_vars["dayName"]->key;
?>
									<option value="<?php echo $_smarty_tpl->tpl_vars['dayIndex']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['dayName']->value;?>
</option>
								<?php } ?>
							</select>
						</div>
						<div class="form-group">
							<label for="addNumDaysVisible"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'NumberOfDaysVisible'),$_smarty_tpl);?>
</label>
							<input type="number" min="1" max="100" class="form-control required" id="addNumDaysVisible"
								   value="7" <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0][0]->GetFormName(array('key'=>'SCHEDULE_DAYS_VISIBLE'),$_smarty_tpl);?>
 />
						</div>
						<div class="form-group">
							<label for="addSameLayoutAs"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'UseSameLayoutAs'),$_smarty_tpl);?>
</label>
							<select class="form-control" <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0][0]->GetFormName(array('key'=>'SCHEDULE_ID'),$_smarty_tpl);?>
 id="addSameLayoutAs">
								<?php  $_smarty_tpl->tpl_vars['schedule'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['schedule']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['SourceSchedules']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['schedule']->key => $_smarty_tpl->tpl_vars['schedule']->value) {
$_smarty_tpl->tpl_vars['schedule']->_loop = true;
?>
									<option value="<?php echo $_smarty_tpl->tpl_vars['schedule']->value->GetId();?>
"><?php echo $_smarty_tpl->tpl_vars['schedule']->value->GetName();?>
</option>
								<?php } ?>
							</select>
						</div>
					</div>
					<div class="modal-footer">
						<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['cancel_button'][0][0]->CancelButton(array(),$_smarty_tpl);?>

						<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['add_button'][0][0]->AddButton(array(),$_smarty_tpl);?>

						<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['indicator'][0][0]->DisplayIndicator(array(),$_smarty_tpl);?>

					</div>
				</div>
			</div>
		</form>
	</div>

	<input type="hidden" id="activeId" value=""/>

	<div id="deleteDialog" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="deleteScheduleDialogLabel" aria-hidden="true">
		<form id="deleteForm" method="post">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						<h4 class="modal-title" id="deleteScheduleDialogLabel"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Delete'),$_smarty_tpl);?>
</h4>
					</div>
					<div class="modal-body">
						<div class="form-group">
							<label for="targetScheduleId"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'MoveResourcesAndReservations'),$_smarty_tpl);?>
</label>
							<select id="targetScheduleId" <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0][0]->GetFormName(array('key'=>'SCHEDULE_ID'),$_smarty_tpl);?>
 class="form-control required">
								<option value="">-- <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Schedule'),$_smarty_tpl);?>
 --</option>
								<?php  $_smarty_tpl->tpl_vars['schedule'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['schedule']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['Schedules']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['schedule']->key => $_smarty_tpl->tpl_vars['schedule']->value) {
$_smarty_tpl->tpl_vars['schedule']->_loop = true;
?>
									<option value="<?php echo $_smarty_tpl->tpl_vars['schedule']->value->GetId();?>
"><?php echo $_smarty_tpl->tpl_vars['schedule']->value->GetName();?>
</option>
								<?php } ?>
							</select>
						</div>
					</div>
					<div class="modal-footer">
						<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['cancel_button'][0][0]->CancelButton(array(),$_smarty_tpl);?>

						<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['delete_button'][0][0]->DeleteButton(array(),$_smarty_tpl);?>

						<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['indicator'][0][0]->DisplayIndicator(array(),$_smarty_tpl);?>

					</div>
				</div>
			</div>
		</form>
	</div>

	<div id="changeLayoutDialog" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="changeLayoutDialogLabel" aria-hidden="true">
		<form id="changeLayoutForm" method="post" role="form" class="form-inline">
			<div class="modal-dialog modal-lg">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						<h4 class="modal-title" id="changeLayoutDialogLabel"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'ChangeLayout'),$_smarty_tpl);?>
</h4>
					</div>
					<div class="modal-body">
						<div class="validationSummary alert alert-danger no-show">
							<ul><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['async_validator'][0][0]->AsyncValidator(array('id'=>"layoutValidator",'key'=>"ValidLayoutRequired"),$_smarty_tpl);?>
</ul>
						</div>

						<div class="col-xs-12">
							<div class="checkbox">
								<input type="checkbox" id="usesSingleLayout" <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0][0]->GetFormName(array('key'=>'USING_SINGLE_LAYOUT'),$_smarty_tpl);?>
>
								<label for="usesSingleLayout"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'UseSameLayoutForAllDays'),$_smarty_tpl);?>
</label>
							</div>
						</div>

						<?php if (!function_exists('smarty_template_function_display_slot_inputs')) {
    function smarty_template_function_display_slot_inputs($_smarty_tpl,$params) {
    $saved_tpl_vars = $_smarty_tpl->tpl_vars;
    foreach ($_smarty_tpl->smarty->template_functions['display_slot_inputs']['parameter'] as $key => $value) {$_smarty_tpl->tpl_vars[$key] = new Smarty_variable($value);};
    foreach ($params as $key => $value) {$_smarty_tpl->tpl_vars[$key] = new Smarty_variable($value);}?>
							<div id="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" class="col-xs-12">
								<?php $_smarty_tpl->tpl_vars['suffix'] = new Smarty_variable('', null, 0);?>
								<?php if ($_smarty_tpl->tpl_vars['day']->value!=null) {?>
									<?php $_smarty_tpl->tpl_vars['suffix'] = new Smarty_variable("_".((string)$_smarty_tpl->tpl_vars['day']->value), null, 0);?>
								<?php }?>
								<div class="col-xs-6">
									<label for="reservableEdit<?php echo $_smarty_tpl->tpl_vars['suffix']->value;?>
"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'ReservableTimeSlots'),$_smarty_tpl);?>
</label>
									<textarea class="reservableEdit form-control" id="reservableEdit<?php echo $_smarty_tpl->tpl_vars['suffix']->value;?>
"
											  name="<?php echo FormKeys::SLOTS_RESERVABLE;?>
<?php echo $_smarty_tpl->tpl_vars['suffix']->value;?>
"></textarea>
								</div>
								<div class="col-xs-6">
									<label for="blockedEdit<?php echo $_smarty_tpl->tpl_vars['suffix']->value;?>
"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'BlockedTimeSlots'),$_smarty_tpl);?>
</label> <a href="#" class="autofillBlocked" title="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Autofill'),$_smarty_tpl);?>
"><i class="fa fa-magic"></i></a>
									<textarea class="blockedEdit form-control" id="blockedEdit<?php echo $_smarty_tpl->tpl_vars['suffix']->value;?>
" name="<?php echo FormKeys::SLOTS_BLOCKED;?>
<?php echo $_smarty_tpl->tpl_vars['suffix']->value;?>
"></textarea>
								</div>
							</div>
						<?php $_smarty_tpl->tpl_vars = $saved_tpl_vars;
foreach (Smarty::$global_tpl_vars as $key => $value) if(!isset($_smarty_tpl->tpl_vars[$key])) $_smarty_tpl->tpl_vars[$key] = $value;}}?>


						<div class="col-xs-12" id="dailySlots">
							<div role="tabpanel" id="tabs">
								<ul class="nav nav-tabs" role="tablist">
									<li role="presentation" class="active"><a href="#tabs-0" aria-controls="tabs-0" role="tab"
																			  data-toggle="tab"><?php echo $_smarty_tpl->tpl_vars['DayNames']->value[0];?>
</a></li>
									<li role="presentation"><a href="#tabs-1" aria-controls="tabs-1" role="tab" data-toggle="tab"><?php echo $_smarty_tpl->tpl_vars['DayNames']->value[1];?>
</a></li>
									<li role="presentation"><a href="#tabs-2" aria-controls="tabs-2" role="tab" data-toggle="tab"><?php echo $_smarty_tpl->tpl_vars['DayNames']->value[2];?>
</a></li>
									<li role="presentation"><a href="#tabs-3" aria-controls="tabs-3" role="tab" data-toggle="tab"><?php echo $_smarty_tpl->tpl_vars['DayNames']->value[3];?>
</a></li>
									<li role="presentation"><a href="#tabs-4" aria-controls="tabs-4" role="tab" data-toggle="tab"><?php echo $_smarty_tpl->tpl_vars['DayNames']->value[4];?>
</a></li>
									<li role="presentation"><a href="#tabs-5" aria-controls="tabs-5" role="tab" data-toggle="tab"><?php echo $_smarty_tpl->tpl_vars['DayNames']->value[5];?>
</a></li>
									<li role="presentation"><a href="#tabs-6" aria-controls="tabs-6" role="tab" data-toggle="tab"><?php echo $_smarty_tpl->tpl_vars['DayNames']->value[6];?>
</a></li>
								</ul>
								<div class="tab-content">
									<div role="tabpanel" class="tab-pane active" id="tabs-0">
										<?php smarty_template_function_display_slot_inputs($_smarty_tpl,array('day'=>'0'));?>

									</div>
									<div role="tabpanel" class="tab-pane" id="tabs-1">
										<?php smarty_template_function_display_slot_inputs($_smarty_tpl,array('day'=>'1'));?>

									</div>
									<div role="tabpanel" class="tab-pane" id="tabs-2">
										<?php smarty_template_function_display_slot_inputs($_smarty_tpl,array('day'=>'2'));?>

									</div>
									<div role="tabpanel" class="tab-pane" id="tabs-3">
										<?php smarty_template_function_display_slot_inputs($_smarty_tpl,array('day'=>'3'));?>

									</div>
									<div role="tabpanel" class="tab-pane" id="tabs-4">
										<?php smarty_template_function_display_slot_inputs($_smarty_tpl,array('day'=>'4'));?>

									</div>
									<div role="tabpanel" class="tab-pane" id="tabs-5">
										<?php smarty_template_function_display_slot_inputs($_smarty_tpl,array('day'=>'5'));?>

									</div>
									<div role="tabpanel" class="tab-pane" id="tabs-6">
										<?php smarty_template_function_display_slot_inputs($_smarty_tpl,array('day'=>'6'));?>

									</div>
								</div>
							</div>
						</div>

						<?php smarty_template_function_display_slot_inputs($_smarty_tpl,array('id'=>"staticSlots",'day'=>null));?>


						<div class="slotTimezone col-xs-12">
							<label for="layoutTimezone"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Timezone'),$_smarty_tpl);?>
</label>
							<select <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0][0]->GetFormName(array('key'=>'TIMEZONE'),$_smarty_tpl);?>
 id="layoutTimezone" class="form-control">
								<?php echo smarty_function_html_options(array('values'=>$_smarty_tpl->tpl_vars['TimezoneValues']->value,'output'=>$_smarty_tpl->tpl_vars['TimezoneOutput']->value),$_smarty_tpl);?>

							</select>
						</div>

						<div class="slotWizard col-xs-12">
							<h5>
								<?php $_smarty_tpl->_capture_stack[0][] = array("layoutConfig", "layoutConfig", null); ob_start(); ?>
									<input type='number' min='0' step='15' value='30' id='quickLayoutConfig' size=5' title='Minutes' class='form-control'/>
								<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
								<?php $_smarty_tpl->_capture_stack[0][] = array("layoutStart", "layoutStart", null); ob_start(); ?>
									<input type='text' value='08:00' id='quickLayoutStart' size='10' title='From time' class='form-control' maxlength='5' />
								<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
								<?php $_smarty_tpl->_capture_stack[0][] = array("layoutEnd", "layoutEnd", null); ob_start(); ?>
									<input type='text' value='18:00' id='quickLayoutEnd' size='10' title='End time' class='form-control' maxlength='5'/>
								<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
								<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'QuickSlotCreation','args'=>((string)$_smarty_tpl->tpl_vars['layoutConfig']->value).",".((string)$_smarty_tpl->tpl_vars['layoutStart']->value).",".((string)$_smarty_tpl->tpl_vars['layoutEnd']->value)),$_smarty_tpl);?>

								<a href="#" id="createQuickLayout"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Create'),$_smarty_tpl);?>
</a>
							</h5>
						</div>
						<div class="slotHelpText col-xs-12">
							<p><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Format'),$_smarty_tpl);?>
: <span>HH:MM - HH:MM <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'OptionalLabel'),$_smarty_tpl);?>
</span></p>

							<p><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'LayoutInstructions'),$_smarty_tpl);?>
</p>
						</div>

						<div class="clearfix"></div>
					</div>
					<div class="modal-footer">
						<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['cancel_button'][0][0]->CancelButton(array(),$_smarty_tpl);?>

						<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['update_button'][0][0]->UpdateButton(array(),$_smarty_tpl);?>

						<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['indicator'][0][0]->DisplayIndicator(array(),$_smarty_tpl);?>

					</div>
				</div>
			</div>
		</form>
	</div>

	<div id="peakTimesDialog" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="peakTimesDialogLabel" aria-hidden="true">
		<form id="peakTimesForm" method="post">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						<h4 class="modal-title" id="peakTimesDialogLabel"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'PeakTimes'),$_smarty_tpl);?>
</h4>
					</div>
					<div class="modal-body">
						<div class="form-group">
							<div class="checkbox">
								<input type="checkbox" id="peakAllDay" <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0][0]->GetFormName(array('key'=>'PEAK_ALL_DAY'),$_smarty_tpl);?>
 />
								<label for="peakAllDay"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'AllDay'),$_smarty_tpl);?>
</label>
							</div>
							<div id="peakTimes">
								<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Between'),$_smarty_tpl);?>

								<input type="text" id="peakStartTime" class="form-control input-sm inline-block timeinput timepicker"
									   value="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formatdate'][0][0]->FormatDate(array('date'=>$_smarty_tpl->tpl_vars['DefaultDate']->value,'format'=>'h:i A'),$_smarty_tpl);?>
" <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0][0]->GetFormName(array('key'=>'PEAK_BEGIN_TIME'),$_smarty_tpl);?>
/>
								-
								<input type="text" id="peakEndTime" class="form-control input-sm inline-block timeinput timepicker"
									   value="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formatdate'][0][0]->FormatDate(array('date'=>$_smarty_tpl->tpl_vars['DefaultDate']->value->AddHours(9),'format'=>'h:i A'),$_smarty_tpl);?>
" <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0][0]->GetFormName(array('key'=>'PEAK_END_TIME'),$_smarty_tpl);?>
/>
							</div>
						</div>
						<div class="form-group">
							<div class="checkbox">
								<input type="checkbox" id="peakEveryDay" checked="checked" <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0][0]->GetFormName(array('key'=>'PEAK_EVERY_DAY'),$_smarty_tpl);?>
 />
								<label for="peakEveryDay"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Everyday'),$_smarty_tpl);?>
</label>
							</div>
							<div id="peakDayList" class="no-show">
								<div class="btn-group" data-toggle="buttons">
									<label class="btn btn-default btn-sm">
										<input type="checkbox" id="peakDay0" <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0][0]->GetFormName(array('key'=>'repeat_sunday'),$_smarty_tpl);?>
 />
										<?php echo $_smarty_tpl->tpl_vars['DayNames']->value[0];?>

									</label>
									<label class="btn btn-default btn-sm">
										<input type="checkbox" id="peakDay1" <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0][0]->GetFormName(array('key'=>'repeat_monday'),$_smarty_tpl);?>
 />
										<?php echo $_smarty_tpl->tpl_vars['DayNames']->value[1];?>

									</label>
									<label class="btn btn-default btn-sm">
										<input type="checkbox" id="peakDay2" <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0][0]->GetFormName(array('key'=>'repeat_tuesday'),$_smarty_tpl);?>
 />
										<?php echo $_smarty_tpl->tpl_vars['DayNames']->value[2];?>

									</label>
									<label class="btn btn-default btn-sm">
										<input type="checkbox" id="peakDay3" <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0][0]->GetFormName(array('key'=>'repeat_wednesday'),$_smarty_tpl);?>
 />
										<?php echo $_smarty_tpl->tpl_vars['DayNames']->value[3];?>

									</label>
									<label class="btn btn-default btn-sm">
										<input type="checkbox" id="peakDay4" <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0][0]->GetFormName(array('key'=>'repeat_thursday'),$_smarty_tpl);?>
 />
										<?php echo $_smarty_tpl->tpl_vars['DayNames']->value[4];?>

									</label>
									<label class="btn btn-default btn-sm">
										<input type="checkbox" id="peakDay5" <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0][0]->GetFormName(array('key'=>'repeat_friday'),$_smarty_tpl);?>
 />
										<?php echo $_smarty_tpl->tpl_vars['DayNames']->value[5];?>

									</label>
									<label class="btn btn-default btn-sm">
										<input type="checkbox" id="peakDay6" <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0][0]->GetFormName(array('key'=>'repeat_saturday'),$_smarty_tpl);?>
 />
										<?php echo $_smarty_tpl->tpl_vars['DayNames']->value[6];?>

									</label>
								</div>
							</div>
						</div>
						<div class="form-group">
							<div class="checkbox">
								<input type="checkbox" id="peakAllYear" checked="checked" <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0][0]->GetFormName(array('key'=>'PEAK_ALL_YEAR'),$_smarty_tpl);?>
 />
								<label for="peakAllYear"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'AllYear'),$_smarty_tpl);?>
</label>
							</div>
							<div id="peakDateRange" class="no-show">
								<label for="peakBeginMonth" class="col-xs-2"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'BeginDate'),$_smarty_tpl);?>
</label>
								<div class="col-xs-5">
									<select id="peakBeginMonth" class="form-control input-sm" <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0][0]->GetFormName(array('key'=>'PEAK_BEGIN_MONTH'),$_smarty_tpl);?>
>
										<?php  $_smarty_tpl->tpl_vars['month'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['month']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['Months']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['startMonths']['iteration']=0;
foreach ($_from as $_smarty_tpl->tpl_vars['month']->key => $_smarty_tpl->tpl_vars['month']->value) {
$_smarty_tpl->tpl_vars['month']->_loop = true;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['startMonths']['iteration']++;
?>
											<option value="<?php echo $_smarty_tpl->getVariable('smarty')->value['foreach']['startMonths']['iteration'];?>
"><?php echo $_smarty_tpl->tpl_vars['month']->value;?>
</option>
										<?php } ?>
									</select>
								</div>
								<div class="col-xs-2">
									<select id="peakBeginDay" class="form-control input-sm" <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0][0]->GetFormName(array('key'=>'PEAK_BEGIN_DAY'),$_smarty_tpl);?>
>
										<?php  $_smarty_tpl->tpl_vars['day'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['day']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['DayList']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['day']->key => $_smarty_tpl->tpl_vars['day']->value) {
$_smarty_tpl->tpl_vars['day']->_loop = true;
?>
											<option value="<?php echo $_smarty_tpl->tpl_vars['day']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['day']->value;?>
</option>
										<?php } ?>
									</select>
								</div>
								<div class="col-xs-3">&nbsp;</div>
								<div class="clearfix"></div>
								<label for="peakEndMonth" class="col-xs-2"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'EndDate'),$_smarty_tpl);?>
</label>
								<div class="col-xs-5">
									<select id="peakEndMonth" class="form-control input-sm" <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0][0]->GetFormName(array('key'=>'PEAK_END_MONTH'),$_smarty_tpl);?>
>
										<?php  $_smarty_tpl->tpl_vars['month'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['month']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['Months']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['endMonths']['iteration']=0;
foreach ($_from as $_smarty_tpl->tpl_vars['month']->key => $_smarty_tpl->tpl_vars['month']->value) {
$_smarty_tpl->tpl_vars['month']->_loop = true;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['endMonths']['iteration']++;
?>
											<option value="<?php echo $_smarty_tpl->getVariable('smarty')->value['foreach']['endMonths']['iteration'];?>
"><?php echo $_smarty_tpl->tpl_vars['month']->value;?>
</option>
										<?php } ?>
									</select>
								</div>
								<div class="col-xs-2">
									<select id="peakEndDay" class="form-control input-sm" <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0][0]->GetFormName(array('key'=>'PEAK_END_DAY'),$_smarty_tpl);?>
>
										<?php  $_smarty_tpl->tpl_vars['day'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['day']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['DayList']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['day']->key => $_smarty_tpl->tpl_vars['day']->value) {
$_smarty_tpl->tpl_vars['day']->_loop = true;
?>
											<option value="<?php echo $_smarty_tpl->tpl_vars['day']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['day']->value;?>
</option>
										<?php } ?>
									</select>
								</div>
								<div class="col-xs-3">&nbsp;</div>
							</div>
						</div>
						<div class="clearfix"></div>
						<input type="hidden" <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0][0]->GetFormName(array('key'=>'PEAK_DELETE'),$_smarty_tpl);?>
 id="deletePeakTimes" value="" />
					</div>
					<div class="modal-footer">
						<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['delete_button'][0][0]->DeleteButton(array('class'=>'pull-left','id'=>"deletePeakBtn"),$_smarty_tpl);?>

						<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['cancel_button'][0][0]->CancelButton(array(),$_smarty_tpl);?>

						<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['update_button'][0][0]->UpdateButton(array(),$_smarty_tpl);?>

						<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['indicator'][0][0]->DisplayIndicator(array(),$_smarty_tpl);?>

					</div>
				</div>
			</div>
		</form>
	</div>

	<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['csrf_token'][0][0]->CSRFToken(array(),$_smarty_tpl);?>


	<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['jsfile'][0][0]->IncludeJavascriptFile(array('src'=>"ajax-helpers.js"),$_smarty_tpl);?>

	<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['jsfile'][0][0]->IncludeJavascriptFile(array('src'=>"admin/schedule.js"),$_smarty_tpl);?>

	<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['jsfile'][0][0]->IncludeJavascriptFile(array('src'=>"js/jquery.form-3.09.min.js"),$_smarty_tpl);?>


	<script type="text/javascript">

		function setUpEditables() {
			$.fn.editable.defaults.mode = 'popup';
			$.fn.editable.defaults.toggle = 'manual';
			$.fn.editable.defaults.emptyclass = '';
			$.fn.editable.defaults.params = function (params) {
				params.CSRF_TOKEN = $('#csrf_token').val();
				return params;
			};

			var updateUrl = '<?php echo $_SERVER['SCRIPT_NAME'];?>
?action=';

			$('.scheduleName').editable({
				url: updateUrl + '<?php echo ManageSchedules::ActionRename;?>
', validate: function (value) {
					if ($.trim(value) == '')
					{
						return '<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>strtr('RequiredValue', array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ))),$_smarty_tpl);?>
';
					}
				}
			});

			$('.daysVisible').editable({
				url: updateUrl + '<?php echo ManageSchedules::ActionChangeDaysVisible;?>
'
			});

			$('.dayName').editable({
				url: updateUrl + '<?php echo ManageSchedules::ActionChangeStartDay;?>
', source: [{
					value: '<?php echo Schedule::Today;?>
', text: '<?php echo strtr($_smarty_tpl->tpl_vars['Today']->value, array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
'
				},
					<?php  $_smarty_tpl->tpl_vars["dayName"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["dayName"]->_loop = false;
 $_smarty_tpl->tpl_vars["dayIndex"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['DayNames']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["dayName"]->key => $_smarty_tpl->tpl_vars["dayName"]->value) {
$_smarty_tpl->tpl_vars["dayName"]->_loop = true;
 $_smarty_tpl->tpl_vars["dayIndex"]->value = $_smarty_tpl->tpl_vars["dayName"]->key;
?>
					{
						value:<?php echo $_smarty_tpl->tpl_vars['dayIndex']->value;?>
, text: '<?php echo strtr($_smarty_tpl->tpl_vars['dayName']->value, array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
'
					},
					<?php } ?>
				]
			});

			$('.scheduleAdmin').editable({
				url: updateUrl + '<?php echo ManageSchedules::ChangeAdminGroup;?>
', emptytext: '<?php ob_start();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'None'),$_smarty_tpl);?>
<?php $_tmp1=ob_get_clean();?><?php echo strtr($_tmp1, array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
', source: [{
					value: '0', text: ''
				},
					<?php  $_smarty_tpl->tpl_vars['group'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['group']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['AdminGroups']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['group']->key => $_smarty_tpl->tpl_vars['group']->value) {
$_smarty_tpl->tpl_vars['group']->_loop = true;
?>
					{
						value:<?php echo $_smarty_tpl->tpl_vars['group']->value->Id();?>
, text: '<?php echo strtr($_smarty_tpl->tpl_vars['group']->value->Name(), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
'
					},
					<?php } ?>
				]
			});
		}

		$(document).ready(function () {
			setUpEditables();

			var opts = {
				submitUrl: '<?php echo $_SERVER['SCRIPT_NAME'];?>
',
				saveRedirect: '<?php echo $_SERVER['SCRIPT_NAME'];?>
',
				changeLayoutAction: '<?php echo ManageSchedules::ActionChangeLayout;?>
',
				addAction: '<?php echo ManageSchedules::ActionAdd;?>
',
				peakTimesAction: '<?php echo ManageSchedules::ActionChangePeakTimes;?>
',
				makeDefaultAction: '<?php echo ManageSchedules::ActionMakeDefault;?>
',
				deleteAction: '<?php echo ManageSchedules::ActionDelete;?>
',
				enableSubscriptionAction: '<?php echo ManageSchedules::ActionEnableSubscription;?>
',
				disableSubscriptionAction: '<?php echo ManageSchedules::ActionDisableSubscription;?>
'
			};

			var scheduleManagement = new ScheduleManagement(opts);
			scheduleManagement.init();

			$('.timepicker').timepicker({
				timeFormat: '<?php echo $_smarty_tpl->tpl_vars['TimeFormat']->value;?>
'
			});
		});

	</script>

</div>
<?php echo $_smarty_tpl->getSubTemplate ('globalfooter.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }} ?>
