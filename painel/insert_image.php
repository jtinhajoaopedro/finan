<?php 
include 'conexao/conexao.php';
include 'script/password.php';

$id = $_POST['id'];

$image2 = $_FILES['image'];
$image = file_get_contents($_FILES['image']['tmp_name']);
$nameImage = md5($_FILES['image']['tmp_name']);
move_uploaded_file($image2['tmp_name'], "images/" . $nameImage .'.jpg');


$sql = "UPDATE usuario SET image = '$nameImage' where id = $id";
$insert = mysqli_query($conexao,$sql);


?>