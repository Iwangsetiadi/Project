<?php include "header.php" ?>

 		<div class="content-wrapper">
 			
        <section class="content-header">
          <h1>
            Edit Kelas
          </h1>
          <ol class="breadcrumb">
            <li><i class="fa fa-user"></i>Edit Kelas</li>
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
                	$sql=mysqli_query($konek, "SELECT * FROM kelas
                	where Kode_Kelas='$id'");
       				$data=mysqli_fetch_array($sql);
                	
                 ?>
                <div class="box-body">
						<form action="kelas_update.php" name="modal_popup" enctype="multipart/form-data" method="post">
							<div class="form-group">
								<label>Kode Kelas</label>
									<div class="input-group">
										<div class="input-group-addon">
											<i class="fa fa-id-card"></i>
										</div>
										<input name="Kode_Kelas" type="text" class="form-control" required  placeholder="Kode Kelas" value="<?= $data['Kode_Kelas'] ?>" readonly/>
									</div>
							</div>

							<div class="form-group">
								<label>Jenjang</label>
									<div class="input-group">
										<div class="input-group-addon">
											<i class="fa fa-qrcode"></i>
										</div>
										<select name="Kode_Jenjang_Kelas" required  class="form-control">
										<option value='#'>Pilih Jenjang</option>
											<?php
												
												$queryjenjang = mysqli_query($konek, "SELECT * FROM jenjang");
												if($queryjenjang == false){
													die ("Terdapat Kesalahan : ". mysqli_error($konek));	
												}
												while($jenjang = mysqli_fetch_array($queryjenjang)){ ?>

														<option <?= ($data['Kode_Jenjang_Kelas'] == $jenjang['Kode_Jenjang'] ? "selected" : "");?> value="<?=$jenjang['Kode_Jenjang']?>"><?= $jenjang['Nama_Jenjang']?></option>";
												<?php }
											?>
										</select>
									</div>
								</div>
									<div class="form-group">
										<label>Jurusan</label>
										<div class="input-group">
											<div class="input-group-addon">
												<i class="fa fa-graduation-cap"></i>
											</div>
											<select required  name="Kode_Jurusan_Kelas" class="form-control">
											<option value='#'>Pilih Jurusan</option>
												<?php
													
													$queryjurusan = mysqli_query($konek, "SELECT * FROM jurusan");
													if($queryjurusan == false){
														die ("Terdapat Kesalahan : ". mysqli_error($konek));	
													}
													while($jurusan = mysqli_fetch_array($queryjurusan)){?>

														<option <?= ($data['Kode_Jurusan_Kelas'] == $jurusan['Kode_Jurusan'] ? "selected" : "");?> value="<?=$jurusan['Kode_Jurusan']?>"><?= $jurusan['Nama_Jurusan']?></option>";
												<?php }
											?>
											</select>
										</div>
								</div>
								<div class="form-group">
								<label>Rombel</label>
									<div class="input-group">
										<div class="input-group-addon">
											<i class="fa fa-users"></i>
										</div>
										<select required  name="Kode_Rombel_Kelas" class="form-control">
										<option value='#'>Pilih Rombel</option>
											<?php
												
												$queryrombel = mysqli_query($konek, "SELECT * FROM rombel");
												if($queryrombel == false){
													die ("Terdapat Kesalahan : ". mysqli_error($konek));	
												}
												while($rombel = mysqli_fetch_array($queryrombel)){?>

														<option <?= ($data['Kode_Rombel_Kelas'] == $rombel['Kode_Rombel'] ? "selected" : "");?> value="<?=$rombel['Kode_Rombel']?>"><?= $rombel['Nama_Rombel']?></option>";
												<?php }
											?>
										</select>
									</div>
								</div>
							
							<div class="modal-footer">
								<button class="btn btn-success" type="submit">
									Update

								</button>
								<a href="kelas.php" class="btn btn-danger"  data-dismiss="modal" aria-hidden="true">
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















