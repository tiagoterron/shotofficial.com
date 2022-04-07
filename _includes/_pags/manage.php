	<?php
	//$pag_atual = $_GET["b"];
    ?>
    <div class="manage-menu-top-bg">
    <div class="jquerycssmenu" id="myjquerymenu">
    <ul class="menu-top">
    <li><a href="<?php echo PATH ?>manage/home-tab_one/">HOME</a></li>
    <li><a href="<?php echo PATH ?>manage/blog-tab_one/">NEWS/BLOG</a>
   	<ul>
      <li><a href="<?php echo PATH ?>manage/materias-tab_two/">NEWS</a></li>
      <li><a href="<?php echo PATH ?>manage/materias-tab_adicionar/">ADD NEWS ++</a></li>
	  <?php
		if(BLOG == "ON"){
		?>
      <li><a href="<?php echo PATH ?>manage/blog-tab_one/">BLOG</a></li>
      <li><a href="<?php echo PATH ?>manage/blog-tab_adicionar/">ADD BLOG ++</a></li>
      <?php } ?>
     </ul>    
    </li>
    <?php
	if(STORE == "ON"){
	?>
	<li><a href="<?php echo PATH ?>manage/loja-tab_one/">STORE</a>
    	<ul>
      <li><a href="<?php echo PATH ?>manage/loja-tab_one/">PRODUCTS</a></li>
      <li><a href="<?php echo PATH ?>manage/loja-tab_two/">ORDERS</a></li>
      <li><a href="<?php echo PATH ?>manage/loja-tab_three/">BUYERS</a></li>
      <li><a href="<?php echo PATH ?>manage/loja-tab_one_adicionar/">ADD PRODUCT ++</a></li>
     </ul>
    </li>
    <?php } ?>
    <li><a href="<?php echo PATH ?>manage/eventos-tab_one/">SHOWS/GIGS</a>
    <ul>
      <li><a href="<?php echo PATH ?>manage/eventos-tab_one/">UPCOMING</a></li>
      <li><a href="<?php echo PATH ?>manage/eventos-tab_two/">PAST GIGS</a></li>
      <li><a href="<?php echo PATH ?>manage/eventos-tab_adicionar/">ADD EVENT ++</a></li>
     </ul>
    </li>
    <li><a href="<?php echo PATH ?>manage/anuncios-tab_one/">BAND</a>
      <ul>
      <li><a href="<?php echo PATH ?>manage/banda-tab_one/">BIOGRAPHY</a></li>
      <li><a href="<?php echo PATH ?>manage/banda-tab_two/">DISCOGRAPHY</a></li>
      </ul>
    </li>
    <li><a href="<?php echo PATH ?>manage/fotos-tab_one/">PHOTOS/VIDEOS</a>
    	<ul>
          <li><a href="<?php echo PATH ?>manage/fotos-tab_one/">PHOTOS</a></li>
          <li><a href="<?php echo PATH ?>manage/videos-tab_one/">VIDEOS</a></li>
      </ul>
    </li>
    <?php if(NEWSLETTER == "ON"){ ?>
    <li><a href="<?php echo PATH ?>manage/newsletter-tab_two/">NEWSLETTER</a>
    <ul>
          <li><a href="<?php echo PATH ?>manage/newsletter-tab_two/">REGISTERED</a></li>
          <li><a href="<?php echo PATH ?>manage/newsletter-tab_three/">SEND E-MAIL</a></li>
      </ul>
    </li>
    <?php } ?>
	<li><a href="<?php echo PATH ?>manage/settings-tab_one/">SETTINGS</a></li>
    </ul>
    </div>
    <?php
	$SQL1 = mysqli_query($connect, "SELECT COUNT(*) as total FROM tb_users_online ORDER BY id DESC");
	if(mysqli_num_rows($SQL1)){
	$SQL1_2 = mysql_result($SQL1, 0, "total");
	}
	?>
    <div class="manage_right_logout"><?php /*?><?php echo $SQL1_2; ?> users online - <?php */?>Hi, <i><?php echo USER_NAME; ?></i> (<a href="<?php echo PATH ?>exec/logout/" class="reset_a">Logout</a>)</div>
    </div>
	<div class="all DIVtransp">
    	<?php //include "_pags/manage-menu.php"?>
        <!-- BEGIN CONTENT -->
        <?php include "_includes/manage-notificacao.php"; ?>
        <?php 
		$pg = $_GET["b"];
		if($pg == "") $pg = "home-tab_one";
		$file = "manage-".$pg.".php";
		if(file_exists($file)){
		include $file;
		}else{
		include $file;	
		}
		?>
        <!-- END CONTENT -->
     	<?php //include "_pags/aplicativo-footer.php"; ?>
        <div id="show_cep" style="display:none;"></div>
