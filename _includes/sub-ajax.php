<?php
include "../_config/connect.php";
include "../_functions/index.php";
?>
<style type="text/css">
body{background:#333333;font-size:13px;color:#333333;}
div.form{margin:25px;}
div.both{clear:both;}
p{line-height:15px;margin:5px;}
label.lab{float:left;width:200px;text-align:right;margin-right:15px;line-height:22px;}
div.div-txt{padding:5px;border:1px solid #999999;float:left;display:inline-block;}
div.div-txt input{border:0px;}
</style>
<?php
$req = $_GET["req"];
if($req == "sign-up"){
?>
<div class="form">
<p>Please write your informations for the delivery.</p>
<p>All the infos will be keeped on the sidged</p>
<br clear="all" />
<label class="lab">First name:</label>
<div class="div-txt">
	<input type="text" name="nome" class="txt" />
</div>
<div class="both"></div>
</div>
<?php
}
?>
