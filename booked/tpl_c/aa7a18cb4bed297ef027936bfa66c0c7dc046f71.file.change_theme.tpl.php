<?php /* Smarty version Smarty-3.1.16, created on 2017-02-27 12:57:29
         compiled from "/home/vol15_8/byethost8.com/b8_19720712/htdocs/booked/tpl/Admin/Configuration/change_theme.tpl" */ ?>
<?php /*%%SmartyHeaderCode:107587647958b4688938d1c2-34927395%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'aa7a18cb4bed297ef027936bfa66c0c7dc046f71' => 
    array (
      0 => '/home/vol15_8/byethost8.com/b8_19720712/htdocs/booked/tpl/Admin/Configuration/change_theme.tpl',
      1 => 1487739381,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '107587647958b4688938d1c2-34927395',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'ScriptUrl' => 0,
    'LogoUrl' => 0,
    'CssUrl' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_58b46889454527_88260215',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58b46889454527_88260215')) {function content_58b46889454527_88260215($_smarty_tpl) {?>
<?php echo $_smarty_tpl->getSubTemplate ('globalheader2.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<div id="page-manage-accessories" class="admin-page" style="margin-top: 8rem">
    <h1><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'LookAndFeel'),$_smarty_tpl);?>
</h1>

    <div id="successMessage" class="alert alert-success hidden">
        <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'ThemeUploadSuccess'),$_smarty_tpl);?>

    </div>

    <form id="elementForm" action="<?php echo $_SERVER['SCRIPT_NAME'];?>
" ajaxAction="update" method="post" enctype="multipart/form-data">
        <div class="validationSummary alert alert-danger no-show" id="validationErrors">
            <ul>
                <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['async_validator'][0][0]->AsyncValidator(array('id'=>"logoFileExt"),$_smarty_tpl);?>

                <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['async_validator'][0][0]->AsyncValidator(array('id'=>"cssFileExt"),$_smarty_tpl);?>

                <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['async_validator'][0][0]->AsyncValidator(array('id'=>"logoFile"),$_smarty_tpl);?>

                <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['async_validator'][0][0]->AsyncValidator(array('id'=>"cssFile"),$_smarty_tpl);?>

            </ul>
        </div>

        <div>
            <h4><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>"Logo"),$_smarty_tpl);?>
 (*.png, *.gif, *.jpg)</h4>

            <div>
                <a href="<?php echo $_smarty_tpl->tpl_vars['ScriptUrl']->value;?>
/img/<?php echo $_smarty_tpl->tpl_vars['LogoUrl']->value;?>
" download="<?php echo $_smarty_tpl->tpl_vars['ScriptUrl']->value;?>
/img/<?php echo $_smarty_tpl->tpl_vars['LogoUrl']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['LogoUrl']->value;?>
</a>
                <a href="#" id="removeLogo"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Remove'),$_smarty_tpl);?>
</a>
            </div>
            <input type="file" <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0][0]->GetFormName(array('key'=>'LOGO_FILE'),$_smarty_tpl);?>
 class="pull-left"/>
            <a href="#" class="clearInput inline"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['html_image'][0][0]->PrintImage(array('src'=>"cross-button.png"),$_smarty_tpl);?>
</a>

        </div>
        <div>
            <div>
                <h4><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>"CssFile"),$_smarty_tpl);?>
 (*.css)</h4>

                <a href="<?php echo $_smarty_tpl->tpl_vars['ScriptUrl']->value;?>
/css/<?php echo $_smarty_tpl->tpl_vars['CssUrl']->value;?>
" download="<?php echo $_smarty_tpl->tpl_vars['ScriptUrl']->value;?>
/css/<?php echo $_smarty_tpl->tpl_vars['CssUrl']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['CssUrl']->value;?>
</a>
            </div>
            <input type="file" <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0][0]->GetFormName(array('key'=>'CSS_FILE'),$_smarty_tpl);?>
 class="pull-left"/>
            <a href="#" class="clearInput"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['html_image'][0][0]->PrintImage(array('src'=>"cross-button.png"),$_smarty_tpl);?>
</a>
        </div>

        <div>
            <div>
                <h4><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>"ReservationColors"),$_smarty_tpl);?>
</h4>

                <a href="manage_reservation_colors.php"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Manage'),$_smarty_tpl);?>
</a>
            </div>
        </div>

        <div class="clearfix"></div>

        <button type="button" class="btn btn-success update margin-top-25" name="<?php echo Actions::SAVE;?>
" id="saveButton">
            <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Update'),$_smarty_tpl);?>

        </button>

        <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['csrf_token'][0][0]->CSRFToken(array(),$_smarty_tpl);?>


    </form>


    <div id="wait-box" class="wait-box">
        <h3><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Working'),$_smarty_tpl);?>
</h3>
        <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['html_image'][0][0]->PrintImage(array('src'=>"reservation_submitting.gif"),$_smarty_tpl);?>

    </div>

    <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['jsfile'][0][0]->IncludeJavascriptFile(array('src'=>"ajax-helpers.js"),$_smarty_tpl);?>

    <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['jsfile'][0][0]->IncludeJavascriptFile(array('src'=>"js/jquery.form-3.09.min.js"),$_smarty_tpl);?>

    <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['jsfile'][0][0]->IncludeJavascriptFile(array('src'=>"js/ajaxfileupload.js"),$_smarty_tpl);?>

    <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['jsfile'][0][0]->IncludeJavascriptFile(array('src'=>"ajax-form-submit.js"),$_smarty_tpl);?>


    <script type="text/javascript">
        $('document').ready(function () {

            $('#elementForm').bindAjaxSubmit($('#saveButton'), $('#successMessage'), $('#wait-box'));
//
//            function successHandler(response)
//            {
//                hideModal();
//                $('#successMessage').show().delay(5000).fadeOut();
//            }
//
//            function hideModal()
//            {
//                $('#wait-box').hide();
//                $.unblockUI();
//            }
//
//            function showModal(formData, jqForm, opts)
//            {
//                $('#successMessage').hide();
//
//                $.blockUI({ message: $('#' +  $('#wait-box').attr('id'))});
//                $('#wait-box').show();
//
//                return true;
//            }
//
//            ConfigureUploadForm($('#saveButton'), function(){
//                return $('#elementForm').attr('action');
//            }, showModal, successHandler, null);

            $('.clearInput').click(function (e) {
                e.preventDefault();
                $(this).prev('input').val('');
            });

            $('#removeLogo').click(function (e) {
                e.preventDefault();

                PerformAsyncAction($(this), function () {
                    return '<?php echo $_SERVER['SCRIPT_NAME'];?>
?action=removeLogo';
                });
            });
        });

    </script>

</div>
<?php echo $_smarty_tpl->getSubTemplate ('globalfooter.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
