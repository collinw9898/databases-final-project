<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="../static/styles.css">
    </head>
    
    <body>
        <div align="center">
            <div class="header"><img class="musehub" src="../musehub.png" /></div>
            <div class="nav">
                <a href="../edit.php">Back</a>
            </div>
            <br><br><br>

            <?php
                require("../tableshow.php");
                require("../dbconnect.php");

                if(isset($_POST['update'])) {
                    $s_ID = $_POST['s_ID'];
                    $s_Title = $_POST['s_Title'];
                    $genre = $_POST['genre'];

                    $sql = "UPDATE song ".
                            "SET song_title = '$s_Title', genre_id = '$genre' ".
                            "WHERE song_id = '$s_ID'";

                    $retval = mysqli_query($conn, $sql);

                    if(!$retval) {
                        die('Could not update data: ' . mysqli_error($conn));
                    }

                    echo "Data updated successfully\n";

                    show_songs($conn);

                    mysqli_close($conn);
                }

                else if(isset($_POST['delete'])) {
                    $s_ID = $_POST['s_ID'];

                    $sql = "DELETE FROM record_label ".
                            "WHERE song_id = '$s_ID'";

                    $retval = mysqli_query($conn, $sql);

                    if(!$retval) {
                        die('Could not delete data: ' . mysqli_error($conn));
                    }

                    echo "Data deleted successfully\n";

                    show_songs($conn);

                    mysqli_close($conn);
                }

                else {
            ?>

            <p>Please enter the ID of the songs to update</p>
            <form method="post" action="<?php $_PHP_SELF ?>">
                <table width = "600" border = "0" cellspacing = "1" cellpadding = "2">
                    <tr>
                        <td width = "250">Song ID</td>
                        <td>
                            <input name ="s_ID" type ="text" id ="r_ID">
                        </td>
                    </tr>

                    <tr>
                        <td width = "250">New Song Title</td>
                        <td>
                            <input name ="s_Title" type ="text" id ="s_Title">
                        </td>
                    </tr>

                    <tr>
                        <td width = "250">Change Genre</td>
                        <td>
                            <select name="genre" id="genre">
                                <option value=""></option>
                                <?php 
                                    $sql = "SELECT genre_id FROM genre";

                                    $result = mysqli_query($conn, $sql);

                                    if ($result->num_rows > 0) {                              
                                        while($row = $result->fetch_assoc()) {
                                            echo '<option value="' . $row["genre_id"] . '">' . $row["genre_id"] . '</option>';
                                        }
                                    }
                                ?>
                            </select>
                        </td>
                    </tr>

                    <tr>
                        <td width = "250"> </td>
                        <td>
                            <input name ="update" type ="submit" id ="update"  value ="Update Song">
                        </td>
                    </tr>

                    <tr>
                        <td width = "250"> </td>
                        <td>
                            <input name ="delete" type ="submit" id ="delete"  value ="Delete Song">
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
