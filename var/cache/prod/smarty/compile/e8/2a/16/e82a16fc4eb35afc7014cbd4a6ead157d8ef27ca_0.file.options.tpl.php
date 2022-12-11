<?php
/* Smarty version 3.1.43, created on 2022-12-11 20:16:48
  from 'C:\wamp64\www\prestashop\modules\payplug\views\templates\api\atoms\options\options.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_63962ca050f9c6_45279188',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e82a16fc4eb35afc7014cbd4a6ead157d8ef27ca' => 
    array (
      0 => 'C:\\wamp64\\www\\prestashop\\modules\\payplug\\views\\templates\\api\\atoms\\options\\options.tpl',
      1 => 1670786168,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63962ca050f9c6_45279188 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="payplugUIIOptions
    <?php if ((isset($_smarty_tpl->tpl_vars['optionsClassName']->value)) && $_smarty_tpl->tpl_vars['optionsClassName']->value) {?> <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['optionsClassName']->value,'htmlall','UTF-8' ));
}?>">
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['optionsItems']->value, 'optionsItem');
$_smarty_tpl->tpl_vars['optionsItem']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['optionsItem']->value) {
$_smarty_tpl->tpl_vars['optionsItem']->do_else = false;
?>
        <label class="<?php if ((isset($_smarty_tpl->tpl_vars['optionsItem']->value['className'])) && $_smarty_tpl->tpl_vars['optionsItem']->value['className']) {?> <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['optionsItem']->value['className'],'htmlall','UTF-8' ));
}
if ((isset($_smarty_tpl->tpl_vars['optionsItem']->value['disabled'])) && $_smarty_tpl->tpl_vars['optionsItem']->value['disabled']) {?> -disabled<?php }?>" <?php if ((isset($_smarty_tpl->tpl_vars['optionsItem']->value['dataName'])) && $_smarty_tpl->tpl_vars['optionsItem']->value['dataName']) {?> data-e2e-name="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['optionsItem']->value['dataName'],'htmlall','UTF-8' ));?>
"<?php }?>>
            <input
                    type="radio" name="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['optionsName']->value,'htmlall','UTF-8' ));?>
"
            value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['optionsItem']->value['value'],'htmlall','UTF-8' ));?>
"
                    <?php if ((isset($_smarty_tpl->tpl_vars['optionsSelected']->value)) && (isset($_smarty_tpl->tpl_vars['optionsItem']->value['value'])) && $_smarty_tpl->tpl_vars['optionsSelected']->value == $_smarty_tpl->tpl_vars['optionsItem']->value['value']) {?> checked="checked" <?php }?>
                    <?php if ((isset($_smarty_tpl->tpl_vars['optionsItem']->value['disabled'])) && $_smarty_tpl->tpl_vars['optionsItem']->value['disabled']) {?> disabled<?php }?>
                    data-notallowed="<?php if ((isset($_smarty_tpl->tpl_vars['optionsItem']->value['notallowed'])) && $_smarty_tpl->tpl_vars['optionsItem']->value['notallowed']) {
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['optionsItem']->value['notallowed'],'htmlall','UTF-8' ));
} else { ?>0<?php }?>">
            <span>
                <?php if ((isset($_smarty_tpl->tpl_vars['optionsItem']->value['text'])) && $_smarty_tpl->tpl_vars['optionsItem']->value['text']) {
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['optionsItem']->value['text'],'htmlall','UTF-8' ));
}?>
                <?php if ((isset($_smarty_tpl->tpl_vars['optionsItem']->value['subText'])) && $_smarty_tpl->tpl_vars['optionsItem']->value['subText']) {?><span><?php echo $_smarty_tpl->tpl_vars['optionsItem']->value['subText'];?>
</span><?php }?>
            </span>
        </label>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</div>
<?php }
}
