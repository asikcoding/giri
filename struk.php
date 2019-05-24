<?php   
include 'koneksi.php';
var_dump($_POST);
     $nama = $_POST['pemesan'];
     $tgl = $_POST['tanggal'];
     $nama = $_POST['pemesan'];
     $tgl = $_POST['tanggal'];
     $data = mysqli_query($conn,"SELECT * From tb_pemesanan WHERE PEMESAN=$nama");
     $qry = "SELECT * From tb_pemesanan WHERE PEMESAN=$nama";
?>
<?php ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Document</title>
    <style>
        .center
            {
            margin-left: auto;
            margin-right: auto;
            width: 20%;
            }
    </style>
</head>
<body>
     <div class="col-md-3">
        <table class="table table-bordered">
            <tr >
                <td colspan="4">
                    <img src="images/icons/Logot.png"  width="125px" height="30px" alt=""></tr>
                </td> 
            <tr>
                <td colspan="4"> Alamat</td></tr>
      
            <tr>
                <td>Tanggal Pesanan</td>
                <td colspan="3"> <?php echo $qry ?> </td>
            </tr>
            <tr>
                <td>Jenis</td>
                <td>Jml</td>
                <td>Nilai</td>
                <td>Total</td>
            </tr>
            <tr>
                <td colspan="4"><span>Harga Jual</span></td>
            </tr>
            <tr>
                <td></td>
                <td>Total :</td>
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
    </div>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    </body>
    </html>