<?php include '../static/top.php'; ?>
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Writing Experience</h3>
            </div><!-- /.box-header -->
            <div class="box-body">
              <div class="form-group">
                <label>Judul Karya</label>
                <input type="text" class="form-control" name="judul" placeholder="Masukan Judul Karya">
              </div>
              <div class="form-group">
                <label>Nama Dosen</label>
                <input type="text" class="form-control" name="nama_dosen" placeholder="Masukan Nama Dosen">
              </div>
              <div class="form-group">
                <label>Nama Jurnal</label>
                <input type="text" class="form-control" name="nama_jurnal" placeholder="Masukan Nama Jurnal">
              </div>
              <div class="form-group">
                <label>Tahun</label>
                <input type="text" class="form-control" name="tahun" placeholder="Masukan Nama Jurnal">
              </div>
               <div class="form-group">
                <label>Volume</label>
                <input type="text" class="form-control" name="volume" placeholder="Masukan Volume">
              </div>
              <div class="form-group">
                <label>Halaman</label>
                <input type="text" class="form-control" name="halaman" placeholder="Masukan Halaman">
              </div>
              <div class="form-group">
                <label>Link URl</label>
                <input type="text" class="form-control" name="link_url" placeholder="Masukan Link URl">
              </div>
             <!--  <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Kategori</label>

                  <div class="col-sm-10">
                  <input type="text" class="form-control" name="kategori" placeholder="Masukan Kategori">
                  </div>
              </div> -->
              <div class="form-group">
                <label>Kategori</label>
                <input type="text" class="form-control" name="kategori" placeholder="Masukan Kategori">
              </div>
              
              <div class="form-group">
                  <label for="exampleInputFile">Upload LOA</label>
                  <input type="file" id="exampleInputFile">

                  <p class="help-block">Upload LOA .pdf maks 3mb.</p>
                </div>

              <div class="box-footer">
                <button type="button" class="btn btn-primary">Simpan</button>
              </div>
            </div><!-- /.box-body -->
          </div><!-- /.box -->
        </div><!-- /.col -->

      </div><!-- /.row -->
    </section>
<?php include '../static/bot.php'; ?>
