<?php
// session_start();
// if(isset($_SESSION['status'])){
//     if($_SESSION['status'] == "logoff"){
//         header("Location: /index.php");
//     }
// }
// else{
//     $_SESSION['status'] = "index";
// }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <form action="logout.php" method="post">
        <?php
        $_SESSION['status'] = "logoff";
        ?>
        <h1>hi</h1>
        <button type="submit">login</button>
    </form>
</body>
</html>
