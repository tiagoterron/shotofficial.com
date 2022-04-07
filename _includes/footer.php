<?php 
$impressum = query("tb_sys_informacoes", "texto", "WHERE titulo = 'status_impressum'"); 
if($impressum == "OFF"){
	$impre = "";
}else{
	$impre = " | <a href='".PATH."/impressum/'>Impressum</a>";
}

?>
<div class="header_banner_shot_bottom">
	<div style="float:left;margin: 18px 10px;font-size: 13px;">Copyright <?php echo date("Y"); ?> - All rights reserved (<?php echo BAND ?> | <?php echo DOMAIN ?>) <?php echo $impre; ?> |  <a href='<?php echo PATH ?>contact/'>Contact</a> - PARTNERS: <a href="http://backdoorparty.de" target="_blank">Backdoor Party</a> & <a target="_blank" href="http://greenvalleyrockfestival.com">Green Valley Rock Festival</a></div>
    
    <div style="float:right;font-size: 13px;margin:18px;">
	<?php
    if(USER != "NOT_LOGGED"){
	?>
    <a target="_blank" href="<?php echo PATH ?>manage/">Administrator</a> (<a href="<?php echo PATH ?>exec/logout/" class="reset_a">Logout</a>)
	<?php
	}
	?>
	<?php /*?><a href="http://terronweb.com" target="_blank"><img src="<?php echo PATH ?>_images/logomarca_terronweb.png" /></a><?php */?></div>
</div>
<div class="both">&nbsp;</div>