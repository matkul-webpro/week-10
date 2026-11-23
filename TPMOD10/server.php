<?php
header('Content-Type: text/plain; charset=utf-8');

$nama = isset($_POST['nama']) ? trim($_POST['nama']) : '';

if ($nama === '') {
    http_response_code(400);
    echo 'Nama tidak boleh kosong!';
    exit;
}

$namaAman = htmlspecialchars($nama, ENT_QUOTES, 'UTF-8');

echo 'Halo, ' . $namaAman . '! Selamat datang di AJAX!';
