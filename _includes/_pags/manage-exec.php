<div class="content_all_2" style="padding:15px;">
<?php
$req = $_GET["c"];
$id = $_GET["d"];
$e = $_GET["e"];
echo $req;
if($req == "banda-tab_two-set-stats"){
if($id != ""){
$status = query("tb_discografia", "status", "WHERE id = $id");
}
$status = $status=="on"?"off":"on";
$SQL = "UPDATE tb_discografia SET status = '$status' WHERE id = $id";
$SQL = mysqli_query($connect, $SQL) or die(mysqli_error($connect));

call_notice("", "Status updated!", "1");
header("Location: ".$_SESSION["nav_2"]);
}elseif($req == "blog-set-stats"){
if($id != ""){
$status = query("tb_posts", "status", "WHERE id = $id");
}
$status = $status=="on"?"off":"on";
$SQL = "UPDATE tb_posts SET status = '$status' WHERE id = $id";
$SQL = mysqli_query($connect, $SQL) or die(mysqli_error($connect));

call_notice("", "Status updated!", "1");
header("Location: ".$_SESSION["nav_2"]);

}elseif($req == "delete-materias-tab_one" or $req == "delete-blog-tab_one"){
mysqli_query($connect, "DELETE FROM tb_posts WHERE id = $id");

call_notice("", "Post deleted!", "1");
header("Location: ".$_SESSION["nav_2"]);
}elseif($req == "delete-fotos-tab_one"){
mysqli_query($connect, "DELETE FROM tb_albuns WHERE id = $id");
mysqli_query($connect, "DELETE FROM tb_fotos WHERE id_album = $id");

call_notice("", "Album deleted!", "1");
header("Location: ".$_SESSION["nav_2"]);
}elseif($req == "delete-votacao-tab_one"){

mysqli_query($connect, "DELETE FROM tb_votacao WHERE id = $id");
call_notice("", "Item deleted!", "1");
header("Location: ".$_SESSION["nav_2"]);
}elseif($req == "delete-loja-tab_one"){
mysqli_query($connect, "DELETE FROM tb_store_produtos WHERE id = $id");
mysqli_query($connect, "DELETE FROM tb_store_produtos_fotos WHERE id_produto = $id");

call_notice("", "Product deleted!", "1");
header("Location: ".$_SESSION["nav_2"]);
}elseif($req == "newsletter-delete"){
mysqli_query($connect, "DELETE FROM tb_newsletter WHERE id = $id");

call_notice("", "E-mail apagado com sucesso!", "1");
header("Location: ".$_SESSION["nav_2"]);
}elseif($req == "user-signup-delete"){
mysqli_query($connect, "DELETE FROM tb_signup WHERE id = $id");

call_notice("", "E-mail deleted!", "1");
header("Location: ".$_SESSION["nav_2"]);
}elseif($req == "delete-order"){
	$SQL = "DELETE FROM tb_order WHERE id = $id";
	mysqli_query($connect, $SQL);
	call_notice("", "Item deleted", "1");
	header("Location: ".PATH."manage/loja-tab_two");
}elseif($req == "delete-materia-tab-two"){
	$SQL = "DELETE FROM tb_posts WHERE id = $id";
	mysqli_query($connect, $SQL);
	call_notice("", "Item deleted", "1");
	header("Location: ".PATH."manage/materias-tab_two");
}elseif($req == "materia-offline-two" || $req == "materia-online-two"){
	
if($req=="materia-online-two"){
	$status = "on";
}else{
	$status = "off";
}
	
$SQL = "UPDATE tb_posts SET status = '$status' WHERE id = $id";
echo $SQL;
$SQL = mysqli_query($connect, $SQL) or die(mysqli_error($connect));

call_notice("", "Status updated!", "1");
header("Location: ".$_SESSION["nav_2"]);
}elseif($req == "delete-eventos-tab_one"){
mysqli_query($connect, "DELETE FROM tb_events WHERE id = $id");

call_notice("", "Event deleted!", "1");
header("Location: ".$_SESSION["nav_2"]);
}elseif($req == "eventos-set-stats"){
	
$SQL = "UPDATE tb_events SET status = '$e' WHERE id = $id";
$SQL = mysqli_query($connect, $SQL) or die(mysqli_error($connect));

call_notice("", "Status updated!", "1");
header("Location: ".$_SESSION["nav_2"]);
}elseif($req == "fotos-tab_two-set-stats"){
	
$SQL = "UPDATE tb_albuns SET status = '$e' WHERE id = $id";
$SQL = mysqli_query($connect, $SQL) or die(mysqli_error($connect));

call_notice("", "Status updated!", "1");
header("Location: ".$_SESSION["nav_2"]);
}

elseif($req == "video-tab_two-set-stats"){
	
$SQL = "UPDATE tb_videos SET status = '$e' WHERE id = $id";
$SQL = mysqli_query($connect, $SQL) or die(mysqli_error($connect));

call_notice("", "Status updated!", "1");
header("Location: ".$_SESSION["nav_2"]);
}elseif($req == "delete-videos-tab_one"){
	$SQL = "DELETE FROM tb_videos WHERE id = $id";
	mysqli_query($connect, $SQL);
	call_notice("", "Video deleted sucessfully", "1");
	header("Location: ".PATH."manage/videos-tab_one");
}elseif($req == "settings-three-delete"){
	$SQL = "DELETE FROM tb_users WHERE id = $id";
	mysqli_query($connect, $SQL) or die(mysqli_error($connect));
	call_notice("", "Administrator deleted sucessfully", "1");
	header("Location: ".PATH."manage/settings-tab_three");
}elseif($req == "archive-order"){
	
$SQL = "UPDATE tb_order SET archived = 'Y' WHERE id = $id";
$SQL = mysqli_query($connect, $SQL) or die(mysqli_error($connect));

call_notice("", "Status updated!", "1");
header("Location: ".$_SESSION["nav_2"]);
}
?>
</div>

