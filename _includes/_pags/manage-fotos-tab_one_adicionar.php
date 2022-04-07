<?php
if($_GET["c"] == "edit" and $_GET["d"] != ""){
$id = $_GET["d"];
$SQL_EDIT = "SELECT a.*, a.descricao as `descricao` FROM tb_albuns a WHERE a.id = $id";
$SQL_EDIT = mysqli_query($connect, $SQL_EDIT) or die(mysqli_error($connect));
$SQL_EDIT_Q = mysql_fetch_assoc($SQL_EDIT);

$t_imagem = html_entity_decode($SQL_EDIT_Q["imagem"]);
$t_nome = html_entity_decode($SQL_EDIT_Q["nome"]);
$t_descricao = html_entity_decode($SQL_EDIT_Q["descricao"]);
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
$t_descricao = "";

$t_status_1 = "checked='checked'";
$t_status_2 = "";

$pg_atual = $_GET["a"]."/".$_GET["b"];
}
?>
<div class="manage-content-menu">
	<ul>
        <li><a href="<?php echo PATH ?>manage/fotos-tab_one">PHOTOS</a><div class="right">&nbsp;</div></li>
        <li class="current"><a href="<?php echo PATH.$pag_atual ?>">CREATING / EDITING</a><div class="right">&nbsp;</div></li>
    </ul>
</div>
<div class="manage-content">
    <div class="top-titulo">Creating / Editing<br /><img src="<?php echo PATH ?>_images/manage/hr.jpg" /></div>
<div class="both"></div>
	<form name="form_manage_adicionar" id="form_manage_adicionar" action="<?php echo PATH ?>manage/sub-form/" method="post">
    <input type="hidden" name="req" value="<?php echo $pg_atual; ?>" />
    <input type="hidden" name="id" value="<?php echo $_GET["d"]; ?>" />
<div class="manage_content">
    <br clear="all" />
	<label class="form-lab2 w150">Title:</label>
    <input type="text" name="t_nome" class="form-txt2 w500 required" value="<?php echo $t_nome; ?>">
    <div class="both"></div>
    <label class="form-lab2 w150">Description:</label>
    <textarea name="t_descricao" class="form-txtarea w500 h100"><?php echo $t_descricao; ?></textarea>
    <br clear="all" />
    <label class="form-lab2 w150">Status:</label>
    <input type="radio" class="form-checkbox1" <?php echo $t_status_1; ?> id="id_status_1" value="on" name="t_status" /><label for="id_status_1" class="form-checkbox">ONLINE</label>
    <input type="radio" class="form-checkbox1" id="id_status_2" <?php echo $t_status_2; ?> value="off" name="t_status" /><label for="id_status_2" class="form-checkbox">OFFLINE</label>
    <div class="both"></div>
    <label class="form-lab2 w150">Photos:</label>
    <input id="custom_file_upload" type="file" name="Filedata" />
    <br clear="all" />
    <?php
	$id = 10;
	if($id != ""){
	$SQL2 = "SELECT * FROM tb_fotos WHERE id_album = $id ORDER BY id";
	$SQL2 = mysqli_query($connect, $SQL2);
	?>
    <ul id="view_fotos">
    	<?php
		$main_pic = "";
		$all_pics = "";
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
        <li id="li_<?php echo $id_img; ?>"><a href="javascript:void(0);" onclick="delete_img('<?php echo $id_img; ?>', '<?php echo $image_name.":".$id_img; ?>')"><img src="<?php echo PATH ?>_images/cancel.png" class="btn_cancel2" /></a><br /><div class="exibi_image"><a href="<?php echo PATH ?>_images/_uploads/imgs/_thumbs/<?php echo $image_name; ?>" class="photos_show_upload"><img id="img_<?php echo $id_img; ?>" class="fotos_edit" src="<?php echo PATH ?>_images/_uploads/imgs/_thumbs/min_<?php echo $image_name; ?>" <?php echo $larg_img; ?> /></a></div><br /><textarea class="manage_fotos_descricao noeditor" name="foto_txt_<?php echo $id_img; ?>"><?php echo $descricao; ?></textarea><br /><input <?php echo $main_pic; ?> type="radio" name="main_pic" value="<?php echo $image_name; ?>" /></li>
        <?php
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
    <input type="hidden" name="t_imagem" value="<?php echo $all_pics; ?>" id="t_imagem" />
    <br clear="all" />
    <label class="form-lab2 w150">&nbsp;</label>
    <input type="image" src="<?php echo PATH ?>_images/btn_save.jpg" class="manage-btn-save" />
    <br clear="all" />
    </div>
</form>
<!-- 3 -->
<form action="<?php echo PATH ?>send/upload" class="dropzone" id="my-dropzone">
<input type="hidden" name="req" value="upload" />

</form>
</div>
<div class="both"></div>
</div>