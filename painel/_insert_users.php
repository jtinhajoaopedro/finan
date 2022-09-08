<?php
// criptografia de senha usando php

    include './conexao/conexao.php';

    $mail = $_POST['mail'];
    $password = $_POST['password'];
    $nivel = 3;

    $sql = "SELECT * FROM usuario where mail = '$mail'";
    $search = mysqli_query($conexao,$sql);

    $total = mysqli_num_rows($search);

    if($total > 0){
        header('Location: ../index.php?msg=3');
    }else {
        $sql = "INSERT INTO usuario(mail,password,id_user_nivel)
        values ('$mail', sha1('$password'),$nivel)";
        $insert = mysqli_query($conexao, $sql);
        
        header('Location: forms_user.php?msg=1');
    }

?>