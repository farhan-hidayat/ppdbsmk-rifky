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
$user = $siswa->row(); ?>
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
                <div class="panel panel-flat">
                    <div class="panel-body">
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
                        </fieldset>
                    </div>
                </div>
            </div>

            <form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
                <div class="col-md-9">
                    <div class="panel panel-flat">
                        <div class="panel-body">
                            <fieldset class="content-group">
                                <legend class="text-bold"><i class="icon-folder"></i> Berkas
                                    <button type="submit" name="btn-simpan" class="btn btn-primary" style="float:right;">Simpan</button>
                                </legend>
                                <div class="table-responsive">
                                    <table class="table table-bordered table-striped">
                                        <tr>
                                            <th>Akte
                                                <select class="form-control" data-placeholder="Pilih Status Sekolah" name="s_akte">
                                                    <option <?php if ($berkas->s_akte == "Sedang Diproses") {
                                                                echo "selected='selected'";
                                                            } ?> value="Sedang Diproses">Sedang Diproses</option>
                                                    <option <?php if ($berkas->s_akte == "Terverifikasi") {
                                                                echo "selected='selected'";
                                                            } ?> value="Terverifikasi">Terverifikasi</option>
                                                    <option <?php if ($berkas->s_akte == "Tidak Sesuai") {
                                                                echo "selected='selected'";
                                                            } ?> value="Tidak Sesuai">Tidak Sesuai</option>
                                                </select>
                                            </th>
                                            <th>KK
                                                <select class="form-control" data-placeholder="Pilih Status Sekolah" name="s_kk">
                                                    <option <?php if ($berkas->s_kk == "Sedang Diproses") {
                                                                echo "selected='selected'";
                                                            } ?> value="Sedang Diproses">Sedang Diproses</option>
                                                    <option <?php if ($berkas->s_kk == "Terverifikasi") {
                                                                echo "selected='selected'";
                                                            } ?> value="Terverifikasi">Terverifikasi</option>
                                                    <option <?php if ($berkas->s_kk == "Tidak Sesuai") {
                                                                echo "selected='selected'";
                                                            } ?> value="Tidak Sesuai">Tidak Sesuai</option>
                                                </select>
                                            </th>
                                            <th>Foto Keluarga
                                                <select class="form-control" data-placeholder="Pilih Status Sekolah" name="s_fk">
                                                    <option <?php if ($berkas->s_fk == "Sedang Diproses") {
                                                                echo "selected='selected'";
                                                            } ?> value="Sedang Diproses">Sedang Diproses</option>
                                                    <option <?php if ($berkas->s_fk == "Terverifikasi") {
                                                                echo "selected='selected'";
                                                            } ?> value="Terverifikasi">Terverifikasi</option>
                                                    <option <?php if ($berkas->s_fk == "Tidak Sesuai") {
                                                                echo "selected='selected'";
                                                            } ?> value="Tidak Sesuai">Tidak Sesuai</option>
                                                </select>
                                            </th>
                                        </tr>
                                        <tr>
                                            <td align="center">
                                                <?php if ($berkas->s_akte == 'Terverifikasi') { ?>
                                                    <a href="files/berkas/<?php echo $berkas->akte; ?>" target="_blank" class="btn btn-success btn-xs" title="Terverifikasi"> Terverifikasi</a>
                                                <?php } elseif ($berkas->s_akte == 'Sedang Diproses') { ?>
                                                    <a href="files/berkas/<?php echo $berkas->akte; ?>" target="_blank" class="btn btn-warning btn-xs" title="Sedang Diproses"> Sedang Diproses</a>
                                                <?php } elseif ($berkas->s_akte == 'Tidak Sesuai') { ?>
                                                    <a href="files/berkas/<?php echo $berkas->akte; ?>" target="_blank" class="btn btn-warning btn-xs" title="Tidak Sesuai"> Tidak Sesuai</a>
                                                <?php } else { ?>
                                                    <label class="label label-danger">Belum Upload</label>
                                                <?php } ?>
                                            </td>
                                            <td align="center">
                                                <?php if ($berkas->s_kk == 'Terverifikasi') { ?>
                                                    <a href="files/berkas/<?php echo $berkas->kk; ?>" target="_blank" class="btn btn-success btn-xs" title="Terverifikasi"> Terverifikasi</a>
                                                <?php } elseif ($berkas->s_kk == 'Sedang Diproses') { ?>
                                                    <a href="files/berkas/<?php echo $berkas->kk; ?>" target="_blank" class="btn btn-warning btn-xs" title="Sedang Diproses"> Sedang Diproses</a>
                                                <?php } elseif ($berkas->s_kk == 'Tidak Sesuai') { ?>
                                                    <a href="files/berkas/<?php echo $berkas->kk; ?>" target="_blank" class="btn btn-warning btn-xs" title="Tidak Sesuai"> Tidak Sesuai</a>
                                                <?php } else { ?>
                                                    <label class="label label-danger">Belum Upload</label>
                                                <?php } ?>
                                            </td>
                                            <td align="center">
                                                <?php if ($berkas->s_fk == 'Terverifikasi') { ?>
                                                    <a href="files/berkas/<?php echo $berkas->fk; ?>" target="_blank" class="btn btn-success btn-xs" title="Terverifikasi"> Terverifikasi</a>
                                                <?php } elseif ($berkas->s_fk == 'Sedang Diproses') { ?>
                                                    <a href="files/berkas/<?php echo $berkas->fk; ?>" target="_blank" class="btn btn-warning btn-xs" title="Sedang Diproses"> Sedang Diproses</a>
                                                <?php } elseif ($berkas->s_fk == 'Tidak Sesuai') { ?>
                                                    <a href="files/berkas/<?php echo $berkas->fk; ?>" target="_blank" class="btn btn-warning btn-xs" title="Tidak Sesuai"> Tidak Sesuai</a>
                                                <?php } else { ?>
                                                    <label class="label label-danger">Belum Upload</label>
                                                <?php } ?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>SKL
                                                <select class="form-control" data-placeholder="Pilih Status Sekolah" name="s_skl">
                                                    <option <?php if ($berkas->s_skl == "Sedang Diproses") {
                                                                echo "selected='selected'";
                                                            } ?> value="Sedang Diproses">Sedang Diproses</option>
                                                    <option <?php if ($berkas->s_skl == "Terverifikasi") {
                                                                echo "selected='selected'";
                                                            } ?> value="Terverifikasi">Terverifikasi</option>
                                                    <option <?php if ($berkas->s_skl == "Tidak Sesuai") {
                                                                echo "selected='selected'";
                                                            } ?> value="Tidak Sesuai">Tidak Sesuai</option>
                                                </select>
                                            </th>
                                            <th>Ijazah
                                                <select class="form-control" data-placeholder="Pilih Status Sekolah" name="s_ijazah">
                                                    <option <?php if ($berkas->s_ijazah == "Sedang Diproses") {
                                                                echo "selected='selected'";
                                                            } ?> value="Sedang Diproses">Sedang Diproses</option>
                                                    <option <?php if ($berkas->s_ijazah == "Terverifikasi") {
                                                                echo "selected='selected'";
                                                            } ?> value="Terverifikasi">Terverifikasi</option>
                                                    <option <?php if ($berkas->s_ijazah == "Tidak Sesuai") {
                                                                echo "selected='selected'";
                                                            } ?> value="Tidak Sesuai">Tidak Sesuai</option>
                                                </select>
                                            </th>
                                            <!-- <th>Pernyataan</th> -->
                                        </tr>
                                        <tr>
                                            <td align="center">
                                                <?php if ($berkas->s_skl == 'Terverifikasi') { ?>
                                                    <a href="files/berkas/<?php echo $berkas->skl; ?>" target="_blank" class="btn btn-success btn-xs" title="Terverifikasi"> Terverifikasi</a>
                                                <?php } elseif ($berkas->s_skl == 'Sedang Diproses') { ?>
                                                    <a href="files/berkas/<?php echo $berkas->skl; ?>" target="_blank" class="btn btn-warning btn-xs" title="Sedang Diproses"> Sedang Diproses</a>
                                                <?php } elseif ($berkas->s_skl == 'Tidak Sesuai') { ?>
                                                    <a href="files/berkas/<?php echo $berkas->skl; ?>" target="_blank" class="btn btn-warning btn-xs" title="Tidak Sesuai"> Tidak Sesuai</a>
                                                <?php } else { ?>
                                                    <label class="label label-danger">Belum Upload</label>
                                                <?php } ?>
                                            </td>
                                            <td align="center">
                                                <?php if ($berkas->s_ijazah == 'Terverifikasi') { ?>
                                                    <a href="files/berkas/<?php echo $berkas->ijazah; ?>" target="_blank" class="btn btn-success btn-xs" title="Terverifikasi"> Terverifikasi</a>
                                                <?php } elseif ($berkas->s_ijazah == 'Sedang Diproses') { ?>
                                                    <a href="files/berkas/<?php echo $berkas->ijazah; ?>" target="_blank" class="btn btn-warning btn-xs" title="Sedang Diproses"> Sedang Diproses</a>
                                                <?php } elseif ($berkas->s_ijazah == 'Tidak Sesuai') { ?>
                                                    <a href="files/berkas/<?php echo $berkas->ijazah; ?>" target="_blank" class="btn btn-warning btn-xs" title="Tidak Sesuai"> Tidak Sesuai</a>
                                                <?php } else { ?>
                                                    <label class="label label-danger">Belum Upload</label>
                                                <?php } ?>
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                            </fieldset>
                        </div>
                    </div>
                </div>
            </form>

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

        </div>
        <!-- /dashboard content -->