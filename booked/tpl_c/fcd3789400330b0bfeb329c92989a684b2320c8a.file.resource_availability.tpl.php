<?php /* Smarty version Smarty-3.1.16, created on 2017-06-27 23:25:29
         compiled from "/home/vol15_8/byethost8.com/b8_19720712/htdocs/booked/tpl/Dashboard/resource_availability.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1096269553595321a985faa2-27656743%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fcd3789400330b0bfeb329c92989a684b2320c8a' => 
    array (
      0 => '/home/vol15_8/byethost8.com/b8_19720712/htdocs/booked/tpl/Dashboard/resource_availability.tpl',
      1 => 1487738779,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1096269553595321a985faa2-27656743',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'Schedules' => 0,
    's' => 0,
    'Available' => 0,
    'i' => 0,
    'Path' => 0,
    'Timezone' => 0,
    'Unavailable' => 0,
    'UnavailableAllDay' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_595321a98d0462_99692256',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_595321a98d0462_99692256')) {function content_595321a98d0462_99692256($_smarty_tpl) {?>

<div class="dashboard dashboard availabilityDashboard" id="availabilityDashboard">
	<div class="dashboardHeader blue-bg2">
		<div class="pull-left"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>"ResourceAvailability"),$_smarty_tpl);?>
</div>
		<div class="pull-right">
			<a href="#" title="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'ShowHide'),$_smarty_tpl);?>
 <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>"ResourceAvailability"),$_smarty_tpl);?>
">
				<i class="glyphicon"></i>
			</a>
		</div>
		<div class="clearfix"></div>
	</div>
	<div class="dashboardContents">
		<div class="header"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Available'),$_smarty_tpl);?>
</div>
		<?php  $_smarty_tpl->tpl_vars['s'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['s']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['Schedules']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['s']->key => $_smarty_tpl->tpl_vars['s']->value) {
$_smarty_tpl->tpl_vars['s']->_loop = true;
?>
			<h5><?php echo $_smarty_tpl->tpl_vars['s']->value->GetName();?>
</h5>
			<?php  $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['i']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['Available']->value[$_smarty_tpl->tpl_vars['s']->value->GetId()]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['i']->key => $_smarty_tpl->tpl_vars['i']->value) {
$_smarty_tpl->tpl_vars['i']->_loop = true;
?>
				<div class="availabilityItem">
					<div class="col-xs-12 col-sm-5">
						<i resource-id="<?php echo $_smarty_tpl->tpl_vars['i']->value->ResourceId();?>
" class="resourceNameSelector fa fa-info-circle"></i>
						<div class="resourceName" style="background-color:<?php echo $_smarty_tpl->tpl_vars['i']->value->GetColor();?>
">
							<a href="<?php echo $_smarty_tpl->tpl_vars['Path']->value;?>
<?php echo Pages::RESERVATION;?>
?<?php echo QueryStringKeys::RESOURCE_ID;?>
=<?php echo $_smarty_tpl->tpl_vars['i']->value->ResourceId();?>
" resource-id="<?php echo $_smarty_tpl->tpl_vars['i']->value->ResourceId();?>
"
							   class="resourceNameSelector" style="color:<?php echo $_smarty_tpl->tpl_vars['i']->value->GetTextColor();?>
"><?php echo $_smarty_tpl->tpl_vars['i']->value->ResourceName();?>
</a>
						</div>
					</div>
					<div class="availability col-xs-12 col-sm-4">
						<?php if ($_smarty_tpl->tpl_vars['i']->value->NextTime()!=null) {?>
							<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'AvailableUntil'),$_smarty_tpl);?>

							<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['format_date'][0][0]->FormatDate(array('date'=>$_smarty_tpl->tpl_vars['i']->value->NextTime(),'timezone'=>$_smarty_tpl->tpl_vars['Timezone']->value,'key'=>'dashboard'),$_smarty_tpl);?>

						<?php } else { ?>
							<span class="no-data"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'AllNoUpcomingReservations','args'=>30),$_smarty_tpl);?>
</span>
						<?php }?>
					</div>
					<div class="reserveButton col-xs-12 col-sm-3">
						<a class="btn btn-xs col-xs-12"
						   href="<?php echo $_smarty_tpl->tpl_vars['Path']->value;?>
<?php echo Pages::RESERVATION;?>
?<?php echo QueryStringKeys::RESOURCE_ID;?>
=<?php echo $_smarty_tpl->tpl_vars['i']->value->ResourceId();?>
"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Reserve'),$_smarty_tpl);?>
</a>
					</div>
				</div>
				<div class="clearfix"></div>
				<?php }
if (!$_smarty_tpl->tpl_vars['i']->_loop) {
?>
				<div class="no-data"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'None'),$_smarty_tpl);?>
</div>
			<?php } ?>
		<?php } ?>

		<div class="header"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Unavailable'),$_smarty_tpl);?>
</div>

		<?php  $_smarty_tpl->tpl_vars['s'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['s']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['Schedules']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['s']->key => $_smarty_tpl->tpl_vars['s']->value) {
$_smarty_tpl->tpl_vars['s']->_loop = true;
?>
			<h5><?php echo $_smarty_tpl->tpl_vars['s']->value->GetName();?>
</h5>
			<?php  $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['i']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['Unavailable']->value[$_smarty_tpl->tpl_vars['s']->value->GetId()]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['i']->key => $_smarty_tpl->tpl_vars['i']->value) {
$_smarty_tpl->tpl_vars['i']->_loop = true;
?>
				<div class="availabilityItem">
					<div class="col-xs-12 col-sm-5">
						<i resource-id="<?php echo $_smarty_tpl->tpl_vars['i']->value->ResourceId();?>
" class="resourceNameSelector fa fa-info-circle"></i>
						<div class="resourceName" style="background-color:<?php echo $_smarty_tpl->tpl_vars['i']->value->GetColor();?>
">
							<a href="<?php echo $_smarty_tpl->tpl_vars['Path']->value;?>
<?php echo Pages::RESERVATION;?>
?<?php echo QueryStringKeys::RESOURCE_ID;?>
=<?php echo $_smarty_tpl->tpl_vars['i']->value->ResourceId();?>
" resource-id="<?php echo $_smarty_tpl->tpl_vars['i']->value->ResourceId();?>
"
							   class="resourceNameSelector" style="color:<?php echo $_smarty_tpl->tpl_vars['i']->value->GetTextColor();?>
"><?php echo $_smarty_tpl->tpl_vars['i']->value->ResourceName();?>
</a>
						</div>
					</div>
					<div class="availability col-xs-12 col-sm-4">
						<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'AvailableBeginningAt'),$_smarty_tpl);?>
 <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['format_date'][0][0]->FormatDate(array('date'=>$_smarty_tpl->tpl_vars['i']->value->ReservationEnds(),'timezone'=>$_smarty_tpl->tpl_vars['Timezone']->value,'key'=>'dashboard'),$_smarty_tpl);?>

					</div>
					<div class="reserveButton col-xs-12 col-sm-3">
						<a class="btn btn-xs col-xs-12"
						   href="<?php echo $_smarty_tpl->tpl_vars['Path']->value;?>
<?php echo Pages::RESERVATION;?>
?<?php echo QueryStringKeys::RESOURCE_ID;?>
=<?php echo $_smarty_tpl->tpl_vars['i']->value->ResourceId();?>
&<?php echo QueryStringKeys::START_DATE;?>
=<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['format_date'][0][0]->FormatDate(array('date'=>$_smarty_tpl->tpl_vars['i']->value->ReservationEnds(),'timezone'=>$_smarty_tpl->tpl_vars['Timezone']->value,'key'=>'url_full'),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Reserve'),$_smarty_tpl);?>
</a>
					</div>
				</div>
				<?php }
if (!$_smarty_tpl->tpl_vars['i']->_loop) {
?>
				<div class="no-data"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'None'),$_smarty_tpl);?>
</div>
			<?php } ?>
		<?php } ?>

		<div class="header"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'UnavailableAllDay'),$_smarty_tpl);?>
</div>
		<?php  $_smarty_tpl->tpl_vars['s'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['s']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['Schedules']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['s']->key => $_smarty_tpl->tpl_vars['s']->value) {
$_smarty_tpl->tpl_vars['s']->_loop = true;
?>
			<h5><?php echo $_smarty_tpl->tpl_vars['s']->value->GetName();?>
</h5>
			<?php  $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['i']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['UnavailableAllDay']->value[$_smarty_tpl->tpl_vars['s']->value->GetId()]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['i']->key => $_smarty_tpl->tpl_vars['i']->value) {
$_smarty_tpl->tpl_vars['i']->_loop = true;
?>
				<div class="availabilityItem">
					<div class="col-xs-12 col-sm-5">
						<i resource-id="<?php echo $_smarty_tpl->tpl_vars['i']->value->ResourceId();?>
" class="resourceNameSelector fa fa-info-circle"></i>
						<div class="resourceName" style="background-color:<?php echo $_smarty_tpl->tpl_vars['i']->value->GetColor();?>
">
							<a href="<?php echo $_smarty_tpl->tpl_vars['Path']->value;?>
<?php echo Pages::RESERVATION;?>
?<?php echo QueryStringKeys::RESOURCE_ID;?>
=<?php echo $_smarty_tpl->tpl_vars['i']->value->ResourceId();?>
" resource-id="<?php echo $_smarty_tpl->tpl_vars['i']->value->ResourceId();?>
"
							   class="resourceNameSelector" style="color:<?php echo $_smarty_tpl->tpl_vars['i']->value->GetTextColor();?>
"><?php echo $_smarty_tpl->tpl_vars['i']->value->ResourceName();?>
</a>
						</div>
					</div>
					<div class="availability col-xs-12 col-sm-4">
						Available At <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['format_date'][0][0]->FormatDate(array('date'=>$_smarty_tpl->tpl_vars['i']->value->ReservationEnds(),'timezone'=>$_smarty_tpl->tpl_vars['Timezone']->value,'key'=>'dashboard'),$_smarty_tpl);?>

					</div>
					<div class="reserveButton col-xs-12 col-sm-3">
						<a class="btn btn-xs col-xs-12"
						   href="<?php echo $_smarty_tpl->tpl_vars['Path']->value;?>
<?php echo Pages::RESERVATION;?>
?<?php echo QueryStringKeys::RESOURCE_ID;?>
=<?php echo $_smarty_tpl->tpl_vars['i']->value->ResourceId();?>
&<?php echo QueryStringKeys::START_DATE;?>
=<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['format_date'][0][0]->FormatDate(array('date'=>$_smarty_tpl->tpl_vars['i']->value->ReservationEnds(),'timezone'=>$_smarty_tpl->tpl_vars['Timezone']->value,'key'=>'url_full'),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Reserve'),$_smarty_tpl);?>
</a>
					</div>
				</div>
				<?php }
if (!$_smarty_tpl->tpl_vars['i']->_loop) {
?>
				<div class="no-data"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'None'),$_smarty_tpl);?>
</div>
			<?php } ?>
		<?php } ?>
	</div>
</div>
<?php }} ?>
