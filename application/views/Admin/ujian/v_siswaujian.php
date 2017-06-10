<?php
defined('BASEPATH') or exit('No direct script access allowed');

?>

<div class="row col-md-12 ini_bodi">
  <div class="panel panel-info">
    <div class="panel-heading">Peserta Ujian
    <div class="tombol-kanan">
                        <a href="<?php echo site_url('Admin/ujian/tampil')?>" class="btn btn-primary tombol-kanan"><span class="glyphicon glyphicon-arrow-left"></a>
                        <input type="submit" name="submit" class="btn btn-warning tombol-kanan" value="Reset">
                        <input type="submit" name="submit" class="btn btn-success tombol-kanan" value="Simpan">
    </div>
    </div>

    <div class="panel-body">
      <table class="table table-bordered" id="datatabel">
        <thead>
          <tr>
            <th width="5%">No</th>
            <th width="10%">NIS</th>
            <th width="20%">Nama Siswa</th>
            <th width="10%">Jenis Kelamin</th>
            <th width="20%">Kelas</th>
            <th width="20%">Aksi</th>
          </tr>
        </thead>
        <tbody>
          <?php 
                $no=1;
                foreach ($siswa as $row):
            ?>

              <tr>
                  <td><?php echo $no; ?></td>
                  <td><?php echo $row['nis']; ?></td>
                  <td><?php echo $row['nama_siswa']; ?></td>
                  <td><?php echo $row['jenkel']; ?></td>
                  <td><?php echo $row['kelas']; ?></td>
                  <td>
<!--                      <a href="" class="btn btn-info btn-xs"><i class="glyphicon glyphicon-pencil" style="margin-left: 0px; color: #fff"></i> &nbsp;&nbsp;Edit</a>
                          <a href="" class="btn btn-danger btn-xs"><i class="glyphicon glyphicon-remove" style="margin-left: 0px; color: #fff"></i> &nbsp;&nbsp;Hapus</a> -->
                          <input type="checkbox" checked name="" value="" >
                  </td>

              </tr>

            <?php 
              $no++;
              endforeach; 
            ?>
        </tbody>
      </table>

      </div>
    </div>
</div>
