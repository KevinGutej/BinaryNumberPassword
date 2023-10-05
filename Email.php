<!DOCTYPE html>
<html>

<head>
    <title>Email Creation Form</title>
</head>

<body>
    <h1>Create an Email</h1>
    <form action="process_email.php" method="POST">
        <label for="email">Email Address:</label>
        <input type="email" id="email" name="email" required placeholder="Enter your email">
        <small>Example: user@example.com</small>
        <small>Example: user@gmail.com</small>
        <small>Example: user@outlook.com</small>
        <small>Example: user@yahoo.com</small>

        <br>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required placeholder="Enter your password">

        <br>

        <input type="submit" value="Create Email">
    </form>
</body>

</html>