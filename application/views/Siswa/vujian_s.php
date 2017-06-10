<div class="col-lg-12 row">
    <div class="panel panel-default">
        <div class="panel-body">
            <a href="<?php echo base_url('index.php/home/indexSiswa');?>" class="btn btn-sq btn-primary"><i class="glyphicon glyphicon-dashboard g3x"></i><br><br/>Dashboard </a>
            <a href="<?php echo base_url('index.php/Siswa/Ujian_s');?>" class="btn btn-sq btn-warning" class="btn btn-sq btn-primary"><i class="glyphicon glyphicon-file g3x"></i><br><br/>Ujian</a>
        </div>
    </div>
</div>

<div class="row col-md-12 ini_bodi">
  <div class="panel panel-info">
    <div class="panel-heading">Riwayat Ujian</div>
    
    <div class="panel-body">
    <?php echo $this->session->flashdata('Pesan'); ?>
      <table class="table table-bordered" id="datatabel">
        <thead>
          <tr>
            <th width="5%">No</th>
            <th width="20%">Nama Ujian</th>
            <th width="20%">Mata Pelajaran</th>
            <th width="10%">Kelas</th>
            <th width="10%">Waktu Mulai</th>
            <th width="10%">Waktu Akhir</th>
            <th width="10%">Status Ujian</th>
            <th width="15%">Aksi</th>
          </tr>

        </thead>
        <tbody>
            <?php 
                $no=1;
                foreach ($ujiansiswa as $row):
            ?>

              <tr>
                  <td><?php echo $no; ?></td>
                  <td><?php echo $row['nama_ujian']; ?></td>
                  <td><?php echo $row['nama_mapel']; ?></td>
                  <td><?php echo $row['kelas']; ?></td>
                  <td><?php echo $row['waktu_mulai']; ?></td>
                  <td><?php echo $row['waktu_akhir']; ?></td>
                  <td><?php echo $row['status_ujian']; ?></td>
                  <td>
                          <!-- <a href="<?php echo base_url('index.php/Siswa/tampilsoal');?>" class="btn btn-success btn-xs"><i class="" style="margin-left: 0px; color: #fff"></i>&nbsp;&nbsp;Mulai Ujian</a>  -->
                          <a href="" class="btn btn-success btn-xs"><i class="" style="margin-left: 0px; color: #fff"></i>&nbsp;&nbsp;Hasil Ujian</a>
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
