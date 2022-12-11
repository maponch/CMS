<?php
/* Smarty version 3.1.43, created on 2022-12-11 20:21:35
  from 'C:\wamp64\www\prestashop\modules\payplug\views\templates\api\atoms\link\link.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_63962dbf298327_33745715',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bf1b83b83793089de6dbbc7fbb49903590a9fefe' => 
    array (
      0 => 'C:\\wamp64\\www\\prestashop\\modules\\payplug\\views\\templates\\api\\atoms\\link\\link.tpl',
      1 => 1670786168,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63962dbf298327_33745715 (Smarty_Internal_Template $_smarty_tpl) {
?>
<a class="payplugUILink
    <?php if ((isset($_smarty_tpl->tpl_vars['linkClassName']->value)) && $_smarty_tpl->tpl_vars['linkClassName']->value) {?> <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['linkClassName']->value,'htmlall','UTF-8' ));
}?>
    <?php if ((isset($_smarty_tpl->tpl_vars['linkDisabled']->value)) && $_smarty_tpl->tpl_vars['linkDisabled']->value) {?> -disabled<?php }?>"
    <?php if ((isset($_smarty_tpl->tpl_vars['linkHref']->value)) && $_smarty_tpl->tpl_vars['linkHref']->value) {?> href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['linkHref']->value,'htmlall','UTF-8' ));?>
"<?php }?>
    target="<?php if ((isset($_smarty_tpl->tpl_vars['linkTarget']->value)) && $_smarty_tpl->tpl_vars['linkTarget']->value) {
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['linkTarget']->value,'htmlall','UTF-8' ));
} else { ?>_blank<?php }?>"
    title="<?php echo $_smarty_tpl->tpl_vars['linkText']->value;?>
"
    <?php if ((isset($_smarty_tpl->tpl_vars['linkData']->value)) && $_smarty_tpl->tpl_vars['linkData']->value) {?> data-e2e-name="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['linkData']->value,'htmlall','UTF-8' ));?>
"<?php }
if ((isset($_smarty_tpl->tpl_vars['linkDisabled']->value)) && $_smarty_tpl->tpl_vars['linkDisabled']->value) {?> disabled="disabled"<?php }?>>
    <?php echo $_smarty_tpl->tpl_vars['linkText']->value;?>

<?php if (!(isset($_smarty_tpl->tpl_vars['linkNoTag']->value)) || !$_smarty_tpl->tpl_vars['linkNoTag']->value) {?>
    </a>
<?php }
}
}
