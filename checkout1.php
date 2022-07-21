<html>
	<head>
		<title>checkout</title>
		<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
	</head>

	<body>
		<div align="center"><strong><font size="6" face="Courier New, Courier, mono">STRUK BELANJA </font></strong></div>
			<form name="form1" method="post" action="proses.php">
				<table width="58%" border="0" align="center">
					<tr>
                        <td>Jenis Barang</td>
                        <td>
							<select name="barang" id="barang">
								<option>Pasir       </option>
								<option>Skop pasir</option>
                                <option>Semen</option>
                                <option>Kuas</option>
                                <option>Cat</option>
                                <option>Batu Bata</option>
                                <option>Besi</option>
                                <option>Seng</option>
							</select>
                        </td>
					</tr>

					<tr>
						<td>Alamat</td>
						<td><input name="alamat" type="text" id="alamat"></td>
					</tr>

					<tr>
						<td>Jumlah Beli</td>
						<td><input name="beli" type="text" id="beli"></td> </tr>
					</tr>

					<tr>
						<td>Harga</td>
						<td>
							<select name="harga" id="harga">
								<option>Pasir (Rp.500.000 / 1 pick up)</option>
								<option>Sekop (Rp.100.000)</option>
                                <option>Semen (Rp.60.000 / sak)</option>
                                <option>Kuas (Rp.25.000)</option>
                                <option>Cat (Rp.40.000 / kaleng)</option>
                                <option>Batu Bata (Rp.1.000 / biji)</option>
                                <option>Besi (Rp.80.000 / batang)</option>
                                <option>Seng (Rp.50.000 / lembar)</option>
							</select>
						</td>
					</tr>

					<tr>
						<td>Alamat</td>
						<td><textarea name="alamat" id="alamat"></textarea></td> </textarea>
					</tr>

					<tr>
						<td></td>
						<td><input type="submit" name="Submit" value="Kirim"><input type="reset" name="Submit2" value="Batal">
					</td>
					</tr>
				</table>
			</form>
		<div align="center"><strong><a href="lihat.php">::Lihat Buku Tamu::
		</a></strong></div>
	</body>
</html>