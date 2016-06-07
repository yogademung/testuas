<?php
include "konektor.php"
?>
					<div>
					<strong>Cek Tarif Ongkir</strong><br><p>(kota asal ketik Tabanan)</p><br><p>1 Kg = 1000 gr</p></td><td>:</td>
					<div data-theme="light" id="rajaongkir-widget"></div>
<script type="text/javascript" src="//rajaongkir.com/script/widget.js"></script></td>
					<form class="form form-group" method="post" action="konfirmasi.php">
					<table class="table table-condensed">
					<tr><td>Alamat Lengkap </td><td>:</td> 
					<td><input type="text" name="alamat" placeholder="Alamat Anda" required /></td></tr>
					<tr><td>No HP </td><td>:</td>
					<td><input type="text" name="hp" placeholder="No Handphone" required /></td></tr>
					<tr><td>Pengiriman</td><td> : </td>
					<td><input type="radio" name="ekspedisi" id="JNE" value="JNE" required>JNE
						<input type="radio" name="ekspedisi" id="POS" value="POS" required>POS
						<input type="radio" name="ekspedisi" id="ESL" value="ESL" required>ESL
					</td></tr>
					<tr><td><?php echo "<input name=\"art_url\" value=\"deskripsi.php?id_barang=".$data['id_barang']."\" type=\"hidden\">";?></td></tr>
					<tr><td>
					<input name="tambah" value="Konfirmasi" class="btn btn-success" type="submit">
					</td></tr>
					</table>
					</form>
					</div>