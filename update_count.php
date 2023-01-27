<?php
include("connexion.php");
$type=$_POST['type'];
$id=$_POST['id'];
if($type=='like'){
	$sql="UPDATE publication SET like_count=like_count+1 WHERE id=$id";
}else{
	$sql="UPDATE publication SET dislike_count=dislike_count+1 WHERE id=$id";
}
$res=mysqli_query($conn,$sql);
?>