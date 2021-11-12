<!-- Main content -->
<div class="content-wrapper">

  <!-- Content area -->
  <div class="content">

    <!-- Dashboard content -->
    <div class="row">
      <div class="col-md-3"></div>
      <div class="col-md-6">
      <div class="panel panel-flat">
          <div class="panel-body">
            <fieldset class="content-group">
              <legend class="text-bold"><i class="icon-users"></i>Tambah Jurusan</legend>
              <form class="form-horizontal" action="" method="post">
                <div class="form-group">
                  <label class="control-label col-lg-3">Nama Jurusan</label>
                  <div class="col-lg-9">
                    <input type="text" name="nama_jurusan" class="form-control" value="<?php echo $v_jurusan->nama_jurusan; ?>" placeholder="Nama Jurusan" required>
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-lg-3">Kuota</label>
                  <div class="col-lg-9">
                    <input type="number" name="kuota" class="form-control" value="<?php echo $v_jurusan->kuota; ?>" placeholder="Kuota" required>
                  </div>
                </div>

            </fieldset>
            <div class="col-md-12">
              <hr style="margin-top:-10px;">
              <button type="submit" name="btnupdate2" class="btn btn-primary" style="float:right;">Simpan</button>
            </div>
          </form>
          </div>
      </div>
      </div>

    </div>
    <!-- /dashboard content -->
