<?php
/**
 * using mysqli_connect for database connection
 */

$databaseHost = 'localhost';
$databaseName = 'crud_danu';
$databaseUsername = 'root';
$databasePassword = '';

try {
    $mysqli = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName);

    if ($mysqli === false) {
        throw new Exception("404 Found: " . mysqli_connect_error());
    }

    // Lanjutkan dengan operasi database lainnya di sini
} catch (Exception $e) {
    // Tangani pengecualian di sini
    ?>
    <div>
        <h1><?= htmlspecialchars($e->getMessage()) ?></h1>
    </div>
    <?php
    // echo "Terjadi kesalahan: " . $e->getMessage();
    // Anda dapat menambahkan kode lain sesuai kebutuhan, seperti logging atau pesan kesalahan yang lebih rinci.
}
?>
