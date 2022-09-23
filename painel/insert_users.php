<?php 

include 'conexao/conexao.php';



$password = $_POST['password'];
$mail = $_POST['mail'];
$nivel = $_POST['level'];

$sql = "SELECT * FROM usuario WHERE mail = '$mail'";
$search = mysqli_query($conexao,$sql);

$total = mysqli_num_rows($search);

if($total > 0) {
    header('Location: ../index.php?msg=3');
}else{
    $sql = "INSERT INTO usuario (mail, password, id_user_nivel) VALUES('$mail',sha1('$password'),$nivel)";
    $insert = mysqli_query($conexao, $sql);

    header('Locatiom: ../index.php?msg=1');
}

?>