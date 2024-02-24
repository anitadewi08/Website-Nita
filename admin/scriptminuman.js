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
    var jenisBakso = document.querySelector('select[name="jenis_minuman"]').value;
    switch (jenisBakso) {
        case 'Aneka Jus Buah':
            hargaPerItem = 10000;
            break;
        case 'Teh Manis Dingin':
            hargaPerItem = 5000;
            break;
        case 'Es Buah':
            hargaPerItem = 12000;
            break;
        case 'Es Cincau Hijau':
            hargaPerItem = 12000;
            break;
        case 'Es Cendol Nangka':
            hargaPerItem = 12000;
            break;
        case 'Sop Buah Premium':
            hargaPerItem = 16000;
            break;
        default:
            hargaPerItem = 0;
    }
    // Hitung total harga berdasarkan jumlah dan harga per item
    var totalHarga = jumlah * hargaPerItem;
    // Isi nilai total harga ke dalam input harga
    inputHarga.value = totalHarga;
});