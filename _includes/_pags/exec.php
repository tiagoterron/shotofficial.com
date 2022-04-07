<div class="content_all_2" style="padding:15px;">
<?php
$req = $_GET["b"];
$id = $_GET["c"];

if($req == "download-album-holocaust-riot"){
$SQL = "SELECT * FROM tb_discografia WHERE main = 'Y'";
$SQL = mysqli_query($connect, $SQL);
$SQL_Q = mysql_fetch_assoc($SQL);
$link_download = ent($SQL_Q["link_download"], "2");
if(!preg_match("/^http:\/\//", $link_download)){
$arquivo = $link_download;
}else{
$arquivo = "http://".$link_download;
}
mysqli_query($connect, "UPDATE tb_discografia SET n_downloads = (n_downloads+1) WHERE main = 'Y'");
if(isset($arquivo) && file_exists($arquivo)){ // faz o teste se a variavel não esta vazia e se o arquivo realmente existe
      switch(strtolower(substr(strrchr(basename($arquivo),"."),1))){ // verifica a extensão do arquivo para pegar o tipo
         case "pdf": $tipo="application/pdf"; break;
         case "exe": $tipo="application/octet-stream"; break;
         case "zip": $tipo="application/zip"; break;
         case "doc": $tipo="application/msword"; break;
         case "xls": $tipo="application/vnd.ms-excel"; break;
         case "ppt": $tipo="application/vnd.ms-powerpoint"; break;
         case "gif": $tipo="image/gif"; break;
         case "png": $tipo="image/png"; break;
         case "jpg": $tipo="image/jpg"; break;
         case "mp3": $tipo="audio/mpeg"; break;
		 case "rar": $tipo="audio/mpeg"; break;
         case "php": // deixar vazio por seurança
         case "htm": // deixar vazio por seurança
         case "html": // deixar vazio por seurança
      }

      header("Content-Type: ".$tipo); // informa o tipo do arquivo ao navegador
      header("Content-Length: ".filesize($arquivo)); // informa o tamanho do arquivo ao navegador
      header("Content-Disposition: attachment; filename=".basename($arquivo)); // informa ao navegador que é tipo anexo e faz abrir a janela de download, tambem informa o nome do arquivo
      readfile($arquivo); // lê o arquivo
	  //echo "<span>the download will star automaticaly. if it doesn't happen (<a href='$arquivo'>click here</a>)</span>";
	  exit;
   }
   

//header("Location: ".$_SESSION["nav_2"]);
}elseif($req == "request-download"){
$arquivo = "http://shotofficial.com/_download/S.H.O.T.%20-%20Silent%20Harm%20Over%20Time.mp3";

if(isset($arquivo) && file_exists($arquivo)){ // faz o teste se a variavel não esta vazia e se o arquivo realmente existe
      switch(strtolower(substr(strrchr(basename($arquivo),"."),1))){ // verifica a extensão do arquivo para pegar o tipo
         case "pdf": $tipo="application/pdf"; break;
         case "exe": $tipo="application/octet-stream"; break;
         case "zip": $tipo="application/zip"; break;
         case "doc": $tipo="application/msword"; break;
         case "xls": $tipo="application/vnd.ms-excel"; break;
         case "ppt": $tipo="application/vnd.ms-powerpoint"; break;
         case "gif": $tipo="image/gif"; break;
         case "png": $tipo="image/png"; break;
         case "jpg": $tipo="image/jpg"; break;
         case "mp3": $tipo="audio/mpeg"; break;
		 case "rar": $tipo="audio/mpeg"; break;
         case "php": // deixar vazio por seurança
         case "htm": // deixar vazio por seurança
         case "html": // deixar vazio por seurança
      }

      header("Content-Type: ".$tipo); // informa o tipo do arquivo ao navegador
      header("Content-Length: ".filesize($arquivo)); // informa o tamanho do arquivo ao navegador
      header("Content-Disposition: attachment; filename=".basename($arquivo)); // informa ao navegador que é tipo anexo e faz abrir a janela de download, tambem informa o nome do arquivo
      readfile($arquivo); // lê o arquivo
	  //echo "<span>the download will star automaticaly. if it doesn't happen (<a href='$arquivo'>click here</a>)</span>";
	  exit;
   }
   

//header("Location: ".$_SESSION["nav_2"]);
}elseif($req == "logout"){
	unset($_SESSION["admin_email"]);
	unset($_SESSION["admin_session"]);
	call_notice("", "logout success", "1");
	header("Location: ".PATH."login/");
}elseif($req == "user-logout"){
	$_SESSION["id_user_on"] = "";
	unset($_SESSION["id_user_on"]);
	unset($_SESSION["email_user_on"]);
	unset($_SESSION["name_user_on"]);
	call_notice("", "logout success", "1");
	header("Location: ".PATH."sign-in/");
}elseif($req == "update-shopping-cart"){
	foreach($_POST as $k => $v){
	if(preg_match("/quant_/", $k)){
	$quant_id = preg_replace("/quant_/", "", $k);
	if(!empty($_SESSION["id_user_on"])){
	$id_user = $_SESSION["id_user_on"];
	}else{
	$id_user = 0;
	}
	$SQL = "UPDATE tb_store_carrinho SET id_usuario = $id_user, quantidade = $v WHERE id = $quant_id";
	mysqli_query($connect, $SQL) or die(mysqli_error($connect)); 
	}
	}
	call_notice("", "shopping cart sucessfully updated ", "1");
	header("Location: ".PATH."shopping-cart/");
}elseif($req == "delete-item-shopping-cart"){
	$SQL = "DELETE FROM tb_store_carrinho WHERE id = $id";
	mysqli_query($connect, $SQL);
	call_notice("", "item deleted from shopping cart", "1");
	header("Location: ".PATH."shopping-cart/");
}
?>
</div>