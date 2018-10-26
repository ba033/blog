<?php
session_start();
if(isset($_POST["name"]) AND isset($_POST["password"]))
{
    $name=$_POST["name"];
    $password=$_POST["password"];
}
else
{
    echo"Keine Daten";
    die();
}

$pdo=new PDO('mysql:: host=mars.iuk.hdm-stuttgart.de;dbname=u-ba033', 'ba033', 'iuyaexah2O',array('charset'=>'utf8'));

$statement = $pdo->prepare("SELECT * FROM users WHERE name=:name AND password=:password");

if($statement->execute(array(':name'=>$name, ':password'=>$password))) {
    if($row=$statement->fetch()) {
        //echo "angemeldet";
        $_SESSION["angemeldet"]=$row["id"];
        header('Location: index.php');
    }  
    else
    {
        echo"nicht berechtigt";
    }
} else {
    echo "Datenbank-Fehler:";
    echo $statement->errorInfo()[2];
    echo $statement->queryString;
    die();
}

