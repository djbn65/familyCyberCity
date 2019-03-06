<?php /* Smarty version Smarty-3.1.16, created on 2017-05-05 11:10:24
         compiled from "/home/vol15_8/byethost8.com/b8_19720712/htdocs/booked/tpl/Calendar/calendar.subscription.tpl" */ ?>
<?php /*%%SmartyHeaderCode:204892363590c95e03a3029-24227813%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '45114f5f0156fb4ef37f90ee874ce6d67fe75aa6' => 
    array (
      0 => '/home/vol15_8/byethost8.com/b8_19720712/htdocs/booked/tpl/Calendar/calendar.subscription.tpl',
      1 => 1487738769,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '204892363590c95e03a3029-24227813',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'IsSubscriptionAllowed' => 0,
    'IsSubscriptionEnabled' => 0,
    'SubscriptionUrl' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_590c95e03bf725_99078599',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_590c95e03bf725_99078599')) {function content_590c95e03bf725_99078599($_smarty_tpl) {?><div id="calendarSubscription" class="calendar-subscription">
    <?php if ($_smarty_tpl->tpl_vars['IsSubscriptionAllowed']->value&&$_smarty_tpl->tpl_vars['IsSubscriptionEnabled']->value) {?>
        <a id="subscribeToCalendar"
           href="<?php echo $_smarty_tpl->tpl_vars['SubscriptionUrl']->value;?>
"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['html_image'][0][0]->PrintImage(array('src'=>"calendar-share.png"),$_smarty_tpl);?>
 <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'SubscribeToCalendar'),$_smarty_tpl);?>
</a>
        <br/>
        URL:
        <span class="note"><?php echo $_smarty_tpl->tpl_vars['SubscriptionUrl']->value;?>
</span>
    <?php }?>
</div>

<?php }} ?>
