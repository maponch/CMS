<?php
/* Smarty version 3.1.43, created on 2022-12-11 20:24:14
  from 'C:\wamp64\www\prestashop\themes\blck\templates\checkout\order-confirmation.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_63962e5e935ef3_97574611',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e7cacefd87a412991e204ab67f5da183540c25cd' => 
    array (
      0 => 'C:\\wamp64\\www\\prestashop\\themes\\blck\\templates\\checkout\\order-confirmation.tpl',
      1 => 1670692123,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:checkout/_partials/order-confirmation-table.tpl' => 1,
  ),
),false)) {
function content_63962e5e935ef3_97574611 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_137750217263962e5e909658_64034828', 'pageWrapperClass');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_146654311463962e5e90ac85_49455447', 'page_content_container');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_114250131363962e5e9183c8_32245236', 'page_content_container');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'page.tpl');
}
/* {block 'pageWrapperClass'} */
class Block_137750217263962e5e909658_64034828 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'pageWrapperClass' => 
  array (
    0 => 'Block_137750217263962e5e909658_64034828',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'pageWrapperClass'} */
/* {block 'order_confirmation_header'} */
class Block_31804983063962e5e90b726_98497186 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

              <h3 class="h1 card-title">
                <i class="material-icons rtl-no-flip done">&#xE876;</i><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Your order is confirmed','d'=>'Shop.Theme.Checkout'),$_smarty_tpl ) );?>

              </h3>
            <?php
}
}
/* {/block 'order_confirmation_header'} */
/* {block 'hook_order_confirmation'} */
class Block_184869641763962e5e915911_38659968 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

              <?php echo $_smarty_tpl->tpl_vars['HOOK_ORDER_CONFIRMATION']->value;?>

            <?php
}
}
/* {/block 'hook_order_confirmation'} */
/* {block 'page_content_container'} */
class Block_146654311463962e5e90ac85_49455447 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content_container' => 
  array (
    0 => 'Block_146654311463962e5e90ac85_49455447',
  ),
  'order_confirmation_header' => 
  array (
    0 => 'Block_31804983063962e5e90b726_98497186',
  ),
  'hook_order_confirmation' => 
  array (
    0 => 'Block_184869641763962e5e915911_38659968',
  ),
);
public $prepend = 'true';
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <section id="content-hook_order_confirmation" class="card mb-3 text-white bg-success">
      <div class="card-body">


            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_31804983063962e5e90b726_98497186', 'order_confirmation_header', $this->tplIndex);
?>


            <p>
              <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'An email has been sent to your mail address %email%.','d'=>'Shop.Theme.Checkout','sprintf'=>array('%email%'=>$_smarty_tpl->tpl_vars['customer']->value['email'])),$_smarty_tpl ) );?>

              <?php if ($_smarty_tpl->tpl_vars['order']->value['details']['invoice_url']) {?>
                                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'You can also [1]download your invoice[/1]','d'=>'Shop.Theme.Checkout','sprintf'=>array('[1]'=>"<a href='".((string)$_smarty_tpl->tpl_vars['order']->value['details']['invoice_url'])."'>",'[/1]'=>"</a>")),$_smarty_tpl ) );?>

              <?php }?>
            </p>

            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_184869641763962e5e915911_38659968', 'hook_order_confirmation', $this->tplIndex);
?>



      </div>
    </section>
<?php
}
}
/* {/block 'page_content_container'} */
/* {block 'order_confirmation_table'} */
class Block_150679682963962e5e918e35_96086449 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <div>
      <?php $_smarty_tpl->_subTemplateRender('file:checkout/_partials/order-confirmation-table.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('products'=>$_smarty_tpl->tpl_vars['order']->value['products'],'subtotals'=>$_smarty_tpl->tpl_vars['order']->value['subtotals'],'totals'=>$_smarty_tpl->tpl_vars['order']->value['totals'],'labels'=>$_smarty_tpl->tpl_vars['order']->value['labels'],'add_product_link'=>false), 0, false);
?>
        </div>
        <?php
}
}
/* {/block 'order_confirmation_table'} */
/* {block 'order_details'} */
class Block_95361377463962e5e91d2a2_02620310 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <div id="order-details" class="mt-4">
            <h3 class="h3 card-title"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Order details','d'=>'Shop.Theme.Checkout'),$_smarty_tpl ) );?>
:</h3>
            <ul>
              <li><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Order reference: %reference%','d'=>'Shop.Theme.Checkout','sprintf'=>array('%reference%'=>$_smarty_tpl->tpl_vars['order']->value['details']['reference'])),$_smarty_tpl ) );?>
