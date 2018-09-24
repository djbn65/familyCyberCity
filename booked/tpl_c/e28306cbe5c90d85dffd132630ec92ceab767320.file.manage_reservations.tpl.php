<?php /* Smarty version Smarty-3.1.16, created on 2017-06-27 23:13:25
         compiled from "/home/vol15_8/byethost8.com/b8_19720712/htdocs/booked/tpl/Admin/Reservations/manage_reservations.tpl" */ ?>
<?php /*%%SmartyHeaderCode:156458435159531ed55ccd96-07949875%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e28306cbe5c90d85dffd132630ec92ceab767320' => 
    array (
      0 => '/home/vol15_8/byethost8.com/b8_19720712/htdocs/booked/tpl/Admin/Reservations/manage_reservations.tpl',
      1 => 1487739365,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '156458435159531ed55ccd96-07949875',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'groupClass' => 0,
    'StartDate' => 0,
    'EndDate' => 0,
    'UserNameFilter' => 0,
    'UserIdFilter' => 0,
    'Schedules' => 0,
    'ScheduleId' => 0,
    'Resources' => 0,
    'ResourceId' => 0,
    'ReservationStatusId' => 0,
    'ReferenceNumber' => 0,
    'AttributeFilters' => 0,
    'attribute' => 0,
    'IsDesktop' => 0,
    'reservations' => 0,
    'reservation' => 0,
    'rowCss' => 0,
    'Timezone' => 0,
    'ReservationAttributes' => 0,
    'CsvExportUrl' => 0,
    'PageInfo' => 0,
    'Path' => 0,
    'StatusReasons' => 0,
    'reason' => 0,
    'ResourceStatusFilterId' => 0,
    'ResourceStatusReasonFilterId' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_59531ed56fa342_78699942',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59531ed56fa342_78699942')) {function content_59531ed56fa342_78699942($_smarty_tpl) {?><?php if (!is_callable('smarty_function_cycle')) include '/home/vol15_8/byethost8.com/b8_19720712/htdocs/booked/lib/Common/../../lib/external/Smarty/plugins/function.cycle.php';
?>

<?php echo $_smarty_tpl->getSubTemplate ('globalheader2.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('Qtip'=>true,'InlineEdit'=>true), 0);?>


<div id="page-manage-reservations" class="admin-page" style="margin-top: 8rem">
	<h1><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'ManageReservations'),$_smarty_tpl);?>
</h1>

	<div class="panel panel-default filterTable" id="filter-reservations-panel">
		<div class="panel-heading"><span class="glyphicon glyphicon-filter"></span> <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>"Filter"),$_smarty_tpl);?>
 <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['showhide_icon'][0][0]->ShowHideIcon(array(),$_smarty_tpl);?>
</div>
		<div class="panel-body">
			<?php $_smarty_tpl->tpl_vars['groupClass'] = new Smarty_variable("col-xs-12 col-sm-4 col-md-3", null, 0);?>
			<form id="filterForm" class="form-inline" role="form">
				<div class="form-group filter-dates <?php echo $_smarty_tpl->tpl_vars['groupClass']->value;?>
">
					<input id="startDate" type="text" class="form-control dateinput inline"
						   value="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formatdate'][0][0]->FormatDate(array('date'=>$_smarty_tpl->tpl_vars['StartDate']->value),$_smarty_tpl);?>
"/>
					<input id="formattedStartDate" type="hidden" value="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formatdate'][0][0]->FormatDate(array('date'=>$_smarty_tpl->tpl_vars['StartDate']->value,'key'=>'system'),$_smarty_tpl);?>
"/>
					-
					<input id="endDate" type="text" class="form-control dateinput inline"
						   value="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formatdate'][0][0]->FormatDate(array('date'=>$_smarty_tpl->tpl_vars['EndDate']->value),$_smarty_tpl);?>
"/>
					<input id="formattedEndDate" type="hidden" value="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formatdate'][0][0]->FormatDate(array('date'=>$_smarty_tpl->tpl_vars['EndDate']->value,'key'=>'system'),$_smarty_tpl);?>
"/>
				</div>
				<div class="form-group filter-user <?php echo $_smarty_tpl->tpl_vars['groupClass']->value;?>
">
					<input id="userFilter" type="text" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['UserNameFilter']->value;?>
"
						   placeholder="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'User'),$_smarty_tpl);?>
"/>
					<input id="userId" type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['UserIdFilter']->value;?>
"/>
				</div>
				<div class="form-group filter-schedule <?php echo $_smarty_tpl->tpl_vars['groupClass']->value;?>
">
					<select id="scheduleId" class="form-control">
						<option value=""><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'AllSchedules'),$_smarty_tpl);?>
</option>
						<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['object_html_options'][0][0]->ObjectHtmlOptions(array('options'=>$_smarty_tpl->tpl_vars['Schedules']->value,'key'=>'GetId','label'=>"GetName",'selected'=>$_smarty_tpl->tpl_vars['ScheduleId']->value),$_smarty_tpl);?>

					</select>
				</div>
				<div class="form-group filter-resource <?php echo $_smarty_tpl->tpl_vars['groupClass']->value;?>
">
					<select id="resourceId" class="form-control">
						<option value=""><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'AllResources'),$_smarty_tpl);?>
</option>
						<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['object_html_options'][0][0]->ObjectHtmlOptions(array('options'=>$_smarty_tpl->tpl_vars['Resources']->value,'key'=>'GetId','label'=>"GetName",'selected'=>$_smarty_tpl->tpl_vars['ResourceId']->value),$_smarty_tpl);?>

					</select>
				</div>
				<div class="form-group filter-status <?php echo $_smarty_tpl->tpl_vars['groupClass']->value;?>
">
					<select id="statusId" class="form-control">
						<option value=""><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'AllReservations'),$_smarty_tpl);?>
</option>
						<option value="<?php echo ReservationStatus::Pending;?>
"
								<?php if ($_smarty_tpl->tpl_vars['ReservationStatusId']->value==ReservationStatus::Pending) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'PendingReservations'),$_smarty_tpl);?>
</option>
					</select>
				</div>
				<div class="form-group filter-referenceNumber <?php echo $_smarty_tpl->tpl_vars['groupClass']->value;?>
">
					<input id="referenceNumber" type="text" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['ReferenceNumber']->value;?>
"
						   placeholder="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'ReferenceNumber'),$_smarty_tpl);?>
"/>
				</div>
				<div class="form-group filter-resourceStatus <?php echo $_smarty_tpl->tpl_vars['groupClass']->value;?>
">
					<select id="resourceStatusIdFilter" class="form-control">
						<option value=""><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'AllResourceStatuses'),$_smarty_tpl);?>
</option>
						<option value="<?php echo ResourceStatus::AVAILABLE;?>
"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Available'),$_smarty_tpl);?>
</option>
						<option value="<?php echo ResourceStatus::UNAVAILABLE;?>
"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Unavailable'),$_smarty_tpl);?>
</option>
						<option value="<?php echo ResourceStatus::HIDDEN;?>
"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Hidden'),$_smarty_tpl);?>
</option>
					</select>
				</div>
				<div class="form-group filter-resourceStatusReason <?php echo $_smarty_tpl->tpl_vars['groupClass']->value;?>
">
					<select id="resourceReasonIdFilter" class="form-control"></select>
				</div>
				<div class="clearfix"></div>
				<?php  $_smarty_tpl->tpl_vars['attribute'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['attribute']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['AttributeFilters']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['attribute']->key => $_smarty_tpl->tpl_vars['attribute']->value) {
$_smarty_tpl->tpl_vars['attribute']->_loop = true;
?>
					<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['control'][0][0]->DisplayControl(array('type'=>"AttributeControl",'attribute'=>$_smarty_tpl->tpl_vars['attribute']->value,'searchmode'=>true,'class'=>"customAttribute filter-customAttribute".((string)$_smarty_tpl->tpl_vars['attribute']->value->Id())." ".((string)$_smarty_tpl->tpl_vars['groupClass']->value)),$_smarty_tpl);?>

				<?php } ?>
			</form>
		</div>
		<div class="panel-footer">
			<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['filter_button'][0][0]->FilterButton(array('id'=>"filter",'class'=>"btn-sm"),$_smarty_tpl);?>

			<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['reset_button'][0][0]->ResetButton(array('id'=>"clearFilter",'class'=>"btn-sm"),$_smarty_tpl);?>

		</div>
	</div>


	<table class="table" id="reservationTable">
		<thead>
		<tr>
			<th class="id hidden">&nbsp;</th>
			<th><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['sort_column'][0][0]->SortColumn(array('key'=>'User','field'=>ColumnNames::OWNER_LAST_NAME),$_smarty_tpl);?>
</th>
			<th><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['sort_column'][0][0]->SortColumn(array('key'=>'Resource','field'=>ColumnNames::RESOURCE_NAME),$_smarty_tpl);?>
</th>
			<th><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['sort_column'][0][0]->SortColumn(array('key'=>'Title','field'=>ColumnNames::RESERVATION_TITLE),$_smarty_tpl);?>
</th>
			<th><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['sort_column'][0][0]->SortColumn(array('key'=>'Description','field'=>ColumnNames::RESERVATION_DESCRIPTION),$_smarty_tpl);?>
</th>
			<th><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['sort_column'][0][0]->SortColumn(array('key'=>'BeginDate','field'=>ColumnNames::RESERVATION_START),$_smarty_tpl);?>
</th>
			<th><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['sort_column'][0][0]->SortColumn(array('key'=>'EndDate','field'=>ColumnNames::RESERVATION_END),$_smarty_tpl);?>
</th>
			<th><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Duration'),$_smarty_tpl);?>
</th>
			<th><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'ReferenceNumber'),$_smarty_tpl);?>
</th>
			<th class="action"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Delete'),$_smarty_tpl);?>
</th>
            <?php if (!$_smarty_tpl->tpl_vars['IsDesktop']->value) {?>
                <th class="action"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Edit'),$_smarty_tpl);?>
</th>
            <?php }?>
			<th class="action"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Approve'),$_smarty_tpl);?>
</th>
		</tr>
		</thead>
		<tbody>
		<?php  $_smarty_tpl->tpl_vars['reservation'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['reservation']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['reservations']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['reservation']->key => $_smarty_tpl->tpl_vars['reservation']->value) {
$_smarty_tpl->tpl_vars['reservation']->_loop = true;
?>
			<?php echo smarty_function_cycle(array('values'=>'row0,row1','assign'=>'rowCss'),$_smarty_tpl);?>

			<?php if ($_smarty_tpl->tpl_vars['reservation']->value->RequiresApproval) {?>
				<?php $_smarty_tpl->tpl_vars['rowCss'] = new Smarty_variable('pending', null, 0);?>
			<?php }?>
			<tr class="<?php echo $_smarty_tpl->tpl_vars['rowCss']->value;?>
 <?php if ($_smarty_tpl->tpl_vars['IsDesktop']->value) {?>editable<?php }?>" data-seriesId="<?php echo $_smarty_tpl->tpl_vars['reservation']->value->SeriesId;?>
" data-refnum="<?php echo $_smarty_tpl->tpl_vars['reservation']->value->ReferenceNumber;?>
">
				<td class="id hidden"><?php echo $_smarty_tpl->tpl_vars['reservation']->value->ReservationId;?>
</td>
				<td class="user"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['fullname'][0][0]->DisplayFullName(array('first'=>$_smarty_tpl->tpl_vars['reservation']->value->FirstName,'last'=>$_smarty_tpl->tpl_vars['reservation']->value->LastName,'ignorePrivacy'=>true),$_smarty_tpl);?>
</td>
				<td class="resource"><?php echo $_smarty_tpl->tpl_vars['reservation']->value->ResourceName;?>

					<?php if ($_smarty_tpl->tpl_vars['reservation']->value->ResourceStatusId==ResourceStatus::AVAILABLE) {?>
						<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['html_image'][0][0]->PrintImage(array('src'=>"status.png"),$_smarty_tpl);?>

						
					<?php } elseif ($_smarty_tpl->tpl_vars['reservation']->value->ResourceStatusId==ResourceStatus::UNAVAILABLE) {?>
						<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['html_image'][0][0]->PrintImage(array('src'=>"status-away.png"),$_smarty_tpl);?>

						
					<?php } else { ?>
						<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['html_image'][0][0]->PrintImage(array('src'=>"status-busy.png"),$_smarty_tpl);?>

						
					<?php }?>
					
					
					
				</td>
				<td class="title"><?php echo $_smarty_tpl->tpl_vars['reservation']->value->Title;?>
</td>
				<td class="description"><?php echo $_smarty_tpl->tpl_vars['reservation']->value->Description;?>
</td>
				<td class="date"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formatdate'][0][0]->FormatDate(array('date'=>$_smarty_tpl->tpl_vars['reservation']->value->StartDate,'timezone'=>$_smarty_tpl->tpl_vars['Timezone']->value,'key'=>'short_reservation_date'),$_smarty_tpl);?>
</td>
				<td class="date"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formatdate'][0][0]->FormatDate(array('date'=>$_smarty_tpl->tpl_vars['reservation']->value->EndDate,'timezone'=>$_smarty_tpl->tpl_vars['Timezone']->value,'key'=>'short_reservation_date'),$_smarty_tpl);?>
</td>
				<td class="duration"><?php echo $_smarty_tpl->tpl_vars['reservation']->value->GetDuration()->__toString();?>
</td>
				<td class="referenceNumber"><?php echo $_smarty_tpl->tpl_vars['reservation']->value->ReferenceNumber;?>
</td>
				<td class="action">
                    <a href="#" class="update delete"><span class="fa fa-trash icon remove fa-1x"></span></a>
                </td>
                <?php if (!$_smarty_tpl->tpl_vars['IsDesktop']->value) {?>
                    <td class="action">
                        <a href="#" class="update edit"><span class="fa fa-pencil icon fa-1x"></span></a>
                    </td>
                <?php }?>
                <td class="action">
					<?php if ($_smarty_tpl->tpl_vars['reservation']->value->RequiresApproval) {?>
						<a href="#" class="update approve"><span class="fa fa-check icon add"></span></a>
					<?php } else { ?>
						-
					<?php }?>
				</td>
			</tr>
			<tr class="<?php echo $_smarty_tpl->tpl_vars['rowCss']->value;?>
" data-seriesId="<?php echo $_smarty_tpl->tpl_vars['reservation']->value->SeriesId;?>
" data-refnum="<?php echo $_smarty_tpl->tpl_vars['reservation']->value->ReferenceNumber;?>
">
				<td colspan="11">
					<div class="reservation-list-dates">
						<div>
							<label><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Created'),$_smarty_tpl);?>
</label> <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formatdate'][0][0]->FormatDate(array('date'=>$_smarty_tpl->tpl_vars['reservation']->value->CreatedDate,'timezone'=>$_smarty_tpl->tpl_vars['Timezone']->value,'key'=>'short_datetime'),$_smarty_tpl);?>

						</div>
						<div>
							<label><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'LastModified'),$_smarty_tpl);?>
</label> <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formatdate'][0][0]->FormatDate(array('date'=>$_smarty_tpl->tpl_vars['reservation']->value->ModifiedDate,'timezone'=>$_smarty_tpl->tpl_vars['Timezone']->value,'key'=>'short_datetime'),$_smarty_tpl);?>

						</div>
						<div>
							<label><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'CheckInTime'),$_smarty_tpl);?>
</label> <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formatdate'][0][0]->FormatDate(array('date'=>$_smarty_tpl->tpl_vars['reservation']->value->CheckinDate,'timezone'=>$_smarty_tpl->tpl_vars['Timezone']->value,'key'=>'short_datetime'),$_smarty_tpl);?>

						</div>
						<div>
							<label><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'CheckOutTime'),$_smarty_tpl);?>
</label> <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formatdate'][0][0]->FormatDate(array('date'=>$_smarty_tpl->tpl_vars['reservation']->value->CheckoutDate,'timezone'=>$_smarty_tpl->tpl_vars['Timezone']->value,'key'=>'short_datetime'),$_smarty_tpl);?>

						</div>
						<div>
							<label><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'OriginalEndDate'),$_smarty_tpl);?>
</label> <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formatdate'][0][0]->FormatDate(array('date'=>$_smarty_tpl->tpl_vars['reservation']->value->OriginalEndDate,'timezone'=>$_smarty_tpl->tpl_vars['Timezone']->value,'key'=>'short_datetime'),$_smarty_tpl);?>

						</div>
					</div>
					<?php if (count($_smarty_tpl->tpl_vars['ReservationAttributes']->value)>0) {?>
						<div class="reservation-list-attributes">
							<?php  $_smarty_tpl->tpl_vars['attribute'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['attribute']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['ReservationAttributes']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['attribute']->key => $_smarty_tpl->tpl_vars['attribute']->value) {
$_smarty_tpl->tpl_vars['attribute']->_loop = true;
?>
								<?php ob_start();?><?php echo ManageReservationsActions::UpdateAttribute;?>
<?php $_tmp1=ob_get_clean();?><?php echo $_smarty_tpl->getSubTemplate ('Admin/InlineAttributeEdit.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('id'=>$_smarty_tpl->tpl_vars['reservation']->value->ReferenceNumber,'attribute'=>$_smarty_tpl->tpl_vars['attribute']->value,'value'=>$_smarty_tpl->tpl_vars['reservation']->value->Attributes->Get($_smarty_tpl->tpl_vars['attribute']->value->Id()),'url'=>((string)$_SERVER['SCRIPT_NAME'])."?action=".$_tmp1), 0);?>

							<?php } ?>
						</div>
					<?php }?>

				</td>
			</tr>
		<?php } ?>
		</tbody>
	</table>

	<div id="csvExport">
		<a href="<?php echo $_smarty_tpl->tpl_vars['CsvExportUrl']->value;?>
" download="<?php echo $_smarty_tpl->tpl_vars['CsvExportUrl']->value;?>
" class="btn btn-default btn-sm"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'ExportToCSV'),$_smarty_tpl);?>

			<span class="glyphicon glyphicon-export"></span></a>
	</div>
	<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['pagination'][0][0]->CreatePagination(array('pageInfo'=>$_smarty_tpl->tpl_vars['PageInfo']->value),$_smarty_tpl);?>


	<div class="modal fade" id="deleteInstanceDialog" tabindex="-1" role="dialog"
		 aria-labelledby="deleteInstanceDialogLabel" aria-hidden="true">
		<div class="modal-dialog">
			<form id="deleteInstanceForm" method="post">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						<h4 class="modal-title" id="deleteInstanceDialogLabel"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Delete'),$_smarty_tpl);?>
</h4>
					</div>
					<div class="modal-body">
						<div class="delResResponse"></div>
						<div class="alert alert-warning">
							<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'DeleteWarning'),$_smarty_tpl);?>

						</div>

						<input type="hidden" <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0][0]->GetFormName(array('key'=>'SERIES_UPDATE_SCOPE'),$_smarty_tpl);?>

							   value="<?php echo SeriesUpdateScope::ThisInstance;?>
"/>
						<input type="hidden" <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0][0]->GetFormName(array('key'=>'REFERENCE_NUMBER'),$_smarty_tpl);?>
 value="" class="referenceNumber"/>
					</div>
					<div class="modal-footer">
						<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['cancel_button'][0][0]->CancelButton(array(),$_smarty_tpl);?>

						<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['delete_button'][0][0]->DeleteButton(array(),$_smarty_tpl);?>

						<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['indicator'][0][0]->DisplayIndicator(array(),$_smarty_tpl);?>

					</div>
				</div>
			</form>
		</div>
	</div>

	<div class="modal fade" id="deleteSeriesDialog" tabindex="-1" role="dialog"
		 aria-labelledby="deleteSeriesDialogLabel"
		 aria-hidden="true">
		<div class="modal-dialog">
			<form id="deleteSeriesForm" method="post">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						<h4 class="modal-title" id="deleteSeriesDialogLabel"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Delete'),$_smarty_tpl);?>
</h4>
					</div>
					<div class="modal-body">
						<div class="alert alert-warning">
							<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'DeleteWarning'),$_smarty_tpl);?>

						</div>
						<input type="hidden" id="hdnSeriesUpdateScope" <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0][0]->GetFormName(array('key'=>'SERIES_UPDATE_SCOPE'),$_smarty_tpl);?>
 />
						<input type="hidden" <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0][0]->GetFormName(array('key'=>'REFERENCE_NUMBER'),$_smarty_tpl);?>
 value="" class="referenceNumber"/>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-default cancel"
								data-dismiss="modal"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Cancel'),$_smarty_tpl);?>
</button>

						<button type="button" class="btn btn-danger saveSeries btnUpdateThisInstance" id="btnUpdateThisInstance">
							<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'ThisInstance'),$_smarty_tpl);?>

						</button>
						<button type="button" class="btn btn-danger saveSeries btnUpdateAllInstances" id="btnUpdateAllInstances">
							<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'AllInstances'),$_smarty_tpl);?>

						</button>
						<button type="button" class="btn btn-danger saveSeries btnUpdateFutureInstances" id="btnUpdateFutureInstances">
							<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'FutureInstances'),$_smarty_tpl);?>

						</button>
                        <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['indicator'][0][0]->DisplayIndicator(array(),$_smarty_tpl);?>

					</div>
				</div>
			</form>
		</div>
	</div>

	<div id="inlineUpdateErrorDialog" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="inlineErrorLabel"
		 aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					<h4 class="modal-title" id="inlineErrorLabel"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Error'),$_smarty_tpl);?>
</h4>
				</div>
				<div class="modal-body">
					<div id="inlineUpdateErrors" class="hidden error">&nbsp;</div>
					<div id="reservationAccessError" class="hidden error"></div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default cancel"
							data-dismiss="modal"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'OK'),$_smarty_tpl);?>
</button>
				</div>
			</div>
		</div>
	</div>

	<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['jsfile'][0][0]->IncludeJavascriptFile(array('src'=>"ajax-helpers.js"),$_smarty_tpl);?>

	<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['jsfile'][0][0]->IncludeJavascriptFile(array('src'=>"admin/reservations.js"),$_smarty_tpl);?>


	<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['jsfile'][0][0]->IncludeJavascriptFile(array('src'=>"autocomplete.js"),$_smarty_tpl);?>

	<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['jsfile'][0][0]->IncludeJavascriptFile(array('src'=>"reservationPopup.js"),$_smarty_tpl);?>

	<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['jsfile'][0][0]->IncludeJavascriptFile(array('src'=>"approval.js"),$_smarty_tpl);?>


	<script type="text/javascript">

		function hidePopoversWhenClickAway() {
			$('body').on('click', function (e) {
				$('[rel="popover"]').each(function () {
					if (!$(this).is(e.target) && $(this).has(e.target).length === 0 && $('.popover').has(e.target).length === 0)
					{
						$(this).popover('hide');
					}
				});
			});
		}

		function setUpPopovers() {
			$('[rel="popover"]').popover({
				container: 'body',
				html: true,
				placement: 'top',
				content: function () {
					var popoverId = $(this).data('popover-content');
					return $(popoverId).html();
				}
			}).click(function (e) {
				e.preventDefault();
			}).on('show.bs.popover', function () {

			}).on('shown.bs.popover', function () {
				var trigger = $(this);
				var popover = trigger.data('bs.popover').tip();
				popover.find('.editable-cancel').click(function () {
					trigger.popover('hide');
				});
			});
		}

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

			$('.inlineAttribute').editable({
				url: updateUrl + '<?php echo ManageReservationsActions::UpdateAttribute;?>
',
				emptytext: '-'
			});
		}

		$(document).ready(function () {

			setUpPopovers();
			hidePopoversWhenClickAway();
			setUpEditables();

			var updateScope = {};
			updateScope['btnUpdateThisInstance'] = '<?php echo SeriesUpdateScope::ThisInstance;?>
';
			updateScope['btnUpdateAllInstances'] = '<?php echo SeriesUpdateScope::FullSeries;?>
';
			updateScope['btnUpdateFutureInstances'] = '<?php echo SeriesUpdateScope::FutureInstances;?>
';

			var actions = {};

			var resOpts = {
				autocompleteUrl: "<?php echo $_smarty_tpl->tpl_vars['Path']->value;?>
ajax/autocomplete.php?type=<?php echo AutoCompleteType::User;?>
",
				reservationUrlTemplate: "<?php echo $_smarty_tpl->tpl_vars['Path']->value;?>
reservation.php?<?php echo QueryStringKeys::REFERENCE_NUMBER;?>
=[refnum]",
				popupUrl: "<?php echo $_smarty_tpl->tpl_vars['Path']->value;?>
ajax/respopup.php",
				updateScope: updateScope,
				actions: actions,
				deleteUrl: '<?php echo $_smarty_tpl->tpl_vars['Path']->value;?>
ajax/reservation_delete.php?<?php echo QueryStringKeys::RESPONSE_TYPE;?>
=json',
				resourceStatusUrl: '<?php echo $_SERVER['SCRIPT_NAME'];?>
?<?php echo QueryStringKeys::ACTION;?>
=changeStatus',
				submitUrl: '<?php echo $_SERVER['SCRIPT_NAME'];?>
'
			};

			var approvalOpts = {
				url: '<?php echo $_smarty_tpl->tpl_vars['Path']->value;?>
ajax/reservation_approve.php'
			};

			var approval = new Approval(approvalOpts);

			var reservationManagement = new ReservationManagement(resOpts, approval);
			reservationManagement.init();

			<?php  $_smarty_tpl->tpl_vars['reservation'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['reservation']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['reservations']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['reservation']->key => $_smarty_tpl->tpl_vars['reservation']->value) {
$_smarty_tpl->tpl_vars['reservation']->_loop = true;
?>

			reservationManagement.addReservation(
					{
						id: '<?php echo $_smarty_tpl->tpl_vars['reservation']->value->ReservationId;?>
',
						referenceNumber: '<?php echo $_smarty_tpl->tpl_vars['reservation']->value->ReferenceNumber;?>
',
						isRecurring: '<?php echo $_smarty_tpl->tpl_vars['reservation']->value->IsRecurring;?>
',
						resourceStatusId: '<?php echo $_smarty_tpl->tpl_vars['reservation']->value->ResourceStatusId;?>
',
						resourceStatusReasonId: '<?php echo $_smarty_tpl->tpl_vars['reservation']->value->ResourceStatusReasonId;?>
',
						resourceId: '<?php echo $_smarty_tpl->tpl_vars['reservation']->value->ResourceId;?>
'
					}
			);
			<?php } ?>

			<?php  $_smarty_tpl->tpl_vars['reason'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['reason']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['StatusReasons']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['reason']->key => $_smarty_tpl->tpl_vars['reason']->value) {
$_smarty_tpl->tpl_vars['reason']->_loop = true;
?>
			reservationManagement.addStatusReason('<?php echo $_smarty_tpl->tpl_vars['reason']->value->Id();?>
', '<?php echo $_smarty_tpl->tpl_vars['reason']->value->StatusId();?>
', '<?php echo strtr($_smarty_tpl->tpl_vars['reason']->value->Description(), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
');
			<?php } ?>

			reservationManagement.initializeStatusFilter('<?php echo $_smarty_tpl->tpl_vars['ResourceStatusFilterId']->value;?>
', '<?php echo $_smarty_tpl->tpl_vars['ResourceStatusReasonFilterId']->value;?>
');
		});

		$('#filter-reservations-panel').showHidePanel();

	</script>

	<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['control'][0][0]->DisplayControl(array('type'=>"DatePickerSetupControl",'ControlId'=>"startDate",'AltId'=>"formattedStartDate"),$_smarty_tpl);?>

	<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['control'][0][0]->DisplayControl(array('type'=>"DatePickerSetupControl",'ControlId'=>"endDate",'AltId'=>"formattedEndDate"),$_smarty_tpl);?>


	<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['csrf_token'][0][0]->CSRFToken(array(),$_smarty_tpl);?>


	<div id="colorbox">
		<div id="approveDiv" class="wait-box">
			<h3><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Approving'),$_smarty_tpl);?>
</h3>
			<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['html_image'][0][0]->PrintImage(array('src'=>"reservation_submitting.gif"),$_smarty_tpl);?>

		</div>
	</div>

</div>

<?php echo $_smarty_tpl->getSubTemplate ('globalfooter.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
