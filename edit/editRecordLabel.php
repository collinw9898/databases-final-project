<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="static/styles.css">
    </head>
    <body>
        <div align="center">
            <div class="header"><img class="musehub" src="musehub.png" /></div>
            <div class="nav">
                <a href="index.php">Back</a>
            </div>
            <br><br><br>

            <?php
                require("../tableshow.php");
                require("../dbconnect.php");

                if(isset($_POST['update'])) {
                    $r_ID = $_POST['r_ID'];
                    $r_Name = $_POST['r_Name'];

                    $sql = "UPDATE record_label ".
                            "SET label_name = '$r_Name' ".
                            "WHERE label_id = '$r_ID'";

                    $retval = mysqli_query($conn, $sql);

                    if(!$retval) {
                        die('Could not update data: ' . mysqli_error($conn));
                    }

                    echo "Data updated successfully\n";

                    show_recordLabels($conn);

                    mysqli_close($conn);
                }

                else if(isset($_POST['delete'])) {
                    $r_ID = $_POST['r_ID'];

                    $sql = "DELETE FROM record_label ".
                            "WHERE label_id = '$r_ID'";

                    $retval = mysqli_query($conn, $sql);

                    if(!$retval) {
                        die('Could not delete data: ' . mysqli_error($conn));
                    }

                    echo "Data deleted successfully\n";

                    show_recordLabels($conn);

                    mysqli_close($conn);
                }

                else {
            ?>

            <p>Please enter the ID of the record label to update</p>
            <form method="post" action="<?php $_PHP_SELF ?>">
                <table width = "600" border = "0" cellspacing = "1" cellpadding = "2">
                    <tr>
                        <td width = "250">Artist ID</td>
                        <td>
                            <input name ="r_ID" type ="text" id ="r_ID">
                        </td>
                    </tr>

                    <tr>
                        <td width = "250">New record label name</td>
                        <td>
                            <input name ="r_Name" type ="text" id ="r_Name">
                        </td>
                    </tr>

                    <tr>
                        <td width = "250"> </td>
                        <td>
                            <input name ="update" type ="submit" id ="update"  value ="Update Record Label">
                        </td>
                    </tr>

                    <tr>
                        <td width = "250"> </td>
                        <td>
                            <input name ="delete" type ="submit" id ="delete"  value ="Delete Record Label">
                        </td>
                    </tr>
                </table>
            </form>

            <?php
                }
            ?>
        </div>
    </body>
</html>
