<?php
defined('BASEPATH') or exit('No direct script access allowed');

?>

    <div class="panel panel-success"> 
        <div class="panel-heading">
           <h1 class="panel-title">Edit Kelas</h1>
        </div> 
        <div class="panel-body"> 
        <?php echo $this->session->flashdata('pesan'); ?> 
            <form action="<?php echo site_url('Admin/kelas/edit').'/'.$editdata[0]['id_kelas']?>" method="post">
                <table class="table table-striped">
                    <tr> 
                        <td>Jenjang Kelas</td> 
                        <td><div class="col-md-6">
                                <select class="select2 form-control" name="jenjang" required="requreid">
                                    <option value="<?php echo $editdata[0]['jenjang'];?>"><?php echo $editdata[0]['jenjang']?></option>
                                    <option>---Pilih jenjang kelas---</option>
                                    <option>X</option>
                                    <option>XI</option>
                                    <option>XII</option>
                                </select>
                            </div>
                        </td> 
                    </tr>
                    <tr> 
                        <td>Jenis Kelas</td> 
                        <td><div class="col-md-6">
                                <select class="select2 form-control" name="jenis_kelas" required="requreid">
                                    <option value="<?php echo $editdata[0]['jenis_kelas'];?>"><?php echo $editdata[0]['jenis_kelas']?></option>
                                    <option>---Pilih Jenis kelas---</option>
                                    <option>MIPA</option>
                                    <option>IPS</option>

                                </select>
                            </div>
                        </td> 
                    </tr> 
                    <tr>
                        <td>Nama Kelas</td> 
                        <td><div class="col-sm-6"> 
                                    <input type="text" name="nama_kelas" placeholder="Nama Kelas" required="requreid" class="form-control" value="<?php echo $editdata[0]['nama_kelas'] ?>">
                                </div></td> 
                    </tr> 

                    <tr> 
                        <td colspan="2">
                            <a href="<?php echo site_url('Admin/kelas/index')?>" class="btn btn-primary"><span class="glyphicon glyphicon-arrow-left"></a>
                            <input type="submit" name="submit" class="btn btn-success" value="Simpan"> 
                        </td> 
                     </tr> 
                </table>
            </form>
        </div> 
    </div>

