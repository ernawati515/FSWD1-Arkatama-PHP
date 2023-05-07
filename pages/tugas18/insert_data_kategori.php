<?php
function insertDataCategories($id, $name, $created_at, $updated_at){
    $koneksi = mysqli_connect("localhost", "root", "", "dump-ta_magang-202304021340");

    $sql = mysqli_query($koneksi, "insert into categories (id, name, created_at, updated_at) values ('$id', '$name', '$created_at', '$updated_at')");
    
    if ($sql){
        echo "Data berhasil ditambahkan";
    } else {
        "Gagal menambahkan data";
    }
}

insertDataCategories(1, 'Katgeori 1', '2023-04-01 15:00:00', '2023-04-01 15:00:00');
?>