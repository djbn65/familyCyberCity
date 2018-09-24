<?php /* Smarty version Smarty-3.1.16, created on 2017-02-25 14:47:49
         compiled from "/home/vol15_8/byethost8.com/b8_19720712/htdocs/booked/tpl/Schedule/schedule-flipped.tpl" */ ?>
<?php /*%%SmartyHeaderCode:174494697558b1df65823730-12407423%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6be1ecc691bf0177e09fa61d66143a3df7b5eba8' => 
    array (
      0 => '/home/vol15_8/byethost8.com/b8_19720712/htdocs/booked/tpl/Schedule/schedule-flipped.tpl',
      1 => 1487738847,
      2 => 'file',
    ),
    '29832d5ff0b08161c55d41b971ac9e07c21d7f7a' => 
    array (
      0 => '/home/vol15_8/byethost8.com/b8_19720712/htdocs/booked/tpl/Schedule/schedule.tpl',
      1 => 1487742691,
      2 => 'file',
    ),
    'fe8b400ff048d25c6018e32462c39f8f120f98c4' => 
    array (
      0 => '/home/vol15_8/byethost8.com/b8_19720712/htdocs/booked/tpl/globalheader.tpl',
      1 => 1487737789,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '174494697558b1df65823730-12407423',
  'function' => 
  array (
    'displayGeneralReserved' => 
    array (
      'parameter' => 
      array (
      ),
      'compiled' => '',
    ),
    'displayMyReserved' => 
    array (
      'parameter' => 
      array (
      ),
      'compiled' => '',
    ),
    'displayMyParticipating' => 
    array (
      'parameter' => 
      array (
      ),
      'compiled' => '',
    ),
    'displayReserved' => 
    array (
      'parameter' => 
      array (
      ),
      'compiled' => '',
    ),
    'displayPastTime' => 
    array (
      'parameter' => 
      array (
      ),
      'compiled' => '',
    ),
    'displayReservable' => 
    array (
      'parameter' => 
      array (
      ),
      'compiled' => '',
    ),
    'displayRestricted' => 
    array (
      'parameter' => 
      array (
      ),
      'compiled' => '',
    ),
    'displayUnreservable' => 
    array (
      'parameter' => 
      array (
      ),
      'compiled' => '',
    ),
    'displaySlot' => 
    array (
      'parameter' => 
      array (
      ),
      'compiled' => '',
    ),
  ),
  'variables' => 
  array (
    'ExtendViewPrefix' => 0,
    'Slot' => 0,
    'spantype' => 0,
    'class' => 0,
    'OwnershipClass' => 0,
    'color' => 0,
    'Draggable' => 0,
    'ResourceId' => 0,
    'SlotLabelFactory' => 0,
    'Href' => 0,
    'SlotRef' => 0,
    'CanViewAdmin' => 0,
    'AccessAllowed' => 0,
    'DisplaySlotFactory' => 0,
    'ShowResourceWarning' => 0,
    'IsAccessible' => 0,
    'SubscriptionUrl' => 0,
    'ScheduleName' => 0,
    'Schedules' => 0,
    'schedule' => 0,
    'TodaysDate' => 0,
    'DisplayDates' => 0,
    'PreviousDate' => 0,
    'FirstDate' => 0,
    'LastDate' => 0,
    'NextDate' => 0,
    'ShowFullWeekLink' => 0,
    'LoggedIn' => 0,
    'ResourceAttributes' => 0,
    'ResourceTypeAttributes' => 0,
    'MaxParticipantsFilter' => 0,
    'ResourceTypes' => 0,
    'ResourceTypeIdFilter' => 0,
    'attribute' => 0,
    'ScheduleId' => 0,
    'SpecificDates' => 0,
    'd' => 0,
    'BoundDates' => 0,
    'date' => 0,
    'ts' => 0,
    'DailyLayout' => 0,
    'periods' => 0,
    'period' => 0,
    'Resources' => 0,
    'resource' => 0,
    'resourceId' => 0,
    'CreateReservationPage' => 0,
    'href' => 0,
    'slots' => 0,
    'slot' => 0,
    'slotRef' => 0,
    'Path' => 0,
    'CookieName' => 0,
    'ScriptUrl' => 0,
    'ResourceIds' => 0,
    'ResourceGroupsAsJson' => 0,
    'PopupMonths' => 0,
    'FirstWeekday' => 0,
  ),
  'has_nocache_code' => 0,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_58b1df6617d552_04877526',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58b1df6617d552_04877526')) {function content_58b1df6617d552_04877526($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_regex_replace')) include '/home/vol15_8/byethost8.com/b8_19720712/htdocs/booked/lib/Common/../../lib/external/Smarty/plugins/modifier.regex_replace.php';
?>



<?php if (!function_exists('smarty_template_function_displayGeneralReserved')) {
    function smarty_template_function_displayGeneralReserved($_smarty_tpl,$params) {
    $saved_tpl_vars = $_smarty_tpl->tpl_vars;
    foreach ($_smarty_tpl->smarty->template_functions['displayGeneralReserved']['parameter'] as $key => $value) {$_smarty_tpl->tpl_vars[$key] = new Smarty_variable($value);};
    foreach ($params as $key => $value) {$_smarty_tpl->tpl_vars[$key] = new Smarty_variable($value);}?>
	<?php if ($_smarty_tpl->tpl_vars['Slot']->value->IsPending()) {?>
		<?php $_smarty_tpl->tpl_vars['class'] = new Smarty_variable('pending', null, 0);?>
	<?php }?>
	<?php if ($_smarty_tpl->tpl_vars['Slot']->value->HasCustomColor()) {?>
		<?php $_smarty_tpl->tpl_vars['color'] = new Smarty_variable((((('style="background-color:').($_smarty_tpl->tpl_vars['Slot']->value->Color())).(';color:')).($_smarty_tpl->tpl_vars['Slot']->value->TextColor())).(';"'), null, 0);?>
	<?php }?>
	<td <?php echo (($tmp = @$_smarty_tpl->tpl_vars['spantype']->value)===null||$tmp==='' ? 'col' : $tmp);?>
span="<?php echo $_smarty_tpl->tpl_vars['Slot']->value->PeriodSpan();?>
" class="reserved <?php echo $_smarty_tpl->tpl_vars['class']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['OwnershipClass']->value;?>
 clickres slot"
		resid="<?php echo $_smarty_tpl->tpl_vars['Slot']->value->Id();?>
" <?php echo $_smarty_tpl->tpl_vars['color']->value;?>
 <?php if ($_smarty_tpl->tpl_vars['Draggable']->value) {?>draggable="true"<?php }?> data-resourceId="<?php echo $_smarty_tpl->tpl_vars['ResourceId']->value;?>
"
		id="<?php echo $_smarty_tpl->tpl_vars['Slot']->value->Id();?>
|<?php echo $_smarty_tpl->tpl_vars['Slot']->value->Date()->Format('Ymd');?>
"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escapequotes'][0][0]->EscapeQuotes($_smarty_tpl->tpl_vars['Slot']->value->Label($_smarty_tpl->tpl_vars['SlotLabelFactory']->value));?>
</td>
<?php $_smarty_tpl->tpl_vars = $saved_tpl_vars;
foreach (Smarty::$global_tpl_vars as $key => $value) if(!isset($_smarty_tpl->tpl_vars[$key])) $_smarty_tpl->tpl_vars[$key] = $value;}}?>


<?php if (!function_exists('smarty_template_function_displayMyReserved')) {
    function smarty_template_function_displayMyReserved($_smarty_tpl,$params) {
    $saved_tpl_vars = $_smarty_tpl->tpl_vars;
    foreach ($_smarty_tpl->smarty->template_functions['displayMyReserved']['parameter'] as $key => $value) {$_smarty_tpl->tpl_vars[$key] = new Smarty_variable($value);};
    foreach ($params as $key => $value) {$_smarty_tpl->tpl_vars[$key] = new Smarty_variable($value);}?>
	<?php smarty_template_function_displayGeneralReserved($_smarty_tpl,array('Slot'=>$_smarty_tpl->tpl_vars['Slot']->value,'Href'=>$_smarty_tpl->tpl_vars['Href']->value,'SlotRef'=>$_smarty_tpl->tpl_vars['SlotRef']->value,'OwnershipClass'=>'mine','Draggable'=>true,'ResourceId'=>$_smarty_tpl->tpl_vars['ResourceId']->value));?>

<?php $_smarty_tpl->tpl_vars = $saved_tpl_vars;
foreach (Smarty::$global_tpl_vars as $key => $value) if(!isset($_smarty_tpl->tpl_vars[$key])) $_smarty_tpl->tpl_vars[$key] = $value;}}?>


<?php if (!function_exists('smarty_template_function_displayMyParticipating')) {
    function smarty_template_function_displayMyParticipating($_smarty_tpl,$params) {
    $saved_tpl_vars = $_smarty_tpl->tpl_vars;
    foreach ($_smarty_tpl->smarty->template_functions['displayMyParticipating']['parameter'] as $key => $value) {$_smarty_tpl->tpl_vars[$key] = new Smarty_variable($value);};
    foreach ($params as $key => $value) {$_smarty_tpl->tpl_vars[$key] = new Smarty_variable($value);}?>
	<?php smarty_template_function_displayGeneralReserved($_smarty_tpl,array('Slot'=>$_smarty_tpl->tpl_vars['Slot']->value,'Href'=>$_smarty_tpl->tpl_vars['Href']->value,'SlotRef'=>$_smarty_tpl->tpl_vars['SlotRef']->value,'OwnershipClass'=>'participating','ResourceId'=>$_smarty_tpl->tpl_vars['ResourceId']->value));?>

<?php $_smarty_tpl->tpl_vars = $saved_tpl_vars;
foreach (Smarty::$global_tpl_vars as $key => $value) if(!isset($_smarty_tpl->tpl_vars[$key])) $_smarty_tpl->tpl_vars[$key] = $value;}}?>


<?php if (!function_exists('smarty_template_function_displayReserved')) {
    function smarty_template_function_displayReserved($_smarty_tpl,$params) {
    $saved_tpl_vars = $_smarty_tpl->tpl_vars;
    foreach ($_smarty_tpl->smarty->template_functions['displayReserved']['parameter'] as $key => $value) {$_smarty_tpl->tpl_vars[$key] = new Smarty_variable($value);};
    foreach ($params as $key => $value) {$_smarty_tpl->tpl_vars[$key] = new Smarty_variable($value);}?>
	<?php smarty_template_function_displayGeneralReserved($_smarty_tpl,array('Slot'=>$_smarty_tpl->tpl_vars['Slot']->value,'Href'=>$_smarty_tpl->tpl_vars['Href']->value,'SlotRef'=>$_smarty_tpl->tpl_vars['SlotRef']->value,'OwnershipClass'=>'','Draggable'=>((string)$_smarty_tpl->tpl_vars['CanViewAdmin']->value),'ResourceId'=>$_smarty_tpl->tpl_vars['ResourceId']->value));?>

<?php $_smarty_tpl->tpl_vars = $saved_tpl_vars;
foreach (Smarty::$global_tpl_vars as $key => $value) if(!isset($_smarty_tpl->tpl_vars[$key])) $_smarty_tpl->tpl_vars[$key] = $value;}}?>


<?php if (!function_exists('smarty_template_function_displayPastTime')) {
    function smarty_template_function_displayPastTime($_smarty_tpl,$params) {
    $saved_tpl_vars = $_smarty_tpl->tpl_vars;
    foreach ($_smarty_tpl->smarty->template_functions['displayPastTime']['parameter'] as $key => $value) {$_smarty_tpl->tpl_vars[$key] = new Smarty_variable($value);};
    foreach ($params as $key => $value) {$_smarty_tpl->tpl_vars[$key] = new Smarty_variable($value);}?>
	<td <?php echo (($tmp = @$_smarty_tpl->tpl_vars['spantype']->value)===null||$tmp==='' ? 'col' : $tmp);?>
span="<?php echo $_smarty_tpl->tpl_vars['Slot']->value->PeriodSpan();?>
" ref="<?php echo $_smarty_tpl->tpl_vars['SlotRef']->value;?>
"
		class="pasttime slot" draggable="<?php echo $_smarty_tpl->tpl_vars['CanViewAdmin']->value;?>
" resid="<?php echo $_smarty_tpl->tpl_vars['Slot']->value->Id();?>
" data-resourceId="<?php echo $_smarty_tpl->tpl_vars['ResourceId']->value;?>
"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escapequotes'][0][0]->EscapeQuotes($_smarty_tpl->tpl_vars['Slot']->value->Label($_smarty_tpl->tpl_vars['SlotLabelFactory']->value));?>
</td>
<?php $_smarty_tpl->tpl_vars = $saved_tpl_vars;
foreach (Smarty::$global_tpl_vars as $key => $value) if(!isset($_smarty_tpl->tpl_vars[$key])) $_smarty_tpl->tpl_vars[$key] = $value;}}?>


<?php if (!function_exists('smarty_template_function_displayReservable')) {
    function smarty_template_function_displayReservable($_smarty_tpl,$params) {
    $saved_tpl_vars = $_smarty_tpl->tpl_vars;
    foreach ($_smarty_tpl->smarty->template_functions['displayReservable']['parameter'] as $key => $value) {$_smarty_tpl->tpl_vars[$key] = new Smarty_variable($value);};
    foreach ($params as $key => $value) {$_smarty_tpl->tpl_vars[$key] = new Smarty_variable($value);}?>
	<td <?php echo (($tmp = @$_smarty_tpl->tpl_vars['spantype']->value)===null||$tmp==='' ? 'col' : $tmp);?>
span="<?php echo $_smarty_tpl->tpl_vars['Slot']->value->PeriodSpan();?>
" ref="<?php echo $_smarty_tpl->tpl_vars['SlotRef']->value;?>
" class="reservable clickres slot" data-href="<?php echo $_smarty_tpl->tpl_vars['Href']->value;?>
"
		data-start="<?php echo rawurlencode($_smarty_tpl->tpl_vars['Slot']->value->BeginDate()->Format('Y-m-d H:i:s'));?>
" data-end="<?php echo rawurlencode($_smarty_tpl->tpl_vars['Slot']->value->EndDate()->Format('Y-m-d H:i:s'));?>
"
		data-resourceId="<?php echo $_smarty_tpl->tpl_vars['ResourceId']->value;?>
">&nbsp;</td>
<?php $_smarty_tpl->tpl_vars = $saved_tpl_vars;
foreach (Smarty::$global_tpl_vars as $key => $value) if(!isset($_smarty_tpl->tpl_vars[$key])) $_smarty_tpl->tpl_vars[$key] = $value;}}?>


<?php if (!function_exists('smarty_template_function_displayRestricted')) {
    function smarty_template_function_displayRestricted($_smarty_tpl,$params) {
    $saved_tpl_vars = $_smarty_tpl->tpl_vars;
    foreach ($_smarty_tpl->smarty->template_functions['displayRestricted']['parameter'] as $key => $value) {$_smarty_tpl->tpl_vars[$key] = new Smarty_variable($value);};
    foreach ($params as $key => $value) {$_smarty_tpl->tpl_vars[$key] = new Smarty_variable($value);}?>
	<td <?php echo (($tmp = @$_smarty_tpl->tpl_vars['spantype']->value)===null||$tmp==='' ? 'col' : $tmp);?>
span="<?php echo $_smarty_tpl->tpl_vars['Slot']->value->PeriodSpan();?>
" class="restricted slot">&nbsp;</td>
<?php $_smarty_tpl->tpl_vars = $saved_tpl_vars;
foreach (Smarty::$global_tpl_vars as $key => $value) if(!isset($_smarty_tpl->tpl_vars[$key])) $_smarty_tpl->tpl_vars[$key] = $value;}}?>


<?php if (!function_exists('smarty_template_function_displayUnreservable')) {
    function smarty_template_function_displayUnreservable($_smarty_tpl,$params) {
    $saved_tpl_vars = $_smarty_tpl->tpl_vars;
    foreach ($_smarty_tpl->smarty->template_functions['displayUnreservable']['parameter'] as $key => $value) {$_smarty_tpl->tpl_vars[$key] = new Smarty_variable($value);};
    foreach ($params as $key => $value) {$_smarty_tpl->tpl_vars[$key] = new Smarty_variable($value);}?>
	<td <?php echo (($tmp = @$_smarty_tpl->tpl_vars['spantype']->value)===null||$tmp==='' ? 'col' : $tmp);?>
span="<?php echo $_smarty_tpl->tpl_vars['Slot']->value->PeriodSpan();?>
"
		class="unreservable slot"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['Slot']->value->Label($_smarty_tpl->tpl_vars['SlotLabelFactory']->value), ENT_QUOTES, 'UTF-8', true);?>
</td>
<?php $_smarty_tpl->tpl_vars = $saved_tpl_vars;
foreach (Smarty::$global_tpl_vars as $key => $value) if(!isset($_smarty_tpl->tpl_vars[$key])) $_smarty_tpl->tpl_vars[$key] = $value;}}?>


<?php if (!function_exists('smarty_template_function_displaySlot')) {
    function smarty_template_function_displaySlot($_smarty_tpl,$params) {
    $saved_tpl_vars = $_smarty_tpl->tpl_vars;
    foreach ($_smarty_tpl->smarty->template_functions['displaySlot']['parameter'] as $key => $value) {$_smarty_tpl->tpl_vars[$key] = new Smarty_variable($value);};
    foreach ($params as $key => $value) {$_smarty_tpl->tpl_vars[$key] = new Smarty_variable($value);}?>
	<?php $tmp = "smarty_template_function_".$_smarty_tpl->tpl_vars['DisplaySlotFactory']->value->GetFunction($_smarty_tpl->tpl_vars['Slot']->value,$_smarty_tpl->tpl_vars['AccessAllowed']->value); $tmp($_smarty_tpl,array('Slot'=>$_smarty_tpl->tpl_vars['Slot']->value,'Href'=>$_smarty_tpl->tpl_vars['Href']->value,'SlotRef'=>$_smarty_tpl->tpl_vars['SlotRef']->value,'ResourceId'=>$_smarty_tpl->tpl_vars['ResourceId']->value));?>

<?php $_smarty_tpl->tpl_vars = $saved_tpl_vars;
foreach (Smarty::$global_tpl_vars as $key => $value) if(!isset($_smarty_tpl->tpl_vars[$key])) $_smarty_tpl->tpl_vars[$key] = $value;}}?>





	<?php /*  Call merged included template "globalheader.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate('globalheader.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('Qtip'=>true,'cssFiles'=>'scripts/css/jqtree.css','printCssFiles'=>'css/schedule.print.css'), 0, '174494697558b1df65823730-12407423');
content_58b1df65984c57_71072450($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "globalheader.tpl" */?>


