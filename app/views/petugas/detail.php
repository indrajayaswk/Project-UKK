<?php
    if(!isset($_SESSION['petugas']))
    {
        die("Anda Belum Login!");
    }
?>


    
<center>
<div style="margin-top:100px;margin-bottom:100px;">
<h2>Finalisasi Pengaduan</h2><br>

<table class="table table-striped table-bordered border-primary" style="width:80%;">    
<tr class=" p-3 mb-2 bg-primary text-white">
        <th>no</th>
        <th>id_pengaduan</th>
        <th>tgl_pengaduan</th>
        <th>nik</th>
        <th>isi_laporan</th>
        <th>foto</th>
        <th>Aksi</th>
    </tr>
<?php $no=1;?>

        <td><?=$no++;?></td>
        <td><?=$data['pengaduan']['id_pengaduan']?></td>
        <td><?=$data['pengaduan']['tgl_pengaduan']?></td>
        <td><?=$data['pengaduan']['nik']?></td>
        <td><?=$data['pengaduan']['isi_laporan']?></td>
        <td><img class="ukuranfoto"src="<?= BASEURL.'img/'.$data['pengaduan']["foto"]; ?>"></td>
        <td>
            <a href="<?=BASEURL.'Pengaduan/prosesupdatestatus/'.$data['pengaduan']['id_pengaduan']?>"type="submit" class="btn btn-primary">Selesai</a>
            <a href="<?=BASEURL?>petugas" type="submit" class="btn btn-warning">Cancle</a>
        </td>
</table>
</div>