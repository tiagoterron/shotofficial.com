<?php






function site_online($nada){

	$sys_config = array();

	$query = "select * from tbl_configs";

	$query = mysqli_query($connect, $query)or die(mysqli_error($connect));

	while($dados = mysql_fetch_array($query)){

		

		if($dados['valor'] != 's' && $dados['nome'] == 'online'){

			echo "

			<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Transitional//EN\" \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd\">\n

			<html xmlns=\"http://www.w3.org/1999/xhtml\">\n

			<head>\n

			<meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />\n

			<style>\n

				*{ margin:0; padding:0; border:0; font-family: Verdana, Geneva, sans-serif; font-size:12px}\n

				.block{position: absolute;width:400px; margin-left: -200px; left:50%; height: 50px; line-height:50px; top: 50%; margin-top: -25px;text-align: center}\n

			</style>\n

			<title></title>\n

			</head>\n

			<body>\n

			<div class=\"block\">Temporariamente indisponível.</div>\n

			</body>\n

			</html>";

			exit;

		} else {

			$sys_config[$dados['nome']] = utf8_encode($dados['valor']);

		}

	}

	return $sys_config;

}



function inserir_banco($info,$table){

	$i = 1;

	foreach($info as $key=>$value){

		if($key == 'date' || $key == 'data' || $key == 'data_inicio' || $key == 'data_fim' || $key == 'entrada' || $key == 'saida' || $key == 'nascimento'){

			$exp_data = explode("/",$value);

			$mes_data = $exp_data[1];

			$ano_data = $exp_data[2];

			$dia_data = $exp_data[0];

			$values .= "'".$ano_data.'-'.$mes_data.'-'.$dia_data."'";

		} else if($key == 'image' || $key == 'thumb_active' || $key == 'thumb_inactive'){

			$values .= "''";

		} else {

			$values .= "'".addslashes(utf8_decode($value))."'"; 

		}

		$fields .= $key; 

		

		if($i < sizeof($info)){

			$fields .= ","; 

			$values .= ",";

		}

		$i++;

	}

	

	$query = "insert into ".$table." (".$fields.") values (".$values.")";

	if(mysqli_query($connect, $query)or die($query. " |inserir| ".mysql_error())){

		return mysql_insert_id();

	}

}

function alterar_banco($info,$table){

	$i = 1;

	foreach($info as $key=>$value){

		if($key != 'id'){

			if($key == 'date' || $key == 'data' || $key == 'data_inicio' || $key == 'data_fim' || $key == 'entrada' || $key == 'saida' || $key == 'nascimento'){

				$exp_data = explode("/",$value);

				$mes_data = $exp_data[1];

				$ano_data = $exp_data[2];

				$dia_data = $exp_data[0];

				$value = $ano_data.'-'.$mes_data.'-'.$dia_data;

				

				$values .= $key." = '".$value."'";

			} else if($key == 'image' || $key == 'thumb_active' || $key == 'thumb_inactive'){

				$values .= $key." = ''";

			} else if($key == 'tipo'){

				//print_r($value);

				//exit;

				

				

				$val = "";

				for($is=0;$is<count($value);$is++){

					$val .= $value[$is];

					if($is < sizeof($value)){

						$val .= ";";

					}

				}

				

				$values .= $key." = '".$val."'";

			}else {

				$values .= $key." = '".addslashes(utf8_decode($value))."'";

			}

		

			if($i < sizeof($info)){

				$values .= ", ";

			}

		} else {

			$id = $value;

		}

		$i++;

	}

	

	$query = "update ".$table." set ".$values." where id = '".$id."' ";

	if(mysqli_query($connect, $query)or die($query." |alterar| ".mysql_error()) ){

		return $id;

	}

}





function mes_por_extenso($mes){

	switch ($mes){

		case 1: $mes = "Janeiro"; break;

		case 2: $mes = "Fevereiro"; break;

		case 3: $mes = "Mar&ccedil;o"; break;

		case 4: $mes = "Abril"; break;

		case 5: $mes = "Maio"; break;

		case 6: $mes = "Junho"; break;

		case 7: $mes = "Julho"; break;

		case 8: $mes = "Agosto"; break;

		case 9: $mes = "Setembro"; break;

		case 10: $mes = "Outubro"; break;

		case 11: $mes = "Novembro"; break;

		case 12: $mes = "Dezembro"; break;

	}

	return $mes;

}



