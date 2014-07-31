<?php
include_once '../includes/funcoesuteis.inc';

validaAutenticacao('../Frmlogin.php','BAN');

echo '<script type="text/javascript">
        alert("Bem vindo ! ")</script>';

echo '<meta charset=UTF-8>';
echo '<h2>Página Inicial da Banda</h2>';

echo '<a href=../logout.php?p=Frmlogin.php> Logout </a>';





