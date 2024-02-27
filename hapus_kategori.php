<?php
include "koneksi2.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $kategoriID = $_POST["kategoriID"];

    $query = "DELETE FROM kategoribuku WHERE kategoriID = '$kategoriID'";

    if (mysqli_query($koneksi, $query)) {
        echo "Data berhasil dihapus dari database";
    } else {
        echo "Error: "  $query  "<b>"  mysqli_query($koneksi);
    }

    mysqli_close($koneksi); // Menggunakan $koneksi, bukan $koneksi2
}
?>
