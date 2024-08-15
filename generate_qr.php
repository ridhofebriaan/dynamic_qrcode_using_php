<?php
require 'phpqrcode/qrlib.php'; // Include the PHP QR Code library

// Generate dynamic content (e.g., timestamp, random string, etc.)
$data = time(); // Use the current timestamp for the QR content

// Generate the QR code and save it as a PNG
$file = 'qrcode.png';
QRcode::png($data, $file, QR_ECLEVEL_L, 5);

// Output the QR code URL and data
echo json_encode([
    'url' => $file,
    'data' => $data
]);
?>
