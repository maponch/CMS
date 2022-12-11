<?php
/* Smarty version 3.1.43, created on 2022-12-11 20:21:35
  from 'C:\wamp64\www\prestashop\modules\payplug\views\templates\api\atoms\input\input.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_63962dbf7d59e5_67822100',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '92d54542f5c8489196d3d7c2ab47a7e2ea457d0b' => 
    array (
      0 => 'C:\\wamp64\\www\\prestashop\\modules\\payplug\\views\\templates\\api\\atoms\\input\\input.tpl',
      1 => 1670786168,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63962dbf7d59e5_67822100 (Smarty_Internal_Template $_smarty_tpl) {
if (!(isset($_smarty_tpl->tpl_vars['inputType']->value)) || !$_smarty_tpl->tpl_vars['inputType']->value) {?>
    <?php $_smarty_tpl->_assignInScope('inputType', 'text');
}?>

<div class="payplugUIInput
    <?php if ((isset($_smarty_tpl->tpl_vars['inputClassName']->value)) && $_smarty_tpl->tpl_vars['inputClassName']->value) {?> <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['inputClassName']->value,'htmlall','UTF-8' ));
}?>
    <?php if ((isset($_smarty_tpl->tpl_vars['inputIcon']->value)) && $_smarty_tpl->tpl_vars['inputIcon']->value) {?> -icon -icon<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['inputIcon']->value,'htmlall','UTF-8' ));
}?>
    <?php if ((isset($_smarty_tpl->tpl_vars['inputDisabled']->value)) && $_smarty_tpl->tpl_vars['inputDisabled']->value) {?> -disabled<?php }?>">
    <?php if ((isset($_smarty_tpl->tpl_vars['inputLabel']->value)) && $_smarty_tpl->tpl_vars['inputLabel']->value) {?>
        <label for="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['inputName']->value,'htmlall','UTF-8' ));?>
"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['inputLabel']->value,'htmlall','UTF-8' ));?>
</label>
    <?php }?>
    <input
            type="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['inputType']->value,'htmlall','UTF-8' ));?>
"
            id="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['inputName']->value,'htmlall','UTF-8' ));?>
"
            name="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['inputName']->value,'htmlall','UTF-8' ));?>
"
            <?php if ((isset($_smarty_tpl->tpl_vars['inputData']->value)) && $_smarty_tpl->tpl_vars['inputData']->value) {?> data-e2e-name="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['inputData']->value,'htmlall','UTF-8' ));?>
"<?php }?>
            <?php if ((isset($_smarty_tpl->tpl_vars['inputValue']->value)) && $_smarty_tpl->tpl_vars['inputValue']->value) {?> value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['inputValue']->value,'htmlall','UTF-8' ));?>
"<?php }?>
            <?php if ((isset($_smarty_tpl->tpl_vars['inputPlaceholder']->value)) && $_smarty_tpl->tpl_vars['inputPlaceholder']->value) {?> placeholder="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['inputPlaceholder']->value,'htmlall','UTF-8' ));?>
"<?php }?>
            <?php if ($_smarty_tpl->tpl_vars['inputType']->value == 'number') {?>
                step="<?php if ((isset($_smarty_tpl->tpl_vars['inputStep']->value))) {
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['inputStep']->value,'htmlall','UTF-8' ));
} else { ?>1<?php }?>"
                min="<?php if ((isset($_smarty_tpl->tpl_vars['inputMin']->value))) {
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['inputMin']->value,'htmlall','UTF-8' ));
} else { ?>0<?php }?>"
                max="<?php if ((isset($_smarty_tpl->tpl_vars['inputMax']->value))) {
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['inputMax']->value,'htmlall','UTF-8' ));
} else { ?>3000<?php }?>"
            <?php }?>
            <?php if ((isset($_smarty_tpl->tpl_vars['inputDisabled']->value)) && $_smarty_tpl->tpl_vars['inputDisabled']->value) {?> disabled<?php }?>>
</div><?php }
}
