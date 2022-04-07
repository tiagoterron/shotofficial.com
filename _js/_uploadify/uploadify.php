<?php
/*
Uploadify v2.1.4
Release Date: November 8, 2010

Copyright (c) 2010 Ronnie Garcia, Travis Nickels

Permission is hereby granted, free of charge, to any person obtaining a copy
of this software and associated documentation files (the "Software"), to deal
in the Software without restriction, including without limitation the rights
to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
copies of the Software, and to permit persons to whom the Software is
furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in
all copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
THE SOFTWARE.
*/
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
if (!empty($_FILES)) {
	$tempFile = $_FILES['Filedata']['tmp_name'];
	$targetPath = "../../_images/_uploads/imgs/";
	$targetPath2 = $targetPath;
	$targetFile =  str_replace('//','/',$targetPath) . sanitize($_FILES['Filedata']['name']);
	$targetFile = str_replace(" ", "-", $targetFile);
	$nameFile = str_replace(" ", "-", sanitize($_FILES['Filedata']['name']));
	//$targetFile = htmlentities($targetFile);
	
	move_uploaded_file($tempFile,$targetFile);
	echo str_replace($_SERVER['DOCUMENT_ROOT'],'',$targetFile);
	
	$ext = explode (".",$nameFile);
	$ext = strtolower(end($ext));
	
	switch($ext){
		case "gif":
			$new_img = imagecreatefromgif($targetFile);
			break;
		case "png":
			$new_img = imagecreatefrompng($targetFile);
			break;
		default:
			$new_img = imagecreatefromjpeg($targetFile);
	}
	
	
	$x = imagesx($new_img);
	$y = imagesy($new_img);
	$altura = $y/$x*300;
	$dst_img_thumb = imagecreatetruecolor(300, $altura);
	$altura2 = $y/$x*800;
	$dst_img_800 = imagecreatetruecolor(800, $altura2);
	imagecopyresampled($dst_img_thumb,$new_img,0,0,0, 0, 300, $altura, $x, $y);
	imagecopyresampled($dst_img_800,$new_img,0,0,0, 0, 800, $altura2, $x, $y);
	
	imagejpeg($dst_img_thumb, $targetPath2."/_thumbs/min_$nameFile");
	imagejpeg($dst_img_800, $targetPath2."/_thumbs/$nameFile");
	
	// $fileTypes  = str_replace('*.','',$_REQUEST['fileext']);
	// $fileTypes  = str_replace(';','|',$fileTypes);
	// $typesArray = split('\|',$fileTypes);
	// $fileParts  = pathinfo($_FILES['Filedata']['name']);
	
	// if (in_array($fileParts['extension'],$typesArray)) {
		// Uncomment the following line if you want to make the directory if it doesn't exist
		// mkdir(str_replace('//','/',$targetPath), 0755, true);
	
	// } else {
	// 	echo 'Invalid file type.';
	// }
}
?>