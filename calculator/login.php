<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
</head>
<body>
<h2>Login</h2>
<form action="proccess.php" method = "POST" >
    <label for="username">Username:</label>
    <input type="text" name="username" required>
    <br> <br>
    <label for="email" >Email:</label>
    <input type="text" name="email" required >
    <br> <br>
    <label for="password">Password:</label>
    <input type="text" name="password" required >
    <br>
    <button type="submit">submit</button>
</form>

</body>
</html>