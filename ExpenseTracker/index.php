<?php
require './connect.php';
$sqlQuery = 'select * from expenses';
$phone_data = mysqli_query($conn,$sqlQuery);
$result = mysqli_fetch_all($phone_data,MYSQLI_ASSOC);
// var_dump($result);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Expenses Tracker</title>

</head>
<body>
<div class='Add'>
        <form action="connect.php" method="post"> 
        <h1>Expense Tracker</h1>
<form id="expense-form">
  <div>
    <label for="entry-type">Entry Type:</label>
    <select id="entry-type">
        <option value="expense">Expense</option>
        <option value="food">food</option>
    </select>
</div><br>
<div>
  
  <label for="name">Name:</label>
  <input type="text" id="name" placeholder="Enter expense name">
</div><br>
  <div>

    <label for="amount">Amount:</label>
    <input type="number" id="amount" placeholder="Enter amount">
    <button type="submit">Add Expense</button>
  </div>
</form>

            
            
</body>
</html>