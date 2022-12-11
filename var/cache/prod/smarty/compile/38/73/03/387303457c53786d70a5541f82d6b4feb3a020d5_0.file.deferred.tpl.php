<?php
/* Smarty version 3.1.43, created on 2022-12-11 20:16:48
  from 'C:\wamp64\www\prestashop\modules\payplug\views\templates\api\molecules\paymentMethods\standard\deferred.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_63962ca07d9408_24222338',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '387303457c53786d70a5541f82d6b4feb3a020d5' => 
    array (
      0 => 'C:\\wamp64\\www\\prestashop\\modules\\payplug\\views\\templates\\api\\molecules\\paymentMethods\\standard\\deferred.tpl',
      1 => 1670786168,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./../../../atoms/link/link.tpl' => 1,
    'file:./../../../atoms/select/select.tpl' => 1,
  ),
),false)) {
function content_63962ca07d9408_24222338 (Smarty_Internal_Template $_smarty_tpl) {
?>
<p>
    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'deferred.description','mod'=>'payplug'),$_smarty_tpl ) );?>

    <?php if ((isset($_smarty_tpl->tpl_vars['faq_links']->value['deferred'])) && $_smarty_tpl->tpl_vars['faq_links']->value['deferred']) {?>
        <?php ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'deferred.textLink','mod'=>'payplug'),$_smarty_tpl ) );
$_prefixVariable13 = ob_get_clean();
$_smarty_tpl->_subTemplateRender('file:./../../../atoms/link/link.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('linkText'=>$_prefixVariable13,'linkHref'=>$_smarty_tpl->tpl_vars['faq_links']->value['deferred'],'linkTarget'=>'_blank','linkData'=>'data-faqdeferredLink'), 0, false);
?>
    <?php }?>
</p>
<div class="_inputs">
    <p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'deferred.beforeText','mod'=>'payplug'),$_smarty_tpl ) );?>
</p>
    <?php $_smarty_tpl->_subTemplateRender('file:./../../../atoms/select/select.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('selectDisabled'=>!$_smarty_tpl->tpl_vars['paymentMethodAdvancedOptionChecked']->value,'selectClassName'=>'-deferred','selectName'=>'payplug_deferred_state','selectData'=>'deferredSelect','selectScrollbar'=>true,'selectOptions'=>$_smarty_tpl->tpl_vars['order_states_values']->value), 0, false);
?>
</div><?php }
}
