<?php
    if(!isset($_SESSION['petugas']))
    {
        die("Anda Belum Login!");
    }
?>

<center> 
<div style="margin-top:100px;margin-bottom:100px;">
                 <h1 class="h4 text-gray-900 mb-4">Halaman Edit Petugas</h1>
                          
                          
              
              
                                  <div style="width:400px; text-align:left; ">
                                      <form class="editadmin" action="<?= BASEURL; ?>Admin/prosesEdit" method ="POST">
                                                  <label >Id</label>
                                                  <input type="text" class="form-control form-control-user"
                                                       aria-describedby="emailHelp"
                                                      placeholder="Enter Email Address..." value = "<?= $data['listpetugas']['id_petugas'] ?>" name="id_petugas" readonly>
                                              
                                                      
                                              <label for="">Username</label>
                                                  <input type="text" class="form-control form-control-user"
                                                       aria-describedby="emailHelp"
                                                      placeholder="Enter Email Address..." value = "<?= $data['listpetugas']['username'] ?>" name="username">
                                              
                                                      
                                              <label for="">Password</label>
                                                  <input type="text" class="form-control form-control-user"
                                                       placeholder="text" value = "<?= $data['listpetugas']['password'] ?>" name="password">
                                              
                                                       
                                              <label for="">Nama</label>
                                                  <input type="text" class="form-control form-control-user"
                                                       placeholder="Password" value = "<?= $data['listpetugas']['nama_petugas'] ?>" name="nama_petugas">
                                              
                                                       
                                              <label for="">Telpon</label>
                                                  <input type="text" class="form-control form-control-user"
                                                       placeholder="Password" value = "<?= $data['listpetugas']['telp'] ?>" name="telp"><br>
                                              
                                              <button type="submit" class="btn btn-lg btn-primary btn-block">
                                                  edit
                                              </button>
                                                              
                                      </form>
                                  </div>
                                  </center>
                                          
                                          
                                          
                                          
                                          
                                      
              
                 