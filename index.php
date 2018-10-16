<?php 

	require_once 'config.php';

	$query = "SELECT * FROM siswa";

	$sql = mysqli_query($conn, $query);

	$siswa = array();

	while ($row = mysqli_fetch_array($sql)) {
		array_push($siswa, array(
			"id siswa" => $row ['id'],
			"nama siswa" => $row ['nama'],
			"kelas siswa" => $row ['kelas']
		));
	}

	echo json_encode($siswa);

	mysqli_close($conn);

 ?>