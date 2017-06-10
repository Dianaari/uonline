<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>

    <div class="panel panel-success"> 
        <div class="panel-heading">
           <h1 class="panel-title">Tambah Guru</h1>
        </div> 
        <div class="panel-body"> 
            <form action="<?php echo site_url('Admin/guru/add')?>" method="post">
            <?php validation_errors(); echo $message;?>
                <table class="table table-striped">
                    <tr> 
                        <td>NIP</td>
                        <td><div class="col-sm-6"> 
                                    <input type="text" name="nip" placeholder="Masukkan NIP" required="requreid" class="select2 form-control" value="<?php echo set_value('nip'); ?>">
                                </div>
                        </td> 
                    </tr> 
                    <tr>
                        <td>Nama Guru</td>
                        <td><div class="col-sm-6"> 
                                    <input type="text" name="nama_guru" placeholder="Masukkan nama guru" required="requreid" class="form-control" value="<?php echo set_value('nama_guru'); ?>">
                                </div></td> 
                    </tr> 
                    <tr> 
                        <td>Kontak</td> 
                        <td><div class="col-sm-6"> 
                                    <input type="text" name="no_telp" placeholder="Masukkan nomor telepon" required="requreid" class="form-control" value="<?php echo set_value('no_telp'); ?>">
                                </div></td> 
                    </tr>
					<tr> 
                        <td>Username</td> 
                        <td><div class="col-sm-6"> 
                                    <input type="text" name="username" placeholder="Masukkan Username" required="requreid" class="form-control" value="<?php echo set_value('username'); ?>">
                                </div></td> 
                    </tr> 
					<tr> 
                        <td>Password</td> 
                        <td><div class="col-sm-6"> 
                                    <input type="password" name="password" placeholder="Masukkan password" required="requreid" class="form-control" value="<?php echo set_value('password'); ?>">
                                </div></td> 
                    </tr>
                    <tr> 
                        <td>Level</td> 
                        <td><div class="col-md-6">
                                <select class="select2 form-control" name="level" placeholder="Masukkan level" required="requreid" value="<?php echo set_value('level'); ?>">
                                    <option>---Pilih level---</option>
                                    <option>Admin</option>
                                    <option>Guru</option>
                                    <option>Siswa</option>
                                </select>
                            </div>
                        </td> 
                    </tr>

                    <tr> 
                        <td colspan="2">
                            <a href="<?php echo site_url('Admin/guru/index')?>" class="btn btn-primary"><span class="glyphicon glyphicon-arrow-left"></a>
                            <input type="submit" class="btn btn-success" value="Tambah"> 
                        </td> 
                     </tr> 
                </table>
            </form>
        </div> 
    </div>