<div id="page-schedule" style="margin-top: 8rem">

	<?php if ($_smarty_tpl->tpl_vars['ShowResourceWarning']->value) {?>
		<div class="alert alert-warning no-resource-warning"><span class="fa fa-warning"></span> <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'NoResources'),$_smarty_tpl);?>
 <a
					href="admin/manage_resources.php"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'AddResource'),$_smarty_tpl);?>
</a></div>
	<?php }?>

	<?php if ($_smarty_tpl->tpl_vars['IsAccessible']->value) {?>

	<div id="defaultSetMessage" class="alert alert-success hidden">
		<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'DefaultScheduleSet'),$_smarty_tpl);?>

	</div>

	
		<div class="row-fluid">
			<div id="schedule-actions" class="col-md-3">
				
					<a href="#" id="make_default" style="display:none;"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['html_image'][0][0]->PrintImage(array('src'=>"star_boxed_full.png",'altKey'=>"MakeDefaultSchedule"),$_smarty_tpl);?>
</a>
					<a href="#" class="schedule-style" id="schedule_standard"
					   schedule-display="<?php echo ScheduleStyle::Standard;?>
"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['html_image'][0][0]->PrintImage(array('src'=>"table.png",'altKey'=>"StandardScheduleDisplay"),$_smarty_tpl);?>
</a>
					<a href="#" class="schedule-style" id="schedule_tall"
					   schedule-display="<?php echo ScheduleStyle::Tall;?>
