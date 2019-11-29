<?php include '../static/top.php'; ?>
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Project Experience</h3>
              <div class="pull-right box-tools">
                <!-- <button class="btn btn-primary btn-md" data-toggle="modal" data-target="#modalAdd" title="" data-original-title="Remove"><i class="fa fa-plus"> </i> Add Writing Experience</button> -->
                <a href="form-project-experience.php"><button class="btn btn-primary btn-md"><i class="fa fa-plus"> </i> Add Project Experience</button></a>
            </div><!-- /.box-header -->
            <div class="box-body">
              <table class="table table-bordered table-striped">
                <thead>
                  <tr>             	
                    <th>Nama Project</th>
                    <th>Tahun</th>
                    <th>Kegunaan Teknologi</th>
                    <th>Deskripsi</th>
                    <th>URL</th>
                    <th>Actions</th>
                  </tr>
                </thead>
                <tbody>
                	<tr>
                        <td>Sistem Akreditasi</td>
                        <td>2018</td>
                        <td>Mengukur Akreditasi</td>
                        <td>Untuk Kegiatan Belajar</td>
                        <td>WWW.COM</td>
                        <td>
                            <a href="#editPersonalDetail" class="btn  btn-warning btn-md" data-toggle="modal" data-target="#modalEdit"><i class="fa fa-edit" data-toggle="tooltip" title="Edit"></i> Edit</a>

                            <a href="#deletePersonalDetail" class="btn  btn-danger btn-md" data-toggle="modal" data-target="#modalDelete"><i class="fa fa-trash" data-toggle="tooltip" title="Delete"></i> Delete</a>
                        </td>
                	</tr>
                	<tr>
                        <td>Sistem Akreditasi</td>
                        <td>2018</td>
                        <td>Mengukur Akreditasi</td>
                        <td>Untuk Kegiatan Belajar</td>
                        <td>WWW.COM</td>
                        <td>
                            <a href="#editPersonalDetail" class="btn  btn-warning btn-md" data-toggle="modal" data-target="#modalEdit"><i class="fa fa-edit" data-toggle="tooltip" title="Edit"></i> Edit</a>

                            <a href="#deletePersonalDetail" class="btn  btn-danger btn-md" data-toggle="modal" data-target="#modalDelete"><i class="fa fa-trash" data-toggle="tooltip" title="Delete"></i> Delete</a>
                        </td>
                	</tr>
                	<tr>
                        <td>Sistem Akreditasi</td>
                        <td>2018</td>
                        <td>Mengukur Akreditasi</td>
                        <td>Untuk Kegiatan Belajar</td>
                        <td>WWW.COM</td>
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
            <h4 class="modal-title">Add Project Experience</h4>
          </div>
          <div class="modal-body">
             <div class="form-group">
                <label>Nama Project</label>
                <input type="text" class="form-control" name="namaproject" placeholder="Masukan Nama Project">
              </div>

              <div class="form-group">
                <label>Tahun</label>
                <div class="input-group date">
                  <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                  </div>
                  <input type="text" class="form-control pull-right" id="datepicker">
                </div>
              </div>

              <div class="form-group">
                <label>Kegunaan Teknologi</label>
                <input type="text" class="form-control" name="kegunaankegiatan" placeholder="Masukan Kegunaan Teknologi">
              </div>

              <div class="form-group">
                <label>Deskripsi</label>
                <input type="text" class="form-control" name="deskripsi" placeholder="Deskripsi">
              </div>

              <div class="form-group">
                <label>Url Project</label>
                <input type="text" class="form-control" name="url" placeholder="Masukan Link Project atau Link Portofolio">
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
		        <h4 class="modal-title">Edit Project Experience</h4>
		      </div>
		      <div class="modal-body">
             <div class="form-group">
                <label>Nama Project</label>
                <input type="text" class="form-control" name="namaproject" placeholder="Masukan Nama Project">
              </div>

              <div class="form-group">
                <label>Tahun</label>
                <div class="input-group date">
                  <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                  </div>
                  <input type="text" class="form-control pull-right" id="datepicker">
                </div>
              </div>

              <div class="form-group">
                <label>Kegunaan Teknologi</label>
                <input type="text" class="form-control" name="kegunaankegiatan" placeholder="Masukan Kegunaan Teknologi">
              </div>

              <div class="form-group">
                <label>Deskripsi</label>
                <input type="text" class="form-control" name="deskripsi" placeholder="Deskripsi">
              </div>

              <div class="form-group">
                <label>Url Project</label>
                <input type="text" class="form-control" name="url" placeholder="Masukan Link Project atau Link Portofolio">
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
			        <h4 class="modal-title">Delete Project</h4>
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
