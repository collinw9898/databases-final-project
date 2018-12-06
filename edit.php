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
                        <td><a href="edit/editArtist.php">Edit Artists</a> &nbsp&nbsp&nbsp&nbsp;</td>
                        <td><a href="edit/editAlbum.php">Edit Albums</a> &nbsp&nbsp&nbsp&nbsp;</td>
                        <td><a href="edit/editRecordLabel.php">Edit Record Labels</a> &nbsp&nbsp&nbsp&nbsp;</td>
                        <td><a href="edit/editSong.php">Edit Songs</a> &nbsp&nbsp&nbsp&nbsp;</td>
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