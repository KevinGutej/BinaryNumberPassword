<?php
function generateRandomPassword($length = 20) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ!@#$%^&*()-_';
    $password = '';
    $charCount = strlen($characters) - 1;
    
    for ($i = 0; $i < $length; $i++) {
        $password .= $characters[mt_rand(0, $charCount)];
    }
    
    return $password;
}

$password = generateRandomPassword();


//Turning password into binary

$binaryPassword = '';
for ($i = 0; $i < strlen($password); $i++) {
//Finished here
}

echo "Generated Password: $password\n";
echo "Binary Representation: $binaryPassword\n";
