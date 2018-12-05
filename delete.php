<!DOCTYPE html>
<html>
    <body>
        <div style="height:900px; background-color: lightblue;" align="center">
            <br><br><br><br>

            <?php
                require("tableshow.php");
                require("dbconnect.php");

                if(isset($_POST['delete'])) {
                    $i_ID = $_POST['i_ID'];

                    echo " <br> Instructor table before deletion <br>";
                    show_instructor($conn);

                    $sql = "DELETE FROM instructor ".
                            "WHERE id = '$i_ID'";

                    $retval = mysqli_query($conn, $sql);

                    if(!$retval) {
                        die('Could not delete data: ' . mysqli_error($conn));
                    }

                    echo "Data deleted successfully\n";

                                echo " <br> Instructor table after deletion <br>";
                                show_instructor($conn);

                    mysqli_close($conn);
                }

                else {
            ?>

            <p>Please enter the ID of the instructor to update</p>
            <form method="post" action="<?php $_PHP_SELF ?>">
                <table width = "600" border = "0" cellspacing = "1" cellpadding = "2">
                    <tr>
                        <td width = "250">ID</td>
                        <td>
                            <input name ="i_ID" type ="text" id ="i_ID">
                        </td>
                    </tr>

                    <tr>
                        <td width = "250"> </td>
                        <td>
                            <input name ="delete" type ="submit" id ="delete"  value ="delete">
                        </td>
                    </tr>
                </table>
            </form>

            <?php
                }
            ?>
            <br><br><br><br>
            <hr width="50">
            <a href="Frontpage.html" style="color:red;font-weight:bold;">Home</a>
            <hr width="50">
        </div>
    </body>
</html>
