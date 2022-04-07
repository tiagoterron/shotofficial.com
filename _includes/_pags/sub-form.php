<div class="content_all_2" style="padding:15px;">
<?php
extract($_POST, EXTR_OVERWRITE);
$req = htmlentities($req);
echo $req;
if($req == "sign-in"){
auto_encode();
extract($_POST, EXTR_OVERWRITE);

$t_pass_sign_in = md5($t_pass_sign_in);
$SQL = "SELECT * FROM tb_signup WHERE email = '$t_email_sign_in' AND password = '$t_pass_sign_in' AND status = 'Y'";
$SQL = mysqli_query($connect, $SQL);
$SQL_N = mysqli_num_rows($SQL);

if($SQL_N > 0){
$SQL_Q = mysql_fetch_assoc($SQL);
$id_Q = html_entity_decode($SQL_Q["id"]);
$email_Q = html_entity_decode($SQL_Q["email"]);
$name_Q = html_entity_decode($SQL_Q["first_name"]);
$_SESSION["user_on"] = true;
$_SESSION["id_user_on"] = $id_Q;
$_SESSION["email_user_on"] = $email_Q;
$_SESSION["name_user_on"] = $name_Q;

$SQL_SHOP = "UPDATE tb_store_carrinho SET id_usuario = '$id_Q' WHERE id_sessao = '$session_id'";
$SQL_SHOP = mysqli_query($connect, $SQL_SHOP);

	call_notice("", "Login success!", "1");
	header("Location: ".PATH."shopping-cart/");

}else{
$_SESSION["user_on"] = false;
$_SESSION["id_user_on"] = "";
$_SESSION["email_user_on"] = "";
$_SESSION["name_user_on"] = "";

	call_notice("", "Login failed!", "2");
	header("Location: ".PATH."sign-in/");
}

}elseif($req == "sign-up"){
auto_encode();
extract($_POST, EXTR_OVERWRITE);

$SQL = "SELECT email FROM tb_signup WHERE email = '$t_email_adress'";
$SQL = mysqli_query($connect, $SQL);
if(!mysqli_num_rows($SQL)){
	$t_conf_pass = md5($t_conf_pass);
	$SQL = "INSERT INTO tb_signup (
`first_name`,
`last_name`,
`street_adress`, 
`state_province`,
`city`,
`zip_post`,
`country`,
`email`,
`password`,
`status`,
`dt_cad`
	) VALUES(
'$t_first_name',
'$t_last_name',
'$t_street_adress',
'$t_state',
'$t_city',
'$t_zip_code',
'$t_country',
'$t_email_adress',
'$t_conf_pass',
'Y',
NOW())";
	mysqli_query($connect, $SQL) or die(mysqli_error($connect));
	call_notice("", "Signed success!", "1");
	header("Location: ".PATH."sign-in/");
}

}elseif($req == "edit_account"){
auto_encode();
extract($_POST, EXTR_OVERWRITE);


$SQL = "UPDATE tb_signup SET first_name= '$t_first_name', last_name= '$t_last_name', street_adress = '$t_street_adress', city = '$t_city', state_province = '$t_state', zip_post = '$t_zip_code', country = '$t_country', email = '$t_email_adress'  WHERE id = '$id'";
$SQL = mysqli_query($connect, $SQL);

if(!empty($t_pass3) and !empty($t_conf_pass3) and $t_pass3 == $t_conf_pass3){
	$SQL = "UPDATE tb_signup SET `password`= '".md5($t_pass3)."'  WHERE id = '$id'";
$SQL = mysqli_query($connect, $SQL);
	}


call_notice("", "Informations updated sucessfully", "1");
header("Location: ".$nav_2);
}elseif($req == "sign-news"){
auto_encode();
extract($_POST, EXTR_OVERWRITE);

$SQL = "SELECT t_email FROM tb_newsletter WHERE t_email = '$t_email'";
$SQL = mysqli_query($connect, $SQL);
if(!mysqli_num_rows($SQL)){
$SQL = "INSERT INTO tb_newsletter (`t_email`, `t_name`, `dt_cad`) VALUES('$t_email', '$t_name', NOW())";
mysqli_query($connect, $SQL);

call_notice("", "Signed success!", "1");
header("Location: ".$_SESSION["nav_2"]);
}else{

call_notice("", "E-mail already taken!", "2");
header("Location: ".$_SESSION["nav_2"]);
}
}elseif($req == "contact"){
auto_encode();
extract($_POST, EXTR_OVERWRITE);

##INICIO MAILIN##
	$email_contato_[0] = EMAIL;
	$email_contato_[1] = EMAIL2;
	foreach($email_contato_ as $v){
	$email_contato = $v;
	$subject = utf8_decode("E-mail from the website - ".BAND);
	$t_mensagem = nl2br($t_message);
	$message = "
	<span style='font-size:12px;'>
	<strong>Name: </strong> $t_name \n <br>
	<strong>E-mail: </strong> $t_email \n <br>
	<strong>Subject: </strong> $t_subject \n <br>
	<strong>Message: </strong> $t_mensagem \n <br>";
	$message = utf8_decode($message);
	
/*	send_email($t_email, $email_anunc, $subject, $message, "");*/
	
	$headers = "From: $t_name <$t_email> \r\n";
	$headers .= "MIME-Version: 1.0 \r\n";
	$headers .= "Content-type: text/html; charset=utf-8 \r\n";
	//$headers .= "Bcc: Henry Terron \r\n <henry@shotofficial.com\r\n>";
	
	$emailsender = "$t_email";
	$envio = false;
	if(!mail($email_contato, $subject, $message, $headers ,"-r".$emailsender)){
		$headers .= "Return-Path: " . $emailsender . "\r\n";
		
		if(!mail($email_contato, $subject, $message, $headers )){
			call_notice("", "error sending your message", "2");
			header("Location: ".PATH."contact/");
			die;
		} else {
			$envio = true;
		}
	} else {
		$envio = true;
	}
	}
	##FIM MAILIN##
	if($envio == true){
	call_notice("", "your message was sent", "1");
	}
	header("Location: ".PATH."contact/");

}elseif($req == "login-administrator"){
auto_encode();
extract($_POST, EXTR_OVERWRITE);
$ip = $_SERVER['REMOTE_ADDR'];
$t_password = md5($t_password);
$SQL = "SELECT * FROM tb_users WHERE t_email = '$t_email' AND t_password = '$t_password'";
$SQL = mysqli_query($connect, $SQL);
$SQL_N = mysqli_num_rows($SQL);
if($SQL_N > 0){
$SQL_BLOCK = "SELECT dt_cad FROM tb_blocked_sessions WHERE ip = '$ip'";
$SQL_BLOCK = mysqli_query($connect, $SQL_BLOCK);
$SQL_BLOCK_N = mysqli_num_rows($SQL_BLOCK);
if($SQL_BLOCK_N == 0){
	$_SESSION["admin_email"] = $t_email;
	$_SESSION["admin_session"] = session_id();
	call_notice("", "logado com sucesso", "1");
	header("Location: ".PATH."manage/");
}else{
$SQL_BLOCK_Q = mysql_fetch_assoc($SQL_BLOCK);
$dt_cad = ent($SQL_BLOCK_Q["dt_cad"], "2");
$dt_tomorrow = mktime(date("H"), date("i"), date("s"), date("m"), date("d")+1, date("Y"));

	if($dt_cad > $dt_tomorrow){
	$_SESSION["admin_email"] = $t_email;
	$_SESSION["admin_session"] = session_id();
	}else{
	unset($_SESSION["admin_email"]);
	unset($_SESSION["admin_session"]);
	mysqli_query($connect, "DELETE FROM tb_blocked_sessions WHERE ip = '$ip'");
	call_notice("", "e-mail/password incorrect", "2");
	header("Location: ".PATH."login/");
	}

}

}else{
$SQL_BLOCK = "SELECT id FROM tb_blocked_sessions WHERE ip = '$ip'";
$SQL_BLOCK = mysqli_query($connect, $SQL_BLOCK);
$SQL_BLOCK_N = mysqli_num_rows($SQL_BLOCK);
if($SQL_BLOCK_N == 0){
mysqli_query($connect, "INSERT INTO tb_blocked_sessions(ip, dt_cad) VALUES('$ip', '".time()."')");
}else{
mysqli_query($connect, "UPDATE tb_blocked_sessions SET times = (times+1), dt_cad = '".time()."' WHERE ip = '$ip'");
}
	call_notice("", "e-mail/password incorrect", "2");
	header("Location: ".PATH."login/");
}
}
?>
</div>