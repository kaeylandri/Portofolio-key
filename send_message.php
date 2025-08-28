<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nama   = htmlspecialchars($_POST['nama']);
    $email  = htmlspecialchars($_POST['email']);
    $pesan  = htmlspecialchars($_POST['pesan']);

    // Simulasi kirim pesan
    echo "<script>
        alert('Pesan berhasil dikirim! Terima kasih, $nama');
        window.location.href='index.html'; // balik ke halaman utama
    </script>";
}
?>
