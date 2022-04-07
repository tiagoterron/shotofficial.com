<?php
   //$xml = simplexml_load_file("http://www.ecb.int/stats/eurofxref/eurofxref-daily.xml");
   
	$usd = $xml->Cube->Cube->Cube[0]["rate"][0];
	$brl = $xml->Cube->Cube->Cube[18]["rate"][0];
	
	if(!empty($_SESSION["id_user_on"])){
	$SQL = "SELECT * FROM tb_signup WHERE id = ".$_SESSION["id_user_on"];
	$SQL = mysqli_query($connect, $SQL);
	$SQL_Q = mysql_fetch_assoc($SQL);
	$first_name_q = html_entity_decode($SQL_Q["first_name"]);
	$last_name_q = html_entity_decode($SQL_Q["last_name"]);
	$adress_q = html_entity_decode($SQL_Q["street_adress"]);
	$city_q = html_entity_decode($SQL_Q["city"]);
	$state_q = html_entity_decode($SQL_Q["state_province"]);
	$zip_post_q = html_entity_decode($SQL_Q["zip_post"]);
	$email_q = html_entity_decode($SQL_Q["email"]);
	$country_q = html_entity_decode($SQL_Q["country"]);
	if($country_q == "BR"){
	$currency = "BRL";
	}else{
	$currency = "USD";
	}
	}
	
   ?>
