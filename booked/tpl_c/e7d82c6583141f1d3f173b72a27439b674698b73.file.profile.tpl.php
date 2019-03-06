<?php /* Smarty version Smarty-3.1.16, created on 2017-05-05 11:10:00
         compiled from "/home/vol15_8/byethost8.com/b8_19720712/htdocs/booked/tpl/MyAccount/profile.tpl" */ ?>
<?php /*%%SmartyHeaderCode:819633036590c95c88b9502-45699776%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e7d82c6583141f1d3f173b72a27439b674698b73' => 
    array (
      0 => '/home/vol15_8/byethost8.com/b8_19720712/htdocs/booked/tpl/MyAccount/profile.tpl',
      1 => 1487738812,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '819633036590c95c88b9502-45699776',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'AllowUsernameChange' => 0,
    'Username' => 0,
    'AllowEmailAddressChange' => 0,
    'Email' => 0,
    'AllowNameChange' => 0,
    'FirstName' => 0,
    'LastName' => 0,
    'HomepageValues' => 0,
    'HomepageOutput' => 0,
    'Homepage' => 0,
    'TimezoneValues' => 0,
    'TimezoneOutput' => 0,
    'Timezone' => 0,
    'AllowPhoneChange' => 0,
    'Phone' => 0,
    'AllowOrganizationChange' => 0,
    'Organization' => 0,
    'AllowPositionChange' => 0,
    'Position' => 0,
    'Attributes' => 0,
    'i' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_590c95c8981921_56790322',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_590c95c8981921_56790322')) {function content_590c95c8981921_56790322($_smarty_tpl) {?><?php if (!is_callable('smarty_function_html_options')) include '/home/vol15_8/byethost8.com/b8_19720712/htdocs/booked/lib/Common/../../lib/external/Smarty/plugins/function.html_options.php';
?>
<?php echo $_smarty_tpl->getSubTemplate ('globalheader.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('Validator'=>true), 0);?>


<div class="page-profile" style="margin-top: 8rem">

	<div class="hidden col-xs-12 col-sm-8 col-sm-offset-2 alert alert-success" role="alert" id="profileUpdatedMessage">
		<span class="glyphicon glyphicon-ok-sign"></span> <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'YourProfileWasUpdated'),$_smarty_tpl);?>

	</div>


	<div id="profile-box" class="default-box col-xs-12 col-sm-8 col-sm-offset-2">


		<form method="post" ajaxAction="<?php echo ProfileActions::Update;?>
" id="form-profile" action="<?php echo $_SERVER['SCRIPT_NAME'];?>
"
			  role="form"
			  data-bv-feedbackicons-valid="glyphicon glyphicon-ok"
			  data-bv-feedbackicons-invalid="glyphicon glyphicon-remove"
			  data-bv-feedbackicons-validating="glyphicon glyphicon-refresh"
			  data-bv-feedbackicons-required="glyphicon glyphicon-asterisk"
			  data-bv-submitbuttons='button[type="submit"]'
			  data-bv-onerror="enableButton"
			  data-bv-onsuccess="enableButton"
			  data-bv-live="enabled">

			<h1><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'EditProfile'),$_smarty_tpl);?>
</h1>

			<div class="validationSummary alert alert-danger no-show" id="validationErrors">
				<ul>
					<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['async_validator'][0][0]->AsyncValidator(array('id'=>"fname",'key'=>"FirstNameRequired"),$_smarty_tpl);?>

					<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['async_validator'][0][0]->AsyncValidator(array('id'=>"lname",'key'=>"LastNameRequired"),$_smarty_tpl);?>

					<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['async_validator'][0][0]->AsyncValidator(array('id'=>"username",'key'=>"UserNameRequired"),$_smarty_tpl);?>

					<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['async_validator'][0][0]->AsyncValidator(array('id'=>"emailformat",'key'=>"ValidEmailRequired"),$_smarty_tpl);?>

					<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['async_validator'][0][0]->AsyncValidator(array('id'=>"uniqueemail",'key'=>"UniqueEmailRequired"),$_smarty_tpl);?>

					<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['async_validator'][0][0]->AsyncValidator(array('id'=>"uniqueusername",'key'=>"UniqueUsernameRequired"),$_smarty_tpl);?>

					<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['async_validator'][0][0]->AsyncValidator(array('id'=>"additionalattributes",'key'=>''),$_smarty_tpl);?>

				</ul>
			</div>

			<div class="row">
				<div class="col-xs-12 col-sm-6">
					<div class="form-group">
						<label class="reg" for="login"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>"Username"),$_smarty_tpl);?>
</label>
						<?php if ($_smarty_tpl->tpl_vars['AllowUsernameChange']->value) {?>
							<?php ob_start();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'UserNameRequired'),$_smarty_tpl);?>
<?php $_tmp1=ob_get_clean();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['textbox'][0][0]->Textbox(array('name'=>"USERNAME",'value'=>"Username",'required'=>"required",'data-bv-notempty'=>"true",'data-bv-notempty-message'=>$_tmp1),$_smarty_tpl);?>

						<?php } else { ?>
							<span><?php echo $_smarty_tpl->tpl_vars['Username']->value;?>
</span>
							<input type="hidden" <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0][0]->GetFormName(array('key'=>'USERNAME'),$_smarty_tpl);?>
 value="<?php echo $_smarty_tpl->tpl_vars['Username']->value;?>
"/>
						<?php }?>
					</div>
				</div>

				<div class="col-xs-12 col-sm-6">
					<div class="form-group">
						<label class="reg" for="email"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>"Email"),$_smarty_tpl);?>
</label>
						<?php if ($_smarty_tpl->tpl_vars['AllowEmailAddressChange']->value) {?>
							<?php ob_start();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'ValidEmailRequired'),$_smarty_tpl);?>
<?php $_tmp2=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'ValidEmailRequired'),$_smarty_tpl);?>
<?php $_tmp3=ob_get_clean();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['textbox'][0][0]->Textbox(array('type'=>"email",'name'=>"EMAIL",'class'=>"input",'value'=>"Email",'required'=>"required",'data-bv-notempty'=>"true",'data-bv-notempty-message'=>$_tmp2,'data-bv-emailaddress'=>"true",'data-bv-emailaddress-message'=>$_tmp3),$_smarty_tpl);?>

						<?php } else { ?>
							<span><?php echo $_smarty_tpl->tpl_vars['Email']->value;?>
</span>
							<input type="hidden" <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0][0]->GetFormName(array('key'=>'EMAIL'),$_smarty_tpl);?>
 value="<?php echo $_smarty_tpl->tpl_vars['Email']->value;?>
"/>
						<?php }?>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-xs-12 col-sm-6">
					<div class="form-group">
						<label class="reg" for="fname"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>"FirstName"),$_smarty_tpl);?>
</label>
						<?php if ($_smarty_tpl->tpl_vars['AllowNameChange']->value) {?>
							<?php ob_start();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'FirstNameRequired'),$_smarty_tpl);?>
<?php $_tmp4=ob_get_clean();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['textbox'][0][0]->Textbox(array('name'=>"FIRST_NAME",'class'=>"input",'value'=>"FirstName",'required'=>"required",'data-bv-notempty'=>"true",'data-bv-notempty-message'=>$_tmp4),$_smarty_tpl);?>

						<?php } else { ?>
							<span><?php echo $_smarty_tpl->tpl_vars['FirstName']->value;?>
</span>
							<input type="hidden" <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0][0]->GetFormName(array('key'=>'FIRST_NAME'),$_smarty_tpl);?>
 value="<?php echo $_smarty_tpl->tpl_vars['FirstName']->value;?>
"/>
						<?php }?>
					</div>
				</div>
				<div class="col-xs-12 col-sm-6">
					<div class="form-group">
						<label class="reg" for="lname"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>"LastName"),$_smarty_tpl);?>
</label>
						<?php if ($_smarty_tpl->tpl_vars['AllowNameChange']->value) {?>
							<?php ob_start();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'LastNameRequired'),$_smarty_tpl);?>
<?php $_tmp5=ob_get_clean();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['textbox'][0][0]->Textbox(array('name'=>"LAST_NAME",'class'=>"input",'value'=>"LastName",'required'=>"required",'data-bv-notempty'=>"true",'data-bv-notempty-message'=>$_tmp5),$_smarty_tpl);?>

						<?php } else { ?>
							<span><?php echo $_smarty_tpl->tpl_vars['LastName']->value;?>
</span>
							<input type="hidden" <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0][0]->GetFormName(array('key'=>'LAST_NAME'),$_smarty_tpl);?>
 value="<?php echo $_smarty_tpl->tpl_vars['LastName']->value;?>
"/>
						<?php }?>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-xs-12 col-sm-6">
					<div class="form-group">
						<label class="reg" for="homepage"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>"DefaultPage"),$_smarty_tpl);?>
</label>
						<select <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0][0]->GetFormName(array('key'=>'DEFAULT_HOMEPAGE'),$_smarty_tpl);?>
 id="homepage" class="form-control">
							<?php echo smarty_function_html_options(array('values'=>$_smarty_tpl->tpl_vars['HomepageValues']->value,'output'=>$_smarty_tpl->tpl_vars['HomepageOutput']->value,'selected'=>$_smarty_tpl->tpl_vars['Homepage']->value),$_smarty_tpl);?>

						</select>
					</div>

				</div>
				<div class="col-xs-12 col-sm-6">
					<div class="form-group">
						<label class="reg" for="timezoneDropDown"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>"Timezone"),$_smarty_tpl);?>
</label>
						<select <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0][0]->GetFormName(array('key'=>'TIMEZONE'),$_smarty_tpl);?>
 class="form-control" id="timezoneDropDown">
							<?php echo smarty_function_html_options(array('values'=>$_smarty_tpl->tpl_vars['TimezoneValues']->value,'output'=>$_smarty_tpl->tpl_vars['TimezoneOutput']->value,'selected'=>$_smarty_tpl->tpl_vars['Timezone']->value),$_smarty_tpl);?>

						</select>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-xs-12 col-sm-6">
					<div class="form-group">
						<label class="reg" for="phone"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>"Phone"),$_smarty_tpl);?>
</label>
						<?php if ($_smarty_tpl->tpl_vars['AllowPhoneChange']->value) {?>
							<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['textbox'][0][0]->Textbox(array('name'=>"PHONE",'class'=>"input",'value'=>"Phone",'size'=>"20"),$_smarty_tpl);?>

						<?php } else { ?>
							<span><?php echo $_smarty_tpl->tpl_vars['Phone']->value;?>
</span>
							<input type="hidden" <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0][0]->GetFormName(array('key'=>'PHONE'),$_smarty_tpl);?>
 value="<?php echo $_smarty_tpl->tpl_vars['Phone']->value;?>
"/>
						<?php }?>
					</div>
				</div>

				<div class="col-xs-12 col-sm-6">
					<div class="form-group">
						<label class="reg" for="organization"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>"Organization"),$_smarty_tpl);?>
</label>
						<?php if ($_smarty_tpl->tpl_vars['AllowOrganizationChange']->value) {?>
							<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['textbox'][0][0]->Textbox(array('name'=>"ORGANIZATION",'class'=>"input",'value'=>"Organization",'size'=>"20"),$_smarty_tpl);?>

						<?php } else { ?>
							<span><?php echo $_smarty_tpl->tpl_vars['Organization']->value;?>
</span>
							<input type="hidden" <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0][0]->GetFormName(array('key'=>'ORGANIZATION'),$_smarty_tpl);?>
 value="<?php echo $_smarty_tpl->tpl_vars['Organization']->value;?>
"/>
						<?php }?>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-xs-12 col-sm-6">
					<div class="form-group">
						<label class="reg" for="position"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>"Position"),$_smarty_tpl);?>
</label>
						<?php if ($_smarty_tpl->tpl_vars['AllowPositionChange']->value) {?>
							<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['textbox'][0][0]->Textbox(array('name'=>"POSITION",'class'=>"input",'value'=>"Position",'size'=>"20"),$_smarty_tpl);?>

						<?php } else { ?>
							<span><?php echo $_smarty_tpl->tpl_vars['Position']->value;?>
</span>
							<input type="hidden" <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0][0]->GetFormName(array('key'=>'POSITION'),$_smarty_tpl);?>
 value="<?php echo $_smarty_tpl->tpl_vars['Position']->value;?>
"/>
						<?php }?>
					</div>
				</div>

				<div class="col-xs-12 col-sm-6">
					<?php if (count($_smarty_tpl->tpl_vars['Attributes']->value)>0) {?>
						<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['control'][0][0]->DisplayControl(array('type'=>"AttributeControl",'attribute'=>$_smarty_tpl->tpl_vars['Attributes']->value[0]),$_smarty_tpl);?>

					<?php }?>
				</div>

			</div>

			<?php if (count($_smarty_tpl->tpl_vars['Attributes']->value)>1) {?>
				<?php $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int) ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? count($_smarty_tpl->tpl_vars['Attributes']->value)-1+1 - (1) : 1-(count($_smarty_tpl->tpl_vars['Attributes']->value)-1)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0) {
for ($_smarty_tpl->tpl_vars['i']->value = 1, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++) {
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration == 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration == $_smarty_tpl->tpl_vars['i']->total;?>
					<?php if ($_smarty_tpl->tpl_vars['i']->value%2==1) {?>
						<div class="row">
					<?php }?>
					<div class="col-xs-12 col-sm-6">
						<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['control'][0][0]->DisplayControl(array('type'=>"AttributeControl",'attribute'=>$_smarty_tpl->tpl_vars['Attributes']->value[$_smarty_tpl->tpl_vars['i']->value]),$_smarty_tpl);?>

					</div>
					<?php if ($_smarty_tpl->tpl_vars['i']->value%2==0||$_smarty_tpl->tpl_vars['i']->value==count($_smarty_tpl->tpl_vars['Attributes']->value)-1) {?>
						</div>
					<?php }?>
				<?php }} ?>
			<?php }?>

			<div>
				<button type="button" class="update btn btn-primary col-xs-12" name="<?php echo Actions::SAVE;?>
" id="btnUpdate">
					<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Update'),$_smarty_tpl);?>

				</button>
			</div>
			<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['csrf_token'][0][0]->CSRFToken(array(),$_smarty_tpl);?>

		</form>
	</div>
	<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['setfocus'][0][0]->SetFocus(array('key'=>'FIRST_NAME'),$_smarty_tpl);?>


	<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['jsfile'][0][0]->IncludeJavascriptFile(array('src'=>"ajax-helpers.js"),$_smarty_tpl);?>

	<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['jsfile'][0][0]->IncludeJavascriptFile(array('src'=>"profile.js"),$_smarty_tpl);?>


	<script type="text/javascript">

		function enableButton() {
			$('#form-profile').find('button').removeAttr('disabled');
		}

		$(document).ready(function () {
			var profilePage = new Profile();
			profilePage.init();

			var profileForm = $('#form-profile');

			profileForm
					.on('init.field.bv', function (e, data) {
						var $parent = data.element.parents('.form-group');
						var $icon = $parent.find('.form-control-feedback[data-bv-icon-for="' + data.field + '"]');
						var validators = data.bv.getOptions(data.field).validators;

						if (validators.notEmpty)
						{
							$icon.addClass('glyphicon glyphicon-asterisk').show();
						}
					})
					.off('success.form.bv')
					.on('success.form.bv', function (e) {
						e.preventDefault();
					});

			profileForm.bootstrapValidator();
		});
	</script>

	<div id="wait-box" class="wait-box">
		<h3><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Working'),$_smarty_tpl);?>
</h3>
		<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['html_image'][0][0]->PrintImage(array('src'=>"reservation_submitting.gif"),$_smarty_tpl);?>

	</div>

</div>
<?php echo $_smarty_tpl->getSubTemplate ('globalfooter.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
