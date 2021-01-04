<?php
/* Smarty version 3.1.33, created on 2020-06-17 10:37:34
  from 'D:\PROGRAMAS\xampp\htdocs\samcom\themes\classic\templates\checkout\_partials\steps\checkout-step.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5ee9d64e7c9669_95515527',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5faaf2c7a2860f30b7ffc9696f689ae50ef18d0e' => 
    array (
      0 => 'D:\\PROGRAMAS\\xampp\\htdocs\\samcom\\themes\\classic\\templates\\checkout\\_partials\\steps\\checkout-step.tpl',
      1 => 1587040546,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ee9d64e7c9669_95515527 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2342258915ee9d64e7c62e2_12648457', 'step');
?>

<?php }
/* {block 'step_content'} */
class Block_16026704095ee9d64e7c8d14_80361041 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
DUMMY STEP CONTENT<?php
}
}
/* {/block 'step_content'} */
/* {block 'step'} */
class Block_2342258915ee9d64e7c62e2_12648457 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'step' => 
  array (
    0 => 'Block_2342258915ee9d64e7c62e2_12648457',
  ),
  'step_content' => 
  array (
    0 => 'Block_16026704095ee9d64e7c8d14_80361041',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <section  id    = "<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['identifier']->value, ENT_QUOTES, 'UTF-8');?>
"
            class = "<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'classnames' ][ 0 ], array( array('checkout-step'=>true,'-current'=>$_smarty_tpl->tpl_vars['step_is_current']->value,'-reachable'=>$_smarty_tpl->tpl_vars['step_is_reachable']->value,'-complete'=>$_smarty_tpl->tpl_vars['step_is_complete']->value,'js-current-step'=>$_smarty_tpl->tpl_vars['step_is_current']->value) )), ENT_QUOTES, 'UTF-8');?>
"
  >
    <h1 class="step-title h3">
      <i class="material-icons rtl-no-flip done">&#xE876;</i>
      <span class="step-number"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['position']->value, ENT_QUOTES, 'UTF-8');?>
</span>
      <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['title']->value, ENT_QUOTES, 'UTF-8');?>

      <span class="step-edit text-muted"><i class="material-icons edit">mode_edit</i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Edit','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
</span>
    </h1>

    <div class="content">
      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16026704095ee9d64e7c8d14_80361041', 'step_content', $this->tplIndex);
?>

    </div>
  </section>
<?php
}
}
/* {/block 'step'} */
}
