<?php
/* Smarty version 3.1.33, created on 2020-06-17 10:37:35
  from 'D:\PROGRAMAS\xampp\htdocs\samcom\themes\classic\templates\checkout\_partials\footer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5ee9d64f8763e0_12463872',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a2017442d804acd031fb57f3319c970a14a4222a' => 
    array (
      0 => 'D:\\PROGRAMAS\\xampp\\htdocs\\samcom\\themes\\classic\\templates\\checkout\\_partials\\footer.tpl',
      1 => 1587040546,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ee9d64f8763e0_12463872 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15089045595ee9d64f873bc2_89369209', 'footer');
?>

<?php }
/* {block 'footer'} */
class Block_15089045595ee9d64f873bc2_89369209 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_15089045595ee9d64f873bc2_89369209',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="text-sm-center">
  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'%copyright% %year% - Ecommerce software by %prestashop%','sprintf'=>array('%prestashop%'=>'PrestaShop™','%year%'=>date('Y'),'%copyright%'=>'©'),'d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>

</div>
<?php
}
}
/* {/block 'footer'} */
}
