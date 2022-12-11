<?php
/* Smarty version 3.1.43, created on 2022-12-11 20:23:35
  from 'C:\wamp64\www\prestashop\themes\blck\templates\_partials\form-fields.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_63962e3755ca90_83063805',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ca2bb849e666495a53a2c1ecf6c1aacc208f2353' => 
    array (
      0 => 'C:\\wamp64\\www\\prestashop\\themes\\blck\\templates\\_partials\\form-fields.tpl',
      1 => 1670692123,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:_partials/form-errors.tpl' => 2,
  ),
),false)) {
function content_63962e3755ca90_83063805 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->_assignInScope('autocomplete', array('firstname'=>'given-name','lastname'=>'family-name','email'=>'email','password'=>'current-password','new_password'=>'new-password','postcode'=>'postal-code','birthday'=>'bday','address1'=>'street-address','address2'=>'address-line2','id_state'=>'address-level1','city'=>'address-level2','company'=>'organization'));
if ($_smarty_tpl->tpl_vars['field']->value['type'] == 'hidden') {?>

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_24562541363962e374aee45_06455887', 'form_field_item_hidden');
?>


<?php } else { ?>
    <?php $_smarty_tpl->_assignInScope('uniqId', mt_rand(10,100000));?>

    <div class="form-group">
        <?php if ($_smarty_tpl->tpl_vars['field']->value['type'] == 'checkbox' || $_smarty_tpl->tpl_vars['field']->value['type'] == 'radio-buttons') {?>
            <?php if ($_smarty_tpl->tpl_vars['field']->value['type'] == 'radio-buttons') {?>
                <div class="label mr-3"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['label'], ENT_QUOTES, 'UTF-8');?>
</div>
            <?php }?>
        <?php } else { ?>
            <label class="<?php if ($_smarty_tpl->tpl_vars['field']->value['required']) {?>required<?php }?>" for="f-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['name'], ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['uniqId']->value, ENT_QUOTES, 'UTF-8');?>
">
                <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['label'], ENT_QUOTES, 'UTF-8');?>

                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_132740841663962e374bc781_24564925', 'form_field_comment');
?>

            </label>
        <?php }?>


            <?php if ($_smarty_tpl->tpl_vars['field']->value['type'] === 'select') {?>

                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_122870230063962e374c3a77_06188481', 'form_field_item_select');
?>


            <?php } elseif ($_smarty_tpl->tpl_vars['field']->value['type'] === 'countrySelect') {?>

                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_190408491763962e374d38d9_59777944', 'form_field_item_country');
?>


            <?php } elseif ($_smarty_tpl->tpl_vars['field']->value['type'] === 'radio-buttons') {?>

                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_47053217663962e374e0b96_99635388', 'form_field_item_radio');
?>


            <?php } elseif ($_smarty_tpl->tpl_vars['field']->value['type'] === 'checkbox') {?>

                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_25247567263962e374f2010_30616539', 'form_field_item_checkbox');
?>


            <?php } elseif ($_smarty_tpl->tpl_vars['field']->value['type'] === 'date') {?>

                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_197072991263962e374fd011_66165260', 'form_field_item_date');
?>


            <?php } elseif ($_smarty_tpl->tpl_vars['field']->value['type'] === 'birthday') {?>

                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9531198663962e3750cfc7_08679503', 'form_field_item_birthday');
?>


            <?php } elseif ($_smarty_tpl->tpl_vars['field']->value['type'] === 'password') {?>

                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17593612463962e37525ae9_70430644', 'form_field_item_password');
?>


            <?php } elseif ($_smarty_tpl->tpl_vars['field']->value['type'] === 'file') {?>
                <div class="custom-file">
                    <input name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['name'], ENT_QUOTES, 'UTF-8');?>
" type="file" class="custom-file-input<?php if (!empty($_smarty_tpl->tpl_vars['field']->value['errors'])) {?> is-invalid<?php }?>" id="f-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['name'], ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['uniqId']->value, ENT_QUOTES, 'UTF-8');?>
"<?php if ($_smarty_tpl->tpl_vars['field']->value['required']) {?> required<?php }?>>
                    <label class="custom-file-label" for="f-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['name'], ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['uniqId']->value, ENT_QUOTES, 'UTF-8');?>
" data-browse="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Choose file','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Choose file','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
</label>
                </div>
            <?php } else { ?>

                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_72517363863962e3753f7b5_14410563', 'form_field_item_other');
?>


            <?php }?>

            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_130149315263962e375560f7_16242724', 'form_field_errors');
?>



    </div>

<?php }
}
/* {block 'form_field_item_hidden'} */
class Block_24562541363962e374aee45_06455887 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'form_field_item_hidden' => 
  array (
    0 => 'Block_24562541363962e374aee45_06455887',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <input type="hidden" name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['name'], ENT_QUOTES, 'UTF-8');?>
" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['value'], ENT_QUOTES, 'UTF-8');?>
">
    <?php
}
}
/* {/block 'form_field_item_hidden'} */
/* {block 'form_field_comment'} */
class Block_132740841663962e374bc781_24564925 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'form_field_comment' => 
  array (
    0 => 'Block_132740841663962e374bc781_24564925',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                    <?php if ((!$_smarty_tpl->tpl_vars['field']->value['required'] && !in_array($_smarty_tpl->tpl_vars['field']->value['type'],array('radio-buttons','checkbox')))) {?>
                            <small class="text-muted">(<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Optional','d'=>'Shop.Forms.Labels'),$_smarty_tpl ) );?>
)</small>
                    <?php }?>
                <?php
}
}
/* {/block 'form_field_comment'} */
/* {block 'form_field_item_select'} */
class Block_122870230063962e374c3a77_06188481 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'form_field_item_select' => 
  array (
    0 => 'Block_122870230063962e374c3a77_06188481',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                    <select class="custom-select<?php if (!empty($_smarty_tpl->tpl_vars['field']->value['errors'])) {?> is-invalid<?php }?>" name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['name'], ENT_QUOTES, 'UTF-8');?>
" id="f-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['name'], ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['uniqId']->value, ENT_QUOTES, 'UTF-8');?>
"<?php if ($_smarty_tpl->tpl_vars['field']->value['required']) {?> required<?php }?>>
                        <option value disabled selected><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'-- please choose --','d'=>'Shop.Forms.Labels'),$_smarty_tpl ) );?>
</option>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['field']->value['availableValues'], 'label', false, 'value');
$_smarty_tpl->tpl_vars['label']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['value']->value => $_smarty_tpl->tpl_vars['label']->value) {
$_smarty_tpl->tpl_vars['label']->do_else = false;
?>
                            <option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['value']->value, ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['value']->value == $_smarty_tpl->tpl_vars['field']->value['value']) {?> selected <?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['label']->value, ENT_QUOTES, 'UTF-8');?>
</option>
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </select>
                <?php
}
}
/* {/block 'form_field_item_select'} */
/* {block 'form_field_item_country'} */
class Block_190408491763962e374d38d9_59777944 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'form_field_item_country' => 
  array (
    0 => 'Block_190408491763962e374d38d9_59777944',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                    <select
                            class="custom-select js-country<?php if (!empty($_smarty_tpl->tpl_vars['field']->value['errors'])) {?> is-invalid<?php }?>"
                            name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['name'], ENT_QUOTES, 'UTF-8');?>
"
                            id="f-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['name'], ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['uniqId']->value, ENT_QUOTES, 'UTF-8');?>
"
                            <?php if ($_smarty_tpl->tpl_vars['field']->value['required']) {?>required<?php }?>
                    >
                        <option value disabled selected><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'-- please choose --','d'=>'Shop.Forms.Labels'),$_smarty_tpl ) );?>
</option>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['field']->value['availableValues'], 'label', false, 'value');
$_smarty_tpl->tpl_vars['label']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['value']->value => $_smarty_tpl->tpl_vars['label']->value) {
$_smarty_tpl->tpl_vars['label']->do_else = false;
?>
                            <option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['value']->value, ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['value']->value == $_smarty_tpl->tpl_vars['field']->value['value']) {?> selected <?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['label']->value, ENT_QUOTES, 'UTF-8');?>
