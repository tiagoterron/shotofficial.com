<?php /*?>		<img alt="S.H.O.T. store banner t-shirts" class="img_store_banner" src="<?php echo PATH ?>_images/banner_shot_store.gif" width="660px" /><?php */?>
		<?php
		$id = make_url($_GET["c"], "2");
		$cat = $_GET["b"];
		$category = $_GET["c"];
		if($cat == "category"){
		switch($category){
		case "music":
		$t_category = "AND (tipo = 'cd')";
		$t_cat_tit = "(Music)";
		break;
		case "tshirts":
		$t_category = "AND (tipo = 'tshirt')";
		$t_cat_tit = "(T-shirts)";
		break;
		case "acessories":
		$t_category = "AND (tipo = 'outros')";
		$t_cat_tit = "(Acessories)";
		break;
		case "photos-posters":
		$t_category = "AND (tipo = 'photos-posters')";
		$t_cat_tit = "(Photos and Posters)";
		break;
		case "best-sellers":
		$t_category = "AND (tipo = 'best-sellers')";
		$t_cat_tit = "(Best Sellers)";
		break;
		default:
		$t_category = "";
		break;
		}	
		}
		$tipo = "cd";
		$SQL = "SELECT * FROM tb_store_produtos WHERE status = 'Y' AND id = $id $t_category ORDER BY tipo ASC";
		$SQL = mysqli_query($connect, $SQL) or die(mysqli_error($connect));
		$arr = array();
		while($SQL_Q = mysql_fetch_assoc($SQL)){
		$arr[] = $SQL_Q;
		}
		?>
        <div class="box_content_middle">
        <label class="title"><h2>Item / product <?php echo $t_cat_tit; ?></h2><div style="float:right;margin:5px;"><a href="javascript:void(0)" onclick="close_tab('store_box_1')">[+]</a></div></label>
        <ul id="store_box_1" class="store" style="margin:10px;">
        <?php
		for($i=0;$i<count($arr);$i++){
		$t_id = html_entity_decode($arr[$i]["id"]);
		$t_imagem = html_entity_decode($arr[$i]["imagem"]);
		$t_titulo = html_entity_decode($arr[$i]["titulo"]);
		if($p_brl == true){
		$t_preco = html_entity_decode($arr[$i]["brl_preco"]);
		$txt_currency = "R$ ";
		}else{
		$t_preco = html_entity_decode($arr[$i]["usd_preco"]);
		$txt_currency = "$ ";
		}
		$t_quantidade = html_entity_decode($arr[$i]["quantidade"]);
		$t_tipo = html_entity_decode($arr[$i]["tipo"]);
		$t_status = html_entity_decode($arr[$i]["status"]);
		$t_texto = html_entity_decode($arr[$i]["descricao"]);
		//$t_texto = strip_tags($t_texto);
		if($t_tipo == "cd" or $t_tipo == "outros"){
		$class_cd = "imgCD";
		}else{
		$class_cd = "imgCD";
		}
		//if($t_tipo != "cd") continue;
		?>
		<li style="height:inherit;">
			<div class="<?php echo $class_cd; ?>" style="width:500px;display:inline-block;">
				<div class="_thumb_img" style="width:200px;margin-bottom:12px !important;">
                
                <ul class="bxslider">
                <?php
			$SQL = "SELECT descricao, imagem FROM tb_store_produtos_fotos WHERE id_produto = $t_id ORDER BY id ASC";
			$SQL = mysqli_query($connect, $SQL);
			if(mysqli_num_rows($SQL) > 0){
			?>
                 <?php
					while($SQL_Q = mysql_fetch_assoc($SQL)){
					$t_color = ent($SQL_Q["descricao"], "2");
					$t_imagem = ent($SQL_Q["imagem"], "2");
					
					?>
                <li>
                 <?php
				if($t_quantidade == 0){
				?>
                <img src="<?php echo PATH ?>_images/sold-out.png" style="width:150px;position:absolute;margin-top:20px;margin-left:25px;" />
                <?php
				}
				?>
                <img src="<?php echo PATH ?>_images/_uploads/imgs/_thumbs/min_<?php echo $t_imagem; ?>" style="width:200px;" /></li>
                <?php
					}
					?>
                    <?php
					}else{
					?>
                    <li><img src="<?php echo PATH ?>_images/_uploads/_thumbs/min_<?php echo $t_imagem; ?>" style="width:200px;" /></li>
					<?php
					}
					?>
                </ul>
                
                <br clear="all" />
                <?php
			$SQL = "SELECT descricao, imagem FROM tb_store_produtos_fotos WHERE id_produto = $t_id ORDER BY id ASC";
			$SQL = mysqli_query($connect, $SQL);
			if(mysqli_num_rows($SQL) > 0){
			?>
                <ul id="bx-pager" class="prod_photos">
                <?php
					$val = 0;
					while($SQL_Q = mysql_fetch_assoc($SQL)){
					$t_color = ent($SQL_Q["descricao"], "2");
					$t_imagem = ent($SQL_Q["imagem"], "2");
					
					?>
<li><a href="" data-slide-index="<?php echo $val++ ?>"><img src="<?php echo PATH ?>_images/_uploads/imgs/_thumbs/min_<?php echo $t_imagem; ?>" /></a></li>
					<?php
					}
					?>
                </ul>
                <?php
			}
			?>
                </div>
                
                <div style="display:none;" id="id_t_shirt_<?php echo $t_id; ?>"></div>
                <div class="right_infos_store" style="width:250px;height:232px;"><h4><a class="inline" href="../details-store"><?php echo $t_titulo; ?></a></h4>
                <div class="both"></div>
                <p style="width:242px;"><?php echo $t_texto;?></p>
                <br clear="all" />
               <span class="span_store_price" style="font-size:25px !important;margin-top:25px !important;"><?php echo $txt_currency;?> <?php echo number_format($t_preco, 2, ',', '.'); ?></span>
			</div>
            <?php
			if($t_tipo == "tshirt" and $t_quantidade != 0){
			$s_t_shirt = "Y";
			?>
            <div class="select_1" style="width:125px;">
            <?php
			$SQL = "SELECT descricao, imagem FROM tb_store_produtos_fotos WHERE id_produto = $t_id ORDER BY id DESC";
			$SQL = mysqli_query($connect, $SQL);
			if(mysqli_num_rows($SQL) > 0){
			?>
            
				<select name="color_<?php echo $t_id; ?>" id="color_<?php echo $t_id; ?>" class="select_tshirt">
					<option value="-">-color-</option>
					<?php
					while($SQL_Q = mysql_fetch_assoc($SQL)){
					$t_color = ent($SQL_Q["descricao"], "2");
					$t_imagem = ent($SQL_Q["imagem"], "2");
					?>
                    <option value="<?php echo $t_id."_".$t_color; ?>"><?php echo $t_color; ?></option>
                    <?php
					}
					?>
				</select>
			
            <?php
			}else{
			echo "<span style='font-size:9px;color:gray;'>Just available in a color.</span><input type='hidden' value='".$t_id."_main' name='color_".$t_id."' id='color_".$t_id."' />";	
			}
			?>
            </div>
            <div class="select_1 select_1_2" style="width:125px !important;">
				<select name="size_<?php echo $t_id; ?>" id="size_<?php echo $t_id; ?>">
					<option value="-">-size-</option>
					<option value="S">Small</option>
					<option value="M">Medium</option>
					<option value="L">Large</option>
                    <option value="XL">X-Large</option>
				</select>
			</div>
			
            <div class="select_1_color">
            </div>
			<?php
			}else{
			$s_t_shirt = "N";	
			?>
            <div class="select_1"  style="width:125px !important;border:0px;">&nbsp;</div>
            <div class="select_1 select_1_2" style="width:125px !important;border:0px;"></div>
			<?php
			}
			?>
            <?php
				if($t_quantidade != 0){
				?>
            	<a href="javascript:void(0)" onclick="add_to_cart(<?php echo $t_id; ?>, '<?php echo $_SESSION["id_user_on"]; ?>', '<?php echo $s_t_shirt;?>', '<?php echo session_id(); ?>')"><img class="icon_de_add" src="<?php echo PATH ?>_images/add_to_cart.png" style="margin-top:25px;" /></a>
            	 <?php
			}
			?>
                 <br clear="all" />
                </div>
                
		</li>
        <?php
		}
		?>
		<br clear="all" />
        </ul>
        <br clear="all" />
        <!--END-->
        </div>