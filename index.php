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
                        <td><a href="insert.php" style="color:blue;font-weight:bold;">Insert </a> &nbsp&nbsp&nbsp&nbsp;</td>
                        <td><a href="edit.php" style="color:blue;font-weight:bold;">Edit Information</a> &nbsp&nbsp&nbsp&nbsp;</td>
                        <td><a href="display.php" style="color:blue;font-weight:bold;">Display</a> &nbsp&nbsp&nbsp&nbsp;</td>
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
