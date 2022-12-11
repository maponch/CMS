<?php
/* Smarty version 3.1.43, created on 2022-12-11 20:26:21
  from 'C:\wamp64\www\prestashop\modules\payplug\views\templates\api\atoms\tooltip\tooltip.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_63962edd6b2e03_33039839',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '91cb2e993368cdb0ce62780ad760c4ce5832539e' => 
    array (
      0 => 'C:\\wamp64\\www\\prestashop\\modules\\payplug\\views\\templates\\api\\atoms\\tooltip\\tooltip.tpl',
      1 => 1670786168,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./../icon/icon.tpl' => 1,
  ),
),false)) {
function content_63962edd6b2e03_33039839 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="payplugUITooltip
    <?php if ((isset($_smarty_tpl->tpl_vars['tooltipClassName']->value)) && $_smarty_tpl->tpl_vars['tooltipClassName']->value) {?> <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['tooltipClassName']->value,'htmlall','UTF-8' ));
}?>"
    <?php if ((isset($_smarty_tpl->tpl_vars['tooltipData']->value)) && $_smarty_tpl->tpl_vars['tooltipData']->value) {?> data-e2e-name="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['tooltipData']->value,'htmlall','UTF-8' ));?>
"<?php }?>>
    <label>
        <input type="checkbox">
        <span class="_icon"><?php $_smarty_tpl->_subTemplateRender('file:./../icon/icon.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('iconName'=>'tooltip'), 0, false);
?></span>
        <span class="_overlay"></span>
        <span class="_modal">
            <div class="_content">
                <?php echo $_smarty_tpl->tpl_vars['tooltipContent']->value;?>

            </div>
        </span>
    </label>
</div><?php }
}
