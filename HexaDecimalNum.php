<!DOCTYPE html>
<html>
<head>
    <title>Decimal to Hexadecimal Conversion</title>
</head>
<body>
    <form method="post" action="">
        Enter a decimal number: <input type="text" name="decimal_number">
        <input type="submit" name="convert" value="Convert to Hexadecimal">
    </form>

    <?php
    if (isset($_POST['convert'])) {
        $decimal_number = $_POST['decimal_number'];


        if (is_numeric($decimal_number)) {
            $hexadecimal_number = dechex($decimal_number);
            echo " $decimal_number is equivalent to hexadecimal: $hexadecimal_number";
        } else {
            echo "Please enter a 'decimal' number";
        }
    }
    ?>
</body>
</html>