<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link type="text/css" rel="stylesheet" href="webshop.css"/>
        <title>Webshop</title>
    </head>
    <body>
        <?php
        $servername = 'localhost:3306';
        $username = "root";
        $password = "ululuuu";
        $database = "BW2";
        $mysqli = new mysqli($servername, $username,$password,$database);
        
        if($mysqli ->connect_errno){
            echo "failed to connect";
        }
        
 
        $sql = "SELECT * FROM Produkte WHERE Type = rahmen";
        $result = $mysqli->query($sql);
        $db_erg = mysqli_query($mysqli, $sql);
        $row = $result->fetch_array(MYSQLI_NUM);

        echo $row[0], $row[1], $row[2];

        $row = $result->fetch_array(MYSQLI_NUM);

        echo $row[0], $row[1], $row[2];
        
        echo "<h1>ululuuu</h1>";
     
        
       
        
        
     
        ?>
        
        
        <div id="header">
            <ul>
                <li><a href="index.php">Startseite</a></li>
                <li><a href="shop.php">Shop</a></li>
                <li><a href="kontakt.php">Kontakt</a></li>
            </ul>
        </div>
        <div class="left">
            <ul>
                <li><a href="fahrraeder.php">Fahrräder</a></li>
                <li><a href="bremsen.php">Bremsen</a></li>
                <li><a href="dynamos.php">Dynamos</a></li>
                <li><a href="felgen.php">Felgen</a></li>
                <li><a href="lampen.php">Lampen</a></li>
                <li><a href="maentel.php">Mäntel</a></li>
                <li><a href="pedale.php">Pedale</a></li>
                <li><a href="rahmen.php">Rahmen</a></li>
                <li><a href="saettel.php">Sättel</a></li>
                <li><a href="schaltungen.php">Schaltungen</a></li>
                <li><a href="schlaeuche.php">Schläuche</a></li>
                <li><a href="staender.php">Ständer</a></li>
                <li><a href="zubehoer.php">Zubehör</a></li>
            </ul>
        </div>
        <div class="right">
            <?php
                echo '<table border="1">';
                    echo "<tr>";
                        echo "<th>PID</th>";
                        echo "<th>Beschreibung</th>";
                        echo "<th>Bezeichnung</th>";                   
                        echo "<th>Photo</th>";
                        echo "<th>Preis</th>";
                    echo "</tr>";
                while ($row = mysqli_fetch_array($db_erg, MYSQL_ASSOC))
                {
                    echo "<tr>";
                        echo "<td>". $row['PID'] . "</td>";
                        echo "<td>". $row['Beschreibung'] . "</td>";
                        echo "<td>". $row['Bezeichnung'] . "</td>";
                        echo "<td>". "<img src=". $row['Photo'] . " />" . "</td>";
                        echo "<td>". $row['Preis'] . "</td>";
                    echo "</tr>";
                }
                echo "</table>";
            ?>
        </div>
        <div id="footer">
            <p>XYZ-Fahrradladen, Lange Str.1, 0815 Dingenskirchen, 01234/5678-9</p>
             
        </div>
    </body>
</html>
