
 	</div>
  <?php
		include	"content_footer.php";
	?>
    </div><!-- ./wrapper -->


        <div id="ModalEdit" class="modal fade" tabindex="-1" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title">Ganti Password</h4>
                    </div>
                    <div class="modal-body">
                        <form action="ganti_password1.php?id=<?= $_SESSION['Id_User'] ?>" name="modal_popup" enctype="multipart/form-data" method="post">
                            <div class="form-group">
                            <div class="form-group">
                                <label>Password Lama</label>
                                    <div class="input-group">
                                        <div class="input-group-addon">
                                            <i class="fa fa-edit"></i>
                                        </div>
                                        <input type="password" name="Password_Lama" class="form-control" placeholder="Masukkan Password Lama Anda">
                                    </div>
                                </div>
                            <div class="form-group">
                                <label>Password Baru</label>
                                    <div class="input-group">
                                        <div class="input-group-addon">
                                            <i class="fa fa-edit"></i>
                                        </div>
                                        <input type="password" name="Password" class="form-control" placeholder="Masukkan Password Baru Anda">
                                    </div>
                                </div>
                            <div class="modal-footer">
                                <button class="btn btn-success" type="submit">
                                    Ganti
                                </button>
                                <button type="reset" class="btn btn-danger"  data-dismiss="modal" aria-hidden="true">
                                    Batal
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div id="ModalNotif" class="modal fade" tabindex="-1" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content" style="margin-top:100px;">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title" style="text-align:center;">Password Lama Anda Salah.</h4>
                    </div>    
                    <div class="modal-footer" style="margin:0px; border-top:0px; text-align:center;">
                        <a href="index.php" class="btn btn-danger">OK</a>
                    </div>
                </div>
            </div>
        </div>

    <!-- jQuery 2.1.4 -->
     <script src="../aset/plugins/jQuery/jQuery-2.1.4.min.js"></script>
    <!-- Bootstrap 3.3.5 -->
    <script src="../aset/bootstrap/js/bootstrap.min.js"></script>
    <!-- DataTables -->
    <script src="../aset/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="../aset/plugins/datatables/dataTables.bootstrap.min.js"></script>
    <!-- SlimScroll -->
    <script src="../aset/plugins/slimScroll/jquery.slimscroll.min.js"></script>
    <!-- FastClick -->
    <script src="../aset/plugins/fastclick/fastclick.min.js"></script>
    <!-- AdminLTE App -->
    <script src="../aset/dist/js/app.min.js"></script>
    <!-- Daterange Picker -->
    <script src="../aset/plugins/daterangepicker/moment.min.js"></script>
    <script src="../aset/plugins/daterangepicker/daterangepicker.js"></script>
    <script src="../aset/plugins/select2/select2.full.min.js"></script>
    <script src="../aset/plugins/bootstrap-datetimepicker/js/bootstrap-datetimepicker.min.js"></script>

    <script>
      $(function () {   
        // Daterange Picker
        $('#Tanggal_Lahir').daterangepicker({
            singleDatePicker: true,
            showDropdowns: true,
            format: 'YYYY-MM-DD'
        });
        
          // Data Table
        $("#data").dataTable({
            scrollX: true
        });     
      });
    </script>
    
    <!-- Date Time Picker -->
    <script>
        $(function (){
            $('#Jam_Mulai').datetimepicker({
                format: 'HH:mm'
            });
            
            $('#Jam_Selesai').datetimepicker({
                format: 'HH:mm'
            });
        });
    </script>
    
    <!-- Javascript Edit--> 
    <script type="text/javascript">
        $(document).ready(function () {
        
        // Dosen
        $(".open_modal").click(function(e) {
            var m = $(this).attr("id");
                $.ajax({
                    url: "guru_modal_edit.php",
                    type: "GET",
                    data : {NIP: m,},
                    success: function (ajaxData){
                    $("#ModalEditGuru").html(ajaxData);
                    $("#ModalEditGuru").modal('show',{backdrop: 'true'});
                    }
                });
            });
        
        // Mahasiswa
        $(".open_modal").click(function(e) {
            var m = $(this).attr("id");
                $.ajax({
                    url: "siswa_modal_edit.php",
                    type: "GET",
                    data : {NIS: m,},
                    success: function (ajaxData){
                    $("#ModalEditSiswa").html(ajaxData);
                    $("#ModalEditSiswa").modal('show',{backdrop: 'true'});
                    }
                });
            });
            
        // Ruangan
        $(".open_modal").click(function(e) {
            var m = $(this).attr("id");
                $.ajax({
                    url: "ruangan_modal_edit.php",
                    type: "GET",
                    data : {Kode_Ruangan: m,},
                    success: function (ajaxData){
                    $("#ModalEditRuangan").html(ajaxData);
                    $("#ModalEditRuangan").modal('show',{backdrop: 'true'});
                    }
                });
            });

        // Matakuliah
        $(".open_modal").click(function(e) {
            var m = $(this).attr("id");
                $.ajax({
                    url: "matakuliah_modal_edit.php",
                    type: "GET",
                    data : {Kode_Matakuliah: m,},
                    success: function (ajaxData){
                    $("#ModalEditMatakuliah").html(ajaxData);
                    $("#ModalEditMatakuliah").modal('show',{backdrop: 'true'});
                    }
                });
            });
            
        // Jurusan
        $(".open_modal").click(function(e) {
            var m = $(this).attr("id");
                $.ajax({
                    url: "jurusan_modal_edit.php",
                    type: "GET",
                    data : {Kode_Jurusan: m,},
                    success: function (ajaxData){
                    $("#ModalEditJurusan").html(ajaxData);
                    $("#ModalEditJurusan").modal('show',{backdrop: 'true'});
                    }
                });
            });
            
        // Jenjang
        $(".open_modal").click(function(e) {
            var m = $(this).attr("id");
                $.ajax({
                    url: "jenjang_modal_edit.php",
                    type: "GET",
                    data : {Kode_Jenjang: m,},
                    success: function (ajaxData){
                    $("#ModalEditJenjang").html(ajaxData);
                    $("#ModalEditJenjang").modal('show',{backdrop: 'true'});
                    }
                });
            });
            
        // Jadwal
        $(".open_modal").click(function(e) {
            var m = $(this).attr("id");
                $.ajax({
                    url: "jadwal_modal_edit.php",
                    type: "GET",
                    data : {Id_Jadwal: m,},
                    success: function (ajaxData){
                    $("#ModalEditJadwal").html(ajaxData);
                    $("#ModalEditJadwal").modal('show',{backdrop: 'true'});
                    }
                });
            });
        });
    </script>
    
    <!-- Javascript Delete -->
    <script>
        function confirm_delete(delete_url){
            $("#modal_delete").modal('show', {backdrop: 'static'});
            document.getElementById('delete_link').setAttribute('href', delete_url);
        }
    </script>
 </body>
 </html>
