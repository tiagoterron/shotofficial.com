<div class="manage-content-menu">
	<ul>
        <li><a href="<?php echo PATH ?>manage/newsletter-tab_two/">All</a><div class="right">&nbsp;</div></li>
        <li class="current"><a href="<?php echo PATH ?>manage/newsletter-tab_three/">Send e-mail</a><div class="right">&nbsp;</div></li>
    </ul>
</div>
<div class="manage-content">
    <div class="top-titulo">SEND E-MAIL<br /><img src="<?php echo PATH ?>_images/manage/hr.jpg" /></div>
<div class="both"></div>
	<form name="form_manage_adicionar" id="form_manage_adicionar" action="<?php echo PATH ?>manage/sub-form/" method="post">
    <input type="hidden" name="req" value="manage/newsletter-tab_three" />
<div class="manage_content">
    <label class="form-lab2 w150">Subject:</label>
    <input type="text" name="t_titulo" class="form-txt2 w500" value="">
    <div class="both"></div>
    <label class="form-lab2 w150">Message:</label>
    <textarea name="t_texto" class="form-txtarea w500 h100"></textarea>
    <br clear="all" />
    <label class="form-lab2 w150">Send to:</label>
    <input type="radio" class="form-checkbox1" id="id_to_1" value="A" checked="checked" name="t_to" onclick="change_list_emails(this)" /><label for="id_to_1" class="form-checkbox">ALL</label>
    <input type="radio" class="form-checkbox1" id="id_to_2" value="S" name="t_to" onclick="change_list_emails(this)" /><label for="id_to_2" class="form-checkbox">SELECTED</label>
    <div class="both"></div>
    <label class="form-lab2 w150">&nbsp;</label>
    <?php
	$SQL_EMAILS = "SELECT * FROM tb_newsletter WHERE status = 'Y' ORDER BY t_name";

	$SQL_EMAILS = mysqli_query($connect, $SQL_EMAILS) or die(mysqli_error($connect));
	//$SQL_EMAILS2 = "SELECT * FROM tb_newsletter a ORDER BY (SELECT COUNT(*) as n_v FROM tb_votacao_controle WHERE id_banda = a.id) DESC, a.nome LIMIT 18";
	//$SQL_EMAILS2 = mysqli_query($connect, $SQL_EMAILS);
	?>
    <style type="text/css">
    div.list_emails{
	border:0px solid black;
	width:600px;
	height:300px;
	overflow:auto;
	display:none;
	}
	div.list_emails label{
	font-size:13px !important;
	color:#666666 !important;
	}
    </style>
    
    <div class="list_emails" id="list_emails">
    	<?php
		while($SQL_EMAILS_Q = mysql_fetch_assoc($SQL_EMAILS)){
			$t_id = html_entity_decode($SQL_EMAILS_Q["id"]);
			$t_nome = html_entity_decode($SQL_EMAILS_Q["t_name"]);
			$t_email = html_entity_decode($SQL_EMAILS_Q["t_email"]);
		?>
    	<input type="checkbox" class="form-checkbox1" id="to_<?php echo $t_id; ?>" value="<?php echo $t_id."|".$t_nome."|".$t_email; ?>"name="to[]" checked="checked" /><label for="to_<?php echo $t_id; ?>" class="form-checkbox"><?php echo $t_nome; ?> [<?php echo $t_email ?>]</label>
        <div class="both"></div>
        <?php
		}
		?>
    </div>
    <div class="both"></div>
    <label class="form-lab2 w150">&nbsp;</label>
    <input type="image" src="<?php echo PATH ?>_images/btn_save.jpg" class="manage-btn-save" />
    <br clear="all" />
    </div>
</form>
</div>
<div class="both"></div>
</div>