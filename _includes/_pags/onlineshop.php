		<?php /*?><img alt="S.H.O.T. store banner t-shirts" class="img_store_banner" src="<?php echo PATH ?>_images/banner_shot_store.gif" width="660px" /><?php */?>
		<?php
		$cat = $_GET["b"];
		$category = $_GET["c"];
		if($cat == "category"){
		switch($category){
		case "music":
		$t_category = "AND (tipo = 'cd')";
		$t_cat_tit = "(Music)";
		$t_tit_cat = "music/";
		break;
		case "tshirts":
		$t_category = "AND (tipo = 'tshirt')";
		$t_cat_tit = "(T-shirts)";
		$t_tit_cat = "t-shirts/";
		break;
		case "acessories":
		$t_category = "AND (tipo = 'outros')";
		$t_cat_tit = "(Acessories)";
		$t_tit_cat = "acessories/";
		break;
		case "photos-posters":
		$t_category = "AND (tipo = 'photos-posters')";
		$t_cat_tit = "(Photos and Posters)";
		$t_tit_cat = "photos-posters/";
		break;
		case "best-sellers":
		$t_category = "AND (tipo = 'best-sellers')";
		$t_cat_tit = "(Best Sellers)";
		$t_tit_cat = "best-sellers/";
		break;
		default:
		$t_category = "";
		$t_tit_cat = "all-category/";
		break;
		}	
		}
		$tipo = "cd";
		$SQL = "SELECT * FROM tb_store_produtos WHERE status = 'Y' $t_category ORDER BY  quantidade DESC, dt_cad ASC";
		$SQL = mysqli_query($connect, $SQL) or die(mysqli_error($connect));
		$arr = array();
		while($SQL_Q = mysql_fetch_assoc($SQL)){
		$arr[] = $SQL_Q;
		}
		if(empty($t_tit_cat)){
		$t_tit_cat = "all-category/";
		}
		?>
        <div class="box_content_middle">
        <label class="title"><h2>Online shop | music | merchandise</h2><div style="float:right;margin:5px;"><a href="javascript:void(0)" onclick="close_tab('store_box_1')">[+]</a></div></label>
        <ul id="store_box_1" class="store">
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
		$t_url = make_url($t_id."-".$t_titulo, "1");
		$t_quantidade = html_entity_decode($arr[$i]["quantidade"]);
		if($t_quantidade == 0){
		$sold_out = "";	
		}
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
		<li>
			<div class="<?php echo $class_cd; ?>">
				<div class="_thumb_img">
                <?php
				if($t_quantidade == 0){
				?>
                <img src="<?php echo PATH ?>_images/sold-out.png" width="75px" style="position:absolute;margin-top:20px;" />
                <?php
				}
				?>
                <img width="110px" src="<?php echo PATH ?>_images/_uploads/_thumbs/min_<?php echo $t_imagem; ?>" alt="<?php echo BAND ?> - Merchandise (<?php echo $t_titulo; ?>)" title="<?php echo BAND ?> - Merchandise (<?php echo $t_titulo; ?>)" id="id_select_tshirt_<?php echo $t_id; ?>" /></div><div style="display:none;" id="id_t_shirt_<?php echo $t_id; ?>"></div>
                <div class="right_infos_store"><h4><?php echo $t_titulo; ?></h4>
                <div class="both"></div>
                <p><?php echo $t_texto;?></p>
               <span class="span_store_price"><?php echo $txt_currency;?> <?php echo number_format($t_preco, 2, ',', '.'); ?></span>
			</div>
            <br clear="all" />
            <?php
			if($t_tipo == "tshirt" and $t_quantidade != 0){
			$s_t_shirt = "Y";
			?>
            <div class="select_1">
            <?php
			$SQL = "SELECT descricao, imagem FROM tb_store_produtos_fotos WHERE id_produto = $t_id";
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
            <div class="select_1 select_1_2">
				<select name="size_<?php echo $t_id; ?>" id="size_<?php echo $t_id; ?>">
					<option value="-">-size-</option>
					<option value="S">Small</option>
					<option value="M">Medium</option>
					<option value="L">Large</option>
                    <option value="XL">X-Large</option>
				</select>
			</div>
					<?php /*?>
					<div class="select_1_size">
					<input type="radio" name="size_<?php echo $t_id; ?>" id="size_<?php echo $t_id; ?>_1" value="S" /><label for="size_<?php echo $t_id; ?>_1">S</label>
                    <input type="radio" name="size_<?php echo $t_id; ?>" id="size_<?php echo $t_id; ?>_2" value="M" /><label for="size_<?php echo $t_id; ?>_2">M</label>
                    <input type="radio" name="size_<?php echo $t_id; ?>" id="size_<?php echo $t_id; ?>_3" value="L" /><label for="size_<?php echo $t_id; ?>_3">L</label>
                    <input type="radio" name="size_<?php echo $t_id; ?>" id="size_<?php echo $t_id; ?>_4" value="XL" /><label for="size_<?php echo $t_id; ?>_4">XL</label></div><?php */?>
			
            <div class="select_1_color">
            </div>
			<?php
			}else{
			$s_t_shirt = "N";	
			?>
            
			<?php
			}
			
			?>
             
			<div class="icons_de_add">
            <?php /*?><a href="<?php echo PATH ?>view-product/<?php echo $t_tit_cat.$t_url; ?>"><img class="icon_de_add" src="<?php echo PATH ?>_images/icon_details.jpg" /></a><?php */?>
            <?php
				if($t_quantidade == 0){
				?>
           <?php /*?><img class="icon_de_add" src="<?php echo PATH ?>_images/icon_add_to_cart_sold.jpg" /><div class="both"></div><?php */?>
            <?php
			}else{
			?>
             <a href="javascript:void(0)" onclick="add_to_cart(<?php echo $t_id; ?>, '<?php echo $_SESSION["id_user_on"]; ?>', '<?php echo $s_t_shirt;?>', '<?php echo session_id(); ?>')"><img width="150px" class="icon_de_add" src="<?php echo PATH ?>_images/icon_add_to_cart.jpg" /></a><div class="both"></div></div>
            <?php
			}
			?>
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