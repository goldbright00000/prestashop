<?php /* Smarty version Smarty-3.1.19, created on 2018-02-14 07:43:38
         compiled from "/var/www/clients/client5/web1/web/themes/classic/templates/_partials/form-fields.tpl" */ ?>
<?php /*%%SmartyHeaderCode:14377209085a83da9aedb177-75510142%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b5d760a2bd199bcd928aa82364256724d19b531b' => 
    array (
      0 => '/var/www/clients/client5/web1/web/themes/classic/templates/_partials/form-fields.tpl',
      1 => 1488549710,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14377209085a83da9aedb177-75510142',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'field' => 0,
    'value' => 0,
    'label' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5a83da9b1957d3_61504181',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a83da9b1957d3_61504181')) {function content_5a83da9b1957d3_61504181($_smarty_tpl) {?><?php if (!is_callable('smarty_function_html_select_date')) include '/var/www/clients/client5/web1/web/vendor/prestashop/smarty/plugins/function.html_select_date.php';
?>
<?php if ($_smarty_tpl->tpl_vars['field']->value['type']=='hidden') {?>

  <input type="hidden" name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['name'], ENT_QUOTES, 'UTF-8');?>
" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['value'], ENT_QUOTES, 'UTF-8');?>
">

<?php } else { ?>

  <div class="form-group row <?php if (!empty($_smarty_tpl->tpl_vars['field']->value['errors'])) {?>has-error<?php }?>">
    <label class="col-md-3 form-control-label<?php if ($_smarty_tpl->tpl_vars['field']->value['required']) {?> required<?php }?>">
      <?php if ($_smarty_tpl->tpl_vars['field']->value['type']!=='checkbox') {?>
        <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['label'], ENT_QUOTES, 'UTF-8');?>

      <?php }?>
    </label>
    <div class="col-md-6<?php if (($_smarty_tpl->tpl_vars['field']->value['type']==='radio-buttons')) {?> form-control-valign<?php }?>">

      <?php if ($_smarty_tpl->tpl_vars['field']->value['type']==='select') {?>

        <select class="form-control form-control-select" name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['name'], ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['field']->value['required']) {?>required<?php }?>>
          <option value disabled selected><?php echo smartyTranslate(array('s'=>'-- please choose --','d'=>'Shop.Forms.Labels'),$_smarty_tpl);?>
</option>
          <?php  $_smarty_tpl->tpl_vars["label"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["label"]->_loop = false;
 $_smarty_tpl->tpl_vars["value"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['field']->value['availableValues']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["label"]->key => $_smarty_tpl->tpl_vars["label"]->value) {
$_smarty_tpl->tpl_vars["label"]->_loop = true;
 $_smarty_tpl->tpl_vars["value"]->value = $_smarty_tpl->tpl_vars["label"]->key;
?>
            <option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['value']->value, ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['value']->value==$_smarty_tpl->tpl_vars['field']->value['value']) {?> selected <?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['label']->value, ENT_QUOTES, 'UTF-8');?>
</option>
          <?php } ?>
        </select>

      <?php } elseif ($_smarty_tpl->tpl_vars['field']->value['type']==='countrySelect') {?>

        <select
          class="form-control form-control-select js-country"
          name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['name'], ENT_QUOTES, 'UTF-8');?>
"
          <?php if ($_smarty_tpl->tpl_vars['field']->value['required']) {?>required<?php }?>
        >
          <option value disabled selected><?php echo smartyTranslate(array('s'=>'-- please choose --','d'=>'Shop.Forms.Labels'),$_smarty_tpl);?>
</option>
          <?php  $_smarty_tpl->tpl_vars["label"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["label"]->_loop = false;
 $_smarty_tpl->tpl_vars["value"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['field']->value['availableValues']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["label"]->key => $_smarty_tpl->tpl_vars["label"]->value) {
$_smarty_tpl->tpl_vars["label"]->_loop = true;
 $_smarty_tpl->tpl_vars["value"]->value = $_smarty_tpl->tpl_vars["label"]->key;
?>
            <option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['value']->value, ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['value']->value==$_smarty_tpl->tpl_vars['field']->value['value']) {?> selected <?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['label']->value, ENT_QUOTES, 'UTF-8');?>
</option>
          <?php } ?>
        </select>

      <?php } elseif ($_smarty_tpl->tpl_vars['field']->value['type']==='radio-buttons') {?>

        <?php  $_smarty_tpl->tpl_vars["label"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["label"]->_loop = false;
 $_smarty_tpl->tpl_vars["value"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['field']->value['availableValues']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["label"]->key => $_smarty_tpl->tpl_vars["label"]->value) {
$_smarty_tpl->tpl_vars["label"]->_loop = true;
 $_smarty_tpl->tpl_vars["value"]->value = $_smarty_tpl->tpl_vars["label"]->key;
?>
          <label class="radio-inline">
            <span class="custom-radio">
              <input
                name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['name'], ENT_QUOTES, 'UTF-8');?>
"
                type="radio"
                value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['value']->value, ENT_QUOTES, 'UTF-8');?>
"
                <?php if ($_smarty_tpl->tpl_vars['field']->value['required']) {?>required<?php }?>
                <?php if ($_smarty_tpl->tpl_vars['value']->value==$_smarty_tpl->tpl_vars['field']->value['value']) {?> checked <?php }?>
              >
              <span></span>
            </span>
            <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['label']->value, ENT_QUOTES, 'UTF-8');?>

          </label>
        <?php } ?>

      <?php } elseif ($_smarty_tpl->tpl_vars['field']->value['type']==='checkbox') {?>

        <span class="custom-checkbox">
          <input name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['name'], ENT_QUOTES, 'UTF-8');?>
" type="checkbox" value="1" <?php if ($_smarty_tpl->tpl_vars['field']->value['value']) {?>checked="checked"<?php }?> <?php if ($_smarty_tpl->tpl_vars['field']->value['required']) {?>required<?php }?>>
          <span><i class="material-icons checkbox-checked">&#xE5CA;</i></span>
          <label><?php echo $_smarty_tpl->tpl_vars['field']->value['label'];?>
</label >
        </span>

      <?php } elseif ($_smarty_tpl->tpl_vars['field']->value['type']==='date') {?>

        <input class="form-control" type="date" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['value'], ENT_QUOTES, 'UTF-8');?>
" placeholder="<?php if (isset($_smarty_tpl->tpl_vars['field']->value['availableValues']['placeholder'])) {?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['availableValues']['placeholder'], ENT_QUOTES, 'UTF-8');?>
<?php }?>">
        <?php if (isset($_smarty_tpl->tpl_vars['field']->value['availableValues']['comment'])) {?>
          <span class="form-control-comment">
            <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['availableValues']['comment'], ENT_QUOTES, 'UTF-8');?>

          </span>
        <?php }?>

      <?php } elseif ($_smarty_tpl->tpl_vars['field']->value['type']==='birthday') {?>

        <div class="js-parent-focus">
          <?php ob_start();?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['value'], ENT_QUOTES, 'UTF-8');?>
<?php $_tmp1=ob_get_clean();?><?php ob_start();?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['name'], ENT_QUOTES, 'UTF-8');?>
<?php $_tmp2=ob_get_clean();?><?php ob_start();?><?php echo smartyTranslate(array('s'=>'-- day --','d'=>'Shop.Forms.Labels'),$_smarty_tpl);?>
<?php $_tmp3=ob_get_clean();?><?php ob_start();?><?php echo smartyTranslate(array('s'=>'-- month --','d'=>'Shop.Forms.Labels'),$_smarty_tpl);?>
<?php $_tmp4=ob_get_clean();?><?php ob_start();?><?php echo smartyTranslate(array('s'=>'-- year --','d'=>'Shop.Forms.Labels'),$_smarty_tpl);?>
<?php $_tmp5=ob_get_clean();?><?php ob_start();?><?php echo htmlspecialchars(date('Y'), ENT_QUOTES, 'UTF-8');?>
<?php $_tmp6=ob_get_clean();?><?php ob_start();?><?php echo htmlspecialchars(date('Y'), ENT_QUOTES, 'UTF-8');?>
<?php $_tmp7=ob_get_clean();?><?php echo smarty_function_html_select_date(array('field_order'=>'DMY','time'=>$_tmp1,'field_array'=>$_tmp2,'prefix'=>false,'reverse_years'=>true,'field_separator'=>'<br>','day_extra'=>'class="form-control form-control-select"','month_extra'=>'class="form-control form-control-select"','year_extra'=>'class="form-control form-control-select"','day_empty'=>$_tmp3,'month_empty'=>$_tmp4,'year_empty'=>$_tmp5,'start_year'=>$_tmp6-100,'end_year'=>$_tmp7),$_smarty_tpl);?>

        </div>

      <?php } elseif ($_smarty_tpl->tpl_vars['field']->value['type']==='password') {?>

        <div class="input-group js-parent-focus">
          <input
            class="form-control js-child-focus js-visible-password"
            name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['name'], ENT_QUOTES, 'UTF-8');?>
"
            type="password"
            value=""
            pattern=".{5,}"
            <?php if ($_smarty_tpl->tpl_vars['field']->value['required']) {?>required<?php }?>
          >
          <span class="input-group-btn">
            <button
              class="btn"
              type="button"
              data-action="show-password"
              data-text-show="<?php echo smartyTranslate(array('s'=>'Show','d'=>'Shop.Theme.Actions'),$_smarty_tpl);?>
"
              data-text-hide="<?php echo smartyTranslate(array('s'=>'Hide','d'=>'Shop.Theme.Actions'),$_smarty_tpl);?>
"
            >
              <?php echo smartyTranslate(array('s'=>'Show','d'=>'Shop.Theme.Actions'),$_smarty_tpl);?>

            </button>
          </span>
        </div>
      <?php } else { ?>

        <input
          class="form-control"
          name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['name'], ENT_QUOTES, 'UTF-8');?>
"
          type="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['type'], ENT_QUOTES, 'UTF-8');?>
"
          value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['value'], ENT_QUOTES, 'UTF-8');?>
"
          <?php if (isset($_smarty_tpl->tpl_vars['field']->value['availableValues']['placeholder'])) {?>placeholder="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['availableValues']['placeholder'], ENT_QUOTES, 'UTF-8');?>
"<?php }?>
          <?php if ($_smarty_tpl->tpl_vars['field']->value['maxLength']) {?>maxlength="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['maxLength'], ENT_QUOTES, 'UTF-8');?>
"<?php }?>
          <?php if ($_smarty_tpl->tpl_vars['field']->value['required']) {?>required<?php }?>
        >
        <?php if (isset($_smarty_tpl->tpl_vars['field']->value['availableValues']['comment'])) {?>
          <span class="form-control-comment">
            <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['availableValues']['comment'], ENT_QUOTES, 'UTF-8');?>

          </span>
        <?php }?>

      <?php }?>

      <?php echo $_smarty_tpl->getSubTemplate ('_partials/form-errors.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('errors'=>$_smarty_tpl->tpl_vars['field']->value['errors']), 0);?>


    </div>

    <div class="col-md-3 form-control-comment">
      <?php if ((!$_smarty_tpl->tpl_vars['field']->value['required']&&!in_array($_smarty_tpl->tpl_vars['field']->value['type'],array('radio-buttons','checkbox')))) {?>
       <?php echo smartyTranslate(array('s'=>'Optional','d'=>'Shop.Forms.Labels'),$_smarty_tpl);?>

      <?php }?>
    </div>
  </div>

<?php }?>
<?php }} ?>
