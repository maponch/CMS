<?php
/* Smarty version 3.1.43, created on 2022-12-11 20:22:11
  from 'C:\wamp64\www\prestashop\modules\payplug\views\templates\api\molecules\modal\confirmation.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_63962de39ed272_88198333',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bb03eac2b1bcbb7793c88bcaa21b369831e377f3' => 
    array (
      0 => 'C:\\wamp64\\www\\prestashop\\modules\\payplug\\views\\templates\\api\\molecules\\modal\\confirmation.tpl',
      1 => 1670786168,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./../../atoms/paragraph/paragraph.tpl' => 1,
    'file:./../../atoms/button/button.tpl' => 1,
    'file:./../../atoms/modal/modal.tpl' => 1,
  ),
),false)) {
function content_63962de39ed272_88198333 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', "modalContent", null);?>
    <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', "popinConfirmationText", null);
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'popin.confirmation.text','mod'=>'payplug'),$_smarty_tpl ) );
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
    <?php $_smarty_tpl->_subTemplateRender('file:./../../atoms/paragraph/paragraph.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('paragraphText'=>$_smarty_tpl->tpl_vars['popinConfirmationText']->value), 0, false);
?>

    <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', "popinConfirmSubmit", null);
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'popin.confirmation.submit','mod'=>'payplug'),$_smarty_tpl ) );
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
    <?php $_smarty_tpl->_subTemplateRender('file:./../../atoms/button/button.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('buttonData'=>'submit','buttonName'=>'closePopin','buttonText'=>$_smarty_tpl->tpl_vars['popinConfirmSubmit']->value), 0, false);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

<?php $_smarty_tpl->_subTemplateRender('file:./../../atoms/modal/modal.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('modalClassName'=>'modalConfirmation','modalContent'=>$_smarty_tpl->tpl_vars['modalContent']->value,'modalData'=>'popinConfirmConfiguration'), 0, false);
}
}
