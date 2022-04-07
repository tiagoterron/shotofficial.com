<?php
$SQL = "SELECT *, DATE_FORMAT(dt_cad, '%b %D %Y') as dt_cad2 FROM tb_posts WHERE status = 'on' ORDER BY dt_cad DESC LIMIT 20";
$SQL = mysqli_query($connect, $SQL);
if(mysqli_num_rows($SQL)){
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
    <label class="title"><h2><a class="reset_a" href="<?php echo PATH ?>view-post/<?php echo $t_url; ?>"><?php echo $t_titulo; ?></a></h2><span class="show_dt"><?php echo $dt_cad; ?></span></label>
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
}else{
?>
<div class="box_content_middle">
    <label class="title"><h2>News</h2></label>
    <div class="content_texts_middle"></div>
    </div>
<?php
}
?>