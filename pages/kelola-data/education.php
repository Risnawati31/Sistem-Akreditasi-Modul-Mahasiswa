<?php include '../static/top.php'; 

          include '../../config/kelola-data/education.php';
        $db     = new education();
          $table    = 'education';?>
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">List Education</h3>
              <div class="pull-right box-tools">
                <button class="btn btn-primary btn-md" data-toggle="modal" data-target="#modalAdd"><i class="fa fa-plus"> </i> Add Education</button>
            </div>
            </div><!-- /.box-header -->
            <div class="box-body">
              <table class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Tahun</th>
                    <th>Kota</th>
                    <th>Actions</th>
                  </tr>
                </thead>
                <tbody>
                    <?php
                        $no = 1;
                        if($db->show() != null) {
                            foreach($db->show() as $show) {
                    ?>
                      <tr>
                        <td width="4%"><?php echo $no++; ?></td>
                        <td><?php echo $show['nama_education']; ?></td>
                        <td><?php echo $show['tahun']; ?></td>
                        <td><?php echo $show['kota']; ?></td>
                        <td>
                            <a href="#editEducation" class="btn  btn-warning btn-md" data-toggle="modal" data-target="#modalEdit"><i class="fa fa-edit" data-toggle="tooltip" title="Edit"></i> Edit</a>

                            <a href="#deleteEducation" class="btn  btn-danger btn-md" data-toggle="modal" data-target="#modalDelete"><i class="fa fa-trash" data-toggle="tooltip" title="Delete"></i> Delete</a>
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
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
            <h4 class="modal-title">Add Education</h4>
          </div>
          <form action="action.php?table=education&action=store" method="post">
              <div class="modal-body row">
                <div class="col-sm-6">
                 <div class="form-group">
                    <label>Nama</label>
                    <input type="text" class="form-control" name="nama_education" placeholder="Masukan Nama">
                  </div>
                 </div> 
                 <div class="col-sm-6"> 
                  <div class="form-group">
                    <label>Tahun</label>
                    <input type="text" class="form-control" name="tahun" placeholder="Masukan Tahun">
                  </div>
                </div>
                <div class="col-sm-12">
                  <div class="form-group">
                    <label>Kota</label>
                    <input type="text" class="form-control" name="kota" placeholder="Masukan Kota">
                  </div>
                 </div> 
                 <div class="col-sm-12">
                  <div class="checkbox">
                    <label>
                      <input type="checkbox"> Check me out
                    </label>
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
     
    <div id="modalEdit" class="modal fade" role="dialog">
      <div class="modal-dialog">
          <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
            <h4 class="modal-title">Edit Education</h4>
          </div>
          <form action="action.php?table=education&action=store" method="post">
          <div class="modal-body">
             <div class="form-group">
                <label>Nama</label>
                <input type="text" class="form-control" name="nama_education" placeholder="Masukan Nama">
              </div>

              <div class="form-group">
                <label>Tahun</label>
                <input type="text" class="form-control" name="tahun" placeholder="Masukan Tahun">
              </div>

              <div class="form-group">
                <label>Kota</label>
                <input type="text" class="form-control" name="kota" placeholder="Masukan Kota">
              </div>

          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Tutup</button>
            <button type="submit," class="btn btn-primary">Simpan</button>
          </div>
        </form>
        </div>
      </div>
    </div>


    <div id="modalDelete" id="delete-<?php echo $show['id_education']; ?>" class="modal modal-danger fade">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="Tutup" data-dismiss="modal" aria-label="Tutup"><span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title">Delete Education</h4>
            </div>
            <form action="action.php?table=<?php echo $table; ?>&action=delete" method="post">
                <input name="id_education" type="hidden" value="<?php echo $show['id_education']; ?>">
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


      </div><!-- /.row -->
    </section>
<?php include '../static/bot.php'; ?>
