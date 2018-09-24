<?php /* Smarty version Smarty-3.1.16, created on 2017-07-01 12:50:18
         compiled from "/home/vol15_8/byethost8.com/b8_19720712/htdocs/booked/tpl/Reservation/participation.tpl" */ ?>
<?php /*%%SmartyHeaderCode:17078132475957d2cac863c9-13082612%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4a30b33971841d9e6994fd1c1f72a66bca52ec4c' => 
    array (
      0 => '/home/vol15_8/byethost8.com/b8_19720712/htdocs/booked/tpl/Reservation/participation.tpl',
      1 => 1487738831,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17078132475957d2cac863c9-13082612',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'AllowGuestParticipation' => 0,
    'AllowParticipantsToJoin' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_5957d2caca5a45_25470238',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5957d2caca5a45_25470238')) {function content_5957d2caca5a45_25470238($_smarty_tpl) {?>
<div id="reservationParticipation">
	<div class="row">
		<div>
			<label><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>"ParticipantList"),$_smarty_tpl);?>
<br/>
				<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Add'),$_smarty_tpl);?>
 <input type="text" id="participantAutocomplete" class="form-control inline-block user-search"/>
				|
				<button id="promptForParticipants" type="button" class="btn inline">
					<i class="fa fa-user"></i>
					<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Users'),$_smarty_tpl);?>

				</button>
				<button id="promptForGroupParticipants" type="button" class="btn inline">
					<i class="fa fa-users"></i>
					<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Groups'),$_smarty_tpl);?>

				</button>
			</label>
		</div>
		<div id="participantList">
		</div>

		<div class="modal fade" id="participantDialog" tabindex="-1" role="dialog" aria-labelledby="participantModalLabel" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						<h4 class="modal-title" id="participantModalLabel"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'AddParticipants'),$_smarty_tpl);?>
</h4>
					</div>
					<div class="modal-body">
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-primary" data-dismiss="modal"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Done'),$_smarty_tpl);?>
</button>
					</div>
				</div>
			</div>
		</div>

		<div class="modal fade" id="participantGroupDialog" tabindex="-1" role="dialog" aria-labelledby="participantGroupModalLabel" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						<h4 class="modal-title" id="participantGroupModalLabel"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'AddParticipants'),$_smarty_tpl);?>
</h4>
					</div>
					<div class="modal-body">
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-primary" data-dismiss="modal"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Done'),$_smarty_tpl);?>
</button>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="row">
		<div>
			<label><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>"InvitationList"),$_smarty_tpl);?>
<br/>
				<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Add'),$_smarty_tpl);?>
 <input type="text" id="inviteeAutocomplete" class="form-control inline-block user-search"/>
				|
				<button id="promptForInvitees" type="button" class="btn inline">
					<i class="fa fa-user"></i>
					<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Users'),$_smarty_tpl);?>

				</button>
				<button id="promptForGroupInvitees" type="button" class="btn inline">
					<i class="fa fa-users"></i>
					<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Groups'),$_smarty_tpl);?>

				</button>
				<?php if ($_smarty_tpl->tpl_vars['AllowGuestParticipation']->value) {?>
					<button id="promptForGuests" type="button" class="btn inline">
						<i class="fa fa-user-plus"></i>
						<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Guest'),$_smarty_tpl);?>

					</button>
				<?php }?>
			</label>
		</div>
		<div id="inviteeList">
		</div>

		<div id="allowParticipation">
			<div class="checkbox">
				<input type="checkbox" <?php if ($_smarty_tpl->tpl_vars['AllowParticipantsToJoin']->value) {?>checked="checked"<?php }?> <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0][0]->GetFormName(array('key'=>'ALLOW_PARTICIPATION'),$_smarty_tpl);?>
 id="allowParticipationCheckbox">
				<label for="allowParticipationCheckbox"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'AllowParticipantsToJoin'),$_smarty_tpl);?>
</label>
			</div>
		</div>

		<div class="modal fade" id="inviteeDialog" tabindex="-1" role="dialog" aria-labelledby="inviteeModalLabel" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						<h4 class="modal-title" id="inviteeModalLabel"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'InviteOthers'),$_smarty_tpl);?>
</h4>
					</div>
					<div class="modal-body">
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-primary" data-dismiss="modal"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Done'),$_smarty_tpl);?>
</button>
					</div>
				</div>
			</div>
		</div>

		<div class="modal fade" id="inviteeGuestDialog" tabindex="-1" role="dialog" aria-labelledby="inviteeGuestModalLabel" aria-hidden="true">
			<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
							<h4 class="modal-title" id="inviteeGuestModalLabel"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'InviteOthers'),$_smarty_tpl);?>
</h4>
						</div>
						<div class="modal-body">
							<div class="form-group row">
								<label for="txtGuestEmail" class="col-xs-2 form-control-label"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Email'),$_smarty_tpl);?>
</label>
								<div class="col-xs-8">
									<input id="txtGuestEmail" type="email" class="form-control"/>
								</div>
								<div class="col-xs-2">
									<button id="btnAddGuest" class="btn btn-link" type="button"><i class="fa fa-user-plus icon add"></i></button>
								</div>
							</div>
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-primary" data-dismiss="modal"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Done'),$_smarty_tpl);?>
</button>
						</div>
					</div>
			</div>
		</div>

		<div class="modal fade" id="inviteeGroupDialog" tabindex="-1" role="dialog" aria-labelledby="inviteeGroupModalLabel" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						<h4 class="modal-title" id="inviteeGroupModalLabel"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'InviteOthers'),$_smarty_tpl);?>
</h4>
					</div>
					<div class="modal-body">
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-primary" data-dismiss="modal"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Done'),$_smarty_tpl);?>
</button>
					</div>
				</div>
			</div>
		</div>

	</div>
</div>
<?php }} ?>
