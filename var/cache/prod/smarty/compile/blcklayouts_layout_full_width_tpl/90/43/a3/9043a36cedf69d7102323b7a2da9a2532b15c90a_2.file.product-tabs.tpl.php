<?php
/* Smarty version 3.1.43, created on 2022-12-12 11:26:44
  from 'C:\wamp64\www\prestashop\themes\blck\templates\catalog\_partials\product-tabs.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_639701e465cb72_84367676',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9043a36cedf69d7102323b7a2da9a2532b15c90a' => 
    array (
      0 => 'C:\\wamp64\\www\\prestashop\\themes\\blck\\templates\\catalog\\_partials\\product-tabs.tpl',
      1 => 1670692123,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:catalog/_partials/product-details.tpl' => 1,
  ),
),false)) {
function content_639701e465cb72_84367676 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
    <div class="tabs product-tabs card card-block">
        <ul class="nav nav-tabs" role="tablist">
            <?php if ($_smarty_tpl->tpl_vars['product']->value['description']) {?>
                <li class="nav-item">
                    <a
                            class="nav-link<?php if ($_smarty_tpl->tpl_vars['product']->value['description']) {?> active<?php }?>"
                            data-toggle="tab"
                            href="#description"
                            role="tab"
                            aria-controls="description"
                            <?php if ($_smarty_tpl->tpl_vars['product']->value['description']) {?> aria-selected="true"<?php }?>><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Description','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
</a>
                </li>
            <?php }?>
            <li class="nav-item">
                <a
                        class="nav-link<?php if (!$_smarty_tpl->tpl_vars['product']->value['description']) {?> active<?php }?>"
                        data-toggle="tab"
                        href="#product-details"
                        role="tab"
                        aria-controls="product-details"
                        <?php if (!$_smarty_tpl->tpl_vars['product']->value['description']) {?> aria-selected="true"<?php }?>><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Product Details','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
</a>
            </li>
            <?php if ($_smarty_tpl->tpl_vars['product']->value['attachments']) {?>
                <li class="nav-item">
                    <a
                            class="nav-link"
                            data-toggle="tab"
                            href="#attachments"
                            role="tab"
                            aria-controls="attachments"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Attachments','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
</a>
                </li>
            <?php }?>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['product']->value['extraContent'], 'extra', false, 'extraKey');
$_smarty_tpl->tpl_vars['extra']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['extraKey']->value => $_smarty_tpl->tpl_vars['extra']->value) {
$_smarty_tpl->tpl_vars['extra']->do_else = false;
?>
                <li class="nav-item">
                    <a
                            class="nav-link"
                            data-toggle="tab"
                            href="#extra-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['extraKey']->value, ENT_QUOTES, 'UTF-8');?>
"
                            role="tab"
                            aria-controls="extra-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['extraKey']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['extra']->value['title'], ENT_QUOTES, 'UTF-8');?>
</a>
                </li>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </ul>

        <div class="tab-content" id="tab-content">
            <div class="tab-pane fade<?php if ($_smarty_tpl->tpl_vars['product']->value['description']) {?> show active<?php }?>" id="description" role="tabpanel">
                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1385205249639701e4612b13_07636443', 'product_description');
?>

            </div>

            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1129593759639701e4618aa6_96702162', 'product_details');
?>


            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1255089472639701e461d970_75396422', 'product_attachments');
?>


            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['product']->value['extraContent'], 'extra', false, 'extraKey');
$_smarty_tpl->tpl_vars['extra']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['extraKey']->value => $_smarty_tpl->tpl_vars['extra']->value) {
$_smarty_tpl->tpl_vars['extra']->do_else = false;
?>
            <div class="tab-pane fade <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['extra']->value['attr']['class'], ENT_QUOTES, 'UTF-8');?>
" id="extra-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['extraKey']->value, ENT_QUOTES, 'UTF-8');?>
" role="tabpanel" <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['extra']->value['attr'], 'val', false, 'key');
$_smarty_tpl->tpl_vars['val']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['val']->value) {
$_smarty_tpl->tpl_vars['val']->do_else = false;
?> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['key']->value, ENT_QUOTES, 'UTF-8');?>
="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['val']->value, ENT_QUOTES, 'UTF-8');?>
"<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>>
            <?php echo $_smarty_tpl->tpl_vars['extra']->value['content'];?>

        </div>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </div>
    </div><?php }
/* {block 'product_description'} */
class Block_1385205249639701e4612b13_07636443 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_description' => 
  array (
    0 => 'Block_1385205249639701e4612b13_07636443',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                    <div class="product-description"><?php echo $_smarty_tpl->tpl_vars['product']->value['description'];?>
</div>
                <?php
}
}
/* {/block 'product_description'} */
/* {block 'product_details'} */
class Block_1129593759639701e4618aa6_96702162 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_details' => 
  array (
    0 => 'Block_1129593759639701e4618aa6_96702162',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/product-details.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
            <?php
}
}
/* {/block 'product_details'} */
/* {block 'product_attachments'} */
class Block_1255089472639701e461d970_75396422 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_attachments' => 
  array (
    0 => 'Block_1255089472639701e461d970_75396422',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                <?php if ($_smarty_tpl->tpl_vars['product']->value['attachments']) {?>
                    <div class="tab-pane fade" id="attachments" role="tabpanel">
                        <section class="product-attachments">
                            <p class="h4 product__download"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Download','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
</p>
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['product']->value['attachments'], 'attachment');
$_smarty_tpl->tpl_vars['attachment']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['attachment']->value) {
$_smarty_tpl->tpl_vars['attachment']->do_else = false;
?>
                                <div class="attachment">
                                    <a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('entity'=>'attachment','params'=>array('id_attachment'=>$_smarty_tpl->tpl_vars['attachment']->value['id_attachment'])),$_smarty_tpl ) );?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['attachment']->value['name'], ENT_QUOTES, 'UTF-8');?>
</a>
                                    <p class="small"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['attachment']->value['description'], ENT_QUOTES, 'UTF-8');?>
</p>
                                    <a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('entity'=>'attachment','params'=>array('id_attachment'=>$_smarty_tpl->tpl_vars['attachment']->value['id_attachment'])),$_smarty_tpl ) );?>
">
                                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Download','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
 (<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['attachment']->value['file_size_formatted'], ENT_QUOTES, 'UTF-8');?>
)
                                    </a>
                                </div>
                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        </section>
                    </div>
                <?php }?>
            <?php
}
}
/* {/block 'product_attachments'} */
}