</option>
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </select>
                <?php
}
}
/* {/block 'form_field_item_country'} */
/* {block 'form_field_item_radio'} */
class Block_47053217663962e374e0b96_99635388 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'form_field_item_radio' => 
  array (
    0 => 'Block_47053217663962e374e0b96_99635388',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['field']->value['availableValues'], 'label', false, 'value', 'radiolist', array (
  'iteration' => true,
));
$_smarty_tpl->tpl_vars['label']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['value']->value => $_smarty_tpl->tpl_vars['label']->value) {
$_smarty_tpl->tpl_vars['label']->do_else = false;
$_smarty_tpl->tpl_vars['__smarty_foreach_radiolist']->value['iteration']++;
?>
                        <div class="custom-control custom-radio custom-control-inline">
                            <input
                                    name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['name'], ENT_QUOTES, 'UTF-8');?>
"
                                    type="radio"
                                    value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['value']->value, ENT_QUOTES, 'UTF-8');?>
"
                                    class="custom-control-input <?php if (!empty($_smarty_tpl->tpl_vars['field']->value['errors'])) {?> is-invalid<?php }?>"
                                    id="f-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['name'], ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['uniqId']->value, ENT_QUOTES, 'UTF-8');?>
-<?php echo htmlspecialchars((isset($_smarty_tpl->tpl_vars['__smarty_foreach_radiolist']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_radiolist']->value['iteration'] : null), ENT_QUOTES, 'UTF-8');?>
"
                                    <?php if ($_smarty_tpl->tpl_vars['field']->value['required']) {?>required<?php }?>
                                    <?php if ($_smarty_tpl->tpl_vars['value']->value == $_smarty_tpl->tpl_vars['field']->value['value']) {?> checked <?php }?>
                            >

                            <label class="custom-control-label" for="f-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['name'], ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['uniqId']->value, ENT_QUOTES, 'UTF-8');?>
-<?php echo htmlspecialchars((isset($_smarty_tpl->tpl_vars['__smarty_foreach_radiolist']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_radiolist']->value['iteration'] : null), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['label']->value, ENT_QUOTES, 'UTF-8');?>
</label>
                        </div>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

                <?php
}
}
/* {/block 'form_field_item_radio'} */
/* {block 'form_field_item_checkbox'} */
class Block_25247567263962e374f2010_30616539 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'form_field_item_checkbox' => 
  array (
    0 => 'Block_25247567263962e374f2010_30616539',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                    <div class="custom-control custom-checkbox">
                        <input name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['name'], ENT_QUOTES, 'UTF-8');?>
" type="checkbox" value="1" id="f-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['name'], ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['uniqId']->value, ENT_QUOTES, 'UTF-8');?>
" class="custom-control-input<?php if (!empty($_smarty_tpl->tpl_vars['field']->value['errors'])) {?> is-invalid<?php }?>"<?php if ($_smarty_tpl->tpl_vars['field']->value['value']) {?> checked="checked"<?php }
if ($_smarty_tpl->tpl_vars['field']->value['required']) {?> required<?php }?>>
                        <label class="custom-control-label" for="f-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['name'], ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['uniqId']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->tpl_vars['field']->value['label'];?>
</label>
                    </div>
                <?php
}
}
/* {/block 'form_field_item_checkbox'} */
/* {block 'form_field_item_date'} */
class Block_197072991263962e374fd011_66165260 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'form_field_item_date' => 
  array (
    0 => 'Block_197072991263962e374fd011_66165260',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                    <input name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['name'], ENT_QUOTES, 'UTF-8');?>
" class="form-control<?php if (!empty($_smarty_tpl->tpl_vars['field']->value['errors'])) {?> is-invalid<?php }?>" type="date" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['value'], ENT_QUOTES, 'UTF-8');?>
" placeholder="<?php if ((isset($_smarty_tpl->tpl_vars['field']->value['availableValues']['placeholder']))) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['availableValues']['placeholder'], ENT_QUOTES, 'UTF-8');
}?>" id="f-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['name'], ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['uniqId']->value, ENT_QUOTES, 'UTF-8');?>
"<?php if ((isset($_smarty_tpl->tpl_vars['autocomplete']->value[$_smarty_tpl->tpl_vars['field']->value['name']]))) {?> autocomplete="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['autocomplete']->value[$_smarty_tpl->tpl_vars['field']->value['name']], ENT_QUOTES, 'UTF-8');?>
"<?php }?>>
                    <?php if ((isset($_smarty_tpl->tpl_vars['field']->value['availableValues']['comment']))) {?>
                        <span class="form-text text-muted">
              <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['availableValues']['comment'], ENT_QUOTES, 'UTF-8');?>

            </span>
                    <?php }?>
                <?php
}
}
/* {/block 'form_field_item_date'} */
/* {block 'form_field_item_birthday'} */
class Block_9531198663962e3750cfc7_08679503 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'form_field_item_birthday' => 
  array (
    0 => 'Block_9531198663962e3750cfc7_08679503',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\wamp64\\www\\prestashop\\vendor\\smarty\\smarty\\libs\\plugins\\function.html_select_date.php','function'=>'smarty_function_html_select_date',),));
?>

                    <div class="js-parent-focus">
                        <?php ob_start();
echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['value'], ENT_QUOTES, 'UTF-8');
$_prefixVariable3 = ob_get_clean();
ob_start();
echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['name'], ENT_QUOTES, 'UTF-8');
$_prefixVariable4 = ob_get_clean();
ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'-- day --','d'=>'Shop.Forms.Labels'),$_smarty_tpl ) );
$_prefixVariable5 = ob_get_clean();
ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'-- month --','d'=>'Shop.Forms.Labels'),$_smarty_tpl ) );
$_prefixVariable6 = ob_get_clean();
ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'-- year --','d'=>'Shop.Forms.Labels'),$_smarty_tpl ) );
$_prefixVariable7 = ob_get_clean();
ob_start();
echo htmlspecialchars(date('Y'), ENT_QUOTES, 'UTF-8');
$_prefixVariable8 = ob_get_clean();
ob_start();
echo htmlspecialchars(date('Y'), ENT_QUOTES, 'UTF-8');
$_prefixVariable9 = ob_get_clean();
echo smarty_function_html_select_date(array('field_order'=>'DMY','time'=>$_prefixVariable3,'field_array'=>$_prefixVariable4,'prefix'=>false,'reverse_years'=>true,'field_separator'=>'<br>','day_extra'=>'class="form-control form-control-select"','month_extra'=>'class="form-control form-control-select"','year_extra'=>'class="form-control form-control-select"','day_empty'=>$_prefixVariable5,'month_empty'=>$_prefixVariable6,'year_empty'=>$_prefixVariable7,'start_year'=>$_prefixVariable8-100,'end_year'=>$_prefixVariable9),$_smarty_tpl);?>

                    </div>
                <?php
}
}
/* {/block 'form_field_item_birthday'} */
/* {block 'form_field_item_password'} */
class Block_17593612463962e37525ae9_70430644 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'form_field_item_password' => 
  array (
    0 => 'Block_17593612463962e37525ae9_70430644',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                    <div class="input-group js-parent-focus">
                        <input
                                class="form-control js-child-focus js-visible-password<?php if (!empty($_smarty_tpl->tpl_vars['field']->value['errors'])) {?> is-invalid<?php }?>"
                                name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['name'], ENT_QUOTES, 'UTF-8');?>
