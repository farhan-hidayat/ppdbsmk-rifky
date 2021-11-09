<div class="panel panel-primary">
  <div class="panel-heading">
    <h2><strong class="text-success" style="color:#eee;">Data Siswa</strong></h2>
  </div>
  <div class="panel-body">

    <div class="form-group" style="padding-bottom:30px;">
        <label class="col-sm-3 control-label"style="text-align:right; margin-top:6px">N.I.S <span class="text-danger">*</span></label>
        <div class="col-sm-9 prepend-icon" style="margin-top:1px;">
          <input type="text" name="nis" class="form-control bg-blue class" onkeypress="return hanyaAngka(this);" maxlength="30" placeholder="Nomor Induk Siswa" data-parsley-group="block1" data-parsley-errors-container='div[id="error-nis"]' required>
          <i class="fa fa-users" style="margin-left:15px;"></i>
          <div id="error-nis" style=" background:#FFBABA;color: #D8000C; width:auto;border-radius:5px;padding-left:10px;"></div>
          <div id="pesan_komentar">*Sesuai dengan data dari rapot</div>
        </div>
    </div>

  <div class="form-group" style="padding-bottom:30px;">
      <label class="col-sm-3 control-label"style="text-align:right; margin-top:6px">N.I.S.N <span class="text-danger">*</span></label>
      <div class="col-sm-9 prepend-icon" style="margin-top:1px;">
        <input type="text" name="nisn" class="form-control bg-blue class" onkeypress="return hanyaAngka(this);" maxlength="30" placeholder="Nomor Induk Siswa Nasional" data-parsley-group="block1" data-parsley-errors-container='div[id="error-nisn"]' required>
        <i class="fa fa-users" style="margin-left:15px;"></i>
        <div id="error-nisn" style=" background:#FFBABA;color: #D8000C; width:auto;border-radius:5px;padding-left:10px;"></div>
        <div id="pesan_komentar">*Sesuai dengan data dari web  http://nisn.data.kemdikbud.go.id</div>
      </div>
  </div>

  <div class="form-group" style="padding-bottom:30px;">
      <label class="col-sm-3 control-label"style="text-align:right; margin-top:6px">N.I.K <span class="text-danger">*</span></label>
      <div class="col-sm-9 prepend-icon" style="margin-top:1px;">
        <input type="text" name="nik" class="form-control bg-blue class" onkeypress="return hanyaAngka(this);" maxlength="30" placeholder="NIK" data-parsley-group="block1" data-parsley-errors-container='div[id="error-nik"]' required>
        <i class="fa fa-users" style="margin-left:15px;"></i>
        <div id="error-nik" style=" background:#FFBABA;color: #D8000C; width:auto;border-radius:5px;padding-left:10px;"></div>
        <div id="pesan_komentar">*Sesuai dengan Kartu Keluarga (KK)</div>
      </div>
  </div>

  <div class="form-group" style="padding-bottom:30px;">
      <label class="col-sm-3 control-label" style="text-align:right; margin-top:6px">Nama Lengkap <span class="text-danger">*</span></label>
      <div class="col-sm-9 prepend-icon">
        <input type="text" name="nama_lengkap" class="form-control bg-blue" placeholder="Nama lengkap Calon Siswa" maxlength="100" data-parsley-group="block1" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="error-nama_lengkap"]' required>
        <i class="fa fa-user" style="margin-left:15px;"></i>
        <div id="error-nama_lengkap" style=" background:#FFBABA;color: #D8000C; width:auto;border-radius:5px;padding-left:10px;"></div>
        <div id="pesan_komentar">*Sesuai dengan ijazah</div>
      </div>
  </div>

  <div class="form-group">
      <label class="col-sm-3 control-label" style="text-align:right; margin-top:-3px">Jenis Kelamin <span class="text-danger">*</span></label>
      <div class="col-sm-9">

      <div class="radio" style="margin-top:3px;margin-left:-20px;">
          <label>
          <input type="radio" value="Laki-Laki" name="jk" data-parsley-group="block1" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required> <i class="fa fa-male"></i> &nbsp;Laki-laki
          </label>
        </div>
        <div class="radio" style="margin-left:-20px;">
          <label>
          <input type="radio" value="Perempuan" name="jk" data-parsley-group="block1" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="condition-error"]' required> <i class="fa fa-female"></i> &nbsp;Perempuan
          </label>
        </div>
        <div id="condition-error" style=" background:#FFBABA;color: #D8000C; width:auto;border-radius:5px;padding-left:10px;"></div>
      </div>
  </div>

  <div class="form-group">
      <label class="col-sm-3 control-label" style="text-align:right; margin-top:6px">Tempat Kelahiran <span class="text-danger">*</span></label>
      <div class="col-sm-9 prepend-icon" >
        <input type="text" name="tempat_lahir" class="form-control bg-blue class" placeholder="Tempat Kelahiran Calon Siswa" data-parsley-group="block1" data-parsley-errors-container='div[id="error-tempat_lahir"]' required>
        <i class="fa fa-building" style="margin-left:15px;"></i>
        <div id="error-tempat_lahir" style=" background:#FFBABA;color: #D8000C; width:auto;border-radius:5px;padding-left:10px;"></div>
      </div>
  </div>
 <div class="form-group" >
    <label class="col-sm-3 control-label" style="text-align:right; margin-top:6px">Tanggal Kelahiran <span class="text-danger">*</span></label>
    <div class="col-sm-9" style="margin-top:3px;">
      <div class="col-sm-4" style="padding:0px">
         <select class="form-control bg-blue class"  name="tgl_lahir" data-parsley-group="block1" data-parsley-errors-container='div[id="error-tgl_lahir"]' required>
              <option value="" selected>Pilih Tanggal</option>
              <?php for ($i=1; $i <=31 ; $i++) {
                if ($i < 10) {
                  $i = "0".$i;
                }?>
                <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
              <?php } ?>
         </select>
         <div id="error-tgl_lahir" style=" background:#FFBABA;color: #D8000C; width:auto;border-radius:5px;padding-left:10px;"></div>
      </div>
      <div class="col-sm-4"  style="padding-left:3px;">
        <select class="form-control bg-blue class" data-placeholder="Pilih Bulan" name="bln_lahir" data-parsley-group="block1" data-parsley-errors-container='div[id="error-bln_lahir"]' required>
              <option value="" selected>Pilih Bulan</option>
              <option value="01">Januari</option>
              <option value="02">Februari</option>
              <option value="03">Maret</option>
              <option value="04">April</option>
              <option value="05">Mei</option>
              <option value="06">Juni</option>
              <option value="07">Juli</option>
              <option value="08">Agustus</option>
              <option value="09">September</option>
              <option value="10">Oktober</option>
              <option value="11">November</option>
              <option value="12">Desember</option>
         </select>
        <div id="error-bln_lahir" style=" background:#FFBABA;color: #D8000C; width:auto;border-radius:5px;padding-left:10px;"></div>
      </div>
      <div class="col-sm-4" style="margin-left:-27px;">

         <select class="form-control bg-blue class" data-placeholder="Pilih Tahun Lahir" name="thn_lahir" data-parsley-group="block1" data-parsley-errors-container='div[id="error-thn_lahir"]' required>
          <option value="" selected>Pilih Tahun Lahir</option>
          <?php
          $thn_max=date('Y') - 2;
          for ($i=1990; $i <= $thn_max; $i++) {?>
          <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
          <?php } ?>
         </select>
          <div id="error-thn_lahir" style=" background:#FFBABA;color: #D8000C; width:auto;border-radius:5px;padding-left:10px;"></div>
      </div>

    </div>
