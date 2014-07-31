<?php
include_once '../includes/funcoesuteis.inc';

validaAutenticacao('../Frmlogin.php','ADM');

echo '<script type="text/javascript">
        alert("Bem vindo ! ")</script>';

echo '<meta charset=UTF-8>';
echo '<h3>Página Inicial do Usuário administrativo</h3>';

echo '<a href=../logout.php?p=Frmlogin.php> Logout </a>';





