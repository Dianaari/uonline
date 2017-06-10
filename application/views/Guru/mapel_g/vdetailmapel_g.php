<?php
defined('BASEPATH') or exit('No direct script access allowed');

?>

<div class="panel panel-success"> 
        <div class="panel-heading"> Detail Mata Pelajaran
        </div> 
        <div class="panel-body"> 
           
      <table class="table table-bordered" id="datatabel">
        <thead>
          <tr>
            <th width="20%">id mapel</th>
            <th width="25%">Kelas</th>
            <th width="30%">Pengajar</th>
            <th width="25%">Tahun Ajaran</th>
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
              </tr>

            <?php 
              endforeach; 
            ?>

        </tbody>


      </table>

            <a href="<?php echo base_url() ?>index.php/Guru/cmapel_g/index" class="btn btn-sm btn-primary"><i class="glyphicon glyphicon-arrow-left"></i> Kembali</a>
        </div> 
    </div>