"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['html_image'][0][0]->PrintImage(array('src'=>"table-tall.png",'altKey'=>"TallScheduleDisplay"),$_smarty_tpl);?>
</a>
					<a href="#" class="schedule-style hidden-sm hidden-xs" id="schedule_wide"
					   schedule-display="<?php echo ScheduleStyle::Wide;?>
"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['html_image'][0][0]->PrintImage(array('src'=>"table-wide.png",'altKey'=>"WideScheduleDisplay"),$_smarty_tpl);?>
</a>
					<a href="#" class="schedule-style hidden-sm hidden-xs" id="schedule_week"
					   schedule-display="<?php echo ScheduleStyle::CondensedWeek;?>
"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['html_image'][0][0]->PrintImage(array('src'=>"table-week.png",'altKey'=>"CondensedWeekScheduleDisplay"),$_smarty_tpl);?>
</a>
					<div>
						<?php if ($_smarty_tpl->tpl_vars['SubscriptionUrl']->value!=null) {?>
							<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['html_image'][0][0]->PrintImage(array('src'=>"feed.png"),$_smarty_tpl);?>

							<a target="_blank" href="<?php echo $_smarty_tpl->tpl_vars['SubscriptionUrl']->value->GetAtomUrl();?>
">Atom</a>
							|
							<a target="_blank" href="<?php echo $_smarty_tpl->tpl_vars['SubscriptionUrl']->value->GetWebcalUrl();?>
">iCalendar</a>
						<?php }?>
					</div>
				
			</div>

			<div id="schedule-title" class="schedule_title col-md-6">
				<span><?php echo $_smarty_tpl->tpl_vars['ScheduleName']->value;?>
</span>
				<?php if (count($_smarty_tpl->tpl_vars['Schedules']->value)>1) {?>
					<div class="dropdown btn-group">
						<a class="btn dropdown-toggle" data-toggle="dropdown" href="#" id="scheduleListDropdown"><span class="caret dropdown-toggle"></span></a>
						<ul class="dropdown-menu" role="menu">
							<?php  $_smarty_tpl->tpl_vars['schedule'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['schedule']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['Schedules']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['schedule']->key => $_smarty_tpl->tpl_vars['schedule']->value) {
$_smarty_tpl->tpl_vars['schedule']->_loop = true;
?>
								<li><a href="#" class="schedule-id" data-scheduleid="<?php echo $_smarty_tpl->tpl_vars['schedule']->value->GetId();?>
"><?php echo $_smarty_tpl->tpl_vars['schedule']->value->GetName();?>
</a></li>
							<?php } ?>
						</ul>
					</div>
				<?php }?>
				<a href="#" id="calendar_toggle" title="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'ShowHideNavigation'),$_smarty_tpl);?>
">
					<span class="glyphicon glyphicon-calendar"></span>
				</a>
				<div id="individualDates">
					<div class="checkbox inline">
						<input type='checkbox' id='multidateselect'/>
						<label for='multidateselect'><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'SpecificDates'),$_smarty_tpl);?>
</label>
					</div>
					<a class="btn btn-default btn-sm" href="#" id="individualDatesGo"><i class="fa fa-angle-double-right"></i></a>
				</div>
				<div id="individualDatesList"></div>
			</div>

			<?php $_smarty_tpl->_capture_stack[0][] = array("date_navigation", null, null); ob_start(); ?>
				<div class="row">
				<div class="schedule-dates col-lg-3 col-md-12">
					<?php $_smarty_tpl->tpl_vars['TodaysDate'] = new Smarty_variable(Date::Now(), null, 0);?>
					<a href="#" class="change-date btn-link btn-success" data-year="<?php echo $_smarty_tpl->tpl_vars['TodaysDate']->value->Year();?>
" data-month="<?php echo $_smarty_tpl->tpl_vars['TodaysDate']->value->Month();?>
" data-day="<?php echo $_smarty_tpl->tpl_vars['TodaysDate']->value->Day();?>
" alt="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Today'),$_smarty_tpl);?>
"><i class="fa fa-home"></i></a>
					<?php $_smarty_tpl->tpl_vars['FirstDate'] = new Smarty_variable($_smarty_tpl->tpl_vars['DisplayDates']->value->GetBegin(), null, 0);?>
					<?php $_smarty_tpl->tpl_vars['LastDate'] = new Smarty_variable($_smarty_tpl->tpl_vars['DisplayDates']->value->GetEnd()->AddDays(-1), null, 0);?>
					<a href="#" class="change-date" data-year="<?php echo $_smarty_tpl->tpl_vars['PreviousDate']->value->Year();?>
" data-month="<?php echo $_smarty_tpl->tpl_vars['PreviousDate']->value->Month();?>
"
					   data-day="<?php echo $_smarty_tpl->tpl_vars['PreviousDate']->value->Day();?>
"><?php ob_start();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Back'),$_smarty_tpl);?>
<?php $_tmp1=ob_get_clean();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['html_image'][0][0]->PrintImage(array('src'=>"arrow_large_left.png",'alt'=>$_tmp1),$_smarty_tpl);?>
</a>
					<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formatdate'][0][0]->FormatDate(array('date'=>$_smarty_tpl->tpl_vars['FirstDate']->value),$_smarty_tpl);?>
 - <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formatdate'][0][0]->FormatDate(array('date'=>$_smarty_tpl->tpl_vars['LastDate']->value),$_smarty_tpl);?>

					<a href="#" class="change-date" data-year="<?php echo $_smarty_tpl->tpl_vars['NextDate']->value->Year();?>
" data-month="<?php echo $_smarty_tpl->tpl_vars['NextDate']->value->Month();?>
"
					   data-day="<?php echo $_smarty_tpl->tpl_vars['NextDate']->value->Day();?>
"><?php ob_start();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Forward'),$_smarty_tpl);?>
<?php $_tmp2=ob_get_clean();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['html_image'][0][0]->PrintImage(array('src'=>"arrow_large_right.png",'alt'=>$_tmp2),$_smarty_tpl);?>
</a>

					<?php if ($_smarty_tpl->tpl_vars['ShowFullWeekLink']->value) {?>
						<a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['add_querystring'][0][0]->AddQueryString(array('key'=>'SHOW_FULL_WEEK','value'=>1),$_smarty_tpl);?>
"
						   id="showFullWeek">(<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'ShowFullWeek'),$_smarty_tpl);?>
)</a>
					<?php }?>
				</div>
				</div>
			<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

			<?php echo Smarty::$_smarty_vars['capture']['date_navigation'];?>

		</div>
		<div type="text" id="datepicker" style="display:none;"></div>
	

	
		<div class="hidden-xs row-fluid col-sm-12 schedule-legend">
			<div class="center">
				<div class="legend reservable"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Reservable'),$_smarty_tpl);?>
</div>
				<div class="legend unreservable"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Unreservable'),$_smarty_tpl);?>
</div>
				<div class="legend reserved"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Reserved'),$_smarty_tpl);?>
</div>
				<?php if ($_smarty_tpl->tpl_vars['LoggedIn']->value) {?>
				<div class="legend reserved mine"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'MyReservation'),$_smarty_tpl);?>
</div>
				<div class="legend reserved participating"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Participant'),$_smarty_tpl);?>
</div>
				<?php }?>
				<div class="legend reserved pending"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Pending'),$_smarty_tpl);?>
</div>
				<div class="legend pasttime"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Past'),$_smarty_tpl);?>
</div>
				<div class="legend restricted"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Restricted'),$_smarty_tpl);?>
