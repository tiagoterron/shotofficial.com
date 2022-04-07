<div class="manage-content-menu">
	<ul>
    	<li class="current"><a href="<?php echo PATH ?>manage/settings-tab_one/">INFORMATIONS</a><div class="right">&nbsp;</div></li>
        <li><a href="<?php echo PATH ?>manage/settings-tab_two/">SETTINGS</a><div class="right">&nbsp;</div></li>
        <li><a href="<?php echo PATH ?>manage/settings-tab_three/">ADMINISTRATORS</a><div class="right">&nbsp;</div></li>

    </ul>
</div>

<form name="" action="<?php echo PATH ?>manage/sub-form/" method="post">
<input type="hidden" name="req" value="<?php echo $_GET["a"]."-".$_GET["b"] ?>" />
<div class="manage-content">
    <div class="top-titulo">Informations<br /><img src="<?php echo PATH ?>_images/manage/hr.jpg" /></div>
<div style="clear:both;"></div>
<div class="manage_content two-system">
<span class="form-span-txt title">Informations <br /><img src="<?php echo PATH ?>_images/manage/hr2.jpg" /></span>
<br clear="all"><br clear="all">
<label class="form-lab2 w150">Facebook:</label>
<input name="facebook" class="form-txt2 w400" value="<?php echo query("tb_pages_links", "link", "WHERE titulo = 'facebook'"); ?>" />
<label class="form-lab2 w150">Twitter:</label>
<input name="twitter" class="form-txt2 w400" value="<?php echo query("tb_pages_links", "link", "WHERE titulo = 'twitter'"); ?>" />
<label class="form-lab2 w150">Youtube:</label>
<input name="youtube" class="form-txt2 w400" value="<?php echo query("tb_pages_links", "link", "WHERE titulo = 'youtube'"); ?>" />
<label class="form-lab2 w150">Soundcloud:</label>
<input name="soundcloud" class="form-txt2 w400" value="<?php echo query("tb_pages_links", "link", "WHERE titulo = 'soundcloud'"); ?>" />
<label class="form-lab2 w150">Instagram:</label>
<input name="instagram" class="form-txt2 w400" value="<?php echo query("tb_pages_links", "link", "WHERE titulo = 'instagram'"); ?>" />
<label class="form-lab2 w150">Myspace:</label>
<input name="myspace" class="form-txt2 w400" value="<?php echo query("tb_pages_links", "link", "WHERE titulo = 'myspace'"); ?>" />
    
    <br clear="all"><br clear="all">
    <span class="form-span-txt title">Personal informations <br /><img src="<?php echo PATH ?>_images/manage/hr2.jpg" /></span>
    <br clear="all"><br clear="all">
<label class="form-lab2 w150">E-mail (Paypal):</label>
<input name="email1" class="form-txt2 w400" value="<?php echo query("tb_sys_informacoes", "texto", "WHERE titulo = 'email1'"); ?>" />
<label class="form-lab2 w150">E-mail (secondary):</label>
<input name="email2" class="form-txt2 w400" value="<?php echo query("tb_sys_informacoes", "texto", "WHERE titulo = 'email2'"); ?>" />
<label class="form-lab2 w150">Telephone:</label>
<input name="telephone" class="form-txt2 w400" value="<?php echo query("tb_sys_informacoes", "texto", "WHERE titulo = 'telephone'"); ?>" />
<br clear="all"><br clear="all">
    <span class="form-span-txt title">Impressum<br /><img src="<?php echo PATH ?>_images/manage/hr2.jpg" /></span>
    <br clear="all"><br clear="all">

 <label class="form-lab2 w150">Impressum:</label>
    <input type="radio" class="form-checkbox1" id="id_status_impressum_1" value="ON" name="status_impressum" <?php echo query("tb_sys_informacoes", "texto", "WHERE titulo = 'status_impressum'")=="ON"?"checked='checked'":"";?> /><label for="id_status_impressum_1" class="form-checkbox">ACTIVED</label>
    <input type="radio" class="form-checkbox1" id="id_status_impressum_2" value="OFF" name="status_impressum" <?php echo query("tb_sys_informacoes", "texto", "WHERE titulo = 'status_impressum'")=="OFF"?"checked='checked'":"";?> /><label for="id_status_impressum_2" class="form-checkbox">DESACTIVED</label>
    <div class="both"></div>
<br clear="all"><br clear="all">
    <textarea name="impressum" class="form-txtarea w400 h100"><?php echo query("tb_sys_informacoes", "texto", "WHERE titulo = 'impressum'"); ?></textarea>
    <br clear="all">
<br clear="all">
<br clear="all">

    <label class="form-lab2 w150">&nbsp;</label>
    <input type="image" src="<?php echo PATH ?>_images/btn_save.jpg" class="manage-btn-save" />
     <br clear="all">
</div>
<div class="both">&nbsp;</div>
</div>
</form>