<?php
if($_POST["txt_search"] != ""){
$txt_search = htmlentities($_POST["txt_search"]);
$filter = "(a.t_titulo LIKE '%".$txt_search."%' OR a.t_content)";	
}elseif($_GET["txt_search"] != ""){
$txt_search = htmlentities($_GET["txt_search"]);
$filter = "(a.t_titulo LIKE '%".$txt_search."%' OR a.t_content)";	
}else{
$filter = "1=1";	
}

//TABELA E COLUNAS
$tabela = "tb_posts a LEFT JOIN tb_users b ON a.id_user = b.id";
$cols = array('ID{20}'=>'id{a}', 'Title{250}'=>'t_titulo{a}', 'Member{100}'=>'t_name{b}', 'Clicks{50}'=>'clicks{a}', 'Status{75}'=>'status{a}', 'Date{150}'=>'dt_cad{a}');

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
$SQL = "SELECT $columns FROM $tabela WHERE type = 'press' AND $filter ORDER BY a.dt_cad DESC";
$SQL = mysqli_query($connect, $SQL) or die(mysqli_error($connect));
$quantreg = mysqli_num_rows($SQL);
$SQL_PAG = "SELECT DATE_FORMAT(a.`dt_cad`, '%d/%m/%Y %Hh%im') as `dt_cad2`, $columns FROM $tabela WHERE type = 'press' AND $filter ORDER BY a.dt_cad DESC LIMIT $inicial,$numreg";
$SQL_PAG = mysqli_query($connect, $SQL_PAG) or die(mysqli_error($connect));
$quant_pg = ceil($quantreg/$numreg)-1;
$quant_pg++;

$quant_pag = $quant_pg; //Número de páginas

$n_links_show = 7; //Número de links por loop antes/depois.. Ex.: (1... 4 5 6 [7] 8 9 10 ...50)

?>
<div class="manage-content-menu">
	<ul>
        <li class="current"><a href="<?php echo PATH.$pag_atual ?>">BLOG</a><div class="right">&nbsp;</div></li>
    </ul>
</div>
<div class="manage-content">
	<div class="top_search">
    	<form name="" action="<?php echo PATH.$pag_atual."/1/" ?>" method="post">
<label>title/content: </label>
        <input type="text" name="txt_search" class="txt" value="<?php echo $txt_search!=""?html_entity_decode($txt_search):""; ?>" />
        <input type="submit" value="Filter" class="btn"/>
</form>
    </div>
    <div class="top-titulo">Blog<br /><img src="<?php echo PATH ?>_images/manage/hr.jpg" /></div>
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
	case "status":
	if(html_entity_decode($SQL_Q["status"]) == "on"){
	$fetch_atual = "<span style='color:#009900;'>ONLINE</span>";
	}elseif(html_entity_decode($SQL_Q["status"]) == "off"){
	$fetch_atual = "<span style='color:#990000;'>OFFLINE</span>";	
	}else{
	$fetch_atual = "<span style='color:#000099;'>TEST</span>";	
	}
	break;
	case "clicks":
	$fetch_atual = sprintf('%04d', html_entity_decode($SQL_Q["clicks"]));
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
    <li class="w150"><span class="l"><a href="<?php echo PATH ?>manage/blog-tab_adicionar/edit/<?php echo $SQL_Q["id"]?>">EDIT</a> | <?php if($SQL_Q["status"]=="on"){?><a href="<?php echo PATH ?>manage/exec/blog-set-stats/<?php echo $SQL_Q["id"]; ?>">OFFLINE</a><?php }else{ ?><a href="<?php echo PATH ?>manage/exec/blog-set-stats/<?php echo $SQL_Q["id"]?>">ONLINE</a><?php } ?> | <a href="<?php echo PATH ?>manage/exec/delete-blog-tab_one/<?php echo $SQL_Q["id"]?>">DELETE</a></span></li>
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
<div class="manage_btn_adicionar"><a href="<?php echo PATH ?>manage/blog-tab_adicionar/"><img src="<?php echo PATH ?>_images/manage/btn-adicionar.jpg" class="manage_btn_adicionar" /></a></div>
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