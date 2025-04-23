<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="jquery-3.7.1.min.js"></script>
</head>

<body>

<form action="upload.php" method="POST" enctype="multipart/form-data">
<label>Username:</label>
<input type="text" name="username" required><br><br>
  <input type="file" name="file" accept=".pdf,.doc,.docx" required>
  <button type="submit">Upload</button>
</form>





</body>

</html>