<style>
  #tbl_input{width:50px;text-align: center;}
  #tbl_input2{width:100px;text-align: center;}
  #th_center > th {text-align: center;}
</style>

<?php
error_reporting(0);
$user = $user->row();?>
<!-- Main content -->
<div class="content-wrapper">

  <!-- Content area -->
  <div class="content">

    <!-- Dashboard content -->
    <div class="row">
      <div class="col-md-3">
      <div class="panel panel-flat">
          <div class="panel-body">
              <center>
                <img src="assets/panel/images/default.png" alt="<?php echo $user->nama_lengkap; ?>" class="" width="176">
              </center>
            <br>
            <fieldset class="content-group">
              <hr style="margin-top:0px;">
              <i class="icon-calendar"></i> <b>Tanggal Daftar</b> :
              <?php echo $this->Model_data->tgl_id(date('d-m-Y H:i:s', strtotime($user->tgl_siswa))); ?>
              <hr>
              <b>Rayonisasi : <?php echo $user->rayonisasi; ?></b>
            </fieldset>
          </form>
          </div>
      </div>
      </div>

      <div class="col-md-9">
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
                      <td><?php echo "$user->tempat_lahir, ". $this->Model_data->tgl_id($user->tgl_lahir); ?></td>
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
              <legend class="text-bold"><i class="icon-profile"></i> Nilai Rapor</legend>
              <div class="table-responsive">
                <table class="table table-bordered table-striped" width="100%" border="1">
                  <tr id="th_center">
                    <th rowspan="2">Mata Pelajaran</th>
                    <th colspan="5" width="25">Semester</th>
                    <th rowspan="2">Rata-Rata Nilai</th>
                  </tr>
                  <tr id="th_center">
                    <th width="5">1</th>
                    <th width="5">2</th>
                    <th width="5">3</th>
                    <th width="5">4</th>
                    <th width="5">5</th>
                  </tr>
                  <tr>
                    <td>Ilmu Pengetahuan Alam (IPA)</td>
                    <?php
                      $ipa = $this->db->get_where('tbl_rapor', array('no_pendaftaran' => $user->no_pendaftaran, "mapel"=>"Ilmu Pengetahuan Alam (IPA)"))->row();
                    ?>
                    <td><?php echo number_format($ipa->semester1,2,",","."); ?></td>
                    <td><?php echo number_format($ipa->semester2,2,",","."); ?></td>
                    <td><?php echo number_format($ipa->semester3,2,",","."); ?></td>
                    <td><?php echo number_format($ipa->semester4,2,",","."); ?></td>
                    <td><?php echo number_format($ipa->semester5,2,",","."); ?></td>
                    <th><?php echo number_format($ipa->rata_rata_nilai,2,",","."); ?></th>
                  </tr>
                  <tr>
                    <td>Ilmu Pengetahuan Sosial (IPS)</td>
                    <?php
                      $ips = $this->db->get_where('tbl_rapor', array('no_pendaftaran' => $user->no_pendaftaran, "mapel"=>"Ilmu Pengetahuan Sosial (IPS)"))->row();
                    ?>
                    <td><?php echo number_format($ips->semester1,2,",","."); ?></td>
                    <td><?php echo number_format($ips->semester2,2,",","."); ?></td>
                    <td><?php echo number_format($ips->semester3,2,",","."); ?></td>
                    <td><?php echo number_format($ips->semester4,2,",","."); ?></td>
                    <td><?php echo number_format($ips->semester5,2,",","."); ?></td>
                    <th><?php echo number_format($ips->rata_rata_nilai,2,",","."); ?></th>
                  </tr>
                  <tr>
                    <td>Matematika </td>
                    <?php
                      $mtk = $this->db->get_where('tbl_rapor', array('no_pendaftaran' => $user->no_pendaftaran, "mapel"=>"Matematika"))->row();
                    ?>
                    <td><?php echo number_format($mtk->semester1,2,",","."); ?></td>
                    <td><?php echo number_format($mtk->semester2,2,",","."); ?></td>
                    <td><?php echo number_format($mtk->semester3,2,",","."); ?></td>
                    <td><?php echo number_format($mtk->semester4,2,",","."); ?></td>
                    <td><?php echo number_format($mtk->semester5,2,",","."); ?></td>
                    <th><?php echo number_format($mtk->rata_rata_nilai,2,",","."); ?></th>
                  </tr>
                  <tr>
                    <td>Bahasa Indonesia </td>
                    <?php
                      $ind = $this->db->get_where('tbl_rapor', array('no_pendaftaran' => $user->no_pendaftaran, "mapel"=>"Bahasa Indonesia"))->row();
                    ?>
                    <td><?php echo number_format($ind->semester1,2,",","."); ?></td>
                    <td><?php echo number_format($ind->semester2,2,",","."); ?></td>
                    <td><?php echo number_format($ind->semester3,2,",","."); ?></td>
                    <td><?php echo number_format($ind->semester4,2,",","."); ?></td>
                    <td><?php echo number_format($ind->semester5,2,",","."); ?></td>
                    <th><?php echo number_format($ind->rata_rata_nilai,2,",","."); ?></th>
                  </tr>
                  <tr>
                    <td>Bahasa Inggris </td>
                    <?php
                      $ing = $this->db->get_where('tbl_rapor', array('no_pendaftaran' => $user->no_pendaftaran, "mapel"=>"Bahasa Inggris"))->row();
                    ?>
                    <td><?php echo number_format($ing->semester1,2,",","."); ?></td>
                    <td><?php echo number_format($ing->semester2,2,",","."); ?></td>
                    <td><?php echo number_format($ing->semester3,2,",","."); ?></td>
                    <td><?php echo number_format($ing->semester4,2,",","."); ?></td>
                    <td><?php echo number_format($ing->semester5,2,",","."); ?></td>
                    <th><?php echo number_format($ing->rata_rata_nilai,2,",","."); ?></th>
                  </tr>
                  <tr id="th_center">
                    <th colspan="6">Rata-Rata Rapor</th>
                    <th><?php echo number_format(($ipa->rata_rata_nilai+$ips->rata_rata_nilai+$mtk->rata_rata_nilai+$ind->rata_rata_nilai+$ing->rata_rata_nilai)/5,2,",","."); ?></th>
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
              <legend class="text-bold"><i class="icon-profile"></i> Nilai USBN</legend>
              <div class="table-responsive">
                <table class="table table-bordered table-striped" width="100%" border="1">
                  <tr id="th_center">
                    <th>Mata Pelajaran</th>
                    <th width="10">Nilai USBN</th>
                  </tr>
                  <tr>
                    <td>Pendidikan Agama</td>
                    <td>
                      <?php
                        $agama = $this->db->get_where('tbl_nilai_usbn', array('no_pendaftaran' => $user->no_pendaftaran, "mapel_usbn"=>"Pendidikan Agama"))->row();
                        echo number_format($agama->nilai_usbn,2,",",".");
                      ?>
                    </td>
                  </tr>
                  <tr>
                    <td>PKN</td>
                    <td>
                      <?php
                        $pkn = $this->db->get_where('tbl_nilai_usbn', array('no_pendaftaran' => $user->no_pendaftaran, "mapel_usbn"=>"PKN"))->row();
                        echo number_format($pkn->nilai_usbn,2,",",".");
                      ?>
                    </td>
                  </tr>
                  <tr>
                    <td>Bahasa Indonesia</td>
                    <td>
                      <?php
                        $ind2 = $this->db->get_where('tbl_nilai_usbn', array('no_pendaftaran' => $user->no_pendaftaran, "mapel_usbn"=>"Bahasa Indonesia"))->row();
                        echo number_format($ind2->nilai_usbn,2,",",".");
                      ?>
                    </td>
                  </tr>
                  <tr>
                    <td>Bahasa Inggris</td>
                    <td>
                      <?php
                        $ing2 = $this->db->get_where('tbl_nilai_usbn', array('no_pendaftaran' => $user->no_pendaftaran, "mapel_usbn"=>"Bahasa Inggris"))->row();
                        echo number_format($ing2->nilai_usbn,2,",",".");
                      ?>
                    </td>
                  </tr>
                  <tr>
                    <td>Matematika</td>
                    <td>
                      <?php
                        $mtk2 = $this->db->get_where('tbl_nilai_usbn', array('no_pendaftaran' => $user->no_pendaftaran, "mapel_usbn"=>"Matematika"))->row();
                        echo number_format($mtk2->nilai_usbn,2,",",".");
                      ?>
                    </td>
                  </tr>
                  <tr>
                    <td>Ilmu Pengetahuan Alam (IPA)</td>
                    <td>
                      <?php
                        $ipa2 = $this->db->get_where('tbl_nilai_usbn', array('no_pendaftaran' => $user->no_pendaftaran, "mapel_usbn"=>"Ilmu Pengetahuan Alam (IPA)"))->row();
                        echo number_format($ipa2->nilai_usbn,2,",",".");
                      ?>
                    </td>
                  </tr>
                  <tr>
                    <td>Ilmu Pengetahuan Sosial (IPS)</td>
                    <td>
                      <?php
                        $ips2 = $this->db->get_where('tbl_nilai_usbn', array('no_pendaftaran' => $user->no_pendaftaran, "mapel_usbn"=>"Ilmu Pengetahuan Sosial (IPS)"))->row();
                        echo number_format($ips2->nilai_usbn,2,",",".");
                      ?>
                    </td>
                  </tr>
                  <tr id="th_center">
                    <th>Jumlah Nilai USBN</th>
                    <th>
                      <?php $jumlah_usbn = $agama->nilai_usbn+$pkn->nilai_usbn+$ind2->nilai_usbn+$ing2->nilai_usbn+$mtk2->nilai_usbn+$ipa2->nilai_usbn+$ips2->nilai_usbn;
                      echo number_format($jumlah_usbn,2,",","."); ?>
                    </th>
                  </tr>
                  <tr id="th_center">
                    <th>Rata–Rata Nilai USBN</th>
                    <th><?php echo number_format($jumlah_usbn/7,2,",","."); ?></th>
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
              <legend class="text-bold"><i class="icon-profile"></i> Nilai UNKP/UNBK</legend>
              <div class="table-responsive">
                <table class="table table-bordered table-striped" width="100%" border="1">
                  <tr id="th_center">
                    <th>Mata Pelajaran</th>
                    <th width="10">Nilai UNKP/UNBK</th>
                  </tr>
                  <tr>
                    <td>Ilmu Pengetahuan Alam (IPA)</td>
                    <td>
                      <?php
                        $ipa3 = $this->db->get_where('tbl_nilai_unbk', array('no_pendaftaran' => $user->no_pendaftaran, "mapel_unbk"=>"Ilmu Pengetahuan Alam (IPA)"))->row();
                        echo number_format($ipa3->nilai_unbk,2,",",".");
                      ?>
                    </td>
                  </tr>
                  <tr>
                    <td>Matematika</td>
                    <td>
                      <?php
                        $mtk3 = $this->db->get_where('tbl_nilai_unbk', array('no_pendaftaran' => $user->no_pendaftaran, "mapel_unbk"=>"Matematika"))->row();
                        echo number_format($mtk3->nilai_unbk,2,",",".");
                      ?>
                    </td>
                  </tr>
                  <tr>
                    <td>Bahasa Indonesia</td>
                    <td>
                      <?php
                        $ind3 = $this->db->get_where('tbl_nilai_unbk', array('no_pendaftaran' => $user->no_pendaftaran, "mapel_unbk"=>"Bahasa Indonesia"))->row();
                        echo number_format($ind3->nilai_unbk,2,",",".");
                      ?>
                    </td>
                  </tr>
                  <tr>
                    <td>Bahasa Inggris</td>
                    <td>
                      <?php
                        $ing3 = $this->db->get_where('tbl_nilai_unbk', array('no_pendaftaran' => $user->no_pendaftaran, "mapel_unbk"=>"Bahasa Inggris"))->row();
                        echo number_format($ing3->nilai_unbk,2,",",".");
                      ?>
                    </td>
                  </tr>
                  <tr id="th_center">
                    <th>Jumlah Nilai USBN</th>
                    <th>
                      <?php $jumlah_unbk = $ipa3->nilai_unbk+$mtk3->nilai_unbk+$ind3->nilai_unbk+$ing3->nilai_unbk;
                      echo number_format($jumlah_unbk,2,",","."); ?>
                    </th>
                  </tr>
                  <tr id="th_center">
                    <th>Rata–Rata Nilai UNBK</th>
                    <th><?php echo number_format($jumlah_unbk/4,2,",","."); ?></th>
                  </tr>
                </table>
              </div>
            </fieldset>
          </div>
      </div>
      </div>


    </div>
    <!-- /dashboard content -->
