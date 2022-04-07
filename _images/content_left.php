<div class="content_left">
		<?php
		if(preg_match("/store/", $_SERVER['REQUEST_URI'])){
		?>
        <div class="box_content">
        	<label class="title"><span>Categories</span></label>
            <div class="both">&nbsp;</div>
            <ul class="ul_li_categories">
            <li><a href="<?php echo PATH ?>store/category/">All</a></li>
            <li><a href="<?php echo PATH ?>store/category/music">Music</a></li>
            <li><a href="<?php echo PATH ?>store/category/tshirts">T-shirts</a></li>
            <li><a href="<?php echo PATH ?>store/category/acessories">Acessories</a></li>
            <li><a href="<?php echo PATH ?>store/category/photos-posters">Photos and Posters</a></li>
            <li><a href="<?php echo PATH ?>store/category/best-sellers">Best Sellers</a></li>
            </ul>
            <div class="both">&nbsp;</div>
        </div>
        <?php
	 }
	?>
		<div class="box_content">
        	<label class="title"><a href="<?php echo PATH ?>store/"><span>Merchandise</span></a></label>
            <div class="both">&nbsp;</div>
            <?php
			$SQL = "SELECT * FROM tb_store_produtos WHERE status = 'Y' ORDER BY RAND() LIMIT 1";
			$SQL = mysqli_query($connect, $SQL) or die(mysqli_error($connect));
			while($SQL_Q = mysql_fetch_assoc($SQL)){
			$t_id = html_entity_decode($SQL_Q["id"]);
			$t_imagem = html_entity_decode($SQL_Q["imagem"]);
			$t_titulo = html_entity_decode($SQL_Q["titulo"]);
			$t_preco = html_entity_decode($SQL_Q["usd_preco"]);
			?>
            <ul class="ul_merch_right">
            <li><a href="<?php echo PATH ?>store/"><img width="150px" src="<?php echo PATH ?>_images/_uploads/_thumbs/min_<?php echo $t_imagem; ?>" alt="<?php echo BAND ?> Merchandise (<?php echo $t_titulo; ?>)" title="<?php echo BAND ?> Merchandise (<?php echo $t_titulo; ?>)" /></a></li>
            <li><a href="<?php echo PATH ?>store/"><span class="t"><?php echo $t_titulo; ?></span><br />
            USD <?php echo number_format($t_preco, 2, '.', ','); ?></a></li>
            
            </ul>
            <?php
			}
			?>
            <div class="both">&nbsp;</div>
        </div>
        <?php /*?><div class="box_content">
        	<label class="title"><span>DOWNLOAD</span></label>
            <div class="both">&nbsp;</div>
            <a href="http://www.cdbaby.com/cd/shot1/" target="_blank"><img src="<?php echo PATH ?>_images/images/shot_holocaust_riot_album_download.png" class="album_download" alt="S.H.0.T. - Holocaust Riot Download" title="S.H.0.T. - Holocaust Riot Download" /></a>
        	<div class="both">&nbsp;</div>
        </div><?php */?>
        <div class="box_content">
        	<label class="title"><span>Facebook News</span></label>
            <div class="both">&nbsp;</div>
            <div class="facebook_like">
                <iframe src="http://www.facebook.com/plugins/likebox.php?href=http://facebook.com/shotfband&amp;width=196&amp;connections=9&amp;stream=false&amp;header=false&amp;height=325&amp;colorscheme=dark" style=" border:0px; overflow: hidden; width: 198px;margin:0px 7px; height: 325px;" frameborder="0" scrolling="no"></iframe>
            </div>
            <div class="both">&nbsp;</div>
        </div>
        <?php
		if(!preg_match("/store/", $_SERVER['REQUEST_URI'])){
		?>
	<a href="<?php echo PATH ?>store/"><img alt="<?php echo BAND ?> store banner t-shirts" class="img_store_banner_y" src="<?php echo PATH ?>_images/red_t_shirt_shot_store_y.gif" width="232px" /></a>
    <?php
	 }
	?>
    </div>