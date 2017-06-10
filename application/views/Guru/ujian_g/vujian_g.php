<div class="col-lg-12 row">
  <div class="panel panel-default">
    <div class="panel-body">
      <a href="<?php echo base_url('index.php/home/indexGuru');?>" class="btn btn-sq btn-primary"><i class="glyphicon glyphicon-dashboard g3x"></i><br><br/>Dashboard </a>
      <a href="<?php echo base_url('index.php/Guru/csiswa_g');?>" class="btn btn-sq btn-primary"><i class="glyphicon glyphicon-list-alt g3x"></i><br><br/>Data Siswa </a>
      <a href="<?php echo base_url('index.php/Guru/cmapel_g');?>" class="btn btn-sq btn-primary"><i class="glyphicon glyphicon-list-alt g3x"></i><br><br/>Data Mapel</a>
      <a href="<?php echo base_url('index.php/Guru/cujian_g');?>" class="btn btn-sq btn-warning" class="btn btn-sq btn-primary"><i class="glyphicon glyphicon-file g3x"></i><br><br/>Data Ujian</a>
      <a href="<?php echo base_url('index.php/Guru/csoal_g');?>" class="btn btn-sq btn-primary"><i class="glyphicon glyphicon-file g3x"></i><br><br/>Data Soal </a>
      <a href="<?php echo base_url('index.php/Guru/chasil_g');?>" class="btn btn-sq btn-primary"><i class="glyphicon glyphicon-check g3x"></i><br><br/>Hasil Ujian </a></div>
  </div>
</div>


<div class="row col-md-12 ini_bodi">
  <div class="panel panel-info">
    <div class="panel-heading">Data Ujian
<!--       <div class="tombol-kanan">
        <a class="btn btn-success btn-sm tombol-kanan" href="<?php echo base_url('index.php/Admin/ujian/tampil/');?>"><i class="glyphicon glyphicon-plus"></i> &nbsp;&nbsp;Tambah</a>
      </div> -->
    </div>

    <div class="panel-body">
    <?php echo $this->session->flashdata('Pesan'); ?>
      <table class="table table-bordered" id="datatabel">
        <thead>
          <tr>
            <th width="5%">No</th>
            <th width="15%">Id Ujian</th>
            <th width="35%">Nama Ujian</th>
            <th width="10%">Tahun Ajaran</th>
            <th width="10%">Tanggal Mulai</th>
            <th width="10%">Tanggal Selesai</th>
            <th width="10%">Status Ujian</th>
<!--             <th width="25%">Aksi</th> -->
          </tr>
        </thead>
        <tbody>
            <?php 
                $no=1;
                foreach ($ujian as $row):
            ?>

              <tr>
                  <td><?php echo $no; ?></td>
                  <td><?php echo $row['id_ujian']; ?></td>
                  <td><?php echo $row['nama_ujian']; ?></td>
                  <td><?php echo $row['tahun_ajaran']; ?></td>                 
                  <td><?php echo $row['tgl_mulai']; ?></td>
                  <td><?php echo $row['tgl_selesai']; ?></td>
                  <td><?php echo $row['status_ujian']; ?></td>
<!--                   <td>
                          <a href="<?php echo base_url('index.php/Guru/cujian_g/edit/'.$row['id_ujian']);?>" onclick="" class="btn btn-info btn-xs"><i class="glyphicon glyphicon-pencil" style="margin-left: 0px; color: #fff"></i> &nbsp;&nbsp;Edit</a>
                          <a href="<?php echo base_url('index.php/Guru/cujian_g/delete/'.$row['id_ujian']);?>" onclick="return confirm('Anda Yakin menghapus data ini?')" class="btn btn-danger btn-xs"><i class="glyphicon glyphicon-remove" style="margin-left: 0px; color: #fff"></i> &nbsp;&nbsp;Hapus</a>
                          <a href="<?php echo base_url('index.php/Guru/cujian_g/detail/'.$row['id_ujian']);?>" id="url_kelas" class="btn btn-warning btn-xs"><i class="glyphicon glyphicon-eye-open" style="margin-left: 0px; color: #fff"></i>&nbsp;&nbsp;lihat</a> 
                  </td> -->
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
