<?php
/* Smarty version 3.1.43, created on 2022-12-11 20:25:31
  from 'C:\wamp64\www\prestashop\modules\ps_checkout\views\templates\hook\adminAfterHeader\promotionBlock.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_63962eab0d91f5_36115740',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f4c7441c14a8931f0a0de022ebd4fe44e4d8c957' => 
    array (
      0 => 'C:\\wamp64\\www\\prestashop\\modules\\ps_checkout\\views\\templates\\hook\\adminAfterHeader\\promotionBlock.tpl',
      1 => 1669024200,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63962eab0d91f5_36115740 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="container">
    <div class="row">
        <div class="col">
            <div class="card">
                <h3 class="card-header">
                    <i class="material-icons">extension</i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'One module, all payments methods.','mod'=>'ps_checkout'),$_smarty_tpl ) );?>

                </h3>
                <div class="card-block">
                    <div class="module-item-list">
                        <div class="row module-item-wrapper-list py-3">
                            <div class="col-12 col-sm-2 col-md-2 col-lg-3">
                                <div class="img m-auto">
                                </div>
                            </div>
                            <div class="row col-12 col-sm-6 col-md-7 col-lg-7 pl-0">
                                <div class="col-12 col-sm-12 col-md-12 col-lg-8 pl-0">
                                    <ul class="text-muted">
                                        <li class="mb-1"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Offer the widest range of payment methods: cards, PayPal, etc.','mod'=>'ps_checkout'),$_smarty_tpl ) );?>
</li>
                                        <li class="mb-1"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Benefit from all PayPal expertise and advantages','mod'=>'ps_checkout'),$_smarty_tpl ) );?>
</li>
                                        <li><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Give access to relevant local payment methods for customers around the globe','mod'=>'ps_checkout'),$_smarty_tpl ) );?>
</li>
                                    </ul>
                                </div>
                                <div class="col-12 col-sm-12 col-md-12 col-lg-4 pl-0">
                                    <label class="text-muted">
                                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Including:','mod'=>'ps_checkout'),$_smarty_tpl ) );?>

                                    </label>
                                    <div>
                                        <img class="payment-icon" src="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['imgPath']->value,'htmlall','UTF-8' ));?>
paypal.jpg" alt="">
                                        <img class="payment-icon" src="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['imgPath']->value,'htmlall','UTF-8' ));?>
visa.jpg" alt="">
                                        <img class="payment-icon" src="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['imgPath']->value,'htmlall','UTF-8' ));?>
mastercard.jpg" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-sm-4 col-md-3 col-lg-2 mb-3 m-auto">
                                <div class="text-xs-center">
                                    <a href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['configureLink']->value,'htmlall','UTF-8' ));?>
" class="btn btn-primary-reverse btn-outline-primary light-button">
                                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Configure','mod'=>'ps_checkout'),$_smarty_tpl ) );?>

                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php }
}
