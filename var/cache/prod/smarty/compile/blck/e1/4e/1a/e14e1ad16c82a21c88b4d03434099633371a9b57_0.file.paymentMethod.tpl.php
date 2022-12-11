<?php
/* Smarty version 3.1.43, created on 2022-12-11 20:21:35
  from 'C:\wamp64\www\prestashop\modules\payplug\views\templates\api\molecules\paymentMethods\paymentMethod.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_63962dbf472166_92376662',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e14e1ad16c82a21c88b4d03434099633371a9b57' => 
    array (
      0 => 'C:\\wamp64\\www\\prestashop\\modules\\payplug\\views\\templates\\api\\molecules\\paymentMethods\\paymentMethod.tpl',
      1 => 1670786168,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./../../atoms/switch/switch.tpl' => 1,
    'file:./../../atoms/title/title.tpl' => 1,
    'file:./../../atoms/link/link.tpl' => 1,
    'file:./paymentMethodOption.tpl' => 1,
    'file:./paymentMethodAdvancedOption.tpl' => 1,
    'file:./../../atoms/accordion/accordion.tpl' => 1,
  ),
),false)) {
function content_63962dbf472166_92376662 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['paymentMethodName']->value != 'oney') {?>
    <div class="paymentMethod -<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['paymentMethodName']->value,'htmlall','UTF-8' ));
if ((isset($_smarty_tpl->tpl_vars['paymentMethod']->value['useSandbox'])) && $_smarty_tpl->tpl_vars['paymentMethod']->value['useSandbox']) {?> -useSandbox<?php }?>">
        <?php if ((isset($_smarty_tpl->tpl_vars['paymentMethod']->value['premium'])) && $_smarty_tpl->tpl_vars['paymentMethod']->value['premium']) {?>
            <?php $_smarty_tpl->_assignInScope('paymentMethodClassName', 'paymentMethod_switch -premium');?>
        <?php } else { ?>
            <?php $_smarty_tpl->_assignInScope('paymentMethodClassName', 'paymentMethod_switch');?>
        <?php }?>
        <?php $_smarty_tpl->_subTemplateRender('file:./../../atoms/switch/switch.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('switchClassName'=>$_smarty_tpl->tpl_vars['paymentMethodClassName']->value,'switchDataName'=>call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( ('paymentMethod_').($_smarty_tpl->tpl_vars['paymentMethodName']->value),'htmlall','UTF-8' )),'switchName'=>call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['paymentMethod']->value['name'],'htmlall','UTF-8' )),'switchChecked'=>$_smarty_tpl->tpl_vars['paymentMethod']->value['checked']), 0, false);
?>
        <?php if ((isset($_smarty_tpl->tpl_vars['paymentMethod']->value['image_url'])) && $_smarty_tpl->tpl_vars['paymentMethod']->value['image_url']) {?>
            <div class="_logo">
                <img src="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['paymentMethod']->value['image_url'],'htmlall','UTF-8' ));?>
">
            </div>
        <?php }?>
        <div class="_text">
            <?php $_smarty_tpl->_subTemplateRender('file:./../../atoms/title/title.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('titleClassName'=>'_title','titleText'=>call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['paymentMethod']->value['title'],'htmlall','UTF-8' ))), 0, false);
?>

            <?php if ($_smarty_tpl->tpl_vars['paymentMethod']->value['description']) {?>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['paymentMethod']->value['description'], 'description', false, 'modifier');
$_smarty_tpl->tpl_vars['description']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['modifier']->value => $_smarty_tpl->tpl_vars['description']->value) {
$_smarty_tpl->tpl_vars['description']->do_else = false;
?>
                    <p class="_description -<?php echo $_smarty_tpl->tpl_vars['modifier']->value;?>
">
                        <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['description']->value['text'],'htmlall','UTF-8' ));?>

                        <?php if ((isset($_smarty_tpl->tpl_vars['description']->value['link'])) && $_smarty_tpl->tpl_vars['description']->value['link']) {?>
                            <?php ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'paymentMethod.link','mod'=>'payplug'),$_smarty_tpl ) );
$_prefixVariable3 = ob_get_clean();
$_smarty_tpl->_subTemplateRender('file:./../../atoms/link/link.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('linkText'=>$_prefixVariable3,'linkHref'=>call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['description']->value['link'],'htmlall','UTF-8' )),'linkTarget'=>'_blank','linkData'=>'data-link'), 0, true);
?>
                        <?php }?>
                    </p>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            <?php }?>
        </div>
        <?php if (((isset($_smarty_tpl->tpl_vars['paymentMethod']->value['options'])) && $_smarty_tpl->tpl_vars['paymentMethod']->value['options']) || ((isset($_smarty_tpl->tpl_vars['paymentMethod']->value['advancedOptions'])) && $_smarty_tpl->tpl_vars['paymentMethod']->value['advancedOptions'])) {?>
            <div class="_additionnal">
                <?php if ((isset($_smarty_tpl->tpl_vars['paymentMethod']->value['options'])) && $_smarty_tpl->tpl_vars['paymentMethod']->value['options']) {?>
                    <div class="_options">
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['paymentMethod']->value['options'], 'option');
$_smarty_tpl->tpl_vars['option']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['option']->value) {
$_smarty_tpl->tpl_vars['option']->do_else = false;
?>
                            <?php $_smarty_tpl->_subTemplateRender('file:./paymentMethodOption.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('paymentMethodOption'=>$_smarty_tpl->tpl_vars['option']->value), 0, true);
?>
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </div>
                <?php }?>
                <?php if ((isset($_smarty_tpl->tpl_vars['paymentMethod']->value['advancedOptions'])) && $_smarty_tpl->tpl_vars['paymentMethod']->value['advancedOptions']) {?>
                    <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', "advancedOptions", null);?>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['paymentMethod']->value['advancedOptions'], 'advancedOption', false, 'advancedOptionName');
$_smarty_tpl->tpl_vars['advancedOption']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['advancedOptionName']->value => $_smarty_tpl->tpl_vars['advancedOption']->value) {
$_smarty_tpl->tpl_vars['advancedOption']->do_else = false;
?>
                            <?php $_smarty_tpl->_subTemplateRender('file:./paymentMethodAdvancedOption.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('paymentMethodAdvancedOptionChecked'=>$_smarty_tpl->tpl_vars['advancedOption']->value['checked'],'paymentMethodAdvancedOptionName'=>$_smarty_tpl->tpl_vars['advancedOptionName']->value,'paymentMethodAdvancedOption'=>$_smarty_tpl->tpl_vars['advancedOption']->value), 0, true);
?>
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

                    <?php ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'paymentMethod.advancedOptions','mod'=>'payplug'),$_smarty_tpl ) );
$_prefixVariable4 = ob_get_clean();
$_smarty_tpl->_subTemplateRender('file:./../../atoms/accordion/accordion.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('accordionClassName'=>'_advancedOptions','accordionIdentifier'=>($_smarty_tpl->tpl_vars['paymentMethodName']->value).('AdvancedSettings'),'accordionData'=>($_smarty_tpl->tpl_vars['paymentMethodName']->value).('AdvancedSettings'),'accordionLabel'=>$_prefixVariable4,'accordionContent'=>$_smarty_tpl->tpl_vars['advancedOptions']->value), 0, false);
?>
                <?php }?>
            </div>
        <?php }?>
    </div>
<?php }
}
}
