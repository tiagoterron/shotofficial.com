<?php
// ideally one day this can do more than one image... 
// they would be stacked up to crop all at once in 
// Impromptu.. thus returning an array
function sanitize($texto) {
		$substituir = array(
		'/á/' => 'a', '/ã/' => 'a', '/â/' => 'a', '/à/' => 'A', '/Á/' => 'A', '/Ã/' => 'A', '/Â/' => 'A', '/À/' => 'A',
		'/é/' => 'e', '/ê/' => 'e', '/É/' => 'E', '/Ê/' => 'E',
		'/í/' => 'i', '/î/' => 'i', '/Í/' => 'I', '/Î/' => 'I',
		'/ó/' => 'o', '/õ/' => 'o', '/ô/' => 'o', '/Ó/' => 'O', '/Õ/' => 'O', '/Ô/' => 'O',
		'/ú/' => 'u', '/û/' => 'u', '/Ú/' => 'u', '/Û/' => 'U',
		'/ç/' => 'c', '/Ç/' => 'C', '/ /' => '-', 
		);
		$texto = preg_replace(array_keys($substituir), array_values($substituir), $texto);
		return strtolower(utf8_decode(trim($texto)));
}
define("UPLOAD_PATH", ''); // CHANGE THIS FOR YOUR NEEDS!

/*chdir("../");*/
chdir("../../_images/_uploads");

echo "<pre>";
print_r($_POST);
echo "</pre>";

foreach($_POST['imgcrop'] as $k => $v) {

	$targetPath = $v['folder'] . '/';
	$targetPath = "";
	$targetFile =  str_replace('//','/',$targetPath) .preg_replace("/\./", "", $_SERVER['REMOTE_ADDR'])."-".sanitize($v['name']);
	$targetFile2 =  str_replace('//','/',$targetPath) ."800px_".preg_replace("/\./", "", $_SERVER['REMOTE_ADDR'])."-".sanitize($v['name']);
	$ext = explode (".",$v['name']);
	$ext = strtolower(end($ext));
	
	switch($ext){
		case "gif":
			$src_img = imagecreatefromgif("../../_images/_uploads/".$targetFile);
			$src_img60 = imagecreatefromgif("../../_images/_uploads/".$targetFile);
			break;
		case "png":
			$src_img = imagecreatefrompng("../../_images/_uploads/".$targetFile);
			$src_img60 = imagecreatefrompng("../../_images/_uploads/".$targetFile);
			break;
		default:
			$src_img = imagecreatefromjpeg("../../_images/_uploads/".$targetFile);
			$src_img60 = imagecreatefromjpeg("../../_images/_uploads/".$targetFile);
			$src_img_thumb = imagecreatefromjpeg("../../_images/_uploads/".$targetFile);
	}
	
	
	$x = imagesx($src_img60);
	$y = imagesy($src_img60);
	
	$altura60 = $y/$x*100;
	$dst_img_thumb60 = imagecreatetruecolor(100, $altura60);
	
	$altura2 = $v['h']/$v['w']*60;
	
	$dst_img = imagecreatetruecolor($v['w'], $v['h']);
	$altura = $v['h']/$v['w']*300;
	$dst_img_thumb = imagecreatetruecolor(300, $altura);
	
	$altura2 = $v['h']/$v['w']*1000;
	$dst_img_800 = imagecreatetruecolor(1000, $altura2);
	
	imagecopyresampled($dst_img,$src_img,0,0,$v['x'], $v['y'], $v['w'], $v['h'], $v['w'], $v['h']);
	imagecopyresampled($dst_img_thumb60,$src_img60,0,0,$v['x'], $v['y'], 100, $altura60, $v['w'], $v['h']);
	imagecopyresampled($dst_img_thumb,$src_img,0,0,$v['x'], $v['y'], 300, $altura, $v['w'], $v['h']);
	imagecopyresampled($dst_img_800,$src_img,0,0,$v['x'], $v['y'], 1000, $altura2, $v['w'], $v['h']);
	
	switch($ext){
		case "gif":
			imagegif($dst_img,"../../_images/_uploads/"."min_".$targetFile,100); 
			break;
		case "png":
			imagepng($dst_img,"../../_images/_uploads/"."min_".$targetFile,100); 
			break;
		default:
			imagejpeg($dst_img,"../../_images/_uploads/"."min_".$targetFile,100); 
			imagejpeg($dst_img_thumb,"../../_images/_uploads/_thumbs/"."min_".$targetFile,80); 
			imagejpeg($dst_img_800,"../../_images/_uploads/_thumbs/"."min_".$targetFile2,80); 
			imagejpeg($dst_img_thumb60,"../../_images/_uploads/_thumbs/"."60_min_".$targetFile2,80); 
	}
	
	
	imagedestroy($dst_img); 
	imagedestroy($src_img);

}

echo "1";
?>