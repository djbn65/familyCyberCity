<?php /* Smarty version Smarty-3.1.16, created on 2017-06-29 11:49:06
         compiled from "/home/vol15_8/byethost8.com/b8_19720712/htdocs/booked/tpl/Ajax/reservation/save_successful.tpl" */ ?>
<?php /*%%SmartyHeaderCode:14557561425955217294bc08-69066533%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '916ac5fbb036946dc97742d7fc36a9a7ca2a7fe1' => 
    array (
      0 => '/home/vol15_8/byethost8.com/b8_19720712/htdocs/booked/tpl/Ajax/reservation/save_successful.tpl',
      1 => 1487739391,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14557561425955217294bc08-69066533',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'divId' => 0,
    'RequiresApproval' => 0,
    'messageKey' => 0,
    'ReferenceNumber' => 0,
    'Instances' => 0,
    'instance' => 0,
    'Timezone' => 0,
    'Resources' => 0,
    'resource' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_59552172a19f18_00572009',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59552172a19f18_00572009')) {function content_59552172a19f18_00572009($_smarty_tpl) {?>

<div id="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['divId']->value)===null||$tmp==='' ? 'reservation-created' : $tmp);?>
" class="reservationResponseMessage">
	<div id="reservation-response-image">
	<?php if ($_smarty_tpl->tpl_vars['RequiresApproval']->value) {?>
		<span class="fa fa-warning fa-5x warning"></span>
	<?php } else { ?>
		<span class="fa fa-check fa-5x success"></span>
	<?php }?>
	</div>

	<div id="created-message" class="reservation-message"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>(($tmp = @$_smarty_tpl->tpl_vars['messageKey']->value)===null||$tmp==='' ? "ReservationCreated" : $tmp)),$_smarty_tpl);?>
</div>
	<div id="reference-number"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'YourReferenceNumber','args'=>$_smarty_tpl->tpl_vars['ReferenceNumber']->value),$_smarty_tpl);?>
</div>

	<div class="dates">
		<span class="bold"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Dates'),$_smarty_tpl);?>
:</span>
		<?php  $_smarty_tpl->tpl_vars['instance'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['instance']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['Instances']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['instance']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['instance']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['instance']->key => $_smarty_tpl->tpl_vars['instance']->value) {
$_smarty_tpl->tpl_vars['instance']->_loop = true;
 $_smarty_tpl->tpl_vars['instance']->iteration++;
 $_smarty_tpl->tpl_vars['instance']->last = $_smarty_tpl->tpl_vars['instance']->iteration === $_smarty_tpl->tpl_vars['instance']->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['date_list']['last'] = $_smarty_tpl->tpl_vars['instance']->last;
?>
			<span class="date"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['format_date'][0][0]->FormatDate(array('date'=>$_smarty_tpl->tpl_vars['instance']->value->StartDate(),'timezone'=>$_smarty_tpl->tpl_vars['Timezone']->value),$_smarty_tpl);?>
<?php if (!$_smarty_tpl->getVariable('smarty')->value['foreach']['date_list']['last']) {?>, <?php }?></span>
		<?php } ?>
	</div>

	<div class="resources">
		<span class="bold"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Resources'),$_smarty_tpl);?>
:</span>
		<?php  $_smarty_tpl->tpl_vars['resource'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['resource']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['Resources']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['resource']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['resource']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['resource']->key => $_smarty_tpl->tpl_vars['resource']->value) {
$_smarty_tpl->tpl_vars['resource']->_loop = true;
 $_smarty_tpl->tpl_vars['resource']->iteration++;
 $_smarty_tpl->tpl_vars['resource']->last = $_smarty_tpl->tpl_vars['resource']->iteration === $_smarty_tpl->tpl_vars['resource']->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['resource_list']['last'] = $_smarty_tpl->tpl_vars['resource']->last;
?>
			<span class="resource"><?php echo $_smarty_tpl->tpl_vars['resource']->value->GetName();?>
<?php if (!$_smarty_tpl->getVariable('smarty')->value['foreach']['resource_list']['last']) {?>, <?php }?></span>
		<?php } ?>
	</div>

	<?php if ($_smarty_tpl->tpl_vars['RequiresApproval']->value) {?>
		<div id="approval-message"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'ReservationRequiresApproval'),$_smarty_tpl);?>
</div>
	<?php }?>

	<input type="button" id="btnSaveSuccessful" value="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Close'),$_smarty_tpl);?>
" class="btn btn-success" />
</div><?php }} ?>
