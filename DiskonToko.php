
<?php

$total = 5000;

if ($total >= 100000) {
    $diskon = $total * 0.15;
} elseif ($total >= 50000) {
    $diskon = $total * 0.10;
} else {
    $diskon = 0;
}

$totalBayar = $total - $diskon;

echo "Total awal: Rp " . number_format($total, 0, ',', '.') . "<br>";
echo "Besar diskon: Rp " . number_format($diskon, 0, ',', '.') . "<br>";
echo "Total bayar: Rp " . number_format($totalBayar, 0, ',', '.');

?>
