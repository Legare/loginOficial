<?php
echo '<meta charset=UTF-8>';
include_once 'classes/Bcrypt.class';
include_once 'conexao/conecta.inc';
$email = $_POST['login'];
$senha = $_POST['senha'];
$nome =  $_POST['nome'];
$sexo =  $_POST['sexo'];
$nascimento = $_POST['nascimento'];
$uf = $_POST['uf'];
$cidade = $_POST['cidade'];
$tipoUsuario = 'RES';
$senha = Bcrypt::hash($senha);

$query = "INSERT INTO usuario (EMAIL_USUARIO,SENHA_USUARIO,NOME,SEXO_USUARIO,DATA_NASCIMENTO,UF_USUARIO,CIDADE_USUARIO,TIPO_USUARIO)";
$query.= " VALUES( '$email','$senha','$nome','$sexo','$nascimento','$uf','$cidade','$tipoUsuario')";

if(mysql_query($query))
{
    echo '<script>
   alert("Usuário Cadastro com Sucesso!")
   </script>';
    echo '<a href=Frmlogin.php>Efetuar Login</a>';
}else{
   echo '<script>
    alert("Não foi possível efetuar seu cadastro!")
    location.href="index.php"
    </script>';
}

