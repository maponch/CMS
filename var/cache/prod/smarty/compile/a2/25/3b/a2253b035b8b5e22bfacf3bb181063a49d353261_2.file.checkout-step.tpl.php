<?php
/* Smarty version 3.1.43, created on 2022-12-12 11:27:53
  from 'C:\wamp64\www\prestashop\themes\blck\templates\checkout\_partials\steps\checkout-step.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_6397022919c732_19384617',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a2253b035b8b5e22bfacf3bb181063a49d353261' => 
    array (
      0 => 'C:\\wamp64\\www\\prestashop\\themes\\blck\\templates\\checkout\\_partials\\steps\\checkout-step.tpl',
      1 => 1670692123,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6397022919c732_19384617 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13134104226397022917b157_42522032', 'step');
?>

<?php }
/* {block 'step_content'} */
class Block_134348795663970229197db9_30732714 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
DUMMY STEP CONTENT<?php
}
}
/* {/block 'step_content'} */
/* {block 'step'} */
class Block_13134104226397022917b157_42522032 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'step' => 
  array (
    0 => 'Block_13134104226397022917b157_42522032',
  ),
  'step_content' => 
  array (
    0 => 'Block_134348795663970229197db9_30732714',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <section  id    = "<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['identifier']->value, ENT_QUOTES, 'UTF-8');?>
"
            class = "<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'classnames' ][ 0 ], array( array('checkout-step'=>true,'-current'=>$_smarty_tpl->tpl_vars['step_is_current']->value,'-reachable'=>$_smarty_tpl->tpl_vars['step_is_reachable']->value,'-complete'=>$_smarty_tpl->tpl_vars['step_is_complete']->value,'js-current-step'=>$_smarty_tpl->tpl_vars['step_is_current']->value) )), ENT_QUOTES, 'UTF-8');?>
 card"
  >
    <div class="card-header js-checkout-step-header" id="heading-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['identifier']->value, ENT_QUOTES, 'UTF-8');?>
" data-identifier="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['identifier']->value, ENT_QUOTES, 'UTF-8');?>
">
    <h1 class="step-title h3">
      <i class="material-icons rtl-no-flip done text-success">&#xE876;</i>
      <span class="step-number"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['position']->value, ENT_QUOTES, 'UTF-8');?>
</span>
      <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['title']->value, ENT_QUOTES, 'UTF-8');?>


      <?php if ($_smarty_tpl->tpl_vars['step_is_reachable']->value) {?>
      <button class="step-edit text-muted btn btn-sm btn-link float-right py-0" data-toggle="collapse" data-target="#content-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['identifier']->value, ENT_QUOTES, 'UTF-8');?>
" aria-expanded="<?php if ($_smarty_tpl->tpl_vars['step_is_current']->value) {?>true<?php } else { ?>false<?php }?>" aria-controls="content-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['identifier']->value, ENT_QUOTES, 'UTF-8');?>
">
        <i class="material-icons edit small">mode_edit</i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Edit','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>

      </button>
      <?php }?>
    </h1>
    </div>
    <div id="content-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['identifier']->value, ENT_QUOTES, 'UTF-8');?>
" class="collapse<?php if ($_smarty_tpl->tpl_vars['step_is_current']->value) {?> show<?php }?>" aria-labelledby="heading-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['identifier']->value, ENT_QUOTES, 'UTF-8');?>
" data-parent="#js-checkout-process">
      <div class="content card-body">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_134348795663970229197db9_30732714', 'step_content', $this->tplIndex);
?>

      </div>
    </div>
  </section>
<?php
}
}
/* {/block 'step'} */
}
