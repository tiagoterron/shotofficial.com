<?php
session_start();

include "../../_functions/index.php";
include "../../_config/connect.php";

$id_sessao = session_id();

extract($_POST, EXTR_OVERWRITE);
extract($_GET, EXTR_OVERWRITE);
$req = htmlentities($req);
if(empty($req)){
$req = $_GET["b"];
}
if($req == "add-to-cart"){
auto_encode();
extract($_POST, EXTR_OVERWRITE);


/*echo "<pre>";
print_r($_POST);
echo "</pre>";*/

if(!empty($id_user)){
	$SQL = "SELECT country FROM tb_signup WHERE id = ".$id_user;

	$SQL = mysqli_query($connect, $SQL) or die(mysqli_error($connect));
	$SQL_Q = mysql_fetch_assoc($SQL);
	$country_q = html_entity_decode($SQL_Q["country"]);
	if($country_q == "BR"){
	$txt_currency = "R$ ";
	$p_brl = true;
	}else{
	$txt_currency = "USD ";
	$p_brl = false;
	}
	}else{
	$txt_currency = "USD ";
	$p_brl = false;
	}
	

if(!empty($_SESSION["id_user_on"])){
$id_user = $_SESSION["id_user_on"];
}else{
$id_user = 0;
}
if(empty($color)) $color ="";
$SQL = "SELECT id FROM tb_store_carrinho WHERE id_sessao = '$session' AND id_produto = $id AND modelo = '$size' AND color = '$color'";
$SQL = mysqli_query($connect, $SQL) or die(mysqli_error($connect));
if(mysqli_num_rows($SQL)){
$SQL = "UPDATE tb_store_carrinho SET id_usuario = $id_user, quantidade = (quantidade+1) WHERE id_produto = $id";
$SQL = mysqli_query($connect, $SQL) or die(mysqli_error($connect));
}else{
$SQL = "INSERT INTO tb_store_carrinho(id_usuario, id_produto, quantidade, modelo, id_sessao, color) VALUES($id_user, $id, 1, '$size', '$session', '$color')";
$SQL = mysqli_query($connect, $SQL) or die(mysqli_error($connect));
}

$SQL = "SELECT a.quantidade, b.usd_preco, b.brl_preco FROM tb_store_carrinho a LEFT JOIN tb_store_produtos b ON a.id_produto = b.id WHERE a.id_sessao = '$session'";
$SQL = mysqli_query($connect, $SQL) or die(mysqli_error($connect));
$quantidade_total = 0;
$valor_total = array();
while($SQL_Q = mysql_fetch_assoc($SQL)){
$quantidade_total += $SQL_Q["quantidade"];

if($p_brl == true){
$t_preco_shopping = html_entity_decode($SQL_Q["brl_preco"]);
}else{
$t_preco_shopping = html_entity_decode($SQL_Q["usd_preco"]);
}
	
$valor_total[] += $t_preco_shopping*$SQL_Q["quantidade"];
}
//$valor_total = $quantidade_total*$preco;
$total = 0;
foreach($valor_total as $v){
$total += $v;
}



echo sprintf('%02d', $quantidade_total)." item(s) - $txt_currency ".number_format($total, 2, ',', '.');
}elseif($req == "submit-checkout"){

auto_encode();
extract($_POST, EXTR_OVERWRITE);

$SQL = "SELECT * FROM tb_store_carrinho WHERE id_sessao = '$id_sessao'";
echo $SQL;
$SQL = mysqli_query($connect, $SQL) or die(mysqli_error($connect));
echo mysqli_num_rows($SQL);
while($SQL_Q = mysql_fetch_assoc($SQL)){
	$id_produto = $SQL_Q["id_produto"];
	$id_usuario = $SQL_Q["id_usuario"];
	$quantidade = $SQL_Q["quantidade"];
	$modelo = $SQL_Q["modelo"];
	$color = $SQL_Q["color"];
	$SQL_1 = "SELECT * FROM tb_order WHERE pago = 'N' AND id_sessao = '$id_sessao' AND id_usuario = $id_usuario AND id_produto = $id_produto AND modelo = '$modelo' AND color = '$color'";
	$SQL_1 = mysqli_query($connect, $SQL_1) or die(mysqli_error($connect));
	//if(!mysqli_num_rows($SQL_1)){
	$SQL_IN = "INSERT INTO tb_order(id_produto, id_usuario, quantidade, modelo, color, id_sessao, pago, dt_cad, txn_id) VALUES($id_produto, $id_usuario, $quantidade, '$modelo', '$color', '$id_sessao', 'N', NOW(), '$id_trans')";
	$SQL_IN = mysqli_query($connect, $SQL_IN) or die(mysqli_error($connect));
	//}else{
	$SQL_UP = "UPDATE tb_order SET quantidade = $quantidade WHERE id_produto = $id_produto AND id_sessao = '$id_sessao'";
	//$SQL_UP = mysqli_query($connect, $SQL_UP) or die(mysqli_error($connect));
	//}
}
mysqli_query($connect, "DELETE FROM tb_store_carrinho WHERE id_sessao = '$id_sessao'");

}else if($req == "new-tshirt"){
	auto_encode();
	extract($_POST, EXTR_OVERWRITE);
	$SQL = "SELECT imagem FROM tb_store_produtos_fotos WHERE id_produto = $id AND descricao = '$color'";
	$SQL = mysqli_query($connect, $SQL);
	if(mysqli_num_rows($SQL) > 0){
	echo mysql_result($SQL, 0);	
	}
}
?>