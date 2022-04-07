<div class="content_all_2" style="padding:15px;">
<?php
extract($_POST, EXTR_OVERWRITE);
$req = htmlentities($req);
$req = preg_replace("/\/$/", "", $req);
echo $req;
if($req == "manage/materias-tab_adicionar" or $req == "manage/blog-tab_adicionar"){
auto_encode();
extract($_POST, EXTR_OVERWRITE);

if(preg_match("/materias/", $req)){
$t_type = "post";	
}else{
$t_type = "press";		
}


$SQL = "SELECT t_titulo FROM tb_posts WHERE t_titulo = '$t_titulo'";
$SQL = mysqli_query($connect, $SQL) or die(mysqli_error($connect));
if(!mysqli_num_rows($SQL)){
$t_texto = preg_replace("/..\/..\//", PATH, $t_texto);
$t_texto_2 = preg_replace("/..\/..\//", PATH, $t_texto_2);
$t_texto_3 = preg_replace("/..\/..\//", PATH, $t_texto_3);
$t_texto_4 = preg_replace("/..\/..\//", PATH, $t_texto_4);
$SQL = "INSERT INTO tb_posts (`id_user`, `t_titulo`, `t_content`,`t_titulo_2`, `t_content_2`,`t_titulo_3`, `t_content_3`,`t_titulo_4`, `t_content_4`, `status`, `dt_cad`, `type`) VALUES(".USER_ID.", '$t_titulo', '$t_texto','$t_titulo_2', '$t_texto_2','$t_titulo_3', '$t_texto_3','$t_titulo_4', '$t_texto_4', '$t_status', NOW(), '$t_type')";
mysqli_query($connect, $SQL) or die(mysqli_error($connect));

call_notice("", "Created successfully!", "1");
header("Location: ".$_SESSION["nav_3"]);
}else{

}

}if($req == "manage/press-tab_adicionar"){
auto_encode();
extract($_POST, EXTR_OVERWRITE);

$SQL = "SELECT t_titulo FROM tb_posts WHERE t_titulo = '$t_titulo'";
$SQL = mysqli_query($connect, $SQL);
if(!mysqli_num_rows($SQL)){
$t_texto = preg_replace("/..\/..\//", PATH, $t_texto);
$SQL = "INSERT INTO tb_posts (`id_user`, `t_titulo`, `t_content`, `status`, `dt_cad`, `type`, `fonte`) VALUES(".USER_ID.", '$t_titulo', '$t_texto', '$t_status', NOW(), 'press', '$t_fonte')";
mysqli_query($connect, $SQL);

call_notice("", "Created successfully!", "1");
header("Location: ".$_SESSION["nav_3"]);
}else{

}

}elseif($req == "manage/votacao-tab_adicionar"){
auto_encode();
extract($_POST, EXTR_OVERWRITE);

$SQL = "SELECT nome FROM tb_votacao WHERE nome = '$t_nome'";
$SQL = mysqli_query($connect, $SQL);
if(!mysqli_num_rows($SQL)){
$t_texto = preg_replace("/..\/..\//", PATH, $t_texto);
$SQL = "INSERT INTO tb_votacao (`nome`, `genero`, `localidade`, `link`, `status`, `dt_cad`) VALUES('$t_nome', '$t_genero', '$t_localidade', '$t_link', '$t_status', NOW())";
mysqli_query($connect, $SQL);

call_notice("", "Created successfully!", "1");
header("Location: ".$_SESSION["nav_2"]);
}else{

}

}elseif($req == "manage/votacao-tab_adicionar/edit"){
auto_encode();
extract($_POST, EXTR_OVERWRITE);

$SQL = "SELECT nome FROM tb_votacao WHERE id = '$id'";
$SQL = mysqli_query($connect, $SQL);
if(mysqli_num_rows($SQL)){

$SQL = "UPDATE tb_votacao SET nome = '$t_nome', genero = '$t_genero', link = '$t_link', status = '$t_status', localidade = '$t_localidade' WHERE id = $id";
mysqli_query($connect, $SQL);
}
call_notice("", "Updated successfully!", "1");
header("Location: ".$_SESSION["nav_3"]);

}elseif($req == "manage/materias-tab_adicionar/edit" or $req == "manage/blog-tab_adicionar/edit"){
auto_encode();
extract($_POST, EXTR_OVERWRITE);

$SQL = "SELECT t_titulo FROM tb_posts WHERE t_titulo = '$t_titulo' AND id <> $id";
$SQL = mysqli_query($connect, $SQL);
if(!mysqli_num_rows($SQL)){
$t_texto = preg_replace("/..\/..\/..\//", PATH, $t_texto);
$t_texto_2 = preg_replace("/..\/..\/..\//", PATH, $t_texto_2);

$SQL = "UPDATE tb_posts SET t_titulo = '$t_titulo', t_content = '$t_texto', t_titulo_2 = '$t_titulo_2', t_content_2 = '$t_texto_2', t_titulo_3 = '$t_titulo_3', t_content_3 = '$t_texto_3', t_titulo_4 = '$t_titulo_4', t_content_4 = '$t_texto_4', status = '$t_status', fonte = '$t_fonte' WHERE id = $id";

mysqli_query($connect, $SQL);

call_notice("", "Updated successfully!", "1");
header("Location: ".$_SESSION["nav_3"]);
}else{
call_notice("", "Created successfully!", "1");
header("Location: ".$_SESSION["nav_3"]);
}

}elseif($req == "manage/eventos-tab_adicionar"){
auto_encode();
extract($_POST, EXTR_OVERWRITE);

$SQL = "SELECT date FROM tb_events WHERE date = '$t_data'";
$SQL = mysqli_query($connect, $SQL);
if(!mysqli_num_rows($SQL)){
$t_data .= " ".$t_horario;
$t_descricao = preg_replace("/..\/..\/..\//", PATH, $t_descricao);
$t_preco = preg_replace("/\./", "", $t_preco);
$t_preco = preg_replace("/\,/", ".", $t_preco);
$t_data = date("Y-m-d H:i:s", strtotime($t_data));
$SQL = "INSERT INTO tb_events (`date`, `location`, `venue`, `country`, `status`, `description`, `hour_type`, `dt_cad`, `value_ticket`, `moeda`, `buy_ticket`) VALUES('$t_data', '$t_locacao', '$t_local', '$t_country', '$t_status', '$t_descricao', '$time_am_pm', NOW(), '$t_preco', '$moeda', '$t_compra_online')";

//echo $SQL;die;
mysqli_query($connect, $SQL);
call_notice("", "Created successfully!", "1");
}
header("Location: ".$_SESSION["nav_3"]);

}elseif($req == "manage/eventos-tab_adicionar/edit"){
auto_encode();
extract($_POST, EXTR_OVERWRITE);

$SQL = "SELECT date FROM tb_events WHERE id = '$id'";
$SQL = mysqli_query($connect, $SQL);
if(mysqli_num_rows($SQL)){
$t_data .= " ".$t_horario;

$t_data = date("Y-m-d H:i:s", strtotime($t_data));
$t_descricao = preg_replace("/..\/..\/..\//", PATH, $t_descricao);
$t_preco = preg_replace("/\./", "", $t_preco);
$t_preco = preg_replace("/\,/", ".", $t_preco);

$SQL = "UPDATE tb_events SET date = '$t_data', location = '$t_locacao', country = '$t_country', venue = '$t_local', status = '$t_status', description = '$t_descricao', hour_type = '$time_am_pm', value_ticket = '$t_preco', moeda = '$moeda', buy_ticket = '$t_compra_online' WHERE id = $id";

mysqli_query($connect, $SQL);
}
call_notice("", "Updated successfully!", "1");
header("Location: ".$_SESSION["nav_2"]);

}elseif($req == "manage/banda-tab_one"){
auto_encode();
extract($_POST, EXTR_OVERWRITE);
$t_texto = preg_replace("/..\/..\//", PATH, $t_texto);
$SQL = "UPDATE tb_biografia SET titulo = '$t_titulo', texto = '$t_texto', status = '$t_status', dt_update = NOW(), titulo_tab = '$titulo_tab' WHERE id = $id";
mysqli_query($connect, $SQL);

call_notice("", "Biography updated successfully!", "1");
header("Location: ".$_SESSION["nav_2"]);

}elseif($req == "manage/banda-tab_two_adicionar"){
auto_encode();
extract($_POST, EXTR_OVERWRITE);

$SQL = "SELECT * FROM tb_discografia WHERE titulo = '$t_titulo'";
$SQL = mysqli_query($connect, $SQL);
if(mysqli_num_rows($SQL) == 0){
$t_descricao = preg_replace("/..\/..\/..\//", PATH, $t_descricao);
$t_preco = preg_replace("/\./", "", $t_preco);
$t_preco = preg_replace("/\,/", ".", $t_preco);
for($i=1;$i<=15;$i++){
$ac_faixa = $_POST["t_faixa_".$i];
if($ac_faixa != ""){
$faixas[$i] = $ac_faixa;
}
}
$faixas = implode("|*|", $faixas);

$SQL = "INSERT INTO tb_discografia(`imagem`, `titulo`, `ano`, `gravadora`, `descricao`, `faixas`, `moeda`, `preco`, `link_compra`, `link_download`, `status`, `dt_cad`, `dt_update`) VALUES('$t_imagem', '$t_titulo', '$t_data_lanc', '$t_label', '$t_descricao', '$faixas', '$moeda', '$t_preco', '$t_link_comprar', '$t_link_download', '$t_status', NOW(), NOW())";
$SQL = mysqli_query($connect, $SQL);
}
call_notice("", "Created successfully!", "1");
header("Location: ".$_SESSION["nav_2"]);
}elseif($req == "manage/banda-tab_two_adicionar/edit"){
auto_encode();
extract($_POST, EXTR_OVERWRITE);

$SQL = "SELECT * FROM tb_discografia WHERE id = $id";
$SQL = mysqli_query($connect, $SQL);
if(mysqli_num_rows($SQL)>0){
$t_descricao = preg_replace("/..\/..\/..\//", PATH, $t_descricao);
$t_preco = preg_replace("/\./", "", $t_preco);
$t_preco = preg_replace("/\,/", ".", $t_preco);
for($i=1;$i<=15;$i++){
$ac_faixa = $_POST["t_faixa_".$i];
if($ac_faixa != ""){
$faixas[$i] = $ac_faixa;
}
}
$faixas = implode("|*|", $faixas);
if($t_imagem != ""){
mysqli_query($connect, "UPDATE tb_discografia SET imagem = '$t_imagem' WHERE id = $id");
}
$SQL = "UPDATE tb_discografia SET `titulo` = '$t_titulo', `ano` = '$t_data_lanc', `gravadora` = '$t_label', `descricao` = '$t_descricao', `faixas` = '$faixas', `moeda` = '$moeda', `preco` = '$t_preco', `link_compra` = '$t_link_comprar', `link_download` = '$t_link_download', `status` = '$t_status', `dt_update` = NOW() WHERE id = $id";
$SQL = mysqli_query($connect, $SQL) or die($SQL." ".mysql_error());
call_notice("", "Updated successfully!", "1");
header("Location: ".$_SESSION["nav_2"]);
}
}elseif($req == "manage/banda-tab_three_adicionar/edit"){
auto_encode();
extract($_POST, EXTR_OVERWRITE);

$SQL = "SELECT * FROM tb_membros WHERE id = $id";
$SQL = mysqli_query($connect, $SQL);
if(mysqli_num_rows($SQL)>0){
$t_message = preg_replace("/..\/..\/..\//", PATH, $t_message);

if($t_imagem != ""){
mysqli_query($connect, "UPDATE tb_membros SET imagem = '$t_imagem' WHERE id = $id");
}
$SQL = "UPDATE tb_membros SET `nome` = '$t_nome', `instrumento` = '$t_instrumento', `twitter` = '$t_twitter', `message` = '$t_message', `status` = '$t_status', `dt_update` = NOW() WHERE id = $id";

$SQL = mysqli_query($connect, $SQL) or die($SQL." ".mysql_error());
call_notice("", "Updated successfully!", "1");
header("Location: ".$_SESSION["nav_2"]);
}
}elseif($req == "manage/fotos-tab_one_adicionar"){
auto_encode();
extract($_POST, EXTR_OVERWRITE);
$t_imagem = explode(";", preg_replace("/^;/", "", $t_imagem));

$SQL = "SELECT * FROM tb_albuns WHERE nome = '$t_nome'";
$SQL = mysqli_query($connect, $SQL) or die(mysqli_error($connect));
if(mysqli_num_rows($SQL)==0){

$SQL = "INSERT INTO tb_albuns(imagem, nome, descricao, status, dt_cad, dt_update) VALUES('$main_pic', '$t_nome', '$t_descricao', '$t_status', NOW(), NOW())";

mysqli_query($connect, $SQL) or die(mysqli_error($connect));
$last_id = mysql_insert_id();
foreach($t_imagem as $k => $v){
$rand = explode(":", $v);
$imagem_atual = $rand[0];
if($imagem_atual == "") continue;
$desc_atual = $_POST["foto_txt_".$rand[1]];
if($desc_atual == "description...") $desc_atual = "";
$SQL = "SELECT id FROM tb_fotos WHERE imagem = '$imagem_atual' AND descricao = '$desc_atual'";
$SQL = mysqli_query($connect, $SQL) or die(mysqli_error($connect));
	if(mysqli_num_rows($SQL)==0){
	mysqli_query($connect, "INSERT INTO tb_fotos(imagem, descricao, dt_cad, id_album) VALUES('$imagem_atual', '$desc_atual', NOW(), $last_id)");
	}
}

}

call_notice("", "Created successfully!", "1");
header("Location: ".$_SESSION["nav_2"]);
}elseif($req == "manage/fotos-tab_one_adicionar/edit"){
auto_encode();
extract($_POST, EXTR_OVERWRITE);
$t_imagem = explode(";", preg_replace("/^;/", "", $t_imagem));


$SQL = "SELECT id FROM tb_albuns WHERE id = '$id'";
$SQL = mysqli_query($connect, $SQL) or die(mysqli_error($connect));
if(mysqli_num_rows($SQL)>0){

$SQL = "UPDATE tb_albuns SET imagem = '$main_pic', nome = '$t_nome', descricao = '$t_descricao', status = '$t_status', dt_update = NOW() WHERE id = $id";
mysqli_query($connect, $SQL);
mysqli_query($connect, "DELETE FROM tb_fotos WHERE id_album = $id");

foreach($t_imagem as $k => $v){
$rand = explode(":", $v);
$imagem_atual = $rand[0];
if($imagem_atual == "") continue;
$desc_atual = $_POST["foto_txt_".$rand[1]];
if($desc_atual == "description...") $desc_atual = "";

mysqli_query($connect, "INSERT INTO tb_fotos(imagem, descricao, dt_cad, id_album) VALUES('$imagem_atual', '$desc_atual', NOW(), $id)");
}
}

call_notice("", "Updated successfully!", "1");
header("Location: ".$_SESSION["nav_2"]);
}elseif($req == "manage/videos-tab_adicionar"){
auto_encode();
extract($_POST, EXTR_OVERWRITE);


$SQL = "SELECT nome FROM tb_videos WHERE nome = '$t_nome'";
$SQL = mysqli_query($connect, $SQL);
if(!mysqli_num_rows($SQL)){
if($t_main == "Y"){
mysqli_query($connect, "UPDATE tb_videos SET main = 'N' WHERE main = 'Y'");
}
$SQL = "INSERT INTO tb_videos (`nome`, `video`, `status`, `main`, `dt_cad`) VALUES('$t_nome', '$t_video', '$t_main', '$t_status', NOW())";
mysqli_query($connect, $SQL);

call_notice("", "Created successfully!", "1");
header("Location: ".$_SESSION["nav_3"]);
}else{

}

}elseif($req == "manage/videos-tab_adicionar/edit"){
auto_encode();
extract($_POST, EXTR_OVERWRITE);


$SQL = "SELECT id FROM tb_videos WHERE id = '$id'";
$SQL = mysqli_query($connect, $SQL) or die(mysqli_error($connect));
if(mysqli_num_rows($SQL)>0){
if($t_main == "Y"){
mysqli_query($connect, "UPDATE tb_videos SET main = 'N' WHERE main = 'Y'");
}

$SQL = "UPDATE tb_videos SET nome = '$t_nome', video = '$t_video', main = '$t_main', status = '$t_status' WHERE id = $id";
mysqli_query($connect, $SQL);
}

call_notice("", "Updated successfully!", "1");
header("Location: ".$_SESSION["nav_2"]);
}elseif($req == "manage/votacao-tab_two"){
//auto_encode();
extract($_POST, EXTR_OVERWRITE);
	
	$titulo = utf8_decode("$t_titulo - Sleaze Festival");
	$to = implode(";", $to);
	$to2 = implode(";", $to2);
	$headers = "From: Green Valley Sleaze Camp Festival <contact@shotofficial.com> \r\n";
	$headers .= "MIME-Version: 1.0 \r\n";
	$headers .= "Content-type: text/html; charset=utf-8 \r\n";
	if($t_to == "S" or $t_to == "Q"){
		if($t_to == "S"){
		$to = explode(";", $to);
		}elseif($t_to == "Q"){
		$to = explode(";", $to2);
		}
		$to[] = "01|Henry Terron|henry@shotofficial.com";

		foreach($to as $v){
			$v = explode("|", $v);
			$to_email = $v[2];
			$msg = utf8_decode($t_texto);
			$emailsender = "contact@shotofficial.com";
			$envio = false;
			if(!mail($to_email, $titulo, $msg, $headers ,"-r".$emailsender)){
				$headers .= "Return-Path: " . $emailsender . "\r\n";
				
				if(!mail($to_email, $titulo, $msg, $headers )){
					//call_notice("", "Erro ao enviar o newsletter", "2");
					//header("Location: ".$nav_2);
				} else {
					$envio = true;
				}
			} else {
				$envio = true;
			}
			
			
		}
		if($envio == true){
		call_notice("", "E-mail sent sucessfully!", "1");
		header("Location: ".$nav_2);
		}
	}
}elseif($req == "manage/newsletter-tab_three"){
//auto_encode();
extract($_POST, EXTR_OVERWRITE);
	echo $to;
	$titulo = utf8_decode("$t_titulo");
	$to = implode(";", $to);

	$headers = "From: ".BAND." - Official website <".EMAIL."> \r\n";
	$headers .= "MIME-Version: 1.0 \r\n";
	$headers .= "Content-type: text/html; charset=utf-8 \r\n";
	if($t_to == "S" or $t_to == "Q"){
		if($t_to == "S"){
		$to = explode(";", $to);
		}elseif($t_to == "Q"){
		$to = explode(";", $to2);
		}
		$to[] = "01|Henry Terron|henry@shotofficial.com";

		foreach($to as $v){
			$v = explode("|", $v);
			$to_email = $v[2];
			$msg = utf8_decode($t_texto);
			$emailsender = EMAIL;
			$envio = false;
			if(!mail($to_email, $titulo, $msg, $headers ,"-r".$emailsender)){
				$headers .= "Return-Path: " . $emailsender . "\r\n";
				
				if(!mail($to_email, $titulo, $msg, $headers )){
					//call_notice("", "Erro ao enviar o newsletter", "2");
					//header("Location: ".$nav_2);
				} else {
					$envio = true;
				}
			} else {
				$envio = true;
			}
			
			
		}
		if($envio == true){
		call_notice("", "E-mail sent sucessfully!", "1");
		header("Location: ".$nav_2);
		}
	}
}


