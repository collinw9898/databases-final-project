<!DOCTYPE html>
<html> 
    <head>
        <link rel="stylesheet" href="static/styles.css">
    </head>
    
    <body>
        <div align="center">
            <div class="header"><img src="musehub.png" /></div>

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

            <br><br><br><br>
            <hr width="50">
            <a href="index.php" style="color:red;font-weight:bold;">Home</a>
            <hr width="50">
        </div>
    </body> 
</html>
