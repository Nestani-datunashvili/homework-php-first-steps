<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="post">
        <input type="text" name="name" id="" placeholder="Enter your name" required>
        <input type="password" name="password" placeholder="Enter your password" required>
        <input type="password" name="confirm_password" placeholder="Confirm your password" required>
        <button type="submit">Submit</button>
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] == "POST") {
        $name = $_POST['name'];
        $password = $_POST['password'];
        $password_confirm = $_POST['confirm_password'];

        if ($password === $password_confirm) {
            echo "<script>alert('Hello, $name! You have successfully registered.');</script>";
        } else {
            echo "<script>alert('Password and confirmation do not match. Try again.');</script>";
        }
    }
    ?>
</body>
</html>
