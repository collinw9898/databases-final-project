<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="static/styles.css">
    </head>

    <body>
        <div>
            <br><br><br><br>

            <?php
                require("../tableshow.php");
                require("../dbconnect.php");

                if(isset($_POST['insert'])) {
                    $a_ID = bin2hex(openssl_random_pseudo_bytes(5));

                    $a_Name = $_POST['a_Name'];
                    $record_Label = $_POST['record_Label'];
                    
                    $sql = "INSERT INTO artist".
                            "(artist_id, artist_name, label_id)".
                            "VALUES ('$a_ID', '$a_Name', '$record_Label')";

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

                <h1>Insert Artist</h1>
                <form method="post" action="<?php $_PHP_SELF ?>">
                    <table width = "600" border = "0" cellspacing = "1" cellpadding = "2">
                        <tr>
                            <td width = "250">New Artist Name</td>
                            <td>
                                <input name ="a_Name" type ="text" id ="a_Name">
                            </td>
                        </tr>

                        <tr>
                            <td width = "250">Record Label</td>
                            <td>
                                <input name ="record_Label" type ="text" id ="record_Label">
                            </td>
                        </tr>

                        <tr>
                            <td width = "250"> </td>
                            <td>
                                <input name ="insert" type ="submit" id ="insert"  value ="Insert Artist">
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