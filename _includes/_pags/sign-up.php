<div class="box_content_middle">
    <label class="title"><h2>Sign up</h2></label>
    <br clear="all" />
	<?php //include "_includes/shopping-cart.php"; ?>
	<form name="form_signup" id="form_signup" action="<?php echo PATH?>sub-form/" method="post">
    <?php /*?><img src="<?php echo PATH ?>_includes/_pags/captcha.php?l=150&a=50&tf=20&ql=5"><?php */?>
	<input type="hidden" name="req" value="sign-up" />
		<div class="sign-up-div">
			<fieldset>
				<legend>personal informations:</legend>
				<label class="lab w150">first name: (*)</label>
				<input type="text" name="t_first_name" class="txt w200 required" />
				<div class="both"></div>
				<label class="lab w150">last name: (*)</label>
				<input type="text" name="t_last_name" class="txt w200 required" />
				<div class="both"></div>
				<label class="lab w150">street adress: (*)</label>
				<input type="text" name="t_street_adress" class="txt w200 required" />
				<div class="both"></div>
				<label class="lab w150">city:</label>
				<input type="text" name="t_city" class="txt w150" />
				<div class="both"></div>
				<label class="lab w150">state/province:</label>
				<input type="text" name="t_state" class="txt w150" />
				<div class="both"></div>
				<label class="lab w150">zip code/post: (*)</label>
				<input type="text" name="t_zip_code" class="txt w100 required" />
				<div class="both"></div>
				<label class="lab w150">country: (*)</label>
				<?php echo gera_select("tb_country", "t_country", "class=\"country-select\"", "--"); ?>
				<div class="both"></div>
				<div class="divide"></div>
			</fieldset>
		</div>
	<br clear="all" />
	<div class="sign-up-div">
		<fieldset>
			<legend>login informations:</legend>
			<label class="lab w150">e-mail adress: (*)</label>
			<input type="text" name="t_email_adress" id="t_email_adress" class="txt w200 required" />
			<div class="both"></div>
			<label class="lab w150">password: (*)</label>
			<input type="password" name="t_pass" id="t_pass" class="txt w125 required" />
			<div class="both"></div>
			<label class="lab w150">confirm password: (*)</label>
			<input type="password" name="t_conf_pass" id="t_conf_pass" class="txt w125 required" />
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