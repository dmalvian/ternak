<?php
    session_start();
    include 'conn.php';
    $op = $_GET['op'];

    if ($op == "ins-user") {
        $username = $_POST['username'];
        $password = md5($_POST['password']);
        $grup = $_POST['grup'];
        $nama = $_POST['nama'];
        $alamat = $_POST['alamat'];
        $kota = $_POST['kota'];
        $telepon = $_POST['telepon'];
        $email = $_POST['email'];
        $stok = $_POST['stok'];
        $harga = $_POST['harga'];

        $sql = "INSERT INTO login (username, password, id_grup, nama, alamat, kota, telepon, email, stok, harga, create_login) VALUES(
                '".$username."',
                '".$password."',
                '".$grup."',
                '".$nama."',
                '".$alamat."',
                '".$kota."',
                '".$telepon."',
                '".$email."',
                '".$stok."',
                '".$harga."',
                NOW()
                )";
        $q = $link->query($sql);
        header('location:dashboard.php');
    }
    elseif ($op == "ins-trans") {
        $peternak = $_POST['peternak'];
        $harga = $_POST['harga'];
        $jumlah = $_POST['jumlah'];
        $total = $_POST['total'];

        $q = $link->query("SELECT stok FROM login WHERE username = '".$peternak."'");
        $r = $q->fetch_assoc();
        $stok = $r['stok'];
        $sisa = $stok - $jumlah;
        if ($sisa >= 0) {
            $sql = "INSERT INTO transaksi VALUES(NULL, '".$peternak."', '".$_SESSION['username']."', CURDATE(), CURTIME(), '".$jumlah."', '".$harga."', '".$total."')";
            $link->query($sql);
            $sql = "UPDATE login SET stok = '".$sisa."' WHERE username = '".$peternak."'";
            $link->query($sql);
            header('location:dashboard.php');
        }
        else {
            header('location:dashboard.php?err=11');
        }
    }
    elseif ($op == "upd-hrg") {
        $username = $_POST['username'];
        $stok = $_POST['stok'];
        $harga = $_POST['harga'];

        $sql = "UPDATE login SET stok = '".$stok."', harga = '".$harga."' WHERE username = '".$username."'";
        $link->query($sql);
        header('location:dashboard.php');
    }
    elseif ($op == "del-trans") {
        $link->query("DELETE FROM transaksi WHERE id = '".base64_decode($_GET['id'])."'");
        header('location:dashboard.php');
    }
    elseif ($op == "del-kandang") {
        $link->query("DELETE FROM kondisi_kandang WHERE id = '".base64_decode($_GET['id'])."'");
        header('location:dashboard.php');
    }
    elseif ($op == "ins-kandang") {
        $suhu_1 = $_POST['suhu_1'];
        $suhu_2 = $_POST['suhu_2'];
        $suhu_3 = $_POST['suhu_3'];
        $kel_1 = $_POST['kelembapan_1'];
        $kel_2 = $_POST['kelembapan_2'];
        $kel_3 = $_POST['kelembapan_3'];
        $jml_ayam = $_POST['jum_ayam'];
        $gambar			= $_FILES['foto_kandang'];
        $target_path	= "assets/upload/";

        if (!empty($gambar['tmp_name'])) {
			$tmp			= explode(".", basename($gambar['name']));
			$ext			= end($tmp);
			
			$new_name		= md5(uniqid()) . "." .$ext;
			$target_path	= $target_path . $new_name;
			move_uploaded_file($gambar['tmp_name'], $target_path);
		}
		else {
			$target_path = "";
			$new_name = "";
        }
        $link->query("INSERT INTO kondisi_kandang VALUES(NULL, '".$_SESSION['username']."', CURDATE(), CURTIME(), '".$suhu_1."', '".$kel_1."', '".$suhu_2."', '".$kel_2."', '".$suhu_3."', '".$kel_3."', '".$jml_ayam."', '".$new_name."')");
        header('location:dashboard.php');
    }
    elseif ($op == "upd-treshold") {
        $suhu_1 = $_POST['suhu_1'];
        $suhu_2 = $_POST['suhu_2'];
        $suhu_3 = $_POST['suhu_3'];
        $kel_1 = $_POST['kelembapan_1'];
        $kel_2 = $_POST['kelembapan_2'];
        $kel_3 = $_POST['kelembapan_3'];

        $q = $link->query("SELECT kd_peternak FROM treshold WHERE kd_peternak = '".$_SESSION['username']."'");
        if ($q->num_rows > 0) {
            $sql = "UPDATE treshold SET suhu_1 = '".$suhu_1."',
                                        suhu_2 = '".$suhu_2."',
                                        suhu_3 = '".$suhu_3."',
                                        kelembapan_1 = '".$kel_1."',
                                        kelembapan_2 = '".$kel_2."',
                                        kelembapan_3 = '".$kel_3."' 
                                        WHERE kd_peternak = '".$_SESSION['username']."'";
        }
        else {
            $sql = "INSERT INTO treshold VALUES('".$_SESSION['username']."', '".$suhu_1."', '".$suhu_2."', '".$suhu_3."', '".$kel_1."', '".$kel_2."', '".$kel_3."')";
        }
        $link->query($sql);
        header('location:dashboard.php');
    }
    elseif ($op == "upd-user") {
        $username = $_POST['username'];
        $password = md5($_POST['password']);
        $nama = $_POST['nama'];
        $alamat = $_POST['alamat'];
        $kota = $_POST['kota'];
        $telepon = $_POST['telepon'];
        $email = $_POST['email'];

        if ($_POST['password'] != "") {
            $ext = "password = '".$password."',";
        }
        else {
            $ext = "";
        }

        $sql = "UPDATE login SET " . $ext . "nama = '".$nama."', 
                                             alamat = '".$alamat."', 
                                             kota = '".$kota."', 
                                             telepon = '".$telepon."', 
                                             email = '".$email."' WHERE username = '".$username."'";
        $link->query($sql);
        header('location:dashboard.php');
        
    }