# Laporan Praktikum 7 - Pemrograman Server-Side dengan PHP

**Identitas Mahasiswa:**
- **Nama:** Nabila Lutfia Sari
- **NIM:** 312510040
- **Kelas:** I253A
- **Program Studi:** Teknik Informatika
- **Dosen Pengampu:** Agung Nugroho, S.Kom., M.Kom.
- **Kampus:** Universitas Pelita Bangsa

---

# 1. Tujuan Praktikum

-Memahami perbedaan pemrosesan client-side dan server-side.

-Mengenali sintaks PHP dan menjalankan file PHP melalui server lokal (XAMPP).

-Menggunakan variabel, tipe data, operator, percabangan, perulangan, dan function.

-Menerima dan memproses data dari form HTML menggunakan metode GET dan POST.

-Melakukan validasi dan sanitasi input dasar di sisi server sebelum data ditampilkan atau diproses.

-Membangun aplikasi sederhana yang menerima, memproses, dan menampilkan data mahasiswa.

--- 

# 2. Perangkat yang Digunakan

-Sistem Operasi: Windows

-Web Server: XAMPP (Apache)

-Code Editor: Visual Studio Code

-Bahasa Pemrograman: PHP & HTML5

-Web Browser: Google Chrome / Microsoft Edge

---

# 3. Cara Menjalankan Server Lokal

-Buka aplikasi XAMPP Control Panel.

-Klik tombol Start pada modul Apache hingga statusnya berubah menjadi hijau (running).

-Pastikan folder proyek Lab7Web_PHP beserta seluruh file-nya tersimpan di direktori C:\xampp\htdocs\Lab7Web_PHP\.

-Buka web browser dan akses URL utama proyek:

-http://localhost/Lab7Web_PHP/

