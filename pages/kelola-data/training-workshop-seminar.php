<?php include '../static/top.php'; ?>
  <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">List Training, Seminar, Workshop</h3>
              <div class="pull-right box-tools">
                <button class="btn btn-primary btn-md" data-toggle="modal" data-target="#modalAdd" title="" data-original-title="Remove"><i class="fa fa-plus"> </i> Add Kegiatan</button>
            </div>
            </div><!-- /.box-header -->
            <div class="box-body">
              <table class="table table-striped">
                <thead>
                  <tr>
                    <th colspan="8">Nama</th>
                    <th>Posisi</th>
                    <th>Actions</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                        <td colspan="8">Amazing You</td>
                        <td>Panitia</td>
                        <td>
                            <a href="#editPersonalDetail" class="btn  btn-warning btn-md" data-toggle="modal" data-target="#modalEdit"><i class="fa fa-edit" data-toggle="tooltip" title="Edit"></i> Edit</a>

                            <a href="#deletePersonalDetail" class="btn  btn-danger btn-md" data-toggle="modal" data-target="#modalDelete"><i class="fa fa-trash" data-toggle="tooltip" title="Delete"></i> Delete</a>
                        </td>
                  </tr>
                  <tr>
                        <td colspan="8">Github Workshop</td>
                        <td>Peserta</td>
                        <td>
                            <a href="#editPersonalDetail" class="btn  btn-warning btn-md" data-toggle="modal" data-target="#modalEdit"><i class="fa fa-edit" data-toggle="tooltip" title="Edit"></i> Edit</a>

                            <a href="#deletePersonalDetail" class="btn  btn-danger btn-md" data-toggle="modal" data-target="#modalDelete"><i class="fa fa-trash" data-toggle="tooltip" title="Delete"></i> Delete</a>
                        </td>
                  </tr>
                  <tr>
                        <td colspan="8">Techtalk</td>
                        <td>Panitia</td>
                        <td>
                            <a href="#editPersonalDetail" class="btn  btn-warning btn-md" data-toggle="modal" data-target="#modalEdit"><i class="fa fa-edit" data-toggle="tooltip" title="Edit"></i> Edit</a>

                            <a href="#deletePersonalDetail" class="btn  btn-danger btn-md" data-toggle="modal" data-target="#modalDelete"><i class="fa fa-trash" data-toggle="tooltip" title="Delete"></i> Delete</a>
                        </td>
                  </tr>
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
            <h4 class="modal-title">Add Training/Seminar/Workshop</h4>
          </div>
          <div class="modal-body">

             <div class="form-group">
                <label>Nama Kegiatan</label>
                <input type="text" class="form-control" name="name" placeholder="Masukan Nama Kegiatan">
              </div>

              <div class="form-group">
                <label>Posisi</label>
                <input type="text" class="form-control" name="tahun" placeholder="Masukan Peran anda dalam acara">
              </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Tutup</button>
            <button type="button" class="btn btn-primary">Simpan</button>
          </div>
        </div>
      </div>
    </div>

    <div id="modalEdit" class="modal fade" role="dialog">
      <div class="modal-dialog">
          <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
            <h4 class="modal-title">Edit Training/Seminar/Workshop</h4>
          </div>
          <div class="modal-body">
             <div class="form-group">
                <label>Nama Kegiatan</label>
                <input type="text" class="form-control" name="name" placeholder="Masukan Nama Kegiatan">
              </div>

              <div class="form-group">
                <label>Posisi</label>
                <input type="text" class="form-control" name="tahun" placeholder="Masukan Peran dalam acara">
              </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Tutup</button>
            <button type="button" class="btn btn-primary">Simpan</button>
          </div>
        </div>
      </div>
    </div>

    <div id="modalDelete" class="modal modal-danger fade" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
              <h4 class="modal-title">Delete Education</h4>
            </div>
            <div class="modal-body">
              <p>Apakah kamu ingin menghapus data ini?</p>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-outline pull-left" data-dismiss="modal">Tutup</button>
              <button type="button" class="btn btn-outline">YA</button>
            </div>
          </div>
        </div>
      </div>

      </div><!-- /.row -->
  </section>
<?php include '../static/bot.php'; ?>
