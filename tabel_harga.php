<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabel Harga Barang</title>
</head>
<body>
<?php
// Membuat associative array dengan data flora dan fauna terancam punah
$TableHargaBarang = array(
    array(
        "ID" => 1,
        "Product" => "Pespsodent",
        "Stok" => 30,
        "Harga" => 10000,
        // "Jumlah" => Stok * Harga,
    ),
    array(
        "ID" => 2,
        "Product" => "Sunlight",
        "Stok" => 15,
        "Harga" => 11000,
        // "Jumlah" => Stok * Harga,
    ),
    array(
    "ID" => 3,
    "Product" => "Baygon",
    "Stok" => 10,
    "Harga" => 16000,
    // "Jumlah" => Stok * Harga,
    ),
    array(
        "ID" => 4,
        "Product" => "Dove",
        "Stok" => 20,
        "Harga" => 22000,
        // "Jumlah" => Stok * Harga,
    ),
    array(
        "ID" => 5,
        "Product" => "Rinso",
        "Stok" => 20,
        "Harga" => 20000,
        // "Jumlah" => Stok * Harga,
    ),
    array(
        "ID" => 6,
        "Product" => "Downy",
        "Stok" => 15,
        "Harga" => 12000,
        // "Jumlah" => Stok * Harga,
    ),
    array(
        "ID" => 7,
        "Product" => "Le Mineral",
        "Stok" => 25,
        "Harga" => 5000,
        // "Jumlah" => Stok * Harga,
    ),
);

// Mencetak tabel
?>

<h1 style="text-align: center;">Table Harga Barang</h1>
<table style=" margin: 0 auto;">
    <tr>
        <th>ID</th>
        <th>Produk</th>
        <th>Stok</th>
        <th>Harga</th>
        <th>Jumlah</th>
    </tr>

    <?php 
    // $nomor = 1;
    foreach ($TableHargaBarang as $Barang) {
        echo "<tr>";
        echo "<td>".$Barang["ID"]."</td>";
        echo "<td>" . $Barang["Product"] . "</td>";
        echo "<td>" . $Barang["Stok"] . "</td>";
        echo "<td>" . $Barang["Harga"] . "</td>";
        echo "<td>" . $Barang["Stok"] * $Barang["Harga"] . "</td>";
        echo "</tr>";
        // $nomor++;
    };
    
    ?>
</table>
</body>
</html>