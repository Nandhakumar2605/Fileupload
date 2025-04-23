<?php
include_once "./db.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<div class="container">
<div class="row">
<?php
$sql = "SELECT * FROM documents";
$result = $conn->query($sql);
while ($row = $result->fetch_assoc()) { ?>

<div class="card col-lg-6">
  <div class="card-body">
<?php echo $row["filename"]; ?> 
<a href="<?php echo $row['filepath']; ?>" download>Download</a>  
  </div>
</div>


<?php } ?>


</div>


</div>
<body>





<a href="index.php">Back to Upload</a>

</body>
</html>