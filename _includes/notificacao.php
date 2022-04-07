<?php
if(isset($_SESSION["sys_warnin"]) && $_GET["a"] != "manage"){
$war_what = $_SESSION["war_what"];
?>
<div class="notificacao">
	<?php
	if($war_what == "1"){
	?>
    <img src="<?php echo PATH ?>_images/icons/icon_active.png" width="15px" />
    <label><?php echo $_SESSION["war_text"]?></label>
    <?php
	}else{
	?>
    <img src="<?php echo PATH ?>_images/icons/icon_unactive.png" width="15px" />
    <label><?php echo $_SESSION["war_text"]?></label>
    <?php
	}
	?>
    <div class="both"></div>
</div>
<br clear="all" />
<?php
unset($_SESSION["sys_warnin"]);	
unset($_SESSION["war_text"]);
}
?>