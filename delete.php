<?php 
    require_once 'dbkoneksi.php';

    // mendapatkan nilai dari paremeter id pada url
    $delete = $_GET['id'];

    // perintah sql
    $sql ="DELETE FROM pelanggan WHERE id = ?";
    
    // menyiapkan statmen 
    $stmt = $conn->prepare($sql);

    // mengeksekusi statmen
    $stmt->execute([$delete]);




?>