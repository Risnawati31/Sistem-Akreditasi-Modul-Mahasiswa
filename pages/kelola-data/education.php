<?php include '../static/top.php'; ?>
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">List Education</h3>
              <div class="pull-right box-tools">
                <a href="form-education.php"><button class="btn btn-primary btn-md"><i class="fa fa-plus"> </i> Add Education</button></a>
            </div>
            </div><!-- /.box-header -->
            <div class="box-body">
              <table class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th>Nama</th>
                    <th>Tahun</th>
                    <th>Kota</th>
                    <th>Actions</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                        <td>SMA T DARUL'AMAL</td>
                        <td>2017</td>
                        <td>Sukabumi</td>
                        <td>
                            <a href="#editPersonalDetail" class="btn  btn-warning btn-md" data-toggle="modal" data-target="#modalEdit"><i class="fa fa-edit" data-toggle="tooltip" title="Edit"></i> Edit</a>

                            <a href="#deletePersonalDetail" class="btn  btn-danger btn-md" data-toggle="modal" data-target="#modalDelete"><i class="fa fa-trash" data-toggle="tooltip" title="Delete"></i> Delete</a>
                        </td>
                  </tr>
                  <tr>
                        <td>SMA T DARUL'AMAL</td>
                        <td>2017</td>
                        <td>Sukabumi</td>
                        <td>
                            <a href="#editPersonalDetail" class="btn  btn-warning btn-md" data-toggle="modal" data-target="#modalEdit"><i class="fa fa-edit" data-toggle="tooltip" title="Edit"></i> Edit</a>

                            <a href="#deletePersonalDetail" class="btn  btn-danger btn-md" data-toggle="modal" data-target="#modalDelete"><i class="fa fa-trash" data-toggle="tooltip" title="Delete"></i> Delete</a>
                        </td>
                  </tr>
                  <tr>
                        <td>SMA T DARUL'AMAL</td>
                        <td>2017</td>
                        <td>Sukabumi</td>
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

     
    <div id="modalEdit" class="modal fade" role="dialog">
      <div class="modal-dialog">
          <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title">Edit Education</h4>
          </div>
          <div class="modal-body">
             <div class="form-group">
                <label>Nama</label>
                <input type="text" class="form-control" name="name" placeholder="Masukan Nama">
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
            <a href="form-education.php"><button class="btn btn-primary btn-md"><i class="fa fa-search"> </i> Show Full Form</button></a>
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
