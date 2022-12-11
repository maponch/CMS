<?php
/* Smarty version 3.1.43, created on 2022-12-11 20:21:34
  from 'C:\wamp64\www\prestashop\modules\payplug\views\templates\api\molecules\general.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_63962dbed045e8_48493570',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8289e073e96ed343b7280eccbf2ddee445743306' => 
    array (
      0 => 'C:\\wamp64\\www\\prestashop\\modules\\payplug\\views\\templates\\api\\molecules\\general.tpl',
      1 => 1670786168,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./../atoms/buttonLink/buttonLink.tpl' => 2,
    'file:./../atoms/button/button.tpl' => 3,
    'file:./../atoms/block/block.tpl' => 3,
    'file:./../atoms/input/input.tpl' => 2,
    'file:./../atoms/link/link.tpl' => 2,
    'file:./../atoms/action/action.tpl' => 1,
    'file:./../atoms/tooltip/tooltip.tpl' => 1,
    'file:./../atoms/title/title.tpl' => 1,
    'file:./../atoms/paragraph/paragraph.tpl' => 2,
    'file:./../atoms/options/options.tpl' => 1,
  ),
),false)) {
function content_63962dbed045e8_48493570 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\wamp64\\www\\prestashop\\vendor\\smarty\\smarty\\libs\\plugins\\modifier.capitalize.php','function'=>'smarty_modifier_capitalize',),));
?>

<?php if (!$_smarty_tpl->tpl_vars['connected']->value) {?>
        <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', "generalSubscribe_title", null);
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'general.subscribe.title','mod'=>'payplug'),$_smarty_tpl ) );
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
    <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', "generalSubscribe_description", null);
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'general.subscribe.description','mod'=>'payplug'),$_smarty_tpl ) );
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
    <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', "generalSubscribe_content", null);?>
        <p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'general.subscribe.createAccountDescription','tags'=>array('<strong>'),'mod'=>'payplug'),$_smarty_tpl ) );?>
</p>

        <div class="_buttons">
        <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', "generalSubscribe_createAccount", null);?>
            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'general.subscribe.createAccount','mod'=>'payplug'),$_smarty_tpl ) );?>

        <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
        <?php if ('pspaylater' == $_smarty_tpl->tpl_vars['module_name']->value) {?>
            <?php $_smarty_tpl->_assignInScope('payplugRegistrationUrl', (call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['portal_url']->value,'htmlall','UTF-8' ))).('/signup?sponsor=22101'));?>
        <?php } else { ?>
            <?php $_smarty_tpl->_assignInScope('payplugRegistrationUrl', call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['portal_url']->value,'htmlall','UTF-8' )));?>
        <?php }?>
        <?php $_smarty_tpl->_subTemplateRender('file:./../atoms/buttonLink/buttonLink.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('buttonLinkData'=>'payplugRegistration','buttonLinkHref'=>$_smarty_tpl->tpl_vars['payplugRegistrationUrl']->value,'buttonLinkName'=>'createAccount','buttonLinkText'=>$_smarty_tpl->tpl_vars['generalSubscribe_createAccount']->value), 0, false);
?>

        <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', "generalSubscribe_showLogin", null);?>
            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'general.subscribe.showLogin','mod'=>'payplug'),$_smarty_tpl ) );?>

        <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
        <?php $_smarty_tpl->_subTemplateRender('file:./../atoms/button/button.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('buttonData'=>'payplugCustomer','buttonName'=>'showLogin','buttonStyle'=>'tertiary','buttonText'=>$_smarty_tpl->tpl_vars['generalSubscribe_showLogin']->value), 0, false);
?>
        </div>
    <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
    <?php if ('pspaylater' == $_smarty_tpl->tpl_vars['module_name']->value) {?>
        <?php $_smarty_tpl->_assignInScope('generalSubscribe_className', 'generalBlock -subscribe -center');?>
    <?php } else { ?>
        <?php $_smarty_tpl->_assignInScope('generalSubscribe_className', 'generalBlock -subscribe -center -hide');?>
    <?php }?>
    <?php $_smarty_tpl->_subTemplateRender('file:./../atoms/block/block.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('blockTitle'=>$_smarty_tpl->tpl_vars['generalSubscribe_title']->value,'blockDescription'=>$_smarty_tpl->tpl_vars['generalSubscribe_description']->value,'blockContent'=>$_smarty_tpl->tpl_vars['generalSubscribe_content']->value,'blockData'=>'generalSubscribe','blockDisabled'=>!$_smarty_tpl->tpl_vars['ps_account']->value,'blockClassName'=>$_smarty_tpl->tpl_vars['generalSubscribe_className']->value), 0, false);
?>

        <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', "generalLogin_title", null);
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'general.login.title','mod'=>'payplug'),$_smarty_tpl ) );
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
    <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', "generalLogin_description", null);
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'general.login.description','tags'=>array('<strong>'),'mod'=>'payplug'),$_smarty_tpl ) );
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
    <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', "generalLogin_content", null);?>
        <form action="#" class="_loginForm">
            <div>
                <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', "inputUserEmail", null);
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'general.login.userEmail','mod'=>'payplug'),$_smarty_tpl ) );
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
                <?php $_smarty_tpl->_subTemplateRender('file:./../atoms/input/input.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('inputData'=>'payplugEmail','inputClassName'=>'_email','inputName'=>'userEmail','inputPlaceholder'=>$_smarty_tpl->tpl_vars['inputUserEmail']->value,'inputLabel'=>$_smarty_tpl->tpl_vars['inputUserEmail']->value), 0, false);
?>
            </div>
            <div>
                <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', "inputUserPassword", null);
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'general.login.userPassword','mod'=>'payplug'),$_smarty_tpl ) );
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
                <?php $_smarty_tpl->_subTemplateRender('file:./../atoms/input/input.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('inputData'=>'payplugPassword','inputClassName'=>'_password','inputType'=>'password','inputName'=>'userPassword','inputPlaceholder'=>$_smarty_tpl->tpl_vars['inputUserPassword']->value,'inputLabel'=>$_smarty_tpl->tpl_vars['inputUserPassword']->value), 0, true);
?>
            </div>
            <div>
                <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', "generalLogin_button_connect", null);
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'general.login.connexion','mod'=>'payplug'),$_smarty_tpl ) );
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
                <?php $_smarty_tpl->_subTemplateRender('file:./../atoms/button/button.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('buttonData'=>'payplugConnexion','buttonClassName'=>'_connexion','buttonName'=>'login','buttonText'=>$_smarty_tpl->tpl_vars['generalLogin_button_connect']->value), 0, true);
?>


                <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', "generalLogin_createAccount", null);
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'general.login.createAccount','mod'=>'payplug'),$_smarty_tpl ) );
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
                <?php $_smarty_tpl->_subTemplateRender('file:./../atoms/button/button.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('buttonData'=>'payplugShowRegistration','buttonName'=>'hideLogin','buttonStyle'=>'tertiary','buttonClassName'=>'_subscribe','buttonText'=>$_smarty_tpl->tpl_vars['generalLogin_createAccount']->value), 0, true);
?>
            </div>
            <div>
                <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', "generalLogin_link_password", null);
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'general.login.forgottenPassword','mod'=>'payplug'),$_smarty_tpl ) );
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
                <?php $_smarty_tpl->_subTemplateRender('file:./../atoms/link/link.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('linkData'=>'payplugForgotPassword','linkHref'=>(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['site_url']->value,'htmlall','UTF-8' ))).('/portal/forgot_password'),'linkClassName'=>'_forgotPassword','linkText'=>$_smarty_tpl->tpl_vars['generalLogin_link_password']->value), 0, false);
?>
            </div>
        </form>
    <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
    <?php if ('pspaylater' == $_smarty_tpl->tpl_vars['module_name']->value) {?>
        <?php $_smarty_tpl->_assignInScope('generalLogin_className', 'generalBlock -login -hide');?>
    <?php } else { ?>
        <?php $_smarty_tpl->_assignInScope('generalLogin_className', 'generalBlock -login');?>
    <?php }?>
    <?php $_smarty_tpl->_subTemplateRender('file:./../atoms/block/block.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('blockTitle'=>$_smarty_tpl->tpl_vars['generalLogin_title']->value,'blockDescription'=>$_smarty_tpl->tpl_vars['generalLogin_description']->value,'blockContent'=>$_smarty_tpl->tpl_vars['generalLogin_content']->value,'blockData'=>'generalLogin','blockDisabled'=>!$_smarty_tpl->tpl_vars['ps_account']->value,'blockClassName'=>$_smarty_tpl->tpl_vars['generalLogin_className']->value), 0, true);
} else { ?>
        <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', "generalLogged_title", null);
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'general.logged.title','mod'=>'payplug'),$_smarty_tpl ) );
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
    <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', "generalLogged_description", null);
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'general.logged.description','mod'=>'payplug'),$_smarty_tpl ) );
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
    <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', "generalLogged_content", null);?>
        <div class="_user">
            <div class="_userInformations">
                <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['payplug_email']->value,'htmlall','UTF-8' ));?>

                <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', "tooltipLogoutContent", null);?>
                    <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', 'generalLogged_logout', null);
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'general.logged.logout','mod'=>'payplug'),$_smarty_tpl ) );
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
                    <?php $_smarty_tpl->_subTemplateRender('file:./../atoms/action/action.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('actionClassName'=>'_userLogout','actionData'=>'payplugLogout','actionName'=>'logout','actionText'=>$_smarty_tpl->tpl_vars['generalLogged_logout']->value), 0, false);
?>
                <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
                <?php $_smarty_tpl->_subTemplateRender('file:./../atoms/tooltip/tooltip.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('tooltipData'=>'payplugTooltipLogout','tooltipIcon'=>'tooltip','tooltipContent'=>$_smarty_tpl->tpl_vars['tooltipLogoutContent']->value), 0, false);
?>
            </div>
            <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', "generalLogged_goToPortal", null);
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'general.logged.goToPortal','mod'=>'payplug'),$_smarty_tpl ) );
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
            <?php $_smarty_tpl->_subTemplateRender('file:./../atoms/buttonLink/buttonLink.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('buttonLinkClassName'=>'_userPortal','buttonLinkHref'=>(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['site_url']->value,'htmlall','UTF-8' ))).('/portal'),'buttonLinkName'=>'logged_goToPortal','buttonLinkText'=>$_smarty_tpl->tpl_vars['generalLogged_goToPortal']->value,'buttonLinkIcon'=>'link'), 0, true);
?>
        </div>
        <div class="_sandbox">
            <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', "generalLogged_modeTitle", null);
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'general.logged.modeTitle','mod'=>'payplug'),$_smarty_tpl ) );
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
            <?php $_smarty_tpl->_subTemplateRender('file:./../atoms/title/title.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('titleText'=>$_smarty_tpl->tpl_vars['generalLogged_modeTitle']->value,'titleClassName'=>"_sandboxTitle"), 0, false);
?>

            <?php if ($_smarty_tpl->tpl_vars['payplug_switch']->value['sandbox']['checked']) {?>
                <?php $_smarty_tpl->_assignInScope('generalLogged_sandBoxTestClassName', '_sandboxDescription -test');?>
                <?php $_smarty_tpl->_assignInScope('generalLogged_sandBoxLiveClassName', '_sandboxDescription -live -hide');?>
            <?php } else { ?>
                <?php $_smarty_tpl->_assignInScope('generalLogged_sandBoxTestClassName', '_sandboxDescription -test -hide');?>
                <?php $_smarty_tpl->_assignInScope('generalLogged_sandBoxLiveClassName', '_sandboxDescription -live');?>
            <?php }?>

            <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', 'faq_sandboxMode', null);?>
                <?php $_smarty_tpl->_subTemplateRender('file:./../atoms/link/link.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('linkText'=>'','linkHref'=>$_smarty_tpl->tpl_vars['faq_links']->value['sandbox'],'linkData'=>'faq','linkNoTag'=>true), 0, true);
?>
            <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
            <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', "generalLogged_sandBoxDescription", null);?>
                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'general.logged.sandBoxDescriptionTest','tags'=>array($_smarty_tpl->tpl_vars['faq_sandboxMode']->value),'mod'=>'payplug'),$_smarty_tpl ) );?>

            <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
            <?php $_smarty_tpl->_subTemplateRender('file:./../atoms/paragraph/paragraph.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('paragraphText'=>$_smarty_tpl->tpl_vars['generalLogged_sandBoxDescription']->value,'paragraphClassName'=>$_smarty_tpl->tpl_vars['generalLogged_sandBoxTestClassName']->value), 0, false);
?>

            <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', "generalLogged_liveDescription", null);?>
                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'general.logged.sandBoxDescriptionLive','tags'=>array($_smarty_tpl->tpl_vars['faq_sandboxMode']->value),'mod'=>'payplug'),$_smarty_tpl ) );?>

            <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
            <?php $_smarty_tpl->_subTemplateRender('file:./../atoms/paragraph/paragraph.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('paragraphText'=>$_smarty_tpl->tpl_vars['generalLogged_liveDescription']->value,'paragraphClassName'=>$_smarty_tpl->tpl_vars['generalLogged_sandBoxLiveClassName']->value), 0, true);
?>
            <?php if ('pspaylater' == $_smarty_tpl->tpl_vars['module_name']->value) {?>
                <?php $_smarty_tpl->_assignInScope('allowLiveSwitch', !$_smarty_tpl->tpl_vars['onboardingOneyCompleted']->value);?>
            <?php } else { ?>
                <?php $_smarty_tpl->_assignInScope('allowLiveSwitch', !$_smarty_tpl->tpl_vars['verified']->value);?>
            <?php }?>
            <?php $_smarty_tpl->_assignInScope('items', array(array('value'=>1,"dataName"=>"sandboxTest","text"=>call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( smarty_modifier_capitalize($_smarty_tpl->tpl_vars['payplug_switch']->value['sandbox']['label_left']),'htmlall','UTF-8' )),'disabled'=>!$_smarty_tpl->tpl_vars['payplug_switch']->value['sandbox']['active']),array('value'=>0,"dataName"=>"sandboxLive","text"=>call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( smarty_modifier_capitalize($_smarty_tpl->tpl_vars['payplug_switch']->value['sandbox']['label_right']),'htmlall','UTF-8' )),'disabled'=>!$_smarty_tpl->tpl_vars['payplug_switch']->value['sandbox']['active'],'notallowed'=>$_smarty_tpl->tpl_vars['allowLiveSwitch']->value)));?>
            <?php $_smarty_tpl->_subTemplateRender('file:./../atoms/options/options.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('optionsItems'=>$_smarty_tpl->tpl_vars['items']->value,'optionsClassName'=>'_sandboxRadioButton','optionsSelected'=>$_smarty_tpl->tpl_vars['payplug_switch']->value['sandbox']['checked'],'optionsName'=>$_smarty_tpl->tpl_vars['payplug_switch']->value['sandbox']['name']), 0, false);
?>
        </div>
    <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
    <?php $_smarty_tpl->_assignInScope('generalLogged_className', 'generalBlock -logged');?>
    <?php $_smarty_tpl->_subTemplateRender('file:./../atoms/block/block.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('blockTitle'=>$_smarty_tpl->tpl_vars['generalLogged_title']->value,'blockDescription'=>$_smarty_tpl->tpl_vars['generalLogged_description']->value,'blockContent'=>$_smarty_tpl->tpl_vars['generalLogged_content']->value,'blockData'=>'generalLogged','blockDisabled'=>!$_smarty_tpl->tpl_vars['ps_account']->value || !$_smarty_tpl->tpl_vars['payplug_switch']->value['show']['checked'],'blockClassName'=>$_smarty_tpl->tpl_vars['generalLogged_className']->value), 0, true);
}
}
}
