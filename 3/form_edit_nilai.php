<?php include "header.php" ?>

 		<div class="content-wrapper">
 			
        <section class="content-header">
          <h1>
            Edit Nilai
          </h1>
          <ol class="breadcrumb">
            <li><i class="fa fa-user"></i>Edit Nilai</li>
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
                	$sql=mysqli_query($konek, "SELECT * FROM nilai
                	where id='$id'");
       				$data=mysqli_fetch_array($sql);
                	
                 ?>
                <div class="box-body">
						<form action="nilai_update.php?id=<?= $id ?>" name="modal_popup" enctype="multipart/form-data" method="post">
							
							<div class="form-group">
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
												while($siswa = mysqli_fetch_array($querysiswa)) { ?>

													
														<option <?= ($data['Kode_Siswa_Nilai'] == $siswa['NIS'] ? "selected" : "");?> value="<?= $siswa['NIS'] ?>"> <?= $siswa['Nama_Siswa']?></option>
												<?php }
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
										<input name="Nilai" max="100" type="number" class="form-control" required placeholder="Nilai" value="<?= $data['Nilai'] ?>" />
									</div>
							</div>
							<div class="form-group">
								<label> Bab</label>
									<div class="input-group">
										<div class="input-group-addon">
											<i class="fa fa-edit"></i>
										</div>
										<input name="Bab" type="text" class="form-control" required placeholder="Bab" value="<?= $data['Bab'] ?>" />
									</div>
							</div>
							<div class="modal-footer">
								<button class="btn btn-success" type="submit">
									Update
								</button>
								<a href="nilai.php" type="reset" class="btn btn-danger"  data-dismiss="modal" aria-hidden="true">
									Cancel
								</a>
							</div>
						</form>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->
        </section><!-- /.content -->

		
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















