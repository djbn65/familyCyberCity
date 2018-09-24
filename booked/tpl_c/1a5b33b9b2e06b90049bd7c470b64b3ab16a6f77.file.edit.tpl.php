<?php /* Smarty version Smarty-3.1.16, created on 2017-03-31 11:35:46
         compiled from "/home/vol15_8/byethost8.com/b8_19720712/htdocs/booked/tpl/Reservation/edit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:40526222758de7752879d81-93620855%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1a5b33b9b2e06b90049bd7c470b64b3ab16a6f77' => 
    array (
      0 => '/home/vol15_8/byethost8.com/b8_19720712/htdocs/booked/tpl/Reservation/edit.tpl',
      1 => 1487738831,
      2 => 'file',
    ),
    '2c92c5ea21623d4016dbb1bf97943aedb38be0bf' => 
    array (
      0 => '/home/vol15_8/byethost8.com/b8_19720712/htdocs/booked/tpl/Reservation/create.tpl',
      1 => 1487738830,
      2 => 'file',
    ),
    'fe8b400ff048d25c6018e32462c39f8f120f98c4' => 
    array (
      0 => '/home/vol15_8/byethost8.com/b8_19720712/htdocs/booked/tpl/globalheader.tpl',
      1 => 1488215469,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '40526222758de7752879d81-93620855',
  'function' => 
  array (
    'displayResource' => 
    array (
      'parameter' => 
      array (
      ),
      'compiled' => '',
    ),
  ),
  'variables' => 
  array (
    'resource' => 0,
    'ReturnUrl' => 0,
    'ShowParticipation' => 0,
    'AllowParticipation' => 0,
    'ShowReservationDetails' => 0,
    'detailsCol' => 0,
    'ShowUserDetails' => 0,
    'UserId' => 0,
    'ReservationUserName' => 0,
    'CanChangeUser' => 0,
    'CreditsEnabled' => 0,
    'CurrentUserCredits' => 0,
    'ShowAdditionalResources' => 0,
    'ScheduleId' => 0,
    'ResourceId' => 0,
    'Resource' => 0,
    'AvailableResources' => 0,
    'AdditionalResourceIds' => 0,
    'AvailableAccessories' => 0,
    'StartDate' => 0,
    'StartPeriods' => 0,
    'period' => 0,
    'SelectedStart' => 0,
    'selected' => 0,
    'EndDate' => 0,
    'EndPeriods' => 0,
    'SelectedEnd' => 0,
    'HideRecurrence' => 0,
    'RepeatTerminationDate' => 0,
    'Description' => 0,
    'ReferenceNumber' => 0,
    'participantCol' => 0,
    'RemindersEnabled' => 0,
    'UploadsEnabled' => 0,
    'MaxUploadSize' => 0,
    'ReservationId' => 0,
    'ReservationAction' => 0,
    'accessory' => 0,
    'MaxUploadCount' => 0,
    'ReminderTimeStart' => 0,
    'ReminderTimeEnd' => 0,
    'ReminderIntervalStart' => 0,
    'ReminderIntervalEnd' => 0,
    'Timezone' => 0,
    'Participants' => 0,
    'user' => 0,
    'Invitees' => 0,
    'ParticipatingGuests' => 0,
    'guest' => 0,
    'InvitedGuests' => 0,
    'Accessories' => 0,
    'ResourceGroupsAsJson' => 0,
    'RepeatType' => 0,
    'RepeatInterval' => 0,
    'RepeatMonthlyType' => 0,
    'RepeatWeekdays' => 0,
    'day' => 0,
  ),
  'has_nocache_code' => 0,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_58de7752ccf384_07582609',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58de7752ccf384_07582609')) {function content_58de7752ccf384_07582609($_smarty_tpl) {?>

	<?php /*  Call merged included template "globalheader.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate('globalheader.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('TitleKey'=>'EditReservationHeading','TitleArgs'=>'','Qtip'=>true,'printCssFiles'=>'css/reservation.print.css'), 0, '40526222758de7752879d81-93620855');
content_58de7752a0efd8_50716113($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "globalheader.tpl" */?>


<?php if (!function_exists('smarty_template_function_displayResource')) {
    function smarty_template_function_displayResource($_smarty_tpl,$params) {
    $saved_tpl_vars = $_smarty_tpl->tpl_vars;
    foreach ($_smarty_tpl->smarty->template_functions['displayResource']['parameter'] as $key => $value) {$_smarty_tpl->tpl_vars[$key] = new Smarty_variable($value);};
    foreach ($params as $key => $value) {$_smarty_tpl->tpl_vars[$key] = new Smarty_variable($value);}?>
	<div class="resourceName" style="background-color:<?php echo $_smarty_tpl->tpl_vars['resource']->value->GetColor();?>
;color:<?php echo $_smarty_tpl->tpl_vars['resource']->value->GetTextColor();?>
">
		<span class="resourceDetails" data-resourceId="<?php echo $_smarty_tpl->tpl_vars['resource']->value->GetId();?>
"><?php echo $_smarty_tpl->tpl_vars['resource']->value->Name;?>
</span>
		<?php if ($_smarty_tpl->tpl_vars['resource']->value->GetRequiresApproval()) {?><span class="fa fa-lock" data-tooltip="approval"></span><?php }?>
		<?php if ($_smarty_tpl->tpl_vars['resource']->value->IsCheckInEnabled()) {?><i class="fa fa-sign-in" data-tooltip="checkin"></i><?php }?>
		<?php if ($_smarty_tpl->tpl_vars['resource']->value->IsAutoReleased()) {?><i class="fa fa-clock-o" data-tooltip="autorelease"
										   data-autorelease="<?php echo $_smarty_tpl->tpl_vars['resource']->value->GetAutoReleaseMinutes();?>
"></i><?php }?>
	</div>
<?php $_smarty_tpl->tpl_vars = $saved_tpl_vars;
foreach (Smarty::$global_tpl_vars as $key => $value) if(!isset($_smarty_tpl->tpl_vars[$key])) $_smarty_tpl->tpl_vars[$key] = $value;}}?>


<div id="page-reservation" style="margin-top: 8rem">
	<div id="reservation-box">
		<form id="form-reservation" method="post" enctype="multipart/form-data" role="form">

			<div class="row panel-heading" style="padding-top: 2rem; padding-bottom: 2rem">
				<div class="col-xs-6  col-top">
					<h2 style="font-weight: bold; margin: 0">
	<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>"EditReservationHeading",'args'=>''),$_smarty_tpl);?>

