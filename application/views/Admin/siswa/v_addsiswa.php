<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>

    <div class="panel panel-success"> 
        <div class="panel-heading">
           <h1 class="panel-title">Tambah Siswa</h1>
        </div> 
        <div class="panel-body"> 
            <form action="<?php echo site_url('Admin/siswa/add')?>" method="post">
            <?php echo validation_errors(); echo $message;?>
                <table class="table table-striped">
                    <tr> 
                        <td>NIS</td>
                        <td><div class="col-sm-6"> 
                                    <input type="text" name="nis" placeholder="Masukkan NIS" required="requreid" class="select2 form-control" value="<?php echo set_value('nis'); ?>">
                                </div>
                        </td> 
                    </tr> 
                    <tr>
                        <td>Nama Siswa</td>
                        <td><div class="col-sm-6"> 
                                    <input type="text" name="nama_siswa" placeholder="Masukkan nama siswa" required="requreid" class="form-control" value="<?php echo set_value('nama_siswa'); ?>">
                                </div></td>
                    </tr> 
                    <tr> 
                        <td>Gender</td> 
                        <td><div class="col-md-6">
                                <select class="select2 form-control" name="jenkel" placeholder="Masukkan jenis kelamin" required="requreid" value="<?php echo set_value('jenkel'); ?>">
                                    <option>---Pilih Gender---</option>
                                    <option>P</option>
                                    <option>L</option>

                                </select>
                            </div>
                        </td> 
                    </tr>
                    <tr> 
                        <td>Kelas</td> 
                        <td><div class="col-md-6">
                                <select class="select2 form-control" name="kelas" placeholder="Pilih kelas" required="requreid" value="<?php echo set_value('kelas'); ?>">
                                    <option>---Pilih Kelas---</option>
                                    <?php foreach ($kelas as $row) { ?>

                                    <option value="<?php echo $row['id_kelas']; ?>"> <?php echo $row['kelas']; ?> </option>
                                    
                                    <?php } ?>

                                </select>
                            </div>
                        </td> 
                    </tr>

                     <tr> 
                        <td>Tahun Ajaran</td> 
                        <td><div class="col-md-6">
                                <select class="select2 form-control" name="tahun" placeholder="Pilih tahun ajaran" required="requreid" value="<?php echo set_value('tahun'); ?>">
                                    <option>---Pilih Tahun Ajaran---</option>
                                    <?php foreach ($tahun as $row) { ?>

                                    <option value="<?php echo $row->id_tahun; ?>"> <?php echo $row->tahun_ajaran; ?> </option>
                                    
                                    <?php } ?>

                                </select>
                            </div>
                        </td> 
                    </tr> 

					<tr> 
                        <td>Username</td> 
                        <td><div class="col-sm-6"> 
                                    <input type="text" name="username" placeholder="Masukkan username" required="requreid" class="form-control" value="<?php echo set_value('username'); ?>">
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
                            <a href="<?php echo site_url('Admin/siswa/index')?>" class="btn btn-primary"><span class="glyphicon glyphicon-arrow-left"></a>
                            <input type="submit" class="btn btn-success" value="Tambah"> 
                        </td> 
                     </tr> 
                </table>
            </form>
        </div> 
    </div