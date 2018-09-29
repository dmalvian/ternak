<?php
    session_start();
    if (!isset($_SESSION['username'])) {
        header('location:login.php');
        die();
    }
    include_once 'conn.php';
?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
        <link href="assets/css/open-iconic-bootstrap.css" rel="stylesheet">
        <link rel="shortcut icon" href="assets/img/fav.ico" type="image/x-icon">
        <title>Peternakan</title>
    </head>
    <body style="background-color:#ecf0f5;">
        <nav class="navbar navbar-light bg-light">
            <a class="navbar-brand" href="#">
                <img src="assets/img/logo.png" width="30" height="30" class="d-inline-block align-top" alt="">
                Peternakan
            </a>
        </nav>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-3" style="padding-top:25px;">
                    <div class="card" style="margin-bottom:25px;">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $_SESSION['nama']; ?></h5>
                            <h6 class="card-subtitle mb-2 text-muted"><?php echo $_SESSION['grup']; ?></h6>
                            <a class="card-link" id="v-nav-profile-trigger" href="#v-nav-profile">Edit Profile</a>
                        </div>
                    </div>

                    <nav class="nav flex-column nav-pills" id="v-nav" role="tablist" aria-orientation="vertical">
                        <?php include_once 'nav.php'; ?>
                        <a class="nav-link" href="sign.php?out"><span class="oi oi-account-logout" title="logout" aria-hidden="true"></span> Logout</a>
                        <a id="v-nav-profile-tab" data-toggle="pill" href="#v-nav-profile" role="tab" aria-controls="v-nav-profile" aria-selected="false"></a>
                    </nav>
                </div>
                <div class="col-md-9" style="background-color:#FFF;padding-top:25px;">
                    <div class="tab-content" id="v-nav-tabContent">
                    <?php  
                        include_once strtolower($_SESSION['grup']) . '.php';
                        include_once 'profile.php';
                    ?>
                    </div>
                    <p class="text-center"><strong>&copy; 2017 - Malv</strong></p>
                </div>
            </div>
        </div>
        
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
        <script src="https://code.highcharts.com/highcharts.js"></script>
        <script src="https://code.highcharts.com/modules/series-label.js"></script>
        <script src="https://code.highcharts.com/modules/exporting.js"></script>
        <script src="assets/js/count.js"></script>
        <script>
        <?php
            $q = $link->query("(SELECT *, UNIX_TIMESTAMP(ADDTIME(tgl, waktu)) as unix_waktu FROM kondisi_kandang WHERE kd_peternak = '".$_SESSION['username']."' ORDER BY id DESC LIMIT 3) ORDER BY id");
            while ($r = $q->fetch_assoc()) {
                $waktu = $r['unix_waktu'] * 1000;
                $node['suhu_1'][] = [$waktu, (integer) $r['suhu_1']];
                $node['suhu_2'][] = [$waktu, (integer) $r['suhu_2']];
                $node['suhu_3'][] = [$waktu, (integer) $r['suhu_3']];
                $node['kel_1'][] = [$waktu, (integer) $r['kelembapan_1']];
                $node['kel_2'][] = [$waktu, (integer) $r['kelembapan_2']];
                $node['kel_3'][] = [$waktu, (integer) $r['kelembapan_3']];
            }
        ?>
        var nodeData = JSON.parse('<?php echo json_encode($node); ?>');
        </script>
        <script  src="assets/js/chart.js"></script>
        <script>
            $(function() {
                $('#v-nav-profile-trigger').on('click', function (e) {
                    e.preventDefault();
                    $('#v-nav-profile-tab')[0].click();
                });
            });
        </script>
    </body>
    </html>