"
                                id="f-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['name'], ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['uniqId']->value, ENT_QUOTES, 'UTF-8');?>
"
                                type="password"
                                value=""
                                pattern=".{5,}"
                                <?php if ((isset($_smarty_tpl->tpl_vars['autocomplete']->value[$_smarty_tpl->tpl_vars['field']->value['name']]))) {?> autocomplete="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['autocomplete']->value[$_smarty_tpl->tpl_vars['field']->value['name']], ENT_QUOTES, 'UTF-8');?>
"<?php }?>
                                <?php if ($_smarty_tpl->tpl_vars['field']->value['required']) {?>required<?php }?>
                        >
                        <span class="input-group-btn">
              <button
                      class="btn btn-light"
                      type="button"
                      data-action="show-password"
                      data-text-show="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Show','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
"
                      data-text-hide="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Hide','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
"
              >
                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Show','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>

              </button>
            </span>
                        <?php $_smarty_tpl->_subTemplateRender('file:_partials/form-errors.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('errors'=>$_smarty_tpl->tpl_vars['field']->value['errors'],'required'=>$_smarty_tpl->tpl_vars['field']->value['required'],'label'=>$_smarty_tpl->tpl_vars['field']->value['label']), 0, false);
?>

                    </div>
                    <small class="form-text text-muted"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'At least 5 characters long','d'=>'Shop.Forms.Help'),$_smarty_tpl ) );?>
