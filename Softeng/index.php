<?php

session_start();

// Ambil URL yang diminta dan hapus trailing slash jika ada
$request_uri = rtrim($_SERVER['REQUEST_URI'], '/');

// Pecah URL menjadi array berdasarkan '/' sebagai pemisah
$uri_parts = explode('/', $request_uri);

// Tentukan routing berdasarkan array yang dihasilkan
switch ($uri_parts[2] ?? '') {
    // Halaman login
    case '':
        $title = "Dashboard"; // yang perlu diganti (judul halaman)
        
        require_once './koneksi.php';
        require_once './template/header-mobile.php';
        require_once "./pages/dashboard.php"; // halaman
        require_once './template/footer.php';
        break;
    
    // Halaman login
    case 'login':
        $title = "Login"; // yang perlu diganti (judul halaman)

        require_once './koneksi.php';
        require_once './template/header.php';
        require_once "./pages/login.php"; // halaman
        require_once './template/footer.php';
        break;

    // Halaman register
    case 'register':
        $title = "Register"; // yang perlu diganti (judul halaman)
        
        require_once './koneksi.php';
        require_once './template/header.php';
        require_once "./pages/register.php"; // halaman
        require_once './template/footer.php';
        break;

    // Halaman ruang ganti
    case 'ruang-ganti':
        $title = "Ruang ganti"; // yang perlu diganti (judul halaman)
        
        require_once './koneksi.php';
        require_once './template/header.php';
        require_once "./pages/ruang-ganti.php"; // halaman
        require_once './template/footer.php';
        break;

            // Halaman ruang ganti
    case 'pemesanan':
        $title = "Pemesanan Ruang"; // yang perlu diganti (judul halaman)
        
        require_once './koneksi.php';
        require_once './template/header.php';
        require_once "./pages/pemesanan.php"; // halaman
        require_once './template/footer.php';
        break;

    default:
        // Halaman 404 jika route tidak ditemukan
        $title = "404 page not found";

        require_once './koneksi.php';
        require_once './template/header.php';
        require_once "./pages/404.php";
        require_once './template/footer.php';
        break;
}