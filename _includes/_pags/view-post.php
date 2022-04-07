<?php
$id = make_url($_GET["b"], "2");
//$id = make_url()
//$SQL = "SELECT z.t_name, y.*, DATE_FORMAT(y.dt_cad, '%b %D %Y') as dt_cad2 FROM tb_posts WHERE (status = 'on' OR status = 'view') AND id = $id ORDER BY dt_cad";
$SQL = "SELECT z.t_name, y.*, DATE_FORMAT(y.dt_cad, '%b %D %Y') as dt_cad2 FROM tb_posts y LEFT JOIN tb_users z ON y.id_user = z.id WHERE (y.type = 'press' OR y.type = 'post') AND (y.status = 'on' OR y.status = 'view') AND y.id = $id ORDER BY dt_cad";
$SQL = mysqli_query($connect, $SQL);
if(mysqli_num_rows($SQL) > 0){
mysqli_query($connect, "UPDATE tb_posts SET clicks = (clicks+1) WHERE id = $id") or die(mysqli_error($connect));
while($SQL_Q = mysql_fetch_assoc($SQL)){
$t_titulo = ent($SQL_Q["t_titulo"], "2");
$t_titulo_2 = ent($SQL_Q["t_titulo_2"], "2");
$t_titulo_3 = ent($SQL_Q["t_titulo_3"], "2");
$t_titulo_4 = ent($SQL_Q["t_titulo_4"], "2");
$dt_cad = ent($SQL_Q["dt_cad2"], "2");
$t_url = make_url($id."-".$t_titulo, "1");
$t_type = ent($SQL_Q["type"], "2");
$t_content = ent($SQL_Q["t_content"], "2");
$t_content_2 = ent($SQL_Q["t_content_2"], "2");
$t_content_3 = ent($SQL_Q["t_content_3"], "2");
$t_content_4 = ent($SQL_Q["t_content_4"], "2");
$t_name = ent($SQL_Q["t_name"], "2");
$t_fonte = ent($SQL_Q["fonte"], "2");
$t_status = ent($SQL_Q["status"], "2");
if(!preg_match("/^http:\/\//", $t_fonte) and $t_fonte != ""){
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
    <label class="title <?php echo $bg_post; ?>"><h2><?php echo $t_titulo; ?></h2><span class="show_dt"><?php echo $dt_cad; ?></span></label>
    <br clear="all" />
    
    <div id="tabs">
    <?php if($t_titulo != "" and (!empty($t_content_2) || !empty($t_content_3) || !empty($t_content_4))){ ?>
      	<ul>
        	<li><a href="#div-one"><img class="flags_country" src="<?php echo PATH ?>_images/flags_gif/gb.gif" />English</a></li>
            <?php } ?>
            <?php
			if(!empty($t_content_4)){
			?>
            
            <li><a href="#div-four"><img class="flags_country" src="<?php echo PATH ?>_images/flags_gif/de.gif" /> Deutsch</a>
            <?php } ?>
            <?php
			if(!empty($t_content_3)){
			?>
            <li><a href="#div-three"><img class="flags_country" src="<?php echo PATH ?>_images/flags_gif/es.gif" />Spanish</a></li>
            <?php 
			}
			?>
			<?php
			if(!empty($t_content_2)){
			?>
            <li><a href="#div-two"><img class="flags_country" src="<?php echo PATH ?>_images/flags_gif/br.gif" /> Portugu&ecirc;s</a>
            <?php 
			}
			?>
            </li>
        </ul>
        
    <div class="content_texts_middle">
    <div id="div-one">
    	<?php
		echo "<h3>".$t_titulo."</h3><br />";
		echo $t_content;
		echo "<div>&nbsp;</div><div>Author: <b><i>".$t_name."</b></i></div>";
		?>
    </div>
    <?php
	if(!empty($t_content_2)){
	?>
    <div id="div-two">
    	<?php
		echo "<h3>".$t_titulo_2."</h3><br />";
		echo $t_content_2;
		echo "<div>&nbsp;</div><div>Author: <b><i>".$t_name."</b></i></div>";
		?>
    </div>
    <?php 
	}
	?>
    <?php
	if(!empty($t_content_3)){
	?>
    <div id="div-three">
    	<?php
		echo "<h3>".$t_titulo_3."</h3><br />";
		echo $t_content_3;
		echo "<div>&nbsp;</div><div>Author: <b><i>".$t_name."</b></i></div>";
		?>
    </div>
    <?php 
	}
	?>
    <?php
	if(!empty($t_content_4)){
	?>
    <div id="div-four">
    	<?php
		echo "<h3>".$t_titulo_4."</h3><br />";
		echo $t_content_4;
		echo "<div>&nbsp;</div><div>Author: <b><i>".$t_name."</b></i></div>";
		?>
    </div>
    <?php 
	}
	?>
    </div>
       	<br clear="all" />
        <?php
		if(!empty($t_fonte)){
        ?>
        <span style="font-size:12px;">font:<a href="<?php echo $t_fonte; ?>" target="_blank"> <?php echo $t_fonte; ?></a></span>
        <?php
		}

		?>
        
    </div>
    
        
   <?php /*?> <div class="content_texts_middle">
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
		
		echo "Author: <b><i>".$t_name."</b></i>";
		?>
        </div>
    <?php 
	}
	?><?php */?>
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
<fb:comments style="margin:10px 20px;" href="<?php echo $_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']; ?>" data-colorscheme="dark" num_posts="4" width="500"></fb:comments>
<hr size="1" color="#999999" style="width:500px;margin:20px;" />
<br clear="all" />
<!--END-->
</div>
<?php
}
}else{
header("Location: ".PATH."home/");
}
?>

