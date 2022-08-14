<?php
    if(!isset($_SESSION['petugas']))
    {
        die("Anda Belum Login!");
    }
?>

<center>
<div style="margin-top:100px;margin-bottom:100px;">
<h2>Tabel Petugas</h2><br>
<table class="table table-striped table-bordered border-primary" style="width:80%;">    
<tr class=" p-3 mb-2 bg-primary text-white">
        <th >no</th>
        <th>nama</th>
        <th>username</th>
        <th>telphon</th>
        <th>aksi</th>

    </tr>
<?php $no=1; 
foreach ($data['listpetugas'] as $listpetugas):?>
    <tr>
    <td><?=$no++;?></td>
    <td><?=$listpetugas['nama_petugas'];?></td>
    <td><?=$listpetugas['username'];?></td>
    <td><?=$listpetugas['telp'];?></td> 
    <td style="align:center;">
        <a class="btn btn-warning" href="<?=BASEURL;?>Admin/edit/<?=$listpetugas['id_petugas'];?>">Edit</a>
        <a class="btn btn-danger" href="<?=BASEURL;?>Admin/proseshapuspetugas/<?=$listpetugas['id_petugas'];?>">Hapus</a>
    </td>
    


    
    <?php endforeach;?>
</table>



