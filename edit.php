<!DOCTYPE html> <!-- das ist HTML 5 -->
<html>
<head>
    <meta charset="utf-8">

    <style>

        body {
            background-image: url("68.jpg");
            color: white;
        }

        #header {

            height: 100px;
            color: white;
            font-size:60px;
            font-family:Phosphate;
            padding-left: 27%;
            background-attachment: fixed;
            border: 3px;
            border-radius: 10px;
            border: white;
            border-style: solid ;

        }
        #header:hover{
            color: seagreen;
        }



        #edit {
            margin-left: 35%;
            margin-top: 10%;

        }

        #back {

            font-family:arial;
            color: white;
            background-color: white;
            margin-top: 10px;
            width: 100px;
            padding: 10px;
            border: 3px;
            border-radius: 10px;
            border: white;
            border-style: solid ;
            margin-left: 35%;

        }

        #back:hover {
            background-color: goldenrod;
        }

        #footer {
            height: 50px;
            color: white;
            font-size:15px;
            font-family:Arial;
            background-attachment: fixed;
            margin-top: 90%;
            margin-left: 40%;
        }


        




    </style>
</head>
</html>

<?php

session_start();
if(!isset($_SESSION["angemeldet"]))
{
    echo"nicht angemeldet.";
    die();
}

$id=$_GET["id"];

$pdo=new PDO('mysql:: host=mars.iuk.hdm-stuttgart.de;dbname=u-ba033', 'ba033', 'iuyaexah2O',array('charset'=>'utf8'));

$abfrage="SELECT * FROM users WHERE id=$id";
$ergebnis=$pdo->query($abfrage);
// man macht eine query über die Abfrage

$row=$ergebnis->fetch(PDO::FETCH_ASSOC);
// aus der query wird mit fetch eine Ziel geholt und steht dann in einem assoziativem array

?>

<h1 id="header">Bearbeite diesen Beitrag</h1>

<form id="edit" action="do_edit.php?id=<?php echo $id; ?>" method="POST">
    <textarea name="content" rows="20" cols="60"><?php echo $row["content"]; ?>
    </textarea>
    <input type="submit">

</form>

<div id="back">
    <a href="index.php">Back to Blog</a>
</div>

<div id="footer">
    Impressum © Hochschule der Medien
</div>