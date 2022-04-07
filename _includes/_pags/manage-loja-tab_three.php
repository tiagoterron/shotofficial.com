<?php
/*INFORMAÇÔES*/
//$pag_atual = "manage/loja-tab_one";
/*INFORMAÇÔES*/

if($_POST["txt_search"] != "" or $_GET["txt_search"] != ""){
$txt_search = $_POST["txt_search"]!=""?htmlentities($_POST["txt_search"]):$_GET["txt_search"];
$filter = "(b.first_name LIKE '%".$txt_search."%' OR b.last_name LIKE '%".$txt_search."%' OR c.titulo LIKE '%".$txt_search."%')";	
}else{
$filter = "1=1";	
}

//TABELA E COLUNAS
$tabela = "tb_signup a LEFT JOIN tb_country b ON a.country = b.id";
$cols = array('ID{20}'=>'id{a}', 'User{200}'=>'first_name{a}', 'E-mail{200}'=>'email{a}', 'Country{125}'=>'name{b}', 'Date{150}'=>'dt_cad{a}');

$columns = "";
foreach($cols as $k=>$v){ 
if(preg_match("/\[.*\]/", $v)){
continue;
}

$n = preg_replace("/.*{/", "", preg_replace("/}/", "", $v));
$v = preg_replace("/{.*}/", "", $v);
$columns .= $n.".`".$v."`, ";
}
$columns = preg_replace("/, $/", "", $columns);

$numreg = 10;
$pg = $_GET["c"];
if($pg == "") $pg = 1;

$inicial = $pg * $numreg - $numreg;
$dt_last_week = date("Y-m-d", mktime(0,0,0, date("m"), date("d")-7, date("Y")));
$SQL = "SELECT $columns, a.status FROM $tabela WHERE $filter ORDER BY a.id DESC";

$SQL = mysqli_query($connect, $SQL) or die(mysqli_error($connect));
$quantreg = mysqli_num_rows($SQL);
$SQL_PAG = "SELECT *, a.status, DATE_FORMAT(a.dt_cad, '%d/%m/%Y at %Hh%im') as dt_cad2, $columns FROM $tabela WHERE $filter ORDER BY a.id DESC LIMIT $inicial,$numreg";
$SQL_PAG = mysqli_query($connect, $SQL_PAG) or die(mysqli_error($connect));
$quant_pg = ceil($quantreg/$numreg)-1;
$quant_pg++;

$quant_pag = $quant_pg; //Número de páginas

$n_links_show = 7; //Número de links por loop antes/depois.. Ex.: (1... 4 5 6 [7] 8 9 10 ...50)

?>
<div class="manage-content-menu">
	<ul>
        <li><a href="<?php echo PATH ?>manage/loja-tab_one">PRODUCTS</a><div class="right">&nbsp;</div></li>
		<li><a href="<?php echo PATH ?>manage/loja-tab_two">ORDERS</a><div class="right">&nbsp;</div></li>
		<li class="current"><a href="<?php echo PATH ?>manage/loja-tab_three">BUYERS</a><div class="right">&nbsp;</div></li>
    </ul>
</div>
<div class="manage-content">
	<div class="top_search">
    	<form name="" action="<?php echo PATH.$pag_atual."/1/" ?>" method="post">
<label>title: </label>
        <input type="text" name="txt_search" class="txt" value="<?php echo $txt_search!=""?html_entity_decode($txt_search):""; ?>" />
        <input type="submit" value="Filter" class="btn"/>
</form>
    </div>
    <div class="top-titulo">Users<br /><img src="<?php echo PATH ?>_images/manage/hr.jpg" /></div>
<div style="clear:both;"></div>
<ul class="label">
	<?php
	foreach($cols as $k=>$v){ 
	$k=explode("{", $k);
	$c = $k[0];
	$w = substr($k[1], 0, strlen($k[1])-1);
	?>
	<li class="w<?php echo $w; ?>"><label><?php echo $c; ?></label></li>
    <?php } ?>
    <li class="w100"><label>Actions</label></li>
	<div style="clear:both;"></div>
