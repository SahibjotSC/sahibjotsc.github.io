<?php
	$uname = $_POST["uname"];
	$psw = $_POST["psw"];
	
	$conn = new mysqli('localhost', 'root', '', 'test1');
	if ($conn->connect_error) {
		die('Connection Failed : '.$conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into registration(uname, psw) values(?, ?)");
		$stmt->bind_param("ss", $uname, $psw);
		$stmt->execute();
		echo "registration done...";
		$stmt->close();
		$conn->close();
	}
?>