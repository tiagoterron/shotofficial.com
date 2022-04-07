<?php
if($_GET["c"] == "edit" and $_GET["d"] != ""){
$id = $_GET["d"];
$SQL_EDIT = "SELECT * FROM tb_users WHERE id = $id";
$SQL_EDIT = mysqli_query($connect, $SQL_EDIT);
$SQL_EDIT_Q = mysql_fetch_assoc($SQL_EDIT);

$t_name = html_entity_decode($SQL_EDIT_Q["t_name"]);
$t_email = html_entity_decode($SQL_EDIT_Q["t_email"]);
$t_status = html_entity_decode($SQL_EDIT_Q["manage"]);



if($t_status == "Y"){
$t_status_1 = "checked='checked'";
$t_status_2 = "";
}else{

$t_status_1 = "";
$t_status_2 = "checked='checked'";
}
$pg_atual = $_GET["a"]."/".$_GET["b"]."/".$_GET["c"];
}else{
$t_name = "";
$t_mail = "";
$t_status_1 = "checked='checked'";
$t_status_2 = "";

$pg_atual = $_GET["a"]."/".$_GET["b"];
}
?>
<div class="manage-content-menu">
	<ul>
    	<li><a href="<?php echo PATH ?>manage/settings-tab_one/">INFORMATIONS</a><div class="right">&nbsp;</div></li>
        <li><a href="<?php echo PATH ?>manage/settings-tab_two/">SETTINGS</a><div class="right">&nbsp;</div></li>
        <li><a href="<?php echo PATH ?>manage/settings-tab_three/">ADMINISTRATORS</a><div class="right">&nbsp;</div></li>
        <li class="current"><a href="<?php echo PATH ?>manage/settings-tab_three_add/">CREATING / EDITING ADMINISTRATOR</a><div class="right">&nbsp;</div></li>
    </ul>
</div>
<div class="manage-content">
    <div class="top-titulo">Creating / editing administrator<br /><img src="<?php echo PATH ?>_images/manage/hr.jpg" /></div>
<div class="both"></div>
	<form name="form_manage_adicionar" id="form_manage_adicionar" action="<?php echo PATH ?>manage/sub-form/" method="post">
    <input type="hidden" name="req" value="<?php echo $pg_atual; ?>" />
    <input type="hidden" name="id" value="<?php echo $_GET["d"]; ?>" />
<div class="manage_content">

    <div class="both"></div>
    <label class="form-lab2 w150">Name:</label>
    <input type="text" name="t_name" class="form-txt2 w500 required" value="<?php echo $t_name; ?>">
    <div class="both"></div>
    <label class="form-lab2 w150">E-mail:</label>
    <input type="text" name="t_email" class="form-txt2 w500 required email" value="<?php echo $t_email; ?>">
    <div class="both"></div>
    <label class="form-lab2 w150">Password:</label>
    <input type="password" name="t_pass" id="t_pass" class="form-txt2 w500 <?php if(empty($id)){echo "required";}?>">
    <div class="both"></div>
    <label class="form-lab2 w150">Confirm password:</label>
    <input type="password" name="t_conf_pass" id="t_conf_pass" class="form-txt2 w500 <?php if(empty($id)){echo "required";}?>">
    <div class="both"></div>
    
    <div class="both"></div>
    <label class="form-lab2 w150">Level:</label>
    <input type="radio" class="form-checkbox1" <?php echo $t_status_1; ?> id="id_status_1" value="Y" name="t_status" /><label for="id_status_1" class="form-checkbox">MANAGE</label>
    <input type="radio" class="form-checkbox1" id="id_status_2" <?php echo $t_status_2; ?> value="N" name="t_status" /><label for="id_status_2" class="form-checkbox">USER</label>
    <div class="both"></div>
    

    <label class="form-lab2 w150">&nbsp;</label>
    <input type="image" src="<?php echo PATH ?>_images/btn_save.jpg" class="manage-btn-save" />
    <br clear="all" />
    </div>
</form>
</div>
<div class="both"></div>
</div>