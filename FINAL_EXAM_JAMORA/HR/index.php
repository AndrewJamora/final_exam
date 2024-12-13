<?php require_once 'core/dbConfig.php'; ?>
<?php require_once 'core/models.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../styles.css">
</head>
<body>
<h1 style="text-align: center;">Hello there! Admin  <span style="color: Green"><?php echo $_SESSION['username']; ?></span></h1>
    <form action="core/handleForms.php" method="POST">
        <label for="job_title">Job Title:</label><br>
        <input type="text" name="job_title" id="job_title" required><br>

        <label for="job_title">Status:</label><br>
        <input type="text" name="status" id="status" required><br><br>

        <button type="submit" name="uploadjob">Upload</button>
    </form>
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
				<td><a href="edit.php">Edit</a>
                <a href="delete.php">Delete</a></td>
				</tr>
				<?php } ?>
	<p><a href="core/handleForms.php?logoutUserBtn=1">Logout</a></p>
</body>
</html>