<?php
/* Smarty version 3.1.43, created on 2022-12-11 20:16:48
  from 'C:\wamp64\www\prestashop\modules\payplug\views\templates\api\molecules\paylater\paylater_advanced.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_63962ca09d39e3_70758970',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '321784c8d7740b539a58519e5c33fa6f7c2061cd' => 
    array (
      0 => 'C:\\wamp64\\www\\prestashop\\modules\\payplug\\views\\templates\\api\\molecules\\paylater\\paylater_advanced.tpl',
      1 => 1670786168,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./../../atoms/textAlert/textAlert.tpl' => 1,
    'file:./../../atoms/input/input.tpl' => 2,
    'file:./../../atoms/icon/icon.tpl' => 1,
    'file:./../../atoms/switch/switch.tpl' => 3,
    'file:./../../atoms/link/link.tpl' => 1,
    'file:./paylater_advanced_option.tpl' => 1,
    'file:./../../atoms/accordion/accordion.tpl' => 1,
  ),
),false)) {
function content_63962ca09d39e3_70758970 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['oney_belgium']->value) {?>
    <?php ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'paylater.alertContent','tags'=>array('<br>'),'mod'=>'payplug'),$_smarty_tpl ) );
$_prefixVariable21 = ob_get_clean();
$_smarty_tpl->_subTemplateRender('file:./../../atoms/textAlert/textAlert.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('textAlertType'=>'warning','textAlertText'=>$_prefixVariable21), 0, false);
}?>

<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', "paylaterAdvancedTitle", null);
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'paylater.block.accordionTitle','mod'=>'payplug'),$_smarty_tpl ) );
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', "paylaterAdvancedContent", null);?>
    <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', "thresholdsTitle", null);
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'paylater.block.thresholdsTitle','mod'=>'payplug'),$_smarty_tpl ) );
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
    <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', "thresholdsContent", null);?>
        <p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'paylater.block.thresholdsDescription','mod'=>'payplug'),$_smarty_tpl ) );?>
</p>
        <div class="_inputs">
            <?php $_smarty_tpl->_subTemplateRender('file:./../../atoms/input/input.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('inputType'=>'number','inputMin'=>'100','inputPlaceholder'=>'100','inputValue'=>$_smarty_tpl->tpl_vars['oney_custom_min_amounts']->value,'inputIcon'=>'Euro','inputClassName'=>'minThreshold','inputName'=>'payplug_oney_custom_min_amounts','inputData'=>'oneyThresholdMin'), 0, false);
?>
            <p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'paylater.block.thresholdsBetweenText','mod'=>'payplug'),$_smarty_tpl ) );?>
</p>
            <?php $_smarty_tpl->_subTemplateRender('file:./../../atoms/input/input.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('inputType'=>'number','inputPlaceholder'=>'3000','inputValue'=>$_smarty_tpl->tpl_vars['oney_custom_max_amounts']->value,'inputIcon'=>'Euro','inputClassName'=>'maxThreshold','inputName'=>'payplug_oney_custom_max_amounts','inputData'=>'oneyThresholdMax'), 0, true);
?>
        </div>
        <div class="_statement">
            <?php $_smarty_tpl->_subTemplateRender('file:./../../atoms/icon/icon.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('iconName'=>'error','iconClassName'=>'thresholdErrorIcon'), 0, false);
?>
            <span class="thresholdError" data-e2e-error="oneyThresholdError"></span>
        </div>
    <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

    <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', "optimizedTitle", null);
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'paylater.block.optimizedTitle','mod'=>'payplug'),$_smarty_tpl ) );
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
    <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', "optimizedSwitch", null);?>
        <?php $_smarty_tpl->_subTemplateRender('file:./../../atoms/switch/switch.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('switchEnabledLabel'=>'On','switchDisabledLabel'=>'Off','switchDataName'=>'optimizedSwitch','switchChecked'=>$_smarty_tpl->tpl_vars['payplug_switch']->value['oney_optimized']['checked'],'switchClassName'=>"optimizedSwitch",'switchName'=>$_smarty_tpl->tpl_vars['payplug_switch']->value['oney_optimized']['name']), 0, false);
?>
    <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
    <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', "optimizedContent", null);?>
        <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', 'faq_oneyBlock', null);?>
            <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', 'oneyFaqLink', null);
echo $_smarty_tpl->tpl_vars['faq_links']->value['oney'];?>
#h_2595dd3d-a281-43ab-a51a-4986fecde5ee<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
            <?php $_smarty_tpl->_subTemplateRender('file:./../../atoms/link/link.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('linkText'=>'','linkHref'=>$_smarty_tpl->tpl_vars['oneyFaqLink']->value,'linkData'=>'faqOney','linkNoTag'=>true), 0, false);
?>
        <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
        <p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'paylater.block.optimizedDescription','tags'=>array($_smarty_tpl->tpl_vars['faq_oneyBlock']->value),'mod'=>'payplug'),$_smarty_tpl ) );?>
</p>
    <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

    <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', "productOneyCtaTitle", null);
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'paylater.block.productOneyDisplayTitle','mod'=>'payplug'),$_smarty_tpl ) );
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
    <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', "productOneyCtaSwitch", null);?>
        <?php $_smarty_tpl->_subTemplateRender('file:./../../atoms/switch/switch.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('switchEnabledLabel'=>'On','switchDisabledLabel'=>'Off','switchDataName'=>'productOneyCtaTitleSwitch','switchChecked'=>$_smarty_tpl->tpl_vars['payplug_switch']->value['oney_product_cta']['checked'],'switchClassName'=>"productOneyCtaSwitch",'switchName'=>$_smarty_tpl->tpl_vars['payplug_switch']->value['oney_product_cta']['name']), 0, true);
?>
    <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
    <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', "productOneyCtaContent", null);?>

    <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

    <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', "cartOneyCtaTitle", null);
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'paylater.block.cartOneyDisplayTitle','mod'=>'payplug'),$_smarty_tpl ) );
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
    <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', "cartOneyCtaSwitch", null);?>
        <?php $_smarty_tpl->_subTemplateRender('file:./../../atoms/switch/switch.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('switchEnabledLabel'=>'On','switchDisabledLabel'=>'Off','switchDataName'=>'cartOneyCtaTitleSwitch','switchChecked'=>$_smarty_tpl->tpl_vars['payplug_switch']->value['oney_cart_cta']['checked'],'switchClassName'=>"cartOneyCtaSwitch",'switchName'=>$_smarty_tpl->tpl_vars['payplug_switch']->value['oney_cart_cta']['name']), 0, true);
?>
    <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
    <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', "cartOneyCtaContent", null);?>
    <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

    <?php $_smarty_tpl->_assignInScope('paylaterBasicOptions', array(array('className'=>'thresholds','title'=>$_smarty_tpl->tpl_vars['thresholdsTitle']->value,'content'=>$_smarty_tpl->tpl_vars['thresholdsContent']->value,'switch'=>''),array('className'=>'optimized','title'=>$_smarty_tpl->tpl_vars['optimizedTitle']->value,'content'=>$_smarty_tpl->tpl_vars['optimizedContent']->value,'switch'=>$_smarty_tpl->tpl_vars['optimizedSwitch']->value)));?>
    <?php $_smarty_tpl->_assignInScope('paylaterCartAndProductOptions', array(array('className'=>'productOneyCta','title'=>$_smarty_tpl->tpl_vars['productOneyCtaTitle']->value,'content'=>$_smarty_tpl->tpl_vars['productOneyCtaContent']->value,'switch'=>$_smarty_tpl->tpl_vars['productOneyCtaSwitch']->value),array('className'=>'cartOneyCta','title'=>$_smarty_tpl->tpl_vars['cartOneyCtaTitle']->value,'content'=>$_smarty_tpl->tpl_vars['cartOneyCtaContent']->value,'switch'=>$_smarty_tpl->tpl_vars['cartOneyCtaSwitch']->value)));?>
    <?php if (!($_smarty_tpl->tpl_vars['oney_belgium']->value || $_smarty_tpl->tpl_vars['oney_spain']->value)) {?>
        <?php $_smarty_tpl->_assignInScope('paylaterAdvancedOptions', array_merge($_smarty_tpl->tpl_vars['paylaterBasicOptions']->value,$_smarty_tpl->tpl_vars['paylaterCartAndProductOptions']->value));?>
    <?php } else { ?>
        <?php $_smarty_tpl->_assignInScope('paylaterAdvancedOptions', $_smarty_tpl->tpl_vars['paylaterBasicOptions']->value);?>
    <?php }?>

    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['paylaterAdvancedOptions']->value, 'paylaterAdvancedOption');
$_smarty_tpl->tpl_vars['paylaterAdvancedOption']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['paylaterAdvancedOption']->value) {
$_smarty_tpl->tpl_vars['paylaterAdvancedOption']->do_else = false;
?>
        <?php $_smarty_tpl->_subTemplateRender('file:./paylater_advanced_option.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('paylaterAdvancedOptionClassName'=>$_smarty_tpl->tpl_vars['paylaterAdvancedOption']->value['className'],'paylaterAdvancedOptionTitle'=>$_smarty_tpl->tpl_vars['paylaterAdvancedOption']->value['title'],'paylaterAdvancedOptionContent'=>$_smarty_tpl->tpl_vars['paylaterAdvancedOption']->value['content'],'paylaterAdvancedOptionSwitch'=>$_smarty_tpl->tpl_vars['paylaterAdvancedOption']->value['switch']), 0, true);
?>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
$_smarty_tpl->_subTemplateRender('file:./../../atoms/accordion/accordion.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('accordionIdentifier'=>'payplugUIAccordion.identifier','accordionClassName'=>'_paylaterAdvanced','accordionData'=>'oneyAdvancedSettings','accordionLabel'=>$_smarty_tpl->tpl_vars['paylaterAdvancedTitle']->value,'accordionContent'=>$_smarty_tpl->tpl_vars['paylaterAdvancedContent']->value), 0, false);
}
}
