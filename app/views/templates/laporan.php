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
    <title><?=$data['judul'];?></title>

    <link rel="canonical" href="<?=BASEURL?>navbar-fixed/">

    

    <!-- Bootstrap core CSS -->
<link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">



    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="navbar-top-fixed.css" rel="stylesheet">
  </head>
  <body>
    
<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-primary">
  <a class="navbar-brand" href="<?=BASEURL?><?=$_SESSION['petugas']['level']?>"> <h2>Laporan</h2> </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarCollapse">
    <ul class="navbar-nav mr-auto">
      <li>
      <a class="nav-link" type="submit"href="<?=BASEURL?><?=$_SESSION['petugas']['level']?>">Home</a>
      </li>
      <li>
      <a class="nav-link" type="submit" href="<?=BASEURL?>Laporan/cetak">Cetak All</a>
      </li>
      
      

      
      
    </ul>
    <form class="form-inline mt-2 mt-md-0">
    <a class="btn btn-lg btn-primary btn-cyan" type="submit" href="<?=BASEURL?>Login/logout">Logout</a>
    </form>
  </div>
</nav>



    
      
  
