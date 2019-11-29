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
                <label>Nama Sertifikat</label>
                <input type="text" class="form-control" name="name" placeholder="Masukan Nama Sertifikat">
              </div>

              <div class="form-group">
                <label>Nama Lembaga</label>
                <input type="text" class="form-control" name="Posisi" placeholder="Peran dalam kegiatan">
              </div>

              <div class="form-group">
                <label>Tahun</label>
                <input type="text" class="form-control" name="tahun" placeholder="Masukan Tahun">
              </div>

              <div>
                <button type="button" class="btn btn-default" data-dismiss="modal">Upload File</button>
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
