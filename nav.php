<?php

    switch($_SESSION['grup']) {
        case "Admin":
            echo '
            <a class="nav-link active" id="v-nav-account-tab" data-toggle="pill" href="#v-nav-account" role="tab" aria-controls="v-nav-account" aria-selected="true"><span class="oi oi-people" title="people" aria-hidden="true"></span> User Account</a>
            ';    
        break;
        case "Penjual":
            echo '
            <a class="nav-link active" id="v-nav-pesan-tab" data-toggle="pill" href="#v-nav-pesan" role="tab" aria-controls="v-nav-pesan" aria-selected="true"><span class="oi oi-cart" title="cart" aria-hidden="true"></span> Pemesanan</a>
            <a class="nav-link" id="v-nav-trans-tab" data-toggle="pill" href="#v-nav-trans" role="tab" aria-controls="v-nav-trans" aria-selected="false"><span class="oi oi-graph" title="graph" aria-hidden="true"></span> Transaksi</a>
            ';    
        break;
        case "Peternak":
            echo '
            <a class="nav-link active" id="v-nav-kandang-tab" data-toggle="pill" href="#v-nav-kandang" role="tab" aria-controls="v-nav-kandang" aria-selected="true"><span class="oi oi-home" title="home" aria-hidden="true"></span> Kondisi Kandang</a>
            <a class="nav-link" id="v-nav-harga-tab" data-toggle="pill" href="#v-nav-harga" role="tab" aria-controls="v-nav-harga" aria-selected="false"><span class="oi oi-dollar" title="dollar" aria-hidden="true"></span> Atur Harga</a>
            <a class="nav-link" id="v-nav-trans-tab" data-toggle="pill" href="#v-nav-trans" role="tab" aria-controls="v-nav-trans" aria-selected="false"><span class="oi oi-graph" title="graph" aria-hidden="true"></span> Transaksi</a>
            ';    
        break;
    }