<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title><?php echo $judul_web; ?></title>
    <base href="<?php echo base_url();?>"/>
  	<link rel="icon" type="image/png" href="assets/images/favicon.png"/>
    <style>
    table {
        border-collapse: collapse;
    }
    thead > tr{
      background-color: #0070C0;
      color:#f1f1f1;
    }
    thead > tr > th{
      background-color: #0070C0;
      color:#fff;
      padding: 10px;
      border-color: #fff;
    }
    th, td {
      padding: 2px;
    }

    th {
        color: #222;
    }
    body{
      font-family:Calibri;
    }
    </style>
  </head>
  <body onload="window.print();">
    <?php $this->load->view('kop_lap'); ?>
    <h4 align="center" style="margin-top:0px;"><u>BUKTI PENDAFTARAN</u></h4>
    <b><center>
      PANITIA PENERIAMAAN PESERTA DIDIK BARU (PPDB) <br>
      SMA NEGERI 1 BELITANG <br>
      TAHUN PELAJARAN <?php echo $thn_ppdb; ?> / <?php echo $thn_ppdb+1; ?></center>
    </b>
    <br>

    <table width="100%" border="0">
      <tr>
        <td width="200">NO. PENDAFTARAN</td>
        <td width="1">:</td>
        <td><?php echo $user->no_pendaftaran; ?></td>
      </tr>
      <tr>
        <td>TANGGAL PENDAFTARAN </td>
        <td>:</td>
        <td><?php echo $this->Model_data->tgl_id(date('d-m-Y', strtotime($user->tgl_siswa))); ?></td>
      </tr>
      <tr>
        <td>TANGGAL CETAK </td>
        <td>:</td>
        <td><?php echo $this->Model_data->tgl_id(date('d-m-Y')); ?></td>
      </tr>
      <tr>
        <td>NIS</td>
        <td>:</td>
        <td><?php echo $user->nis; ?></td>
      </tr>
      <tr>
        <td>NISN</td>
        <td>:</td>
        <td><?php echo $user->nisn; ?></td>
      </tr>
      <tr>
        <td>NIK</td>
        <td>:</td>
        <td><?php echo $user->nik; ?></td>
      </tr>
      <tr>
        <td>NAMA LENGKAP</td>
        <td>:</td>
        <td><?php echo ucwords($user->nama_lengkap); ?></td>
      </tr>
      <tr>
        <td>JENIS KELAMIN</td>
        <td>:</td>
        <td><?php echo $user->jk; ?></td>
      </tr>
      <tr>
        <td>TEMPAT, TANGGAL LAHIR</td>
        <td>:</td>
        <td><?php echo "$user->tempat_lahir, ".$this->Model_data->tgl_id($user->tgl_lahir); ?></td>
      </tr>
      <tr>
        <td>AGAMA</td>
        <td>:</td>
        <td><?php echo $user->agama; ?></td>
      </tr>
      <tr>
        <td>NAMA ORANG TUA /WALI</td>
        <td>:</td>
        <td></td>
      </tr>
      <tr>
        <td style="padding-left:55px;">AYAH</td>
        <td>:</td>
        <td><?php echo ucwords($user->nama_ayah); ?></td>
      </tr>
      <tr>
        <td style="padding-left:55px;">IBU</td>
        <td>:</td>
        <td><?php echo ucwords($user->nama_ibu); ?></td>
      </tr>
      <tr>
        <td style="padding-left:55px;">WALI</td>
        <td>:</td>
        <td><?php echo ucwords($user->nama_wali); ?></td>
      </tr>
      <tr>
        <td>NO. HANDPHONE (HP)</td>
        <td>:</td>
        <td><?php echo $user->no_hp_siswa; ?></td>
      </tr>
      <tr>
        <td>ASAL SEKOLAH</td>
        <td>:</td>
        <td><?php echo ucwords($user->nama_sekolah); ?></td>
      </tr>
      <tr>
        <td>RATA - RATA NILAI RAPOR</td>
        <td>:</td>
        <td><?php echo number_format($nilai_rapor,2,",","."); ?></td>
      </tr>
      <tr>
        <td>RATA - RATA NILAI USBN</td>
        <td>:</td>
        <td><?php echo number_format($nilai_usbn,2,",","."); ?></td>
      </tr>
      <tr>
        <td>RATA - RATA NILAI UNBK/UNKP</td>
        <td>:</td>
        <td><?php echo number_format($nilai_unbk,2,",","."); ?></td>
      </tr>
    </table>
    <br>

    <div style="float:right;">
      OKU Timur, <?php echo $this->Model_data->tgl_id(date('d-m-Y')); ?> <br>
			Ketua Panitia PPDB,  <br>
      <img src="img/ttd.jpg" alt="" width="100"><br>
      <b><u>KETUT SUDIARTE, S.Pd.</u></b><br>
      NIP. 197001301997031006
    </div>
    <br><br><br><br><br><br><br><br><br><br>

    <b><u>Siapkan Berkas Berikut Ketika anda melakukan verifikasi :</u></b>
    <br>
    <table width="100%" border="0" style="margin-left:5px;">
      <tr>
        <td width="1">1.</td>
        <td>Cetak bukti pendaftaran</td>
        <td width="1">:</td>
        <td>1 lembar</td>
      </tr>
      <tr>
        <td>2.</td>
        <td>Cetak rekap nilai</td>
        <td>:</td>
        <td>1 lembar</td>
      </tr>
      <tr>
        <td>3.</td>
        <td>Pas foto berwarna ukuran 3 x 4</td>
        <td>:</td>
        <td>3 lembar</td>
      </tr>
      <tr>
        <td>4.</td>
        <td>Print out ASLI NISN dari web  <i>http://nisn.data.kemdikbud.go.id</i> Dilegalisir</td>
        <td>:</td>
        <td>1 lembar</td>
      </tr>
      <tr>
        <td>5.</td>
        <td>Foto copy rapor SMP/MTs. Semester 1 s.d 5 Dilegalisir</td>
        <td>:</td>
        <td>1 lembar</td>
      </tr>
      <tr>
        <td>6.</td>
        <td>Foto copy nilai USBN Dilegalisir</td>
        <td>:</td>
        <td>1 lembar</td>
      </tr>
      <tr>
        <td>7.</td>
        <td>Foto copy nilai UNKP / UNBK Dilegalisir</td>
        <td>:</td>
        <td>1 lembar</td>
      </tr>
      <tr>
        <td>8.</td>
        <td>Fotocopy Dakol Nem Dilegalisir</td>
        <td>:</td>
        <td>1 lembar</td>
      </tr>
      <tr>
        <td>9.</td>
        <td>Foto copy Kartu Keluarga KK</td>
        <td>:</td>
        <td>1 lembar</td>
      </tr>
      <tr>
        <td valign="top">10.</td>
        <td colspan="3">Semua berkas dimasukan kedalam map plastik berlubang (Contoh:  merk folder one), laki – laki warna merah dan perempuan warna biru</td>
      </tr>
    </table>

  </body>
</html>