</div>
			</div>
		</div>
	

	<div class="row-fluid">
		<div id="reservations-left" class="col-md-2 col-sm-12 default-box">
			<div class="reservations-left-header"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'ResourceFilter'),$_smarty_tpl);?>

				<a href="#" class="pull-right toggle-sidebar" title="Hide Reservation Filter"><i class="glyphicon glyphicon-remove"></i></a>
			</div>

			<div class="reservations-left-content">
				<form method="get" role="form" id="advancedFilter">

					<?php if (count($_smarty_tpl->tpl_vars['ResourceAttributes']->value)+count($_smarty_tpl->tpl_vars['ResourceTypeAttributes']->value)>5) {?>
						<div>
							<input type="submit" value="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Filter'),$_smarty_tpl);?>
" class="btn btn-success btn-sm" <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0][0]->GetFormName(array('key'=>'SUBMIT'),$_smarty_tpl);?>
/>
						</div>
					<?php }?>

					<div>
						
						<div id="resourceGroups"></div>
					</div>
					<div class="resettable">
						<div class="form-group">
							<label for="maxCapactiy"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'MinimumCapacity'),$_smarty_tpl);?>
</label>
							<input type='number' min='0' id='maxCapactiy' size='5' maxlength='5'
								   class="form-control input-sm" <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0][0]->GetFormName(array('key'=>'MAX_PARTICIPANTS'),$_smarty_tpl);?>

								   value="<?php echo $_smarty_tpl->tpl_vars['MaxParticipantsFilter']->value;?>
"/>
						</div>

						<div class="form-group">
							<label for="resourceType"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'ResourceType'),$_smarty_tpl);?>
</label>
							<select id="resourceType" <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0][0]->GetFormName(array('key'=>'RESOURCE_TYPE_ID'),$_smarty_tpl);?>
 <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0][0]->GetFormName(array('key'=>'RESOURCE_TYPE_ID'),$_smarty_tpl);?>
 class="form-control input-sm">
								<option value="">- <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'All'),$_smarty_tpl);?>
 -</option>
								<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['object_html_options'][0][0]->ObjectHtmlOptions(array('options'=>$_smarty_tpl->tpl_vars['ResourceTypes']->value,'label'=>'Name','key'=>'Id','selected'=>$_smarty_tpl->tpl_vars['ResourceTypeIdFilter']->value),$_smarty_tpl);?>

							</select>
						</div>

						<?php  $_smarty_tpl->tpl_vars['attribute'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['attribute']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['ResourceAttributes']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['attribute']->key => $_smarty_tpl->tpl_vars['attribute']->value) {
$_smarty_tpl->tpl_vars['attribute']->_loop = true;
?>
							<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['control'][0][0]->DisplayControl(array('type'=>"AttributeControl",'attribute'=>$_smarty_tpl->tpl_vars['attribute']->value,'align'=>'vertical','searchmode'=>true,'namePrefix'=>'r','inputClass'=>"input-sm"),$_smarty_tpl);?>

						<?php } ?>

						<?php  $_smarty_tpl->tpl_vars['attribute'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['attribute']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['ResourceTypeAttributes']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['attribute']->key => $_smarty_tpl->tpl_vars['attribute']->value) {
$_smarty_tpl->tpl_vars['attribute']->_loop = true;
?>
							<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['control'][0][0]->DisplayControl(array('type'=>"AttributeControl",'attribute'=>$_smarty_tpl->tpl_vars['attribute']->value,'align'=>'vertical','searchmode'=>true,'namePrefix'=>'rt','inputClass'=>"input-sm"),$_smarty_tpl);?>

						<?php } ?>

						<div class="btn-submit">
							<button type="submit" class="btn btn-success btn-sm" value="submit" <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0][0]->GetFormName(array('key'=>'SUBMIT'),$_smarty_tpl);?>
><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Filter'),$_smarty_tpl);?>
</button>
						</div>
						<div class="btn-clear">
							<button id="show_all_resources" type="button" class="btn btn-default btn-xs"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'ClearFilter'),$_smarty_tpl);?>
</button>
						</div>

					</div>

					<input type="hidden" name="sid" value="<?php echo $_smarty_tpl->tpl_vars['ScheduleId']->value;?>
"/>
					<input type="hidden" name="sds" value="<?php  $_smarty_tpl->tpl_vars['d'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['d']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['SpecificDates']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['d']->key => $_smarty_tpl->tpl_vars['d']->value) {
$_smarty_tpl->tpl_vars['d']->_loop = true;
?><?php echo $_smarty_tpl->tpl_vars['d']->value->Format('Y-m-d');?>
,<?php } ?>"/>
					<input type="hidden" name="sd" value="<?php echo $_smarty_tpl->tpl_vars['DisplayDates']->value->GetBegin()->Format('Y-m-d');?>
"/>
				</form>
			</div>
		</div>

		<div id="reservations" class="col-md-10 col-sm-12">
			<div>
				<a href="#" id="restore-sidebar" title="Show Reservation Filter" class="hidden toggle-sidebar"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'ResourceFilter'),$_smarty_tpl);?>
 <i
							class="glyphicon glyphicon-filter"></i> <i
							class="glyphicon glyphicon-chevron-right"></i></a>
			</div>
			

<?php $_smarty_tpl->tpl_vars['TodaysDate'] = new Smarty_variable(Date::Now(), null, 0);?>
    <table class="reservations" border="1" cellpadding="0" width="100%">
		<?php $_smarty_tpl->_capture_stack[0][] = array("resources", null, null); ob_start(); ?>
            <tr>
                <td class="resourcename">&nbsp;</td>
				<?php  $_smarty_tpl->tpl_vars['resource'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['resource']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['Resources']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['resource']->key => $_smarty_tpl->tpl_vars['resource']->value) {
$_smarty_tpl->tpl_vars['resource']->_loop = true;
?>
					<?php $_smarty_tpl->tpl_vars['resourceId'] = new Smarty_variable($_smarty_tpl->tpl_vars['resource']->value->Id, null, 0);?>
					<?php ob_start();?><?php echo Pages::RESERVATION;?>
<?php $_tmp4=ob_get_clean();?><?php $_smarty_tpl->tpl_vars['href'] = new Smarty_variable($_tmp4."?rid=".((string)$_smarty_tpl->tpl_vars['resource']->value->Id)."&sid=".((string)$_smarty_tpl->tpl_vars['ScheduleId']->value), null, 0);?>

                    <td class="resourcename" resourceId="<?php echo $_smarty_tpl->tpl_vars['resource']->value->Id;?>
" <?php if ($_smarty_tpl->tpl_vars['resource']->value->HasColor()) {?>style="background-color:<?php echo $_smarty_tpl->tpl_vars['resource']->value->GetColor();?>
"<?php }?>>
						<?php if ($_smarty_tpl->tpl_vars['resource']->value->CanAccess) {?>
                            <a href="<?php echo $_smarty_tpl->tpl_vars['href']->value;?>
" resourceId="<?php echo $_smarty_tpl->tpl_vars['resource']->value->Id;?>
"
                               class="resourceNameSelector" <?php if ($_smarty_tpl->tpl_vars['resource']->value->HasColor()) {?>style="color:<?php echo $_smarty_tpl->tpl_vars['resource']->value->GetTextColor();?>
"<?php }?>><?php echo $_smarty_tpl->tpl_vars['resource']->value->Name;?>
</a>
						<?php } else { ?>
							<span resourceId="<?php echo $_smarty_tpl->tpl_vars['resource']->value->Id;?>
" resourceId="<?php echo $_smarty_tpl->tpl_vars['resource']->value->Id;?>
" class="resourceNameSelector" <?php if ($_smarty_tpl->tpl_vars['resource']->value->HasColor()) {?>style="color:<?php echo $_smarty_tpl->tpl_vars['resource']->value->GetTextColor();?>
"<?php }?>><?php echo $_smarty_tpl->tpl_vars['resource']->value->Name;?>
</span>
						<?php }?>
                    </td>
				<?php } ?>
            </tr>
		<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

		<?php  $_smarty_tpl->tpl_vars['date'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['date']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['BoundDates']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['date']->key => $_smarty_tpl->tpl_vars['date']->value) {
$_smarty_tpl->tpl_vars['date']->_loop = true;
?>
			<?php $_smarty_tpl->tpl_vars['ts'] = new Smarty_variable($_smarty_tpl->tpl_vars['date']->value->Timestamp(), null, 0);?>
			<?php $_smarty_tpl->createLocalArrayVariable('periods', null, 0);
$_smarty_tpl->tpl_vars['periods']->value[$_smarty_tpl->tpl_vars['ts']->value] = $_smarty_tpl->tpl_vars['DailyLayout']->value->GetPeriods($_smarty_tpl->tpl_vars['date']->value);?>
			<?php if (count($_smarty_tpl->tpl_vars['periods']->value[$_smarty_tpl->tpl_vars['ts']->value])==0) {?><?php continue 1?><?php }?>
			<?php if ($_smarty_tpl->tpl_vars['date']->value->DateEquals($_smarty_tpl->tpl_vars['TodaysDate']->value)) {?>
                <tr class="today">
			<?php } else { ?>
            	<tr>
			<?php }?>
			<td class="resdate" colspan="<?php echo count($_smarty_tpl->tpl_vars['Resources']->value)+1;?>
"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formatdate'][0][0]->FormatDate(array('date'=>$_smarty_tpl->tpl_vars['date']->value,'key'=>"schedule_daily"),$_smarty_tpl);?>
</td></tr>
			<?php echo Smarty::$_smarty_vars['capture']['resources'];?>


			<?php  $_smarty_tpl->tpl_vars['period'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['period']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['periods']->value[$_smarty_tpl->tpl_vars['ts']->value]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['period']->key => $_smarty_tpl->tpl_vars['period']->value) {
$_smarty_tpl->tpl_vars['period']->_loop = true;
?>
				<tr class="slots" id="<?php echo $_smarty_tpl->tpl_vars['period']->value->Id();?>
">
                    <td class="reslabel"><?php echo $_smarty_tpl->tpl_vars['period']->value->Label($_smarty_tpl->tpl_vars['date']->value);?>
</td>
                </tr>
			<?php } ?>
			<?php echo Smarty::$_smarty_vars['capture']['resources'];?>

		<?php } ?>
    </table>

			<?php } else { ?>
			<div class="error"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'NoResourcePermission'),$_smarty_tpl);?>
