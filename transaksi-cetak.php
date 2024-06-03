<?php
include('koneksi.php');
require_once("dompdf/autoload.inc.php");

use Dompdf\Dompdf;

$dompdf = new Dompdf();
$query = mysqli_query($koneksi, "SELECT * FROM tb_transaksi");
$html = '<center><h3>Data Transaksi</h3></center><hr/><br>';
$html .= '<table border="1" width="100%">
            <tr>
                <th>Nama</th>
                <th>jenisbuah</th>
                <th>harga</th>
                <th>tanggal</th>
            </tr>';
$no = 1;
while ($transaksi = mysqli_fetch_array($query)) {
    $html .= "<tr>
                <td>" . $transaksi['nama'] . "</td>
                <td>" . $transaksi['jenisbuah'] . "</td>
                <td>Rp. " . number_format($transaksi['harga']) . "</td>
                <td>" . $transaksi['tanggal'] . "</td>
            </tr>";
    $no++;
}
$html .= "</table>";
$dompdf->loadHtml($html);
// Setting ukuran dan orientasi kertas
$dompdf->setPaper('A4', 'potrait');
// Rendering dari HTML Ke PDF
$dompdf->render();
// Melakukan output file Pdf
$dompdf->stream('laporan-transaksi.pdf');
?>
