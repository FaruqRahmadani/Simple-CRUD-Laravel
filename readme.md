<p align="center"><img src="https://laravel.com/assets/img/components/logo-laravel.svg"></p>

## Yang Dibutuhkan



- Laravel Versi 5.5.
- Mysql.
- PHP Versi 7.
- Package : laravelcollective/html.



## Cara Menggunakan

  Gunakan Perintah

  - Untuk mengingstall package apa saja yang diperlukan pada project ini
  ```
    Composer Update
  ```
  - Untuk Menambahkan file environment
  ```
    cp .env.example .env
  ```
  - Untuk Meng-generate key
  ```
    php artisan key:generate
  ```

  - Setelah selesai generate key, buka file .env dan inputkan/masukkan informasi database yang digunakan, seperti username, password dan nama database

  - Untuk memigrasikan table kedalam database
  ```
    php artisan migrate
  ```
  - Untuk menambahkan isi record dasar pada database
  ```
    php artisan db:seed
  ```
  
  - Untuk menjalankan
  ```
    php artisan serve
  ```
