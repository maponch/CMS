<?php
/* Smarty version 3.1.43, created on 2022-12-11 20:26:30
  from 'C:\wamp64\www\prestashop\modules\payplug\views\templates\api\molecules\modal\sandbox.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_63962ee6372211_19279614',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2e1d7854c2daa15af951ce0ac35bcd77b65cd279' => 
    array (
      0 => 'C:\\wamp64\\www\\prestashop\\modules\\payplug\\views\\templates\\api\\molecules\\modal\\sandbox.tpl',
      1 => 1670786168,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./../../atoms/paragraph/paragraph.tpl' => 3,
    'file:./../../atoms/input/input.tpl' => 1,
    'file:./../../atoms/icon/icon.tpl' => 1,
    'file:./../../atoms/button/button.tpl' => 4,
    'file:./../../atoms/title/title.tpl' => 2,
    'file:./../../atoms/modal/modal.tpl' => 1,
  ),
),false)) {
function content_63962ee6372211_19279614 (Smarty_Internal_Template $_smarty_tpl) {
if (!(isset($_smarty_tpl->tpl_vars['errorClass']->value)) || !$_smarty_tpl->tpl_vars['errorClass']->value) {?>
    <?php $_smarty_tpl->_assignInScope('errorClass', '');
}?>

<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', "modalContent", null);?>
    <?php if (!(isset($_smarty_tpl->tpl_vars['isOnboardedCompleted']->value))) {?>
        <div class="_content">
            <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', "popinCheckonboardingText", null);
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'popin.checkonboarding.text','mod'=>'payplug'),$_smarty_tpl ) );
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
            <?php $_smarty_tpl->_subTemplateRender('file:./../../atoms/paragraph/paragraph.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('paragraphText'=>$_smarty_tpl->tpl_vars['popinCheckonboardingText']->value), 0, false);
?>
            <div class="_input">
                <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', "popinCheckonboardingPassword", null);
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'popin.checkonboarding.password','mod'=>'payplug'),$_smarty_tpl ) );
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
                <?php $_smarty_tpl->_subTemplateRender('file:./../../atoms/input/input.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('inputType'=>'password','inputName'=>'password','inputLabel'=>$_smarty_tpl->tpl_vars['popinCheckonboardingPassword']->value,'inputClassName'=>$_smarty_tpl->tpl_vars['errorClass']->value), 0, false);
?>

                <?php if ((isset($_smarty_tpl->tpl_vars['errorMessage']->value))) {?>
                    <div class="_error">
                        <?php $_smarty_tpl->_subTemplateRender('file:./../../atoms/icon/icon.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('iconName'=>'error'), 0, false);
?>
                        <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['errorMessage']->value,'htmlall','UTF-8' ));?>

                    </div>
                <?php }?>
            </div>
            <div class="_footer">
                <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', "popinCheckonboardingCancel", null);
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'popin.checkonboarding.cancel','mod'=>'payplug'),$_smarty_tpl ) );
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
                <?php $_smarty_tpl->_subTemplateRender('file:./../../atoms/button/button.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('buttonData'=>'cancel','buttonName'=>'closePopin','buttonText'=>$_smarty_tpl->tpl_vars['popinCheckonboardingCancel']->value,'buttonStyle'=>'tertiary'), 0, false);
?>
                <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', "popinCheckonboardingSubmit", null);
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'popin.checkonboarding.submit','mod'=>'payplug'),$_smarty_tpl ) );
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
                <?php $_smarty_tpl->_subTemplateRender('file:./../../atoms/button/button.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('buttonData'=>'submit','buttonName'=>'submitSandbox','buttonText'=>$_smarty_tpl->tpl_vars['popinCheckonboardingSubmit']->value), 0, true);
?>
            </div>
        </div>
    <?php } else { ?>
        <div class="_content -center">
            <?php if ($_smarty_tpl->tpl_vars['isOnboardedCompleted']->value == false) {?>
                <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', "modalSandboxOnboardingProcessingTitle", null);
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'modal.sandbox.onboarding.processing.title','mod'=>'payplug'),$_smarty_tpl ) );
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
                <?php $_smarty_tpl->_subTemplateRender('file:./../../atoms/title/title.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('titleText'=>$_smarty_tpl->tpl_vars['modalSandboxOnboardingProcessingTitle']->value), 0, false);
?>
                <?php $_smarty_tpl->_assignInScope('supportLink', "<a href='mailto:support@payplug.com' target='_blank'>");?>
                <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', "modalSandboxOnboardingProcessingText", null);
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'modal.sandbox.onboarding.processing.text','tags'=>array($_smarty_tpl->tpl_vars['supportLink']->value),'mod'=>'payplug'),$_smarty_tpl ) );
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
                <?php $_smarty_tpl->_subTemplateRender('file:./../../atoms/paragraph/paragraph.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('paragraphText'=>$_smarty_tpl->tpl_vars['modalSandboxOnboardingProcessingText']->value), 0, true);
?>
                <div class="_footer">
                    <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', "popinCheckonboardingCancel", null);
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'popin.checkonboarding.submit','mod'=>'payplug'),$_smarty_tpl ) );
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
                    <?php $_smarty_tpl->_subTemplateRender('file:./../../atoms/button/button.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('buttonData'=>'cancel','buttonName'=>'closePopin','buttonText'=>$_smarty_tpl->tpl_vars['popinCheckonboardingCancel']->value), 0, true);
?>
                </div>
            <?php } else { ?>
                <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', "modalSandboxOnboardingProcessedTitle", null);
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'modal.sandbox.onboarding.processed.title','mod'=>'payplug'),$_smarty_tpl ) );
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
                <?php $_smarty_tpl->_subTemplateRender('file:./../../atoms/title/title.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('titleText'=>$_smarty_tpl->tpl_vars['modalSandboxOnboardingProcessedTitle']->value), 0, true);
?>
                <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', "modalSandboxOnboardingProcessedText", null);
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'modal.sandbox.onboarding.processed.text','mod'=>'payplug'),$_smarty_tpl ) );
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
                <?php $_smarty_tpl->_subTemplateRender('file:./../../atoms/paragraph/paragraph.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('paragraphText'=>$_smarty_tpl->tpl_vars['modalSandboxOnboardingProcessedText']->value), 0, true);
?>

                <div class="_footer">
                    <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', "popinCheckonboardingSuccess", null);
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'popin.checkonboarding.submit','mod'=>'payplug'),$_smarty_tpl ) );
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
                    <?php $_smarty_tpl->_subTemplateRender('file:./../../atoms/button/button.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('buttonData'=>'success','buttonName'=>'validateLive','buttonText'=>$_smarty_tpl->tpl_vars['popinCheckonboardingSuccess']->value), 0, true);
?>
                </div>
            <?php }?>
        </div>
    <?php }
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', "modalTitle", null);
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'popin.checkonboarding.title','mod'=>'payplug'),$_smarty_tpl ) );
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

<?php $_smarty_tpl->_subTemplateRender('file:./../../atoms/modal/modal.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('modalTitle'=>$_smarty_tpl->tpl_vars['modalTitle']->value,'modalClassName'=>'modalCheckonboarding','modalContent'=>$_smarty_tpl->tpl_vars['modalContent']->value,'modalData'=>'popinCheckonboarding'), 0, false);
}
}
