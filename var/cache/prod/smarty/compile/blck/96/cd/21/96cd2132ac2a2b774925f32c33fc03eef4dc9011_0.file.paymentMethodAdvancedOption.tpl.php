<?php
/* Smarty version 3.1.43, created on 2022-12-11 20:21:35
  from 'C:\wamp64\www\prestashop\modules\payplug\views\templates\api\molecules\paymentMethods\paymentMethodAdvancedOption.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_63962dbf678351_03407464',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '96cd2132ac2a2b774925f32c33fc03eef4dc9011' => 
    array (
      0 => 'C:\\wamp64\\www\\prestashop\\modules\\payplug\\views\\templates\\api\\molecules\\paymentMethods\\paymentMethodAdvancedOption.tpl',
      1 => 1670786168,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./../../atoms/title/title.tpl' => 1,
    'file:./../../atoms/switch/switch.tpl' => 1,
  ),
),false)) {
function content_63962dbf678351_03407464 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="_advancedOption -<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['advancedOptionName']->value,'htmlall','UTF-8' ));?>
">
    <div class="_header">
        <?php $_smarty_tpl->_subTemplateRender('file:./../../atoms/title/title.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('titleClassName'=>'_title','titleText'=>$_smarty_tpl->tpl_vars['paymentMethodAdvancedOption']->value['title']), 0, false);
?>

        <?php if ((isset($_smarty_tpl->tpl_vars['paymentMethodAdvancedOption']->value['premium'])) && $_smarty_tpl->tpl_vars['paymentMethodAdvancedOption']->value['premium']) {?>
            <?php $_smarty_tpl->_assignInScope('paymentMethodAdvancedOptionClassName', '-premium');?>
        <?php } else { ?>
            <?php $_smarty_tpl->_assignInScope('paymentMethodAdvancedOptionClassName', '');?>
        <?php }?>

        <?php $_smarty_tpl->_subTemplateRender('file:./../../atoms/switch/switch.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('switchEnabledLabel'=>'On','switchDisabledLabel'=>'Off','switchClassName'=>$_smarty_tpl->tpl_vars['paymentMethodAdvancedOptionClassName']->value,'switchDataName'=>(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['paymentMethodAdvancedOptionName']->value,'htmlall','UTF-8' ))).('Switch'),'switchChecked'=>call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['paymentMethodAdvancedOption']->value['checked'],'htmlall','UTF-8' )),'switchName'=>call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['paymentMethodAdvancedOption']->value['name'],'htmlall','UTF-8' ))), 0, false);
?>
    </div>
    <div class="_content">
        <?php $_smarty_tpl->_assignInScope('templateName', (((('./').($_smarty_tpl->tpl_vars['paymentMethodName']->value)).('/')).($_smarty_tpl->tpl_vars['paymentMethodAdvancedOptionName']->value)).('.tpl'));?>
        <?php $_smarty_tpl->_subTemplateRender($_smarty_tpl->tpl_vars['templateName']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
    </div>
</div><?php }
}
