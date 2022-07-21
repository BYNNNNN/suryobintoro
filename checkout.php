<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-COMPATIBLE" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="style.css">
        <title>RESPONSI</title>
    </head>
    <body>
    <nav>
        <div class="header">
            <div class="nama">
                <ul>
                    <li><a href="index.html">TOKO BANGUNAN</a></li>
                </ul>
            </div>
            <div class="menu">
                <ul>
                    <li><a href="index.html">HOME</a></li>
                    <li><a href="product.html">PRODUCT</a></li>
                    <li><a href="javascript" onClick="confirm('Whatsappp : 081234567899')">CONTACT</a></li>
                </ul>
            </div>
    </nav>
    <h3 align="center">Form Hitung Total Bayar</h3>
    <form method="POST">
        <table width="80%" height="90%" border="0" align="center">
            <tr>
                <td>Nama Barang</td>
                <td>:</td>
                <td><input type="text" name="nama"></td>
            </tr>
            <tr>
                <td>Harga</td>
                <td>:</td>
                <td><input type="text" name="harga"></td>
            </tr>
            <tr>
                <td>Jumlah Item Barang</td>
                <td>:</td>
                <td>
                    <select name="qty">
                        <option value="">- Jumlah -</option>
                        <?php
                            for($x=1;$x<=50;$x++){
                        ?>
                        <option value="<?php echo $x; ?>"><?php echo $x; ?></option>
                        <?php
                            }
                        ?>
                    </select>
                </td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td>
                    <input type="submit" name="hitung" value="Hitung" ></a>
                    <input type="reset" name="reset" value="Reset">
                </td>
            </tr>
        </table>
    </form>
    <hr />
    <h3 align="center">Hasil :</h3>
    
    <?php
    if(isset($_POST['hitung'])){
        $tgl = date("y-m-d");
        $nama    =$_POST['nama'];
        $harga    =$_POST['harga'];
        $qty    =$_POST['qty'];
        $total    =$harga*$qty;
        echo "
            <table border='1' cellpadding='4' align='center' height='10%' width='58%'>
                <tr align='center'>
                    <td >Nama Barang</td>
                    <td>Harga</td>
                    <td>Banyaknya</td>
                    <td>Total Harga</td>
                </tr>
                <tr>
                    <td align='center'>$nama</td>
                    <td align='right'>";echo number_format($harga,0,',','.');echo "</td>
                    <td align='right'>";echo number_format($qty,0,',','.');echo "</td>
                    <td align='right'>";echo number_format($total,0,',','.');echo "</td>
                </tr>
            </table>
        ";
    }
    echo "<head><title>Struk</title></head>";
    $fp = fopen("struk.txt", "a+");
    fputs($fp, "$tgl|$nama|$harga|$qty|$total\n");
    fclose($fp);
?>
    </body>
</html>