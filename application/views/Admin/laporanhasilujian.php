<style>
    table{
        border-collapse: collapse;
        margin: auto;
    }
    table thead{
        background: #eff0f2;
    }
    table th{
        padding: 5px;
        margin: 3px;
    }
    table td{
        padding: 5px;
        margin: 3px;
    }
    h2,h3{
        margin: 0;
        padding: 0;
    }

</style>


<strong>Sistem Ujian Online SMA Negeri 1 Gombong</strong>
<p><br>
<center>
    <h2>SMA NEGERI 1 GOMBONG</h2>
    <br>Jalan Sempor Lama No.64, Semanding, Gombong, Kabupaten Kebumen, Jawa Tengah, 54414
    <br>Telp. (0287) 471170 / Fax. (0274) 561374
    <br><br>
    <hr>
    <h3>Laporan Hasil Ujian</h3>
    <p>
</center>
<Table class="table table-striped" border="0.5px">
    <thead>
        <tr>
            <th>No.</th>
            <th>Nama Ujian</th>
            <th>Mata Pelajaran</th>
            <th>NIS</th>
            <th>Nama Siswa</th>
			<th>Nilai</th>
			<th>Hasil</th>
        </tr>
    </thead>
    <tbody>
        <?php $no=0; foreach($hasil as $row): $no++;?>
        <tr>
            <td><?php echo $no;?></td>
            <td><?php echo $row['nama_ujian'];?></td>
            <td><?php echo $row['nama_mapel'];?></td>
            <td><?php echo $row['nis'];?></td>
            <td><?php echo $row['nama_siswa'];?></td>
			<td><?php echo $row['nilai_ujian'];?></td>
			<td><?php echo $row['keterangan'];?></td>
        </tr>
        <?php endforeach;?>
    </tbody>
</Table>

<script>
