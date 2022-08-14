<center style="margin:0 10% 0 10% ;"> 
<div style="margin-top:50px;margin-bottom:100px;">
                 <h1 class="h4 text-gray-900 mb-4">Tabel Laporan</h1>
                 
<div> 
    <a class="btn btn-lg btn-primary " type="submit" onclick="window.print();">Cetak</a>
    <a class="btn btn-lg btn-primary " href="<?=BASEURL?>laporan">Balik</a>
</div><br>


<table class="table table-bordered ">

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


