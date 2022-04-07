<?php
$SQL = "SELECT *, DATE_FORMAT(dt_cad, '%b %D %Y') as dt_cad2 FROM tb_posts WHERE status = 'on' ORDER BY dt_cad DESC LIMIT 5";
$SQL = mysqli_query($connect, $SQL);

while($SQL_Q = mysql_fetch_assoc($SQL)){
$id = ent($SQL_Q["id"], "2");
$t_titulo = ent($SQL_Q["t_titulo"], "2");
$dt_cad = ent($SQL_Q["dt_cad2"], "2");
$t_url = make_url($id."-".$t_titulo, "1");
$t_content = ent($SQL_Q["t_content"], "2");
if(strlen($t_content) > 1500){
$t_content = substr($t_content, 0, 1500)."...<br clear='all' /> <a href='".PATH."view-post/$t_url' class=\"read_more_article\">[read more]</a>"; 
}
$t_fonte = ent($SQL_Q["fonte"], "2");
if(!preg_match("/^http:\/\//", $t_fonte) and $t_fonte != ""){
$t_fonte = "http://".$t_fonte;
}
?>
<div class="box_content_middle">
    <label class="title"><h1><a class="reset_a" href="<?php echo PATH ?>view-post/<?php echo $t_url; ?>"><?php echo convertem($t_titulo, "1"); ?></a></h1><span style="font-size:14px;margin:15px;float:right;display:inline-block;"><?php echo $dt_cad; ?></span></label>
    <br clear="all" />
    <div class="content_texts_middle">
    	<?php
		echo $t_content;
		?>
        <br clear="all" />
        <?php
		if(!empty($t_fonte)){
        ?>
        <span style="font-size:12px;">font:<a href="<?php echo $t_fonte; ?>" target="_blank"> <?php echo $t_fonte; ?></a></span>
        <?php
		}
		?>
    </div>
    <div class="both"></div>
</div>
<?php
}
?>
<?php
$SQL_VIDEO = "SELECT nome, video FROM tb_videos ORDER BY RAND() LIMIT 3";
$SQL_VIDEO = mysqli_query($connect, $SQL_VIDEO);
$SQL_VIDEO_N = mysqli_num_rows($SQL_VIDEO);
if($SQL_VIDEO_N > 0){
?>
<div class="box_content_middle">
    <label class="title"><h1><a href="<?php echo PATH ?>videos/" class="reset_a"><?php echo convertem("VIDEOS", "1"); ?></a></h1></label>
    <br clear="all" />
    <ul class="home_videos">
    	<li class="arrow"><img src="<?php echo PATH ?>_images/arrow_left.png" /></li>
        <?php 
		while($SQL_VIDEO_Q = mysql_fetch_assoc($SQL_VIDEO)){
		$nome = ent($SQL_VIDEO_Q["nome"], "2");
		$video = ent($SQL_VIDEO_Q["video"], "2");
		$imagem = explode("v=", $video);
		$imagem = explode("&", $imagem[1]);
		$imagem = $imagem[0];
		$link_embed = "http://www.youtube.com/embed/$imagem?rel=0&wmode=transparent";
		?>
    	<li><a class="videos_n_1" href="<?php echo $link_embed; ?>"><img src="http://i1.ytimg.com/vi/<?php echo $imagem; ?>/default.jpg" /></a><br clear="all" /><a class="videos_n_1 a2" href="<?php echo $link_embed; ?>"><?php echo $nome; ?></a></li>
        <?php
		}
		?>
        <li class="arrow"><img src="<?php echo PATH ?>_images/arrow_right.png" /></li>
        <br clear="all" />
    </ul>
    <div class="both"></div>
</div>
<?php
}
$SQL3 = "SELECT imagem, descricao FROM tb_fotos ORDER BY RAND() LIMIT 4";
$SQL3 = mysqli_query($connect, $SQL3) or die(mysqli_error($connect));
$SQL3_N = mysqli_num_rows($SQL3);

if($SQL3_N > 0){
?>
<div class="box_content_middle">
    <label class="title"><h1><a href="<?php echo PATH ?>photos/" class="reset_a"><?php echo convertem("PHOTOS", "1"); ?></a></h1></label>
    <br clear="all" />
    <ul class="home_photos">
    	<li class="arrow"><img src="<?php echo PATH ?>_images/arrow_left.png" /></li>
        <?php
		while($SQL3_Q = mysql_fetch_assoc($SQL3)){
		$pic_imagem = PATH."_images/_uploads/imgs/_thumbs/".ent($SQL3_Q["imagem"], "2");
		$pic_imagem_thumb = PATH."_images/_uploads/imgs/_thumbs/min_".ent($SQL3_Q["imagem"], "2");
		?>
    	<li><div class="div_show_img"><a class="photos_n_1" href="<?php echo $pic_imagem; ?>"><img width="120px" src="<?php echo $pic_imagem_thumb; ?>" /></a></div></li>
		<?php
		}
		?>
        <li class="arrow"><img src="<?php echo PATH ?>_images/arrow_right.png" /></li>
        <br clear="all" />
    </ul>
    <div class="both"></div>
</div>
<?php
}
?>
<?php 
$SQL_VIDEO = "SELECT nome, video FROM tb_videos WHERE main = 'Y' LIMIT 1";
$SQL_VIDEO = mysqli_query($connect, $SQL_VIDEO);
$SQL_VIDEO_N = mysqli_num_rows($SQL_VIDEO);
if($SQL_VIDEO_N > 0){
$SQL_VIDEO_Q = mysql_fetch_assoc($SQL_VIDEO);
$nome = ent($SQL_VIDEO_Q["nome"], "2");
$video = ent($SQL_VIDEO_Q["video"], "2");
$imagem = explode("v=", $video);
$imagem = explode("&", $imagem[1]);
$imagem = $imagem[0];
$link_embed = "http://www.youtube.com/embed/$imagem?rel=0&wmode=transparent"
?>
<div class="box_content_middle">
    <label class="title"><h1><?php echo convertem("$nome", "1"); ?></h1></label>
    <br clear="all" />
    <div style="margin:0px;text-align:center;">
    <a class="videos_n_1" href="<?php echo $link_embed; ?>"><img src="http://i1.ytimg.com/vi/<?php echo $imagem; ?>/0.jpg" width="620px" /></a></div>
<!--BEGIN-->
<br clear="all" />
<script src="http://connect.facebook.net/en_US/all.js#xfbml=1"></script>
<fb:comments style="margin:10px 20px;" href="<?php echo $_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']; ?>" data-colorscheme="dark" num_posts="4" width="620"></fb:comments>
<hr size="1" color="#999999" style="width:620px;margin:5px 20px;" />
<br clear="all" />
<!--END-->
</div>
<?php
}
?>