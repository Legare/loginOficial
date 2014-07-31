<?php
include_once 'includes/funcoesuteis.inc';

validaAutenticacao('Frmlogin.php','RES');

echo '<script type="text/javascript">
        alert("Bem vindo ! ")</script>';

echo '<meta charset=UTF-8>';
echo '<h3>Página Inicial do Usuário restrito</h3>';

echo '<a href=frmatualizar.php> Alterar dados (perfil) </a><br/><br/>';

echo '<a href=logout.php?p=Frmlogin.php> Logout </a>';



