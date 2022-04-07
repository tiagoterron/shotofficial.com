<div id="fb-root"></div>
<script type="text/javascript">(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<script type="text/javascript">(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<script type="text/javascript">!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
<div class="head_top" style="background:url(../_images/_uploads/<?php echo HEADERBANNER ?>) no-repeat top;">
<?php
if(USER != "NOT_LOGGED" and $_GET['a'] == "compress"){
include_once("minifier.php");
	
	/* FILES ARRAYs
	 * Keys as input, Values as output */ 
	
$js = array(
"./_js/scripts.js" 	=> 
"./_js/scripts.min.js",
"./_js/jquery.bxslider.js" 	=> 
"./_js/jquery.bxslider.min.js",
"./_js/jquery.colorbox.js" 	=> 
"./_js/jquery.colorbox.min.js",
"./_js/jquery.validate.js" 	=> 
"./_js/jquery.validate.min.js",
"./_js/jquery.tweet.js" 	=> 
"./_js/jquery.tweet.min.js",
"./_js/ad-gallery/jquery.ad-gallery.js" 	=> 
"./_js/ad-gallery/jquery.ad-gallery.min.js",
"./_js/datepicker.js" 	=> 
"./_js/datepicker.min.js"
	);
	$css = array(
"./_css/index.css"	=> 
"./_css/index.min.css",
"./_css/jquery-ui-1.8.17.custom.css"	=> 
"./_css/jquery-ui-1.8.17.custom.min.css",
"./_js/_uberuploadcropper/css/uploadify.css"			=> 
"./_js/_uberuploadcropper/css/uploadify.min.css"
	);
	
	minifyJS($js);
	minifyCSS($css);
}
?>
<div class="header_information" id="header_information"><?php echo query("tb_sys_informacoes", "texto", "WHERE titulo = 'seo'"); ?></div>

<?php 
$multilang = query("tb_sys_informacoes", "texto", "WHERE titulo = 'multilang'"); 
if($multilang == "ON"){

?>

<ul class="langs" id="id_langs">
	<li><a href="<?php echo PATH ?>en/<?php echo preg_replace("/\/$/", "", $pag_atual); ?>"><img title="Change Language to English" alt="Change Language to English" src="<?php echo PATH ?>/_images/flags_gif/gb.gif" /></a></li>
    <li style="padding-left:0px;"><a href="<?php echo PATH ?>de/<?php echo preg_replace("/\/$/", "", $pag_atual); ?>"><img title="Change Language to German" alt="Change Language to German" src="<?php echo PATH ?>/_images/flags_gif/de.gif" /></a></li>
</ul>
<?php } ?>
<?php /*?><div class="info_release" id="id_info_release">

<div class="inf_rel_0"><img alt="EP Cover BRN FCK" title="EP Cover BRN FCK" class="1" src="<?php echo PATH ?>_images/shot_ep_brn_fck_cover.jpg" /></div>

<div class="inf_rel_1">NEW EP</div>

<div class="inf_rel_2">&acute;<strong>BRN FCK</strong>&acute;</div>

<div class="inf_rel_3">AVAILABLE ON </div>

  <div class="inf_rel_4">
  <a href="https://itunes.apple.com/us/album/brn-fck/id1083164105" target="_blank"><img style="position: relative;top: 2px;right:4px;" class="1" src="<?php echo PATH ?>_images/logo_itunes.png" alt="S.H.O.T. on iTunes" title="S.H.O.T. on iTunes" /></a> and <a href="https://open.spotify.com/album/7e8yEnqR59HYr7GqPrE085" target="_blank"><img style="    position: relative;top: 5px;left:6px;" alt="S.H.O.T. on Spotify" title="S.H.O.T. on Spotify" class="1" src="<?php echo PATH ?>_images/logo_spotify.png" /></a></div>
  
</div><?php */?>


<?php /*?><div class="info_release info_release2" id="id_info_release2">
<div class="inf_rel_1">NEW MUSIC VIDEO</div>
<div class="inf_rel_2">&acute;<strong>THIS IS OUR WAR</strong>&acute;</div>
<div class="inf_rel_3"><div class="rel_1_1">AVAILABLE ON </div>
  <a href="https://www.youtube.com/watch?v=ggABQuWi0kk" target="_blank"><img alt="S.H.O.T. on Youtube" title="S.H.O.T. on Youtube" class="1" src="<?php echo PATH ?>_images/logo_youtube.png" /></a></div>
</div><?php */?>
<div class="both"></div>
<?php /*?><img src="<?php echo PATH ?>_images/head_banner.jpg" /><?php */?>
<ul id="new_menu_top" class="head_menu_new">
	<li class="f">&nbsp;</li>
    <li><a href="<?php echo PATH ?>"><?php echo $lang[$lang_ses]["MENU"][0]?></a></li>
    <li>
    <?php if(BLOG == "ON"){ ?>
    <a href="<?php echo PATH ?>blog"><?php echo $lang[$lang_ses]["MENU"][1]?></a>
    <?php }else{ ?>
    <a href="<?php echo PATH ?>news">News</a>
    <?php } ?>
    </li>
    <li><a href="<?php echo PATH ?>tour-dates"><?php echo $lang[$lang_ses]["MENU"][2]?></a></li>
    <li><a href="<?php echo PATH ?>band/biography-discography"><?php echo $lang[$lang_ses]["MENU"][3]?></a></li>
    <li>
	<?php if(STORE == "ON"){ ?>
    <a href="<?php echo PATH ?>onlineshop"><?php echo $lang[$lang_ses]["MENU"][4]?></a>
    <?php } ?>
    </li>
    <li><a href="<?php echo PATH ?>photos"><?php echo $lang[$lang_ses]["MENU"][5]?></a></li>
    <li><a href="<?php echo PATH ?>videos"><?php echo $lang[$lang_ses]["MENU"][6]?></a></li>
    <li class="no_div"><a href="<?php echo PATH ?>contact"><?php echo $lang[$lang_ses]["MENU"][7]?></a></li>
</ul>

</div>
<div class="header_top">
	<?php /*?><div class="top_video">
    	<div class="vid">
    		<iframe width="500" height="339" src="http://www.youtube.com/embed/fv21USpBQBM" frameborder="0" allowfullscreen></iframe>
    	</div>
    </div><?php */?>
<?php /*?>   <a href="<?php echo PATH ?>home/"><img src="<?php echo PATH ?>_images/shot_band_header_banner<?php echo rand(2, 3); ?>.jpg" width="1220px" alt="S.H.O.T. band" title="S.H.O.T. band"/></a>
    <div class="both">&nbsp;</div>
<ul class="header_menu_top" id="main_scroll">
	<li><a href="<?php echo PATH ?>home/">HOME</a></li>
    <li><a href="<?php echo PATH ?>tour-dates/">TOUR</a></li>
    <li><a href="<?php echo PATH ?>band/">BAND</a></li>
    <li><a href="<?php echo PATH ?>store/">STORE <sup style='font-size:6px;color:#990000;'>(new)</sup></a></li>
    <li><a href="<?php echo PATH ?>photos/">PHOTOS</a></li>
    <li><a href="<?php echo PATH ?>videos/">VIDEOS</a></li>
    <li><a href="<?php echo PATH ?>contact/">CONTACT</a></li>
</ul><?php */?>

<div class="both"></div>
<?php /*?><ul class="head_menu">
	<li><a href="<?php echo PATH ?>home/">Home</a></li>
    <li><a href="<?php echo PATH ?>blog/">Blog</a></li>
    <li><a href="<?php echo PATH ?>tour-dates/">Tour</a></li>
    <li><a href="<?php echo PATH ?>band/">Band</a></li>
    <li><a href="<?php echo PATH ?>store/">Merchandise</a></li>
    <li><a href="<?php echo PATH ?>photos/">Photos</a></li>
    <li><a href="<?php echo PATH ?>videos/">Videos</a></li>
    <li class="no_div"><a href="<?php echo PATH ?>contact/">Contact</a></li>
</ul>
<div class="both"></div><?php */?>
<?php /*?><div class="header_banner_shot_top">
	<span id="banner" style="position:relative; z-index:1;"> 
	</span>
</div><?php */?>
<div class="both"></div>
</div>