</h2>
				</div>

				<div class="col-xs-6 col-top">
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
<?php $_tmp1=ob_get_clean();?><?php ob_start();?><?php echo QueryStringKeys::REFERENCE_NUMBER;?>
<?php $_tmp2=ob_get_clean();?><?php $_smarty_tpl->tpl_vars['icsUrl'] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['Path']->value)."export/".$_tmp1."?".$_tmp2."=".((string)$_smarty_tpl->tpl_vars['ReferenceNumber']->value), null, 0);?>
				<a href="<?php echo $_smarty_tpl->tpl_vars['icsUrl']->value;?>
" download="<?php echo $_smarty_tpl->tpl_vars['icsUrl']->value;?>
">
					<span class="fa fa-calendar"></span>
					<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'AddToOutlook'),$_smarty_tpl);?>
</a>
			</li>
			<li>
				<a href="#" class="btnPrint">
					<span class="fa fa-print"></span>
					<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Print'),$_smarty_tpl);?>
</a>
			</li>
			<li>
				<a href="<?php echo $_smarty_tpl->tpl_vars['Path']->value;?>
<?php echo Pages::RESERVATION;?>
?<?php echo QueryStringKeys::SOURCE_REFERENCE_NUMBER;?>
=<?php echo $_smarty_tpl->tpl_vars['ReferenceNumber']->value;?>
&<?php echo QueryStringKeys::REDIRECT;?>
=<?php echo urlencode($_smarty_tpl->tpl_vars['ReturnUrl']->value);?>
">
					<span class="fa fa-copy"></span>
					<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'DuplicateReservation'),$_smarty_tpl);?>
</a>
			</li>

			<li class="divider"></li>
			<li>
			<?php if ($_smarty_tpl->tpl_vars['IsRecurring']->value) {?>
			    <a href="#" class="delete prompt">
					<span class="fa fa-remove remove icon"></span>
					<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Delete'),$_smarty_tpl);?>

				</a>
            <?php } else { ?>
				<a href="#" class="triggerDeletePrompt delete prompt-single">
                    <span class="fa fa-remove remove icon"></span>
                    <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Delete'),$_smarty_tpl);?>

                </a>
			<?php }?>
			</li>
		</ul>
	</div>

	<?php if ($_smarty_tpl->tpl_vars['CheckInRequired']->value) {?>
		<button type="button" class="btn btn-warning btnCheckin"><i class="fa fa-sign-in"></i> <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'CheckIn'),$_smarty_tpl);?>
<span class="autoReleaseButtonMessage" data-autorelease-minutes="<?php echo $_smarty_tpl->tpl_vars['AutoReleaseMinutes']->value;?>
"> - <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'ReleasedIn'),$_smarty_tpl);?>
 <span class="autoReleaseMinutes"></span> <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'minutes'),$_smarty_tpl);?>
</span></button>
	<?php }?>
	<?php if ($_smarty_tpl->tpl_vars['CheckOutRequired']->value) {?>
		<button type="button" class="btn btn-warning btnCheckout"><i class="fa fa-sign-out"></i> <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'CheckOut'),$_smarty_tpl);?>
</button>
	<?php }?>
	<?php if ($_smarty_tpl->tpl_vars['IsRecurring']->value) {?>
		<button type="button" class="btn btn-success update prompt">
			<span class="glyphicon glyphicon-ok-circle"></span>
			<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Update'),$_smarty_tpl);?>

		</button>
		<div class="modal fade" id="updateButtons" tabindex="-1" role="dialog" aria-labelledby="updateButtonsLabel" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						<h4 class="modal-title" id="updateButtonsLabel"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'ApplyUpdatesTo'),$_smarty_tpl);?>
</h4>
					</div>
					<div class="modal-body">
						<button type="button" class="btn btn-success save btnUpdateThisInstance">
							<span class="fa fa-check"></span>
							<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'ThisInstance'),$_smarty_tpl);?>

						</button>
						<button type="button" class="btn btn-success save btnUpdateAllInstances">
							<span class="fa fa-check-square"></span>
							<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'AllInstances'),$_smarty_tpl);?>

						</button>
						<button type="button" class="btn btn-success save btnUpdateFutureInstances">
							<span class="fa fa-check-square-o"></span>
							<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'FutureInstances'),$_smarty_tpl);?>

						</button>
						<button type="button" class="btn btn-default">
							<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Cancel'),$_smarty_tpl);?>

						</button>
					</div>
				</div>
			</div>
		</div>
	<?php } else { ?>
		<button type="button" class="btn btn-success save update btnCreate">
			<span class="glyphicon glyphicon-ok-circle"></span>
			<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Update'),$_smarty_tpl);?>

		</button>
	<?php }?>
    <div id="deleteButtonPrompt" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title" id="updateButtonsLabel"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Delete'),$_smarty_tpl);?>
</h4>
                </div>
                <div class="modal-body">
                    <div><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'DeleteReminderWarning'),$_smarty_tpl);?>
</div>
                 </div>
                <div class="modal-footer">
                <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['cancel_button'][0][0]->CancelButton(array('id'=>"cancelDelete",'class'=>"cancel"),$_smarty_tpl);?>

                <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['delete_button'][0][0]->DeleteButton(array('id'=>"confirmDelete",'class'=>"delete save"),$_smarty_tpl);?>

               </div>
            </div>
        </div>
    </div>

					</div>
				</div>
			</div>

			<div class="row panel-body">
				<?php $_smarty_tpl->tpl_vars["detailsCol"] = new Smarty_variable("col-xs-12", null, 0);?>
				<?php $_smarty_tpl->tpl_vars["participantCol"] = new Smarty_variable("col-xs-12", null, 0);?>

				<?php if ($_smarty_tpl->tpl_vars['ShowParticipation']->value&&$_smarty_tpl->tpl_vars['AllowParticipation']->value&&$_smarty_tpl->tpl_vars['ShowReservationDetails']->value) {?>
					<?php $_smarty_tpl->tpl_vars["detailsCol"] = new Smarty_variable("col-xs-12 col-sm-6", null, 0);?>
					<?php $_smarty_tpl->tpl_vars["participantCol"] = new Smarty_variable("col-xs-12 col-sm-6", null, 0);?>
				<?php }?>

				<div id="reservationDetails" class="<?php echo $_smarty_tpl->tpl_vars['detailsCol']->value;?>
