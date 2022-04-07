
<?php 
$id = $_SESSION['id_user_on'];

$SQL = "SELECT *, b.id as id_country, a.id as id_user, DATE_FORMAT(a.dt_cad, '%d/%m/%Y at %Hh%im') as dt_cad FROM tb_signup a LEFT JOIN tb_country b ON a.country = b.id WHERE a.id = $id";
$SQL = mysqli_query($connect, $SQL);
if(mysqli_num_rows($SQL) > 0){
$SQL_Q = mysql_fetch_assoc($SQL);	
}
$status = html_entity_decode($SQL_Q['status']);
?>
<div class="box_content_middle">
    <label class="title"><h2>Edit my account</h2></label>
    <br clear="all" />
	<?php //include "_includes/shopping-cart.php"; ?>
	<form name="form_edit_account" id="form_signup" action="<?php echo PATH?>sub-form/" method="post">
    <?php /*?><img src="<?php echo PATH ?>_includes/_pags/captcha.php?l=150&a=50&tf=20&ql=5"><?php */?>
	<input type="hidden" name="req" value="edit_account" />
    <input type="hidden" name="id" value="<?php echo html_entity_decode($SQL_Q['id_user']) ?>" />
		<div class="sign-up-div">
			<fieldset>
				<legend>personal informations:</legend>
				<label class="lab w150">first name: (*)</label>
				<input type="text" name="t_first_name" class="txt w200 required" value="<?php echo html_entity_decode($SQL_Q['first_name']) ?>" />
				<div class="both"></div>
				<label class="lab w150">last name: (*)</label>
				<input type="text" name="t_last_name" class="txt w200 required" value="<?php echo html_entity_decode($SQL_Q['last_name']) ?>" />
				<div class="both"></div>
				<label class="lab w150">street adress: (*)</label>
				<input type="text" name="t_street_adress" class="txt w200 required" value="<?php echo html_entity_decode($SQL_Q['street_adress']) ?>" />
				<div class="both"></div>
				<label class="lab w150">city:</label>
				<input type="text" name="t_city" class="txt w150" value="<?php echo html_entity_decode($SQL_Q['city']) ?>" />
				<div class="both"></div>
				<label class="lab w150">state/province:</label>
				<input type="text" name="t_state" class="txt w150" value="<?php echo html_entity_decode($SQL_Q['state_province']) ?>" />
				<div class="both"></div>
				<label class="lab w150">zip code/post: (*)</label>
				<input type="text" name="t_zip_code" class="txt w100 required" value="<?php echo html_entity_decode($SQL_Q['zip_post']) ?>" />
				<div class="both"></div>
				<label class="lab w150">country: (*)</label>
				<?php echo gera_select("tb_country", "t_country", "class=\"country-select\"", $SQL_Q['id_country']); ?>
				<div class="both"></div>
				<div class="divide"></div>
			</fieldset>
		</div>
	<br clear="all" />
	<div class="sign-up-div">
		<fieldset>
			<legend>login informations:</legend>
			<label class="lab w150">e-mail adress: (*)</label>
			<input type="text" name="t_email_adress" id="t_email_adress" class="txt w200 required" value="<?php echo html_entity_decode($SQL_Q['email']) ?>" />
			<div class="both"></div>
			<label class="lab w150">new password: (*)</label>
			<input type="password" name="t_pass3" class="txt w125" />
			<div class="both"></div>
			<label class="lab w150">confirm new password: (*)</label>
			<input type="password" name="t_conf_pass3" class="txt w125 " />
			<div class="both"></div>
			<div class="divide"></div>
		</fieldset>
	</div>
	<br clear="all" />
	<div class="sign-up-div">
	<input type="image" src="<?php echo PATH ?>_images/btn-sign-up.jpg" class="btn-sign-up" />
	</div>
	</form>
	<br clear="all" />
<!--END-->
</div>