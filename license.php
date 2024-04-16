<?php
function generateLicenseKey($length = 16) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $licenseKey = '';
    for ($i = 0; $i < $length; $i++) {
        $licenseKey .= $characters[rand(0, strlen($characters) - 1)];
    }
    return $licenseKey;
}

$licenseKey = generateLicenseKey();
echo "Server generate a key license -> $licenseKey";
?>
