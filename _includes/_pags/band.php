<div class="box_content_middle">
    <label class="title"><h2><?php echo "Band biography, discography | 'ANIMALS' new album 2018"; ?></h2></label>
    <br clear="all" />
      <div id="tabs">
      	<ul>
        	<li><a href="#biography">BIOGRAPHY</a></li>
            <?php /*?><li><a href="#discography">DISCOGRAPHY</a></li><?php */?>
        </ul>
        <div id="biography">
        	<div class="class_biografia">
			<?php
			//BIO
			$SQL = "SELECT *, DATE_FORMAT(dt_update, '%Y-%m-%d at %Hh%im') as dt_update2 FROM tb_biografia WHERE status = 'on'";
			
			$SQL = mysqli_query($connect, $SQL);
			if(mysqli_num_rows($SQL)){
			$SQL_Q = mysql_fetch_assoc($SQL);
			$titulo_tab_1 = html_entity_decode($SQL_Q["titulo_tab"]);
			$t_titulo = html_entity_decode($SQL_Q["titulo"]);
			$t_texto = html_entity_decode($SQL_Q["texto"]);
			$dt_update = html_entity_decode($SQL_Q["dt_update2"]);
			}

			if($t_titulo!=""){
			?>
			<h2 class="titulo_tabs"><?php echo $t_titulo; ?></h2>
            <?php
			}
			?>
            <h6><?php echo $t_texto; ?></h6>
            <div class="latest_update">Latest Update: <?php echo $dt_update; ?></div></div>
        </div>
        <div id="discography">
     	<div class="class_discografia">
		<?php
			//DISCOGRAFIA
			$SQL = "SELECT *, DATE_FORMAT(ano, '%Y') as ano2, DATE_FORMAT(dt_update, '%Y-%m-%d at %Hh%im') as dt_update2 FROM tb_discografia WHERE status = 'on' ORDER BY ano DESC";
			$i=0;
			$SQL = mysqli_query($connect, $SQL);
			while($SQL_Q = mysql_fetch_assoc($SQL)){
			$i++;
			$t_titulo = html_entity_decode($SQL_Q["titulo"]);
			$imagem = html_entity_decode($SQL_Q["imagem"]);
			$preco = html_entity_decode($SQL_Q["preco"]);
			$ano = html_entity_decode($SQL_Q["ano2"]);
			$dt_update_dis = html_entity_decode($SQL_Q["dt_update2"]);
			$faixas = explode("|*|", html_entity_decode($SQL_Q["faixas"]));
			
			$link_compra = html_entity_decode($SQL_Q["link_compra"]);
			if(!preg_match("/^http:\/\//", $link_compra) and $link_compra != ""){
			$link_compra = "http://".$link_compra;
			}
			$link_download = html_entity_decode($SQL_Q["link_download"]);
			if(!preg_match("/^http:\/\//", $link_download) and $link_download != ""){
			$link_download = PATH.$link_download;
			}
			
			$moeda = html_entity_decode($SQL_Q["moeda"]);
				switch($moeda){
				case "REAL":
				$moeda = "R$";
				break;
				case "DOLAR":
				$moeda = "USD";
				break;
				case "EURO":
				$moeda = "&#8364;";
				break;
				default:
				$moeda = "";
				break;
				}
			?>
            <div class="discography_div_albuns">
            	<div class="photo_album">
                	<?php /*?><a class="photo_discography" id="img_<?php echo $i; ?>" href="<?php echo PATH ?>_images/_uploads/_thumbs/min_<?php echo $imagem; ?>"><?php */?><img src="<?php echo PATH ?>_images/_uploads/_thumbs/min_<?php echo $imagem; ?>" width="170px" /><?php /*?></a><?php */?>
                    
                	<div class="price"><?php if($preco > 0 and $preco != "") {?><?php echo $moeda; ?> <?php echo number_format($preco, 2, ',', '.'); ?><?php }else{ echo "&nbsp;"; } ?></div>
                </div>
                <ul class="list">
                	<li><span class="titulo_album"><?php echo $t_titulo; ?></span> (<?php echo $ano; ?>)</li>
                    <li>&nbsp;</li>
                    <?php
					foreach($faixas as $k => $v){
					?>
                    <li><span class="number"><?php echo $k+1; ?>.</span> <?php echo $v; ?></li>
                    <?php
					}
					?>
                </ul>
                <div class="icons">
                <?php
				if($link_compra!= ""){
				?>
                	<a href="<?php echo $link_compra; ?>" target="_blank"><img src="<?php echo PATH ?>_images/buy_icon.png" width="90px" /></a>
                    <br clear="all" />
				<?php
                }
                ?>
                <?php
				if($link_download!= ""){
				?>
                    <a href="<?php echo $link_download; ?>" target="_blank"><img src="<?php echo PATH ?>_images/download_icon.png" width="90px" /></a>
				<?php
                }
                ?>
                </div>
            </div>
            <br clear="all" />
            <?php
			}
			?>
            <br clear="all" />
            </div>
        </div>
      </div>
  <!--BEGIN-->
<br clear="all" />
<div class="addthis_toolbox addthis_default_style " style="margin:15px 15px 0px 20px;">
<a class="addthis_button_facebook_like" fb:like:layout="button_count"></a>
<a class="addthis_button_tweet"></a>
<a class="addthis_button_google_plusone" g:plusone:size="medium"></a>
<a class="addthis_counter addthis_pill_style"></a>
</div>
<script type="text/javascript" src="http://s7.addthis.com/js/250/addthis_widget.js#pubid=ra-4e219b574ee2ad73"></script>
<!-- AddThis Button END -->
<script src="http://connect.facebook.net/en_US/all.js#xfbml=1"></script>
<fb:comments style="margin:10px 20px;" href="<?php echo $_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']; ?>" data-colorscheme="dark" num_posts="4" width="500px"></fb:comments>
<hr size="1" color="#999999" style="width:500px;margin:20px;" />
<br clear="all" />
<!--END-->
</div>