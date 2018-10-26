<!DOCTYPE html> <!-- das ist HTML 5 -->
<html>
<head>
    <meta charset="utf-8">

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
            padding-left: 40%;
            background-attachment: fixed;
            border: 3px;
            border-radius: 10px;
            border: white;
            border-style: solid ;

        }
        #erste:hover{
            color: seagreen;
        }

        a {
            color: goldenrod;
        }
        a:hover{
            color: orange;
        }

        a:visited {
            color: darkgreen
        }

        #zweite {

            font-family:arial;
            border: 3px;
            border-radius: 10px;
            border: white;
            border-style: solid ;
            width: 400px;
            padding: 10px;
            margin-left: 35%;

        }

        #dritte {

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

        #dritte:hover {
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

    <h1 id="erste"> About Me</h1>
</head>



<body>

<div id="zweite">

<table >
    <thead>
    <th> Me </th>
    <th> <p><img src="IMG_0581.JPG" width="150"  ></p> </th>

    <tr>
    </thead>
    <tbody>
    <tr>
        <th> Vorname: </th>
        <td> Bettina </td>

    </tr>
    <tr>
        <th> Nachname: </th>
        <td> Artmann </td>

    </tr>

    <tr>
        <th> Geburtsdatum: </th>
        <td> 17.09.1998 </td>

    </tr>

    <tr>
        <th> Geburtsort: </th>
        <td> <a href="https://de.wikipedia.org/wiki/Landau_an_der_Isar"target ="_blank" >Landau an der Isar</a> </td>

    </tr>


    <tr>
        <th> Studium: </th>
        <td> Hochschule der Medien </td>

    </tr>

    <tr>
        <th> Fremdsprachen:</th>
        <td> Englisch </td>

    </tr>

    <tr>
        <th> Computerkenntnisse: </th>
        <td> EDV, iMovie, PHP</td>

    </tr>

    <tr>
        <th> <a href="https://www.facebook.com/bettina.artmann.5" >Social Media</a>

        </th>
        <td></td>

    </tr>


    </tbody>


</table>
</div>

<div id="dritte">
    <a href="index.php">Back to Blog</a>
</div>

<div id="footer">
    Impressum © Hochschule der Medien
</div>

</body>
</html>


