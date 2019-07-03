				<thead>
					<tr>
						<th>NIS</th>
						<th>Nama</th>
						<th>Tempat, Tanggal Lahir</th>
						<th>JK</th>
						<th>Agama</th>
						<th>Alamat</th>
						<th>Kelas / Jurusan</th>
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
									
									<td><?= $siswa["JK"]?></td>
									<td><?= $siswa["Agama"]?></td>
									<td><?= $siswa["Alamat"]?></td>
									<td><?= $siswa['Nama_Jenjang']." ".$siswa['Nama_Jurusan']." ".$siswa['Nama_Rombel']?></td>
									
								</tr>
						<?php }
					?>
				</tbody>