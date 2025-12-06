<?php
// Get the 'foto' parameter from the URL
$foto = $_GET['foto'] ?? '';

// Security check: prevent directory traversal attacks
// Remove any path separators to ensure file is in current directory only
$foto = basename($foto);

// Check if the parameter is not empty
if (empty($foto)) {
    header('HTTP/1.0 400 Bad Request');
    echo 'Error: No foto parameter provided';
    exit;
}

// Additional security: check for null bytes and validate allowed characters
if (strpos($foto, "\0") !== false || !preg_match('/^[a-zA-Z0-9_-]+$/', $foto)) {
    header('HTTP/1.0 400 Bad Request');
    echo 'Error: Invalid foto parameter';
    exit;
}

// Construct the filename with .png extension
$filename = $foto . '.png';

// Check if the file exists in the current directory
if (!file_exists($filename)) {
    header('HTTP/1.0 404 Not Found');
    echo 'Error: File not found';
    exit;
}

// Check if it's actually a file (not a directory)
if (!is_file($filename)) {
    header('HTTP/1.0 403 Forbidden');
    echo 'Error: Invalid file';
    exit;
}

// Set the correct MIME type for PNG images
header('Content-Type: image/png');

// Set content length for better performance
header('Content-Length: ' . filesize($filename));

// Serve the file efficiently for large files
$handle = fopen($filename, 'rb');
if ($handle === false) {
    header('HTTP/1.0 500 Internal Server Error');
    echo 'Error: Unable to read file';
    exit;
}
fpassthru($handle);
fclose($handle);
exit;
?>
