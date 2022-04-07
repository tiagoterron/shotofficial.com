<div class="manage-content-menu">
	<ul>
        <li><a href="<?php echo PATH ?>manage/loja-tab_one">PRODUCTS</a><div class="right">&nbsp;</div></li>
		<li><a href="<?php echo PATH ?>manage/loja-tab_two">ORDERS</a><div class="right">&nbsp;</div></li>
		<li><a href="<?php echo PATH ?>manage/loja-tab_three">BUYERS</a><div class="right">&nbsp;</div></li>
        <li class="current"><a href="<?php echo PATH ?>manage/loja-tab_four">DETAILS USER</a><div class="right">&nbsp;</div></li>

    </ul>
</div>
<?php
$id = $_GET["c"];
$SQL = "SELECT *, a.id as  id_user, DATE_FORMAT(a.dt_cad, '%d/%m/%Y at %Hh%im') as dt_cad FROM tb_signup a LEFT JOIN tb_country b ON a.country = b.id WHERE a.id = $id";
$SQL = mysqli_query($connect, $SQL);
if(mysqli_num_rows($SQL) > 0){
$SQL_Q = mysql_fetch_assoc($SQL);	
}
$status = html_entity_decode($SQL_Q['status']);
//print_r($SQL_Q);
?>
<form name="" action="<?php echo PATH ?>manage/sub-form/" method="post">
<input type="hidden" name="req" value="<?php echo $_GET["a"]."-".$_GET["b"] ?>" />
<input type="hidden" name="id" class="form-txt2" value="<?php echo html_entity_decode($SQL_Q['id_user']) ?>" />
<div class="manage-content">
    <div class="top-titulo">Informations user<br /><img src="<?php echo PATH ?>_images/manage/hr.jpg" /></div>
<div style="clear:both;"></div>
<div class="manage_content two-system">
<span class="form-span-txt title">Personal Informations <br /><img src="<?php echo PATH ?>_images/manage/hr2.jpg" /></span>
<br clear="all"><br clear="all">
<label class="form-lab2 w150">First name:</label>
<input type="text" name="first_name" class="form-txt2 w400" value="<?php echo html_entity_decode($SQL_Q['first_name']) ?>" />
<label class="form-lab2 w150">Last name:</label>
<input type="text" name="last_name" class="form-txt2 w400" value="<?php echo html_entity_decode($SQL_Q['last_name']) ?>" />
<label class="form-lab2 w150">Adress:</label>
<input type="text" name="street_adress" class="form-txt2 w400" value="<?php echo html_entity_decode($SQL_Q['street_adress']) ?>" />
<label class="form-lab2 w150">City:</label>
<input type="text" name="city" class="form-txt2 w400" value="<?php echo html_entity_decode($SQL_Q['city']) ?>" />
<label class="form-lab2 w150">State/Province:</label>
<input type="text" name="state_province" class="form-txt2 w400" value="<?php echo html_entity_decode($SQL_Q['state_province']) ?>" />
<label class="form-lab2 w150">ZIP Code:</label>
<input name="zip_post" class="form-txt2 w400" value="<?php echo html_entity_decode($SQL_Q['zip_post']) ?>" />
<label class="form-lab2 w150">Country:</label>
<input type="text" readonly="readonly" name="country" class="form-txt2 w400" value="<?php echo html_entity_decode($SQL_Q['name']) ?>" />

<br clear="all"><br clear="all">
    <span class="form-span-txt title">Login information<br /><img src="<?php echo PATH ?>_images/manage/hr2.jpg" /></span>
    <br clear="all"><br clear="all">
    <label class="form-lab2 w150">E-mail:</label>
<input name="email" readonly="readonly" class="form-txt2 w400" value="<?php echo html_entity_decode($SQL_Q['email']) ?>" />
<label class="form-lab2 w150">Status:</label>
    <input type="radio" class="form-checkbox1" id="id_status_1" value="Y" name="status" <?php echo $status=="Y"?"checked='checked'":"";?> /><label for="id_status_1" class="form-checkbox">ACTIVED</label>
    <input type="radio" class="form-checkbox1" id="id_status_2" value="N" name="status" <?php echo $status=="N"?"checked='checked'":"";?> /><label for="id_status_2" class="form-checkbox">DESACTIVED</label>
    <div class="both"></div>
<label class="form-lab2 w150">User since:</label>
<input type="text" readonly="readonly" name="dt_cad" class="form-txt2 w400" value="<?php echo html_entity_decode($SQL_Q['dt_cad']) ?>" />

<br clear="all">
<br clear="all">

    <label class="form-lab2 w150">&nbsp;</label>
    <input type="image" src="<?php echo PATH ?>_images/btn_save.jpg" class="manage-btn-save" />
     <br clear="all">
</div>
<div class="both">&nbsp;</div>
</div>
</form>