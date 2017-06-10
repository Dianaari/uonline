<div class="col-lg-12 row">
  <div class="panel panel-default">
    <div class="panel-body">
      <a href="<?php echo base_url('index.php/home/index');?>" class="btn btn-sq btn-primary"><i class="glyphicon glyphicon-dashboard g3x"></i><br><br/>Dashboard </a>
      <a href="<?php echo base_url('index.php/Admin/tahun');?>" class="btn btn-sq btn-primary"><i class="glyphicon glyphicon-calendar g3x"></i><br><br/>Tahun Ajaran </a>
      <a href="<?php echo base_url('index.php/Admin/kelas');?>" class="btn btn-sq btn-primary"><i class="glyphicon glyphicon-list-alt g3x"></i><br><br/>Data Kelas</a>
      <a href="<?php echo base_url('index.php/Admin/guru');?>" class="btn btn-sq btn-primary"><i class="glyphicon glyphicon-list-alt g3x"></i><br><br/>Data Guru </a>
      <a href="<?php echo base_url('index.php/Admin/siswa');?>" class="btn btn-sq btn-primary"><i class="glyphicon glyphicon-list-alt g3x"></i><br><br/>Data Siswa </a>
      <a href="<?php echo base_url('index.php/Admin/mapel');?>" class="btn btn-sq btn-primary"><i class="glyphicon glyphicon-list-alt g3x"></i><br><br/>Data Mapel</a>
      <a href="<?php echo base_url('index.php/Admin/ujian');?>" class="btn btn-sq btn-primary"><i class="glyphicon glyphicon-file g3x"></i><br><br/>Data Ujian</a>
      <a href="<?php echo base_url('index.php/Admin/soal');?>" class="btn btn-sq btn-primary"><i class="glyphicon glyphicon-file g3x"></i><br><br/>Data Soal </a>
      <a href="<?php echo base_url('index.php/Admin/hasil');?>" class="btn btn-sq btn-warning"><i class="glyphicon glyphicon-check g3x"></i><br><br/>Hasil Ujian </a></div>
  </div>
</div>


<div class="row col-md-12 ini_bodi">
  <div class="panel panel-info">
    <div class="panel-heading">Hasil Ujian
      <div class="tombol-kanan">
        <a class="btn btn-info btn-sm" style="float:right" href="<?php echo site_url('Admin/Hasil/cetak_laporan');?>"><i class="glyphicon glyphicon-print"></i> Cetak</a>
      </div>
    </div>

    <div class="panel-body">
    <?php echo $this->session->flashdata('Pesan'); ?>
      <table class="table table-bordered" id="datatabel">
        <thead>
          <tr>
            <th width="5%">No</th>
            <th width="10%">Tanggal Ujian</th>
            <th width="15%">Nama Ujian</th>
            <th width="10%">Nama Soal</th>
            <th width="15%">Mata Pelajaran</th>
            <th width="10%">NIS</th>
            <th width="20%">Nama Siswa</th>
            <th width="10%">Nilai</th>
            <th width="10%">Hasil/Ket</th>
          </tr>
        </thead>
        <tbody>
            <?php 
                $no=1;
                foreach ($hasil as $row):
            ?>

              <tr>
                  <td><?php echo $no; ?></td>
                  <td><?php echo $row['tgl_mulai']; ?></td>
                  <td><?php echo $row['nama_ujian']; ?></td>
                  <td><?php echo $row['nama_soal']; ?></td>
                  <td><?php echo $row['nama_mapel']; ?></td>
                  <td><?php echo $row['nis']; ?></td>
                  <td><?php echo $row['nama_siswa']; ?></td>               
                  <td><?php echo $row['nilai_ujian']; ?></td>
                  <td><?php echo $row['keterangan']; ?></td>
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
