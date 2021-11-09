<!-- Main content -->
<div class="content-wrapper">
  <!-- Content area -->
  <div class="content">
    <?php
    echo $this->session->flashdata('msg');
    ?>
    <!-- Dashboard content -->
    <div class="row">
      <!-- Basic datatable -->
      <div class="panel panel-flat">
        <div class="panel-heading">
          <h5 class="panel-title"> Setting Kuota Jurusan</h5>
          <hr style="margin:0px;">
          <div class="heading-elements">
            <ul class="icons-list">
              <li><a data-action="collapse"></a></li>
            </ul>
          </div>

                    <br>
                    <a href="panel_admin/tambah_jurusan" class="btn btn-primary">Tambah Jurusan</a>
                    

        </div>
        <div class="table-responsive">
        <table class="table datatable-basic table-bordered" width="100%">
          <thead>
            <tr>
              <th width="30px;">No.</th>
              <th>Jurusan</th>
              <th>Kuota</th>
              <th class="text-center" width="220">Aksi</th>
            </tr>
          </thead>
          <tbody>
              <?php
              $no = 1;
              foreach ($v_jurusan->result() as $baris) {?>
                <tr>
                  <td><?php echo $no++; ?></td>
                  <td><?php echo $baris->nama_jurusan; ?></td>
                  <td><?php echo $baris->kuota; ?></td>
                  <td align="center">
                      <a href="panel_admin/edit_jurusan/<?php echo $baris->id_jurusan; ?>" class="btn btn-warning btn-xs"><i class="icon-pencil"></i> Edit</a>
                      <a href="panel_admin/hapus_jurusan/<?php echo $baris->id_jurusan; ?>" class="btn btn-success btn-xs"><i class="icon-trash"></i> Hapus</a>
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
