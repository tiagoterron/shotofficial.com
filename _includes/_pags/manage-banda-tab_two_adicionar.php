<?php
if($_GET["c"] == "edit" and $_GET["d"] != ""){
$id = $_GET["d"];
$SQL_EDIT = "SELECT *, DATE_FORMAT(ano, '%Y-%m-%d') as ano2 FROM tb_discografia WHERE id = $id";
$SQL_EDIT = mysqli_query($connect, $SQL_EDIT);
$SQL_EDIT_Q = mysql_fetch_assoc($SQL_EDIT);

$t_imagem = html_entity_decode($SQL_EDIT_Q["imagem"]);

$t_titulo = html_entity_decode($SQL_EDIT_Q["titulo"]);
$faixas = explode("|*|", html_entity_decode($SQL_EDIT_Q["faixas"]));
$t_data = html_entity_decode($SQL_EDIT_Q["ano2"]);
$t_label = html_entity_decode($SQL_EDIT_Q["gravadora"]);
$t_status = html_entity_decode($SQL_EDIT_Q["status"]);
$t_descricao = html_entity_decode($SQL_EDIT_Q["descricao"]);
$t_preco = html_entity_decode($SQL_EDIT_Q["preco"]);
$t_preco = number_format($t_preco, 2, ',', '.');
$current_type = html_entity_decode($SQL_EDIT_Q["moeda"]);
$t_buy_online = html_entity_decode($SQL_EDIT_Q["link_compra"]);
$t_download_online = html_entity_decode($SQL_EDIT_Q["link_download"]);

if($t_status == "on"){
$t_status_1 = "checked='checked'";
$t_status_2 = "";
}else{
$t_status_1 = "";
$t_status_2 = "checked='checked'";
}
$pg_atual = $_GET["a"]."/".$_GET["b"]."/".$_GET["c"];
}else{
$t_titulo = "";
$faixas = "";
$t_data = date("Y-m-d");
$t_label = "";
$t_descricao = "";
$t_preco = "";
$current_type = "";
$t_buy_online = "";
$t_download_online = "";

$t_status_1 = "checked='checked'";
$t_status_2 = "";

$pg_atual = $_GET["a"]."/".$_GET["b"];
}

?>
<div class="manage-content-menu">
	<ul>
        <li><a href="<?php echo PATH ?>manage/banda-tab_one">BIOGRAPHY</a><div class="right">&nbsp;</div></li>
        <li><a href="<?php echo PATH ?>manage/banda-tab_two">DISCOGRAPHY</a><div class="right">&nbsp;</div></li>
        <li class="current"><a href="<?php echo PATH.$pag_atual ?>">NEW ALBUM</a><div class="right">&nbsp;</div></li>
    </ul>
</div>
<div class="manage-content">
    <div class="top-titulo">New Album<br /><img src="<?php echo PATH ?>_images/manage/hr.jpg" /></div>
<div class="both"></div>
	<form name="form_manage_adicionar" id="form_manage_adicionar" action="<?php echo PATH ?>manage/sub-form/" method="post">
    <input type="hidden" name="req" value="<?php echo $pg_atual; ?>" />
    <input type="hidden" name="id" value="<?php echo $_GET["d"]; ?>" />
