<?php
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
	$txt_currency = "R$ ";
	$p_brl = true;
	}else{
	$txt_currency = "USD ";
	$p_brl = false;
	}
	}


	$SQL = "SELECT a.quantidade, b.usd_preco, b.brl_preco FROM tb_store_carrinho a LEFT JOIN tb_store_produtos b ON a.id_produto = b.id WHERE a.id_sessao = '$id_sessao'";
	$SQL = mysqli_query($connect, $SQL);
	$quantidade_total = 0;
	$valor_total = array();
	while($SQL_Q = mysql_fetch_assoc($SQL)){
	$quantidade_total += $SQL_Q["quantidade"];
	
	if($p_brl == true){
	$t_preco_shopping = html_entity_decode($SQL_Q["brl_preco"]);
	$txt_currency = "R$ ";
	}else{
	$t_preco_shopping = html_entity_decode($SQL_Q["usd_preco"]);
	$txt_currency = "USD ";
	}
		
	$valor_total[] += $t_preco_shopping*$SQL_Q["quantidade"];
	}
	//$valor_total = $quantidade_total*$preco;
	$total = 0;
	foreach($valor_total as $v){
	$total += $v;
	}
	
	if(empty($txt_currency)){
	$txt_currency = "USD ";
	}
	?>
	<div class="shopping-card">
		<ul>
			<li>
				<div class="textone"><a href="<?php echo PATH ?>shopping-cart/">Shopping Cart</a></div>
				<br clear="all" />
				<div class="texttwo" id="cart_values"><?php echo sprintf('%02d', $quantidade_total); ?> item(s) - <?php echo $txt_currency; ?><?php echo number_format($total, 2, ',', '.'); ?></div>
			</li>
			<li><a href="<?php echo PATH ?>shopping-cart/"><img alt="shopping cart" src="<?php echo PATH ?>_images/icon-shopping-card.jpg" width="35" /></a></li>
		</ul>
	</div>
	<br clear="all" />