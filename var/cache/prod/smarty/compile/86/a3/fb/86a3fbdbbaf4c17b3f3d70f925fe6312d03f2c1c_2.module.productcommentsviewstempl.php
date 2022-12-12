<?php
/* Smarty version 3.1.43, created on 2022-12-12 11:26:45
  from 'module:productcommentsviewstempl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_639701e563abb1_33502792',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '86a3fbdbbaf4c17b3f3d70f925fe6312d03f2c1c' => 
    array (
      0 => 'module:productcommentsviewstempl',
      1 => 1670692123,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_639701e563abb1_33502792 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="product-comment-list-item" data-product-comment-id="@COMMENT_ID@" data-product-id="@PRODUCT_ID@">
  <div class="row">
  <div class="col-sm-3 comment-infos">
    <div class="grade-stars"></div>
    <div class="comment-date">
      @COMMENT_DATE@
    </div>
    <div class="comment-author">
      <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'By %1$s','sprintf'=>array('@CUSTOMER_NAME@'),'d'=>'Modules.Productcomments.Shop'),$_smarty_tpl ) );?>

    </div>
  </div>

  <div class="col-sm-9 comment-content">
    <p class="h4 comment__title">@COMMENT_TITLE@</p>
    <p>@COMMENT_COMMENT@</p>
    <div class="comment-buttons btn-group btn-group-sm">
      <?php if ($_smarty_tpl->tpl_vars['usefulness_enabled']->value) {?>
        <button role="button" class="useful-review btn btn-link">
          <i class="material-icons thumb_up">thumb_up</i>
          <span class="useful-review-value">@COMMENT_USEFUL_ADVICES@</span>
        </button>
        <button role="button" class="not-useful-review btn btn-link">
          <i class="material-icons thumb_down">thumb_down</i>
          <span class="not-useful-review-value">@COMMENT_NOT_USEFUL_ADVICES@</span>
        </button>
      <?php }?>
      <button role="button" class="report-abuse btn btn-link" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Report abuse','d'=>'Modules.Productcomments.Shop'),$_smarty_tpl ) );?>
">
        <i class="material-icons outlined_flag">flag</i>
      </button>
    </div>
  </div>
  </div>
</div>
<?php }
}
