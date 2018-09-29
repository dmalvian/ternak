$(function() {
    var harga = $("#t_harga").val();
    var jumlah, total;
    $("#t_jumlah").on("keyup", function() {
        jumlah = $("#t_jumlah").val();
        total = jumlah * harga;
        $("#t_total").val(total);
    });
});