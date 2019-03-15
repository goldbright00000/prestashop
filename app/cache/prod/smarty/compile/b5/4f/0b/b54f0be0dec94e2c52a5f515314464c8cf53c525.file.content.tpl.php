<?php /* Smarty version Smarty-3.1.19, created on 2018-02-12 23:41:32
         compiled from "/var/www/clients/client5/web1/web/admin-reiter/themes/default/template/content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:19112605925a82181ce71645-27274297%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b54f0be0dec94e2c52a5f515314464c8cf53c525' => 
    array (
      0 => '/var/www/clients/client5/web1/web/admin-reiter/themes/default/template/content.tpl',
      1 => 1488549710,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19112605925a82181ce71645-27274297',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5a82181ce86e04_59777115',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a82181ce86e04_59777115')) {function content_5a82181ce86e04_59777115($_smarty_tpl) {?>
<div id="ajax_confirmation" class="alert alert-success hide"></div>

<div id="ajaxBox" style="display:none"></div>


<div class="row">
	<div class="col-lg-12">
		<?php if (isset($_smarty_tpl->tpl_vars['content']->value)) {?>
			<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

		<?php }?>
	</div>
</div><?php }} ?>
