<!DOCTYPE html>
<html> 
    <head>
        <link rel="stylesheet" href="static/styles.css">
    </head>
    
    <body>
        <div align="center">
            <div class="header"><img class="musehub" src="musehub.png" /></div>

            <div class="nav">
                <a href="index.php">Back</a>
            </div>
            <br><br><br>

            <?php
                require("dbconnect.php");
                require("tableshow.php");
                show_artists($conn);
                echo "<br><br>";
                show_albums($conn);
                echo "<br><br>";
                show_recordLabels($conn);
                echo "<br><br>";
                show_songs($conn);
            ?>
        </div>
    </body> 
</html>