</div>
			<?php }?>
		</div>
	</div>

	<div class="clearfix">&nbsp;</div>
	<input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['ScheduleId']->value;?>
" id="scheduleId"/>

	<div class="row">
		<div class="col-xs-9 visible-md visible-lg">&nbsp;</div>
		<?php echo Smarty::$_smarty_vars['capture']['date_navigation'];?>

	</div>
</div>

<form id="moveReservationForm">
	<input id="moveReferenceNumber" type="hidden" <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0][0]->GetFormName(array('key'=>'REFERENCE_NUMBER'),$_smarty_tpl);?>
 />
	<input id="moveStartDate" type="hidden" <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0][0]->GetFormName(array('key'=>'BEGIN_DATE'),$_smarty_tpl);?>
 />
	<input id="moveResourceId" type="hidden" <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0][0]->GetFormName(array('key'=>'RESOURCE_ID'),$_smarty_tpl);?>
 />
	<input id="moveSourceResourceId" type="hidden" <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0][0]->GetFormName(array('key'=>'ORIGINAL_RESOURCE_ID'),$_smarty_tpl);?>
 />
	<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['csrf_token'][0][0]->CSRFToken(array(),$_smarty_tpl);?>

</form>



<script type="text/javascript">

    $(document).ready(function ()
    {
        var table = $('#reservations').find('table');
		var rows = new Object();
		<?php  $_smarty_tpl->tpl_vars['resource'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['resource']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['Resources']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['resource']->key => $_smarty_tpl->tpl_vars['resource']->value) {
$_smarty_tpl->tpl_vars['resource']->_loop = true;
?>
			<?php  $_smarty_tpl->tpl_vars['date'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['date']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['BoundDates']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['date']->key => $_smarty_tpl->tpl_vars['date']->value) {
$_smarty_tpl->tpl_vars['date']->_loop = true;
?>
				<?php $_smarty_tpl->tpl_vars['resourceId'] = new Smarty_variable($_smarty_tpl->tpl_vars['resource']->value->Id, null, 0);?>
				<?php $_smarty_tpl->tpl_vars['slots'] = new Smarty_variable($_smarty_tpl->tpl_vars['DailyLayout']->value->GetLayout($_smarty_tpl->tpl_vars['date']->value,$_smarty_tpl->tpl_vars['resourceId']->value), null, 0);?>
				<?php ob_start();?><?php echo Pages::RESERVATION;?>
<?php $_tmp5=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formatdate'][0][0]->FormatDate(array('date'=>$_smarty_tpl->tpl_vars['date']->value,'key'=>'url'),$_smarty_tpl);?>
<?php $_tmp6=ob_get_clean();?><?php $_smarty_tpl->tpl_vars['href'] = new Smarty_variable($_tmp5."?rid=".((string)$_smarty_tpl->tpl_vars['resource']->value->Id)."&sid=".((string)$_smarty_tpl->tpl_vars['ScheduleId']->value)."&rd=".$_tmp6, null, 0);?>

				<?php  $_smarty_tpl->tpl_vars['slot'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['slot']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['slots']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['slot']->key => $_smarty_tpl->tpl_vars['slot']->value) {
$_smarty_tpl->tpl_vars['slot']->_loop = true;
?>
					<?php $_smarty_tpl->tpl_vars['slotRef'] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['slot']->value->BeginDate()->Format('YmdHis')).((string)$_smarty_tpl->tpl_vars['resourceId']->value), null, 0);?>
					<?php $_smarty_tpl->_capture_stack[0][] = array('default', "slotContent", null); ob_start(); ?>
						<?php smarty_template_function_displaySlot($_smarty_tpl,array('Slot'=>$_smarty_tpl->tpl_vars['slot']->value,'Href'=>((string)$_smarty_tpl->tpl_vars['href']->value),'AccessAllowed'=>$_smarty_tpl->tpl_vars['resource']->value->CanAccess,'SlotRef'=>$_smarty_tpl->tpl_vars['slotRef']->value,'spantype'=>'row','ResourceId'=>$_smarty_tpl->tpl_vars['resourceId']->value));?>

					<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
					if (!rows['#<?php echo $_smarty_tpl->tpl_vars['slot']->value->BeginSlotId();?>
'])
					{
						rows['#<?php echo $_smarty_tpl->tpl_vars['slot']->value->BeginSlotId();?>
'] = [];
                    }
					rows['#<?php echo $_smarty_tpl->tpl_vars['slot']->value->BeginSlotId();?>
'].push('<?php echo smarty_modifier_regex_replace(trim($_smarty_tpl->tpl_vars['slotContent']->value),"/[\r\t\n]/"," ");?>
');
				<?php } ?>
			<?php } ?>
		<?php } ?>

		$.each(rows, function(index, item)
		{
			$(index).find('td:last').after(item.join(''));
        });
    })
</script>





	<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['jsfile'][0][0]->IncludeJavascriptFile(array('src'=>"js/moment.min.js"),$_smarty_tpl);?>

	<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['jsfile'][0][0]->IncludeJavascriptFile(array('src'=>"schedule.js"),$_smarty_tpl);?>

	<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['jsfile'][0][0]->IncludeJavascriptFile(array('src'=>"resourcePopup.js"),$_smarty_tpl);?>

	<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['jsfile'][0][0]->IncludeJavascriptFile(array('src'=>"js/tree.jquery.js"),$_smarty_tpl);?>

	<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['jsfile'][0][0]->IncludeJavascriptFile(array('src'=>"js/jquery.cookie.js"),$_smarty_tpl);?>

	<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['jsfile'][0][0]->IncludeJavascriptFile(array('src'=>"ajax-helpers.js"),$_smarty_tpl);?>


	<script type="text/javascript">

		$(document).ready(function () {
			var scheduleOpts = {
				reservationUrlTemplate: "<?php echo $_smarty_tpl->tpl_vars['Path']->value;?>
<?php echo Pages::RESERVATION;?>
?<?php echo QueryStringKeys::REFERENCE_NUMBER;?>
=[referenceNumber]",
				summaryPopupUrl: "<?php echo $_smarty_tpl->tpl_vars['Path']->value;?>
ajax/respopup.php",
				setDefaultScheduleUrl: "<?php echo $_smarty_tpl->tpl_vars['Path']->value;?>
<?php echo Pages::PROFILE;?>
?action=changeDefaultSchedule&<?php echo QueryStringKeys::SCHEDULE_ID;?>
=[scheduleId]",
				cookieName: "<?php echo $_smarty_tpl->tpl_vars['CookieName']->value;?>
",
				scheduleId: "<?php echo strtr($_smarty_tpl->tpl_vars['ScheduleId']->value, array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
",
				scriptUrl: '<?php echo $_smarty_tpl->tpl_vars['ScriptUrl']->value;?>
',
				selectedResources: [<?php echo implode(',',$_smarty_tpl->tpl_vars['ResourceIds']->value);?>
],
				specificDates: [<?php  $_smarty_tpl->tpl_vars['d'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['d']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['SpecificDates']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['d']->key => $_smarty_tpl->tpl_vars['d']->value) {
$_smarty_tpl->tpl_vars['d']->_loop = true;
?>'<?php echo $_smarty_tpl->tpl_vars['d']->value->Format('Y-m-d');?>
',<?php } ?>],
				updateReservationUrl: "<?php echo $_smarty_tpl->tpl_vars['Path']->value;?>
ajax/reservation_move.php"
			};

			var schedule = new Schedule(scheduleOpts, <?php echo $_smarty_tpl->tpl_vars['ResourceGroupsAsJson']->value;?>
);
			schedule.init();
		});
	</script>







<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['control'][0][0]->DisplayControl(array('type'=>"DatePickerSetupControl",'ControlId'=>'datepicker','DefaultDate'=>$_smarty_tpl->tpl_vars['FirstDate']->value,'NumberOfMonths'=>$_smarty_tpl->tpl_vars['PopupMonths']->value,'ShowButtonPanel'=>'true','OnSelect'=>'dpDateChanged','FirstDay'=>$_smarty_tpl->tpl_vars['FirstWeekday']->value),$_smarty_tpl);?>


<?php echo $_smarty_tpl->getSubTemplate ('globalfooter.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }} ?>
<?php /* Smarty version Smarty-3.1.16, created on 2017-02-25 14:47:49
         compiled from "/home/vol15_8/byethost8.com/b8_19720712/htdocs/booked/tpl/globalheader.tpl" */ ?>
<?php if ($_valid && !is_callable('content_58b1df65984c57_71072450')) {function content_58b1df65984c57_71072450($_smarty_tpl) {?><!DOCTYPE html>

<html lang="<?php echo $_smarty_tpl->tpl_vars['HtmlLang']->value;?>
" dir="<?php echo $_smarty_tpl->tpl_vars['HtmlTextDirection']->value;?>
">
<head>
	<title><?php if ($_smarty_tpl->tpl_vars['TitleKey']->value!='') {?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>$_smarty_tpl->tpl_vars['TitleKey']->value,'args'=>$_smarty_tpl->tpl_vars['TitleArgs']->value),$_smarty_tpl);?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['Title']->value;?>
<?php }?></title>
	<meta http-equiv="Content-Type" content="text/html; charset=<?php echo $_smarty_tpl->tpl_vars['Charset']->value;?>
"/>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="robots" content="noindex"/>
	<?php if ($_smarty_tpl->tpl_vars['ShouldLogout']->value) {?>
		<!--meta http-equiv="REFRESH"
			  content="<?php echo $_smarty_tpl->tpl_vars['SessionTimeoutSeconds']->value;?>
;URL=<?php echo $_smarty_tpl->tpl_vars['Path']->value;?>
logout.php?<?php echo QueryStringKeys::REDIRECT;?>
=<?php echo urlencode($_SERVER['REQUEST_URI']);?>
"-->
	<?php }?>
	<link rel="shortcut icon" href="<?php echo $_smarty_tpl->tpl_vars['Path']->value;?>
favicon.ico"/>
	<link rel="icon" href="<?php echo $_smarty_tpl->tpl_vars['Path']->value;?>
favicon.ico"/>
	<!-- JavaScript -->
	<?php if ($_smarty_tpl->tpl_vars['UseLocalJquery']->value) {?>
		<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['jsfile'][0][0]->IncludeJavascriptFile(array('src'=>"js/jquery-2.1.1.min.js"),$_smarty_tpl);?>

		<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['jsfile'][0][0]->IncludeJavascriptFile(array('src'=>"js/jquery-ui-1.10.4.custom.min.js"),$_smarty_tpl);?>

		<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['jsfile'][0][0]->IncludeJavascriptFile(array('src'=>"bootstrap/js/bootstrap.min.js"),$_smarty_tpl);?>

		<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['jsfile'][0][0]->IncludeJavascriptFile(array('src'=>"js/lodash.4.6.13.min.js"),$_smarty_tpl);?>

		<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['jsfile'][0][0]->IncludeJavascriptFile(array('src'=>"js/moment.min.js"),$_smarty_tpl);?>

		<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['jsfile'][0][0]->IncludeJavascriptFile(array('src'=>"js/jquery.form-3.09.min.js"),$_smarty_tpl);?>

		<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['jsfile'][0][0]->IncludeJavascriptFile(array('src'=>"js/jquery.blockUI-2.66.0.min.js"),$_smarty_tpl);?>

		<?php if ($_smarty_tpl->tpl_vars['Qtip']->value) {?>
			<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['jsfile'][0][0]->IncludeJavascriptFile(array('src'=>"js/jquery.qtip.min.js"),$_smarty_tpl);?>

		<?php }?>
		<?php if ($_smarty_tpl->tpl_vars['Validator']->value) {?>
			<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['jsfile'][0][0]->IncludeJavascriptFile(array('src'=>"js/bootstrapvalidator/bootstrapValidator.min.js"),$_smarty_tpl);?>

		<?php }?>
		<?php if ($_smarty_tpl->tpl_vars['InlineEdit']->value) {?>
			<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['jsfile'][0][0]->IncludeJavascriptFile(array('src'=>"js/x-editable/js/bootstrap-editable.min.js"),$_smarty_tpl);?>

			<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['jsfile'][0][0]->IncludeJavascriptFile(array('src'=>"js/x-editable/wysihtml5/wysihtml5.js"),$_smarty_tpl);?>

			<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['jsfile'][0][0]->IncludeJavascriptFile(array('src'=>"js/wysihtml5/bootstrap3-wysihtml5.all.min.js"),$_smarty_tpl);?>

		<?php }?>
	<?php } else { ?>
		<script type="text/javascript"
				src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
		<script type="text/javascript"
				src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.10.4/jquery-ui.min.js"></script>
		<script type="text/javascript"
				src="https://netdna.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
		<script type="text/javascript"
				src="https://cdn.jsdelivr.net/lodash/4.16.3/lodash.min.js"></script>
		<script type="text/javascript"
				src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.13.0/moment.min.js"></script>
		<script type="text/javascript"
				src="https://cdnjs.cloudflare.com/ajax/libs/jquery.form/3.50/jquery.form.min.js"></script>
		<script type="text/javascript"
				src="https://cdnjs.cloudflare.com/ajax/libs/jquery.blockUI/2.66.0-2013.10.09/jquery.blockUI.min.js"></script>
	<?php if ($_smarty_tpl->tpl_vars['Qtip']->value) {?>
		<script type="text/javascript"
				src="https://cdn.jsdelivr.net/qtip2/3.0.3/jquery.qtip.min.js"></script>
	<?php }?>
	<?php if ($_smarty_tpl->tpl_vars['Validator']->value) {?>
		<script type="text/javascript"
				src="https://cdnjs.cloudflare.com/ajax/libs/jquery.bootstrapvalidator/0.5.3/js/bootstrapValidator.min.js"></script>
	<?php }?>

	<?php if ($_smarty_tpl->tpl_vars['InlineEdit']->value) {?>
		<script type="text/javascript"
				src="https://cdnjs.cloudflare.com/ajax/libs/x-editable/1.5.1/bootstrap3-editable/js/bootstrap-editable.min.js"></script>
		<script type="text/javascript"
				src="https://cdnjs.cloudflare.com/ajax/libs/x-editable/1.5.1/inputs-ext/wysihtml5/wysihtml5.js"></script>
		<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['jsfile'][0][0]->IncludeJavascriptFile(array('src'=>"js/wysihtml5/bootstrap3-wysihtml5.all.min.js"),$_smarty_tpl);?>

	<?php }?>
	<?php }?>
	<?php if ($_smarty_tpl->tpl_vars['Select2']->value) {?>
		<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['jsfile'][0][0]->IncludeJavascriptFile(array('src'=>"js/select2.min.js"),$_smarty_tpl);?>

	<?php }?>
	<?php if ($_smarty_tpl->tpl_vars['Timepicker']->value) {?>
		<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['jsfile'][0][0]->IncludeJavascriptFile(array('src'=>"js/jquery.timePicker.min.js"),$_smarty_tpl);?>

	<?php }?>
	<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['jsfile'][0][0]->IncludeJavascriptFile(array('src'=>"js/jquery-ui-timepicker-addon.js"),$_smarty_tpl);?>

	<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['jsfile'][0][0]->IncludeJavascriptFile(array('src'=>"phpscheduleit.js"),$_smarty_tpl);?>

	<!-- End JavaScript -->

	<!-- CSS -->
	<?php if ($_smarty_tpl->tpl_vars['UseLocalJquery']->value) {?>
		<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['cssfile'][0][0]->IncludeCssFile(array('src'=>"scripts/css/smoothness/jquery-ui-1.10.4.custom.min.css"),$_smarty_tpl);?>

		<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['cssfile'][0][0]->IncludeCssFile(array('src'=>"css/font-awesome-4.5.0/css/font-awesome.min.css",'rel'=>"stylesheet"),$_smarty_tpl);?>

		<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['cssfile'][0][0]->IncludeCssFile(array('src'=>"scripts/bootstrap/css/bootstrap.css",'rel'=>"stylesheet"),$_smarty_tpl);?>

		<?php if ($_smarty_tpl->tpl_vars['Qtip']->value) {?>
			<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['cssfile'][0][0]->IncludeCssFile(array('src'=>"css/jquery.qtip.min.css",'rel'=>"stylesheet"),$_smarty_tpl);?>

		<?php }?>
		<?php if ($_smarty_tpl->tpl_vars['Validator']->value) {?>
			<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['cssfile'][0][0]->IncludeCssFile(array('src'=>"css/bootstrapValidator.min.css",'rel'=>"stylesheet"),$_smarty_tpl);?>

		<?php }?>
		<?php if ($_smarty_tpl->tpl_vars['InlineEdit']->value) {?>
			<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['cssfile'][0][0]->IncludeCssFile(array('src'=>"scripts/js/x-editable/css/bootstrap-editable.css",'rel'=>"stylesheet"),$_smarty_tpl);?>

			<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['cssfile'][0][0]->IncludeCssFile(array('src'=>"scripts/js/wysihtml5/bootstrap3-wysihtml5.min.css",'rel'=>"stylesheet"),$_smarty_tpl);?>

		<?php }?>
	<?php } else { ?>
		<link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.9.0/themes/smoothness/jquery-ui.css"
			  type="text/css"/>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css"
			  type="text/css"/>
		<link rel="stylesheet" href="https://netdna.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css"
			  type="text/css"/>
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/qtip2/3.0.3/jquery.qtip.min.css"
			  type="text/css"/>
		<?php if ($_smarty_tpl->tpl_vars['Validator']->value) {?>
			<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery.bootstrapvalidator/0.5.3/css/bootstrapValidator.min.css"
				  type="text/css"/>
		<?php }?>
		<?php if ($_smarty_tpl->tpl_vars['InlineEdit']->value) {?>
			<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/x-editable/1.5.1/bootstrap3-editable/css/bootstrap-editable.css"
				  type="text/css"/>
			<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['cssfile'][0][0]->IncludeCssFile(array('src'=>"scripts/js/wysihtml5/bootstrap3-wysihtml5.min.css",'rel'=>"stylesheet"),$_smarty_tpl);?>

		<?php }?>
	<?php }?>
	<?php if ($_smarty_tpl->tpl_vars['Select2']->value) {?>
		<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['cssfile'][0][0]->IncludeCssFile(array('src'=>"scripts/css/select2/select2.min.css"),$_smarty_tpl);?>

		<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['cssfile'][0][0]->IncludeCssFile(array('src'=>"scripts/css/select2/select2-bootstrap.min.css"),$_smarty_tpl);?>

	<?php }?>
	<?php if ($_smarty_tpl->tpl_vars['Timepicker']->value) {?>
		<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['cssfile'][0][0]->IncludeCssFile(array('src'=>"scripts/css/timePicker.css",'rel'=>"stylesheet"),$_smarty_tpl);?>

	<?php }?>
	<?php if ($_smarty_tpl->tpl_vars['Fullcalendar']->value) {?>
		<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['cssfile'][0][0]->IncludeCssFile(array('src'=>"scripts/css/fullcalendar.min.css"),$_smarty_tpl);?>

		<link rel='stylesheet' type='text/css' href='scripts/css/fullcalendar.print.css' media='print'/>
		<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['jsfile'][0][0]->IncludeJavascriptFile(array('src'=>"js/fullcalendar.js"),$_smarty_tpl);?>

	<?php }?>
	<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['cssfile'][0][0]->IncludeCssFile(array('src'=>"scripts/css/jquery-ui-timepicker-addon.css"),$_smarty_tpl);?>

	<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['cssfile'][0][0]->IncludeCssFile(array('src'=>"booked.css"),$_smarty_tpl);?>

	<?php if ($_smarty_tpl->tpl_vars['cssFiles']->value!='') {?>
		<?php $_smarty_tpl->tpl_vars['CssFileList'] = new Smarty_variable(explode(',',$_smarty_tpl->tpl_vars['cssFiles']->value), null, 0);?>
		<?php  $_smarty_tpl->tpl_vars['cssFile'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['cssFile']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['CssFileList']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['cssFile']->key => $_smarty_tpl->tpl_vars['cssFile']->value) {
$_smarty_tpl->tpl_vars['cssFile']->_loop = true;
?>
			<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['cssfile'][0][0]->IncludeCssFile(array('src'=>$_smarty_tpl->tpl_vars['cssFile']->value),$_smarty_tpl);?>

		<?php } ?>
	<?php }?>
	<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['cssfile'][0][0]->IncludeCssFile(array('src'=>$_smarty_tpl->tpl_vars['CssUrl']->value),$_smarty_tpl);?>

	<?php if ($_smarty_tpl->tpl_vars['CssExtensionFile']->value!='') {?>
		<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['cssfile'][0][0]->IncludeCssFile(array('src'=>$_smarty_tpl->tpl_vars['CssExtensionFile']->value),$_smarty_tpl);?>

	<?php }?>

	<?php if ($_smarty_tpl->tpl_vars['printCssFiles']->value!='') {?>
		<?php $_smarty_tpl->tpl_vars['PrintCssFileList'] = new Smarty_variable(explode(',',$_smarty_tpl->tpl_vars['printCssFiles']->value), null, 0);?>
		<?php  $_smarty_tpl->tpl_vars['cssFile'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['cssFile']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['PrintCssFileList']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['cssFile']->key => $_smarty_tpl->tpl_vars['cssFile']->value) {
$_smarty_tpl->tpl_vars['cssFile']->_loop = true;
?>
			<link rel='stylesheet' type='text/css' href='<?php echo $_smarty_tpl->tpl_vars['Path']->value;?>
<?php echo $_smarty_tpl->tpl_vars['cssFile']->value;?>
' media='print'/>
		<?php } ?>
	<?php }?>
	<link rel="stylesheet" href="../../css/hamburgers.css">
	<link rel="stylesheet" type="text/css" href="../../css/icons.css">
	<script src="../../js/jquery.mmenu.min.js"></script>
  <link rel="stylesheet" href="../../css/jquery.mmenu.css">
  <link href="../../css/jquery.mmenu.pagedim.css" type="text/css" rel="stylesheet" />
  <script src="../../js/jquery.mmenu.iconpanels.min.js" type="text/javascript"></script>
  <link rel="../../stylesheet" href="css/jquery.mmenu.iconpanels.css">
  <script src="../../js/jquery.mmenu.fixedelements.min.js"></script>
  <link rel="stylesheet" href="../../css/styles.css">
	<!-- End CSS -->
	<script src="../../js/classie.js"></script>
  <!--END MENU BUTTON LINKS-->
  <script>
    function init() {
        window.addEventListener('scroll', function(e){
            var distanceY = window.pageYOffset || document.documentElement.scrollTop,
                shrinkOn = 20,
                header = document.querySelector("header"),
                logo = document.querySelector(".logo2");
            if (distanceY > shrinkOn) {
                classie.add(logo,"smaller")
            } else {
                    classie.remove(logo,"smaller");
            }
        });
    }
    window.onload = init();
  </script>
  <style>
	.mm-listview {
		margin-top: 0 !important;
	}
	
	header nav ul li {
		float: left !important;
	}
  </style>
</head>
<body>

<div id="main" class="container-fluid dark-med-bg">

	<?php if ($_smarty_tpl->tpl_vars['HideNavBar']->value==false) {?>
	<a href="../../index.html"><img src="../../images/logo.png" alt="logo" class="logo2"></a>

	<header id="header" class="header active" style="margin-bottom: 3rem">
		<a href="#page-top" class="page-scroll" style="margin-left: 0.5rem"><h1>F@mily Cyb3r C1ty</h1></a>
		<button id="hamburger" class="hamburger hamburger--emphatic" type="button">
			<span class="hamburger-box">
				<span class="hamburger-inner"></span>
			</span>
		</button>
		<nav class="navbar">
			<ul class="nav navbar2">
				<?php if ($_smarty_tpl->tpl_vars['LoggedIn']->value) {?>
					<li><a href="<?php echo $_smarty_tpl->tpl_vars['Path']->value;?>
<?php echo Pages::DASHBOARD;?>
"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>"Dashboard"),$_smarty_tpl);?>
</a></li>
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>"MyAccount"),$_smarty_tpl);?>
 <b
									class="caret"></b></a>
						<ul class="dropdown-menu">
							<li style="width:100%"><a href="<?php echo $_smarty_tpl->tpl_vars['Path']->value;?>
<?php echo Pages::PROFILE;?>
"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>"Profile"),$_smarty_tpl);?>
</a></li>
							<li style="width:100%"><a href="<?php echo $_smarty_tpl->tpl_vars['Path']->value;?>
<?php echo Pages::PASSWORD;?>
"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>"ChangePassword"),$_smarty_tpl);?>
</a></li>
							<li style="width:100%">
								<a href="<?php echo $_smarty_tpl->tpl_vars['Path']->value;?>
<?php echo Pages::NOTIFICATION_PREFERENCES;?>
"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>"NotificationPreferences"),$_smarty_tpl);?>
</a>
							</li>
							<?php if ($_smarty_tpl->tpl_vars['ShowParticipation']->value) {?>
								<li style="width:100%"><a href="<?php echo $_smarty_tpl->tpl_vars['Path']->value;?>
<?php echo Pages::PARTICIPATION;?>
"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>"OpenInvitations"),$_smarty_tpl);?>
</a></li>
							<?php }?>
						</ul>
					</li>
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>"Schedule"),$_smarty_tpl);?>
 <b
									class="caret"></b></a>
						<ul class="dropdown-menu">
							<li style="width:100%"><a href="<?php echo $_smarty_tpl->tpl_vars['Path']->value;?>
<?php echo Pages::SCHEDULE;?>
"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>"Bookings"),$_smarty_tpl);?>
</a></li>
							<li style="width:100%"><a href="<?php echo $_smarty_tpl->tpl_vars['Path']->value;?>
<?php echo Pages::MY_CALENDAR;?>
"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>"MyCalendar"),$_smarty_tpl);?>
</a></li>
							<li style="width:100%"><a href="<?php echo $_smarty_tpl->tpl_vars['Path']->value;?>
<?php echo Pages::CALENDAR;?>
"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>"ResourceCalendar"),$_smarty_tpl);?>
</a></li>
							<!--<li class="menuitem" style="width:100%"><a href="#"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>"Current Status"),$_smarty_tpl);?>
</a></li>-->
							<li class="menuitem" style="width:100%"><a href="<?php echo $_smarty_tpl->tpl_vars['Path']->value;?>
<?php echo Pages::OPENINGS;?>
"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>"FindATime"),$_smarty_tpl);?>
</a></li>
						</ul>
					</li>
					<?php if ($_smarty_tpl->tpl_vars['CanViewAdmin']->value) {?>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle"
								 data-toggle="dropdown"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>"ApplicationManagement"),$_smarty_tpl);?>

								<b class="caret"></b></a>
							<ul class="dropdown-menu">
								<li style="width:100%"><a href="<?php echo $_smarty_tpl->tpl_vars['Path']->value;?>
