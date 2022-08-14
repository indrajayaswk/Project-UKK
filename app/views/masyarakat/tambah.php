<?php
    if(!isset($_SESSION['data']))
    {
        die("Anda Belum Login!");
    }
?>
<center>
<div style="margin-top:100px;margin-bottom:100px;" >

<h2>Tampah Pengaduan</h2><br>
<form class="" style="width:300px;" action="<?=BASEURL?>Pengaduan/prosesaddpengaduan" METHOD="POST" enctype="multipart/form-data">
  
  
  

    <label  class="sr-only">Tgl_pengaduan</label>
    <input value="<?=date('d/m/y');?>" id="inputPassword" class="form-control" placeholder="Tanggal" name="tgl_pengaduan" readonly>

    <label for="inputEmail" class="sr-only">NIK</label>
    <input value="<?=$_SESSION['data']['nik'];?>"type="text" id="inputEmail" name="NIK"class="form-control" placeholder="NIK" readonly >

    <label for="inputEmail" class="sr-only">ISI_laporan</label>
    <input type="text" id="inputEmail" name="isi_laporan"class="form-control" placeholder="ISI LAPORAN" required >

    <label for="inputEmail" class="sr-only">foto</label>
    <input type="file"  name="foto" class="form-control"  accept=".jpg, .png" required ><br>
    
    <button class="btn btn-lg btn-primary btn-bloc k" type="submit">Kirim</button>
    <a class="btn btn-lg btn-primary btn-bloc k"type="submit" value="balik Ke halaman Sebelumnya" href="<?=BASEURL;?>masyarakat" method="POST">Balik</a>
</form>