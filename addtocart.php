<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  ASDASD 
<?php
session_start();
$item = $_POST["shopping"];


if (isset($_SESSION["array"])) {
  array_push($_SESSION["array"],$item);
}
else {
  $_SESSION["array"] = [$item];
}


// settinf data on session
var_dump($_SESSION["array"]) ;
header("location: /");
?>
</body>
</html>