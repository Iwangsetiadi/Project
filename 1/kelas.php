<?php include "header.php" ?>

 		<div class="content-wrapper">
 			
        <section class="content-header">
          <h1>
            Kelas
          </h1>
          <ol class="breadcrumb">
            <li><i class="fa fa-users"></i> Kelas</li>
          </ol>
        </section>

 <section class="content">
          <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">

                </div><!-- /.box-header -->
                <div class="box-body">
				<a href="#"><button class="btn btn-success" type="button" data-target="#ModalAdd" data-toggle="modal"><i class="fa fa-plus"></i> Add</button></a>
                  <br></br>
				  <table id="data" class="table table-bordered table-striped table-scalable">
       <?php
							include "dt_kelas.php";
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
						<h4 class="modal-title">Tambah Kelas</h4>
					</div>
					<div class="modal-body">
						<form action="kelas_add.php" name="modal_popup" enctype="multipart/form-data" method="post">
							<div class="form-group">
								<label>Kode Kelas</label>
									<div class="input-group">
										<div class="input-group-addon">
											<i class="fa fa-id-card"></i>
										</div>
										<input name="Kode_Kelas" type="text" class="form-control" required  placeholder="Kode Kelas"/>
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
												while($jenjang = mysqli_fetch_array($queryjenjang)){
													echo "
													
														<option value='$jenjang[Kode_Jenjang]'>$jenjang[Nama_Jenjang]</option>";
												}
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
													while($jurusan = mysqli_fetch_array($queryjurusan)){
														echo "
															
															<option value='$jurusan[Kode_Jurusan]'>$jurusan[Nama_Jurusan]</option>";
													}
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
												while($rombel = mysqli_fetch_array($queryrombel)){
													echo "
													
														<option value='$rombel[Kode_Rombel]'>$rombel[Nama_Rombel]</option>";
												}
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















