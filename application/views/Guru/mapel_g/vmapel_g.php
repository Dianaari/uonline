<div class="col-lg-12 row">
  <div class="panel panel-default">
    <div class="panel-body">
      <a href="<?php echo base_url('index.php/home/indexGuru');?>" class="btn btn-sq btn-primary"><i class="glyphicon glyphicon-dashboard g3x"></i><br><br/>Dashboard </a>
      <a href="<?php echo base_url('index.php/Guru/csiswa_g');?>" class="btn btn-sq btn-primary"><i class="glyphicon glyphicon-list-alt g3x"></i><br><br/>Data Siswa </a>
      <a href="<?php echo base_url('index.php/Guru/cmapel_g');?>" class="btn btn-sq btn-warning"><i class="glyphicon glyphicon-list-alt g3x"></i><br><br/>Data Mapel</a>
      <a href="<?php echo base_url('index.php/Guru/cujian_g');?>" class="btn btn-sq btn-primary" class="btn btn-sq btn-primary"><i class="glyphicon glyphicon-file g3x"></i><br><br/>Data Ujian</a>
      <a href="<?php echo base_url('index.php/Guru/csoal_g');?>" class="btn btn-sq btn-primary"><i class="glyphicon glyphicon-file g3x"></i><br><br/>Data Soal </a>
      <a href="<?php echo base_url('index.php/Guru/chasil_g');?>" class="btn btn-sq btn-primary"><i class="glyphicon glyphicon-check g3x"></i><br><br/>Hasil Ujian </a></div>
  </div>
</div>


<div class="row col-md-12 ini_bodi">
  <div class="panel panel-info">
    <div class="panel-heading">Data Mata Pelajaran
    </div>

    <div class="panel-body">
    <?php echo $this->session->flashdata('Pesan'); ?>
      <table class="table table-bordered" id="datatabel">
        <thead>
          <tr>
            <th width="5%">No</th>
            <th width="10%">Id Mapel</th>
            <th width="20%">Mata Pelajaran</th>
            <th width="5%">KKM</th>
            <th width="15%">Aksi</th>
          </tr>
        </thead>
        <tbody>
          <?php 
                $no=1;
                foreach ($mapel as $row):
            ?>

              <tr>
                  <td><?php echo $no; ?></td>
                  <td><?php echo $row['id_mapel']; ?></td>
                  <td><?php echo $row['nama_mapel']; ?></td>
                  <td><?php echo $row['kkm']; ?></td>
                  <td>
                          <a href="<?php echo base_url('index.php/Guru/cmapel_g/detail/'.$row['id_mapel']);?>" class="btn btn-warning btn-xs"><i class="glyphicon glyphicon-eye-open" style="margin-left: 0px; color: #fff"></i>&nbsp;&nbsp;Pengajar</a> 
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