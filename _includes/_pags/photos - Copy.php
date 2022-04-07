<?php
$SQL = "SELECT * FROM tb_albuns WHERE status = 'on' ORDER BY dt_cad DESC";
$SQL = mysqli_query($connect, $SQL);
$SQL_N = mysqli_num_rows($SQL);
if($SQL_N == 0){
header("Location: ".PATH."home/");
die;
} 

?>
<div class="box_content_middle">
    <label class="title"><h2><?php echo "Images from the band | 'ANIMALS' new album 2018"; ?></h2></label>
    <br clear="all" />
		<ul class="albuns">
        	<?php
			$o = 0;
			while($SQL_Q = mysql_fetch_assoc($SQL)){
			$id = ent($SQL_Q["id"], "2");
			$nome_album = ent($SQL_Q["nome"], "2");
			$url = make_url($id."-".$nome_album, "1");
			$imagem = ent($SQL_Q["imagem"], "2");
			$x_y = @getimagesize(PATH."_images/_uploads/imgs/_thumbs/min_".$imagem);
			$x = $x_y[0];
			$y = $x_y[1];
			if($y > 90){
			$larg_img = rend_img_xy(PATH."_images/_uploads/imgs/_thumbs/min_".$imagem, "", "100", '"');
			}
			if($x > 150){
			$larg_img = rend_img_xy(PATH."_images/_uploads/imgs/_thumbs/min_".$imagem, "150", "", '"');
			}
			?>
        	<li>
            	<div class="bg_div"><a href="<?php echo PATH ?>gallery/<?php echo $url; ?>/"><img style="border:1px solid #CCCCCC;padding:5px;" src="<?php echo PATH ?>_images/_uploads/imgs/_thumbs/min_<?php echo $imagem; ?>" height="110px" /></a></div><h3 class="albuns"><a href="<?php echo PATH ?>gallery/<?php echo $url; ?>/"><?php echo $nome_album; ?></a></h3>
            </li>
            <?php
/*			if(($o % 3) == 0){
			echo '<br clear="all" />';
			}*/
			$o++;
			}
			?>
        </ul>
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