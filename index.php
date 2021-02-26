<?php
// SDK de Mercado Pago
require __DIR__ .  '/vendor/autoload.php';

// Agrega credenciales
MercadoPago\SDK::setAccessToken('TEST-1928287830883831-022605-158bf009bd75e8e4a1dc43582f116144-297467774');

// Crea un objeto de preferencia
$preference = new MercadoPago\Preference();

// Crea un ítem en la preferencia
$item = new MercadoPago\Item();
$item->title = 'Mi producto';
$item->quantity = 1;
$item->unit_price = 75.56;
$preference->items = array($item);
$preference->save();
?>

<script
  src="https://www.mercadopago.com.mx/integrations/v1/web-payment-checkout.js"
  data-preference-id="<?php echo $preference->id; ?>">
</script>