</ul>
	<?php
	if($quantreg > 0){
	while($SQL_Q = mysql_fetch_assoc($SQL_PAG)){
/*	echo "<pre>";
	print_r($SQL_Q);
	echo "</pre>";*/
	?>
    <ul class="span">
    <?php
	foreach($cols as $k=>$v){
	$status = $SQL_Q['status']; 
	if($status == "N"){
	$span_off = "off";
	}else{
	$span_off = "";
	}
	$k2=explode("{", $v);
	$c = $k2[0];
	
	$y=explode("{", $k);
	$w = substr($y[1], 0, strlen($y[1])-1);
	
	switch($c){
	case "id":
	$fetch_atual = sprintf('%03d', html_entity_decode($SQL_Q["id"]));
	break;
	case "quantidade":
	$fetch_atual = sprintf('%03d', html_entity_decode($SQL_Q["quantidade"]));
	break;
	case "dt_cad":
	$fetch_atual = html_entity_decode($SQL_Q["dt_cad2"]);
	break;
	case "imagem":
	$fetch_atual = "<img class='pic_album_manage' src='".PATH."_images/_uploads/_thumbs/min_".html_entity_decode($SQL_Q["imagem"])."' width='150px' />";
	break;
	case "date":
	$fetch_atual = html_entity_decode($SQL_Q["date2"])." ".html_entity_decode($SQL_Q["hour_type"]);
	break;
	case "id_usuario":
	$fetch_atual = "Nome Usuário ".html_entity_decode($SQL_Q["id_usuario"]);
	break;
	case "faixas":
	$fetch_atual = count(explode("|*|", html_entity_decode($SQL_Q["faixas"])));
	break;
	case "pago":
	if(html_entity_decode($SQL_Q["pago"]) == "Y"){
	$fetch_atual = "<span class='span_paid'>PAID</span>";
	}else{
	$fetch_atual = "<span class='span_unpaid'>UNPAID</span>";	
	}
	break;
	case "tipo":
	if(html_entity_decode($SQL_Q["tipo"]) == "tshirt"){
	$fetch_atual = "T-SHIRT";
	}elseif(html_entity_decode($SQL_Q["tipo"]) == "cd"){
	$fetch_atual = "CD";	
	}elseif(html_entity_decode($SQL_Q["tipo"]) == "outros"){
	$fetch_atual = "OUTROS";	
	}else{
	$fetch_atual = "";
	}
	break;
	case "first_name":
	$fetch_atual = html_entity_decode($SQL_Q["first_name"])." ".html_entity_decode($SQL_Q["last_name"]);
	break;
	default:
	$fetch_atual = html_entity_decode($SQL_Q[$c]);
	break;
	}
	if($fetch_atual == "") $fetch_atual = "&nbsp";
	?>
    <li class="w<?php echo $w; ?>"><span class="<?php echo $span_off; ?>"><?php echo $fetch_atual; ?></span></li>
    <?php
	}
	?>
    <li class="w150"><span class="l"><a href="<?php echo PATH ?>manage/loja-tab_four/<?php echo $SQL_Q["id"]?>">DETAILS</a> | <a href="<?php echo PATH ?>manage/exec/user-signup-delete/<?php echo $SQL_Q["id"]?>">DELETE</a></span></span></li>
    <div style="clear:both;"></div>
    </ul>
    <?php
	}
	}else{
	?>
	<ul class="span">
    <li><span>no result</span></li>
    </ul>
	<?php	
	}
	?>
<div class="both"></div>
<div class="manage_btn_adicionar"><a href="<?php echo PATH ?>manage/loja-tab_one_adicionar/"><img src="<?php echo PATH ?>_images/manage/btn-adicionar.jpg" class="manage_btn_adicionar" /></a></div>
<div class="paginacao">
<img src="<?php echo PATH ?>_images/manage/hr2.jpg" /><br clear="all" />

<?php
if(($pg-$n_links_show) <= 1){
$ini = 1;
$show_first = "";
}else{
$ini = $pg-$n_links_show;
$show_first = "<a href='".PATH."$pag_atual/1/'>1</a>... ";
}
if(($pg+$n_links_show) >= $quant_pag){
$pos = $quant_pag;
$show_last = "";
}else{
$pos = $pg+$n_links_show;
$show_last = "... <a href='".PATH."$pag_atual/$quant_pag/'>".$quant_pag."</a>";
}
if((($pg+2) == $quant_pag) and ($pos != $quant_pag)) $show_last = $quant_pag." ";
if((($pg-2) == 1) and ($ini != 1)) $show_first = "1 ";
echo $show_first;
for($i=$ini;$i<=$pos;$i++){
if($i == $pg) echo " [ $i ] ";
else echo " <a href='".PATH."$pag_atual/$i/'>".$i."</a> ";
}
echo $show_last;
?>
</div>
<!--<div class="mais_opcoes_filtros">
<img src="<?php echo PATH ?>_images/manage/hr2.jpg" /><br clear="all" />
</div>-->
<div class="both">&nbsp;</div>
</div>