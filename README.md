# Aplikasi To-Do List (PHP Native + MySQL)

## Deskripsi Singkat
Aplikasi web sederhana untuk mengelola daftar tugas (to-do list) berbasis **PHP native** (tanpa framework) dan **MySQL/MariaDB**.  
Fitur utama mencakup autentikasi user (register/login/logout), proteksi halaman, serta CRUD data tugas (tambah, edit, hapus, set selesai).

---
## Daftar Anggota

1. Nama : Rosaria Alexandria
   NIM: `240030365`
   GitHub: **@eighterlude**  
2. Nama : Agung Deva Intan Pradnyadewi
   NIM: `240030315`
   GitHub: **@intanpradnya**  
3. Nama : Habbibah Alya Nabila
   NIM: `240030444`
   GitHub: **@alyanabila-ops**  

---

## Lingkungan Pengembangan
**Tools & Tech:**
- PHP (native)  
- MySQL / MariaDB  
- Web server: Apache (XAMPP)
- HTML, CSS, JavaScript
- Git & GitHub
- Visual Studio Code

---

## Hasil Pengembangan (Modul/Fitur Utama)
### 1) Autentikasi User
- Register user (`register.php`)
- Login user (`login.php`)
- Logout (`logout.php`)
- Proteksi halaman setelah login (`protect.php` / halaman terproteksi)

### 2) Manajemen To-Do (CRUD)
- Tambah tugas (`frm_tambah.php` / `simpan_data.php`)
- Edit tugas (`frm_edit.php` / `edit_data.php`)
- Hapus tugas (`hapus.php`)
- Set tugas selesai (`set_selesai.php`)
- Dashboard / halaman utama setelah login (`dashboard.php`)

### 3) Koneksi Database
- File konfigurasi & koneksi database (`config.php`, `koneksi.php`)
- File SQL database (`db_app_to_do_list.sql`)

---
## Struktur Folder
Berikut struktur folder utama pada repository:

- `asset/` : aset pendukung (gambar/icon/dll jika ada)
- `classes/` : class PHP (mis. Auth/logic terkait)
- `css/` : file CSS utama
- `js/` : file JavaScript utama
- `html/` : halaman HTML pendukung (jika digunakan)
- `tampilan css/` : file/eksperimen tampilan (sesuaikan pemakaian)
- `tampilan JS/` : file/eksperimen tampilan (sesuaikan pemakaian)

File penting di root:
- `README.md`
- `config.php`
- `koneksi.php`
- `db_app_to_do_list.sql`
- `login.php`, `register.php`, `logout.php`
- `dashboard.php`
- `frm_tambah.php`, `simpan_data.php`
- `frm_edit.php`, `edit_data.php`
- `hapus.php`, `set_selesai.php`
- `index.php` / `index.html`

---

## Hasil Pengembangan - Alex
### ### 1) Autentikasi User
Modul autentikasi user digunakan untuk mengatur proses akses pengguna ke dalam sistem. Fitur yang dikembangkan meliputi:

- **Register User (`register.php`)**  
  Pengguna dapat membuat akun baru dengan memasukkan username dan password. Password akan diproses menggunakan hashing sebelum disimpan ke database untuk menjaga keamanan data pengguna.

- **Login User (`login.php`)**  
  Sistem memverifikasi username dan password yang diinput oleh pengguna. Jika data valid, session akan dibuat dan pengguna diarahkan ke halaman dashboard.

- **Logout (`logout.php`)**  
  Fitur logout digunakan untuk mengakhiri sesi login dengan cara menghapus session yang aktif, sehingga pengguna harus login kembali untuk mengakses sistem.

- **Proteksi Halaman (`protect.php`)**  
  Halaman tertentu dilindungi dengan pengecekan session. Apabila pengguna belum login dan mencoba mengakses halaman terproteksi, sistem akan otomatis mengarahkan pengguna ke halaman login.

---

## Hasil Pengembangan (Fitur CRUD) - Intan
Berikut adalah fitur CRUD yang telah diimplementasikan pada aplikasi To Do List:

### 1. Create (Tambah Data)
Pengguna dapat menambahkan tugas baru melalui form input.  
Data yang dimasukkan akan disimpan ke dalam database MySQL.

**Field utama:**
- Judul Tugas
- Deskripsi
- Status (Belum Selesai / Selesai)

