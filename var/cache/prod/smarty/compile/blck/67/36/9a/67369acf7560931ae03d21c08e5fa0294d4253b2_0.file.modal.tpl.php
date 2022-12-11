<?php
/* Smarty version 3.1.43, created on 2022-12-11 20:20:13
  from 'C:\wamp64\www\prestashop\modules\payplug\views\templates\api\atoms\modal\modal.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_63962d6de36ad7_66080963',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '67369acf7560931ae03d21c08e5fa0294d4253b2' => 
    array (
      0 => 'C:\\wamp64\\www\\prestashop\\modules\\payplug\\views\\templates\\api\\atoms\\modal\\modal.tpl',
      1 => 1670786168,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./../icon/icon.tpl' => 1,
  ),
),false)) {
function content_63962d6de36ad7_66080963 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="payplugUIModal">
    <input type="checkbox" name="modalTriggered" id="modalTriggered" />
    <label class="_overlay" for="modalTriggered"></label>
    <div class="_modal
        <?php if (!(isset($_smarty_tpl->tpl_vars['modalTitle']->value)) || !$_smarty_tpl->tpl_vars['modalTitle']->value) {?> -noTitle<?php }?>
        <?php if ((isset($_smarty_tpl->tpl_vars['modalClassName']->value)) && $_smarty_tpl->tpl_vars['modalClassName']->value) {?> <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['modalClassName']->value,'htmlall','UTF-8' ));
}?>"
        <?php if ((isset($_smarty_tpl->tpl_vars['modalData']->value)) && $_smarty_tpl->tpl_vars['modalData']->value) {?> data-e2e-name="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['modalData']->value,'htmlall','UTF-8' ));?>
"<?php }?>>

        <label for="modalTriggered" class="_close" >
            <?php $_smarty_tpl->_subTemplateRender('file:./../icon/icon.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('iconName'=>'close'), 0, false);
?>
        </label>

        <?php if ((isset($_smarty_tpl->tpl_vars['modalTitle']->value)) && $_smarty_tpl->tpl_vars['modalTitle']->value) {?>
            <div class="_header">
                <?php if ((isset($_smarty_tpl->tpl_vars['modalTitle']->value)) && $_smarty_tpl->tpl_vars['modalTitle']->value) {?> <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['modalTitle']->value,'htmlall','UTF-8' ));
}?>
            </div>
        <?php }?>

        <div class="_body">
            <?php echo $_smarty_tpl->tpl_vars['modalContent']->value;?>

        </div>
    </div>
</div><?php }
}
