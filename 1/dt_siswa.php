				<thead>
					<tr>
						<th>NIS</th>
						<th>Nama</th>
						<th>Tempat, Tanggal Lahir</th>
						<th>Alamat</th>
						<th>JK</th>
						<th>Agama</th>
						<th>Kelas / Jurusan</th>
						<th>Pilihan</th>
					</tr>
				</thead>
				<tbody>
					<?php
						$querysiswa = mysqli_query($konek, "SELECT * FROM siswa
													INNER JOIN kelas ON Kode_Kelas_Siswa = Kode_Kelas
													INNER JOIN jenjang ON Kode_Jenjang_Kelas = Kode_Jenjang
													INNER JOIN jurusan ON Kode_Jurusan_Kelas = Kode_Jurusan
													INNER JOIN rombel ON Kode_Rombel_Kelas = Kode_Rombel");
												if($querysiswa == false){
													die ("Terdapat Kesalahan : ". mysqli_error($konek));	
												}
							
						while ($siswa = mysqli_fetch_array ($querysiswa)){
						?>
								<tr>
									<td><?= $siswa["NIS"]?></td>
									<td><?= $siswa["Nama_Siswa"]?></td>
									<td><?= $siswa['Tempat_Lahir'].", ".date('d M Y', strtotime($siswa['Tanggal_Lahir']))?></td>
									<td><?= $siswa["Alamat"]?></td>
									<td><?= $siswa["JK"]?></td>
									<td><?= $siswa["Agama"]?></td>
									<td><?= $siswa['Nama_Jenjang']." ".$siswa['Nama_Jurusan']." ".$siswa['Nama_Rombel']?></td>
									<td>
										<a href="form_edit_siswa.php?id=<?= $siswa['NIS']?>" class='open_modal' id='$siswa[NIS]'>Edit</a> |
										<?php echo "<a href='#' onClick='confirm_delete(\"siswa_delete.php?NIS=$siswa[NIS]\")'>Delete</a>"?>
									</td>
								</tr>
						<?php }
					?>
				</tbody>