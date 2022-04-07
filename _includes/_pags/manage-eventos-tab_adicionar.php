<?php
if($_GET["c"] == "edit" and $_GET["d"] != ""){
$id = $_GET["d"];
$SQL_EDIT = "SELECT *, DATE_FORMAT(date, '%m/%d/%Y') as date2, DATE_FORMAT(date, '%H:%i') as hour2  FROM tb_events WHERE id = $id";
$SQL_EDIT = mysqli_query($connect, $SQL_EDIT);
$SQL_EDIT_Q = mysql_fetch_assoc($SQL_EDIT);

$t_data = html_entity_decode($SQL_EDIT_Q["date2"]);
$t_horario = html_entity_decode($SQL_EDIT_Q["hour2"]);
$hour_type = html_entity_decode($SQL_EDIT_Q["hour_type"]);
$t_locacao = html_entity_decode($SQL_EDIT_Q["location"]);
$t_local = html_entity_decode($SQL_EDIT_Q["venue"]);
$t_country = html_entity_decode($SQL_EDIT_Q["country"]);
$t_status = html_entity_decode($SQL_EDIT_Q["status"]);
$t_descricao = html_entity_decode($SQL_EDIT_Q["description"]);
$t_preco = html_entity_decode($SQL_EDIT_Q["value_ticket"]);
$t_preco = number_format($t_preco, 2, ',', '.');
$current_type = html_entity_decode($SQL_EDIT_Q["moeda"]);

$t_buy_online = html_entity_decode($SQL_EDIT_Q["buy_ticket"]);


if($t_status == "on"){
$t_status_1 = "checked='checked'";
$t_status_2 = "";
}else{
$t_status_1 = "";
$t_status_2 = "checked='checked'";
}
$pg_atual = $_GET["a"]."/".$_GET["b"]."/".$_GET["c"];
}else{
$t_data = date("m/d/Y");
$t_horario = "";
$t_locacao = "";
$t_local = "";
$current_type = "";
$t_preco = "";
$t_buy_online = "";
$t_descricao = "";
$t_status_1 = "checked='checked'";
$t_status_2 = "";

$pg_atual = $_GET["a"]."/".$_GET["b"];
}
?>
<div class="manage-content-menu">
	<ul>
    	<li><a href="<?php echo PATH ?>manage/eventos-tab_one/">UPCOMING</a><div class="right">&nbsp;</div></li>
    	<li><a href="<?php echo PATH ?>manage/eventos-tab_two/">PAST GIGS</a><div class="right">&nbsp;</div></li>
        <li class="current"><a href="<?php echo PATH.$pag_atual ?>">CREATING / EDITING EVENTS</a><div class="right">&nbsp;</div></li>
    </ul>
</div>
<div class="manage-content">
    <div class="top-titulo">Creating / Editing event<br /><img src="<?php echo PATH ?>_images/manage/hr.jpg" /></div>
<div class="both"></div>
	<form name="form_manage_adicionar" id="form_manage_adicionar" action="<?php echo PATH ?>manage/sub-form/" method="post">
    <input type="hidden" name="req" value="<?php echo $pg_atual; ?>" />
    <input type="hidden" name="id" value="<?php echo $_GET["d"]; ?>" />
