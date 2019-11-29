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
                <label>ID</label>
                <input type="text" class="form-control" name="id" placeholder="Masukan ID">
              </div>
              <div class="form-group">
                <div class="form-group">
                <label>Nama Project</label>
                <input type="text" class="form-control" name="namaproject" placeholder="Masukan Nama Project">
              </div>

              <div class="form-group">
                <label>Posisi</label>
                <input type="text" class="form-control" name="posisi" placeholder="Masukan Posisi">
              </div>

              <div class="form-group">
                <label>Tahun Mulai</label>
                <div class="input-group date">
                  <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                  </div>
                  <input type="text" class="form-control pull-right" id="datepicker" placeholder="DD-MM-YYY">
                </div>
              </div>

              <div class="form-group">
                <label>Tahun Berakhir</label>
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

              <div class="form-group">
                  <label for="exampleInputFile">Upload File</label>
                  <input type="file" id="exampleInputFile">

                  <p class="help-block">Upload File .pdf maks 3mb.</p>
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