">
					<div class="col-xs-12">
						<div class="form-group">
							<?php if ($_smarty_tpl->tpl_vars['ShowUserDetails']->value&&$_smarty_tpl->tpl_vars['ShowReservationDetails']->value) {?>
								<a href="#" id="userName" data-userid="<?php echo $_smarty_tpl->tpl_vars['UserId']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['ReservationUserName']->value;?>
</a>
							<?php } else { ?>
								<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Private'),$_smarty_tpl);?>

							<?php }?>
							<input id="userId" type="hidden" <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0][0]->GetFormName(array('key'=>'USER_ID'),$_smarty_tpl);?>
 value="<?php echo $_smarty_tpl->tpl_vars['UserId']->value;?>
"/>
							<?php if ($_smarty_tpl->tpl_vars['CanChangeUser']->value) {?>
								<a href="#" id="showChangeUsers" class="small-action"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Change'),$_smarty_tpl);?>
 <i
											class="fa fa-user"></i></a>
								<div class="modal fade" id="changeUserDialog" tabindex="-1" role="dialog"
									 aria-labelledby="usersModalLabel" aria-hidden="true">
									<div class="modal-dialog">
										<div class="modal-content">
											<div class="modal-header">
												<button type="button" class="close" data-dismiss="modal"
														aria-hidden="true">&times;</button>
												<h4 class="modal-title"
													id="usersModalLabel"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'ChangeUser'),$_smarty_tpl);?>
</h4>
											</div>
											<div class="modal-body">
											</div>
											<div class="modal-footer">
												<button type="button" class="btn btn-default"
														data-dismiss="modal"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Cancel'),$_smarty_tpl);?>
</button>
												<button type="button"
														class="btn btn-primary"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Done'),$_smarty_tpl);?>
</button>
											</div>
										</div>
									</div>
								</div>
							<?php }?>
							<div id="availableCredits" <?php if (!$_smarty_tpl->tpl_vars['CreditsEnabled']->value) {?>style="display:none" }<?php }?>><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'AvailableCredits'),$_smarty_tpl);?>
 <span
										id="availableCreditsCount"><?php echo $_smarty_tpl->tpl_vars['CurrentUserCredits']->value;?>
</span></div>
						</div>
					</div>

					<div class="col-xs-12" id="changeUsers">
						<div class="form-group">
							<input type="text" id="changeUserAutocomplete"
								   class="form-control inline-block user-search"/>
							|
							<button id="promptForChangeUsers" type="button" class="btn inline">
								<i class="fa fa-users"></i>
								<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'AllUsers'),$_smarty_tpl);?>

							</button>
						</div>
					</div>

					<div class="col-xs-12" id="reservation-resources">
						<div class="form-group">
							<div class="pull-left">
								<div>
									<label><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>"Resources"),$_smarty_tpl);?>
</label>
									<?php if ($_smarty_tpl->tpl_vars['ShowAdditionalResources']->value) {?>
										<a id="btnAddResources" href="#"
										   class="small-action" data-toggle="modal"
										   data-target="#dialogResourceGroups"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Change'),$_smarty_tpl);?>
 <span
													class="fa fa-plus-square"></span></a>
									<?php }?>
								</div>

								<div id="primaryResourceContainer" class="inline">
									<input type="hidden" id="scheduleId" <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0][0]->GetFormName(array('key'=>'SCHEDULE_ID'),$_smarty_tpl);?>

										   value="<?php echo $_smarty_tpl->tpl_vars['ScheduleId']->value;?>
"/>
									<input class="resourceId" type="hidden"
										   id="primaryResourceId" <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0][0]->GetFormName(array('key'=>'RESOURCE_ID'),$_smarty_tpl);?>
 value="<?php echo $_smarty_tpl->tpl_vars['ResourceId']->value;?>
"/>
									<?php smarty_template_function_displayResource($_smarty_tpl,array('resource'=>$_smarty_tpl->tpl_vars['Resource']->value));?>

								</div>

								<div id="additionalResources">
									<?php  $_smarty_tpl->tpl_vars['resource'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['resource']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['AvailableResources']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['resource']->key => $_smarty_tpl->tpl_vars['resource']->value) {
$_smarty_tpl->tpl_vars['resource']->_loop = true;
?>
										<?php if (is_array($_smarty_tpl->tpl_vars['AdditionalResourceIds']->value)&&in_array($_smarty_tpl->tpl_vars['resource']->value->Id,$_smarty_tpl->tpl_vars['AdditionalResourceIds']->value)) {?>
											<input class="resourceId" type="hidden"
												   name="<?php echo FormKeys::ADDITIONAL_RESOURCES;?>
[]" value="<?php echo $_smarty_tpl->tpl_vars['resource']->value->Id;?>
"/>
											<?php smarty_template_function_displayResource($_smarty_tpl,array('resource'=>$_smarty_tpl->tpl_vars['resource']->value));?>

										<?php }?>
									<?php } ?>
								</div>
							</div>
							<div class="pull-right">
								<?php if ($_smarty_tpl->tpl_vars['ShowReservationDetails']->value&&count($_smarty_tpl->tpl_vars['AvailableAccessories']->value)>0) {?>
									<label><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>"Accessories"),$_smarty_tpl);?>
</label>
									<a href="#" id="addAccessoriesPrompt"
									   class="small-action" data-toggle="modal"
									   data-target="#dialogAddAccessories"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Add'),$_smarty_tpl);?>
 <span
												class="fa fa-plus-square"></span></a>
									<div id="accessories"></div>
								<?php }?>
							</div>
						</div>
					</div>

					<div class="col-xs-12 reservationDates">
						<div class="col-md-6 no-padding-left">
							<div class="form-group no-margin-bottom">
								<label for="BeginDate" class="reservationDate"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'BeginDate'),$_smarty_tpl);?>
</label>
								<input type="text" id="BeginDate" class="form-control input-sm inline-block dateinput"
									   value="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formatdate'][0][0]->FormatDate(array('date'=>$_smarty_tpl->tpl_vars['StartDate']->value),$_smarty_tpl);?>
"/>
								<input type="hidden" id="formattedBeginDate" <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0][0]->GetFormName(array('key'=>'BEGIN_DATE'),$_smarty_tpl);?>

									   value="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formatdate'][0][0]->FormatDate(array('date'=>$_smarty_tpl->tpl_vars['StartDate']->value,'key'=>'system'),$_smarty_tpl);?>
