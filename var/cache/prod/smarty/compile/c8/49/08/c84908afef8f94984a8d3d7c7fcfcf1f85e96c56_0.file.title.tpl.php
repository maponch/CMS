<?php
/* Smarty version 3.1.43, created on 2022-12-11 20:16:48
  from 'C:\wamp64\www\prestashop\modules\payplug\views\templates\api\atoms\title\title.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_63962ca041dc89_96574692',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c84908afef8f94984a8d3d7c7fcfcf1f85e96c56' => 
    array (
      0 => 'C:\\wamp64\\www\\prestashop\\modules\\payplug\\views\\templates\\api\\atoms\\title\\title.tpl',
      1 => 1670786168,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63962ca041dc89_96574692 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="payplugUITitle
    <?php if ((isset($_smarty_tpl->tpl_vars['titleClassName']->value)) && $_smarty_tpl->tpl_vars['titleClassName']->value) {?> <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['titleClassName']->value,'htmlall','UTF-8' ));
}?>
    <?php if ((isset($_smarty_tpl->tpl_vars['titleDisabled']->value)) && $_smarty_tpl->tpl_vars['titleDisabled']->value) {?> -disabled<?php }?>">
    <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['titleText']->value,'htmlall','UTF-8' ));?>

</div><?php }
}
