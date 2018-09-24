<?php /* Smarty version Smarty-3.1.16, created on 2017-02-25 14:18:43
         compiled from "/home/vol15_8/byethost8.com/b8_19720712/htdocs/booked/tpl/Admin/manage_announcements.tpl" */ ?>
<?php /*%%SmartyHeaderCode:138104233758b1d893af2543-27519274%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '05be244ba80148c4a20792a0c7f79d90f523ba53' => 
    array (
      0 => '/home/vol15_8/byethost8.com/b8_19720712/htdocs/booked/tpl/Admin/manage_announcements.tpl',
      1 => 1487738749,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '138104233758b1d893af2543-27519274',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'Groups' => 0,
    'group' => 0,
    'Resources' => 0,
    'resource' => 0,
    'announcements' => 0,
    'rowCss' => 0,
    'announcement' => 0,
    'timezone' => 0,
    'groupId' => 0,
    'resourceId' => 0,
    'id' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_58b1d893cbf3b7_63333814',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58b1d893cbf3b7_63333814')) {function content_58b1d893cbf3b7_63333814($_smarty_tpl) {?><?php if (!is_callable('smarty_function_cycle')) include '/home/vol15_8/byethost8.com/b8_19720712/htdocs/booked/lib/Common/../../lib/external/Smarty/plugins/function.cycle.php';
if (!is_callable('smarty_modifier_regex_replace')) include '/home/vol15_8/byethost8.com/b8_19720712/htdocs/booked/lib/Common/../../lib/external/Smarty/plugins/modifier.regex_replace.php';
?>
<?php echo $_smarty_tpl->getSubTemplate ('globalheader2.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('Select2'=>true), 0);?>


<div id="page-manage-announcements" class="admin-page" style="margin-top: 8rem">
	<h1><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'ManageAnnouncements'),$_smarty_tpl);?>
</h1>

	<form id="addForm" class="form-inline" role="form" method="post">
		<div class="panel panel-default" id="add-announcement-panel">
			<div class="panel-heading"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>"AddAnnouncement"),$_smarty_tpl);?>
 <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['showhide_icon'][0][0]->ShowHideIcon(array(),$_smarty_tpl);?>
</div>
			<div class="panel-body add-contents">
				<div id="addResults" class="error no-show"></div>
				<div class="form-group has-feedback">
					<label for="addAnnouncement"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Announcement'),$_smarty_tpl);?>
</label>
					<textarea class="form-control required" rows="1" <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0][0]->GetFormName(array('key'=>'ANNOUNCEMENT_TEXT'),$_smarty_tpl);?>
 id="addAnnouncement"></textarea>
					<i class="glyphicon glyphicon-asterisk form-control-feedback" data-bv-icon-for="addAnnouncement"></i>
				</div>
				<div class="form-group">
					<label for="BeginDate"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'BeginDate'),$_smarty_tpl);?>
</label>
					<input type="text" id="BeginDate" class="form-control" <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0][0]->GetFormName(array('key'=>'ANNOUNCEMENT_START'),$_smarty_tpl);?>
 />
					<input type="hidden" id="formattedBeginDate" <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0][0]->GetFormName(array('key'=>'ANNOUNCEMENT_START'),$_smarty_tpl);?>
 />
				</div>
				<div class="form-group">
					<label for="EndDate"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'EndDate'),$_smarty_tpl);?>
</label>
					<input type="text" id="EndDate" class="form-control" <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0][0]->GetFormName(array('key'=>'ANNOUNCEMENT_END'),$_smarty_tpl);?>
 />
					<input type="hidden" id="formattedEndDate" <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0][0]->GetFormName(array('key'=>'ANNOUNCEMENT_END'),$_smarty_tpl);?>
 />
				</div>
				<div class="form-group">
					<label for="addPriority"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Priority'),$_smarty_tpl);?>
</label>
					<input type="number" min="0" step="1" class="form-control" <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0][0]->GetFormName(array('key'=>'ANNOUNCEMENT_PRIORITY'),$_smarty_tpl);?>
 id="addPriority" />
				</div>
				<div><a href="#" data-toggle="collapse" data-target="#advancedAnnouncementOptions"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'MoreOptions'),$_smarty_tpl);?>
 &raquo;</a></div>
				<div id="advancedAnnouncementOptions" class="collapse">
					<div class="form-group col-xs-12 col-md-6">
						<label for="announcementGroups" class="no-show"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'UsersInGroups'),$_smarty_tpl);?>
</label>
						<select id="announcementGroups" class="form-control" multiple="multiple" style="width:100%" <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0][0]->GetFormName(array('key'=>FormKeys::GROUP_ID,'multi'=>true),$_smarty_tpl);?>
>
							<?php  $_smarty_tpl->tpl_vars['group'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['group']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['Groups']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['group']->key => $_smarty_tpl->tpl_vars['group']->value) {
$_smarty_tpl->tpl_vars['group']->_loop = true;
?>
								<option value="<?php echo $_smarty_tpl->tpl_vars['group']->value->Id;?>
"><?php echo $_smarty_tpl->tpl_vars['group']->value->Name;?>
</option>
							<?php } ?>
						</select>
					</div>
					<div class="form-group col-xs-12 col-md-6">
						<label for="resourceGroups" class="no-show"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'UsersWithAccessToResources'),$_smarty_tpl);?>
</label>
						<select id="resourceGroups" class="form-control" multiple="multiple" style="width:100%" <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0][0]->GetFormName(array('key'=>'RESOURCE_ID','multi'=>true),$_smarty_tpl);?>
>
							<?php  $_smarty_tpl->tpl_vars['resource'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['resource']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['Resources']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['resource']->key => $_smarty_tpl->tpl_vars['resource']->value) {
$_smarty_tpl->tpl_vars['resource']->_loop = true;
?>
								<option value="<?php echo $_smarty_tpl->tpl_vars['resource']->value->GetId();?>
"><?php echo $_smarty_tpl->tpl_vars['resource']->value->GetName();?>
</option>
							<?php } ?>
						</select>
					</div>
					<div class="form-group col-xs-12">
						<div class="checkbox no-padding-left">
							<input type="checkbox" id="sendAsEmail" <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0][0]->GetFormName(array('key'=>FormKeys::SEND_AS_EMAIL),$_smarty_tpl);?>
 />
							<label for="sendAsEmail"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'SendAsEmail'),$_smarty_tpl);?>
</label>
						</div>
					</div>
				</div>
			</div>
			<div class="panel-footer">
			 	<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['add_button'][0][0]->AddButton(array('class'=>"btn-sm"),$_smarty_tpl);?>

				<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['reset_button'][0][0]->ResetButton(array('class'=>"btn-sm"),$_smarty_tpl);?>

				<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['indicator'][0][0]->DisplayIndicator(array(),$_smarty_tpl);?>

			</div>
		</div>
	</form>

	<table class="table" id="announcementList">
		<thead>
		<tr>
			<th><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['sort_column'][0][0]->SortColumn(array('key'=>'Announcement','field'=>ColumnNames::ANNOUNCEMENT_TEXT),$_smarty_tpl);?>
</th>
			<th><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['sort_column'][0][0]->SortColumn(array('key'=>'Priority','field'=>ColumnNames::ANNOUNCEMENT_PRIORITY),$_smarty_tpl);?>
</th>
			<th><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['sort_column'][0][0]->SortColumn(array('key'=>'BeginDate','field'=>ColumnNames::ANNOUNCEMENT_START),$_smarty_tpl);?>
</th>
			<th><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['sort_column'][0][0]->SortColumn(array('key'=>'EndDate','field'=>ColumnNames::ANNOUNCEMENT_END),$_smarty_tpl);?>
</th>
			<th><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Groups'),$_smarty_tpl);?>
</th>
			<th><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Resources'),$_smarty_tpl);?>
</th>
			<th class="action"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Actions'),$_smarty_tpl);?>
</th>
		</tr>
		</thead>
		<tbody>
		<?php  $_smarty_tpl->tpl_vars['announcement'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['announcement']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['announcements']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['announcement']->key => $_smarty_tpl->tpl_vars['announcement']->value) {
$_smarty_tpl->tpl_vars['announcement']->_loop = true;
?>
			<?php echo smarty_function_cycle(array('values'=>'row0,row1','assign'=>'rowCss'),$_smarty_tpl);?>

			<tr class="<?php echo $_smarty_tpl->tpl_vars['rowCss']->value;?>
" data-announcement-id="<?php echo $_smarty_tpl->tpl_vars['announcement']->value->Id();?>
">
				<td class="announcementText"><?php echo nl2br($_smarty_tpl->tpl_vars['announcement']->value->Text());?>
</td>
				<td class="announcementPriority"><?php echo $_smarty_tpl->tpl_vars['announcement']->value->Priority();?>
</td>
				<td class="announcementStart"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formatdate'][0][0]->FormatDate(array('date'=>$_smarty_tpl->tpl_vars['announcement']->value->Start()->ToTimezone($_smarty_tpl->tpl_vars['timezone']->value)),$_smarty_tpl);?>
</td>
				<td class="announcementEnd"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formatdate'][0][0]->FormatDate(array('date'=>$_smarty_tpl->tpl_vars['announcement']->value->End()->ToTimezone($_smarty_tpl->tpl_vars['timezone']->value)),$_smarty_tpl);?>
</td>
				<td class="announcementGroups"><?php  $_smarty_tpl->tpl_vars['groupId'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['groupId']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['announcement']->value->GroupIds(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['groupId']->key => $_smarty_tpl->tpl_vars['groupId']->value) {
$_smarty_tpl->tpl_vars['groupId']->_loop = true;
?><?php echo $_smarty_tpl->tpl_vars['Groups']->value[$_smarty_tpl->tpl_vars['groupId']->value]->Name;?>
 <?php } ?></td>
				<td class="announcementResources"><?php  $_smarty_tpl->tpl_vars['resourceId'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['resourceId']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['announcement']->value->ResourceIds(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['resourceId']->key => $_smarty_tpl->tpl_vars['resourceId']->value) {
$_smarty_tpl->tpl_vars['resourceId']->_loop = true;
?><?php echo $_smarty_tpl->tpl_vars['Resources']->value[$_smarty_tpl->tpl_vars['resourceId']->value]->GetName();?>
 <?php } ?></td>
				<td class="action announcementActions">
					<a href="#" title="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Edit'),$_smarty_tpl);?>
" class="update edit"><span class="fa fa-pencil-square-o icon"></a> |
					<a href="#" title="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Email'),$_smarty_tpl);?>
" class="update sendEmail"><span class="fa fa-envelope-o icon"></a> |
					<a href="#" title="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Delete'),$_smarty_tpl);?>
" class="update delete"><span class="fa fa-trash icon remove"></span></a>
				</td>
			</tr>
		<?php } ?>
		</tbody>
	</table>

	<input type="hidden" id="activeId"/>

	<div class="modal fade" id="deleteDialog" tabindex="-1" role="dialog" aria-labelledby="deleteDialogLabel" aria-hidden="true">
		<div class="modal-dialog">
			<form id="deleteForm" method="post">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						<h4 class="modal-title" id="deleteDialogLabel"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Delete'),$_smarty_tpl);?>
</h4>
					</div>
					<div class="modal-body">
						<div class="alert alert-warning">
							<div><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'DeleteWarning'),$_smarty_tpl);?>
</div>
						</div>
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

	<div class="modal fade" id="editDialog" tabindex="-1" role="dialog" aria-labelledby="editDialogLabel" aria-hidden="true">
		<div class="modal-dialog">
			<form id="editForm" method="post">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						<h4 class="modal-title" id="editDialogLabel"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Edit'),$_smarty_tpl);?>
</h4>
					</div>
					<div class="modal-body">
						<div class="form-group has-feedback">
							<label for="editText"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Announcement'),$_smarty_tpl);?>
</label><br/>
							<textarea id="editText" class="form-control required" <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0][0]->GetFormName(array('key'=>'ANNOUNCEMENT_TEXT'),$_smarty_tpl);?>
></textarea>
							<i class="glyphicon glyphicon-asterisk form-control-feedback" data-bv-icon-for="editText"></i>
						</div>
						<div class="form-group">
							<label for="editBegin"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'BeginDate'),$_smarty_tpl);?>
</label><br/>
							<input type="text" id="editBegin" class="form-control"/>
							<input type="hidden" id="formattedEditBegin" <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0][0]->GetFormName(array('key'=>'ANNOUNCEMENT_START'),$_smarty_tpl);?>
 />
						</div>
						<div class="form-group">
							<label for="editEnd"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'EndDate'),$_smarty_tpl);?>
</label><br/>
							<input type="text" id="editEnd" class="form-control"/>
							<input type="hidden" id="formattedEditEnd" <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0][0]->GetFormName(array('key'=>'ANNOUNCEMENT_END'),$_smarty_tpl);?>
 />
						</div>
						<div class="form-group">
							<label for="editPriority"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Priority'),$_smarty_tpl);?>
</label> <br/>
							<input type="number" min="0" step="1" id="editPriority" class="form-control" <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0][0]->GetFormName(array('key'=>'ANNOUNCEMENT_PRIORITY'),$_smarty_tpl);?>
 />
						</div>
						<div class="form-group">
							<label for="editUserGroups" class="no-show"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'UsersInGroups'),$_smarty_tpl);?>
</label>
							<select id="editUserGroups" class="form-control" multiple="multiple" style="width:100%" <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0][0]->GetFormName(array('key'=>FormKeys::GROUP_ID,'multi'=>true),$_smarty_tpl);?>
>
								<?php  $_smarty_tpl->tpl_vars['group'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['group']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['Groups']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['group']->key => $_smarty_tpl->tpl_vars['group']->value) {
$_smarty_tpl->tpl_vars['group']->_loop = true;
?>
									<option value="<?php echo $_smarty_tpl->tpl_vars['group']->value->Id;?>
"><?php echo $_smarty_tpl->tpl_vars['group']->value->Name;?>
</option>
								<?php } ?>
							</select>
						</div>
						<div class="form-group">
							<label for="editResourceGroups" class="no-show"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'UsersWithAccessToResources'),$_smarty_tpl);?>
</label>
							<select id="editResourceGroups" class="form-control" multiple="multiple" style="width:100%" <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0][0]->GetFormName(array('key'=>'RESOURCE_ID','multi'=>true),$_smarty_tpl);?>
>
								<?php  $_smarty_tpl->tpl_vars['resource'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['resource']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['Resources']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['resource']->key => $_smarty_tpl->tpl_vars['resource']->value) {
$_smarty_tpl->tpl_vars['resource']->_loop = true;
?>
									<option value="<?php echo $_smarty_tpl->tpl_vars['resource']->value->GetId();?>
"><?php echo $_smarty_tpl->tpl_vars['resource']->value->GetName();?>
</option>
								<?php } ?>
							</select>
						</div>
					</div>
					<div class="modal-footer">
						<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['cancel_button'][0][0]->CancelButton(array(),$_smarty_tpl);?>

						<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['update_button'][0][0]->UpdateButton(array(),$_smarty_tpl);?>

						<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['indicator'][0][0]->DisplayIndicator(array(),$_smarty_tpl);?>

					</div>
				</div>
			</form>
		</div>
	</div>

	<div class="modal fade" id="emailDialog" tabindex="-1" role="dialog" aria-labelledby="emailDialogLabel" aria-hidden="true">
		<div class="modal-dialog">
			<form id="emailForm" method="post">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						<h4 class="modal-title" id="emailDialogLabel"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'SendAsEmail'),$_smarty_tpl);?>
</h4>
					</div>
					<div class="modal-body">
						<div class="alert alert-info"><span id="emailCount" class="bold"></span> <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'AnnouncementEmailNotice'),$_smarty_tpl);?>
</div>
					</div>
					<div class="modal-footer">
						<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['cancel_button'][0][0]->CancelButton(array(),$_smarty_tpl);?>

						<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['update_button'][0][0]->UpdateButton(array('key'=>'SendAsEmail'),$_smarty_tpl);?>

						<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['indicator'][0][0]->DisplayIndicator(array(),$_smarty_tpl);?>

					</div>
				</div>
			</form>
		</div>
	</div>

	<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['control'][0][0]->DisplayControl(array('type'=>"DatePickerSetupControl",'ControlId'=>"BeginDate",'AltId'=>"formattedBeginDate"),$_smarty_tpl);?>

	<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['control'][0][0]->DisplayControl(array('type'=>"DatePickerSetupControl",'ControlId'=>"EndDate",'AltId'=>"formattedEndDate"),$_smarty_tpl);?>

	<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['control'][0][0]->DisplayControl(array('type'=>"DatePickerSetupControl",'ControlId'=>"editBegin",'AltId'=>"formattedEditBegin"),$_smarty_tpl);?>

	<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['control'][0][0]->DisplayControl(array('type'=>"DatePickerSetupControl",'ControlId'=>"editEnd",'AltId'=>"formattedEditEnd"),$_smarty_tpl);?>


	<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['csrf_token'][0][0]->CSRFToken(array(),$_smarty_tpl);?>


	<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['jsfile'][0][0]->IncludeJavascriptFile(array('src'=>"ajax-helpers.js"),$_smarty_tpl);?>

	<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['jsfile'][0][0]->IncludeJavascriptFile(array('src'=>"admin/announcement.js"),$_smarty_tpl);?>

	<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['jsfile'][0][0]->IncludeJavascriptFile(array('src'=>"js/jquery.form-3.09.min.js"),$_smarty_tpl);?>


	<script type="text/javascript">
		$(document).ready(function () {

			var actions = {
				add: '<?php echo ManageAnnouncementsActions::Add;?>
',
				edit: '<?php echo ManageAnnouncementsActions::Change;?>
',
				deleteAnnouncement: '<?php echo ManageAnnouncementsActions::Delete;?>
',
				email: '<?php echo ManageAnnouncementsActions::Email;?>
'
			};

			var accessoryOptions = {
				submitUrl: '<?php echo $_SERVER['SCRIPT_NAME'];?>
',
				saveRedirect: '<?php echo $_SERVER['SCRIPT_NAME'];?>
',
				getEmailCountUrl: '<?php echo $_SERVER['SCRIPT_NAME'];?>
?dr=emailCount',
				actions: actions
			};

			var announcementManagement = new AnnouncementManagement(accessoryOptions);
			announcementManagement.init();

			<?php  $_smarty_tpl->tpl_vars['announcement'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['announcement']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['announcements']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['announcement']->key => $_smarty_tpl->tpl_vars['announcement']->value) {
$_smarty_tpl->tpl_vars['announcement']->_loop = true;
?>
			announcementManagement.addAnnouncement(
					'<?php echo $_smarty_tpl->tpl_vars['announcement']->value->Id();?>
',
					'<?php echo smarty_modifier_regex_replace(preg_replace("%(?<!\\\\)'%", "\'",$_smarty_tpl->tpl_vars['announcement']->value->Text()),"/[\n]/","\\n");?>
',
					'<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formatdate'][0][0]->FormatDate(array('date'=>$_smarty_tpl->tpl_vars['announcement']->value->Start()->ToTimezone($_smarty_tpl->tpl_vars['timezone']->value)),$_smarty_tpl);?>
',
					'<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formatdate'][0][0]->FormatDate(array('date'=>$_smarty_tpl->tpl_vars['announcement']->value->End()->ToTimezone($_smarty_tpl->tpl_vars['timezone']->value)),$_smarty_tpl);?>
',
					'<?php echo $_smarty_tpl->tpl_vars['announcement']->value->Priority();?>
',
					[<?php  $_smarty_tpl->tpl_vars['id'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['id']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['announcement']->value->GroupIds(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['id']->key => $_smarty_tpl->tpl_vars['id']->value) {
$_smarty_tpl->tpl_vars['id']->_loop = true;
?><?php echo $_smarty_tpl->tpl_vars['id']->value;?>
,<?php } ?>],
					[<?php  $_smarty_tpl->tpl_vars['id'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['id']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['announcement']->value->ResourceIds(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['id']->key => $_smarty_tpl->tpl_vars['id']->value) {
$_smarty_tpl->tpl_vars['id']->_loop = true;
?><?php echo $_smarty_tpl->tpl_vars['id']->value;?>
,<?php } ?>]
			);
			<?php } ?>

			$('#add-announcement-panel').showHidePanel();

			$('#announcementGroups, #editUserGroups').select2({
				placeholder: '<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'UsersInGroups'),$_smarty_tpl);?>
'
			});

			$('#resourceGroups, #editResourceGroups').select2({
				placeholder: '<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'UsersWithAccessToResources'),$_smarty_tpl);?>
'
			});
		});
	</script>
</div>
<?php echo $_smarty_tpl->getSubTemplate ('globalfooter.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }} ?>