</small>

                <?php
}
}
/* {/block 'form_field_item_password'} */
/* {block 'form_field_item_other'} */
class Block_72517363863962e3753f7b5_14410563 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'form_field_item_other' => 
  array (
    0 => 'Block_72517363863962e3753f7b5_14410563',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                    <input
                            class="form-control<?php if (!empty($_smarty_tpl->tpl_vars['field']->value['errors'])) {?> is-invalid<?php }?>"
                            name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['name'], ENT_QUOTES, 'UTF-8');?>
"
                            type="<?php if ($_smarty_tpl->tpl_vars['field']->value['name'] === "phone" || $_smarty_tpl->tpl_vars['field']->value['name'] === "phone_mobile") {?>tel<?php } else {
echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['type'], ENT_QUOTES, 'UTF-8');
}?>"
                            value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['value'], ENT_QUOTES, 'UTF-8');?>
"
                            id="f-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['name'], ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['uniqId']->value, ENT_QUOTES, 'UTF-8');?>
"
                            <?php if ((isset($_smarty_tpl->tpl_vars['field']->value['availableValues']['placeholder']))) {?>placeholder="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['availableValues']['placeholder'], ENT_QUOTES, 'UTF-8');?>
"<?php }?>
                            <?php if ($_smarty_tpl->tpl_vars['field']->value['maxLength']) {?>maxlength="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['maxLength'], ENT_QUOTES, 'UTF-8');?>
"<?php }?>
                            <?php if ($_smarty_tpl->tpl_vars['field']->value['required']) {?>required<?php }?>
                            <?php if ((isset($_smarty_tpl->tpl_vars['autocomplete']->value[$_smarty_tpl->tpl_vars['field']->value['name']]))) {?> autocomplete="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['autocomplete']->value[$_smarty_tpl->tpl_vars['field']->value['name']], ENT_QUOTES, 'UTF-8');?>
"<?php }?>
                    >
                    <?php if ((isset($_smarty_tpl->tpl_vars['field']->value['availableValues']['comment']))) {?>
                        <small class="form-text text-muted">
                            <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['availableValues']['comment'], ENT_QUOTES, 'UTF-8');?>

                        </small>
                    <?php }?>
                <?php
}
}
/* {/block 'form_field_item_other'} */
/* {block 'form_field_errors'} */
class Block_130149315263962e375560f7_16242724 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'form_field_errors' => 
  array (
    0 => 'Block_130149315263962e375560f7_16242724',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                <?php if ($_smarty_tpl->tpl_vars['field']->value['type'] !== 'password') {?>
                <?php $_smarty_tpl->_subTemplateRender('file:_partials/form-errors.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('errors'=>$_smarty_tpl->tpl_vars['field']->value['errors'],'required'=>$_smarty_tpl->tpl_vars['field']->value['required'],'label'=>$_smarty_tpl->tpl_vars['field']->value['label']), 0, true);
?>
                <?php }?>
            <?php
}
}
/* {/block 'form_field_errors'} */
}
