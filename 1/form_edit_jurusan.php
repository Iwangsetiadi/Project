<?php include "header.php" ?>

 		<div class="content-wrapper">
 			
        <section class="content-header">
          <h1>
            Edit Mata Pelajaran
          </h1>
          <ol class="breadcrumb">
            <li><i class="fa fa-user"></i>Edit Mata Pelajaran</li>
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
                	$sql=mysqli_query($konek, "SELECT * FROM jurusan
                	where Kode_Jurusan='$id'");
       				$data=mysqli_fetch_array($sql);
                	
                 ?>
                <div class="box-body">
						<form action="jurusan_update.php" name="modal_popup" enctype="multipart/form-data" method="post">
							<div class="form-group">
								<label>Kode Jurusan</label>
									<div class="input-group">
										<div class="input-group-addon">
											<i class="fa fa-id-card"></i>
										</div>
										<input name="Kode_Jurusan" type="text" class="form-control" required placeholder="Kode Jurusan" value="<?= $data['Kode_Jurusan'] ?>" readonly/>
									</div>
							</div>
							<div class="form-group">
								<label>Nama Jurusan</label>
									<div class="input-group">
										<div class="input-group-addon">
											<i class="fa fa-gears"></i>
										</div>
										<input name="Nama_Jurusan" type="text" class="form-control" required placeholder="Nama Jurusan" value="<?= $data['Nama_Jurusan'] ?>"/>
									</div>
							</div>
							<div class="modal-footer">
								<button class="btn btn-success" type="submit">
									Update
								</button>
								<a href="jurusan.php" class="btn btn-danger"  data-dismiss="modal" aria-hidden="true">
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