"/>
								<select id="BeginPeriod" <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0][0]->GetFormName(array('key'=>'BEGIN_PERIOD'),$_smarty_tpl);?>

										class="form-control input-sm inline-block timeinput" title="Begin time">
									<?php  $_smarty_tpl->tpl_vars['period'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['period']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['StartPeriods']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['period']->key => $_smarty_tpl->tpl_vars['period']->value) {
$_smarty_tpl->tpl_vars['period']->_loop = true;
?>
										<?php if ($_smarty_tpl->tpl_vars['period']->value->IsReservable()) {?>
											<?php $_smarty_tpl->tpl_vars['selected'] = new Smarty_variable('', null, 0);?>
											<?php if ($_smarty_tpl->tpl_vars['period']->value==$_smarty_tpl->tpl_vars['SelectedStart']->value) {?>
												<?php $_smarty_tpl->tpl_vars['selected'] = new Smarty_variable(' selected="selected"', null, 0);?>
											<?php }?>
											<option value="<?php echo $_smarty_tpl->tpl_vars['period']->value->Begin();?>
"<?php echo $_smarty_tpl->tpl_vars['selected']->value;?>
><?php echo $_smarty_tpl->tpl_vars['period']->value->Label();?>
</option>
										<?php }?>
									<?php } ?>
								</select>
							</div>
						</div>
						<div class="col-md-6 no-padding-left">
							<div class="form-group no-margin-bottom">
								<label for="EndDate" class="reservationDate"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'EndDate'),$_smarty_tpl);?>
</label>
								<input type="text" id="EndDate" class="form-control input-sm inline-block dateinput"
									   value="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formatdate'][0][0]->FormatDate(array('date'=>$_smarty_tpl->tpl_vars['EndDate']->value),$_smarty_tpl);?>
"/>
								<input type="hidden" id="formattedEndDate" <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0][0]->GetFormName(array('key'=>'END_DATE'),$_smarty_tpl);?>

									   value="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formatdate'][0][0]->FormatDate(array('date'=>$_smarty_tpl->tpl_vars['EndDate']->value,'key'=>'system'),$_smarty_tpl);?>
"/>
								<select id="EndPeriod" <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0][0]->GetFormName(array('key'=>'END_PERIOD'),$_smarty_tpl);?>

										class="form-control  input-sm inline-block timeinput" title="End time">
									<?php  $_smarty_tpl->tpl_vars['period'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['period']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['EndPeriods']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['period']->key => $_smarty_tpl->tpl_vars['period']->value) {
$_smarty_tpl->tpl_vars['period']->_loop = true;
?>
										<?php if ($_smarty_tpl->tpl_vars['period']->value->IsReservable()) {?>
											<?php $_smarty_tpl->tpl_vars['selected'] = new Smarty_variable('', null, 0);?>
											<?php if ($_smarty_tpl->tpl_vars['period']->value==$_smarty_tpl->tpl_vars['SelectedEnd']->value) {?>
												<?php $_smarty_tpl->tpl_vars['selected'] = new Smarty_variable(' selected="selected"', null, 0);?>
											<?php }?>
											<option value="<?php echo $_smarty_tpl->tpl_vars['period']->value->End();?>
"<?php echo $_smarty_tpl->tpl_vars['selected']->value;?>
><?php echo $_smarty_tpl->tpl_vars['period']->value->LabelEnd();?>
</option>
										<?php }?>
									<?php } ?>
								</select>
							</div>
						</div>

					</div>

					<div class="col-xs-12 reservationLength">
						<div class="form-group">
							<span class="like-label"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'ReservationLength'),$_smarty_tpl);?>
</span>
							<div class="durationText">
								<span id="durationDays">0</span> <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'days'),$_smarty_tpl);?>

								<span id="durationHours">0</span> <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'hours'),$_smarty_tpl);?>

								<span id="durationMinutes">0</span> <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'minutes'),$_smarty_tpl);?>

							</div>
						</div>
					</div>

					<?php if (!$_smarty_tpl->tpl_vars['HideRecurrence']->value) {?>
						<div class="col-xs-12">
							<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['control'][0][0]->DisplayControl(array('type'=>"RecurrenceControl",'RepeatTerminationDate'=>$_smarty_tpl->tpl_vars['RepeatTerminationDate']->value),$_smarty_tpl);?>

						</div>
					<?php }?>

					<div class="col-xs-12 reservationTitle">
						<div class="form-group has-feedback">
							<label for="reservationTitle"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>"ReservationTitle"),$_smarty_tpl);?>
</label>
							<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['textbox'][0][0]->Textbox(array('name'=>"RESERVATION_TITLE",'class'=>"form-control",'value'=>"ReservationTitle",'id'=>"reservationTitle",'maxlength'=>"85"),$_smarty_tpl);?>

							
						</div>
					</div>

					<div class="col-xs-12">
						<div class="form-group">
							<label for="description"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>"ReservationDescription"),$_smarty_tpl);?>
</label>
							<textarea id="description" name="<?php echo FormKeys::DESCRIPTION;?>
"
									  class="form-control"><?php echo $_smarty_tpl->tpl_vars['Description']->value;?>
</textarea>
						</div>
					</div>

					<?php if (!empty($_smarty_tpl->tpl_vars['ReferenceNumber']->value)) {?>
					<div class="col-xs-12">
						<div class="form-group">
							<label><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'ReferenceNumber'),$_smarty_tpl);?>
</label>
							<?php echo $_smarty_tpl->tpl_vars['ReferenceNumber']->value;?>

						</div>
					</div>
					<?php }?>
				</div>

				<div class="<?php echo $_smarty_tpl->tpl_vars['participantCol']->value;?>
">
					<?php if ($_smarty_tpl->tpl_vars['ShowParticipation']->value&&$_smarty_tpl->tpl_vars['AllowParticipation']->value&&$_smarty_tpl->tpl_vars['ShowReservationDetails']->value) {?>
						<?php echo $_smarty_tpl->getSubTemplate ("Reservation/participation.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

					<?php } else { ?>
						<?php echo $_smarty_tpl->getSubTemplate ("Reservation/private-participation.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

					<?php }?>
				</div>
			</div>

			<div class="row same-height panel-footer">
				<div id="custom-attributes-placeholder" class="col-xs-6">
				</div>
				<div class="reservationButtons col-xs-6">
					<div class="reservationSubmitButtons">
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
			<li>
				<a href="#" class="btnPrint">
					<span class="fa fa-print"></span>
					<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Print'),$_smarty_tpl);?>
</a>
			</li>
			<li>
				<a href="<?php echo $_smarty_tpl->tpl_vars['Path']->value;?>
<?php echo Pages::RESERVATION;?>
?<?php echo QueryStringKeys::SOURCE_REFERENCE_NUMBER;?>
=<?php echo $_smarty_tpl->tpl_vars['ReferenceNumber']->value;?>
&<?php echo QueryStringKeys::REDIRECT;?>
=<?php echo urlencode($_smarty_tpl->tpl_vars['ReturnUrl']->value);?>
">
					<span class="fa fa-copy"></span>
					<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'DuplicateReservation'),$_smarty_tpl);?>
