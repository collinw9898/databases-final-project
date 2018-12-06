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
                    $a_ID = bin2hex(openssl_random_pseudo_bytes(5));

                    $a_Name = $_POST['a_Name'];
                    $genre = $_POST['genre'];
                    
                    $sql = "INSERT INTO album".
                            "(album_id, album_name, genre_id)".
                            "VALUES ('$a_ID', '$a_Name', '$genre')";

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
                                <input name ="insert" type ="submit" id ="insert"  value ="Insert Album">
                            </td>
                        </tr>
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