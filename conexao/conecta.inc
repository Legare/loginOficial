<?php
echo '<meta charset=utf-8>';
//configuração
$server = 'localhost';
$user = 'root';
$password = '12345678';
$database = 'legare';

//Estabelendo a conexão
$connection = mysql_connect($server,$user,$password);
if($connection === FALSE)
{
    echo'Não foi possível conexão com Mysql <br/>';
    echo mysql_error();
}else{
    //Selecionando o banco de dados
    if(!mysql_select_db($database,$connection))
    {
        echo 'Não foi possível selecionar o banco de dados'. $database.'<br />';
        echo mysql_error();
    }
}
  
           
