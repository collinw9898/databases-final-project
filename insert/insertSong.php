<!DOCTYPE html>
<html>
    <head>
    </head>

    <body>
        <div style="height:900px; background-color: lightblue;" align="center">
            <br><br><br><br>

            <?php
                require("../tableshow.php");
                require("../dbconnect.php");

                if(isset($_POST['insert'])) {
                    $s_ID = bin2hex(openssl_random_pseudo_bytes(5));

                    $s_Name = $_POST['s_Name'];
                    $genre = $_POST['genre'];
                    
                    $sql = "INSERT INTO song".
                            "(song_id, song_title, album_id, genre_id) ".
                            "VALUES ('$s_ID', '$s_Name', '$a_ID', '$genre')";

                    $retval = mysqli_query($conn, $sql);

                    if(!$retval) {
                        die('Could not update data: ' . mysqli_error($conn));
                    }

                    echo "Data updated successfully\n";

                    show_artists($conn);

                    mysqli_close($conn);
                }

                else {
            ?>

                <h1>Insert Song</h1>
                <form method="post" action="<?php $_PHP_SELF ?>">
                    <table width = "600" border = "0" cellspacing = "1" cellpadding = "2">
                        <tr>
                            <td width = "250">New Song Name</td>
                            <td>
                                <input name ="s_Name" type ="text" id ="s_Name">
                            </td>
                        </tr>

                        <tr>
                            <td width = "250">Genre</td>
                            <td>
                                <select name="genre" id="genre">
                                    <option value=""></option>
                                    <option value="Rock">Rock</option>
                                    <option value="Pop">Pop</option>
                                    <option value="Rap">Rap</option>
                                    <option value="Country">Country</option>
                                </select>
                            </td>
                        </tr>

                        <tr>
                            <td width = "250"> </td>
                            <td>
                                <input name ="insert" type ="submit" id ="insert"  value ="Insert Song">
                            </td>
                        </tr>
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