<!-- <link rel="stylesheet" href="<?=BASEURL?>css/ukuranfoto.css"> -->
<?php
    if(!isset($_SESSION['data']))
    {
        die("Anda Belum Login!");
    }
?>



    
    
<center>
<div style="margin-top:100px;margin-bottom:100px;">

<h2>Tabel Pengaduan</h2><br>
<table class="table table-striped table-bordered border-primary" style="width:80%;">    
<tr class=" p-3 mb-2 bg-primary text-white">
        <th>no</th>
        <th>nik</th>
        <th>isi laporan</th>
        <th>tgl pengaduan</th>
        <th>foto</th>
        <th>status</th>
        <th>aksi</th>
    </tr>
<?php $no=1;
foreach ($data['isipengaduan'] as $pengaduan):?>
    <tr>
    <td><?=$no++;?></td>
    <td><?=$pengaduan['nik'];?></td>
    <td><?=$pengaduan['isi_laporan'];?></td>
    <td><?=$pengaduan['tgl_pengaduan'];?></td>
    <td><img class="ukuranfoto" src="<?=BASEURL.'/img/'.$pengaduan['foto'];?>" alt=""></td>
    <td><?=$pengaduan['status'];?></td>
    <td><a class="btn btn-primary"href="<?=BASEURL?>Masyarakat/getidtanggapan/<?=$pengaduan['id_pengaduan'];?>">Detail</a></td>


    
    <?php endforeach;?>
</table>
