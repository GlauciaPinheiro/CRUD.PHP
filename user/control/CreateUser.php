<?php
include('../../conn.php');

$email = $_POST['email'];
$senha = $_POST['senha'];

$createUser = $pdo->prepare('INSERT INTO usuarios (email, senha) VALUES (:email, :senha)');
$createUser->execute(array(':email' => $email, ':senha' => $senha));

if($createUser == true ){
    echo '<script>alert("Usuario Criado Faça Login para entrar");
    window.location.href="../../index.php";
    </script>';
}

?>