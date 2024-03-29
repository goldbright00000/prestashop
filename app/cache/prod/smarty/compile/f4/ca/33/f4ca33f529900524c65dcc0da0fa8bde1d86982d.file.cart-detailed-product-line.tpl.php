<?php /* Smarty version Smarty-3.1.19, created on 2018-05-27 16:31:48
         compiled from "/var/www/clients/client5/web1/web/themes/classic/templates/checkout/_partials/cart-detailed-product-line.tpl" */ ?>
<?php /*%%SmartyHeaderCode:19517120425b0ac154439456-58801612%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f4ca33f529900524c65dcc0da0fa8bde1d86982d' => 
    array (
      0 => '/var/www/clients/client5/web1/web/themes/classic/templates/checkout/_partials/cart-detailed-product-line.tpl',
      1 => 1488549710,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19517120425b0ac154439456-58801612',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'product' => 0,
    'attribute' => 0,
    'value' => 0,
    'customization' => 0,
    'field' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5b0ac154530b85_26940682',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b0ac154530b85_26940682')) {function content_5b0ac154530b85_26940682($_smarty_tpl) {?>
<div class="product-line-grid">
  <!--  product left content: image-->
  <div class="product-line-grid-left col-md-3 col-xs-4">
    <span class="product-image media-middle">
      <img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['cover']['bySize']['cart_default']['url'], ENT_QUOTES, 'UTF-8');?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['product']->value['name'],'quotes'), ENT_QUOTES, 'UTF-8');?>
">
    </span>
  </div>

  <!--  product left body: description -->
  <div class="product-line-grid-body col-md-4 col-xs-8">
    <div class="product-line-info">
      <a class="label" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['url'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8');?>
</a>
    </div>

    <div class="product-line-info">
      <span class="value"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['price'], ENT_QUOTES, 'UTF-8');?>
</span>
      <?php if ($_smarty_tpl->tpl_vars['product']->value['unit_price_full']) {?>
        <div class="unit-price-cart"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['unit_price_full'], ENT_QUOTES, 'UTF-8');?>
</div>
      <?php }?>
    </div>

    <br/>

    <?php  $_smarty_tpl->tpl_vars["value"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["value"]->_loop = false;
 $_smarty_tpl->tpl_vars["attribute"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['product']->value['attributes']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["value"]->key => $_smarty_tpl->tpl_vars["value"]->value) {
$_smarty_tpl->tpl_vars["value"]->_loop = true;
 $_smarty_tpl->tpl_vars["attribute"]->value = $_smarty_tpl->tpl_vars["value"]->key;
?>
      <div class="product-line-info">
        <span class="label"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['attribute']->value, ENT_QUOTES, 'UTF-8');?>
:</span>
        <span class="value"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['value']->value, ENT_QUOTES, 'UTF-8');?>
</span>
      </div>
    <?php } ?>

    <?php if (count($_smarty_tpl->tpl_vars['product']->value['customizations'])) {?>
      <br/>
      <?php  $_smarty_tpl->tpl_vars["customization"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["customization"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['product']->value['customizations']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["customization"]->key => $_smarty_tpl->tpl_vars["customization"]->value) {
$_smarty_tpl->tpl_vars["customization"]->_loop = true;
?>
        <a href="#" data-toggle="modal" data-target="#product-customizations-modal-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['customization']->value['id_customization'], ENT_QUOTES, 'UTF-8');?>
"><?php echo smartyTranslate(array('s'=>'Product customization','d'=>'Shop.Theme.Catalog'),$_smarty_tpl);?>
</a>
        <div class="modal fade customization-modal" id="product-customizations-modal-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['customization']->value['id_customization'], ENT_QUOTES, 'UTF-8');?>
" tabindex="-1" role="dialog" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
                <h4 class="modal-title"><?php echo smartyTranslate(array('s'=>'Product customization','d'=>'Shop.Theme.Catalog'),$_smarty_tpl);?>
</h4>
              </div>
              <div class="modal-body">
                <?php  $_smarty_tpl->tpl_vars["field"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["field"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['customization']->value['fields']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["field"]->key => $_smarty_tpl->tpl_vars["field"]->value) {
$_smarty_tpl->tpl_vars["field"]->_loop = true;
?>
                  <div class="product-customization-line row">
                    <div class="col-sm-3 col-xs-4 label">
                      <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['label'], ENT_QUOTES, 'UTF-8');?>

                    </div>
                    <div class="col-sm-9 col-xs-8 value">
                      <?php if ($_smarty_tpl->tpl_vars['field']->value['type']=='text') {?>
                        <?php if ((int)$_smarty_tpl->tpl_vars['field']->value['id_module']) {?>
                          <?php echo $_smarty_tpl->tpl_vars['field']->value['text'];?>

                        <?php } else { ?>
                          <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['text'], ENT_QUOTES, 'UTF-8');?>

                        <?php }?>
                      <?php } elseif ($_smarty_tpl->tpl_vars['field']->value['type']=='image') {?>
                        <img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['image']['small']['url'], ENT_QUOTES, 'UTF-8');?>
">
                      <?php }?>
                    </div>
                  </div>
                <?php } ?>
              </div>
            </div>
          </div>
        </div>
      <?php } ?>
    <?php }?>
  </div>

  <!--  product left body: description -->
  <div class="product-line-grid-right product-line-actions col-md-5 col-xs-12">
    <div class="row">
      <div class="col-xs-4 hidden-md-up"></div>
      <div class="col-md-10 col-xs-6">
        <div class="row">
          <div class="col-md-6 col-xs-6 qty">
            <?php if (isset($_smarty_tpl->tpl_vars['product']->value['is_gift'])&&$_smarty_tpl->tpl_vars['product']->value['is_gift']) {?>
              <span class="gift-quantity"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['quantity'], ENT_QUOTES, 'UTF-8');?>
</span>
            <?php } else { ?>
              <input
                class="js-cart-line-product-quantity"
                data-down-url="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['down_quantity_url'], ENT_QUOTES, 'UTF-8');?>
"
                data-up-url="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['up_quantity_url'], ENT_QUOTES, 'UTF-8');?>
"
                data-update-url="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['update_quantity_url'], ENT_QUOTES, 'UTF-8');?>
"
                data-product-id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['id_product'], ENT_QUOTES, 'UTF-8');?>
"
                type="text"
                value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['quantity'], ENT_QUOTES, 'UTF-8');?>
"
                name="product-quantity-spin"
                min="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['minimal_quantity'], ENT_QUOTES, 'UTF-8');?>
"
              />
            <?php }?>
          </div>
          <div class="col-md-6 col-xs-2 price">
            <span class="product-price">
              <strong>
                <?php if (isset($_smarty_tpl->tpl_vars['product']->value['is_gift'])&&$_smarty_tpl->tpl_vars['product']->value['is_gift']) {?>
                  <span class="gift"><?php echo smartyTranslate(array('s'=>'Gift','d'=>'Shop.Theme.Checkout'),$_smarty_tpl);?>
</span>
                <?php } else { ?>
                  <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['total'], ENT_QUOTES, 'UTF-8');?>

                <?php }?>
              </strong>
            </span>
          </div>
        </div>
      </div>
      <div class="col-md-2 col-xs-2 text-xs-right">
        <div class="cart-line-product-actions ">
          <a
              class                       = "remove-from-cart"
              rel                         = "nofollow"
              href                        = "<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['remove_from_cart_url'], ENT_QUOTES, 'UTF-8');?>
"
              data-link-action            = "delete-from-cart"
              data-id-product             = "<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['product']->value['id_product'],'javascript'), ENT_QUOTES, 'UTF-8');?>
"
              data-id-product-attribute   = "<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['product']->value['id_product_attribute'],'javascript'), ENT_QUOTES, 'UTF-8');?>
"
              data-id-customization   	  = "<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['product']->value['id_customization'],'javascript'), ENT_QUOTES, 'UTF-8');?>
"
          >
            <?php if (!isset($_smarty_tpl->tpl_vars['product']->value['is_gift'])||!$_smarty_tpl->tpl_vars['product']->value['is_gift']) {?>
            <i class="material-icons pull-xs-left">delete</i>
            <?php }?>
          </a>
          <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displayCartExtraProductActions','product'=>$_smarty_tpl->tpl_vars['product']->value),$_smarty_tpl);?>

        </div>
      </div>
    </div>
  </div>

  <div class="clearfix"></div>
</div>
<?php }} ?>
