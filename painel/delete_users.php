<?php 
include 'conexao/conexao.php';

$code = $_POST['code'];

$sql = "DELETE  FROM project where code = $code";
$delete = mysqli_query($conexao,$sql);

header('Location: project_details.php?code='.$code);
?>