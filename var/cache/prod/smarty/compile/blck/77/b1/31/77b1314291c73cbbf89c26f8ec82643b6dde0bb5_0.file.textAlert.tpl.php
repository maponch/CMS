<?php
/* Smarty version 3.1.43, created on 2022-12-11 20:21:35
  from 'C:\wamp64\www\prestashop\modules\payplug\views\templates\api\atoms\textAlert\textAlert.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_63962dbf8d3645_08588318',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '77b1314291c73cbbf89c26f8ec82643b6dde0bb5' => 
    array (
      0 => 'C:\\wamp64\\www\\prestashop\\modules\\payplug\\views\\templates\\api\\atoms\\textAlert\\textAlert.tpl',
      1 => 1670786168,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63962dbf8d3645_08588318 (Smarty_Internal_Template $_smarty_tpl) {
if (!(isset($_smarty_tpl->tpl_vars['textAlertType']->value)) || !$_smarty_tpl->tpl_vars['textAlertType']->value) {?>
    <?php $_smarty_tpl->_assignInScope('textAlertType', 'success');
}?>

<div class="payplugUITextAlert -<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['textAlertType']->value,'htmlall','UTF-8' ));?>

    <?php if ((isset($_smarty_tpl->tpl_vars['textAlertClassName']->value)) && $_smarty_tpl->tpl_vars['textAlertClassName']->value) {?> <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['textAlertClassName']->value,'htmlall','UTF-8' ));
}?>"
    <?php if ((isset($_smarty_tpl->tpl_vars['textAlertData']->value)) && $_smarty_tpl->tpl_vars['textAlertData']->value) {?> data-e2e-name="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['textAlertData']->value,'htmlall','UTF-8' ));?>
"<?php }?>>
    <div class="_text"><?php echo $_smarty_tpl->tpl_vars['textAlertText']->value;?>
</div>
</div>
<?php }
}