</a>
			</li>

			<li class="divider"></li>
			<li>
			<?php if ($_smarty_tpl->tpl_vars['IsRecurring']->value) {?>
			    <a href="#" class="delete prompt">
					<span class="fa fa-remove remove icon"></span>
					<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Delete'),$_smarty_tpl);?>

				</a>
            <?php } else { ?>
				<a href="#" class="triggerDeletePrompt delete prompt-single">
                    <span class="fa fa-remove remove icon"></span>
                    <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Delete'),$_smarty_tpl);?>

                </a>
			<?php }?>
			</li>
		</ul>
	</div>

	<?php if ($_smarty_tpl->tpl_vars['CheckInRequired']->value) {?>
		<button type="button" class="btn btn-warning btnCheckin"><i class="fa fa-sign-in"></i> <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'CheckIn'),$_smarty_tpl);?>
<span class="autoReleaseButtonMessage" data-autorelease-minutes="<?php echo $_smarty_tpl->tpl_vars['AutoReleaseMinutes']->value;?>
"> - <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'ReleasedIn'),$_smarty_tpl);?>
 <span class="autoReleaseMinutes"></span> <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'minutes'),$_smarty_tpl);?>
</span></button>
	<?php }?>
	<?php if ($_smarty_tpl->tpl_vars['CheckOutRequired']->value) {?>
		<button type="button" class="btn btn-warning btnCheckout"><i class="fa fa-sign-out"></i> <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'CheckOut'),$_smarty_tpl);?>
</button>
	<?php }?>
	<?php if ($_smarty_tpl->tpl_vars['IsRecurring']->value) {?>
		<button type="button" class="btn btn-success update prompt">
			<span class="glyphicon glyphicon-ok-circle"></span>
			<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Update'),$_smarty_tpl);?>

		</button>
		<div class="modal fade" id="updateButtons" tabindex="-1" role="dialog" aria-labelledby="updateButtonsLabel" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						<h4 class="modal-title" id="updateButtonsLabel"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'ApplyUpdatesTo'),$_smarty_tpl);?>
</h4>
					</div>
					<div class="modal-body">
						<button type="button" class="btn btn-success save btnUpdateThisInstance">
							<span class="fa fa-check"></span>
							<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'ThisInstance'),$_smarty_tpl);?>

						</button>
						<button type="button" class="btn btn-success save btnUpdateAllInstances">
							<span class="fa fa-check-square"></span>
							<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'AllInstances'),$_smarty_tpl);?>

						</button>
						<button type="button" class="btn btn-success save btnUpdateFutureInstances">
							<span class="fa fa-check-square-o"></span>
							<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'FutureInstances'),$_smarty_tpl);?>

						</button>
						<button type="button" class="btn btn-default">
							<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Cancel'),$_smarty_tpl);?>

						</button>
					</div>
				</div>
			</div>
		</div>
	<?php } else { ?>
		<button type="button" class="btn btn-success save update btnCreate">
			<span class="glyphicon glyphicon-ok-circle"></span>
			<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Update'),$_smarty_tpl);?>

		</button>
	<?php }?>
    <div id="deleteButtonPrompt" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title" id="updateButtonsLabel"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Delete'),$_smarty_tpl);?>
</h4>
                </div>
                <div class="modal-body">
                    <div><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'DeleteReminderWarning'),$_smarty_tpl);?>
</div>
                 </div>
                <div class="modal-footer">
                <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['cancel_button'][0][0]->CancelButton(array('id'=>"cancelDelete",'class'=>"cancel"),$_smarty_tpl);?>

                <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['delete_button'][0][0]->DeleteButton(array('id'=>"confirmDelete",'class'=>"delete save"),$_smarty_tpl);?>

               </div>
            </div>
        </div>
    </div>

					</div>
				</div>
			</div>

			<?php if ($_smarty_tpl->tpl_vars['RemindersEnabled']->value) {?>
				<div class="row col-xs-12">
					<div class="col-xs-12 reservationReminders">
						<div>
							<label for="startReminderEnabled"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'SendReminder'),$_smarty_tpl);?>
</label>
						</div>
						<div id="reminderOptionsStart">
							<div class="checkbox">
								<input type="checkbox" id="startReminderEnabled"
									   class="reminderEnabled" <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0][0]->GetFormName(array('key'=>'START_REMINDER_ENABLED'),$_smarty_tpl);?>
/>
								<label for="startReminderEnabled">
									<input type="number" min="0" max="999" size="3" maxlength="3" value="15"
										   class="reminderTime form-control input-sm inline-block" <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0][0]->GetFormName(array('key'=>'START_REMINDER_TIME'),$_smarty_tpl);?>
/>
									<select class="reminderInterval form-control input-sm inline-block" <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0][0]->GetFormName(array('key'=>'START_REMINDER_INTERVAL'),$_smarty_tpl);?>
>
										<option value="<?php echo ReservationReminderInterval::Minutes;?>
"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'minutes'),$_smarty_tpl);?>
</option>
										<option value="<?php echo ReservationReminderInterval::Hours;?>
"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'hours'),$_smarty_tpl);?>
</option>
										<option value="<?php echo ReservationReminderInterval::Days;?>
"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'days'),$_smarty_tpl);?>
</option>
									</select>
									<span class="reminderLabel"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'ReminderBeforeStart'),$_smarty_tpl);?>
</span></label>
							</div>
						</div>
						<div id="reminderOptionsEnd">
							<div class="checkbox">
								<input type="checkbox" id="endReminderEnabled"
									   class="reminderEnabled" <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0][0]->GetFormName(array('key'=>'END_REMINDER_ENABLED'),$_smarty_tpl);?>
/>
								<label for="endReminderEnabled">
									<input type="number" min="0" max="999" size="3" maxlength="3" value="15"
										   class="reminderTime form-control input-sm inline-block" <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0][0]->GetFormName(array('key'=>'END_REMINDER_TIME'),$_smarty_tpl);?>
/>
									<select class="reminderInterval form-control input-sm inline-block" <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0][0]->GetFormName(array('key'=>'END_REMINDER_INTERVAL'),$_smarty_tpl);?>
