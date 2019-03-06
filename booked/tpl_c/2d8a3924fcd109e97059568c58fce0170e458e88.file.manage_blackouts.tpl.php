<?php /* Smarty version Smarty-3.1.16, created on 2017-02-27 22:48:01
         compiled from "/home/vol15_8/byethost8.com/b8_19720712/htdocs/booked/tpl/Admin/Blackouts/manage_blackouts.tpl" */ ?>
<?php /*%%SmartyHeaderCode:87441110258b4f2f1b452b2-71654589%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2d8a3924fcd109e97059568c58fce0170e458e88' => 
    array (
      0 => '/home/vol15_8/byethost8.com/b8_19720712/htdocs/booked/tpl/Admin/Blackouts/manage_blackouts.tpl',
      1 => 1487739358,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '87441110258b4f2f1b452b2-71654589',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'AddStartDate' => 0,
    'AddEndDate' => 0,
    'Resources' => 0,
    'ResourceId' => 0,
    'Schedules' => 0,
    'ScheduleId' => 0,
    'RepeatTerminationDate' => 0,
    'StartDate' => 0,
    'EndDate' => 0,
    'blackouts' => 0,
    'rowCss' => 0,
    'blackout' => 0,
    'Timezone' => 0,
    'PageInfo' => 0,
    'Path' => 0,
    'TimeFormat' => 0,
    'RepeatType' => 0,
    'RepeatInterval' => 0,
    'RepeatMonthlyType' => 0,
    'RepeatWeekdays' => 0,
    'day' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_58b4f2f1d60039_38443304',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58b4f2f1d60039_38443304')) {function content_58b4f2f1d60039_38443304($_smarty_tpl) {?><?php if (!is_callable('smarty_function_cycle')) include '/home/vol15_8/byethost8.com/b8_19720712/htdocs/booked/lib/Common/../../lib/external/Smarty/plugins/function.cycle.php';
?>

<?php echo $_smarty_tpl->getSubTemplate ('globalheader2.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('Timepicker'=>true), 0);?>

<div id="page-manage-blackouts" class="admin-page" style="margin-top: 8rem">
	<h1><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'ManageBlackouts'),$_smarty_tpl);?>
</h1>

	<form id="addBlackoutForm" class="form-inline" role="form" method="post">
		<div class="panel panel-default" id="add-blackout-panel">
			<div class="panel-heading"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>"AddBlackout"),$_smarty_tpl);?>
 <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['showhide_icon'][0][0]->ShowHideIcon(array(),$_smarty_tpl);?>
</div>
			<div class="panel-body add-contents">

				<div class="form-group col-xs-6" style="color: black">
					<label for="addStartDate"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'BeginDate'),$_smarty_tpl);?>
</label>
					<input type="text" id="addStartDate" class="form-control dateinput inline-block "
						   value="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formatdate'][0][0]->FormatDate(array('date'=>$_smarty_tpl->tpl_vars['AddStartDate']->value),$_smarty_tpl);?>
"/>
					<input <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0][0]->GetFormName(array('key'=>'BEGIN_DATE'),$_smarty_tpl);?>
 id="formattedAddStartDate" type="hidden"
													 value="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formatdate'][0][0]->FormatDate(array('date'=>$_smarty_tpl->tpl_vars['AddStartDate']->value,'key'=>'system'),$_smarty_tpl);?>
"/>
					<input <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0][0]->GetFormName(array('key'=>'BEGIN_TIME'),$_smarty_tpl);?>
 type="text" id="addStartTime"
													 class="form-control dateinput inline-block timepicker"
													 value="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['format_date'][0][0]->FormatDate(array('format'=>'h:00 A','date'=>'now'),$_smarty_tpl);?>
" title="Start time"/>
				</div>
				<div class="form-group col-xs-6" style="color: black">
					<label for="addEndDate"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'EndDate'),$_smarty_tpl);?>
</label>
					<input type="text" id="addEndDate" class="form-control dateinput inline-block " size="10"
						   value="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formatdate'][0][0]->FormatDate(array('date'=>$_smarty_tpl->tpl_vars['AddEndDate']->value),$_smarty_tpl);?>
"/>
					<input <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0][0]->GetFormName(array('key'=>'END_DATE'),$_smarty_tpl);?>
 type="hidden" id="formattedAddEndDate"
												   value="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formatdate'][0][0]->FormatDate(array('date'=>$_smarty_tpl->tpl_vars['AddEndDate']->value,'key'=>'system'),$_smarty_tpl);?>
"/>
					<input <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0][0]->GetFormName(array('key'=>'END_TIME'),$_smarty_tpl);?>
 type="text" id="addEndTime"
												   class="form-control dateinput inline-block timepicker"
												   value="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['format_date'][0][0]->FormatDate(array('format'=>'h:00 A','date'=>Date::Now()->AddHours(1)),$_smarty_tpl);?>
"
												   title="End time"/>
				</div>
				<div class="form-group col-xs-12" style="color: black">
					<label for="addResourceId"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Resource'),$_smarty_tpl);?>
</label>
					<select <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0][0]->GetFormName(array('key'=>'RESOURCE_ID'),$_smarty_tpl);?>
 class="form-control" id="addResourceId">
						<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['object_html_options'][0][0]->ObjectHtmlOptions(array('options'=>$_smarty_tpl->tpl_vars['Resources']->value,'key'=>'GetId','label'=>"GetName",'selected'=>$_smarty_tpl->tpl_vars['ResourceId']->value),$_smarty_tpl);?>

					</select>
					<?php if (count($_smarty_tpl->tpl_vars['Schedules']->value)>0) {?>
						|
						<div class="checkbox">
							<input <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0][0]->GetFormName(array('key'=>'BLACKOUT_APPLY_TO_SCHEDULE'),$_smarty_tpl);?>
 type="checkbox" id="allResources"/>
							<label for="allResources" style=""><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'AllResourcesOn'),$_smarty_tpl);?>
 </label>
						</div>
						<select <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0][0]->GetFormName(array('key'=>'SCHEDULE_ID'),$_smarty_tpl);?>
 id="addScheduleId" class="form-control" disabled="disabled"
														   title="Schedule">
							<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['object_html_options'][0][0]->ObjectHtmlOptions(array('options'=>$_smarty_tpl->tpl_vars['Schedules']->value,'key'=>'GetId','label'=>"GetName",'selected'=>$_smarty_tpl->tpl_vars['ScheduleId']->value),$_smarty_tpl);?>

						</select>
					<?php }?>
				</div>
				<div class="col-xs-12" style="color: black">
					<div class="form-group has-feedback">
						<label for="blackoutReason"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Reason'),$_smarty_tpl);?>
</label>
						<input <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0][0]->GetFormName(array('key'=>'SUMMARY'),$_smarty_tpl);?>
 type="text" id="blackoutReason" required
													  class="form-control required"/>
						<i class="glyphicon glyphicon-asterisk form-control-feedback" data-bv-icon-for="blackoutReason"></i>
					</div>
				</div>
				<div class="form-group col-xs-12" style="color: black">
					<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['control'][0][0]->DisplayControl(array('type'=>"RecurrenceControl",'RepeatTerminationDate'=>$_smarty_tpl->tpl_vars['RepeatTerminationDate']->value),$_smarty_tpl);?>

				</div>
				<div class="form-group col-xs-12" style="color: black">
					<div class="radio">
						<input <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0][0]->GetFormName(array('key'=>'CONFLICT_ACTION'),$_smarty_tpl);?>
 type="radio" id="bookAround"
															  name="existingReservations"
															  checked="checked"
															  value="<?php echo ReservationConflictResolution::BookAround;?>
"/>
						<label for="bookAround"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'BlackoutAroundConflicts'),$_smarty_tpl);?>
</label>
					</div>
					<div class="radio">
						<input <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0][0]->GetFormName(array('key'=>'CONFLICT_ACTION'),$_smarty_tpl);?>
 type="radio" id="notifyExisting"
															  name="existingReservations"
															  value="<?php echo ReservationConflictResolution::Notify;?>
"/>
						<label for="notifyExisting"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'BlackoutShowMe'),$_smarty_tpl);?>
</label>
					</div>
					<div class="radio">
						<input <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0][0]->GetFormName(array('key'=>'CONFLICT_ACTION'),$_smarty_tpl);?>
 type="radio" id="deleteExisting"
															  name="existingReservations"
															  value="<?php echo ReservationConflictResolution::Delete;?>
"/>
						<label for="deleteExisting"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'BlackoutDeleteConflicts'),$_smarty_tpl);?>
</label>
					</div>
				</div>
			</div>
			<div class="panel-footer">
				<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['add_button'][0][0]->AddButton(array('class'=>"btn-sm"),$_smarty_tpl);?>

				<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['reset_button'][0][0]->ResetButton(array('class'=>"btn-sm"),$_smarty_tpl);?>

			</div>
		</div>
	</form>

	<form class="form" role="form">
		<div class="panel panel-default">
			<div class="panel-heading"><span class="glyphicon glyphicon-filter"></span>
				<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>"Filter"),$_smarty_tpl);?>

			</div>
			<div class="panel-body">
				<div class="form-group col-xs-4">
					<input id="startDate" type="text" class="form-control dateinput inline-block"
						   value="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formatdate'][0][0]->FormatDate(array('date'=>$_smarty_tpl->tpl_vars['StartDate']->value),$_smarty_tpl);?>
"
						   title="Between start date" placeholder="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'BeginDate'),$_smarty_tpl);?>
"/>
					<input id="formattedStartDate" type="hidden" value="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formatdate'][0][0]->FormatDate(array('date'=>$_smarty_tpl->tpl_vars['StartDate']->value,'key'=>'system'),$_smarty_tpl);?>
"/>
					-
					<input id="endDate" type="text" class="form-control dateinput inline-block"
						   value="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formatdate'][0][0]->FormatDate(array('date'=>$_smarty_tpl->tpl_vars['EndDate']->value),$_smarty_tpl);?>
" placeholder="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'EndDate'),$_smarty_tpl);?>
"/>
					<input id="formattedEndDate" type="hidden" value="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formatdate'][0][0]->FormatDate(array('date'=>$_smarty_tpl->tpl_vars['EndDate']->value,'key'=>'system'),$_smarty_tpl);?>
"/>
				</div>
				<div class="form-group col-xs-4">
					<select id="scheduleId" class="form-control col-xs-12">
						<option value=""><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'AllSchedules'),$_smarty_tpl);?>
</option>
						<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['object_html_options'][0][0]->ObjectHtmlOptions(array('options'=>$_smarty_tpl->tpl_vars['Schedules']->value,'key'=>'GetId','label'=>"GetName",'selected'=>$_smarty_tpl->tpl_vars['ScheduleId']->value),$_smarty_tpl);?>

					</select>
				</div>
				<div class="form-group col-xs-4">
					<select id="resourceId" class="form-control col-xs-12">
						<option value=""><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'AllResources'),$_smarty_tpl);?>
</option>
						<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['object_html_options'][0][0]->ObjectHtmlOptions(array('options'=>$_smarty_tpl->tpl_vars['Resources']->value,'key'=>'GetId','label'=>"GetName",'selected'=>$_smarty_tpl->tpl_vars['ResourceId']->value),$_smarty_tpl);?>

					</select>
				</div>
			</div>
			<div class="panel-footer">
				<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['filter_button'][0][0]->FilterButton(array('class'=>"btn-sm",'id'=>"filter"),$_smarty_tpl);?>

				<button id="showAll" class="btn btn-link btn-sm"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'ViewAll'),$_smarty_tpl);?>
</button>
			</div>
		</div>
	</form>

	<table class="table" id="blackoutTable">
		<thead>
		<tr>
			<th><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['sort_column'][0][0]->SortColumn(array('key'=>'Resource','field'=>ColumnNames::RESOURCE_NAME),$_smarty_tpl);?>
</th>
			<th><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['sort_column'][0][0]->SortColumn(array('key'=>'BeginDate','field'=>ColumnNames::BLACKOUT_START),$_smarty_tpl);?>
</th>
			<th><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['sort_column'][0][0]->SortColumn(array('key'=>'EndDate','field'=>ColumnNames::BLACKOUT_END),$_smarty_tpl);?>
</th>
			<th><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['sort_column'][0][0]->SortColumn(array('key'=>'Reason','field'=>ColumnNames::BLACKOUT_TITLE),$_smarty_tpl);?>
</th>
			<th><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'CreatedBy'),$_smarty_tpl);?>
</th>
			<th><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Update'),$_smarty_tpl);?>
</th>
			<th><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Delete'),$_smarty_tpl);?>
</th>
		</tr>
		</thead>
		<tbody>
		<?php  $_smarty_tpl->tpl_vars['blackout'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['blackout']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['blackouts']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['blackout']->key => $_smarty_tpl->tpl_vars['blackout']->value) {
$_smarty_tpl->tpl_vars['blackout']->_loop = true;
?>
			<?php echo smarty_function_cycle(array('values'=>'row0,row1','assign'=>'rowCss'),$_smarty_tpl);?>

			<tr class="<?php echo $_smarty_tpl->tpl_vars['rowCss']->value;?>
 editable" data-blackout-id="<?php echo $_smarty_tpl->tpl_vars['blackout']->value->InstanceId;?>
">
				<td><?php echo $_smarty_tpl->tpl_vars['blackout']->value->ResourceName;?>
</td>
				<td class="date"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formatdate'][0][0]->FormatDate(array('date'=>$_smarty_tpl->tpl_vars['blackout']->value->StartDate,'timezone'=>$_smarty_tpl->tpl_vars['Timezone']->value,'key'=>'res_popup'),$_smarty_tpl);?>
</td>
				<td class="date"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formatdate'][0][0]->FormatDate(array('date'=>$_smarty_tpl->tpl_vars['blackout']->value->EndDate,'timezone'=>$_smarty_tpl->tpl_vars['Timezone']->value,'key'=>'res_popup'),$_smarty_tpl);?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['blackout']->value->Title;?>
</td>
				<td style="max-width:150px;"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['fullname'][0][0]->DisplayFullName(array('first'=>$_smarty_tpl->tpl_vars['blackout']->value->FirstName,'last'=>$_smarty_tpl->tpl_vars['blackout']->value->LastName),$_smarty_tpl);?>
</td>
				<td class="update edit"><a href="#"><span class="fa fa-edit"></span></a></td>
				<?php if ($_smarty_tpl->tpl_vars['blackout']->value->IsRecurring) {?>
					<td class="update">
						<a href="#" class="update delete-recurring"><span class="fa fa-trash icon remove"></span></a>
					</td>
				<?php } else { ?>
					<td class="update">
						<a href="#" class="update delete"><span class="fa fa-trash icon remove"></span></a>
					</td>
				<?php }?>
			</tr>
		<?php } ?>
		</tbody>
	</table>

	<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['pagination'][0][0]->CreatePagination(array('pageInfo'=>$_smarty_tpl->tpl_vars['PageInfo']->value),$_smarty_tpl);?>


	<div class="modal fade" id="deleteDialog" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel"
		 aria-hidden="true">
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
					<form id="deleteForm" method="post">
						<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['cancel_button'][0][0]->CancelButton(array(),$_smarty_tpl);?>

						<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['delete_button'][0][0]->DeleteButton(array('class'=>"btnUpdateAllInstances"),$_smarty_tpl);?>

					</form>

				</div>
			</div>
		</div>
	</div>

	<div class="modal fade" id="deleteRecurringDialog" tabindex="-1" role="dialog" aria-labelledby="deleteRecurringModalLabel"
		 aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					<h4 class="modal-title" id="deleteRecurringModalLabel"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Delete'),$_smarty_tpl);?>
</h4>
				</div>
				<div class="modal-body">
					<div class="alert alert-warning">
						<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'DeleteWarning'),$_smarty_tpl);?>

					</div>
				</div>
				<div class="modal-footer">
					<form id="deleteRecurringForm" method="post">
						<button type="button" class="btn btn-default cancel"
								data-dismiss="modal"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Cancel'),$_smarty_tpl);?>
</button>

						<button type="button" class="btn btn-danger save btnUpdateAllInstances">
							<span class="fa fa-remove"></span> <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'ThisInstance'),$_smarty_tpl);?>
</button>

						<button type="button" class="btn btn-danger save btnUpdateAllInstances">
							<span class="fa fa-remove"></span> <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'AllInstances'),$_smarty_tpl);?>
</button>

						<input type="hidden" <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0][0]->GetFormName(array('key'=>'SERIES_UPDATE_SCOPE'),$_smarty_tpl);?>
 class="hdnSeriesUpdateScope"
							   value="<?php echo SeriesUpdateScope::FullSeries;?>
"/>
					</form>
				</div>
			</div>
		</div>
	</div>

	<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['csrf_token'][0][0]->CSRFToken(array(),$_smarty_tpl);?>


	<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['jsfile'][0][0]->IncludeJavascriptFile(array('src'=>"reservationPopup.js"),$_smarty_tpl);?>

	<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['jsfile'][0][0]->IncludeJavascriptFile(array('src'=>"ajax-helpers.js"),$_smarty_tpl);?>

	<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['jsfile'][0][0]->IncludeJavascriptFile(array('src'=>"admin/blackouts.js"),$_smarty_tpl);?>

	<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['jsfile'][0][0]->IncludeJavascriptFile(array('src'=>"date-helper.js"),$_smarty_tpl);?>

	<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['jsfile'][0][0]->IncludeJavascriptFile(array('src'=>"recurrence.js"),$_smarty_tpl);?>


	<script type="text/javascript">

		$(document).ready(function () {
			var updateScope = {};
			updateScope.instance = '<?php echo SeriesUpdateScope::ThisInstance;?>
';
			updateScope.full = '<?php echo SeriesUpdateScope::FullSeries;?>
';
			updateScope.future = '<?php echo SeriesUpdateScope::FutureInstances;?>
';

			var actions = {};

			var blackoutOpts = {
				scopeOpts: updateScope,
				actions: actions,
				deleteUrl: '<?php echo $_SERVER['SCRIPT_NAME'];?>
?action=<?php echo ManageBlackoutsActions::DELETE;?>
&<?php echo QueryStringKeys::BLACKOUT_ID;?>
=',
				addUrl: '<?php echo $_SERVER['SCRIPT_NAME'];?>
?action=<?php echo ManageBlackoutsActions::ADD;?>
',
				editUrl: '<?php echo $_SERVER['SCRIPT_NAME'];?>
?action=<?php echo ManageBlackoutsActions::LOAD;?>
&<?php echo QueryStringKeys::BLACKOUT_ID;?>
=',
				updateUrl: '<?php echo $_SERVER['SCRIPT_NAME'];?>
?action=<?php echo ManageBlackoutsActions::UPDATE;?>
',
				reservationUrlTemplate: "<?php echo $_smarty_tpl->tpl_vars['Path']->value;?>
reservation.php?<?php echo QueryStringKeys::REFERENCE_NUMBER;?>
=[refnum]",
				popupUrl: "<?php echo $_smarty_tpl->tpl_vars['Path']->value;?>
ajax/respopup.php",
				timeFormat: '<?php echo $_smarty_tpl->tpl_vars['TimeFormat']->value;?>
'
			};

			var recurOpts = {
				repeatType: '<?php echo $_smarty_tpl->tpl_vars['RepeatType']->value;?>
',
				repeatInterval: '<?php echo $_smarty_tpl->tpl_vars['RepeatInterval']->value;?>
',
				repeatMonthlyType: '<?php echo $_smarty_tpl->tpl_vars['RepeatMonthlyType']->value;?>
',
				repeatWeekdays: [<?php  $_smarty_tpl->tpl_vars['day'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['day']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['RepeatWeekdays']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['day']->key => $_smarty_tpl->tpl_vars['day']->value) {
$_smarty_tpl->tpl_vars['day']->_loop = true;
?><?php echo $_smarty_tpl->tpl_vars['day']->value;?>
, <?php } ?>]
			};

			var recurElements = {
				beginDate: $('#formattedAddStartDate'),
				endDate: $('#formattedAddEndDate'),
				beginTime: $('#addStartTime'),
				endTime: $('#addEndTime')
			};

			var recurrence = new Recurrence(recurOpts, recurElements);
			recurrence.init();

			var blackoutManagement = new BlackoutManagement(blackoutOpts);
			blackoutManagement.init();

			$('#add-blackout-panel').showHidePanel();
		});

		$.blockUI.defaults.css.width = '60%';
		$.blockUI.defaults.css.left = '20%';
	</script>

	<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['control'][0][0]->DisplayControl(array('type'=>"DatePickerSetupControl",'ControlId'=>"startDate",'AltId'=>"formattedStartDate"),$_smarty_tpl);?>

	<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['control'][0][0]->DisplayControl(array('type'=>"DatePickerSetupControl",'ControlId'=>"endDate",'AltId'=>"formattedEndDate"),$_smarty_tpl);?>

	<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['control'][0][0]->DisplayControl(array('type'=>"DatePickerSetupControl",'ControlId'=>"addStartDate",'AltId'=>"formattedAddStartDate"),$_smarty_tpl);?>

	<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['control'][0][0]->DisplayControl(array('type'=>"DatePickerSetupControl",'ControlId'=>"addEndDate",'AltId'=>"formattedAddEndDate"),$_smarty_tpl);?>

	<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['control'][0][0]->DisplayControl(array('type'=>"DatePickerSetupControl",'ControlId'=>"EndRepeat",'AltId'=>"formattedEndRepeat"),$_smarty_tpl);?>


	<div id="wait-box" class="wait-box">
		<div id="creatingNotification">
			<h3>
				
					<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Working'),$_smarty_tpl);?>
...
				
			</h3>
			<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['html_image'][0][0]->PrintImage(array('src'=>"reservation_submitting.gif"),$_smarty_tpl);?>

		</div>
		<div id="result"></div>
	</div>

	<div id="update-box" class="no-show">
		<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['indicator'][0][0]->DisplayIndicator(array('id'=>"update-spinner"),$_smarty_tpl);?>

		<div id="update-contents"></div>
	</div>

</div>
<?php echo $_smarty_tpl->getSubTemplate ('globalfooter.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }} ?>
