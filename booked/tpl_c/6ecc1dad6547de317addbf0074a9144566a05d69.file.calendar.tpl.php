<?php /* Smarty version Smarty-3.1.16, created on 2017-05-05 11:10:24
         compiled from "/home/vol15_8/byethost8.com/b8_19720712/htdocs/booked/tpl/Calendar/calendar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:989754477590c95e01b90d7-12722533%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6ecc1dad6547de317addbf0074a9144566a05d69' => 
    array (
      0 => '/home/vol15_8/byethost8.com/b8_19720712/htdocs/booked/tpl/Calendar/calendar.tpl',
      1 => 1487738767,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '989754477590c95e01b90d7-12722533',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'IsSubscriptionAllowed' => 0,
    'IsSubscriptionEnabled' => 0,
    'SubscriptionUrl' => 0,
    'CalendarType' => 0,
    'DisplayDate' => 0,
    'ScheduleId' => 0,
    'ResourceId' => 0,
    'DayNames' => 0,
    'DayNamesShort' => 0,
    'MonthNames' => 0,
    'MonthNamesShort' => 0,
    'TimeFormat' => 0,
    'DateFormat' => 0,
    'FirstDay' => 0,
    'ResourceGroupsAsJson' => 0,
    'SelectedGroupNode' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_590c95e0230b16_71778949',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_590c95e0230b16_71778949')) {function content_590c95e0230b16_71778949($_smarty_tpl) {?>
<?php echo $_smarty_tpl->getSubTemplate ('globalheader.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('Select2'=>true,'Qtip'=>true,'Fullcalendar'=>true,'cssFiles'=>'scripts/css/jqtree.css'), 0);?>


<div class="page-calendar" style="margin-top: 8rem">
    <?php echo $_smarty_tpl->getSubTemplate ('Calendar/calendar.filter.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


    <div id="subscriptionContainer">
        <?php echo $_smarty_tpl->getSubTemplate ("Calendar/calendar.subscription.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('IsSubscriptionAllowed'=>$_smarty_tpl->tpl_vars['IsSubscriptionAllowed']->value,'IsSubscriptionEnabled'=>$_smarty_tpl->tpl_vars['IsSubscriptionEnabled']->value,'SubscriptionUrl'=>$_smarty_tpl->tpl_vars['SubscriptionUrl']->value), 0);?>

    </div>

    <div id="calendar"></div>

    <div id="dayDialog" class="default-box-shadow">
        <a href="#" id="dayDialogCreate"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['html_image'][0][0]->PrintImage(array('src'=>"tick.png"),$_smarty_tpl);?>
<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'CreateReservation'),$_smarty_tpl);?>
</a>
        <a href="#" id="dayDialogView"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['html_image'][0][0]->PrintImage(array('src'=>"search.png"),$_smarty_tpl);?>
<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'ViewDay'),$_smarty_tpl);?>
</a>
        <a href="#" id="dayDialogCancel"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['html_image'][0][0]->PrintImage(array('src'=>"slash.png"),$_smarty_tpl);?>
<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Cancel'),$_smarty_tpl);?>
</a>
    </div>

    <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['csrf_token'][0][0]->CSRFToken(array(),$_smarty_tpl);?>


    <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['jsfile'][0][0]->IncludeJavascriptFile(array('src'=>"reservationPopup.js"),$_smarty_tpl);?>

    <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['jsfile'][0][0]->IncludeJavascriptFile(array('src'=>"calendar.js"),$_smarty_tpl);?>

    <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['jsfile'][0][0]->IncludeJavascriptFile(array('src'=>"ajax-helpers.js"),$_smarty_tpl);?>

    <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['jsfile'][0][0]->IncludeJavascriptFile(array('src'=>"js/tree.jquery.js"),$_smarty_tpl);?>


    <script type="text/javascript">
        $(document).ready(function () {

            var options = {
                view: '<?php echo $_smarty_tpl->tpl_vars['CalendarType']->value;?>
',
                defaultDate: moment('<?php echo $_smarty_tpl->tpl_vars['DisplayDate']->value->Format('Y-m-d');?>
', 'YYYY-MM-DD'),
                todayText: '<?php ob_start();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Today'),$_smarty_tpl);?>
<?php $_tmp1=ob_get_clean();?><?php echo strtr($_tmp1, array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
',
                dayText: '<?php ob_start();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Day'),$_smarty_tpl);?>
<?php $_tmp2=ob_get_clean();?><?php echo strtr($_tmp2, array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
',
                monthText: '<?php ob_start();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Month'),$_smarty_tpl);?>
<?php $_tmp3=ob_get_clean();?><?php echo strtr($_tmp3, array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
',
                weekText: '<?php ob_start();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Week'),$_smarty_tpl);?>
<?php $_tmp4=ob_get_clean();?><?php echo strtr($_tmp4, array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
',
                dayClickUrl: '<?php echo Pages::CALENDAR;?>
?ct=<?php echo CalendarTypes::Day;?>
&sid=<?php echo strtr($_smarty_tpl->tpl_vars['ScheduleId']->value, array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
&rid=<?php echo strtr($_smarty_tpl->tpl_vars['ResourceId']->value, array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
',
                dayClickUrlTemplate: '<?php echo Pages::CALENDAR;?>
?ct=<?php echo CalendarTypes::Day;?>
&sid=[sid]&rid=[rid]',
                dayNames: <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['js_array'][0][0]->CreateJavascriptArray(array('array'=>$_smarty_tpl->tpl_vars['DayNames']->value),$_smarty_tpl);?>
,
                dayNamesShort: <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['js_array'][0][0]->CreateJavascriptArray(array('array'=>$_smarty_tpl->tpl_vars['DayNamesShort']->value),$_smarty_tpl);?>
,
                monthNames: <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['js_array'][0][0]->CreateJavascriptArray(array('array'=>$_smarty_tpl->tpl_vars['MonthNames']->value),$_smarty_tpl);?>
,
                monthNamesShort: <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['js_array'][0][0]->CreateJavascriptArray(array('array'=>$_smarty_tpl->tpl_vars['MonthNamesShort']->value),$_smarty_tpl);?>
,
                timeFormat: '<?php echo $_smarty_tpl->tpl_vars['TimeFormat']->value;?>
',
                dayMonth: '<?php echo $_smarty_tpl->tpl_vars['DateFormat']->value;?>
',
                firstDay: <?php echo $_smarty_tpl->tpl_vars['FirstDay']->value;?>
,
                reservationUrl: '<?php echo Pages::RESERVATION;?>
?sid=<?php echo strtr($_smarty_tpl->tpl_vars['ScheduleId']->value, array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
&rid=<?php echo strtr($_smarty_tpl->tpl_vars['ResourceId']->value, array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
',
                reservationUrlTemplate: '<?php echo Pages::RESERVATION;?>
?sid=[sid]&rid=[rid]',
                reservable: true,
                eventsUrl: '<?php echo Pages::CALENDAR;?>
',
                eventsData: {
                    dr: 'events',
                    sid: '',
                    rid: ''
                },
                getSubscriptionUrl: '<?php echo Pages::CALENDAR;?>
?dr=subscription',
            };

            var calendar = new Calendar(options);
            calendar.init();

            calendar.bindResourceGroups(<?php echo $_smarty_tpl->tpl_vars['ResourceGroupsAsJson']->value;?>
, <?php echo (($tmp = @$_smarty_tpl->tpl_vars['SelectedGroupNode']->value)===null||$tmp==='' ? 0 : $tmp);?>
);

        });
    </script>
</div>
<?php echo $_smarty_tpl->getSubTemplate ('globalfooter.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
