<?php
$SQL_EDIT = "SELECT *, DATE_FORMAT(dt_update, '%d/%m/%Y ás %Hh%im%ss') as dt_update2 FROM tb_biografia ORDER BY id DESC LIMIT 1";
$SQL_EDIT = mysqli_query($connect, $SQL_EDIT);
if(mysqli_num_rows($SQL_EDIT)>0){
$SQL_EDIT_Q = mysql_fetch_assoc($SQL_EDIT);
$id = html_entity_decode($SQL_EDIT_Q["id"]);
$titulo_tab = html_entity_decode($SQL_EDIT_Q["titulo_tab"]);
$t_titulo = html_entity_decode($SQL_EDIT_Q["titulo"]);
$t_texto = html_entity_decode($SQL_EDIT_Q["texto"]);
$t_status = html_entity_decode($SQL_EDIT_Q["status"]);
$t_update = html_entity_decode($SQL_EDIT_Q["dt_update2"]);

if($t_status == "on"){
$t_status_1 = "checked='checked'";
$t_status_2 = "";
}else{
$t_status_1 = "";
$t_status_2 = "checked='checked'";
}
$pg_atual = $_GET["a"]."/".$_GET["b"]."/".$_GET["c"];
}else{
$titulo_tab = "";
$t_titulo = "";
$t_texto = "";
$t_status_1 = "checked='checked'";
$t_status_2 = "";

$pg_atual = $_GET["a"]."/".$_GET["b"];
}
?>
<div class="manage-content-menu">
	<ul>
        <li class="current"><a href="<?php echo PATH.$pag_atual ?>">BIOGRAPHY</a><div class="right">&nbsp;</div></li>
        <li><a href="<?php echo PATH ?>manage/banda-tab_two">DISCOGRAPHY</a><div class="right">&nbsp;</div></li>
    </ul>
</div>
<div class="manage-content">
    <div class="top-titulo">Biography<br /><img src="<?php echo PATH ?>_images/manage/hr.jpg" /></div>
<div class="both"></div>
	<form name="form_manage_adicionar" id="form_manage_adicionar" action="<?php echo PATH ?>manage/sub-form/" method="post">
    <input type="hidden" name="req" value="<?php echo $pg_atual; ?>" />
    <input type="hidden" name="id" value="<?php echo $id; ?>" />
<div class="manage_content">
	<label class="form-lab2 w150">Last update:</label>
    <label class="form-lab-title reset_margin"><?php echo $t_update; ?></label>
    <div class="both"></div>
    <label class="form-lab2 w150">Title (TAB):</label>
    <input type="text" name="titulo_tab" class="form-txt2 w500" value="<?php echo $titulo_tab; ?>">
    <div class="both"></div>
    <label class="form-lab2 w150">Sub title:</label>
    <input type="text" name="t_titulo" class="form-txt2 w500" value="<?php echo $t_titulo; ?>">
    <div class="both"></div>
    <label class="form-lab2 w150">Description:</label>
    <textarea name="t_texto" class="form-txtarea w500 h100"><?php echo $t_texto; ?></textarea>
    <div class="both"></div>
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