@extends('layout.main')

@section('container')
    <section class="wrapper bg-dark text-white">
        <div class="container pt-18 pt-md-18 pb-21 pb-md-21 text-center">
            <div class="row">
                <div class="col-sm-10 col-md-8 col-lg-6 col-xl-6 col-xxl-5 mb-5 mx-auto">
                    <h1 class="display-2 text-white mb-3">Tutorial Prediksi Tanah</h1>
                    <p class="lead px-xs-10 px-xs-10">Bagaimana cara menggunakan sistem prediksi tanah?
                </div>
                <p class="lead px-xs-10 px-xs-10">Tentang penggunaan sistem prediksi tanah, diperlukan login terlebih
                    dahulu sebelum mengakses fitur tersebut, jika belum memiliki akun anda bisa melakukan registrasi
                    terlebih dahulu. Setelah berhasil, anda dapat mengunjungi halamn prediksi untuk memasukkan data
                    Oksigen, Tekstur, Suhu, Kelembapan dan Keasaman Tanah. Terakhir tekan tombol prediksi untuk melihat
                    hasil prediksi yang dihasilkan. Jika masih kurang jelas anda dapat melihat gambar dibawah ini.
                </p>
                <!-- /column -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </section>
    <!-- /section -->
    <section class="wrapper bg-light">
        <div class="container pb-14 pb-md-8">
            <div class="row">
                <div class="col mt-n19 mb-8">
                    <div class="card">
                        <div class="row gx-0">
                            <div class="col-lg-12">
                                <div class="p-10 p-md-11 p-lg-13">
                                    <div class="row gx-lg-8 gx-xl-12 gy-10 mb-8 mb-md-17 align-items-center">
                                        <div class="col-lg-12">
                                            <h2 class="display-6 mb-3">Contoh :</h2>
                                            <p>Masukkan data tanah anda pada form ini.</p>
                                            <img class="col-lg-12 shadow-lg mb-4" src="{{ asset('home/assets/gambar/tutorial1.jpg') }}" alt="">
                                            <p>Apabila data sudah diinput anda bisa tekan tombol prediksi</p>
                                            <img class="col-lg-12 shadow-lg mb-4" src="{{ asset('home/assets/gambar/tutorial2.jpg') }}" alt="">
                                            <p>Maka hasil prediksi akan muncul didalam kolom hasil prediksi</p>
                                            <img class="col-lg-12 shadow-lg" src="{{ asset('home/assets/gambar/tutorial3.jpg') }}" alt="">
                                        </div>
                                        <!--/column -->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.card -->
                    </div>
                    <!-- /.col -->
                </div>
            </div>
        </div>
    </section>
@endsection

@push('footer')
    <script>
        function resetSession() {
            window.location.href = "{{ route('reset.session') }}";
        }
    </script>
@endpush