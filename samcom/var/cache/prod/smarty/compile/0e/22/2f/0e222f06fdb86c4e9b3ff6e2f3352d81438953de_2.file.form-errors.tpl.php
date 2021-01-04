<?php
/* Smarty version 3.1.33, created on 2020-06-17 10:37:34
  from 'D:\PROGRAMAS\xampp\htdocs\samcom\themes\classic\templates\_partials\form-errors.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5ee9d64e9027c9_86508436',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0e222f06fdb86c4e9b3ff6e2f3352d81438953de' => 
    array (
      0 => 'D:\\PROGRAMAS\\xampp\\htdocs\\samcom\\themes\\classic\\templates\\_partials\\form-errors.tpl',
      1 => 1587040546,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ee9d64e9027c9_86508436 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
if (count($_smarty_tpl->tpl_vars['errors']->value)) {?>
  <div class="help-block">
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8188215455ee9d64e8ff0a4_88732433', 'form_errors');
?>

  </div>
<?php }
}
/* {block 'form_errors'} */
class Block_8188215455ee9d64e8ff0a4_88732433 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'form_errors' => 
  array (
    0 => 'Block_8188215455ee9d64e8ff0a4_88732433',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <ul>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['errors']->value, 'error');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['error']->value) {
?>
          <li class="alert alert-danger"><?php echo nl2br($_smarty_tpl->tpl_vars['error']->value);?>
</li>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
      </ul>
    <?php
}
}
/* {/block 'form_errors'} */
}