>
										<option value="<?php echo ReservationReminderInterval::Minutes;?>
"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'minutes'),$_smarty_tpl);?>
</option>
										<option value="<?php echo ReservationReminderInterval::Hours;?>
"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'hours'),$_smarty_tpl);?>
</option>
										<option value="<?php echo ReservationReminderInterval::Days;?>
"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'days'),$_smarty_tpl);?>
</option>
									</select>
									<span class="reminderLabel"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'ReminderBeforeEnd'),$_smarty_tpl);?>
</span></label>
							</div>

						</div>
						<div class="clear">&nbsp;</div>
					</div>
				</div>
			<?php }?>

			<?php if ($_smarty_tpl->tpl_vars['UploadsEnabled']->value) {?>
				<div class="row col-xs-12">
					<div class="col-xs-12 reservationAttachments">

						<label><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'AttachFile'),$_smarty_tpl);?>
 <span class="note">(<?php echo $_smarty_tpl->tpl_vars['MaxUploadSize']->value;?>

								MB <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Maximum'),$_smarty_tpl);?>
)</span>
						</label>

						<div id="reservationAttachments">
							<div class="attachment-item">
								<input type="file" <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0][0]->GetFormName(array('key'=>'RESERVATION_FILE','multi'=>true),$_smarty_tpl);?>
 />
								<a class="add-attachment" href="#"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Add'),$_smarty_tpl);?>
 <i class="fa fa-plus-square"></i></a>
								<a class="remove-attachment" href="#"><i class="fa fa-minus-square"></i></a>
							</div>
						</div>
					</div>
				</div>
			<?php }?>


			<input type="hidden" <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0][0]->GetFormName(array('key'=>'RESERVATION_ID'),$_smarty_tpl);?>
 value="<?php echo $_smarty_tpl->tpl_vars['ReservationId']->value;?>
"/>
			<input type="hidden" <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0][0]->GetFormName(array('key'=>'REFERENCE_NUMBER'),$_smarty_tpl);?>
 value="<?php echo $_smarty_tpl->tpl_vars['ReferenceNumber']->value;?>
" id="referenceNumber"/>
			<input type="hidden" <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0][0]->GetFormName(array('key'=>'RESERVATION_ACTION'),$_smarty_tpl);?>
 value="<?php echo $_smarty_tpl->tpl_vars['ReservationAction']->value;?>
"/>

			<input type="hidden" <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0][0]->GetFormName(array('key'=>'SERIES_UPDATE_SCOPE'),$_smarty_tpl);?>
 id="hdnSeriesUpdateScope"
				   value="<?php echo SeriesUpdateScope::FullSeries;?>
"/>

			<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['csrf_token'][0][0]->CSRFToken(array(),$_smarty_tpl);?>


			<?php if ($_smarty_tpl->tpl_vars['UploadsEnabled']->value) {?>
				
	<?php if (count($_smarty_tpl->tpl_vars['Attachments']->value)>0) {?>
		<div class="col-xs-12">
		<div id="attachmentDiv" class="res-attachments">
			<span class="heading"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Attachments'),$_smarty_tpl);?>
 (<?php echo count($_smarty_tpl->tpl_vars['Attachments']->value);?>
)</span>
			<a href="#" class="remove" id="btnRemoveAttachment">(<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>"Remove"),$_smarty_tpl);?>
)</a>
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
				<input style='display: none;' type="checkbox" name="<?php echo FormKeys::REMOVED_FILE_IDS;?>
[<?php echo $_smarty_tpl->tpl_vars['attachment']->value->FileId();?>
]"/>
				&nbsp;
			<?php } ?>
		</div>
		</div>
	<?php }?>

			<?php }?>


			<div id="retrySubmitParams" class="no-show"></div>
		</form>
	</div>

	<div class="modal fade" id="dialogResourceGroups" tabindex="-1" role="dialog" aria-labelledby="resourcesModalLabel"
		 aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					<h4 class="modal-title" id="resourcesModalLabel"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'AddResources'),$_smarty_tpl);?>
</h4>
				</div>
				<div class="modal-body">
					<div id="resourceGroups"></div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default btnClearAddResources"
							data-dismiss="modal"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Cancel'),$_smarty_tpl);?>
</button>
					<button type="button" class="btn btn-primary btnConfirmAddResources"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Done'),$_smarty_tpl);?>
</button>
				</div>
			</div>
		</div>
	</div>

	<div class="modal fade" id="dialogAddAccessories" tabindex="-1" role="dialog" aria-labelledby="accessoryModalLabel"
		 aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					<h4 class="modal-title" id="accessoryModalLabel"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'AddAccessories'),$_smarty_tpl);?>
</h4>
				</div>
				<div class="modal-body">
					<table class="table table-condensed">
						<thead>
						<tr>
							<th><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Accessory'),$_smarty_tpl);?>
</th>
							<th><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'QuantityRequested'),$_smarty_tpl);?>
</th>
							<th><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'QuantityAvailable'),$_smarty_tpl);?>
</th>
						</tr>
						</thead>
						<tbody>
						<?php  $_smarty_tpl->tpl_vars['accessory'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['accessory']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['AvailableAccessories']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['accessory']->key => $_smarty_tpl->tpl_vars['accessory']->value) {
$_smarty_tpl->tpl_vars['accessory']->_loop = true;
?>
							<tr accessory-id="<?php echo $_smarty_tpl->tpl_vars['accessory']->value->GetId();?>
">
								<td><?php echo $_smarty_tpl->tpl_vars['accessory']->value->GetName();?>
</td>
								<td>
									<input type="hidden" class="name" value="<?php echo $_smarty_tpl->tpl_vars['accessory']->value->GetName();?>
"/>
									<input type="hidden" class="id" value="<?php echo $_smarty_tpl->tpl_vars['accessory']->value->GetId();?>
"/>
									<input type="hidden" class="resource-ids"
										   value="<?php echo implode(',',$_smarty_tpl->tpl_vars['accessory']->value->ResourceIds());?>
"/>
									<?php if ($_smarty_tpl->tpl_vars['accessory']->value->GetQuantityAvailable()==1) {?>
										<input type="checkbox" name="accessory<?php echo $_smarty_tpl->tpl_vars['accessory']->value->GetId();?>
" value="1"
											   size="3"/>
									<?php } else { ?>
										<input type="number" min="0" max="999"
											   class="form-control input-sm accessory-quantity"
											   name="accessory<?php echo $_smarty_tpl->tpl_vars['accessory']->value->GetId();?>
"
											   value="0" size="3"/>
									<?php }?>
								</td>
								<td accessory-quantity-id="<?php echo $_smarty_tpl->tpl_vars['accessory']->value->GetId();?>
"
									accessory-quantity-available="<?php echo $_smarty_tpl->tpl_vars['accessory']->value->GetQuantityAvailable();?>
"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['accessory']->value->GetQuantityAvailable())===null||$tmp==='' ? '&infin;' : $tmp);?>
</td>
							</tr>
						<?php } ?>
						</tbody>
					</table>

				</div>
				<div class="modal-footer">
					<button id="btnCancelAddAccessories" type="button" class="btn btn-default"
							data-dismiss="modal"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Cancel'),$_smarty_tpl);?>
