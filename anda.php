<?php
include "konektor.php";
?>
<div class="container">
	<div class="row">
		<div class="box">
			<div class="col-lg-12">
				<h3>
				<strong>Khusus Untuk Anda</strong>
				</h3>
                <table cellpadding="50px">
				<tr>
				<?php
				
				$jml_kolom=5;
				$cnt = 0;
				$page = mysql_query("SELECT * FROM barang order by id_barang desc limit 0,5") or die('Kesalahan pada proses query!');
							while($data1=mysql_fetch_array($page))
							{
								if ($cnt >= $jml_kolom) 
							{
							echo "</tr><tr>";
							$cnt = 0;
									}
 
								$cnt++;
							echo "<td width=\"100px\">";
							echo "<div>";
							echo "<img class=\"img-thumbnail img-border\" src=\"on-admin/image/".$data1['gambar']."\" height=\"50px\" width=\"100px\">";
							echo "</div>";
							echo "<div>";
							echo "<a href='index.php'>";
							echo "<strong>".$data1['nama']."</strong>";
							echo "</a>";
							echo "</div>";
							echo "</td>";
							
							
											
							}
				?>
				</tr>
				</table>
			</div>
		</div>
	</div>
</div>