</li>
              <li><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Payment method: %method%','d'=>'Shop.Theme.Checkout','sprintf'=>array('%method%'=>$_smarty_tpl->tpl_vars['order']->value['details']['payment'])),$_smarty_tpl ) );?>
</li>
              <?php if (!$_smarty_tpl->tpl_vars['order']->value['details']['is_virtual']) {?>
                <li>
                  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Shipping method: %method%','d'=>'Shop.Theme.Checkout','sprintf'=>array('%method%'=>$_smarty_tpl->tpl_vars['order']->value['carrier']['name'])),$_smarty_tpl ) );?>
<br>
                  <em><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['order']->value['carrier']['delay'], ENT_QUOTES, 'UTF-8');?>
</em>
                </li>
              <?php }?>
            </ul>
          </div>
        <?php
}
}
/* {/block 'order_details'} */
/* {block 'hook_payment_return'} */
class Block_40276102063962e5e928220_10470310 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php if (!empty($_smarty_tpl->tpl_vars['HOOK_PAYMENT_RETURN']->value)) {?>
    <section id="content-hook_payment_return" class="card mb-3 definition-list">
      <div class="card-body">
        <div class="row">
          <div class="col-md-12">
            <?php echo $_smarty_tpl->tpl_vars['HOOK_PAYMENT_RETURN']->value;?>

          </div>
        </div>
      </div>
    </section>
    <?php }?>
  <?php
}
}
/* {/block 'hook_payment_return'} */
/* {block 'customer_registration_form'} */
class Block_38584951063962e5e92b726_97756573 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php if ($_smarty_tpl->tpl_vars['customer']->value['is_guest']) {?>
      <div id="registration-form" class="card mb-3">
        <div class="card-body">
          <h4 class="h4"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Save time on your next order, sign up now','d'=>'Shop.Theme.Checkout'),$_smarty_tpl ) );?>
</h4>
          <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['render'][0], array( array('file'=>'customer/_partials/customer-form.tpl','ui'=>$_smarty_tpl->tpl_vars['register_form']->value),$_smarty_tpl ) );?>

        </div>
      </div>
    <?php }?>
  <?php
}
}
/* {/block 'customer_registration_form'} */
/* {block 'hook_order_confirmation_1'} */
class Block_195831542863962e5e931586_40505411 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayOrderConfirmation1'),$_smarty_tpl ) );?>

  <?php
}
}
/* {/block 'hook_order_confirmation_1'} */
/* {block 'hook_order_confirmation_2'} */
class Block_202241368963962e5e933cc5_61849030 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <section id="content-hook-order-confirmation-footer">
      <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayOrderConfirmation2'),$_smarty_tpl ) );?>

    </section>
  <?php
}
}
/* {/block 'hook_order_confirmation_2'} */
/* {block 'page_content_container'} */
class Block_114250131363962e5e9183c8_32245236 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content_container' => 
  array (
    0 => 'Block_114250131363962e5e9183c8_32245236',
  ),
  'order_confirmation_table' => 
  array (
    0 => 'Block_150679682963962e5e918e35_96086449',
  ),
  'order_details' => 
  array (
    0 => 'Block_95361377463962e5e91d2a2_02620310',
  ),
  'hook_payment_return' => 
  array (
    0 => 'Block_40276102063962e5e928220_10470310',
  ),
  'customer_registration_form' => 
  array (
    0 => 'Block_38584951063962e5e92b726_97756573',
  ),
  'hook_order_confirmation_1' => 
  array (
    0 => 'Block_195831542863962e5e931586_40505411',
  ),
  'hook_order_confirmation_2' => 
  array (
    0 => 'Block_202241368963962e5e933cc5_61849030',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <section id="content" class="page-content page-order-confirmation card mb-3">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_150679682963962e5e918e35_96086449', 'order_confirmation_table', $this->tplIndex);
?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_95361377463962e5e91d2a2_02620310', 'order_details', $this->tplIndex);
?>


  </section>

  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_40276102063962e5e928220_10470310', 'hook_payment_return', $this->tplIndex);
?>


  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_38584951063962e5e92b726_97756573', 'customer_registration_form', $this->tplIndex);
?>


  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_195831542863962e5e931586_40505411', 'hook_order_confirmation_1', $this->tplIndex);
?>


  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_202241368963962e5e933cc5_61849030', 'hook_order_confirmation_2', $this->tplIndex);
?>

<?php
}
}
/* {/block 'page_content_container'} */
}
