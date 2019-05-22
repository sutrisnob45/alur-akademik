          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Pegawai Di Ruang Baak</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
          <form action="" method="POST" enctype="multipart/form-data">
            <div class="box-body">
              <?php
                $ba=mysqli_query($con,"SELECT a.id_pegawai,a.nama_pegawai,a.foto,b.nama_jabatan,c.nama_ruang from pegawai a
                  LEFT OUTER JOIN jabatan b on a.id_jabatan = b.id_jabatan
                  LEFT OUTER JOIN ruang c on a.id_ruang = c.id_ruang WHERE a.id_ruang='11'");
                while ($bas=mysqli_fetch_array($ba)) {

              ?>
              <div class="tabeff"><br>
            <!-- /.form-group -->
              <div class="col-md-6">
                <div class="form-group">
                  <img src="img/<?php echo $bas['foto'];?>" width="200" height="200">
                </div>
              <div class="form-group" style="width: 200px;background-color: ;">
                  <?php echo $bas['nama_pegawai'];?>
              </div>
              <div class="form-group" style="width: 200px;background-color: ;">
                <?php echo $bas['nama_jabatan'];?>
              </div>
              <!-- end -->
              </div><br>
          </div>
            <?php } ?>
              <!-- /.box-body -->
               </div>
            </form>
          </div>
          <!-- /.box -->
