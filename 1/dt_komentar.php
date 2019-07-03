 
              <div class="col-md-8 mb">
                  <div class="message-header">
                    <h5>DIRECT MESSAGE</h5>
                  </div><br><br>

                <div class="message-p pn">
                  <div class="row">    <?php 
                            $query= mysqli_query($konek,"SELECT * FROM kontak");
                            while ($komentar=mysqli_fetch_array($query)){
                               ?>
                    <div class="col-md-3 centered hidden-sm hidden-xs">
                      <img src="../aset/foto/smk.png" class="img-circle" width="65">
                    </div>

                     
                    <div class="col-md-9">
                      <p>
                        <name style="color: #EE5565;"><b><?= $komentar['name'] ?></b></name>
                        sent you a comment.
                      </p>
                      <p class="small"><?= $komentar['email'] ?></p>
                      <p class="message"><?= $komentar['message'] ?></p>
                    </div><br><br><br><br><br><br><br><hr>
                  <?php } ?>
                  </div>
                </div>
