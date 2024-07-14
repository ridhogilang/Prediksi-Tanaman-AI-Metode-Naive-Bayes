@extends('layout.main')

@push('header')
<style>
    .center-content {
    justify-content: center; /* Horizontal alignment */
    align-items: center; /* Vertical alignment (optional, if you want to center vertically as well) */
    height: 100%; /* Ensure it takes the full height of the parent */
}
</style>
    
@endpush

@section('container')
    <section class="wrapper bg-dark text-white">
        <div class="container pt-18 pt-md-18 pb-21 pb-md-21 text-center">
            <div class="row">
                <div class="col-sm-10 col-md-8 col-lg-6 col-xl-6 col-xxl-5 mx-auto">
                    <h1 class="display-1 text-white mb-3">Team Pengembang</h1>
                    <p class="lead px-xl-10 px-xxl-10">Ini adalah tim pengemabang hebat kami.
                    </p>
                </div>
                <!-- /column -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </section>
    <!-- /section -->
    <section class="wrapper bg-light">
        <div class="container pb-14 pb-md-16">
            <div class="row">
                <div class="col mt-n19 mb-16">
                    <div class="card">
                        <div class="row gx-0">
                            <div class="col-lg-12">
                                <div class="p-10 p-md-11 p-lg-13">
                                    <div class="swiper-container text-center mb-8 center-content" data-margin="30" data-dots="true"
                                        data-items-xl="3" data-items-md="2" data-items-xs="1">
                                        <div class="swiper">
                                            <div class="swiper-wrapper center-content">
                                                <div class="swiper-slide">
                                                    <img class="rounded-circle w-20 mx-auto mb-10"
                                                        src="{{ asset('home/assets/gambar/budosen.jpg') }}"
                                                        srcset="{{ asset('home/assets/gambar/budosen.jpg') }} 2x" alt="" />
                                                    <h4 class="mb-1">Yumarlin MZ, S.Kom., M.Pd., M.Kom.</h4>
                                                    <div class="meta mb-2">Dosen Pembimbing</div>
                                                    <nav class="nav social justify-content-center text-center mb-0">
                                                        <a href="#"><i class="uil uil-twitter"></i></a>
                                                        <a href="#"><i class="uil uil-slack"></i></a>
                                                        <a href="#"><i class="uil uil-linkedin"></i></a>
                                                    </nav>
                                                    <!-- /.social -->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <br><br><div class="swiper-container text-center mb-6" data-margin="30" data-dots="true"
                                        data-items-xl="3" data-items-md="2" data-items-xs="1">
                                        <div class="swiper">
                                            <div class="swiper-wrapper">
                                                <div class="swiper-slide">
                                                    <img class="rounded-circle w-20 mx-auto mb-4"
                                                        src="{{ asset('home/assets/gambar/ridho.jpg') }}"
                                                        srcset="{{ asset('home/assets/gambar/ridho.jpg') }} 2x" alt="" />
                                                    <h4 class="mb-1">Ridho Gilang</h4>
                                                    <div class="meta mb-2">21330057</div>
                                                    <nav class="nav social justify-content-center text-center mb-0">
                                                        <a href="#"><i class="uil uil-twitter"></i></a>
                                                        <a href="#"><i class="uil uil-slack"></i></a>
                                                        <a href="#"><i class="uil uil-linkedin"></i></a>
                                                    </nav>
                                                    <!-- /.social -->
                                                </div>
                                                <!--/.swiper-slide -->
                                                <div class="swiper-slide">
                                                    <img class="rounded-circle w-20 mx-auto mb-4"
                                                        src="{{ asset('home/assets/gambar/dayat.jpg') }}"
                                                        srcset="{{ asset('home/assets/gambar/dayat.jpg') }} 2x" alt="" />
                                                    <h4 class="mb-1">Dayatul Rochman</h4>
                                                    <div class="meta mb-2">21330006</div>
                                                    <nav class="nav social justify-content-center text-center mb-0">
                                                        <a href="#"><i class="uil uil-youtube"></i></a>
                                                        <a href="#"><i class="uil uil-facebook-f"></i></a>
                                                        <a href="#"><i class="uil uil-dribbble"></i></a>
                                                    </nav>
                                                    <!-- /.social -->
                                                </div>
                                                <!--/.swiper-slide -->
                                                <div class="swiper-slide">
                                                    <img class="rounded-circle w-20 mx-auto mb-4"
                                                        src="{{ asset('home/assets/gambar/adam.jpg') }}"
                                                        srcset="{{ asset('home/assets/gambar/adam.jpg') }} 2x" alt="" />
                                                    <h4 class="mb-1">Adam Nur Ardhi</h4>
                                                    <div class="meta mb-2">23330038</div>
                                                    <nav class="nav social justify-content-center text-center mb-0">
                                                        <a href="#"><i class="uil uil-linkedin"></i></a>
                                                        <a href="#"><i class="uil uil-tumblr-square"></i></a>
                                                        <a href="#"><i class="uil uil-facebook-f"></i></a>
                                                    </nav>
                                                    <!-- /.social -->
                                                </div>
                                            </div>
                                            <!--/.swiper-wrapper -->
                                        </div>
                                        <!-- /.swiper -->
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

