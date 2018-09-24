<?php /* Smarty version Smarty-3.1.16, created on 2017-02-26 22:57:14
         compiled from "/home/vol15_8/byethost8.com/b8_19720712/htdocs/booked/tpl/Admin/manage_accessories.tpl" */ ?>
<?php /*%%SmartyHeaderCode:198955713358b3a39ae9a3a8-43844445%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5fc02e0438c793c1f238a5bb8c3ff6e24b35d455' => 
    array (
      0 => '/home/vol15_8/byethost8.com/b8_19720712/htdocs/booked/tpl/Admin/manage_accessories.tpl',
      1 => 1488050507,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '198955713358b3a39ae9a3a8-43844445',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'accessories' => 0,
    'rowCss' => 0,
    'accessory' => 0,
    'resources' => 0,
    'resource' => 0,
    'resourceId' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_58b3a39b0be945_65285374',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58b3a39b0be945_65285374')) {function content_58b3a39b0be945_65285374($_smarty_tpl) {?><?php if (!is_callable('smarty_function_cycle')) include '/home/vol15_8/byethost8.com/b8_19720712/htdocs/booked/lib/Common/../../lib/external/Smarty/plugins/function.cycle.php';
?>
<?php echo $_smarty_tpl->getSubTemplate ('globalheader2.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<div id="page-manage-accessories" class="admin-page accessories-page" style="margin-top: 8rem">
	<h1><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'ManageAccessories'),$_smarty_tpl);?>
</h1>

	<form id="addForm" class="form-inline" role="form" method="post">
		<div class="panel panel-default" id="add-accessory-panel">
			<div class="panel-heading"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>"AddAccessory"),$_smarty_tpl);?>
 <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['showhide_icon'][0][0]->ShowHideIcon(array(),$_smarty_tpl);?>
</div>
			<div class="panel-body add-contents">
				<div class="col-xs-5">
					<div class="form-group has-feedback">
						<label for="accessoryName"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'AccessoryName'),$_smarty_tpl);?>
</label>
						<input <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0][0]->GetFormName(array('key'=>'ACCESSORY_NAME'),$_smarty_tpl);?>
 type="text" id="accessoryName" required class="form-control required"/>
						<i class="glyphicon glyphicon-asterisk form-control-feedback" data-bv-icon-for="accessoryName"></i>
					</div>
				</div>
				<div class="col-xs-7">
					<div class="form-group">
						<label for="addQuantity"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'QuantityAvailable'),$_smarty_tpl);?>
</label>
						<input type="number" id="addQuantity" class="form-control" min="0" disabled="disabled" <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0][0]->GetFormName(array('key'=>'ACCESSORY_QUANTITY_AVAILABLE'),$_smarty_tpl);?>
 />
					</div>
					<div class="checkbox checkbox-align">
						<input type="checkbox" id="chkUnlimitedAdd" class="unlimited" name="chkUnlimited" checked="checked"/>
						<label for="chkUnlimitedAdd"> <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Unlimited'),$_smarty_tpl);?>
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

	<table class="table" id="accessoriesTable">
		<thead>
		<tr>
			<th><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['sort_column'][0][0]->SortColumn(array('key'=>'AccessoryName','field'=>ColumnNames::ACCESSORY_NAME),$_smarty_tpl);?>
</th>
			<th><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['sort_column'][0][0]->SortColumn(array('key'=>'QuantityAvailable','field'=>ColumnNames::ACCESSORY_QUANTITY),$_smarty_tpl);?>
</th>
			<th><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Resources'),$_smarty_tpl);?>
</th>
			<th class="action"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Actions'),$_smarty_tpl);?>
</th>
		</tr>
		</thead>
		<tbody>
		<?php  $_smarty_tpl->tpl_vars['accessory'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['accessory']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['accessories']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['accessory']->key => $_smarty_tpl->tpl_vars['accessory']->value) {
$_smarty_tpl->tpl_vars['accessory']->_loop = true;
?>
			<?php echo smarty_function_cycle(array('values'=>'row0,row1','assign'=>'rowCss'),$_smarty_tpl);?>

			<tr class="<?php echo $_smarty_tpl->tpl_vars['rowCss']->value;?>
" data-accessory-id="<?php echo $_smarty_tpl->tpl_vars['accessory']->value->Id;?>
">
				<td><?php echo $_smarty_tpl->tpl_vars['accessory']->value->Name;?>
</td>
				<td><?php echo (($tmp = @$_smarty_tpl->tpl_vars['accessory']->value->QuantityAvailable)===null||$tmp==='' ? '&infin;' : $tmp);?>
</td>
				<td>
					<a href="#"
					   class="update resources"><?php if ($_smarty_tpl->tpl_vars['accessory']->value->AssociatedResources==0) {?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'All'),$_smarty_tpl);?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['accessory']->value->AssociatedResources;?>
<?php }?></a>
				</td>
				<td class="action">
					<a href="#" class="update edit"><span class="fa fa-pencil-square-o icon"></a> |
					<a href="#" class="update delete"><span class="fa fa-trash icon remove"></span></a>
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
							<div><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'DeleteAccessoryWarning'),$_smarty_tpl);?>
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
						<div class="form-group has-feedback col-xs-12">
							<label for="editName"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'AccessoryName'),$_smarty_tpl);?>
</label>
							<input id="editName" type="text" class="form-control required" maxlength="85" <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0][0]->GetFormName(array('key'=>'ACCESSORY_NAME'),$_smarty_tpl);?>
 />
						</div>
						<div class="form-group col-xs-4">
							<label for="editQuantity"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'QuantityAvailable'),$_smarty_tpl);?>
</label>
							<input id="editQuantity" type="number" min="0" class="form-control"
								   disabled="disabled" <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0][0]->GetFormName(array('key'=>'ACCESSORY_QUANTITY_AVAILABLE'),$_smarty_tpl);?>
 />
						</div>
						<div class="form-group col-xs-8">
							<div class="checkbox checkbox-align">
								<input type="checkbox" id="chkUnlimitedEdit" class="unlimited" name="chkUnlimited" checked="checked"/>
								<label for="chkUnlimitedEdit"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Unlimited'),$_smarty_tpl);?>
</label>
							</div>
						</div>
						<div class="clearfix"></div>
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

	<div class="modal fade" id="accessoryResourcesDialog" tabindex="-1" role="dialog" aria-labelledby="resourcesDialogLabel" aria-hidden="true">
		<div class="modal-dialog">
			<form id="accessoryResourcesForm" role="form" ajaxAction="<?php echo ManageAccessoriesActions::ChangeAccessoryResource;?>
" method="post">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						<h4 class="modal-title" id="resourcesDialogLabel"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Resources'),$_smarty_tpl);?>
</h4>
					</div>
					<div class="modal-body">
						<?php  $_smarty_tpl->tpl_vars['resource'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['resource']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['resources']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['resource']->key => $_smarty_tpl->tpl_vars['resource']->value) {
$_smarty_tpl->tpl_vars['resource']->_loop = true;
?>
							<?php $_smarty_tpl->tpl_vars["resourceId"] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['resource']->value->GetId()), null, 0);?>
							<div resource-id="<?php echo $_smarty_tpl->tpl_vars['resourceId']->value;?>
">
								<div class="checkbox">
									<input id="accessoryResource<?php echo $_smarty_tpl->tpl_vars['resourceId']->value;?>
" type="checkbox" data-type="resource-id" class="resourceCheckbox"
										   name="<?php echo FormKeys::ACCESSORY_RESOURCE;?>
[<?php echo $_smarty_tpl->tpl_vars['resource']->value->GetId();?>
]"
										   value="<?php echo $_smarty_tpl->tpl_vars['resource']->value->GetId();?>
">
									<label for="accessoryResource<?php echo $_smarty_tpl->tpl_vars['resourceId']->value;?>
"> <?php echo $_smarty_tpl->tpl_vars['resource']->value->GetName();?>
</label>
								</div>
								<div class="quantities no-show form-group-sm">
									<label><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'MinimumQuantity'),$_smarty_tpl);?>

										<input type="number" min="0" data-type="min-quantity" class="form-control" size="4" maxlength="4"
											   name="<?php echo FormKeys::ACCESSORY_MIN_QUANTITY;?>
[<?php echo $_smarty_tpl->tpl_vars['resource']->value->GetId();?>
]"></label>
									<label><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'MaximumQuantity'),$_smarty_tpl);?>

										<input type="number" min="0" data-type="max-quantity" class="form-control" size="4" maxlength="4"
											   name="<?php echo FormKeys::ACCESSORY_MAX_QUANTITY;?>
[<?php echo $_smarty_tpl->tpl_vars['resource']->value->GetId();?>
]"></label>
								</div>
							</div>
						<?php } ?>
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

	<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['csrf_token'][0][0]->CSRFToken(array(),$_smarty_tpl);?>


	<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['jsfile'][0][0]->IncludeJavascriptFile(array('src'=>"ajax-helpers.js"),$_smarty_tpl);?>

	<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['jsfile'][0][0]->IncludeJavascriptFile(array('src'=>"admin/accessory.js"),$_smarty_tpl);?>

	<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['jsfile'][0][0]->IncludeJavascriptFile(array('src'=>"js/jquery.form-3.09.min.js"),$_smarty_tpl);?>


	<script type="text/javascript">
		$(document).ready(function () {

			var actions = {
				add: '<?php echo ManageAccessoriesActions::Add;?>
',
				edit: '<?php echo ManageAccessoriesActions::Change;?>
',
				deleteAccessory: '<?php echo ManageAccessoriesActions::Delete;?>
'
			};

			var accessoryOptions = {
				submitUrl: '<?php echo $_SERVER['SCRIPT_NAME'];?>
',
				saveRedirect: '<?php echo $_SERVER['SCRIPT_NAME'];?>
',
				actions: actions
			};

			var accessoryManagement = new AccessoryManagement(accessoryOptions);
			accessoryManagement.init();

			<?php  $_smarty_tpl->tpl_vars['accessory'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['accessory']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['accessories']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['accessory']->key => $_smarty_tpl->tpl_vars['accessory']->value) {
$_smarty_tpl->tpl_vars['accessory']->_loop = true;
?>
			accessoryManagement.addAccessory('<?php echo $_smarty_tpl->tpl_vars['accessory']->value->Id;?>
', '<?php echo strtr($_smarty_tpl->tpl_vars['accessory']->value->Name, array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
', '<?php echo $_smarty_tpl->tpl_vars['accessory']->value->QuantityAvailable;?>
');
			<?php } ?>

			$('#add-accessory-panel').showHidePanel();
		});
	</script>

</div>
<?php echo $_smarty_tpl->getSubTemplate ('globalfooter.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
