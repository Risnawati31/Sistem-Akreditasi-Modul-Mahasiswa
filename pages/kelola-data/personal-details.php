<?php include '../static/top.php'; 
include '../../config/kelola-data/personal_details.php';
        $db     = new personal_details();
          $table    = 'personal_details';?>
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Personal Details</h3>
              <div class="pull-right box-tools">
                <button class="btn btn-primary btn-md" data-toggle="modal" data-target="#modalAdd"><i class="fa fa-plus" > </i> Add Personal Details</button>
            </div><!-- /.box-header -->
            <div class="box-body">
              <table class="table table-bordered table-striped">
                <thead>
                  <tr>        
                    <th>No</th>   
                    <th>NIM</th>
                    <th>Nama</th>
                    <th>Jurusan</th>
                    <th>Phone</th>
                    <th>Alamat</th>
                    <th>Actions</th>
                  </tr>
                </thead>
                <tbody>
                    <?php
                        $no = 1;
                        if($db->search_by_field('id_user' , $_SESSION['user']) != null) {
                            foreach($db->search_by_field('id_user' , $_SESSION['user']) as $show) {
                    ?>
                      <tr>
                        <td width="4%"><?php echo $no++; ?></td>
                        <td><?php echo $show['nim']; ?></td>
                        <td><?php echo $show['nama']; ?></td>
                        <td><?php echo $show['prodi']; ?></td>
                        <td><?php echo $show['no_hp']; ?></td>
                        <td><?php echo $show['alamat']; ?></td>
                        <td>
                            <a href="#editPersonal" class="btn  btn-warning btn-md" data-toggle="modal" data-target="#modalEdit-<?php echo $show['id_personal_details']; ?>"><i class="fa fa-edit" data-toggle="tooltip" title="Edit"></i> Edit</a>

                            <a href="#deleteWriting" class="btn  btn-danger btn-md" data-toggle="modal" data-target="#modalDelete-<?php echo $show['id_personal_details']; ?>"><i class="fa fa-trash" data-toggle="tooltip" title="Delete"></i> Delete</a>


                        </td>
                      </tr> 
                              <?php 
                                      }
                                  }
                              ?> 
                    </tbody>
              </table>
            </div><!-- /.box-body -->
          </div><!-- /.box -->
        </div><!-- /.col -->

     <div id="modalAdd" class="modal fade" role="dialog">
      <div class="modal-dialog">
          <div class="modal-content">
          <div class="modal-header btn-primary">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
            <h4 class="modal-title">Add Personal Details</h4>
          </div>
          <form action="action.php?table=personal_details&action=store" method="post">
          <input type="hidden" name="id_user" value="<?php echo $_SESSION['user']; ?>">    

          <div class="modal-body">

             <div class="col-lg-6">
             <div class="form-group">
                <label>NIM</label>
                <input type="text" class="form-control" name="nim" placeholder="Masukan NIM" required>
              </div>
             </div>

            <div class="col-lg-6"> 
              <div class="form-group">
                <label>Nama</label>
                <input type="text" class="form-control" name="nama" placeholder="Masukan Nama" required>
              </div>
            </div>

            <div class="col-lg-6">
                <div class="form-group">
                    <label>Tempat Lahir</label>
                    <input type="text" placeholder="Tempat Lahir" name="tempat_lahir" class="form-control" autocomplete="off">
                </div>
            </div>

            <div class="col-lg-6">
              <div class="form-group">
               <label>Tanggal Lahir</label>
               <div class="input-group">
                   <div class="input-group-addon">
                      <i class="fa fa-calendar"></i>
                   </div>
                   <input type="text" class="form-control" name="tanggal_lahir" data-inputmask="'alias': 'dd/mm/yyyy'" data-mask="" autocomplete="off">
               </div>
              </div>
            </div>

              <div class="col-lg-6"> 
              <div class="form-group">
                <label>Telepon</label>
                <input type="number" class="form-control" name="no_hp" placeholder="Masukan Telepon" required>
              </div>
             </div>

             <div class="col-lg-6">
               <div class="form-group">
                <label>Email</label>
                <input type="Email" class="form-control" name="email" placeholder="Masukan Email" required>
              </div>
            </div>

            <div class="col-lg-6">
                <div class="form-group">
                    <label>Alamat</label>
                    <input type="text" class="form-control" name="alamat" placeholder="Alamat" required>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="form-group">
                   <label>Status Pernikahan</label>
                      <select name="status_pernikahan" class="form-control">
                         <option>Status Pernikahan</option>
                         <?php foreach($status_pernikahan as $s) { 
                         echo "<option value='$s'>$s</option>";
                          } ?>
                     </select>
                </div>    
            </div>

            <div class="col-lg-6">
               <div class="form-group">
                   <label>Prodi</label>
                  <select name="prodi" class="form-control">
                  <option>Prodi</option>
                  <?php foreach($prodi as $s) { 
                  echo "<option value='$s'>$s</option>";
                  } ?>
                  </select>
              </div>
            </div> 

            <div class="col-lg-6">
                <div class="form-group">
                   <label>Angkatan</label>
                      <select name="angkatan" class="form-control">
                         <option>Angkatan</option>
                         <?php foreach($angkatan as $s) { 
                         echo "<option value='$s'>$s</option>";
                          } ?>
                     </select>
                </div>    
            </div>                       

            <div class="col-lg-12"> 
              <div class="form-group">
                <label>Media Sosial</label>
                <input type="text" class="form-control" name="sosmed" placeholder="Masukan Sosmed" required>
              </div>
            </div>  
              
          </div>

          <div class="modal-footer">
            <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Tutup</button>
            <button type="submit" class="btn btn-primary">Simpan</button>
          </div>

        </form>
        </div>
      </div>
    </div>

    <?php
       $no = 1;
       if($db->search_by_field('id_user' , $_SESSION['user']) != null) {
          foreach($db->search_by_field('id_user' , $_SESSION['user']) as $show) {
    ?>

    

    <div id="modalEdit-<?php echo $show['id_writing_experience']; ?>" class="modal fade" role="dialog">
      <div class="modal-dialog">
          <div class="modal-content">
          <div class="modal-header btn-warning">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
            <h4 class="modal-title">Edit Writing Experience</h4>
          </div>
          <form action="action.php?table=writing_experience&action=update" method="post">

          <div class="modal-body">
            <input type="hidden" name="id_writing_experience" value="<?php echo $show['id_writing_experience'] ?>">
             <div class="col-sm-6">
             <div class="form-group">
                <label>Judul Karya</label>
                <input type="text" class="form-control" name="judul_karya" placeholder="" value="<?php echo $show['judul_karya'] ?>">
              </div>
             </div>

              <div class="col-sm-6"> 
              <div class="form-group">
                <label>Nama Dosen</label>
                <input type="text" class="form-control" name="nama_dosen" placeholder="" value="<?php echo $show['nama_dosen'] ?>">
              </div>
            </div>

              <div class="col-sm-6">
              <div class="form-group">
                <label>Nama Jurnal</label>
                <input type="text" class="form-control" name="nama_jurnal" placeholder="" value="<?php echo $show['nama_jurnal'] ?>">
              </div>
             </div>

              <div class="col-sm-6"> 
              <div class="form-group">
                <label>Tahun</label>
                <input type="text" class="form-control" name="tahun" placeholder="" value="<?php echo $show['tahun'] ?>">
              </div>
             </div>

             <div class="col-sm-6">
               <div class="form-group">
                <label>Volume</label>
                <input type="text" class="form-control" name="volume" placeholder="" value="<?php echo $show['tahun'] ?>" >
              </div>
            </div>

            <div class="col-sm-6">
              <div class="form-group">
                <label>Halaman</label>
                <input type="number" class="form-control" name="halaman" placeholder="" value="<?php echo $show['halaman'] ?>">
              </div>
            </div>

            <div class="col-sm-6">
              <div class="form-group">
                <label>Link URl</label>
                <input type="text" class="form-control" name="link" placeholder="" value="<?php echo $show['link'] ?>">
              </div>
            </div>

            <div class="col-sm-6">
              <div class="form-group">
                <label>Kategori</label>
                <input type="text" class="form-control" name="kategori" placeholder="" value="<?php echo $show['kategori'] ?>">
              </div>
            </div>

            <div class="col-lg-12">
               <div class="form-group">
                  <div class="custom-file">
                      <label class="custom-file-label" for="customFile">File</label>
                       <input type="file" class="custom-file-input" id="customFile" name="upload_file" value="<?php echo $show['upload_file'] ?>" >
                   </div>
               </div>
            </div>   
              
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Tutup</button>
            <button type="submit" class="btn btn-primary">Simpan</button>
          </div>
        </form>
        </div>
      </div>
    </div>

    <div id="modalDelete-<?php echo $show['id_personal_details']; ?>"  class="modal modal-danger fade">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header btn-danger">
              <button type="button" class="Tutup" data-dismiss="modal" aria-label="Tutup"><span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title">Delete Personal Details</h4>
            </div>
            <form action="action.php?table=personal_details&action=delete" method="post">
                <input name="id_personal_details" type="hidden" value="<?php echo $show['id_personal_details']; ?>">
                <div class="modal-body">
                  <p>Apakah kamu ingin menghapus data ini?</p>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-outline pull-left" data-dismiss="modal">Tutup</button>
                  <button type="submit" class="btn btn-outline">YA</button>
                </div>
           </form>
          </div>
        </div>
      </div>

     <?php 
                                      }
                                  }
                              ?>

      </div><!-- /.row -->
    </section>
<?php include '../static/bot.php'; ?>
