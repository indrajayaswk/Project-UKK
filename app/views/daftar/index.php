<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="<?=BASEURL?>css/ukuranfoto.css">
    <link rel="stylesheet" href="<?=BASEURL?>css/bootstrap.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.80.0">
    <title>Sign in </title>
    
    

    

    <!-- Bootstrap core CSS -->
<link href="<?=BASEURL?>css/bootstrap.min.css" rel="stylesheet">



    <style>
      

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="<?=BASEURL?>css/signin.css" rel="stylesheet">
  </head>
  <body class="text-center">
    
<form class="form-signin" method="POST" action="<?=BASEURL;?>Daftar/add">
  
  <h1 class="h3 mb-3 font-weight-normal">Daftar</h1>
  <label for="text" class="sr-only">NIK</label>
  <input type="text" id="inputEmail" name="nik"class="form-control" placeholder="NIK" required >

  <label for="text" class="sr-only">Nama</label>
  <input type="text" id="inputEmail" name="nama"class="form-control" placeholder="Nama" required >

  <label for="text" class="sr-only">Username</label>
  <input type="text" id="inputEmail" name="username"class="form-control" placeholder="Username" required >

  <label for="inputPassword" class="sr-only">Password</label>
  <input type="password" id="inputPassword" class="form-control" placeholder="Password" name="password"required>

  <label for="text" class="sr-only">Telpon</label>
  <input type="text" id="inputEmail" name="telpon"class="form-control" placeholder="Telpon" required >
      


  <button class="btn btn-lg btn-primary btn-block" type="submit">Daftar</button>
  
      <p>Sudah Memiliki akun? <a href="<?=BASEURL;?>Login"> Sign in</a></p>
  
</form>


    
  </body>
</html>
