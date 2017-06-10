<?php
defined('BASEPATH') or exit('No direct script access allowed');

?>

<div class="panel panel-success"> 
        <div class="panel-heading"> Detail Soal dan Pertanyaan
                 <div class="tombol-kanan">
                  <a href="<?php echo site_url('Admin/soal/index')?>" class="btn btn-sm btn-primary"><span class="glyphicon glyphicon-arrow-left"></a> &nbsp;&nbsp;
                  <a class="btn btn-info btn-sm" style="float:right" href=""><i class="glyphicon glyphicon-print"></i> Cetak</a>
                 </div>
        </div> 
        <div class="panel-body"> 
           
            <table class="table table-striped">
                <tr> 
                    <td>Id Soal</td> 
                    <td><?php echo $soal['id_soal'] ?></td> 
                </tr>
                <tr> 
                    <td>Nama Ujian</td> 
                    <td><?php echo $soal['nama_ujian']; ?></td> 
                </tr>
                <tr> 
                    <td>Nama Soal</td>
                    <td><?php echo $soal['nama_soal']; ?></td> 
                </tr> 
                <tr>
                    <td>Nama Mapel</td>
                    <td><?php echo $soal['nama_mapel']; ?></td> 
                </tr> 
                <tr> 
                    <td>Kelas</td> 
                    <td><?php echo $soal['kelas']; ?></td>
                </tr>
                <tr> 
                    <td>Waktu Mulai</td> 
                    <td><?php echo $soal['waktu_mulai']; ?></td> 
                </tr>
                <tr> 
                    <td>Waktu Akhir</td> 
                    <td><?php echo $soal['waktu_akhir']; ?></td> 
                </tr>
            </table>


        <div class="panel-heading">
            <h class="panel-title">DAFTAR PERTANYAAN</h>
        </div>

        <div class="panel-body">
            <table class="table ">
            <tbody>
              <?php 
                    $no=1;
                    $hrf='A';
                    $ask="";
                    foreach ($pertanyaan as $row):
                if($ask!=$row['pertanyaan']){
                    echo "<tr><td>"."(".$no.") ".$row['pertanyaan']."</td></tr>";
                    echo "<tr><td>"."(".$hrf.") "."<label>".$row['isi_opsi']."</label></td></tr>";
                    $no++;
                    $hrf++;
                }else{
                    echo "<tr><td>"."(".$hrf.") "."<label>".$row['isi_opsi']."</label></td></tr>";
                    $hrf++;
                }
                    $ask = $row['pertanyaan'];
                  
                  endforeach;
              ?>
            </tbody>
            </table>
    </div>
  </div>
</div>
