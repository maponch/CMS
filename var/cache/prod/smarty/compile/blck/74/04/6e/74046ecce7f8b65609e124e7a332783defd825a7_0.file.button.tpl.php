<?php
/* Smarty version 3.1.43, created on 2022-12-11 20:20:13
  from 'C:\wamp64\www\prestashop\modules\payplug\views\templates\api\atoms\button\button.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_63962d6ddbbbd5_22729969',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '74046ecce7f8b65609e124e7a332783defd825a7' => 
    array (
      0 => 'C:\\wamp64\\www\\prestashop\\modules\\payplug\\views\\templates\\api\\atoms\\button\\button.tpl',
      1 => 1670786168,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63962d6ddbbbd5_22729969 (Smarty_Internal_Template $_smarty_tpl) {
?>
<button type="button" name="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['buttonName']->value,'htmlall','UTF-8' ));?>
" class="payplugUIButton
    <?php if ((isset($_smarty_tpl->tpl_vars['buttonClassName']->value)) && $_smarty_tpl->tpl_vars['buttonClassName']->value) {?> <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['buttonClassName']->value,'htmlall','UTF-8' ));
}?>
    <?php if ((isset($_smarty_tpl->tpl_vars['buttonStyle']->value)) && $_smarty_tpl->tpl_vars['buttonStyle']->value) {?> -<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['buttonStyle']->value,'htmlall','UTF-8' ));
}?>
    <?php if ((isset($_smarty_tpl->tpl_vars['buttonDisabled']->value)) && $_smarty_tpl->tpl_vars['buttonDisabled']->value) {?> -disabled<?php }?>"
    <?php if ((isset($_smarty_tpl->tpl_vars['buttonData']->value)) && $_smarty_tpl->tpl_vars['buttonData']->value) {?> data-e2e-name="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['buttonData']->value,'htmlall','UTF-8' ));?>
"<?php }?>
    <?php if ((isset($_smarty_tpl->tpl_vars['buttonDisabled']->value)) && $_smarty_tpl->tpl_vars['buttonDisabled']->value) {?> disabled="disabled"<?php }?>>
    <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['buttonText']->value,'htmlall','UTF-8' ));?>

</button>
<?php }
}
