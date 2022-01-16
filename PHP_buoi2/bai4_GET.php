<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Method Get</h1>
<form method="get">
    <label>Name : </label>
    <input type="text" placeholder="name" name="name">
    <label>Age : </label>
    <input type="text" placeholder="age" name="age">
    <label>Address : </label>
    <input type="text" placeholder="address" name="address">
    <input type="submit" name="submit" value="GET">
</form>
<?php
if (isset($_GET['submit'])) {
    $name = $_GET['name'];
    $age = $_GET['age'];
    $address = $_GET['address'];
    echo 'Name : ' . $name . '<br>';
    echo 'Age : ' . $age . '<br>';
    echo 'Address : ' . $address;
}
?>
</body>
</html>
