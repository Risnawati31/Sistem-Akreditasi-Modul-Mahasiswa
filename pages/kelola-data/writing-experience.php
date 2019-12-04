<?php include '../static/top.php'; ?>
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">List Writing Experience</h3>
              <div class="pull-right box-tools">
                <!-- <button class="btn btn-primary btn-md" data-toggle="modal" data-target="#modalAdd" title="" data-original-title="Remove"><i class="fa fa-plus"> </i> Add Writing Experience</button> -->
                <button class="btn btn-primary btn-md" data-toggle="modal" data-target="#modalAdd"><i class="fa fa-plus"> </i> Add Writing Experience</button>
            </div>
            </div><!-- /.box-header -->
            <div class="box-body">
              <table class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th>Judul Karya</th>
                    <th>Dosen Pembimbing</th>
                    <th>Actions</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                      <td>Inovasi Tehnologi di Bidang Pertanian</td>
                      <td>Ahlijati Nuraimah</td>
                      <td>
                         
                          <a href="#editPersonalDetail" class="btn  btn-warning btn-md" data-toggle="modal" data-target="#modalEdit"><i class="fa fa-edit" data-toggle="tooltip" title="Edit"></i> Edit</a>

                          <a href="#deletePersonalDetail" class="btn  btn-danger btn-md" data-toggle="modal" data-target="#modalDelete"><i class="fa fa-trash" data-toggle="tooltip" title="Delete"></i> Delete</a>
                      </td>
                  </tr>
                  <tr>
                      <td>Inovasi Tehnologi di Bidang Perikanan</td>
                      <td>Ahlijati Nuraimah</td>
                      <td>
                          <a href="#editPersonalDetail" class="btn  btn-warning btn-md" data-toggle="modal" data-target="#modalEdit"><i class="fa fa-edit" data-toggle="tooltip" title="Edit"></i> Edit</a>

                          <a href="#deletePersonalDetail" class="btn  btn-danger btn-md" data-toggle="modal" data-target="#modalDelete"><i class="fa fa-trash" data-toggle="tooltip" title="Delete"></i> Delete</a>
                      </td>
                  </tr>
                  <tr>
                      <td>Inovasi Tehnologi di Bidang Perumahan</td>
                      <td>Ahlijati Nuraimah</td>
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
            <h4 class="modal-title">Add Writing Experience</h4>
          </div>
          <div class="modal-body">
            <div class="col-sm-6">
             <div class="form-group">
                <label>Judul Karya</label>
                <input type="text" class="form-control" name="judul" placeholder="Masukan Judul Karya">
              </div>
             </div>
             <div class="col-sm-6"> 
              <div class="form-group">
                <label>Nama Dosen</label>
                <input type="text" class="form-control" name="nama_dosen" placeholder="Masukan Nama Dosen">
              </div>
            </div>
            <div class="col-sm-6">
              <div class="form-group">
                <label>Nama Jurnal</label>
                <input type="text" class="form-control" name="nama_jurnal" placeholder="Masukan Nama Jurnal">
              </div>
             </div>
             <div class="col-sm-6"> 
              <div class="form-group">
                <label>Tahun</label>
                <input type="text" class="form-control" name="tahun" placeholder="Masukan Nama Jurnal">
              </div>
            </div>
            <div class="col-sm-6">
               <div class="form-group">
                <label>Volume</label>
                <input type="text" class="form-control" name="volume" placeholder="Masukan Volume">
              </div>
            </div>
            <div class="col-sm-6">
              <div class="form-group">
                <label>Halaman</label>
                <input type="text" class="form-control" name="halaman" placeholder="Masukan Halaman">
              </div>
            </div>
            <div class="col-sm-6">
              <div class="form-group">
                <label>Link URl</label>
                <input type="text" class="form-control" name="link_url" placeholder="Masukan Link URl">
              </div>
            </div>
            <div class="col-sm-6">
              <div class="form-group">
                <label>Kategori</label>
                <input type="text" class="form-control" name="kategori" placeholder="Masukan Kategori">
              </div>
            </div>
            <div class="col-sm-12">  
              <div class="form-group">
                  <label for="exampleInputFile">Upload LOA</label>
                  <input type="file" id="exampleInputFile">

                  <p class="help-block">Upload LOA .pdf maks 3mb.</p>
                </div>
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
            <h4 class="modal-title">Edit Writing Experience</h4>
          </div>
          <div class="modal-body">
             <div class="col-sm-6">
             <div class="form-group">
                <label>Judul Karya</label>
                <input type="text" class="form-control" name="judul" placeholder="Masukan Judul Karya">
              </div>
             </div>
             <div class="col-sm-6"> 
              <div class="form-group">
                <label>Nama Dosen</label>
                <input type="text" class="form-control" name="nama_dosen" placeholder="Masukan Nama Dosen">
              </div>
            </div>
            <div class="col-sm-6">
              <div class="form-group">
                <label>Nama Jurnal</label>
                <input type="text" class="form-control" name="nama_jurnal" placeholder="Masukan Nama Jurnal">
              </div>
             </div>
             <div class="col-sm-6"> 
              <div class="form-group">
                <label>Tahun</label>
                <input type="text" class="form-control" name="tahun" placeholder="Masukan Nama Jurnal">
              </div>
            </div>
            <div class="col-sm-6">
               <div class="form-group">
                <label>Volume</label>
                <input type="text" class="form-control" name="volume" placeholder="Masukan Volume">
              </div>
            </div>
            <div class="col-sm-6">
              <div class="form-group">
                <label>Halaman</label>
                <input type="text" class="form-control" name="halaman" placeholder="Masukan Halaman">
              </div>
            </div>
            <div class="col-sm-6">
              <div class="form-group">
                <label>Link URl</label>
                <input type="text" class="form-control" name="link_url" placeholder="Masukan Link URl">
              </div>
            </div>
            <div class="col-sm-6">
              <div class="form-group">
                <label>Kategori</label>
                <input type="text" class="form-control" name="kategori" placeholder="Masukan Kategori">
              </div>
            </div>
            <div class="col-sm-12">  
              <div class="form-group">
                  <label for="exampleInputFile">Upload LOA</label>
                  <input type="file" id="exampleInputFile">

                  <p class="help-block">Upload LOA .pdf maks 3mb.</p>
                </div>
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