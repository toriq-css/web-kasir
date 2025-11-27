<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <title>Kasir Modern - Transaksi</title>

  <link href="https://cdn.jsdelivr.net/npm/remixicon@4.0.0/fonts/remixicon.css" rel="stylesheet">
  <link rel="stylesheet" href="style.css">
</head>
<body>

  <header class="topbar">
    <i class="ri-menu-2-line toggle-btn" aria-hidden="true"></i>
    <h2 class="title-text">Transaksi</h2>
    <i class="ri-moon-fill dark-btn" aria-hidden="true"></i>
  </header>

  <nav class="sidebar">
    <a href="index.php" class="nav-item">
      <i class="ri-dashboard-line"></i><span>Dashboard</span>
    </a>
    <a href="produk.php" class="nav-item">
      <i class="ri-box-3-line"></i><span>Produk</span>
    </a>
    <a href="transaksi.php" class="nav-item active">
      <i class="ri-shopping-cart-line"></i><span>Transaksi</span>
    </a>
    <a href="riwayat.php" class="nav-item">
      <i class="ri-file-list-line"></i><span>Riwayat</span>
    </a>
  </nav>

  <main class="main">
    <section class="panel enter">
      <h2>Transaksi Baru</h2>

      <div class="transaksi-layout">
        <div class="panel card">
          <h3>Pilih Produk</h3>
          <table class="table">
            <thead>
              <tr><th>Produk</th><th>Harga</th><th>Aksi</th></tr>
            </thead>
            <tbody>
              <tr>
                <td>Indomie Goreng</td>
                <td>3500</td>
                <td><button class="btn" onclick="addCart('Indomie Goreng',3500)">Tambah</button></td>
              </tr>
              <tr>
                <td>Susu Kotak</td>
                <td>5000</td>
                <td><button class="btn" onclick="addCart('Susu Kotak',5000)">Tambah</button></td>
              </tr>
              <tr>
                <td>Teh Botol</td>
                <td>4000</td>
                <td><button class="btn" onclick="addCart('Teh Botol',4000)">Tambah</button></td>
              </tr>
            </tbody>
          </table>
        </div>

        <div class="panel card cart-panel">
          <h3>Keranjang</h3>
          <div id="keranjang"></div>

          <div class="total-box" style="width:100%; margin-top:12px;">
            <h3>Total: Rp <span id="totalHarga">0</span></h3>

            <label for="bayar">Bayar</label>
            <input id="bayar" type="number" placeholder="Masukkan jumlah bayar" style="width:100%; padding:8px; margin-top:6px; border-radius:6px; border:1px solid #ddd;">

            <p style="margin-top:10px">Kembalian: Rp <span id="kembalian">0</span></p>
            <button class="btn" id="btnBayar" style="width:100%; margin-top:10px;">Selesai / Bayar</button>
          </div>
        </div>
      </div>
    </section>
  </main>

  <script src="script.js"></script>
</body>
</html>