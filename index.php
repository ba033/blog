


<?php
session_start();
?>
<!doctype html>
<html lang="de">
    <head>
        <meta charset="utf-8">
<title>
    Mein Blog
</title>
        <link href="style.css" rel="stylesheet">

</head>
<body>




   <h1 id="machlila"> Mein Blog</h1>

<div id="link">

     <a href="schreiben.php" >Neuer Beitrag</a> <br>
<br>

   <a href="aboutme.php" >About Me</a> <br>
<br>

     <a href="login.html" >Login</a> <br>

<br>
     <a href="logout.php" >Logout</a> <br>

</div>







<div id="main">

    <?php

    if(isset($_SESSION["angemeldet"]))
    {
        echo"angemeldet.";

    }
    else
    {
        echo"nicht angemeldet.";
    }

    echo"<br>";
    echo"<br>";
    ?>

<div id="einträge">
    <?php

    echo "Einträge:";
    echo"<br>";
    echo"<br>";

    $content= $_POST["content"];
    echo $content;


    $pdo=new PDO('mysql:: host=mars.iuk.hdm-stuttgart.de;dbname=u-ba033', 'ba033', 'iuyaexah2O',array('charset'=>'utf8'));
    $statement = $pdo->prepare("SELECT * FROM users");

    if($statement->execute()) {
        while($row=$statement->fetch()) {
            echo "<img src=\"IMG_0581.JPG\" width=\"100\">";
            echo $row['bild'].". " .$row['name']." " . "schreibt: ".$row['content'];
            echo "<br>";
            echo "<a href='edit.php?id=".$row['id']." '>Edit</a>";
            echo "<br>";
            echo "<br>";

    }
    } else {
        echo "Datenbank-Fehler:";
        echo $statement->errorInfo()[2];
        echo $statement->queryString;
        die();
    }

?>
</div>

</div>

<div id="footer">
    Impressum © Hochschule der Medien
</div>

</body>

</html>




