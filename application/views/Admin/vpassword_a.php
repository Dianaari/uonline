<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>

    <div class="panel panel-success"> 
        <div class="panel-heading">
           <h1 class="panel-title">Ubah Password</h1>
        </div> 
        <div class="panel-body"> 
            <form action="<?php echo site_url('Admin/password_a/ubahpassword')?>" method="post">
                <?php echo $this->session->flashdata('message');?>
                <table class="table table-striped">
					<tr> 
                        <td>Username</td> 
                        <td><div class="col-sm-6"> 
                                    <input type="text" name="username" class="form-control" value="<?php echo $username ?>" readonly="readonly">
                                </div></td> 
                    </tr> 
					<tr> 
                        <td>Password Lama</td> 
                        <td><div class="col-sm-6"> 
                                    <input type="password" name="password" placeholder="Masukkan password lama" class="form-control" required>
                                </div></td> 
                    </tr>
                    <tr> 
                        <td>Password Baru</td> 
                        <td><div class="col-sm-6"> 
                                    <input type="password" name="passbaru" placeholder="Masukkan password baru" class="form-control" required>
                                </div></td> 
                    </tr>
                    <tr> 
                        <td>Password Baru (Ulangi)</td> 
                        <td><div class="col-sm-6"> 
                                    <input type="password" name="passbaru1" placeholder="Ulangi password baru" class="form-control" required>
                                </div></td> 
                    </tr>

                    <tr> 
                        <td colspan="2">
                            <a href="<?php echo $this->agent->referrer();?>" class="btn btn-primary"><span class="glyphicon glyphicon-arrow-left"></a>
                            <input type="submit" class="btn btn-success" value="Simpan"> 
                        </td> 
                     </tr> 
                </table>
            </form>
        </div> 
    </div>