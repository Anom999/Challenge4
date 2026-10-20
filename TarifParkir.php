
<?php
$jenis = "truk";
$lamaJam = 20;

if ($jenis == "motor") {
    $tarif = 2000;
    $tambahan = 1000;
} elseif ($jenis == "mobil") {
    $tarif = 5000;
    $tambahan = 3000;
} elseif ($jenis == "truk") {
    $tarif = 10000;
    $tambahan = 5000;
} else {
    echo "Jenis kendaraan tidak tersedia";
    exit;
}

if ($lamaJam > 2) {
    $tarif = $tarif + (($lamaJam - 2) * $tambahan);
}

echo "Jenis kendaraan: $jenis <br>";
echo "Lama parkir: $lamaJam jam <br>";
echo "Total parkir: Rp " . $tarif;

?>
