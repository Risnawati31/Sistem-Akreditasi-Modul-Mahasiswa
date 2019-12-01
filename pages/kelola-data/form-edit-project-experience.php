<?php include '../static/top.php'; ?>
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h4 class="box-title">Edit Project Experience</h4>
            </div><!-- /.box-header -->
            <div class="box-body">
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
