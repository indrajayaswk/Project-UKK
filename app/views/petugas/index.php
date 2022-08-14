<?php
    if(!isset($_SESSION['petugas']))
    {
        die("Anda Belum Login!");
    }
?>



    
<center>
<div style="margin-top:100px;margin-bottom:100px;">
    <h2>Tabel Pengaduan</h2>


    <table style="margin:0 59% 0 0; width:auto;" class="table table-striped table-bordered border-primary">

        <tr class=" p-3 mb-2 bg-primary text-white">
            <td>Jumlah Pengaduan Yang sudah Diisi </td>
        </tr>

        <tr>
            <td><?=$data['jmlh']['totaltanggapan()']?></td>
        </tr>

    </table><br>

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
            foreach ($data['pengaduan'] as $pengaduan):?>
            <tr>
            <td><?=$no++;?></td>
            <td><?=$pengaduan['nik'];?></td>
            <td><?=$pengaduan['isi_laporan'];?></td>
            <td><?=$pengaduan['tgl_pengaduan'];?></td>
            <td><img class="ukuranfoto" src="<?=BASEURL.'/img/'.$pengaduan['foto'];?>" alt=""></td>
            <td><?=$pengaduan['status'];?></td>
            <td>
                <a href="<?=BASEURL?>Petugas/prosesgetidpengaduan/<?=$pengaduan['id_pengaduan'];?>" class="btn btn-success">Add Tanggapan</a>
                <a href="<?=BASEURL?>Petugas/getidpengaduanforstatus/<?=$pengaduan['id_pengaduan'];?>" class="btn btn-primary">Selesai</a>
            </td>
            

            
            <?php endforeach;?>
    </table>
</div>


<!-- <?=$data['jmlh']['totaltanggapan()']?> -->