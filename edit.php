<!DOCTYPE html>
<html> 
    <body >
        <div style="min-height:900px; background-color: lightblue;" align="center">
            <table>
                <tr><td><image src="Picture.png" width="150" height="100"></td></tr>
            </table>

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