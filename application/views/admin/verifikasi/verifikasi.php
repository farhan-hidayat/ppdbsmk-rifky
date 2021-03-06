<!-- Main content -->
<div class="content-wrapper">
  <!-- Content area -->
  <div class="content">
    <?php
    echo $this->session->flashdata('msg2');
    ?>
    <!-- Dashboard content -->
    <div class="row">
      <!-- Basic datatable -->
      <div class="panel panel-flat">
        <div class="panel-heading">
          <h5 class="panel-title"> Data Verifikasi</h5>
          <hr style="margin:0px;">
          <div class="heading-elements">
            <ul class="icons-list">
              <li><a data-action="collapse"></a></li>
            </ul>
          </div>

          <br>
          <a href="panel_admin/edit_materi" class="btn btn-success">Edit Pengumuman Vrifikasi Lengkap</a>
          <a href="panel_admin/edit_materi1" class="btn btn-danger">Edit Pengumuman Vrifikasi Tidak Lengkap</a>
          <div class="col-md-3" style="float:right;margin-right:25px;">
            <div class="input-group">
              <div class="input-group-addon"><i class="icon-calendar22"></i></div>
              <select class="form-control" name="thn" onchange="thn()">
                <?php for ($i = date('Y'); $i >= 2018; $i--) { ?>
                  <option value="<?php echo $i; ?>" <?php if ($v_thn == $i) {
                                                      echo "selected";
                                                    } ?>>Tahun <?php echo $i; ?></option>
                <?php } ?>
              </select>
            </div>
          </div>

        </div>
        <div class="table-responsive">
          <table class="table datatable-basic table-bordered" width="100%">
            <thead>
              <tr>
                <th width="30px;">No.</th>
                <th>No. Pendaftaran</th>
                <th>NIS</th>
                <th>NISN</th>
                <th>NIK</th>
                <th>Nama Lengkap</th>
                <th>Jurusan</th>
                <th>Status Verifikasi</th>
                <th class="text-center" width="130">Aksi</th>
              </tr>
            </thead>
            <tbody>
              <?php
              $no = 1;
              foreach ($v_siswa->result() as $baris) { ?>
                <tr>
                  <td><?php echo $no++; ?></td>
                  <td><?php echo $baris->no_pendaftaran; ?></td>
                  <td><?php echo $baris->nis; ?></td>
                  <td><?php echo $baris->nisn; ?></td>
                  <td><?php echo $baris->nik; ?></td>
                  <td><?php echo $baris->nama_lengkap; ?></td>
                  <td><?php echo $baris->nama_jurusan; ?></td>
                  <td align="center">
                    <?php if ($baris->status_verifikasi == 1) { ?>
                      <label class="label label-success">Terverifikasi</label>
                    <?php } elseif ($baris->status_verifikasi == 2) { ?>
                      <label class="label label-danger">Tidak Lengkap</label>
                    <?php } else { ?>
                      <label class="label label-warning">Belum diVerifikasi</label>
                    <?php } ?>
                  </td>
                  <td align="center">
                    <a href="panel_admin/verifikasi_peserta/<?php echo $baris->no_pendaftaran; ?>" class="btn btn-default btn-xs" title="Cek Berkas" target="_blank"><i class="icon-folder"></i></a>
                    <?php if ($baris->status_verifikasi == 0) { ?>
                      <a href="panel_admin/verifikasi/verif/<?php echo $baris->no_pendaftaran; ?>" class="btn btn-info btn-xs" title="Verifikasi" onclick="return confirm('Apakah Anda yakin?')"><i class="icon-checkmark4"></i></a>
                      <a href="panel_admin/verifikasi/tdk_lengkap/<?php echo $baris->no_pendaftaran; ?>" class="btn btn-warning btn-xs" title="Tidak Lengkap" onclick="return confirm('Apakah Anda yakin?')"><i class="icon-sync"></i></a>
                    <?php } else { ?>
                      <a href="panel_admin/verifikasi/batal/<?php echo $baris->no_pendaftaran; ?>" class="btn btn-danger btn-xs" title="Batal Verifikasi" onclick="return confirm('Apakah Anda yakin?')"><i class="icon-cross3"></i></a>
                    <?php } ?>
                  </td>
                </tr>
              <?php
              } ?>
            </tbody>
          </table>
        </div>
      </div>
      <!-- /basic datatable -->
    </div>
    <!-- /dashboard content -->

    <script type="text/javascript">
      function thn() {
        var thn = $('[name="thn"]').val();
        window.location = "panel_admin/verifikasi/thn/" + thn;
      }

      $('[name="thn"]').select2({
        placeholder: "- Tahun -"
      });
    </script>