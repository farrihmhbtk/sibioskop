@extends('layouts.main')

@section('container')
    <div class="d-flex flex-column justify-content-start mb-4"
        style="border-box-shadow: 1px solid black; box-shadow: -8px 10px #EEC921; width:97%; background-color: white; font-family: 'Poppins', sans-serif; border: 2px solid black; border-radius: 5px;">

        <h2 class="m-4">Panduan</h2>

        <div class="accordion" id="panduanAccordion">
            <div class="accordion-item">
                <h2 class="accordion-header" id="panelsStayOpen-headingOne">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                        data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true"
                        aria-controls="panelsStayOpen-collapseOne">
                        SI BIOSKOP
                    </button>
                </h2>
                <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show"
                    aria-labelledby="panelsStayOpen-headingOne">
                    <div class="accordion-body">
                        <strong>Si Bioskop</strong> adalah sebuah perangkat lunak berbasis web yang bertujuan untuk
                        menyediakan platform yang memudahkan pengguna dalam proses pembelian tiket bioskop. Dengan SI
                        Bioskop, pengguna dapat dengan mudah membeli tiket film terkini yang sedang diputar di berbagai
                        bioskop di seluruh Indonesia, dari manapun dan kapanpun. Dengan akses online yang praktis, pengguna
                        tidak perlu lagi menghabiskan waktu untuk mengantri di lokasi bioskop atau terbatas oleh jadwal
                        penjualan tiket yang terbatas. Si Bioskop memberikan kenyamanan dan fleksibilitas bagi pengguna
                        untuk memilih film yang ingin ditonton dan membeli tiket secara cepat dan efisien melalui platform
                        web yang nyaman dan mudah digunakan.
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="Kebjiakan Privasi">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false"
                        aria-controls="panelsStayOpen-collapseTwo">
                        Kebijakan Privasi
                    </button>
                </h2>
                <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse"
                    aria-labelledby="panelsStayOpen-headingTwo">
                    <div class="accordion-body">
                        <p>
                            Kebijakan privasi ini menjelaskan bagaimana perusahaan kami, PT Dewa Bioskop Indonesia
                            mengumpulkan, menyimpan, memproses, dan/atau mengungkapkan informasi data pribadi Anda. Kami
                            menganggap privasi dan keamanan data pribadi Anda sebagai prioritas kami. Karena kami tahu bahwa
                            informasi dapat mencakup data pribadi Anda yang berkaitan dengan atau terkait dengan individu
                            tertentu seperti nama dan nomor telepon. Kami menggunakan data ini untuk meningkatkan layanan
                            kami dan membantu Anda memesan, dan/atau membeli tiket.
                            Dengan menggunakan 'Layanan Kami' (aplikasi Si Bioskop dan platform lain yang memfasilitasi
                            Layanan
                            Kami), Anda menerima praktik yang dijelaskan dalam Kebijakan Privasi ini.
                        </p>

                        <p>
                            Kami dapat memperbarui, mengubah, atau mengubah kebijakan privasi ini dari waktu ke waktu
                            dan, jika Anda memiliki pertanyaan, ucapan, atau permintaan yang berkaitan dengan kebijakan
                            privasi ini, hubungi kami dengan menggunakan rincian kontak di bawah ini. Jika Anda tidak
                            setuju dengan persyaratan Kebijakan Privasi, mohon jangan gunakan Layanan Kami.
                        </p>

                        <strong>INFORMASI YANG DAPAT KAMI KUMPULKAN</strong>

                        <ul>
                            <li>
                                Informasi pribadi Anda (nama, nomor telepon, alamat email,
                                dan data yang diperlukan yang terkait dengan rekanan kami terkait dengan tiket yang Anda
                                beli) yang Anda berikan dengan mengisi formulir di Layanan Kami, termasuk jika Anda
                                mendaftar sebagai pengguna Layanan Kami.
                            </li>
                            <li>
                                Sehubungan dengan fasilitas pendaftaran akun, kata sandi Anda, dan detail login.
                            </li>
                            <li>
                                Rincian transaksi apa pun yang Anda lakukan melalui Layanan Kami.
                            </li>
                            <li>
                                Rincian kunjungan Anda ke Layanan Kami, sumber daya yang Anda akses, dan data apa pun
                                yang Anda unduh.
                            </li>
                            <li>
                                Jika Anda melakukan pembelian, informasi keuangan Anda (seperti sisa saldo dan rincian
                                pembelian Anda).
                            </li>

                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="panelsStayOpen-headingThree">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false"
                        aria-controls="panelsStayOpen-collapseThree">
                        Panduan Penggunaan
                    </button>
                </h2>
                <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse"
                    aria-labelledby="panelsStayOpen-headingThree">
                    <div class="accordion-body">
                        <strong>1. Membuat Akun</strong>
                        <ol>
                            <li>Buka aplikasi Si Bioskop atau kunjungi situs web resmi Si Bioskop.</li>
                            <li>Pilih opsi "Daftar".</li>
                            <li>Isi formulir pendaftaran dengan informasi yang diperlukan, seperti nama,
                                email, dan kata sandi.</li>
                            <li>Ikuti petunjuk untuk menyelesaikan proses pendaftaran.</li>
                        </ol>

                        <strong>2. Masuk ke Akun</strong>
                        <ol>
                            <li>Buka aplikasi Si Bioskop atau kunjungi situs web Si Bioskop.</li>
                            <li>Pilih opsi "Masuk".</li>
                            <li>Masukkan alamat email dan kata sandi anda yang terdaftar.</li>
                            <li>Klik "Masuk" untuk mengakses akun Anda.</li>
                        </ol>

                        <strong>3. Jelajahi Katalog Film</strong>
                        <ol>
                            <li>Setelah masuk ke akun, Anda akan diarahkan ke halaman utama Si Bioskop.</li>
                            <li>Jelajahi katalog film yang tersedia. Anda dapat juga menonton cuplikan film yang diminati.
                            </li>
                        </ol>

                        <strong>4. Pilih Lokasi</strong>
                        <ol>
                            <li>Pada halaman beranda pilih lokasi dimana anda sekarng berada.</li>
                            <li>Klik "Ubah" untuk mengonfirmasi perubahan lokasi.</li>
                        </ol>

                        <strong>5. Pilih Lokasi Bioskop</strong>
                        <ol>
                            <li>Setelah menemukan film yang ingin ditonton, klik atau ketuk film tersebut untuk melihat
                                detailnya.</li>
                            <li>Pilih opsi Lokasi Bioskop dan Jadwal Tayang yang sesuai.</li>
                        </ol>

                        <strong>6. Pilih Kursi</strong>
                        <ol>
                            <li>Pilih kursi yang tersedia pada jadwal tersebut. Biasanya, kursi yang telah terisi akan
                                berwarna putih.</li>
                            <li>Klik "Ringkasan Order" untuk mengonfirmasi pilihan kursi.</li>
                        </ol>

                        <strong>7. Pemesanan Tiket</strong>
                        <ol>
                            <li>Setelah memilih kursi, klik atau ketuk opsi "Pesan Tiket" atau "Beli Tiket".</li>
                            <li>Tinjau kembali detail pemesanan Anda, seperti jumlah tiket, harga, dan kursi yang dipilih.
                            </li>
                            <li>Jika semua informasi sudah benar, lanjutkan ke langkah pembayaran.</li>
                        </ol>

                        <strong>8. Pembayaran</strong>
                        <ol>
                            <li>Periksa kembali ringkasan order.</li>
                            <li>Klik "Bayar Sekarang" untuk melakukan pembayaran.</li>
                            <li>Lakukan transfer ke rekening PT Dewa Bioskop Indonesia sejumlah nominal yan tertara.</li>
                            <li>Klik "Saya Sudah Bayar" untuk untuk mengonfirmasi pembayaran.</li>
                        </ol>

                        <strong>9. Dapatkan Tiket</strong>
                        <ol>
                            <li>Setelah pembayaran selesai, Anda akan menerima tiket dalam bentuk
                                digital.</li>
                            <li>Akses laman "Tiket" untuk melihat daftar tiket yang masih aktif dan yang sudah tidak dapat
                                digunakan.</li>
                        </ol>

                        <strong>10. Nikmati Pengalaman Menonton</strong>
                        <ol>
                            <li>Tiba di bioskop sesuai dengan waktu pemutaran yang tertera pada tiket. Tukarkan tiket dengan
                                akses masuk dan nikmati pengalaman menonton film yang telah Anda pesan.</li>
                            <li>Tukarkan tiket dengan
                                akses masuk dan nikmati pengalaman menonton film yang telah Anda pesan.</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
