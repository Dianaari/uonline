<?php
defined('BASEPATH') or exit('No direct script access allowed');

?>

<div class="panel panel-success"> 
        <div class="panel-heading">
           <h1 class="panel-title">Detail Siswa</h1>
        </div> 
        <div class="panel-body"> 
            <table class="table table-striped">
                <tr> 
                    <td>NIS</td> 
                    <td><?php echo $siswa['nis'] ?></td> 
                </tr>
                <tr> 
                    <td>Nama Siswa</td> 
                    <td><?php echo $siswa['nama_siswa']; ?></td> 
                </tr>
                <tr> 
                    <td>Gender</td>
                    <td><?php echo $siswa['jenkel']; ?></td> 
                </tr> 
                <tr>
                    <td>Kelas</td>
                    <td><?php echo $siswa['kelas']; ?></td> 
                </tr>
                <tr>
                    <td>Tahun Ajaran</td>
                    <td><?php echo $siswa['tahun_ajaran']; ?></td> 
                </tr> 
                <tr> 
                    <td>Username</td> 
                    <td><?php echo $siswa['username']; ?></td> 
                </tr>
                <tr> 
                    <td>Password</td> 
                    <td><?php echo $siswa['password']; ?></td> 
                </tr>
                <tr> 
                    <td>level</td> 
                    <td><?php echo $siswa['level']; ?></td> 
                </tr>
            </table>

            <a href="<?php echo base_url() ?>index.php/Guru/csiswa_g/index" class="btn btn-sm btn-primary"><i class="glyphicon glyphicon-arrow-left"></i> Kembali</a>
        </div> 
    </div>