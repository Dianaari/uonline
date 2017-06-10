<?php
defined('BASEPATH') or exit('No direct script access allowed');

?>

<div class="panel panel-success"> 
        <div class="panel-heading">
           <h1 class="panel-title">Detail Guru</h1>
        </div> 
        <div class="panel-body"> 
           
            <table class="table table-striped">
                <tr> 
                    <td>NIP</td> 
                    <td><?php echo $guru['nip'] ?></td> 
                </tr>
                <tr> 
                    <td>Nama Guru</td> 
                    <td><?php echo $guru['nama_guru']; ?></td> 
                </tr>
                <tr> 
                    <td>Kontak</td>
                    <td><?php echo $guru['no_telp']; ?></td> 
                </tr> 
                <tr>
                    <td>Username</td>
                    <td><?php echo $guru['username']; ?></td> 
                </tr> 
                <tr> 
                    <td>Password</td> 
                    <td><?php echo $guru['password']; ?></td> 
                </tr>
                <tr> 
                    <td>Level</td> 
                    <td><?php echo $guru['level']; ?></td> 
                </tr>
            </table>

            <a href="<?php echo base_url() ?>index.php/Admin/guru/index" class="btn btn-sm btn-primary"><i class="glyphicon glyphicon-arrow-left"></i> Kembali</a>
        </div> 
    </div>