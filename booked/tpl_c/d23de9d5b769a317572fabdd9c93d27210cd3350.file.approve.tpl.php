<?php /* Smarty version Smarty-3.1.16, created on 2017-06-27 23:26:46
         compiled from "/home/vol15_8/byethost8.com/b8_19720712/htdocs/booked/tpl/Reservation/approve.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1186243213595321f6d8aeb5-96935496%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd23de9d5b769a317572fabdd9c93d27210cd3350' => 
    array (
      0 => '/home/vol15_8/byethost8.com/b8_19720712/htdocs/booked/tpl/Reservation/approve.tpl',
      1 => 1487738829,
      2 => 'file',
    ),
    '6006eaca357180bb7cc2c5ba7c39d42c10e34902' => 
    array (
      0 => '/home/vol15_8/byethost8.com/b8_19720712/htdocs/booked/tpl/Reservation/view.tpl',
      1 => 1487785008,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1186243213595321f6d8aeb5-96935496',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'ShowParticipation' => 0,
    'AllowParticipation' => 0,
    'detailsCol' => 0,
    'ShowUserDetails' => 0,
    'UserId' => 0,
    'ReservationUserName' => 0,
    'ResourceName' => 0,
    'AvailableResources' => 0,
    'AdditionalResourceIds' => 0,
    'resource' => 0,
    'Accessories' => 0,
    'accessory' => 0,
    'StartDate' => 0,
    'StartPeriods' => 0,
    'period' => 0,
    'SelectedStart' => 0,
    'EndDate' => 0,
    'EndPeriods' => 0,
    'SelectedEnd' => 0,
    'RepeatType' => 0,
    'RepeatOptions' => 0,
    'IsRecurring' => 0,
    'RepeatInterval' => 0,
    'RepeatMonthlyType' => 0,
    'RepeatWeekdays' => 0,
    'day' => 0,
    'DayNames' => 0,
    'RepeatTerminationDate' => 0,
    'ShowReservationDetails' => 0,
    'ReservationTitle' => 0,
    'Description' => 0,
    'ReferenceNumber' => 0,
    'participantCol' => 0,
    'IAmParticipating' => 0,
    'CanAlterParticipation' => 0,
    'IAmInvited' => 0,
    'AllowParticipantsToJoin' => 0,
    'Participants' => 0,
    'participant' => 0,
    'Invitees' => 0,
    'invitee' => 0,
    'ReturnUrl' => 0,
    'Path' => 0,
    'icsUrl' => 0,
    'CheckInRequired' => 0,
    'AutoReleaseMinutes' => 0,
    'CheckOutRequired' => 0,
    'Attachments' => 0,
    'attachment' => 0,
    'attachmentUrl' => 0,
    'ReservationId' => 0,
    'ReservationAction' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_595321f703c9c5_70175222',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_595321f703c9c5_70175222')) {function content_595321f703c9c5_70175222($_smarty_tpl) {?>
<?php echo $_smarty_tpl->getSubTemplate ('globalheader.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('TitleKey'=>'ViewReservationHeading','Qtip'=>true), 0);?>

<div id="page-view-reservation" style="margin-top: 8rem; color: #555" class="default-box">
	<h1>Reservation Details</h1>
	<div id="reservation-box" class="readonly">
		<div id="reservationFormDiv">
			<div class="row">
				<?php $_smarty_tpl->tpl_vars["detailsCol"] = new Smarty_variable("col-xs-12", null, 0);?>
				<?php $_smarty_tpl->tpl_vars["participantCol"] = new Smarty_variable("col-xs-12", null, 0);?>

				<?php if ($_smarty_tpl->tpl_vars['ShowParticipation']->value&&$_smarty_tpl->tpl_vars['AllowParticipation']->value) {?>
					<?php $_smarty_tpl->tpl_vars["detailsCol"] = new Smarty_variable("col-xs-12 col-sm-6", null, 0);?>
					<?php $_smarty_tpl->tpl_vars["participantCol"] = new Smarty_variable("col-xs-12 col-sm-6", null, 0);?>
				<?php }?>

				<div id="reservationDetails" class="<?php echo $_smarty_tpl->tpl_vars['detailsCol']->value;?>
">
					<div class="col-xs-12">
						<label><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'User'),$_smarty_tpl);?>
</label>
						<?php if ($_smarty_tpl->tpl_vars['ShowUserDetails']->value) {?>
							<a href="#" class="bindableUser" data-userid="<?php echo $_smarty_tpl->tpl_vars['UserId']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['ReservationUserName']->value;?>
</a>
							<input id="userId" type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['UserId']->value;?>
"/>
						<?php } else { ?>
							<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Private'),$_smarty_tpl);?>

						<?php }?>
					</div>

					<div class="col-xs-12">
						<div class="pull-left">
							<label><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Resources'),$_smarty_tpl);?>
</label> <?php echo $_smarty_tpl->tpl_vars['ResourceName']->value;?>

							<?php  $_smarty_tpl->tpl_vars['resource'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['resource']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['AvailableResources']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['resource']->key => $_smarty_tpl->tpl_vars['resource']->value) {
$_smarty_tpl->tpl_vars['resource']->_loop = true;
?>
								<?php if (is_array($_smarty_tpl->tpl_vars['AdditionalResourceIds']->value)&&in_array($_smarty_tpl->tpl_vars['resource']->value->Id,$_smarty_tpl->tpl_vars['AdditionalResourceIds']->value)) {?>
									,<?php echo $_smarty_tpl->tpl_vars['resource']->value->Name;?>

								<?php }?>
							<?php } ?>
						</div>
						<div class="pull-right">
							<label><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Accessories'),$_smarty_tpl);?>
</label>
							<?php  $_smarty_tpl->tpl_vars['accessory'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['accessory']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['Accessories']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['accessory']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['accessory']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['accessory']->key => $_smarty_tpl->tpl_vars['accessory']->value) {
$_smarty_tpl->tpl_vars['accessory']->_loop = true;
 $_smarty_tpl->tpl_vars['accessory']->iteration++;
 $_smarty_tpl->tpl_vars['accessory']->last = $_smarty_tpl->tpl_vars['accessory']->iteration === $_smarty_tpl->tpl_vars['accessory']->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['accessoryLoop']['last'] = $_smarty_tpl->tpl_vars['accessory']->last;
?>
								<span class="badge quantity"><?php echo $_smarty_tpl->tpl_vars['accessory']->value->QuantityReserved;?>
</span>
								<?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['accessoryLoop']['last']) {?>
									<?php echo $_smarty_tpl->tpl_vars['accessory']->value->Name;?>

								<?php } else { ?>
									<?php echo $_smarty_tpl->tpl_vars['accessory']->value->Name;?>
,
								<?php }?>
							<?php } ?>
						</div>
					</div>

					<div class="col-xs-12">
						<div class="col-md-6 no-padding-left">
							<label><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'BeginDate'),$_smarty_tpl);?>
</label> <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formatdate'][0][0]->FormatDate(array('date'=>$_smarty_tpl->tpl_vars['StartDate']->value),$_smarty_tpl);?>

							<input type="hidden" id="formattedBeginDate"
								   value="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formatdate'][0][0]->FormatDate(array('date'=>$_smarty_tpl->tpl_vars['StartDate']->value,'key'=>'system'),$_smarty_tpl);?>
"/>
							<?php  $_smarty_tpl->tpl_vars['period'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['period']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['StartPeriods']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['period']->key => $_smarty_tpl->tpl_vars['period']->value) {
$_smarty_tpl->tpl_vars['period']->_loop = true;
?>
								<?php if ($_smarty_tpl->tpl_vars['period']->value==$_smarty_tpl->tpl_vars['SelectedStart']->value) {?>
									<?php echo $_smarty_tpl->tpl_vars['period']->value->Label();?>

									<input type="hidden" id="BeginPeriod" value="<?php echo $_smarty_tpl->tpl_vars['period']->value->Begin();?>
"/>
								<?php }?>
							<?php } ?>
						</div>
						<div class="col-md-6 no-padding-left">
							<label><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'EndDate'),$_smarty_tpl);?>
</label> <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formatdate'][0][0]->FormatDate(array('date'=>$_smarty_tpl->tpl_vars['EndDate']->value),$_smarty_tpl);?>

							<input type="hidden" id="formattedEndDate" value="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formatdate'][0][0]->FormatDate(array('date'=>$_smarty_tpl->tpl_vars['EndDate']->value,'key'=>'system'),$_smarty_tpl);?>
"/>
							<?php  $_smarty_tpl->tpl_vars['period'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['period']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['EndPeriods']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['period']->key => $_smarty_tpl->tpl_vars['period']->value) {
$_smarty_tpl->tpl_vars['period']->_loop = true;
?>
								<?php if ($_smarty_tpl->tpl_vars['period']->value==$_smarty_tpl->tpl_vars['SelectedEnd']->value) {?>
									<?php echo $_smarty_tpl->tpl_vars['period']->value->LabelEnd();?>

									<input type="hidden" id="EndPeriod" value="<?php echo $_smarty_tpl->tpl_vars['period']->value->End();?>
"/>
								<?php }?>
							<?php } ?>
						</div>
					</div>

					<div class="col-xs-12">
                        <span class="like-label"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'ReservationLength'),$_smarty_tpl);?>
</span>
                        <div class="durationText">
                            <span id="durationDays">0</span> <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'days'),$_smarty_tpl);?>

                            <span id="durationHours">0</span> <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'hours'),$_smarty_tpl);?>

                            <span id="durationMinutes">0</span> <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'minutes'),$_smarty_tpl);?>

                        </div>
					</div>

					<div class="col-xs-12">
						<label><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'RepeatPrompt'),$_smarty_tpl);?>
</label> <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>$_smarty_tpl->tpl_vars['RepeatOptions']->value[$_smarty_tpl->tpl_vars['RepeatType']->value]['key']),$_smarty_tpl);?>

						<?php if ($_smarty_tpl->tpl_vars['IsRecurring']->value) {?>
							<div class="repeat-details">
								<label><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'RepeatEveryPrompt'),$_smarty_tpl);?>
</label> <?php echo $_smarty_tpl->tpl_vars['RepeatInterval']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['RepeatOptions']->value[$_smarty_tpl->tpl_vars['RepeatType']->value]['everyKey'];?>

								<?php if ($_smarty_tpl->tpl_vars['RepeatMonthlyType']->value!='') {?>
									(<?php echo $_smarty_tpl->tpl_vars['RepeatMonthlyType']->value;?>
)
								<?php }?>
								<?php if (count($_smarty_tpl->tpl_vars['RepeatWeekdays']->value)>0) {?>
									<br/>
									<label><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'RepeatDaysPrompt'),$_smarty_tpl);?>
</label>
									<?php  $_smarty_tpl->tpl_vars['day'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['day']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['RepeatWeekdays']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['day']->key => $_smarty_tpl->tpl_vars['day']->value) {
$_smarty_tpl->tpl_vars['day']->_loop = true;
?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>$_smarty_tpl->tpl_vars['DayNames']->value[$_smarty_tpl->tpl_vars['day']->value]),$_smarty_tpl);?>
 <?php } ?>
								<?php }?>
								<br/><label><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'RepeatUntilPrompt'),$_smarty_tpl);?>
</label> <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formatdate'][0][0]->FormatDate(array('date'=>$_smarty_tpl->tpl_vars['RepeatTerminationDate']->value),$_smarty_tpl);?>

							</div>
						<?php }?>
					</div>

					<?php if ($_smarty_tpl->tpl_vars['ShowReservationDetails']->value) {?>
						<div class="col-xs-12">
							<label><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'ReservationTitle'),$_smarty_tpl);?>
</label>
							<?php if ($_smarty_tpl->tpl_vars['ReservationTitle']->value!='') {?>
								<?php echo $_smarty_tpl->tpl_vars['ReservationTitle']->value;?>

							<?php } else { ?>
								<span class="no-data"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'None'),$_smarty_tpl);?>
</span>
							<?php }?>
						</div>
						<div class="col-xs-12">
							<label><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'ReservationDescription'),$_smarty_tpl);?>
</label>
							<?php if ($_smarty_tpl->tpl_vars['Description']->value!='') {?>
								<br/>
								<?php echo nl2br($_smarty_tpl->tpl_vars['Description']->value);?>

							<?php } else { ?>
								<span class="no-data"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'None'),$_smarty_tpl);?>
</span>
							<?php }?>
						</div>
						<div class="col-xs-12">
							<div class="form-group">
								<label><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'ReferenceNumber'),$_smarty_tpl);?>
</label>
								<?php echo $_smarty_tpl->tpl_vars['ReferenceNumber']->value;?>

							</div>
						</div>
					<?php }?>
				</div>

				<?php if ($_smarty_tpl->tpl_vars['ShowParticipation']->value) {?>
					<div class="<?php echo $_smarty_tpl->tpl_vars['participantCol']->value;?>
">
						<div id="reservationParticipation">
							<div id="participationAction" class="participationAction">
								<?php if ($_smarty_tpl->tpl_vars['IAmParticipating']->value&&$_smarty_tpl->tpl_vars['CanAlterParticipation']->value) {?>
									<div class="alert alert-info" role="alert">
										<strong><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'YouAreAParticipant'),$_smarty_tpl);?>
</strong>
										<?php if ($_smarty_tpl->tpl_vars['IsRecurring']->value) {?>
											<button value="<?php echo InvitationAction::CancelAll;?>
"
													class="btn btn-xs btn-info participationAction">
												<i class="fa fa-minus-square"></i> <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'AllInstances'),$_smarty_tpl);?>

											</button>
											<button value="<?php echo InvitationAction::CancelInstance;?>
"
													class="btn btn-xs btn-info participationAction">
												<i class="fa fa-minus-square"></i> <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'ThisInstance'),$_smarty_tpl);?>

											</button>
										<?php } else { ?>
											<button value="<?php echo InvitationAction::CancelInstance;?>
"
													class="btn btn-xs btn-info participationAction">
												<i class="fa fa-minus-square"></i> <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'CancelParticipation'),$_smarty_tpl);?>

											</button>
										<?php }?>
									</div>
								<?php }?>
							</div>

							<div id="invitationAction" class="participationAction">
								<?php if ($_smarty_tpl->tpl_vars['IAmInvited']->value&&$_smarty_tpl->tpl_vars['CanAlterParticipation']->value) {?>
									<div class="alert alert-info" role="alert">
										<strong><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'YouAreAParticipant'),$_smarty_tpl);?>
</strong>
										<button value="<?php echo InvitationAction::Accept;?>
"
												class="btn btn-xs btn-info participationAction">
											<i class="fa fa-user-plus"></i> <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>"Yes"),$_smarty_tpl);?>

										</button>
										<button value="<?php echo InvitationAction::Decline;?>
"
												class="btn btn-xs btn-danger  participationAction">
											<i class="fa fa-user-times"></i> <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>"No"),$_smarty_tpl);?>

										</button>
									</div>
								<?php }?>
							</div>

							<div id="joinReservation" class="participationAction">
								<?php if ($_smarty_tpl->tpl_vars['AllowParticipantsToJoin']->value&&!$_smarty_tpl->tpl_vars['IAmParticipating']->value&&!$_smarty_tpl->tpl_vars['IAmInvited']->value&&$_smarty_tpl->tpl_vars['CanAlterParticipation']->value) {?>
									<div class="alert alert-info " role="alert">
										<strong><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'YouCanJoinThisReservation'),$_smarty_tpl);?>
</strong>
										<?php if ($_smarty_tpl->tpl_vars['IsRecurring']->value) {?>
											<button value="<?php echo InvitationAction::JoinAll;?>
" id="btnJoinSeries"
													class="btn btn-xs btn-info participationAction">
												<i class="fa fa-user-plus"></i> <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>"AllInstances"),$_smarty_tpl);?>

											</button>
											<button value="<?php echo InvitationAction::Join;?>
" id="btnJoinInstance"
													class="btn btn-xs btn-info participationAction">
												<i class="fa fa-user-plus"></i> <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>"ThisInstance"),$_smarty_tpl);?>

											</button>
										<?php } else { ?>
											<button value="<?php echo InvitationAction::Join;?>
" id="btnJoin"
													class="btn btn-xs btn-info participationAction">
												<i class="fa fa-user-plus"></i> <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>"Join"),$_smarty_tpl);?>

											</button>
										<?php }?>
									</div>
								<?php }?>
							</div>

							<span id="participate-indicator" class="fa fa-spinner fa-spin" style="display:none;"></span>

							<?php if ($_smarty_tpl->tpl_vars['ShowUserDetails']->value) {?>
								<div id="ro-participantList">
									<label><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'ParticipantList'),$_smarty_tpl);?>
</label>
									<?php  $_smarty_tpl->tpl_vars['participant'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['participant']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['Participants']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['participant']->key => $_smarty_tpl->tpl_vars['participant']->value) {
$_smarty_tpl->tpl_vars['participant']->_loop = true;
?>
										<div><a href="#" class="bindableUser"
												data-userid="<?php echo $_smarty_tpl->tpl_vars['participant']->value->UserId;?>
"><?php echo $_smarty_tpl->tpl_vars['participant']->value->FullName;?>
</a></div>
										<?php }
if (!$_smarty_tpl->tpl_vars['participant']->_loop) {
?>
										<div class="no-data"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'None'),$_smarty_tpl);?>
</div>
									<?php } ?>
								</div>
								<div id="ro-inviteeList">
									<label><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'InvitationList'),$_smarty_tpl);?>
</label>
									<?php  $_smarty_tpl->tpl_vars['invitee'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['invitee']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['Invitees']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['invitee']->key => $_smarty_tpl->tpl_vars['invitee']->value) {
$_smarty_tpl->tpl_vars['invitee']->_loop = true;
?>
										<div><a href="#" class="bindableUser"
												data-userid="<?php echo $_smarty_tpl->tpl_vars['invitee']->value->UserId;?>
"><?php echo $_smarty_tpl->tpl_vars['invitee']->value->FullName;?>
</a></div>
										<?php }
if (!$_smarty_tpl->tpl_vars['invitee']->_loop) {
?>
										<div class="no-data"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'None'),$_smarty_tpl);?>
</div>
									<?php } ?>
								</div>
							<?php }?>
						</div>
					</div>
				<?php }?>

				<div class="col-xs-12 same-height">
					<div id="custom-attributes-placeholder" class="col-xs-12">
					</div>
				</div>

				<?php if ($_smarty_tpl->tpl_vars['ShowReservationDetails']->value) {?>
				<div class="col-xs-12">
					<div class="pull-right">
						<button type="button" class="btn btn-default" onclick="window.location='<?php echo $_smarty_tpl->tpl_vars['ReturnUrl']->value;?>
'">
							<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Cancel'),$_smarty_tpl);?>

						</button>

						
	<div class="btn-group">
		<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
			<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'More'),$_smarty_tpl);?>
 <span class="caret"></span>
		</button>
		<ul class="dropdown-menu" role="menu">
			<li>
				<?php ob_start();?><?php echo Pages::CALENDAR_EXPORT;?>
<?php $_tmp3=ob_get_clean();?><?php ob_start();?><?php echo QueryStringKeys::REFERENCE_NUMBER;?>
<?php $_tmp4=ob_get_clean();?><?php $_smarty_tpl->tpl_vars['icsUrl'] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['Path']->value)."export/".$_tmp3."?".$_tmp4."=".((string)$_smarty_tpl->tpl_vars['ReferenceNumber']->value), null, 0);?>
				<a href="<?php echo $_smarty_tpl->tpl_vars['icsUrl']->value;?>
" download="<?php echo $_smarty_tpl->tpl_vars['icsUrl']->value;?>
">
					<span class="fa fa-calendar"></span>
					<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'AddToOutlook'),$_smarty_tpl);?>
</a>
			</li>
			<li><a href="#" class="btnPrint">
					<span class="fa fa-print"></span>
					<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Print'),$_smarty_tpl);?>
</a>
			</li>
			<li class="divider"></li>
			<li>
				<a href="#" class="delete <?php if ($_smarty_tpl->tpl_vars['IsRecurring']->value) {?>prompt<?php } else { ?>save<?php }?>">
					<span class="fa fa-remove remove icon"></span>
					<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Delete'),$_smarty_tpl);?>

				</a>
			</li>
		</ul>
	</div>


						
	<a href="<?php echo $_smarty_tpl->tpl_vars['SCRIPT_NAME']->value;?>
?<?php echo QueryStringKeys::REFERENCE_NUMBER;?>
=<?php echo $_smarty_tpl->tpl_vars['ReferenceNumber']->value;?>
&update=1&<?php echo QueryStringKeys::REDIRECT;?>
=<?php echo rawurlencode($_smarty_tpl->tpl_vars['ReturnUrl']->value);?>
" class="btn btn-default" id="btnApprovalUpdate">
		<span class=""></span>
		<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Update'),$_smarty_tpl);?>

	</a>
    <button type="button" class="btn btn-success" id="btnApprove">
		<span class="glyphicon glyphicon-ok-circle"></span>
		<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Approve'),$_smarty_tpl);?>

	</button>

					</div>
				</div>
				<?php }?>
			</div>
			<?php if ($_smarty_tpl->tpl_vars['ShowReservationDetails']->value) {?>
				<?php if (count($_smarty_tpl->tpl_vars['Attachments']->value)>0) {?>
					<div class="col-xs-12">
						<div class="res-attachments">
							<span class="heading"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Attachments'),$_smarty_tpl);?>
 (<?php echo count($_smarty_tpl->tpl_vars['Attachments']->value);?>
)</span>
							<br/>
							<?php  $_smarty_tpl->tpl_vars['attachment'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['attachment']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['Attachments']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['attachment']->key => $_smarty_tpl->tpl_vars['attachment']->value) {
$_smarty_tpl->tpl_vars['attachment']->_loop = true;
?>
								<?php ob_start();?><?php echo Pages::RESERVATION_FILE;?>
<?php $_tmp5=ob_get_clean();?><?php ob_start();?><?php echo QueryStringKeys::ATTACHMENT_FILE_ID;?>
<?php $_tmp6=ob_get_clean();?><?php ob_start();?><?php echo QueryStringKeys::REFERENCE_NUMBER;?>
<?php $_tmp7=ob_get_clean();?><?php $_smarty_tpl->tpl_vars['attachmentUrl'] = new Smarty_variable("attachments/".$_tmp5."?".$_tmp6."=".((string)$_smarty_tpl->tpl_vars['attachment']->value->FileId())."&".$_tmp7."=".((string)$_smarty_tpl->tpl_vars['ReferenceNumber']->value), null, 0);?>
								<a href="<?php echo $_smarty_tpl->tpl_vars['attachmentUrl']->value;?>
" download="<?php echo $_smarty_tpl->tpl_vars['attachmentUrl']->value;?>
"
								   target="_blank"><?php echo $_smarty_tpl->tpl_vars['attachment']->value->FileName();?>
</a>
								&nbsp;
							<?php } ?>
						</div>
					</div>
				<?php }?>
			<?php }?>
			<input type="hidden" id="referenceNumber" <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0][0]->GetFormName(array('key'=>'reference_number'),$_smarty_tpl);?>
 value="<?php echo $_smarty_tpl->tpl_vars['ReferenceNumber']->value;?>
"/>
		</div>
	</div>

	<div id="wait-box" class="wait-box">
		<div id="creatingNotification">
			<h3 id="createUpdateMessage" class="no-show">
				
	<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'UpdatingReservation'),$_smarty_tpl);?>
...
	<br/>

			</h3>
			<h3 id="checkingInMessage" class="no-show">
				<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'CheckingIn'),$_smarty_tpl);?>

			</h3>
			<h3 id="checkingOutMessage" class="no-show">
				<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'CheckingOut'),$_smarty_tpl);?>

			</h3>
			<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['html_image'][0][0]->PrintImage(array('src'=>"reservation_submitting.gif"),$_smarty_tpl);?>

		</div>
		<div id="result"></div>
	</div>


	<div style="display: none">
		<form id="form-reservation" method="post" enctype="application/x-www-form-urlencoded">
			<input type="hidden" <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0][0]->GetFormName(array('key'=>'RESERVATION_ID'),$_smarty_tpl);?>
 value="<?php echo $_smarty_tpl->tpl_vars['ReservationId']->value;?>
"/>
			<input type="hidden" <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0][0]->GetFormName(array('key'=>'REFERENCE_NUMBER'),$_smarty_tpl);?>
 value="<?php echo $_smarty_tpl->tpl_vars['ReferenceNumber']->value;?>
"/>
			<input type="hidden" <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0][0]->GetFormName(array('key'=>'RESERVATION_ACTION'),$_smarty_tpl);?>
 value="<?php echo $_smarty_tpl->tpl_vars['ReservationAction']->value;?>
"/>
			<input type="hidden" <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0][0]->GetFormName(array('key'=>'SERIES_UPDATE_SCOPE'),$_smarty_tpl);?>
 id="hdnSeriesUpdateScope"
				   value="<?php echo SeriesUpdateScope::FullSeries;?>
"/>
			<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['csrf_token'][0][0]->CSRFToken(array(),$_smarty_tpl);?>

		</form>
	</div>
</div>

<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['jsfile'][0][0]->IncludeJavascriptFile(array('src'=>"participation.js"),$_smarty_tpl);?>

<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['jsfile'][0][0]->IncludeJavascriptFile(array('src'=>"approval.js"),$_smarty_tpl);?>

<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['jsfile'][0][0]->IncludeJavascriptFile(array('src'=>"js/jquery.autogrow.js"),$_smarty_tpl);?>

<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['jsfile'][0][0]->IncludeJavascriptFile(array('src'=>"js/moment.min.js"),$_smarty_tpl);?>

<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['jsfile'][0][0]->IncludeJavascriptFile(array('src'=>"resourcePopup.js"),$_smarty_tpl);?>

<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['jsfile'][0][0]->IncludeJavascriptFile(array('src'=>"userPopup.js"),$_smarty_tpl);?>

<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['jsfile'][0][0]->IncludeJavascriptFile(array('src'=>"date-helper.js"),$_smarty_tpl);?>

<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['jsfile'][0][0]->IncludeJavascriptFile(array('src'=>"recurrence.js"),$_smarty_tpl);?>

<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['jsfile'][0][0]->IncludeJavascriptFile(array('src'=>"reservation.js"),$_smarty_tpl);?>

<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['jsfile'][0][0]->IncludeJavascriptFile(array('src'=>"autocomplete.js"),$_smarty_tpl);?>

<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['jsfile'][0][0]->IncludeJavascriptFile(array('src'=>"force-numeric.js"),$_smarty_tpl);?>

<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['jsfile'][0][0]->IncludeJavascriptFile(array('src'=>"reservation-reminder.js"),$_smarty_tpl);?>

<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['jsfile'][0][0]->IncludeJavascriptFile(array('src'=>"ajax-helpers.js"),$_smarty_tpl);?>

<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['jsfile'][0][0]->IncludeJavascriptFile(array('src'=>"js/tree.jquery.js"),$_smarty_tpl);?>


<script type="text/javascript">

	$(document).ready(function () {

		var participationOptions = {
			responseType: 'json'
		};

		var participation = new Participation(participationOptions);
		participation.initReservation();

		var approvalOptions = {
			responseType: 'json',
			url: "<?php echo $_smarty_tpl->tpl_vars['Path']->value;?>
ajax/reservation_approve.php",
			returnUrl: '<?php echo $_smarty_tpl->tpl_vars['ReturnUrl']->value;?>
'
		};

		var approval = new Approval(approvalOptions);
		approval.initReservation();

		var scopeOptions = {
			instance: '<?php echo SeriesUpdateScope::ThisInstance;?>
',
			full: '<?php echo SeriesUpdateScope::FullSeries;?>
',
			future: '<?php echo SeriesUpdateScope::FutureInstances;?>
'
		};

		var reservationOpts = {
			returnUrl: '<?php echo $_smarty_tpl->tpl_vars['ReturnUrl']->value;?>
',
			scopeOpts: scopeOptions,
			deleteUrl: 'ajax/reservation_delete.php',
			checkinUrl: 'ajax/reservation_checkin.php?action=<?php echo ReservationAction::Checkin;?>
',
			checkoutUrl: 'ajax/reservation_checkin.php?action=<?php echo ReservationAction::Checkout;?>
',
			userAutocompleteUrl: "ajax/autocomplete.php?type=<?php echo AutoCompleteType::User;?>
",
			changeUserAutocompleteUrl: "ajax/autocomplete.php?type=<?php echo AutoCompleteType::MyUsers;?>
"
		};
		var reservation = new Reservation(reservationOpts);
		reservation.init('<?php echo $_smarty_tpl->tpl_vars['UserId']->value;?>
');

		var ajaxOptions = {
			target: '#result',   // target element(s) to be updated with server response
			beforeSubmit: reservation.preSubmit,  // pre-submit callback
			success: reservation.showResponse  // post-submit callback
		};

		$('#form-reservation').submit(function () {
			$(this).ajaxSubmit(ajaxOptions);
			return false;
		});

		$.blockUI.defaults.css.width = '60%';
		$.blockUI.defaults.css.left = '20%';
	});

</script>
<?php echo $_smarty_tpl->getSubTemplate ('globalfooter.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }} ?>
