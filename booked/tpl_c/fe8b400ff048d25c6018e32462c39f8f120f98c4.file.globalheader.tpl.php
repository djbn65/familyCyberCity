<?php /* Smarty version Smarty-3.1.16, created on 2017-07-04 17:11:26
         compiled from "/home/vol15_8/byethost8.com/b8_19720712/htdocs/booked/tpl/globalheader.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1587439755595c047ef04837-21697796%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fe8b400ff048d25c6018e32462c39f8f120f98c4' => 
    array (
      0 => '/home/vol15_8/byethost8.com/b8_19720712/htdocs/booked/tpl/globalheader.tpl',
      1 => 1488215469,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1587439755595c047ef04837-21697796',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'HtmlLang' => 0,
    'HtmlTextDirection' => 0,
    'TitleKey' => 0,
    'TitleArgs' => 0,
    'Title' => 0,
    'Charset' => 0,
    'ShouldLogout' => 0,
    'SessionTimeoutSeconds' => 0,
    'Path' => 0,
    'UseLocalJquery' => 0,
    'Qtip' => 0,
    'Validator' => 0,
    'InlineEdit' => 0,
    'Select2' => 0,
    'Timepicker' => 0,
    'Fullcalendar' => 0,
    'cssFiles' => 0,
    'CssFileList' => 0,
    'cssFile' => 0,
    'CssUrl' => 0,
    'CssExtensionFile' => 0,
    'printCssFiles' => 0,
    'PrintCssFileList' => 0,
    'HideNavBar' => 0,
    'LoggedIn' => 0,
    'ShowParticipation' => 0,
    'CanViewAdmin' => 0,
    'EnableConfigurationPage' => 0,
    'CanViewResponsibilities' => 0,
    'CanViewGroupAdmin' => 0,
    'CanViewResourceAdmin' => 0,
    'CanViewScheduleAdmin' => 0,
    'CanViewReports' => 0,
    'ShowScheduleLink' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_595c047f0ce3b4_72891378',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_595c047f0ce3b4_72891378')) {function content_595c047f0ce3b4_72891378($_smarty_tpl) {?><!DOCTYPE html>

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
