<?php
$id = make_url($_GET["b"], "2");
$SQL = "SELECT * FROM tb_albuns WHERE id = $id";
$SQL = mysqli_query($connect, $SQL);
$SQL_N = mysqli_num_rows($SQL);
if($SQL_N == 0){
header("Location: ".PATH."home/");
die;
} 
$SQL_Q = mysql_fetch_assoc($SQL);
$nome_album = ent($SQL_Q["nome"], "2");
mysqli_query($connect, "UPDATE tb_albuns SET clicks = (clicks+1) WHERE id = $id");

?>
<div class="box_content_middle">
    <label class="title"><h2><?php echo "$nome_album (Gallery Photos)"; ?></h2></label>
    <br clear="all" />
<div >
      <div class="ad-image-wrapper">
      </div>
      <div class="ad-controls">
      </div>
      <div class="ad-nav">
        <div class="ad-thumbs">
          <ul class="gallery_photos">
          <?php
		  $SQL_FOTOS = "SELECT * FROM tb_fotos WHERE id_album = $id ORDER BY id";
		  $SQL_FOTOS = mysqli_query($connect, $SQL_FOTOS);
		  while($SQL_FOTOS_Q = mysql_fetch_assoc($SQL_FOTOS)){
		  $imagem = ent($SQL_FOTOS_Q["imagem"], "2");
		  $desc = ent($SQL_FOTOS_Q["descricao"], "2");
		  ?>
            <li><div class="div_show_img"><a id="photos_n_1" title="<?php echo $desc; ?>" alt="<?php echo $desc; ?>" class="photos_n_1" href="<?php echo PATH ?>_images/_uploads/imgs/_thumbs/<?php echo $imagem; ?>"><img width="120px" src="<?php echo PATH ?>_images/_uploads/imgs/_thumbs/min_<?php echo $imagem; ?>" alt="<?php echo $desc; ?>" title="<?php echo $desc; ?>" /></a></div></li>
          <?php
		  }
          ?>
          </ul>
        </div>
      </div>
    </div>
    <br clear="all" />
    <br clear="all" />
    <div align="center"><a href="<?php echo PATH ?>photos/">[Back to Albuns]</a></div>
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