
<?php
$namaBarang = "Scoopy";
$harga = 25000000;
$jumlah = 2;

$total = $harga * $jumlah;

echo "Nama barang: " . $namaBarang . "<br>";
echo "Harga: Rp " . number_format($harga, 0, ',', '.') . "<br>";
echo "Jumlah: " . $jumlah . "<br>";
echo "Total harga: Rp " . number_format($total, 0, ',', '.');
?>
