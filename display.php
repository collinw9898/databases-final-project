<!DOCTYPE html>
<html> 
    <head>
        <link rel="stylesheet" href="static/styles.css">
    </head>
    
    <body>
        <div>
            <?php
                require("dbconnect.php");
                require("tableshow.php");
                show_artists($conn);
                show_albums($conn);
                show_recordLabels($conn);
                show_songs($conn);
            ?>

            <br><br><br><br>
            <hr width="50">
            <a href="index.php" style="color:red;font-weight:bold;">Home</a>
            <hr width="50">
        </div>
    </body> 
</html>
