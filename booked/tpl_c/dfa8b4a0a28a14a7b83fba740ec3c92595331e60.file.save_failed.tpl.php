<?php /* Smarty version Smarty-3.1.16, created on 2017-06-27 23:22:52
         compiled from "/home/vol15_8/byethost8.com/b8_19720712/htdocs/booked/tpl/Ajax/reservation/save_failed.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3180415485953210c8c8834-19728729%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dfa8b4a0a28a14a7b83fba740ec3c92595331e60' => 
    array (
      0 => '/home/vol15_8/byethost8.com/b8_19720712/htdocs/booked/tpl/Ajax/reservation/save_failed.tpl',
      1 => 1487739391,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3180415485953210c8c8834-19728729',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'Errors' => 0,
    'each' => 0,
    'CanJoinWaitList' => 0,
    'CanBeRetried' => 0,
    'RetryParameters' => 0,
    'retryParam' => 0,
    'RetryMessages' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_5953210c961c35_00689863',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5953210c961c35_00689863')) {function content_5953210c961c35_00689863($_smarty_tpl) {?>
<div id="reservation-failed" class="reservationResponseMessage">
	<div id="reservation-response-image">
		<span class="fa fa-warning fa-5x error"></span>
	</div>

	<div id="failed-message" class="reservation-message"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'ReservationFailed'),$_smarty_tpl);?>
</div>

	<div class="error">
		<?php  $_smarty_tpl->tpl_vars['each'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['each']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['Errors']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['each']->key => $_smarty_tpl->tpl_vars['each']->value) {
$_smarty_tpl->tpl_vars['each']->_loop = true;
?>
			<div><?php echo nl2br($_smarty_tpl->tpl_vars['each']->value);?>
</div>
		<?php } ?>
	</div>

	<div>
		<button id="btnSaveFailed" class="btn btn-warning"><span
					class="fa fa-arrow-circle-left"></span> <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'ReservationErrors'),$_smarty_tpl);?>
</button>

        <?php if ($_smarty_tpl->tpl_vars['CanJoinWaitList']->value) {?>
            <button id="btnWaitList" class="btn btn-info"><span
					class="fa fa-bell-o"></span> <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'NotifyWhenAvailable'),$_smarty_tpl);?>
</button>
        <?php }?>

		<?php if ($_smarty_tpl->tpl_vars['CanBeRetried']->value) {?>
			<div id="retryParams" class="no-show">
				<?php  $_smarty_tpl->tpl_vars['retryParam'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['retryParam']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['RetryParameters']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['retryParam']->key => $_smarty_tpl->tpl_vars['retryParam']->value) {
$_smarty_tpl->tpl_vars['retryParam']->_loop = true;
?>
					<input type="hidden" id="<?php echo $_smarty_tpl->tpl_vars['retryParam']->value->Name();?>
"
						   name="<?php echo FormKeys::RESERVATION_RETRY_PREFIX;?>
[<?php echo $_smarty_tpl->tpl_vars['retryParam']->value->Name();?>
]"
						   value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['retryParam']->value->Value(), ENT_QUOTES, 'UTF-8', true);?>
"/>
				<?php } ?>
			</div>
			<div id="retryMessages" class="no-show">
				<?php  $_smarty_tpl->tpl_vars['each'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['each']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['RetryMessages']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['each']->key => $_smarty_tpl->tpl_vars['each']->value) {
$_smarty_tpl->tpl_vars['each']->_loop = true;
?>
					<div><?php echo nl2br($_smarty_tpl->tpl_vars['each']->value);?>
</div>
				<?php } ?>
			</div>
			<button id="btnRetry" class="btn btn-success"><span class="fa fa-refresh"></span> <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Retry'),$_smarty_tpl);?>

			</button>
			<div id="retryToolTip" class="inline"><i class="fa fa-info-circle"></i></div>
		<?php }?>
	</div>
</div>


<script type="text/javascript">
	$(document).ready(function () {
		$('#reservation-failed').trigger('loaded');
	});
</script><?php }} ?>
