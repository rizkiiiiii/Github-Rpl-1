<?php
// membuat array
$hobi = [
    "Membaca",
    "Menulis",
    "Ngeblog"
];

// menambahkan isi pada idenks ke-3
$hobi[3] = "Coding";

// menambahkan isi pada indeks terakhir
$hobi[] = "Olahraga";

// cetak array dengan perulangan
foreach($hobi as $hobiku){
    echo $hobiku."<br>";
}
unset ($hobi[2]);

echo $hobi[0]."<br>";
echo $hobi[1]."<br>";

echo "<hr>";

echo "<pre>";
print_r($hobi);
echo "</pre>";
?>