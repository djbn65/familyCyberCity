<?php /* Smarty version Smarty-3.1.16, created on 2017-06-27 23:25:29
         compiled from "/home/vol15_8/byethost8.com/b8_19720712/htdocs/booked/tpl/Dashboard/upcoming_reservations.tpl" */ ?>
<?php /*%%SmartyHeaderCode:630733489595321a9776738-76123378%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '01419ab680148f0b727e2d5b764889bda4b16f4c' => 
    array (
      0 => '/home/vol15_8/byethost8.com/b8_19720712/htdocs/booked/tpl/Dashboard/upcoming_reservations.tpl',
      1 => 1487738780,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '630733489595321a9776738-76123378',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'Total' => 0,
    'TodaysReservations' => 0,
    'reservation' => 0,
    'TomorrowsReservations' => 0,
    'ThisWeeksReservations' => 0,
    'NextWeeksReservations' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_595321a97a01a5_12717570',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_595321a97a01a5_12717570')) {function content_595321a97a01a5_12717570($_smarty_tpl) {?>


<div class="dashboard upcomingReservationsDashboard" id="upcomingReservationsDashboard">
	<div class="dashboardHeader blue-bg2">
		<div class="pull-left"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>"UpcomingReservations"),$_smarty_tpl);?>
 <span class="badge"><?php echo $_smarty_tpl->tpl_vars['Total']->value;?>
</span></div>
		<div class="pull-right">
			<a href="#" title="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'ShowHide'),$_smarty_tpl);?>
 <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>"UpcomingReservations"),$_smarty_tpl);?>
">
				<i class="glyphicon"></i>
			</a>
		</div>
		<div class="clearfix"></div>
	</div>
	<div class="dashboardContents">
		<?php $_smarty_tpl->tpl_vars['colspan'] = new Smarty_variable("5", null, 0);?>
		<?php if ($_smarty_tpl->tpl_vars['Total']->value>0) {?>
			<div>
				<div class="timespan">
					<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>"Today"),$_smarty_tpl);?>
 (<?php echo count($_smarty_tpl->tpl_vars['TodaysReservations']->value);?>
)
				</div>
				<?php  $_smarty_tpl->tpl_vars['reservation'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['reservation']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['TodaysReservations']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['reservation']->key => $_smarty_tpl->tpl_vars['reservation']->value) {
$_smarty_tpl->tpl_vars['reservation']->_loop = true;
?>
                    <?php echo $_smarty_tpl->getSubTemplate ('Dashboard/dashboard_reservation.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('reservation'=>$_smarty_tpl->tpl_vars['reservation']->value), 0);?>

				<?php } ?>

				<div class="timespan">
					<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>"Tomorrow"),$_smarty_tpl);?>
 (<?php echo count($_smarty_tpl->tpl_vars['TomorrowsReservations']->value);?>
)
				</div>
				<?php  $_smarty_tpl->tpl_vars['reservation'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['reservation']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['TomorrowsReservations']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['reservation']->key => $_smarty_tpl->tpl_vars['reservation']->value) {
$_smarty_tpl->tpl_vars['reservation']->_loop = true;
?>
                    <?php echo $_smarty_tpl->getSubTemplate ('Dashboard/dashboard_reservation.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('reservation'=>$_smarty_tpl->tpl_vars['reservation']->value), 0);?>

				<?php } ?>

				<div class="timespan">
					<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>"LaterThisWeek"),$_smarty_tpl);?>
 (<?php echo count($_smarty_tpl->tpl_vars['ThisWeeksReservations']->value);?>
)
				</div>
				<?php  $_smarty_tpl->tpl_vars['reservation'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['reservation']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['ThisWeeksReservations']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['reservation']->key => $_smarty_tpl->tpl_vars['reservation']->value) {
$_smarty_tpl->tpl_vars['reservation']->_loop = true;
?>
                    <?php echo $_smarty_tpl->getSubTemplate ('Dashboard/dashboard_reservation.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('reservation'=>$_smarty_tpl->tpl_vars['reservation']->value), 0);?>

				<?php } ?>

				<div class="timespan">
					<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>"NextWeek"),$_smarty_tpl);?>
 (<?php echo count($_smarty_tpl->tpl_vars['NextWeeksReservations']->value);?>
)
				</div>
				<?php  $_smarty_tpl->tpl_vars['reservation'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['reservation']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['NextWeeksReservations']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['reservation']->key => $_smarty_tpl->tpl_vars['reservation']->value) {
$_smarty_tpl->tpl_vars['reservation']->_loop = true;
?>
                    <?php echo $_smarty_tpl->getSubTemplate ('Dashboard/dashboard_reservation.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('reservation'=>$_smarty_tpl->tpl_vars['reservation']->value), 0);?>

				<?php } ?>
			</div>
		<?php } else { ?>
			<div class="noresults"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>"NoUpcomingReservations"),$_smarty_tpl);?>
</div>
		<?php }?>
	</div>

	<form id="form-checkin" method="post" action="ajax/reservation_checkin.php?action=<?php echo ReservationAction::Checkin;?>
">
		<input type="hidden" id="referenceNumber" <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0][0]->GetFormName(array('key'=>'REFERENCE_NUMBER'),$_smarty_tpl);?>
 />
		<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['csrf_token'][0][0]->CSRFToken(array(),$_smarty_tpl);?>

	</form>
</div>
<?php }} ?>