### 2. Read (Tampilkan Data)
Aplikasi menampilkan seluruh daftar tugas yang tersimpan di database dalam bentuk tabel.  
Setiap tugas menampilkan:
- Judul tugas
- Deskripsi
- Status
- Aksi (Edit & Hapus)

### 3. Update (Ubah Data)
Pengguna dapat mengubah data tugas yang sudah ada, seperti:
- Mengedit judul atau deskripsi tugas
- Mengubah status tugas menjadi selesai atau belum selesai

Perubahan data akan langsung diperbarui di database.

### 4. Delete (Hapus Data)
Pengguna dapat menghapus tugas yang tidak diperlukan lagi.  
Data yang dihapus akan dihilangkan secara permanen dari database.

---

## **Hasil Pengembangan (Kontribusi Front-End) - Alya**
Berikut adalah hasil pengembangan yang telah dikerjakan dalam proyek aplikasi To Do List pada sisi Front-End:

### 1. Pengembangan Tampilan (Front-End)
   Berperan dalam pembuatan antarmuka aplikasi agar mudah digunakan, responsif, dan nyaman bagi pengguna.

   Teknologi yang digunakan:
   •	HTML
   •	CSS
   •	JavaScript

   Langkah pengembangan:
   •	Menyusun struktur halaman menggunakan HTML
   •	Mengatur layout dan desain tampilan menggunakan CSS
   •	Menambahkan interaksi pengguna menggunakan JavaScript

2. Pembuatan Form Login dan To-Do
   Mengembangkan form login sebagai akses awal pengguna serta form input untuk pengelolaan data tugas.

   Fitur utama:
   •	Form login pengguna
   •	Form input tugas (to-do)

   Langkah pengembangan:
   •	Membuat elemen form login dan form to-do
   •	Melakukan validasi input pada sisi front-end
   •	Menyiapkan data agar dapat dikirim ke backend

3. Tampilan List Tugas (To-Do List)
   Menyajikan data tugas dalam bentuk daftar agar mudah dibaca dan dikelola oleh pengguna.

   Informasi yang ditampilkan:
   •	Judul tugas
   •	Deskripsi
   •	Status tugas
   •	Aksi (Tambah & Hapus)

   Langkah pengembangan:
   •	Menerima data tugas dari backend
   •	Menampilkan data ke dalam bentuk list atau tabel
   •	Menyediakan tombol aksi untuk pengelolaan tugas

4. Integrasi Front-End dengan Back-End
   Menghubungkan antarmuka aplikasi dengan backend sehingga data dapat diproses secara dinamis.
   Fungsi utama:
   •	Mengirim dan menerima data secara real-time

   Langkah pengembangan:
   •	Melakukan request API menggunakan JavaScript
   •	Mengolah respons yang diterima dari backend
   •	Menampilkan hasil pemrosesan data ke halaman web

5. Perapihan Struktur Folder dan Dokumentasi
   Melakukan penataan struktur folder front-end agar proyek lebih terorganisir serta mendukung dokumentasi proyek.

    Langkah pengembangan:
   •	Mengelompokkan file HTML, CSS, dan JavaScript sesuai fungsinya
   •	Menyesuaikan penamaan file dan folder agar konsisten
   •	Mendukung penyusunan dokumentasi pada file README

---
## Cara Instalasi dan Menjalankan Aplikasi

### A) Persiapan Database
1. Buat database baru di MySQL/MariaDB (contoh: `todo_app` atau sesuai kebutuhan tim).
2. Import file SQL:
   - `db_app_to_do_list.sql`

> Bisa lewat phpMyAdmin: **Import** → pilih file `.sql` → **Go**.

### B) Konfigurasi Koneksi
1. Buka `config.php` (atau `koneksi.php` sesuai yang dipakai di alur aplikasi).
2. Sesuaikan:
   - host (umumnya `localhost`)
   - username (umumnya `root`)
   - password (kosong kalau default XAMPP)
   - nama database (sesuaikan dengan database yang kamu buat)

### C) Menjalankan Aplikasi
**Opsi 1 — XAMPP/Laragon (Apache)**
1. Pindahkan folder project ke:
   - XAMPP: `htdocs/`
   - Laragon: `www/`
2. Jalankan Apache + MySQL.
3. Akses di browser:
   - `http://localhost/tugasproject_backend/`
   - atau sesuaikan nama foldernya
  
---
LAMPIRAN
![WhatsApp Image 2026-01-04 at 21 30 11](https://github.com/user-attachments/assets/7c2c59a3-d1bd-4a7f-95d9-8009d6cb4aa1)

