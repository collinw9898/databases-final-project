<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="../static/styles.css">
    </head>
    
    <body>
        <div align="center">
            <div class="header"><a href="../index.php"><img class="musehub" src="../musehub.png" /></a></div>
            <div class="nav">
                <a href="../insert.php">Back</a>
            </div>
            <br><br><br>

            <?php
                require("../tableshow.php");
                require("../dbconnect.php");

                if(isset($_POST['insert'])) {
                    $a_ID = bin2hex(openssl_random_pseudo_bytes(5));

                    $a_Name = $_POST['a_Name'];
                    $genre = $_POST['genre'];
                    $artist = $_POST['artist'];
                    
                    $sql = "INSERT INTO album".
                            "(album_id, album_name, genre_id)".
                            "VALUES ('$a_ID', '$a_Name', '$genre')";

                    $retval = mysqli_query($conn, $sql);

                    $sql = "INSERT INTO album_creator".
                            "(album_id, artist_id) ".
                            "VALUES ('$a_ID', '$artist')";

                    $retval = mysqli_query($conn, $sql);

                    if(!$retval) {
                        die('Could not update data: ' . mysqli_error($conn));
                    }

                    echo "Data updated successfully\n";

                    show_albums($conn);

                    mysqli_close($conn);
                }

                else {
            ?>

                <h1>Insert Album</h1>
                <form method="post" action="<?php $_PHP_SELF ?>">
                    <table width = "600" border = "0" cellspacing = "1" cellpadding = "2">
                        <tr>
                            <td width = "250">New Album Name</td>
                            <td>
                                <input name ="a_Name" type ="text" id ="a_Name">
                            </td>
                        </tr>

                        <tr>
                            <td width = "250">Artist</td>
                            <td>
                                <select name="artist" id="artist">
                                    <option value=""></option>
                                    <?php 
                                        $sql = "SELECT artist_id, artist_name FROM artist";

                                        $result = mysqli_query($conn, $sql);

                                        if ($result->num_rows > 0) {                              
                                            while($row = $result->fetch_assoc()) {
                                                echo '<option value="' . $row["artist_id"] . '">' . $row["artist_name"] . '</option>';
                                            }
                                        }
                                    ?>
                                </select>
                            </td>
                        </tr>

                        <tr>
                            <td width = "250">Genre</td>
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
                                <input name ="insert" type ="submit" id ="insert"  value ="Insert Album">
                            </td>
                        </tr>
                </form>

            <?php
                }
            ?>
        </div>
    </body>
</html>