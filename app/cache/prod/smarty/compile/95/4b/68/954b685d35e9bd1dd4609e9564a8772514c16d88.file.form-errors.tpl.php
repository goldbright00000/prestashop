<?php /* Smarty version Smarty-3.1.19, created on 2018-02-14 07:43:38
         compiled from "/var/www/clients/client5/web1/web/themes/classic/templates/_partials/form-errors.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12786626055a83da9aeb8903-50640091%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '954b685d35e9bd1dd4609e9564a8772514c16d88' => 
    array (
      0 => '/var/www/clients/client5/web1/web/themes/classic/templates/_partials/form-errors.tpl',
      1 => 1488549710,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12786626055a83da9aeb8903-50640091',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'errors' => 0,
    'error' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5a83da9aecd7f6_84205344',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a83da9aecd7f6_84205344')) {function content_5a83da9aecd7f6_84205344($_smarty_tpl) {?>
<?php if (count($_smarty_tpl->tpl_vars['errors']->value)) {?>
  <div class="help-block">
    <ul>
      <?php  $_smarty_tpl->tpl_vars['error'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['error']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['errors']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['error']->key => $_smarty_tpl->tpl_vars['error']->value) {
$_smarty_tpl->tpl_vars['error']->_loop = true;
?>
        <li><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['error']->value, ENT_QUOTES, 'UTF-8');?>
</li>
      <?php } ?>
    </ul>
  </div>
<?php }?>
<?php }} ?>
