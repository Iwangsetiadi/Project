<?php include "header.php" ?>

 		<div class="content-wrapper">
 			
        <section class="content-header">
          <h1>
            Edit Guru
          </h1>
          <ol class="breadcrumb">
            <li><i class="fa fa-user"></i>Edit Guru</li>
          </ol>
        </section>

 <section class="content">
          <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">

                </div><!-- /.box-header -->
                <?php 
                	$id=$_GET['id'];
                	$sql=mysqli_query($konek, "SELECT * FROM guru
					
                	where NIP='$id'");
       				$data=mysqli_fetch_array($sql);
                	
                 ?>
                <div class="box-body"><form action="guru_update.php" name="modal_popup" enctype="multipart/form-data" method="post">
							<div class="form-group">
								<label>NIP</label>
									<div class="input-group">
										<div class="input-group-addon">
											<i class="fa fa-id-card"></i>
										</div>
										<input name="NIP" max="11" type="text" class="form-control" required  placeholder="NIP" value="<?= $data['NIP'] ?>" readonly/>
									</div>
							</div>
							<div class="form-group">
								<label>Nama Guru</label>
									<div class="input-group">
										<div class="input-group-addon">
											<i class="fa fa-user"></i>
										</div>
										<input name="Nama_Guru" type="text" class="form-control" required  placeholder="Nama Guru" value="<?= $data['Nama_Guru'] ?>"/>
									</div>
							</div>

							<div class="form-group">
								<label>Tempat Lahir</label>
									<div class="input-group">
										<div class="input-group-addon">
											<i class="fa fa-map-marker"></i>
										</div>
										<input name="Tempat_Lahir" type="text" class="form-control" required  placeholder="Tempat Lahir" value="<?= $data['Tempat_Lahir'] ?>"/>
									</div>
							</div>


							<div class="form-group">
								<label>Tanggal Lahir</label>
									<div class="input-group">
										<div class="input-group-addon">
											<i class="fa fa-calendar"></i>
										</div>
										<input name="Tanggal_Lahir" type="date" class="form-control" required  placeholder="Tanggal Lahir" value="<?= $data['Tanggal_Lahir'] ?>"/>
									</div>
							</div>
							<div class="form-group">
								<label>Alamat</label>
									<div class="input-group">
										<div class="input-group-addon">
											<i class="fa fa-home"></i>
										</div>
										<input name="Alamat" type="text" class="form-control" required  placeholder="Alamat" value="<?= $data['Alamat'] ?>"/>
									</div>
							</div>

							<div class="form-group">
								<label>Jenis Kelamin</label>
									<div class="input-group">
										<div class="input-group-addon">
											<i class="fa fa-user-o"></i>
										</div>
										<select name="JK" class="form-control">
											<option value="<?php echo $data["JK"]; ?>" selected>
											<?php
												if ($data["JK"]=="L"){
													echo "Laki - laki";
												}
												else{
													echo "Perempuan";
												}
											?>
											</option>
											<?php
												if ($data["JK"]=="L"){
													echo "<option value='P'>Perempuan</option>";
												}
												else{
													echo "<option value='L'>Laki - laki</option>";
												}
											?>
										</select>
									</div>
							</div>

							<div class="form-group">
								<label>Mata Pelajaran</label>
									<div class="input-group">
										<div class="input-group-addon">
											<i class="fa fa-edit"></i>
										</div>
										<select name="Kode_Mapel_Guru" required  class="form-control">
											<?php
												
												$querymapel = mysqli_query($konek, "SELECT * FROM mapel");
												if($querymapel == false){
													die ("Terdapat Kesalahan : ". mysqli_error($konek));	
												}
												while($mapel = mysqli_fetch_array($querymapel)){
													?>
													
														<option <?= ($data['Kode_Mapel_Guru'] == $mapel['Kode_Mapel'] ? "selected" : "");?> value="<?=$mapel['Kode_Mapel']?>"><?= $mapel['Nama_Mapel']?></option>";
													<?php }
											?>
										</select>
									</div>
								</div>
							
							<div class="modal-footer">
								<button class="btn btn-success" type="submit">
									Update
								</button>
								<a href="guru.php" class="btn btn-danger"  data-dismiss="modal" aria-hidden="true">
									Cancel
								</a>
							</div>
						</form>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->
        </section><!-- /.content -->
		
		<!-- Modal Popup Dosen -->
		<div id="ModalAdd" class="modal fade" tabindex="-1" role="dialog">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						<h4 class="modal-title">Tambah Guru</h4>
					</div>
					<div class="modal-body">
						
					</div>
				</div>
			</div>
		</div>
		
		<!-- Modal Popup Dosen Edit -->
		<div id="ModalEditGuru" class="modal fade" tabindex="-1" role="dialog"></div>
		
		<!-- Modal Popup untuk delete--> 
		<div class="modal fade" id="modal_delete">
			<div class="modal-dialog">
				<div class="modal-content" style="margin-top:100px;">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						<h4 class="modal-title" style="text-align:center;">Are you sure to delete this information ?</h4>
					</div>    
					<div class="modal-footer" style="margin:0px; border-top:0px; text-align:center;">
						<a href="#" class="btn btn-danger" id="delete_link">Delete</a>
						<button type="button" class="btn btn-success" data-dismiss="modal">Cancel</button>
					</div>
				</div>
			</div>
		</div>
		
    </div>

        <?php include "footer.php" ?>