function dia_da_semana($semana){

	switch ($semana) {

		case 0: $semana = "Domingo"; 		break;

		case 1: $semana = "Segunda"; 		break;

		case 2: $semana = "Ter&ccedil;a"; 	break;

		case 3: $semana = "Quarta"; 		break;

		case 4: $semana = "Quinta";			break;

		case 5: $semana = "Sexta"; 			break;

		case 6: $semana = "S&aacute;bado"; 	break;

	}

	return $semana;

}



function data_por_extenso($data){

	$exp_data = explode('-',$data);

	$dd = $exp_data[2];

	$mm = $exp_data[1];

	$yy = $exp_data[0];

	

	switch ($mm){

	case 1: $mes = "Janeiro"; break;

	case 2: $mes = "Fevereiro"; break;

	case 3: $mes = "Mar&ccedil;o"; break;

	case 4: $mes = "Abril"; break;

	case 5: $mes = "Maio"; break;

	case 6: $mes = "Junho"; break;

	case 7: $mes = "Julho"; break;

	case 8: $mes = "Agosto"; break;

	case 9: $mes = "Setembro"; break;

	case 10: $mes = "Outubro"; break;

	case 11: $mes = "Novembro"; break;

	case 12: $mes = "Dezembro"; break;

	}

	return $dd.' de '.$mes. ' de '.$yy;

}



function encode($string) {	

	$base="u1Astx8CxggMn6OpUt7WyjF4G2cZvb91klthf4RhSiRIIwH3o05mDrEaJdT0B/+0";	

	$b64_str = base64_encode($string);	

	$i=0;	

	$j=0;	

	while ($i < strlen($b64_str))	{	

		if ($i==64) break;

		$k[$i] = $b64_str[$i].$base[$i];	

		$encoded .= $k[$i];	

		$i++;	

	}	

	return $encoded;

}



function decode($string) {	

	$i=0;	

	$j=0;	

	while ($i < strlen($string))	{

		$k[$i] = $string[$j];		

		$decoded .= $k[$i];	

		$i++;	

		$j = $j+2;

	}

	$decoded = base64_decode($decoded);

	return $decoded;

}



function invertedata($string) {

	$e_data = explode('-',$string);

	return $e_data[2].'/'.$e_data[1].'/'.$e_data[0];

}



function desinvertedata($string) {

	$e_data = explode('/',$string);

	return $e_data[2].'-'.$e_data[1].'-'.$e_data[0];

}



function resumo($string,$chars) {

	if (strlen($string) > $chars) {

    	$var='0';

        while($var == '0'){

        	if( (substr($string,$chars,1)) == ' '){

            	$var='1';

            } else{

                $chars++;

            }  

        }

  	}

  	return substr($string,0,$chars);

}



function closetags ($html){

    preg_match_all ( "#<([a-z]+)( .*)?(?!/)>#iU", $html, $result );

    $openedtags = $result[1];



    preg_match_all ( "#</([a-z]+)>#iU", $html, $result );

    $closedtags = $result[1];

    $len_opened = count ( $openedtags );



    if( count ( $closedtags ) == $len_opened )    {

        return $html;

    }

    $openedtags = array_reverse ( $openedtags );



    for( $i = 0; $i < $len_opened; $i++ )    {

        if ( !in_array ( $openedtags[$i], $closedtags ) )        {

            $html .= "</" . $openedtags[$i] . ">";

        }  else  {

            unset ( $closedtags[array_search ( $openedtags[$i], $closedtags)] );

        }

    }

    return $html;

}

