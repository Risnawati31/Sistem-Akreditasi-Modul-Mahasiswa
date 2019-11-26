<?php include '../static/top.php'; ?>
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Personal Details</h3>
              <div class="pull-right box-tools">
	            	<button class="btn btn-primary btn-md" data-toggle="modal" data-target="#modalAdd" title="" data-original-title="Remove"><i class="fa fa-plus"> </i> Add Person</button>
	          </div>
            </div><!-- /.box-header -->
            <div class="box-body">
              <table id="tablePersonalDetail" class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th>NIM</th>
                    <th>Nama</th>
                    <th>Jurusan</th>
                    <th>Phone</th>
                    <th>Address</th>
                    <th>Actions</th>
                  </tr>
                </thead>
                <tbody>
                	<tr>
                      <td>18123120</td>
                    	<td>Zul</td>
                      <td>Computer Science</td>
					            <td>89 Chiaroscuro Rd, Portland, USA</td>
                      <td>(171) 555-2222</td>
                      <td>
                          <a href="#editPersonalDetail" class="btn  btn-warning btn-md" data-toggle="modal" data-target="#modalEdit"><i class="fa fa-edit" data-toggle="tooltip" title="Edit"></i> Edit</a>

                          <a href="#deletePersonalDetail" class="btn  btn-danger btn-md" data-toggle="modal" data-target="#modalDelete"><i class="fa fa-trash" data-toggle="tooltip" title="Delete"></i> Delete</a>
                      </td>
                	</tr>
                	<tr>
                      <td>18123120</td>
                      <td>Ratna</td>
                      <td>Computer Science</td>
                      <td>89 Chiaroscuro Rd, Portland, USA</td>
                      <td>(171) 555-2222</td>
                      <td>
                          <a href="#editPersonalDetail" class="btn  btn-warning btn-md" data-toggle="modal" data-target="#modalEdit"><i class="fa fa-edit" data-toggle="tooltip" title="Edit"></i> Edit</a>

                          <a href="#deletePersonalDetail" class="btn  btn-danger btn-md" data-toggle="modal" data-target="#modalDelete"><i class="fa fa-trash" data-toggle="tooltip" title="Delete"></i> Delete</a>
                      </td>
                  </tr>
                	<tr>
                      <td>18123120</td>
                      <td>Budi</td>
                      <td>Computer Science</td>
                      <td>89 Chiaroscuro Rd, Portland, USA</td>
                      <td>(171) 555-2222</td>
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
            <h4 class="modal-title">Edit Person</h4>
          </div>
          <div class="modal-body">
             <div class="form-group">
                <label>NIM</label>
                <input type="text" class="form-control" name="nim" placeholder="Masukan NIM">
             </div>

             <div class="form-group">
                <label>Nama</label>
                <input type="text" class="form-control" name="name" placeholder="Masukan Nama">
              </div>

              <div class="form-group">
                <label>Jurusan</label>
                <input type="text" class="form-control" name="jurusan" placeholder="Masukan Jurusan">
              </div>

              <div class="form-group">
                <label>Phone</label>
                <input type="number" class="form-control" name="phone" placeholder="Masukan Nomor HP">
              </div>

              <div class="form-group">
                <label>Alamat</label>
                <textarea type="text" class="form-control" name="alamat" placeholder="Masukan Alamat"></textarea>
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
		        <h4 class="modal-title">Edit Person</h4>
		      </div>
		      <div class="modal-body">
             <div class="form-group">
                <label>NIM</label>
                <input type="text" class="form-control" name="nim" placeholder="Masukan NIM">
             </div>

             <div class="form-group">
                <label>Nama</label>
                <input type="text" class="form-control" name="name" placeholder="Masukan Nama">
              </div>

              <div class="form-group">
                <label>Jurusan</label>
                <input type="text" class="form-control" name="jurusan" placeholder="Masukan Jurusan">
              </div>

              <div class="form-group">
                <label>Phone</label>
                <input type="number" class="form-control" name="phone" placeholder="Masukan Nomor HP">
              </div>

              <div class="form-group">
                <label>Alamat</label>
                <textarea type="text" class="form-control" name="alamat" placeholder="Masukan Alamat"></textarea>
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
			        <h4 class="modal-title">Delete Person</h4>
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