</button>
					<button id="btnConfirmAddAccessories" type="button"
							class="btn btn-primary"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Done'),$_smarty_tpl);?>
</button>
				</div>
			</div>
		</div>
	</div>

	<div id="wait-box" class="wait-box">
		<div id="creatingNotification">
			<h3 id="createUpdateMessage" class="no-show">
				
	<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'UpdatingReservation'),$_smarty_tpl);?>
...

			</h3>
			<h3 id="checkingInMessage" class="no-show">
				<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'CheckingIn'),$_smarty_tpl);?>

			</h3>
			<h3 id="checkingOutMessage" class="no-show">
				<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'CheckingOut'),$_smarty_tpl);?>

			</h3>
			<h3 id="joiningWaitingList" class="no-show">
				<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'AddingToWaitlist'),$_smarty_tpl);?>

			</h3>
			<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['html_image'][0][0]->PrintImage(array('src'=>"reservation_submitting.gif"),$_smarty_tpl);?>

		</div>
		<div id="result"></div>
	</div>

</div>

<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['control'][0][0]->DisplayControl(array('type'=>"DatePickerSetupControl",'ControlId'=>"BeginDate",'AltId'=>"formattedBeginDate",'DefaultDate'=>$_smarty_tpl->tpl_vars['StartDate']->value),$_smarty_tpl);?>

<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['control'][0][0]->DisplayControl(array('type'=>"DatePickerSetupControl",'ControlId'=>"EndDate",'AltId'=>"formattedEndDate",'DefaultDate'=>$_smarty_tpl->tpl_vars['EndDate']->value),$_smarty_tpl);?>

<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['control'][0][0]->DisplayControl(array('type'=>"DatePickerSetupControl",'ControlId'=>"EndRepeat",'AltId'=>"formattedEndRepeat",'DefaultDate'=>$_smarty_tpl->tpl_vars['RepeatTerminationDate']->value),$_smarty_tpl);?>


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

	$(function () {
		var scopeOptions = {
			instance: '<?php echo SeriesUpdateScope::ThisInstance;?>
', full: '<?php echo SeriesUpdateScope::FullSeries;?>
', future: '<?php echo SeriesUpdateScope::FutureInstances;?>
'
		};

		var reservationOpts = {
			additionalResourceElementId: '<?php echo FormKeys::ADDITIONAL_RESOURCES;?>
',
			accessoryListInputId: '<?php echo FormKeys::ACCESSORY_LIST;?>
[]',
			returnUrl: '<?php echo $_smarty_tpl->tpl_vars['ReturnUrl']->value;?>
',
			scopeOpts: scopeOptions,
			createUrl: 'ajax/reservation_save.php',
			updateUrl: 'ajax/reservation_update.php',
			deleteUrl: 'ajax/reservation_delete.php',
			checkinUrl: 'ajax/reservation_checkin.php?action=<?php echo ReservationAction::Checkin;?>
',
			checkoutUrl: 'ajax/reservation_checkin.php?action=<?php echo ReservationAction::Checkout;?>
',
			waitlistUrl: 'ajax/reservation_waitlist.php',
			userAutocompleteUrl: "ajax/autocomplete.php?type=<?php echo AutoCompleteType::User;?>
",
			groupAutocompleteUrl: "ajax/autocomplete.php?type=<?php echo AutoCompleteType::Group;?>
",
			changeUserAutocompleteUrl: "ajax/autocomplete.php?type=<?php echo AutoCompleteType::MyUsers;?>
",
			maxConcurrentUploads: '<?php echo $_smarty_tpl->tpl_vars['MaxUploadCount']->value;?>
',
			guestLabel: '(<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Guest'),$_smarty_tpl);?>
)',
			accessoriesUrl: 'ajax/available_accessories.php?<?php echo QueryStringKeys::START_DATE;?>
