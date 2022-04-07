<?php
if(isset($_SESSION["sys_warnin"]) && $_GET["a"] == "manage"){
$war_what = $_SESSION["war_what"];

?>
<div>
<div class="manage_notificacao">
	<?php
	if($war_what == "1"){
	?>
    <img src="<?php echo PATH ?>_images/icons/icon_success.gif" />
    <label><?php echo $_SESSION["war_text"]?></label>
    <?php
	}else{
	?>
    <img src="<?php echo PATH ?>_images/icons/icon_error.gif" />
    <label style="color:#990000;"><?php echo $_SESSION["war_text"]?></label>
    <?php
	}
	?>
    <div style="clear:both;"></div>
</div>
</div>
<?php
unset($_SESSION["sys_warnin"]);	
unset($_SESSION["war_text"]);
}
?>