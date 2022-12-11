<?php
/* Smarty version 3.1.43, created on 2022-12-11 20:21:34
  from 'C:\wamp64\www\prestashop\modules\payplug\views\templates\api\atoms\paragraph\paragraph.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_63962dbe8b8f59_13672756',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a8cf061d56826ef581d74f81706d3bb69083c292' => 
    array (
      0 => 'C:\\wamp64\\www\\prestashop\\modules\\payplug\\views\\templates\\api\\atoms\\paragraph\\paragraph.tpl',
      1 => 1670786168,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63962dbe8b8f59_13672756 (Smarty_Internal_Template $_smarty_tpl) {
?>
<p class="payplugUIParagraph
    <?php if ((isset($_smarty_tpl->tpl_vars['paragraphDisabled']->value)) && $_smarty_tpl->tpl_vars['paragraphDisabled']->value) {?> -disabled<?php }?>
    <?php if ((isset($_smarty_tpl->tpl_vars['paragraphClassName']->value)) && $_smarty_tpl->tpl_vars['paragraphClassName']->value) {?> <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['paragraphClassName']->value,'htmlall','UTF-8' ));
}?>">
    <?php echo $_smarty_tpl->tpl_vars['paragraphText']->value;?>

</p>
<?php }
}