<div class="manage_content">
	<label class="form-lab2 w150">Cover Image: </label>
    <?php
	if($t_imagem != ""){
	?>

    <div id="div_photo" class="div_photo2"><img src="<?php echo PATH ?>_images/_uploads/_thumbs/min_<?php echo $t_imagem; ?>" style="height: 200px;" id="PhotoPrev" /><a href="javascript:void(0);" onclick="show_hide_image_button('div_photo', 'photo_albumUploader')"><img src="<?php echo PATH ?>_images/cancel.png" class="btn_cancel" /></a></div>
    <br clear="all" />
    <label class="form-lab2 w150">&nbsp;</label><input type="file" id="photo_album" class="photo_album" name="photo_album" />
    <?php
	}else{
	?>
    <div id="div_photo" class="div_photo"><img src="<?php echo PATH ?>_js/_uberuploadcropper/photo_not_available.png" style="height: 200px;" id="PhotoPrev" /><a href="javascript:void(0);" onclick="show_hide_image_button('div_photo', 'photo_albumUploader')"><img src="<?php echo PATH ?>_images/cancel.png" class="btn_cancel" /></a></div>
    <input type="file" id="photo_album" class="photo_album" name="photo_album" />
    <?php
	}
    ?>
    <input type="hidden" name="t_imagem" value="" id="t_imagem" />
    <br clear="all" />
	<label class="form-lab2 w150">Title:</label>
    <input type="text" name="t_titulo" class="form-txt2 w500 required" value="<?php echo $t_titulo; ?>">
    <div class="both"></div>
    <label class="form-lab2 w150">Tracks:</label>
    <div class="both"></div>
    <?php
	for($i=1;$i<=20;$i++){
	if($i == 11){
	echo "<div style=\"display:none;\" id=\"id_show_more_tracks\">";
	}
	?>
    <label class="form-lab2 w150">Title <?php echo $i; ?>:</label>
    <input type="text" name="t_faixa_<?php echo $i; ?>" class="form-txt2 w200" value="<?php echo $faixas[$i-1]; ?>">
    <?php
	if($i == 20){
	?>
    <a href="javascript:void(0);" onclick="show_more_tracks('id_show_more_tracks', 'block')" class="form-link">[+]</a>
    <?php
	}
	?>
    <div class="both"></div>
    <?php
	if($i == 15){
	echo "</div>";
	}
	}
	?>
    
    <div class="both"></div>
    <br clear="all" />
    <label class="form-lab2 w150">Releasing date:</label>
    <input type="text" name="t_data_lanc" id="inputDate" class="mask-data2 inputDate form-txt2 w75" value="<?php echo $t_data?>">
    <div class="both"></div>
    <label class="form-lab2 w150">Label:</label>
    <input type="text" name="t_label" class="form-txt2 w400" value="<?php echo $t_label; ?>">
    <div class="both"></div>
    <label class="form-lab2 w150">Price:</label>
    <input type="text" name="t_preco" class="form-txt2 w50" value="<?php echo $t_preco; ?>">
    <label class="form-lab2 w15"></label>
        <input type="radio" class="form-checkbox1" id="id_moeda_3" value="EURO" name="moeda" <?php echo $current_type=="EURO"?"checked='checked'":"";?> /><label for="id_moeda_3" class="form-checkbox">EURO</label>
            <input type="radio" class="form-checkbox1" id="id_moeda_2" value="DOLAR" name="moeda" <?php echo $current_type=="DOLAR"?"checked='checked'":"";?> /><label for="id_moeda_2" class="form-checkbox">DOLAR</label>
    <input type="radio" class="form-checkbox1" id="id_moeda_1" value="REAL" name="moeda" <?php echo $current_type=="REAL"?"checked='checked'":"";?> /><label for="id_moeda_1" class="form-checkbox">REAL</label>
    <input type="radio" class="form-checkbox1" id="id_moeda_4" value="OUTRA" name="moeda" <?php echo $current_type=="OUTRA"?"checked='checked'":"";?> /><label for="id_moeda_4" class="form-checkbox">OUTRA MOEDA</label>
    <div class="both"></div>
    <label class="form-lab2 w150">Description:</label>
    <textarea name="t_descricao" class="form-txtarea w500 h100"><?php echo $t_descricao; ?></textarea>
    <br clear="all" />
     <label class="form-lab2 w150">Link for buying:</label>
    <input type="text" name="t_link_comprar" class="form-txt2 w400" value="<?php echo $t_buy_online; ?>">
    <span class="form-title">(Link to buy it)</span>
    <div class="both"></div>
    <label class="form-lab2 w150">Link for download:</label>
    <input type="text" name="t_link_download" class="form-txt2 w400" value="<?php echo $t_download_online; ?>">
    <span class="form-title">(Link to download it)</span>
    <div class="both"></div>
    <label class="form-lab2 w150">Status:</label>
    <input type="radio" class="form-checkbox1" <?php echo $t_status_1; ?> id="id_status_1" value="on" name="t_status" /><label for="id_status_1" class="form-checkbox">ONLINE</label>
    <input type="radio" class="form-checkbox1" id="id_status_2" <?php echo $t_status_2; ?> value="off" name="t_status" /><label for="id_status_2" class="form-checkbox">OFFLINE</label>
    <div class="both"></div>
    <label class="form-lab2 w150">Notify e-mails:</label>
    <input type="radio" class="form-checkbox1" checked="checked" id="id_notificar_emails_1" value="" name="notificar_emails" /><label for="id_notificar_emails_1" class="form-checkbox">YES</label>
    <input type="radio" class="form-checkbox1" id="id_notificar_emails_2" value="" name="notificar_emails" /><label for="id_notificar_emails_2" class="form-checkbox">NO</label>
    <div class="both"></div>

    <label class="form-lab2 w150">&nbsp;</label>
    <input type="image" src="<?php echo PATH ?>_images/btn_save.jpg" class="manage-btn-save" />
    <br clear="all" />
    </div>
</form>
</div>
<div class="both"></div>
</div>