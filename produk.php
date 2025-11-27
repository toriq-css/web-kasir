<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <title>Kasir Modern - Produk</title>

  <link href="https://cdn.jsdelivr.net/npm/remixicon@4.0.0/fonts/remixicon.css" rel="stylesheet">
  <link rel="stylesheet" href="style.css">
</head>
<body>

  <header class="topbar">
    <i class="ri-menu-2-line toggle-btn" aria-hidden="true"></i>
    <h2 class="title-text">Produk</h2>
    <i class="ri-moon-fill dark-btn" aria-hidden="true"></i>
  </header>

  <nav class="sidebar">
    <a href="index.php" class="nav-item">
      <i class="ri-dashboard-line"></i><span>Dashboard</span>
    </a>
    <a href="produk.php" class="nav-item active">
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
    <section class="panel card enter">
      <h2>Daftar Produk</h2>

      <div class="product-list">
        <article class="product-card enter">
          <h3 class="prod-name">Es Teh Manis</h3>
          <p>Harga: Rp <span class="harga">5000</span></p>
          <div class="qty-box">
            <button class="qty-btn btn-minus"><i class="ri-subtract-line"></i></button>
            <input class="qty" type="text" value="0" readonly>
            <button class="qty-btn btn-plus"><i class="ri-add-line"></i></button>
          </div>
        </article>

        <article class="product-card enter">
          <h3 class="prod-name">Nasi Goreng</h3>
          <p>Harga: Rp <span class="harga">15000</span></p>
          <div class="qty-box">
            <button class="qty-btn btn-minus"><i class="ri-subtract-line"></i></button>
            <input class="qty" type="text" value="0" readonly>
            <button class="qty-btn btn-plus"><i class="ri-add-line"></i></button>
          </div>
        </article>

        <article class="product-card enter">
          <h3 class="prod-name">Air Mineral</h3>
          <p>Harga: Rp <span class="harga">3000</span></p>
          <div class="qty-box">
            <button class="qty-btn btn-minus"><i class="ri-subtract-line"></i></button>
            <input class="qty" type="text" value="0" readonly>
            <button class="qty-btn btn-plus"><i class="ri-add-line"></i></button>
          </div>
        </article>
      </div>

      <div class="total-box">
        <h3>Total Keseluruhan: Rp <span id="totalKeseluruhan">0</span></h3>
      </div>
    </section>
  </main>

  <script src="script.js"></script>
</body>
</html>