<?php
/* Smarty version 3.1.33, created on 2020-06-14 13:29:33
  from 'D:\PROGRAMAS\xampp\htdocs\samcom\themes\classic\templates\page.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5ee60a1dca8c32_08216811',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6413c66e29da43edbce2a10f5749f1422d34722b' => 
    array (
      0 => 'D:\\PROGRAMAS\\xampp\\htdocs\\samcom\\themes\\classic\\templates\\page.tpl',
      1 => 1587040546,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ee60a1dca8c32_08216811 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10061028715ee60a1dc866b9_63078495', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, $_smarty_tpl->tpl_vars['layout']->value);
}
/* {block 'page_title'} */
class Block_4919479565ee60a1dc87158_41602311 extends Smarty_Internal_Block
{
public $callsChild = 'true';
public $hide = 'true';
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <header class="page-header">
          <h1><?php 
$_smarty_tpl->inheritance->callChild($_smarty_tpl, $this);
?>
</h1>
        </header>
      <?php
}
}
/* {/block 'page_title'} */
/* {block 'page_header_container'} */
class Block_1665900855ee60a1dc86bb9_89267403 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4919479565ee60a1dc87158_41602311', 'page_title', $this->tplIndex);
?>

    <?php
}
}
/* {/block 'page_header_container'} */
/* {block 'page_content_top'} */
class Block_10070614675ee60a1dca6d46_50812897 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'page_content'} */
class Block_2474155255ee60a1dca7314_43469401 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Page content -->
        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_2366692125ee60a1dca68a0_74667224 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <section id="content" class="page-content card card-block">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10070614675ee60a1dca6d46_50812897', 'page_content_top', $this->tplIndex);
?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2474155255ee60a1dca7314_43469401', 'page_content', $this->tplIndex);
?>

      </section>
    <?php
}
}
/* {/block 'page_content_container'} */
/* {block 'page_footer'} */
class Block_14641457835ee60a1dca8074_92068673 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Footer content -->
        <?php
}
}
/* {/block 'page_footer'} */
/* {block 'page_footer_container'} */
class Block_21467492845ee60a1dca7c48_96654732 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <footer class="page-footer">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14641457835ee60a1dca8074_92068673', 'page_footer', $this->tplIndex);
?>

      </footer>
    <?php
}
}
/* {/block 'page_footer_container'} */
/* {block 'content'} */
class Block_10061028715ee60a1dc866b9_63078495 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_10061028715ee60a1dc866b9_63078495',
  ),
  'page_header_container' => 
  array (
    0 => 'Block_1665900855ee60a1dc86bb9_89267403',
  ),
  'page_title' => 
  array (
    0 => 'Block_4919479565ee60a1dc87158_41602311',
  ),
  'page_content_container' => 
  array (
    0 => 'Block_2366692125ee60a1dca68a0_74667224',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_10070614675ee60a1dca6d46_50812897',
  ),
  'page_content' => 
  array (
    0 => 'Block_2474155255ee60a1dca7314_43469401',
  ),
  'page_footer_container' => 
  array (
    0 => 'Block_21467492845ee60a1dca7c48_96654732',
  ),
  'page_footer' => 
  array (
    0 => 'Block_14641457835ee60a1dca8074_92068673',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


  <section id="main">

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1665900855ee60a1dc86bb9_89267403', 'page_header_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2366692125ee60a1dca68a0_74667224', 'page_content_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_21467492845ee60a1dca7c48_96654732', 'page_footer_container', $this->tplIndex);
?>


  </section>

<?php
}
}
/* {/block 'content'} */
}
