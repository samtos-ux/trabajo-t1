<?php
/* Smarty version 3.1.33, created on 2020-06-17 10:37:27
  from 'D:\PROGRAMAS\xampp\htdocs\samcom\themes\classic\templates\checkout\_partials\cart-detailed-actions.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5ee9d64799d947_30848183',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7f37b4489b4a8e2ee3e4e3006f7f439c18a2272d' => 
    array (
      0 => 'D:\\PROGRAMAS\\xampp\\htdocs\\samcom\\themes\\classic\\templates\\checkout\\_partials\\cart-detailed-actions.tpl',
      1 => 1587040546,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ee9d64799d947_30848183 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1506265165ee9d647999773_50484431', 'cart_detailed_actions');
?>

<?php }
/* {block 'cart_detailed_actions'} */
class Block_1506265165ee9d647999773_50484431 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'cart_detailed_actions' => 
  array (
    0 => 'Block_1506265165ee9d647999773_50484431',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <div class="checkout cart-detailed-actions card-block">
    <?php if ($_smarty_tpl->tpl_vars['cart']->value['minimalPurchaseRequired']) {?>
      <div class="alert alert-warning" role="alert">
        <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cart']->value['minimalPurchaseRequired'], ENT_QUOTES, 'UTF-8');?>

      </div>
      <div class="text-sm-center">
        <button type="button" class="btn btn-primary disabled" disabled><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Proceed to checkout','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
</button>
      </div>
    <?php } elseif (empty($_smarty_tpl->tpl_vars['cart']->value['products'])) {?>
      <div class="text-sm-center">
        <button type="button" class="btn btn-primary disabled" disabled><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Proceed to checkout','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
</button>
      </div>
    <?php } else { ?>
      <div class="text-sm-center">
        <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['pages']['order'], ENT_QUOTES, 'UTF-8');?>
" class="btn btn-primary"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Proceed to checkout','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
</a>
        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayExpressCheckout'),$_smarty_tpl ) );?>

      </div>
    <?php }?>
  </div>
<?php
}
}
/* {/block 'cart_detailed_actions'} */
}
