<!DOCTYPE html>
<html> 
    <head>
        <link rel="stylesheet" href="static/styles.css">
    </head>
    
    <body>
        <div class="content">
            <div class="header"><img src="musehub.png" /></div>

            <br><br><br><br>
            <table>
                <tr>
                    <td><a href="edit/editArtist.php" style="color:blue;font-weight:bold;">Edit Artists</a> &nbsp&nbsp&nbsp&nbsp;</td>
                    <td><a href="edit/editAlbum.php" style="color:blue;font-weight:bold;">Edit Albums</a> &nbsp&nbsp&nbsp&nbsp;</td>
                    <td><a href="edit/editRecordLabel.php" style="color:blue;font-weight:bold;">Edit Record Labels</a> &nbsp&nbsp&nbsp&nbsp;</td>
                    <td><a href="edit/editSong.php" style="color:blue;font-weight:bold;">Edit Songs</a> &nbsp&nbsp&nbsp&nbsp;</td>
                </tr>
            </table>

            <?php 
                require("dbconnect.php");
                require("tableshow.php");

                show_artists($conn);
            ?>
        </div>
    </body> 
</html>