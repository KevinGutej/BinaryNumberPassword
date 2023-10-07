<?php
function generateRandomPassword($length = 12) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ!@#$%^&*()-_';
    $password = '';
    $charCount = strlen($characters) - 1;
    
    for ($i = 0; $i < $length; $i++) {
        $password .= $characters[mt_rand(0, $charCount)];
    }
    
    return $password;
}


$password = generateRandomPassword();


$hashedPassword = password_hash($password, PASSWORD_BCRYPT);

echo "Generated Password: $password\n";
echo "Hashed Password: $hashedPassword\n";
?>