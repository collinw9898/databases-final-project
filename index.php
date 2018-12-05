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
                    <td><a href="insert.php" style="color:blue;font-weight:bold;">Insert </a> &nbsp&nbsp&nbsp&nbsp;</td>
                    <td><a href="delete.php" style="color:blue;font-weight:bold;">Delete </a> &nbsp&nbsp&nbsp&nbsp;</td>
                    <td><a href="editArtist.php" style="color:blue;font-weight:bold;">Update Artist</a> &nbsp&nbsp&nbsp&nbsp;</td>
                    <td><a href="display.php" style="color:blue;font-weight:bold;">Display</a> &nbsp&nbsp&nbsp&nbsp;</td>
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
