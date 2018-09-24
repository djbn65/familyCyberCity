<?php /* Smarty version Smarty-3.1.16, created on 2017-06-29 11:51:40
         compiled from "/home/vol15_8/byethost8.com/b8_19720712/htdocs/booked/tpl/Calendar/mycalendar.subscription.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20110368695955220cee8a63-47898948%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'df92c189f84de2d30f72db6c4ebf14c9cedcd898' => 
    array (
      0 => '/home/vol15_8/byethost8.com/b8_19720712/htdocs/booked/tpl/Calendar/mycalendar.subscription.tpl',
      1 => 1487738767,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20110368695955220cee8a63-47898948',
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
  'unifunc' => 'content_5955220cf0d5f4_45531742',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5955220cf0d5f4_45531742')) {function content_5955220cf0d5f4_45531742($_smarty_tpl) {?>
<div id="calendarSubscription" class="calendar-subscription">
    <?php if ($_smarty_tpl->tpl_vars['IsSubscriptionAllowed']->value&&$_smarty_tpl->tpl_vars['IsSubscriptionEnabled']->value) {?>
        <a href="#" id="turnOffSubscription"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['html_image'][0][0]->PrintImage(array('src'=>"switch-minus.png"),$_smarty_tpl);?>
 <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'TurnOffSubscription'),$_smarty_tpl);?>
</a>
        <?php if ($_smarty_tpl->tpl_vars['IsSubscriptionEnabled']->value) {?>
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
    <?php } elseif ($_smarty_tpl->tpl_vars['IsSubscriptionEnabled']->value) {?>
        <a href="#" id="turnOnSubscription"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['html_image'][0][0]->PrintImage(array('src'=>"switch-plus.png"),$_smarty_tpl);?>
 <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'TurnOnSubscription'),$_smarty_tpl);?>
</a>
    <?php }?>
</div><?php }} ?>
