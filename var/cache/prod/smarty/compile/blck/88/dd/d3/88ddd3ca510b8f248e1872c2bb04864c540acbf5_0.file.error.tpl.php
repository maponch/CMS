<?php
/* Smarty version 3.1.43, created on 2022-12-11 20:20:13
  from 'C:\wamp64\www\prestashop\modules\payplug\views\templates\api\molecules\modal\error.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_63962d6dd62ec2_85469893',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '88ddd3ca510b8f248e1872c2bb04864c540acbf5' => 
    array (
      0 => 'C:\\wamp64\\www\\prestashop\\modules\\payplug\\views\\templates\\api\\molecules\\modal\\error.tpl',
      1 => 1670786168,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./../../atoms/button/button.tpl' => 1,
    'file:./../../atoms/modal/modal.tpl' => 1,
  ),
),false)) {
function content_63962d6dd62ec2_85469893 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', "modalContent", null);?>
    <p><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['errorMessage']->value,'htmlall','UTF-8' ));?>
</p>
    <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', "popinErrorSubmit", null);
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'popin.error.submit','mod'=>'payplug'),$_smarty_tpl ) );
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
    <?php $_smarty_tpl->_subTemplateRender('file:./../../atoms/button/button.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('buttonData'=>'closePopin','buttonName'=>'closePopin','buttonText'=>$_smarty_tpl->tpl_vars['popinErrorSubmit']->value), 0, false);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

<?php $_smarty_tpl->_subTemplateRender('file:./../../atoms/modal/modal.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('modalClassName'=>'modalError','modalContent'=>$_smarty_tpl->tpl_vars['modalContent']->value,'modalData'=>'popinConnexionFailed'), 0, false);
}
}
