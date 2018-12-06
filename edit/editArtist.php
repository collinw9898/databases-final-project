<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="../static/styles.css">
    </head>
    
    <body>
        <div align="center">
            <div class="header"><a href="../index.php"><img class="musehub" src="../musehub.png" /></a></div>
            <div class="nav">
                <a href="../edit.php">Back</a>
            </div>
            <br><br><br>

            <?php
                require("../tableshow.php");
                require("../dbconnect.php");

                if(isset($_POST['update'])) {
                    $a_ID = $_POST['a_ID'];
                    $a_Name = $_POST['a_Name'];
                    $label = $_POST['label'];

                    $sql = "UPDATE artist ".
                            "SET artist_name = '$a_Name', label_id = '$label' ".
                            "WHERE artist_id = '$a_ID'";

                    $retval = mysqli_query($conn, $sql);

                    if(!$retval) {
                        die('Could not update data: ' . mysqli_error($conn));
                    }

                    echo "Data updated successfully\n";

                    show_artists($conn);

                    mysqli_close($conn);
                }

                else if(isset($_POST['delete'])) {
                    $a_ID = $_POST['a_ID'];

                    $sql = "DELETE FROM artist ".
                            "WHERE artist_id = '$a_ID'";

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
                            <input name ="a_ID" type ="text" id ="a_ID">
                        </td>
                    </tr>

                    <tr>
                        <td width = "250">New artist name</td>
                        <td>
                            <input name ="a_Name" type ="text" id ="a_Name">
                        </td>
                    </tr>

                    <tr>
                        <td width = "250">Change Record Label</td>
                        <td>
                            <select name="label" id="label">
                                <option value=""></option>
                                <?php 
                                    $sql = "SELECT label_id, label_name FROM record_label";

                                    $result = mysqli_query($conn, $sql);

                                    if ($result->num_rows > 0) {                              
                                        while($row = $result->fetch_assoc()) {
                                            echo '<option value="' . $row["label_id"] . '">' . $row["label_name"] . '</option>';
                                        }
                                    }
                                ?>
                            </select>
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
        </div>
    </body>
</html>