function sanitize($str, $enc = 'UTF-8'){

	$str = strtolower($str);

	$acentos = array(

	'a' => '/à|á|â|ã|ä|å/',

	'c' => '/ç/',

	'e' => '/è|é|ê|ë/',

	'i' => '/ì|í|î|ï/',

	'n' => '/ñ/',

	'o' => '/ò|ó|ô|õ|ö/',

	'u' => '/ù|ú|û|ü/',

	'y' => '/ý|ÿ/',

	'a.' => '/ª/',

	'o.' => '/º/',

	'-' => '/[^a-z,0-9,-]/',

	' ' => '/–/',

	'' => '/[^a-z,0-9,-]/'

	);

	return preg_replace($acentos, array_keys($acentos), htmlentities($str, ENT_NOQUOTES));

}





	

function excel($campos,$table,$destino){

	$export = mysqli_query($connect, "SELECT ".$campos." FROM  ".$table." order by id desc");

	$fields = mysql_num_fields($export);



	for ($i = 0; $i < $fields; $i++) {

		$header .= mysql_field_name($export, $i) . "\t";

	}



	while($row = mysql_fetch_row($export)) {

		$line = '';

		foreach($row as $value) {

			if ((!isset($value)) OR ($value == "")) {

				$value = "\t";

			} else {

				$value = str_replace('"', '""', $value);

				$value = '"' . $value . '"' . "\t";

			}

			$line .= $value;

		}

		$dados .= trim($line)."\n";

	}



	$dados= str_replace("\r","",$dados);



	if ($dados== "") {

		$dados = "\n Nenhum registro encontrado!\n";

	}



	header("Content-type: application/octet-stream");

	header("Content-Disposition: attachment; filename=".$destino.".xls");

	header("Pragma: no-cache");

	header("Expires: 0");

	print "$header\n$dados"; 

}



function excel2($labels,$campos,$tabela,$destino){

	set_time_limit(0);

	header("Content-type: application/msexcel");

	header("Content-Disposition: attachment; filename=".$destino.".xls");

	

	$query = "select id FROM ".$tabela." where news = 's' order by id desc";

	$result = mysqli_query($connect, $query) or die(mysqli_error($connect));

	$news = mysqli_num_rows($result);

	

	$query = "select id FROM ".$tabela." where remind = 's' order by id desc";

	$result = mysqli_query($connect, $query) or die(mysqli_error($connect));

	$remind = mysqli_num_rows($result);

	

	$query = "select id FROM ".$tabela." where descontos = 's' order by id desc";

	$result = mysqli_query($connect, $query) or die(mysqli_error($connect));

	$descontos = mysqli_num_rows($result);

	

	$corpo = "

	<table>

	

	<tr>

		<td colspan='4'><b>Newsletter:</b></td>

		<td >".($news)."</td>

	</tr>

	<tr>

		<td colspan='4'><b>Remind:</b></td>

		<td >".($remind)."</td>

	</tr>

	<tr>

		<td colspan='4'><b>Descontos:</b></td>

		<td >".($descontos)."</td>

	</tr>

	<tr>

		<td colspan='4'><b>Total de cadastrados:</b></td>

		<td >".($news + $remind + $descontos)."</td>

	</tr>

	

	<tr><td colspan='5' height='20'></td></tr>

	<tr>

	

	

	";

	

	$label = explode(",",$labels);

	$campo = explode(",",$campos);

	

	for($i=0; $i<count($label); $i++){

		$corpo .= "<td><b>".ucfirst($label[$i])."</b></td>";

	}

	$corpo .= "</tr>";

	

	$query = "SELECT ".$campos." FROM  ".$tabela." order by id desc";

	$result = mysqli_query($connect, $query) or die(mysqli_error($connect));



	while ($dados = mysql_fetch_array($result)){

		$corpo .= "<tr>";

		for($i=0; $i<count($campo); $i++){

			if($dados[$campo[$i]] =='s'){

				$corpo .= "<td align='center'><img src='http://sitesemproducao.com/joao/hsm/eventos/admin/images/tick-icon.png' /></td>";

			} else if($dados[$campo[$i]] =='n'){

				$corpo .= "<td align='center'><img src='http://sitesemproducao.com/joao/hsm/eventos/admin/images/no-tick-icon.png' /></td>";

			} else {

				$corpo .= "<td>".$dados[$campo[$i]]."</td>";

			}

		}

		$corpo .= "</tr>";

	}

	

	$corpo .= "</table>";

	

	print "$header\n$corpo"; 

}



