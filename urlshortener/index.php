<?php
require './connect.php';
$sqlQuery = 'select * from url';
$phone_data = mysqli_query($conn,$sqlQuery);
$result= mysqli_fetch_all($phone_data,MYSQLI_ASSOC);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<form action="add.php" method="post">
        <label for="url">Enter URL:</label>
        <input type="text" id="url" name="url" required>
        <button type="submit">Shorten URL</button>
    </form>
</body>
</html>