       <div class="box satu">
        <div class="box-header">
          <h3 class="box-title">Tabel Ruang</h3>
        </div>
        <div class="box-header">
          <button type="button" class="btn btn-primary toggle">Tambah</button>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <table id="example1" class="table table-bordered table-striped">
            <thead>
              <tr>
                <th>no</th>
                <th>nama</th>
                <th>posisi</th>
                <th>Aksi</th>
              </tr>
            </thead>
            <tbody>
              <?php
              $rg=mysqli_query($con,"SELECT * FROM ruang");
              $i=1;
              while ($rgs= mysqli_fetch_array($rg)) :?>
                <tr>
                  <td><?= $i;?></td>
                  <input type="hidden" value="<?= $rgs['id_ruang']?>">
                  <td><?= $rgs['nama_ruang'];?></td>
                  <td><?= $rgs['posisi'];?></td>
                  <td><center>
                    <button type="button" class="btn btn-primary toggle toggle-edit" id="<?= 'baris' . $i;?>">edit</button>
                    <button type="button" class="btn btn-danger" onclick="confirm('Hapus?')">hapus</button>
                    <!-- <a href="index.php?page=edit_ruang&id_ruang=<?php echo $rgs['id_ruang']?>" class="btn btn-primary">edit</a>  -->
                    <!-- |<a href="index.php?page=hapus_ruang&id_ruang=<?php echo $rgs['id_ruang']?>" class="btn btn-primary" onclick="return confirm('yakin akan menghapus?');">hapus</a> --> 
                  </center></td>
                </tr>
                <?php
                $i++;
              endwhile; ?>
            </table>
          </div>
          <!-- /.box-body -->
        </div>
        <div class="box dua" style="display: none;">
          <div class="box-header">
            <h3 class="box-title">Kelola Ruang</h3>
          </div>
          <div class="box-header">
           <div class="form-group">
            <form action="" method="post">
              <input type="hidden" id="id_ruang" name="id_ruang">
              <div class="form-group">
                <label for="nama_ruang">Nama</label>
                <input type="text" class="form-control" id="nama_ruang" name="nama_ruang" placeholder="Nama Ruangan">
              </div>
              <div class="form-group">
                <label for="kode_posisi">Kode</label>
                <input type="text" class="form-control" id="kode_posisi" name="kode_posisi" placeholder="Kode Posisi">
              </div>
            </div>
            <button type="submit" class="btn btn-primary" name="tambah">Simpan</button>
          </form>
          <button type="button" class="btn btn-secondary toggle">Batal</button>
        </div>
      </div>
      <?php
      if (isset($_POST['tambah'])) {
        $nama = $_POST['nama_ruang'];
        $kode = $_POST['kode_posisi'];
        mysqli_query($con,"INSERT into ruang VALUES(DEFAULT,'$nama','$kode')");
        header("Location: http://alur-akademik.com/master/tabel_ruang");
      }
      if (isset($_POST['edit'])) {
        $id = $_POST['id_ruang'];
        $nama = $_POST['nama_ruang'];
        $kode = $_POST['kode_posisi'];
        mysqli_query($con,"UPDATE ruang SET nama_ruang='$nama', posisi='$kode' WHERE id_ruang=$id");
        header("Location: http://alur-akademik.com/master/tabel_ruang");
      }
      ?>
      <script>
        function displayEdit() {
          $(".box.satu").toggle()
          $(".box.dua").toggle()
        }

        function fillForm(mode = "DEFAULT", data_baris) {
          if (mode === "edit") {
            baris = $("#" + data_baris).parent().parent().siblings()
            $("#id_ruang").val(baris[1].value)
            $("#nama_ruang").val(baris[2].innerText)
            $("#kode_posisi").val(baris[3].innerText)
            $(":submit").attr("name","edit")
          }else{
            $("#id_ruang").val("")
            $("#nama_ruang").val("")
            $("#kode_posisi").val("")
            $(":submit").attr("name","tambah")
          }
        }

        $("button.toggle").each(function(){
          $(this).on('click', function() {
            if($(this).text() === "edit" ){
              fillForm("edit", $(this)[0].id)
            }else{
              fillForm($(this)[0].id)
            }
            displayEdit()
          })
        })

        // $("button.toggle.toggle-edit").each(function(index, el) {
        //   $(this).click(function() {
        //     fillForm($(this)[0].id);
        //   });
        // });
      </script>
      
