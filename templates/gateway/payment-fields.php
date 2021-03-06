<?php

if (!defined('ABSPATH')) {
    exit;
}

global $aplazame;
global $woocommerce;
?>

<!-- TODO: aplazame-js feature require -->
<style type="text/css">
#payment ul li.payment_method_aplazame {
  /*display: none;*/
}
</style>

<noscript>
  <?php printf(__('It is necessary to enable JavaScript, %s does not work without JS.', 'aplazame'), $aplazame->host) ?>
</noscript>

<p>
  Aplaza o fracciona tu compra con <a href="https://aplazame.com" target="_blank">Aplazame</a>.<br>
  Obtén financiación al instante sólo con tu Nombre y Apellidos, DNI/NIE, Teléfono y tarjeta de débito o crédito.<br>
  Sin comisiones ocultas ni letra pequeña.<br>
</p>

<script>
aplazame.button({
  selector: "<?php echo $aplazame->settings['button']; ?>",
  amount: <?php echo Aplazame_Filters::decimals($woocommerce->cart->total); ?>,
  currency: "<?php echo get_woocommerce_currency() ?>"
});
</script>
