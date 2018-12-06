<!DOCTYPE html>
<html>
    <body>
        <div style="height:900px; background-color: lightblue;" align="center">
            <br><br><br><br>

            <?php
                require("../tableshow.php");
                require("../dbconnect.php");

                if(isset($_POST['search_album'])) {
                    $a_ID = $_POST['a_ID'];

                    $sql = "SELECT album ".
                            "WHERE album_id = '$a_ID'";

                    $retval = mysqli_query($conn, $sql);

                    if(!$retval) {
                        die('Could not find album data: ' . mysqli_error($conn));
                    }

                    echo "Successfully searched album data\n";

                    show_albums($conn);

                    mysqli_close($conn);
                }

                else if(isset($_POST['search_artist'])) {
                    $a_name = $_POST['a_ID'];

                    $sql = "SELECT artist ".
                            "WHERE artist_name = '$a_Name'";

                    $retval = mysqli_query($conn, $sql);

                    if(!$retval) {
                        die('Could not find artist data: ' . mysqli_error($conn));
                    }

                    echo "Successfully searched artist data\n";

                    show_albums($conn);

                    mysqli_close($conn);
                }

                else if(isset($_POST['search_genre'])) {
                    $g_ID = $_POST['g_ID'];

                    $sql = "SELECT artist ".
                            "WHERE genre_ID = '$g_ID'";

                    $retval = mysqli_query($conn, $sql);

                    if(!$retval) {
                        die('Could not find genre data: ' . mysqli_error($conn));
                    }

                    echo "Successfully searched genre data\n";

                    show_albums($conn);

                    mysqli_close($conn);
                }

                else {
            ?>

            <p>Search:</p>
            <form method="post" action="<?php $_PHP_SELF ?>">
                <table width = "600" border = "0" cellspacing = "1" cellpadding = "2">
                    <tr>
                        <td width = "250">Search Album ID</td>
                        <td>
                            <input name ="a_ID" type ="text" id ="a_ID">
                        </td>
                    </tr>

                    <tr>
                        <td width = "250">Search Arist Name</td>
                        <td>
                            <input name ="a_Name" type ="text" id ="a_Name">
                        </td>
                    </tr>

                    <tr>
                        <td width = "250">Search Genre Name</td>
                        <td>
                            <input name ="g_ID" type ="text" id ="g_ID">
                        </td>
                    </tr>

                    <tr>
                        <td width = "250"> </td>
                        <td>
                            <input name ="search_album" type ="submit" id ="search_album"  value ="Search Album">
                        </td>
                    </tr>

                    <tr>
                        <td width = "250"> </td>
                        <td>
                            <input name ="search_artist" type ="submit" id ="search_artist"  value ="Search Artist">
                        </td>
                    </tr>
                    
                    <tr>
                        <td width = "250"> </td>
                        <td>
                            <input name ="search_genre" type ="submit" id ="search_genre"  value ="Search Genre">
                        </td>
                    </tr>
                </table>
            </form>

            <?php
                }
            ?>
            <br><br><br><br>
            <hr width="50">
            <a href="index.php" style="color:red;font-weight:bold;">Home</a>
            <hr width="50">
        </div>
    </body>
</html>
