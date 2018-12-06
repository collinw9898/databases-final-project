<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="../static/styles.css">
    </head>
    
    <body>
        <div align="center">
            <div class="header"><img class="musehub" src="../musehub.png" /></div>
            <div class="nav">
                <a href="../insert.php">Back</a>
            </div>
            <br><br><br>

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
                        die('Could not insert data: ' . mysqli_error($conn));
                    }

                    echo "Data inserted successfully\n";

                    show_songs($conn);

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
                            <td width = "250">Artist</td>
                            <td>
                                <select name="genre" id="genre">
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
                            <td width = "250">Album (Optional)</td>
                            <td>
                                <select name="genre" id="genre">
                                    <option value=""></option>
                                    <?php 
                                        $sql = "SELECT album_id, album_name FROM album";

                                        $result = mysqli_query($conn, $sql);

                                        if ($result->num_rows > 0) {                              
                                            while($row = $result->fetch_assoc()) {
                                                echo '<option value="' . $row["album_id"] . '">' . $row["album_name"] . '</option>';
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
                                <input name ="insert" type ="submit" id ="insert"  value ="Insert Song">
                            </td>
                        </tr>
                </form>

            <?php
                }
            ?>
        </div>
    </body>
</html>