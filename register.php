
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
</head>
<body>
    <form action="validate.php?m=register" method="post">
        <label for="name">Name:</label>
        <input type="text" name="name" id="name">
<br>
        <label for="username">Username:</label>
        <input type="text" name="username" id="username">
<br>
        <label for="password">Password:</label>
        <input type="password" name="password" id="password">
<br>
        <button type="submit">Register</button>
    </form>
</body>
</html>