<?php
/* Smarty version 3.1.43, created on 2022-12-11 20:16:48
  from 'C:\wamp64\www\prestashop\modules\payplug\views\templates\api\atoms\icon\icon.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_63962ca06f2f19_65499465',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a4705a24dbdc0b400a7b2ba6ac5e8eedf056356c' => 
    array (
      0 => 'C:\\wamp64\\www\\prestashop\\modules\\payplug\\views\\templates\\api\\atoms\\icon\\icon.tpl',
      1 => 1670786168,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./../../../../img/svg/icons/".$_prefixVariable12.".svg' => 1,
  ),
),false)) {
function content_63962ca06f2f19_65499465 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="payplugUIIcon
    <?php if ((isset($_smarty_tpl->tpl_vars['iconClassName']->value)) && $_smarty_tpl->tpl_vars['iconClassName']->value) {?> <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['iconClassName']->value,'htmlall','UTF-8' ));
}?>"
        <?php if ((isset($_smarty_tpl->tpl_vars['iconData']->value)) && $_smarty_tpl->tpl_vars['iconData']->value) {?> data-e2e-name="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['iconData']->value,'htmlall','UTF-8' ));?>
"<?php }?>>
    <?php ob_start();
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['iconName']->value,'htmlall','UTF-8' ));
$_prefixVariable12=ob_get_clean();
$_smarty_tpl->_subTemplateRender("file:./../../../../img/svg/icons/".$_prefixVariable12.".svg", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
</div>
<?php }
}
