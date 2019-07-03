<?php include "header.php" ?>

 		<div class="content-wrapper">
 			
        <section class="content-header">
          <h1>
            Komentar
          </h1>
          <ol class="breadcrumb">
            <li><i class="fa fa-comments-o"></i> Komentar</li>
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
							include "dt_komentar.php";
						?>
                  </table>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->
        </section><!-- /.content -->
		
    </div>

        <?php include "footer.php" ?>















