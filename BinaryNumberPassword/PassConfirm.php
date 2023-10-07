<!DOCTYPE html>
<html>

<head>
    <title>Password Matching Example</title>
</head>

<body>
    <h2>Password confirmation</h2>
    <form method="post" action="">
        <label for="password">Password:</label>
        <input type="password" name="password" id="password" required><br>

        <label for="confirm_password">Confirm Password:</label>
        <input type="password" name="confirm_password" id="confirm_password" required><br>

        <input type="submit" name="submit" value="Submit">
    </form>

    <?php
    if (isset($_POST['submit'])) {
        $password = $_POST['password'];
        $confirm_password = $_POST['confirm_password'];

        if ($password === $confirm_password) {
            echo "<p>Passwords match!</p>";
        } else {
            echo "<p>Passwords do not match. Please try again.</p>";
        }
    }
    ?>
</body>

</html>