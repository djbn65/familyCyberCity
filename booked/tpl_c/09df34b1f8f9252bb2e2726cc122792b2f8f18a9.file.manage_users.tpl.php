<?php /* Smarty version Smarty-3.1.16, created on 2017-06-28 07:10:54
         compiled from "/home/vol15_8/byethost8.com/b8_19720712/htdocs/booked/tpl/Admin/manage_users.tpl" */ ?>
<?php /*%%SmartyHeaderCode:17511776759538ebe4329f4-99819187%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '09df34b1f8f9252bb2e2726cc122792b2f8f18a9' => 
    array (
      0 => '/home/vol15_8/byethost8.com/b8_19720712/htdocs/booked/tpl/Admin/manage_users.tpl',
      1 => 1487738763,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17511776759538ebe4329f4-99819187',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'FilterStatusId' => 0,
    'statusDescriptions' => 0,
    'CreditsEnabled' => 0,
    'PerUserColors' => 0,
    'users' => 0,
    'user' => 0,
    'rowCss' => 0,
    'id' => 0,
    'AttributeList' => 0,
    'attributes' => 0,
    'attribute' => 0,
    'PageInfo' => 0,
    'Timezones' => 0,
    'Timezone' => 0,
    'Groups' => 0,
    'i' => 0,
    'resources' => 0,
    'resource' => 0,
    'resourceId' => 0,
    'group' => 0,
    'ManageGroupsUrl' => 0,
    'ManageReservationsUrl' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_59538ebe5d0423_03036940',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59538ebe5d0423_03036940')) {function content_59538ebe5d0423_03036940($_smarty_tpl) {?><?php if (!is_callable('smarty_function_html_options')) include '/home/vol15_8/byethost8.com/b8_19720712/htdocs/booked/lib/Common/../../lib/external/Smarty/plugins/function.html_options.php';
if (!is_callable('smarty_function_cycle')) include '/home/vol15_8/byethost8.com/b8_19720712/htdocs/booked/lib/Common/../../lib/external/Smarty/plugins/function.cycle.php';
?>
<?php echo $_smarty_tpl->getSubTemplate ('globalheader2.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('InlineEdit'=>true,'cssFiles'=>'scripts/css/colorpicker.css'), 0);?>


<div id="page-manage-users" class="admin-page" style="margin-top: 8rem">

    <h1><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'ManageUsers'),$_smarty_tpl);?>
</h1>

    <form id="filterForm" class="" role="form">
        <div class="form-group col-xs-4">
            <label for="userSearch"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'FindUser'),$_smarty_tpl);?>

                | <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['html_link'][0][0]->PrintLink(array('href'=>$_SERVER['SCRIPT_NAME'],'key'=>'AllUsers'),$_smarty_tpl);?>
</label>
            <input type="text" id="userSearch"
                   class="form-control"/>
        </div>
        <div class="form-group col-xs-2">
            <label for="filterStatusId"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Status'),$_smarty_tpl);?>
</label>
            <select id="filterStatusId" class="form-control">
                <?php echo smarty_function_html_options(array('selected'=>$_smarty_tpl->tpl_vars['FilterStatusId']->value,'options'=>$_smarty_tpl->tpl_vars['statusDescriptions']->value),$_smarty_tpl);?>

            </select>
        </div>
        <div class="col-xs-6">
            <div class="pull-right">

                <a href="#" id="add-user" class="add-link add-user"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>"AddUser"),$_smarty_tpl);?>

                    <span class="fa fa-plus-circle icon add"></span>
                </a>

                <a href="#" id="invite-users" class="add-link add-user"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>"InviteUsers"),$_smarty_tpl);?>

                    <span class="fa fa-send icon add"></span>
                </a>

                <a href="#" id="import-users" class="add-link add-user"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>"Import"),$_smarty_tpl);?>

                    <span class="fa fa-upload icon add"></span>
                </a>
            </div>
        </div>
        <div class="clearfix"></div>
    </form>

    <table class="table" id="userList">
        <thead>
        <tr>
            <th><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['sort_column'][0][0]->SortColumn(array('key'=>'Name','field'=>ColumnNames::LAST_NAME),$_smarty_tpl);?>
</th>
            <th><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['sort_column'][0][0]->SortColumn(array('key'=>'Username','field'=>ColumnNames::USERNAME),$_smarty_tpl);?>
</th>
            <th><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['sort_column'][0][0]->SortColumn(array('key'=>'Email','field'=>ColumnNames::EMAIL),$_smarty_tpl);?>
</th>
            <th><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['sort_column'][0][0]->SortColumn(array('key'=>'Phone','field'=>ColumnNames::PHONE_NUMBER),$_smarty_tpl);?>
</th>
            <th><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['sort_column'][0][0]->SortColumn(array('key'=>'Organization','field'=>ColumnNames::ORGANIZATION),$_smarty_tpl);?>
</th>
            <th><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['sort_column'][0][0]->SortColumn(array('key'=>'Position','field'=>ColumnNames::POSITION),$_smarty_tpl);?>
</th>
            <th><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['sort_column'][0][0]->SortColumn(array('key'=>'Created','field'=>ColumnNames::USER_CREATED),$_smarty_tpl);?>
</th>
            <th><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['sort_column'][0][0]->SortColumn(array('key'=>'LastLogin','field'=>ColumnNames::LAST_LOGIN),$_smarty_tpl);?>
</th>
            <th class="action"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['sort_column'][0][0]->SortColumn(array('key'=>'Status','field'=>ColumnNames::USER_STATUS),$_smarty_tpl);?>
</th>
            <?php if ($_smarty_tpl->tpl_vars['CreditsEnabled']->value) {?>
                <th class="action"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Credits'),$_smarty_tpl);?>
</th>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['PerUserColors']->value) {?>
                <th class="action"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Color'),$_smarty_tpl);?>
</th>
            <?php }?>
            <th><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Actions'),$_smarty_tpl);?>
</th>
        </tr>
        </thead>
        <tbody>
        <?php  $_smarty_tpl->tpl_vars['user'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['user']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['users']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['user']->key => $_smarty_tpl->tpl_vars['user']->value) {
$_smarty_tpl->tpl_vars['user']->_loop = true;
?>
            <?php echo smarty_function_cycle(array('values'=>'row0,row1','assign'=>'rowCss'),$_smarty_tpl);?>

            <?php $_smarty_tpl->tpl_vars['id'] = new Smarty_variable($_smarty_tpl->tpl_vars['user']->value->Id, null, 0);?>
            <tr class="<?php echo $_smarty_tpl->tpl_vars['rowCss']->value;?>
" data-userId="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
">
                <td><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['fullname'][0][0]->DisplayFullName(array('first'=>$_smarty_tpl->tpl_vars['user']->value->First,'last'=>$_smarty_tpl->tpl_vars['user']->value->Last,'ignorePrivacy'=>"true"),$_smarty_tpl);?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['user']->value->Username;?>
</td>
                <td><a href="mailto:<?php echo $_smarty_tpl->tpl_vars['user']->value->Email;?>
"><?php echo $_smarty_tpl->tpl_vars['user']->value->Email;?>
</a></td>
                <td><?php echo $_smarty_tpl->tpl_vars['user']->value->Phone;?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['user']->value->Organization;?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['user']->value->Position;?>
</td>
                <td><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['format_date'][0][0]->FormatDate(array('date'=>$_smarty_tpl->tpl_vars['user']->value->DateCreated,'key'=>'short_datetime'),$_smarty_tpl);?>
</td>
                <td><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['format_date'][0][0]->FormatDate(array('date'=>$_smarty_tpl->tpl_vars['user']->value->LastLogin,'key'=>'short_datetime'),$_smarty_tpl);?>
</td>
                <td class="action"><a href="#" class="update changeStatus"><?php echo $_smarty_tpl->tpl_vars['statusDescriptions']->value[$_smarty_tpl->tpl_vars['user']->value->StatusId];?>
</a>
                    <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['indicator'][0][0]->DisplayIndicator(array('id'=>"userStatusIndicator"),$_smarty_tpl);?>

                </td>
                <?php if ($_smarty_tpl->tpl_vars['CreditsEnabled']->value) {?>
                    <td class="align-right">
						<span class="propertyValue inlineUpdate changeCredits"
                              data-type="number" data-pk="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" data-value="<?php echo $_smarty_tpl->tpl_vars['user']->value->CurrentCreditCount;?>
"
                              data-name="<?php echo FormKeys::CREDITS;?>
"><?php echo $_smarty_tpl->tpl_vars['user']->value->CurrentCreditCount;?>
</span>
                    </td>
                <?php }?>
                <?php if ($_smarty_tpl->tpl_vars['PerUserColors']->value) {?>
                    <td class="action">
                        <a href="#" class="update changeColor"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Edit'),$_smarty_tpl);?>
</a>
                        <?php if (!empty($_smarty_tpl->tpl_vars['user']->value->ReservationColor)) {?>
                            <div class="user-color update changeColor"
                                 style="background-color:#<?php echo $_smarty_tpl->tpl_vars['user']->value->ReservationColor;?>
">&nbsp;</div>
                        <?php }?>
                    </td>
                <?php }?>

                <td>
                    <div class="btn-group">
                        <button type="button" class="btn btn-sm btn-default update edit"><span
                                    class="fa fa-pencil-square-o"></button>
                        <button type="button" class="btn btn-sm btn-default dropdown-toggle" data-toggle="dropdown">
                            <span class="caret"></span>
                            <span class="sr-only"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'More'),$_smarty_tpl);?>
</span>
                        </button>
                        <ul class="dropdown-menu dropdown-menu-right" role="menu" aria-labelledby="moreActions<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
">
                            <li role="presentation"><a role="menuitem"
                                                       href="#" class="update edit"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>"Edit"),$_smarty_tpl);?>
</a>
                            </li>
                            <li role="presentation"><a role="menuitem"
                                                       href="#"
                                                       class="update changePermissions"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>"Permissions"),$_smarty_tpl);?>
</a>
                            </li>
                            <li role="presentation"><a role="menuitem"
                                                       href="#"
                                                       class="update changeGroups"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>"Groups"),$_smarty_tpl);?>
</a>
                            </li>
                            <li role="presentation"><a role="menuitem"
                                                       href="#"
                                                       class="update viewReservations"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>"Reservations"),$_smarty_tpl);?>
</a>
                            </li>
                            <li role="presentation"><a role="menuitem"
                                                       href="#"
                                                       class="update resetPassword"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>"ChangePassword"),$_smarty_tpl);?>
</a>
                            </li>

                        </ul>
                    </div>
                    |
                    <a href="#" class="update delete"><span class="fa fa-trash icon remove"></span></a>
                </td>
            </tr>
            <?php $_smarty_tpl->tpl_vars['attributes'] = new Smarty_variable($_smarty_tpl->tpl_vars['AttributeList']->value, null, 0);?>
            <?php if (count($_smarty_tpl->tpl_vars['attributes']->value)>0) {?>
                <tr data-userId="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
">
                    <td colspan="<?php if ($_smarty_tpl->tpl_vars['PerUserColors']->value) {?>11<?php } else { ?>10<?php }?>" class="<?php echo $_smarty_tpl->tpl_vars['rowCss']->value;?>
 customAttributes" userId="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
">
                        <?php  $_smarty_tpl->tpl_vars['attribute'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['attribute']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['AttributeList']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['attribute']->key => $_smarty_tpl->tpl_vars['attribute']->value) {
$_smarty_tpl->tpl_vars['attribute']->_loop = true;
?>
                            <?php echo $_smarty_tpl->getSubTemplate ('Admin/InlineAttributeEdit.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('id'=>$_smarty_tpl->tpl_vars['id']->value,'attribute'=>$_smarty_tpl->tpl_vars['attribute']->value,'value'=>$_smarty_tpl->tpl_vars['user']->value->GetAttributeValue($_smarty_tpl->tpl_vars['attribute']->value->Id())), 0);?>

                        <?php } ?>
                    </td>
                </tr>
            <?php }?>
        <?php } ?>
        </tbody>
    </table>

    <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['pagination'][0][0]->CreatePagination(array('pageInfo'=>$_smarty_tpl->tpl_vars['PageInfo']->value),$_smarty_tpl);?>


    <div id="addUserDialog" class="modal" tabindex="-1" role="dialog" aria-labelledby="addUserModalLabel"
         aria-hidden="true">
        <form id="addUserForm" class="form" role="form" method="post"
              ajaxAction="<?php echo ManageUsersActions::AddUser;?>
">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title" id="addUserModalLabel"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'AddUser'),$_smarty_tpl);?>
</h4>
                    </div>
                    <div class="modal-body">
                        <div id="addUserResults" class="validationSummary alert alert-danger no-show">
                            <ul>
                                <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['async_validator'][0][0]->AsyncValidator(array('id'=>"addUserEmailformat",'key'=>"ValidEmailRequired"),$_smarty_tpl);?>

                                <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['async_validator'][0][0]->AsyncValidator(array('id'=>"addUserUniqueemail",'key'=>"UniqueEmailRequired"),$_smarty_tpl);?>

                                <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['async_validator'][0][0]->AsyncValidator(array('id'=>"addUserUsername",'key'=>"UniqueUsernameRequired"),$_smarty_tpl);?>

                                <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['async_validator'][0][0]->AsyncValidator(array('id'=>"addAttributeValidator",'key'=>''),$_smarty_tpl);?>

                            </ul>
                        </div>
                        <div class="row">
                            <div class="col-sm-12 col-md-6">
                                <div class="form-group has-feedback">
                                    <label for="addUsername"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>"Username"),$_smarty_tpl);?>
</label>
                                    <input type="text" <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0][0]->GetFormName(array('key'=>"USERNAME"),$_smarty_tpl);?>
 class="required form-control" required
                                           id="addUsername"/>
                                    <i class="glyphicon glyphicon-asterisk form-control-feedback"
                                       data-bv-icon-for="addUsername"></i>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-6">
                                <div class="form-group has-feedback">
                                    <label for="addEmail"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>"Email"),$_smarty_tpl);?>
</label>
                                    <input type="text" <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0][0]->GetFormName(array('key'=>"EMAIL"),$_smarty_tpl);?>
 class="required form-control" required
                                           id="addEmail"/>
                                    <i class="glyphicon glyphicon-asterisk form-control-feedback"
                                       data-bv-icon-for="addEmail"></i>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12 col-md-6">
                                <div class="form-group has-feedback">
                                    <label for="addFname"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>"FirstName"),$_smarty_tpl);?>
</label>
                                    <input type="text" <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0][0]->GetFormName(array('key'=>"FIRST_NAME"),$_smarty_tpl);?>
 class="required form-control"
                                           required
                                           id="addFname"/>
                                    <i class="glyphicon glyphicon-asterisk form-control-feedback"
                                       data-bv-icon-for="addFname"></i>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-6">
                                <div class="form-group has-feedback">
                                    <label for="addLname"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>"LastName"),$_smarty_tpl);?>
</label>
                                    <input type="text" <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0][0]->GetFormName(array('key'=>"LAST_NAME"),$_smarty_tpl);?>
 class="required form-control" required
                                           id="addLname"/>
                                    <i class="glyphicon glyphicon-asterisk form-control-feedback"
                                       data-bv-icon-for="addLname"></i>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12 col-md-6">
                                <div class="form-group has-feedback">
                                    <label for="addPassword"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>"Password"),$_smarty_tpl);?>
</label>
                                    <input type="text" <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0][0]->GetFormName(array('key'=>"PASSWORD"),$_smarty_tpl);?>
 class="required form-control" required
                                           id="addPassword"/>
                                    <i class="glyphicon glyphicon-asterisk form-control-feedback"
                                       data-bv-icon-for="addPassword"></i>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-6">
                                <div class="form-group has-feedback">
                                    <label for="addTimezone"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>"Timezone"),$_smarty_tpl);?>
</label>
                                    <select id="addTimezone" <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0][0]->GetFormName(array('key'=>'TIMEZONE'),$_smarty_tpl);?>
 class="form-control">
                                        <?php echo smarty_function_html_options(array('values'=>$_smarty_tpl->tpl_vars['Timezones']->value,'output'=>$_smarty_tpl->tpl_vars['Timezones']->value,'selected'=>$_smarty_tpl->tpl_vars['Timezone']->value),$_smarty_tpl);?>

                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12 col-md-6">
                                <div class="form-group has-feedback">
                                    <label for="addGroup"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>"Group"),$_smarty_tpl);?>
</label>
                                    <select id="addGroup" <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0][0]->GetFormName(array('key'=>'GROUP_ID'),$_smarty_tpl);?>
 class="form-control">
                                        <option value=""><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'None'),$_smarty_tpl);?>
</option>
                                        <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['object_html_options'][0][0]->ObjectHtmlOptions(array('options'=>$_smarty_tpl->tpl_vars['Groups']->value,'label'=>'Name','key'=>'Id'),$_smarty_tpl);?>

                                    </select>
                                </div>
                            </div>
                            <?php if (count($_smarty_tpl->tpl_vars['AttributeList']->value)>0) {?>
                                <div class="col-xs-12 col-sm-6">
                                    <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['control'][0][0]->DisplayControl(array('type'=>"AttributeControl",'attribute'=>$_smarty_tpl->tpl_vars['AttributeList']->value[0]),$_smarty_tpl);?>

                                </div>
                            <?php } else { ?>
                                <div class="col-sm-12 col-md-6">&nbsp;</div>
                            <?php }?>
                        </div>

                        <?php if (count($_smarty_tpl->tpl_vars['AttributeList']->value)>1) {?>
                            <?php $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int) ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? count($_smarty_tpl->tpl_vars['AttributeList']->value)-1+1 - (1) : 1-(count($_smarty_tpl->tpl_vars['AttributeList']->value)-1)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0) {
for ($_smarty_tpl->tpl_vars['i']->value = 1, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++) {
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration == 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration == $_smarty_tpl->tpl_vars['i']->total;?>
                                <?php if ($_smarty_tpl->tpl_vars['i']->value%2==1) {?>
                                    <div class="row">
                                <?php }?>
                                <div class="col-xs-12 col-sm-6">
                                    <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['control'][0][0]->DisplayControl(array('type'=>"AttributeControl",'attribute'=>$_smarty_tpl->tpl_vars['AttributeList']->value[$_smarty_tpl->tpl_vars['i']->value]),$_smarty_tpl);?>

                                </div>
                                <?php if ($_smarty_tpl->tpl_vars['i']->value%2==0||$_smarty_tpl->tpl_vars['i']->value==count($_smarty_tpl->tpl_vars['AttributeList']->value)-1) {?>
                                    </div>
                                <?php }?>
                            <?php }} ?>
                        <?php }?>
                    </div>
                    <div class="modal-footer">
                        <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['cancel_button'][0][0]->CancelButton(array(),$_smarty_tpl);?>

                        <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['add_button'][0][0]->AddButton(array(),$_smarty_tpl);?>

                        <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['indicator'][0][0]->DisplayIndicator(array(),$_smarty_tpl);?>

                    </div>
                </div>
            </div>
        </form>
    </div>

    <div id="importUsersDialog" class="modal" tabindex="-1" role="dialog" aria-labelledby="importUsersModalLabel"
         aria-hidden="true">
        <form id="importUsersForm" class="form" role="form" method="post" enctype="multipart/form-data"
              ajaxAction="<?php echo ManageUsersActions::ImportUsers;?>
">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title" id="importUsersModalLabel"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Import'),$_smarty_tpl);?>
</h4>
                    </div>
                    <div class="modal-body">
                        <div id="importUserResults" class="validationSummary alert alert-danger no-show">
                            <ul>
                                <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['async_validator'][0][0]->AsyncValidator(array('id'=>"fileExtensionValidator",'key'=>''),$_smarty_tpl);?>

                            </ul>
                        </div>
                        <div id="importErrors" class="alert alert-danger no-show"></div>
                        <div id="importResult" class="alert alert-success no-show">
                            <span><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'RowsImported'),$_smarty_tpl);?>
</span>

                            <div id="importCount" class="inline bold">0</div>
                            <span><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'RowsSkipped'),$_smarty_tpl);?>
</span>

                            <div id="importSkipped" class="inline bold">0</div>
                            <a class="" href="<?php echo $_SERVER['SCRIPT_NAME'];?>
"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Done'),$_smarty_tpl);?>
 <span
                                        class="fa fa-refresh"></span></a>
                        </div>
                        <div class="margin-bottom-25">
                            <input type="file" <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0][0]->GetFormName(array('key'=>'USER_IMPORT_FILE'),$_smarty_tpl);?>
 />
                        </div>
                        <div id="importInstructions" class="alert alert-info">
                            <div class="note"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'UserImportInstructions'),$_smarty_tpl);?>
</div>
                            <a href="<?php echo $_SERVER['SCRIPT_NAME'];?>
?dr=template"
                               target="_blank"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'GetTemplate'),$_smarty_tpl);?>
 <span class="fa fa-download"></span></a>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['cancel_button'][0][0]->CancelButton(array(),$_smarty_tpl);?>

                        <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['add_button'][0][0]->AddButton(array('key'=>'Import'),$_smarty_tpl);?>

                        <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['indicator'][0][0]->DisplayIndicator(array(),$_smarty_tpl);?>

                    </div>
                </div>
            </div>
        </form>
    </div>

    <input type="hidden" id="activeId"/>

    <div id="permissionsDialog" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="permissionsModalLabel"
         aria-hidden="true">
        <form id="permissionsForm" method="post" ajaxAction="<?php echo ManageUsersActions::Permissions;?>
">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title" id="permissionsModalLabel"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Permissions'),$_smarty_tpl);?>
</h4>
                    </div>
                    <div class="modal-body">
                        <div class="alert alert-warning"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'UserPermissionInfo'),$_smarty_tpl);?>
</div>
                        <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Select'),$_smarty_tpl);?>

                        <a href="#" id="checkAllResources"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'All'),$_smarty_tpl);?>
</a> |
                        <a href="#" id="checkNoResources"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'None'),$_smarty_tpl);?>
</a>
                        <?php  $_smarty_tpl->tpl_vars['resource'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['resource']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['resources']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['resource']->key => $_smarty_tpl->tpl_vars['resource']->value) {
$_smarty_tpl->tpl_vars['resource']->_loop = true;
?>
                            <?php $_smarty_tpl->tpl_vars['resourceId'] = new Smarty_variable($_smarty_tpl->tpl_vars['resource']->value->GetResourceId(), null, 0);?>
                            <div class="checkbox">
                                <input id="resource<?php echo $_smarty_tpl->tpl_vars['resourceId']->value;?>
" <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0][0]->GetFormName(array('key'=>'RESOURCE_ID','multi'=>true),$_smarty_tpl);?>

                                       class="resourceId" type="checkbox" value="<?php echo $_smarty_tpl->tpl_vars['resource']->value->GetResourceId();?>
">
                                <label for="resource<?php echo $_smarty_tpl->tpl_vars['resourceId']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['resource']->value->GetName();?>
</label>
                            </div>
                        <?php } ?>
                    </div>
                    <div class="modal-footer">
                        <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['cancel_button'][0][0]->CancelButton(array(),$_smarty_tpl);?>

                        <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['update_button'][0][0]->UpdateButton(array(),$_smarty_tpl);?>

                        <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['indicator'][0][0]->DisplayIndicator(array(),$_smarty_tpl);?>

                    </div>
                </div>
            </div>
        </form>
    </div>

    <div id="passwordDialog" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="passwordModalLabel"
         aria-hidden="true">
        <form id="passwordForm" method="post" ajaxAction="<?php echo ManageUsersActions::Password;?>
">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title" id="passwordModalLabel"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Password'),$_smarty_tpl);?>
</h4>
                    </div>
                    <div class="modal-body">
                        <div class="form-group has-feedback">
                            <label><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Password'),$_smarty_tpl);?>
</label>
                            <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['textbox'][0][0]->Textbox(array('type'=>"password",'name'=>"PASSWORD",'class'=>"required",'value'=>''),$_smarty_tpl);?>

                        </div>
                    </div>
                    <div class="modal-footer">
                        <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['cancel_button'][0][0]->CancelButton(array(),$_smarty_tpl);?>

                        <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['update_button'][0][0]->UpdateButton(array(),$_smarty_tpl);?>

                        <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['indicator'][0][0]->DisplayIndicator(array(),$_smarty_tpl);?>

                    </div>
                </div>
            </div>
        </form>
    </div>

    <div id="invitationDialog" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="invitationModalLabel"
         aria-hidden="true">
        <form id="invitationForm" method="post" ajaxAction="<?php echo ManageUsersActions::InviteUsers;?>
">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title" id="invitationModalLabel"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'InviteUsers'),$_smarty_tpl);?>
</h4>
                    </div>
                    <div class="modal-body">
                        <div class="form-group has-feedback">
                            <label for="inviteEmails"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'InviteUsersLabel'),$_smarty_tpl);?>
</label>
                            <textarea id="inviteEmails" class="form-control"
                                      rows="5" <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0][0]->GetFormName(array('key'=>'INVITED_EMAILS'),$_smarty_tpl);?>
></textarea>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['cancel_button'][0][0]->CancelButton(array(),$_smarty_tpl);?>

                        <button type="button" class="btn btn-success save"><span
                                    class="fa fa-send"></span> <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'InviteUsers'),$_smarty_tpl);?>
</button>
                        <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['indicator'][0][0]->DisplayIndicator(array(),$_smarty_tpl);?>

                    </div>
                </div>
            </div>
        </form>
    </div>

    <div id="userDialog" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="userModalLabel"
         aria-hidden="true">
        <form id="userForm" method="post" ajaxAction="<?php echo ManageUsersActions::UpdateUser;?>
">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title" id="userModalLabel"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Edit'),$_smarty_tpl);?>
</h4>
                    </div>
                    <div class="modal-body">
                        <div id="updateUserResults" class="alert alert-danger no-show">
                            <ul>
                                <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['async_validator'][0][0]->AsyncValidator(array('id'=>"emailformat",'key'=>"ValidEmailRequired"),$_smarty_tpl);?>

                                <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['async_validator'][0][0]->AsyncValidator(array('id'=>"uniqueemail",'key'=>"UniqueEmailRequired"),$_smarty_tpl);?>

                                <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['async_validator'][0][0]->AsyncValidator(array('id'=>"uniqueusername",'key'=>"UniqueUsernameRequired"),$_smarty_tpl);?>

                            </ul>
                        </div>
                        <div class="col-sm-12 col-md-6">

                            <div class="form-group has-feedback">
                                <label for="username"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>"Username"),$_smarty_tpl);?>
</label>
                                <input type="text" <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0][0]->GetFormName(array('key'=>"USERNAME"),$_smarty_tpl);?>
 class="required form-control" required
                                       id="username"/>
                                <i class="glyphicon glyphicon-asterisk form-control-feedback"
                                   data-bv-icon-for="username"></i>
                            </div>
                        </div>

                        <div class="col-sm-12 col-md-6">
                            <div class="form-group has-feedback">
                                <label for="email"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>"Email"),$_smarty_tpl);?>
</label>
                                <input type="text" <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0][0]->GetFormName(array('key'=>"EMAIL"),$_smarty_tpl);?>
 class="required form-control" required
                                       id="email"/>
                                <i class="glyphicon glyphicon-asterisk form-control-feedback"
                                   data-bv-icon-for="email"></i>
                            </div>
                        </div>

                        <div class="col-sm-12 col-md-6">
                            <div class="form-group has-feedback">
                                <label for="fname"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>"FirstName"),$_smarty_tpl);?>
</label>
                                <input type="text" <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0][0]->GetFormName(array('key'=>"FIRST_NAME"),$_smarty_tpl);?>
 class="required form-control" required
                                       id="fname"/>
                                <i class="glyphicon glyphicon-asterisk form-control-feedback"
                                   data-bv-icon-for="fname"></i>
                            </div>
                        </div>

                        <div class="col-sm-12 col-md-6">
                            <div class="form-group has-feedback">
                                <label for="lname"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>"LastName"),$_smarty_tpl);?>
</label>
                                <input type="text" <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0][0]->GetFormName(array('key'=>"LAST_NAME"),$_smarty_tpl);?>
 class="required form-control" required
                                       id="lname"/>
                                <i class="glyphicon glyphicon-asterisk form-control-feedback"
                                   data-bv-icon-for="lname"></i>
                            </div>
                        </div>

                        <div class="col-sm-12 col-md-6">
                            <div class="form-group">
                                <label for="timezone"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>"Timezone"),$_smarty_tpl);?>
</label>
                                <select <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0][0]->GetFormName(array('key'=>'TIMEZONE'),$_smarty_tpl);?>
 id='timezone' class="form-control">
                                    <?php echo smarty_function_html_options(array('values'=>$_smarty_tpl->tpl_vars['Timezones']->value,'output'=>$_smarty_tpl->tpl_vars['Timezones']->value),$_smarty_tpl);?>

                                </select>
                            </div>
                        </div>

                        <div class="col-sm-12 col-md-6">

                            <div class="form-group">
                                <label for="phone"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>"Phone"),$_smarty_tpl);?>
</label>
                                <input type="text" <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0][0]->GetFormName(array('key'=>"PHONE"),$_smarty_tpl);?>
 class="form-control" id="phone"/>
                            </div>
                        </div>

                        <div class="col-sm-12 col-md-6">
                            <div class="form-group">
                                <label for="organization"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>"Organization"),$_smarty_tpl);?>
</label>
                                <input type="text" <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0][0]->GetFormName(array('key'=>"ORGANIZATION"),$_smarty_tpl);?>
 class="form-control"
                                       id="organization"/>
                            </div>
                        </div>

                        <div class="col-sm-12 col-md-6">
                            <div class="form-group">
                                <label for="position"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>"Position"),$_smarty_tpl);?>
</label>
                                <input type="text" <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0][0]->GetFormName(array('key'=>"POSITION"),$_smarty_tpl);?>
 class="form-control" id="position"/>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="modal-footer">
                        <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['cancel_button'][0][0]->CancelButton(array(),$_smarty_tpl);?>

                        <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['update_button'][0][0]->UpdateButton(array(),$_smarty_tpl);?>

                        <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['indicator'][0][0]->DisplayIndicator(array(),$_smarty_tpl);?>

                    </div>
                </div>
            </div>
        </form>
    </div>

    <div id="deleteDialog" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel"
         aria-hidden="true">
        <form id="deleteUserForm" method="post" ajaxAction="<?php echo ManageUsersActions::DeleteUser;?>
">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title" id="deleteModalLabel"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Delete'),$_smarty_tpl);?>
</h4>
                    </div>
                    <div class="modal-body">
                        <div class="alert alert-warning">
                            <div><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'DeleteWarning'),$_smarty_tpl);?>
</div>

                            <div><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'DeleteUserWarning'),$_smarty_tpl);?>
</div>
                        </div>

                    </div>
                    <div class="modal-footer">
                        <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['cancel_button'][0][0]->CancelButton(array(),$_smarty_tpl);?>

                        <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['delete_button'][0][0]->DeleteButton(array(),$_smarty_tpl);?>

                        <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['indicator'][0][0]->DisplayIndicator(array(),$_smarty_tpl);?>

                    </div>
                </div>
            </div>
        </form>
    </div>

    <div id="groupsDialog" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="groupsModalLabel"
         aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title" id="groupsModalLabel"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Groups'),$_smarty_tpl);?>
</h4>
                </div>
                <div class="modal-body">

                    <div id="groupList" class="hidden">
                        <?php  $_smarty_tpl->tpl_vars['group'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['group']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['Groups']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['group']->key => $_smarty_tpl->tpl_vars['group']->value) {
$_smarty_tpl->tpl_vars['group']->_loop = true;
?>
                            <div class="group-item" groupId="<?php echo $_smarty_tpl->tpl_vars['group']->value->Id;?>
"><a href="#">&nbsp;</a>
                                <span><?php echo $_smarty_tpl->tpl_vars['group']->value->Name;?>
</span>
                            </div>
                        <?php } ?>
                    </div>

                    <h5>Group Membership <span class="badge" id="groupCount">0</span></h5>
                    <div id="addedGroups">
                    </div>

                    <h5>Available Groups</h5>
                    <div id="removedGroups">
                    </div>

                    <form id="addGroupForm" method="post" ajaxAction="addUser">
                        <input type="hidden" id="addGroupId" <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0][0]->GetFormName(array('key'=>'GROUP_ID'),$_smarty_tpl);?>
 />
                        <input type="hidden" id="addGroupUserId" <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0][0]->GetFormName(array('key'=>'USER_ID'),$_smarty_tpl);?>
 />
                    </form>

                    <form id="removeGroupForm" method="post" ajaxAction="removeUser">
                        <input type="hidden" id="removeGroupId" <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0][0]->GetFormName(array('key'=>'GROUP_ID'),$_smarty_tpl);?>
 />
                        <input type="hidden" id="removeGroupUserId" <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0][0]->GetFormName(array('key'=>'USER_ID'),$_smarty_tpl);?>
 />
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div id="colorDialog" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="colorModalLabel"
         aria-hidden="true">
        <form id="colorForm" method="post" ajaxAction="<?php echo ManageUsersActions::ChangeColor;?>
">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title" id="colorModalLabel"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Color'),$_smarty_tpl);?>
</h4>
                    </div>
                    <div class="modal-body">
                        <div class="input-group">
                            <span class="input-group-addon">#</span>
                            <input type="text" <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0][0]->GetFormName(array('key'=>'RESERVATION_COLOR'),$_smarty_tpl);?>
 id="reservationColor" maxlength="6"
                                   class="form-control" placeholder="FFFFFF">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['cancel_button'][0][0]->CancelButton(array(),$_smarty_tpl);?>

                        <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['update_button'][0][0]->UpdateButton(array(),$_smarty_tpl);?>

                        <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['indicator'][0][0]->DisplayIndicator(array(),$_smarty_tpl);?>

                    </div>
                </div>
            </div>
        </form>
    </div>

    <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['csrf_token'][0][0]->CSRFToken(array(),$_smarty_tpl);?>


    <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['jsfile'][0][0]->IncludeJavascriptFile(array('src'=>"ajax-helpers.js"),$_smarty_tpl);?>

    <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['jsfile'][0][0]->IncludeJavascriptFile(array('src'=>"autocomplete.js"),$_smarty_tpl);?>

    <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['jsfile'][0][0]->IncludeJavascriptFile(array('src'=>"admin/user.js"),$_smarty_tpl);?>

    <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['jsfile'][0][0]->IncludeJavascriptFile(array('src'=>"js/jquery.form-3.09.min.js"),$_smarty_tpl);?>

    <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['jsfile'][0][0]->IncludeJavascriptFile(array('src'=>"js/colorpicker.js"),$_smarty_tpl);?>


    <script type="text/javascript">
        function setUpEditables() {
            $.fn.editable.defaults.mode = 'popup';
            $.fn.editable.defaults.toggle = 'manual';
            $.fn.editable.defaults.emptyclass = '';
            $.fn.editable.defaults.params = function (params) {
                params.CSRF_TOKEN = $('#csrf_token').val();
                return params;
            };

            var updateUrl = '<?php echo $_SERVER['SCRIPT_NAME'];?>
?action=';
            $('.inlineAttribute').editable({
                url: updateUrl + '<?php echo ManageUsersActions::ChangeAttribute;?>
',
                emptytext: '-'
            });

            $('.changeCredits').editable({
                url: updateUrl + '<?php echo ManageUsersActions::ChangeCredits;?>
',
                emptytext: '-'
            });
        }

        $(document).ready(function () {
            var actions = {
                activate: '<?php echo ManageUsersActions::Activate;?>
',
                deactivate: '<?php echo ManageUsersActions::Deactivate;?>
'
            };

            var userOptions = {
                userAutocompleteUrl: "../ajax/autocomplete.php?type=<?php echo AutoCompleteType::MyUsers;?>
",
                groupsUrl: '<?php echo $_SERVER['SCRIPT_NAME'];?>
',
                groupManagementUrl: '<?php echo $_smarty_tpl->tpl_vars['ManageGroupsUrl']->value;?>
',
                permissionsUrl: '<?php echo $_SERVER['SCRIPT_NAME'];?>
',
                submitUrl: '<?php echo $_SERVER['SCRIPT_NAME'];?>
',
                saveRedirect: '<?php echo $_SERVER['SCRIPT_NAME'];?>
',
                selectUserUrl: '<?php echo $_SERVER['SCRIPT_NAME'];?>
?uid=',
                filterUrl: '<?php echo $_SERVER['SCRIPT_NAME'];?>
?<?php echo QueryStringKeys::ACCOUNT_STATUS;?>
=',
                actions: actions,
                manageReservationsUrl: '<?php echo $_smarty_tpl->tpl_vars['ManageReservationsUrl']->value;?>
'
            };

            var userManagement = new UserManagement(userOptions);
            userManagement.init();

            <?php  $_smarty_tpl->tpl_vars['user'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['user']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['users']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['user']->key => $_smarty_tpl->tpl_vars['user']->value) {
$_smarty_tpl->tpl_vars['user']->_loop = true;
?>
            var user = {
                id: <?php echo $_smarty_tpl->tpl_vars['user']->value->Id;?>
,
                first: '<?php echo preg_replace("%(?<!\\\\)'%", "\'",$_smarty_tpl->tpl_vars['user']->value->First);?>
',
                last: '<?php echo preg_replace("%(?<!\\\\)'%", "\'",$_smarty_tpl->tpl_vars['user']->value->Last);?>
',
                isActive: '<?php echo $_smarty_tpl->tpl_vars['user']->value->IsActive();?>
',
                username: '<?php echo preg_replace("%(?<!\\\\)'%", "\'",$_smarty_tpl->tpl_vars['user']->value->Username);?>
',
                email: '<?php echo preg_replace("%(?<!\\\\)'%", "\'",$_smarty_tpl->tpl_vars['user']->value->Email);?>
',
                timezone: '<?php echo $_smarty_tpl->tpl_vars['user']->value->Timezone;?>
',
                phone: '<?php echo preg_replace("%(?<!\\\\)'%", "\'",$_smarty_tpl->tpl_vars['user']->value->Phone);?>
',
                organization: '<?php echo preg_replace("%(?<!\\\\)'%", "\'",$_smarty_tpl->tpl_vars['user']->value->Organization);?>
',
                position: '<?php echo preg_replace("%(?<!\\\\)'%", "\'",$_smarty_tpl->tpl_vars['user']->value->Position);?>
',
                reservationColor: '<?php echo preg_replace("%(?<!\\\\)'%", "\'",$_smarty_tpl->tpl_vars['user']->value->ReservationColor);?>
'
            };
            userManagement.addUser(user);
            <?php } ?>

            $('#reservationColor').ColorPicker({
                onSubmit: function (hsb, hex, rgb, el) {
                    $(el).val(hex);
                    $(el).ColorPickerHide();
                },
                onBeforeShow: function () {
                    $(this).ColorPickerSetColor(this.value);
                }
            });


            setUpEditables();
        });
    </script>
</div>
<?php echo $_smarty_tpl->getSubTemplate ('globalfooter.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
