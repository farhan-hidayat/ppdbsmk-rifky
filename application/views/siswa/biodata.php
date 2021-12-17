<style>
  #tbl_input {
    width: 50px;
    text-align: center;
  }

  #tbl_input2 {
    width: 100px;
    text-align: center;
  }

  #th_center>th {
    text-align: center;
  }
</style>

<?php
error_reporting(0);
$berkas = $berkas->row();
$user = $user->row(); ?>
<!-- Main content -->
<div class="content-wrapper">

  <!-- Content area -->
  <div class="content">
    <?php
    echo $this->session->flashdata('msg');
    ?>
    <?php
    echo $this->session->flashdata('msg2');
    ?>
    <!-- Dashboard content -->
    <div class="row">
      <div class="col-md-3">
        <form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
          <div class="panel panel-flat">
            <div class="panel-body">
              <input type="file" name="foto" id="foto" accept="image/png, image/jpeg, image/jpg">
              <center>
                <?php
                if ($berkas->foto != null) {
                  echo "<img src='files/berkas/$berkas->foto' alt='$user->nama_lengkap' class='' width='176'>";
                } else {
                  echo "<img src='img/user.png' alt='$user->nama_lengkap' class='' width='176'>";
                }
                ?>
              </center>
              <br>
              <fieldset class="content-group">
                <hr style="margin-top:0px;">
                <i class="icon-calendar"></i> <b>Tanggal Daftar</b> :
                <?php echo $this->Model_data->tgl_id(date('d-m-Y H:i:s', strtotime($user->tgl_siswa))); ?>
                <button type="submit" name="btnupdate2" class="btn btn-primary" style="float:right;">Simpan</button>
              </fieldset>
            </div>
          </div>
        </form>
      </div>

      <div class="col-md-9">
        <div class="panel panel-flat">
          <div class="panel-body">
            <fieldset class="content-group">
              <legend class="text-bold"><i class="icon-folder"></i> Berkas</legend>
              <div class="table-responsive">
                <table class="table table-bordered table-striped">
                  <tr>
                    <th>Akte<input type="file" name="akte"></th>
                    <th>KK<input type="file" name="kk"></th>
                    <th>Foto Keluarga<input type="file" name="fk"></th>
                  </tr>
                  <tr>
                    <td><b><?php echo $berkas->s_akte; ?></b>
                      <button type="submit" name="btnupdate2" class="btn btn-primary" style="float:right;">Simpan</button>
                    </td>
                    <td><b><?php echo $berkas->s_kk; ?></b>
                      <button type="submit" name="btnupdate2" class="btn btn-primary" style="float:right;">Simpan</button>
                    </td>
                    <td><b><?php echo $berkas->s_fk; ?></b>
                      <button type="submit" name="btnupdate2" class="btn btn-primary" style="float:right;">Simpan</button>
                    </td>
                  </tr>
                  <tr>
                    <th>SKL<input type="file" name="skl"></th>
                    <th>Ijazah<input type="file" name="ijazah"></th>
                    <th>Pernyataan<input type="file" name="pernyataan"></th>
                  </tr>
                  <tr>
                    <td><b><?php echo $berkas->s_skl; ?></b>
                      <button type="submit" name="btnupdate2" class="btn btn-primary" style="float:right;">Simpan</button>
                    </td>
                    <td><b><?php echo $berkas->s_ijazah; ?></b>
                      <button type="submit" name="btnupdate2" class="btn btn-primary" style="float:right;">Simpan</button>
                    </td>
                    <td><b><?php echo $berkas->s_pernyataan; ?></b>
                      <button type="submit" name="btnupdate2" class="btn btn-primary" style="float:right;">Simpan</button>
                    </td>
                  </tr>
                </table>
              </div>
            </fieldset>
          </div>
        </div>
      </div>

      <div class="col-md-12">
        <div class="col-md-6">
          <div class="panel panel-flat">
            <div class="panel-body">
              <fieldset class="content-group">
                <legend class="text-bold"><i class="icon-library2"></i> Data Sekolah</legend>
                <div class="table-responsive">
                  <table class="table table-bordered table-striped">
                    <tr>
                      <th width="30%">NPSN Sekolah</th>
                      <th width="1%">:</th>
                      <td><?php echo $user->npsn_sekolah; ?></td>
                    </tr>
                    <tr>
                      <th>Nama Sekolah</th>
                      <th>:</th>
                      <td><?php echo ucwords($user->nama_sekolah); ?></td>
                    </tr>
                    <tr>
                      <th>Status Sekolah</th>
                      <th>:</th>
                      <td><?php echo $user->status_sekolah; ?></td>
                    </tr>
                    <tr>
                      <th>Model Ujian Nasional</th>
                      <th>:</th>
                      <td><?php echo $user->model_un; ?></td>
                    </tr>
                    <tr>
                      <th>Alamat Sekolah</th>
                      <th>:</th>
                      <td><?php echo $user->alamat_sekolah; ?></td>
                    </tr>
                    <tr>
                      <th>Tahun Lulus</th>
                      <th>:</th>
                      <td><?php echo $user->thn_lulus; ?></td>
                    </tr>
                  </table>
                </div>
              </fieldset>
            </div>
          </div>
        </div>

        <div class="col-md-6">
          <div class="panel panel-flat">
            <div class="panel-body">
              <fieldset class="content-group">
                <legend class="text-bold"><i class="icon-user"></i> Biodata Siswa</legend>
                <div class="table-responsive">
                  <table class="table table-bordered table-striped">
                    <tr>
                      <th width="20%">NO. PENDAFTARAN</th>
                      <th width="1%">:</th>
                      <td><?php echo $user->no_pendaftaran; ?></td>
                    </tr>
                    <tr>
                      <th>N.I.S</th>
                      <th>:</th>
                      <td><?php echo $user->nis; ?></td>
                    </tr>
                    <tr>
                      <th>N.I.S.N</th>
                      <th>:</th>
                      <td><?php echo $user->nisn; ?></td>
                    </tr>
                    <tr>
                      <th>NIK</th>
                      <th>:</th>
                      <td><?php echo $user->nik; ?></td>
                    </tr>
                    <tr>
                      <th>Nama Lengkap</th>
                      <th>:</th>
                      <td><?php echo ucwords($user->nama_lengkap); ?></td>
                    </tr>
                    <tr>
                      <th>Jenis Kelamin</th>
                      <th>:</th>
                      <td><?php echo $user->jk; ?></td>
                    </tr>
                    <tr>
                      <th>Tempat, Tgl Lahir</th>
                      <th>:</th>
                      <td><?php echo "$user->tempat_lahir, " . $this->Model_data->tgl_id($user->tgl_lahir); ?></td>
                    </tr>
                    <tr>
                      <th>Agama</th>
                      <th>:</th>
                      <td><?php echo $user->agama; ?></td>
                    </tr>
                    <tr>
                      <th>Status dalam Keluarga</th>
                      <th>:</th>
                      <td><?php echo $user->status_keluarga; ?></td>
                    </tr>
                    <tr>
                      <th>Alamat</th>
                      <th>:</th>
                      <td><?php echo $user->alamat_siswa; ?></td>
                    </tr>
                    <tr>
                      <th>No. Handphone</th>
                      <th>:</th>
                      <td><?php echo $user->no_hp_siswa; ?></td>
                    </tr>
                  </table>
                </div>
              </fieldset>
            </div>
          </div>
        </div>
      </div>

      <div class="col-md-12">
        <div class="col-md-4">
          <div class="panel panel-flat">
            <div class="panel-body">
              <fieldset class="content-group">
                <legend class="text-bold"><i class="icon-user"></i> Data Ayah</legend>
                <div class="table-responsive">
                  <table class="table table-bordered table-striped">
                    <tr>
                      <th width="20%">Nama Lengkap</th>
                      <th width="1%">:</th>
                      <td><?php echo ucwords($user->nama_ayah); ?></td>
                    </tr>
                    <tr>
                      <th>Pendidikan</th>
                      <th>:</th>
                      <td><?php echo $user->pdd_ayah; ?></td>
                    </tr>
                    <tr>
                      <th>Pekerjaan</th>
                      <th>:</th>
                      <td><?php echo $user->pekerjaan_ayah; ?></td>
                    </tr>
                    <tr>
                      <th>Penghasilan</th>
                      <th>:</th>
                      <td><?php echo $user->penghasilan_ayah; ?></td>
                    </tr>
                    <tr>
                      <th>No. Handphone</th>
                      <th>:</th>
                      <td><?php echo $user->no_hp_ayah; ?></td>
                    </tr>
                  </table>
                </div>
              </fieldset>
            </div>
          </div>
        </div>

        <div class="col-md-4">
          <div class="panel panel-flat">
            <div class="panel-body">
              <fieldset class="content-group">
                <legend class="text-bold"><i class="icon-user"></i> Data Ibu</legend>
                <div class="table-responsive">
                  <table class="table table-bordered table-striped">
                    <tr>
                      <th width="20%">Nama Lengkap</th>
                      <th width="1%">:</th>
                      <td><?php echo ucwords($user->nama_ibu); ?></td>
                    </tr>
                    <tr>
                      <th>Pendidikan</th>
                      <th>:</th>
                      <td><?php echo $user->pdd_ibu; ?></td>
                    </tr>
                    <tr>
                      <th>Pekerjaan</th>
                      <th>:</th>
                      <td><?php echo $user->pekerjaan_ibu; ?></td>
                    </tr>
                    <tr>
                      <th>Penghasilan</th>
                      <th>:</th>
                      <td><?php echo $user->penghasilan_ibu; ?></td>
                    </tr>
                    <tr>
                      <th>No. Handphone</th>
                      <th>:</th>
                      <td><?php echo $user->no_hp_ibu; ?></td>
                    </tr>
                  </table>
                </div>
              </fieldset>
            </div>
          </div>
        </div>

        <div class="col-md-4">
          <div class="panel panel-flat">
            <div class="panel-body">
              <fieldset class="content-group">
                <legend class="text-bold"><i class="icon-user"></i> Data Wali</legend>
                <div class="table-responsive">
                  <table class="table table-bordered table-striped">
                    <tr>
                      <th width="20%">Nama Lengkap</th>
                      <th width="1%">:</th>
                      <td><?php echo ucwords($user->nama_wali); ?></td>
                    </tr>
                    <tr>
                      <th>Pendidikan</th>
                      <th>:</th>
                      <td><?php echo $user->pdd_wali; ?></td>
                    </tr>
                    <tr>
                      <th>Pekerjaan</th>
                      <th>:</th>
                      <td><?php echo $user->pekerjaan_wali; ?></td>
                    </tr>
                    <tr>
                      <th>Penghasilan</th>
                      <th>:</th>
                      <td><?php echo $user->penghasilan_wali; ?></td>
                    </tr>
                    <tr>
                      <th>No. Handphone</th>
                      <th>:</th>
                      <td><?php echo $user->no_hp_wali; ?></td>
                    </tr>
                  </table>
                </div>
              </fieldset>
            </div>
          </div>
        </div>
      </div>



    </div>
    <!-- /dashboard content -->