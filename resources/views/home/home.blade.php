@extends('layout.main')

@section('container')
    <section class="wrapper bg-dark">
        <div class="swiper-container swiper-hero dots-over" data-margin="0" data-autoplay="true" data-autoplaytime="7000"
            data-nav="true" data-dots="true" data-items="1">
            <div class="swiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide bg-overlay bg-overlay-400 bg-dark bg-image"
                        data-image-src="{{ asset('home/assets/gambar/home1.jpg') }}">
                        <div class="container h-100">
                            <div class="row h-100">
                                <div
                                    class="col-md-10 offset-md-1 col-lg-7 offset-lg-0 col-xl-6 col-xxl-5 text-center text-lg-start justify-content-center align-self-center align-items-start">
                                    <h2
                                        class="display-1 fs-45 mb-4 text-white animate__animated animate__slideInDown animate__delay-1s">
                                        Deteksi Kesuburan Tanah Menggunakan Metode Naive Bayes Classifier </h2>
                                    <p
                                        class="lead fs-20 lh-sm mb-7 text-white animate__animated animate__slideInRight animate__delay-2s">
                                        Deteksi keseburan tanah pada lahan pertanian sangat penting untuk mengetahui jenis tanaman yang cocok pada tanah tersebut.
                                    </p>
                                    <div class="animate__animated animate__slideInUp animate__delay-3s"><a href="{{ route('prediksi.view') }}"
                                            class="btn btn-lg btn-outline-white rounded-pill me-2">Prediski Kesuburan Tanah</a>
                                        <a href="{{ route('tutorial') }}" class="btn btn-lg btn-outline-white rounded-pill" href="">Tutorial</a></div>
                                </div>
                                <!--/column -->
                            </div>
                            <!--/.row -->
                        </div>
                        <!--/.container -->
                    </div>
                </div>
                <!--/.swiper-wrapper -->
            </div>
            <!-- /.swiper -->
        </div>
        <!-- /.swiper-container -->
    </section>
    <section class="wrapper bg-light angled lower-end">
        <div class="container py-14 py-md-16">
            <div class="row gx-lg-8 gx-xl-12 gy-10 mb-14 mb-md-17 align-items-center">
                <div class="col-lg-6 position-relative order-lg-2">
                    <div class="shape bg-dot primary rellax w-16 h-20" data-rellax-speed="1"
                        style="top: 3rem; left: 5.5rem"></div>
                    <div class="overlap-grid overlap-grid-2">
                        <div class="item">
                            <figure class="rounded shadow"><img src="{{ asset('home/assets/gambar/home2.jpg') }}"
                                    srcset="{{ asset('home/assets/gambar/home2.jpg') }} 2x"  alt=""></figure>
                        </div>
                        <div class="item">
                            <figure class="rounded shadow"><img src="{{ asset('home/assets/gambar/home3.jpg') }}"
                                    srcset="{{ asset('home/assets/gambar/home3.jpg') }} 2x" alt=""></figure>
                        </div>
                    </div>
                </div>
                <!--/column -->
                <div class="col-lg-6">
                    <img src="{{ asset('home/assets/gambar/icon/prepare.png') }}" class="svg-inject icon-svg icon-svg-md mb-4"
                        alt="" />
                    <h2 class="display-4 mb-3">Apa yang perlu dipersiapkan?</h2>
                    <p class="mb-6">Anda harus mempersiapkan beberapa data yang dibutuhkan dengan mengukur kadar tanah yang akan anda bajak/tanami setelahnya bisa juga menyesuaikan dengan suhu dan cuaca yang ada kerena hal tersebut sangat mempengaruhi kadar tanah yang akan anda hitung.</p>
                    <div class="row gy-3 gx-xl-8">
                        <div class="col-xl-6">
                            <ul class="icon-list bullet-bg bullet-soft-primary mb-0">
                                <li><span><i class="uil uil-check"></i></span><span>Kadar oksigen pada tanah.</span></li>
                                <li class="mt-3"><span><i class="uil uil-check"></i></span><span>Tekstur tanah yang akan ditanami.</span></li>
                                <li class="mt-3"><span><i class="uil uil-check"></i></span><span>Nilai Kelembapan pada tanah.</span></li>
                            </ul>
                        </div>
                        <!--/column -->
                        <div class="col-xl-6">
                            <ul class="icon-list bullet-bg bullet-soft-primary mb-0">
                                <li><span><i class="uil uil-check"></i></span><span>Suhu tanah pada saat perhitungan sebelum proses tanam.</span></li>
                                <li class="mt-3"><span><i class="uil uil-check"></i></span><span>Kadar keasaman pada tanah.</span></li>
                            </ul>
                        </div>
                        <!--/column -->
                    </div>
                    <!--/.row -->
                </div>
                <!--/column -->
            </div>
            <!--/.row -->
            <div class="row mb-5">
                <div class="col-md-10 col-xl-8 col-xxl-7 mx-auto text-center">
                    <img src="{{ asset('home/assets/gambar/icon/step.png') }}" class="svg-inject icon-svg icon-svg-md mb-4"
                        alt="" />
                    <h2 class="display-4 mb-4 px-lg-14">Bagaimana langkah untuk mendeteksi kesuburan tanah.</h2>
                </div>
                <!-- /column -->
            </div>
            <!-- /.row -->
            <div class="row gx-lg-8 gx-xl-12 gy-10 align-items-center">
                <div class="col-lg-6 order-lg-2">
                    <div class="card me-lg-6">
                        <div class="card-body p-6">
                            <div class="d-flex flex-row">
                                <div>
                                    <span class="icon btn btn-circle btn-lg btn-soft-primary pe-none me-4"><span
                                            class="number">01</span></span>
                                </div>
                                <div>
                                    <h4 class="mb-1">Data Tanah</h4>
                                    <p class="mb-0">Anda perlu mengumpulkan data dari tanah anda.</p>
                                </div>
                            </div>
                        </div>
                        <!--/.card-body -->
                    </div>
                    <!--/.card -->
                    <div class="card ms-lg-13 mt-6">
                        <div class="card-body p-6">
                            <div class="d-flex flex-row">
                                <div>
                                    <span class="icon btn btn-circle btn-lg btn-soft-primary pe-none me-4"><span
                                            class="number">02</span></span>
                                </div>
                                <div>
                                    <h4 class="mb-1">Proses input</h4>
                                    <p class="mb-0">Inputkan data pada form prediksi kesuburan tanah.</p>
                                </div>
                            </div>
                        </div>
                        <!--/.card-body -->
                    </div>
                    <!--/.card -->
                    <div class="card mx-lg-6 mt-6">
                        <div class="card-body p-6">
                            <div class="d-flex flex-row">
                                <div>
                                    <span class="icon btn btn-circle btn-lg btn-soft-primary pe-none me-4"><span
                                            class="number">03</span></span>
                                </div>
                                <div>
                                    <h4 class="mb-1">Hasil Analisis</h4>
                                    <p class="mb-0">Setelah semua data terinput maka sistem akan mendeteksi tanaman yang cocok untuk ditanam pada tanah tersebut.</p>
                                </div>
                            </div>
                        </div>
                        <!--/.card-body -->
                    </div>
                    <!--/.card -->
                </div>
                <!--/column -->
                <div class="col-lg-6">
                    <h2 class="display-6 mb-3">Bagaimana sistem prediksi ini bekerja?</h2>
                    <p>Sistem deteksi kesuburan tanah dapat bekerja dengan baik karena sistem yang dikembangkan memiliki banyak data dari para ahli dan pakar tanah yang mampu mendeteksi tanaman apa yang dapat tumbuh dengan baik pada tanah yang anda miliki.</p>
                    <p class="mb-6">Anda hanya perlu memastikan bahwa data tanah yang anda miliki adalah data yang akurat agar hasil prediksi tanaman yang cocok dapat memberikan hasil yang akurat.</p>
                    <a href="{{ route('prediksi.view') }}" class="btn btn-primary rounded-pill mb-0">Prediksi Kesuburan Tanah</a>
                </div>
                <!--/column -->
            </div>
            <!--/.row -->
        </div>
        <!-- /.container -->
    </section>
@endsection
