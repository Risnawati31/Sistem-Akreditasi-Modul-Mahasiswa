<?php include '../static/top.php'; ?>
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">List Education</h3>
            </div><!-- /.box-header -->
            <div class="box-body">
             <div class="form-group">
                <label>ID</label>
                <input type="text" class="form-control" name="name" placeholder="Masukan ID">
              </div>
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

              <div class="checkbox">
                <label>
                  <input type="checkbox"> Check me out
                </label>
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
