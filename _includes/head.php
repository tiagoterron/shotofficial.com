<script language="javascript" type="text/javascript">
PATH = "<?php echo PATH ?>";
RAND = "<?php echo preg_replace("/\./", "", $_SERVER['REMOTE_ADDR']) ?>";
SESSION = "<?php echo session_id(); ?>"
</script>

<link rel="apple-touch-icon" sizes="57x57" href="<?php echo PATH ?>favicon/apple-icon-57x57.png">
<link rel="apple-touch-icon" sizes="60x60" href="<?php echo PATH ?>favicon/apple-icon-60x60.png">
<link rel="apple-touch-icon" sizes="72x72" href="<?php echo PATH ?>favicon/apple-icon-72x72.png">
<link rel="apple-touch-icon" sizes="76x76" href="<?php echo PATH ?>favicon/apple-icon-76x76.png">
<link rel="apple-touch-icon" sizes="114x114" href="<?php echo PATH ?>favicon/apple-icon-114x114.png">
<link rel="apple-touch-icon" sizes="120x120" href="<?php echo PATH ?>favicon/apple-icon-120x120.png">
<link rel="apple-touch-icon" sizes="144x144" href="<?php echo PATH ?>favicon/apple-icon-144x144.png">
<link rel="apple-touch-icon" sizes="152x152" href="<?php echo PATH ?>favicon/apple-icon-152x152.png">
<link rel="apple-touch-icon" sizes="180x180" href="<?php echo PATH ?>favicon/apple-icon-180x180.png">
<link rel="icon" type="image/png" sizes="192x192"  href="<?php echo PATH ?>favicon/android-icon-192x192.png">
<link rel="icon" type="image/png" sizes="32x32" href="<?php echo PATH ?>favicon/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="96x96" href="<?php echo PATH ?>favicon/favicon-96x96.png">
<link rel="icon" type="image/png" sizes="16x16" href="<?php echo PATH ?>favicon/favicon-16x16.png">
<link rel="manifest" href="<?php echo PATH ?>favicon/manifest.json">
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="msapplication-TileImage" content="<?php echo PATH ?>favicon/ms-icon-144x144.png">
<meta name="theme-color" content="#ffffff">

<?php 
//if(preg_match("/\/manage/", $_SERVER['REQUEST_URI'])){

/*?><script language="javascript" src="http://cdn.dev.skype.com/uri/skype-uri.js" type="text/javascript"></script><?php */?>
<script language="javascript" src="<?php echo PATH ?>_js/jquery-1.7.1.min.js" type="text/javascript"></script>
<script language="javascript" src="<?php echo PATH ?>_js/jquery.validate.min.js" type="text/javascript"></script>
<script language="javascript" src="<?php echo PATH ?>_js/jquery.colorbox.min.js" type="text/javascript"></script>

<?php
if(MANAGE == true){
?>
<script language="javascript" src="<?php echo PATH ?>_js/tiny_mce/tiny_mce.js" type="text/javascript"></script>
<script language="javascript" src="<?php echo PATH ?>_js/tiny.js" type="text/javascript"></script>
<script language="javascript" src="<?php echo PATH ?>_js/jquery.maskedinput-1.3.js" type="text/javascript"></script>
<?php
}
?>
<script language="javascript" src="<?php echo PATH ?>_js/datepicker.min.js" type="text/javascript"></script>
<script language="javascript" src="<?php echo PATH ?>_js/jquerycssmenu.js" type="text/javascript"></script>
<script language="javascript" src="<?php echo PATH ?>_js/jquery-ui-1.8.17.custom.min.js" type="text/javascript"></script>

<script language="javascript" src="<?php echo PATH ?>_js/jquery.bxslider.min.js" type="text/javascript"></script>

<script type="text/javascript" src="<?php echo PATH ?>_js/_uploadify/swfobject.js"></script>
<script type="text/javascript" src="<?php echo PATH ?>_js/_uploadify/jquery.uploadify.v2.1.4.min.js"></script>

<!--AD-GALLEY-->
<script type="text/javascript" src="<?php echo PATH ?>_js/ad-gallery/jquery.ad-gallery.min.js"></script>
<link href="<?php echo PATH ?>_css/ad-gallery/jquery.ad-gallery.css" rel="stylesheet" type="text/css" />
<?php
if(MANAGE == true){
?>
<script type="text/javascript" src="<?php echo PATH ?>_js/_uberuploadcropper/scripts/swfobject.js"></script>
<script type="text/javascript" src="<?php echo PATH ?>_js/_uberuploadcropper/scripts/jquery.uploadify.v2.1.4.js"></script>
<script type="text/javascript" src="<?php echo PATH ?>_js/_uberuploadcropper/scripts/jquery-impromptu.3.1.min.js"></script>
<script type="text/javascript" src="<?php echo PATH ?>_js/_uberuploadcropper/scripts/Jcrop/js/jquery.Jcrop.min.js"></script>
<script type="text/javascript" src="<?php echo PATH ?>_js/_uberuploadcropper/scripts/jquery-uberuploadcropper.php"></script>
<script language="javascript" src="<?php echo PATH ?>_js/manage-script.js" type="text/javascript"></script>
<?php
}
?>
<script language="javascript" src="<?php echo PATH ?>_js/scripts.js" type="text/javascript"></script>


<link rel="stylesheet" href="<?php echo PATH ?>_css/colorbox.css" type="text/css" />
<link rel="stylesheet" href="<?php echo PATH ?>_css/index.min.css" type="text/css" />
<link rel="stylesheet" href="<?php echo PATH ?>_css/default.css" type="text/css" />
<link rel="stylesheet" href="<?php echo PATH ?>_css/datepicker.css" type="text/css" />
<link rel="stylesheet" href="<?php echo PATH ?>_css/jquerycssmenu.css" type="text/css" />
<link rel="stylesheet" href="<?php echo PATH ?>_css/jquery-ui-1.8.17.custom.min.css" type="text/css" />

<link href="<?php echo PATH ?>_js/_uberuploadcropper/css/default.css" rel="stylesheet" type="text/css" />
<link href="<?php echo PATH ?>_js/_uberuploadcropper/css/uploadify.min.css" rel="stylesheet" type="text/css" />
<link href="<?php echo PATH ?>_js/_uberuploadcropper/scripts/Jcrop/css/jquery.Jcrop.css" rel="stylesheet" type="text/css" />

<script language="javascript" src="<?php echo PATH ?>_js/jquery.tweet.min.js" type="text/javascript"></script>

<!--[if lte IE 7]>
<style type="text/css">
html .jquerycssmenu{height: 1%;} /*Holly Hack for IE7 and below*/
</style>
<![endif]-->
<?php
if(MANAGE == true){
?>
<link href="<?php echo PATH ?>_css/jquery-ui.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="<?php echo PATH ?>_css/manage-style.css" type="text/css" />
<?php
}
?>
<script language="javascript" src="<?php echo PATH ?>_js/jquery.bxslider.min.js" type="text/javascript"></script>
<link href="<?php echo PATH ?>_css/jquery.bxslider.css" rel="stylesheet" type="text/css" />