<?php require_once 'core/dbConfig.php'; ?>
<?php require_once 'core/models.php'; ?>
<?php  
if (!isset($_SESSION['username'])) {
	header("Location: login.php");
}

$getUserByID = getUserByID($pdo, $_SESSION['user_id']);

if ($getUserByID['is_admin'] == 1) {
	header("Location: HR/index.php");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link rel="stylesheet" href="styles.css">
</head>
<body>
	<h1 style="text-align: center;">Hello there! Applicant  <span style="color: blue"><?php echo $_SESSION['username']; ?></span></h1>
	<p><a href="core/handleForms.php?logoutUserBtn=1">Logout</a></p>
	<table style="width:100%; margin-top: 20px;">
		<tr>
			<th>Job title</th>
			<th>Status</th>
			<th>Date Added</th>
			<th>Action</th>
		</tr>
		<?php $GetAlljobs = GetAlljobs($pdo); ?>
		<?php foreach ($GetAlljobs as $row) { ?>
			<tr>
				<td><?php echo $row['job_title']; ?></td>
				<td><?php echo $row['status']; ?></td>
				<td><?php echo $row['date_added']; ?></td>
				<td><a href="apply.php">Apply</a></td>
				</tr>
				<?php } ?>
</body>
</html>