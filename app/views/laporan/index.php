


<center> 
<div style="margin-top:100px;margin-bottom:100px;">
                 <h1 class="h4 text-gray-900 mb-4">Tabel Laporan</h1>
<div style="text-align:left; margin:0 0 0 10%;">
    <a class="btn btn-lg btn-primary " type="submit" onclick="window.print();">Cetak</a>
</div>

<table>
<table class="table table-striped table-bordered border-primary" style="width:80%;">
    
<tr class=" p-3 mb-2 bg-primary text-white">
        <th>No</th>
        <th>id</th>
        <th>Tanggal</th>
        <th>isi Laporan</th>
        <th>Foto</th>
        <th>status</th>
    </tr>
<?php
    $no=1;
    foreach ($data['pengaduan'] as $pengaduan):?>
    <tr>
        <td><?=$no++?></td>
        <td><?=$pengaduan['nik']?></td>
        <td><?=$pengaduan['isi_laporan']?></td>
        <td><?=$pengaduan['tgl_pengaduan']?></td>
        <td><img class="ukuranfoto" src="<?=BASEURL.'/img/'.$pengaduan['foto'];?>" alt=""></td>
        <td><?=$pengaduan['status']?></td>
    </tr>
    <?php endforeach;?>
</table>


<form method="POST">
        <label for="">Pilih Bulan</label>
        <input type="month" name="bulan" value="<?= isset($_POST['bulan']) ? $_POST['bulan'] : '' ?>">
        <button type="submit" formaction="<?=BASEURL.'laporan/laporanpilih'?>">Pilih</button>
        
</form>


