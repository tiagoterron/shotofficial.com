<?php
/*echo "<pre>";
print_r($_SESSION);
echo "</pre>";*/
?>
<div class="user-account">
		<ul class="opts">
        	
            <?php
			if(!empty($_SESSION["id_user_on"])){
			?>
            <li><span style="font-size:12px;">Welcome <strong><?php echo $_SESSION["name_user_on"]; ?></strong> ( <a style="font-size:12px;" href="<?php echo PATH ?>edit-user/">Edit</a> | <a style="font-size:12px;" href="<?php echo PATH ?>exec/user-logout/">Logout</a> )</span></li>
			<?php
			}
			?>
            
            <?php
			if(empty($_SESSION["id_user_on"])){
			?>
            <li><a href="<?php echo PATH ?>onlineshop/">Shop</a></li>
			<li><a href="<?php echo PATH ?>shopping-cart/">My Cart</a></li>
			<li><a href="<?php echo PATH ?>sign-in/">Login</a></li>
            <li><a href="<?php echo PATH ?>sign-up/">Register</a></li>
			<?php
			}
			?>
		</ul>
		<?php include "_includes/shopping-cart.php"; ?>
		<div class="both"></div>
	</div>