<?php
if($_GET["c"] == "edit" and $_GET["d"] != ""){
$id = $_GET["d"];
$SQL_EDIT = "SELECT *  FROM tb_videos WHERE id = $id";
$SQL_EDIT = mysqli_query($connect, $SQL_EDIT);
$SQL_EDIT_Q = mysql_fetch_assoc($SQL_EDIT);

$t_nome = ent($SQL_EDIT_Q["nome"], "2");
$t_link = ent($SQL_EDIT_Q["video"], "2");
$t_status = ent($SQL_EDIT_Q["status"], "2");
$t_main = ent($SQL_EDIT_Q["main"], "2");


if($t_main == "Y"){
$t_main_1 = "checked='checked'";
$t_main_2 = "";
}else{
$t_main_1 = "";
$t_main_2 = "checked='checked'";
}

if($t_status == "on"){
$t_status_1 = "checked='checked'";
$t_status_2 = "";
}else{
$t_status_1 = "";
$t_status_2 = "checked='checked'";
}
$pg_atual = $_GET["a"]."/".$_GET["b"]."/".$_GET["c"];
}else{
$t_nome = "";
$t_link = "";
$t_local = "";
$t_status_1 = "checked='checked'";
$t_status_2 = "";
$t_main_1 = "";
$t_main_2 = "checked='checked'";

$pg_atual = $_GET["a"]."/".$_GET["b"];
}
?>
<div class="manage-content-menu">
	<ul>
    	<li><a href="<?php echo PATH ?>manage/videos-tab_one/">VIDEOS</a><div class="right">&nbsp;</div></li>
        <li class="current"><a href="<?php echo PATH.$pag_atual ?>">INSERTING VIDEOS</a><div class="right">&nbsp;</div></li>
    </ul>
</div>
<div class="manage-content">
    <div class="top-titulo">Inserting videos<br /><img src="<?php echo PATH ?>_images/manage/hr.jpg" /></div>
<div class="both"></div>
	<form name="form_manage_adicionar" id="form_manage_adicionar" action="<?php echo PATH ?>manage/sub-form/" method="post">
    <input type="hidden" name="req" value="<?php echo $pg_atual; ?>" />
    <input type="hidden" name="id" value="<?php echo $_GET["d"]; ?>" />
<div class="manage_content">
    <label class="form-lab2 w150">Title:</label>
    <input type="text" name="t_nome" class="form-txt2 w500 required" value="<?php echo $t_nome; ?>">
    <div class="both"></div>
    <label class="form-lab2 w150">Link youtube (URL):</label>
    <input type="text" name="t_video" class="form-txt2 w500 required" value="<?php echo $t_link; ?>"><br clear="all" />
    <label class="form-lab2 w150"></label>
    <span class="form-title">(Ex.: http://www.youtube.com/watch?&v=Fo6PdObBR4s) </span>
    <div class="both"></div>
    <label class="form-lab2 w150">Main video:</label>
    <input type="radio" class="form-checkbox1" <?php echo $t_main_1; ?> id="id_t_main_1" value="Y" name="t_main" /><label for="id_t_main_1" class="form-checkbox">YES</label>
    <input type="radio" class="form-checkbox1" id="id_t_main_2" <?php echo $t_main_2; ?> value="N" name="t_main" /><label for="id_t_main_2" class="form-checkbox">NO</label>
     <span class="form-title">(to be showed on the homepage) </span>
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