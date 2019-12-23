<?php include '../static/top.php'; 
include '../../config/kelola-data/personal_sertification.php';
        $db     = new personal_sertification();
          $table    = 'personal_sertification';?>
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Personal Sertification</h3>
              <div class="pull-right box-tools">
<<<<<<< HEAD
                <button class="btn btn-primary btn-md" data-toggle="modal" data-target="#modalAdd"><i class="fa fa-plus"> </i> Add  Personal Sertification</button>
=======
                <button class="btn btn-primary btn-md" data-toggle="modal" data-target="#modalAdd"><i class="fa fa-plus" > </i> Add Personal Sertification</button>
>>>>>>> 14f0fa39250c999aeedb0682752c4efa7e5a399e
            </div><!-- /.box-header -->
            <div class="box-body">
              <table class="table table-bordered table-striped">
                <thead>
                  <tr>        
<<<<<<< HEAD
                    <th>No</th>   
                    <th>Nama Sertification</th>
                    <th>Nama Lembaga</th>
                    <th>Tahun</th>
=======
                    <th>No</th>
                    <th>Nama Sertification</th>
                    <th>Nama Lembaga </th>
                    <th>Tahun </th>
>>>>>>> 14f0fa39250c999aeedb0682752c4efa7e5a399e
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
                        <td><?php echo $show['nama_sertification']; ?></td>
                        <td><?php echo $show['nama_lembaga']; ?></td>
<<<<<<< HEAD
                         <td><?php echo $show['tahun']; ?></td>
=======
                        <td><?php echo $show['tahun']; ?></td>
>>>>>>> 14f0fa39250c999aeedb0682752c4efa7e5a399e
                        <td>
                            <a href="#editSertification" class="btn  btn-warning btn-md" data-toggle="modal" data-target="#modalEdit-<?php echo $show['id_personal_sertification']; ?>"><i class="fa fa-edit" data-toggle="tooltip" title="Edit"></i> Edit</a>

                            <a href="#deleteSertification" class="btn  btn-danger btn-md" data-toggle="modal" data-target="#modalDelete-<?php echo $show['id_personal_sertification']; ?>"><i class="fa fa-trash" data-toggle="tooltip" title="Delete"></i> Delete</a>


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
            <h4 class="modal-title">Add Personal Sertification</h4>
          </div>
          <form action="action.php?table=personal_sertification&action=store" method="post">
          <input type="hidden" name="id_user" value="<?php echo $_SESSION['user']; ?>">    

          <div class="modal-body">
             <div class="form-group">
                <label>Nama Sertification</label>
<<<<<<< HEAD
                <input type="text" class="form-control" name="nama_sertification" placeholder="Masukan Nama Sertification" required>
=======
                <input type="text" class="form-control" name="nama_sertification" placeholder="Masukan Nama Research" required>
>>>>>>> 14f0fa39250c999aeedb0682752c4efa7e5a399e
              </div>

              <div class="form-group">
                <label>Nama Lembaga</label>
<<<<<<< HEAD
                <input type="text" class="form-control" name="nama_lembaga" placeholder="Masukan Nama Lembaga" required>
              </div>
              
              <div class="form-group">
                <label>Tahun</label>
                <input type="text" class="form-control" name="tahun" placeholder="Masukan Tahun" required>
              </div>

                <div class="col-lg-12">
               <div class="form-group">
                  <div class="custom-file">
                      <label class="custom-file-label" for="customFile">File</label>
                       <input type="file" class="custom-file-input" id="customFile" name="upload_file" required>
                   </div>
               </div>
            </div> 

=======
                <input type="text" class="form-control" name="nama_lembaga" placeholder="Masukan Tahun" required>
              </div>
              
            

              <div class="form-group">
                <label>Tahun</label>
                <input type="text" class="form-control" name="tahun" placeholder="Deskripsi" required>
              </div>
              
            
              
>>>>>>> 14f0fa39250c999aeedb0682752c4efa7e5a399e
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

    

    <div id="modalEdit-<?php echo $show['id_personal_sertification']; ?>" class="modal fade" role="dialog">
      <div class="modal-dialog">
          <div class="modal-content">
          <div class="modal-header btn-warning">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
<<<<<<< HEAD
            <h4 class="modal-title">Edit Personal Sertification</h4>
          </div>
          <form action="action.php?table=personal_sertification&action=update" method="post">
          <div class="modal-body">
            <input type="hidden" name="id_personal_sertification" value="<?php echo $show['id_personal_sertification'] ?>">
=======
            <h4 class="modal-title">Edit professional Sertification</h4>
          </div>
          <form action="action.php?table=personal_sertification&action=update" method="post">

          <div class="modal-body">
            <input type="hidden" name="id_personal_sertification" value="<?php echo $show['id_personal_sertification'] ?>">
             
             <div class="col-sm-6">
>>>>>>> 14f0fa39250c999aeedb0682752c4efa7e5a399e
             <div class="form-group">
                <label>Nama Sertification</label>
                <input type="text" class="form-control" name="nama_sertification" placeholder="" value="<?php echo $show['nama_sertification'] ?>" >
              </div>
<<<<<<< HEAD

              <div class="form-group">
                <label>Nama Lembaha</label>
                <input type="text" class="form-control" name="nama_lembaga" placeholder="" value="<?php echo $show['nama_lembaga'] ?>" >
              </div>

=======
             </div>

              <div class="col-sm-6"> 
              <label>Nama Lembaga</label>
                <input type="text" class="form-control" name="nama_lembaga" placeholder="" value="<?php echo $show['nama_lembaga'] ?>" >
            </div>

              <div class="col-sm-6"> 
>>>>>>> 14f0fa39250c999aeedb0682752c4efa7e5a399e
              <div class="form-group">
                <label>Tahun</label>
                <input type="text" class="form-control" name="tahun" placeholder="" value="<?php echo $show['tahun'] ?>">
              </div>
<<<<<<< HEAD

              <div class="col-lg-12">
=======
             </div>

             
            <div class="col-lg-6">
>>>>>>> 14f0fa39250c999aeedb0682752c4efa7e5a399e
               <div class="form-group">
                  <div class="custom-file">
                      <label class="custom-file-label" for="customFile">File</label>
                       <input type="file" class="custom-file-input" id="customFile" name="upload_file" value="<?php echo $show['upload_file'] ?>" >
                   </div>
               </div>
            </div>   
<<<<<<< HEAD
=======
              
>>>>>>> 14f0fa39250c999aeedb0682752c4efa7e5a399e
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Tutup</button>
            <button type="submit" class="btn btn-primary">Simpan</button>
          </div>
        </form>
        </div>
      </div>
    </div>

    <div id="modalDelete-<?php echo $show['id_personal_sertification']; ?>"  class="modal modal-danger fade">
        <div class="modal-dialog">
            <div class="modal-content">
<<<<<<< HEAD
            <div class="modal-header">
              <button type="button" class="Tutup" data-dismiss="modal" aria-label="Tutup"><span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title">Delete Personal Sertification</h4>
=======
            <div class="modal-header btn-danger">
              <button type="button" class="Tutup" data-dismiss="modal" aria-label="Tutup"><span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title">Delete Writing Experience</h4>
>>>>>>> 14f0fa39250c999aeedb0682752c4efa7e5a399e
            </div>
            <form action="action.php?table=personal_sertification&action=delete" method="post">
                <input name="id_personal_sertification" type="hidden" value="<?php echo $show['id_personal_sertification']; ?>">
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
