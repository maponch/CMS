<?php
/* Smarty version 3.1.43, created on 2022-12-11 20:21:34
  from 'C:\wamp64\www\prestashop\modules\payplug\views\templates\admin\panel\alerts\onboardingalerts.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_63962dbeaee528_71152995',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8285ef4a44173e31ce377a95dea97f52008bffa1' => 
    array (
      0 => 'C:\\wamp64\\www\\prestashop\\modules\\payplug\\views\\templates\\admin\\panel\\alerts\\onboardingalerts.tpl',
      1 => 1670786168,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./../../../api/atoms/alert/alert.tpl' => 2,
  ),
),false)) {
function content_63962dbeaee528_71152995 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['connected']->value && (!$_smarty_tpl->tpl_vars['verified']->value || ('pspaylater' == $_smarty_tpl->tpl_vars['module_name']->value && !$_smarty_tpl->tpl_vars['onboardingOneyCompleted']->value) || $_smarty_tpl->tpl_vars['onBoardingCheck']->value)) {?>
    <?php if ((isset($_smarty_tpl->tpl_vars['onBoardingCheck']->value)) && $_smarty_tpl->tpl_vars['onBoardingCheck']->value == true) {?>
        <?php if ($_smarty_tpl->tpl_vars['onboardingOneyCompleted']->value == true) {?>
            <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', "alertOnboardingCompletedTitle", null);
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'alert.onboarding.completed.title','mod'=>'payplug'),$_smarty_tpl ) );
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
            <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', "alertOnboardingCompletedContent", null);
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'alert.onboarding.completed.content','mod'=>'payplug'),$_smarty_tpl ) );
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
            <?php $_smarty_tpl->_assignInScope('alertOnboardingType', "success");?>
            <?php $_smarty_tpl->_assignInScope('alertOnboardingIcon', "check");?>
        <?php } else { ?>
            <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', "supportLink", null);?><a href="mailto:support@payplug.com"><?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
            <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', "alertOnboardingCompletedTitle", null);
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'alert.onboarding.notcompleted.title','mod'=>'payplug'),$_smarty_tpl ) );
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
            <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', "alertOnboardingCompletedContent", null);
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'alert.onboarding.notcompleted.content','tags'=>array($_smarty_tpl->tpl_vars['supportLink']->value),'mod'=>'payplug'),$_smarty_tpl ) );
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
            <?php $_smarty_tpl->_assignInScope('alertOnboardingType', "error");?>
            <?php $_smarty_tpl->_assignInScope('alertOnboardingIcon', "timer");?>
        <?php }?>

        <?php $_smarty_tpl->_subTemplateRender('file:./../../../api/atoms/alert/alert.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('alertType'=>$_smarty_tpl->tpl_vars['alertOnboardingType']->value,'alertClose'=>true,'alertIcon'=>$_smarty_tpl->tpl_vars['alertOnboardingIcon']->value,'alertTitle'=>$_smarty_tpl->tpl_vars['alertOnboardingCompletedTitle']->value,'alertContent'=>$_smarty_tpl->tpl_vars['alertOnboardingCompletedContent']->value), 0, false);
?>
    <?php }?>

    <?php if (!$_smarty_tpl->tpl_vars['onboardingOneyCompleted']->value || ('payplug' == $_smarty_tpl->tpl_vars['module_name']->value && !$_smarty_tpl->tpl_vars['verified']->value)) {?>

        <?php ob_start();
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['faq_links']->value['sandbox'],'htmlall','UTF-8' ));
$_prefixVariable2=ob_get_clean();
$_smarty_tpl->_assignInScope('modeTestLink', "<a href='".$_prefixVariable2."' target='_blank' class='alertTestMode'>");?>
        <?php $_smarty_tpl->_assignInScope('sandboxLiveButton', "<button type='button' name='alertLiveButton' class='alertLiveButton'>");?>
        <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', "alertOnboardingTitle", null);
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'alert.onboarding.title','mod'=>'payplug'),$_smarty_tpl ) );
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
        <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', "alertContent", null);?>
            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'alert.onboarding.content','tags'=>array($_smarty_tpl->tpl_vars['modeTestLink']->value,'<br>',$_smarty_tpl->tpl_vars['sandboxLiveButton']->value),'mod'=>'payplug'),$_smarty_tpl ) );?>

        <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
        <?php $_smarty_tpl->_subTemplateRender('file:./../../../api/atoms/alert/alert.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('alertType'=>'warning','alertIcon'=>'lightbulb','alertTitle'=>$_smarty_tpl->tpl_vars['alertOnboardingTitle']->value,'alertClassName'=>'onboardingAlert','alertContent'=>$_smarty_tpl->tpl_vars['alertContent']->value), 0, true);
?>
    <?php }?>

<?php }
}
}
