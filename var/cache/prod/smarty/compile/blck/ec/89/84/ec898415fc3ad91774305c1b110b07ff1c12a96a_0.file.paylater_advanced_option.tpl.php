<?php
/* Smarty version 3.1.43, created on 2022-12-11 20:21:35
  from 'C:\wamp64\www\prestashop\modules\payplug\views\templates\api\molecules\paylater\paylater_advanced_option.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_63962dbfcbfb89_93577710',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ec898415fc3ad91774305c1b110b07ff1c12a96a' => 
    array (
      0 => 'C:\\wamp64\\www\\prestashop\\modules\\payplug\\views\\templates\\api\\molecules\\paylater\\paylater_advanced_option.tpl',
      1 => 1670786168,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./../../atoms/title/title.tpl' => 1,
  ),
),false)) {
function content_63962dbfcbfb89_93577710 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="_paylaterAdvancedOption -<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['paylaterAdvancedOptionClassName']->value,'htmlall','UTF-8' ));?>
">
    <div class="_img">
        <img src="/modules/<?php echo $_smarty_tpl->tpl_vars['module_name']->value;?>
/views/img/admin/screen/<?php echo $_smarty_tpl->tpl_vars['module_name']->value;?>
-<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['paylaterAdvancedOptionClassName']->value,'htmlall','UTF-8' ));?>
.jpg" alt="">
    </div>
    <div class="_wrapper">
        <?php $_smarty_tpl->_subTemplateRender('file:./../../atoms/title/title.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('titleClassName'=>'_title','titleText'=>$_smarty_tpl->tpl_vars['paylaterAdvancedOptionTitle']->value), 0, false);
?>
        <?php echo $_smarty_tpl->tpl_vars['paylaterAdvancedOptionContent']->value;?>

    </div>
    <div class="_switch">
        <?php echo $_smarty_tpl->tpl_vars['paylaterAdvancedOptionSwitch']->value;?>

    </div>
</div><?php }
}
