<?php
$SQL_VIDEO = "SELECT * FROM tb_videos WHERE status = 'On' ORDER BY id DESC";
$SQL_VIDEO = mysqli_query($connect, $SQL_VIDEO);
$SQL_N = mysqli_num_rows($SQL_VIDEO);
if($SQL_N == 0){
header("Location: ".PATH."home/");
die;
} 

while($SQL_VIDEO_Q = mysql_fetch_assoc($SQL_VIDEO)){
$nome = ent($SQL_VIDEO_Q["nome"], "2");
$video = ent($SQL_VIDEO_Q["video"], "2");
$imagem = explode("v=", $video);
$imagem = explode("&", $imagem[1]);
$imagem = $imagem[0];
$link_embed = "http://www.youtube.com/embed/$imagem?rel=0&wmode=transparent"
?>
<div class="box_content_middle">
    <label class="title"><h2><?php echo $nome;?></h2></label>
    <br clear="all" />
    <div style="margin:0px;text-align:center;">
    <a class="videos_n_1" href="<?php echo $link_embed; ?>"><img src="http://i1.ytimg.com/vi/<?php echo $imagem; ?>/0.jpg" width="500px" /></a></div>
<!--BEGIN-->
<br clear="all" />
<script src="http://connect.facebook.net/en_US/all.js#xfbml=1"></script>
<fb:comments style="margin:10px 20px;" href="<?php echo $video; ?>" data-colorscheme="dark" num_posts="4" width="500px"></fb:comments>
<hr size="1" color="#999999" style="width:500px;margin:5px 20px;" />
<br clear="all" />
<!--END-->
</div>
<?php
}
?>