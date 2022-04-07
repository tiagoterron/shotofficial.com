<?php
if($_GET["c"] == "edit" and $_GET["d"] != ""){
$id = $_GET["d"];
$SQL_EDIT = "SELECT * FROM tb_posts WHERE id = $id";
$SQL_EDIT = mysqli_query($connect, $SQL_EDIT);
$SQL_EDIT_Q = mysql_fetch_assoc($SQL_EDIT);
$t_titulo = ent($SQL_EDIT_Q["t_titulo"], "2");
$t_texto = ent($SQL_EDIT_Q["t_content"], "2");
$t_titulo_2 = ent($SQL_EDIT_Q["t_titulo_2"], "2");
$t_texto_2 = ent($SQL_EDIT_Q["t_content_2"], "2");
$t_titulo_3 = ent($SQL_EDIT_Q["t_titulo_3"], "2");
$t_texto_3 = ent($SQL_EDIT_Q["t_content_3"], "2");
$t_titulo_4 = ent($SQL_EDIT_Q["t_titulo_4"], "2");
$t_texto_4 = ent($SQL_EDIT_Q["t_content_4"], "2");
$t_status = ent($SQL_EDIT_Q["status"], "2");

if($t_status == "on"){
$t_status_1 = "checked='checked'";
$t_status_2 = "";
$t_status_3 = "";
}elseif($t_status == "off"){
$t_status_1 = "";
$t_status_2 = "checked='checked'";
$t_status_3 = "";
}else{
$t_status_1 = "";
$t_status_2 = "";
$t_status_3 = "checked='checked'";
}
$pg_atual = $_GET["a"]."/".$_GET["b"]."/".$_GET["c"];
}else{
$t_titulo = "";
$t_texto = "";
$t_titulo_2 = "";
$t_texto_2 = "";
$t_titulo_3 = "";
$t_texto_3 = "";
$t_titulo_4 = "";
$t_texto_4 = "";
$t_status_1 = "checked='checked'";
$t_status_2 = "";
$t_status_3 = "checked='checked'";

$pg_atual = $_GET["a"]."/".$_GET["b"];
}
?>
<div class="manage-content-menu">
	<ul>
    	<li><a href="<?php echo PATH ?>manage/blog-tab_one/">BLOG</a><div class="right">&nbsp;</div></li>
    	<li class="current"><a href="<?php echo PATH.$pag_atual ?>">CREATING / EDITING BLOG</a><div class="right">&nbsp;</div></li>
    </ul>
</div>
<div class="manage-content">
    <div class="top-titulo">New content<br /><img src="<?php echo PATH ?>_images/manage/hr.jpg" /></div>
<div class="both"></div>
	<form name="form_manage_adicionar" id="form_manage_adicionar" action="<?php echo PATH ?>manage/sub-form/" method="post">
    <input type="hidden" name="req" value="<?php echo $pg_atual; ?>" />
    <input type="hidden" name="id" value="<?php echo $_GET["d"]; ?>" />
<div class="manage_content">
    <label class="form-lab2 w150">Title (<img class="flags_country" src="<?php echo PATH ?>_images/flags_gif/gb.gif" />):</label>
    <input type="text" name="t_titulo" id="sys_emails_contato_1" class="form-txt2 w450 required" value="<?php echo $t_titulo; ?>">
    <div class="both"></div>
    <label class="form-lab2 w150">Content (<img class="flags_country" src="<?php echo PATH ?>_images/flags_gif/gb.gif" />):</label>
    <textarea name="t_texto" class="form-txtarea w500 h100"><?php echo $t_texto; ?></textarea>
    <div class="both">&nbsp;</div>
    
    <label class="form-lab2 w150">Title (<img class="flags_country" src="<?php echo PATH ?>_images/flags_gif/de.gif" />):</label>
    <input type="text" name="t_titulo_4" id="sys_emails_contato_1_4" class="form-txt2 w450" value="<?php echo $t_titulo_4; ?>">
    <div class="both"></div>
    <label class="form-lab2 w150">Content (<img class="flags_country" src="<?php echo PATH ?>_images/flags_gif/de.gif" />):</label>
    <textarea name="t_texto_4" class="form-txtarea w500 h100"><?php echo $t_texto_4; ?></textarea>
    <div class="both">&nbsp;</div>
    
    <label class="form-lab2 w150">Title (<img class="flags_country" src="<?php echo PATH ?>_images/flags_gif/br.gif" />):</label>
    <input type="text" name="t_titulo_2" id="sys_emails_contato_1_2" class="form-txt2 w450" value="<?php echo $t_titulo_2; ?>">
    <div class="both"></div>
    <label class="form-lab2 w150">Content (<img class="flags_country" src="<?php echo PATH ?>_images/flags_gif/br.gif" />):</label>
    <textarea name="t_texto_2" class="form-txtarea w500 h100"><?php echo $t_texto_2; ?></textarea>
    <div class="both">&nbsp;</div>
    
    <label class="form-lab2 w150">Title (<img class="flags_country" src="<?php echo PATH ?>_images/flags_gif/es.gif" />):</label>
    <input type="text" name="t_titulo_3" id="sys_emails_contato_1_3" class="form-txt2 w450" value="<?php echo $t_titulo_3; ?>">
    <div class="both"></div>
    <label class="form-lab2 w150">Content (<img class="flags_country" src="<?php echo PATH ?>_images/flags_gif/es.gif" />):</label>
    <textarea name="t_texto_3" class="form-txtarea w500 h100"><?php echo $t_texto_3; ?></textarea>
    
    <div class="both"></div>
    <label class="form-lab2 w150">Status:</label>
    <input type="radio" class="form-checkbox1" <?php echo $t_status_1; ?> id="id_status_1" value="on" name="t_status" /><label for="id_status_1" class="form-checkbox">ONLINE</label>
    <input type="radio" class="form-checkbox1" id="id_status_2" <?php echo $t_status_2; ?> value="off" name="t_status" /><label for="id_status_2" class="form-checkbox">OFFLINE</label>
    <input type="radio" class="form-checkbox1" id="id_status_3" <?php echo $t_status_3; ?> value="view" name="t_status" /><label for="id_status_3" class="form-checkbox">TEST</label>
    <div class="both"></div>
    <?php /*?><label class="form-lab2 w150">Notificar e-mails:</label>
    <input type="radio" class="form-checkbox1" checked="checked" id="id_notificar_emails_1" value="" name="notificar_emails" /><label for="id_notificar_emails_1" class="form-checkbox">SIM</label>
    <input type="radio" class="form-checkbox1" id="id_notificar_emails_2" value="" name="notificar_emails" /><label for="id_notificar_emails_2" class="form-checkbox">NÃO</label>
    <div class="both"></div><?php */?>

    <label class="form-lab2 w150">&nbsp;</label>
    <?php /*?><a href="java"><img src="<?php echo PATH ?>_images/btn_visualizar.jpg" class="manage-btn-save" /></a><?php */?>
    <input type="image" src="<?php echo PATH ?>_images/btn_save.jpg" class="manage-btn-save" />
    <br clear="all" />
    </div>
</form>
</div>
<div class="both"></div>
</div>