<?php
session_start();
if(!isset($_SESSION["angemeldet"]))
{
    echo"nicht angemeldet.";
    die();
}
$content= $_POST["content"];
echo $content;


$pdo=new PDO('mysql:: host=mars.iuk.hdm-stuttgart.de;dbname=u-ba033', 'ba033', 'iuyaexah2O',array('charset'=>'utf8'));

$statement = $pdo->prepare("INSERT INTO users (content) VALUES (?)");
$statement->execute(array($content));
$_SESSION["angemeldet"]=$row["id"];
header('Location: index.php');
