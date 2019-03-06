<?php /* Smarty version Smarty-3.1.16, created on 2017-07-01 12:50:21
         compiled from "/home/vol15_8/byethost8.com/b8_19720712/htdocs/booked/tpl/Ajax/reservation/reservation_attributes.tpl" */ ?>
<?php /*%%SmartyHeaderCode:18453856215957d2cd16cd96-03766155%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '16c06c86c2f1c6a3b0ebfecc386ec7a25dbaf9b5' => 
    array (
      0 => '/home/vol15_8/byethost8.com/b8_19720712/htdocs/booked/tpl/Ajax/reservation/reservation_attributes.tpl',
      1 => 1487739390,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18453856215957d2cd16cd96-03766155',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'Attributes' => 0,
    'attribute' => 0,
    'ReadOnly' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_5957d2cd1aaa50_55013704',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5957d2cd1aaa50_55013704')) {function content_5957d2cd1aaa50_55013704($_smarty_tpl) {?>

<?php if (count($_smarty_tpl->tpl_vars['Attributes']->value)>0) {?>
    <div class="customAttributes">
        <span><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'AdditionalAttributes'),$_smarty_tpl);?>
</span>
        <div class="row">
            <?php  $_smarty_tpl->tpl_vars['attribute'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['attribute']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['Attributes']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['attributes']['index']=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['attribute']->key => $_smarty_tpl->tpl_vars['attribute']->value) {
$_smarty_tpl->tpl_vars['attribute']->_loop = true;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['attributes']['index']++;
?>
                <?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['attributes']['index']%3==0) {?>
                    </div>
                    <div class="row">
                <?php }?>
                <div class="customAttribute col-sm-4 col-xs-12">
                    <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['control'][0][0]->DisplayControl(array('type'=>"AttributeControl",'attribute'=>$_smarty_tpl->tpl_vars['attribute']->value,'readonly'=>$_smarty_tpl->tpl_vars['ReadOnly']->value),$_smarty_tpl);?>

                </div>
            <?php } ?>
        </div>
    </div>
    <div class="clear">&nbsp;</div>
<?php }?><?php }} ?>
