<?php
/* Smarty version 3.1.33, created on 2020-06-17 10:37:34
  from 'D:\PROGRAMAS\xampp\htdocs\samcom\themes\classic\templates\checkout\_partials\steps\unreachable.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5ee9d64ea9c690_35251836',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '76646fc8ac6ae2313d4bd39e23fa38a4e523a54f' => 
    array (
      0 => 'D:\\PROGRAMAS\\xampp\\htdocs\\samcom\\themes\\classic\\templates\\checkout\\_partials\\steps\\unreachable.tpl',
      1 => 1587040546,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ee9d64ea9c690_35251836 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4151217745ee9d64ea9b815_51598515', 'step');
?>

<?php }
/* {block 'step'} */
class Block_4151217745ee9d64ea9b815_51598515 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'step' => 
  array (
    0 => 'Block_4151217745ee9d64ea9b815_51598515',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <section class="checkout-step -unreachable" id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['identifier']->value, ENT_QUOTES, 'UTF-8');?>
">
    <h1 class="step-title h3">
      <span class="step-number"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['position']->value, ENT_QUOTES, 'UTF-8');?>
</span> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['title']->value, ENT_QUOTES, 'UTF-8');?>

    </h1>
  </section>
<?php
}
}
/* {/block 'step'} */
}
