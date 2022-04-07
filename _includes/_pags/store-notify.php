<?php
extract($_POST, EXTR_OVERWRITE);
$id_sessao = session_id();
$id_user = $custom;
$ff = "";

$ff = "";
while(list($key, $value) = each($_POST)) {
        $ff .= $key." - ".$value."\n";
        }

//$fichero = file_get_contents(PATH.'paypal-notify/ES401934115-89.txt', true);
$filearray = explode("\n", $ff);
$n_prods = "";
$qnts = array();
$itns = array();
while(list($key, $value) = each($filearray)) {
		$k = explode(" - ", $value);
		if(preg_match("/quantity/", $k[0])){
		$qnts[] = $k[1];
		}
        if(preg_match("/item_number/", $k[0])){
		$itns[] = $k[1];
		}
		$ff .= $key." - ".$value."\n";
        }
		for($i=0;$i<count($qnts);$i++){
		mysqli_query($connect, "UPDATE tb_store_produtos SET quantidade = quantidade - ".$qnts[$i]." WHERE id = ".$itns[$i]) or die(mysqli_error($connect));
		}
		

for($i=0;$i<$num_cart_items;$i++){
	$item_nome .= "Produto ".($i+1).": ".$_POST["item_name".($i+1)]."</br>\n";
	$item_quantidade .= "Quantidade ".($i+1).": ".$_POST["quantity".($i+1)]."</br>\n\n";
}
$detalhes = $item_nome.$item_quantidade;

$fp = fopen('paypal_notify/'.$custom.'.txt', 'w');
fwrite($fp, $ff);
fclose($fp);

$custom_1 = explode("-", $custom);
$trans_custom = $custom_1[0];


if($payment_status == "Completed"){
$SQL = "UPDATE tb_order SET pago = 'Y' WHERE txn_id = '$custom'";
$SQL = mysqli_query($connect, $SQL);

}
$SQL = "REPLACE INTO tb_order_paypal 
(
`txn_id`,
`payer_email`,
`payer_id`,
`payer_status`,
`first_name`,
`last_name`,
`address_city`,
`address_country`,
`address_country_code`,
`address_name`,
`address_state`,
`address_status`,
`address_street`,
`address_zip`,
`custom`,
`handling_amount`,
`item_name`,
`item_number`,
`mc_currency`,
`mc_fee`,
`mc_gross`,
`payment_date`,
`payment_fee`,
`payment_gross`,
`payment_status`,
`payment_type`,
`protection_eligibility`,
`quantity`,
`shipping`,
`tax`,
`notify_version`,
`charset`,
`verify_sign`)

VALUES
('$txn_id',
'$payer_email',
'$payer_id',
'$payer_status',
'$first_name',
'$last_name',
'$address_city',
'$address_country',
'$address_country_code',
'$address_name',
'$address_state',
'$address_status',
'$address_street',
'$address_zip',
'$custom',
'$handling_amount',
'$item_nome',
'$item_quantidade',
'$mc_currency',
'$mc_fee',
'$mc_gross',
'$payment_date',
'$payment_fee',
'$payment_gross',
'$payment_status',
'$payment_type',
'$protection_eligibility',
'$quantity',
'$shipping',
'$tax',
'$notify_version',
'$charset',
'$verify_sign')";

mysqli_query($connect, $SQL) or die(mysqli_error($connect));

	##INICIO MAILIN##
	$email_contato_[0] = EMAIL;
	foreach($email_contato_ as $v){
	$email_contato = $v;
	$subject = utf8_encode("PayPal - Notification");
	$message = "
	<span style='font-size:12px;'>
	<h3>New purchase on your store</h3>
	<br />
	<strong>ID:</strong> $txn_id <br />
	<strong>Paypal e-mail:</strong> $payer_email <br />
	<strong>Paypal ID:</strong> $payer_id <br />
	<strong>Paypal Status:</strong> $payer_status <br />
	<strong>First name:</strong> $first_name <br />
	<strong>Last name:</strong> $last_name <br />
	<strong>Adress:</strong> $address_name <br />
	<strong>ZIP CODE:</strong> $address_zip <br />
	<strong>City:</strong> $address_city <br />
	<strong>State:</strong> $address_state <br />
	<strong>Country:</strong> $address_country ($address_country_code) <br />
	<strong>Adress to delivery:</strong> $address_status <br />
	<strong>Value:</strong> $mc_gross <br />
	<strong>Status of payment:</strong> $payment_status <br />
	<strong>Type of payment:</strong> $payment_type <br />
	<strong>Quantity:</strong> $quantity <br />
	<strong>Tax:</strong> $tax <br />
	</span>";
	$message = utf8_encode($message);
	
	$headers = "From: ".BAND." <".EMAIL."> \r\n";
	$headers .= "MIME-Version: 1.0 \r\n";
	$headers .= "Content-type: text/html; charset=utf-8 \r\n";
	//$headers .= "Bcc: Henry Terron \r\n <henry@shotofficial.com\r\n>";
	
	$emailsender = EMAIL;
	$envio = false;
	if(!mail($email_contato, $subject, $message, $headers ,"-r".$emailsender)){
		$headers .= "Return-Path: " . $emailsender . "\r\n";
		
		if(!mail($email_contato, $subject, $message, $headers )){
			die;
		} else {
			$envio = true;
		}
	} else {
		$envio = true;
	}
	}
	##FIM MAILIN##
	
	##INICIO MAILIN##
	$email_contato_[0] = EMAIL;
	foreach($email_contato_ as $v){
	$email_contato = $v;
	$subject = utf8_encode("Purchase Confirmation - ".BAND." store");
	$message = "
	<span style='font-size:12px;'>
	<h3>Your purchase was successful</h3>
	<br />
	We will put in touch with you soon.
	<br />
	Greetings,
	".BAND."
	</span>";
	$message = utf8_encode($message);
	
	$headers = "From: ".BAND." <".EMAIL."> \r\n";
	$headers .= "MIME-Version: 1.0 \r\n";
	$headers .= "Content-type: text/html; charset=utf-8 \r\n";
	//$headers .= "Bcc: Henry Terron \r\n <henry@shotofficial.com\r\n>";
	
	$emailsender = EMAIL;
	$envio = false;
	if(!mail($payer_email, $subject, $message, $headers ,"-r".$emailsender)){
		$headers .= "Return-Path: " . $emailsender . "\r\n";
		
		if(!mail($email_contato, $subject, $message, $headers )){
			die;
		} else {
			$envio = true;
		}
	} else {
		$envio = true;
	}
	}
	##FIM MAILIN##


?>