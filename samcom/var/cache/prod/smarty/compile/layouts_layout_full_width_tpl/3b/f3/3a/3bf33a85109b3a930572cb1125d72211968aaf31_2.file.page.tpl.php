<?php
/* Smarty version 3.1.33, created on 2020-06-14 13:29:33
  from 'D:\PROGRAMAS\xampp\htdocs\samcom\themes\classic\templates\customer\page.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5ee60a1dc4ea69_11983537',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3bf33a85109b3a930572cb1125d72211968aaf31' => 
    array (
      0 => 'D:\\PROGRAMAS\\xampp\\htdocs\\samcom\\themes\\classic\\templates\\customer\\page.tpl',
      1 => 1587040546,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:_partials/notifications.tpl' => 1,
    'file:customer/_partials/my-account-links.tpl' => 1,
  ),
),false)) {
function content_5ee60a1dc4ea69_11983537 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19842440465ee60a1dc46738_35328384', 'notifications');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5486546975ee60a1dc46f80_50417361', 'page_content_container');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17209816915ee60a1dc4d9a9_11834364', 'page_footer');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'page.tpl');
}
/* {block 'notifications'} */
class Block_19842440465ee60a1dc46738_35328384 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'notifications' => 
  array (
    0 => 'Block_19842440465ee60a1dc46738_35328384',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'notifications'} */
/* {block 'customer_notifications'} */
class Block_17443482505ee60a1dc47804_37093183 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <?php $_smarty_tpl->_subTemplateRender('file:_partials/notifications.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
      <?php
}
}
/* {/block 'customer_notifications'} */
/* {block 'page_content_top'} */
class Block_19444973115ee60a1dc473c0_21491415 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17443482505ee60a1dc47804_37093183', 'customer_notifications', $this->tplIndex);
?>

    <?php
}
}
/* {/block 'page_content_top'} */
/* {block 'page_content'} */
class Block_12117545745ee60a1dc4cfc1_82141970 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <!-- Page content -->
    <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_5486546975ee60a1dc46f80_50417361 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content_container' => 
  array (
    0 => 'Block_5486546975ee60a1dc46f80_50417361',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_19444973115ee60a1dc473c0_21491415',
  ),
  'customer_notifications' => 
  array (
    0 => 'Block_17443482505ee60a1dc47804_37093183',
  ),
  'page_content' => 
  array (
    0 => 'Block_12117545745ee60a1dc4cfc1_82141970',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <section id="content" class="page-content">
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19444973115ee60a1dc473c0_21491415', 'page_content_top', $this->tplIndex);
?>

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12117545745ee60a1dc4cfc1_82141970', 'page_content', $this->tplIndex);
?>

  </section>
<?php
}
}
/* {/block 'page_content_container'} */
/* {block 'my_account_links'} */
class Block_45032585ee60a1dc4ddd7_78740257 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php $_smarty_tpl->_subTemplateRender('file:customer/_partials/my-account-links.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
  <?php
}
}
/* {/block 'my_account_links'} */
/* {block 'page_footer'} */
class Block_17209816915ee60a1dc4d9a9_11834364 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_footer' => 
  array (
    0 => 'Block_17209816915ee60a1dc4d9a9_11834364',
  ),
  'my_account_links' => 
  array (
    0 => 'Block_45032585ee60a1dc4ddd7_78740257',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_45032585ee60a1dc4ddd7_78740257', 'my_account_links', $this->tplIndex);
?>

<?php
}
}
/* {/block 'page_footer'} */
}
