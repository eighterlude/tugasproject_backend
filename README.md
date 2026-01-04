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

4. **Habbibah Alya Nabila** — NIM: `NIM` — GitHub: **@alyanabila-ops**  
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


## Hasil Pengembangan (Fitur CRUD)
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