{{-- <section class="wrapper bg-light">
    <div class="container py-14 py-md-16">
        <div class="row gx-lg-8 gx-xl-12 gy-10 align-items-center">
            <div class="col-lg-12">
                <div class="swiper-container text-center mb-6" data-margin="30" data-dots="true" data-items-xl="3"
                    data-items-md="2" data-items-xs="1">
                    <div class="swiper">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <img class="rounded-circle w-20 mx-auto mb-4" src="{{ asset('home/assets/gambar/home1.jpg') }}"
                                    srcset="./assets/img/avatars/t1@2x.jpg 2x" alt="" />
                                <h4 class="mb-1">Cory Zamora</h4>
                                <div class="meta mb-2">Marketing Specialist</div>
                                <p class="mb-2">Etiam porta sem magna malesuada mollis.</p>
                                <nav class="nav social justify-content-center text-center mb-0">
                                    <a href="#"><i class="uil uil-twitter"></i></a>
                                    <a href="#"><i class="uil uil-slack"></i></a>
                                    <a href="#"><i class="uil uil-linkedin"></i></a>
                                </nav>
                                <!-- /.social -->
                            </div>
                            <!--/.swiper-slide -->
                            <div class="swiper-slide">
                                <img class="rounded-circle w-20 mx-auto mb-4" src="./assets/img/avatars/t2.jpg"
                                    srcset="./assets/img/avatars/t2@2x.jpg 2x" alt="" />
                                <h4 class="mb-1">Coriss Ambady</h4>
                                <div class="meta mb-2">Financial Analyst</div>
                                <p class="mb-2">Aenean eu leo quam. Pellentesque ornare lacinia.</p>
                                <nav class="nav social justify-content-center text-center mb-0">
                                    <a href="#"><i class="uil uil-youtube"></i></a>
                                    <a href="#"><i class="uil uil-facebook-f"></i></a>
                                    <a href="#"><i class="uil uil-dribbble"></i></a>
                                </nav>
                                <!-- /.social -->
                            </div>
                            <!--/.swiper-slide -->
                            <div class="swiper-slide">
                                <img class="rounded-circle w-20 mx-auto mb-4" src="./assets/img/avatars/t3.jpg"
                                    srcset="./assets/img/avatars/t3@2x.jpg 2x" alt="" />
                                <h4 class="mb-1">Nikolas Brooten</h4>
                                <div class="meta mb-2">Sales Manager</div>
                                <p class="mb-2">Donec ornare elit quam porta gravida at eget.</p>
                                <nav class="nav social justify-content-center text-center mb-0">
                                    <a href="#"><i class="uil uil-linkedin"></i></a>
                                    <a href="#"><i class="uil uil-tumblr-square"></i></a>
                                    <a href="#"><i class="uil uil-facebook-f"></i></a>
                                </nav>
                                <!-- /.social -->
                            </div>
                            <!--/.swiper-slide -->
                            <div class="swiper-slide">
                                <img class="rounded-circle w-20 mx-auto mb-4" src="./assets/img/avatars/t4.jpg"
                                    srcset="./assets/img/avatars/t4@2x.jpg 2x" alt="" />
                                <h4 class="mb-1">Jackie Sanders</h4>
                                <div class="meta mb-2">Investment Planner</div>
                                <p class="mb-2">Nullam risus eget urna mollis ornare vel eu leo.</p>
                                <nav class="nav social justify-content-center text-center mb-0">
                                    <a href="#"><i class="uil uil-twitter"></i></a>
                                    <a href="#"><i class="uil uil-facebook-f"></i></a>
                                    <a href="#"><i class="uil uil-dribbble"></i></a>
                                </nav>
                                <!-- /.social -->
                            </div>
                            <!--/.swiper-slide -->
                            <div class="swiper-slide">
                                <img class="rounded-circle w-20 mx-auto mb-4" src="./assets/img/avatars/t5.jpg"
                                    srcset="./assets/img/avatars/t5@2x.jpg 2x" alt="" />
                                <h4 class="mb-1">Tina Geller</h4>
                                <div class="meta mb-2">Assistant Buyer</div>
                                <p class="mb-2">Vivamus sagittis lacus vel augue laoreet rutrum.</p>
                                <nav class="nav social justify-content-center text-center mb-0">
                                    <a href="#"><i class="uil uil-facebook-f"></i></a>
                                    <a href="#"><i class="uil uil-slack"></i></a>
                                    <a href="#"><i class="uil uil-dribbble"></i></a>
                                </nav>
                                <!-- /.social -->
                            </div>
                            <!--/.swiper-slide -->
                        </div>
                        <!--/.swiper-wrapper -->
                    </div>
                    <!-- /.swiper -->
                </div>
            </div>
            <!--/column -->
        </div>
        <!--/.row -->
    </div>
    <!-- /.container -->
</section> --}}
