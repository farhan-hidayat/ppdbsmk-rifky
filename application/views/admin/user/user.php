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
      <!-- Basic datatable -->
      <div class="panel panel-flat">
        <div class="panel-heading">
          <h5 class="panel-title"> Data Pengguna</h5>
          <hr style="margin:0px;">

          <br>
          <a href="panel_admin/tambah_user" class="btn btn-primary">Tambah Pengguna</a>


        </div>
        <div class="table-responsive">
          <table class="table datatable-basic table-bordered" width="100%">
            <thead>
              <tr>
                <th width="30px;">No.</th>
                <th>Nama</th>
                <th>Username</th>
                <th>Level</th>
                <th class="text-center" width="220">Aksi</th>
              </tr>
            </thead>
            <tbody>
              <?php
              $no = 1;
              foreach ($v_user->result() as $baris) { ?>
                <tr>
                  <td><?php echo $no++; ?></td>
                  <td><?php echo $baris->nama_lengkap; ?></td>
                  <td><?php echo $baris->username; ?></td>
                  <td><?php echo $baris->level; ?></td>
                  <td align="center">
                    <a href="panel_admin/edit_user/<?php echo $baris->id_user; ?>" class="btn btn-warning btn-xs"><i class="icon-pencil"></i> Edit</a>
                    <a href="panel_admin/hapus_user/<?php echo $baris->id_user; ?>" class="btn btn-success btn-xs"><i class="icon-trash"></i> Hapus</a>
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