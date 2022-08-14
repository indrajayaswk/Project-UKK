<!doctype html>
<html lang="en">
  <head>
    <link rel="stylesheet" href="<?=BASEURL?>css/ukuranfoto.css">
    <link rel="stylesheet" href="<?=BASEURL?>css/bootstrap.min.css">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.80.0">
    <title>Log In </title>
    
    

    

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
    
    <form class="form-signin" action="<?=BASEURL?>Login/proseslogin" METHOD="POST">
      
      <h1 class="h3 mb-3 font-weight-normal">Please sign in</h1>
      <label for="inputEmail" class="sr-only">NIK</label>
      <input type="text" id="inputEmail" name="id_pengguna"class="form-control" placeholder="NIK" required autofocus>

      <label for="inputPassword" class="sr-only">Password</label>
      <input type="password" id="inputPassword" class="form-control" placeholder="Password" name="password"required>

      <button class="btn btn-lg btn-primary btn-block" type="submit">Login</button>
      
      <p>Belum Memiliki Akun? <a href="<?=BASEURL;?>Daftar"> Daftar</a></p>
      
    </form>


    
  </body>
</html>