<div class="box_content_middle">
    <label class="title"><h2><?php echo "Shopping cart / my items"; ?></h2></label>
    <br clear="all" />
	<?php //include "_includes/shopping-cart.php"; ?>
	<?php
	$SQL = "SELECT a.modelo, a.color,a.id, a.quantidade, b.usd_preco, b.brl_preco, b.titulo, b.imagem, a.id_produto FROM tb_store_carrinho a LEFT JOIN tb_store_produtos b ON a.id_produto = b.id WHERE a.id_sessao = '$id_sessao'";
	$SQL = mysqli_query($connect, $SQL);
	$SQL_N = @mysqli_num_rows($SQL);
	?>
	<form name="form_shopping_cart" action="<?php echo PATH ?>exec/update-shopping-cart/" method="post">
	<ul class="ul-shopping-cart">
		<li class="w75">&nbsp;</li>
		<li class="i">Item(s)</li>
		<li class="w100">Price</li>
		<li class="w75">Quantity</li>
		<li class="w100">Total</li>
		<li class="i2">&nbsp;</li>
		<div class="both"></div>
	</ul>
	<?php
	if($SQL_N > 0){
	while($SQL_Q = mysql_fetch_assoc($SQL)){
	$t_id = $SQL_Q["id"];
	$t_quantidade = $SQL_Q["quantidade"];
	$id_produto = $SQL_Q["id_produto"];
	if($country_q == "BR"){
	$t_valor = html_entity_decode($SQL_Q["brl_preco"]);
	$txt_currency = "R$ ";
	}else{
	$t_valor = html_entity_decode($SQL_Q["usd_preco"]);
	$txt_currency = "USD ";
	}
	//$t_valor = $SQL_Q["usd_preco"];
	$t_valor_per = $t_valor;
	$t_total = $t_quantidade*$t_valor;
	$t_imagem = html_entity_decode($SQL_Q["imagem"]);
	$t_titulo = html_entity_decode($SQL_Q["titulo"]);
	$t_modelo = html_entity_decode($SQL_Q["modelo"]);
	$t_color = explode("_", html_entity_decode($SQL_Q["color"]));
	switch($t_modelo){
	case "S":
	$t_modelo = "Small";
	break;
	case "M":
	$t_modelo = "Medium";
	break;
	case "L":
	$t_modelo = "Large";
	break;
	case "XL":
	$t_modelo = "X-Large";
	break;
	default:
	$t_modelo = "";
	break;
	}
	if(!empty($t_modelo)){
	$modelo = " ($t_modelo)";
	}else{
	$modelo = "";
	}
	
	
	if($currency == "BRL"){
	//echo gmp_div_r($t_valor_per)/gmp_div_r($usd);
	}
	?>
	<ul class="ul-shopping-cart-2">
		<li class="w75 i3">
        <?php
		if($t_color[1] != "main" and $modelo != ""){
		$colors = " (".$t_color[1].")";
		$SQL_T = "SELECT imagem FROM tb_store_produtos_fotos WHERE id_produto = $id_produto AND descricao = '".$t_color[1]."'";
		$SQL_T = mysqli_query($connect, $SQL_T);
		
		if(mysqli_num_rows($SQL_T) > 0){
		$new_image = mysql_result($SQL_T, 0);	
		}
		?>
		<img class="item_image" src="<?php echo PATH ?>_images/_uploads/imgs/_thumbs/min_<?php echo $new_image; ?>" width="50" />
        <?php
		}else{
		$colors ="";
		?>
        <img class="item_image" src="<?php echo PATH ?>_images/_uploads/_thumbs/min_<?php echo $t_imagem; ?>" width="50" />
        <?php
		}
		?>
		</li>
		<li class="i"><?php echo $t_titulo.$modelo.$colors?></li>
		<li class="w100"><?php echo $txt_currency; ?> <?php echo number_format($t_valor, 2, ',', '.'); ?></li>
		<li class="w50"><input type="text" value="<?php echo $t_quantidade; ?>" name="quant_<?php echo $t_id; ?>" class="quantity" /></li>
		<li class="w100"><?php echo $txt_currency; ?> <?php echo number_format($t_total, 2, ',', '.'); ?></li>
		<li class="i2"><a href="<?php echo PATH ?>exec/delete-item-shopping-cart/<?php echo $t_id; ?>"><img src="<?php echo PATH ?>_images/btn-remove.jpg" /></a></li>
		<div class="both"></div>
	</ul>
	<?php
	}
	}else{
	?>
	<ul class="ul-shopping-cart-2">
		<li>Shopping Cart is empty...</li>
		<div class="both"></div>
	</ul>
	<?php
	}
	?>
	<ul class="ul-shopping-cart-3">
		<li class="w75">&nbsp;</li>
		<li class="i">&nbsp;</li>
		<li class="w100">&nbsp;</li>
		<li class="w50"><input type="image" src="<?php echo PATH ?>_images/btn-update.jpg" /></li>
		<li class="w100">&nbsp;</li>
		<li class="i2">&nbsp;</li>
		<div class="both"></div>
	</ul>
	</form>
	<br clear="all" />
	<?php /*?><div class="add-note-seller"><a href="">add a note for the seller...</a></div><?php */?>
	<form action="https://www.paypal.com/cgi-bin/webscr" id="formPaypal" name="formPaypal" onsubmit="return checa_values()" method="post">
	<?php
	$SQL = "SELECT a.id, a.id_produto, a.quantidade, b.usd_preco, b.brl_preco, b.titulo, b.imagem FROM tb_store_carrinho a LEFT JOIN tb_store_produtos b ON a.id_produto = b.id WHERE a.id_sessao = '$id_sessao'";
	$SQL = mysqli_query($connect, $SQL);
	?>
	<?php
	if(!empty($_SESSION["id_user_on"])){
	?>
    <input type="hidden" name="cmd" value="_cart">
	<?php /*?><input type="hidden" name="business" value="shotband69-facilitator@gmail.com"><?php */?>
    <input type="hidden" name="business" value="<?php echo EMAIL ?>">
	<input type="hidden" name="upload" value="1">
	<?php
	$i = 1;
	while($SQL_Q = mysql_fetch_assoc($SQL)){
	$t_id = $SQL_Q["id"];
	$t_id_produto = $SQL_Q["id_produto"];
	$t_quantidade = $SQL_Q["quantidade"];
	if($country_q == "BR"){
	$t_valor = html_entity_decode($SQL_Q["brl_preco"]);
	}else{
	$t_valor = html_entity_decode($SQL_Q["usd_preco"]);
	}
	
	$porc = 5.0/100.0;
	$t_porcentagem = ($t_valor + ($porc * $t_valor)-$t_valor);
	$t_total = $t_quantidade*$t_valor;
	$t_imagem = html_entity_decode($SQL_Q["imagem"]);
	$t_titulo = html_entity_decode($SQL_Q["titulo"]);
	
	?>
    <input type="hidden" name="item_name_<?php echo $i; ?>" value="<?php echo $t_titulo; ?>">
    <input type="hidden" name="item_number_<?php echo $i; ?>" value="<?php echo $t_id_produto; ?>">
    <input type="hidden" name="amount_<?php echo $i; ?>" value="<?php echo number_format($t_valor, 2, '.', ','); ?>">
    <input type="hidden" name="tax_<?php echo $i; ?>" value="<?php echo number_format($t_porcentagem, 2, '.', ','); ?>">
    <input type="hidden" name="quantity_<?php echo $i; ?>" value="<?php echo $t_quantidade; ?>">
	<?php
	$i++;
	}
	$id_trans = $country_q.rand(10000000,9999999999);
	?>
	<input type="hidden" name="no_note" value="1">
    <!-- Enable override of buyers's address stored with PayPal . -->
    <input type="hidden" name="address_override" value="0">
    <!-- Set variables that override the address stored with PayPal. -->
    <input type="hidden" name="currency_code" value="<?php echo $currency; ?>">
    <input type="hidden" name="first_name" value="<?php echo $first_name_q; ?>">
    <input type="hidden" name="last_name" value="<?php echo $last_name_q; ?>">
    <input type="hidden" name="address1" value="<?php echo $adress_q; ?>">
    <input type="hidden" name="city" value="<?php echo $city_q; ?>">
    <input type="hidden" name="state" value="<?php echo $state_q; ?>">
    <input type="hidden" name="zip" value="<?php echo $zip_post_q; ?>">
    <input type="hidden" name="night_phone_a" value="">
    <input type="hidden" name="night_phone_b" value="">
    <input type="hidden" name="night_phone_c" value="">
    <input type="hidden" name="email" value="<?php $email_q; ?>">
    <input type="hidden" name="country" value="<?php echo $country_q; ?>">
    <input type="hidden" name="custom" id="id_custom" value="<?php echo $id_trans."-".$_SESSION["id_user_on"]; ?>">
	
	<input type="image" src="<?php echo PATH ?>_images/btn-checkout.jpg" class="btn-checkout" />
	<?php
	}else{
	?>
	<a href="<?php echo PATH ?>sign-in/"><img src="<?php echo PATH ?>_images/btn-checkout.jpg" class="btn-checkout" /></a>
	<?php
	}
	?>
</form>
	<br clear="all" />
<!--END-->
</div>
<?php
include("onlineshop.php");
?>