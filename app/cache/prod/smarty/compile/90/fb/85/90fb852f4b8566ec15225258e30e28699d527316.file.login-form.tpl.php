<?php /* Smarty version Smarty-3.1.19, created on 2018-05-27 16:32:08
         compiled from "/var/www/clients/client5/web1/web/themes/classic/templates/checkout/_partials/login-form.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12577567935b0ac168b93c37-60045535%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '90fb852f4b8566ec15225258e30e28699d527316' => 
    array (
      0 => '/var/www/clients/client5/web1/web/themes/classic/templates/checkout/_partials/login-form.tpl',
      1 => 1488549710,
      2 => 'file',
    ),
    'ebda0943e27bdadfdd50ca164e561ffe4af1e166' => 
    array (
      0 => '/var/www/clients/client5/web1/web/themes/classic/templates/customer/_partials/login-form.tpl',
      1 => 1488549710,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12577567935b0ac168b93c37-60045535',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'errors' => 0,
    'action' => 0,
    'formFields' => 0,
    'field' => 0,
    'urls' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5b0ac168cab322_24248066',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b0ac168cab322_24248066')) {function content_5b0ac168cab322_24248066($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('_partials/form-errors.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('errors'=>$_smarty_tpl->tpl_vars['errors']->value['']), 0);?>




<form id="login-form" action="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['action']->value, ENT_QUOTES, 'UTF-8');?>
" method="post">

  <section>
    
      <?php  $_smarty_tpl->tpl_vars["field"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["field"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['formFields']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["field"]->key => $_smarty_tpl->tpl_vars["field"]->value) {
$_smarty_tpl->tpl_vars["field"]->_loop = true;
?>
        
          <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['form_field'][0][0]->smartyFormField(array('field'=>$_smarty_tpl->tpl_vars['field']->value),$_smarty_tpl);?>

        
      <?php } ?>
    
    <div class="forgot-password">
      <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['pages']['password'], ENT_QUOTES, 'UTF-8');?>
" rel="nofollow">
        <?php echo smartyTranslate(array('s'=>'Forgot your password?','d'=>'Shop.Theme.CustomerAccount'),$_smarty_tpl);?>

      </a>
    </div>
  </section>

  <footer class="form-footer text-xs-center clearfix">
    <input type="hidden" name="submitLogin" value="1">
    
  <button
    class="continue btn btn-primary pull-xs-right"
    name="continue"
    data-link-action="sign-in"
    type="submit"
    value="1"
  >
    <?php echo smartyTranslate(array('s'=>'Continue','d'=>'Shop.Theme.Actions'),$_smarty_tpl);?>

  </button>

  </footer>
</form>
<?php }} ?>
