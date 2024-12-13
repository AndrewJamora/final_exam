<?php
require_once 'dbConfig.php'; 
require_once 'models.php';

if (isset($_POST['uploadjob'])) {

	$query = insertChef($pdo, $_POST['job_title'], $_POST['status']);

	if ($query) {
		header("Location: ../index.php");
	}
	else {
		echo "Insertion failed";
	}

}

if (isset($_GET['logoutUserBtn'])) {
	unset($_SESSION['username']);
	header("Location: .../login.php");
}
?>