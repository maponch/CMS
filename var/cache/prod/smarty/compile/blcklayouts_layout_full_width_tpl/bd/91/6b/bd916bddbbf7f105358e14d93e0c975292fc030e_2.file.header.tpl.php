<?php
/* Smarty version 3.1.43, created on 2022-12-12 11:27:52
  from 'C:\wamp64\www\prestashop\themes\blck\templates\checkout\_partials\header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_63970228c1bb79_08116297',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bd916bddbbf7f105358e14d93e0c975292fc030e' => 
    array (
      0 => 'C:\\wamp64\\www\\prestashop\\themes\\blck\\templates\\checkout\\_partials\\header.tpl',
      1 => 1670692123,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63970228c1bb79_08116297 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_193332814163970228c01fc1_99641289', 'header');
?>

<?php }
/* {block 'header_nav'} */
class Block_45474487663970228c03e53_46851924 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <div class="header-nav header-nav--checkout container d--flex-between u-a-i-c">
        <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['base_url'], ENT_QUOTES, 'UTF-8');?>
" class="header__logo header__logo--checkout">
          <img class="logo img-fluid" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['logo'], ENT_QUOTES, 'UTF-8');?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['name'], ENT_QUOTES, 'UTF-8');?>
 <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'logo','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
">
        </a>
        <div class="small">
          <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['widget'][0], array( array('name'=>"ps_contactinfo",'hook'=>"displayNav"),$_smarty_tpl ) );?>

        </div>
      </div>
  <?php
}
}
/* {/block 'header_nav'} */
/* {block 'header_top'} */
class Block_169963827063970228c18310_41525386 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <?php
}
}
/* {/block 'header_top'} */
/* {block 'header'} */
class Block_193332814163970228c01fc1_99641289 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header' => 
  array (
    0 => 'Block_193332814163970228c01fc1_99641289',
  ),
  'header_nav' => 
  array (
    0 => 'Block_45474487663970228c03e53_46851924',
  ),
  'header_top' => 
  array (
    0 => 'Block_169963827063970228c18310_41525386',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_45474487663970228c03e53_46851924', 'header_nav', $this->tplIndex);
?>

  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_169963827063970228c18310_41525386', 'header_top', $this->tplIndex);
?>

<?php
}
}
/* {/block 'header'} */
}
