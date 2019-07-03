<?php include "header.php" ?>

 		<div class="content-wrapper">
 			
        <section class="content-header">
          <h1>
            Nilai
          </h1>
          <ol class="breadcrumb">
            <li><i class="fa fa-book"></i> Nilai</li>
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
							include "dt_nilai.php";
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
						<h4 class="modal-title">Tambah Nilai</h4>
					</div>
					<div class="modal-body">
						<form action="nilai_add.php" name="modal_popup" enctype="multipart/form-data" method="post">

							<div class="form-group">
								
										<input type="hidden" name="Kode_Guru" required  value="<?= $_SESSION['Username']?>"></input>
											
									
							<div class="form-group">
								<label>Mata Pelajaran</label>
									<div class="input-group">
										<div class="input-group-addon">
											<i class="fa fa-edit"></i>
										</div>
										<select name="Kode_Mapel_Nilai" required  class="form-control" readonly>
										<option value="<?= $_SESSION['Kode_Mapel']?>"><?= $_SESSION['Nama_Mapel']?></option>
											
										</select>
									</div>
								</div>
								<label>Siswa</label>
									<div class="input-group">
										<div class="input-group-addon">
											<i class="fa fa-user"></i>
										</div>
										<select name="Kode_Siswa_Nilai" class="form-control">
											<?php
												$querysiswa = mysqli_query($konek, "SELECT * FROM siswa");
												if($querysiswa == false){
													die ("Terdapat Kesalahan : ". mysqli_error($konek));
												}
												while($siswa = mysqli_fetch_array($querysiswa)){
													if($siswa["NIS"] != $_SESSION["Username"]){
														echo "<option value='$siswa[NIS]'>$siswa[Nama_Siswa]</option>";
													}
												}
											?>
										</select>
									</div>
							</div>
							<div class="form-group">
								<label> Nilai</label>
									<div class="input-group">
										<div class="input-group-addon">
											<i class="fa fa-book"></i>
										</div>
										<input name="Nilai" type="number" class="form-control" required placeholder="Nilai"/>
									</div>
							</div>
							<div class="form-group">
								<label> Bab</label>
									<div class="input-group">
										<div class="input-group-addon">
											<i class="fa fa-edit"></i>
										</div>
										<input name="Bab" type="text" class="form-control" required placeholder="Bab"/>
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















