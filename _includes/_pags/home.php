<?php
$SQL = "SELECT *, DATE_FORMAT(dt_cad, '%b %D %Y') as dt_cad2 FROM tb_posts WHERE (status = 'on' OR status = 'view') AND type = 'post' ORDER BY dt_cad DESC LIMIT 1";
$SQL = mysqli_query($connect, $SQL);

while($SQL_Q = mysql_fetch_assoc($SQL)){
$id = ent($SQL_Q["id"], "2");
$t_titulo = ent($SQL_Q["t_titulo"], "2");
$dt_cad = ent($SQL_Q["dt_cad2"], "2");
$t_url = make_url($id."-".$t_titulo, "1");
$t_type = ent($SQL_Q["type"], "2");
$t_content = html_entity_decode(ent($SQL_Q["t_content"], "2"));
$t_status = ent($SQL_Q["status"], "2");
if(strlen($t_content) > 3000){
//$t_content = substr($t_content, 0, 3000)."...<br clear='all' /> <a href='".PATH."view-post/$t_url' class='read_more_article'>[read more]</a>"; 
}
$t_fonte = ent($SQL_Q["fonte"], "2");
if(!preg_match("/http:\/\//", $t_fonte) and $t_fonte != ""){
$t_fonte = "http://".$t_fonte;
}

if($t_type == "press"){
$bg_post = "title2";	
}else{
$bg_post = "";	
}

if($t_status == "view"){
if(USER == "NOT_LOGGED"){
continue;	
}	
}
?>

<div class="box_content_middle">
    <label class="title <?php echo $bg_post; ?>"><h2><a class="reset_a" href="<?php echo PATH ?>view-post/<?php echo $t_url; ?>"><?php echo $t_titulo; ?></a></h2><span style="font-size:14px;margin:7px;float:right;display:inline-block;"><?php echo $dt_cad; ?></span></label>
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
$soundcloud_link = query("tb_pages_links", "link", "WHERE titulo = 'soundcloud'"); 


$status_soundcloud = query("tb_sys_informacoes", "texto", "WHERE titulo = 'status_soundcloud'"); 
if($status_soundcloud == "ON" and !empty($soundcloud_link)){
?>
<div class="box_content_middle">
    <label class="title"><h2>Music (Listen to <?php echo BAND ?>)</h2></label>
    <br clear="all" />
<iframe width="100%" height="450" scrolling="no" frameborder="no" src="https://w.soundcloud.com/player/?url=<?php echo $soundcloud_link; ?>&amp;auto_play=false&amp;hide_related=false&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false&amp;visual=true"></iframe>

</div>
<?php
}
$SQL_VIDEO = "SELECT nome, video FROM tb_videos WHERE main = 'Y' AND status = 'on' LIMIT 1";
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
    <label class="title"><h2><?php echo $nome; ?></h2></label>
    <br clear="all" />
    <div style="margin:0px;text-align:center;">
    <a class="videos_n_1" href="<?php echo $link_embed; ?>"><img alt="<?php echo BAND ?>" src="http://i1.ytimg.com/vi/<?php echo $imagem; ?>/0.jpg" width="550px" /></a></div>
<?php /*?><!--BEGIN-->
<br clear="all" />
<script src="http://connect.facebook.net/en_US/all.js#xfbml=1"></script>
<fb:comments style="margin:10px 20px;" href="<?php echo $video; ?>" data-colorscheme="dark" num_posts="4" width="620"></fb:comments>
<hr size="1" color="#999999" style="width:620px;margin:5px 20px;" />
<br clear="all" />
<!--END--><?php */?>
</div>
<?php
}
?>

<?php
if(HOMEVIDEOS == "ON"){
$SQL_VIDEO = "SELECT nome, video FROM tb_videos WHERE status = 'on' ORDER BY id DESC LIMIT 3";
$SQL_VIDEO = mysqli_query($connect, $SQL_VIDEO);
$SQL_VIDEO_N = mysqli_num_rows($SQL_VIDEO);
if($SQL_VIDEO_N > 0){
?>
<div class="box_content_middle">
    <label class="title"><h2><a href="<?php echo PATH ?>videos/" class="reset_a">Videos</a></h2></label>
    <br clear="all" />
    <ul class="home_videos">
        <?php 
		while($SQL_VIDEO_Q = mysql_fetch_assoc($SQL_VIDEO)){
		$nome = ent($SQL_VIDEO_Q["nome"], "2");
		$video = ent($SQL_VIDEO_Q["video"], "2");
		$imagem = explode("v=", $video);
		$imagem = explode("&", $imagem[1]);
		$imagem = $imagem[0];
		$link_embed = "http://www.youtube.com/embed/$imagem?rel=0&wmode=transparent";
		?>
    	<li><a class="videos_n_1" href="<?php echo $link_embed; ?>"><img src="http://i1.ytimg.com/vi/<?php echo $imagem; ?>/default.jpg"  alt="<?php echo BAND ?>" /></a><br clear="all" /><a class="videos_n_1 a2" href="<?php echo $link_embed; ?>"><?php echo $nome; ?></a></li>
        <?php
		}
		?>
        <br clear="all" />
    </ul>
    <div class="both"></div>
</div>
<?php
}
}
?>
<?php
if(HOMEPHOTOS == "ON"){
$SQL3 = "SELECT a.*, b.*, b.status, a.imagem, a.descricao FROM tb_fotos a, tb_albuns b WHERE b.id = a.id_album AND b.status = 'On' ORDER BY RAND() LIMIT 4";
$SQL3 = mysqli_query($connect, $SQL3) or die(mysqli_error($connect));
$SQL3_N = mysqli_num_rows($SQL3);

if($SQL3_N > 0){
?>
<div class="box_content_middle">
    <label class="title"><h2><a href="<?php echo PATH ?>photos/" class="reset_a">Photos</a></h2></label>
    <br clear="all" />
    <ul class="home_photos">
        <?php
		while($SQL3_Q = mysql_fetch_assoc($SQL3)){
		$pic_imagem = PATH."_images/_uploads/imgs/_thumbs/".ent($SQL3_Q["imagem"], "2");
		$pic_imagem_thumb = PATH."_images/_uploads/imgs/_thumbs/min_".ent($SQL3_Q["imagem"], "2");
		?>
    	<li><div class="div_show_img"><a class="photos_n_1" href="<?php echo $pic_imagem; ?>"><img width="120px" src="<?php echo $pic_imagem_thumb; ?>" alt="<?php echo BAND ?>" title="<?php echo BAND ?>" /></a></div></li>
		<?php
		}
		?>
        <br clear="all" />
    </ul>
    <div class="both"></div>
</div>
<?php
}
}
?>
