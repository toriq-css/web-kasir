<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <title>Kasir Modern - Riwayat</title>

  <link href="https://cdn.jsdelivr.net/npm/remixicon@4.0.0/fonts/remixicon.css" rel="stylesheet">
  <link rel="stylesheet" href="style.css">
</head>
<body>

  <header class="topbar">
    <i class="ri-menu-2-line toggle-btn" aria-hidden="true"></i>
    <h2 class="title-text">Riwayat</h2>
    <i class="ri-moon-fill dark-btn" aria-hidden="true"></i>
  </header>

  <nav class="sidebar">
    <a href="index.php" class="nav-item">
      <i class="ri-dashboard-line"></i><span>Dashboard</span>
    </a>
    <a href="produk.php" class="nav-item">
      <i class="ri-box-3-line"></i><span>Produk</span>
    </a>
    <a href="transaksi.php" class="nav-item">
      <i class="ri-shopping-cart-line"></i><span>Transaksi</span>
    </a>
    <a href="riwayat.php" class="nav-item active">
      <i class="ri-file-list-line"></i><span>Riwayat</span>
    </a>
  </nav>

  <main class="main">
    <section class="panel card enter">
      <h2>Riwayat Transaksi</h2>

      <div style="display:flex; gap:12px; align-items:center; margin-bottom:12px;">
        <input id="searchRiwayat" placeholder="Cari riwayat..." style="flex:1; padding:8px; border-radius:6px; border:1px solid #ddd;">
      </div>

      <div class="panel">
        <table class="table">
          <thead>
            <tr><th>Tanggal</th><th>Produk</th><th>Total</th></tr>
          </thead>
          <tbody id="riwayatData">
            <tr class="row-riwayat"><td>2025-02-12</td><td>Indomie, Teh Botol</td><td>Rp 800.000</td></tr>
            <tr class="row-riwayat"><td>2025-02-10</td><td>Susu Kotak</td><td>Rp 100.000</td></tr>
            <tr class="row-riwayat"><td>2025-02-01</td><td>Nasi Goreng</td><td>Rp 75.000</td></tr>
          </tbody>
        </table>
      </div>
    </section>
  </main>

  <script src="script.js"></script>
</body>
</html>