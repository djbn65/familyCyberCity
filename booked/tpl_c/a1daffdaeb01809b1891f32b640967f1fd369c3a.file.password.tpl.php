<?php /* Smarty version Smarty-3.1.16, created on 2017-05-05 11:10:04
         compiled from "/home/vol15_8/byethost8.com/b8_19720712/htdocs/booked/tpl/MyAccount/password.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1647302551590c95cc36b1a4-36165071%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a1daffdaeb01809b1891f32b640967f1fd369c3a' => 
    array (
      0 => '/home/vol15_8/byethost8.com/b8_19720712/htdocs/booked/tpl/MyAccount/password.tpl',
      1 => 1487738812,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1647302551590c95cc36b1a4-36165071',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'AllowPasswordChange' => 0,
    'ResetPasswordSuccess' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_590c95cc3c23e7_59341100',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_590c95cc3c23e7_59341100')) {function content_590c95cc3c23e7_59341100($_smarty_tpl) {?>
<?php echo $_smarty_tpl->getSubTemplate ('globalheader.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<div class="page-change-password" style="margin-top: 8rem">

	<?php $_smarty_tpl->smarty->_tag_stack[] = array('validation_group', array('class'=>"alert alert-danger")); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['validation_group'][0][0]->ValidationGroup(array('class'=>"alert alert-danger"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

	<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['validator'][0][0]->Validator(array('id'=>"currentpassword",'key'=>"InvalidPassword"),$_smarty_tpl);?>

	<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['validator'][0][0]->Validator(array('id'=>"passwordmatch",'key'=>"PwMustMatch"),$_smarty_tpl);?>

	<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['validator'][0][0]->Validator(array('id'=>"passwordcomplexity",'key'=>''),$_smarty_tpl);?>

	<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['validation_group'][0][0]->ValidationGroup(array('class'=>"alert alert-danger"), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>



	<?php if (!$_smarty_tpl->tpl_vars['AllowPasswordChange']->value) {?>
		<div class="alert alert-danger">
			<i class="fa fa-warning fa-2x"></i> <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'PasswordControlledExternallyError'),$_smarty_tpl);?>

		</div>
	<?php } else { ?>
		<?php if ($_smarty_tpl->tpl_vars['ResetPasswordSuccess']->value) {?>
			<div class="success alert alert-success col-xs-12 col-sm-8 col-sm-offset-2">
				<span class="glyphicon glyphicon-ok-sign"></span> <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'PasswordChangedSuccessfully'),$_smarty_tpl);?>

			</div>
		<?php }?>
		<div id="password-reset-box" class="default-box col-xs-12 col-sm-8 col-sm-offset-2">
			<h1><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>"ChangePassword"),$_smarty_tpl);?>
</h1>

			<form id="password-reset-form" method="post" action="<?php echo $_SERVER['SCRIPT_NAME'];?>
">

				<div class="form-group">
					<label for="<?php echo FormKeys::CURRENT_PASSWORD;?>
"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>"CurrentPassword"),$_smarty_tpl);?>
</label>
						<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['textbox'][0][0]->Textbox(array('type'=>"password",'name'=>"CURRENT_PASSWORD"),$_smarty_tpl);?>

				</div>

				<div class="form-group">
					<label for="<?php echo FormKeys::PASSWORD;?>
"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>"NewPassword"),$_smarty_tpl);?>
</label>
						<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['textbox'][0][0]->Textbox(array('type'=>"password",'name'=>"PASSWORD"),$_smarty_tpl);?>

				</div>

				<div class="form-group">
					<label for="<?php echo FormKeys::PASSWORD_CONFIRM;?>
"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>"PasswordConfirmation"),$_smarty_tpl);?>
</label>
						<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['textbox'][0][0]->Textbox(array('type'=>"password",'name'=>"PASSWORD_CONFIRM",'value'=>''),$_smarty_tpl);?>


				</div>

				<div class="form-group">
					<button type="submit" name="<?php echo Actions::CHANGE_PASSWORD;?>
" value="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'ChangePassword'),$_smarty_tpl);?>
"
							class="btn btn-primary"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'ChangePassword'),$_smarty_tpl);?>
</button>
				</div>
				<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['csrf_token'][0][0]->CSRFToken(array(),$_smarty_tpl);?>

			</form>
		</div>
		<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['setfocus'][0][0]->SetFocus(array('key'=>'CURRENT_PASSWORD'),$_smarty_tpl);?>

	<?php }?>

</div>
<?php echo $_smarty_tpl->getSubTemplate ('globalfooter.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
