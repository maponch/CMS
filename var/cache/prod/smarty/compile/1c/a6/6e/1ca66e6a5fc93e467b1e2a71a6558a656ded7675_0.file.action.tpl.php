<?php
/* Smarty version 3.1.43, created on 2022-12-11 20:26:21
  from 'C:\wamp64\www\prestashop\modules\payplug\views\templates\api\atoms\action\action.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_63962edd60f953_78212574',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1ca66e6a5fc93e467b1e2a71a6558a656ded7675' => 
    array (
      0 => 'C:\\wamp64\\www\\prestashop\\modules\\payplug\\views\\templates\\api\\atoms\\action\\action.tpl',
      1 => 1670786168,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63962edd60f953_78212574 (Smarty_Internal_Template $_smarty_tpl) {
if (!(isset($_smarty_tpl->tpl_vars['actionType']->value)) || !$_smarty_tpl->tpl_vars['actionType']->value) {?>
    <?php $_smarty_tpl->_assignInScope('actionType', 'button');
}?>

<<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['actionType']->value,'htmlall','UTF-8' ));?>
 class="payplugUIAction
    <?php if ((isset($_smarty_tpl->tpl_vars['actionDisabled']->value)) && $_smarty_tpl->tpl_vars['actionDisabled']->value) {?> -disabled<?php }?>
    <?php if ((isset($_smarty_tpl->tpl_vars['actionClassName']->value)) && $_smarty_tpl->tpl_vars['actionClassName']->value) {?> <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['actionClassName']->value,'htmlall','UTF-8' ));
}?>"
    <?php if ((isset($_smarty_tpl->tpl_vars['actionTitle']->value)) && $_smarty_tpl->tpl_vars['actionTitle']->value) {?> title="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['actionTitle']->value,'htmlall','UTF-8' ));?>
"<?php }?>
    <?php if ((isset($_smarty_tpl->tpl_vars['actionHref']->value)) && $_smarty_tpl->tpl_vars['actionHref']->value) {?> href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['actionHref']->value,'htmlall','UTF-8' ));?>
"<?php }?>
    <?php if ((isset($_smarty_tpl->tpl_vars['actionName']->value)) && $_smarty_tpl->tpl_vars['actionName']->value) {?> name="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['actionName']->value,'htmlall','UTF-8' ));?>
"<?php }?>
    <?php if ((isset($_smarty_tpl->tpl_vars['actionData']->value)) && $_smarty_tpl->tpl_vars['actionData']->value) {?> data-e2e-name="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['actionData']->value,'htmlall','UTF-8' ));?>
"<?php }?>
    <?php if ((isset($_smarty_tpl->tpl_vars['actionDisabled']->value)) && $_smarty_tpl->tpl_vars['actionDisabled']->value) {?> disabled="disabled"<?php }?>>
    <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['actionText']->value,'htmlall','UTF-8' ));?>

</<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['actionType']->value,'htmlall','UTF-8' ));?>
>
<?php }
}
