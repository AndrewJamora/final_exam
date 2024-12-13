<?php

function insertChef($pdo, $job_title, $status) {

	$sql = "INSERT INTO job_postings (job_title, status) VALUES(?,?)";

	$stmt = $pdo->prepare($sql);
	$executeQuery = $stmt->execute([$job_title, $status]);

	if ($executeQuery) {
		return true;
	}
}

function GetAlljobs($pdo) {
	$sql = "SELECT * FROM job_postings ";
	$stmt = $pdo->prepare($sql);
	$executeQuery = $stmt->execute();

	if ($executeQuery) {
		return $stmt->fetchAll();
	}
}


?>