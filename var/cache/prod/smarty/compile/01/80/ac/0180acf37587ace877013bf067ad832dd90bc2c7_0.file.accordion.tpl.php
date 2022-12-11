<?php
/* Smarty version 3.1.43, created on 2022-12-11 20:16:48
  from 'C:\wamp64\www\prestashop\modules\payplug\views\templates\api\atoms\accordion\accordion.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_63962ca0843a03_27582880',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0180acf37587ace877013bf067ad832dd90bc2c7' => 
    array (
      0 => 'C:\\wamp64\\www\\prestashop\\modules\\payplug\\views\\templates\\api\\atoms\\accordion\\accordion.tpl',
      1 => 1670786168,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63962ca0843a03_27582880 (Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="payplugUIAccordion
    <?php if ((isset($_smarty_tpl->tpl_vars['accordionClassName']->value)) && $_smarty_tpl->tpl_vars['accordionClassName']->value) {?> <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['accordionClassName']->value,'htmlall','UTF-8' ));
}?>"
    <?php if ((isset($_smarty_tpl->tpl_vars['accordionData']->value)) && $_smarty_tpl->tpl_vars['accordionData']->value) {?> data-e2e-name="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['accordionData']->value,'htmlall','UTF-8' ));?>
"<?php }?>>
    <input type="checkbox" id="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['accordionIdentifier']->value,'htmlall','UTF-8' ));?>
"/>
        <label for="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['accordionIdentifier']->value,'htmlall','UTF-8' ));?>
">
            <?php if ((isset($_smarty_tpl->tpl_vars['accordionLabel']->value)) && $_smarty_tpl->tpl_vars['accordionLabel']->value) {?>
                <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['accordionLabel']->value,'htmlall','UTF-8' ));?>

            <?php }?>
        </label>

    <div class="payplugUIAccordion_contentWrapper">
        <div class="payplugUIAccordion_content">
            <?php echo $_smarty_tpl->tpl_vars['accordionContent']->value;?>

        </div>
    </div>
</div><?php }
}
