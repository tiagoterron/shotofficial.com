<?php
if($_GET["c"] == "edit" and $_GET["d"] != ""){
$id = $_GET["d"];
$SQL_EDIT = "SELECT * FROM tb_store_produtos WHERE id = $id";
$SQL_EDIT = mysqli_query($connect, $SQL_EDIT);
$SQL_EDIT_Q = mysql_fetch_assoc($SQL_EDIT);

$t_imagem = html_entity_decode($SQL_EDIT_Q["imagem"]);

$t_titulo = html_entity_decode($SQL_EDIT_Q["titulo"]);
$t_preco = html_entity_decode($SQL_EDIT_Q["usd_preco"]);
$t_preco_2 = html_entity_decode($SQL_EDIT_Q["brl_preco"]);
$t_quantidade = html_entity_decode($SQL_EDIT_Q["quantidade"]);
$t_status = html_entity_decode($SQL_EDIT_Q["status"]);
$t_tipo = html_entity_decode($SQL_EDIT_Q["tipo"]);
$t_texto = html_entity_decode($SQL_EDIT_Q["descricao"]);

if($t_status == "Y"){
$t_status_1 = "checked='checked'";
$t_status_2 = "";
}else{
$t_status_1 = "";
$t_status_2 = "checked='checked'";
}
if($t_tipo == "tshirt"){
$t_tipo_1 = "checked='checked'";
$t_tipo_2 = "";
$t_tipo_3 = "";
}elseif($t_tipo == "cd"){
$t_tipo_1 = "";
$t_tipo_2 = "checked='checked'";
$t_tipo_3 = "";
}elseif($t_tipo == "outros"){
$t_tipo_1 = "";
$t_tipo_2 = "";
$t_tipo_3 = "checked='checked'";
}else{
$t_tipo_1 = "";
$t_tipo_2 = "";
}
$pg_atual = $_GET["a"]."/".$_GET["b"]."/".$_GET["c"];
}else{
$t_titulo = "";
$t_preco = "0,00";
$t_data = date("Y-m-d");
$t_label = "";
$t_descricao = "";
$t_quantidade = "1";

$current_type = "";
$t_buy_online = "";
$t_download_online = "";

$t_tipo_1 = "";
$t_tipo_2 = "checked='checked'";

$t_status_1 = "checked='checked'";
$t_status_2 = "";

$pg_atual = $_GET["a"]."/".$_GET["b"];
}

?>

<div class="td"></div>
<div class="manage-content-menu">
	<ul>
        <li><a href="<?php echo PATH ?>manage/loja-tab_one">PRODUCTS</a><div class="right">&nbsp;</div></li>
		<li><a href="<?php echo PATH ?>manage/loja-tab_two">ORDERS</a><div class="right">&nbsp;</div></li>
		<li><a href="<?php echo PATH ?>manage/loja-tab_three">BUYERS</a><div class="right">&nbsp;</div></li>
        <li class="current"><a href="<?php echo PATH.$pag_atual ?>">CREATING/EDITING PRODUCT</a><div class="right">&nbsp;</div></li>
    </ul>
</div>
<div class="manage-content">
    <div class="top-titulo">Creating/Editing<br /><img src="<?php echo PATH ?>_images/manage/hr.jpg" /></div>
<div class="both"></div>

<form action="<?php echo PATH ?>manage/sub-form/" class="dropzone" id="my-dropzone3">
<input type="hidden" name="req" value="upload" />

</form>
	<form name="form_manage_adicionar" id="form_manage_adicionar" action="<?php echo PATH ?>manage/sub-form/" method="post">
    <input type="text" name="photoproduct" id="photoproduct" value="<?php echo $t_imagem; ?>" />
    <input type="hidden" name="req" value="<?php echo $pg_atual; ?>" />
    <input type="hidden" name="id" value="<?php echo $_GET["d"]; ?>" />
