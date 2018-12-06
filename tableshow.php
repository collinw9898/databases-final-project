<?php

function show_artists($conn) {
	$sql = "SELECT artist_id, artist_name, label_name FROM artist, record_label WHERE artist.label_id = record_label.label_id";
	$result = $conn->query($sql);

	if ($result->num_rows > 0) {
		echo '<table border>';
		echo '<thead><tr>';
		echo '<th>'."Artist ID".'</th>'.'<th>'."Artist Name".'</th>'.'<th>'."Record Label".'</th>';
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
	$sql = "SELECT album.album_id, album_name, artist_name, genre_id FROM album, album_creator, artist WHERE album.album_id = album_creator.album_id AND album_creator.artist_id = artist.artist_id";
	$result = $conn->query($sql);

	if ($result->num_rows > 0) {
		echo '<table border>';
		echo '<thead><tr>';
		echo '<th>'."Album ID".'</th>'.'<th>'."Album Name".'</th>'.'<th>'."Record Label".'</th>';
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
		echo '<th>'."Record Label ID".'</th>'.'<th>'."Record Label Name".'</th>'.'<th>'."Year Established".'</th>';
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
	$sql = "SELECT song.song_id, song_title, album_name, artist_name, song.genre_id FROM song, album, song_writer, artist WHERE song.album_id = album.album_id AND song.song_id = song_writer.song_id AND song_writer.artist_id = artist.artist_id";
	$result = $conn->query($sql);

	if ($result->num_rows > 0) {
		echo '<table border>';
		echo '<thead><tr>';
		echo '<th>'."Song ID".'</th>'.'<th>'."Song Title".'</th>'.'<th>'."Artist".'</th>'.'<th>'."Record Label".'</th>'.'<th>'."Genre".'</th>';
		echo '</tr></thead>';
		echo '<tbody>';

		while($row = $result->fetch_assoc()) {
			echo '<tr>';
			echo "<td>" . $row["song_id"]. "</td>";
			echo "<td>" . $row["song_title"]. "</td>";
			echo "<td>" . $row["artist_name"]. "</td>";
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