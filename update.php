<!DOCTYPE html>
<html>
    <body>
        <div style="height:900px; background-color: lightblue;" align="center">
            <br><br><br><br>

            <?php
                require("tableshow.php");
                require("dbconnect.php");

                if(isset($_POST['update'])) {
                    $i_ID = $_POST['i_ID'];

                    echo " <br> Instructor table before update <br>";
                    show_instructor($conn);

                    $sql = "UPDATE instructor ".
                            "SET salary = salary * 1.10 ".
                            "WHERE id = '$i_ID'";

                    $retval = mysqli_query($conn, $sql);

                    if(!$retval) {
                        die('Could not update data: ' . mysqli_error($conn));
                    }

                    echo "Data updated successfully\n";

                                echo " <br> Instructor table after update <br>";
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
                        <input name ="i_ID" type ="text" id ="i_ID">
                        </td>
                    </tr>

                    <tr>
                        <td width = "250"> </td>
                        <td>
                            <input name ="update" type ="submit" id ="update"  value ="update">
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
