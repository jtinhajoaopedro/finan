<?php
session_start();
include './painel/conexao/conexao.php';
include './painel/script/password.php';

$mail = $_POST['mail'];
$password = $_POST['password'];

$sql = "SELECT * FROM usuario WHERE mail = '$mail'";
$search = mysqli_query($conexao,$sql);
$array = mysqli_fetch_array($search);

$passwordBase = $array['password'];

$passwordEnc = sha1($password);

if($passwordEnc == $passwordBase){

    $_SESSION['mailx'] = $mail;
    header('Location: ./painel/index.php');
}else{
    header('Location: index.php?msg=2');
}


?>