admin/manage_reservations.php"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>"ManageReservations"),$_smarty_tpl);?>
</a></li>
								<li style="width:100%"><a href="<?php echo $_smarty_tpl->tpl_vars['Path']->value;?>
admin/manage_blackouts.php"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>"ManageBlackouts"),$_smarty_tpl);?>
</a></li>
								<li style="width:100%"><a href="<?php echo $_smarty_tpl->tpl_vars['Path']->value;?>
admin/manage_quotas.php"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>"ManageQuotas"),$_smarty_tpl);?>
</a></li>
								<li class="divider"></li>
								<li style="width:100%"><a href="<?php echo $_smarty_tpl->tpl_vars['Path']->value;?>
admin/manage_schedules.php"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>"ManageSchedules"),$_smarty_tpl);?>
</a>
								<li style="width:100%"><a href="<?php echo $_smarty_tpl->tpl_vars['Path']->value;?>
admin/manage_resources.php"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>"ManageResources"),$_smarty_tpl);?>
</a></li>
								<li style="width:100%"><a href="<?php echo $_smarty_tpl->tpl_vars['Path']->value;?>
admin/manage_accessories.php"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>"ManageAccessories"),$_smarty_tpl);?>
</a></li>

								<li class="divider"></li>
								<li style="width:100%"><a href="<?php echo $_smarty_tpl->tpl_vars['Path']->value;?>
