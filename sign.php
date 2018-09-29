<?php
    session_start();
    include 'conn.php';

    if (isset($_GET['in'])) {
        $user = $_POST['username'];
        $pass = md5($_POST['password']);

        $sql = "SELECT nama, id_grup, username FROM login WHERE username = '".$user."' AND password = '".$pass."'";
        $q = $link->query($sql);

        if ($q->num_rows == 1) {
            $r = $q->fetch_assoc();
            $_SESSION['username'] = $r['username'];
            $_SESSION['grup'] = $r['id_grup'];
            $_SESSION['nama'] = $r['nama'];
            header('location:dashboard.php');
        }
        else {
            header('location:login.php');
        }
    }
    elseif (isset($_GET['out'])) {
        unset($_SESSION['username']);
        unset($_SESSION['grup']);
        unset($_SESSION['nama']);
        header('location:login.php');
    }