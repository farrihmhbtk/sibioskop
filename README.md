#README
##Video Demonstration
https://youtu.be/Caegiydj6Zk?si=PIo_y7QBVzIDZ6NZ
##Documentation Files (SRS (Software Requirement Specification), Use Case Diagram, Sequence Diagram, Entity Relational Diagram, etc.)
https://drive.google.com/drive/folders/1ieXGOw4-BXjlJYRQg2SBEcNm_qOV1MNy?usp=sharing
###BRANCH TERUPDATE ADALAH BRANCH Master
NAMA APLIKASI: SIBioskop
VERSI: 1.0
DESKRIPSI: SIBioskop merupakan sistem independen baru yang dikembangkan sebagai pembantu dalam pelaksanaan jalannya ekosistem bioskop Indonesia dengan menghubungkan bioskop seluruh indonesia dengan pengguna. Pengguna SIBioskop dapat mengecek film yang tersedia pada bioskop dan kota yang terkait lalu melakukan pemesanan dengan sistem pembayaran sendiri.
###AKUN DUMMY YANG SUDAH TERDAFTAR
email: johndoe@gmail.com
password: john
###Database SQL sudah tertera (sibioskop.sql)
###PANDUAN APABILA TERDAPAT ERROR
ERROR (mb_struct()) SAAT MELAKUKAN REGISTRASI/DAFTAR ATAU SAAT MENGGUNAKAN FITUR FORGOT PASSWORD
1. Pergi ke directory PHP
2. Buka file php.ini
3. Aktifkan extension mbstring dengan cara search (ctrl+F) ';extension=mbstring' kemudian hapus karakter ';'
4. coba registrasi/daftar kembali

ERROR (read lokasi on null) saat membuka halaman daftar bioskop dari sidebar bioskop di beranda
1. Pergi ke terminal di code editor masing-masing
2. ketikkan 'php artisan route:cache'
