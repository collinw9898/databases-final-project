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
                        <td><a href="insert.php">Insert </a> &nbsp&nbsp&nbsp&nbsp;</td>
                        <td><a href="search.php">Search </a> &nbsp&nbsp&nbsp&nbsp;</td>
                        <td><a href="edit.php">Edit Information</a> &nbsp&nbsp&nbsp&nbsp;</td>
                        <td><a href="display.php">Display</a> &nbsp&nbsp&nbsp&nbsp;</td>
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
