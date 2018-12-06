<!DOCTYPE html>
<html>
    <body>
        <div style="height:900px; background-color: lightblue;" align="center">
            <br><br><br><br>

            <?php
                require("../tableshow.php");
                require("../dbconnect.php");

                if(isset($_POST['update'])) {
                    $r_ID = $_POST['r_ID'];
                    $r_Name = $_POST['r_Name'];

                    $sql = "UPDATE artist ".
                            "SET artist_name = '$r_Name' ".
                            "WHERE artist_id = '$r_ID'";

                    $retval = mysqli_query($conn, $sql);

                    if(!$retval) {
                        die('Could not update data: ' . mysqli_error($conn));
                    }

                    echo "Data updated successfully\n";

                    show_artists($conn);

                    mysqli_close($conn);
                }

                else if(isset($_POST['delete'])) {
                    $r_ID = $_POST['r_ID'];

                    $sql = "DELETE FROM artist ".
                            "WHERE artist_id = '$r_ID'";

                    $retval = mysqli_query($conn, $sql);

                    if(!$retval) {
                        die('Could not delete data: ' . mysqli_error($conn));
                    }

                    echo "Data deleted successfully\n";

                    show_artists($conn);

                    mysqli_close($conn);
                }

                else {
            ?>

            <p>Please enter the ID of the artist to update</p>
            <form method="post" action="<?php $_PHP_SELF ?>">
                <table width = "600" border = "0" cellspacing = "1" cellpadding = "2">
                    <tr>
                        <td width = "250">Artist ID</td>
                        <td>
                            <input name ="r_ID" type ="text" id ="r_ID">
                        </td>
                    </tr>

                    <tr>
                        <td width = "250">New artist name</td>
                        <td>
                            <input name ="r_Name" type ="text" id ="r_Name">
                        </td>
                    </tr>

                    <tr>
                        <td width = "250"> </td>
                        <td>
                            <input name ="update" type ="submit" id ="update"  value ="Update Artist">
                        </td>
                    </tr>

                    <tr>
                        <td width = "250"> </td>
                        <td>
                            <input name ="delete" type ="submit" id ="delete"  value ="Delete Artist">
                        </td>
                    </tr>
                </table>
            </form>

            <?php
                }
            ?>
            <br><br><br><br>
            <hr width="50">
            <a href="../index.php" style="color:red;font-weight:bold;">Home</a>
            <hr width="50">
        </div>
    </body>
</html>
