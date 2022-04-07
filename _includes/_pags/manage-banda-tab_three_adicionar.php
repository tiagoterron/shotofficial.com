<?php
if($_GET["c"] == "edit" and $_GET["d"] != ""){
$id = $_GET["d"];
$SQL_EDIT = "SELECT * FROM tb_membros WHERE id = $id";
$SQL_EDIT = mysqli_query($connect, $SQL_EDIT);
$SQL_EDIT_Q = mysql_fetch_assoc($SQL_EDIT);

$t_imagem = html_entity_decode($SQL_EDIT_Q["imagem"]);
$t_nome = html_entity_decode($SQL_EDIT_Q["nome"]);
$t_instrumento = html_entity_decode($SQL_EDIT_Q["instrumento"]);
$t_twitter = html_entity_decode($SQL_EDIT_Q["twitter"]);
$t_message = html_entity_decode($SQL_EDIT_Q["message"]);
$t_status = html_entity_decode($SQL_EDIT_Q["status"]);

if($t_status == "on"){
$t_status_1 = "checked='checked'";
$t_status_2 = "";
}else{
$t_status_1 = "";
$t_status_2 = "checked='checked'";
}
$pg_atual = $_GET["a"]."/".$_GET["b"]."/".$_GET["c"];
}else{
$t_imagem = "";
$t_nome = "";
$t_instrumento = "";
$t_twitter = "";
$t_message = "";

$t_status_1 = "checked='checked'";
$t_status_2 = "";

$pg_atual = $_GET["a"]."/".$_GET["b"];
}
?>
<div class="manage-content-menu">
	<ul>
        <li><a href="<?php echo PATH ?>manage/banda-tab_one">BIOGRAFIA</a><div class="right">&nbsp;</div></li>
        <li><a href="<?php echo PATH ?>manage/banda-tab_two">DISCOGRAFIA</a><div class="right">&nbsp;</div></li>
        <li><a href="<?php echo PATH ?>manage/banda-tab_three">MEMBROS</a><div class="right">&nbsp;</div></li>
        <li class="current"><a href="<?php echo PATH.$pag_atual ?>">Editando</a><div class="right">&nbsp;</div></li>
    </ul>
</div>
<div class="manage-content">
    <div class="top-titulo">Membros da S.H.O.T.<br /><img src="<?php echo PATH ?>_images/manage/hr.jpg" /></div>
<div class="both"></div>
	<form name="form_manage_adicionar" id="form_manage_adicionar" action="<?php echo PATH ?>manage/sub-form/" method="post">
    <input type="hidden" name="req" value="<?php echo $pg_atual; ?>" />
    <input type="hidden" name="id" value="<?php echo $_GET["d"]; ?>" />
<div class="manage_content">
	<label class="form-lab2 w150">Imagem do album:</label>
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
	<label class="form-lab2 w150">Nome:</label>
    <input type="text" name="t_nome" class="form-txt2 w500 required" value="<?php echo $t_nome; ?>">
    <div class="both"></div>
    <label class="form-lab2 w150">Instrumento:</label>
    <input type="text" name="t_instrumento" class="form-txt2 w400" value="<?php echo $t_instrumento; ?>">
    <div class="both"></div>
    <label class="form-lab2 w150">Link:</label>
    <input type="text" name="t_twitter" class="form-txt2 w400" value="<?php echo $t_twitter; ?>">
    <span class="form-title">(ex.: facebook, twitter, etc)</span>
    <div class="both"></div>
    <label class="form-lab2 w150">Mensagem:</label>
    <textarea name="t_message" class="form-txtarea w500 h100"><?php echo $t_message; ?></textarea>
    <br clear="all" />
    <label class="form-lab2 w150">Status:</label>
    <input type="radio" class="form-checkbox1" <?php echo $t_status_1; ?> id="id_status_1" value="on" name="t_status" /><label for="id_status_1" class="form-checkbox">ONLINE</label>
    <input type="radio" class="form-checkbox1" id="id_status_2" <?php echo $t_status_2; ?> value="off" name="t_status" /><label for="id_status_2" class="form-checkbox">OFFLINE</label>
    <div class="both"></div>
    <label class="form-lab2 w150">&nbsp;</label>
    <input type="image" src="<?php echo PATH ?>_images/btn_save.jpg" class="manage-btn-save" />
    <br clear="all" />
    </div>
</form>
</div>
<div class="both"></div>
</div>