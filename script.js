const q = (sel) => document.querySelector(sel);
const qa = (sel) => Array.from(document.querySelectorAll(sel));
const fmt = (n) => (typeof n === 'number' ? n.toLocaleString() : n);


(function uiInit(){
  const sidebar = q('.sidebar');
  const toggleBtns = qa('.toggle-btn');
  const darkBtn = q('.dark-btn');

  toggleBtns.forEach(btn => btn.addEventListener('click', () => {
    if (window.innerWidth <= 880) {
      sidebar.classList.toggle('show');
    } else {
      sidebar.classList.toggle('collapsed');

    }
  }));

  if (darkBtn){
    darkBtn.addEventListener('click', () => {
      document.body.classList.toggle('dark');
      // small ripple feedback
      darkBtn.animate([{ transform: 'scale(1)' }, { transform: 'scale(1.08)' }, { transform: 'scale(1)' }], { duration: 260 });
    });
  }
})();

(function entrance(){
  const items = qa('.enter');
  items.forEach((el, i) => {
    setTimeout(() => el.classList.add('is-visible'), 80 * i);
  });
})();

(function produkModule(){
  const productCards = qa('.product-card');
  if (!productCards.length) return;

  const totalEl = q('#totalKeseluruhan');

  function hitungTotal(){
    let total = 0;
    productCards.forEach(card => {
      const harga = parseInt(card.querySelector('.harga').textContent) || 0;
      const qty = parseInt(card.querySelector('.qty').value) || 0;
      total += harga * qty;
    });
    if (totalEl) totalEl.textContent = fmt(total);
  }

  productCards.forEach(card => {
    const plus = card.querySelector('.btn-plus');
    const minus = card.querySelector('.btn-minus');
    const input = card.querySelector('.qty');

    const p = plus || card.querySelector('.qty-btn.btn-plus') || card.querySelector('.qty-btn:nth-of-type(3)');
    const m = minus || card.querySelector('.qty-btn.btn-minus') || card.querySelector('.qty-btn:first-of-type');

    const doPlus = () => {
      input.value = parseInt(input.value || 0) + 1;
      hitungTotal();

      input.animate([{transform:'scale(1)'},{transform:'scale(1.06)'},{transform:'scale(1)'}],{duration:160});
    };
    const doMinus = () => {
      let v = parseInt(input.value || 0);
      if (v > 0) {
        input.value = v - 1;
        hitungTotal();
      }
    };

    if (p) p.addEventListener('click', doPlus);
    if (m) m.addEventListener('click', doMinus);
  });

  hitungTotal();
})();

(function transaksiModule(){

  const keranjangEl = q('#keranjang');
  const totalHargaEl = q('#totalHarga');
  if (!keranjangEl || !totalHargaEl) return;

  let cart = []; 

  function renderCart(){
    keranjangEl.innerHTML = '';
    let total = 0;
    cart.forEach((item, idx) => {
      total += item.harga * item.qty;
      const itemDiv = document.createElement('div');
      itemDiv.innerHTML = `
        <div style="flex:1;">
          <strong>${item.nama}</strong><div style="font-size:.9rem;color:var(--muted, #666)">Rp ${fmt(item.harga)} x ${item.qty}</div>
        </div>
        <div style="display:flex; gap:8px; align-items:center;">
          <button class="qty-btn small-minus" data-idx="${idx}"><i class="ri-subtract-line"></i></button>
          <button class="qty-btn small-plus" data-idx="${idx}"><i class="ri-add-line"></i></button>
          <button class="btn remove" data-idx="${idx}">Hapus</button>
        </div>
      `;
      keranjangEl.appendChild(itemDiv);
    });
    totalHargaEl.textContent = fmt(total);
  }

  window.addCart = function(name, price){

    const found = cart.find(c => c.nama === name && c.harga === price);
    if (found) found.qty += 1;
    else cart.push({ nama: name, harga: price, qty: 1 });

    renderCart();

    totalHargaEl.animate([{opacity:0.6},{opacity:1}],{duration:220});
  };

  keranjangEl.addEventListener('click', (e) => {
    const plus = e.target.closest('.small-plus');
    const minus = e.target.closest('.small-minus');
    const remove = e.target.closest('.remove');

    if (plus){
      const idx = parseInt(plus.dataset.idx);
      cart[idx].qty += 1;
      renderCart();
    }
    if (minus){
      const idx = parseInt(minus.dataset.idx);
      if (cart[idx].qty > 1) cart[idx].qty -= 1;
      else cart.splice(idx,1);
      renderCart();
    }
    if (remove){
      const idx = parseInt(remove.dataset.idx);
      cart.splice(idx,1);
      renderCart();
    }
  });

  const bayarInput = q('#bayar');
  const kembalianEl = q('#kembalian');
  const btnBayar = q('#btnBayar');

  if (bayarInput){
    bayarInput.addEventListener('input', () => {
      const bayar = parseInt(bayarInput.value) || 0;
      const total = parseInt(totalHargaEl.textContent.replace(/,/g,'')) || 0;
      const kemb = Math.max(0, bayar - total);
      if (kembalianEl) kembalianEl.textContent = fmt(kemb);
    });
  }

  if (btnBayar){
    btnBayar.addEventListener('click', () => {
      const total = parseInt(totalHargaEl.textContent.replace(/,/g,'')) || 0;
      if (total === 0) {
        alert('Keranjang kosong!');
        return;
      }
      const bayar = parseInt(bayarInput.value) || 0;
      if (bayar < total) {
        alert('Jumlah bayar kurang!');
        return;
      }
      alert('Transaksi berhasil!\nTotal: Rp ' + fmt(total));

      cart = [];
      renderCart();
      if (bayarInput) bayarInput.value = '';
      if (kembalianEl) kembalianEl.textContent = '0';

      if (totalHargaEl) totalHargaEl.animate([{transform:'scale(1)'},{transform:'scale(1.06)'},{transform:'scale(1)'}],{duration:350});
    });
  }

  renderCart();
})();

(function riwayatModule(){
  const search = q('#searchRiwayat');
  if (!search) return;
  const rows = qa('.row-riwayat');

  search.addEventListener('input', () => {
    const kw = search.value.toLowerCase().trim();
    rows.forEach(r => {
      const txt = r.innerText.toLowerCase();
      r.style.display = txt.includes(kw) ? '' : 'none';
    });
  });
})();

document.addEventListener('keydown', (e) => {
  if (e.key === 'Escape') {
    // close mobile sidebar when Esc pressed
    const sb = q('.sidebar');
    if (sb && sb.classList.contains('show')) sb.classList.remove('show');
  }
});