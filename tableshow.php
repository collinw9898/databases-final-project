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

?>