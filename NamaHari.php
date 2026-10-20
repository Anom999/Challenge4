
<?php
$nomorHari = 7;

$hari = match ($nomorHari) {
    1 => "Senin",
    2 => "Selasa",
    3 => "Rabu",
    4 => "Kamis",
    5 => "Jumat",
    6 => "Sabtu",
    7 => "Minggu",
    default => "Nomor hari tidak valid"
};

echo "Jadi Hari Ini Adalah Hari: " .$hari;
?>
