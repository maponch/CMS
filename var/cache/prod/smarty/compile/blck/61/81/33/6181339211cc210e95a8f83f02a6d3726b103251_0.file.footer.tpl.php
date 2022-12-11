<?php
/* Smarty version 3.1.43, created on 2022-12-11 20:21:35
  from 'C:\wamp64\www\prestashop\modules\payplug\views\templates\api\molecules\footer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_63962dbfe924c3_04140406',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6181339211cc210e95a8f83f02a6d3726b103251' => 
    array (
      0 => 'C:\\wamp64\\www\\prestashop\\modules\\payplug\\views\\templates\\api\\molecules\\footer.tpl',
      1 => 1670786168,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./../atoms/button/button.tpl' => 1,
    'file:./../atoms/link/link.tpl' => 1,
  ),
),false)) {
function content_63962dbfe924c3_04140406 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="_footer">
    <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', "footerConfiguration_save", null);
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'configuration.footer.save','mod'=>'payplug'),$_smarty_tpl ) );
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
    <?php $_smarty_tpl->_subTemplateRender('file:./../atoms/button/button.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('buttonClassName'=>'_save','buttonData'=>'saveConfiguration','buttonName'=>'saveConfiguration','buttonStyle'=>'default','buttonDisabled'=>!$_smarty_tpl->tpl_vars['connected']->value,'buttonText'=>$_smarty_tpl->tpl_vars['footerConfiguration_save']->value), 0, false);
?>

    <div class="_faq">
        <p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'configuration.footer.faq','mod'=>'payplug'),$_smarty_tpl ) );?>
</p>
        <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', "faqHref", null);
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'configuration.footer.faqHref','mod'=>'payplug'),$_smarty_tpl ) );
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
        <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', 'faqLink', null);?>
            <?php $_smarty_tpl->_subTemplateRender('file:./../atoms/link/link.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('linkText'=>'','linkHref'=>$_smarty_tpl->tpl_vars['faqHref']->value,'linkNoTag'=>true), 0, false);
?>
        <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
        <p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'configuration.footer.faqLink','tags'=>array($_smarty_tpl->tpl_vars['faqLink']->value),'mod'=>'payplug'),$_smarty_tpl ) );?>
</p>
    </div>
</div><?php }
}
