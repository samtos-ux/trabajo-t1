<?php
/* Smarty version 3.1.33, created on 2020-06-17 10:37:04
  from 'D:\PROGRAMAS\xampp\htdocs\samcom\themes\classic\templates\catalog\_partials\product-additional-info.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5ee9d630402c44_67461222',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7c540df7ba9708ac840344ba27b1e2ff99aea284' => 
    array (
      0 => 'D:\\PROGRAMAS\\xampp\\htdocs\\samcom\\themes\\classic\\templates\\catalog\\_partials\\product-additional-info.tpl',
      1 => 1587040546,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ee9d630402c44_67461222 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="product-additional-info">
  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductAdditionalInfo','product'=>$_smarty_tpl->tpl_vars['product']->value),$_smarty_tpl ) );?>

</div>
<?php }
}
