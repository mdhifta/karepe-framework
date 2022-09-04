<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="<?php echo "http://" .$_SERVER['SERVER_NAME'] .'/karepe-framework/public/favicon.png'; ?>">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

    <title>Welcome Karepe MVC</title>
</head>
<body>
    <main class="container">
        <nav class="navbar bg-light rounded mt-2 justify-content-end">
            <ul class="nav">
                <li class="nav-item">
                    <a class="nav-link" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Dokumentasi</a>
                </li>
                <li class="nav-item">
                    <a href="https://github.com/mdhifta/yuk-presensi-dashboard" class="nav-link">Karepe</a>
                </li>
            </ul>
        </nav>

      <div class="container-sm bg-light p-6 mt-3 rounded">
            <div class="row">
                <div class="col-md">
                    <img src="../../../public/favicon.png" alt="icon" class="w-100">
                </div>
                <div class="col-md align-self-center">
                    <h4 class="text-primary"><?= strtoupper('Selamat Datang di Karepe MVC'); ?></h4>
                    <hr>
                    <p class="text-primary text-justify">Karepe Framewok adalah framework dari bahasa pemerogaman PHP dengan konsep kebebasan pengguna dalam menggunakan struktur yang di inginkan.</p>
                    <p class="text-primary text-justify">Created By M Dhifta</p>
                </div>
        </div>  
      </div>  

      <div class="container mt-3">
          <h4 class="text-primary">About This Page</h4>
          <p class="text-justify">
            MVC adalah struktur dari Model View Controller yang ada di karepe framework. Untuk menjalankan struktur ini, anda bisa melihat contoh 
            penggunaan dibawah ini untuk lebih detailnya. Untuk melihat lebih detail anda bisa memilih fiture Dokumentasi yang ada pada navbar atas.
          </p>
      </div>
        <hr>
        <div class="container mt-3 p-4 mb-3 container-sm bg-light rounded">
          <h6 class="text-primary">Router</h6>
          <p class="text-justify">
            Untuk menjalankan router anda bisa membuat pada folder MVC/Config/Router.php kemudian menggunakannya dengan cara menuliskan
            <span class="text-info">router('index', 'Controller/index');</span>
          </p>
      </div>
      <div class="container mt-3 p-4 mb-3 container-sm bg-light rounded">
          <h6 class="text-primary">Views</h6>
          <p class="text-justify">
            Untuk menjalankan router anda bisa membuat pada folder MVC/Controller/Home.php kemudian menggunakannya dengan cara menuliskan
            <span class="text-info">return show('views/index');</span>
          </p>
      </div>
   </main>
</body>

<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</html>