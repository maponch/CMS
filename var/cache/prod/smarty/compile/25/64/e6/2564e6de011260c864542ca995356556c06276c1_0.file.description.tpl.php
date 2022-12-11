<?php
/* Smarty version 3.1.43, created on 2022-12-11 20:16:47
  from 'C:\wamp64\www\prestashop\modules\payplug\views\templates\api\molecules\description.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_63962c9f812720_54909566',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2564e6de011260c864542ca995356556c06276c1' => 
    array (
      0 => 'C:\\wamp64\\www\\prestashop\\modules\\payplug\\views\\templates\\api\\molecules\\description.tpl',
      1 => 1670786168,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./../../../img/svg/logo-".$_prefixVariable1.".svg' => 1,
    'file:./../atoms/paragraph/paragraph.tpl' => 3,
    'file:./../atoms/select/select.tpl' => 1,
    'file:./../atoms/block/block.tpl' => 1,
  ),
),false)) {
function content_63962c9f812720_54909566 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', "descriptionBlock_content", null);?>
    <div class="_header">
        <div class="_logo">
            <?php ob_start();
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['module_name']->value,'htmlall','UTF-8' ));
$_prefixVariable1=ob_get_clean();
$_smarty_tpl->_subTemplateRender("file:./../../../img/svg/logo-".$_prefixVariable1.".svg", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
        </div>
        <div class="_version">
            <?php $_smarty_tpl->_assignInScope('description_descriptionVersionClassName', '_descriptionVersion');?>
            <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', "description_descriptionVersion", null);?>
                V <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['pp_version']->value,'htmlall','UTF-8' ));?>

            <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
            <?php $_smarty_tpl->_subTemplateRender('file:./../atoms/paragraph/paragraph.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('paragraphText'=>$_smarty_tpl->tpl_vars['description_descriptionVersion']->value,'paragraphClassName'=>$_smarty_tpl->tpl_vars['description_descriptionVersionClassName']->value), 0, false);
?>

            <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', "description_show_hidden", null);
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'description.show.hidden','mod'=>'payplug'),$_smarty_tpl ) );
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
            <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', "description_show_visible", null);
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'description.show.visible','mod'=>'payplug'),$_smarty_tpl ) );
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
            <?php $_smarty_tpl->_assignInScope('descriptionShow', array(array('key'=>'0','value'=>$_smarty_tpl->tpl_vars['description_show_hidden']->value,'selected'=>!$_smarty_tpl->tpl_vars['payplug_switch']->value['show']['checked']),array('key'=>'1','value'=>$_smarty_tpl->tpl_vars['description_show_visible']->value,'selected'=>$_smarty_tpl->tpl_vars['payplug_switch']->value['show']['checked'])));?>
            <?php $_smarty_tpl->_subTemplateRender('file:./../atoms/select/select.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('selectClassName'=>'_show','selectName'=>call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['payplug_switch']->value['show']['name'],'htmlall','UTF-8' )),'selectOptions'=>$_smarty_tpl->tpl_vars['descriptionShow']->value,'selectDisabled'=>!$_smarty_tpl->tpl_vars['ps_account']->value || !$_smarty_tpl->tpl_vars['connected']->value), 0, false);
?>
        </div>
    </div>
    <?php $_smarty_tpl->_assignInScope('description_descriptionTitleClassName', '_descriptionTitle');?>
    <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', "description_descriptionTitle", null);?>
        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'description.block.title','mod'=>'payplug'),$_smarty_tpl ) );?>

    <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
    <?php $_smarty_tpl->_subTemplateRender('file:./../atoms/paragraph/paragraph.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('paragraphText'=>$_smarty_tpl->tpl_vars['description_descriptionTitle']->value,'paragraphClassName'=>$_smarty_tpl->tpl_vars['description_descriptionTitleClassName']->value), 0, true);
?>

    <?php $_smarty_tpl->_assignInScope('description_descriptionTextClassName', '_descriptionText');?>
    <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', "description_descriptionText", null);?>
        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'description.block.text','mod'=>'payplug'),$_smarty_tpl ) );?>

    <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
    <?php $_smarty_tpl->_subTemplateRender('file:./../atoms/paragraph/paragraph.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('paragraphText'=>$_smarty_tpl->tpl_vars['description_descriptionText']->value,'paragraphClassName'=>$_smarty_tpl->tpl_vars['description_descriptionTextClassName']->value), 0, true);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

<?php $_smarty_tpl->_assignInScope('descriptionBlock_className', 'descriptionBlock');?>

<?php $_smarty_tpl->_subTemplateRender('file:./../atoms/block/block.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('blockContent'=>$_smarty_tpl->tpl_vars['descriptionBlock_content']->value,'blockData'=>'blockDescription','blockClassName'=>$_smarty_tpl->tpl_vars['descriptionBlock_className']->value), 0, false);
}
}
