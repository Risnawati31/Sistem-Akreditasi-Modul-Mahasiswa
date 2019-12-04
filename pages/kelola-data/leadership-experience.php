<?php include '../static/top.php'; ?>
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Leadership Experience</h3>
              <div class="pull-right box-tools">
                <!-- <button class="btn btn-primary btn-md" data-toggle="modal" data-target="#modalAdd" title="" data-original-title="Remove"><i class="fa fa-plus"> </i> Add Writing Experience</button> -->
                <button class="btn btn-primary btn-md" data-toggle="modal" data-target="#modalAdd"><i class="fa fa-plus"> </i> Add Leadership Experience</button>
              </div><!-- /.box-header -->
            <div class="box-body">
              <table class="table table-bordered table-striped">
                <thead>
                  <tr>           	
                    <th>Nama Kegiatan</th>
                    <th>Posisi</th>
                    <th>Tahun</th>
                    <th>Deskripsi</th>
                    <th>Actions</th>
                  </tr>
                </thead>
                <tbody>
                	<tr>
                        <td>Mancing di Gurun</td>
                        <td>Founder</td>
                        <td>1998</td>
                        <td>Untuk Kegiatan Bersabar</td>
                        <td>
                            <a href="#editPersonalDetail" class="btn  btn-warning btn-md" data-toggle="modal" data-target="#modalEdit"><i class="fa fa-edit" data-toggle="tooltip" title="Edit"></i> Edit</a>

                            <a href="#deletePersonalDetail" class="btn  btn-danger btn-md" data-toggle="modal" data-target="#modalDelete"><i class="fa fa-trash" data-toggle="tooltip" title="Delete"></i> Delete</a>
                        </td>
                	</tr>
                	<tr>
                        <td>Training Samurai</td>
                        <td>Founder</td>
                        <td>2002</td>
                        <td>Untuk Kegiatan Melatih Suara</td>
                        <td>
                            <a href="#editPersonalDetail" class="btn  btn-warning btn-md" data-toggle="modal" data-target="#modalEdit"><i class="fa fa-edit" data-toggle="tooltip" title="Edit"></i> Edit</a>

                            <a href="#deletePersonalDetail" class="btn  btn-danger btn-md" data-toggle="modal" data-target="#modalDelete"><i class="fa fa-trash" data-toggle="tooltip" title="Delete"></i> Delete</a>
                        </td>
                	</tr>
                	<tr>
                        <td>Training Kids</td>
                        <td>ATS</td>
                        <td>2018</td>
                        <td>Untuk Ngumpulin Ginjal Anak-anak</td>
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
            <h4 class="modal-title">Add Leadership Experience</h4>
          </div>
          <div class="modal-body">
              <div class="form-group">
                <label>Nama Kegiatan</label>
                <input type="text" class="form-control" name="namakegiatan" placeholder="Masukan Nama Kegiatan">
              </div>
              <div class="form-group">
                <label>Posisi</label>
                <input type="text" class="form-control" name="posisi" placeholder="Masukan Posisi">
              </div>
              <div class="form-group">
                <label>Tahun</label>
                <div class="input-group date">
                  <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                  </div>
                  <input type="text" class="form-control pull-right" id="datepicker" placeholder="DD-MM-YYY">
                </div>
              </div>
              <div class="form-group">
                <label>Deskripsi</label>
                <input type="text" class="form-control" name="deskripsi" placeholder="Deskripsi">
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
		        <h4 class="modal-title">Edit Leadership Experience</h4>
		      </div>
		      <div class="modal-body">
             <div class="form-group">
                <label>Nama Kegiatan</label>
                <input type="text" class="form-control" name="namakegiatan" placeholder="Masukan Nama Kegiatan">
              </div>
              <div class="form-group">
                <label>Posisi</label>
                <input type="text" class="form-control" name="posisi" placeholder="Masukan Posisi">
              </div>
              <div class="form-group">
                <label>Tahun</label>
                <div class="input-group date">
                  <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                  </div>
                  <input type="text" class="form-control pull-right" id="datepicker" placeholder="DD-MM-YYY">
                </div>
              </div>
              <div class="form-group">
                <label>Deskripsi</label>
                <input type="text" class="form-control" name="deskripsi" placeholder="Deskripsi">
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
