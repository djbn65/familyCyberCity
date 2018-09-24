<?php /* Smarty version Smarty-3.1.16, created on 2017-05-05 11:10:45
         compiled from "/home/vol15_8/byethost8.com/b8_19720712/htdocs/booked/tpl/Reports/saved-reports.tpl" */ ?>
<?php /*%%SmartyHeaderCode:330128836590c95f50965b8-48604513%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd153e25b09c6cb007d6a99d87c4f9f5030c8693b' => 
    array (
      0 => '/home/vol15_8/byethost8.com/b8_19720712/htdocs/booked/tpl/Reports/saved-reports.tpl',
      1 => 1487738826,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '330128836590c95f50965b8-48604513',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'ReportList' => 0,
    'Path' => 0,
    'report' => 0,
    'rowCss' => 0,
    'untitled' => 0,
    'UserEmail' => 0,
    'ScriptUrl' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_590c95f517a8c1_33022210',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_590c95f517a8c1_33022210')) {function content_590c95f517a8c1_33022210($_smarty_tpl) {?><?php if (!is_callable('smarty_function_cycle')) include '/home/vol15_8/byethost8.com/b8_19720712/htdocs/booked/lib/Common/../../lib/external/Smarty/plugins/function.cycle.php';
?>
<?php echo $_smarty_tpl->getSubTemplate ('globalheader2.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('cssFiles'=>"scripts/js/jqplot/jquery.jqplot.min.css"), 0);?>


<div id="page-saved-reports" style="margin-top: 8rem">

	<div class="panel panel-default" id="saved-reports-panel">
		<div class="panel-heading">
			<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'MySavedReports'),$_smarty_tpl);?>
 <span class="badge"><?php echo count($_smarty_tpl->tpl_vars['ReportList']->value);?>
</span>
		</div>
		<div class="panel-body no-padding">
			<?php if (count($_smarty_tpl->tpl_vars['ReportList']->value)==0) {?>
				<h2 class="no-data" style="text-align: center;"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'NoSavedReports'),$_smarty_tpl);?>
</h2>
				<a href="<?php echo $_smarty_tpl->tpl_vars['Path']->value;?>
reports/<?php echo Pages::REPORTS_GENERATE;?>
"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'GenerateReport'),$_smarty_tpl);?>
</a>
			<?php } else { ?>
				<div id="report-list">
					<table class="table">
						<tbody>
						<?php  $_smarty_tpl->tpl_vars['report'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['report']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['ReportList']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['report']->key => $_smarty_tpl->tpl_vars['report']->value) {
$_smarty_tpl->tpl_vars['report']->_loop = true;
?>
							<?php echo smarty_function_cycle(array('values'=>',alt','assign'=>'rowCss'),$_smarty_tpl);?>

							<tr reportId="<?php echo $_smarty_tpl->tpl_vars['report']->value->Id();?>
" class="<?php echo $_smarty_tpl->tpl_vars['rowCss']->value;?>
">
								<td><span class="report-title"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['report']->value->ReportName())===null||$tmp==='' ? $_smarty_tpl->tpl_vars['untitled']->value : $tmp);?>
</span></td>
								<td class="right"><span
											class="report-created-date"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['format_date'][0][0]->FormatDate(array('date'=>$_smarty_tpl->tpl_vars['report']->value->DateCreated()),$_smarty_tpl);?>
</span>
								</td>

								<td class="report-action"><a href="#" class="runNow report"><span
												class="fa fa-play-circle-o icon add"></span> <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'RunReport'),$_smarty_tpl);?>

									</a></td>
								<td class="report-action"><a href="#" class="emailNow report"><span
												class="fa fa-envelope-o icon"></span> <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'EmailReport'),$_smarty_tpl);?>
</a>
								</td>
								<td class="report-action"><a href="#" class="delete report"><span
												class="fa fa-trash icon remove"></span> <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Delete'),$_smarty_tpl);?>
</a></td>
								


							</tr>
						<?php } ?>
						</tbody>
					</table>
				</div>
			<?php }?>
		</div>

	</div>

	<div id="resultsDiv">
	</div>

	<div id="emailSent" class="alert alert-success no-show">
		<strong><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'ReportSent'),$_smarty_tpl);?>
</strong>N
	</div>

	<div class="modal fade" id="emailDiv" tabindex="-1" role="dialog" aria-labelledby="emailDialogLabel"
		 aria-hidden="true">
		<div class="modal-dialog">
			<form id="emailForm" method="post">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						<h4 class="modal-title" id="emailDialogLabel"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'EmailReport'),$_smarty_tpl);?>
</h4>
					</div>
					<div class="modal-body">
						<div class="form-group">
							<label for="emailTo"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Email'),$_smarty_tpl);?>
</label>
							<input id="emailTo" <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0][0]->GetFormName(array('key'=>'EMAIL'),$_smarty_tpl);?>
 value="<?php echo $_smarty_tpl->tpl_vars['UserEmail']->value;?>
" class="form-control"/>
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-default cancel"
									data-dismiss="modal"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Cancel'),$_smarty_tpl);?>
</button>
							<button id="btnSendEmail" type="button" class="btn btn-success save"><span
										class="fa fa-envelope-o"></span> <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'EmailReport'),$_smarty_tpl);?>

							</button>
							<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['indicator'][0][0]->DisplayIndicator(array(),$_smarty_tpl);?>

						</div>
					</div>
				</div>
			</form>
		</div>
	</div>

	<div class="modal fade" id="deleteDiv" tabindex="-1" role="dialog" aria-labelledby="deleteLabel" aria-hidden="true">
		<div class="modal-dialog">
			<form id="deleteForm" method="post">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						<h4 class="modal-title" id="deleteLabel"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Delete'),$_smarty_tpl);?>
</h4>
					</div>
					<div class="modal-body">
						<div class="alert alert-danger">
							<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'DeleteWarning'),$_smarty_tpl);?>

						</div>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-default cancel"
								data-dismiss="modal"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Cancel'),$_smarty_tpl);?>
</button>
						<button type="button" class="btn btn-danger save"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Delete'),$_smarty_tpl);?>
</button>
						<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['indicator'][0][0]->DisplayIndicator(array(),$_smarty_tpl);?>

					</div>
				</div>
				<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['csrf_token'][0][0]->CSRFToken(array(),$_smarty_tpl);?>

			</form>
		</div>
	</div>

	<div id="indicator" style="display:none; text-align: center;">
		<h3><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Working'),$_smarty_tpl);?>
</h3>
		<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['html_image'][0][0]->PrintImage(array('src'=>"admin-ajax-indicator.gif"),$_smarty_tpl);?>

	</div>

	<?php echo $_smarty_tpl->getSubTemplate ("Reports/chart.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


	

	<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['jsfile'][0][0]->IncludeJavascriptFile(array('src'=>"ajax-helpers.js"),$_smarty_tpl);?>

	<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['jsfile'][0][0]->IncludeJavascriptFile(array('src'=>"reports/saved-reports.js"),$_smarty_tpl);?>

	<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['jsfile'][0][0]->IncludeJavascriptFile(array('src'=>"reports/chart.js"),$_smarty_tpl);?>

	<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['jsfile'][0][0]->IncludeJavascriptFile(array('src'=>"reports/common.js"),$_smarty_tpl);?>


	<script type="text/javascript">
		$(document).ready(function () {
			var reportOptions = {
				generateUrl: "<?php echo $_SERVER['SCRIPT_NAME'];?>
?<?php echo QueryStringKeys::ACTION;?>
=<?php echo ReportActions::Generate;?>
&<?php echo QueryStringKeys::REPORT_ID;?>
=",
				emailUrl: "<?php echo $_SERVER['SCRIPT_NAME'];?>
?<?php echo QueryStringKeys::ACTION;?>
=<?php echo ReportActions::Email;?>
&<?php echo QueryStringKeys::REPORT_ID;?>
=",
				deleteUrl: "<?php echo $_SERVER['SCRIPT_NAME'];?>
?<?php echo QueryStringKeys::ACTION;?>
=<?php echo ReportActions::Delete;?>
&<?php echo QueryStringKeys::REPORT_ID;?>
=",
				printUrl: "<?php echo $_SERVER['SCRIPT_NAME'];?>
?<?php echo QueryStringKeys::ACTION;?>
=<?php echo ReportActions::PrintReport;?>
&<?php echo QueryStringKeys::REPORT_ID;?>
=",
				csvUrl: "<?php echo $_SERVER['SCRIPT_NAME'];?>
?<?php echo QueryStringKeys::ACTION;?>
=<?php echo ReportActions::Csv;?>
&<?php echo QueryStringKeys::REPORT_ID;?>
="
			};

			var reports = new SavedReports(reportOptions);
			reports.init();

			var common = new ReportsCommon(
					{
						scriptUrl: '<?php echo $_smarty_tpl->tpl_vars['ScriptUrl']->value;?>
'
					}
			);
			common.init();
		});
	</script>
</div>
<?php echo $_smarty_tpl->getSubTemplate ('globalfooter.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
