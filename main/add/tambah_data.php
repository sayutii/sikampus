<?php 
    include('../../koneksi.php');
    $nama = $_GET['nama'];
    $nim = $_GET['nama'];
    $semester = $_GET['semester'];

    $query = ("INSERT INTO mahasiswa (id, nama, nim, semester) VALUES('', '$nama', '$nim', '$semester')");
    mysqli_query($conn, $query);
    header('Location: ../index.php?page=data-mahasiswa');
?>