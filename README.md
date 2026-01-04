# Aplikasi To-Do List (PHP Native + MySQL)

## Deskripsi Singkat
Aplikasi web sederhana untuk mengelola daftar tugas (to-do list) berbasis **PHP native** (tanpa framework) dan **MySQL/MariaDB**.  
Fitur utama mencakup autentikasi user (register/login/logout), proteksi halaman, serta CRUD data tugas (tambah, edit, hapus, set selesai).

---
## Daftar Anggota (Tim)

1. **Rosaria Alexandria** — NIM: `240030365` — GitHub: **@eighterlude**  
   Peran:
   - Mengembangkan modul autentikasi pengguna (register & login)
   - Implementasi hashing password untuk keamanan akun
   - Manajemen session (login, logout, session timeout)
   - Proteksi halaman agar hanya dapat diakses oleh user yang sudah login
   - Final check integrasi antar modul
   - Penyusunan dan finalisasi dokumentasi proyek (README.md)
     contentReference[oaicite:1]{index=1}

3. **Agung Deva Intan Pradnyadewi** — NIM: `NIM` — GitHub: **@intanpradnya**  
   Peran:  :contentReference[oaicite:2]{index=2} (JANGAN DIHAPUS)

4. **Habbibah Alya Nabila** — NIM: `240030444` — GitHub: **@alyanabila-ops**  
   Peran: :contentReference[oaicite:3]{index=3} (JANGAN DIHAPUS)

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
