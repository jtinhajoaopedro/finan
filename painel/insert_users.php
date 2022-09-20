<?php 

include './conexao/conexao.php';

$mail = $_POST['mail'];
$password = $_POST['password'];
$nivel = 3;

$sql = "SELECT * FROM usuario WHERE mail = '$mail'";
$search = mysqli_query($conexao,$sql);

$total = mysqli_num_rows($search);

if($total > 0) {
    header('Location: ../index.php?msh=3');
}else{
    $sql "INSERT INTO usuario (mail, password,id_user_nivel) VALUES('$mail',sha1('$password),$nivel)";
    $insert = mysqli_query($conexao,$sql);

    header('Locatiom: ../index.php?msg=1');
}

?>