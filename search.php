<!DOCTYPE html>
<html>
    <body>
        <div style="height:900px; background-color: lightblue;" align="center">
            <br><br><br><br>

            <?php
                require("tableshow.php");
                require("dbconnect.php");

                if(isset($_POST['search_album'])) {
                    $album_name = $_POST['album_name'];

                    $sql = "SELECT * ".
                            "FROM album ".
                            "WHERE album_name = '$album_name'";
                    
                    $result = $conn->query($sql);

                    $retval = mysqli_query($conn, $sql);

                    if(!$retval) {
                        die('Could not find album data: ' . mysqli_error($conn));
                    }

                    if ($result->num_rows > 0) {
		                echo '<table border>';
		                echo '<thead><tr>';
		                echo '<th>'."ID".'</th>'.'<th>'."Name".'</th>'.'<th>'."Record Label".'</th>';
		                echo '</tr></thead>';
		                echo '<tbody>';

		                while($row = $result->fetch_assoc()) {
			                echo '<tr>';
			                echo "<td>" . $row["album_id"]. "</td>";
			                echo "<td>" . $row["album_name"]. "</td>";
			                echo "<td>" . $row["genre_id"]. "</td>";
			                echo '</tr>';
		                }
		
		                echo '</tbody>';
		                echo '</table>';
	                } else {
		                echo "0 results";
                	}
                    mysqli_close($conn);
                }

                else if(isset($_POST['search_artist'])) {
                    $artist_name = $_POST['artist_name'];

                    $sql = "SELECT * ".
                            "FROM artist ".
                            "WHERE artist_name = '$artist_name'";

                    $result = $conn->query($sql);

                    $retval = mysqli_query($conn, $sql);

                    if(!$retval) {
                        die('Could not find artist data: ' . mysqli_error($conn));
                    }


                    if ($result->num_rows > 0) {
		                echo '<table border>';
		                echo '<thead><tr>';
		                echo '<th>'."ID".'</th>'.'<th>'."Name".'</th>';
		                echo '</tr></thead>';
		                echo '<tbody>';

		                while($row = $result->fetch_assoc()) {
			                echo '<tr>';
			                echo "<td>" . $row["artist_id"]. "</td>";
			                echo "<td>" . $row["artist_name"]. "</td>";
			                echo '</tr>';
		                }
		
		                echo '</tbody>';
		                echo '</table>';
	                } else {
		                echo "0 results";
                	}

                    mysqli_close($conn);
                }

                else if(isset($_POST['search_genre'])) {
                    $g_ID = $_POST['g_ID'];

                    $sql = "SELECT * ".
                            "FROM genre ".
                            "WHERE genre_ID = '$g_ID'";

                    $result = $conn->query($sql);     

                    $retval = mysqli_query($conn, $sql);

                    if(!$retval) {
                        die('Could not find genre data: ' . mysqli_error($conn));
                    }

                    if ($result->num_rows > 0) {
		                echo '<table border>';
		                echo '<thead><tr>';
		                echo '<th>'."Name".'</th>'.'<th>'."Description".'</th>';
		                echo '</tr></thead>';
		                echo '<tbody>';

		                while($row = $result->fetch_assoc()) {
			                echo '<tr>';
			                echo "<td>" . $row["genre_id"]. "</td>";
			                echo "<td>" . $row["description"]. "</td>";
			                echo '</tr>';
		                }
		
		                echo '</tbody>';
		                echo '</table>';
	                } else {
		                echo "0 results";
                	}

                    mysqli_close($conn);
                }

                else if(isset($_POST['search_song'])) {
                    $song_title = $_POST['song_title'];

                    $sql = "SELECT * ".
                            "FROM song ".
                            "WHERE song_title = '$song_title'";

                    $result = $conn->query($sql);     

                    $retval = mysqli_query($conn, $sql);

                    if(!$retval) {
                        die('Could not find genre data: ' . mysqli_error($conn));
                    }

                    if ($result->num_rows > 0) {
		                echo '<table border>';
		                echo '<thead><tr>';
		                echo '<th>'."ID".'</th>'.'<th>'."Song Name".'</th>';
		                echo '</tr></thead>';
		                echo '<tbody>';

		                while($row = $result->fetch_assoc()) {
			                echo '<tr>';
			                echo "<td>" . $row["song_id"]. "</td>";
                            echo "<td>" . $row["song_title"]. "</td>";
			                echo '</tr>';
		                }
		
		                echo '</tbody>';
		                echo '</table>';
	                } else {
		                echo "0 results";
                	}

                    mysqli_close($conn);
                }

                else {
            ?>

            <p>Search:</p>
            <form method="post" action="<?php $_PHP_SELF ?>">
                <table width = "600" border = "0" cellspacing = "1" cellpadding = "2">
                    <tr>
                        <td width = "250">Search Album Name</td>
                        <td>
                            <input name ="album_name" type ="text" id ="album_name">
                        </td>
                    </tr>

                    <tr>
                        <td width = "250">Search Arist Name</td>
                        <td>
                            <input name ="artist_name" type ="text" id ="artist_name">
                        </td>
                    </tr>

                    <tr>
                        <td width = "250">Search Genre Name</td>
                        <td>
                            <input name ="g_ID" type ="text" id ="g_ID">
                        </td>
                    </tr>

                    <tr>
                        <td width = "250">Search Song Name</td>
                        <td>
                            <input name ="song_title" type ="text" id ="song_title">
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

                    <tr>
                        <td width = "250"> </td>
                        <td>
                            <input name ="search_song" type ="submit" id ="search_song"  value ="Search Song">
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
