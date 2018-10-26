<?php

session_start();
if(!isset($_SESSION["angemeldet"]))
{
    echo"nicht angemeldet.";
    die();
}

$id=$_GET["id"];
$content=$_POST["content"];
$pdo=new PDO('mysql:: host=mars.iuk.hdm-stuttgart.de;dbname=u-ba033', 'ba033', 'iuyaexah2O',array('charset'=>'utf8'));

$statement = "UPDATE users SET content='" .$content. " ' WHERE id=$id";

if ($ergebnis=$pdo->query($statement))
{
    header ('Location:index.php');
}

else
{
    echo "Datenbank-Fehler";
}