<?php
defined('BASEPATH') or exit('No direct script access allowed');

?>

    <div class="panel panel-success"> 
        <div class="panel-heading">
           <h1 class="panel-title">Edit Siswa</h1>
        </div> 
        <div class="panel-body"> 
        <?php echo $this->session->flashdata('pesan'); ?> 
            <form action="<?php echo site_url('Guru/csiswa_g/edit').'/'.$editdata[0]['nis']?>" method="post">
                <table class="table table-striped">
                    <tr> 
                        <td>NIS</td>
                        <td><div class="col-sm-6"> 
                                    <input type="text" name="nis" placeholder="NIS" required="requreid" class="select2 form-control" value="<?php echo $editdata[0]['nis'] ?>">
                                </div>
                        </td> 
                    </tr> 
                    <tr>
                        <td>Nama Siswa</td>
                        <td><div class="col-sm-6"> 
                                    <input type="text" name="nama_siswa" placeholder="Nama Siswa" required="requreid" class="form-control" value="<?php echo $editdata[0]['nama_siswa'] ?>">
                                </div></td> 
                    </tr> 
                    <tr> 
                        <td>Gender</td> 
                        <td><div class="col-md-6">
                                <select class="select2 form-control" name="jenkel" placeholder="Jenis Kelamin" required="requreid" value="<?php echo $editdata[0]['jenkel'] ?>">
                                    <option>---Pilih Gender---</option>
                                    <?php foreach ($jenkel as $row) { ?>

                                    <option value="<?php echo $row['jenkel']; ?>" <?php echo $editdata[0]['jenkel'] == $row->jenkel ? 'selected' : ''; ?>> <?php echo $row['jenkel']; ?> </option>

                                    <?php } ?>

                                    <option>P</option>
                                    <option>L</option>

                                </select>
                            </div>
                        </td> 
                    </tr>
                    <tr> 
                        <td>Kelas</td> 
                        <td><div class="col-md-6">
                                <select class="select2 form-control" name="kelas" data-placeholder="Pilih Kelas" required="requreid" value="<?php echo $editdata[0]['kelas'] ?>">
                                    <option>---Pilih Kelas---</option>
                                    <?php foreach ($kelas as $row) { ?>

                                    <option value="<?php echo $row['id_kelas']; ?>" <?php echo $editdata[0]['id_kelas'] == $row['id_kelas'] ? 'selected' : ''; ?>> <?php echo $row['kelas']; ?> </option>

                                    <?php } ?>
                                    
                                </select>
                            </div>
                        </td> 
                    </tr>

                    <tr> 
                        <td>Tahun Ajaran</td> 
                        <td><div class="col-md-6">
                                <select class="select2 form-control" name="tahun" placeholder="Pilih Tahun Ajaran" required="requreid" value="<?php echo $editdata[0]['tahun'] ?>">
                                    <option>---Pilih Tahun Ajaran---</option>
                                    <?php foreach ($tahun as $row) { ?>

                                    <option value="<?php echo $row->id_tahun; ?>" <?php echo $editdata[0]['id_tahun'] == $row->id_tahun ? 'selected' : ''; ?>> <?php echo $row->tahun_ajaran; ?> </option>

                                    <?php } ?>

                                </select>
                            </div>
                        </td> 
                    </tr>

                    <tr> 
                        <td>Username</td> 
                        <td><div class="col-sm-6"> 
                                    <input type="text" name="username" placeholder="username" required="requreid" class="form-control" value="<?php echo $editdata[0]['username'] ?>">
                                </div></td> 
                    </tr>  
                    <tr> 
                        <td>Password</td> 
                        <td><div class="col-sm-6"> 
                                    <input type="text" name="password" placeholder="password" required="requreid" class="form-control" value="<?php echo $editdata[0]['password'] ?>">
                                </div></td> 
                    </tr> 
                    <tr> 
                        <td>Level</td> 
                        <td><div class="col-md-6">
                                <select class="select2 form-control" name="level" placeholder="Masukkan level" required="requreid" value="<?php echo $editdata[0]['level'] ?>">
                                    <option>Admin</option>
                                    <option>Guru</option>
                                    <option>Siswa</option>
                                </select>
                            </div>
                        </td> 
                    </tr> 

                    <tr> 
                        <td colspan="2">
                            <a href="<?php echo site_url('Guru/csiswa_g/index')?>" class="btn btn-primary"><span class="glyphicon glyphicon-arrow-left"></a>
                            <input type="submit" name="submit" class="btn btn-success" value="Simpan"> 
                        </td> 
                     </tr> 
                </table>
            </form>
        </div> 
    </div>

