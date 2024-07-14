@extends('layout.main')

@section('container')
    <section class="wrapper bg-dark text-white">
        <div class="container pt-18 pt-md-18 pb-21 pb-md-21 text-center">
            <div class="row">
                <div class="col-sm-10 col-md-8 col-lg-6 col-xl-6 col-xxl-5 mx-auto">
                    <h1 class="display-1 text-white mb-3">Nilai Kadar Tanah</h1>
                    <p class="lead px-xl-10 px-xxl-10">Kadar tanah yang baik dapat dihitung dari faktor-faktor dibawah ini.
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
                                    <div class="card shadow-lg mb-5">
                                        <div class="row gx-0">
                                            <div class="col-lg-3 image-wrapper bg-image bg-cover rounded-top rounded-lg-start"
                                                style="display: flex; justify-content: center; align-items: center; height: 300px; position: relative;">
                                                <img src="{{ asset('home/assets/gambar/icon/oksigen.png') }}" alt="Image"
                                                    style="width: 50%; height: 50%; object-fit: contain;">
                                            </div>


                                            <div class="col-lg-9">
                                                <div class="p-3 p-md-4 p-lg-3">
                                                    <div class="swiper-container dots-closer mb-4" data-margin="30"
                                                        data-dots="true">
                                                        <div class="swiper">
                                                            <div class="swiper-wrapper">
                                                                <div class="swiper-slide">
                                                                    <blockquote class="">
                                                                        <h1><strong>Oksigen</strong></h1>
                                                                        <p>Oksigen di tanah, yang terdapat dalam pori-pori
                                                                            tanah, adalah komponen penting yang diperlukan
                                                                            untuk mendukung kehidupan mikroorganisme dan
                                                                            akar tanaman. Tanah mengandung ruang kosong yang
                                                                            dapat diisi oleh udara atau air, dan oksigen
                                                                            merupakan bagian dari udara yang ada dalam
                                                                            pori-pori ini. Akar tanaman memerlukan oksigen
                                                                            untuk respirasi, suatu proses yang menghasilkan
                                                                            energi penting untuk pertumbuhan dan pengambilan
                                                                            nutrisi. Selain itu, mikroorganisme tanah
                                                                            seperti bakteri dan jamur juga membutuhkan
                                                                            oksigen untuk dekomposisi bahan organik dan
                                                                            siklus nutrisi, yang pada gilirannya membuat
                                                                            nutrisi tersedia bagi tanaman. Tanah dengan
                                                                            kadar oksigen yang cukup cenderung lebih sehat
                                                                            dan memiliki struktur yang baik, mengurangi
                                                                            risiko kondisi anaerobik yang dapat menghasilkan
                                                                            senyawa beracun seperti metana dan hidrogen
                                                                            sulfida.
                                                                        </p>
                                                                    </blockquote>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card shadow-lg mb-5">
                                        <div class="row gx-0">
                                            <div class="col-lg-3 image-wrapper bg-image bg-cover rounded-top rounded-lg-start"
                                                style="display: flex; justify-content: center; align-items: center; height: 300px; position: relative;">
                                                <img src="{{ asset('home/assets/gambar/icon/tekstur.png') }}" alt="Image"
                                                    style="width: 50%; height: 50%; object-fit: contain;">
                                            </div>
                                            <div class="col-lg-9">
                                                <div class="p-3 p-md-4 p-lg-3">
                                                    <div class="swiper-container dots-closer mb-4" data-margin="30"
                                                        data-dots="true">
                                                        <div class="swiper">
                                                            <div class="swiper-wrapper">
                                                                <div class="swiper-slide">
                                                                    <blockquote class="">
                                                                        <h1><strong>Tekstur</strong></h1>
                                                                        <p>Tekstur tanah merujuk pada proporsi relatif dari
                                                                            partikel-partikel mineral penyusunnya, yaitu
                                                                            pasir, debu, dan lempung. Tekstur ini
                                                                            mempengaruhi sifat fisik tanah, seperti
                                                                            drainase, aerasi, kemampuan menyimpan air, dan
                                                                            ketersediaan nutrisi bagi tanaman. Tanah
                                                                            berpasir memiliki partikel-partikel besar yang
                                                                            memungkinkan drainase dan aerasi yang baik
                                                                            tetapi kurang mampu menyimpan air dan nutrisi.
                                                                            Sebaliknya, tanah berlempung memiliki
                                                                            partikel-partikel kecil yang membuatnya mampu
                                                                            menyimpan air dan nutrisi dengan baik, namun
                                                                            memiliki drainase dan aerasi yang buruk. Tekstur
                                                                            tanah yang ideal untuk pertumbuhan tanaman
                                                                            biasanya merupakan campuran yang seimbang,
                                                                            seperti tanah liat berpasir, yang menawarkan
                                                                            kombinasi sifat-sifat terbaik dari pasir, debu,
                                                                            dan lempung.
                                                                        </p>
                                                                    </blockquote>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card shadow-lg mb-5">
                                        <div class="row gx-0">
                                            <div class="col-lg-3 image-wrapper bg-image bg-cover rounded-top rounded-lg-start"
                                                style="display: flex; justify-content: center; align-items: center; height: 300px; position: relative;">
                                                <img src="{{ asset('home/assets/gambar/icon/kelembapan.png') }}" alt="Image"
                                                    style="width: 50%; height: 50%; object-fit: contain;">
                                            </div>
                                            <div class="col-lg-9">
                                                <div class="p-3 p-md-4 p-lg-3">
                                                    <div class="swiper-container dots-closer mb-4" data-margin="30"
                                                        data-dots="true">
                                                        <div class="swiper">
                                                            <div class="swiper-wrapper">
                                                                <div class="swiper-slide">
                                                                    <blockquote class="">
                                                                        <h1><strong>Kelembapan</strong></h1>
                                                                        <p>Kelembapan tanah adalah jumlah air yang
                                                                            terkandung dalam tanah, yang sangat penting
                                                                            untuk pertumbuhan tanaman dan kesehatan
                                                                            ekosistem tanah. Air dalam tanah diperlukan
                                                                            untuk berbagai proses fisiologis tanaman,
                                                                            seperti penyerapan nutrisi dan fotosintesis.
                                                                            Kelembapan tanah juga mempengaruhi aktivitas
                                                                            mikroorganisme tanah yang berperan dalam
                                                                            dekomposisi bahan organik dan siklus nutrisi.
                                                                            Tanah dengan kelembapan yang optimal mendukung
                                                                            pertumbuhan tanaman yang sehat, sementara tanah
                                                                            yang terlalu kering atau terlalu jenuh air dapat
                                                                            menghambat pertumbuhan tanaman dan menyebabkan
                                                                            kondisi anaerobik yang merugikan. Faktor-faktor
                                                                            seperti tekstur tanah, struktur tanah, dan iklim
                                                                            mempengaruhi kapasitas tanah untuk menyimpan dan
                                                                            mengalirkan air.
                                                                        </p>
                                                                    </blockquote>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card shadow-lg mb-5">
                                        <div class="row gx-0">
                                            <div class="col-lg-3 image-wrapper bg-image bg-cover rounded-top rounded-lg-start"
                                                style="display: flex; justify-content: center; align-items: center; height: 300px; position: relative;">
                                                <img src="{{ asset('home/assets/gambar/icon/suhu.png') }}" alt="Image"
                                                    style="width: 50%; height: 50%; object-fit: contain;">
                                            </div>
                                            <div class="col-lg-9">
                                                <div class="p-3 p-md-4 p-lg-3">
                                                    <div class="swiper-container dots-closer mb-4" data-margin="30"
                                                        data-dots="true">
                                                        <div class="swiper">
                                                            <div class="swiper-wrapper">
                                                                <div class="swiper-slide">
                                                                    <blockquote class="">
                                                                        <h1><strong>Suhu</strong></h1>
                                                                        <p>Suhu tanah adalah ukuran seberapa panas atau
                                                                            dingin tanah pada suatu waktu tertentu, yang
                                                                            memainkan peran penting dalam proses fisiologis
                                                                            tanaman dan aktivitas mikroorganisme tanah. Suhu
                                                                            tanah mempengaruhi kecepatan perkecambahan
                                                                            benih, pertumbuhan akar, dan penyerapan nutrisi
                                                                            oleh tanaman. Selain itu, mikroorganisme tanah
                                                                            yang terlibat dalam dekomposisi bahan organik
                                                                            dan siklus nutrisi juga sangat dipengaruhi oleh
                                                                            suhu tanah; aktivitas mereka cenderung meningkat
                                                                            pada suhu yang lebih hangat hingga batas
                                                                            tertentu. Faktor-faktor seperti iklim, tutupan
                                                                            vegetasi, jenis tanah, dan kelembapan tanah
                                                                            mempengaruhi suhu tanah.
                                                                        </p>
                                                                    </blockquote>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card shadow-lg mb-5">
                                        <div class="row gx-0">
                                            <div class="col-lg-3 image-wrapper bg-image bg-cover rounded-top rounded-lg-start"
                                                style="display: flex; justify-content: center; align-items: center; height: 300px; position: relative;">
                                                <img src="{{ asset('home/assets/gambar/icon/keasaman.png') }}" alt="Image"
                                                    style="width: 50%; height: 50%; object-fit: contain;">
                                            </div>
                                            <div class="col-lg-9">
                                                <div class="p-3 p-md-4 p-lg-3">
                                                    <div class="swiper-container dots-closer mb-4" data-margin="30"
                                                        data-dots="true">
                                                        <div class="swiper">
                                                            <div class="swiper-wrapper">
                                                                <div class="swiper-slide">
                                                                    <blockquote class="">
                                                                        <h1><strong>Keasaman</strong></h1>
                                                                        <p>Keasaman tanah, atau pH tanah, mengukur tingkat
                                                                            keasaman atau kebasaan tanah, yang merupakan
                                                                            faktor penting dalam menentukan kesuburan tanah
                                                                            dan ketersediaan nutrisi bagi tanaman. Tanah
                                                                            dengan pH netral (sekitar 7) biasanya dianggap
                                                                            ideal untuk sebagian besar tanaman, karena
                                                                            nutrisi penting seperti nitrogen, fosfor, dan
                                                                            kalium lebih mudah tersedia. Tanah yang terlalu
                                                                            asam (pH rendah) atau terlalu basa (pH tinggi)
                                                                            dapat mengikat nutrisi, membuatnya tidak
                                                                            tersedia untuk tanaman, dan mempengaruhi
                                                                            aktivitas mikroorganisme yang menguntungkan.
                                                                            Keasaman tanah dipengaruhi oleh berbagai faktor
                                                                            termasuk jenis mineral yang ada dalam tanah,
                                                                            curah hujan, dan penggunaan pupuk tertentu.
                                                                        </p>
                                                                    </blockquote>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
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
