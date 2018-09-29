
        <div class="tab-pane fade show active" id="v-nav-pesan" role="tabpanel" aria-labelledby="v-nav-pesan-tab">
            <h4>Penjual <small class="text-muted">Pesan Ayam</small></h4>
            
            <?php
                if (isset($_GET['err'])) {
                    switch ($_GET['err']) {
                        case '11':
                            echo '
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            Stok tidak cukup, silakan coba lagi!
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            </div>
                            ';
                        break;
                    }
                    
                }
                if (isset($_GET['u'])) {
                    $q = $link->query("SELECT username, nama, stok, harga FROM login WHERE username = '".base64_decode($_GET['u'])."'");
                    $r = $q->fetch_assoc();

                    echo '
                    <div class="card" style="margin-top:25px;">
                        <h5 class="card-header">Masukkan Jumlah</h5>
                        <div class="card-body">
                            <form action="op.php?op=ins-trans" method="post">
                                <div class="form-group">
                                    <label for="peternak">Peternak</label>
                                    <input class="form-control" type="text" name="peternak" id="peternak" value="'.$r['username'].'" readonly>
                                </div>
                                <div class="form-group">
                                    <label for="t_harga">Harga</label>
                                    <div class="input-group mb-2 mb-sm-0">
                                        <span class="input-group-addon">Rp</span>
                                        <input class="form-control" type="text" name="harga" id="t_harga" value="'.$r['harga'].'" readonly>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="t_jumlah">Jumlah</label>
                                    <input class="form-control" type="number" name="jumlah" id="t_jumlah" min="0" max="'.$r["stok"].'">
                                </div>
                                <div class="form-group">
                                    <label for="t_total">Total Harga</label>
                                    <div class="input-group mb-2 mb-sm-0">
                                        <span class="input-group-addon">Rp</span>
                                        <input class="form-control" type="text" name="total" id="t_total" readonly>
                                    </div>
                                </div>
                                <button class="btn btn-success" type="submit"><span class="oi oi-cart" title="graph" aria-hidden="true"></span> Pesan</button>
                            </form>
                        </div>
                    </div>
                    ';
                }
            ?>
            <div class="card" style="margin:25px 0;">
                <h5 class="card-header">Info Stok Peternak</h5>
                <div class="card-body">
                        <table class="table table-responsive-sm table-hover table-sm">
                            <thead>
                            <tr>
                                <th scope="col">PETERNAK</th>
                                <th scope="col">STOK</th>
                                <th scope="col">HARGA</th>
                                <th scope="col">ACTION</th>
                            </tr>
                            </thead>
                            <tbody>
                        <?php
                            $q = $link->query("SELECT username, nama, stok, harga FROM login WHERE stok > 0");
                            while ($r = $q->fetch_assoc()) {
                                echo "
                                <tr>
                                    <td>".$r['nama']."</td>
                                    <td>".$r['stok']."</td>
                                    <td>".$r['harga']."</td>
                                    <td><a class='btn btn-primary btn-sm' href='dashboard.php?u=".base64_encode($r['username'])."'><span class='oi oi-cart' title='graph' aria-hidden='true'></span> Pesan</a></td>
                                </tr>
                                ";
                            }

                        ?>
                            </tbody>
                        </table>
                </div>
            </div>
        </div>
        <div class="tab-pane fade" id="v-nav-trans" role="tabpanel" aria-labelledby="v-nav-trans-tab">
            <h4>Penjual <small class="text-muted">Transaksi Penjual</small></h4>

            <div class="card" style="margin:25px 0;">
                <h5 class="card-header">Info Transaksi Penjual</h5>
                <div class="card-body">
                        <table class="table table-responsive-sm table-hover table-sm">
                            <thead>
                            <tr>
                                <th scope="col">PETERNAK</th>
                                <th scope="col">PENJUAL</th>
                                <th scope="col">TANGGAL TRANSAKSI</th>
                                <th scope="col">WAKTU TRANSAKSI</th>
                                <th scope="col">JUMLAH</th>
                                <th scope="col">HARGA</th>
                                <th scope="col">TOTAL</th>
                            </tr>
                            </thead>
                            <tbody>
                        <?php
                            $q = $link->query("SELECT * FROM transaksi WHERE kd_penjual = '".$_SESSION['username']."'");
                            while ($r = $q->fetch_assoc()) {
                                echo "
                                <tr>
                                    <td>".$r['kd_peternak']."</td>
                                    <td>".$r['kd_penjual']."</td>
                                    <td>".$r['tgl_transaksi']."</td>
                                    <td>".$r['waktu_transaksi']."</td>
                                    <td>".$r['jml']."</td>
                                    <td>".$r['harga']."</td>
                                    <td>".$r['total']."</td>
                                </tr>
                                ";
                            }

                        ?>
                            </tbody>
                        </table>
                </div>
            </div>
        </div>
