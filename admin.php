        <div class="tab-pane fade show active" id="v-nav-account" role="tabpanel" aria-labelledby="v-nav-account-tab">
            <h4>User Account Data <small class="text-muted">Pengelolaan Data User</small></h4>

            <nav class="nav nav-tabs" id="nav-tab" role="tab-list" style="margin:25px 0;">
                <a class="nav-item nav-link active" id="nav-view-tab" data-toggle="tab" href="#nav-view" role="tab" aria-controls="nav-view" aria-selected="true">View Account(s)</a>
                <a class="nav-item nav-link" id="nav-add-tab" data-toggle="tab" href="#nav-add" role="tab" aria-controls="nav-add" aria-selected="false">Add New Account</a>
            </nav>

            <div class="tab-content" id="nav-tabContent">
                <div class="tab-pane fade show active" id="nav-view" role="tabpanel" aria-labelledby="nav-view-tab">
                    <div class="card">
                        <h5 class="card-header">List User</h5>
                        <div class="card-body">
                            <table class="table table-responsive table-hover table-sm">
                                <thead>
                                <tr>
                                    <th scope="col">USERNAME</th>
                                    <th scope="col">ID GRUP</th>
                                    <th scope="col">NAMA</th>
                                    <th scope="col">ALAMAT</th>
                                    <th scope="col">KOTA</th>
                                    <th scope="col">TELEPON</th>
                                    <th scope="col">EMAIL</th>
                                    <th scope="col">LAST LOGIN</th>
                                    <th scope="col">CREATE LOGIN</th>
                                </tr>
                                </thead>
                                <tbody>
                            <?php
                                $q = $link->query("SELECT * FROM login");
                                while ($r = $q->fetch_assoc()) {
                                    echo "
                                    <tr>
                                        <td>".$r['username']."</td>
                                        <td>".$r['id_grup']."</td>
                                        <td>".$r['nama']."</td>
                                        <td>".$r['alamat']."</td>
                                        <td>".$r['kota']."</td>
                                        <td>".$r['telepon']."</td>
                                        <td>".$r['email']."</td>
                                        <td>".$r['last_login']."</td>
                                        <td>".$r['create_login']."</td>
                                    </tr>
                                    ";
                                }

                            ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="nav-add" role="tabpanel" aria-labelledby="nav-add-tab">
                    <div class="card">
                        <h5 class="card-header">Add New User Account</h5>
                        <div class="card-body">
                            <form action="op.php?op=ins-user" method="post">
                                <div class="form-group">
                                    <label for="username">Username</label>
                                    <input class="form-control" type="text" name="username" id="username" placeholder="Masukkan username">
                                </div>
                                <div class="form-group">
                                    <label for="password">Password</label>
                                    <input class="form-control" type="password" name="password" id="password" placeholder="Masukkan password">
                                </div>
                                <div class="form-group">
                                    <label for="grup">Group</label>
                                    <select name="grup" id="grup" class="form-control">
                                        <option value="Penjual">Penjual</option>
                                        <option value="Peternak">Peternak</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="nama">Nama:</label>
                                    <input type="text" class="form-control" name="nama" placeholder="Masukkan nama" value="">
                                </div>
                                <div class="form-group">
                                    <label for="alamat">Alamat:</label>
                                    <input type="text" class="form-control" name="alamat" placeholder="Masukkan alamat" value="">
                                </div>
                                <div class="form-group">
                                    <label for="kota">Kota:</label>
                                    <input type="text" class="form-control" name="kota" placeholder="Masukkan kota" value="">
                                </div>
                                <div class="form-group">
                                    <label for="telepon">No Telepon:</label>
                                    <input type="text" class="form-control" name="telepon" placeholder="Masukkan no telepon" value="">
                                </div>
                                <div class="form-group">
                                    <label for="email">Email:</label>
                                    <input type="email" class="form-control" name="email" placeholder="Masukkan email" value="">
                                </div>
                                <div class="form-group">
                                    <label for="stok">Stok:</label>
                                    <input type="text" class="form-control" name="stok" placeholder="Masukkan jumlah stok" value="">
                                </div>
                                <div class="form-group">
                                    <label for="text">Harga per ekor:</label>
                                    <input type="text" class="form-control" name="harga" placeholder="Masukkan harga per ekor" value="">
                                </div>
                                <button class="btn btn-success" type="submit"><span class="oi oi-browser" title="browser" aria-hidden="true"></span> Save</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
