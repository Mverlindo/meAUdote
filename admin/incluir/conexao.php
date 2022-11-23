<?php
if(!isset($_SESSION))
{
    session_start();
}

try
{
    $conexao = new PDO('mysql:host=localhost;dbname=meaudote', 'root', '');
    $conexao ->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
}
catch (Exception $ex)
{
    echo "Qual erro:" . $ex->getMessage();
}

