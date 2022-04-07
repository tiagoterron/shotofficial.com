<div class="box_content_middle">
    <label class="title"><h2><?php echo convertem("ADMINISTRATOR", "1"); ?></h2></label>
    <br clear="all" />
    <div class="content_texts_middle">
      <form name="form_contact" id="form_contact" action="<?php echo PATH?>sub-form/" method="post">
          <input type="hidden" name="req" value="login-administrator" />
		  <div class="form_contact">
          <label class="label_txt w100">e-mail: </label>
          <input type="text" class="txt w400 email required" name="t_email" value="" />
          <br clear="all" />
          <label class="label_txt w100">password: </label>
          <input type="password" class="txt w400 required" name="t_password" value="" />
          <label class="label_txt w100">&nbsp;</label>
          <input type="submit" class="btn" value="log in" />
          <div class="clear"></div>
      </div>
</form>
    </div>
  <div class="both"></div>
</div>
<?php
	unset($_SESSION["admin_email"]);
	unset($_SESSION["admin_session"]);
?>