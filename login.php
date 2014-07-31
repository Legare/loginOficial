<?php
//O include_once, é responsavel em incluir um arquivo apenas quando for necessário
//ou seja, se o arquivo ja estiver sido incluido anteriormente o include não é executado.
include_once 'conexao/conecta.inc';
echo '<meta charset=UTF-8>';
session_start();
if(isset($_POST['email']) and isset($_POST['senha']))
{
$email = $_POST['email'];
$senha = $_POST['senha'];
//echo $email. '     '. $senha;
$query = "SELECT * FROM usuario WHERE EMAIL_USUARIO = '$email'";
$result = mysql_query($query);
$totalUsuario = mysql_num_rows($result);
if($totalUsuario === 0){
    echo 'Usuário não encontrado !';
}  else {
    //Recuperando a senha do usuario
    $array = mysql_fetch_array($result);
    $senhaUsuario = $array['SENHA_USUARIO'];
    $tipoUsuario = $array['TIPO_USUARIO'];
    //echo $senhaUsuario . '<br/>';
    if($senha != $senhaUsuario)
    {
        echo 'Senha não confere !';
    }else{
        $_SESSION['email'] = $email;
        $_SESSION['senha'] = $senha;
        $_SESSION['tipoUsuario'] = $tipoUsuario;
        if($tipoUsuario === 'RES')
        {
        echo '<script language= "JavaScript">
   location.href="indexrestrito.php"
            </script>'; 
    }elseif($tipoUsuario === 'ADM')
       {
        echo '<script language= "JavaScript">
   location.href="admin/indexadmin.php"
            </script>'; 
    }elseif($tipoUsuario === 'BAN')
       {
        echo '<script language= "JavaScript">
   location.href="banda/indexbanda.php"
            </script>'; 
    }  else {
        echo 'Tipo de Usuário inválido!';
      }
    
    }
}
}else{
    echo '<script language= "JavaScript">
   location.href="Frmlogin.php"
            </script>'; 
}

