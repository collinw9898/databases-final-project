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
                    <td><a href="insert/insertArtist.php" style="color:blue;font-weight:bold;">Insert Artists</a> &nbsp&nbsp&nbsp&nbsp;</td>
                    <td><a href="insert/insertAlbum.php" style="color:blue;font-weight:bold;">Insert Albums</a> &nbsp&nbsp&nbsp&nbsp;</td>
                    <td><a href="insert/insertRecordLabel.php" style="color:blue;font-weight:bold;">Insert Record Labels</a> &nbsp&nbsp&nbsp&nbsp;</td>
                    <td><a href="insert/insertSong.php" style="color:blue;font-weight:bold;">Insert Songs</a> &nbsp&nbsp&nbsp&nbsp;</td>
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