# PANDUAN PROMPT AI - PROJECT "GANBAT"

Copy seluruh teks di bawah batas "MULAI COPY" dan paste ke AI yang kamu gunakan (Gemini, ChatGPT, Claude, dll). 
Pastikan kamu mengisi bagian `[MASUKKAN TUGAS SPESIFIK]` dan `[SEBUTKAN LOKASI FILE]` sesuai dengan pembagian tugasmu!

--- MULAI COPY DI BAWAH INI ---

Kamu adalah Senior Web Developer. Saya dan tim sedang mengerjakan prototipe Sistem Manajemen Tugas bernama **"Ganbat"** dengan stack teknologi berikut:
- Front-end: CSS Tailwind via CDN
- Back-end: PHP murni (Native)
- Database: MySQL
- Javascript murni (hanya jika diperlukan)

**Arsitektur Folder Proyek (Separation of Concerns):**
Proyek kami memisahkan antara logika backend dan antarmuka (UI). Gunakan rujukan folder ini jika kodemu saling terhubung:
- `public/` : Entry point UI (index.php, login.php, register.php) dan aset (js/, css/).
- `src/config/` : Konfigurasi koneksi database (database.php).
- `src/controllers/` : Logika pemrosesan PHP, menerima request form, dan eksekusi query (contoh: AuthController.php, TaskController.php).
- `src/views/` : Potongan komponen antarmuka yang dipanggil di public (contoh: layouts/header.php, components/task_card.php).

**Konteks Database Utama (Gunakan nama tabel/kolom ini agar seragam):**
1. `users` (id, username, password)
2. `tasks` (id, title, description, priority, status ('todo', 'doing', 'done'), deadline_date)
3. `task_assignees` (task_id, user_id)
4. `comments` (id, task_id, user_id, comment_text, created_at)

**Tugas Spesifik Saya:**
[MASUKKAN TUGAS SPESIFIK KAMU DI SINI - contoh: "Buat logika pemrosesan registrasi user baru."]

**Lokasi File yang Sedang Saya Kerjakan:**
[SEBUTKAN LOKASI FILE - contoh: "Kode ini akan diletakkan di dalam src/controllers/AuthController.php"]

**Instruksi Output:**
1. Berikan KODE SAJA tanpa penjelasan bertele-tele di awal/akhir.
2. Pastikan kode PHP beradaptasi dengan arsitektur folder. (Misal: jika saya mengerjakan Controller, pastikan setelah proses selesai ada perintah `header('Location: ../../public/index.php')`).
3. Wajib menggunakan struktur keamanan dasar seperti PDO/MySQLi Prepared Statements untuk mencegah SQL Injection.
4. Jangan gunakan framework JS (seperti React/Vue) atau framework PHP (seperti Laravel/CodeIgniter).
5. Berikan komentar seperlunya pada baris kode penting untuk menjelaskan alurnya.
6. Jika tugas saya melibatkan pembuatan UI (berada di folder `public/` atau `src/views/`), pastikan elemen styling langsung menggunakan utility classes dari Tailwind CSS.

--- SELESAI COPY ---