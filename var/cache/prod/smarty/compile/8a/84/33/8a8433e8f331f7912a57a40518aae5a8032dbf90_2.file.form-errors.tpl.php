<?php
/* Smarty version 3.1.43, created on 2022-12-11 20:23:35
  from 'C:\wamp64\www\prestashop\themes\blck\templates\_partials\form-errors.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_63962e37953ae2_62170896',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8a8433e8f331f7912a57a40518aae5a8032dbf90' => 
    array (
      0 => 'C:\\wamp64\\www\\prestashop\\themes\\blck\\templates\\_partials\\form-errors.tpl',
      1 => 1670692123,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63962e37953ae2_62170896 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
if (count($_smarty_tpl->tpl_vars['errors']->value)) {?>
    <div class="<?php if ((isset($_smarty_tpl->tpl_vars['label']->value))) {?>invalid-feedback<?php } else { ?>mb-3<?php }?>">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_97205191663962e3794e238_68720631', 'form_errors');
?>

    </div>
    <?php } else { ?>
    <div class="invalid-feedback js-invalid-feedback-browser"></div>
<?php }
}
/* {block 'form_errors'} */
class Block_97205191663962e3794e238_68720631 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'form_errors' => 
  array (
    0 => 'Block_97205191663962e3794e238_68720631',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <ul<?php if (!(isset($_smarty_tpl->tpl_vars['label']->value))) {?> class="ps-alert-error alert alert-danger"<?php }?>>
                <li class="js-invalid-feedback-browser"></li>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['errors']->value, 'error');
$_smarty_tpl->tpl_vars['error']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['error']->value) {
$_smarty_tpl->tpl_vars['error']->do_else = false;
?>
                    <li><?php echo nl2br($_smarty_tpl->tpl_vars['error']->value);?>
</li>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </ul>
        <?php
}
}
/* {/block 'form_errors'} */
}
