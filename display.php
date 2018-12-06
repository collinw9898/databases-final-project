<!DOCTYPE html>
<html> 
    <head>
        <link rel="stylesheet" href="static/styles.css">
    </head>
    
    <body>
        <div align="center">
            <div class="header"><a href="index.php"><img class="musehub" src="../musehub.png" /></a></div>

            <div class="nav">
                <a href="index.php">Back</a>
            </div>
            <br><br><br>

            <?php
                require("dbconnect.php");
                require("tableshow.php");
                echo "<h3> Artists </h3>";
                show_artists($conn);
                echo "<br><br>";
                echo "<h3> Albums </h3>";
                show_albums($conn);
                echo "<br><br>";
                echo "<h3> Record Labels </h3>";
                show_recordLabels($conn);
                echo "<br><br>";
                echo "<h3> Songs </h3>";
                show_songs($conn);
            ?>
        </div>
    </body> 
</html>
