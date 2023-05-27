<!DOCTYPE html>
<html lang="en">

<head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Blog | Project4</title>

      <link rel="shortcut icon" href="layouts/assets/img/hometekno.ico" type="image/x-icon">
      <link rel="stylesheet" href="layouts/assets/css/style.css">
</head>

<body>

      <aside>

            <header>
                  <img src="layouts/assets/img/teknorumah.png" class="brand">
                  <div class="user">DESA MANUNGGAL</div>
            </header>

            <nav>
                  <ul>
                        <li>
                              <a href="index.php">
                                    <img class="icon" src="layouts/assets/img/menu.png" alt=""> Home
                              </a>
                        </li>
                        <li>
                              <a href="index.php?hal=kat_tampil">
                                    <img class="icon" src="layouts/assets/img/menu.png" alt="">  Category Penduduk
                              </a>
                        </li>
                        <li>
                              <a href="index.php?hal=post_tampil">
                                    <img class="icon" src="layouts/assets/img/menu.png" alt=""> Catatan Post
                              </a>
                        </li>
                  </ul>
            </nav>

      </aside>

      <main>
            <article>
                  <?php

                  require_once "vendor/autoload.php";
                  require_once "inc/Koneksi.php";

                  if (isset($_GET['hal'])) {
                        require $_GET['hal'] . ".php";
                  } else {
                        require "main.php";
                  }
                  ?>
            </article>

            <footer>
                  Copyright &copy; 2023. To By Mhd. Aria Agung Widodo
            </footer>
      </main>

</body>

</html>