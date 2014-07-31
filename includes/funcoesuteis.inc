
<?php

function validaAutenticacao($link,$tipo)
{   echo '<meta charset=UTF-8>';
    session_start();
    
    if(!isset($_SESSION['email']) or !isset($_SESSION['senha']))
    {
        session_destroy();
        echo '<script type="text/javascript">
        alert("Acesso Negado ! \n Você não efetuou Login. ")</script>';
        echo '<script type="text/javascript">
              location.href = "'.$link.'"
             </script>';
    } 
    else{
        $email = $_SESSION['email'];
        $tipoUsuario = $_SESSION['tipoUsuario']; 
        $senha = $_SESSION['senha'];
        if($tipo === 'RES')
        {
            include_once 'conexao/conecta.inc';
        }elseif($tipo === 'ADM'){
        include_once '../conexao/conecta.inc';
        }elseif($tipo === 'BAN'){
        include_once '../conexao/conecta.inc';
        }
                
        
        
        $query = "SELECT * FROM usuario WHERE EMAIL_USUARIO = '$email'";
        $result = mysql_query($query);
        $usuarios = mysql_fetch_array($result);
        if($email !== $usuarios['EMAIL_USUARIO'])
        {
            session_destroy();
            echo '<script type="text/javascript">
        alert("Acesso Negado ! \n Email não confere. ")</script>';
        echo '<script type="text/javascript">
              location.href = "'.$link.'"
             </script>';
        }elseif($senha !== $usuarios['SENHA_USUARIO'])
        {
            session_destroy();
            echo '<script type="text/javascript">
        alert("Acesso Negado ! \n Senha não confere. ")</script>';
        echo '<script type="text/javascript">
              location.href = "'.$link.'"
             </script>';
        }  elseif($tipoUsuario !== $tipo) {
            session_destroy();
            echo '<script type="text/javascript">
        alert("Acesso Negado ! \n tipo de usuário não confere. ")</script>';
        echo '<script type="text/javascript">
              location.href = "'.$link.'"
             </script>';
        }
        
        
    }
}
