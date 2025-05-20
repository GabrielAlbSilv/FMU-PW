<?php
include_once "conexao.php";

if($_SERVER['REQUEST_METHOD']=='POST') {
    //$_POST["exemplo@gmail.com","exemplo","121"]
    //$_POST['email']  email é o name do campo do 
    //formulário do html
    $email=$_POST['email'];
    $usuario=$_POST['usuario'];
    //trim apaga espaçõs antes e depois
    $senha=trim($_POST['senha']);
    //criptografando a senha
    $hash = trim(password_hash($senha, PASSWORD_DEFAULT));

    $insert=$con->prepare('INSERT INTO usuarios (email,usuario,senha) VALUES (:email, :usuario, :senha)');
    $insert->bindParam('email',$email);
    $insert->bindParam('usuario',$usuario);
    $insert->bindParam('senha',$hash);

    //executar o insert
    if($insert->execute()){
        
        header('location:index.html');
    }
    else {
        header('location:index.html');
    }
}
?>