</div>

<div class="form-group">
    <label class="col-sm-3 control-label" style="text-align:right; margin-top:6px">Agama <span class="text-danger">*</span></label>
    <div class="col-sm-9" style="margin-top:3px;">
      <select class="form-control bg-blue class" data-placeholder="Pilih Agama yang dianut" name="agama" data-parsley-group="block1" data-parsley-errors-container='div[id="error-agama"]' required>
              <option value="">Pilih agama yang dianut</option>
              <option value="Islam">Islam</option>
              <option value="Kristen">Kristen</option>
              <option value="Katolik">Katolik</option>
              <option value="Kristen Protestan">Kristen Protestan</option>
              <option value="Hindu">Hindu</option>
              <option value="Budha">Budha</option>
              <option value="Konghucu">Konghucu</option>
              <option value="lainnya">Lainnya</option>
      </select>
      <div id="error-agama" style=" background:#FFBABA;color: #D8000C; width:auto;border-radius:5px;padding-left:10px;"></div>
    </div>
</div>

<div class="form-group">
    <label class="col-sm-3 control-label" style="text-align:right; margin-top:6px">Status dalam Keluarga <span class="text-danger">*</span></label>
    <div class="col-sm-9" style="margin-top:3px;">
      <select class="form-control bg-blue class" data-placeholder="Pilih Status dalam Keluarga" name="status_keluarga" data-parsley-group="block1" data-parsley-errors-container='div[id="error-status_keluarga"]' required>
              <option value="">Pilih Status dalam Keluarga</option>
              <option value="Anak Kandung">Anak Kandung</option>
              <option value="Anak Angkat">Anak Angkat</option>
      </select>
      <div id="error-status_keluarga" style=" background:#FFBABA;color: #D8000C; width:auto;border-radius:5px;padding-left:10px;"></div>
    </div>
</div>


        <div class="form-group" >
            <label class="col-sm-3 control-label" style="text-align:right; margin-top:6px">Alamat <span class="text-danger">*</span></label>
            <div class="col-sm-9 prepend-icon" style="margin-top:3px;">
              <input type="text" name="alamat_siswa" class="form-control bg-blue class" placeholder="Alamat Calon Siswa" data-parsley-group="block1" data-parsley-errors-container='div[id="error-alamat_siswa"]' required>
              <i class="fa fa-map-marker" style="margin-left:15px;"></i>
              <div id="error-alamat_siswa" style=" background:#FFBABA;color: #D8000C; width:auto;border-radius:5px;padding-left:10px;"></div>
            </div>
        </div>

        <div class="form-group" >
            <label class="col-sm-3 control-label" style="text-align:right; margin-top:6px">No. Handphone <span class="text-danger">*</span></label>
            <div class="col-sm-9 prepend-icon" style="margin-top:3px;">
              <input type="text" name="no_hp_siswa" class="form-control bg-blue class" maxlength="14" onkeypress="return hanyaAngka(this);" placeholder="No. Handphone Calon Siswa" data-parsley-group="block1" data-parsley-errors-container='div[id="error-no_hp_siswa"]' required>
              <i class="fa fa-phone" style="margin-left:15px;"></i>
              <div id="error-no_hp_siswa" style=" background:#FFBABA;color: #D8000C; width:auto;border-radius:5px;padding-left:10px;"></div>
            </div>
        </div>

      </div>
    </div>


<div class="col-md-12">
  <hr>
  <blockquote>
    <p><b>CATATAN:</b> Field isian dengan tanda <span class="text-danger ">*</span><b class="text-danger">wajib diisi</b>.</p>
  </blockquote>
<div>
