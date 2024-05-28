<?php
require './config.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $pdo = connectDb();
    if ($pdo) {
        // Fetch the logo filename
        $stmt = $pdo->prepare("SELECT logo FROM doanhnghiep WHERE madn = ?");
        $stmt->execute([$id]);
        $logo = $stmt->fetchColumn();

        // Delete the record from the database
        $stmt = $pdo->prepare("DELETE FROM doanhnghiep WHERE madn = ?");
        $stmt->execute([$id]);

        // Delete the logo file
        if ($logo) {
            $logoPath = realpath(dirname(__FILE__)) . '/img_logo/' . $logo;
            if (file_exists($logoPath)) {
                unlink($logoPath);
            }
        }

        // Redirect back to index.php
        header('Location: index.php');
        exit;
    } else {
        echo 'Could not connect to the database.';
    }
} else {
    echo 'Invalid request.';
}
?>
