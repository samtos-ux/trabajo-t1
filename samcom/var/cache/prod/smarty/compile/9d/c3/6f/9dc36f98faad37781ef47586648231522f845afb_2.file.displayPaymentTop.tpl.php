<?php
/* Smarty version 3.1.33, created on 2020-06-17 10:39:31
  from 'D:\PROGRAMAS\xampp\htdocs\samcom\modules\ps_checkout\views\templates\hook\displayPaymentTop.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5ee9d6c31cf707_01178677',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9dc36f98faad37781ef47586648231522f845afb' => 
    array (
      0 => 'D:\\PROGRAMAS\\xampp\\htdocs\\samcom\\modules\\ps_checkout\\views\\templates\\hook\\displayPaymentTop.tpl',
      1 => 1591984565,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ee9d6c31cf707_01178677 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['paymentError']->value) {?>
  <div class="alert alert-danger">
    <p><strong><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Processing payment error','mod'=>'ps_checkout'),$_smarty_tpl ) );?>
</strong></p>
    <p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Payment failed, you have not been charged.','mod'=>'ps_checkout'),$_smarty_tpl ) );?>
</p>
    <p><?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['paymentErrorMessage']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
</p>
  </div>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['isExpressCheckout']->value) {?>
<div class="express-checkout-block mb-2">
  <img src="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['paypalLogoPath']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" class="express-checkout-img" alt="PayPal">
  <p class="express-checkout-label">
    <?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['translatedText']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>

  </p>
</div>

<?php echo '<script'; ?>
>
  document.addEventListener('DOMContentLoaded', () => {
    const paymentOptions = document.querySelectorAll('input[name="payment-option"]');

    paymentOptions.forEach(function(paymentOption) {
      const paymentOptionContainer = document.getElementById(paymentOption.id + '-container');
      const paymentOptionName = paymentOption.getAttribute('data-module-name');

      if ('ps_checkout_expressCheckout' === paymentOptionName) {
        paymentOption.click();
      } else {
        paymentOption.disabled = true;
        paymentOptionContainer.style.display = 'none';
      }
    });
  });
<?php echo '</script'; ?>
>
<?php }
}
}
