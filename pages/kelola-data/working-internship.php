<?php include '../static/top.php'; ?>
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Working Internship</h3>
            </div><!-- /.box-header -->
            <div class="box-body">
              <div class="form-group">
                <label>ID</label>
                <input type="text" class="form-control" name="nim" placeholder="Masukan ID">
              </div>
              <div class="form-group">
                <label>Nama</label>
                <input type="text" class="form-control" name="name" placeholder="Masukan Nama">
              </div>
              <div class="form-group">
                <label>Posisi</label>
                <input type="text" class="form-control" name="nama_jurnal" placeholder="Masukan Posisi">
              </div>
              <div class="form-group">
                <label>Tahun Mulai Lahir</label>
                <div class="input-group date">
                  <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                  </div>
                  <input type="text" class="form-control pull-right" id="datepicker">
                </div>
              </div>
              <div class="form-group">
                <label>Tahun Berakhir</label>
                <div class="input-group date">
                  <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                  </div>
                  <input type="text" class="form-control pull-right" id="datepicker">
                </div>
              </div>
               <div class="form-group">
                <label>Deskripsi</label>
                <input type="text" class="form-control" name="No" placeholder="Masukan Deskripsi">
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
