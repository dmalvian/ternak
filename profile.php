<?php

    $q = $link->query("SELECT * FROM login WHERE username = '".$_SESSION['username']."'");
    $r = $q->fetch_assoc();

?>

<div class="tab-pane fade" id="v-nav-profile" role="tabpanel" aria-labelledby="v-nav-profile-tab">
<div class="card">
    <div class="card-body">
        <form action="op.php?op=upd-user" method="post">
            <div class="form-group">
                <label for="username">Username</label>
                <input class="form-control" type="text" name="username" id="username" value="<?php echo $r['username'];?>" readonly>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input class="form-control" type="password" name="password" id="password">
            </div>
            <div class="form-group">
                <label for="nama">Nama:</label>
                <input type="text" class="form-control" name="nama" value="<?php echo $r['nama'];?>" >
            </div>
            <div class="form-group">
                <label for="alamat">Alamat:</label>
                <input type="text" class="form-control" name="alamat" value="<?php echo $r['alamat'];?>" >
            </div>
            <div class="form-group">
                <label for="kota">Kota:</label>
                <input type="text" class="form-control" name="kota" value="<?php echo $r['kota'];?>" >
            </div>
            <div class="form-group">
                <label for="telepon">No Telepon:</label>
                <input type="text" class="form-control" name="telepon" value="<?php echo $r['telepon'];?>" >
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" class="form-control" name="email" value="<?php echo $r['email'];?>" >
            </div>
            <button class="btn btn-success" type="submit"><span class="oi oi-browser" title="browser" aria-hidden="true"></span> Save</button>
        </form>
    </div>
</div>
</div>