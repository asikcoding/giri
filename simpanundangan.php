<?php 
        var_dump($_POST);

        // ["pemesan"]=> string(5) "yubio" 
        // ["barang"]=> string(1) "4" 
        // ["biaya"]=> string(4) "1000" 
        // ["jumlah"]=> string(4) "1111" 
        // ["total"]=> string(7) "1111000" 
        // ["tanggal"]=> string(10) "2019/11/11" 
        // ["tanggal_jadi"]=> string(10) "2019/11/14" 
        // ["uangmuka"]=> string(5) "11111" 
        // ["tanggungan"]=> string(7) "1099889" 
        
        include 'koneksi.php';
        $pemesan      = $_POST["pemesan"];
        $barang       = $_POST["barang"];
        $biaya        = $_POST["biaya"]; 
        // $finishing    = $_POST["finishing"];
        $jumlah       = $_POST["jumlah"];
        $total        = $_POST["total"];
        $tanggal      = $_POST["tanggal"];
        $tanggal_jadi = $_POST["tanggal_jadi"];
        $uangmuka     = $_POST["uangmuka"];
        $tanggungan   = $_POST["tanggungan"];
        // $foto         = ($_FILES['gambar']['name']);
	    // $tempat          = ($_FILES['gambar']['tmp_name']);

        if(isset($_POST['submit'])){
            if (move_uploaded_file($tempat,'images/'.$foto)) {
            echo    $qry =  "INSERT INTO tb_pemesanan VALUES ('','$barang',
                        '$pemesan','$biaya','$jumlah','$total','$tanggal','$tanggal_jadi',
                        '$uangmuka', '$tanggungan','$foto','')";
              $simpan = mysqli_query($conn,$qry);

            if ($uangmuka != '') {
           
                $ambil = mysqli_query($conn,"SELECT * FROM tb_pemesanan ORDER BY ID_PEMESANAN  DESC LIMIT 1 ");
                foreach ($ambil as $value);
         
                $id_pemesanan = $value['ID_PEMESANAN'];
                $qry = "INSERT INTO tb_pembayaran VALUES ('',$id_pemesanan,$tanggal,'Uang Muka',$tanggungan)";
        
                $simpan = mysqli_query($conn,$qry);
            }
            echo ("<script LANGUAGE='JavaScript'>
                window.alert('Pemsanan Sudah Disimpan');
                window.location.href='index.html';
            </script>");
            }else{
                echo $qry = "INSERT INTO tb_pemesanan VALUES ('','$barang',
                '$pemesan','$biaya',$jumlah,$total,'$tanggal','$tanggal_jadi',
                $uangmuka, $tanggungan,'','')";

                $simpan = mysqli_query($conn, $qry);
                if ($uangmuka != '') {
                
                    $ambil = mysqli_query($conn,"SELECT * FROM tb_pemesanan ORDER BY ID_PEMESANAN  DESC LIMIT 1 ");
                    foreach ($ambil as $value);
            
                    $id_pemesanan = $value['ID_PEMESANAN'];
                    $qry = "INSERT INTO tb_pembayaran VALUES ('',$id_pemesanan,$tanggal,'Uang Muka',$tanggungan)";
            
                    $simpan = mysqli_query($conn,$qry);
                }
                echo ("<script LANGUAGE='JavaScript'>
                        window.alert('Pemsanan Sudah Disimpan');
                        window.location.href='index.html';
                        </script>");
            }
        }

      

?>