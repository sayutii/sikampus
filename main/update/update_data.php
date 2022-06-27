<?php 

    include('../../koneksi.php');
    $id = $_GET['id'];
    $nama = $_GET['nama'];
    $nim = $_GET['nim'];
    $semester = $_GET['semester'];
    
    $query = ("UPDATE mahasiswa set nama = '$nama', nim = '$nim', semester = '$semester' WHERE id = '$id'");
    mysqli_query($conn,$query);

    header('Location: ../index.php?page=data-mahasiswa');
?>