-Untuk mengakses file latihan lainnya, cukup tambahkan nama file di belakang URL (contoh: http://localhost/Lab7Web_PHP/miniproject.php).

---

# 4. Struktur File Proyek

```text
Lab7Web_PHP/
├── index.php             # Halaman Utama / Latihan 1 (Sintaks Dasar PHP)
├── latihan2.php          # Latihan 2 (Variabel, Operator, & Percabangan)
├── latihan3.php          # Latihan 3 (Perulangan & Array)
├── latihan4.php          # Latihan 4 (Pembuatan Function)
├── cari.php              # Latihan 5 (Form Processing dengan Metode GET)
├── latihan6.php          # Latihan 6 (Form Processing dengan Metode POST)
├── latihan7.php          # Latihan 7 (Pengolahan Data & Validasi Sederhana)
├── miniproject.php       # Aplikasi Mini Project Form Mahasiswa (Validasi Server-Side)
├── eksperimen_mandiri.php # Gabungan Eksperimen Mandiri (Poin 1 - 5)
├── screenshots/          # Folder Bukti Tangkap Layar (Opsional)
└── README.md             # Dokumentasi Laporan Praktikum
```
---

# 5. Rincian Tugas & Hasil Praktikum

### 1. Latihan 1 - Pengenalan Sintaks Dasar PHP (index.php)
Pada latihan ini dilakukan pengujian dasar menjalankan kode PHP menggunakan web server lokal (Apache). Program menampilkan teks HTML melalui perintah echo serta mencetak informasi waktu server secara dinamis menggunakan fungsi date().

<img width="211" height="116" alt="1" src="https://github.com/user-attachments/assets/1077ebdc-aaa0-4475-a40c-589380d9b06f" />

---

### 2. Latihan 2 - Variabel, Operator, dan Percabangan (latihan2.php)
Latihan ini mendemonstrasikan deklarasi variabel untuk menampung komponen nilai mahasiswa (Tugas, UTS, UAS), menghitung nilai akhir menggunakan operator aritmatika berdasarkan bobot tertentu, serta menentukan predikat huruf (A, B, C, D) menggunakan struktur percabangan if-elseif-else.

<img width="260" height="104" alt="2" src="https://github.com/user-attachments/assets/087e04da-433c-4f18-8064-48bf0e4cf4fc" />

<img width="242" height="111" alt="3" src="https://github.com/user-attachments/assets/a4a8dafd-5753-425f-b329-7db8ff760f94" />

---

### 3. Latihan 3 - Perulangan dan Array (latihan3.php)
Pada latihan ini dibuat sebuah array yang menyimpan daftar nama mahasiswa.Seluruh elemen di dalam array tersebut kemudian ditelusuri dan ditampilkan secara otomatis ke dalam elemen daftar bernomor HTML (<ol>) menggunakan perulangan foreach.

<img width="155" height="131" alt="4" src="https://github.com/user-attachments/assets/03ffcf51-567b-4f06-82b8-0aa2aeebcaa7" />

---

### 4. Latihan 4 - Membuat Function (latihan4.php)
Latihan ini bertujuan untuk membiasakan pembuatan fungsi mandiri (user-defined function) agar kode bersifat modular dan dapat digunakan kembali (reusable). Fungsi yang dibuat meliputi hitungDiskon() untuk menghitung potongan harga dan hitungLuasPersegiPanjang() untuk menghitung luas bangun datar.

<img width="265" height="110" alt="5" src="https://github.com/user-attachments/assets/322355b8-8c4c-46fc-8e2c-b444b79b63e3" />

---

### 5. Latihan 5 - Memproses Form dengan Metode GET (cari.php)
Pada latihan ini dibangun formulir pencarian sederhana menggunakan metode pengiriman GET. Data kata kunci yang dikirimkan oleh pengguna akan terlihat langsung sebagai parameter pada URL browser, lalu ditampilkan kembali ke halaman dengan pengamanan fungsi htmlspecialchars().

<img width="351" height="204" alt="6" src="https://github.com/user-attachments/assets/3c74e654-f22f-441f-9d9a-2faee31f7179" />

---

### 6. Latihan 6 - Memproses Form dengan Metode POST (latihan6.php)
Latihan ini memproses data formulir input (Nama dan Program Studi) menggunakan metode POST. Berbeda dengan GET, data dikirim melalui body HTTP sehingga tidak terekspos di URL, disertai pengecekan kolom kosong dan sanitasi karakter khusus untuk mencegah celah XSS.

<img width="296" height="232" alt="7" src="https://github.com/user-attachments/assets/3dfba411-e0e3-4f0f-8c7b-2a6675a01c88" />

---

### 7. Latihan 7 - Pengolahan Data Sederhana (latihan7.php)
Pada latihan ini dibuat simulasi form transaksi penjualan barang. Server memvalidasi input agar nama barang tidak kosong serta harga dan jumlah bernilai numerik positif (is_numeric dan ctype_digit), kemudian menghitung total bayar (subtotal) secara otomatis.

<img width="245" height="200" alt="9" src="https://github.com/user-attachments/assets/550c77a7-3011-4b36-b1e1-5b79840a7e65" />

<img width="173" height="87" alt="10" src="https://github.com/user-attachments/assets/a7bc93a5-a81c-49d8-a951-1046ac94228a" />

<img width="254" height="210" alt="11" src="https://github.com/user-attachments/assets/9cdeb40b-bdf3-44ce-a346-bd5baf15ce98" />

<img width="415" height="204" alt="12" src="https://github.com/user-attachments/assets/f3c04e5f-912e-440b-896b-62192a324345" />

---

# 8. Mini Project - Aplikasi Formulir Data Mahasiswa (miniproject.php)
Aplikasi ini mengintegrasikan pemrosesan form POST dengan validasi ketat di sisi server (server-side validation). Sistem memeriksa kelengkapan seluruh kolom, memvalidasi format email menggunakan FILTER_VALIDATE_EMAIL, serta memastikan input semester berada pada rentang angka 1–14 sebelum menampilkan ringkasan data.

<img width="310" height="434" alt="13" src="https://github.com/user-attachments/assets/375ced6f-6a06-478b-9c22-49db784a37b9" />

<img width="265" height="254" alt="14" src="https://github.com/user-attachments/assets/8de1765e-3e4a-45a7-a06e-e99efe2eeb14" />

<img width="368" height="258" alt="15" src="https://github.com/user-attachments/assets/b62821a6-11d8-449b-a93b-9a8cd2a1120f" />

---

# 9. Eksperimen Mandiri (eksperimen_mandiri.php)
File ini menggabungkan kelima tantangan eksperimen mandiri ke dalam satu halaman terpadu, meliputi:

Perhitungan nilai rata-rata dari tiga komponen nilai.

Fitur pencarian nama mahasiswa dari dalam array menggunakan metode GET.

Pembuatan fungsi formatRupiah() untuk memformat angka ke dalam mata uang Rupiah.

Validasi khusus input NIM yang mewajibkan 9 digit angka.

Implementasi tombol reset form beserta penjelasan cara kerjanya di sisi client dibandingkan pemrosesan ulang di server.

<img width="959" height="437" alt="16" src="https://github.com/user-attachments/assets/67a941d3-1969-4b0c-96c7-970b5e1a7e36" />

---

# Jawaban Pertanyaan Evaluasi

### Apa perbedaan pemrosesan client-side dan server-side?

Jawaban: 

Client-side dieksekusi langsung di browser pengguna (HTML, CSS, JavaScript), sedangkan server-side dijalankan di komputer server (PHP) dan hanya mengirimkan hasil akhir berupa HTML ke browser.

---

### Mengapa file PHP harus dijalankan melalui web server?

Jawaban: 

Karena kode PHP membutuhkan interpreter yang terpasang di dalam web server (Apache) untuk menerjemahkannya menjadi dokumen HTML.

---

### Apa fungsi tanda $ pada variabel PHP?

Jawaban: 

Sebagai penanda sintaks wajib di awal nama variabel agar dikenali oleh interpreter PHP.

---

### Apa perbedaan metode GET dan POST?

Jawaban: 

GET mengirimkan data melalui parameter URL sehingga terlihat di address bar (cocok untuk pencarian), sedangkan POST mengirimkan data melalui body HTTP sehingga tersembunyi dari URL (lebih aman untuk pengiriman data formulir).

---

### Mengapa input pengguna perlu divalidasi di sisi server?

Jawaban: 

Karena validasi di sisi client (atribut HTML) dapat dengan mudah dimanipulasi pengguna. Validasi server-side menjadi pengaman utama untuk menjamin keakuratan dan keamanan data.

---

### Apa fungsi htmlspecialchars() ketika menampilkan data dari form?

Jawaban:

Mengonversi karakter khusus HTML (<, >, &, ", ') menjadi entitas HTML yang aman untuk mencegah serangan injeksi skrip berbahaya (Cross-Site Scripting / XSS).

---

### Apa manfaat penggunaan function dalam program PHP?

Jawaban:

Membuat kode lebih terstruktur, modular, dapat digunakan kembali (reusable), dan mempermudah proses pemeliharaan program.

---