function iframex($off){

	return "<iframe id='iframex' name='iframex'></iframe>";

}



function scriptinput($campo,$valor){

	return "

		<script type='text/javascript'>

			function getgoinga(){

				parent.document.getElementById('".$campo."').style.display = 'none';

			}

	

			try{

				parent.document.getElementById('".$campo."').value = '".$valor."';

				setTimeout('getgoinga()',5000);

			} catch(err){ }

		</script>";

}



function scripthtml($div,$valor){

	return "

	<script type='text/javascript'>

		function sair(){

			//$('".$div."',  window.parent.document).fadeOut('slow');

			//parent.document.getElementById('".$div."').innerHTML = '';

		}



		try{

			parent.document.getElementById('".$div."').innerHTML = '".$valor."';

			$('login').parent().fadeOut('slow');

			setTimeout('sair()',5000);

			

		} catch(err){}

	</script>";

}



function opcmenu($opc_novo,$opc_ordem,$opc_salvar,$opc_editar,$opc_apagar){

	$html = "";

	if($opc_novo == 1){ 

		$html .= '

		<div style="float:left;margin-left:10px; line-height:16px; vertical-align:middle;">

			<a href="?acao=novo" style="text-decoration: none" title="Clique para incluir novo">

				<img src="images/icon_new.png"  style="float:left; margin: 0 5px" /> Inserir novo</a>

		</div>';

     }

	$html .= '<div style="float:right;margin-right:10px">';

	

	

	if($opc_salvar == 1){ 

		$html .= '

		<div style="line-height:16px; vertical-align:middle;  text-align:center ; float: right">

			<img src="images/icon_save.png" style="float:left; margin: 0 5px" /><em>Salvar</em></div>';

	}

	if($opc_editar == 1){ 

		$html .= '

		<div style="line-height:16px; vertical-align:middle;  text-align:center ; float: right">

			<img src="images/icon_edit.png" style="float:left; margin: 0 5px" /><em>Editar</em></div>';

	}

	if($opc_apagar == 1){

		$html .= '

		<div style="line-height:16px; vertical-align:middle;  text-align:center ; float: right">

			<img src="images/icon_delete.png" style="float:left; margin: 0 5px" /><em>Apagar</em></div>';

	}

	if($opc_ordem  == 1){ 

		$html .= '

		<div style="line-height:16px; vertical-align:middle;  text-align:center ; float: right">

			<img src="images/icon_up.png" style="float:left; margin: 0 2px 0 5px" />

			<img src="images/icon_down.png" style="float:left; margin: 0 5px 0 0px" /><em>Ordem</em></div>';

	}

	$html .= '</div>';

	

	return $html;

}



function opcmsg($sys_erro,$sys_msg){

	$html = "";

	switch($sys_msg){

		case 1:

			$sys_mens = 'Item deletado com sucesso.';

			break;

		case 2:

			$sys_mens = 'Item salvo com sucesso.';

			break;

		case 3:

			$sys_mens = 'Item atualizado com sucesso.';

			break;

	}



	if(!empty($sys_erro)){

		$html .= '<tr><td colspan="2" height="30" style="background:#FFCC99" valign="middle">&nbsp;<strong>'.$erro.'</strong></td></tr>

			<tr><td colspan="2" height="10" bgcolor="#FFFFFF" valign="middle"></td></tr>';

	} 



	if(!empty($sys_msg)){

		$html .= '

			<tr><td colspan="2" height="30" style="background:#B7FFCE" valign="middle">&nbsp;<strong>'.$sys_mens.'</strong></td></tr>

			<tr><td colspan="2" height="10" bgcolor="#FFFFFF" valign="middle"></td></tr>';

	}

	return $html;

}