admin/manage_users.php"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>"ManageUsers"),$_smarty_tpl);?>
</a></li>
								<li style="width:100%"><a href="<?php echo $_smarty_tpl->tpl_vars['Path']->value;?>
admin/manage_groups.php"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>"ManageGroups"),$_smarty_tpl);?>
</a></li>

								<li style="width:100%"><a href="<?php echo $_smarty_tpl->tpl_vars['Path']->value;?>
admin/manage_announcements.php"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>"ManageAnnouncements"),$_smarty_tpl);?>
</a></li>
								<li class="divider"></li>
								
								<li style="width:100%"><a href="<?php echo $_smarty_tpl->tpl_vars['Path']->value;?>
admin/manage_attributes.php"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>"CustomAttributes"),$_smarty_tpl);?>
</a></li>
								<?php if ($_smarty_tpl->tpl_vars['EnableConfigurationPage']->value) {?>
									<li style="width:100%"><a href="<?php echo $_smarty_tpl->tpl_vars['Path']->value;?>
admin/manage_configuration.php"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>"ManageConfiguration"),$_smarty_tpl);?>
</a></li>
								<?php }?>
								<li style="width:100%"><a href="<?php echo $_smarty_tpl->tpl_vars['Path']->value;?>
admin/manage_theme.php"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>"LookAndFeel"),$_smarty_tpl);?>
</a></li>
								<li style="width:100%"><a href="<?php echo $_smarty_tpl->tpl_vars['Path']->value;?>
