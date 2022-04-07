<?php 
$impressum = query("tb_sys_informacoes", "texto", "WHERE titulo = 'impressum'");
$impressum_s = query("tb_sys_informacoes", "texto", "WHERE titulo = 'status_impressum'"); 
if($impressum_s == "OFF"){
	header("Location: ".PATH."home/");
}

?>
<div class="box_content_middle">
    <label class="title"><h2>Impressum</h2></label>
    <br clear="all" />
    <div class="content_texts_middle">
    <?php echo $impressum; ?>
    </div>
 
 </div>

