				<thead>
					<tr>
						<th>Nama</th>
						<th>Kelas / Jurusan</th>
						<th>Mata Pelajaran</th>
						<th>Bab</th>
						<th>Nilai</th>
					</tr>
				</thead>
				<tbody>
					<?php
						$querynilai = mysqli_query ($konek, "SELECT * FROM nilai
													INNER JOIN mapel ON Kode_Mapel_Nilai = Kode_Mapel
													INNER JOIN siswa ON Kode_Siswa_Nilai = NIS
													INNER JOIN kelas ON Kode_Kelas_Siswa = Kode_Kelas
													INNER JOIN jenjang ON Kode_Jenjang_Kelas = Kode_Jenjang
													INNER JOIN jurusan ON Kode_Jurusan_Kelas = Kode_Jurusan
													INNER JOIN rombel ON Kode_Rombel_Kelas = Kode_Rombel Where Kode_Siswa_Nilai='$_SESSION[Username]'");
						if($querynilai == false){
							die ("Terjadi Kesalahan : ". mysqli_error($konek));
						}
							
						while ($nilai = mysqli_fetch_array ($querynilai)){
						?>
								<tr>
									<td><?= $nilai["Nama_Siswa"]?></td>
									<td><?= $nilai['Nama_Jenjang']." ".$nilai['Nama_Jurusan']." ".$nilai['Nama_Rombel']?></td>
									<td><?= $nilai['Nama_Mapel']?></td>
									<td><?= $nilai['Bab']?></td>
									<td><?= $nilai['Nilai']?></td>
									
								</tr>
						<?php }
					?>
				</tbody>