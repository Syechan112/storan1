<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

You may also try the [Laravel Bootcamp](https://bootcamp.laravel.com), where you will be guided through building a modern Laravel application from scratch.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains thousands of video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the [Laravel Partners program](https://partners.laravel.com).

### Premium Partners

- **[Vehikl](https://vehikl.com/)**
- **[Tighten Co.](https://tighten.co)**
- **[WebReinvent](https://webreinvent.com/)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Curotec](https://www.curotec.com/services/technologies/laravel/)**
- **[Cyber-Duck](https://cyber-duck.co.uk)**
- **[DevSquad](https://devsquad.com/hire-laravel-developers)**
- **[Jump24](https://jump24.co.uk)**
- **[Redberry](https://redberry.international/laravel/)**
- **[Active Logic](https://activelogic.com)**
- **[byte5](https://byte5.de)**
- **[OP.GG](https://op.gg)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).

## Cara Installasi Projek Ini 👇

1. Persyaratan Sistem
- PHP: Versi 8.2 atau versi yang terbaru.
- Composer: Dependency manager untuk PHP.
- Node.js dan NPM: Untuk mengelola dependencies JavaScript.
- Git: Untuk mengkloning repositori dari GitHub.
2. Setelah selesai step yang di atas, cari bagian menu di atas lalu pilih tombol code, lalu install zip
3. Instalasi Dependencies PHP
- Instal Dependencies PHP:
  composer install
4.Gunakan Composer untuk menginstal semua dependencies yang dibutuhkan oleh Laravel:
composer install
Langkah 4: Instal Dependencies JavaScript:

Instal dependencies Node.js menggunakan NPM:
bash
Copy code
npm install
4. Konfigurasi Proyek
Langkah 5: Buat File .env:

Duplikat file .env.example dan beri nama .env:
bash
Copy code
cp .env.example .env
Buka file .env dan sesuaikan konfigurasi seperti database, mail, dan lainnya sesuai dengan lingkungan pengembangan mereka.
Langkah 6: Generate Application Key:

Jalankan perintah berikut untuk menghasilkan application key:
bash
Copy code
php artisan key:generate
5. Migrasi dan Seed Database
Langkah 7: Migrasi Database:
Jalankan migrasi untuk membuat tabel di database:
bash
Copy code
php artisan migrate
Langkah 8: Seed Database (Opsional):
Jika proyek memerlukan data awal, jalankan perintah berikut:
bash
Copy code
php artisan db:seed
6. Menjalankan Aplikasi
Langkah 9: Jalankan Server Laravel:
Untuk menjalankan aplikasi, gunakan perintah:
bash
Copy code
php artisan serve
Akses aplikasi di browser melalui URL berikut:
url
Copy code
http://localhost:8000
7. Compile Assets
Langkah 10: Compile Assets:
Jalankan perintah ini untuk mengelola assets (CSS, JavaScript):
bash
Copy code
npm run dev
Untuk lingkungan produksi:
bash
Copy code
npm run production
8. Testing Aplikasi
Langkah 11: Jalankan Testing:
Gunakan perintah berikut untuk menjalankan tes dan memastikan aplikasi berfungsi dengan benar:
bash
Copy code
php artisan test
9. Penanganan Masalah
Langkah 12: Debugging:
Aktifkan mode debug di file .env jika ada masalah:
env
Copy code
APP_DEBUG=true
