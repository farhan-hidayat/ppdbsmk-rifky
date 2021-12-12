<div class="panel panel-primary">
  <div class="panel-heading">
    <h2><strong class="text-success" style="color:#eee;">Jurusan</strong></h2>
  </div>
  <div class="panel-body">

    <div class="form-group">
      <label class="col-sm-3 control-label" style="text-align:right; margin-top:6px">Jurusan <span class="text-danger">*</span></label>
      <div class="col-sm-9" style="margin-top:3px;">
        <select class="form-control bg-blue class" data-placeholder="Pilih Jurusan" name="jurusan" data-parsley-group="block1" data-parsley-errors-container='div[id="error-jurusan"]' required>
          <option value="">Pilih Jurusan</option>
          <?php foreach ($v_jurusan as $baris) : ?>
            <option value="<?php echo $baris->id_jurusan; ?>"><?php echo $baris->nama_jurusan; ?></option>
          <?php endforeach; ?>
        </select>
        <div id="error-jurusan" style=" background:#FFBABA;color: #D8000C; width:auto;border-radius:5px;padding-left:10px;"></div>
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