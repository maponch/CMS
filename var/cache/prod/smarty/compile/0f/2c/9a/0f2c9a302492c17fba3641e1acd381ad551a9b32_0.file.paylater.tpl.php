<?php
/* Smarty version 3.1.43, created on 2022-12-11 20:16:48
  from 'C:\wamp64\www\prestashop\modules\payplug\views\templates\api\molecules\paylater\paylater.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_63962ca08dc962_52959412',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0f2c9a302492c17fba3641e1acd381ad551a9b32' => 
    array (
      0 => 'C:\\wamp64\\www\\prestashop\\modules\\payplug\\views\\templates\\api\\molecules\\paylater\\paylater.tpl',
      1 => 1670786168,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./../../atoms/switch/switch.tpl' => 1,
    'file:./../../atoms/title/title.tpl' => 1,
    'file:./../../atoms/link/link.tpl' => 1,
    'file:./../../atoms/options/options.tpl' => 1,
    'file:./../../atoms/input/input.tpl' => 1,
    'file:./paylater_advanced.tpl' => 1,
    'file:./../../atoms/block/block.tpl' => 1,
  ),
),false)) {
function content_63962ca08dc962_52959412 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', "paylaterBlock_content", null);?>
    <?php if ('pspaylater' == $_smarty_tpl->tpl_vars['module_name']->value) {?>
        <?php $_smarty_tpl->_assignInScope('paylaterChecked', 1);?>
    <?php } else { ?>
        <?php $_smarty_tpl->_assignInScope('paylaterChecked', $_smarty_tpl->tpl_vars['payplug_switch']->value['oney']['checked']);?>
    <?php }?>

    <div class="paymentMethod -<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['paymentMethods']->value['oney']['name'],'htmlall','UTF-8' ));?>
">
        <?php $_smarty_tpl->_subTemplateRender('file:./../../atoms/switch/switch.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('switchClassName'=>'paymentMethod_switch -premium','switchDataName'=>'paymentMethod_oney','switchName'=>call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['paymentMethods']->value['oney']['name'],'htmlall','UTF-8' )),'switchChecked'=>$_smarty_tpl->tpl_vars['paymentMethods']->value['oney']['checked']), 0, false);
?>

        <div class="_text">
            <?php $_smarty_tpl->_subTemplateRender('file:./../../atoms/title/title.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('titleClassName'=>'_title','titleText'=>call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['paymentMethods']->value['oney']['title'],'htmlall','UTF-8' ))), 0, false);
?>

            <p <?php if ((isset($_smarty_tpl->tpl_vars['paymentMethods']->value['oney']['description'])) && $_smarty_tpl->tpl_vars['paymentMethods']->value['oney']['description'] != '') {?>
                class="-live _description" <?php }?>>
                <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['paymentMethods']->value['oney']['description'],'htmlall','UTF-8' ));?>

                <?php if ((isset($_smarty_tpl->tpl_vars['paymentMethods']->value['oney']['link'])) && $_smarty_tpl->tpl_vars['paymentMethods']->value['oney']['link']) {?>
                    <?php ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'paymentMethod.link','mod'=>'payplug'),$_smarty_tpl ) );
$_prefixVariable14 = ob_get_clean();
$_smarty_tpl->_subTemplateRender('file:./../../atoms/link/link.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('linkText'=>$_prefixVariable14,'linkHref'=>call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['paymentMethods']->value['oney']['link'],'htmlall','UTF-8' )),'linkTarget'=>'_blank','linkData'=>'data-link'), 0, false);
?>
                <?php }?>
            </p>

        </div>
        <div class="_additionnal">
                        <?php ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'paylater.block.oneyWithFeesTitle','mod'=>'payplug'),$_smarty_tpl ) );
$_prefixVariable15 = ob_get_clean();
ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'paylater.block.oneyWithFeesDescription','mod'=>'payplug'),$_smarty_tpl ) );
$_prefixVariable16 = ob_get_clean();
ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'paylater.block.oneyWithoutFeesTitle','mod'=>'payplug'),$_smarty_tpl ) );
$_prefixVariable17 = ob_get_clean();
ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'paylater.block.oneyWithoutFeesDescription','mod'=>'payplug'),$_smarty_tpl ) );
$_prefixVariable18 = ob_get_clean();
$_smarty_tpl->_assignInScope('items', array(array('value'=>'1','dataName'=>'oneyWithFees','text'=>$_prefixVariable15,'subText'=>$_prefixVariable16,'className'=>'_paylaterLabel'),array('value'=>'0','dataName'=>'oneyWithoutFees','text'=>$_prefixVariable17,'subText'=>$_prefixVariable18,'className'=>'_paylaterLabel')));?>

            <?php $_smarty_tpl->_subTemplateRender('file:./../../atoms/options/options.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('optionsItems'=>$_smarty_tpl->tpl_vars['items']->value,'optionsSelected'=>$_smarty_tpl->tpl_vars['payplug_switch']->value['oney_fees']['checked'],'optionsClassName'=>'_paylaterOptions','optionsName'=>$_smarty_tpl->tpl_vars['payplug_switch']->value['oney_fees']['name']), 0, false);
?>

                        <?php if ($_smarty_tpl->tpl_vars['module_name']->value == 'pspaylater') {?>
                <?php $_smarty_tpl->_subTemplateRender('file:./../../atoms/input/input.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('inputType'=>'hidden','inputValue'=>'1','inputName'=>$_smarty_tpl->tpl_vars['payplug_switch']->value['oney_optimized']['name']), 0, false);
?>
            <?php }?>

                        <?php $_smarty_tpl->_subTemplateRender('file:./paylater_advanced.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        </div>
    </div>
<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

<?php $_smarty_tpl->_assignInScope('paylaterBlock_className', 'paylaterBlock');?>

<?php ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'paylater.block.title','mod'=>'payplug'),$_smarty_tpl ) );
$_prefixVariable19 = ob_get_clean();
ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'paylater.block.description','mod'=>'payplug'),$_smarty_tpl ) );
$_prefixVariable20 = ob_get_clean();
$_smarty_tpl->_subTemplateRender('file:./../../atoms/block/block.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('blockTitle'=>$_prefixVariable19,'blockDescription'=>$_prefixVariable20,'blockContent'=>$_smarty_tpl->tpl_vars['paylaterBlock_content']->value,'blockData'=>'blockPaylater','blockDisabled'=>!$_smarty_tpl->tpl_vars['connected']->value || !$_smarty_tpl->tpl_vars['payplug_switch']->value['show']['checked'],'blockClassName'=>$_smarty_tpl->tpl_vars['paylaterBlock_className']->value), 0, false);
}
}
