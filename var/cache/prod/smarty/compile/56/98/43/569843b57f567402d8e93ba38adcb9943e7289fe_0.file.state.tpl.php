<?php
/* Smarty version 3.1.43, created on 2022-12-11 20:16:48
  from 'C:\wamp64\www\prestashop\modules\payplug\views\templates\api\molecules\state.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_63962ca0bc8108_92222681',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '569843b57f567402d8e93ba38adcb9943e7289fe' => 
    array (
      0 => 'C:\\wamp64\\www\\prestashop\\modules\\payplug\\views\\templates\\api\\molecules\\state.tpl',
      1 => 1670786168,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./../atoms/textAlert/textAlert.tpl' => 1,
    'file:./../atoms/button/button.tpl' => 1,
    'file:./../atoms/icon/icon.tpl' => 3,
    'file:./../atoms/paragraph/paragraph.tpl' => 3,
    'file:./../atoms/accordion/accordion.tpl' => 1,
    'file:./../atoms/block/block.tpl' => 1,
  ),
),false)) {
function content_63962ca0bc8108_92222681 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', "stateBlock_title", null);
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'state.block.title','mod'=>'payplug'),$_smarty_tpl ) );
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', "stateBlock_description", null);
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'state.block.description','mod'=>'payplug'),$_smarty_tpl ) );
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', "stateBlock_content", null);?>

    <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', "stateBlock_alertText", null);?>
        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'state.block.textAlert','mod'=>'payplug'),$_smarty_tpl ) );?>

    <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

    <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', "accordionContent", null);?>

        <div class="_stateAlert">
            <?php $_smarty_tpl->_subTemplateRender("file:./../atoms/textAlert/textAlert.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('textAlertType'=>'warning','textAlertText'=>$_smarty_tpl->tpl_vars['stateBlock_alertText']->value), 0, false);
?>
        </div>

        <div class="_stateContent">

            <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', "stateBlock_stateButton", null);?>
                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'state.block.stateButton','mod'=>'payplug'),$_smarty_tpl ) );?>

            <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
            <?php $_smarty_tpl->_subTemplateRender('file:./../atoms/button/button.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('buttonName'=>'stateButton','buttonStyle'=>'tertiary','buttonText'=>$_smarty_tpl->tpl_vars['stateBlock_stateButton']->value), 0, false);
?>
            <div class="indicators">
                <div class="indicator">
                    <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', "stateBlock_stateCurl", null);?>
                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'state.block.stateCurl','mod'=>'payplug'),$_smarty_tpl ) );?>

                    <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
                    <?php $_smarty_tpl->_subTemplateRender('file:./../atoms/icon/icon.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('iconClassName'=>((string)$_smarty_tpl->tpl_vars['check_configuration']->value['status']['curl'])."Class",'iconName'=>$_smarty_tpl->tpl_vars['check_configuration']->value['status']['curl']), 0, false);
?>
                    <?php $_smarty_tpl->_subTemplateRender('file:./../atoms/paragraph/paragraph.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('paragraphText'=>$_smarty_tpl->tpl_vars['stateBlock_stateCurl']->value), 0, false);
?>
                </div>
                <div class="indicator">
                    <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', "stateBlock_statePhp", null);?>
                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'state.block.statePhp','mod'=>'payplug'),$_smarty_tpl ) );?>

                    <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
                    <?php $_smarty_tpl->_subTemplateRender('file:./../atoms/icon/icon.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('iconClassName'=>((string)$_smarty_tpl->tpl_vars['check_configuration']->value['status']['php'])."Class",'iconName'=>$_smarty_tpl->tpl_vars['check_configuration']->value['status']['php']), 0, true);
?>
                    <?php $_smarty_tpl->_subTemplateRender('file:./../atoms/paragraph/paragraph.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('paragraphText'=>$_smarty_tpl->tpl_vars['stateBlock_statePhp']->value), 0, true);
?>
                </div>
                <div class="indicator">
                    <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', "stateBlock_stateSsl", null);?>
                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'state.block.stateSsl','mod'=>'payplug'),$_smarty_tpl ) );?>

                    <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
                    <?php $_smarty_tpl->_subTemplateRender('file:./../atoms/icon/icon.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('iconClassName'=>((string)$_smarty_tpl->tpl_vars['check_configuration']->value['status']['ssl'])."Class",'iconName'=>$_smarty_tpl->tpl_vars['check_configuration']->value['status']['ssl']), 0, true);
?>
                    <?php $_smarty_tpl->_subTemplateRender('file:./../atoms/paragraph/paragraph.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('paragraphText'=>$_smarty_tpl->tpl_vars['stateBlock_stateSsl']->value), 0, true);
?>
                </div>
            </div>
        </div>

    <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
    <?php $_smarty_tpl->_subTemplateRender('file:./../atoms/accordion/accordion.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('accordionIdentifier'=>'state.accordion','accordionClassName'=>'-stateBlock','accordionContent'=>$_smarty_tpl->tpl_vars['accordionContent']->value), 0, false);
?>

<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

<?php $_smarty_tpl->_assignInScope('stateBlock_className', 'stateBlock');?>

<?php $_smarty_tpl->_subTemplateRender('file:./../atoms/block/block.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('blockTitle'=>$_smarty_tpl->tpl_vars['stateBlock_title']->value,'blockDescription'=>$_smarty_tpl->tpl_vars['stateBlock_description']->value,'blockContent'=>$_smarty_tpl->tpl_vars['stateBlock_content']->value,'blockData'=>'blockState','blockDisabled'=>!$_smarty_tpl->tpl_vars['connected']->value || !$_smarty_tpl->tpl_vars['payplug_switch']->value['show']['checked'],'blockClassName'=>$_smarty_tpl->tpl_vars['stateBlock_className']->value), 0, false);
}
}
