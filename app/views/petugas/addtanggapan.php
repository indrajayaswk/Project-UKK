<?php
    if(!isset($_SESSION['petugas']))
    {
        die("Anda Belum Login!");
    }
?>
<center>

<div style="margin-top:100px;margin-bottom:100px;"><h2>Tambah Tanggapan</h2><br>

<div style="width:400px; text-align:left; ">
    <form action="<?=BASEURL;?>Petugas/prosesaddtanggapan" method="POST">

            <label >Id</label>
            <input type="text" value="<?=$data['pengaduan']['id_pengaduan']?>" name="id_pengaduan" class="form-control      form-control-user" aria-describedby="emailHelp" placeholder="Enter Email Address..." readonly>

            <label for="">Tanggapan</label>
            <input type="text" name="tanggapan" placeholder="Tanggapan" class="form-control form-control-user" aria-describedby="emailHelp" placeholder="Enter Email Address..." required>   <br>

             <button type="submit" class="btn btn-lg btn-primary btn-block">
                Tambah Tanggapan
            </button>
                                                              
    </form>


    
    
    
    
</form>
</div>
</center>