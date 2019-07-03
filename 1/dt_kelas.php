				<thead>
					<tr>
						<th>Kode Kelas</th>
						<th>Kelas</th>
						<th>Pilihan</th>
					</tr>
				</thead>
				<tbody>
					<?php
						$querykelas = mysqli_query ($konek, "SELECT * FROM kelas 
							INNER JOIN jenjang ON Kode_Jenjang_Kelas = Kode_Jenjang
							INNER JOIN jurusan ON Kode_Jurusan_Kelas = Kode_Jurusan
							INNER JOIN rombel ON Kode_Rombel_Kelas = Kode_Rombel

							");
						if($querykelas == false){
							die ("Terjadi Kesalahan : ". mysqli_error($konek));
						}
							
						while ($kelas = mysqli_fetch_array ($querykelas)){
						?>
								<tr>
									<td><?= $kelas["Kode_Kelas"]?></td>
									<td><?= $kelas['Nama_Jenjang']." " .$kelas['Nama_Jurusan']." ".$kelas['Nama_Rombel']?></td>
									<td>
										<a href="detail_kelas.php?id=<?= $kelas['Kode_Kelas'] ?>" class='open_modal' id='$kelas[Kode_Kelas]'>Detail</a> | <a href="form_edit_kelas.php?id=<?= $kelas['Kode_Kelas'] ?>" class='open_modal' id='$kelas[Kode_Kelas]'>Edit</a> |
										<?php echo "<a href='#' onClick='confirm_delete(\"kelas_delete.php?Kode_Kelas=$kelas[Kode_Kelas]\")'>Delete</a>"?>
									</td>
								</tr>
						<?php }
					?>
				</tbody>