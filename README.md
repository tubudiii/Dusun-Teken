# Dusun Teken Village Profile Website

A village profile website built with Laravel 10. Designed to digitally present information about **Dusun Teken**, including village profile, news, announcements, UMKM, galleries, and an admin management panel.

---

## Features

### Public Pages
| Feature | Description |
|---|---|
| **Beranda (Homepage)** | Hero slider, latest news, video profile |
| **Profil Dusun** | Wilayah, Sejarah, Visi & Misi, Perangkat Dusun, Peta Dusun |
| **Data Dusun** | Village statistics with tables & charts (Chart.js) — Agama, Jenis Kelamin, Pekerjaan |
| **Berita** | News articles with categories, comments & replies |
| **Pengumuman** | Announcements with WYSIWYG editor |
| **Gallery** | Photo gallery with lightbox |
| **UMKM** | Micro, small & medium enterprise listings |
| **APBDesa** | Village budget information |
| **Kontak** | Contact information page |

### Admin Panel
| Feature | Description |
|---|---|
| **Dashboard** | Statistics: visitors today, total news, total UMKM products |
| **Slider** | Manage homepage hero sliders |
| **Profil Desa** | Wilayah, Sejarah, Visi & Misi management |
| **Perangkat Desa** | Village officials (CRUD) |
| **Peta Desa** | Village map settings |
| **Berita** | Full news management with slug, draft/publish status, views tracking |
| **Kategori** | News categories |
| **Komentar** | Manage news comments |
| **Data Desa** | Agama, Jenis Kelamin, Pekerjaan data (CRUD) |
| **UMKM** | UMKM management |
| **Gallery** | Gallery management |
| **Pengumuman** | Announcements with image upload |
| **APBDes** | Village budget management |
| **Kontak** | Contact info settings |
| **Identitas Situs** | Site identity (logo, village name, address) |
| **Video Profile** | YouTube video embed |
| **Profil** | Admin profile & password change |

---

## Tech Stack

| Technology | Purpose |
|---|---|
| **Laravel 10** | PHP Framework |
| **PHP 8.1+** | Backend language |
| **MySQL** | Database |
| **Bootstrap 5** | Frontend CSS framework |
| **Vite** | Asset bundler |
| **SASS** | CSS preprocessor |
| **Chart.js** | Data visualization (public) |
| **ApexCharts** | Admin dashboard charts |
| **CKEditor 5** | WYSIWYG editor |
| **SweetAlert2** | Alert & confirmation dialogs |
| **DataTables** | Admin table sorting/searching |
| **AOS** | Scroll animations |
| **GLightbox** | Lightbox gallery |
| **Swiper** | Carousel/slider |
| **Eloquent Sluggable** | Auto-slug generation |
| **Laravel Sanctum** | Authentication |
| **Laravel UI** | Auth scaffolding |

---

## Project Structure

```
desa/
├── app/
│   ├── Http/
│   │   ├── Controllers/
│   │   │   ├── Admin*.php       # Admin CRUD controllers
│   │   │   ├── BerandaController.php
│   │   │   ├── BeritaController.php
│   │   │   ├── GalleryController.php
│   │   │   ├── UmkmController.php
│   │   │   └── ...
│   │   ├── Kernel.php
│   │   └── Middleware/
│   │       └── LogoSite.php     # Shares site data globally
│   ├── Models/
│   │   ├── User.php
│   │   ├── Situs.php
│   │   ├── Berita.php
│   │   ├── Slider.php
│   │   ├── Gallery.php
│   │   └── ... (24 models total)
│   └── Providers/
├── bootstrap/
├── config/
│   ├── app.php                  # Timezone: Asia/Jakarta, locale: id
│   ├── database.php
│   └── filesystems.php
├── database/
│   ├── migrations/              # 25 migration files
│   └── seeders/
│       └── DatabaseSeeder.php   # Default admin + sample data
├── public/
│   ├── assets/                  # Frontend assets (CSS, JS, vendor)
│   ├── admin/                   # Admin panel assets
│   └── storage/                 # Symlink to storage/app/public
├── resources/
│   └── views/
│       ├── layouts/
│       │   ├── main.blade.php        # Public layout
│       │   └── app.blade.php         # Auth layout
│       ├── admin/
│       │   ├── layouts/main.blade.php# Admin layout
│       │   └── ... (CRUD views)
│       ├── index.blade.php           # Homepage
│       ├── berita/                   # News views
│       ├── umkm/                     # UMKM views
│       ├── gallery/                  # Gallery views
│       └── ...
├── routes/
│   ├── web.php                      # All web routes
│   └── api.php
├── .env.example
├── composer.json
├── package.json
└── vite.config.js
```

---

## Requirements

- PHP >= 8.1
- Composer
- MySQL / MariaDB
- Node.js & npm (for frontend asset building)

---

## Installation

### 1. Clone the repository

```bash
git clone <repository-url>
cd desa
```

### 2. Install PHP dependencies

```bash
composer install
```

### 3. Install & build frontend assets

```bash
npm install
npm run build
```

### 4. Environment setup

```bash
cp .env.example .env
```

Then edit `.env` and set your database credentials:

```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=dusun_teken
DB_USERNAME=root
DB_PASSWORD=
```

### 5. Generate application key

```bash
php artisan key:generate
```

### 6. Create storage symlink

```bash
php artisan storage:link
```

> This creates `public/storage` → `storage/app/public` symlink for serving uploaded images.

### 7. Database migration & seed

```bash
php artisan migrate --seed
```

This will:
- Create all tables (25 migrations)
- Insert default admin account
- Insert sample data (sliders, categories, village officials, statistics, etc.)

---

## How to Run

```bash
php artisan serve
```

Access the application at: **http://127.0.0.1:8000**

---

## Default Account

| Role | Email | Password |
|---|---|---|
| **Admin** | `admin@gmail.com` | `1234` |

> **Admin login URL:** http://127.0.0.1:8000/login

---

## Folder Explanation

| Folder | Description |
|---|---|
| `app/Models` | Eloquent models (24 models representing all database tables) |
| `app/Http/Controllers` | Controller classes for public & admin functionality |
| `app/Http/Middleware/LogoSite.php` | Global middleware that shares site identity & contact data to all views |
| `database/migrations` | Database schema definitions |
| `database/seeders` | Seed data including default admin account and sample village content |
| `resources/views` | Blade templates — 3 layout groups (public, auth, admin) |
| `public/assets` | Frontend theme assets (HTML template assets) |
| `public/admin` | Admin panel theme assets |
| `routes/web.php` | All application routes (public + admin) |

---

## Screenshots

> _Add screenshots here. You can place images in a `screenshots/` folder at the project root and reference them like:_
>
> ```markdown
> ![Homepage](screenshots/homepage.png)
> ![Admin Dashboard](screenshots/admin-dashboard.png)
> ```

---

## Notes

- The seeder contains **sample data** (Desa Kragilan, Purworejo). Replace it with actual Dusun Teken data via the admin panel or by modifying `DatabaseSeeder.php`.
- Images are stored in `storage/app/public/` and organized in subdirectories (`img-slider/`, `img-perangkat/`, `img-logo/`, `img-profil/`). After seeding, place the corresponding images in these directories.
- Some features are partially commented out in the views but still functional in controllers (e.g., Video Profile on homepage, APBDesa menu). Uncomment the Blade sections in `resources/views/index.blade.php` and `resources/views/partials/header.blade.php` to enable them.
- The application uses **Indonesian language (id)** locale and **Asia/Jakarta** timezone by default.
- If you encounter any 404 errors on images, make sure `php artisan storage:link` has been executed.
