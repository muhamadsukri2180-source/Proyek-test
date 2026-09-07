# 📋 Sistem Absensi Sederhana - Laravel

Aplikasi **Sistem Absensi** sederhana berbasis **Laravel 10** yang digunakan untuk mencatat, menampilkan, mengubah, dan menghapus data absensi.

## 📌 Deskripsi

Project ini merupakan aplikasi CRUD (Create, Read, Update, Delete) sederhana menggunakan Laravel. Data absensi disimpan di database MySQL dan ditampilkan dalam bentuk tabel pada halaman utama.

Setiap data absensi memiliki informasi:

- **Nama**
- **Kelas**
- **Nomor**

Aplikasi menggunakan konsep **MVC (Model-View-Controller)** Laravel:

- **Model** → mengatur interaksi dengan database.
- **View** → menampilkan halaman aplikasi menggunakan Blade.
- **Controller** → mengatur proses data dan request dari pengguna.

---

## 🛠️ Teknologi yang Digunakan

| Teknologi | Keterangan |
|---|---|
| PHP | `^8.1` |
| Laravel | `^10.10` |
| MySQL | Database aplikasi |
| Blade | Template engine Laravel |
| Vite | Asset/build tool |
| Eloquent ORM | Interaksi dengan database |
| HTML & CSS | Tampilan antarmuka |

---

## ✨ Fitur

### 1. Menampilkan Data Absensi

Data absensi yang tersimpan di database ditampilkan pada halaman utama dalam bentuk tabel.

### 2. Tambah Data

Pengguna dapat menambahkan data absensi melalui form dengan mengisi:

- Nama
- Kelas
- Nomor

### 3. Edit Data

Data yang sudah tersimpan dapat dipilih melalui tombol **Edit**, kemudian diperbarui melalui form.

### 4. Hapus Data

Data dapat dihapus menggunakan tombol **Hapus**. Aplikasi akan meminta konfirmasi sebelum data dihapus.

### 5. Validasi Form

Data wajib diisi dan setiap field dibatasi maksimal 255 karakter.

---

## 📁 Struktur Folder Utama

```text
Gabut/
├── app/
│   ├── Http/
│   │   └── Controllers/
│   │       └── AbsenController.php
│   └── Models/
│       └── Absen.php
│
├── database/
│   ├── migrations/
│   │   └── 2026_09_06_100127_create_absen_table.php
│   └── seeders/
│       └── DatabaseSeeder.php
│
├── resources/
│   └── views/
│       └── welcome.blade.php
│
├── routes/
│   └── web.php
│
├── public/
├── config/
├── storage/
├── tests/
├── .env.example
├── artisan
├── composer.json
└── README.md