<?php ob_start("ob_gzhandler"); ?>
<?php
error_reporting(E_ERROR | E_WARNING | E_PARSE);
session_start();
ob_start();


include "_config/connect.php";
include "_config/urlamigavel.php";
include "_functions/index.php";


if($_GET["a"] == "animals") {$_GET[""] = ""; $_SESSION["ANIMALS"] = false;};
if($_GET["a"] == "home") {$_GET[""] = ""; $_SESSION["ANIMALS"] = false;};


if($_SESSION["ANIMALS"] == false){
	//header("location: http://shotofficial.com/animals");
}

define("STORE", query("tb_sys_informacoes", "texto", "WHERE titulo = 'store_status'"));
define("NEWSLETTER", query("tb_sys_informacoes", "texto", "WHERE titulo = 'newsletter_status'"));
define("BLOG", query("tb_sys_informacoes", "texto", "WHERE titulo = 'blog_status'"));
define("HOMEPHOTOS", query("tb_sys_informacoes", "texto", "WHERE titulo = 'photos_status'"));
define("HOMEVIDEOS", query("tb_sys_informacoes", "texto", "WHERE titulo = 'videos_status'"));
define("DOMAIN", query("tb_sys_informacoes", "texto", "WHERE titulo = 'domain'"));
define("BAND", query("tb_sys_informacoes", "texto", "WHERE titulo = 'band_name'"));
define("EMAIL", query("tb_sys_informacoes", "texto", "WHERE titulo = 'email1'"));
define("EMAIL2", query("tb_sys_informacoes", "texto", "WHERE titulo = 'email2'"));
define("PHONE", query("tb_sys_informacoes", "texto", "WHERE titulo = 'telephone'"));

define("HEADERBANNER", query("tb_sys_informacoes", "texto", "WHERE titulo = 'header_image'")); 
include "_config/session.php"; 
include "_config/online.php";
include "_config/lang.php";





?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd" />
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-gb" lang="en-gb" />
<head>
<title><?php echo $titulo; ?></title>
<link rel="image_src" href="<?php echo DOMAIN ?>/shot_band_animals_newalbum_2018.jpg" style="alignment-baseline:baseline;" />
<?php echo query("tb_sys_informacoes", "texto", "WHERE titulo = 'txt_seo'"); ?>
<meta name="google-site-verification" content="dl8ZNFSpCv32M-fBzSTkDRR-6HUIDMYqFuSHqlwD8-g" />
<meta name="google-site-verification" content="WpYwBRh-dTw-2mzf906KlUKoAZmM8h0hv50Ypmq-WB0" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7" />
<base href="<?php echo DOMAIN ?>" />
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<meta name="robots" content="index" />
<meta name="Distribution" content="global"/>
<meta http-equiv="Content-Language" content="en" /> 
<meta name="rating" content="general" />
<meta name="author" content="Terron Web Developer" />
<meta name="DC.title" content="<?php echo BAND ?>" />
<meta name="DC.creator " content="Terron Web Developer" />
<meta name="DC.creator.address" content="infos@shotofficial.com" />
<meta name="DC.subject" content="<?php echo BAND ?> Official" />
<meta name="DC.date.created" content="2011-01-01" />
<meta name="geo.placename" content="Germany" />
<meta name="geo.region" content="Berlin" />

<meta property="og:title" content="<?php echo $titulo; ?>"/>
<meta property="og:image" content="http://shotofficial.com/shot_band_animals_newalbum_2018.jpg"/>
<meta property="og:image:type" content="image/jpeg">
<meta property="og:image:width" content="700">
<meta property="og:image:height" content="700">
<meta property="og:url" content="<?php echo DOMAIN ?><?php echo $_SERVER['REQUEST_URI']; ?>">
<meta property="og:site_name" content="S.H.O.T. - Official band | 'ANIMALS' new album 2018 | EUROPEAN TOUR APRIL 2018"/>
<meta property="og:description" content="New album 'ANIMALS' available from 31st January on Spotify | iTunes | Denzer | SoundCloud. EUROPEAN TOUR in April 2018. Dates to be released soon!"/>

<meta name="twitter:card" property="twitter:card" content="summary_large_image"/>
<meta name="twitter:creator" property="twitter:creator" content/>
<meta name="twitter:creator:id" property="twitter:creator:id" content/>
<meta name="twitter:url" property="twitter:url" content="<?php echo DOMAIN ?><?php echo $_SERVER['REQUEST_URI']; ?>"/>
<meta name="twitter:title" property="twitter:title" content="S.H.O.T. - Official band | 'ANIMALS' new album 2018 | EUROPEAN TOUR APRIL 2018"/>
<meta name="twitter:description" property="twitter:description" content="New album 'ANIMALS' available from 31st January on Spotify | iTunes | Denzer | SoundCloud. EUROPEAN TOUR in April 2018. Dates to be released soon!"/>
<meta name="twitter:image" property="twitter:image" content="http://shotofficial.com/shot_band_animals_newalbum_2018.jpg"/>
<meta name="twitter:site" content="@shotband">

<link href="<?php echo PATH ?>_css/dropzone.css" type="text/css" rel="stylesheet" />
<script src="<?php echo PATH ?>_js/dropzone.js" language="javascript" type="text/javascript"></script>


<?php include "_includes/head.php"; ?>
</head>
<?php
if($_GET['a'] != "" and $_GET['a'] != "home" and $_GET['a'] != "manage"){
?>
<body>
<?php
}else{
?>
<body>
<?php
}
?>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v2.11';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<?php if(MANAGE == false) include "_includes/header.php"; ?>
<?php //include_once("analyticstracking.php") ?>
<div class="both"></div>
<div class="content_all">
    <?php if(MANAGE == false) include "_includes/content_left.php"; ?>
    <div class="content_middle">
	<?php include "_includes/notificacao.php"; ?>
    <?php
	if(MANAGE == false){
	?>
	<?php
	if(STORE == "ON"){
	include("_includes/bar_store.php");
	}
	?>
	<?php
	}
	?>
		<?php
        if($_GET['a']){
        $path = "_includes/_pags/";
        if(file_exists($path.$_GET['a'].".php")){
        include($path.$_GET['a'].".php");
        } else {
        include($path."404-error-page.php");
        }
        } else {
        include("$path/home.php");
        }
        ?>
    </div>
    <?php if(MANAGE == false) include "_includes/content_right.php"; ?>
</div>
<div class="both"></div>
<?php
if($_SERVER['REMOTE_ADDR'] == "187.110.176.224"){
?>
<?php
}
?>
<?php if(MANAGE == false) include "_includes/footer.php"; ?>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-24551119-1', 'auto');
  ga('send', 'pageview');

</script>
</body>
</html>
