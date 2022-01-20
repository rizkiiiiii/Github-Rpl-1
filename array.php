<?php

// membuat array
// menampilkan array
$barang = ["Buku Tulis", "Penghapus", "Spidol"];
$makanan = ["Nasi goreng","Mie goreng","Ayam bakar"];

echo $barang [0]. "<br>";
echo $barang [1]. "<br>";
echo $barang [2]. "<br>";
 
echo "<hr>";
// menampilkan isi array dengan perulangan foreach
foreach($barang as $isi){
    echo $isi."<br>";
}

echo "<hr>";

// menampilkan isi array dengan perulangan while
$i = 0;
while($i < count($barang)){
    echo $barang[$i]."<br>";
    $i++;
}
?>