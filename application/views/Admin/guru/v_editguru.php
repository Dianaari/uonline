<?php
defined('BASEPATH') or exit('No direct script access allowed');

?>

    <div class="panel panel-success"> 
        <div class="panel-heading">
           <h1 class="panel-title">Edit Guru</h1>
        </div> 
        <div class="panel-body"> 
        <?php echo $this->session->flashdata('pesan'); ?> 
            <form action="<?php echo site_url('Admin/guru/edit').'/'.$editdata[0]['nip']?>" method="post">
                <table class="table table-striped">
                    <tr> 
                        <td>NIP</td>
                        <td><div class="col-sm-6"> 
                                    <input type="text" name="nip" required="requreid" class="select2 form-control" value="<?php echo $editdata[0]['nip'] ?>" readonly="readonly">
                                </div>
                        </td> 
                    </tr> 
                    <tr>
                        <td>Nama Guru</td>
                        <td><div class="col-sm-6"> 
                                    <input type="text" name="nama_guru" required="requreid" class="form-control" value="<?php echo $editdata[0]['nama_guru'] ?>">
                                </div></td> 
                    </tr> 
                    <tr> 
                        <td>Kontak</td> 
                        <td><div class="col-sm-6"> 
                                    <input type="text" name="no_telp" required="requreid" class="form-control" value="<?php echo $editdata[0]['no_telp'] ?>">
                                </div></td> 
                    </tr>
					<tr> 
                        <td>Username</td> 
                        <td><div class="col-sm-6"> 
                                    <input type="text" name="username" required="requreid" class="form-control" value="<?php echo $editdata[0]['username'] ?>" readonly="readonly">
                                </div></td> 
                    </tr> 
					<tr> 
                        <td>Password</td> 
                        <td><div class="col-sm-6"> 
                                    <input type="text" name="password" required="requreid" class="form-control" value="<?php echo $editdata[0]['password'] ?>" readonly="readonly">
                                </div></td> 
                    </tr>
                    <tr> 
                        <td>Level</td> 
                        <td><div class="col-md-6">
                                <select class="select2 form-control" name="level" required="requreid">
                                    <option value="<?php echo $editdata[0]['level'];?>"><?php echo $editdata[0]['level']?></option>
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
                            <input type="submit" name="submit" class="btn btn-success" value="Simpan"> 
                        </td> 
                     </tr> 
                </table>
            </form>
        </div> 
    </div>

