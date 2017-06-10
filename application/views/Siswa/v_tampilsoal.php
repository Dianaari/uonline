<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html lang="en">
<head>
<style>
.img {width: 100px;
      height:100px;}
</style>
</head>
<body>

<div class="row col-md-12">
  <div class="panel panel-info">
    <div class="panel-heading">Info (Sisa Waktu Anda) </div>
    <div id="clock"></div>
    <br><br><br><br>

</div>
</div>

<div class="row col-md-12">
  <div class="panel panel-info">
    <div class="panel-heading">Soal Pilihan Ganda</div>
        <div class="panel-body">
            <table class="table table-striped">

        <tbody>
          <?php 
                $no=1;
                $ask="";
                foreach ($pertanyaan as $row):
            if($ask!=$row['pertanyaan']){
/*                echo "<tr><td><img src='<?php echo base_url('/assets/img/pertanyaan/')".$row['gambar']."'></td></tr>"; */        
                echo "<tr><td>(".$no.")".$row['pertanyaan']."<img src='http://localhost/ta/assets/img/pertanyaan/".$row['gambar']."' style='width: 300px; height: 280px;'></td></tr>";
/*                echo "<tr><td><img src='http://localhost/ta/assets/img/pertanyaan/".$row['gambar']."' style='width: 300px; height: 280px;'></td></tr>";
*/                echo "<tr><td><input type='radio' name='opsi' class='type' value=''><label>".$row['isi_opsi']."</label></td></tr>";
                $no++;
             }else{
                echo "<tr><td><input type='radio' name='opsi' class='type' value=''><label>".$row['isi_opsi']."</label></td></tr>";

          }
              $ask = $row['pertanyaan'];
              
              endforeach;
            ?>

        </tbody>

            </table>
        </div>
                <div class="panel-footer">
                    <a class="action back btn btn-info btn-lg" rel="0" onclick="return back();"><i class="glyphicon glyphicon-chevron-left"></i> Back</a>
                    <a class="action next btn btn-info btn-lg" rel="2" onclick="return next();"><i class="glyphicon glyphicon-chevron-right"></i> Next</a>
                    <a href="<?php echo site_url('Siswa/tampilsoal/nilai/')?>" class="action submit btn btn-danger btn-lg pull-right" onclick=""><i class="glyphicon glyphicon-stop"></i> Submit! </a>
                    <input type="hidden" name="jml_soal" value="">
                </div>

    </div>
</div>

<script type="text/javascript">
  $('#clock').countdown("2020/10/10", function(event) {
  var totalHours = event.offset.totalDays * 24 + event.offset.hours;
  $(this).html(event.strftime(totalHours + ' hr %M min %S sec'));
});
</script>
