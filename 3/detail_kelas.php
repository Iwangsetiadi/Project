<?php include "header.php" ?>
<?php 
                	$id=$_GET['id'];
                	$sql=mysqli_query($konek, "SELECT * FROM kelas

							INNER JOIN jenjang ON Kode_Jenjang_Kelas = Kode_Jenjang
							INNER JOIN jurusan ON Kode_Jurusan_Kelas = Kode_Jurusan
							INNER JOIN rombel ON Kode_Rombel_Kelas = Kode_Rombel where Kode_Kelas ='$id'");
       				$data=mysqli_fetch_array($sql);
                	
                 ?>

 		<div class="content-wrapper">
 			
        <section class="content-header">
          <h1>
            Detail Kelas <br> <?= $data['Nama_Jenjang']." " .$data['Nama_Jurusan']." ".$data['Nama_Rombel']?>
          </h1>
          <ol class="breadcrumb">
            <li><i class="fa fa-users"></i> Siswa</li>
          </ol>
        </section>

 <section class="content">
          <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">

                </div><!-- /.box-header -->
                <div class="box-body">
				
                  <br></br>
				  <table id="data" class="table table-bordered table-striped table-scalable">
       <?php
							include "dt_detail_kelas.php";
						?>
                  </table>
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
						<h4 class="modal-title">Tambah Siswa</h4>
					</div>
					<div class="modal-body">
						<form action="siswa_add.php" name="modal_popup" enctype="multipart/form-data" method="post">
							<div class="form-group">
								<label>NIS</label>
									<div class="input-group">
										<div class="input-group-addon">
											<i class="fa fa-id-card"></i>
										</div>
										<input name="NIS" max="11" type="text" class="form-control" required  placeholder="NIS"/>
									</div>
							</div>
							<div class="form-group">
								<label>Nama Siswa</label>
									<div class="input-group">
										<div class="input-group-addon">
											<i class="fa fa-user"></i>
										</div>
										<input name="Nama_Siswa" type="text" class="form-control" required  placeholder="Nama Siswa"/>
									</div>
							</div>

							<div class="form-group">
								<label>Tempat Lahir</label>
									<div class="input-group">
										<div class="input-group-addon">
											<i class="fa fa-map-marker"></i>
										</div>
										<input name="Tempat_Lahir" type="text" class="form-control" required  placeholder="Tempat Lahir"/>
									</div>
							</div>


							<div class="form-group">
								<label>Tanggal Lahir</label>
									<div class="input-group">
										<div class="input-group-addon">
											<i class="fa fa-calendar"></i>
										</div>
										<input name="Tanggal_Lahir" type="date" class="form-control" required  placeholder="Tanggal Lahir"/>
									</div>
							</div>
							<div class="form-group">
								<label>Alamat</label>
									<div class="input-group">
										<div class="input-group-addon">
											<i class="fa fa-home"></i>
										</div>
										<input name="Alamat" type="text" class="form-control" required  placeholder="Alamat"/>
									</div>
							</div>

							<div class="form-group">
								<label>Jenis Kelamin</label>
									<div class="input-group">
										<div class="input-group-addon">
											<i class="fa fa-user-o"></i>
										</div>
										<select name="JK" class="form-control">
											<option selected>Pilih Jenis Kelamin</option>
											<option value="L">Laki - laki</option>
											<option value="P">Perempuan</option>
										</select>
									</div>
							</div>
							<div class="form-group">
								<label>Agama</label>
									<div class="input-group">
										<div class="input-group-addon">
											<i class="fa fa-rub"></i>
										</div>
										<input name="Agama" type="text" class="form-control" required  placeholder="Agama"/>
									</div>
							</div>
							<div class="form-group">
								<label>Kelas</label>
									<div class="input-group">
										<div class="input-group-addon">
											<i class="fa fa-edit"></i>
										</div>
										<select name="Kode_Kelas_Siswa" required  class="form-control">
										<option value='#'> Pilih Kelas</option>
											<?php
												
												$querykelas = mysqli_query($konek, "SELECT * FROM kelas
													INNER JOIN jenjang ON Kode_Jenjang_Kelas = Kode_Jenjang
													INNER JOIN jurusan ON Kode_Jurusan_Kelas = Kode_Jurusan
													INNER JOIN rombel ON Kode_Rombel_Kelas = Kode_Rombel");
												if($querykelas == false){
													die ("Terdapat Kesalahan : ". mysqli_error($konek));	
												}
												while($kelas = mysqli_fetch_array($querykelas)) { ?>

													
														<option value="<?= $kelas['Kode_Kelas'] ?>"> <?= $kelas['Nama_Jenjang']." ".$kelas['Nama_Jurusan']." ".$kelas['Nama_Rombel']?></option>
												<?php }
											?>
										</select>
									</div>
							</div>
							
							<div class="modal-footer">
								<button class="btn btn-success" type="submit">
									Add
								</button>
								<button type="reset" class="btn btn-danger"  data-dismiss="modal" aria-hidden="true">
									Cancel
								</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
		
		<!-- Modal Popup Dosen Edit -->
		<div id="ModalEditMahasiswa" class="modal fade" tabindex="-1" role="dialog"></div>
		
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















