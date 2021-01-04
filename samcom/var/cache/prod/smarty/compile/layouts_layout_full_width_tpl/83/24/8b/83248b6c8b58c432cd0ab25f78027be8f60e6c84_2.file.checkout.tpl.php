<?php
/* Smarty version 3.1.33, created on 2020-06-17 10:37:34
  from 'D:\PROGRAMAS\xampp\htdocs\samcom\themes\classic\templates\checkout\checkout.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5ee9d64e055446_83392078',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '83248b6c8b58c432cd0ab25f78027be8f60e6c84' => 
    array (
      0 => 'D:\\PROGRAMAS\\xampp\\htdocs\\samcom\\themes\\classic\\templates\\checkout\\checkout.tpl',
      1 => 1587040546,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:_partials/head.tpl' => 1,
    'file:checkout/_partials/header.tpl' => 1,
    'file:_partials/notifications.tpl' => 1,
    'file:checkout/_partials/cart-summary.tpl' => 1,
    'file:checkout/_partials/footer.tpl' => 1,
    'file:_partials/javascript.tpl' => 1,
  ),
),false)) {
function content_5ee9d64e055446_83392078 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!doctype html>
<html lang="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['language']->value['iso_code'], ENT_QUOTES, 'UTF-8');?>
">

  <head>
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2755212095ee9d64e03cf10_55331390', 'head');
?>

  </head>

  <body id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value['page_name'], ENT_QUOTES, 'UTF-8');?>
" class="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'classnames' ][ 0 ], array( $_smarty_tpl->tpl_vars['page']->value['body_classes'] )), ENT_QUOTES, 'UTF-8');?>
">

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10449673655ee9d64e0455c9_69872030', 'hook_after_body_opening_tag');
?>


    <header id="header">
      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_903921815ee9d64e049a01_34155939', 'header');
?>

    </header>

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4060425645ee9d64e04a584_00353221', 'notifications');
?>


    <section id="wrapper">
      <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayWrapperTop"),$_smarty_tpl ) );?>

      <div class="container">

      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6549377575ee9d64e04f707_14834892', 'content');
?>

      </div>
      <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayWrapperBottom"),$_smarty_tpl ) );?>

    </section>

    <footer id="footer">
      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15108386765ee9d64e052bd4_52529712', 'footer');
?>

    </footer>

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7059330435ee9d64e053747_25261331', 'javascript_bottom');
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3142965485ee9d64e054856_40309340', 'hook_before_body_closing_tag');
?>


  </body>

</html>
<?php }
/* {block 'head'} */
class Block_2755212095ee9d64e03cf10_55331390 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head' => 
  array (
    0 => 'Block_2755212095ee9d64e03cf10_55331390',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php $_smarty_tpl->_subTemplateRender('file:_partials/head.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <?php
}
}
/* {/block 'head'} */
/* {block 'hook_after_body_opening_tag'} */
class Block_10449673655ee9d64e0455c9_69872030 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'hook_after_body_opening_tag' => 
  array (
    0 => 'Block_10449673655ee9d64e0455c9_69872030',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayAfterBodyOpeningTag'),$_smarty_tpl ) );?>

    <?php
}
}
/* {/block 'hook_after_body_opening_tag'} */
/* {block 'header'} */
class Block_903921815ee9d64e049a01_34155939 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header' => 
  array (
    0 => 'Block_903921815ee9d64e049a01_34155939',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <?php $_smarty_tpl->_subTemplateRender('file:checkout/_partials/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
      <?php
}
}
/* {/block 'header'} */
/* {block 'notifications'} */
class Block_4060425645ee9d64e04a584_00353221 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'notifications' => 
  array (
    0 => 'Block_4060425645ee9d64e04a584_00353221',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php $_smarty_tpl->_subTemplateRender('file:_partials/notifications.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <?php
}
}
/* {/block 'notifications'} */
/* {block 'cart_summary'} */
class Block_13242374995ee9d64e04fb69_35213913 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['render'][0], array( array('file'=>'checkout/checkout-process.tpl','ui'=>$_smarty_tpl->tpl_vars['checkout_process']->value),$_smarty_tpl ) );?>

              <?php
}
}
/* {/block 'cart_summary'} */
/* {block 'cart_summary'} */
class Block_21436682475ee9d64e0511e1_87868529 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                <?php $_smarty_tpl->_subTemplateRender('file:checkout/_partials/cart-summary.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('cart'=>$_smarty_tpl->tpl_vars['cart']->value), 0, false);
?>
              <?php
}
}
/* {/block 'cart_summary'} */
/* {block 'content'} */
class Block_6549377575ee9d64e04f707_14834892 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_6549377575ee9d64e04f707_14834892',
  ),
  'cart_summary' => 
  array (
    0 => 'Block_13242374995ee9d64e04fb69_35213913',
    1 => 'Block_21436682475ee9d64e0511e1_87868529',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <section id="content">
          <div class="row">
            <div class="cart-grid-body col-xs-12 col-lg-8">
              <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13242374995ee9d64e04fb69_35213913', 'cart_summary', $this->tplIndex);
?>

            </div>

            <div class="cart-grid-right col-xs-12 col-lg-4">

              <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_21436682475ee9d64e0511e1_87868529', 'cart_summary', $this->tplIndex);
?>


              <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayReassurance'),$_smarty_tpl ) );?>

            </div>
          </div>
        </section>
      <?php
}
}
/* {/block 'content'} */
/* {block 'footer'} */
class Block_15108386765ee9d64e052bd4_52529712 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_15108386765ee9d64e052bd4_52529712',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <?php $_smarty_tpl->_subTemplateRender('file:checkout/_partials/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
      <?php
}
}
/* {/block 'footer'} */
/* {block 'javascript_bottom'} */
class Block_7059330435ee9d64e053747_25261331 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'javascript_bottom' => 
  array (
    0 => 'Block_7059330435ee9d64e053747_25261331',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php $_smarty_tpl->_subTemplateRender("file:_partials/javascript.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('javascript'=>$_smarty_tpl->tpl_vars['javascript']->value['bottom']), 0, false);
?>
    <?php
}
}
/* {/block 'javascript_bottom'} */
/* {block 'hook_before_body_closing_tag'} */
class Block_3142965485ee9d64e054856_40309340 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'hook_before_body_closing_tag' => 
  array (
    0 => 'Block_3142965485ee9d64e054856_40309340',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayBeforeBodyClosingTag'),$_smarty_tpl ) );?>

    <?php
}
}
/* {/block 'hook_before_body_closing_tag'} */
}
