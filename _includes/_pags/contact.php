<div class="box_content_middle">
    <label class="title"><h2>Contact | Booking | Merchandise</h2></label>
    <br clear="all" />
    <div class="content_texts_middle">    
<div style="margin: 25px 0px 34px 86px;">
<p>Booking/info: <br />
        <a class="reset_a" href="mailto:<?php echo EMAIL2 ?>"><?php echo EMAIL2 ?></a><br />
        <?php echo PHONE ?><br /></p>
    </div>
      <p>&nbsp;</p>
      <form name="form_contact" id="form_contact" action="<?php echo PATH?>sub-form/" method="post">
          <input type="hidden" name="req" value="contact" />
		  <div class="form_contact">
          <label class="label_txt w75">name: </label>
          <input type="text" class="txt w200 required" name="t_name" value="" />
          <br clear="all" />
          <label class="label_txt w75">e-mail: </label>
          <input type="text" class="txt w300 required email" name="t_email" value="" />
          <br clear="all" />
          <label class="label_txt w75">subject: </label>
          <input type="text" class="txt w400 required" name="t_subject" value="" />
          <br clear="all" />
          <label class="label_txt w75">message: </label>
          <textarea class="txt w400 noeditor required" name="t_message"></textarea>
          <br clear="all" />
          <label class="label_txt w75">&nbsp;</label>
          <input type="submit" class="btn" value="send" />
          <div class="clear"></div>
      </div>
</form>
<br /><br /><br />
    </div>
  <div class="both"></div>
  
</div>