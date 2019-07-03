				<thead>
					<tr>
						<th>Kode Jurusan</th>
						<th>Nama Jurusan</th>
						<th>Pilihan</th>
					</tr>
				</thead>
				<tbody>
					<?php
						$queryjurusan = mysqli_query ($konek, "SELECT * FROM jurusan");
						if($queryjurusan == false){
							die ("Terjadi Kesalahan : ". mysqli_error($konek));
						}
							
						while ($jurusan = mysqli_fetch_array ($queryjurusan)){
						?>
								<tr>
									<td><?= $jurusan["Kode_Jurusan"]?></td>
									<td><?= $jurusan['Nama_Jurusan']?></td>
									<td>
										<a href="form_edit_jurusan.php?id=<?= $jurusan['Kode_Jurusan'] ?>" class='open_modal' id='$jurusan[Kode_Jurusan]'>Edit</a> |
										<?php echo "
										<a href='#' onClick='confirm_delete(\"jurusan_delete.php?Kode_Jurusan=$jurusan[Kode_Jurusan]\")'>Delete</a>";?>
									</td>
								</tr>
						<?php }
					?>
				</tbody>