<?php
if(isset($_SESSION['status'])){
    if($_SESSION['status'] == "login"){
        header("Location: /index.php");
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <form action="index.php" method="post">
    <?php
        $_SESSION['status'] = "login";
        ?> 
        <h1>hello</h1>
        <button type="submit">logout</button>
    </form>
</body>
</html>