<?php   
require_once __DIR__ . '/vendor/autoload.php';
include 'koneksi.php';
$mpdf = new \Mpdf\Mpdf();
$nama = $_POST['pemesan'];
$tgl = $_POST['tanggal'];
$tgl_sekarang = date('y-m-d');
$qry = "SELECT * From tb_pemesanan WHERE PEMESAN='$nama' AND tanggal_pemesanan='$tgl'";
// $datas = mysqli_query($conn,"SELECT * From tb_pemesanan INNER JOIN tb_barang ON tb_pemesanan.ID_BARANG
//                             = tb_barang.ID WHERE PEMESAN='$nama' AND tanggal_pemesanan='$tgl'");
// SELECT tb_barang.*,  tb_harga.* FROM tb_barang INNER JOIN tb_harga ON  tb_barang.ID = tb_harga.ID "
// $dddd = var_dump($datas);

$qry = "SELECT tb_pemesanan.*, tb_barang.* From tb_pemesanan INNER JOIN tb_barang ON tb_pemesanan.ID_BARANG = tb_barang.ID 
WHERE tb_pemesanan.PEMESAN='$nama' AND tb_pemesanan.tanggal_pemesanan='$tgl'";
$datas = mysqli_query($conn,$qry);
$html = '<!DOCTYPE html>
<html lang="en">
<body>
    <div class="col-md-3">
        <table class="table table-bordered">
            <tr >
                <td colspan="4">
                    <img src="images/icons/Logot.png" width="125px" height="30px" alt=""></tr>
                </td> 
            <tr>
                <td colspan="4">Jl. Bangilan - Pasuruan <hr></td></tr>
            <tr>
                <td> Tanggal :'.$tgl_sekarang.'</td>
                <td colspan="3"> Nama : '.$nama.'</td>
            </tr>'; 
            foreach ($datas as $value){
            // $data = while(mysqli_query($conn,"SELECT * From tb_pemesanan WHERE PEMESAN='$nama' AND tanggal_pemesanan='$tgl'"));
                $html.='<tr>    
                <td>'.$value["NAMA"].'|'.$value["BAHAN"].' |</td>
                <td>'.$value["QTY"].' | '.'Rp. '.$value["HARGA"].' |</td>  
                <td> Rp. '.$value["TOTAL"].'</td>     
                </tr>';
            }
            $html.='<tr> 
              <td colspan="4"><span>Harga Jual</span></td>
            </tr>
            <tr>
                <td></td>
                <td>Total</td>
                <td colspan="2">Rumus Total</td>
            </tr>
            <tr>
                <td></td>
                <td>Non Tunai :</td>
                <td colspan="2">Rumus Total</td>
            </tr>
            <tr>
                <td></td>
                <td>Tunai :</td>
                <td colspan="2">Rumus Total</td>
            </tr>
            <tr>
                <td></td>
                <td>Kembali :</td>
                <td colspan="2">Rumus Total</td>
            </tr>
 
        </table>
    </div>';

$mpdf->WriteHTML($html);
$mpdf->Output();

