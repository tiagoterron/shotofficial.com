<div class="content_left">
		<?php  
		if(STORE == "ON"){
		if(preg_match("/store/", $_SERVER['REQUEST_URI']) or preg_match("/view-product/", $_SERVER['REQUEST_URI']) or preg_match("/shopping-cart/", $_SERVER['REQUEST_URI'])){
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
		}
	?>
    	<?php if(STORE == "ON"){ ?>
		<div class="box_content">
        	<label class="title"><a href="<?php echo PATH ?>store/"><span>Shop Online</span></a></label>
            <div class="both">&nbsp;</div>
            <?php
			$SQL = "SELECT * FROM tb_store_produtos WHERE status = 'Y' AND quantidade > 0 ORDER BY dt_cad DESC LIMIT 1";
			$SQL = mysqli_query($connect, $SQL) or die(mysqli_error($connect));
			while($SQL_Q = mysql_fetch_assoc($SQL)){
			$t_id = html_entity_decode($SQL_Q["id"]);
			$t_imagem = html_entity_decode($SQL_Q["imagem"]);
			$t_titulo = html_entity_decode($SQL_Q["titulo"]);
			$t_preco = html_entity_decode($SQL_Q["usd_preco"]);
			$t_url = make_url($t_id."-".$t_titulo, "1");
			?>
            <ul class="ul_merch_right">
            <li><a href="<?php echo PATH ?>onlineshop"><img width="150px" src="<?php echo PATH ?>_images/_uploads/_thumbs/min_<?php echo $t_imagem; ?>" alt="<?php echo BAND ?> Merchandise (<?php echo $t_titulo; ?>)" title="<?php echo BAND ?> Merchandise (<?php echo $t_titulo; ?>)" /></a></li>
            <li><a href="<?php echo PATH ?>onlineshop"><span class="t"><?php echo $t_titulo; ?></span><br />
            USD <?php echo number_format($t_preco, 2, '.', ','); ?></a></li>
            
            </ul>
            <?php
			}
			?>
            <div class="both">&nbsp;</div>
        </div>
		<?php 
		}
		$facebook_link = query("tb_pages_links", "link", "WHERE titulo = 'facebook'"); 
		if(!empty($facebook_link)){
		?>
        <div class="box_content">
        	<label class="title"><span>Facebook News</span></label>
            <div class="both">&nbsp;</div>
            <div class="facebook_like">
                <div class="fb-page" data-href="https://www.facebook.com/shotfband/" data-tabs="timeline" data-width="209" data-height="350" data-small-header="true" data-adapt-container-width="false" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/shotfband/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/shotfband/">S.H.O.T.</a></blockquote></div>
            </div>
            <div class="both">&nbsp;</div>
        </div>
        <?php
		}
		if(!preg_match("/store/", $_SERVER['REQUEST_URI'])){
		?>
<?php /*?>	<a href="<?php echo PATH ?>store/"><img alt="S.H.O.T. store banner t-shirts" class="img_store_banner_y" src="<?php echo PATH ?>_images/red_t_shirt_shot_store_y.gif" width="232px" /></a><?php */?>
    <?php
	 }
	?>
    </div>