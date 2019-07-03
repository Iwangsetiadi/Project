				<thead>
					<tr>
						<th>NIP</th>
						<th>Nama</th>
						<th>Tempat, Tanggal Lahir</th>
						<th>Alamat</th>
						<th>Jenis Kelamin</th>
						<th>Mata Pelajaran</th>
						<th>Pilihan</th>
					</tr>
				</thead>
				<tbody>
					<?php
						$queryguru = mysqli_query ($konek, "SELECT * FROM guru 
							INNER JOIN mapel ON Kode_Mapel_Guru = Kode_Mapel
							");
						if($queryguru == false){
							die ("Terjadi Kesalahan : ". mysqli_error($konek));
						}
							
						while ($guru = mysqli_fetch_array ($queryguru)){
						?>
								<tr>
									<td><?= $guru["NIP"]?></td>
									<td><?= $guru["Nama_Guru"]?></td>
									<td><?= $guru['Tempat_Lahir'].", ".date('d M Y', strtotime($guru['Tanggal_Lahir']))?></td>
									<td><?= $guru["Alamat"]?></td>
									<td><?= $guru["JK"]?></td>
									<td><?= $guru['Nama_Mapel']?></td>
									<td>
										<a href="form_edit_guru.php?id=<?= $guru['NIP'] ?>" class='open_modal' id='$guru[NIP]'>Edit</a> |
										<?php echo "
										<a href='#' onClick='confirm_delete(\"guru_delete.php?NIP=$guru[NIP]\")'>Delete</a>";?>
									</td>
								</tr>
						<?php }
					?>
				</tbody>