<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Apply</title>
</head>
<body>
<form action="core/handleForms.php" method="POST">
    <h1>Upload Your Resume</h1>
        <label for="resume">Resume (PDF):</label>
        <input type="file" name="resume" accept="application/pdf" required><br><br>
        <button type="submit" name="resumeupload">Upload Resume</button>
    </form>
</body>
</html>