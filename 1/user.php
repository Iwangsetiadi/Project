<?php include "header.php" ?>

 		<div class="content-wrapper">
 			
        <section class="content-header">
          <h1>
            User
          </h1>
          <ol class="breadcrumb">
            <li><i class="fa fa-gears"></i> User</li>
          </ol>
        </section>

 <section class="content">
          <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">

                </div><!-- /.box-header -->
               <div class="box-body">
				<a href="#"><button class="btn btn-success" type="button" data-target="#ModalAddGuru" data-toggle="modal"><i class="fa fa-plus"></i> Add Guru</button></a>
				<a href="#"><button class="btn btn-success" type="button" data-target="#ModalAddSiswa" data-toggle="modal"><i class="fa fa-plus"></i> Add Siswa</button></a>
                  <br></br>
				  <table id="data" class="table table-bordered table-striped table-scalable">
						<?php
							include "dt_user.php";
						?>
                  </table>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->
        </section><!-- /.content -->
		
		<div id="ModalAddGuru" class="modal fade" tabindex="-1" role="dialog">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						<h4 class="modal-title">Tambah User Guru</h4>
						<br />
						<h6 class="modal-title">Username Dan Password = NIP Guru</h6>
					</div>
					<div class="modal-body">
						<form action="user_add_guru.php?id=" name="modal_popup" enctype="multipart/form-data" method="post">
							<div class="form-group">
								<label>Usergroup</label>
									<div class="input-group">
										<div class="input-group-addon">
											<i class="fa fa-user"></i>
										</div>
										<select name="Id_Usergroup_User" class="form-control">
											<option value=2 selected>Guru</option>
										</select>
									</div>
							</div>
							<div class="form-group">
								<label>Guru</label>
									<div class="input-group">
										<div class="input-group-addon">
											<i class="fa fa-user"></i>
										</div>
										<select name="User_Guru" class="form-control">
											<?php
												$queryguru = mysqli_query($konek, "SELECT * FROM guru");
												if($queryguru == false){
													die ("Terdapat Kesalahan : ". mysqli_error($konek));
												}
												while($guru = mysqli_fetch_array($queryguru)){
													if($guru["NIP"] != $_SESSION["Username"]){
														echo "<option value='$guru[NIP]'>$guru[Nama_Guru], Tambah Guru untuk User dengan NIP = $guru[NIP]</option>";
													}
												}
											?>
										</select>
									</div>
							</div>
							<div class="modal-footer">
								<button class="btn btn-success" type="submit">
									Create User
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
		
		<div id="ModalAddSiswa" class="modal fade" tabindex="-1" role="dialog">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						<h4 class="modal-title">Tambah User Siswa</h4>
						<br />
						<h6 class="modal-title">Username Dan Password = NIS Siswa</h6>
					</div>
					<div class="modal-body">
						<form action="user_add_siswa.php" name="modal_popup" enctype="multipart/form-data" method="post">
							<div class="form-group">
								<label>Usergroup</label>
									<div class="input-group">
										<div class="input-group-addon">
											<i class="fa fa-user"></i>
										</div>
										<select name="Id_Usergroup_User" class="form-control">
											<option value=3 selected>Siswa</option>
										</select>
									</div>
							</div>
							<div class="form-group">
								<label>Siswa</label>
									<div class="input-group">
										<div class="input-group-addon">
											<i class="fa fa-user"></i>
										</div>
										<select name="User_Siswa" class="form-control">
											<?php
												$querysiswa = mysqli_query($konek, "SELECT * FROM siswa");
												if($querysiswa == false){
													die ("Terdapat Kesalahan : ". mysqli_error($konek));
												}
												while($siswa = mysqli_fetch_array($querysiswa)){
													if($siswa["NIS"] != $_SESSION["Username"]){
														echo "<option value='$siswa[NIS]'>$siswa[Nama_Siswa], Tambah Siswa untuk User dengan NIS = $siswa[NIS]</option>";
													}
												}
											?>
										</select>
									</div>
							</div>
							<div class="modal-footer">
								<button class="btn btn-success" type="submit">
									Create User
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















