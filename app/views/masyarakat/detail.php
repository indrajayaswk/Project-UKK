<?php
    if(!isset($_SESSION['data']))
    {
        die("Anda Belum Login!");
    }
?>


<center>
<div style="margin-top:100px;margin-bottom:100px;">

<h2>Pengaduan</h2><br>
<table class="table table-striped table-bordered border-primary " style="width:80%;">
<tr class=" p-3 mb-2 bg-primary text-white">
    <th>Id Tanggapan</th>
    <th>Id Pengaduan</th>
    <th>Tanggal Pengaduan</th>
    <th>Isi Tanggapan</th>
    
</tr>    
<tr >
<td><?=$data['tanggapan']['id_tanggapan']?></td>
<td><?=$data['tanggapan']['id_pengaduan']?></td>
<td><?=$data['tanggapan']['tgl_tanggapan']?></td>
<td><?=$data['tanggapan']['tanggapan']?></td>

</tr>
</table>



            <a class="btn btn-primary"href="<?=BASEURL;?>masyarakat">Balik Ke Halaman Awal</a>


