<?php
/* Smarty version 3.1.43, created on 2022-12-11 20:21:35
  from 'C:\wamp64\www\prestashop\modules\payplug\views\templates\api\molecules\paymentMethods\paymentMethods.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_63962dbf3e1a71_91941400',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6bc061fb57965ee4cc9acaddbc90e6f97726445f' => 
    array (
      0 => 'C:\\wamp64\\www\\prestashop\\modules\\payplug\\views\\templates\\api\\molecules\\paymentMethods\\paymentMethods.tpl',
      1 => 1670786168,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./paymentMethod.tpl' => 1,
    'file:./../../atoms/block/block.tpl' => 1,
  ),
),false)) {
function content_63962dbf3e1a71_91941400 (Smarty_Internal_Template $_smarty_tpl) {
if ((isset($_smarty_tpl->tpl_vars['paymentMethods']->value)) && $_smarty_tpl->tpl_vars['paymentMethods']->value) {?>
    <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', "paymentMethod_title", null);
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'paymentMethods.block.title','mod'=>'payplug'),$_smarty_tpl ) );
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
    <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', "paymentMethod_description", null);
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'paymentMethods.block.description','mod'=>'payplug'),$_smarty_tpl ) );
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
    <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', "paymentMethod_content", null);?>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['paymentMethods']->value, 'paymentMethod', false, 'paymentMethodName');
$_smarty_tpl->tpl_vars['paymentMethod']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['paymentMethodName']->value => $_smarty_tpl->tpl_vars['paymentMethod']->value) {
$_smarty_tpl->tpl_vars['paymentMethod']->do_else = false;
?>
            <?php $_smarty_tpl->_subTemplateRender('file:./paymentMethod.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('paymentMethodName'=>$_smarty_tpl->tpl_vars['paymentMethodName']->value,'paymentMethod'=>$_smarty_tpl->tpl_vars['paymentMethod']->value), 0, true);
?>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

    <?php $_smarty_tpl->_subTemplateRender('file:./../../atoms/block/block.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('blockTitle'=>$_smarty_tpl->tpl_vars['paymentMethod_title']->value,'blockDescription'=>$_smarty_tpl->tpl_vars['paymentMethod_description']->value,'blockContent'=>$_smarty_tpl->tpl_vars['paymentMethod_content']->value,'blockDisabled'=>!$_smarty_tpl->tpl_vars['connected']->value || !$_smarty_tpl->tpl_vars['payplug_switch']->value['show']['checked'],'blockData'=>'paymentMethodsBlock','blockClassName'=>'paymentMethodBlock'), 0, false);
}
}
}
