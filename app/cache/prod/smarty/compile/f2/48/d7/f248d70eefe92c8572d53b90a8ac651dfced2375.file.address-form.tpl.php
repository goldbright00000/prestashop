<?php /* Smarty version Smarty-3.1.19, created on 2018-05-27 16:33:11
         compiled from "/var/www/clients/client5/web1/web/themes/classic/templates/checkout/_partials/address-form.tpl" */ ?>
<?php /*%%SmartyHeaderCode:15619644545b0ac1a761c968-17787232%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f248d70eefe92c8572d53b90a8ac651dfced2375' => 
    array (
      0 => '/var/www/clients/client5/web1/web/themes/classic/templates/checkout/_partials/address-form.tpl',
      1 => 1488549710,
      2 => 'file',
    ),
    '0491c7e29034025df31f7fb91b65926c91cb2a9a' => 
    array (
      0 => '/var/www/clients/client5/web1/web/themes/classic/templates/customer/_partials/address-form.tpl',
      1 => 1488549710,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15619644545b0ac1a761c968-17787232',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'errors' => 0,
    'id_address' => 0,
    'formFields' => 0,
    'field' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5b0ac1a76b81c9_50172690',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b0ac1a76b81c9_50172690')) {function content_5b0ac1a76b81c9_50172690($_smarty_tpl) {?>
<div class="js-address-form">
  <?php echo $_smarty_tpl->getSubTemplate ('_partials/form-errors.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('errors'=>$_smarty_tpl->tpl_vars['errors']->value['']), 0);?>


  <form
    method="POST"
    action="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->getUrlSmarty(array('entity'=>'address','params'=>array('id_address'=>$_smarty_tpl->tpl_vars['id_address']->value)),$_smarty_tpl);?>
"
    data-id-address="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id_address']->value, ENT_QUOTES, 'UTF-8');?>
"
    data-refresh-url="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->getUrlSmarty(array('entity'=>'address','params'=>array('ajax'=>1,'action'=>'addressForm')),$_smarty_tpl);?>
"
  >
    <section class="form-fields">
      
        <?php  $_smarty_tpl->tpl_vars["field"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["field"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['formFields']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["field"]->key => $_smarty_tpl->tpl_vars["field"]->value) {
$_smarty_tpl->tpl_vars["field"]->_loop = true;
?>
          
  <?php if ($_smarty_tpl->tpl_vars['field']->value['name']=="alias") {?>
    
  <?php } else { ?>
    
            <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['form_field'][0][0]->smartyFormField(array('field'=>$_smarty_tpl->tpl_vars['field']->value),$_smarty_tpl);?>

          
  <?php }?>

        <?php } ?>
      
  <input type="hidden" name="saveAddress" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['type']->value, ENT_QUOTES, 'UTF-8');?>
">
  <?php if ($_smarty_tpl->tpl_vars['type']->value==="delivery") {?>
    <div class="form-group row">
      <div class="col-md-9 col-md-offset-3">
        <input name = "use_same_address" type = "checkbox" value = "1" <?php if ($_smarty_tpl->tpl_vars['use_same_address']->value) {?> checked <?php }?>>
        <label><?php echo smartyTranslate(array('s'=>'Use this address for invoice too','d'=>'Shop.Theme.Checkout'),$_smarty_tpl);?>
</label>
      </div>
    </div>
  <?php }?>

    </section>

    <footer class="form-footer clearfix">
      <input type="hidden" name="submitAddress" value="1">
      
  <?php if (!$_smarty_tpl->tpl_vars['form_has_continue_button']->value) {?>
    <button type="submit" class="btn btn-primary pull-xs-right"><?php echo smartyTranslate(array('s'=>'Save','d'=>'Shop.Theme.Actions'),$_smarty_tpl);?>
</button>
    <a class="js-cancel-address cancel-address pull-xs-right" href="?cancelAddress=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['type']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo smartyTranslate(array('s'=>'Cancel','d'=>'Shop.Theme.Actions'),$_smarty_tpl);?>
</a>
  <?php } else { ?>
    <form>
      <button type="submit" class="continue btn btn-primary pull-xs-right" name="confirm-addresses" value="1">
          <?php echo smartyTranslate(array('s'=>'Continue','d'=>'Shop.Theme.Actions'),$_smarty_tpl);?>

      </button>
      <?php if (count($_smarty_tpl->tpl_vars['customer']->value['addresses'])>0) {?>
        <a class="js-cancel-address cancel-address pull-xs-right" href="?cancelAddress=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['type']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo smartyTranslate(array('s'=>'Cancel','d'=>'Shop.Theme.Actions'),$_smarty_tpl);?>
</a>
      <?php }?>
    </form>
  <?php }?>

    </footer>
  </form>
</div>
<?php }} ?>
