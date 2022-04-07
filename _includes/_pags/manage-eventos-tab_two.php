<?php
if($_POST["txt_search"] != "" or $_GET["txt_search"] != ""){
$txt_search = $_POST["txt_search"]!=""?htmlentities($_POST["txt_search"]):$_GET["txt_search"];
$filter = "(DATE_FORMAT(a.date, '%d/%m/%Y') LIKE '%".$txt_search."%' OR DATE_FORMAT(a.date, '%Y-%m-%d') LIKE '%".$txt_search."%' OR a.description LIKE '%".$txt_search."%' OR a.location LIKE '%".$txt_search."%' OR a.venue LIKE '%".$txt_search."%')";	
}else{
$filter = "1=1";	
}

//TABELA E COLUNAS
$tabela = "tb_events a";
$cols = array('ID{20}'=>'id{a}', 'Event date{125}'=>'date{a}', 'Location{125}'=>'location{a}', 'Venue{100}'=>'venue{a}', 'Ticket{75}'=>'value_ticket{a}', 'Status{50}'=>'status{a}', 'Date{125}'=>'dt_cad{a}');

$columns = "";
foreach($cols as $k=>$v){ 
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
$SQL = "SELECT $columns, country FROM $tabela WHERE $filter AND date < NOW() ORDER BY `date` DESC";

$SQL = mysqli_query($connect, $SQL) or die(mysqli_error($connect));
$quantreg = mysqli_num_rows($SQL);
$SQL_PAG = "SELECT country, moeda,hour_type, DATE_FORMAT(a.`date`, '%d/%m/%Y %H:%i') as `date2`, DATE_FORMAT(a.`dt_cad`, '%d/%m/%Y %H:%i') as `dt_cad2`, $columns FROM $tabela WHERE $filter AND date < NOW() ORDER BY a.date DESC LIMIT $inicial,$numreg";
$SQL_PAG = mysqli_query($connect, $SQL_PAG) or die(mysqli_error($connect));
$quant_pg = ceil($quantreg/$numreg)-1;
$quant_pg++;

$quant_pag = $quant_pg; //Número de páginas

$n_links_show = 7; //Número de links por loop antes/depois.. Ex.: (1... 4 5 6 [7] 8 9 10 ...50)

?>
<div class="manage-content-menu">
	<ul>
    	<li><a href="<?php echo PATH ?>manage/eventos-tab_one/">UPCOMING</a><div class="right">&nbsp;</div></li>
        <li class="current"><a href="<?php echo PATH.$pag_atual ?>">PAST GIGS</a><div class="right">&nbsp;</div></li>
    </ul>
</div>
<div class="manage-content">
	<div class="top_search">
    	<form name="" action="<?php echo PATH.$pag_atual."/1/" ?>" method="post">
<label>date/location/venue: </label>
        <input type="text" name="txt_search" class="txt" value="<?php echo $txt_search!=""?html_entity_decode($txt_search):""; ?>" />
        <input type="submit" value="Filter" class="btn"/>
</form>
    </div>
    <div class="top-titulo">Past gigs<br /><img src="<?php echo PATH ?>_images/manage/hr.jpg" /></div>
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
	?>
    <ul class="span">
    <?php
	foreach($cols as $k=>$v){ 
	$k2=explode("{", $v);
	$c = $k2[0];
	
	$y=explode("{", $k);
	$w = substr($y[1], 0, strlen($y[1])-1);
	
	switch($c){
	case "id":
	$fetch_atual = sprintf('%04d', html_entity_decode($SQL_Q["id"]));
	break;
	case "dt_cad":
	$fetch_atual = html_entity_decode($SQL_Q["dt_cad2"]);
	break;
	case "date":
	$fetch_atual = html_entity_decode($SQL_Q["date2"])." ".html_entity_decode($SQL_Q["hour_type"]);
	break;
	case "status":
	if(html_entity_decode($SQL_Q["status"]) == "on"){
	$fetch_atual = "ONLINE";
	}else{
	$fetch_atual = "OFFLINE";	
	}
	break;
	case "clicks":
	$fetch_atual = sprintf('%04d', html_entity_decode($SQL_Q["clicks"]));
	break;
	case "location":
	$fetch_atual = "<img class='flags_country' src='".PATH."_images/flags_gif/".convertem(html_entity_decode($SQL_Q["country"]), "0").".gif' /> ".html_entity_decode($SQL_Q["location"]);
	break;
	case "value_ticket":
	$moeda = html_entity_decode($SQL_Q["moeda"]);
	switch($moeda){
	case "REAL":
	$moeda = "R$";
	break;
	case "DOLAR":
	$moeda = "USD";
	break;
	case "EURO":
	$moeda = "&#8364;";
	break;
	default:
	$moeda = "";
	break;
	}
	$value_ticket = number_format(html_entity_decode($SQL_Q["value_ticket"]), 2, ',', '.');
	if($value_ticket == "0,00") {$value_ticket = "FREE"; }else{$value_ticket=$moeda.$value_ticket;}

	$fetch_atual = $value_ticket;
	break;
	default:
	$fetch_atual = html_entity_decode($SQL_Q[$c]);
	break;
	}
	if($fetch_atual == "") $fetch_atual = "&nbsp";
	?>
    <li class="w<?php echo $w; ?>"><span><?php echo $fetch_atual; ?></span></li>
    <?php
	}
	?>
    <li class="w200"><span class="l"><a href="<?php echo PATH ?>manage/eventos-tab_adicionar/edit/<?php echo $SQL_Q["id"]?>">EDIT</a> | <?php if($SQL_Q["status"]=="on"){?><a href="<?php echo PATH ?>manage/exec/eventos-set-stats/<?php echo $SQL_Q["id"]?>/off/">OFFLINE</a><?php }else{ ?><a href="<?php echo PATH ?>manage/exec/eventos-set-stats/<?php echo $SQL_Q["id"]?>/on/">ONLINE</a><?php } ?> | <a href="<?php echo PATH ?>manage/exec/delete-eventos-tab_one/<?php echo $SQL_Q["id"]?>">DELETE</a></span></li>
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
<div class="manage_btn_adicionar"><a href="<?php echo PATH ?>manage/eventos-tab_adicionar/"><img src="<?php echo PATH ?>_images/manage/btn-adicionar.jpg" class="manage_btn_adicionar" /></a></div>
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