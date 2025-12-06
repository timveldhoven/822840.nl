'<?php
// Check if the foto parameter is provided
if (!isset($_GET['foto'])) {
    http_response_code(400);
    echo 'Error: The "foto" parameter is required.';
    exit;
}

// Get the foto parameter and sanitize it
$foto = $_GET['foto'];

// Prevent directory traversal attacks by removing any path characters
$foto = basename($foto);

// Construct the filename
$filename = $foto . '.png';

// Check if the file exists in the current directory
if (file_exists($filename)) {
    // Set the correct MIME type for PNG images
    header('Content-Type: image/png');
    
    // Output the file
    readfile($filename);
} else {
    // File not found - return 404
    http_response_code(404);
    echo 'Error: Image not found.';
}
?>'