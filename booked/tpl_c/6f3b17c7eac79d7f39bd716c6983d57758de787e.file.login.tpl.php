<?php /* Smarty version Smarty-3.1.16, created on 2017-07-04 17:11:26
         compiled from "/home/vol15_8/byethost8.com/b8_19720712/htdocs/booked/tpl/login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1671780684595c047ee944a0-46890390%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6f3b17c7eac79d7f39bd716c6983d57758de787e' => 
    array (
      0 => '/home/vol15_8/byethost8.com/b8_19720712/htdocs/booked/tpl/login.tpl',
      1 => 1493512386,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1671780684595c047ee944a0-46890390',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'ShowLoginError' => 0,
    'ShowUsernamePrompt' => 0,
    'ShowPasswordPrompt' => 0,
    'ResumeUrl' => 0,
    'ShowRegisterLink' => 0,
    'RegisterUrl' => 0,
    'RegisterUrlNew' => 0,
    'AllowGoogleLogin' => 0,
    'AllowFacebookLogin' => 0,
    'socialClass' => 0,
    'GoogleState' => 0,
    'Protocol' => 0,
    'ScriptUrlNoProtocol' => 0,
    'ShowForgotPasswordPrompt' => 0,
    'ForgotPasswordUrl' => 0,
    'ForgotPasswordUrlNew' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_595c047eefc100_11654488',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_595c047eefc100_11654488')) {function content_595c047eefc100_11654488($_smarty_tpl) {?>
<?php echo $_smarty_tpl->getSubTemplate ('globalheader.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<div id="page-login" style="margin-top: 8rem">
	<?php if ($_smarty_tpl->tpl_vars['ShowLoginError']->value) {?>
		<div id="loginError" class="alert alert-danger">
			<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'LoginError'),$_smarty_tpl);?>

		</div>
	<?php }?>

	<div class="col-md-offset-3 col-md-6 col-xs-12 ">
		<div id="login-header" class="default-box-header">
			<span class="sign-in"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'SignIn'),$_smarty_tpl);?>
</span>

		</div>
		<form role="form" name="login" id="login" class="form-horizontal" method="post"
			  action="<?php echo $_SERVER['SCRIPT_NAME'];?>
">
			<div id="login-box" class="col-xs-12 default-box straight-top">
				<?php if ($_smarty_tpl->tpl_vars['ShowUsernamePrompt']->value) {?>
					<div class="col-xs-12">
						<div class="input-group margin-bottom-25">
							<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
							<input type="text" required="" class="form-control"
								   id="email" <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0][0]->GetFormName(array('key'=>'EMAIL'),$_smarty_tpl);?>

								   placeholder="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'UsernameOrEmail'),$_smarty_tpl);?>
"/>
						</div>
					</div>
				<?php }?>

				<?php if ($_smarty_tpl->tpl_vars['ShowPasswordPrompt']->value) {?>
					<div class="col-xs-12">
						<div class="input-group margin-bottom-25">
							<span class="input-group-addon">
							<i class="glyphicon glyphicon-lock"></i>
							</span>
							<input type="password" required="" id="password" <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0][0]->GetFormName(array('key'=>'PASSWORD'),$_smarty_tpl);?>

								   class="form-control"
								   value="" placeholder="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Password'),$_smarty_tpl);?>
"/>
						</div>
					</div>
				<?php }?>

				<div class="col-xs-12">
					<button type="submit" class="btn btn-large btn-primary  btn-block" name="<?php echo Actions::LOGIN;?>
"
							value="submit"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'LogIn'),$_smarty_tpl);?>
</button>
					<input type="hidden" <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0][0]->GetFormName(array('key'=>'RESUME'),$_smarty_tpl);?>
 value="<?php echo $_smarty_tpl->tpl_vars['ResumeUrl']->value;?>
"/>
				</div>

				<div class="col-xs-12 <?php if ($_smarty_tpl->tpl_vars['ShowRegisterLink']->value) {?>col-sm-6<?php }?>">
					<div class="checkbox">
						<input id="rememberMe" type="checkbox" <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0][0]->GetFormName(array('key'=>'PERSIST_LOGIN'),$_smarty_tpl);?>
>
						<label for="rememberMe" style="color:#666; font-weight: bold"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'RememberMe'),$_smarty_tpl);?>
</label>
					</div>
				</div>

                <?php if ($_smarty_tpl->tpl_vars['ShowRegisterLink']->value) {?>
                    <div class="col-xs-12 col-sm-6 register">
                    <span class="bold" style="color: #2e45f7"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>"FirstTimeUser?"),$_smarty_tpl);?>

                    <a href="<?php echo $_smarty_tpl->tpl_vars['RegisterUrl']->value;?>
" <?php echo $_smarty_tpl->tpl_vars['RegisterUrlNew']->value;?>

                       title="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Register'),$_smarty_tpl);?>
" style="color: #666"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Register'),$_smarty_tpl);?>
</a>
                    </span>
                    </div>
                <?php }?>

				<?php if ($_smarty_tpl->tpl_vars['AllowGoogleLogin']->value&&$_smarty_tpl->tpl_vars['AllowFacebookLogin']->value) {?>
					<?php $_smarty_tpl->tpl_vars['socialClass'] = new Smarty_variable("col-lg-6 col-md-12", null, 0);?>
				<?php } else { ?>
					<?php $_smarty_tpl->tpl_vars['socialClass'] = new Smarty_variable("col-md-12", null, 0);?>
				<?php }?>
				<?php if ($_smarty_tpl->tpl_vars['AllowGoogleLogin']->value) {?>
					<div class="<?php echo $_smarty_tpl->tpl_vars['socialClass']->value;?>
" id="socialLoginGoogle">
						<a href="https://accounts.google.com/o/oauth2/v2/auth?scope=email%20profile&state=<?php echo $_smarty_tpl->tpl_vars['GoogleState']->value;?>
&redirect_uri=http://www.social.twinkletoessoftware.com/googleresume.php&response_type=code&client_id=531675809673-3sfvrchh6svd9bfl7m55dao8n4s6cqpc.apps.googleusercontent.com"
						   class="pull-left-lg">
							<img src="img/external/btn_google_signin_dark_normal_web.png" alt="Sign in with Google"/>
						</a>
					</div>
				<?php }?>
				<?php if ($_smarty_tpl->tpl_vars['AllowFacebookLogin']->value) {?>
					<div class="<?php echo $_smarty_tpl->tpl_vars['socialClass']->value;?>
" id="socialLoginFacebook">
						<a href="http://www.social.twinkletoessoftware.com/fblogin.php?protocol=<?php echo $_smarty_tpl->tpl_vars['Protocol']->value;?>
&resume=<?php echo $_smarty_tpl->tpl_vars['ScriptUrlNoProtocol']->value;?>
/external-auth.php%3Ftype%3Dfb" class="pull-right-lg">
							<img style="max-height:42px" src="img/external/btn_facebook_login.png" alt="Sign in with Facebook"/>
						</a>
					</div>
				<?php }?>
			</div>
			<div id="login-footer" class="col-xs-12">
				<?php if ($_smarty_tpl->tpl_vars['ShowForgotPasswordPrompt']->value) {?>
					<div id="forgot-password" class="col-xs-12 col-sm-6">
						<a href="<?php echo $_smarty_tpl->tpl_vars['ForgotPasswordUrl']->value;?>
" <?php echo $_smarty_tpl->tpl_vars['ForgotPasswordUrlNew']->value;?>
 class="btn btn-link pull-left-sm" style="color: #93FC04"><span><i
										class="glyphicon glyphicon-question-sign" style="color: white"></i></span> <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'ForgotMyPassword'),$_smarty_tpl);?>
</a>
					</div>
				<?php }?>
			</div>


		</form>
	</div>
</div>

<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['setfocus'][0][0]->SetFocus(array('key'=>'EMAIL'),$_smarty_tpl);?>


<script type="text/javascript">
	var url = 'index.php?<?php echo QueryStringKeys::LANGUAGE;?>
=';
	$(document).ready(function () {
		$('#languageDropDown').change(function () {
			window.location.href = url + $(this).val();
		});

		var langCode = readCookie('<?php echo CookieKeys::LANGUAGE;?>
');

		if (!langCode)
		{
		}
	});
</script>
<?php echo $_smarty_tpl->getSubTemplate ('globalfooter.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }} ?>
