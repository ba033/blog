<?php
session_start();
if(!isset($_SESSION["angemeldet"]))
{
    echo"nicht angemeldet.";
    die();
}

?>
<!doctype html>
<html lang="de">
    <head>
        <meta charset="utf-8">
<title>
    Neuer Beitrag
</title>
       <style>

           body {
               background-image: url("68.jpg");
               color: white;
           }

           #erste {

               height: 100px;
               color: white;
               font-size:60px;
               font-family:Phosphate;
               padding-left: 34%;
               background-attachment: fixed;
               border: 3px;
               border-radius: 10px;
               border: white;
               border-style: solid ;
           }
           #erste:hover{
               color: seagreen;
           }

           #zweite {
               padding-left: 38%;

           }

           #dritte {
               font-family:arial;
               background-color: white ;
               width: 100px;
               margin: 20px;
               padding: 5px;
               margin-left: 38%;
               border: 3px;
               border-radius: 10px;
               border: white;
               border-style: solid ;


           }

           #dritte:hover {
               background-color: goldenrod;
           }

           #vierte {
               font-family: arial;
               background-color: white ;
               width: 100px;
               margin: 20px;
               padding: 5px;
               margin-left: 38%;
               border: 3px;
               border-radius: 10px;
               border: white;
               border-style: solid ;

            #vierte:hover {
                background-color: goldenrod;
            }

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


<h1 id="erste"> Neuer Eintrag </h1>

<div id="zweite">

    <form action="do_schreiben.php" method="post">
        <textarea name="content" rows="10" cols="40">
        </textarea>
        <input type="submit">
    </form>

</div>

    <div id="dritte">
        <a href="index.php">Blogeinträge</a>
    </div>

    <div id="vierte">
        <a href="logout.php">Logout</a>
    </div>


    <div id="footer">
        Impressum © Hochschule der Medien
    </div>

</body>

</html>