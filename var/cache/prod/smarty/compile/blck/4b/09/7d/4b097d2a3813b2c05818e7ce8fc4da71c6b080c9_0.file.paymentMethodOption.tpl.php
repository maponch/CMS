<?php
/* Smarty version 3.1.43, created on 2022-12-11 20:21:35
  from 'C:\wamp64\www\prestashop\modules\payplug\views\templates\api\molecules\paymentMethods\paymentMethodOption.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_63962dbf5f8d75_22277309',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4b097d2a3813b2c05818e7ce8fc4da71c6b080c9' => 
    array (
      0 => 'C:\\wamp64\\www\\prestashop\\modules\\payplug\\views\\templates\\api\\molecules\\paymentMethods\\paymentMethodOption.tpl',
      1 => 1670786168,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./../../atoms/title/title.tpl' => 1,
    'file:./../../atoms/link/link.tpl' => 1,
    'file:./../../atoms/switch/switch.tpl' => 1,
    'file:./../../atoms/options/options.tpl' => 1,
  ),
),false)) {
function content_63962dbf5f8d75_22277309 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="_option">
    <div class="_content">
        <?php $_smarty_tpl->_subTemplateRender('file:./../../atoms/title/title.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('titleClassName'=>'_title','titleText'=>$_smarty_tpl->tpl_vars['paymentMethodOption']->value['title']), 0, false);
?>
        <p class="_description">
            <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['paymentMethodOption']->value['description'],'htmlall','UTF-8' ));?>

            <?php if ((isset($_smarty_tpl->tpl_vars['paymentMethodOption']->value['link'])) && $_smarty_tpl->tpl_vars['paymentMethodOption']->value['link']) {?>
                <?php ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'paymentMethodOption.link','mod'=>'payplug'),$_smarty_tpl ) );
$_prefixVariable5 = ob_get_clean();
$_smarty_tpl->_subTemplateRender('file:./../../atoms/link/link.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('linkText'=>$_prefixVariable5,'linkHref'=>call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['paymentMethodOption']->value['link'],'htmlall','UTF-8' )),'linkTarget'=>'_blank','linkData'=>'data-link'), 0, false);
?>
            <?php }?>
        </p>
    </div>
    <div class="_action">
        <?php if ('switch' == $_smarty_tpl->tpl_vars['paymentMethodOption']->value['action']['type']) {?>
            <?php $_smarty_tpl->_subTemplateRender('file:./../../atoms/switch/switch.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('switchEnabledLabel'=>call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['paymentMethodOption']->value['action']['params']['enabledLabel'],'htmlall','UTF-8' )),'switchDisabledLabel'=>call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['paymentMethodOption']->value['action']['params']['disabledLabel'],'htmlall','UTF-8' )),'switchDataName'=>call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['paymentMethodOption']->value['action']['params']['dataName'],'htmlall','UTF-8' )),'switchChecked'=>call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['paymentMethodOption']->value['action']['params']['checked'],'htmlall','UTF-8' )),'switchClassName'=>call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['paymentMethodOption']->value['action']['params']['className'],'htmlall','UTF-8' )),'switchName'=>call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['paymentMethodOption']->value['action']['params']['name'],'htmlall','UTF-8' ))), 0, false);
?>
        <?php } elseif ('options' == $_smarty_tpl->tpl_vars['paymentMethodOption']->value['action']['type']) {?>
            <?php $_smarty_tpl->_subTemplateRender('file:./../../atoms/options/options.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('optionsItems'=>$_smarty_tpl->tpl_vars['paymentMethodOption']->value['action']['params']['items'],'optionsClassName'=>call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['paymentMethodOption']->value['action']['params']['className'],'htmlall','UTF-8' )),'optionsSelected'=>call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['paymentMethodOption']->value['action']['params']['selected'],'htmlall','UTF-8' )),'optionsName'=>call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['paymentMethodOption']->value['action']['params']['name'],'htmlall','UTF-8' ))), 0, false);
?>
        <?php }?>
    </div>
</div><?php }
}
