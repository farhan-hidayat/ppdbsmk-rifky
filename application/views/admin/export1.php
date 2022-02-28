<?php
header("Content-type: application/octet-stream");
header("Content-Disposition: attachment; filename=Peserta Didik_$v_thn.xls");
header("Pragma: no-cache");
header("Expires: 0");
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
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
    tr:nth-child(even) {
        background-color: #f2f2f2
    }
    </style>
  </head>
  <body>

    <table width="100%" border="1">
      <tr>
        <th>NO.</th>
        <th>NO. PENDAFTARAN</th>
        <th>JURUSAN</th>
        <th>NIS</th>
        <th>NISN</th>
        <th>NIK</th>
        <th>NAMA LENGKAP</th>
        <th>JENIS KELAMIN</th>
        <th>TEMPAT, TANGGAL LAHIR</th>
        <th>AGAMA</th>
        <th>STATUS DALAM KELUARGA</th>
        <th>ALAMAT SISWA</th>
        <th>NO. HANDPHONE</th>
        <th>E-MAIL</th>
      </tr>
      <?php $no=1;
      error_reporting(0);
      foreach ($v_siswa->result() as $baris):
      ?>
        <tr>
          <th><?php echo $no++; ?></th>
          <td><?php echo $baris->no_pendaftaran; ?></td>
          <td><?php echo $baris->nama_jurusan; ?></td>
          <td><?php echo $baris->nis; ?></td>
          <td><?php echo $baris->nisn; ?></td>
          <td><?php echo $baris->nik; ?></td>
          <td><?php echo ucwords($baris->nama_lengkap); ?></td>
          <td><?php echo $baris->jk; ?></td>
          <td><?php echo "$baris->tempat_lahir, ".$this->Model_data->tgl_id($baris->tgl_lahir); ?></td>
          <td><?php echo $baris->agama; ?></td>
          <td><?php echo $baris->status_keluarga; ?></td>
          <td><?php echo $baris->alamat_siswa; ?></td>
          <td><?php echo $baris->no_hp_siswa; ?></td>
          <td><?php echo $baris->email; ?></td>
        </tr>
      <?php
      endforeach; ?>
    </table>

  </body>
</html>