function linkme($texto){

	$texto = str_replace("http://","",$texto);



    if(preg_match('@((www\.)[a-zA-Z0-9./?&_\-#=;%]+)@',$texto)){

		$texto=preg_replace('@((www\.)[a-zA-Z0-9./?&_\-#=;%]+)@', '<a href="http://$1">$1</a>', $texto);

   	}else if(preg_match('@((http://)[a-zA-Z0-9./?&_\-#=;%]+)@',$texto)){

        $texto=preg_replace('@((http://)[a-zA-Z0-9./?&_\-#=;%]+)@', '<a href="$1">$1</a>', $texto);

	}

	

	return $texto;

}



function twitter($url,$login,$senha,$texto){

	$title_orig = $titulo;

	$title_sanit = sanitize($title_orig);

	$title_post = substr($title_orig,0,120);



	$url_ipan = $url.'/'.$title_sanit.'/';

	$url_migreme = "http://migre.me/api.xml?url=".$url_ipan;



	$arquivo = file_get_contents($url_migreme);

	$xml = simplexml_load_string($arquivo);

	$url_final = $xml->migre;

		

	$msg = utf8_encode($title_post).": ".$url_final;



	$out = "POST http://twitter.com/statuses/update.json HTTP/1.1\r\n";

	$out .= "Host: twitter.com\r\n";



	$out .= "Authorization: Basic ".base64_encode ($login.':'.$senha)."\r\n";

	$out .= "Content-type: application/x-www-form-urlencoded\r\n";

	$out .= "Content-length: ".strlen ("status=$msg")."\r\n";

	$out .= "Connection: Close\r\n\r\n";

	$out .= "status=$msg";



	$fp = fsockopen ("twitter.com", 80);

	fwrite($fp, $out);

	fclose($fp);

}