admin/import.php"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>"Import"),$_smarty_tpl);?>
</a></li>
								<li style="width:100%"><a href="<?php echo $_smarty_tpl->tpl_vars['Path']->value;?>
admin/server_settings.php"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>"ServerSettings"),$_smarty_tpl);?>
</a></li>
							</ul>
						</li>
					<?php }?>
					<?php if ($_smarty_tpl->tpl_vars['CanViewResponsibilities']->value) {?>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle"
								 data-toggle="dropdown"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>"Responsibilities"),$_smarty_tpl);?>
 <b
										class="caret"></b></a>
							<ul class="dropdown-menu">
								<?php if ($_smarty_tpl->tpl_vars['CanViewGroupAdmin']->value) {?>
									<li style="width:100%"><a href="<?php echo $_smarty_tpl->tpl_vars['Path']->value;?>
admin/manage_group_users.php"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>"ManageUsers"),$_smarty_tpl);?>
</a>
									</li>
									<li style="width:100%">
										<a href="<?php echo $_smarty_tpl->tpl_vars['Path']->value;?>
admin/manage_group_reservations.php"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'GroupReservations'),$_smarty_tpl);?>
</a>
									</li>
									<li style="width:100%">
										<a href="<?php echo $_smarty_tpl->tpl_vars['Path']->value;?>
admin/manage_admin_groups.php"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>"ManageGroups"),$_smarty_tpl);?>
</a>
									</li>
								<?php }?>
								<?php if ($_smarty_tpl->tpl_vars['CanViewResourceAdmin']->value||$_smarty_tpl->tpl_vars['CanViewScheduleAdmin']->value) {?>
									<li style="width:100%">
										<a href="<?php echo $_smarty_tpl->tpl_vars['Path']->value;?>
admin/manage_admin_resources.php"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>"ManageResources"),$_smarty_tpl);?>
</a>
									</li>
									<li style="width:100%">
										<a href="<?php echo $_smarty_tpl->tpl_vars['Path']->value;?>
admin/manage_blackouts.php"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>"ManageBlackouts"),$_smarty_tpl);?>
</a>
									</li>
								<?php }?>
								<?php if ($_smarty_tpl->tpl_vars['CanViewResourceAdmin']->value) {?>
									<li style="width:100%">
										<a href="<?php echo $_smarty_tpl->tpl_vars['Path']->value;?>
admin/manage_resource_reservations.php"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'ResourceReservations'),$_smarty_tpl);?>
</a>
									</li>
								<?php }?>
								<?php if ($_smarty_tpl->tpl_vars['CanViewScheduleAdmin']->value) {?>
									<li style="width:100%">
										<a href="<?php echo $_smarty_tpl->tpl_vars['Path']->value;?>
admin/manage_admin_schedules.php"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>"ManageSchedules"),$_smarty_tpl);?>
</a>
									</li>
									<li style="width:100%">
										<a href="<?php echo $_smarty_tpl->tpl_vars['Path']->value;?>
admin/manage_schedule_reservations.php"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'ScheduleReservations'),$_smarty_tpl);?>
</a>
									</li>
								<?php }?>
								<li style="width:100%"><a href="<?php echo $_smarty_tpl->tpl_vars['Path']->value;?>
admin/manage_announcements.php"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>"ManageAnnouncements"),$_smarty_tpl);?>
</a></li>
							</ul>
						</li>
					<?php }?>
					<?php if ($_smarty_tpl->tpl_vars['CanViewReports']->value) {?>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>"Reports"),$_smarty_tpl);?>
 <b
										class="caret"></b></a>
							<ul class="dropdown-menu">
								<li style="width:100%">
									<a href="<?php echo $_smarty_tpl->tpl_vars['Path']->value;?>
reports/<?php echo Pages::REPORTS_GENERATE;?>
"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'GenerateReport'),$_smarty_tpl);?>
</a>
								</li>
								<li style="width:100%"><a href="<?php echo $_smarty_tpl->tpl_vars['Path']->value;?>
reports/<?php echo Pages::REPORTS_SAVED;?>
"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'MySavedReports'),$_smarty_tpl);?>
</a>
								</li>
								<li style="width:100%"><a href="<?php echo $_smarty_tpl->tpl_vars['Path']->value;?>
reports/<?php echo Pages::REPORTS_COMMON;?>
"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'CommonReports'),$_smarty_tpl);?>
</a>
								</li>
							</ul>
						</li>
					<?php }?>
				<?php }?>
				<?php if ($_smarty_tpl->tpl_vars['ShowScheduleLink']->value) {?>
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>"Schedule"),$_smarty_tpl);?>
 <b
									class="caret"></b></a>
						<ul class="dropdown-menu">
							<li style="width:100%"><a href="view-schedule.php"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'ViewSchedule'),$_smarty_tpl);?>
</a></li>
						</ul>
					</li>
				<?php }?>
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>"Help"),$_smarty_tpl);?>
 <b
								class="caret"></b></a>
					<ul class="dropdown-menu">
						<li style="width:100%"><a href="<?php echo $_smarty_tpl->tpl_vars['Path']->value;?>
help.php"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Help'),$_smarty_tpl);?>
</a></li>
						<?php if ($_smarty_tpl->tpl_vars['CanViewAdmin']->value) {?>
							<li><a href="<?php echo $_smarty_tpl->tpl_vars['Path']->value;?>
help.php?ht=admin"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Administration'),$_smarty_tpl);?>
</a></li><?php }?>
						<li style="width:100%"><a href="<?php echo $_smarty_tpl->tpl_vars['Path']->value;?>
help.php?ht=about"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'About'),$_smarty_tpl);?>
</a></li>
					</ul>
				</li>
				<?php if ($_smarty_tpl->tpl_vars['LoggedIn']->value) {?>
					<li><a href="<?php echo $_smarty_tpl->tpl_vars['Path']->value;?>
logout.php"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>"SignOut"),$_smarty_tpl);?>
</a></li>
				<?php } else { ?>
					<li><a href="<?php echo $_smarty_tpl->tpl_vars['Path']->value;?>
index.php"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>"LogIn"),$_smarty_tpl);?>
</a></li>
				<?php }?>
			</ul>
		</nav>
	</header>

	<?php }?>
<?php }} ?>
