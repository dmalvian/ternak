
        <div class="tab-pane fade show active" id="v-nav-kandang" role="tabpanel" aria-labelledby="v-nav-kandang-tab">
            <h4>Peternak <small class="text-muted">Kondisi Kandang Peternak</small></h4>
            
            <nav class="nav nav-tabs" id="nav-tab" role="tab-list" style="margin:25px 0;">
                <a class="nav-item nav-link active" id="nav-info-kandang-tab" data-toggle="tab" href="#nav-info-kandang" role="tab" aria-controls="nav-info-kandang" aria-selected="true">Info Kondisi Kandang</a>
                <a class="nav-item nav-link" id="nav-add-kandang-tab" data-toggle="tab" href="#nav-add-kandang" role="tab" aria-controls="nav-add-kandang" aria-selected="false">Input Kondisi Kandang</a>
                <a class="nav-item nav-link" id="nav-treshold-tab" data-toggle="tab" href="#nav-treshold" role="tab" aria-controls="nav-treshold" aria-selected="false">Ubah Treshold</a>
                <a class="nav-item nav-link" id="nav-chart-tab" data-toggle="tab" href="#nav-chart" role="tab" aria-controls="nav-chart" aria-selected="false">Chart Kondisi Kandang</a>
            </nav>

            <div class="tab-content" id="nav-tabContent">
                <div class="tab-pane fade show active" id="nav-info-kandang" role="tabpanel" aria-labelledby="nav-info-kandang-tab">
                    <?php include 'alert.php'; ?>
                    <div class="card" style="margin-top:25px;">
                        <h5 class="card-header">Info Treshold</h5>
                        <div class="card-body">
                                <table class="table table-responsive-sm table-hover table-sm">
                                    <thead>
                                    <tr>
                                        <th scope="col">SUHU 1</th>
                                        <th scope="col">SUHU 2</th>
                                        <th scope="col">SUHU 3</th>
                                        <th scope="col">KELEMBAPAN 1</th>
                                        <th scope="col">KELEMBAPAN 2</th>
                                        <th scope="col">KELEMBAPAN 3</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                <?php
                                    $q = $link->query("SELECT * FROM treshold WHERE kd_peternak = '".$_SESSION['username']."'");
                                    while ($r = $q->fetch_assoc()) {
                                        echo "
                                        <tr>
                                            <td>".$r['suhu_1']."</td>
                                            <td>".$r['suhu_2']."</td>
                                            <td>".$r['suhu_3']."</td>
                                            <td>".$r['kelembapan_1']."</td>
                                            <td>".$r['kelembapan_2']."</td>
                                            <td>".$r['kelembapan_3']."</td>
                                        </tr>
                                        ";
                                    }

                                ?>
                                    </tbody>
                                </table>
                        </div>
                    </div>

                    <div class="card" style="margin:25px 0;">
                        <h5 class="card-header">Info Kondisi Kandang</h5>
                        <div class="card-body">
                                <table class="table table-responsive table-hover table-sm">
                                    <thead>
                                    <tr>
                                        <th scope="col">TANGGAL</th>
                                        <th scope="col">WAKTU</th>
                                        <th scope="col">SUHU 1</th>
                                        <th scope="col">SUHU 2</th>
                                        <th scope="col">SUHU 3</th>
                                        <th scope="col">KELEMBAPAN 1</th>
                                        <th scope="col">KELEMBAPAN 2</th>
                                        <th scope="col">KELEMBAPAN 3</th>
                                        <th scope="col">JUMLAH</th>
                                        <th scope="col">FOTO KANDANG</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                <?php
                                    $q = $link->query("SELECT * FROM kondisi_kandang WHERE kd_peternak = '".$_SESSION['username']."'");
                                    while ($r = $q->fetch_assoc()) {
                                        echo "
                                        <tr>
                                            <td>".$r['tgl']."</td>
                                            <td>".$r['waktu']."</td>
                                            <td>".$r['suhu_1']."</td>
                                            <td>".$r['suhu_2']."</td>
                                            <td>".$r['suhu_3']."</td>
                                            <td>".$r['kelembapan_1']."</td>
                                            <td>".$r['kelembapan_2']."</td>
                                            <td>".$r['kelembapan_3']."</td>
                                            <td>".$r['jml_ayam']."</td>
                                            <td><img src='assets/upload/".$r['foto_ayam']."' width='100px' height='100px'></td>
                                            <td><a class='btn btn-danger btn-sm' href='op.php?op=del-kandang&id=".base64_encode($r['id'])."'><span class='oi oi-trash' title='trash' aria-hidden='true'></span></td>
                                        </tr>
                                        ";
                                    }

                                ?>
                                    </tbody>
                                </table>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="nav-add-kandang" role="tabpanel" aria-labelledby="nav-add-kandang-tab">
                    <div class="card-deck" style="margin-top:25px;">
                        <div class="card">
                            <h6 class="card-header">Masukkan Suhu</h6>
                            <div class="card-body">
                                <form action="op.php?op=ins-kandang" method="post" enctype="multipart/form-data">
                                    <div class="form-group">
                                        <label for="suhu_1">Suhu 1</label>
                                        <input class="form-control" type="number" name="suhu_1" id="suhu_1">
                                    </div>
                                    <div class="form-group">
                                        <label for="suhu_2">Suhu 2</label>
                                        <input class="form-control" type="number" name="suhu_2" id="suhu_2">
                                    </div>
                                    <div class="form-group">
                                        <label for="suhu_3">Suhu 3</label>
                                        <input class="form-control" type="number" name="suhu_3" id="suhu_3">
                                    </div>
                            </div>
                        </div>
                        <div class="card">
                            <h6 class="card-header">Masukkan Kelembapan</h6>
                            <div class="card-body">
                                    <div class="form-group">
                                        <label for="kelembapan_1">Kelembapan 1</label>
                                        <input class="form-control" type="number" name="kelembapan_1" id="kelembapan_1">
                                    </div>
                                    <div class="form-group">
                                        <label for="kelembapan_2">Kelembapan 2</label>
                                        <input class="form-control" type="number" name="kelembapan_2" id="kelembapan_2">
                                    </div>
                                    <div class="form-group">
                                        <label for="kelembapan_3">Kelembapan 3</label>
                                        <input class="form-control" type="number" name="kelembapan_3" id="kelembapan_3">
                                    </div>
                            </div>
                        </div>
                    </div>
                    <div class="card" style="margin:25px 0;">
                        <div class="card-body">
                                <div class="form-group">
                                    <label for="jum_ayam">Jumlah Ayam Terkini</label>
                                    <input class="form-control" type="number" name="jum_ayam" id="jum_ayam">
                                </div>
                                <div class="form-group">
                                    <label for="foto_kandang">Foto Kandang</label>
                                    <input class="form-control-file" type="file" name="foto_kandang" id="foto_kandang">
                                </div>
                                <button class="btn btn-success" type="submit"><span class="oi oi-browser" title="browser" aria-hidden="true"></span> Save</button>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="tab-pane fade" id="nav-treshold" role="tabpanel" aria-labelledby="nav-treshold-tab">
                    <div class="card-deck" style="margin-top:25px;">
                        <div class="card">
                            <h6 class="card-header">Masukkan Suhu</h6>
                            <div class="card-body">
                                <form action="op.php?op=upd-treshold" method="post">
                                    <div class="form-group">
                                        <label for="suhu_1">Suhu 1</label>
                                        <input class="form-control" type="number" name="suhu_1" id="suhu_1">
                                    </div>
                                    <div class="form-group">
                                        <label for="suhu_2">Suhu 2</label>
                                        <input class="form-control" type="number" name="suhu_2" id="suhu_2">
                                    </div>
                                    <div class="form-group">
                                        <label for="suhu_3">Suhu 3</label>
                                        <input class="form-control" type="number" name="suhu_3" id="suhu_3">
                                    </div>
                            </div>
                        </div>
                        <div class="card">
                            <h6 class="card-header">Masukkan Kelembapan</h6>
                            <div class="card-body">
                                    <div class="form-group">
                                        <label for="kelembapan_1">Kelembapan 1</label>
                                        <input class="form-control" type="number" name="kelembapan_1" id="kelembapan_1">
                                    </div>
                                    <div class="form-group">
                                        <label for="kelembapan_2">Kelembapan 2</label>
                                        <input class="form-control" type="number" name="kelembapan_2" id="kelembapan_2">
                                    </div>
                                    <div class="form-group">
                                        <label for="kelembapan_3">Kelembapan 3</label>
                                        <input class="form-control" type="number" name="kelembapan_3" id="kelembapan_3">
                                    </div>
                            </div>
                        </div>
                    </div>
                    <button class="btn btn-success" type="submit" style="margin:25px 0;"><span class="oi oi-browser" title="browser" aria-hidden="true"></span> Save</button>
                    </form>
                </div>

                <div class="tab-pane fade" id="nav-chart" role="tabpanel" aria-labelledby="nav-chart-tab">
                    <div class="card-deck" style="margin:25px 0;">
                        <div class="card">
                            <h6 class="card-header">Chart Suhu</h6>
                            <div class="card-body">
                                <div id="chart-suhu">
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <h6 class="card-header">Chart Kelembapan</h6>
                            <div class="card-body">
                                <div id="chart-kelembapan">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="tab-pane fade" id="v-nav-harga" role="tabpanel" aria-labelledby="v-nav-harga-tab">
            <h4>Peternak <small class="text-muted">Atur Harga dan Stok</small></h4>
            
            <?php
                $q = $link->query("SELECT username, stok, harga FROM login WHERE username = '".$_SESSION['username']."'");
                $r = $q->fetch_assoc();
            ?>

            <div class="card" style="margin:25px 0;">
                <h5 class="card-header">Atur Harga dan Stok</h5>
                <div class="card-body">
                    <form action="op.php?op=upd-hrg" method="post">
                        <div class="form-group">
                            <label for="peternak">Username</label>
                            <input class="form-control" type="text" name="username" value="<?php echo $r['username']; ?>" readonly>
                        </div>
                        <div class="form-group">
                            <label for="peternak">Stok</label>
                            <input class="form-control" type="number" name="stok" min="0" value="<?php echo $r['stok']; ?>">
                        </div>
                        <div class="form-group">
                            <label for="harga">Harga</label>
                            <div class="input-group mb-2 mb-sm-0">
                                <span class="input-group-addon">Rp</span>
                                <input class="form-control" type="number" name="harga" min="0" value="<?php echo $r['harga']; ?>">
                            </div>
                        </div>
                        <button class="btn btn-success" type="submit"><span class="oi oi-browser" title="browser" aria-hidden="true"></span> Save</button>
                    </form>
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
                                <th scope="col">ACTION</th>
                            </tr>
                            </thead>
                            <tbody>
                        <?php
                            $q = $link->query("SELECT * FROM transaksi WHERE kd_peternak = '".$_SESSION['username']."'");
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
                                    <td><a class='btn btn-danger btn-sm' href='op.php?op=del-trans&id=".base64_encode($r['id'])."'><span class='oi oi-trash' title='trash' aria-hidden='true'></span></td>
                                </tr>
                                ";
                            }

                        ?>
                            </tbody>
                        </table>
                </div>
            </div>
        </div>