<div class="manage_content">
    <label class="form-lab2 w150">Date:</label>
    <input type="text" name="t_data" id="datepicker" class="t_date_mask mask-data2 inputDate form-txt2 w75 required" value="<?php echo $t_data?>">
    <label class="form-lab2 w50">Time:</label>
    <input type="text" name="t_horario" id="t_hour" class="mask-hour form-txt2 w50" value="<?php echo $t_horario; ?>">
    <label class="form-lab2 w15">&nbsp;</label>
    <input type="radio" class="form-checkbox1" id="id_time_1" value="AM" name="time_am_pm" <?php echo $hour_type=="AM"?"checked='checked'":"";?> /><label for="id_time_1" class="form-checkbox">AM</label>
    <input type="radio" class="form-checkbox1" id="id_time_2" value="PM" name="time_am_pm" <?php echo $hour_type=="PM"?"checked='checked'":"";?> /><label for="id_time_2" class="form-checkbox">PM</label>
    <div class="both"></div>
    <label class="form-lab2 w150">Venue/Pub:</label>
    <input type="text" name="t_local" class="form-txt2 w500 required" value="<?php echo $t_local; ?>">
    <div class="both"></div>
    <label class="form-lab2 w150">City:</label>
    <input type="text" name="t_locacao" class="form-txt2 w500 required" value="<?php echo $t_locacao; ?>">
    <div class="both"></div>
    <label class="form-lab2 w150">Country:</label>
    <?php echo gera_select("tb_country", "t_country", "class=\"select_country country-select form-txt2 required\"", "$t_country"); ?>
    <div class="both"></div>
    <label class="form-lab2 w150">Ticket price:</label>
    <input type="text" name="t_preco" class="form-txt2 w50" value="<?php echo $t_preco; ?>">
    <label class="form-lab2 w15"></label>
        <input type="radio" class="form-checkbox1" id="id_moeda_3" value="EURO" name="moeda" <?php echo $current_type=="EURO"?"checked='checked'":"";?> /><label for="id_moeda_3" class="form-checkbox">EURO</label>
        
            <input type="radio" class="form-checkbox1" id="id_moeda_2" value="DOLAR" name="moeda" <?php echo $current_type=="DOLAR"?"checked='checked'":"";?> /><label for="id_moeda_2" class="form-checkbox">DOLAR</label>
        
    <input type="radio" class="form-checkbox1" id="id_moeda_1" value="REAL" name="moeda" <?php echo $current_type=="REAL"?"checked='checked'":"";?> /><label for="id_moeda_1" class="form-checkbox">REAL</label>

    <input type="radio" class="form-checkbox1" id="id_moeda_4" value="OUTRA" name="moeda" <?php echo $current_type=="OUTRA"?"checked='checked'":"";?> /><label for="id_moeda_4" class="form-checkbox">OTHER CURRENCY</label>
    <div class="both"></div>
    <label class="form-lab2 w150">Buy ticket:</label>
    <input type="text" name="t_compra_online" class="form-txt2 w300" value="<?php echo $t_buy_online; ?>">
    <span class="form-title">(link to buy ticket online)</span>
    <div class="both"></div>
    <label class="form-lab2 w150">Description:</label>
    <textarea name="t_descricao" class="form-txtarea w500 h100"><?php echo $t_descricao; ?></textarea>
    <div class="both"></div>
    <label class="form-lab2 w150">Status:</label>
    <input type="radio" class="form-checkbox1" <?php echo $t_status_1; ?> id="id_status_1" value="on" name="t_status" /><label for="id_status_1" class="form-checkbox">ONLINE</label>
    <input type="radio" class="form-checkbox1" id="id_status_2" <?php echo $t_status_2; ?> value="off" name="t_status" /><label for="id_status_2" class="form-checkbox">OFFLINE</label>
    <div class="both"></div>
    <label class="form-lab2 w150">Notify e-mails:</label>
    <input type="radio" class="form-checkbox1" checked="checked" id="id_notificar_emails_1" value="" name="notificar_emails" /><label for="id_notificar_emails_1" class="form-checkbox">SIM</label>
    <input type="radio" class="form-checkbox1" id="id_notificar_emails_2" value="" name="notificar_emails" /><label for="id_notificar_emails_2" class="form-checkbox">NÃO</label>
    <div class="both"></div>

    <label class="form-lab2 w150">&nbsp;</label>
    <input type="image" src="<?php echo PATH ?>_images/btn_save.jpg" class="manage-btn-save" />
    <br clear="all" />
    </div>
</form>
<?php include("upload.php"); ?>dfwdfw
</div>
<div class="both"></div>
</div>