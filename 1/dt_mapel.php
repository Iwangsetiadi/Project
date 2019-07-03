				<thead>
					<tr>
						<th>Kode Mata Pelajaran</th>
						<th>Nama Mata Pelajaran</th>
						<th>Pilihan</th>
					</tr>
				</thead>
				<tbody>
					<?php
						$querymapel = mysqli_query ($konek, "SELECT * FROM mapel");
						if($querymapel == false){
							die ("Terjadi Kesalahan : ". mysqli_error($konek));
						}
							
						while ($mapel = mysqli_fetch_array ($querymapel)){
						?>
								<tr>
									<td><?= $mapel["Kode_Mapel"]?></td>
									<td><?= $mapel['Nama_Mapel']?></td>
									<td>
										<a href="form_edit_mapel.php?id=<?= $mapel['Kode_Mapel'] ?>" class='open_modal' id='$mapel[Kode_Mapel]'>Edit</a> |
										<?php echo "<a href='#' onClick='confirm_delete(\"mapel_delete.php?Kode_Mapel=$mapel[Kode_Mapel]\")'>Delete</a>"?>
									</td>
								</tr>
						<?php }
					?>
				</tbody>