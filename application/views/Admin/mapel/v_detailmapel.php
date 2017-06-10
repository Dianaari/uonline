<?php
defined('BASEPATH') or exit('No direct script access allowed');

?>

<div class="panel panel-success"> 
        <div class="panel-heading"> Detail Mata Pelajaran
            <div class="tombol-kanan">
                <a class="btn btn-success btn-sm tombol-kanan" href="<?php echo base_url('index.php/Admin/mapel/tampil_addpengajar/'.$pengajar[0]['id_mapel']);?>" onclick=""><i class="glyphicon glyphicon-plus"></i> &nbsp;&nbsp;Tambah Pengajar</a>
            </div>
        </div> 
        <div class="panel-body"> 
        <?php echo $this->session->flashdata('Pesan'); ?>
      <table class="table table-bordered" id="datatabel">
        <thead>
          <tr>
            <th width="20%">id mapel</th>
            <th width="20%">Kelas</th>
            <th width="20%">Pengajar</th>
            <th width="10%">Tahun Ajaran</th>
            <th width="30%">Aksi</th>
          </tr>
        </thead>
        <tbody>
          <?php 
                foreach ($pengajar as $row):
            ?>
              <tr>
                  <td><?php echo $row['id_mapel']; ?></td>
                  <td><?php echo $row['kelas']; ?></td>
                  <td><?php echo $row['nama_guru']; ?></td>
                  <td><?php echo $row['tahun_ajaran']; ?></td>
                  <td>
<!--                           <a href="<?php echo base_url('index.php/Admin/mapel/edit_pengajar/'.$row['id_mapel']);?>" class="btn btn-info btn-xs"><i class="glyphicon glyphicon-pencil" style="margin-left: 0px; color: #fff"></i> &nbsp;&nbsp;Edit</a>
 -->                          <a href="<?php echo base_url('index.php/Admin/mapel/delete_pengajar/'.$row['id_grmapel']);?>" onclick="return confirm('Anda Yakin menghapus data ini?')" class="btn btn-danger btn-xs"><i class="glyphicon glyphicon-remove" style="margin-left: 0px; color: #fff"></i> &nbsp;&nbsp;Hapus</a>
                  </td>
              </tr>

            <?php 
              endforeach; 
            ?>

        </tbody>


      </table>

            <a href="<?php echo base_url() ?>index.php/Admin/mapel/index" class="btn btn-sm btn-primary"><i class="glyphicon glyphicon-arrow-left"></i> Kembali</a>
        </div> 
    </div>