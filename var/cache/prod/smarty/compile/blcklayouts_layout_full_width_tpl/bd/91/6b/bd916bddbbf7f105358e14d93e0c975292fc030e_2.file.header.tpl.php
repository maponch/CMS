<?php
/* Smarty version 3.1.43, created on 2022-12-11 20:23:34
  from 'C:\wamp64\www\prestashop\themes\blck\templates\checkout\_partials\header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_63962e36caa547_14124217',
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
function content_63962e36caa547_14124217 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6763132063962e36ca0f85_55008664', 'header');
?>

<?php }
/* {block 'header_nav'} */
class Block_127498299563962e36ca1b65_31579086 extends Smarty_Internal_Block
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
class Block_117537987663962e36ca9090_86155170 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <?php
}
}
/* {/block 'header_top'} */
/* {block 'header'} */
class Block_6763132063962e36ca0f85_55008664 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header' => 
  array (
    0 => 'Block_6763132063962e36ca0f85_55008664',
  ),
  'header_nav' => 
  array (
    0 => 'Block_127498299563962e36ca1b65_31579086',
  ),
  'header_top' => 
  array (
    0 => 'Block_117537987663962e36ca9090_86155170',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_127498299563962e36ca1b65_31579086', 'header_nav', $this->tplIndex);
?>

  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_117537987663962e36ca9090_86155170', 'header_top', $this->tplIndex);
?>

<?php
}
}
/* {/block 'header'} */
}
