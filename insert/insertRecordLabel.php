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
                    $l_ID = bin2hex(openssl_random_pseudo_bytes(5));

                    $l_Name = $_POST['l_Name'];
                    $year_established = $_POST['year_established'];
                    
                    $sql = "INSERT INTO record_label".
                            "(label_id, label_name, year_established)".
                            "VALUES ('$l_ID', '$l_Name', '$year_established')";

                    $retval = mysqli_query($conn, $sql);

                    if(!$retval) {
                        die('Could not update data: ' . mysqli_error($conn));
                    }

                    echo "Data updated successfully\n";

                    show_recordLabels($conn);

                    mysqli_close($conn);
                }

                else {
            ?>

                <h1>Insert Record Label</h1>
                <form method="post" action="<?php $_PHP_SELF ?>">
                    <table width = "600" border = "0" cellspacing = "1" cellpadding = "2">
                        <tr>
                            <td width = "250">New Record Label Name</td>
                            <td>
                                <input name ="l_Name" type ="text" id ="l_Name">
                            </td>
                        </tr>

                        <tr>
                            <td width = "250">Year Established</td>
                            <td>
                                <input name ="year_established" type ="text" id ="year_established">
                            </td>
                        </tr>

                        <tr>
                            <td width = "250"> </td>
                            <td>    
                                <input name ="insert" type ="submit" id ="insert"  value ="Insert Record Label">
                            </td>
                        </tr>
                </form>

            <?php
                }
            ?>
        </div>
    </body>
</html>