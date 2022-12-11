<?php
/* Smarty version 3.1.43, created on 2022-12-11 20:16:47
  from 'C:\wamp64\www\prestashop\modules\payplug\views\templates\api\atoms\select\select.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_63962c9f9836a3_81301979',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c0206a18806ad941263c903d7f1cf3c9f374b67a' => 
    array (
      0 => 'C:\\wamp64\\www\\prestashop\\modules\\payplug\\views\\templates\\api\\atoms\\select\\select.tpl',
      1 => 1670786168,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63962c9f9836a3_81301979 (Smarty_Internal_Template $_smarty_tpl) {
if ((isset($_smarty_tpl->tpl_vars['selectOptions']->value)) && $_smarty_tpl->tpl_vars['selectOptions']->value) {?>
    <?php $_smarty_tpl->_assignInScope('defaultValue', false);?>

    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['selectOptions']->value, 'option');
$_smarty_tpl->tpl_vars['option']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['option']->value) {
$_smarty_tpl->tpl_vars['option']->do_else = false;
?>
        <?php if ((isset($_smarty_tpl->tpl_vars['option']->value['selected'])) && $_smarty_tpl->tpl_vars['option']->value['selected'] && !$_smarty_tpl->tpl_vars['defaultValue']->value) {?>
            <?php $_smarty_tpl->_assignInScope('defaultValue', $_smarty_tpl->tpl_vars['option']->value['key']);?>
        <?php }?>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

    <?php if (!$_smarty_tpl->tpl_vars['defaultValue']->value) {?>
        <?php $_smarty_tpl->_assignInScope('firstOption', reset($_smarty_tpl->tpl_vars['selectOptions']->value));?>
        <?php $_smarty_tpl->_assignInScope('defaultValue', $_smarty_tpl->tpl_vars['firstOption']->value['key']);?>
    <?php }?>

    <div class="payplugUISelect
        <?php if ((isset($_smarty_tpl->tpl_vars['selectDisabled']->value)) && $_smarty_tpl->tpl_vars['selectDisabled']->value) {?> -disabled<?php }?>
        <?php if ((isset($_smarty_tpl->tpl_vars['selectClassName']->value)) && $_smarty_tpl->tpl_vars['selectClassName']->value) {?> <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['selectClassName']->value,'htmlall','UTF-8' ));
}?>"
        <?php if ((isset($_smarty_tpl->tpl_vars['selectData']->value)) && $_smarty_tpl->tpl_vars['selectData']->value) {?> data-e2e-name="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['selectData']->value,'htmlall','UTF-8' ));?>
"<?php }?>>
        <div class="_current" <?php if (!(isset($_smarty_tpl->tpl_vars['selectDisabled']->value)) || !$_smarty_tpl->tpl_vars['selectDisabled']->value) {?> tabindex="1"<?php }?>>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['selectOptions']->value, 'option');
$_smarty_tpl->tpl_vars['option']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['option']->value) {
$_smarty_tpl->tpl_vars['option']->do_else = false;
?>
                <div class="_value">
                    <input
                            class="_input"
                            type="radio"
                            id="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['selectName']->value,'htmlall','UTF-8' ));?>
-<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['option']->value['key'],'htmlall','UTF-8' ));?>
"
                            value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['option']->value['key'],'htmlall','UTF-8' ));?>
"
                            name="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['selectName']->value,'htmlall','UTF-8' ));?>
"
                            data-e2e-name="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['selectName']->value,'htmlall','UTF-8' ));?>
-<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['option']->value['key'],'htmlall','UTF-8' ));?>
"
                            <?php if ($_smarty_tpl->tpl_vars['defaultValue']->value == $_smarty_tpl->tpl_vars['option']->value['key']) {?> checked="checked"<?php }?>>
                    <span class="_text"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['option']->value['value'],'htmlall','UTF-8' ));?>
</span>
                </div>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </div>
        <div class="_listWrapper<?php if ((isset($_smarty_tpl->tpl_vars['selectScrollbar']->value)) && $_smarty_tpl->tpl_vars['selectScrollbar']->value) {?> -scrollbar<?php }?>">
            <div class="_list">
                <ul>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['selectOptions']->value, 'option');
$_smarty_tpl->tpl_vars['option']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['option']->value) {
$_smarty_tpl->tpl_vars['option']->do_else = false;
?>
                        <li>
                            <label class="_option"
                                   for="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['selectName']->value,'htmlall','UTF-8' ));?>
-<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['option']->value['key'],'htmlall','UTF-8' ));?>
"
                                   aria-hidden="aria-hidden"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['option']->value['value'],'htmlall','UTF-8' ));?>
</label>
                        </li>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </ul>
            </div>
        </div>
    </div>
<?php }
}
}
