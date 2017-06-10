<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>

    <div class="panel panel-success"> 
        <div class="panel-heading">
           <h1 class="panel-title">Edit Pertanyaan</h1>
        </div>

        <div class="panel-body">
        <?php echo $this->session->flashdata('Pesan'); ?> 
<!--             <form action="<?php echo site_url('Admin/pertanyaan/edit/'. $id_soal)?>" method="post"> -->
          <form action="<?php echo site_url('Admin/pertanyaan/edit/'. $id_soal)?>" method="post" enctype="multipart/form-data" />
           <?php echo form_open_multipart('Admin/pertanyaan/edit/'.$id_soal);  ?>
             

              <div class="panel-heading">
                  <h class="panel-title">Tambah Pertanyaan Baru</h>
              </div>

              <input type="hidden" name="id_soal" value="<?php echo $id_soal; ?>">
              <div class="form-group fgsoal">
                  <div class="col-lg-2"><label>Tipe Pertanyaan</label> </div>
                      <div class="col-lg-3">
                          <input type="radio" name="jenis_pertanyaan" class="type" value="Single" checked>
                          <label>Single answer</label>
                      </div>
                      <div class="col-lg-3">
                          <input type="radio" name="jenis_pertanyaan" class="type" value="Double" > 
                          <label>Multiple answer</label>
                      </div>
                      <div class="col-lg-3">
                          <input type="radio" name="jenis_pertanyaan" class="type" value="trueFalse"> 
                          <label>True/False</label>
                      </div>         
              </div>
              
              <div class="clearfix"></div>
              <div class="form-group fgsoal">
                <div class="col-md-2"><label>Teks Pertanyaan</label></div>
                    <div class="col-md-3">
                        <input type="file" name="gambar_pertanyaan" id="gambar_soal" class="btn btn-info upload">

                    </div> 
                    <div class="col-md-7">
                        <textarea class="form-control" id="editornya" style="height: 30px;" name="pertanyaan" value="<?php echo $editdata[0]['pertanyaan'] ?>"> </textarea>
                    </div>
              </div>
              <br><br>

              <div class="clearfix"></div>
              <div class="form-group fgsoal opsi">
                <div class="col-md-2"><label>Opsi A</label></div>
                    <div class="col-md-3">
                        <input type="file" name="gambar1" id="gambar_soal" class="btn btn-success upload"><br>
                        <input type="hidden" name="opsi[]" value="A">
                    </div>
                  <div class="col-md-7">
                        <textarea class="form-control" id="editornya_a" style="height: 30px" name="isi_opsi[]" value="<?php echo $editdata[0]['isi_opsi[]'] ?>"> </textarea>
                  </div>
              </div>

              <div class="clearfix"></div>
              <div class="form-group fgsoal opsi">
                <div class="col-md-2"><label>Opsi B</label></div>
                    <div class="col-md-3">
                        <input type="file" name="gambar2" id="gambar_soal" class="btn btn-success upload"><br>
                        <input type="hidden" name="opsi[]" value="B">
                    </div>
                  <div class="col-md-7">
                        <textarea class="form-control" id="editornya_b" style="height: 30px" name="isi_opsi[]" value="<?php echo $editdata[0]['isi_opsi[]'] ?>"> </textarea>
                  </div>
              </div>

              <div class="clearfix"></div>
              <div class="form-group fgsoal opsi">
                <div class="col-md-2"><label>Opsi C</label></div>
                    <div class="col-md-3">
                        <input type="file" name="gambar3" id="gambar_soal" class="btn btn-success upload"><br>
                        <input type="hidden" name="opsi[]" value="C">
                    </div>
                  <div class="col-md-7">
                        <textarea class="form-control" id="editornya_c" style="height: 30px" name="isi_opsi[]" value="<?php echo $editdata[0]['isi_opsi[]'] ?>"> </textarea>
                  </div>
              </div>

              <div class="clearfix"></div>
              <div class="form-group fgsoal opsi">
                <div class="col-md-2"><label>Opsi D</label></div>
                    <div class="col-md-3">
                        <input type="file" name="gambar4" id="gambar_soal" class="btn btn-success upload"><br>
                        <input type="hidden" name="opsi[]" value="D">
                    </div>
                  <div class="col-md-7">
                        <textarea class="form-control" id="editornya_d" style="height: 30px" name="isi_opsi[]" value="<?php echo $editdata[0]['isi_opsi[]'] ?>"> </textarea>
                  </div>
              </div>

              <div class="clearfix"></div>
              <div class="form-group fgsoal opsi">
                <div class="col-md-2"><label>Opsi E</label></div>
                    <div class="col-md-3">
                        <input type="file" name="gambar5" id="gambar_soal" class="btn btn-success upload"><br>
                        <input type="hidden" name="opsi[]" value="E">
                    </div>
                  <div class="col-md-7">
                        <textarea class="form-control" id="editornya_e" style="height: 30px" name="isi_opsi[]" value="<?php echo $editdata[0]['isi_opsi[]'] ?>"> </textarea>
                  </div>
              </div>

<!--               <div id="n" class="clearfix"></div>
              <button type="button" class="btn btn-success btn-xs" onclick="add()"><i class="glyphicon glyphicon-plus" style="margin-left: 0px; color: #fff"></i>&nbsp;&nbsp;Tambah Opsi</button> 
 -->
            <div class="clearfix"></div>
            <div class="form-group fgsoal">
              <div class="col-md-2"><label>Kunci Jawaban</label></div>
              <div class="col-md-2">
                <select class="form-control" name="jawaban" id="jawaban" required>
                    <option><?php echo $editdata[0]['jawaban'];?></option>
                    <option value="0">A</option>
                    <option value="1">B</option>
                    <option value="2">C</option>
                    <option value="3">D</option>
                    <option value="4">E</option>

                </select>
              </div>
              <button type="button" id="shhd" class="btn btn-success btn-xm" onclick="add_opsi()"><i class="glyphicon glyphicon-plus" style="margin-left: 0px; color: #fff"></i></button> 

            </div>
            <div id="m" class="clearfix"></div>
            

            <div class="clearfix"></div>
            <div class="form-group" style="margin-top: 20px">
              <div class="col-md-12">
                <button type="submit" class="btn btn-info"><i class="fa fa-check"></i> Simpan</button>
                <a href="<?php echo site_url('Admin/pertanyaan/index')?>" class="btn btn-default"><i class="fa fa-minus-circle"></i> Kembali</a>
              </div>
            </div>

			</form>
		  </div>
    </div>


<script>
var nomor=1;
function add_opsi(){
  var chrname = String.fromCharCode(97+nomor);
  nomor++;
  $('#m').append('<div class="clearfix"></div><div class="form-group fgsoal"><div class="col-md-2"><label>Kunci Jawaban</label></div><div class="col-md-2"><select class="form-control" name="jawaban" id="jawaban_'+chrname+'" required><option>A</option><option>B</option><option>C</option><option>D</option><option>E</option></select></div></div>');
}
</script>