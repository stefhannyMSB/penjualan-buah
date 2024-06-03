<?php 
include 'koneksi.php';

if(isset($_POST['simpan'])) {
    $jenis = $_POST['jenis'];
    $harga = $_POST['harga'];
    
    var_dump($jenis, $harga);

    $sql = "INSERT INTO tb_jenis VALUES(NULL, '$jenis', '$harga')";
    if(empty($jenis) || empty($harga)) {
        echo "
            <script>
                alert('Pastikan Anda Mengisi Semua Data');
                window.location = 'jenis-entry.php';
            </script>
        ";
    }elseif(mysqli_query($koneksi, $sql)) {
        echo "
            <script>
                alert('Data jenis buah Berhasil Ditambahkan');
                window.location = 'jenis.php'
            </script>
        ";
    }else {
        echo "
            <script>
                alert('Terjadi Kesalahan');
                window.location = 'jenis-entry.php'
            </script>
        ";
    }
}elseif(isset($_POST['edit'])) {
    $id = $_POST['id'];
    $jenis = $_POST['jenis'];
    $harga = $_POST['harga'];


    $sql = "UPDATE tb_jenis SET 
            jenis = '$jenis',
            harga = '$harga'
            WHERE id = $id 
            ";

    if(mysqli_query($koneksi, $sql)) {
        echo "
            <script>
                alert('Data jenis Berhasil Diubah');
                window.location = 'jenis.php';
            </script>
        ";
    }else {
        echo "
            <script>
                alert('Terjadi Kesalahan');
                window.location = 'jenis-edit.php';
            </script>
        ";
    }
}elseif(isset($_POST['hapus'])) {
    $id = $_POST['id'];

    $sql = "DELETE FROM tb_jenis WHERE id = $id";
    if(mysqli_query($koneksi, $sql)) {
        echo "
            <script>
                alert('Data jenis Berhasil Dihapus');
                window.location = 'jenis.php';
            </script>
        ";
    }else {
        echo "
            <script>
                alert('Data jenis Gagal Dihapus');
                window.location = 'jenis.php';
            </script>
        ";
    }
}else {
    header('location: jenis.php');
}
