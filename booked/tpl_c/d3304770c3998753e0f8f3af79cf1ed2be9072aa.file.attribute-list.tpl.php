<?php /* Smarty version Smarty-3.1.16, created on 2017-02-25 14:18:51
         compiled from "/home/vol15_8/byethost8.com/b8_19720712/htdocs/booked/tpl/Admin/Attributes/attribute-list.tpl" */ ?>
<?php /*%%SmartyHeaderCode:107396483658b1d89be75ca7-31208984%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd3304770c3998753e0f8f3af79cf1ed2be9072aa' => 
    array (
      0 => '/home/vol15_8/byethost8.com/b8_19720712/htdocs/booked/tpl/Admin/Attributes/attribute-list.tpl',
      1 => 1487739355,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '107396483658b1d89be75ca7-31208984',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'Attributes' => 0,
    'Category' => 0,
    'rowCss' => 0,
    'attribute' => 0,
    'Types' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_58b1d89c082b03_83834447',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58b1d89c082b03_83834447')) {function content_58b1d89c082b03_83834447($_smarty_tpl) {?><?php if (!is_callable('smarty_function_cycle')) include '/home/vol15_8/byethost8.com/b8_19720712/htdocs/booked/lib/Common/../../lib/external/Smarty/plugins/function.cycle.php';
?>
<h3><?php echo count($_smarty_tpl->tpl_vars['Attributes']->value);?>
 <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Attributes'),$_smarty_tpl);?>
</h3>
<?php if (count($_smarty_tpl->tpl_vars['Attributes']->value)>0) {?>
	<table class="table">
		<thead>
		<tr>
			<th>ID</th>
			<th><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'SortOrder'),$_smarty_tpl);?>
</th>
			<th><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'DisplayLabel'),$_smarty_tpl);?>
</th>
			<th><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Type'),$_smarty_tpl);?>
</th>
			<th><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Required'),$_smarty_tpl);?>
</th>
			<?php if ($_smarty_tpl->tpl_vars['Category']->value!=CustomAttributeCategory::RESERVATION) {?>
				<th><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'AppliesTo'),$_smarty_tpl);?>
</th>
			<?php }?>
			<th><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'CollectedFor'),$_smarty_tpl);?>
</th>
			<th><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'ValidationExpression'),$_smarty_tpl);?>
</th>
			<th><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'PossibleValues'),$_smarty_tpl);?>
</th>
			<?php if ($_smarty_tpl->tpl_vars['Category']->value==CustomAttributeCategory::RESERVATION) {?>
				<th><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Private'),$_smarty_tpl);?>
</th>
			<?php }?>
			<th><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'AdminOnly'),$_smarty_tpl);?>
</th>
			<th class="action"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Edit'),$_smarty_tpl);?>
</th>
			<th class="action"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Delete'),$_smarty_tpl);?>
</th>
		</tr>
		</thead>
		<tbody>
		<?php  $_smarty_tpl->tpl_vars['attribute'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['attribute']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['Attributes']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['attribute']->key => $_smarty_tpl->tpl_vars['attribute']->value) {
$_smarty_tpl->tpl_vars['attribute']->_loop = true;
?>
			<?php echo smarty_function_cycle(array('values'=>'row0,row1','assign'=>'rowCss'),$_smarty_tpl);?>

			<tr class="<?php echo $_smarty_tpl->tpl_vars['rowCss']->value;?>
" attributeId="<?php echo $_smarty_tpl->tpl_vars['attribute']->value->Id();?>
">
				<td><?php echo $_smarty_tpl->tpl_vars['attribute']->value->Id();?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['attribute']->value->SortOrder();?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['attribute']->value->Label();?>
</td>
				<td><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>$_smarty_tpl->tpl_vars['Types']->value[$_smarty_tpl->tpl_vars['attribute']->value->Type()]),$_smarty_tpl);?>
</td>
				<td><?php if ($_smarty_tpl->tpl_vars['attribute']->value->Required()) {?>
						<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Yes'),$_smarty_tpl);?>

					<?php } else { ?>
						<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'No'),$_smarty_tpl);?>

					<?php }?></td>
				<?php if ($_smarty_tpl->tpl_vars['Category']->value!=CustomAttributeCategory::RESERVATION) {?>
					<td><?php if ($_smarty_tpl->tpl_vars['attribute']->value->UniquePerEntity()) {?>
							<?php echo implode($_smarty_tpl->tpl_vars['attribute']->value->EntityDescriptions(),', ');?>

						<?php } else { ?>
							<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'All'),$_smarty_tpl);?>

						<?php }?>
					</td>
				<?php }?>
				<td>
					<?php if ($_smarty_tpl->tpl_vars['attribute']->value->HasSecondaryEntities()) {?>
						<?php echo implode($_smarty_tpl->tpl_vars['attribute']->value->SecondaryEntityDescriptions(),', ');?>

					<?php } else { ?>
						<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'All'),$_smarty_tpl);?>

					<?php }?>
				</td>
				<td><?php echo $_smarty_tpl->tpl_vars['attribute']->value->Regex();?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['attribute']->value->PossibleValues();?>
</td>
				<?php if ($_smarty_tpl->tpl_vars['Category']->value==CustomAttributeCategory::RESERVATION) {?>
					<td><?php if ($_smarty_tpl->tpl_vars['attribute']->value->IsPrivate()) {?>
							<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Yes'),$_smarty_tpl);?>

						<?php } else { ?>
							<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'No'),$_smarty_tpl);?>

						<?php }?></td>
				<?php }?>
				<td><?php if ($_smarty_tpl->tpl_vars['attribute']->value->AdminOnly()) {?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Yes'),$_smarty_tpl);?>
<?php } else { ?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'No'),$_smarty_tpl);?>
<?php }?></td>
				<td class="action">
					<a href="#" class="update edit" }"><span class="fa fa-edit icon edit"></span></a>
				</td>
				<td class="action">
					<a href="#" class="update delete" attributeId="<?php echo $_smarty_tpl->tpl_vars['attribute']->value->Id();?>
"><span class="fa fa-trash icon remove"></span></a>
				</td>
			</tr>
		<?php } ?>
		</tbody>
	</table>
<?php }?>

<script type="text/javascript">
	var attributeList = new Object();

	<?php  $_smarty_tpl->tpl_vars['attribute'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['attribute']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['Attributes']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['attribute']->key => $_smarty_tpl->tpl_vars['attribute']->value) {
$_smarty_tpl->tpl_vars['attribute']->_loop = true;
?>
	attributeList[<?php echo $_smarty_tpl->tpl_vars['attribute']->value->Id();?>
] = {
		id: <?php echo $_smarty_tpl->tpl_vars['attribute']->value->Id();?>
,
		label: "<?php echo strtr($_smarty_tpl->tpl_vars['attribute']->value->Label(), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
",
		required: <?php echo $_smarty_tpl->tpl_vars['attribute']->value->Required();?>
,
		regex: "<?php echo strtr($_smarty_tpl->tpl_vars['attribute']->value->Regex(), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
",
		possibleValues: "<?php echo strtr($_smarty_tpl->tpl_vars['attribute']->value->PossibleValues(), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
",
		type: "<?php echo $_smarty_tpl->tpl_vars['attribute']->value->Type();?>
",
		sortOrder: "<?php echo $_smarty_tpl->tpl_vars['attribute']->value->SortOrder();?>
",
		<?php if (count($_smarty_tpl->tpl_vars['attribute']->value->EntityIds())>0) {?>
		entityIds: ["<?php echo implode($_smarty_tpl->tpl_vars['attribute']->value->EntityIds(),'","');?>
"],
		<?php } else { ?>
		entityIds: [],
		<?php }?>
		entityDescriptions: ["<?php echo implode($_smarty_tpl->tpl_vars['attribute']->value->EntityDescriptions(),'","');?>
"],
		adminOnly: <?php echo $_smarty_tpl->tpl_vars['attribute']->value->AdminOnly();?>
,
		<?php if ($_smarty_tpl->tpl_vars['attribute']->value->HasSecondaryEntities()) {?>
		secondaryEntityIds: ["<?php echo implode($_smarty_tpl->tpl_vars['attribute']->value->SecondaryEntityIds(),'","');?>
"],
		secondaryEntityDescriptions: ["<?php echo implode($_smarty_tpl->tpl_vars['attribute']->value->SecondaryEntityDescriptions(),'","');?>
"],
		<?php } else { ?>
		secondaryEntityIds: [],
		secondaryEntityDescriptions: [],
		<?php }?>
		secondaryCategory: "<?php echo $_smarty_tpl->tpl_vars['attribute']->value->SecondaryCategory();?>
",
		isPrivate: "<?php echo $_smarty_tpl->tpl_vars['attribute']->value->IsPrivate();?>
"
	};
	<?php } ?>

	$('#attributeList').data('list', attributeList);
</script><?php }} ?>
