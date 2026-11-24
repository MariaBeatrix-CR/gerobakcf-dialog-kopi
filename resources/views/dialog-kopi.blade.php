<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $kedai['nama'] }} — {{ $kedai['tagline'] }}</title>
    
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lora:ital,wght@0,500;0,600;0,700;1,400&family=Plus+Jakarta+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">
    
    <!-- Bootstrap 5 CSS & Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" rel="stylesheet">

<style>
    :root {
        --bg-cream: #FFF5F5;
        --bg-card: #FFFFFF;
        --bg-sand: #FFE4E6;
        --espresso: #f10f0f;
        --coffee-muted: #e01010;
        --caramel: #DC2626;
        --caramel-dark: #ec1313;
        --border-soft: #FCA5A5;
    }

     html { scroll-behavior: smooth; }
        body {
            background-color: var(--bg-cream);
            color: var(--espresso);
            font-family: 'Plus Jakarta Sans', sans-serif;
            padding-bottom: 90px;
        }

        h1, h2, h3, .font-serif {
            font-family: 'Lora', serif;
        }


    /* Navbar */
    .navbar-dialog {
        background-color: rgba(255, 245, 245, 0.92);
        backdrop-filter: blur(10px);
        border-bottom: 1px solid var(--border-soft);
    }
    .nav-link {
        color: var(--espresso);
        font-weight: 500;
    }
    .nav-link:hover {
        color: var(--caramel);
    }

    /* Buttons */
    .btn-caramel {
        background-color: var(--caramel);
        color: #fff;
        border: none;
        border-radius: 50px;
        padding: 10px 24px;
        font-weight: 600;
        transition: all 0.2s;
    }
    .btn-caramel:hover {
        background-color: var(--caramel-dark);
        color: #fff;
    }
    .btn-outline-espresso {
        border: 1.5px solid var(--espresso);
        color: var(--espresso);
        border-radius: 50px;
        padding: 10px 24px;
        font-weight: 600;
        transition: all 0.2s;
    }
    .btn-outline-espresso:hover {
        background-color: var(--espresso);
        color: #fff;
    }

    /* Hero */
    .hero-box {
        background: linear-gradient(135deg, #FFE4E6 0%, #FFF5F5 100%);
        border: 1px solid var(--border-soft);
        border-radius: 24px;
    }
    .badge-soft {
        background-color: var(--bg-sand);
        color: var(--espresso);
        font-weight: 600;
        padding: 6px 14px;
        border-radius: 50px;
        font-size: 0.85rem;
    }

    /* Cards */
    .menu-card {
        background: var(--bg-card);
        border: 1px solid var(--border-soft);
        border-radius: 18px;
        overflow: hidden;
        transition: transform 0.2s, box-shadow 0.2s;
        height: 100%;
    }
    .menu-card:hover {
        transform: translateY(-3px);
        box-shadow: 0 10px 24px rgba(127, 29, 29, 0.08);
    }
    .menu-img {
        height: 180px;
        width: 100%;
        object-fit: cover;
    }
    .badge-andalan {
        background-color: #FEE2E2;
        color: #991B1B;
        font-size: 0.75rem;
        font-weight: 600;
        padding: 4px 10px;
        border-radius: 50px;
    }
    .badge-habis {
        background-color: #e70a0a;
        color: #FFFFFF;
        font-size: 0.75rem;
        font-weight: 600;
        padding: 4px 10px;
        border-radius: 50px;
    }

    /* Filter Tabs */
    .filter-btn {
        border: 1px solid var(--border-soft);
        background: #fff;
        color: var(--coffee-muted);
        border-radius: 50px;
        padding: 7px 18px;
        font-size: 0.9rem;
        font-weight: 600;
        cursor: pointer;
        transition: all 0.2s;
    }
    .filter-btn.active, .filter-btn:hover {
        background-color: var(--espresso);
        color: #fff;
        border-color: var(--espresso);
    }

    /* Varian Pills */
    .varian-pill {
        border: 1px solid var(--border-soft);
        background: var(--bg-cream);
        color: var(--espresso);
        font-size: 0.78rem;
        padding: 3px 10px;
        border-radius: 50px;
        cursor: pointer;
    }
    .varian-pill.active {
        background: var(--espresso);
        color: #fff;
        border-color: var(--espresso);
    }

    /* Add Button */
    .btn-add {
        width: 36px;
        height: 36px;
        border-radius: 50%;
        background-color: var(--espresso);
        color: #fff;
        border: none;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 1.2rem;
        transition: 0.2s;
    }
    .btn-add:hover:not(:disabled) {
        background-color: var(--caramel);
    }
    .btn-add:disabled {
        background-color: #FECACA;
        color: #991B1B;
        cursor: not-allowed;
    }

   .galeri-grid {
    display: grid;
    /* Berjejer ke samping otomatis; minimal lebar tiap item 220px */
    grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
    gap: 16px;
}

.galeri-item {
    border: 1px solid #e5e7eb;
    border-radius: 10px;
    overflow: hidden;
    background: #fff;
}

.galeri-item img {
    display: block;
    width: 100%;
    height: 220px;
    object-fit: cover;
}

    /* Floating Cart Bar */
    .floating-cart {
        position: fixed;
        bottom: 20px;
        left: 50%;
        transform: translateX(-50%);
        width: calc(100% - 32px);
        max-width: 540px;
        background-color: var(--espresso);
        color: #fff;
        border-radius: 50px;
        padding: 12px 20px;
        box-shadow: 0 12px 30px rgba(185, 28, 28, 0.28);
        z-index: 1040;
        display: none;
        cursor: pointer;
    }
</style>
        
</head>
<body> 

    <!-- Navbar -->
    <nav class="navbar navbar-expand-md navbar-dialog sticky-top py-3">
        <div class="container">
            <a class="navbar-brand font-serif fw-bold fs-4 text-dark" href="#">
                ☕ {{ $kedai['nama'] }}
            </a>
            <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navMenu">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navMenu">
                <ul class="navbar-nav gap-md-3">
                    <li class="nav-item"><a class="nav-link" href="#menu">Menu</a></li>
                    <li class="nav-item"><a class="nav-link" href="#Galeri">Galeri</a></li>
                    <li class="nav-item"><a class="nav-link" href="#cerita">Cerita Kami</a></li>
                    <li class="nav-item"><a class="nav-link" href="#lokasi">Lokasi</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="container my-4 my-md-5">
        <div class="hero-box p-4 p-md-5">
            <div class="row align-items-center g-4">
                <div class="col-lg-7">
                    <span class="badge-soft d-inline-block mb-3">gerobak/Kedai kopi</span>
                    <h1 class="display-5 fw-bold mb-3">{{ $kedai['nama'] }}</h1>
                    <p class="fs-5 text-secondary mb-4">{{ $kedai['tagline'] }}</p>
                    <div class="d-flex flex-wrap gap-2 mb-4">
                        <a href="#menu" class="btn btn-caramel">Lihat menu & pesan</a>
                        <a href="https://wa.me/{{ $kedai['whatsapp'] }}" target="_blank" class="btn btn-outline-espresso">
                            <i class="bi bi-whatsapp me-1"></i> Chat kedai
                        </a>
                    </div>
                    <div class="d-flex flex-wrap gap-3 text-secondary small">
                        <span>🕐 {{ $kedai['jam_buka'] }}</span>
                        <span>📍 {{ $kedai['alamat'] }}</span>
                    </div>
                </div>
                <div class="col-lg-5">
                    <img src=https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRMLquyH1pFL5Z3WaLSs_5nK1LmaTZuSOAhXCtJ9zyxxNFURMn3A7wxGoQ&s=10" 
                         alt="Suasana dialog kopi" class="img-fluid rounded-4 shadow-sm">
                </div>
            </div>
        </div>
    </section>

    <!-- Menu Andalan -->
    <section class="container my-5">
        <div class="mb-3">
            <small class="text-uppercase fw-semibold" style="color: var(--caramel); letter-spacing: 1px;">Menu andalan</small>
            <h2 class="fw-bold">Andalan kedai kami</h2>
        </div>
        <div class="row g-3">
            @foreach(collect($menus)->where('andalan', true) as $item)
            <div class="col-md-4">
                <div class="menu-card p-3 d-flex align-items-center gap-3">
                    <img src="{{ $item['gambar'] }}" alt="{{ $item['nama'] }}" class="rounded-3" style="width: 75px; height: 75px; object-fit: cover;">
                    <div class="flex-grow-1">
                        <h6 class="fw-bold mb-1">{{ $item['nama'] }}</h6>
                        <p class="fw-semibold mb-0" style="color: var(--caramel);">Rp {{ number_format($item['harga'], 0, ',', '.') }}</p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </section>

    <!-- Katalog Menu Lengkap -->
    <section id="menu" class="container my-5 pt-3">
        <div class="mb-4">
            <small class="text-uppercase fw-semibold" style="color: var(--caramel); letter-spacing: 1px;">Menu</small>
            <h2 class="fw-bold mb-1">Pilih, tambah, kirim</h2>
            <p class="text-secondary">Tekan <strong>+</strong> pada menu favoritmu, lalu kirim semua pesanan sekaligus lewat WhatsApp.</p>
        </div>

        <!-- Filter Kategori -->
        <div class="d-flex flex-wrap gap-2 mb-4" id="categoryFilters">
            <button class="filter-btn active" data-filter="all">Semua</button>
            <button class="filter-btn" data-filter="Kopi">Kopi</button>
            <button class="filter-btn" data-filter="Non-Kopi">Non-Kopi</button>
            <button class="filter-btn" data-filter="Pastry & Snack">Pastry & Snack</button>
        </div>

        <!-- Daftar Item Menu -->
        <div class="row g-4" id="menuGrid">
            @foreach($menus as $menu)
            <div class="col-md-6 col-lg-4 menu-item-col" data-category="{{ $menu['kategori'] }}">
                <div class="menu-card d-flex flex-column">
                    <div class="position-relative">
                        <img src="{{ $menu['gambar'] }}" alt="{{ $menu['nama'] }}" class="menu-img">
                        <div class="position-absolute top-0 start-0 p-2 d-flex gap-1">
                            @if($menu['andalan'])
                                <span class="badge-andalan">⭐ Andalan</span>
                            @endif
                            @if($menu['habis'])
                                <span class="badge-habis">Habis hari ini</span>
                            @endif
                        </div>
                    </div>
                    <div class="p-3 d-flex flex-column flex-grow-1">
                        <div class="d-flex justify-content-between align-items-start mb-1">
                            <h5 class="font-serif fw-bold mb-0">{{ $menu['nama'] }}</h5>
                            <span class="fw-bold text-nowrap ms-2" style="color: var(--caramel);">
                                Rp {{ number_format($menu['harga'], 0, ',', '.') }}
                            </span>
                        </div>
                        <p class="text-secondary small mb-3 flex-grow-1">{{ $menu['deskripsi'] }}</p>

                        <div class="d-flex justify-content-between align-items-center pt-2 border-top" style="border-color: var(--border-soft) !important;">
                            <!-- Pilihan Varian (Hot/Iced) -->
                            <div class="varian-group d-flex gap-1" data-menu-id="{{ $menu['id'] }}">
                                @if(count($menu['varian']) > 0)
                                    @foreach($menu['varian'] as $idx => $v)
                                        <span class="varian-pill {{ $idx === 0 ? 'active' : '' }}" 
                                              onclick="selectVarian(this, '{{ $v }}')">{{ $v }}</span>
                                    @endforeach
                                @else
                                    <span class="text-muted small">{{ $menu['kategori'] }}</span>
                                @endif
                            </div>

                            <!-- Tombol Tambah -->
                            <button class="btn-add" 
                                    {{ $menu['habis'] ? 'disabled' : '' }}
                                    onclick="addToCart({{ $menu['id'] }}, '{{ addslashes($menu['nama']) }}', {{ $menu['harga'] }}, '{{ count($menu['varian']) > 0 ? $menu['varian'][0] : '' }}', this)">
                                <i class="bi bi-plus"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </section>

    <!-- Quote Divider -->
    <section class="container my-5 py-3 text-center">
        <blockquote class="font-serif fst-italic fs-3 text-dark mx-auto" style="max-width: 650px;">
            “Kopi terbaik diminum pelan-pelan, sambil menunggu dia yang tidak pasti.”
        </blockquote>
    </section>

   {{-- Galeri --}}
    <section id="galeri" style="max-width: 1200px; margin: 0 auto; padding: 20px;">
    <h2 style="margin-bottom: 16px;">Galeri</h2>

    <div class="galeri-grid">
        @foreach ($galeri as $item)
            <div class="galeri-item">
                <img src="{{ $item }}" alt="Foto Galeri Dialog Kopi">
            </div>
        @endforeach
    </div>
</section>
    <!-- Cerita Kami -->
    <section id="cerita" class="container my-5">
      <div class="row align-items-center g-4">
                <div class="col-12">
                <div class="hero-box p-4 p-md-5 h-100">
                    <small class="text-uppercase fw-semibold" style="color: var(--caramel); letter-spacing: 1px;">Cerita kami</small>
                    <h2 class="fw-bold mt-1 mb-3">Tentang dialog kopi</h2>
                    <p class="text-secondary lh-lg mb-4">
                        Dialog kopi berawal dari jualan dengan gerobak listrik sampai akhirnya menjadi cabang kedai kecil di jalan hasanudin. dari yang setiap pagi sampai sore saya berjualan di pinggir jalan atau depan ruko akhirya saya bekerja sama dengan teman saya yang punya kedai.
                    </p>
                    
                </div>

        </div>
    </section>

    <!-- Jam Buka & Lokasi -->
    <section id="lokasi" class="container my-5">
        <div class="hero-box p-4 p-md-5">
            <div class="row align-items-center g-4">
                <div class="col-md-7">
                    <small class="text-uppercase fw-semibold" style="color: var(--caramel); letter-spacing: 1px;">Mampir yuk</small>
                    <h2 class="fw-bold mt-1 mb-3">Jam buka & lokasi</h2>
                    <p class="mb-1"><strong>Jam buka:</strong> {{ $kedai['jam_buka'] }}</p>
                    <p class="mb-4">
                        <strong>Alamat:</strong> 
                        <a href="https://maps.google.com/?q={{ urlencode($kedai['alamat']) }}" target="_blank" class="text-dark">
                            {{ $kedai['alamat'] }} ↗
                        </a>
                    </p>
                    <a href="https://wa.me/{{ $kedai['whatsapp'] }}" target="_blank" class="btn btn-caramel">
                        <i class="bi bi-whatsapp me-1"></i> Chat via WhatsApp
                    </a>
                    <a href="https://instagram.com" target="_blank" class="btn btn-outline-espresso btn-sm">
                        <i class="bi bi-instagram me-1"></i> Instagram {{ $kedai['instagram'] }}
                    </a>
                </div>
                <div class="col-md-5 text-md-end">
                    <h3 class="font-serif fw-bold">{{ $kedai['nama'] }}</h3>
                    <p class="text-secondary mb-0">Sampai jumpa di kedai ☕</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="container text-center text-secondary small py-4 border-top" style="border-color: var(--border-soft) !important;">
        © {{ date('Y') }} {{ $kedai['nama'] }} · Dibuat dengan Laravel & Bootstrap 5
    </footer>

    <!-- Floating Cart Bar -->
    <div class="floating-cart" id="floatingCart" data-bs-toggle="offcanvas" data-bs-target="#cartDrawer">
        <div class="d-flex justify-content-between align-items-center">
            <div>
                <span class="badge bg-warning text-dark rounded-pill me-2" id="cartCount">0</span>
                <span class="fw-semibold">Lihat Pesanan</span>
            </div>
            <div class="fw-bold" id="cartTotal">Rp 0</div>
        </div>
    </div>

    <!-- Offcanvas Cart Drawer -->
    <div class="offcanvas offcanvas-end" tabindex="-1" id="cartDrawer" style="background-color: var(--bg-cream);">
        <div class="offcanvas-header border-bottom" style="border-color: var(--border-soft) !important;">
            <h5 class="offcanvas-title font-serif fw-bold">Pesanan Kamu</h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas"></button>
        </div>
        <div class="offcanvas-body d-flex flex-column">
            <div id="cartItemsList" class="flex-grow-1 overflow-auto mb-3"></div>

            <div class="border-top pt-3" style="border-color: var(--border-soft) !important;">
                <div class="mb-2">
                    <label class="form-label small fw-semibold">Nama Pemesan</label>
                    <input type="text" id="customerName" class="form-control form-control-sm" placeholder="Contoh: Ria">
                </div>
                <div class="mb-2">
                    <label class="form-label small fw-semibold">Tipe Pesanan</label>
                    <select id="orderType" class="form-select form-select-sm">
                        <option value="Dine-in (Makan di tempat)">Dine-in (Makan di tempat)</option>
                        <option value="Takeaway (Bawa pulang)">Takeaway (Bawa pulang)</option>
                        <option value="Delivery">Delivery</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label class="form-label small fw-semibold">Catatan (Opsional)</label>
                    <input type="text" id="orderNote" class="form-control form-control-sm" placeholder="Contoh: banyakin es, es dikit">
                </div>

                <div class="d-flex justify-content-between fw-bold fs-5 mb-3">
                    <span>Total</span>
                    <span id="drawerTotal">Rp 0</span>
                </div>

                <button onclick="checkoutWhatsApp()" class="btn btn-caramel w-100 py-2">
                    <i class="bi bi-whatsapp me-1"></i> Kirim Pesanan ke WhatsApp
                </button>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Cart & Filter Logic -->
    <script>
        let cart = [];
        const waNumber = "{{ $kedai['whatsapp'] }}";

        // Filter Kategori Menu
        document.querySelectorAll('.filter-btn').forEach(btn => {
            btn.addEventListener('click', function() {
                document.querySelectorAll('.filter-btn').forEach(b => b.classList.remove('active'));
                this.classList.add('active');
                const filter = this.getAttribute('data-filter');

                document.querySelectorAll('.menu-item-col').forEach(col => {
                    if (filter === 'all' || col.getAttribute('data-category') === filter) {
                        col.style.display = 'block';
                    } else {
                        col.style.display = 'none';
                    }
                });
            });
        });

        // Pilih Varian Hot / Iced
        function selectVarian(el, varian) {
            const group = el.parentElement;
            group.querySelectorAll('.varian-pill').forEach(p => p.classList.remove('active'));
            el.classList.add('active');
        }

        // Tambah ke Keranjang
        function addToCart(id, nama, harga, defaultVarian, btnEl) {
            const card = btnEl.closest('.menu-card');
            const activePill = card.querySelector('.varian-pill.active');
            const varian = activePill ? activePill.innerText : defaultVarian;
            const key = `${id}-${varian}`;

            const existing = cart.find(item => item.key === key);
            if (existing) {
                existing.qty += 1;
            } else {
                cart.push({ key, id, nama, harga, varian, qty: 1 });
            }
            updateCartUI();
        }

        // Ubah Jumlah Item
        function changeQty(key, delta) {
            const index = cart.findIndex(item => item.key === key);
            if (index > -1) {
                cart[index].qty += delta;
                if (cart[index].qty <= 0) {
                    cart.splice(index, 1);
                }
            }
            updateCartUI();
        }

        // Render Tampilan Keranjang
        function updateCartUI() {
            const floatingBar = document.getElementById('floatingCart');
            const countEl = document.getElementById('cartCount');
            const totalEl = document.getElementById('cartTotal');
            const drawerTotalEl = document.getElementById('drawerTotal');
            const listEl = document.getElementById('cartItemsList');

            let totalQty = 0;
            let totalPrice = 0;
            listEl.innerHTML = '';

            cart.forEach(item => {
                totalQty += item.qty;
                totalPrice += item.harga * item.qty;

                listEl.innerHTML += `
                    <div class="d-flex justify-content-between align-items-center bg-white p-2 rounded-3 mb-2 border">
                        <div>
                            <div class="fw-bold small">${item.nama} ${item.varian ? `(${item.varian})` : ''}</div>
                            <div class="text-muted small">Rp ${item.harga.toLocaleString('id-ID')}</div>
                        </div>
                        <div class="d-flex align-items-center gap-2">
                            <button class="btn btn-sm btn-outline-secondary rounded-circle" onclick="changeQty('${item.key}', -1)">-</button>
                            <span class="fw-bold small">${item.qty}</span>
                            <button class="btn btn-sm btn-outline-secondary rounded-circle" onclick="changeQty('${item.key}', 1)">+</button>
                        </div>
                    </div>
                `;
            });

            if (totalQty > 0) {
                floatingBar.style.display = 'block';
                countEl.innerText = totalQty;
                totalEl.innerText = 'Rp ' + totalPrice.toLocaleString('id-ID');
                drawerTotalEl.innerText = 'Rp ' + totalPrice.toLocaleString('id-ID');
            } else {
                floatingBar.style.display = 'none';
                listEl.innerHTML = '<p class="text-center text-muted my-5">Keranjang masih kosong.</p>';
                drawerTotalEl.innerText = 'Rp 0';
            }
        }

        // Kirim Pesanan ke WhatsApp
        function checkoutWhatsApp() {
            if (cart.length === 0) return;

            const name = document.getElementById('customerName').value.trim() || 'Pelanggan';
            const type = document.getElementById('orderType').value;
            const note = document.getElementById('orderNote').value.trim();

            let text = `Halo *dialog kopi*, saya mau pesan:\n\n`;
            let total = 0;

            cart.forEach((item, i) => {
                const subtotal = item.harga * item.qty;
                total += subtotal;
                text += `${i + 1}. ${item.nama}${item.varian ? ` (${item.varian})` : ''} x${item.qty} — Rp ${subtotal.toLocaleString('id-ID')}\n`;
            });

            text += `\n*Total: Rp ${total.toLocaleString('id-ID')}*\n`;
            text += `Nama: ${name}\n`;
            text += `Tipe: ${type}\n`;
            if (note) text += `Catatan: ${note}\n`;

            const url = `https://wa.me/${waNumber}?text=${encodeURIComponent(text)}`;
            window.open(url, '_blank');
        }
    </script>
</body>
</html>
