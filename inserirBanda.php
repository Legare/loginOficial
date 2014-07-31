<?php
echo '<meta charset=UTF-8>';
include_once 'conexao/conecta.inc';
$banda = $_POST['banda'];
$senha = $_POST['senhabanda'];
$email =  $_POST['senhabanda'];
$genero =  $_POST['genero'];
$tipoUsuario= 'BAN';

$query = "INSERT INTO banda (EMAIL_BANDA,SENHA_BANDA,GENERO_BANDA,NOME_BANDA,TIPO_BANDA)";
$query.= " VALUES( '$email','$senha','$genero','$banda','$tipoUsuario')";

if(mysql_query($query))
{
    echo '<script>
   alert("Banda cadastrada com Sucesso!")
   </script>';
    echo '<a href=Frmlogin.php>Efetuar Login</a>';
}else{
   echo '<script>
    alert("Não foi possível efetuar seu cadastro!")
    location.href="index.php"
    </script>';
}


