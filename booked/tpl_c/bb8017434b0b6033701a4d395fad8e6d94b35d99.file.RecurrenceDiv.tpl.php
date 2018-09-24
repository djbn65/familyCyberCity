<?php /* Smarty version Smarty-3.1.16, created on 2017-07-01 12:50:18
         compiled from "/home/vol15_8/byethost8.com/b8_19720712/htdocs/booked/tpl/Controls/RecurrenceDiv.tpl" */ ?>
<?php /*%%SmartyHeaderCode:11167781455957d2cac30eb5-17479942%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bb8017434b0b6033701a4d395fad8e6d94b35d99' => 
    array (
      0 => '/home/vol15_8/byethost8.com/b8_19720712/htdocs/booked/tpl/Controls/RecurrenceDiv.tpl',
      1 => 1487738773,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11167781455957d2cac30eb5-17479942',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'prefix' => 0,
    'RepeatOptions' => 0,
    'k' => 0,
    'v' => 0,
    'RepeatEveryOptions' => 0,
    'RepeatTerminationDate' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_5957d2cac7e417_17176281',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5957d2cac7e417_17176281')) {function content_5957d2cac7e417_17176281($_smarty_tpl) {?><?php if (!is_callable('smarty_function_html_options')) include '/home/vol15_8/byethost8.com/b8_19720712/htdocs/booked/lib/Common/../../lib/external/Smarty/plugins/function.html_options.php';
?>
<div id="<?php echo $_smarty_tpl->tpl_vars['prefix']->value;?>
repeatDiv" class="repeat-div">
	<div class="form-group">
		<div class="col-xs-12">
			<label for="<?php echo $_smarty_tpl->tpl_vars['prefix']->value;?>
repeatOptions"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>"RepeatPrompt"),$_smarty_tpl);?>
</label>
			<select id="<?php echo $_smarty_tpl->tpl_vars['prefix']->value;?>
repeatOptions" <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0][0]->GetFormName(array('key'=>'repeat_options'),$_smarty_tpl);?>

					class="form-control input-sm repeat-drop inline-block">
				<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['RepeatOptions']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
					<option value="<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>$_smarty_tpl->tpl_vars['v']->value['key']),$_smarty_tpl);?>
</option>
				<?php } ?>
			</select>
		</div>

		<div class="col-sm-4 col-xs-12">
			<div id="<?php echo $_smarty_tpl->tpl_vars['prefix']->value;?>
repeatEveryDiv" class="recur-toggle no-show days weeks months years">
				<label for="<?php echo $_smarty_tpl->tpl_vars['prefix']->value;?>
repeatInterval"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>"RepeatEveryPrompt"),$_smarty_tpl);?>
</label>
				<select id="<?php echo $_smarty_tpl->tpl_vars['prefix']->value;?>
repeatInterval" <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0][0]->GetFormName(array('key'=>'repeat_every'),$_smarty_tpl);?>

						class="form-control input-sm repeat-interval-drop inline-block">
					<?php echo smarty_function_html_options(array('values'=>$_smarty_tpl->tpl_vars['RepeatEveryOptions']->value,'output'=>$_smarty_tpl->tpl_vars['RepeatEveryOptions']->value),$_smarty_tpl);?>

				</select>
				<span class="days"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>$_smarty_tpl->tpl_vars['RepeatOptions']->value['daily']['everyKey']),$_smarty_tpl);?>
</span>
				<span class="weeks"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>$_smarty_tpl->tpl_vars['RepeatOptions']->value['weekly']['everyKey']),$_smarty_tpl);?>
</span>
				<span class="months"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>$_smarty_tpl->tpl_vars['RepeatOptions']->value['monthly']['everyKey']),$_smarty_tpl);?>
</span>
				<span class="years"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>$_smarty_tpl->tpl_vars['RepeatOptions']->value['yearly']['everyKey']),$_smarty_tpl);?>
</span>
			</div>
		</div>

		<div class="col-sm-8 col-xs-12">
			<div id="<?php echo $_smarty_tpl->tpl_vars['prefix']->value;?>
repeatOnWeeklyDiv" class="recur-toggle weeks no-show">
				<div class="btn-group" data-toggle="buttons">
					<label class="btn btn-default btn-sm">
						<input type="checkbox" id="<?php echo $_smarty_tpl->tpl_vars['prefix']->value;?>
repeatDay0" <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0][0]->GetFormName(array('key'=>'repeat_sunday'),$_smarty_tpl);?>
 />
						<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>"DaySundayAbbr"),$_smarty_tpl);?>

					</label>
					<label class="btn btn-default btn-sm">
						<input type="checkbox" id="<?php echo $_smarty_tpl->tpl_vars['prefix']->value;?>
repeatDay1" <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0][0]->GetFormName(array('key'=>'repeat_monday'),$_smarty_tpl);?>
 />
						<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>"DayMondayAbbr"),$_smarty_tpl);?>

					</label>
					<label class="btn btn-default btn-sm">
						<input type="checkbox" id="<?php echo $_smarty_tpl->tpl_vars['prefix']->value;?>
repeatDay2" <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0][0]->GetFormName(array('key'=>'repeat_tuesday'),$_smarty_tpl);?>
 />
						<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>"DayTuesdayAbbr"),$_smarty_tpl);?>

					</label>
					<label class="btn btn-default btn-sm">
						<input type="checkbox" id="<?php echo $_smarty_tpl->tpl_vars['prefix']->value;?>
repeatDay3" <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0][0]->GetFormName(array('key'=>'repeat_wednesday'),$_smarty_tpl);?>
 />
						<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>"DayWednesdayAbbr"),$_smarty_tpl);?>

					</label>
					<label class="btn btn-default btn-sm">
						<input type="checkbox" id="<?php echo $_smarty_tpl->tpl_vars['prefix']->value;?>
repeatDay4" <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0][0]->GetFormName(array('key'=>'repeat_thursday'),$_smarty_tpl);?>
 />
						<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>"DayThursdayAbbr"),$_smarty_tpl);?>

					</label>
					<label class="btn btn-default btn-sm">
						<input type="checkbox" id="<?php echo $_smarty_tpl->tpl_vars['prefix']->value;?>
repeatDay5" <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0][0]->GetFormName(array('key'=>'repeat_friday'),$_smarty_tpl);?>
 />
						<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>"DayFridayAbbr"),$_smarty_tpl);?>

					</label>
					<label class="btn btn-default btn-sm">
						<input type="checkbox" id="<?php echo $_smarty_tpl->tpl_vars['prefix']->value;?>
repeatDay6" <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0][0]->GetFormName(array('key'=>'repeat_saturday'),$_smarty_tpl);?>
 />
						<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>"DaySaturdayAbbr"),$_smarty_tpl);?>

					</label>
				</div>
			</div>

			<div id="<?php echo $_smarty_tpl->tpl_vars['prefix']->value;?>
repeatOnMonthlyDiv" class="recur-toggle months no-show">
				<div class="btn-group" data-toggle="buttons">
					<label class="btn btn-default btn-sm active">
						<input type="radio" <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0][0]->GetFormName(array('key'=>'REPEAT_MONTHLY_TYPE'),$_smarty_tpl);?>

							   value="<?php echo RepeatMonthlyType::DayOfMonth;?>
"
							   id="<?php echo $_smarty_tpl->tpl_vars['prefix']->value;?>
repeatMonthDay"/>
						<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>"repeatDayOfMonth"),$_smarty_tpl);?>

					</label>
					<label class="btn btn-default btn-sm">
						<input type="radio" <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0][0]->GetFormName(array('key'=>'REPEAT_MONTHLY_TYPE'),$_smarty_tpl);?>

							   value="<?php echo RepeatMonthlyType::DayOfWeek;?>
"
							   id="<?php echo $_smarty_tpl->tpl_vars['prefix']->value;?>
repeatMonthWeek"/>
						<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>"repeatDayOfWeek"),$_smarty_tpl);?>

					</label>
				</div>
			</div>
		</div>

		<div id="<?php echo $_smarty_tpl->tpl_vars['prefix']->value;?>
repeatUntilDiv" class="col-xs-12 no-show recur-toggle">
			<label for="<?php echo $_smarty_tpl->tpl_vars['prefix']->value;?>
EndRepeat"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>"RepeatUntilPrompt"),$_smarty_tpl);?>
</label>
			<input type="text" id="<?php echo $_smarty_tpl->tpl_vars['prefix']->value;?>
EndRepeat" class="form-control input-sm inline-block dateinput"
				   value="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formatdate'][0][0]->FormatDate(array('date'=>$_smarty_tpl->tpl_vars['RepeatTerminationDate']->value),$_smarty_tpl);?>
"/>
			<input type="hidden" id="<?php echo $_smarty_tpl->tpl_vars['prefix']->value;?>
formattedEndRepeat" <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0][0]->GetFormName(array('key'=>'end_repeat_date'),$_smarty_tpl);?>

				   value="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formatdate'][0][0]->FormatDate(array('date'=>$_smarty_tpl->tpl_vars['RepeatTerminationDate']->value,'key'=>'system'),$_smarty_tpl);?>
"/>
		</div>
	</div>
</div>
<?php }} ?>
