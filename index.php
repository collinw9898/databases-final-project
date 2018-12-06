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
                    <td><a href="insert.php" style="color:blue;font-weight:bold;">Insert </a> &nbsp&nbsp&nbsp&nbsp;</td>
                    <td><a href="edit.php" style="color:blue;font-weight:bold;">Edit Information</a> &nbsp&nbsp&nbsp&nbsp;</td>
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
