<?php include '../static/top.php'; ?>
  <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">List Professional Certification</h3>
              <div class="pull-right box-tools">

                <!--<button class="btn btn-primary btn-md" data-toggle="modal" data-target="#modalAdd" title="" data-original-title="Remove"><i class="fa fa-plus"> </i> Add Sertifikat</button>--> <!--Alternatif for modal-->

                <a href="form-sertifikat.php"><button class="btn btn-primary btn-md"><i class="fa fa-plus"> </i> Add Skills</button></a>
            </div>
            </div><!-- /.box-header -->
            <div class="box-body">
              <table class="table table-striped">
                <thead>
                  <tr>
                    <th>ID</th>
                    <th>Nama Sertifikat</th>
                    <th>Nama Lembaga</th>
                    <th>Tahun</th>
                    <th>Actions</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th>#01</th>
                    <th>#Sharing Time</th>
                    <th>Ayah Amanah</th>
                    <th>2018</th>
                    <td>
                      <a href="#editPersonalDetail" class="btn  btn-warning btn-md" data-toggle="modal" data-target="#modalEdit"><i class="fa fa-edit" data-toggle="tooltip" title="Edit"></i> Edit</a>

                      <a href="#deletePersonalDetail" class="btn  btn-danger btn-md" data-toggle="modal" data-target="#modalDelete"><i class="fa fa-trash" data-toggle="tooltip" title="Delete"></i> Delete</a>
                    </td>
                  </tr>
                  <tr>
                    <th>#02</th>
                    <th>BOLT</th>
                    <th>BEM ESQBS</th>
                    <th>2018</th>
                        <td>
                            <a href="#editPersonalDetail" class="btn  btn-warning btn-md" data-toggle="modal" data-target="#modalEdit"><i class="fa fa-edit" data-toggle="tooltip" title="Edit"></i> Edit</a>

                            <a href="#deletePersonalDetail" class="btn  btn-danger btn-md" data-toggle="modal" data-target="#modalDelete"><i class="fa fa-trash" data-toggle="tooltip" title="Delete"></i> Delete</a>
                        </td>
                  </tr>
                  <tr>
                        <th>#03</th>
                    <th>Welcoming Week</th>
                    <th>ESQ Business School</th>
                    <th>2018</th>
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
            <h4 class="modal-title">Add Sertifikat</h4>
          </div>
          <div class="modal-body">

             <div class="form-group">
                <label>Nama Sertifikat</label>
                <input type="text" class="form-control" name="name" placeholder="Masukan Nama Sertifikat">
              </div>

              <div class="form-group">
                <label>Lembaga</label>
                <input type="text" class="form-control" name="tahun" placeholder="Masukan Nama Lembaga">
              </div>
              <br>
              <div>
                  <button type="button" class="btn btn-default" data-dismiss="modal">Upload File</button>
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
            <h4 class="modal-title">Edit Sertifikat</h4>
          </div>
          <div class="modal-body">
             <div class="form-group">
                <label>Nama Sertifikat</label>
                <input type="text" class="form-control" name="name" placeholder="Masukan Nama Sertifikat">
              </div>

              <div class="form-group">
                <label>Nama Lembaga</label>
                <input type="text" class="form-control" name="tahun" placeholder="Masukan Nama Lembaga">
              </div>
              <br>
              <div>
                  <button type="button" class="btn btn-default" data-dismiss="modal">Upload File</button>
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
              <h4 class="modal-title">Delete Sertifikat</h4>
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
