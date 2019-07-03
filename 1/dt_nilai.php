				<thead>
					<tr>
						<th>Nama</th>
						<th>Kelas / Jurusan</th>
						<th>Mata Pelajaran</th>
						<th>Nilai</th>
						<th>Pilihan</th>
					</tr>
				</thead>
				<tbody>
					<?php
						$querysiswa = mysqli_query ($konek, "SELECT * FROM siswa

													INNER JOIN kelas ON Kode_Kelas_Siswa = Kode_Kelas
													INNER JOIN jenjang ON Kode_Jenjang_Kelas = Kode_Jenjang
													INNER JOIN jurusan ON Kode_Jurusan_Kelas = Kode_Jurusan
													INNER JOIN rombel ON Kode_Rombel_Kelas = Kode_Rombel");
						if($querysiswa == false){
							die ("Terjadi Kesalahan : ". mysqli_error($konek));
						}
							
						while ($siswa = mysqli_fetch_array ($querysiswa)){
						?>
								<tr>
									<td><?= $nilai["Nama_Siswa"]?></td>
									<td><?= $nilai['Nama_Jenjang']." ".$nilai['Nama_Jurusan']." ".$nilai['Nama_Rombel']?></td>
									<td><?= $_SESSION["Mapel"]?></td>
									<td><?= $nilai['Nilai']?></td>
									<td>
										<a href="form_edit_nilai.php?id=<?= $nilai['id'] ?>" class='open_modal' id='$nilai[id]'>Edit</a> |
										<a href='#' onClick='confirm_delete(\"jurusan_delete.php?id=$nilai[id]\")'>Delete</a>
									</td>
								</tr>
						<?php }
					?>
				</tbody>