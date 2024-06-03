<?php 
include 'koneksi.php';

if(isset($_POST['simpan'])) {
    $nama = $_POST['nama'];
    $jenisbuah = $_POST['jenisbuah'];
    $harga = $_POST['harga'];
    $tanggal = $_POST['tanggal'];
    
    var_dump($nama, $jenisbuah, $harga, $tanggal);

    $sql = "INSERT INTO tb_transaksi VALUES(NULL, '$nama', '$jenisbuah', '$harga', '$tanggal')";
    if(empty($nama) || empty($jenisbuah) || empty($harga) || empty($tanggal)) {
        echo "
            <script>
                alert('Pastikan Anda Mengisi Semua Data');
                window.location = 'transaksi-entry.php';
            </script>
        ";
    }elseif(mysqli_query($koneksi, $sql)) {
        echo "
            <script>
                alert('Data transaksi Berhasil Ditambahkan');
                window.location = 'transaksi.php'
            </script>
        ";
    }else {
        echo "
            <script>
                alert('Terjadi Kesalahan');
                window.location = 'transaksi-entry.php'
            </script>
        ";
    }
}elseif(isset($_POST['edit'])) {
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $jenisbuah = $_POST['jenisbuah'];
    $harga = $_POST['harga'];
    $tanggal = $_POST['tanggal'];


    $sql = "UPDATE tb_transaksi SET 
            nama = '$nama',
            jenisbuah = '$jenisbuah',
            nama = '$nama',
            tanggal = '$tanggal'
            WHERE id = $id 
            ";

    if(mysqli_query($koneksi, $sql)) {
        echo "
            <script>
                alert('Data jenis Berhasil Diubah');
                window.location = 'transaksi.php';
            </script>
        ";
    }else {
        echo "
            <script>
                alert('Terjadi Kesalahan');
                window.location = 'transaksi-edit.php';
            </script>
        ";
    }
}elseif(isset($_POST['hapus'])) {
    $id = $_POST['id'];

    $sql = "DELETE FROM tb_transaksi WHERE id = $id";
    if(mysqli_query($koneksi, $sql)) {
        echo "
            <script>
                alert('Data jenis Berhasil Dihapus');
                window.location = 'transaksi.php';
            </script>
        ";
    }else {
        echo "
            <script>
                alert('Data transaksi Gagal Dihapus');
                window.location = 'transaksi.php';
            </script>
        ";
    }
}else {
    header('location: transaksi.php');
}
