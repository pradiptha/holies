<?php
$sql = mysqli_query($conn, "SELECT * FROM kategori");
$rows = [];
while ($row = mysqli_fetch_assoc($sql)) {
    $rows[] = $row;
}
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Bootstrap core CSS -->
    <link href="../vendor/bootstrap/css/bootstrap-modified.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../vendor/holies/css/navbar.css">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-success">
        <div class="container-fluid">
            <a class="navbar-brand text-white" href="/holies">HOLIES</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <div class="dropdown ml-lg-5">
                    <button type="button" class="btn text-white dropdown-toggle" data-toggle="dropdown">
                        <!-- <i class="fas fa-list"></i> -->
                        Kategori
                    </button>
                    <div class="dropdown-menu">
                        <?php
                        foreach ($rows as $opsi) : ?>
                            <a class="dropdown-item" href="tampil_barang.php?id_kategori=<?= $opsi['id_kategori'] ?>"><?= $opsi['nama_kategori'] ?></a>
                        <?php endforeach ?>
                    </div>
                </div>
                <form method="GET" action="tampil_barang.php" class="form-inline my-3 my-lg-0 mr-auto">
                    <input name="cari" id="navbar-search" class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-light my-2 my-sm-0" type="submit">Search..</button>
                </form>
                <ul class="navbar-nav">
                    <?php if (isset($_SESSION['username'])) : ?>
                        <?php if ($_SESSION['type'] === 'customer') : ?>
                            <li class="nav-item active mr-lg-2">
                                <a class="nav-link" href="cart.php"><i class="fas fa-shopping-cart"></i><span class="sr-only">(current)</span></a>
                            </li>
                            <div class="vertical-border"></div>
                        <?php endif ?>
                        <li class="nav-item dropdown account-name ml-lg-2">
                            <a class="nav-link dropdown-toggle text-white nav-img-acc" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img src="../img/profile/<?= $data['foto_profil'] ?>" alt="" class="nav-img-acc mr-lg-2 rounded-circle" style=" object-fit: cover; ">
                                <?= $data['nama'] ?>
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <?php if ($_SESSION['type'] === 'customer') : ?>
                                    <a class="dropdown-item" href="profile.php">Profile</a>
                                    <a class="dropdown-item" href="#">Favorites</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="logout.php">Logout</a>
                                <?php elseif ($_SESSION['type'] === 'seller') : ?>
                                    <a class="dropdown-item" href="../seller/index.php">Profile</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="logout.php">Logout</a>
                                <?php endif ?>
                            </div>
                        </li>
                    <?php else : ?>
                        <li class="nav-item active mr-lg-2">
                            <a class="nav-link" href="login.php">Login</a>
                        </li>
                        <div class="vertical-border"></div>
                        <li class="nav-item mr-lg-2">
                            <a class="nav-link" href="register.php">Register</a>
                        </li>
                    <?php endif ?>
                </ul>
            </div>
        </div>
    </nav>
</body>

</html>