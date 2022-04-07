<div class="manage-content-menu">
	<ul>
    	<li class="current"><a href="<?php echo PATH.$pag_atual ?>">Home</a><div class="right">&nbsp;</div></li>
    </ul>
</div>
<?php
$SQL1 = mysqli_query($connect, "SELECT * FROM tb_users_online ORDER BY url_atual ASC");
$SQL2 = mysqli_query($connect, "SELECT COUNT(*) AS total FROM tb_users_online");
if(mysqli_num_rows($SQL2)){
$SQL1_2 = mysql_result($SQL2, 0, "total");
}
?>
<div class="manage-content">
    <div class="top-titulo">Welcome to the management system<br /><img src="<?php echo PATH ?>_images/manage/hr.jpg" /></div>
    
<div style="clear:both;"></div>
<br clear="all"><br clear="all">
<div class="manage_content two-system">
<div style="clear:both;"></div>
<br clear="all" />
</div>
<div class="both">&nbsp;</div>
</div>