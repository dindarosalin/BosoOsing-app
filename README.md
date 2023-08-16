# Aplikasi Translate Bahasa Osing ke Bahasa Indonesia

Aplikasi ini adalah sebuah sistem sederhana yang menggunakan framework Laravel dan Bootstrap untuk menerjemahkan teks dari Bahasa Osing, bahasa daerah suku Osing di Banyuwangi, Jawa Timur, ke dalam Bahasa Indonesia. Aplikasi ini juga dilengkapi dengan fitur login dan register, serta konten informasi tentang budaya, makanan, dan tempat wisata di Banyuwangi.

## Fitur

- **Login dan Register:**
  - Pengguna dapat mendaftar dan melakukan login sebagai admin atau user biasa.

- **Dashboard Admin:**
  - Menambah, mengedit, dan menghapus konten informasi tentang budaya, makanan, dan tempat wisata.

- **Dashboard User:**
  - Melihat konten informasi tentang budaya, makanan, dan tempat wisata.
  - Mengakses fitur penerjemahan dari Bahasa Osing ke Bahasa Indonesia.

- **Fitur Translate:**
  - Pengguna dapat memasukkan teks dalam Bahasa Osing.
  - Aplikasi akan menerjemahkan teks tersebut ke dalam Bahasa Indonesia.

## Teknologi yang Digunakan

- Bahasa Pemrograman: PHP (Laravel)
- Frontend Framework: Bootstrap 5
- Database: MySQL
- Terjemahan Bahasa: Menggunakan API Bahasa Google Translate

## Cara Penggunaan

1. **Login atau Register:**
   - Pengguna harus melakukan login atau mendaftar terlebih dahulu menggunakan username dan password.

2. **Dashboard Admin:**
   - Setelah login sebagai admin, Anda dapat mengelola konten informasi.

3. **Dashboard User:**
   - Setelah login sebagai user, Anda dapat melihat konten informasi dan menggunakan fitur terjemahan.

4. **Fitur Translate:**
   - Masukkan teks dalam Bahasa Osing ke dalam kotak terjemahan.
   - Klik tombol "Terjemahkan" untuk mendapatkan hasil terjemahan.

## Cara Menjalankan Aplikasi

1. Pastikan Anda telah menginstal Laravel di komputer Anda.

2. Clone repositori ini ke dalam direktori kerja Anda.

3. Buat database MySQL dengan nama yang sesuai (misalnya `db_translate`).

4. Impor file `database.sql` ke dalam database yang telah Anda buat.

5. Konfigurasi koneksi ke database dengan mengubah informasi di file `.env`.

6. Anda juga perlu mendapatkan API Key dari Google Translate untuk menggunakan fitur terjemahan.

7. Buka terminal, arahkan ke direktori aplikasi, dan jalankan perintah `php artisan serve`.

8. Buka aplikasi melalui web browser dengan mengakses `http://localhost:8000`.

## Kontribusi

Jika Anda ingin berkontribusi untuk meningkatkan aplikasi ini, silakan melakukan pull request dan kami akan dengan senang hati melihatnya.

## Lisensi

Aplikasi ini dilisensikan di bawah [MIT License](LICENSE).

---

Dibuat dengan ❤️ oleh dindarosalin
