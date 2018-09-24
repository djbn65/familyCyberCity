<?php /* Smarty version Smarty-3.1.16, created on 2017-05-05 11:10:27
         compiled from "/home/vol15_8/byethost8.com/b8_19720712/htdocs/booked/tpl/SearchAvailability/search-availability.tpl" */ ?>
<?php /*%%SmartyHeaderCode:149895763590c95e349a079-96233549%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b1917adae4b5fe66c6eed64a4e9e5257ce827fc1' => 
    array (
      0 => '/home/vol15_8/byethost8.com/b8_19720712/htdocs/booked/tpl/SearchAvailability/search-availability.tpl',
      1 => 1487738853,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '149895763590c95e349a079-96233549',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'Resources' => 0,
    'resource' => 0,
    'Today' => 0,
    'Tomorrow' => 0,
    'MaxParticipantsFilter' => 0,
    'ResourceTypes' => 0,
    'ResourceTypeIdFilter' => 0,
    'ResourceAttributes' => 0,
    'attribute' => 0,
    'ResourceTypeAttributes' => 0,
    'StartDate' => 0,
    'Path' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_590c95e3571b99_84171531',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_590c95e3571b99_84171531')) {function content_590c95e3571b99_84171531($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('globalheader.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('Select2'=>true), 0);?>



<div class="page-search-availability default-box" style="margin-top: 8rem">
	<h1>Search Availability</h1>
    <form role="form" name="searchForm" id="searchForm" method="post"
          action="<?php echo $_SERVER['SCRIPT_NAME'];?>
?action=search">
        <div class="form-group col-xs-12 col-sm-3">
            <div class="checkbox">
                <input type="checkbox" id="anyResource" checked="checked"/>
                <label for="anyResource" style="color:#888"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'AnyResource'),$_smarty_tpl);?>
</label>
            </div>
        </div>
        <div class="form-group col-xs-12 col-sm-9">
            <label for="resourceGroups" class="no-show"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Resources'),$_smarty_tpl);?>
</label>
            <select id="resourceGroups" class="form-control" multiple="multiple" <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0][0]->GetFormName(array('key'=>'RESOURCE_ID','multi'=>true),$_smarty_tpl);?>

                    disabled="disabled" style="width:100%">
                <?php  $_smarty_tpl->tpl_vars['resource'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['resource']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['Resources']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['resource']->key => $_smarty_tpl->tpl_vars['resource']->value) {
$_smarty_tpl->tpl_vars['resource']->_loop = true;
?>
                    <option value="<?php echo $_smarty_tpl->tpl_vars['resource']->value->GetId();?>
"><?php echo $_smarty_tpl->tpl_vars['resource']->value->GetName();?>
</option>
                <?php } ?>
            </select>
        </div>

        <div class="clearfix"></div>

        <div class="form-group col-xs-12 col-sm-3">
            <div class="input-group margin-bottom-15">
                <input type="number" min="0" step="1" value="0" class="form-control hours-minutes"
                       id="hours" <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0][0]->GetFormName(array('key'=>'HOURS'),$_smarty_tpl);?>
" />
                <span class="input-group-addon hours-minutes"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Hours'),$_smarty_tpl);?>
</span>
            </div>
            <div class="input-group">
                <input type="number" min="0" step="30" value="30" class="form-control hours-minutes"
                       id="minutes" <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0][0]->GetFormName(array('key'=>'MINUTES'),$_smarty_tpl);?>
"/>
                <span class="input-group-addon hours-minutes"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Minutes'),$_smarty_tpl);?>
</span>
            </div>
        </div>

        <div class="form-group col-xs-12 col-sm-9">
            <div class="btn-group margin-bottom-15" data-toggle="buttons">
                <label class="btn btn-default active">
                    <input type="radio" id="today" checked="checked"
                           value="today" <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0][0]->GetFormName(array('key'=>'AVAILABILITY_RANGE'),$_smarty_tpl);?>
 />
                    <span class="hidden-xs" style="color:#2e45f7"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Today'),$_smarty_tpl);?>
,</span>
                    <span style="color:#2e45f7"> <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['format_date'][0][0]->FormatDate(array('date'=>$_smarty_tpl->tpl_vars['Today']->value,'key'=>'calendar_dates'),$_smarty_tpl);?>
</span>
                </label>
                <label class="btn btn-default">
                    <input type="radio" id="tomorrow" value="tomorrow" <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0][0]->GetFormName(array('key'=>'AVAILABILITY_RANGE'),$_smarty_tpl);?>
 />
                    <span class="hidden-xs" style="color:#2e45f7"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Tomorrow'),$_smarty_tpl);?>
,</span>
                    <span style="color:#2e45f7"> <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['format_date'][0][0]->FormatDate(array('date'=>$_smarty_tpl->tpl_vars['Tomorrow']->value,'key'=>'calendar_dates'),$_smarty_tpl);?>
</span>
                </label>
                <label class="btn btn-default">
                    <input type="radio" id="thisweek" value="thisweek" <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0][0]->GetFormName(array('key'=>'AVAILABILITY_RANGE'),$_smarty_tpl);?>
 />
                    <span class="hidden-xs" style="color:#2e45f7"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'ThisWeek'),$_smarty_tpl);?>
</span>
                    <span class="visible-xs" style="color:#2e45f7"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Week'),$_smarty_tpl);?>
</span>
                </label>
                <label class="btn btn-default">
                    <input type="radio" id="daterange" value="daterange" <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0][0]->GetFormName(array('key'=>'AVAILABILITY_RANGE'),$_smarty_tpl);?>
 />
                    <i class="fa fa-calendar"></i><span class="hidden-xs" style="color:#2e45f7"> <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'DateRange'),$_smarty_tpl);?>
</span>
                </label>
            </div>
            <div class="">
                <input type="text" id="beginDate" class="form-control inline dateinput"
                       placeholder="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'BeginDate'),$_smarty_tpl);?>
" disabled="disabled"/>
                <input type="hidden" id="formattedBeginDate" <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0][0]->GetFormName(array('key'=>'BEGIN_DATE'),$_smarty_tpl);?>
 />
                -
                <input type="text" id="endDate" class="form-control inline dateinput"
                       placeholder="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'EndDate'),$_smarty_tpl);?>
" disabled="disabled"/>
                <input type="hidden" id="formattedEndDate" <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0][0]->GetFormName(array('key'=>'END_DATE'),$_smarty_tpl);?>
 />
                <a href="#" data-toggle="collapse" data-target="#advancedSearchOptions" style="color:#888"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'MoreOptions'),$_smarty_tpl);?>
</a>
            </div>
            <div class="clearfix"></div>

        </div>

        <div class="clearfix"></div>

        <div class="collapse" id="advancedSearchOptions">
            <div class="form-group col-xs-6">
                <label for="maxCapacity" class="hidden"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'MinimumCapacity'),$_smarty_tpl);?>
</label>
                <input type='number' id='maxCapacity' min='0' size='5' maxlength='5'
                       class="form-control input-sm" <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0][0]->GetFormName(array('key'=>'MAX_PARTICIPANTS'),$_smarty_tpl);?>

                       value="<?php echo $_smarty_tpl->tpl_vars['MaxParticipantsFilter']->value;?>
" placeholder="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'MinimumCapacity'),$_smarty_tpl);?>
"/>

            </div>
            <div class="form-group col-xs-6">
                <label for="resourceType" class="hidden"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'ResourceType'),$_smarty_tpl);?>
</label>
                <select id="resourceType" <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0][0]->GetFormName(array('key'=>'RESOURCE_TYPE_ID'),$_smarty_tpl);?>
 <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0][0]->GetFormName(array('key'=>'RESOURCE_TYPE_ID'),$_smarty_tpl);?>

                        class="form-control input-sm">
                    <option value="">- <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'ResourceType'),$_smarty_tpl);?>
 -</option>
                    <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['object_html_options'][0][0]->ObjectHtmlOptions(array('options'=>$_smarty_tpl->tpl_vars['ResourceTypes']->value,'label'=>'Name','key'=>'Id','selected'=>$_smarty_tpl->tpl_vars['ResourceTypeIdFilter']->value),$_smarty_tpl);?>

                </select>
            </div>

            <div>
                <?php  $_smarty_tpl->tpl_vars['attribute'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['attribute']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['ResourceAttributes']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['attribute']->key => $_smarty_tpl->tpl_vars['attribute']->value) {
$_smarty_tpl->tpl_vars['attribute']->_loop = true;
?>
                    <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['control'][0][0]->DisplayControl(array('type'=>"AttributeControl",'attribute'=>$_smarty_tpl->tpl_vars['attribute']->value,'align'=>'vertical','searchmode'=>true,'namePrefix'=>'r','class'=>"col-sm-6 col-xs-12",'inputClass'=>"input-sm"),$_smarty_tpl);?>

                <?php } ?>
                <?php if (count($_smarty_tpl->tpl_vars['ResourceAttributes']->value)%2!=0) {?>
                    <div class="col-sm-6 hidden-xs">&nbsp;</div>
                <?php }?>
            </div>

            <div>
                <?php  $_smarty_tpl->tpl_vars['attribute'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['attribute']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['ResourceTypeAttributes']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['attribute']->key => $_smarty_tpl->tpl_vars['attribute']->value) {
$_smarty_tpl->tpl_vars['attribute']->_loop = true;
?>
                    <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['control'][0][0]->DisplayControl(array('type'=>"AttributeControl",'attribute'=>$_smarty_tpl->tpl_vars['attribute']->value,'align'=>'vertical','searchmode'=>true,'namePrefix'=>'rt','class'=>"col-sm-6 col-xs-12",'inputClass'=>"input-sm"),$_smarty_tpl);?>

                <?php } ?>
                <?php if (count($_smarty_tpl->tpl_vars['ResourceTypeAttributes']->value)%2!=0) {?>
                    <div class="col-sm-6 hidden-xs">&nbsp;</div>
                <?php }?>
            </div>
        </div>

        <div class="form-group col-xs-12">
            <button type="submit" class="btn btn-success col-xs-12"
                    value="submit" <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0][0]->GetFormName(array('key'=>'SUBMIT'),$_smarty_tpl);?>
><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'FindATime'),$_smarty_tpl);?>
</button>
            <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['indicator'][0][0]->DisplayIndicator(array(),$_smarty_tpl);?>

        </div>
    </form>

    <div class="clearfix"></div>
    <div id="availability-results"></div>


    <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['csrf_token'][0][0]->CSRFToken(array(),$_smarty_tpl);?>



    <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['jsfile'][0][0]->IncludeJavascriptFile(array('src'=>"js/tree.jquery.js"),$_smarty_tpl);?>

    <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['jsfile'][0][0]->IncludeJavascriptFile(array('src'=>"js/jquery.cookie.js"),$_smarty_tpl);?>

    <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['jsfile'][0][0]->IncludeJavascriptFile(array('src'=>"ajax-helpers.js"),$_smarty_tpl);?>

    <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['jsfile'][0][0]->IncludeJavascriptFile(array('src'=>"availability-search.js"),$_smarty_tpl);?>

    <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['jsfile'][0][0]->IncludeJavascriptFile(array('src'=>"resourcePopup.js"),$_smarty_tpl);?>


    <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['control'][0][0]->DisplayControl(array('type'=>"DatePickerSetupControl",'ControlId'=>"beginDate",'AltId'=>"formattedBeginDate",'DefaultDate'=>$_smarty_tpl->tpl_vars['StartDate']->value),$_smarty_tpl);?>

    <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['control'][0][0]->DisplayControl(array('type'=>"DatePickerSetupControl",'ControlId'=>"endDate",'AltId'=>"formattedEndDate",'DefaultDate'=>$_smarty_tpl->tpl_vars['StartDate']->value),$_smarty_tpl);?>


    <script type="text/javascript">

        $(document).ready(function () {
            var opts = {
                reservationUrlTemplate: "<?php echo $_smarty_tpl->tpl_vars['Path']->value;?>
<?php echo Pages::RESERVATION;?>
?<?php echo QueryStringKeys::RESOURCE_ID;?>
=[rid]&<?php echo QueryStringKeys::START_DATE;?>
=[sd]&<?php echo QueryStringKeys::END_DATE;?>
=[ed]"
            };
            var search = new AvailabilitySearch(opts);
            search.init();

            $('#resourceGroups').select2({
                placeholder: '<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Resources'),$_smarty_tpl);?>
'
            });
        });


    </script>

</div>

<?php echo $_smarty_tpl->getSubTemplate ('globalfooter.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }} ?>
