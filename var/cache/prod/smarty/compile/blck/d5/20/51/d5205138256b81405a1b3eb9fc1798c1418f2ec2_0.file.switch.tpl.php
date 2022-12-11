<?php
/* Smarty version 3.1.43, created on 2022-12-11 20:21:35
  from 'C:\wamp64\www\prestashop\modules\payplug\views\templates\api\atoms\switch\switch.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_63962dbf569586_27174704',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd5205138256b81405a1b3eb9fc1798c1418f2ec2' => 
    array (
      0 => 'C:\\wamp64\\www\\prestashop\\modules\\payplug\\views\\templates\\api\\atoms\\switch\\switch.tpl',
      1 => 1670786168,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63962dbf569586_27174704 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="payplugUISwitch<?php if ((isset($_smarty_tpl->tpl_vars['switchClassName']->value)) && $_smarty_tpl->tpl_vars['switchClassName']->value) {?> <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['switchClassName']->value,'htmlall','UTF-8' ));
}?>">
    <label class="_switch"<?php if ((isset($_smarty_tpl->tpl_vars['switchDataName']->value)) && $_smarty_tpl->tpl_vars['switchDataName']->value) {?> data-e2e-name="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['switchDataName']->value,'htmlall','UTF-8' ));?>
"<?php }?>>
        <input
                name="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['switchName']->value,'htmlall','UTF-8' ));?>
"
                type="checkbox"
                <?php if ((isset($_smarty_tpl->tpl_vars['switchDisabled']->value)) && $_smarty_tpl->tpl_vars['switchDisabled']->value) {?>disabled="disabled"<?php }?>
                <?php if ((isset($_smarty_tpl->tpl_vars['switchChecked']->value)) && $_smarty_tpl->tpl_vars['switchChecked']->value) {?>checked="checked"<?php }?>>
        <span class="_slider"></span>
        <?php if ((isset($_smarty_tpl->tpl_vars['switchEnabledLabel']->value)) && (isset($_smarty_tpl->tpl_vars['switchDisabledLabel']->value))) {?>
            <span class="_label"
                  data-enable-text="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['switchEnabledLabel']->value,'htmlall','UTF-8' ));?>
"
                  data-disable-text="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['switchDisabledLabel']->value,'htmlall','UTF-8' ));?>
"></span>
        <?php }?>
    </label>
</div><?php }
}
