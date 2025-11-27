<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <title>Kasir Modern - Dashboard</title>

  <link href="https://cdn.jsdelivr.net/npm/remixicon@4.0.0/fonts/remixicon.css" rel="stylesheet">
  <link rel="stylesheet" href="style.css">
</head>
<body>

  <header class="topbar">
    <i class="ri-menu-2-line toggle-btn" aria-hidden="true"></i>
    <h2 class="title-text">Kasir Modern</h2>
    <i class="ri-moon-fill dark-btn" aria-hidden="true"></i>
  </header>

  <nav class="sidebar">
    <a href="index.php" class="nav-item active">
      <i class="ri-dashboard-line"></i><span>Dashboard</span>
    </a>
    <a href="produk.php" class="nav-item">
      <i class="ri-box-3-line"></i><span>Produk</span>
    </a>
    <a href="transaksi.php" class="nav-item">
      <i class="ri-shopping-cart-line"></i><span>Transaksi</span>
    </a>
    <a href="riwayat.php" class="nav-item">
      <i class="ri-file-list-line"></i><span>Riwayat</span>
    </a>
  </nav>

  <main class="main">
    <section class="cards grid">
      <div class="card enter">
        <h4>Total Produk</h4>
        <span class="card-number">3</span>
      </div>

      <div class="card enter">
        <h4>Total Transaksi</h4>
        <span class="card-number">58</span>
      </div>

      <div class="card enter">
        <h4>Pendapatan</h4>
        <span class="card-number">Rp 900.000</span>
      </div>
    </section>

    <section class="panel card enter">
      <h3>Selamat Datang!</h3>
      <p>Ini dashboard kasir modern. Gunakan menu di samping untuk navigasi.</p>
    </section>
  </main>

  <script src="script.js"></script>
</body>
</html>