<?php
defined('BASEPATH') or exit('No direct script access allowed');

?>

<div class="panel panel-success"> 
        <div class="panel-heading">
           <h1 class="panel-title">Detail Ujian</h1>
        </div> 
        <div class="panel-body"> 
           
            <table class="table table-striped">
                <tr> 
                    <td>Kode Ujian</td> 
                    <td><?php echo $ujian['id_ujian'] ?></td> 
                </tr>
                <tr> 
                    <td>Nama Ujian</td> 
                    <td><?php echo $ujian['nama_ujian']; ?></td> 
                </tr>
                <tr> 
                    <td>Tahun Ajaran</td>
                    <td><?php echo $ujian['tahun_ajaran']; ?></td> 
                </tr> 
                <tr>
                    <td>Tanggal Mulai</td>
                    <td><?php echo $ujian['tgl_mulai']; ?></td> 
                </tr> 
                <tr> 
                    <td>Tanggal Selesai</td> 
                    <td><?php echo $ujian['tgl_selesai']; ?></td> 
                </tr>
                <tr> 
                    <td>Status Ujian</td> 
                    <td><?php echo $ujian['status_ujian']; ?></td> 
                </tr>
            </table>

        <div class="panel-heading">
            <h class="panel-title">DAFTAR PESERTA UJIAN</h>
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

              </tr>

            <?php 
              $no++;
              endforeach; 
            ?>
        </tbody>
      </table>

      </div> 

            <a href="<?php echo base_url() ?>index.php/Admin/ujian/index" class="btn btn-sm btn-primary"><i class="glyphicon glyphicon-arrow-left"></i> Kembali</a>
        </div> 
    </div>