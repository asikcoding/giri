<?php
        var_dump($_POST);

        // var_dump($_FILES);
        include 'koneksi.php';
        $pemesan      = $_POST["pemesan"];
        $barang       = $_POST["barang"];
        $biaya        = $_POST["biaya"];
        $finishing    = $_POST["finishing"];
        $jumlah       = $_POST["jumlah"];
        $total        = $_POST["total"];
        // $tanggal      = $_POST["tanggal"];
        $tanggal_pesan = $_POST["tanggal_pesan"];
        $uangmuka     = $_POST["uangmuka"];
        $tanggungan   = $_POST["tanggungan"];
        $foto         = ($_FILES['gambar']['name']);
	      $tempat          = ($_FILES['gambar']['tmp_name']);

        if(isset($_POST['submit'])){
            if (move_uploaded_file($tempat,'images/'.$foto)) {
            echo    $qry =  "INSERT INTO tb_pemesanan VALUES (null,'$barang',
                        '$pemesan','$biaya','$jumlah','$total','$tanggal_pesan',
                        '$uangmuka', '$tanggungan','$foto','$finishing')";
              $simpan = mysqli_query($conn,$qry);

            if ($uangmuka != '') {
                // var_dump($uangmuka);
                $ambil = mysqli_query($conn,"SELECT * FROM tb_pemesanan ORDER BY ID_PEMESANAN  DESC LIMIT 1 ");
                foreach ($ambil as $value);
                // var_dump($value);
                $id_pemesanan = $value['ID_PEMESANAN'];
                $qry = "INSERT INTO tb_pembayaran VALUES (null,$id_pemesanan,$tanggal_pesan,'Uang Muka',$tanggungan)";

                $simpan = mysqli_query($conn,$qry);
                die();
            }
            // echo ("<script LANGUAGE='JavaScript'>
            //     window.alert('Pemsanan Sudah Disimpan');
            //     window.location.href='index.html';
            // </script>");
            }else{
                echo $qry = "INSERT INTO tb_pemesanan VALUES ('','$barang',
                '$pemesan','$biaya',$jumlah,$total,'$tanggal_pesan',
                $uangmuka, $tanggungan,'','$finishing')";

                $simpan = mysqli_query($conn, $qry);
                if ($uangmuka != '') {
                    // var_dump($uangmuka);
                    $ambil = mysqli_query($conn,"SELECT * FROM tb_pemesanan ORDER BY ID_PEMESANAN  DESC LIMIT 1 ");
                    foreach ($ambil as $value);
                    // var_dump($value);
                    $id_pemesanan = $value['ID_PEMESANAN'];
                    $qry = "INSERT INTO tb_pembayaran VALUES ('',$id_pemesanan,$tanggal_pesan,'Uang Muka',$tanggungan)";

                    $simpan = mysqli_query($conn,$qry);
                }
                echo ("<script LANGUAGE='JavaScript'>
                        window.alert('Pemsanan Sudah Disimpan');
                        window.location.href='index.html';
                        </script>");
            }
        }
        //error_reporting(0);


?>
