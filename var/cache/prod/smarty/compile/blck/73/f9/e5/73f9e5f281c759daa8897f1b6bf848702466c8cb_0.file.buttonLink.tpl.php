<?php
/* Smarty version 3.1.43, created on 2022-12-11 20:21:35
  from 'C:\wamp64\www\prestashop\modules\payplug\views\templates\api\atoms\buttonLink\buttonLink.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_63962dbf155ad7_31729187',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '73f9e5f281c759daa8897f1b6bf848702466c8cb' => 
    array (
      0 => 'C:\\wamp64\\www\\prestashop\\modules\\payplug\\views\\templates\\api\\atoms\\buttonLink\\buttonLink.tpl',
      1 => 1670786168,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./../icon/icon.tpl' => 1,
  ),
),false)) {
function content_63962dbf155ad7_31729187 (Smarty_Internal_Template $_smarty_tpl) {
?>
<a href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['buttonLinkHref']->value,'htmlall','UTF-8' ));?>
"
   title="<?php if ((isset($_smarty_tpl->tpl_vars['buttonLinkTitle']->value)) && $_smarty_tpl->tpl_vars['buttonLinkTitle']->value) {
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['buttonLinkTitle']->value,'htmlall','UTF-8' ));
} else {
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['buttonLinkText']->value,'htmlall','UTF-8' ));
}?>"
   target="<?php if ((isset($_smarty_tpl->tpl_vars['buttonLinkTarget']->value)) && $_smarty_tpl->tpl_vars['buttonLinkTarget']->value) {
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['buttonLinkTarget']->value,'htmlall','UTF-8' ));
} else { ?>_blank<?php }?>"
    <?php if ((isset($_smarty_tpl->tpl_vars['buttonLinkData']->value)) && $_smarty_tpl->tpl_vars['buttonLinkData']->value) {?> data-e2e-name="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['buttonLinkData']->value,'htmlall','UTF-8' ));?>
"<?php }?>
    class="payplugUIButtonLink
        <?php if ((isset($_smarty_tpl->tpl_vars['buttonLinkClassName']->value)) && $_smarty_tpl->tpl_vars['buttonLinkClassName']->value) {?> <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['buttonLinkClassName']->value,'htmlall','UTF-8' ));
}?>
        <?php if ((isset($_smarty_tpl->tpl_vars['buttonLinkStyle']->value)) && $_smarty_tpl->tpl_vars['buttonLinkStyle']->value) {?> -<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['buttonLinkStyle']->value,'htmlall','UTF-8' ));
}?>
        <?php if ((isset($_smarty_tpl->tpl_vars['buttonLinkIcon']->value)) && $_smarty_tpl->tpl_vars['buttonLinkIcon']->value) {?> -icon<?php }?>
        <?php if ((isset($_smarty_tpl->tpl_vars['buttonLinkDisabled']->value)) && $_smarty_tpl->tpl_vars['buttonLinkDisabled']->value) {?> -disabled<?php }?>"
        <?php if ((isset($_smarty_tpl->tpl_vars['buttonLinkDisabled']->value)) && $_smarty_tpl->tpl_vars['buttonLinkDisabled']->value) {?> disabled="disabled"<?php }?>>
    <?php if ((isset($_smarty_tpl->tpl_vars['buttonLinkIcon']->value)) && $_smarty_tpl->tpl_vars['buttonLinkIcon']->value) {?>
        <?php $_smarty_tpl->_subTemplateRender('file:./../icon/icon.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('iconName'=>$_smarty_tpl->tpl_vars['buttonLinkIcon']->value), 0, false);
?>
    <?php }?> <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['buttonLinkText']->value,'htmlall','UTF-8' ));?>

</a>
<?php }
}
