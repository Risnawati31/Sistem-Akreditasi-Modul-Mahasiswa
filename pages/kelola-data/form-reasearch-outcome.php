<?php include '../static/top.php'; ?>
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Research Outcome</h3>
            </div><!-- /.box-header -->
            <div class="box-body">
              <div class="form-group">
                <label>ID</label>
                <input type="text" class="form-control" name="id" placeholder="Masukan ID">
              </div>
              <div class="form-group">
                <label>Nama Luaran</label>
                <input type="text" class="form-control" name="namakegiatan" placeholder="Masukan Nama Luaran">
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
                <input type="text" class="form-control" name="deskripsi" placeholder="Masukan Deskripsi">
              </div>
              <div class="form-group">
                <label>Kategori</label>
                <input type="text" class="form-control" name="kategori" placeholder="Masukan Kategori">
              </div>
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
