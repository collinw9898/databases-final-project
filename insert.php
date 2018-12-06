<!DOCTYPE html>
<html> 
<head>
        <link rel="stylesheet" href="static/styles.css">
    </head>
    
    <body>
        <div align="center">
            <div class="header"><img class="musehub" src="musehub.png" /></div>

            <div class="nav">
                <table>
                    <tr>
                        <td><a href="insert/insertArtist.php">Insert Artists</a> &nbsp&nbsp&nbsp&nbsp;</td>
                        <td><a href="insert/insertAlbum.php">Insert Albums</a> &nbsp&nbsp&nbsp&nbsp;</td>
                        <td><a href="insert/insertRecordLabel.php">Insert Record Labels</a> &nbsp&nbsp&nbsp&nbsp;</td>
                        <td><a href="insert/insertSong.php">Insert Songs</a> &nbsp&nbsp&nbsp&nbsp;</td>
                    </tr>
                </table>
            </div>
            <br><br><br>

            <?php 
                require("dbconnect.php");
                require("tableshow.php");

                show_artists($conn);
            ?>
        </div>
    </body> 
</html>