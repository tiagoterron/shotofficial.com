<div class="manage-content-menu">
	<ul>
    	<li><a href="<?php echo PATH ?>manage/settings-tab_one/">INFORMATIONS</a><div class="right">&nbsp;</div></li>
        <li class="current"><a href="<?php echo PATH ?>manage/settings-tab_two/">SETTINGS</a><div class="right">&nbsp;</div></li>
        <li><a href="<?php echo PATH ?>manage/settings-tab_three/">ADMINISTRATORS</a><div class="right">&nbsp;</div></li>

    </ul>
</div>
<form name="" action="<?php echo PATH ?>manage/sub-form/" method="post">
<input type="hidden" name="req" value="<?php echo $_GET["a"]."-".$_GET["b"] ?>" />
<div class="manage-content">
    <div class="top-titulo">Settings<br /><img src="<?php echo PATH ?>_images/manage/hr.jpg" /></div>
<div style="clear:both;"></div>
<div class="manage_content two-system">
<span class="form-span-txt title">Settings <br /><img src="<?php echo PATH ?>_images/manage/hr2.jpg" /></span>
<br clear="all"><br clear="all">
<label class="form-lab2 w150">Band name:</label>
<input name="band_name" class="form-txt2 w400" value="<?php echo query("tb_sys_informacoes", "texto", "WHERE titulo = 'band_name'"); ?>" />
<label class="form-lab2 w150">Domain:</label>
<input name="domain" class="form-txt2 w400" value="<?php echo query("tb_sys_informacoes", "texto", "WHERE titulo = 'domain'"); ?>" />
<br clear="all"><br clear="all">
<span class="form-span-txt title">Modules <br /><img src="<?php echo PATH ?>_images/manage/hr2.jpg" /></span>
<br clear="all"><br clear="all">
<label class="form-lab2 w150">Shop:</label>
    <input type="radio" class="form-checkbox1" id="id_store_status_1" value="ON" name="store_status" <?php echo query("tb_sys_informacoes", "texto", "WHERE titulo = 'store_status'")=="ON"?"checked='checked'":"";?> /><label for="id_store_status_1" class="form-checkbox">ACTIVED</label>
    <input type="radio" class="form-checkbox1" id="id_store_status_2" value="OFF" name="store_status" <?php echo query("tb_sys_informacoes", "texto", "WHERE titulo = 'store_status'")=="OFF"?"checked='checked'":"";?> /><label for="id_store_status_2" class="form-checkbox">DESACTIVED</label>
    <div class="both"></div>
    
    <label class="form-lab2 w150">Blog:</label>
    <input type="radio" class="form-checkbox1" id="id_blog_status_1" value="ON" name="blog_status" <?php echo query("tb_sys_informacoes", "texto", "WHERE titulo = 'blog_status'")=="ON"?"checked='checked'":"";?> /><label for="id_blog_status_1" class="form-checkbox">ACTIVED</label>
    <input type="radio" class="form-checkbox1" id="id_blog_status_2" value="OFF" name="blog_status" <?php echo query("tb_sys_informacoes", "texto", "WHERE titulo = 'blog_status'")=="OFF"?"checked='checked'":"";?> /><label for="id_blog_status_2" class="form-checkbox">DESACTIVED</label>
    
    <div class="both"></div>
        <label class="form-lab2 w150">Newsletter:</label>
    <input type="radio" class="form-checkbox1" id="id_newsletter_status_1" value="ON" name="newsletter_status" <?php echo query("tb_sys_informacoes", "texto", "WHERE titulo = 'newsletter_status'")=="ON"?"checked='checked'":"";?> /><label for="id_newsletter_status_1" class="form-checkbox">ACTIVED</label>
    <input type="radio" class="form-checkbox1" id="id_newsletter_status_2" value="OFF" name="newsletter_status" <?php echo query("tb_sys_informacoes", "texto", "WHERE titulo = 'newsletter_status'")=="OFF"?"checked='checked'":"";?> /><label for="id_newsletter_status_2" class="form-checkbox">DESACTIVED</label>
    <div class="both"></div>
    
        <label class="form-lab2 w150">Multi Language:</label>
    <input type="radio" class="form-checkbox1" id="id_multilang_1" value="ON" name="multilang" <?php echo query("tb_sys_informacoes", "texto", "WHERE titulo = 'multilang'")=="ON"?"checked='checked'":"";?> /><label for="id_multilang_1" class="form-checkbox">ACTIVED</label>
    <input type="radio" class="form-checkbox1" id="id_multilang_2" value="OFF" name="multilang" <?php echo query("tb_sys_informacoes", "texto", "WHERE titulo = 'multilang'")=="OFF"?"checked='checked'":"";?> /><label for="id_multilang_2" class="form-checkbox">DESACTIVED</label>
<br clear="all"><br clear="all">

