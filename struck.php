<?php 
echo "<head><title>Struk</title></head>";
$tgl = date("y-m-d");
$fp = fopen("struk.txt", "r");
echo "<table border='1' cellspacing='0' cellpadding='2'>";

echo "<tr>
<td> Tanggal </td>
<td> Nama </td>
<td> Harga </td>
<td> Banyaknya </td>
<td> Total </td>
</tr>";

while ($isi = fgets($fp,80)) {
    $pisah = explode('|', $isi);
    echo "<tr>
    <td>$pisah[0]</td>
    <td>$pisah[1]</td>
    <td>$pisah[2]</td>
    <td>$pisah[3]</td>
    <td>$pisah[4]</td>
    </tr>";
}

echo "</table>";
echo "<br><br><a href='checkout.php'> Pesan Lagi </a>";

?>


    
    
    
    
    