function mime_type( $file ) {    

	$filetype = substr(strrchr( $file, '.' ), 1 );

	$mimetypes = array(

				"ez" => "application/andrew-inset",

				"atom" => "application/atom+xml",

				"hqx" => "application/mac-binhex40",

				"cpt" => "application/mac-compactpro",

				"doc" => "application/msword",

				"lha" => "application/octet-stream",

				"lzh" => "application/octet-stream",

				"exe" => "application/octet-stream",

				"so" => "application/octet-stream",

				"dms" => "application/octet-stream",

				"class" => "application/octet-stream",

				"bin" => "application/octet-stream",

				"dll" => "application/octet-stream",

				"oda" => "application/oda",

				"pdf" => "application/pdf",

				"ps" => "application/postscript",

				"eps" => "application/postscript",

				"ai" => "application/postscript",

				"smi" => "application/smil",

				"smil" => "application/smil",

				"mif" => "application/vnd.mif",

				"xls" => "application/vnd.ms-excel",

				"ppt" => "application/vnd.ms-powerpoint",

				"wbxml" => "application/vnd.wap.wbxml",

				"wmlc" => "application/vnd.wap.wmlc",

				"wmlsc" => "application/vnd.wap.wmlscriptc",

				"bcpio" => "application/x-bcpio",

				"vcd" => "application/x-cdlink",

				"pgn" => "application/x-chess-pgn",

				"cpio" => "application/x-cpio",

				"csh" => "application/x-csh",

				"dir" => "application/x-director",

				"dxr" => "application/x-director",

				"dcr" => "application/x-director",

				"dvi" => "application/x-dvi",

				"spl" => "application/x-futuresplash",

				"gtar" => "application/x-gtar",

				"gz" => "application/x-gzip",

				"hdf" => "application/x-hdf",

				"php" => "application/x-httpd-php",

				"phps" => "application/x-httpd-php-source",

				"js" => "application/x-javascript",

				"skm" => "application/x-koan",

				"skt" => "application/x-koan",

				"skp" => "application/x-koan",

				"skd" => "application/x-koan",

				"latex" => "application/x-latex",

				"cdf" => "application/x-netcdf",

				"nc" => "application/x-netcdf",

				"sh" => "application/x-sh",

				"shar" => "application/x-shar",

				"swf" => "application/x-shockwave-flash",

				"sit" => "application/x-stuffit",

				"sv4cpio" => "application/x-sv4cpio",

				"sv4crc" => "application/x-sv4crc",

				"tar" => "application/x-tar",

				"tcl" => "application/x-tcl",

				"tex" => "application/x-tex",

				"texi" => "application/x-texinfo",

				"texinfo" => "application/x-texinfo",

				"roff" => "application/x-troff",

				"t" => "application/x-troff",

				"tr" => "application/x-troff",

				"man" => "application/x-troff-man",

				"me" => "application/x-troff-me",

				"ms" => "application/x-troff-ms",

				"ustar" => "application/x-ustar",

				"src" => "application/x-wais-source",

				"xht" => "application/xhtml+xml",

				"xhtml" => "application/xhtml+xml",

				"zip" => "application/zip",

				"au" => "audio/basic",

				"snd" => "audio/basic",

				"midi" => "audio/midi",

				"kar" => "audio/midi",

				"mid" => "audio/midi",

				"mp3" => "audio/mpeg",

				"mp2" => "audio/mpeg",

				"mpga" => "audio/mpeg",

				"aifc" => "audio/x-aiff",

				"aif" => "audio/x-aiff",

				"aiff" => "audio/x-aiff",

				"m3u" => "audio/x-mpegurl",

				"rm" => "audio/x-pn-realaudio",

				"ram" => "audio/x-pn-realaudio",

				"rpm" => "audio/x-pn-realaudio-plugin",

				"ra" => "audio/x-realaudio",

				"wav" => "audio/x-wav",

				"pdb" => "chemical/x-pdb",

				"xyz" => "chemical/x-xyz",

				"bmp" => "image/bmp",

				"gif" => "image/gif",

				"ief" => "image/ief",

				"jpe" => "image/jpeg",

				"jpeg" => "image/jpeg",

				"jpg" => "image/jpeg",

				"png" => "image/png",

				"tif" => "image/tiff",

				"tiff" => "image/tiff",

				"djvu" => "image/vnd.djvu",

				"djv" => "image/vnd.djvu",

				"wbmp" => "image/vnd.wap.wbmp",

				"ras" => "image/x-cmu-raster",

				"pnm" => "image/x-portable-anymap",

				"pbm" => "image/x-portable-bitmap",

				"pgm" => "image/x-portable-graymap",

				"ppm" => "image/x-portable-pixmap",

				"rgb" => "image/x-rgb",

				"xbm" => "image/x-xbitmap",

				"xpm" => "image/x-xpixmap",

				"xwd" => "image/x-xwindowdump",

				"igs" => "model/iges",

				"iges" => "model/iges",

				"mesh" => "model/mesh",

				"silo" => "model/mesh",

				"msh" => "model/mesh",

				"vrml" => "model/vrml",

				"wrl" => "model/vrml",

				"css" => "text/css",

				"htm" => "text/html",

				"html" => "text/html",

				"asc" => "text/plain",

				"txt" => "text/plain",

				"rtx" => "text/richtext",

				"rtf" => "text/rtf",

				"sgml" => "text/sgml",

				"sgm" => "text/sgml",

				"tsv" => "text/tab-separated-values",

				"wml" => "text/vnd.wap.wml",

				"wmls" => "text/vnd.wap.wmlscript",

				"etx" => "text/x-setext",

				"xml" => "text/xml",

				"xsl" => "text/xml",

				"mpe" => "video/mpeg",

				"mpeg" => "video/mpeg",

				"mpg" => "video/mpeg",

				"mov" => "video/quicktime",

				"qt" => "video/quicktime",

				"mxu" => "video/vnd.mpegurl",

				"avi" => "video/x-msvideo",

				"movie" => "video/x-sgi-movie",

				"ice" => "x-conference/x-cooltalk",

				"mp4" => "video/mp4"

				 );



	return implode( '', array_keys( array_flip( $mimetypes ), $filetype ));

}



function seguranca($name){

	$dir = 'images/';

	if(is_dir($dir)) {

		if($handle = opendir($dir))	{

			while(($file = readdir($handle)) != false)	{

				if($file != '.' && $file != '..') {

					if( $file != $name)	{

						unlink($dir.$file);

					}

				}

			}

		}

	}	else {

		die("Erro ao abrir dir: $dir");

	}

       return 0;

}