<span class="form-span-txt title">Homepage<br /><img src="<?php echo PATH ?>_images/manage/hr2.jpg" /></span>
<br clear="all"><br clear="all">

 <label class="form-lab2 w150">Photos:</label>
    <input type="radio" class="form-checkbox1" id="id_photos_status_1" value="ON" name="photos_status" <?php echo query("tb_sys_informacoes", "texto", "WHERE titulo = 'photos_status'")=="ON"?"checked='checked'":"";?> /><label for="id_photos_status_1" class="form-checkbox">YES</label>
    <input type="radio" class="form-checkbox1" id="id_photos_status_2" value="OFF" name="photos_status" <?php echo query("tb_sys_informacoes", "texto", "WHERE titulo = 'photos_status'")=="OFF"?"checked='checked'":"";?> /><label for="id_photos_status_2" class="form-checkbox">NO</label>
    <div class="both"></div>
    
     <label class="form-lab2 w150">Videos:</label>
    <input type="radio" class="form-checkbox1" id="id_videos_status_1" value="ON" name="videos_status" <?php echo query("tb_sys_informacoes", "texto", "WHERE titulo = 'videos_status'")=="ON"?"checked='checked'":"";?> /><label for="id_videos_status_1" class="form-checkbox">YES</label>
    <input type="radio" class="form-checkbox1" id="id_videos_status_2" value="OFF" name="videos_status" <?php echo query("tb_sys_informacoes", "texto", "WHERE titulo = 'videos_status'")=="OFF"?"checked='checked'":"";?> /><label for="id_videos_status_2" class="form-checkbox">NO</label>
    <div class="both"></div>
    
    <label class="form-lab2 w150">Soundcloud:</label>
    <input type="radio" class="form-checkbox1" id="id_status_soundcloud_1" value="ON" name="status_soundcloud" <?php echo query("tb_sys_informacoes", "texto", "WHERE titulo = 'status_soundcloud'")=="ON"?"checked='checked'":"";?> /><label for="id_status_soundcloud_1" class="form-checkbox">YES</label>
    <input type="radio" class="form-checkbox1" id="id_status_soundcloud_2" value="OFF" name="status_soundcloud" <?php echo query("tb_sys_informacoes", "texto", "WHERE titulo = 'status_soundcloud'")=="OFF"?"checked='checked'":"";?> /><label for="id_status_soundcloud_2" class="form-checkbox">NO</label>
    <div class="both"></div>
    <br clear="all"><br clear="all">
    <span class="form-span-txt title">Banner: (990x360) <br /><img src="<?php echo PATH ?>_images/manage/hr2.jpg" /></span>
    <div class="both">&nbsp;</div>
    <label class="form-lab2 w150">&nbsp;</label>
<?php
	$t_imagem = query("tb_sys_informacoes", "texto", "WHERE titulo = 'header_image'");
	if($t_imagem == ""){
	?>
	
    <div id="div_photo" class="div_photo2" style="margin-left: 167px;"><img src="<?php echo PATH ?>_images/_uploads/min_<?php echo $t_imagem; ?>" style="height: 200px;" id="PhotoPrev" /><a href="javascript:void(0);" onclick="show_hide_image_button('div_photo', 'photo_albumUploader')"><img src="<?php echo PATH ?>_images/cancel.png" class="btn_cancel" /></a></div>
    <br clear="all" />
    <label class="form-lab2 w150">&nbsp;</label><input type="file" id="upload_banner" class="photo_album" name="upload_banner" />
    <?php
	}else{
	?>
    <div id="div_photo" class="div_photo" style="margin-left: 167px;"><img src="<?php echo PATH ?>_js/_uberuploadcropper/photo_not_available.png" style="height: 200px;" id="PhotoPrev" /><a href="javascript:void(0);" onclick="show_hide_image_button('div_photo', 'photo_albumUploader')"><img src="<?php echo PATH ?>_images/cancel.png" class="btn_cancel" /></a></div>
    <input type="file" id="upload_banner" class="photo_album" name="upload_banner" />
    <?php
	}
    ?>
    <input type="text" name="t_imagem" value="<?php echo $t_imagem; ?>" id="t_imagem" />
<br clear="all"><br clear="all">

    
<br clear="all"><br clear="all">
    <span class="form-span-txt title">Optimization (SEO)<br /><img src="<?php echo PATH ?>_images/manage/hr2.jpg" /></span>
<br clear="all"><br clear="all">
	<label class="form-lab2 w150">Meta Tags, Key Words:</label>
    <textarea name="txt_seo" class="noeditor form-txtarea w400 h100"><?php echo query("tb_sys_informacoes", "texto", "WHERE titulo = 'txt_seo'"); ?></textarea>
    <br clear="all">
	<label class="form-lab2 w150">JScript (Analitycs):</label>
    <textarea name="txt_js" class="noeditor form-txtarea w400 h100"><?php echo query("tb_sys_informacoes", "texto", "WHERE titulo = 'txt_js'"); ?></textarea>
	<br clear="all" />
    <label class="form-lab2 w150">SEO:</label>
    <textarea name="seo" class="noeditor form-txtarea w400 h100"><?php echo query("tb_sys_informacoes", "texto", "WHERE titulo = 'seo'"); ?></textarea>
	<br clear="all" />
    <label class="form-lab2 w150">&nbsp;</label>
    <input type="image" src="<?php echo PATH ?>_images/btn_save.jpg" class="manage-btn-save" />
     <br clear="all">
</div>
<div class="both">&nbsp;</div>
</div>
</form>