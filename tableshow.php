<?php

function show_artists($conn) {
	$sql = "SELECT artist_id, artist_name, label_name FROM artist, record_label WHERE artist.label_id = record_label.label_id";
	$result = $conn->query($sql);

	if ($result->num_rows > 0) {
		echo '<table border>';
		echo '<thead><tr>';
		echo '<th>'."ID".'</th>'.'<th>'."Name".'</th>'.'<th>'."Record Label".'</th>';
		echo '</tr></thead>';
		echo '<tbody>';

		while($row = $result->fetch_assoc()) {
			echo '<tr>';
			echo "<td>" . $row["artist_id"]. "</td>";
			echo "<td>" . $row["artist_name"]. "</td>";
			echo "<td>" . $row["label_name"]. "</td>";
			echo '</tr>';
		}
		
		echo '</tbody>';
		echo '</table>';
	} else {
		echo "0 results";
	}
}

function show_albums($conn) {
	$sql = "SELECT album_id, album_name, genre_id FROM album";
	$result = $conn->query($sql);

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
}

function show_recordLabels($conn) {
	$sql = "SELECT label_id, label_name, year_established FROM record_label";
	$result = $conn->query($sql);

	if ($result->num_rows > 0) {
		echo '<table border>';
		echo '<thead><tr>';
		echo '<th>'."ID".'</th>'.'<th>'."Name".'</th>'.'<th>'."Record Label".'</th>';
		echo '</tr></thead>';
		echo '<tbody>';

		while($row = $result->fetch_assoc()) {
			echo '<tr>';
			echo "<td>" . $row["label_id"]. "</td>";
			echo "<td>" . $row["label_name"]. "</td>";
			echo "<td>" . $row["year_established"]. "</td>";
			echo '</tr>';
		}
		
		echo '</tbody>';
		echo '</table>';
	} else {
		echo "0 results";
	}
}

function show_songs($conn) {
	$sql = "SELECT song_id, song_title, album_name, song.genre_id FROM song, album WHERE song.album_id = album.album_id";
	$result = $conn->query($sql);

	if ($result->num_rows > 0) {
		echo '<table border>';
		echo '<thead><tr>';
		echo '<th>'."ID".'</th>'.'<th>'."Name".'</th>'.'<th>'."Record Label".'</th>';
		echo '</tr></thead>';
		echo '<tbody>';

		while($row = $result->fetch_assoc()) {
			echo '<tr>';
			echo "<td>" . $row["song_id"]. "</td>";
			echo "<td>" . $row["song_title"]. "</td>";
			echo "<td>" . $row["album_name"]. "</td>";
			echo "<td>" . $row["genre_id"]. "</td>";
			echo '</tr>';
		}
		
		echo '</tbody>';
		echo '</table>';
	} else {
		echo "0 results";
	}
}

?>