<?php include "header.php" ?>

 		<div class="content-wrapper">
 			
        <section class="content-header">
          <h1>
            Kontak Kami
          </h1>
          <ol class="breadcrumb">
            <li><i class="fa fa-info-circle"></i> Kontak Kami </li>
          </ol>
        </section>

 <section id="main-content" class="content">
          <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                </i> Form Kontak</h3>
        <!-- BASIC FORM ELELEMNTS -->
        <div class="row mt">
          <div class="col-lg-6 col-md-6 col-sm-6">
            <h4 class="title"> Form Kontak</h4>
            <div id="message"></div>
            <form class="contact-form php-mail-form" role="form" action="contact_add.php" method="POST">

              <div class="form-group">
                <input type="name" name="name" class="form-control" id="contact-name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" >
              </div>
              <div class="form-group">
                <input type="email" name="email" class="form-control" id="contact-email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email">
              </div>
              <div class="form-group">
                <input type="text" name="subject" class="form-control" id="contact-subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject">
              </div>

              <div class="form-group">
                <textarea class="form-control" name="message" id="contact-message" placeholder="Your Message" rows="5" data-rule="required" data-msg="Please write something for us"></textarea>
              </div>

              <div class="loading"></div>
              <?php 
              if (empty($_GET['pesan'])) {
              	echo "";
               }else {  ?>
              <div class="alert alert-success"><?= $_GET['pesan']?></div>
              <?php } ?>

              <div class="form-send">
                <button type="submit" class="btn btn-large btn-primary">Send Message</button>
              </div>

            </form>
          </div>

          <div class="col-lg-6 col-md-6 col-sm-6">
            <h4 class="title">Contact Details</h4>
            <p>Hubungi kami untuk memberikan kritik, saran maupun keluhan Anda. Satu umpan balik sangat berharga bagi kami. Untuk itu, jangan sungkan untuk menghubungi kami.</p>
            <ul class="contact_details">
              <li><i class="fa fa-envelope-o"></i> infoamga@gmail.com</li>
              <li><i class="fa fa-phone-square"></i> +628 9628 2676 21</li>
              <li><i class="fa fa-home"></i>SMK Negeri 1 Ampelgading, Pemalang, Jawa Tengah.</li>
            </ul>
            <!-- contact_details -->
          </div>
        </div>
        <!-- /row -->

</div>
</div>
</div>
</div>
      </section>
      <!-- /wrapper -->
    </section><!-- /.content -->
		
		<!-- Modal Popup Dosen -->
		<div id="ModalAdd" class="modal fade" tabindex="-1" role="dialog">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						<h4 class="modal-title">Tambah Jurusan</h4>
					</div>
					<div class="modal-body">
						<form action="jurusan_add.php" name="modal_popup" enctype="multipart/form-data" method="post">
							<div class="form-group">
								<label>Kode Jurusan</label>
									<div class="input-group">
										<div class="input-group-addon">
											<i class="fa fa-id-card"></i>
										</div>
										<input name="Kode_Jurusan" type="text" class="form-control" required placeholder="Kode Jurusan"/>
									</div>
							</div>
							<div class="form-group">
								<label>Nama Jurusan</label>
									<div class="input-group">
										<div class="input-group-addon">
											<i class="fa fa-gears"></i>
										</div>
										<input name="Nama_Jurusan" type="text" class="form-control" required placeholder="Nama Jurusan"/>
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