function limpa($str){

		$var = preg_replace("/[ÀÁÂÃÄÅÆÇÈÉÊËÌÍÎÏÐÑÒÓÔÕÖØÙÚÛÜÝß,´`\"'¨~; : \/àáâãäåæçèéêëìíîïñòóôõöøùúûüýÿĀāĂăĄąĆćĈĉĊċČčĎďĐđĒēĔĕĖėĘęĚěĜĝĞğĠġĢģĤĥĦħĨĩĪīĬĭĮįİıĲĳĴĵĶķĹĺĻļĽľĿŀŁłŃńŅņŇňŉŌōŎŏŐőŒœŔŕŖŗŘřŚśŜŝŞşŠšŢţŤťŦŧŨũŪūŬŭŮůŰűŲųŴŵŶŷŸŹźŻżŽžſƒƠơƯưǍǎǏǐǑǒǓǔǕǖǗǘǙǚǛǜǺǻǼǽǾǿ ]*/","",$str);

		return strtolower($var);

}



function logme($usuario,$ip,$tabela,$pagina,$item,$acao){

	//date_default_timezone_set(getLocalTimezone());

	date_default_timezone_set('America/Sao_Paulo');

	

	$query = "insert into tbl_usuarios_log values(NULL,'".$usuario."','".$ip."','".$tabela."','".$pagina."','".$item."','".$acao."','".date('Y-m-d')."','".date('H:i:s')."')";

	$result = mysqli_query($connect, $query) or die(mysqli_error($connect));

}



function getLocalTimezone(){

    $iTime 		= time();

    $arr 		= localtime($iTime);

    $arr[5]    += 1900;

    $arr[4]++;

    $iTztime 	= gmmktime($arr[2], $arr[1], $arr[0], $arr[4], $arr[3], $arr[5], $arr[8]);

    $offset 	= doubleval(($iTztime-$iTime)/(60*60));

    $zonelist 	= array(

        'Kwajalein' 						=> -12.00,

        'Pacific/Midway' 					=> -11.00,

        'Pacific/Honolulu' 					=> -10.00,

        'America/Anchorage' 				=> -9.00,

        'America/Los_Angeles' 				=> -8.00,

        'America/Denver' 					=> -7.00,

        'America/Tegucigalpa' 				=> -6.00,

        'America/New_York' 					=> -5.00,

        'America/Caracas' 					=> -4.30,

        'America/Halifax' 					=> -4.00,

        'America/St_Johns'					=> -3.30,

        'America/Argentina/Buenos_Aires' 	=> -3.00,

        'America/Sao_Paulo' 				=> -3.00,

        'Atlantic/South_Georgia' 			=> -2.00,

        'Atlantic/Azores' 					=> -1.00,

        'Europe/Dublin' 					=> 0,

        'Europe/Belgrade' 					=> 1.00,

        'Europe/Minsk' 						=> 2.00,

        'Asia/Kuwait' 						=> 3.00,

        'Asia/Tehran' 						=> 3.30,

        'Asia/Muscat'						=> 4.00,

        'Asia/Yekaterinburg' 				=> 5.00,

        'Asia/Kolkata' 						=> 5.30,

        'Asia/Katmandu' 					=> 5.45,

        'Asia/Dhaka' 						=> 6.00,

        'Asia/Rangoon' 						=> 6.30,

        'Asia/Krasnoyarsk' 					=> 7.00,

        'Asia/Brunei' 						=> 8.00,

        'Asia/Seoul' 						=> 9.00,

        'Australia/Darwin' 					=> 9.30,

        'Australia/Canberra' 				=> 10.00,

        'Asia/Magadan' 						=> 11.00,

        'Pacific/Fiji' 						=> 12.00,

        'Pacific/Tongatapu' 				=> 13.00

    );

    $index = array_keys($zonelist, $offset);

    if(sizeof($index)!=1){

        return false;

	}

    return $index[0];

} 





?>