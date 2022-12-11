<?php
/* Smarty version 3.1.43, created on 2022-12-11 20:21:35
  from 'C:\wamp64\www\prestashop\modules\payplug\views\templates\api\molecules\paymentMethods\standard\installment.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_63962dbf700330_92184695',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0764cc156cf8b79a0a6682b2a40a8b61ee394ed3' => 
    array (
      0 => 'C:\\wamp64\\www\\prestashop\\modules\\payplug\\views\\templates\\api\\molecules\\paymentMethods\\standard\\installment.tpl',
      1 => 1670786168,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./../../../atoms/select/select.tpl' => 1,
    'file:./../../../atoms/input/input.tpl' => 1,
    'file:./../../../atoms/icon/icon.tpl' => 1,
    'file:./../../../atoms/link/link.tpl' => 2,
    'file:./../../../atoms/textAlert/textAlert.tpl' => 1,
  ),
),false)) {
function content_63962dbf700330_92184695 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="_inputs">
    <p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'installment.beforeText','mod'=>'payplug'),$_smarty_tpl ) );?>
</p>
    <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', "twotimes", null);
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'installment.2times','mod'=>'payplug'),$_smarty_tpl ) );
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
    <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', "threetimes", null);
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'installment.3times','mod'=>'payplug'),$_smarty_tpl ) );
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
    <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', "fourtimes", null);
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'installment.4times','mod'=>'payplug'),$_smarty_tpl ) );
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
    <?php ob_start();
echo $_smarty_tpl->tpl_vars['twotimes']->value;
$_prefixVariable6 = ob_get_clean();
ob_start();
echo $_smarty_tpl->tpl_vars['threetimes']->value;
$_prefixVariable7 = ob_get_clean();
ob_start();
echo $_smarty_tpl->tpl_vars['fourtimes']->value;
$_prefixVariable8 = ob_get_clean();
$_smarty_tpl->_assignInScope('installmentsSelect', array(array('key'=>2,'value'=>call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_prefixVariable6,'htmlall','UTF-8' )),'selected'=>($_smarty_tpl->tpl_vars['inst_mode']->value == 2)),array('key'=>3,'value'=>call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_prefixVariable7,'htmlall','UTF-8' )),'selected'=>($_smarty_tpl->tpl_vars['inst_mode']->value == 3)),array('key'=>4,'value'=>call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_prefixVariable8,'htmlall','UTF-8' )),'selected'=>($_smarty_tpl->tpl_vars['inst_mode']->value == 4))));?>
    <?php $_smarty_tpl->_subTemplateRender('file:./../../../atoms/select/select.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('selectDisabled'=>!$_smarty_tpl->tpl_vars['payplug_switch']->value['installment']['checked'],'selectClassName'=>'installmentMode','selectName'=>'payplug_inst_mode','selectOptions'=>$_smarty_tpl->tpl_vars['installmentsSelect']->value,'selectData'=>'installment_mode_select'), 0, false);
?>
    <p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'installment.betweenText','mod'=>'payplug'),$_smarty_tpl ) );?>
</p>
    <?php $_smarty_tpl->_subTemplateRender('file:./../../../atoms/input/input.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('inputDisabled'=>!$_smarty_tpl->tpl_vars['payplug_switch']->value['installment']['checked'],'inputType'=>'number','inputMin'=>4,'inputMax'=>20000,'inputValue'=>call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['inst_min_amount']->value,'htmlall','UTF-8' )),'inputIcon'=>'Euro','inputClassName'=>'installmentMinAmount','inputName'=>'payplug_inst_min_amount','inputData'=>'installmentMinAmount'), 0, false);
?>
</div>
<div class="_statement">
    <?php $_smarty_tpl->_subTemplateRender('file:./../../../atoms/icon/icon.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('iconName'=>'error','iconClassName'=>'installmentErrorIcon'), 0, false);
?>
    <span class="installmentError" data-e2e-name="installment_amount_error"></span>
</div>
<p>
    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'installment.description','mod'=>'payplug'),$_smarty_tpl ) );?>

    <?php if ((isset($_smarty_tpl->tpl_vars['installments_panel_url']->value)) && $_smarty_tpl->tpl_vars['installments_panel_url']->value) {?>
        <?php ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'installment.textLink','mod'=>'payplug'),$_smarty_tpl ) );
$_prefixVariable9 = ob_get_clean();
$_smarty_tpl->_subTemplateRender('file:./../../../atoms/link/link.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('linkText'=>$_prefixVariable9,'linkHref'=>$_smarty_tpl->tpl_vars['installments_panel_url']->value,'linkTarget'=>'_blank','linkData'=>'data-panelInstallmentLink'), 0, false);
?>
    <?php }?>
    <?php if ((isset($_smarty_tpl->tpl_vars['faq_links']->value['installments'])) && $_smarty_tpl->tpl_vars['faq_links']->value['installments']) {?>
        <?php ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'installment.faqLink','mod'=>'payplug'),$_smarty_tpl ) );
$_prefixVariable10 = ob_get_clean();
$_smarty_tpl->_subTemplateRender('file:./../../../atoms/link/link.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('linkText'=>$_prefixVariable10,'linkHref'=>call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['faq_links']->value['installments'],'htmlall','UTF-8' )),'linkTarget'=>'_blank','linkData'=>'data-faqInstallmentLink'), 0, true);
?>
    <?php }?>
</p>
<?php ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'installment.alertContent','tags'=>array('<br>'),'mod'=>'payplug'),$_smarty_tpl ) );
$_prefixVariable11 = ob_get_clean();
$_smarty_tpl->_subTemplateRender('file:./../../../atoms/textAlert/textAlert.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('textAlertType'=>'warning','textAlertText'=>$_prefixVariable11), 0, false);
}
}
