<?php

    $q = $link->query("SELECT * FROM kondisi_kandang WHERE kd_peternak = '".$_SESSION['username']."' ORDER BY id DESC LIMIT 1");
    if ($q->num_rows == 1) {
        $r = $q->fetch_assoc();
        $suhu_1 = $r['suhu_1'];
        $suhu_2 = $r['suhu_2'];
        $suhu_3 = $r['suhu_3'];
        $kel_1 = $r['kelembapan_1'];
        $kel_2 = $r['kelembapan_2'];
        $kel_3 = $r['kelembapan_3'];

        $q = $link->query("SELECT * FROM treshold WHERE kd_peternak = '".$_SESSION['username']."'");
        if ($q->num_rows == 1) {
            $r = $q->fetch_assoc();
            if ($suhu_1 > $r['suhu_1']) {
                echo '
                <div class="alert alert-danger alert-dismissible fade show" role="alert" style="margin-top:10px;">
                    Suhu 1 ('.$suhu_1.') melebihi Treshold ('.$r['suhu_1'].') !
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                ';
            }
            if ($suhu_1 > $r['suhu_2']) {
                echo '
                <div class="alert alert-danger alert-dismissible fade show" role="alert" style="margin-top:10px;">
                    Suhu 1 ('.$suhu_2.') melebihi Treshold ('.$r['suhu_2'].') !
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                ';
            }
            if ($suhu_1 > $r['suhu_3']) {
                echo '
                <div class="alert alert-danger alert-dismissible fade show" role="alert" style="margin-top:10px;">
                    Suhu 1 ('.$suhu_3.') melebihi Treshold ('.$r['suhu_3'].') !
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                ';
            }
            if ($kel_1 > $r['kelembapan_1']) {
                echo '
                <div class="alert alert-danger alert-dismissible fade show" role="alert" style="margin-top:10px;">
                    Suhu 1 ('.$kel_1.') melebihi Treshold ('.$r['kelembapan_1'].') !
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                ';
            }
            if ($kel_2 > $r['kelembapan_2']) {
                echo '
                <div class="alert alert-danger alert-dismissible fade show" role="alert" style="margin-top:10px;">
                    Suhu 1 ('.$kel_2.') melebihi Treshold ('.$r['kelembapan_2'].') !
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                ';
            }
            if ($kel_3 > $r['kelembapan_3']) {
                echo '
                <div class="alert alert-danger alert-dismissible fade show" role="alert" style="margin-top:10px;">
                    Suhu 1 ('.$kel_3.') melebihi Treshold ('.$r['kelembapan_3'].') !
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                ';
            }
        }
    }

?>