<div class="manage_content">
	<label class="form-lab2 w150">Image: </label>
    <?php
	if($t_imagem != ""){
	?>

    <div id="div_photo" class="div_photo2"><img src="<?php echo PATH ?>_images/_uploads/_thumbs/min_<?php echo $t_imagem; ?>" style="height: 200px;" id="PhotoPrev" /><a href="javascript:void(0);" onclick="show_hide_image_button('div_photo', 'photo_albumUploader')"><img src="<?php echo PATH ?>_images/cancel.png" class="btn_cancel" /></a></div>
    <br clear="all" />
    <?php /*?><label class="form-lab2 w150">&nbsp;</label><input type="file" id="photo_album" class="photo_album" name="photo_album" /><?php */?>
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
	<label class="form-lab2 w150">Price:</label>
    <input type="text" name="t_preco" class="form-txt2 w50" value="<?php echo $t_preco; ?>">
    <label class="form-checkbox">(USD)</label>
    <input type="text" name="t_preco_2" class="form-txt2 w50" value="<?php echo $t_preco_2; ?>">
    <label class="form-checkbox">(BRL)</label>
	<div class="both"></div>
    <label class="form-lab2 w150">Type:</label>
    <input type="radio" class="form-checkbox1" <?php echo $t_tipo_1; ?> id="id_tipo_1" value="tshirt" name="t_tipo" /><label for="id_tipo_1" class="form-checkbox">T-SHIRT</label>
    <input type="radio" class="form-checkbox1" id="id_tipo_2" <?php echo $t_tipo_2; ?> value="cd" name="t_tipo" /><label for="id_tipo_2" class="form-checkbox">CD</label>
    <input type="radio" class="form-checkbox1" id="id_tipo_3" <?php echo $t_tipo_3; ?> value="outros" name="t_tipo" /><label for="id_tipo_3" class="form-checkbox">OTHER</label>
	<div class="both"></div>
	<label class="form-lab2 w150">Amount available:</label>
    <input type="text" name="t_quantidade" class="form-txt2 w25" value="<?php echo $t_quantidade; ?>">
    <div class="both"></div>
    <label class="form-lab2 w150">Description:</label>
    <textarea name="t_descricao" class="form-txtarea w500 h100"><?php echo $t_texto; ?></textarea>
    <br clear="all" />
    <label class="form-lab2 w150">Photos:</label>
    <input id="custom_file_upload2" type="file" name="Filedata" />
    <br clear="all" />
    <?php
	if($id != ""){
	$SQL2 = "SELECT * FROM tb_store_produtos_fotos WHERE id_produto = $id ORDER BY id";
	$SQL2 = mysqli_query($connect, $SQL2) or die(mysqli_error($connect));
	$SQL2_N = mysqli_num_rows($SQL2);
	?>
    <ul id="view_fotos">
    	<?php
		$main_pic = "";
		$all_pics = "";
		if($SQL2_N > 0){
		while($SQL2_Q = mysql_fetch_assoc($SQL2)){
		$id_img = ent($SQL2_Q["id"], "2");
		$image_name = ent($SQL2_Q["imagem"], "2");
		$all_pics .= ";".$image_name.":".$id_img;
		if($image_name == $t_imagem){
		$main_pic = "checked='checked'";
		}else{
		$main_pic = "";
		}
		$descricao = ent($SQL2_Q["descricao"], "2");
		$img = getimagesize("_images/_uploads/imgs/_thumbs/min_".$image_name);	
		if($img[1] > 200 and $img[1] > $img[0]){	
		$larg_img = rend_img_xy("_images/_uploads/imgs/_thumbs/min_".$image_name, "", "200", '"');
		}elseif($img[0] > 217){	
		$larg_img = rend_img_xy("_images/_uploads/imgs/_thumbs/min_".$image_name, "217", "", '"');
		}
		?>
        <li id="li_<?php echo $id_img; ?>"><a href="javascript:void(0);" onclick="delete_img2('<?php echo $id_img; ?>', '<?php echo $image_name.":".$id_img; ?>')"><img src="<?php echo PATH ?>_images/cancel.png" class="btn_cancel2" /></a><br /><div class="exibi_image"><a href="<?php echo PATH ?>_images/_uploads/imgs/_thumbs/<?php echo $image_name; ?>" class="photos_show_upload"><img id="img_<?php echo $id_img; ?>" class="fotos_edit" src="<?php echo PATH ?>_images/_uploads/imgs/_thumbs/min_<?php echo $image_name; ?>" <?php echo $larg_img; ?> /></a></div><br /><textarea class="manage_fotos_descricao noeditor" name="foto_txt_<?php echo $id_img; ?>"><?php echo $descricao; ?></textarea></li>
        <?php
		}
		}
		?>
    </ul>
    <?php
	}else{
	?>
    <ul id="view_fotos"></ul>
    <?php
	}
	?>
    <input type="hidden" name="t_imagem_uploads" value="<?php echo $all_pics; ?>" id="t_imagem_uploads" />
    <br clear="all" />
    <label class="form-lab2 w150">Status:</label>
    <input type="radio" class="form-checkbox1" <?php echo $t_status_1; ?> id="id_status_1" value="Y" name="t_status" /><label for="id_status_1" class="form-checkbox">ONLINE</label>
    <input type="radio" class="form-checkbox1" id="id_status_2" <?php echo $t_status_2; ?> value="N" name="t_status" /><label for="id_status_2" class="form-checkbox">OFFLINE</label>
    <div class="both"></div>

    <label class="form-lab2 w150">&nbsp;</label>
    <input type="image" src="<?php echo PATH ?>_images/btn_save.jpg" class="manage-btn-save" />
    <br clear="all" />
    </div>
</form>
</div>
<div class="both"></div>
</div>