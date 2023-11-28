<?php
if (isset($_GET['file'])) {
$file = $_GET['file'];

if (file_exists($file) && is_readable($file) && filesize($file) > 0) {
	header('Content-Type: image');
    header('Content-Type: video');
    header('Content-Description: File Transfer');
	header("Content-Disposition: attachment; filename=\"$file\"");
    header('Content-Length: ' . filesize($file));
    ob_clean();
    flush();
	readfile($file);
	}
}
?>