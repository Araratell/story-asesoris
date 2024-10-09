<?php
$koneksi = mysqli_connect("locallhost","root","","asesoris_ara");

$query = mysqli_query($koneksi, "select * from produk");
while($data = mysqli_fetch_array($query)){
    echo $data["nama"]."<br/>";
}

?>
