<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Method Post</h1>
<form method="post" action="<?php $_SERVER['PHP_SELF'] ?>">
    <label>Name : </label>
    <input type="text" placeholder="name" name="name">
    <label>Age : </label>
    <input type="text" placeholder="age" name="age">
    <label>Address : </label>
    <input type="text" placeholder="address" name="address">
    <input type="submit" name="btnSubmit" value="POST">
</form>
<?php
if (isset($_POST['btnSubmit'])) {
    $name = $_POST['name'];
    $age = $_POST['age'];
    $address = $_POST['address'];
    echo 'Name : ' . $name . '<br>';
    echo 'Age : ' . $age . '<br>';
    echo 'Address : ' . $address;
}
?>
</body>
</html>
