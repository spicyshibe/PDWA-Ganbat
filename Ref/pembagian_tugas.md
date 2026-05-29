# 📋 Dokumentasi Pembagian Tugas Proyek "Ganbat"

Dokumen ini memuat pembagian tugas terstruktur untuk 9 anggota tim dalam menyelesaikan prototipe Sistem Manajemen Tugas berbasis web **"Ganbat"**. Setiap anggota wajib berkontribusi langsung pada penulisan kode (*coding*) dan melakukan *commit* ke GitHub pada file yang telah ditentukan.

---

## 🛠️ Stack Teknologi Global
* [cite_start]**Front-end:** Tailwind CSS (via CDN) [cite: 13]
* [cite_start]**Back-end:** PHP murni / Native [cite: 14]
* [cite_start]**Database:** MySQL [cite: 15]
* [cite_start]**Scripting Tambahan:** JavaScript murni [cite: 16]

---

## 👥 Detail Pembagian Tugas & File Target

### 1. Gandhi Muhammad Bagas Saputra — *Database & Core Configuration*
* [cite_start]**Deskripsi Tugas:** Merancang skema *database* relasional dasar [cite: 15, 35] dan mengatur kerangka pemanggilan komponen halaman global (*header/footer*).
* **File yang Dikerjakan:**
    * `database/schema.sql` (Skrip pembuatan tabel SQL)
    * `src/config/database.php` (Koneksi database PDO/MySQLi)
    * `src/views/layouts/header.php` (Tag `<head>` dan import CDN Tailwind)
    * `src/views/layouts/footer.php` (Penutupan tag HTML dan script global)

### 2. Hafiz Kurniawan — *Authentication Module*
* [cite_start]**Deskripsi Tugas:** Mengimplementasikan fitur registrasi akun baru, mekanisme login, dan pengamanan halaman utama menggunakan *session management* PHP murni[cite: 19, 38].
* **File yang Dikerjakan:**
    * `public/login.php` (Antarmuka Form Login)
    * `public/register.php` (Antarmuka Form Register)
    * `src/controllers/AuthController.php` (Logika validasi login, register, dan logout)

### 3. Bima Baraja — *Board Layout & UI Shell*
* [cite_start]**Deskripsi Tugas:** Membangun antarmuka utama Kanban *board* yang memiliki susunan 3 kolom (Todo, Doing, Done) [cite: 21, 30] [cite_start]serta memastikan tata letak responsif saat diakses via ponsel[cite: 33].
* **File yang Dikerjakan:**
    * `public/index.php` (Halaman utama dashboard aplikasi)
    * `src/views/components/navbar.php` (Komponen navigasi atas)
    * `src/views/components/board_column.php` (Template kolom Kanban)

### 4. Aquilla Faza Naufan — *Create Task Functional*
* [cite_start]**Deskripsi Tugas:** Membuat modul formulir pembuatan kartu tugas baru yang menampung data judul, deskripsi, tingkat prioritas, dan tenggat waktu[cite: 20, 23].
* **File yang Dikerjakan:**
    * `src/controllers/TaskController.php` (Fungsi `createTask()`)
    * `src/views/components/task_card.php` (Integrasi awal rendering data kartu tugas)

### 5. Zaki Anis Fauzan — *Task Status Mapping (Update Functional)*
* [cite_start]**Deskripsi Tugas:** Mengembangkan fungsi pengubah status kartu tugas untuk melacak pergerakan pekerjaan dari Todo ke Doing, hingga Done[cite: 21, 35].
* **File yang Dikerjakan:**
    * `src/controllers/TaskController.php` (Fungsi `updateTaskStatus()`)
    * Modifikasi kontrol aksi perpindahan pada `src/views/components/task_card.php`

### 6. Mohammad Ikhlasul Amal Pakaya — *Assign Member Module*
* [cite_start]**Deskripsi Tugas:** Mengembangkan fitur pendelegasian tugas yang menghubungkan satu atau lebih pengguna terdaftar ke dalam kartu tugas tertentu melalui tabel relasional[cite: 22, 35].
* **File yang Dikerjakan:**
    * `src/controllers/TaskController.php` (Fungsi `assignMemberToTask()`)
    * Modifikasi UI penunjukan anggota pada komponen kartu tugas.

### 7. Faiq Rizky Maulana — *Deadline Logic & Visual Hierarchy*
* [cite_start]**Deskripsi Tugas:** Mengatur penanganan data tanggal tenggat waktu dan membuat logika PHP untuk memberikan indikator visual (seperti warna teks merah) jika tugas telah melewati batas waktu (*overdue*)[cite: 23, 32].
* **File yang Dikerjakan:**
    * `src/utils/helpers.php` (Fungsi pengecekan status waktu)
    * `src/views/components/task_card.php` (Logika pewarnaan dinamis berbasis tenggat waktu)

### 8. Jundi Al-Faruq Reksowardoyo — *Task Comments (Fitur Tambahan)*
* [cite_start]**Deskripsi Tugas:** Membangun fitur opsional berupa kolom diskusi/komentar di dalam detail kartu tugas untuk memfasilitasi komunikasi antar-anggota tim[cite: 25, 27].
* **File yang Dikerjakan:**
    * `src/controllers/CommentController.php` (Logika simpan dan ambil komentar)
    * `src/views/components/comment_section.php` (Komponen UI area komentar)

### 9. Rafie Rasydan Wahyudi — *Realtime Countdown (Fitur Tambahan)*
* [cite_start]**Deskripsi Tugas:** Mengimplementasikan hitung mundur presisi secara *real-time* (hari, jam, menit) menuju batas waktu *deadline* pada setiap kartu tugas menggunakan JavaScript murni[cite: 25, 26].
* **File yang Dikerjakan:**
    * `public/js/countdown.js` (Skrip penghitung waktu mundur berbasis DOM Javascript)
    * Menghubungkan skrip countdown ke dalam `src/views/layouts/footer.php`

---

## 🚨 Aturan Kolaborasi (Workflow Git)

1.  **PULL SEBELUM PUSH:** Selalu lakukan `git pull origin main` sebelum mulai menulis kode baru atau sebelum melakukan *push* untuk menghindari *conflict*.
2.  **COMMIT MESSAGE STANDAR:** Gunakan pesan commit yang jelas. 
    * *Contoh:* `git commit -m "feat(auth): menambah logika login di AuthController.php"`
3.  **ISOLASI KODE:** Jangan mengubah file yang menjadi tanggung jawab utama anggota lain tanpa koordinasi terlebih dahulu.