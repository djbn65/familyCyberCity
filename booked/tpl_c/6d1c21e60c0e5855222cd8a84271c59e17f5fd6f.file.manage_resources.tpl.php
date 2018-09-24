<?php /* Smarty version Smarty-3.1.16, created on 2017-06-27 23:24:55
         compiled from "/home/vol15_8/byethost8.com/b8_19720712/htdocs/booked/tpl/Admin/Resources/manage_resources.tpl" */ ?>
<?php /*%%SmartyHeaderCode:196046161659532187077a06-07774745%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6d1c21e60c0e5855222cd8a84271c59e17f5fd6f' => 
    array (
      0 => '/home/vol15_8/byethost8.com/b8_19720712/htdocs/booked/tpl/Admin/Resources/manage_resources.tpl',
      1 => 1488330863,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '196046161659532187077a06-07774745',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'Path' => 0,
    'Resources' => 0,
    'groupClass' => 0,
    'ResourceNameFilter' => 0,
    'AllSchedules' => 0,
    'ScheduleIdFilter' => 0,
    'ResourceTypes' => 0,
    'ResourceTypeFilter' => 0,
    'CapacityFilter' => 0,
    'YesNoOptions' => 0,
    'RequiresApprovalFilter' => 0,
    'AutoPermissionFilter' => 0,
    'AllowMultiDayFilter' => 0,
    'AttributeFilters' => 0,
    'attribute' => 0,
    'PageInfo' => 0,
    'resource' => 0,
    'id' => 0,
    'StatusReasons' => 0,
    'Schedules' => 0,
    'description' => 0,
    'notes' => 0,
    'GroupLookup' => 0,
    'AdminGroups' => 0,
    'CreditsEnabled' => 0,
    'AttributeList' => 0,
    'scheduleId' => 0,
    'scheduleName' => 0,
    'adminGroup' => 0,
    'txtMinDuration' => 0,
    'txtMaxDuration' => 0,
    'txtBufferTime' => 0,
    'txtMaxCapacity' => 0,
    'txtStartNotice' => 0,
    'txtEndNotice' => 0,
    'txtAutoRelease' => 0,
    'resourceType' => 0,
    'YesNoUnchangedOptions' => 0,
    'bulkEditCreditsPerSLot' => 0,
    'bulkEditPeakCreditsPerSlot' => 0,
    'creditsPerSLot' => 0,
    'peakCreditsPerSlot' => 0,
    'group' => 0,
    'reason' => 0,
    'ResourceStatusFilterId' => 0,
    'ResourceStatusReasonFilterId' => 0,
    'ResourceGroups' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_595321874151f8_29747156',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_595321874151f8_29747156')) {function content_595321874151f8_29747156($_smarty_tpl) {?><?php if (!is_callable('smarty_function_html_options')) include '/home/vol15_8/byethost8.com/b8_19720712/htdocs/booked/lib/Common/../../lib/external/Smarty/plugins/function.html_options.php';
?>

<?php echo $_smarty_tpl->getSubTemplate ('globalheader2.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('InlineEdit'=>true), 0);?>


<div id="page-manage-resources" class="admin-page" style="margin-top: 8rem">
	<div>
		<div class="dropdown admin-header-more pull-right">
			<button class="btn btn-default" type="button" id="moreResourceActions" data-toggle="dropdown">
				<span class="glyphicon glyphicon-option-horizontal"></span>
				<span class="caret"></span>
			</button>
			<ul class="dropdown-menu" role="menu" aria-labelledby="moreResourceActions">

				<li role="presentation"><a role="menuitem"
										   href="<?php echo $_smarty_tpl->tpl_vars['Path']->value;?>
admin/manage_resource_groups.php"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>"ManageResourceGroups"),$_smarty_tpl);?>
</a>
				</li>
				<li role="presentation"><a role="menuitem"
										   href="<?php echo $_smarty_tpl->tpl_vars['Path']->value;?>
admin/manage_resource_types.php"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>"ManageResourceTypes"),$_smarty_tpl);?>
</a>
				</li>
				<li role="presentation"><a role="menuitem"
										   href="<?php echo $_smarty_tpl->tpl_vars['Path']->value;?>
admin/manage_resource_status.php"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>"ManageResourceStatus"),$_smarty_tpl);?>
</a>
				</li>
				<li role="presentation" class="divider"></li>
				<li role="presentation"><a role="menuitem"
										   href="#" class="add-resource" id="add-resource"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>"AddResource"),$_smarty_tpl);?>

						<span class="fa fa-plus-circle icon add"></span></a>
				</li>
				<?php if (!empty($_smarty_tpl->tpl_vars['Resources']->value)) {?>
				<li role="presentation"><a role="menuitem" href="#"
										   id="bulkUpdatePromptButton"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'BulkResourceUpdate'),$_smarty_tpl);?>
</a>
					<?php }?>
			</ul>
		</div>

		<h1><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'ManageResources'),$_smarty_tpl);?>
</h1>
	</div>

	<div class="panel panel-default filterTable" id="filter-resources-panel">
		<div class="panel-heading"><span
					class="glyphicon glyphicon-filter"></span> <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>"Filter"),$_smarty_tpl);?>
 <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['showhide_icon'][0][0]->ShowHideIcon(array(),$_smarty_tpl);?>

		</div>
		<div class="panel-body">
			<form id="filterForm" class="horizontal-list form-inline" role="form">
				<?php $_smarty_tpl->tpl_vars['groupClass'] = new Smarty_variable("col-xs-12 col-sm-4 col-md-3", null, 0);?>

				<div class="form-group <?php echo $_smarty_tpl->tpl_vars['groupClass']->value;?>
">
					<input type="text" id="filterResourceName" class="form-control" <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0][0]->GetFormName(array('key'=>'RESOURCE_NAME'),$_smarty_tpl);?>

						   value="<?php echo $_smarty_tpl->tpl_vars['ResourceNameFilter']->value;?>
" placeholder="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Name'),$_smarty_tpl);?>
"/>
				</div>
				<div class="form-group <?php echo $_smarty_tpl->tpl_vars['groupClass']->value;?>
">
					<select id="filterScheduleId" <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0][0]->GetFormName(array('key'=>'SCHEDULE_ID'),$_smarty_tpl);?>
 class="form-control">
						<option value=""><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'AllSchedules'),$_smarty_tpl);?>
</option>
						<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['object_html_options'][0][0]->ObjectHtmlOptions(array('options'=>$_smarty_tpl->tpl_vars['AllSchedules']->value,'key'=>'GetId','label'=>"GetName",'selected'=>$_smarty_tpl->tpl_vars['ScheduleIdFilter']->value),$_smarty_tpl);?>

					</select>
				</div>

				<div class="form-group <?php echo $_smarty_tpl->tpl_vars['groupClass']->value;?>
">
					<select id="filterResourceType" class="form-control" <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0][0]->GetFormName(array('key'=>'RESOURCE_TYPE_ID'),$_smarty_tpl);?>
>
						<option value=""><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'AllResourceTypes'),$_smarty_tpl);?>
</option>
						<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['object_html_options'][0][0]->ObjectHtmlOptions(array('options'=>$_smarty_tpl->tpl_vars['ResourceTypes']->value,'key'=>'Id','label'=>"Name",'selected'=>$_smarty_tpl->tpl_vars['ResourceTypeFilter']->value),$_smarty_tpl);?>

					</select>
				</div>
				<div class="form-group <?php echo $_smarty_tpl->tpl_vars['groupClass']->value;?>
">
					<select id="resourceStatusIdFilter" class="form-control" <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0][0]->GetFormName(array('key'=>'RESOURCE_STATUS_ID'),$_smarty_tpl);?>
>
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
					<select id="resourceReasonIdFilter" class="form-control" <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0][0]->GetFormName(array('key'=>'RESOURCE_STATUS_REASON_ID'),$_smarty_tpl);?>
>
						<option value="">-</option>
					</select>
				</div>
				<div class="form-group <?php echo $_smarty_tpl->tpl_vars['groupClass']->value;?>
">
					<input type="text" id="filterCapacity" class="form-control" <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0][0]->GetFormName(array('key'=>'MAX_PARTICIPANTS'),$_smarty_tpl);?>

						   value="<?php echo $_smarty_tpl->tpl_vars['CapacityFilter']->value;?>
" placeholder="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'MinimumCapacity'),$_smarty_tpl);?>
"/>
				</div>
				<div class="form-group <?php echo $_smarty_tpl->tpl_vars['groupClass']->value;?>
">
					<label class="control-label"
						   for="filterRequiresApproval"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'ResourceRequiresApproval'),$_smarty_tpl);?>
</label>
					<select id="filterRequiresApproval" class="form-control" <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0][0]->GetFormName(array('key'=>'REQUIRES_APPROVAL'),$_smarty_tpl);?>
>
						<?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['YesNoOptions']->value,'selected'=>$_smarty_tpl->tpl_vars['RequiresApprovalFilter']->value),$_smarty_tpl);?>

					</select>
				</div>
				<div class="form-group <?php echo $_smarty_tpl->tpl_vars['groupClass']->value;?>
">
					<label class="control-label"
						   for="filterAutoAssign"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'ResourcePermissionAutoGranted'),$_smarty_tpl);?>
</label>
					<select id="filterAutoAssign" class="form-control" <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0][0]->GetFormName(array('key'=>'AUTO_ASSIGN'),$_smarty_tpl);?>
>
						<?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['YesNoOptions']->value,'selected'=>$_smarty_tpl->tpl_vars['AutoPermissionFilter']->value),$_smarty_tpl);?>

					</select>
				</div>
				<div class="form-group <?php echo $_smarty_tpl->tpl_vars['groupClass']->value;?>
">
					<label class="control-label" for="filterAllowMultiDay"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'ResourceAllowMultiDay'),$_smarty_tpl);?>
</label>
					<select id="filterAllowMultiDay" class="form-control" <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0][0]->GetFormName(array('key'=>'ALLOW_MULTIDAY'),$_smarty_tpl);?>
>
						<?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['YesNoOptions']->value,'selected'=>$_smarty_tpl->tpl_vars['AllowMultiDayFilter']->value),$_smarty_tpl);?>

					</select>
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

	<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['pagination'][0][0]->CreatePagination(array('pageInfo'=>$_smarty_tpl->tpl_vars['PageInfo']->value,'showCount'=>false),$_smarty_tpl);?>


	<div id="globalError" class="error no-show"></div>

	<div class="panel panel-default admin-panel" id="list-resources-panel">
		<div class="panel-heading"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>"Resources"),$_smarty_tpl);?>

			<a href="#" class="add-link add-resource pull-right"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>"AddResource"),$_smarty_tpl);?>

				<span class="fa fa-plus-circle icon add"></span>
			</a>
		</div>
		<div class="panel-body no-padding" id="resourceList">

			<?php  $_smarty_tpl->tpl_vars['resource'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['resource']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['Resources']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['resource']->key => $_smarty_tpl->tpl_vars['resource']->value) {
$_smarty_tpl->tpl_vars['resource']->_loop = true;
?>
				<?php $_smarty_tpl->tpl_vars['id'] = new Smarty_variable($_smarty_tpl->tpl_vars['resource']->value->GetResourceId(), null, 0);?>
				<div class="resourceDetails" data-resourceId="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
">
					<div class="col-xs-12 col-sm-5">
						<input type="hidden" class="id" value="$id}"/>

						<div class="col-sm-3 col-xs-6 resourceImage">
							<div class="margin-bottom-25">
								<?php if ($_smarty_tpl->tpl_vars['resource']->value->HasImage()) {?>
									<img src="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['resource_image'][0][0]->GetResourceImage(array('image'=>$_smarty_tpl->tpl_vars['resource']->value->GetImage()),$_smarty_tpl);?>
" alt="Resource Image"
										 class="image"/>
									<br/>
									<a class="update imageButton" href="#"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Change'),$_smarty_tpl);?>
</a>
									|
									<a class="update removeImageButton" href="#"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Remove'),$_smarty_tpl);?>
</a>
									<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['indicator'][0][0]->DisplayIndicator(array('id'=>'removeImageIndicator'),$_smarty_tpl);?>

								<?php } else { ?>
									<div class="noImage"><span class="fa fa-image"></span></div>
									<a class="update imageButton" href="#"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'AddImage'),$_smarty_tpl);?>
</a>
								<?php }?>
							</div>
							<div>
								<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'ResourceColor'),$_smarty_tpl);?>

								<input class="resourceColorPicker" type="color"
									   value='<?php if ($_smarty_tpl->tpl_vars['resource']->value->HasColor()) {?><?php echo $_smarty_tpl->tpl_vars['resource']->value->GetColor();?>
<?php } else { ?>#ffffff<?php }?>'
									   alt="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'ResourceColor'),$_smarty_tpl);?>
"
									   title="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'ResourceColor'),$_smarty_tpl);?>
"/>
								<a href="#" class="update clearColor"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Remove'),$_smarty_tpl);?>
</a>
							</div>
						</div>
						<div class="col-sm-9 col-xs-6">
							<div>
							<span class="title resourceName" data-type="text" data-pk="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
"
								  data-name="<?php echo FormKeys::RESOURCE_NAME;?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['resource']->value->GetName(), ENT_QUOTES, 'UTF-8', true);?>
</span>
								<a class="update renameButton" href="#" title="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Rename'),$_smarty_tpl);?>
"><i
											class="fa fa-pencil-square-o"></i></a> |
								<a class="update copyButton" href="#" title="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Copy'),$_smarty_tpl);?>
"><i
											class="fa fa-copy"></i></a> |
								<a class="update deleteButton" href="#" title="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Delete'),$_smarty_tpl);?>
"><i
											class="fa fa-trash icon icon-delete"></i></a>
							</div>
							<div>
								<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Status'),$_smarty_tpl);?>

								<?php if ($_smarty_tpl->tpl_vars['resource']->value->IsAvailable()) {?>
									<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['html_image'][0][0]->PrintImage(array('src'=>"status.png"),$_smarty_tpl);?>

									<a class="update changeStatus"
									   href="#" rel="popover"
									   data-popover-content="#statusDialog"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Available'),$_smarty_tpl);?>
</a>
								<?php } elseif ($_smarty_tpl->tpl_vars['resource']->value->IsUnavailable()) {?>
									<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['html_image'][0][0]->PrintImage(array('src'=>"status-away.png"),$_smarty_tpl);?>

									<a class="update changeStatus"
									   href="#" rel="popover"
									   data-popover-content="#statusDialog"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Unavailable'),$_smarty_tpl);?>
</a>
								<?php } else { ?>
									<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['html_image'][0][0]->PrintImage(array('src'=>"status-busy.png"),$_smarty_tpl);?>

									<a class="update changeStatus"
									   href="#" rel="popover"
									   data-popover-content="#statusDialog"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Hidden'),$_smarty_tpl);?>
</a>
								<?php }?>
								<?php if (array_key_exists($_smarty_tpl->tpl_vars['resource']->value->GetStatusReasonId(),$_smarty_tpl->tpl_vars['StatusReasons']->value)) {?>
									<span class="statusReason"><?php echo $_smarty_tpl->tpl_vars['StatusReasons']->value[$_smarty_tpl->tpl_vars['resource']->value->GetStatusReasonId()]->Description();?>
</span>
								<?php }?>
							</div>

							<div>
								<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Schedule'),$_smarty_tpl);?>

								<span class="propertyValue scheduleName"
									  data-type="select" data-pk="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" data-value="<?php echo $_smarty_tpl->tpl_vars['resource']->value->GetScheduleId();?>
"
									  data-name="<?php echo FormKeys::SCHEDULE_ID;?>
"><?php echo $_smarty_tpl->tpl_vars['Schedules']->value[$_smarty_tpl->tpl_vars['resource']->value->GetScheduleId()];?>
</span>
								<a class="update changeScheduleButton" href="#"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Move'),$_smarty_tpl);?>
</a>
							</div>
							<div>
								<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'ResourceType'),$_smarty_tpl);?>

								<span class="propertyValue resourceTypeName"
									  data-type="select" data-pk="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" data-value="<?php echo $_smarty_tpl->tpl_vars['resource']->value->GetResourceTypeId();?>
"
									  data-name="<?php echo FormKeys::RESOURCE_TYPE_ID;?>
">
									<?php if ($_smarty_tpl->tpl_vars['resource']->value->HasResourceType()) {?>
										<?php echo $_smarty_tpl->tpl_vars['ResourceTypes']->value[$_smarty_tpl->tpl_vars['resource']->value->GetResourceTypeId()]->Name();?>

									<?php } else { ?>
										<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'NoResourceTypeLabel'),$_smarty_tpl);?>

									<?php }?>
								</span>
								<a class="update changeResourceType" href="#"><span
											class="fa fa-pencil-square-o"></span></a>
							</div>
							<div>
								<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'SortOrder'),$_smarty_tpl);?>

								<span class="propertyValue sortOrderValue"
									  data-type="number" data-pk="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" data-name="<?php echo FormKeys::RESOURCE_SORT_ORDER;?>
">
								<?php echo (($tmp = @$_smarty_tpl->tpl_vars['resource']->value->GetSortOrder())===null||$tmp==='' ? "0" : $tmp);?>

							</span>
								<a class="update changeSortOrder" href="#"><span
											class="fa fa-pencil-square-o"></span></a>
							</div>
							<div>
								<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Location'),$_smarty_tpl);?>

								<span class="propertyValue locationValue"
									  data-type="text" data-pk="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" data-value="<?php echo $_smarty_tpl->tpl_vars['resource']->value->GetLocation();?>
"
									  data-name="<?php echo FormKeys::RESOURCE_LOCATION;?>
">
							<?php if ($_smarty_tpl->tpl_vars['resource']->value->HasLocation()) {?>
								<?php echo $_smarty_tpl->tpl_vars['resource']->value->GetLocation();?>

							<?php } else { ?>
								<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'NoLocationLabel'),$_smarty_tpl);?>

							<?php }?>
							</span>
								<a class="update changeLocation" href="#"><span
											class="fa fa-pencil-square-o"></span></a>
							</div>
							<div>
								<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Contact'),$_smarty_tpl);?>

								<span class="propertyValue contactValue"
									  data-type="text" data-pk="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" data-value="<?php echo $_smarty_tpl->tpl_vars['resource']->value->GetContact();?>
"
									  data-name="<?php echo FormKeys::RESOURCE_CONTACT;?>
">
							<?php if ($_smarty_tpl->tpl_vars['resource']->value->HasContact()) {?>
								<?php echo $_smarty_tpl->tpl_vars['resource']->value->GetContact();?>

							<?php } else { ?>
								<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'NoContactLabel'),$_smarty_tpl);?>

							<?php }?>
							</span>
								<a class="update changeContact" href="#"><span class="fa fa-pencil-square-o"></span></a>
							</div>
							<div>
								<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Description'),$_smarty_tpl);?>
 <a class="update changeDescription" href="#"><span
											class="fa fa-pencil-square-o"></span></a>
								<?php if ($_smarty_tpl->tpl_vars['resource']->value->HasDescription()) {?>
									<?php $_smarty_tpl->tpl_vars['description'] = new Smarty_variable($_smarty_tpl->tpl_vars['resource']->value->GetDescription(), null, 0);?>
								<?php } else { ?>
									<?php $_smarty_tpl->tpl_vars['description'] = new Smarty_variable('', null, 0);?>
								<?php }?>
								<div class="descriptionValue"data-type="textarea" data-pk="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" data-value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['description']->value, ENT_QUOTES, 'UTF-8', true);?>
"data-name="<?php echo FormKeys::RESOURCE_DESCRIPTION;?>
"><?php if ($_smarty_tpl->tpl_vars['resource']->value->HasDescription()) {?><?php echo $_smarty_tpl->tpl_vars['description']->value;?>
<?php } else { ?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'NoDescriptionLabel'),$_smarty_tpl);?>
<?php }?></div>
							</div>
							<div>
								<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Notes'),$_smarty_tpl);?>
 <a class="update changeNotes" href="#"><span
											class="fa fa-pencil-square-o"></span></a>
								<?php if ($_smarty_tpl->tpl_vars['resource']->value->HasNotes()) {?>
									<?php $_smarty_tpl->tpl_vars['notes'] = new Smarty_variable($_smarty_tpl->tpl_vars['resource']->value->GetNotes(), null, 0);?>
								<?php } else { ?>
									<?php $_smarty_tpl->tpl_vars['notes'] = new Smarty_variable('', null, 0);?>
								<?php }?>
								<div class="notesValue"data-type="textarea" data-pk="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" data-value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['notes']->value, ENT_QUOTES, 'UTF-8', true);?>
"data-name="<?php echo FormKeys::RESOURCE_NOTES;?>
"><?php if ($_smarty_tpl->tpl_vars['resource']->value->HasNotes()) {?><?php echo $_smarty_tpl->tpl_vars['notes']->value;?>
<?php } else { ?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'NoNotesLabel'),$_smarty_tpl);?>
<?php }?></div>
							</div>
							<div>
								<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'ResourceAdministrator'),$_smarty_tpl);?>

								<span class="propertyValue resourceAdminValue"
									  data-type="select" data-pk="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" data-value="<?php echo $_smarty_tpl->tpl_vars['resource']->value->GetAdminGroupId();?>
"
									  data-name="<?php echo FormKeys::RESOURCE_ADMIN_GROUP_ID;?>
"><?php echo $_smarty_tpl->tpl_vars['GroupLookup']->value[$_smarty_tpl->tpl_vars['resource']->value->GetAdminGroupId()]->Name;?>
</span>
								<?php if (count($_smarty_tpl->tpl_vars['AdminGroups']->value)>0) {?>
									<a class="update changeResourceAdmin" href="#"><span
												class="fa fa-pencil-square-o"></span></a>
								<?php }?>
							</div>
							<div>
								<a class="update disableSubscription hide subscriptionButton"
								   href="#"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'TurnOffSubscription'),$_smarty_tpl);?>
</a>
								<a class="update enableSubscription hide subscriptionButton"
								   href="#"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'TurnOnSubscription'),$_smarty_tpl);?>
</a>
								<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['indicator'][0][0]->DisplayIndicator(array('id'=>'subscriptionIndicator'),$_smarty_tpl);?>

							</div>
							<div>
								<a href="<?php echo $_SERVER['SCRIPT_NAME'];?>
?action=<?php echo ManageResourcesActions::ActionPrintQR;?>
&rid=<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
"
								   target="_blank"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'PrintQRCode'),$_smarty_tpl);?>
 <i class="fa fa-qrcode"></i></a>
							</div>
						</div>
					</div>

					<div class="col-xs-12 col-sm-7">
						<div class="col-xs-6">
							<h5 class="inline"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Duration'),$_smarty_tpl);?>
</h5>
							<a href="#" class="inline update changeDuration">
								<span class="fa fa-pencil-square-o"></span>
							</a>

							<div class="durationPlaceHolder">
								<?php echo $_smarty_tpl->getSubTemplate ("Admin/Resources/manage_resources_duration.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('resource'=>$_smarty_tpl->tpl_vars['resource']->value), 0);?>

							</div>
						</div>

						<div class="col-xs-6">
							<h5 class="inline"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Access'),$_smarty_tpl);?>
</h5>
							<a href="#" class="inline update changeAccess">
								<span class="fa fa-pencil-square-o"></span>
							</a>

							<div class="accessPlaceHolder">
								<?php echo $_smarty_tpl->getSubTemplate ("Admin/Resources/manage_resources_access.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('resource'=>$_smarty_tpl->tpl_vars['resource']->value), 0);?>

							</div>
						</div>

						<div class="col-xs-6">
							<h5 class="inline"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Capacity'),$_smarty_tpl);?>
</h5>
							<a href="#" class="inline update changeCapacity">
								<span class="fa fa-pencil-square-o"></span>
							</a>

							<div class="capacityPlaceHolder">
								<?php echo $_smarty_tpl->getSubTemplate ("Admin/Resources/manage_resources_capacity.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('resource'=>$_smarty_tpl->tpl_vars['resource']->value), 0);?>

							</div>
						</div>

						<div class="col-xs-6">
							<h5><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Permissions'),$_smarty_tpl);?>
</h5>
							<a href="#" class="update changeUsers"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Users'),$_smarty_tpl);?>
</a> |
							<a href="#" class="update changeGroups"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Groups'),$_smarty_tpl);?>
</a>
						</div>

						<div class="col-xs-6">
							<h5 class="inline"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'ResourceGroups'),$_smarty_tpl);?>
</h5>
							<a href="#" class="inline update changeResourceGroups">
								<span class="fa fa-pencil-square-o"></span>
							</a>

							<div class="resourceGroupsPlaceHolder">
								<?php echo $_smarty_tpl->getSubTemplate ("Admin/Resources/manage_resources_groups.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('resource'=>$_smarty_tpl->tpl_vars['resource']->value), 0);?>

							</div>
						</div>

						<div class="col-xs-6">
							<?php if ($_smarty_tpl->tpl_vars['CreditsEnabled']->value) {?>
								<h5 class="inline"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Credits'),$_smarty_tpl);?>
</h5>
								<a href="#" class="inline update changeCredits">
									<span class="fa fa-pencil-square-o"></span>
								</a>
								<div class="creditsPlaceHolder">
									<?php echo $_smarty_tpl->getSubTemplate ("Admin/Resources/manage_resources_credits.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('resource'=>$_smarty_tpl->tpl_vars['resource']->value), 0);?>

								</div>
							<?php }?>
						</div>

					</div>

					<div class="clearfix"></div>
					<div class="customAttributes">
						<?php if (count($_smarty_tpl->tpl_vars['AttributeList']->value)>0) {?>
							<?php  $_smarty_tpl->tpl_vars['attribute'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['attribute']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['AttributeList']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['attribute']->key => $_smarty_tpl->tpl_vars['attribute']->value) {
$_smarty_tpl->tpl_vars['attribute']->_loop = true;
?>
								<?php echo $_smarty_tpl->getSubTemplate ('Admin/InlineAttributeEdit.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('id'=>$_smarty_tpl->tpl_vars['id']->value,'attribute'=>$_smarty_tpl->tpl_vars['attribute']->value,'value'=>$_smarty_tpl->tpl_vars['resource']->value->GetAttributeValue($_smarty_tpl->tpl_vars['attribute']->value->Id())), 0);?>

							<?php } ?>
						<?php }?>
					</div>
					<div class="clearfix"></div>
				</div>
			<?php } ?>
		</div>
	</div>

	<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['pagination'][0][0]->CreatePagination(array('pageInfo'=>$_smarty_tpl->tpl_vars['PageInfo']->value),$_smarty_tpl);?>


	<div id="add-resource-dialog" class="modal" tabindex="-1" role="dialog" aria-labelledby="addResourceModalLabel"
		 aria-hidden="true">
		<form id="addResourceForm" class="form" role="form" method="post"
			  ajaxAction="<?php echo ManageResourcesActions::ActionAdd;?>
">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						<h4 class="modal-title" id="addResourceModalLabel"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'AddNewResource'),$_smarty_tpl);?>
</h4>
					</div>
					<div class="modal-body">
						<div id="addResourceResults" class="alert alert-danger no-show"></div>

						<div class="form-group has-feedback">
							<label for="resourceName"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Name'),$_smarty_tpl);?>
</label>
							<input type="text" class="form-control required" maxlength="85" id="resourceName"
									<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0][0]->GetFormName(array('key'=>'RESOURCE_NAME'),$_smarty_tpl);?>
 />
							<i class="glyphicon glyphicon-asterisk form-control-feedback"
							   data-bv-icon-for="resourceName"></i>

						</div>
						<div class="form-group">
							<label for="scheduleId"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Schedule'),$_smarty_tpl);?>
</label>
							<select class="form-control" <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0][0]->GetFormName(array('key'=>'SCHEDULE_ID'),$_smarty_tpl);?>
 id="scheduleId">
								<?php  $_smarty_tpl->tpl_vars['scheduleName'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['scheduleName']->_loop = false;
 $_smarty_tpl->tpl_vars['scheduleId'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['Schedules']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['scheduleName']->key => $_smarty_tpl->tpl_vars['scheduleName']->value) {
$_smarty_tpl->tpl_vars['scheduleName']->_loop = true;
 $_smarty_tpl->tpl_vars['scheduleId']->value = $_smarty_tpl->tpl_vars['scheduleName']->key;
?>
									<option value="<?php echo $_smarty_tpl->tpl_vars['scheduleId']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['scheduleName']->value;?>
</option>
								<?php } ?>
							</select>
						</div>
						<div class="form-group">
							<label for="permissions"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'ResourcePermissions'),$_smarty_tpl);?>
</label>
							<select class="form-control" <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0][0]->GetFormName(array('key'=>'AUTO_ASSIGN'),$_smarty_tpl);?>
 id="permissions">
								<option value="1"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>"ResourcePermissionAutoGranted"),$_smarty_tpl);?>
</option>
								<option value="0"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>"ResourcePermissionNotAutoGranted"),$_smarty_tpl);?>
</option>
							</select>
						</div>
						<div class="form-group">
							<label for="resourceAdminGroupId"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'ResourceAdministrator'),$_smarty_tpl);?>
</label>
							<select class="form-control" <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0][0]->GetFormName(array('key'=>'RESOURCE_ADMIN_GROUP_ID'),$_smarty_tpl);?>

									id="resourceAdminGroupId">
								<option value=""><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'None'),$_smarty_tpl);?>
</option>
								<?php  $_smarty_tpl->tpl_vars['adminGroup'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['adminGroup']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['AdminGroups']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['adminGroup']->key => $_smarty_tpl->tpl_vars['adminGroup']->value) {
$_smarty_tpl->tpl_vars['adminGroup']->_loop = true;
?>
									<option value="<?php echo $_smarty_tpl->tpl_vars['adminGroup']->value->Id;?>
"><?php echo $_smarty_tpl->tpl_vars['adminGroup']->value->Name;?>
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

	<div id="imageDialog" class="modal" tabindex="-1" role="dialog" aria-labelledby="imageModalLabel"
		 aria-hidden="true">
		<form id="imageForm" method="post" enctype="multipart/form-data"
			  ajaxAction="<?php echo ManageResourcesActions::ActionChangeImage;?>
">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						<h4 class="modal-title" id="imageModalLabel"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'AddImage'),$_smarty_tpl);?>
</h4>
					</div>
					<div class="modal-body">
						<label for="resourceImage" class="off-screen">Image file</label>
						<input id="resourceImage" type="file" class="text" size="60" <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0][0]->GetFormName(array('key'=>'RESOURCE_IMAGE'),$_smarty_tpl);?>

							   accept="image/*;capture=camera"/>

						<div class="note">.gif, .jpg, or .png</div>
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

	<div id="copyDialog" class="modal" tabindex="-1" role="dialog" aria-labelledby="copyModalLabel"
		 aria-hidden="true">
		<form id="copyForm" method="post" enctype="multipart/form-data"
			  ajaxAction="<?php echo ManageResourcesActions::ActionCopyResource;?>
">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						<h4 class="modal-title" id="copyModalLabel"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Copy'),$_smarty_tpl);?>
</h4>
					</div>
					<div class="modal-body">
						<div class="form-group has-feedback">
							<label for="copyResourceName"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Name'),$_smarty_tpl);?>
</label>
							<input type="text" class="form-control required" maxlength="85" id="copyResourceName"
									<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0][0]->GetFormName(array('key'=>'RESOURCE_NAME'),$_smarty_tpl);?>
 />
							<i class="glyphicon glyphicon-asterisk form-control-feedback"
							   data-bv-icon-for="copyResourceName"></i>

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

	<div id="durationDialog" class="modal" tabindex="-1" role="dialog" aria-labelledby="durationModalLabel"
		 aria-hidden="true">
		<form id="durationForm" method="post" role="form" ajaxAction="<?php echo ManageResourcesActions::ActionChangeDuration;?>
">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						<h4 class="modal-title" id="durationModalLabel"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Duration'),$_smarty_tpl);?>
</h4>
					</div>
					<div class="modal-body">
						<div class="editMinDuration">
							<div class="checkbox">
								<input type="checkbox" id="noMinimumDuration" class="noMinimumDuration"
									   data-related-inputs="#minDurationInputs"/>
								<label for="noMinimumDuration"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'ResourceMinLengthNone'),$_smarty_tpl);?>
</label>
							</div>
							<?php $_smarty_tpl->_capture_stack[0][] = array("txtMinDuration", "txtMinDuration", null); ob_start(); ?>
								<input type='number' size='3' id='minDurationDays' class='days form-control inline'
									   maxlength='3'
									   title='Days' max='999' min='0' placeholder='<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'days'),$_smarty_tpl);?>
'/>
								<input type='number' size='2' id='minDurationHours' class='hours form-control inline'
									   maxlength='2'
									   title='Hours' max='99' min='0' placeholder='<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'hours'),$_smarty_tpl);?>
'/>
								<input type='number' size='2' id='minDurationMinutes'
									   class='minutes form-control inline'
									   maxlength='2' title='Minutes' max='99' min='0'
									   placeholder='<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'minutes'),$_smarty_tpl);?>
'/>
								<input type='hidden' id='minDuration'
									   class='interval minDuration' <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0][0]->GetFormName(array('key'=>'MIN_DURATION'),$_smarty_tpl);?>
 />
							<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
							<div id='minDurationInputs'>
								<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'ResourceMinLength','args'=>$_smarty_tpl->tpl_vars['txtMinDuration']->value),$_smarty_tpl);?>

							</div>
						</div>

						<div class="editMaxDuration">
							<div class="checkbox">
								<input type="checkbox" id="noMaximumDuration" data-related-inputs="#maxDurationInputs"/>
								<label for="noMaximumDuration"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'ResourceMaxLengthNone'),$_smarty_tpl);?>
</label>
							</div>
							<?php $_smarty_tpl->_capture_stack[0][] = array("txtMaxDuration", "txtMaxDuration", null); ob_start(); ?>
								<input type='number' id='maxDurationDays' size='3' class='days form-control inline'
									   maxlength='3'
									   title='Days' max='999' min='0' placeholder='<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'days'),$_smarty_tpl);?>
'/>
								<input type='number' id='maxDurationHours' size='2' class='hours form-control inline'
									   maxlength='2'
									   title='Hours' max='99' min='0' placeholder='<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'hours'),$_smarty_tpl);?>
'/>
								<input type='number' id='maxDurationMinutes' size='2'
									   class='minutes form-control inline'
									   maxlength='2' title='Minutes' max='99' min='0'
									   placeholder='<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'minutes'),$_smarty_tpl);?>
'/>
								<input type='hidden' id='maxDuration' class='interval' <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0][0]->GetFormName(array('key'=>'MAX_DURATION'),$_smarty_tpl);?>
 />
							<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
							<div id='maxDurationInputs'>
								<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'ResourceMaxLength','args'=>$_smarty_tpl->tpl_vars['txtMaxDuration']->value),$_smarty_tpl);?>

							</div>
						</div>

						<div class="editBuffer">
							<div class="checkbox">
								<input type="checkbox" id="noBufferTime" data-related-inputs="#bufferInputs"/>
								<label for="noBufferTime"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'ResourceBufferTimeNone'),$_smarty_tpl);?>
</label>
							</div>

							<?php $_smarty_tpl->_capture_stack[0][] = array("txtBufferTime", "txtBufferTime", null); ob_start(); ?>
								<input type='number' id='bufferTimeDays'
									   size='3' class='days form-control inline'
									   maxlength='3'
									   title='Days' max='999' min='0' placeholder='<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'days'),$_smarty_tpl);?>
'/>
								<input type='number' id='bufferTimeHours'
									   size='2' class='hours form-control inline'
									   maxlength='2'
									   title='Hours' max='99' min='0' placeholder='<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'hours'),$_smarty_tpl);?>
'/>
								<input type='number' id='bufferTimeMinutes'
									   size='2' class='minutes form-control inline'
									   maxlength='2' title='Minutes' max='99' min='0'
									   placeholder='<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'minutes'),$_smarty_tpl);?>
'/>
								<input type='hidden' id='bufferTime'
									   class='interval' <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0][0]->GetFormName(array('key'=>'BUFFER_TIME'),$_smarty_tpl);?>
 />
							<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
							<div id='bufferInputs'>
								<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'ResourceBufferTime','args'=>$_smarty_tpl->tpl_vars['txtBufferTime']->value),$_smarty_tpl);?>

							</div>
						</div>

						<div class="editMultiDay">
							<div class="checkbox">
								<input type="checkbox" <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0][0]->GetFormName(array('key'=>'ALLOW_MULTIDAY'),$_smarty_tpl);?>
 id="allowMultiDay"/>
								<label for="allowMultiDay"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'ResourceAllowMultiDay'),$_smarty_tpl);?>
</label>
							</div>
						</div>

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

	<div id="capacityDialog" class="modal" tabindex="-1" role="dialog" aria-labelledby="capacityModalLabel"
		 aria-hidden="true">
		<form id="capacityForm" method="post" role="form" ajaxAction="<?php echo ManageResourcesActions::ActionChangeCapacity;?>
">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						<h4 class="modal-title" id="capacityModalLabel"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Capacity'),$_smarty_tpl);?>
</h4>
					</div>
					<div class="modal-body">
						<div class="editCapacity">
							<div class="checkbox">
								<input type="checkbox" id="unlimitedCapacity" class="unlimitedCapacity"
									   data-related-inputs="#maxCapacityInputs"/>
								<label for="unlimitedCapacity"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'ResourceCapacityNone'),$_smarty_tpl);?>
</label>
							</div>
							<div id='maxCapacityInputs'>
								<?php $_smarty_tpl->_capture_stack[0][] = array("txtMaxCapacity", "txtMaxCapacity", null); ob_start(); ?>
									<input type='number' id='maxCapacity' class='form-control inline mid-number' min='0'
										   max='9999' size='5' <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0][0]->GetFormName(array('key'=>'MAX_PARTICIPANTS'),$_smarty_tpl);?>
 />
								<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
								<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'ResourceCapacity','args'=>$_smarty_tpl->tpl_vars['txtMaxCapacity']->value),$_smarty_tpl);?>

							</div>
						</div>
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

	<div id="accessDialog" class="modal" tabindex="-1" role="dialog" aria-labelledby="accessModalLabel"
		 aria-hidden="true">
		<form id="accessForm" method="post" role="form" ajaxAction="<?php echo ManageResourcesActions::ActionChangeAccess;?>
">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						<h4 class="modal-title" id="accessModalLabel"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Access'),$_smarty_tpl);?>
</h4>
					</div>
					<div class="modal-body">
						<div class="editStartNotice">
							<div class="checkbox">
								<input type="checkbox" id="noStartNotice" class="noStartNotice"
									   data-related-inputs="#startNoticeInputs"/>
								<label for="noStartNotice"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'ResourceMinLengthNone'),$_smarty_tpl);?>
</label>
							</div>
							<?php $_smarty_tpl->_capture_stack[0][] = array("txtStartNotice", "txtStartNotice", null); ob_start(); ?>
								<input type='number' id='startNoticeDays' size='3' class='days form-control inline'
									   maxlength='3'
									   title='Days' max='999' min='0' placeholder='<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'days'),$_smarty_tpl);?>
'/>
								<input type='number' id='startNoticeHours' size='2' class='hours form-control inline'
									   maxlength='2' max='99' min='0'
									   title='Hours' placeholder='<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'hours'),$_smarty_tpl);?>
'/>
								<input type='number' id='startNoticeMinutes' size='2'
									   class='minutes form-control inline'
									   maxlength='2' max='99' min='0' title='Minutes'
									   placeholder='<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'minutes'),$_smarty_tpl);?>
'/>
								<input type='hidden' id='startNotice' class='interval' <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0][0]->GetFormName(array('key'=>'MIN_NOTICE'),$_smarty_tpl);?>
 />
							<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
							<div id='startNoticeInputs'>
								<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'ResourceMinNotice','args'=>$_smarty_tpl->tpl_vars['txtStartNotice']->value),$_smarty_tpl);?>

							</div>
						</div>

						<div class="editEndNotice">
							<div class="checkbox">
								<input type="checkbox" id="noEndNotice" data-related-inputs="#endNoticeInputs"/>
								<label for="noEndNotice"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'ResourceMaxNoticeNone'),$_smarty_tpl);?>
</label>
							</div>
							<?php $_smarty_tpl->_capture_stack[0][] = array("txtEndNotice", "txtEndNotice", null); ob_start(); ?>
								<input type='number' id='endNoticeDays' size='3' class='days form-control inline'
									   maxlength='3'
									   title='Days' max='999' min='0' placeholder='<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'days'),$_smarty_tpl);?>
'/>
								<input type='number' id='endNoticeHours' size='2' class='hours form-control inline'
									   maxlength='2'
									   title='Hours' max='99' min='0' placeholder='<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'hours'),$_smarty_tpl);?>
'/>
								<input type='number' id='endNoticeMinutes' size='2' class='minutes form-control inline'
									   maxlength='2' max='99' min='0' title='Minutes'
									   placeholder='<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'minutes'),$_smarty_tpl);?>
'/>
								<input type='hidden' id='endNotice' class='interval' <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0][0]->GetFormName(array('key'=>'MAX_NOTICE'),$_smarty_tpl);?>
 />
							<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
							<div id='endNoticeInputs'>
								<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'ResourceMaxNotice','args'=>$_smarty_tpl->tpl_vars['txtEndNotice']->value),$_smarty_tpl);?>

							</div>
						</div>
						<div class="editRequiresApproval">
							<div class="checkbox">
								<input type="checkbox" <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0][0]->GetFormName(array('key'=>'REQUIRES_APPROVAL'),$_smarty_tpl);?>
 id="requiresApproval"/>
								<label for="requiresApproval"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'ResourceRequiresApproval'),$_smarty_tpl);?>
</label>
							</div>
						</div>

						<div class="editAutoAssign">
							<div class="checkbox">
								<input type="checkbox" <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0][0]->GetFormName(array('key'=>'AUTO_ASSIGN'),$_smarty_tpl);?>
 id="autoAssign" value="1"/>
								<label for="autoAssign"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'ResourcePermissionAutoGranted'),$_smarty_tpl);?>
</label>
							</div>
						</div>

						<div class="no-show" id="autoAssignRemoveAllPermissions">
							<div class="checkbox">
								<input type="checkbox" <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0][0]->GetFormName(array('key'=>'AUTO_ASSIGN_CLEAR'),$_smarty_tpl);?>

									   id="autoAssignRemoveAllPermissionsChk" value="1"/>
								<label for="autoAssignRemoveAllPermissionsChk"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'RemoveExistingPermissions'),$_smarty_tpl);?>
</label>
							</div>
						</div>

						<div class="editCheckin">
							<div class="checkbox">
								<input type="checkbox" <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0][0]->GetFormName(array('key'=>'ENABLE_CHECK_IN'),$_smarty_tpl);?>
 id="enableCheckIn"/>
								<label for="enableCheckIn"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'RequiresCheckInNotification'),$_smarty_tpl);?>
</label>
							</div>
							<div class="no-show" id="autoReleaseMinutesDiv">
								<?php $_smarty_tpl->_capture_stack[0][] = array("txtAutoRelease", "txtAutoRelease", null); ob_start(); ?>
									<input type='number' max='99' min='0' id='autoReleaseMinutes'
										   class='minutes form-control inline' <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0][0]->GetFormName(array('key'=>'AUTO_RELEASE_MINUTES'),$_smarty_tpl);?>
 />
								<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
								<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'AutoReleaseNotification','args'=>$_smarty_tpl->tpl_vars['txtAutoRelease']->value),$_smarty_tpl);?>

							</div>
						</div>
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

	<div id="statusDialog" class="hide">
		<form class="statusForm" method="post" ajaxAction="<?php echo ManageResourcesActions::ActionChangeStatus;?>
">
			<div class="control-group form-group">
				<div class="form-group">
					<label><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Status'),$_smarty_tpl);?>

						<select <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0][0]->GetFormName(array('key'=>'RESOURCE_STATUS_ID'),$_smarty_tpl);?>
 class="statusId form-control">
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
					</label>
				</div>

				<div class="form-group no-show newStatusReason">
					<label>Reason text
						<a href="#" class="pull-right addStatusReason"><span
									class="addStatusIcon fa fa-list-alt icon add"></span></a>
						<input type="text"
							   class="form-control resourceStatusReason" <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0][0]->GetFormName(array('key'=>'RESOURCE_STATUS_REASON'),$_smarty_tpl);?>
 />
					</label>
				</div>
				<div class="form-group existingStatusReason">
					<label>
						<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Reason'),$_smarty_tpl);?>

						<a href="#" class="pull-right addStatusReason"><span
									class="addStatusIcon fa fa-plus icon add"></span></a>
						<select <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0][0]->GetFormName(array('key'=>'RESOURCE_STATUS_REASON_ID'),$_smarty_tpl);?>
 class="form-control reasonId"></select>
					</label>
				</div>

			</div>
			<div class="editable-buttons">
				<button type="button" class="btn btn-primary btn-sm editable-submit save"><i
							class="glyphicon glyphicon-ok"></i></button>
				<button type="button" class="btn btn-default btn-sm editable-cancel"><i
							class="glyphicon glyphicon-remove"></i></button>
				<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['indicator'][0][0]->DisplayIndicator(array(),$_smarty_tpl);?>

			</div>
		</form>
	</div>

	<div id="deletePrompt" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="deleteResourceDialogLabel"
		 aria-hidden="true">
		<form id="deleteForm" method="post" ajaxAction="<?php echo ManageResourcesActions::ActionDelete;?>
">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						<h4 class="modal-title" id="deleteResourceDialogLabel"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Delete'),$_smarty_tpl);?>
</h4>
					</div>
					<div class="modal-body">
						<div class="alert alert-warning">
							<div><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'DeleteWarning'),$_smarty_tpl);?>
</div>
							<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'DeleteResourceWarning'),$_smarty_tpl);?>
:
							<ul>
								<li><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'DeleteResourceWarningReservations'),$_smarty_tpl);?>
</li>
								<li><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'DeleteResourceWarningPermissions'),$_smarty_tpl);?>
</li>
							</ul>

							<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'DeleteResourceWarningReassign'),$_smarty_tpl);?>

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

	<div id="bulkUpdateDialog" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="bulkUpdateLabel"
		 aria-hidden="true">
		<form id="bulkUpdateForm" method="post" ajaxAction="<?php echo ManageResourcesActions::ActionBulkUpdate;?>
"
			  class="form-vertical"
			  role="form">
			<div class="modal-dialog modal-lg">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						<h4 class="modal-title" id="bulkUpdateLabel"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'BulkResourceUpdate'),$_smarty_tpl);?>
</h4>
					</div>
					<div class="modal-body">
						<div id="bulkUpdateErrors" class="error no-show">
							<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['async_validator'][0][0]->AsyncValidator(array('id'=>"bulkAttributeValidator",'key'=>''),$_smarty_tpl);?>

						</div>
						<div><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Select'),$_smarty_tpl);?>

							<a href="#" id="checkAllResources"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'All'),$_smarty_tpl);?>
</a> |
							<a href="#" id="checkNoResources"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'None'),$_smarty_tpl);?>
</a>
						</div>
						<div id="bulkUpdateList"></div>
						<div>
							<div class="title"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Common'),$_smarty_tpl);?>
</div>
							<div class="form-group">
								<label for="bulkEditSchedule" class="control-label"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'MoveToSchedule'),$_smarty_tpl);?>

									:</label>
								<select id="bulkEditSchedule" class="form-control" <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0][0]->GetFormName(array('key'=>'SCHEDULE_ID'),$_smarty_tpl);?>
>
									<option value="-1"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Unchanged'),$_smarty_tpl);?>
</option>
									<?php  $_smarty_tpl->tpl_vars['scheduleName'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['scheduleName']->_loop = false;
 $_smarty_tpl->tpl_vars['scheduleId'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['Schedules']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['scheduleName']->key => $_smarty_tpl->tpl_vars['scheduleName']->value) {
$_smarty_tpl->tpl_vars['scheduleName']->_loop = true;
 $_smarty_tpl->tpl_vars['scheduleId']->value = $_smarty_tpl->tpl_vars['scheduleName']->key;
?>
										<option value="<?php echo $_smarty_tpl->tpl_vars['scheduleId']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['scheduleName']->value;?>
</option>
									<?php } ?>
								</select>
							</div>
							<div class="form-group">
								<label for="bulkEditResourceType" class="control-label"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'ResourceType'),$_smarty_tpl);?>

									:</label>
								<select id="bulkEditResourceType" class="form-control" <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0][0]->GetFormName(array('key'=>'RESOURCE_TYPE_ID'),$_smarty_tpl);?>
>
									<option value="-1"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Unchanged'),$_smarty_tpl);?>
</option>
									<option value="">-- <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'None'),$_smarty_tpl);?>
 --</option>
									<?php  $_smarty_tpl->tpl_vars['resourceType'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['resourceType']->_loop = false;
 $_smarty_tpl->tpl_vars['id'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['ResourceTypes']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['resourceType']->key => $_smarty_tpl->tpl_vars['resourceType']->value) {
$_smarty_tpl->tpl_vars['resourceType']->_loop = true;
 $_smarty_tpl->tpl_vars['id']->value = $_smarty_tpl->tpl_vars['resourceType']->key;
?>
										<option value="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['resourceType']->value->Name();?>
</option>
									<?php } ?>
								</select>
							</div>
							<div class="form-group">
								<label for="bulkEditLocation" class="control-label"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Location'),$_smarty_tpl);?>
:</label>
								<input id="bulkEditLocation" type="text" class="form-control"
									   maxlength="85" <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0][0]->GetFormName(array('key'=>'RESOURCE_LOCATION'),$_smarty_tpl);?>
 />
							</div>
							<div class="form-group">
								<label for="bulkEditContact" class="control-label"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Contact'),$_smarty_tpl);?>
:</label>
								<input id="bulkEditContact" type="text" class="form-control"
									   maxlength="85" <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0][0]->GetFormName(array('key'=>'RESOURCE_CONTACT'),$_smarty_tpl);?>
 />
							</div>
							<div class="form-group">
								<label for="bulkEditAdminGroupId"
									   class="control-label"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'ResourceAdministrator'),$_smarty_tpl);?>
:</label>
								<select id="bulkEditAdminGroupId" <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0][0]->GetFormName(array('key'=>'RESOURCE_ADMIN_GROUP_ID'),$_smarty_tpl);?>

										class="form-control">
									<option value="-1"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Unchanged'),$_smarty_tpl);?>
</option>
									<option value="">-- <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'None'),$_smarty_tpl);?>
 --</option>
									<?php  $_smarty_tpl->tpl_vars['adminGroup'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['adminGroup']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['AdminGroups']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['adminGroup']->key => $_smarty_tpl->tpl_vars['adminGroup']->value) {
$_smarty_tpl->tpl_vars['adminGroup']->_loop = true;
?>
										<option value="<?php echo $_smarty_tpl->tpl_vars['adminGroup']->value->Id;?>
"><?php echo $_smarty_tpl->tpl_vars['adminGroup']->value->Name;?>
</option>
									<?php } ?>
								</select>
							</div>
							<div class="form-group">
								<label for="bulkEditStatusId" class="control-label"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Status'),$_smarty_tpl);?>
:</label>
								<select id="bulkEditStatusId" <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0][0]->GetFormName(array('key'=>'RESOURCE_STATUS_ID'),$_smarty_tpl);?>
 class="form-control">
									<option value="-1"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Unchanged'),$_smarty_tpl);?>
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
							<div class="form-group">
								<label for="bulkEditStatusReasonId" class="control-label"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Reason'),$_smarty_tpl);?>

									:</label>
								<select id="bulkEditStatusReasonId" <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0][0]->GetFormName(array('key'=>'RESOURCE_STATUS_REASON_ID'),$_smarty_tpl);?>

										class="form-control">
								</select>
							</div>
						</div>
						<div>
							<div class="form-group">
								<label for="bulkEditDescription" class="control-label"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Description'),$_smarty_tpl);?>

									:</label>
								<textarea id="bulkEditDescription"
										  class="form-control" <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0][0]->GetFormName(array('key'=>'RESOURCE_DESCRIPTION'),$_smarty_tpl);?>
></textarea>
							</div>
							<div class="form-group">
								<label for="bulkEditNotes" class="control-label"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Notes'),$_smarty_tpl);?>
:</label>
								<textarea id="bulkEditNotes"
										  class="form-control" <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0][0]->GetFormName(array('key'=>'RESOURCE_NOTES'),$_smarty_tpl);?>
></textarea>
							</div>
						</div>

						<div class="title"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Duration'),$_smarty_tpl);?>
</div>
						<div>
							<div class="form-group">
								<div class="checkbox">
									<input type="checkbox" id="bulkEditNoMinimumDuration"
										   value="1" <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0][0]->GetFormName(array('key'=>'MIN_DURATION_NONE'),$_smarty_tpl);?>

										   data-related-inputs="#bulkMinDuration"/>
									<label for="bulkEditNoMinimumDuration"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'ResourceMinLengthNone'),$_smarty_tpl);?>
</label>
								</div>

								<?php $_smarty_tpl->_capture_stack[0][] = array("txtMinDuration", "txtMinDuration", null); ob_start(); ?>
									<input type='text' id='bulkEditMinDurationDays' size='3' class='days form-control inline'
										   maxlength='3' placeholder='<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'days'),$_smarty_tpl);?>
'/>
									<input type='text' id='bulkEditMinDurationHours' size='2' class='hours form-control inline'
										   maxlength='2' placeholder='<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'hours'),$_smarty_tpl);?>
'/>
									<input type='text' id='bulkEditMinDurationMinutes' size='2'
										   class='minutes form-control inline'
										   maxlength='2' placeholder='<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'minutes'),$_smarty_tpl);?>
'/>
									<input type='hidden' id='bulkEditMinDuration'
										   class='interval' <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0][0]->GetFormName(array('key'=>'MIN_DURATION'),$_smarty_tpl);?>
 />
								<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
								<div id="bulkMinDuration"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'ResourceMinLength','args'=>$_smarty_tpl->tpl_vars['txtMinDuration']->value),$_smarty_tpl);?>
</div>
							</div>
							<div class="form-group">
								<div class="checkbox">
									<input type="checkbox" id="bulkEditNoMaximumDuration"
										   value="1" <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0][0]->GetFormName(array('key'=>'MAX_DURATION_NONE'),$_smarty_tpl);?>

										   data-related-inputs="#bulkMaxDuration"/>
									<label for="bulkEditNoMaximumDuration"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'ResourceMaxLengthNone'),$_smarty_tpl);?>
</label>
								</div>

								<?php $_smarty_tpl->_capture_stack[0][] = array("txtMaxDuration", "txtMaxDuration", null); ob_start(); ?>
									<input type='text' id='bulkEditMaxDurationDays' size='3'
										   class='days form-control inline'
										   maxlength='3' placeholder='<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'days'),$_smarty_tpl);?>
'/>
									<input type='text' id='bulkEditMaxDurationHours' size='2'
										   class='hours form-control inline'
										   maxlength='2' placeholder='<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'hours'),$_smarty_tpl);?>
'/>
									<input type='text' id='bulkEditMaxDurationMinutes' size='2'
										   class='minutes form-control inline'
										   maxlength='2' placeholder='<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'minutes'),$_smarty_tpl);?>
'/>
									<input type='hidden' id='bulkEditMaxDuration'
										   class='interval' <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0][0]->GetFormName(array('key'=>'MAX_DURATION'),$_smarty_tpl);?>
 />
								<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
								<div id="bulkMaxDuration"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'ResourceMaxLength','args'=>$_smarty_tpl->tpl_vars['txtMaxDuration']->value),$_smarty_tpl);?>
</div>

							</div>
							<div class="form-group">
								<div class="checkbox">
									<input type="checkbox" id="bulkEditNoBufferTime"
										   value="1" <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0][0]->GetFormName(array('key'=>'BUFFER_TIME_NONE'),$_smarty_tpl);?>

										   data-related-inputs="#bulkBufferTime"/>
									<label for="bulkEditNoBufferTime"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'ResourceBufferTimeNone'),$_smarty_tpl);?>
</label>
								</div>

								<?php $_smarty_tpl->_capture_stack[0][] = array("txtBufferTime", "txtBufferTime", null); ob_start(); ?>
									<input type='text' id='bulkEditBufferTimeDays' size='3' class='days form-control inline'
										   maxlength='3' placeholder='<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'days'),$_smarty_tpl);?>
'/>
									<input type='text' id='bulkEditBufferTimeHours' size='2' class='hours form-control inline'
										   maxlength='2' placeholder='<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'hours'),$_smarty_tpl);?>
'/>
									<input type='text' id='bulkEditBufferTimeMinutes' size='2'
										   class='minutes form-control inline'
										   maxlength='2' placeholder='<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'minutes'),$_smarty_tpl);?>
'/>
									<input type='hidden' id='bulkEditBufferTime'
										   class='interval' <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0][0]->GetFormName(array('key'=>'BUFFER_TIME'),$_smarty_tpl);?>
 />
								<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
								<div id="bulkBufferTime">
									<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'ResourceBufferTime','args'=>$_smarty_tpl->tpl_vars['txtBufferTime']->value),$_smarty_tpl);?>

								</div>

							</div>
						</div>

						<div class="title"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Access'),$_smarty_tpl);?>
</div>
						<div>
							<div class="form-group">
								<div class="checkbox">
									<input type="checkbox" id="bulkEditNoStartNotice"
										   value="1" <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0][0]->GetFormName(array('key'=>'MIN_NOTICE_NONE'),$_smarty_tpl);?>

										   data-related-inputs="#bulkStartNoticeInputs"/>
									<label for="bulkEditNoStartNotice"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'ResourceMinNoticeNone'),$_smarty_tpl);?>
</label>
								</div>


								<?php $_smarty_tpl->_capture_stack[0][] = array("txtStartNotice", "txtStartNotice", null); ob_start(); ?>
									<input type='text' id='bulkEditStartNoticeDays' size='3' class='days form-control inline'
										   maxlength='3' placeholder='<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'days'),$_smarty_tpl);?>
'/>
									<input type='text' id='bulkEditStartNoticeHours' size='2' class='hours form-control inline'
										   maxlength='2' placeholder='<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'hours'),$_smarty_tpl);?>
'/>
									<input type='text' id='bulkEditStartNoticeMinutes' size='2'
										   class='minutes form-control inline'
										   maxlength='2' placeholder='<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'minutes'),$_smarty_tpl);?>
'/>
									<input type='hidden' id='bulkEditStartNotice'
										   class='interval' <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0][0]->GetFormName(array('key'=>'MIN_NOTICE'),$_smarty_tpl);?>
 />
								<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
								<div id='bulkStartNoticeInputs'>
									<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'ResourceMinNotice','args'=>$_smarty_tpl->tpl_vars['txtStartNotice']->value),$_smarty_tpl);?>

								</div>
							</div>
							<div class="form-group">
								<div class="checkbox">
									<input type="checkbox" id="bulkEditNoEndNotice"
										   value="1" <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0][0]->GetFormName(array('key'=>'MAX_NOTICE_NONE'),$_smarty_tpl);?>

										   data-related-inputs="#bulkEndNotice"/>
									<label for="bulkEditNoEndNotice"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'ResourceMaxNoticeNone'),$_smarty_tpl);?>
</label>
								</div>


								<?php $_smarty_tpl->_capture_stack[0][] = array("txtEndNotice", "txtEndNotice", null); ob_start(); ?>
									<input type='text' id='bulkEditEndNoticeDays' size='3' class='days form-control inline'
										   maxlength='3' placeholder='<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'days'),$_smarty_tpl);?>
'/>
									<input type='text' id='bulkEditEndNoticeHours' size='2' class='hours form-control inline'
										   maxlength='2' placeholder='<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'hours'),$_smarty_tpl);?>
'/>
									<input type='text' id='bulkEditEndNoticeMinutes' size='2'
										   class='minutes form-control inline'
										   maxlength='2' placeholder='<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'minutes'),$_smarty_tpl);?>
'/>
									<input type='hidden' id='bulkEditEndNotice'
										   class='interval' <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0][0]->GetFormName(array('key'=>'MAX_NOTICE'),$_smarty_tpl);?>
 />
								<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
								<div id="bulkEndNotice"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'ResourceMaxNotice','args'=>$_smarty_tpl->tpl_vars['txtEndNotice']->value),$_smarty_tpl);?>
</div>
							</div>
						</div>

						<div class="form-group">
							<label for="bulkEditAllowMultiday"
								   class="control-label"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'ResourceAllowMultiDay'),$_smarty_tpl);?>
</label>
							<select id="bulkEditAllowMultiday" class="form-control" <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0][0]->GetFormName(array('key'=>'ALLOW_MULTIDAY'),$_smarty_tpl);?>
>
								<?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['YesNoUnchangedOptions']->value),$_smarty_tpl);?>

							</select>
						</div>

						<div class="form-group">
							<label for="bulkEditRequiresApproval"
								   class="control-label"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'ResourceRequiresApproval'),$_smarty_tpl);?>
</label>
							<select id="bulkEditRequiresApproval"
									class="form-control input-sm" <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0][0]->GetFormName(array('key'=>'REQUIRES_APPROVAL'),$_smarty_tpl);?>
>
								<?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['YesNoUnchangedOptions']->value),$_smarty_tpl);?>

							</select>
						</div>

						<div class="form-group">
							<label for="bulkEditAutoAssign"
								   class="control-label"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'ResourcePermissionAutoGranted'),$_smarty_tpl);?>
</label>
							<select id="bulkEditAutoAssign" class="form-control" <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0][0]->GetFormName(array('key'=>'AUTO_ASSIGN'),$_smarty_tpl);?>
>
								<?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['YesNoUnchangedOptions']->value),$_smarty_tpl);?>

							</select>
						</div>

						<div class="form-group">
							<label for="bulkEditEnableCheckIn" class="control-label"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'RequiresCheckInNotification'),$_smarty_tpl);?>
</label>
							<select id="bulkEditEnableCheckIn" class="form-control" <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0][0]->GetFormName(array('key'=>'ENABLE_CHECK_IN'),$_smarty_tpl);?>
>
								<?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['YesNoUnchangedOptions']->value),$_smarty_tpl);?>

							</select>
							<div class="no-show" id="bulkUpdateAutoReleaseMinutesDiv">
								<?php $_smarty_tpl->_capture_stack[0][] = array("bulkEditTxtAutoRelease", "bulkEditTxtAutoRelease", null); ob_start(); ?>
									<input type='number' max='99' min='0' id='bulkEditAutoReleaseMinutes'
										   class='minutes form-control inline' <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0][0]->GetFormName(array('key'=>'AUTO_RELEASE_MINUTES'),$_smarty_tpl);?>
 />
								<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
								<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'AutoReleaseNotification','args'=>$_smarty_tpl->tpl_vars['txtAutoRelease']->value),$_smarty_tpl);?>

							</div>
						</div>

						<div class="form-group">
							<label for="bulkEditAllowSubscriptions"
								   class="control-label"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'TurnOnSubscription'),$_smarty_tpl);?>
</label>
							<select id="bulkEditAllowSubscriptions"
									class="form-control" <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0][0]->GetFormName(array('key'=>'ALLOW_CALENDAR_SUBSCRIPTIONS'),$_smarty_tpl);?>
>
								<?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['YesNoUnchangedOptions']->value),$_smarty_tpl);?>

							</select>
						</div>

						<div class="title"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Credits'),$_smarty_tpl);?>
</div>

						<div class="form-group">
							<?php $_smarty_tpl->_capture_stack[0][] = array("bulkEditCreditsPerSLot", "bulkEditCreditsPerSLot", null); ob_start(); ?>
								<input type='number' min='0' step='1' id='bulkEditCreditsPerSlot'
									   class='credits form-control inline' <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0][0]->GetFormName(array('key'=>'CREDITS'),$_smarty_tpl);?>
 />
							<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
							<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'CreditUsagePerSlot','args'=>$_smarty_tpl->tpl_vars['bulkEditCreditsPerSLot']->value),$_smarty_tpl);?>

						</div>

						<div class="form-group">
							<?php $_smarty_tpl->_capture_stack[0][] = array("bulkEditPeakCreditsPerSlot", "bulkEditPeakCreditsPerSlot", null); ob_start(); ?>
								<input type='number' min='0' step='1' id='bulkEditPeakCreditsPerSlot'
									   class='credits form-control inline' <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0][0]->GetFormName(array('key'=>'PEAK_CREDITS'),$_smarty_tpl);?>
 />
							<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
							<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'PeakCreditUsagePerSlot','args'=>$_smarty_tpl->tpl_vars['bulkEditPeakCreditsPerSlot']->value),$_smarty_tpl);?>

						</div>

						<div class="title"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'AdditionalAttributes'),$_smarty_tpl);?>
</div>
						<div>
							<?php  $_smarty_tpl->tpl_vars['attribute'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['attribute']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['AttributeFilters']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['attribute']->key => $_smarty_tpl->tpl_vars['attribute']->value) {
$_smarty_tpl->tpl_vars['attribute']->_loop = true;
?>
								<?php if (!$_smarty_tpl->tpl_vars['attribute']->value->UniquePerEntity()) {?>
									<div class="customAttribute">
										<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['control'][0][0]->DisplayControl(array('type'=>"AttributeControl",'attribute'=>$_smarty_tpl->tpl_vars['attribute']->value,'searchmode'=>true),$_smarty_tpl);?>

									</div>
								<?php }?>
							<?php } ?>
						</div>
					</div>
					<div class="modal-footer">
						<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['cancel_button'][0][0]->CancelButton(array(),$_smarty_tpl);?>

						<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['update_button'][0][0]->UpdateButton(array(),$_smarty_tpl);?>

						<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['indicator'][0][0]->DisplayIndicator(array(),$_smarty_tpl);?>

					</div>
				</div>
			</div>
			<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['csrf_token'][0][0]->CSRFToken(array(),$_smarty_tpl);?>

		</form>
	</div>

	<div id="userDialog" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="userPermissionDialogLabel"
		 aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					<h4 class="modal-title" id="userPermissionDialogLabel"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Users'),$_smarty_tpl);?>
</h4>
				</div>
				<div class="modal-body">
					<div class="form-group">
						<label for="userSearch"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'AddUser'),$_smarty_tpl);?>
</label> <a href="#"
																				   id="browseUsers"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Browse'),$_smarty_tpl);?>
</a>
						<input type="text" id="userSearch" class="form-control" size="60"/>

					</div>

					<h4><span id="totalUsers"></span> <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Users'),$_smarty_tpl);?>
</h4>

					<div id="resourceUserList"></div>
				</div>
			</div>
		</div>
	</div>

	<div id="allUsers" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="browseUsersDialogLabel"
		 aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					<h4 class="modal-title" id="browseUsersDialogLabel"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'AllUsers'),$_smarty_tpl);?>
</h4>
				</div>
				<div class="modal-body">
					<div id="allUsersList"></div>
				</div>
			</div>
		</div>
	</div>

	<form id="removeUserForm" method="post" ajaxAction="<?php echo ManageResourcesActions::ActionRemoveUserPermission;?>
">
		<input type="hidden" id="removeUserId" <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0][0]->GetFormName(array('key'=>'USER_ID'),$_smarty_tpl);?>
 />
	</form>

	<form id="addUserForm" method="post" ajaxAction="<?php echo ManageResourcesActions::ActionAddUserPermission;?>
">
		<input type="hidden" id="addUserId" <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0][0]->GetFormName(array('key'=>'USER_ID'),$_smarty_tpl);?>
 />
	</form>

	<div id="groupDialog" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="browseGroupsDialogLabel"
		 aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					<h4 class="modal-title" id="browseGroupsDialogLabel"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'AllGroups'),$_smarty_tpl);?>
</h4>
				</div>
				<div class="modal-body">
					<div class="form-group">
						<label for="groupSearch"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'AddGroup'),$_smarty_tpl);?>
</label> <a href="#"
																					 id="browseGroups"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'AllGroups'),$_smarty_tpl);?>
</a>
						<input type="text" id="groupSearch" class="form-control" size="60"/>
					</div>

					<h4><span id="totalGroups"></span> <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Groups'),$_smarty_tpl);?>
</h4>

					<div id="resourceGroupList"></div>
				</div>
			</div>
		</div>
	</div>

	<div id="allGroups" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="groupPermissionDialogLabel"
		 aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					<h4 class="modal-title" id="groupPermissionDialogLabel"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Groups'),$_smarty_tpl);?>
</h4>
				</div>
				<div class="modal-body">
					<div id="allGroupsList"></div>
				</div>
			</div>
		</div>
	</div>

	<form id="removeGroupForm" method="post" ajaxAction="<?php echo ManageResourcesActions::ActionRemoveGroupPermission;?>
">
		<input type="hidden" id="removeGroupId" <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0][0]->GetFormName(array('key'=>'GROUP_ID'),$_smarty_tpl);?>
 />
	</form>

	<form id="addGroupForm" method="post" ajaxAction="<?php echo ManageResourcesActions::ActionAddGroupPermission;?>
">
		<input type="hidden" id="addGroupId" <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0][0]->GetFormName(array('key'=>'GROUP_ID'),$_smarty_tpl);?>
 />
	</form>

	<div class="modal fade" id="resourceGroupDialog" tabindex="-1" role="dialog"
		 aria-labelledby="resourceGroupsModalLabel"
		 aria-hidden="true">
		<form id="resourceGroupForm" method="post" ajaxAction="<?php echo ManageResourcesActions::ActionChangeResourceGroups;?>
">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						<h4 class="modal-title" id="resourceGroupsModalLabel"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'ResourceGroups'),$_smarty_tpl);?>
</h4>
					</div>
					<div class="modal-body">
						<div id="resourceGroups"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'None'),$_smarty_tpl);?>
</div>
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

	<form id="colorForm" method="post" ajaxAction="<?php echo ManageResourcesActions::ActionChangeColor;?>
">
		<input type="hidden" id="reservationColor" <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0][0]->GetFormName(array('key'=>'RESERVATION_COLOR'),$_smarty_tpl);?>
 />
	</form>

	<div id="creditsDialog" class="modal" tabindex="-1" role="dialog" aria-labelledby="creditsModalLabel"
		 aria-hidden="true">
		<form id="creditsForm" method="post" role="form" ajaxAction="<?php echo ManageResourcesActions::ActionChangeCredits;?>
">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						<h4 class="modal-title" id="creditsModalLabel"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Credits'),$_smarty_tpl);?>
</h4>
					</div>
					<div class="modal-body">
						<div>
							<?php $_smarty_tpl->_capture_stack[0][] = array("creditsPerSLot", "creditsPerSLot", null); ob_start(); ?>
								<input type='number' min='0' step='1' id='creditsPerSlot'
									   class='credits form-control inline' <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0][0]->GetFormName(array('key'=>'CREDITS'),$_smarty_tpl);?>
 />
							<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
							<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'CreditUsagePerSlot','args'=>$_smarty_tpl->tpl_vars['creditsPerSLot']->value),$_smarty_tpl);?>

						</div>

						<div>
							<?php $_smarty_tpl->_capture_stack[0][] = array("peakCreditsPerSlot", "peakCreditsPerSlot", null); ob_start(); ?>
								<input type='number' min='0' step='1' id='peakCreditsPerSlot'
									   class='credits form-control inline' <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0][0]->GetFormName(array('key'=>'PEAK_CREDITS'),$_smarty_tpl);?>
 />
							<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
							<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'PeakCreditUsagePerSlot','args'=>$_smarty_tpl->tpl_vars['peakCreditsPerSlot']->value),$_smarty_tpl);?>

						</div>
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

	<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['csrf_token'][0][0]->CSRFToken(array(),$_smarty_tpl);?>


	<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['jsfile'][0][0]->IncludeJavascriptFile(array('src'=>"ajax-helpers.js"),$_smarty_tpl);?>

	<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['jsfile'][0][0]->IncludeJavascriptFile(array('src'=>"autocomplete.js"),$_smarty_tpl);?>

	<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['jsfile'][0][0]->IncludeJavascriptFile(array('src'=>"js/tree.jquery.js"),$_smarty_tpl);?>

	<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['jsfile'][0][0]->IncludeJavascriptFile(array('src'=>"admin/resource.js"),$_smarty_tpl);?>


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
				container: 'body', html: true, placement: 'top', content: function () {
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

			$('.resourceName').editable({
				url: updateUrl + '<?php echo ManageResourcesActions::ActionRename;?>
', validate: function (value) {
					if ($.trim(value) == '')
					{
						return '<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'RequiredValue'),$_smarty_tpl);?>
';
					}
				}
			});

			$('.scheduleName').editable({
				url: updateUrl + '<?php echo ManageResourcesActions::ActionChangeSchedule;?>
', source: [
					<?php  $_smarty_tpl->tpl_vars['scheduleName'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['scheduleName']->_loop = false;
 $_smarty_tpl->tpl_vars['scheduleId'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['Schedules']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['scheduleName']->key => $_smarty_tpl->tpl_vars['scheduleName']->value) {
$_smarty_tpl->tpl_vars['scheduleName']->_loop = true;
 $_smarty_tpl->tpl_vars['scheduleId']->value = $_smarty_tpl->tpl_vars['scheduleName']->key;
?>
					{
						value:<?php echo $_smarty_tpl->tpl_vars['scheduleId']->value;?>
, text: '<?php echo strtr($_smarty_tpl->tpl_vars['scheduleName']->value, array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
'
					},
					<?php } ?>
				]
			});

			$('.resourceTypeName').editable({
				url: updateUrl + '<?php echo ManageResourcesActions::ActionChangeResourceType;?>
',
				emptytext: '<?php ob_start();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'NoResourceTypeLabel'),$_smarty_tpl);?>
<?php $_tmp1=ob_get_clean();?><?php echo strtr($_tmp1, array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
',
				source: [{
					value: '0', text: '' //'-- <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'None'),$_smarty_tpl);?>
 --'
				},
					<?php  $_smarty_tpl->tpl_vars['resourceType'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['resourceType']->_loop = false;
 $_smarty_tpl->tpl_vars['id'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['ResourceTypes']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['resourceType']->key => $_smarty_tpl->tpl_vars['resourceType']->value) {
$_smarty_tpl->tpl_vars['resourceType']->_loop = true;
 $_smarty_tpl->tpl_vars['id']->value = $_smarty_tpl->tpl_vars['resourceType']->key;
?>
					{
						value:<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
, text: '<?php echo strtr($_smarty_tpl->tpl_vars['resourceType']->value->Name(), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
'
					},
					<?php } ?>
				]
			});

			$('.sortOrderValue').editable({
				url: updateUrl + '<?php echo ManageResourcesActions::ActionChangeSort;?>
', emptytext: '0', min: 0, max: 999
			});

			$('.locationValue').editable({
				url: updateUrl + '<?php echo ManageResourcesActions::ActionChangeLocation;?>
', emptytext: '<?php ob_start();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'NoLocationLabel'),$_smarty_tpl);?>
<?php $_tmp2=ob_get_clean();?><?php echo strtr($_tmp2, array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
'
			});

			$('.contactValue').editable({
				url: updateUrl + '<?php echo ManageResourcesActions::ActionChangeContact;?>
', emptytext: '<?php ob_start();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'NoContactLabel'),$_smarty_tpl);?>
<?php $_tmp3=ob_get_clean();?><?php echo strtr($_tmp3, array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
}'
			});

			$('.descriptionValue').editable({
				url: updateUrl + '<?php echo ManageResourcesActions::ActionChangeDescription;?>
', emptytext: '<?php ob_start();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'NoDescriptionLabel'),$_smarty_tpl);?>
<?php $_tmp4=ob_get_clean();?><?php echo strtr($_tmp4, array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
'
			});

			$('.notesValue').editable({
				url: updateUrl + '<?php echo ManageResourcesActions::ActionChangeNotes;?>
', emptytext: '<?php ob_start();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'NoDescriptionLabel'),$_smarty_tpl);?>
<?php $_tmp5=ob_get_clean();?><?php echo strtr($_tmp5, array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
'
			});

			$('.resourceAdminValue').editable({
				url: updateUrl + '<?php echo ManageResourcesActions::ActionChangeAdmin;?>
', emptytext: '<?php ob_start();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'None'),$_smarty_tpl);?>
<?php $_tmp6=ob_get_clean();?><?php echo strtr($_tmp6, array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
', source: [{
					value: '0', text: ''
				},
					<?php  $_smarty_tpl->tpl_vars['group'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['group']->_loop = false;
 $_smarty_tpl->tpl_vars['scheduleId'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['AdminGroups']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['group']->key => $_smarty_tpl->tpl_vars['group']->value) {
$_smarty_tpl->tpl_vars['group']->_loop = true;
 $_smarty_tpl->tpl_vars['scheduleId']->value = $_smarty_tpl->tpl_vars['group']->key;
?>
					{
						value:<?php echo $_smarty_tpl->tpl_vars['group']->value->Id();?>
, text: '<?php echo strtr($_smarty_tpl->tpl_vars['group']->value->Name(), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
'
					},
					<?php } ?>
				]
			});

			$('.inlineAttribute').editable({
				url: updateUrl + '<?php echo ManageResourcesActions::ActionChangeAttribute;?>
', emptytext: '-'
			});

		}

		$(document).ready(function () {
			setUpPopovers();
			hidePopoversWhenClickAway();
			setUpEditables();

			var actions = {
				enableSubscription: '<?php echo ManageResourcesActions::ActionEnableSubscription;?>
',
				disableSubscription: '<?php echo ManageResourcesActions::ActionDisableSubscription;?>
',
				removeImage: '<?php echo ManageResourcesActions::ActionRemoveImage;?>
'
			};

			var opts = {
				submitUrl: '<?php echo $_SERVER['SCRIPT_NAME'];?>
',
				saveRedirect: '<?php echo $_SERVER['SCRIPT_NAME'];?>
',
				actions: actions,
				userAutocompleteUrl: "../ajax/autocomplete.php?type=<?php echo AutoCompleteType::User;?>
",
				groupAutocompleteUrl: "../ajax/autocomplete.php?type=<?php echo AutoCompleteType::Group;?>
",
				permissionsUrl: '<?php echo $_SERVER['SCRIPT_NAME'];?>
',
				copyText: '<?php ob_start();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Copy'),$_smarty_tpl);?>
<?php $_tmp7=ob_get_clean();?><?php echo strtr($_tmp7, array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
'
			};

			var resourceManagement = new ResourceManagement(opts);

			<?php  $_smarty_tpl->tpl_vars['resource'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['resource']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['Resources']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['resource']->key => $_smarty_tpl->tpl_vars['resource']->value) {
$_smarty_tpl->tpl_vars['resource']->_loop = true;
?>
			var resource = {
				id: '<?php echo $_smarty_tpl->tpl_vars['resource']->value->GetResourceId();?>
',
				name: "<?php echo strtr($_smarty_tpl->tpl_vars['resource']->value->GetName(), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
",
				location: "<?php echo strtr($_smarty_tpl->tpl_vars['resource']->value->GetLocation(), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
",
				contact: "<?php echo strtr($_smarty_tpl->tpl_vars['resource']->value->GetContact(), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
",
				description: "<?php echo strtr($_smarty_tpl->tpl_vars['resource']->value->GetDescription(), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
",
				notes: "<?php echo strtr($_smarty_tpl->tpl_vars['resource']->value->GetNotes(), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
",
				autoAssign: '<?php echo $_smarty_tpl->tpl_vars['resource']->value->GetAutoAssign();?>
',
				requiresApproval: '<?php echo $_smarty_tpl->tpl_vars['resource']->value->GetRequiresApproval();?>
',
				allowMultiday: '<?php echo $_smarty_tpl->tpl_vars['resource']->value->GetAllowMultiday();?>
',
				maxParticipants: '<?php echo $_smarty_tpl->tpl_vars['resource']->value->GetMaxParticipants();?>
',
				scheduleId: '<?php echo $_smarty_tpl->tpl_vars['resource']->value->GetScheduleId();?>
',
				minLength: {},
				maxLength: {},
				startNotice: {},
				endNotice: {},
				bufferTime: {},
				adminGroupId: '<?php echo $_smarty_tpl->tpl_vars['resource']->value->GetAdminGroupId();?>
',
				sortOrder: '<?php echo $_smarty_tpl->tpl_vars['resource']->value->GetSortOrder();?>
',
				resourceTypeId: '<?php echo $_smarty_tpl->tpl_vars['resource']->value->GetResourceTypeId();?>
',
				statusId: '<?php echo $_smarty_tpl->tpl_vars['resource']->value->GetStatusId();?>
',
				reasonId: '<?php echo $_smarty_tpl->tpl_vars['resource']->value->GetStatusReasonId();?>
',
				allowSubscription: '<?php echo $_smarty_tpl->tpl_vars['resource']->value->GetIsCalendarSubscriptionAllowed();?>
',
				enableCheckin: '<?php echo $_smarty_tpl->tpl_vars['resource']->value->IsCheckInEnabled();?>
',
				autoReleaseMinutes: '<?php echo $_smarty_tpl->tpl_vars['resource']->value->GetAutoReleaseMinutes();?>
',
				credits: '<?php echo $_smarty_tpl->tpl_vars['resource']->value->GetCreditsPerSlot();?>
',
				peakCredits: '<?php echo $_smarty_tpl->tpl_vars['resource']->value->GetPeakCreditsPerSlot();?>
'
			};

			<?php if ($_smarty_tpl->tpl_vars['resource']->value->HasMinLength()) {?>
			resource.minLength = {
				value: '<?php echo $_smarty_tpl->tpl_vars['resource']->value->GetMinLength();?>
',
				days: '<?php echo $_smarty_tpl->tpl_vars['resource']->value->GetMinLength()->Days();?>
',
				hours: '<?php echo $_smarty_tpl->tpl_vars['resource']->value->GetMinLength()->Hours();?>
',
				minutes: '<?php echo $_smarty_tpl->tpl_vars['resource']->value->GetMinLength()->Minutes();?>
'
			};
			<?php }?>

			<?php if ($_smarty_tpl->tpl_vars['resource']->value->HasMaxLength()) {?>
			resource.maxLength = {
				value: '<?php echo $_smarty_tpl->tpl_vars['resource']->value->GetMaxLength();?>
',
				days: '<?php echo $_smarty_tpl->tpl_vars['resource']->value->GetMaxLength()->Days();?>
',
				hours: '<?php echo $_smarty_tpl->tpl_vars['resource']->value->GetMaxLength()->Hours();?>
',
				minutes: '<?php echo $_smarty_tpl->tpl_vars['resource']->value->GetMaxLength()->Minutes();?>
'
			};
			<?php }?>

			<?php if ($_smarty_tpl->tpl_vars['resource']->value->HasMinNotice()) {?>
			resource.startNotice = {
				value: '<?php echo $_smarty_tpl->tpl_vars['resource']->value->GetMinNotice();?>
',
				days: '<?php echo $_smarty_tpl->tpl_vars['resource']->value->GetMinNotice()->Days();?>
',
				hours: '<?php echo $_smarty_tpl->tpl_vars['resource']->value->GetMinNotice()->Hours();?>
',
				minutes: '<?php echo $_smarty_tpl->tpl_vars['resource']->value->GetMinNotice()->Minutes();?>
'
			};
			<?php }?>

			<?php if ($_smarty_tpl->tpl_vars['resource']->value->HasMaxNotice()) {?>
			resource.endNotice = {
				value: '<?php echo $_smarty_tpl->tpl_vars['resource']->value->GetMaxNotice();?>
',
				days: '<?php echo $_smarty_tpl->tpl_vars['resource']->value->GetMaxNotice()->Days();?>
',
				hours: '<?php echo $_smarty_tpl->tpl_vars['resource']->value->GetMaxNotice()->Hours();?>
',
				minutes: '<?php echo $_smarty_tpl->tpl_vars['resource']->value->GetMaxNotice()->Minutes();?>
'
			};
			<?php }?>

			<?php if ($_smarty_tpl->tpl_vars['resource']->value->HasBufferTime()) {?>
			resource.bufferTime = {
				value: '<?php echo $_smarty_tpl->tpl_vars['resource']->value->GetBufferTime();?>
',
				days: '<?php echo $_smarty_tpl->tpl_vars['resource']->value->GetBufferTime()->Days();?>
',
				hours: '<?php echo $_smarty_tpl->tpl_vars['resource']->value->GetBufferTime()->Hours();?>
',
				minutes: '<?php echo $_smarty_tpl->tpl_vars['resource']->value->GetBufferTime()->Minutes();?>
'
			};
			<?php }?>

			resource.resourceGroupIds = [<?php echo join($_smarty_tpl->tpl_vars['resource']->value->GetResourceGroupIds(),',');?>
]

			resourceManagement.add(resource);
			<?php } ?>

			<?php  $_smarty_tpl->tpl_vars['reason'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['reason']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['StatusReasons']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['reason']->key => $_smarty_tpl->tpl_vars['reason']->value) {
$_smarty_tpl->tpl_vars['reason']->_loop = true;
?>
			resourceManagement.addStatusReason('<?php echo $_smarty_tpl->tpl_vars['reason']->value->Id();?>
', '<?php echo $_smarty_tpl->tpl_vars['reason']->value->StatusId();?>
', '<?php echo strtr($_smarty_tpl->tpl_vars['reason']->value->Description(), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
');
			<?php } ?>

			resourceManagement.init();
			resourceManagement.initializeStatusFilter('<?php echo $_smarty_tpl->tpl_vars['ResourceStatusFilterId']->value;?>
', '<?php echo $_smarty_tpl->tpl_vars['ResourceStatusReasonFilterId']->value;?>
');
			resourceManagement.addResourceGroups(<?php echo $_smarty_tpl->tpl_vars['ResourceGroups']->value;?>
);

			$('#filter-resources-panel').showHidePanel();
		});

	</script>
</div>

<?php echo $_smarty_tpl->getSubTemplate ('globalfooter.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }} ?>