elseif($req == "manage/loja-tab_one_adicionar"){

auto_encode();
extract($_POST, EXTR_OVERWRITE);

$SQL = "SELECT * FROM tb_store_produtos WHERE titulo = '$t_titulo'";
$SQL = mysqli_query($connect, $SQL);
if(mysqli_num_rows($SQL) == 0){
$t_descricao = preg_replace("/..\/..\/..\//", PATH, $t_descricao);

$SQL = "INSERT INTO tb_store_produtos(`imagem`, `titulo`, `descricao`, `usd_preco`, `brl_preco` , `quantidade`, `tipo`, `status`, `dt_cad`) VALUES('$t_imagem', '$t_titulo', '$t_descricao', '$t_preco', '$t_preco_2', '$t_quantidade', '$t_tipo', '$t_status', NOW())";

$SQL = mysqli_query($connect, $SQL) or die(mysqli_error($connect));
}


$latest_id = mysql_insert_id();
$t_imagem = explode(";", preg_replace("/^;/", "", $t_imagem_uploads));

foreach($t_imagem as $k => $v){
$rand = explode(":", $v);
$imagem_atual = $rand[0];
if($imagem_atual == "") continue;
$desc_atual = $_POST["foto_txt_".$rand[1]];
if($desc_atual == "description...") $desc_atual = "";
$SQL = "SELECT id FROM tb_store_produtos_fotos WHERE imagem = '$imagem_atual' AND descricao = '$desc_atual'";
$SQL = mysqli_query($connect, $SQL) or die(mysqli_error($connect));
	if(mysqli_num_rows($SQL)==0){
	mysqli_query($connect, "INSERT INTO tb_store_produtos_fotos(imagem, descricao, dt_cad, id_opcao) VALUES('$imagem_atual', '$desc_atual', NOW(), $latest_id)");
	}
}


call_notice("", "Product created sucessully!", "1");
header("Location: ".$_SESSION["nav_2"]);

/***************************/



}elseif($req == "manage/loja-tab_one_adicionar/edit"){
auto_encode();
extract($_POST, EXTR_OVERWRITE);





$SQL = "SELECT * FROM tb_store_produtos WHERE id = $id";
$SQL = mysqli_query($connect, $SQL) or die($SQL." ".mysql_error());
if(mysqli_num_rows($SQL)>0){
$t_descricao = preg_replace("/..\/..\/..\//", PATH, $t_descricao);




if($t_imagem != ""){
mysqli_query($connect, "UPDATE tb_store_produtos SET imagem = '$t_imagem' WHERE id = $id");
}
$SQL = "UPDATE tb_store_produtos SET `titulo` = '$t_titulo', `usd_preco` = '$t_preco', `brl_preco` = '$t_preco_2', `quantidade` = '$t_quantidade', `tipo` = '$t_tipo', `descricao` = '$t_descricao', `status` = '$t_status' WHERE id = $id";
$SQL = mysqli_query($connect, $SQL) or die($SQL." ".mysql_error());


$t_imagem2 = explode(";", preg_replace("/^;/", "", $t_imagem_uploads));


mysqli_query($connect, "DELETE FROM tb_store_produtos_fotos WHERE id_produto = $id");	
foreach($t_imagem2 as $k => $v){
$rand = explode(":", $v);
$imagem_atual = $rand[0];
if($imagem_atual == "") continue;
$desc_atual = $_POST["foto_txt_".$rand[1]];

if($desc_atual == "description...") $desc_atual = "";
$SQL = "SELECT id FROM tb_store_produtos_fotos WHERE imagem = '$imagem_atual'";

$SQL = mysqli_query($connect, $SQL) or die(mysqli_error($connect));
if(mysqli_num_rows($SQL) == 0){
mysqli_query($connect, "INSERT INTO tb_store_produtos_fotos(imagem, descricao, dt_cad, id_produto) VALUES('$imagem_atual', '$desc_atual', NOW(), $id)");

}
}


}

call_notice("", "Product updated sucessfully", "1");
header("Location: ".$_SESSION["nav_2"]);
}elseif($req == "manage-settings-tab_one" || $req == "manage-settings-tab_two"){
auto_encode();
extract($_POST, EXTR_OVERWRITE);

$SQL = "UPDATE tb_sys_informacoes SET texto = '$t_imagem' WHERE titulo = 'header_image'";
$SQL = mysqli_query($connect, $SQL);

foreach($_POST as $k => $v){
$SQL = mysqli_query($connect, "SELECT id FROM tb_sys_informacoes WHERE titulo = '$k'");
if(mysqli_num_rows($SQL) != 0){
if($k == "header_image" and empty($v)) continue;
$SQL = "UPDATE tb_sys_informacoes SET texto = '$v' WHERE titulo = '$k'";
$SQL = mysqli_query($connect, $SQL);
}else{
mysqli_query($connect, "INSERT INTO tb_sys_informacoes(`titulo`, `texto`) VALUES('$k', '$v')") or die(mysqli_error($connect));	
continue;
}

$SQL = mysqli_query($connect, "SELECT id FROM tb_pages_links WHERE titulo = '$k'");
if(mysqli_num_rows($SQL) != 0){
$SQL = "UPDATE tb_pages_links SET link = '$v' WHERE titulo = '$k'";
$SQL = mysqli_query($connect, $SQL) or die(mysqli_error($connect));
}else{
mysqli_query($connect, "INSERT INTO tb_pages_links(`titulo`, `link`) VALUES('$k', '$v')") or die(mysqli_error($connect));	
}
}

call_notice("", "Informations updated sucessfully", "1");
header("Location: ".$nav_2);
}elseif($req == "manage/settings-tab_three_add" || $req == "manage/settings-tab_three_add/edit"){
auto_encode();
extract($_POST, EXTR_OVERWRITE);
$t_pass = md5($t_pass);

$SQL = "SELECT t_name FROM tb_users WHERE id = '$id'";
$SQL = mysqli_query($connect, $SQL);
if(!mysqli_num_rows($SQL)){
$SQL = "INSERT INTO tb_users (`t_name`, `t_email`, `t_password`, `manage`, `dt_cad`) VALUES('$t_name', '$t_email', '$t_pass', '$t_status', NOW())";
mysqli_query($connect, $SQL) or die(mysqli_error($connect));

call_notice("", "Administrator created successfully!", "1");
header("Location: ".$_SESSION["nav_2"]);
}else{
mysqli_query($connect, "UPDATE tb_users SET t_name = '$t_name', t_email = '$t_email', manage = '$t_status' WHERE id = $id");
if(!empty($t_pass)){
mysqli_query($connect, "UPDATE tb_users SET t_password = '$t_pass' WHERE id = $id");	
}

call_notice("", "Administrator updated successfully!", "1");
header("Location: ".$_SESSION["nav_2"]);
}

}elseif($req == "manage-home-tab_one"){
auto_encode();
extract($_POST, EXTR_OVERWRITE);


$SQL = "UPDATE tb_sys_informacoes SET texto = '$t_imagem' WHERE titulo = 'header_image'";
$SQL = mysqli_query($connect, $SQL);


call_notice("", "Informations updated sucessfully", "1");
header("Location: ".$nav_2);
}elseif($req == "manage-loja-tab_four"){
auto_encode();
extract($_POST, EXTR_OVERWRITE);


$SQL = "UPDATE tb_signup SET first_name= '$first_name', last_name= '$last_name', street_adress = '$street_adress', city = '$city', state_province = '$state_province', zip_post = '$zip_post', status = '$status' WHERE id = '$id'";

$SQL = mysqli_query($connect, $SQL);


call_notice("", "Informations updated sucessfully", "1");
header("Location: ".$nav_2);
}elseif($req == "upload"){


$ds          = DIRECTORY_SEPARATOR;  //1
 
$storeFolder = '../../_images/_uploads';   //2
 
if (!empty($_FILES)) {
     
    $tempFile = $_FILES['file']['tmp_name'];          //3             
    
    $targetPath = dirname( __FILE__ ) . $ds. $storeFolder . $ds;  //4
     
    //$targetFile =  $targetPath. make_url($_FILES['file']['name'], "1");  //5
	$targetFile =  $targetPath. $_FILES['file']['name'];  //5
    move_uploaded_file($tempFile,$targetFile); //6
	
	echo "YES";
     
}
	
}



?>
</div>