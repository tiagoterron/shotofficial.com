<div class="box_content_middle">
    <label class="title"><h2>Login / access my account</h2></label>
    <br clear="all" />
	<?php //include "_includes/shopping-cart.php"; ?>
    <form name="form_signin" id="form_signin" action="<?php echo PATH?>sub-form/" method="post">
	<input type="hidden" name="req" value="sign-in" />
    <div class="sign-in-div">
			<fieldset>
				<legend>Access my account</legend>
				<label class="lab">E-mail:</label>
				<div class="both"></div>
				<input type="text" name="t_email_sign_in" class="txt required" />
				<div class="both"></div>
				<label class="lab">Password:</label>
				<div class="both"></div>
				<input type="password" name="t_pass_sign_in" class="txt required" />
				<div class="both"></div>
				<?php /*?><a class="forgot-my-pass" href="<?php echo PATH ?>">forgot my password</a><?php */?>
				<input type="image" src="<?php echo PATH ?>_images/btn-login.jpg" class="btn-login" />
			</fieldset>
		</div>
        </form>
	<div class="sign-in-div">
		<fieldset>
			<legend>Register / new account</legend>
			<p>Sign up in our webstore to order in our store.</p>
			<br clear="all" />
			<a href="<?php echo PATH ?>sign-up/"><img src="<?php echo PATH ?>_images/btn-register.jpg" class="btn-register" /></a>
		</fieldset>
	</div>
	
		
	
	<br clear="all" />
<!--END-->
</div>