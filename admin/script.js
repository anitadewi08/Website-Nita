 // Ambil elemen input jumlah
var inputJumlah = document.querySelector('input[name="jumlah"]');
// Ambil elemen input harga
var inputHarga = document.getElementById('harga');
// Tambahkan event listener untuk input jumlah
inputJumlah.addEventListener('input', function() {
    // Ambil nilai jumlah yang diinputkan
    var jumlah = parseFloat(inputJumlah.value);
    // Tentukan harga per item berdasarkan jenis bakso (di sini saya asumsikan harga per item sudah diketahui sebelumnya)
    var hargaPerItem = 0;
    var jenisBakso = document.querySelector('select[name="jenis_bakso"]').value;
    switch (jenisBakso) {
        case 'Bakso Mercon Jumbo':
            hargaPerItem = 30000;
            break;
        case 'Mie Ayam Pangsit':
            hargaPerItem = 15000;
            break;
        case 'Bakso Tahu Mercon':
            hargaPerItem = 25000;
            break;
        case 'Mie Ayam Bakso dan Ceker':
            hargaPerItem = 20000;
            break;
        case 'Bakso Urat Jumbo':
            hargaPerItem = 25000;
            break;
        case 'Bakso Kuah':
            hargaPerItem = 10000;
            break;
        default:
            hargaPerItem = 0;
    }
    // Hitung total harga berdasarkan jumlah dan harga per item
    var totalHarga = jumlah * hargaPerItem;
    // Isi nilai total harga ke dalam input harga
    inputHarga.value = totalHarga;
});
