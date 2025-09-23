Project Gabi (Gatraco Bimble). Project ini sudah dilengkapi dengan layout dasar (Navbar dan Footer) dan tiga halaman utama (`Home, Diskon, Promo`).

-----

## 📦 Fitur Proyek

  * **Laravel 12** (backend)
  * **Inertia.js** (SPA bridge)
  * **Vue 3** (frontend)
  * **TailwindCSS** (UI modern & responsif)
  * **Layout dasar** (navbar, footer)
  * **Landing page** dengan 1 halaman Home

-----

## ⚙️ Cara Pakai (Setup Proyek)

### 1\. Clone Repository

```bash
git clone https://github.com/damaraas/GABI-les-privat.git

cd GABI-les-privat
```

### 2\. Install Dependencies Laravel

```bash
composer install
```

### 3\. Install Dependencies Frontend

```bash
npm install
```

### 4\. Konfigurasi Environment

Salin file `.env.example` menjadi `.env` dan buat kunci aplikasi.

```bash
cp .env.example .env
php artisan key:generate
```

### 5\. Migrasi Database (opsional)

Jika proyek memiliki tabel database, jalankan migrasi.

```bash
php artisan migrate
```

### 6\. Jalankan Server Laravel

```bash
php artisan serve
```

### 7\. Jalankan Vite (Frontend Dev Server)

```bash
npm run dev
```

Akses proyek di browser Anda: 👉 **[http://127.0.0.1:8000](http://127.0.0.1:8000)**

-----

## 📂 Struktur Folder Utama

```
resources/
├── js/
│   ├── Layouts/
│   │   └── AppLayout.vue
│   ├── Pages/
│   │   └── Home.vue
│   └── app.js
└── css/
    └── app.css
```