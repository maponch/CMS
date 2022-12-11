<?php
/* Smarty version 3.1.43, created on 2022-12-11 20:16:47
  from 'C:\wamp64\www\prestashop\modules\payplug\views\templates\admin\admin.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_63962c9f757d75_27525710',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd6e1a7df4ca87b7208bb6cc46ea53802ce3ada61' => 
    array (
      0 => 'C:\\wamp64\\www\\prestashop\\modules\\payplug\\views\\templates\\admin\\admin.tpl',
      1 => 1670786168,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./../api/molecules/banner.tpl' => 1,
    'file:./panel/ps_account.tpl' => 1,
    'file:./../api/molecules/description.tpl' => 1,
    'file:./panel/alerts/onboardingalerts.tpl' => 1,
    'file:./../api/molecules/general.tpl' => 1,
    'file:./../api/molecules/paymentMethods/paymentMethods.tpl' => 1,
    'file:./../api/molecules/paylater/paylater.tpl' => 1,
    'file:./../api/molecules/state.tpl' => 1,
    'file:./../api/molecules/footer.tpl' => 1,
  ),
),false)) {
function content_63962c9f757d75_27525710 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['module_name']->value,'htmlall','UTF-8' ));?>
Configuration">
    <div class="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['module_name']->value,'htmlall','UTF-8' ));?>
">
        <?php if ('pspaylater' == $_smarty_tpl->tpl_vars['module_name']->value) {?>
                        <?php $_smarty_tpl->_subTemplateRender('file:./../api/molecules/banner.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        <?php }?>

        <?php if ((isset($_smarty_tpl->tpl_vars['ps_account_isActivated']->value)) && $_smarty_tpl->tpl_vars['ps_account_isActivated']->value) {?>
            <?php $_smarty_tpl->_subTemplateRender('file:./panel/ps_account.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        <?php }?>

                <?php $_smarty_tpl->_subTemplateRender('file:./../api/molecules/description.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

                <?php $_smarty_tpl->_subTemplateRender('file:./panel/alerts/onboardingalerts.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

                <?php $_smarty_tpl->_subTemplateRender('file:./../api/molecules/general.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

        <?php if ('pspaylater' != $_smarty_tpl->tpl_vars['module_name']->value) {?>
                        <?php $_smarty_tpl->_subTemplateRender('file:./../api/molecules/paymentMethods/paymentMethods.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        <?php }?>

                <?php if ((isset($_smarty_tpl->tpl_vars['paymentMethods']->value['oney']))) {?>
            <?php $_smarty_tpl->_subTemplateRender('file:./../api/molecules/paylater/paylater.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        <?php }?>

                <?php $_smarty_tpl->_subTemplateRender('file:./../api/molecules/state.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    </div>

        <?php $_smarty_tpl->_subTemplateRender('file:./../api/molecules/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
</div><?php }
}
