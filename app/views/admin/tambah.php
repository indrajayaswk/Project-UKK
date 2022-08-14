<?php
    if(!isset($_SESSION['petugas']))
    {
        die("Anda Belum Login!");
    }
?>


<center>
<div style="margin-top:100px;margin-bottom:100px;">
<form class="" style="width:500px;" action="<?=BASEURL?>Admin/petugas" METHOD="POST" enctype="multipart/form-data">
  
  <h1 class="h3 mb-3 font-weight-normal">Tambah petugas</h1>
  

    <label for="inputPassword" class="sr-only">nama_petugas</label>
    <input  type="text" id="inputPassword" class="form-control" placeholder="nama petugas" name="nama_petugas" required>

    <label for="inputPassword" class="sr-only">username</label>
    <input  type="text" id="inputPassword" class="form-control" placeholder="Username" name="username" required>

    <label for="inputPassword" class="sr-only">password</label>
    <input type="password" id="inputPassword" class="form-control" placeholder="Password" name="password" required>

    <label for="inputPassword" class="sr-only">telp </label>
    <input  type="text" id="inputPassword" class="form-control" placeholder="Telpon" name="telp" required r><br> 

    <button class="btn btn-lg btn-primary btn-block" type="submit">Kirim</button>

    
</form>