=[sd]&<?php echo QueryStringKeys::END_DATE;?>
=[ed]&<?php echo QueryStringKeys::START_TIME;?>
=[st]&<?php echo QueryStringKeys::END_TIME;?>
=[et]&<?php echo QueryStringKeys::REFERENCE_NUMBER;?>
=[rn]'
		};

		var reminderOpts = {
			reminderTimeStart: '<?php echo $_smarty_tpl->tpl_vars['ReminderTimeStart']->value;?>
',
			reminderTimeEnd: '<?php echo $_smarty_tpl->tpl_vars['ReminderTimeEnd']->value;?>
',
			reminderIntervalStart: '<?php echo $_smarty_tpl->tpl_vars['ReminderIntervalStart']->value;?>
',
			reminderIntervalEnd: '<?php echo $_smarty_tpl->tpl_vars['ReminderIntervalEnd']->value;?>
'
		};

		var reservation = new Reservation(reservationOpts);
		reservation.init('<?php echo $_smarty_tpl->tpl_vars['UserId']->value;?>
', '<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['format_date'][0][0]->FormatDate(array('date'=>$_smarty_tpl->tpl_vars['StartDate']->value,'key'=>'system_datetime','timezone'=>$_smarty_tpl->tpl_vars['Timezone']->value),$_smarty_tpl);?>
', '<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['format_date'][0][0]->FormatDate(array('date'=>$_smarty_tpl->tpl_vars['EndDate']->value,'key'=>'system_datetime','timezone'=>$_smarty_tpl->tpl_vars['Timezone']->value),$_smarty_tpl);?>
');

		var reminders = new Reminder(reminderOpts);
		reminders.init();

		<?php  $_smarty_tpl->tpl_vars['user'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['user']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['Participants']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['user']->key => $_smarty_tpl->tpl_vars['user']->value) {
$_smarty_tpl->tpl_vars['user']->_loop = true;
?>
		reservation.addParticipant("<?php echo strtr($_smarty_tpl->tpl_vars['user']->value->FullName, array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
", "<?php echo strtr($_smarty_tpl->tpl_vars['user']->value->UserId, array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
");
		<?php } ?>

		<?php  $_smarty_tpl->tpl_vars['user'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['user']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['Invitees']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['user']->key => $_smarty_tpl->tpl_vars['user']->value) {
$_smarty_tpl->tpl_vars['user']->_loop = true;
?>
		reservation.addInvitee("<?php echo strtr($_smarty_tpl->tpl_vars['user']->value->FullName, array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
", '<?php echo $_smarty_tpl->tpl_vars['user']->value->UserId;?>
');
		<?php } ?>

		<?php  $_smarty_tpl->tpl_vars['guest'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['guest']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['ParticipatingGuests']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['guest']->key => $_smarty_tpl->tpl_vars['guest']->value) {
$_smarty_tpl->tpl_vars['guest']->_loop = true;
?>
		reservation.addParticipatingGuest('<?php echo $_smarty_tpl->tpl_vars['guest']->value;?>
');
		<?php } ?>

		<?php  $_smarty_tpl->tpl_vars['guest'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['guest']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['InvitedGuests']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['guest']->key => $_smarty_tpl->tpl_vars['guest']->value) {
$_smarty_tpl->tpl_vars['guest']->_loop = true;
?>
		reservation.addInvitedGuest('<?php echo $_smarty_tpl->tpl_vars['guest']->value;?>
');
		<?php } ?>

		<?php  $_smarty_tpl->tpl_vars['accessory'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['accessory']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['Accessories']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['accessory']->key => $_smarty_tpl->tpl_vars['accessory']->value) {
$_smarty_tpl->tpl_vars['accessory']->_loop = true;
?>
		reservation.addAccessory(<?php echo $_smarty_tpl->tpl_vars['accessory']->value->AccessoryId;?>
, <?php echo $_smarty_tpl->tpl_vars['accessory']->value->QuantityReserved;?>
, "<?php echo strtr($_smarty_tpl->tpl_vars['accessory']->value->Name, array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
");
		<?php } ?>

		reservation.addResourceGroups(<?php echo $_smarty_tpl->tpl_vars['ResourceGroupsAsJson']->value;?>
);

		var recurOpts = {
			repeatType: '<?php echo $_smarty_tpl->tpl_vars['RepeatType']->value;?>
',
			repeatInterval: '<?php echo $_smarty_tpl->tpl_vars['RepeatInterval']->value;?>
',
			repeatMonthlyType: '<?php echo $_smarty_tpl->tpl_vars['RepeatMonthlyType']->value;?>
',
			repeatWeekdays: [<?php  $_smarty_tpl->tpl_vars['day'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['day']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['RepeatWeekdays']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['day']->key => $_smarty_tpl->tpl_vars['day']->value) {
$_smarty_tpl->tpl_vars['day']->_loop = true;
?><?php echo $_smarty_tpl->tpl_vars['day']->value;?>
, <?php } ?>]
		};

		var recurrence = new Recurrence(recurOpts);
		recurrence.init();

		var ajaxOptions = {
			target: '#result', // target element(s) to be updated with server response
			beforeSubmit: reservation.preSubmit, // pre-submit callback
			success: reservation.showResponse  // post-submit callback
		};

		$('#form-reservation').submit(function () {
			$(this).ajaxSubmit(ajaxOptions);
			return false;
		});

		$('#description').autogrow();
		$('#userName').bindUserDetails();

		$.blockUI.defaults.css.width = '60%';
		$.blockUI.defaults.css.left = '20%';

		var resources = $('#reservation-resources');
		resources.tooltip({
			selector: '[data-tooltip]', title: function () {
				var tooltipType = $(this).data('tooltip');
				if (tooltipType === 'approval')
				{
					return "<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'RequiresApproval'),$_smarty_tpl);?>
";
				}
				if (tooltipType === 'checkin')
				{
					return "<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'RequiresCheckInNotification'),$_smarty_tpl);?>
";
				}
				if (tooltipType === 'autorelease')
				{
					var text = "<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'AutoReleaseNotification','args'=>'%s'),$_smarty_tpl);?>
";
					return text.replace('%s', $(this).data('autorelease'));
				}
			}
		});
	});
</script>

<?php echo $_smarty_tpl->getSubTemplate ('globalfooter.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }} ?>
<?php /* Smarty version Smarty-3.1.16, created on 2017-03-31 11:35:46
         compiled from "/home/vol15_8/byethost8.com/b8_19720712/htdocs/booked/tpl/globalheader.tpl" */ ?>
<?php if ($_valid && !is_callable('content_58de77528fae61_33675780')) {function content_58de77528fae61_33675780($_smarty_tpl) {?><!DOCTYPE html>

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
	<link rel="icon" type="image/png" href="../../images/logo.png" />
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
	<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Lato:300,400,700">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Product+Sans:400,400i,700,700i">
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
		<a href="#page-top" class="page-scroll" style="margin-left: 0.5rem"><h1 style="font-size: 2.1em; font-weight: 900; margin-bottom: 0">F@mily Cyb3r C1ty</h1></a>
		<button id="hamburger" class="hamburger hamburger--emphatic" type="button">
			<span class="hamburger-box" style="position: static">
				<span class="hamburger-inner"></span>
			</span>
		</button>
		<nav class="navbar">
			<ul class="nav navbar2" style="margin-top: -2.65em">
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
<?php /* Smarty version Smarty-3.1.16, created on 2017-03-31 11:35:46
         compiled from "/home/vol15_8/byethost8.com/b8_19720712/htdocs/booked/tpl/globalheader.tpl" */ ?>
<?php if ($_valid && !is_callable('content_58de7752a0efd8_50716113')) {function content_58de7752a0efd8_50716113($_smarty_tpl) {?><!DOCTYPE html>

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
	<link rel="icon" type="image/png" href="../../images/logo.png" />
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
	<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Lato:300,400,700">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Product+Sans:400,400i,700,700i">
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
		<a href="#page-top" class="page-scroll" style="margin-left: 0.5rem"><h1 style="font-size: 2.1em; font-weight: 900; margin-bottom: 0">F@mily Cyb3r C1ty</h1></a>
		<button id="hamburger" class="hamburger hamburger--emphatic" type="button">
			<span class="hamburger-box" style="position: static">
				<span class="hamburger-inner"></span>
			</span>
		</button>
		<nav class="navbar">
			<ul class="nav navbar2" style="margin-top: -2.65em">
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
