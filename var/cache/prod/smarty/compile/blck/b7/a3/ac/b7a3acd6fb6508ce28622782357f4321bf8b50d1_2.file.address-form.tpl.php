<?php
/* Smarty version 3.1.43, created on 2022-12-11 20:23:35
  from 'C:\wamp64\www\prestashop\themes\blck\templates\customer\_partials\address-form.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_63962e37349553_34089449',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b7a3acd6fb6508ce28622782357f4321bf8b50d1' => 
    array (
      0 => 'C:\\wamp64\\www\\prestashop\\themes\\blck\\templates\\customer\\_partials\\address-form.tpl',
      1 => 1670692123,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:_partials/form-errors.tpl' => 1,
  ),
),false)) {
function content_63962e37349553_34089449 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_78316299563962e37333795_40351214', 'address_form');
?>

<?php }
/* {block 'address_form_errors'} */
class Block_34276377363962e373343c5_82470297 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php $_smarty_tpl->_subTemplateRender('file:_partials/form-errors.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('errors'=>$_smarty_tpl->tpl_vars['errors']->value['']), 0, false);
?>
    <?php
}
}
/* {/block 'address_form_errors'} */
/* {block 'address_form_url'} */
class Block_75033349163962e37336bc6_89994042 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <form
      method="POST"
      class="needs-validation"
      action="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('entity'=>'address','params'=>array('id_address'=>$_smarty_tpl->tpl_vars['id_address']->value)),$_smarty_tpl ) );?>
"
      data-id-address="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id_address']->value, ENT_QUOTES, 'UTF-8');?>
"
      data-refresh-url="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('entity'=>'address','params'=>array('ajax'=>1,'action'=>'addressForm')),$_smarty_tpl ) );?>
"
      novalidate
      autocomplete="false"
    >
    <?php
}
}
/* {/block 'address_form_url'} */
/* {block 'form_field'} */
class Block_91783139563962e37341314_30735232 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['form_field'][0], array( array('field'=>$_smarty_tpl->tpl_vars['field']->value),$_smarty_tpl ) );?>

              <?php
}
}
/* {/block 'form_field'} */
/* {block 'form_fields'} */
class Block_30119754463962e3733c4c9_40805758 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['formFields']->value, 'field');
$_smarty_tpl->tpl_vars['field']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['field']->value) {
$_smarty_tpl->tpl_vars['field']->do_else = false;
?>
              <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_91783139563962e37341314_30735232', 'form_field', $this->tplIndex);
?>

            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
          <?php
}
}
/* {/block 'form_fields'} */
/* {block 'address_form_fields'} */
class Block_202350458263962e3733ba41_16248058 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <section class="form-fields">
          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_30119754463962e3733c4c9_40805758', 'form_fields', $this->tplIndex);
?>

        </section>
      <?php
}
}
/* {/block 'address_form_fields'} */
/* {block 'form_buttons'} */
class Block_180289177763962e37346b41_69261464 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <button class="btn btn-primary form-control-submit" type="submit">
              <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Save','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>

            </button>
          <?php
}
}
/* {/block 'form_buttons'} */
/* {block 'address_form_footer'} */
class Block_164090238263962e373460b1_59513183 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <footer class="form-footer">
          <input type="hidden" name="submitAddress" value="1">
          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_180289177763962e37346b41_69261464', 'form_buttons', $this->tplIndex);
?>

        </footer>
      <?php
}
}
/* {/block 'address_form_footer'} */
/* {block 'address_form'} */
class Block_78316299563962e37333795_40351214 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'address_form' => 
  array (
    0 => 'Block_78316299563962e37333795_40351214',
  ),
  'address_form_errors' => 
  array (
    0 => 'Block_34276377363962e373343c5_82470297',
  ),
  'address_form_url' => 
  array (
    0 => 'Block_75033349163962e37336bc6_89994042',
  ),
  'address_form_fields' => 
  array (
    0 => 'Block_202350458263962e3733ba41_16248058',
  ),
  'form_fields' => 
  array (
    0 => 'Block_30119754463962e3733c4c9_40805758',
  ),
  'form_field' => 
  array (
    0 => 'Block_91783139563962e37341314_30735232',
  ),
  'address_form_footer' => 
  array (
    0 => 'Block_164090238263962e373460b1_59513183',
  ),
  'form_buttons' => 
  array (
    0 => 'Block_180289177763962e37346b41_69261464',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <div class="js-address-form">

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_34276377363962e373343c5_82470297', 'address_form_errors', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_75033349163962e37336bc6_89994042', 'address_form_url', $this->tplIndex);
?>


      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_202350458263962e3733ba41_16248058', 'address_form_fields', $this->tplIndex);
?>


      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_164090238263962e373460b1_59513183', 'address_form_footer', $this->tplIndex);
?>

    </form>
    
  </div>
<?php
}
}
/* {/block 'address_form'} */
}
