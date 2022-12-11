<?php
/* Smarty version 3.1.43, created on 2022-12-11 20:21:34
  from 'C:\wamp64\www\prestashop\modules\payplug\views\templates\api\atoms\alert\alert.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_63962dbebddfc1_32678402',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '78f2bc395961a71d205ee84bcaa42e09393b1d5c' => 
    array (
      0 => 'C:\\wamp64\\www\\prestashop\\modules\\payplug\\views\\templates\\api\\atoms\\alert\\alert.tpl',
      1 => 1670786168,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./../icon/icon.tpl' => 2,
  ),
),false)) {
function content_63962dbebddfc1_32678402 (Smarty_Internal_Template $_smarty_tpl) {
if (!(isset($_smarty_tpl->tpl_vars['alertType']->value)) || !$_smarty_tpl->tpl_vars['alertType']->value) {?>
    <?php $_smarty_tpl->_assignInScope('alertType', 'success');
}?>

<div class="payplugUIAlert -<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['alertType']->value,'htmlall','UTF-8' ));?>

    <?php if ((isset($_smarty_tpl->tpl_vars['alertClassName']->value)) && $_smarty_tpl->tpl_vars['alertClassName']->value) {?> <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['alertClassName']->value,'htmlall','UTF-8' ));
}?>"
    <?php if ((isset($_smarty_tpl->tpl_vars['alertData']->value)) && $_smarty_tpl->tpl_vars['alertData']->value) {?> data-e2e-name="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['alertData']->value,'htmlall','UTF-8' ));?>
"<?php }?>>
    <?php if ((isset($_smarty_tpl->tpl_vars['alertClose']->value)) && $_smarty_tpl->tpl_vars['alertClose']->value) {?>
        <input type="checkbox" name="alertTriggered" id="alertTriggered" />
        <label for="alertTriggered" class="_close" >
            <?php $_smarty_tpl->_subTemplateRender('file:./../icon/icon.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('iconName'=>'close'), 0, false);
?>
        </label>
    <?php }?>
    <?php if ((isset($_smarty_tpl->tpl_vars['alertIcon']->value)) && $_smarty_tpl->tpl_vars['alertIcon']->value) {?>
        <div class="_icon">
            <?php $_smarty_tpl->_subTemplateRender('file:./../icon/icon.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('iconName'=>$_smarty_tpl->tpl_vars['alertIcon']->value), 0, true);
?>
        </div>
    <?php }?>
    <?php if ((isset($_smarty_tpl->tpl_vars['alertTitle']->value)) && $_smarty_tpl->tpl_vars['alertTitle']->value) {?>
        <div class="_title"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['alertTitle']->value,'htmlall','UTF-8' ));?>
</div>
    <?php }?>
    <div class="_content"><?php echo $_smarty_tpl->tpl_vars['alertContent']->value;?>
</div>
</div>
<?php }
}
