<?php
/* Smarty version 3.1.43, created on 2022-12-11 20:16:47
  from 'C:\wamp64\www\prestashop\modules\payplug\views\templates\api\atoms\block\block.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_63962c9fa8bc04_07989320',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9bb778069a3d94e56206da99c671b8915690bc02' => 
    array (
      0 => 'C:\\wamp64\\www\\prestashop\\modules\\payplug\\views\\templates\\api\\atoms\\block\\block.tpl',
      1 => 1670786168,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63962c9fa8bc04_07989320 (Smarty_Internal_Template $_smarty_tpl) {
?>
<section class="payplugUiBlock
    <?php if ((isset($_smarty_tpl->tpl_vars['blockClassName']->value)) && $_smarty_tpl->tpl_vars['blockClassName']->value) {?> <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['blockClassName']->value,'htmlall','UTF-8' ));
}?>
    <?php if ((isset($_smarty_tpl->tpl_vars['blockDisabled']->value)) && $_smarty_tpl->tpl_vars['blockDisabled']->value) {?> -disabled<?php }?>"
    <?php if ((isset($_smarty_tpl->tpl_vars['blockData']->value)) && $_smarty_tpl->tpl_vars['blockData']->value) {?> data-e2e-name="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['blockData']->value,'htmlall','UTF-8' ));?>
"<?php }?>>
    <?php if ((isset($_smarty_tpl->tpl_vars['blockTitle']->value)) && $_smarty_tpl->tpl_vars['blockTitle']->value) {?>
        <h2 class="_title">
            <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['blockTitle']->value,'htmlall','UTF-8' ));?>

        </h2>
    <?php }?>
    <?php if ((isset($_smarty_tpl->tpl_vars['blockDescription']->value)) && $_smarty_tpl->tpl_vars['blockDescription']->value) {?>
        <p class="_description">
            <?php echo $_smarty_tpl->tpl_vars['blockDescription']->value;?>

        </p>
    <?php }?>
    <div class="_content">
        <?php echo $_smarty_tpl->tpl_vars['blockContent']->value;?>

    </div>
</section>


<?php }
}
