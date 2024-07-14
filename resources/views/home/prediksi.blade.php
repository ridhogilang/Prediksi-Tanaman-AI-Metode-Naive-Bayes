@extends('layout.main')

@section('container')
    <section class="wrapper bg-dark text-white">
        <div class="container pt-18 pt-md-18 pb-21 pb-md-21 text-center">
            <div class="row">
                <div class="col-sm-10 col-md-8 col-lg-6 col-xl-6 col-xxl-5 mx-auto">
                    <h1 class="display-1 text-white mb-3">Prediksi Tanah</h1>
                    <p class="lead px-xl-10 px-xxl-10">Masukkan data tanah yang sudah diteliti untuk mendapatkan rekomendasi
                        tanaman yang cocok</p>
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
                    <div class="card shadow-lg">
                        <div class="row gx-0">
                            <!-- Column untuk Card -->
                            <div class="col-lg-12">
                                <div class="p-10 p-md-11 p-lg-13">
                                    {{-- <form id="prediksiForm"> --}}
                                    <form id="" method="POST" action="{{ route('predict') }}">
                                        @csrf
                                        <div class="row">
                                            <div class="col">
                                                <div class="form-floating mb-4">
                                                    <input id="oksigen" name="oksigen" type="number" class="form-control"
                                                        placeholder="Masukkan" min="30" max="80"
                                                        value="{{ $inputValues['oksigen'] ?? '' }}">
                                                    <label for="oksigen">Oksigen (%)</label>
                                                    @if ($errors->has('oksigen'))
                                                        <span class="text-danger">{{ $errors->first('oksigen') }}</span>
                                                    @endif
                                                </div>
                                                <p class="text-muted fs-13"><strong>*</strong> Masukkan kadar oksigen tanah
                                                    dalam bentuk persentase</p>
                                            </div>
                                            <div class="col">
                                                <div class="form-floating mb-4">
                                                    <input id="tekstur" name="tekstur" type="number" class="form-control"
                                                        placeholder="Masukkan" step="0.01" min="0.01" max="2.5"
                                                        value="{{ $inputValues['tekstur'] ?? '' }}">
                                                    <label for="tekstur">Tekstur (mm)</label>
                                                    @if ($errors->has('tekstur'))
                                                        <span class="text-danger">{{ $errors->first('tekstur') }}</span>
                                                    @endif
                                                </div>
                                                <p class="text-muted fs-13"><strong>*</strong> Masukkan tekstur tanah dalam
                                                    milimeter</p>
                                            </div>
                                            <div class="col">
                                                <div class="form-floating mb-4">
                                                    <input id="kelembapan" name="kelembapan" type="number"
                                                        class="form-control" placeholder="Masukkan" min="38"
                                                        max="85" value="{{ $inputValues['kelembapan'] ?? '' }}">
                                                    <label for="kelembapan">Kelembapan (%)</label>
                                                    @if ($errors->has('kelembapan'))
                                                        <span class="text-danger">{{ $errors->first('kelembapan') }}</span>
                                                    @endif
                                                </div>
                                                <p class="text-muted fs-13"><strong>*</strong> Masukkan kelembapan tanah
                                                    dalam bentuk persentase</p>
                                            </div>
                                            <div class="col">
                                                <div class="form-floating mb-4">
                                                    <input id="suhu" name="suhu" type="number" class="form-control"
                                                        placeholder="Masukkan" min="5" max="41"
                                                        value="{{ $inputValues['suhu'] ?? '' }}">
                                                    <label for="suhu">Suhu (°C)</label>
                                                    @if ($errors->has('suhu'))
                                                        <span class="text-danger">{{ $errors->first('suhu') }}</span>
                                                    @endif
                                                </div>
                                                <p class="text-muted fs-13"><strong>*</strong> Masukkan suhu tanah dalam
                                                    bentuk Celsius</p>
                                            </div>
                                            <div class="col">
                                                <div class="form-floating mb-4">
                                                    <input id="keasaman" name="keasaman" type="number"
                                                        class="form-control" placeholder="Masukkan" step="0.01"
                                                        min="5.1" max="8.1"
                                                        value="{{ $inputValues['keasaman'] ?? '' }}">
                                                    <label for="keasaman">Keasaman (pH)</label>
                                                    @if ($errors->has('keasaman'))
                                                        <span class="text-danger">{{ $errors->first('keasaman') }}</span>
                                                    @endif
                                                </div>
                                                <p class="text-muted fs-13"><strong>*</strong> Masukkan kadar keasaman tanah
                                                    dalam potential of Hydrogen</p>
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-primary rounded-pill mt-2">Prediksi</button>
                                        <a class="btn btn-gradient gradient-6 rounded-pill mt-2 ms-3" href="#"
                                            onclick="resetSession()">Reset</a>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
                <div class="row">
                    <div class="col mb-16">
                        <div class="card shadow-lg card-border-top border-success">
                            <div class="row gx-0">
                                <!-- Column untuk Card -->
                                <div class="col-lg-12">
                                    <div class="p-10 p-md-11 p-lg-13">
                                        <h3>Hasil Prediski Tanaman</h3>
                                        {!! nl2br($resultHtml) !!}
                                        @if ($jenisTanaman1 === 'Cabai')
                                            <div class="row gx-0">
                                                <div class="col-lg-12">
                                                    <div class="card shadow-lg mb-5 mt-5">
                                                        <div class="row gx-0">
                                                            <div class="col-lg-3 image-wrapper bg-image bg-cover rounded-top rounded-lg-start"
                                                                data-image-src="{{ asset('home/assets/gambar/cabai.jpg') }}">
                                                            </div>
                                                            <div class="col-lg-9">
                                                                <div class="p-3 p-md-4 p-lg-3">
                                                                    <div class="swiper-container dots-closer mb-4"
                                                                        data-margin="30" data-dots="true">
                                                                        <div class="swiper">
                                                                            <div class="swiper-wrapper">
                                                                                <div class="swiper-slide">
                                                                                    <blockquote class="">
                                                                                        <h1><strong>Cabai</strong></h1>
                                                                                        <p>Tanaman cabai (Capsicum spp.)
                                                                                            tumbuh baik
                                                                                            di tanah yang gembur, kaya akan
                                                                                            bahan
                                                                                            organik, dan memiliki drainase
                                                                                            yang
                                                                                            baik. pH tanah yang ideal untuk
                                                                                            pertumbuhan cabai berkisar
                                                                                            antara 5.5
                                                                                            hingga 6.8. Untuk menanam cabai,
                                                                                            pilih
                                                                                            lokasi dengan sinar matahari
                                                                                            penuh
                                                                                            selama minimal 6-8 jam sehari.
                                                                                            Mulailah
                                                                                            dengan menyemai biji cabai di
                                                                                            tempat
                                                                                            persemaian hingga bibit memiliki
                                                                                            beberapa daun sejati, lalu
                                                                                            pindahkan ke
                                                                                            lahan dengan jarak tanam sekitar
                                                                                            45-60
                                                                                            cm antara tanaman. Pastikan
                                                                                            tanah tetap
                                                                                            lembab, namun tidak tergenang,
                                                                                            dengan
                                                                                            penyiraman yang teratur.
                                                                                            Pemberian pupuk
                                                                                            organik atau kompos juga
                                                                                            dianjurkan
                                                                                            untuk mendukung pertumbuhan yang
                                                                                            sehat.
                                                                                        </p>
                                                                                    </blockquote>
                                                                                </div>
                                                                            </div>
                                                                            <!-- /.swiper-wrapper -->
                                                                        </div>
                                                                        <!-- /.swiper -->
                                                                    </div>
                                                                    <!-- /.swiper-container -->
                                                                </div>
                                                                <!--/div -->
                                                            </div>
                                                            <!--/column -->
                                                        </div>
                                                        <!--/.row -->
                                                    </div>
                                                </div>
                                            </div>
                                        @elseif ($jenisTanaman1 === 'Jagung')
                                            <div class="row gx-0">
                                                <div class="col-lg-12">
                                                    <div class="card shadow-lg mb-5 mt-5">
                                                        <div class="row gx-0">
                                                            <div class="col-lg-3 image-wrapper bg-image bg-cover rounded-top rounded-lg-start"
                                                                data-image-src="{{ asset('home/assets/gambar/jagung.jpg') }}">
                                                            </div>
                                                            <div class="col-lg-9">
                                                                <div class="p-3 p-md-4 p-lg-3">
                                                                    <div class="swiper-container dots-closer mb-4"
                                                                        data-margin="30" data-dots="true">
                                                                        <div class="swiper">
                                                                            <div class="swiper-wrapper">
                                                                                <div class="swiper-slide">
                                                                                    <blockquote class="">
                                                                                        <h1><strong>Jagung</strong></h1>
                                                                                        <p>Tanaman jagung (Zea mays) tumbuh
                                                                                            optimal
                                                                                            di tanah yang subur, gembur, dan
                                                                                            memiliki drainase baik, dengan
                                                                                            pH tanah
                                                                                            ideal antara 5.8 hingga 6.8.
                                                                                            Tanah
                                                                                            lempung berpasir yang kaya bahan
                                                                                            organik
                                                                                            sangat cocok untuk menanam
                                                                                            jagung. Untuk
                                                                                            menanam jagung, pilih lokasi
                                                                                            yang
                                                                                            mendapat sinar matahari penuh
                                                                                            sepanjang
                                                                                            hari. Sebelum menanam, olah
                                                                                            tanah hingga
                                                                                            gembur dan beri pupuk kandang
                                                                                            atau
                                                                                            kompos. Tanam benih jagung
                                                                                            dengan
                                                                                            kedalaman sekitar 2-5 cm dan
                                                                                            jarak tanam
                                                                                            sekitar 20-30 cm antar tanaman,
                                                                                            serta
                                                                                            jarak antar baris sekitar 60-90
                                                                                            cm.
                                                                                            Pastikan penyiraman cukup,
                                                                                            terutama saat
                                                                                            fase pertumbuhan awal,
                                                                                            pembentukan
                                                                                            tongkol, dan pengisian biji.
                                                                                            Pengendalian gulma dan pemberian
                                                                                            pupuk
                                                                                            tambahan saat tanaman mulai
                                                                                            tumbuh besar
                                                                                            akan membantu menghasilkan panen
                                                                                            jagung
                                                                                            yang optimal.
                                                                                        </p>
                                                                                    </blockquote>
                                                                                </div>
                                                                            </div>
                                                                            <!-- /.swiper-wrapper -->
                                                                        </div>
                                                                        <!-- /.swiper -->
                                                                    </div>
                                                                    <!-- /.swiper-container -->
                                                                </div>
                                                                <!--/div -->
                                                            </div>
                                                            <!--/column -->
                                                        </div>
                                                        <!--/.row -->
                                                    </div>
                                                </div>
                                            </div>
                                        @elseif ($jenisTanaman1 === 'Padi')
                                            <div class="row gx-0">
                                                <div class="col-lg-12">
                                                    <div class="card shadow-lg mb-5 mt-5">
                                                        <div class="row gx-0">
                                                            <div class="col-lg-3 image-wrapper bg-image bg-cover rounded-top rounded-lg-start"
                                                                data-image-src="{{ asset('home/assets/gambar/padi.jpg') }}">
                                                            </div>
                                                            <div class="col-lg-9">
                                                                <div class="p-3 p-md-4 p-lg-3">
                                                                    <div class="swiper-container dots-closer mb-4"
                                                                        data-margin="30" data-dots="true">
                                                                        <div class="swiper">
                                                                            <div class="swiper-wrapper">
                                                                                <div class="swiper-slide">
                                                                                    <blockquote class="">
                                                                                        <h1><strong>Padi</strong></h1>
                                                                                        <p>Tanaman padi (Oryza sativa)
                                                                                            tumbuh
                                                                                            optimal di tanah sawah yang
                                                                                            subur,
                                                                                            tergenang air, dan kaya bahan
                                                                                            organik,
                                                                                            dengan pH tanah ideal antara 5.5
                                                                                            hingga
                                                                                            6.5. Tanah liat berpasir atau
                                                                                            lempung
                                                                                            adalah yang paling cocok untuk
                                                                                            pertanian
                                                                                            padi karena mampu menahan air
                                                                                            dengan
                                                                                            baik. Untuk menanam padi,
                                                                                            mulailah
                                                                                            dengan merendam benih padi dalam
                                                                                            air
                                                                                            selama 24-48 jam hingga
                                                                                            berkecambah,
                                                                                            lalu semai di persemaian basah.
                                                                                            Setelah
                                                                                            bibit berusia sekitar 21-30 hari
                                                                                            dan
                                                                                            memiliki tinggi sekitar 20-25
                                                                                            cm,
                                                                                            pindahkan ke sawah yang telah
                                                                                            dibajak
                                                                                            dan digenangi air setinggi 5-10
                                                                                            cm.
                                                                                            Tanam bibit dengan jarak sekitar
                                                                                            20x20
                                                                                            cm atau sesuai varietasnya.
                                                                                            Pertahankan
                                                                                            genangan air setinggi 2-3 cm
                                                                                            selama masa
                                                                                            pertumbuhan awal dan tingkatkan
                                                                                            hingga
                                                                                            5-10 cm selama fase pertumbuhan
                                                                                            aktif.
                                                                                            Lakukan pemupukan dan
                                                                                            pengendalian gulma
                                                                                            secara teratur untuk mendukung
                                                                                            pertumbuhan yang sehat dan hasil
                                                                                            panen
                                                                                            yang optimal.
                                                                                        </p>
                                                                                    </blockquote>
                                                                                </div>
                                                                            </div>
                                                                            <!-- /.swiper-wrapper -->
                                                                        </div>
                                                                        <!-- /.swiper -->
                                                                    </div>
                                                                    <!-- /.swiper-container -->
                                                                </div>
                                                                <!--/div -->
                                                            </div>
                                                            <!--/column -->
                                                        </div>
                                                        <!--/.row -->
                                                    </div>
                                                </div>
                                            </div>
                                        @elseif ($jenisTanaman1 === 'Kacang Tanah')
                                            <div class="row gx-0">
                                                <div class="col-lg-12">
                                                    <div class="card shadow-lg mb-5 mt-5">
                                                        <div class="row gx-0">
                                                            <div class="col-lg-3 image-wrapper bg-image bg-cover rounded-top rounded-lg-start"
                                                                data-image-src="{{ asset('home/assets/gambar/kacang tanah.jpg') }}">
                                                            </div>
                                                            <div class="col-lg-9">
                                                                <div class="p-3 p-md-4 p-lg-3">
                                                                    <div class="swiper-container dots-closer mb-4"
                                                                        data-margin="30" data-dots="true">
                                                                        <div class="swiper">
                                                                            <div class="swiper-wrapper">
                                                                                <div class="swiper-slide">
                                                                                    <blockquote class="">
                                                                                        <h1><strong>Kacang Tanah</strong>
                                                                                        </h1>
                                                                                        <p>Tanaman kacang tanah (Arachis
                                                                                            hypogaea)
                                                                                            tumbuh optimal di tanah yang
                                                                                            gembur,
                                                                                            berpasir, dan kaya akan bahan
                                                                                            organik,
                                                                                            dengan pH tanah ideal antara 6.0
                                                                                            hingga
                                                                                            6.5. Tanah yang memiliki
                                                                                            drainase baik
                                                                                            sangat penting untuk menghindari
                                                                                            genangan air yang bisa merusak
                                                                                            tanaman.
                                                                                            Untuk menanam kacang tanah,
                                                                                            pilih lokasi
                                                                                            yang mendapat sinar matahari
                                                                                            penuh.
                                                                                            Mulailah dengan mengolah tanah
                                                                                            hingga
                                                                                            gembur dan rata. Tanam benih
                                                                                            kacang
                                                                                            tanah sedalam 3-5 cm dengan
                                                                                            jarak tanam
                                                                                            sekitar 30-50 cm antar baris dan
                                                                                            10-20
                                                                                            cm antar tanaman. Pastikan tanah
                                                                                            tetap
                                                                                            lembab dengan penyiraman
                                                                                            teratur,
                                                                                            terutama saat fase awal
                                                                                            pertumbuhan dan
                                                                                            pembentukan polong. Pemupukan
                                                                                            dengan
                                                                                            kompos atau pupuk kandang dapat
                                                                                            membantu
                                                                                            meningkatkan kesuburan tanah.
                                                                                            Penyiangan
                                                                                            gulma secara berkala dan
                                                                                            penggemburan
                                                                                            tanah di sekitar tanaman juga
                                                                                            penting
                                                                                            untuk memastikan pertumbuhan
                                                                                            yang
                                                                                            optimal dan hasil panen yang
                                                                                            baik.
                                                                                        </p>
                                                                                    </blockquote>
                                                                                </div>
                                                                            </div>
                                                                            <!-- /.swiper-wrapper -->
                                                                        </div>
                                                                        <!-- /.swiper -->
                                                                    </div>
                                                                    <!-- /.swiper-container -->
                                                                </div>
                                                                <!--/div -->
                                                            </div>
                                                            <!--/column -->
                                                        </div>
                                                        <!--/.row -->
                                                    </div>
                                                </div>
                                            </div>
                                        @elseif ($jenisTanaman1 === 'Kedelai')
                                            <div class="row gx-0">
                                                <div class="col-lg-12">
                                                    <div class="card shadow-lg mb-5 mt-5">
                                                        <div class="row gx-0">
                                                            <div class="col-lg-3 image-wrapper bg-image bg-cover rounded-top rounded-lg-start"
                                                                data-image-src="{{ asset('home/assets/gambar/kedelai.jpg') }}">
                                                            </div>
                                                            <div class="col-lg-9">
                                                                <div class="p-3 p-md-4 p-lg-3">
                                                                    <div class="swiper-container dots-closer mb-4"
                                                                        data-margin="30" data-dots="true">
                                                                        <div class="swiper">
                                                                            <div class="swiper-wrapper">
                                                                                <div class="swiper-slide">
                                                                                    <blockquote class="">
                                                                                        <h1><strong>Kedelai</strong></h1>
                                                                                        <p>Tanaman kedelai (Glycine max)
                                                                                            adalah
                                                                                            tanaman semusim yang tumbuh baik
                                                                                            di
                                                                                            iklim subtropis hingga tropis
                                                                                            dengan
                                                                                            suhu yang hangat hingga panas
                                                                                            dan sinar
                                                                                            matahari yang cukup. Kedelai
                                                                                            biasanya
                                                                                            tumbuh optimal di tanah dengan
                                                                                            pH netral
                                                                                            hingga sedikit asam, namun dapat
                                                                                            beradaptasi dengan berbagai
                                                                                            jenis tanah,
                                                                                            termasuk tanah berpasir, liat,
                                                                                            maupun
                                                                                            lempung. Untuk menanam kedelai,
                                                                                            pertama-tama siapkan lahan yang
                                                                                            tercukupi sinar matahari penuh,
                                                                                            kemudian
                                                                                            persiapkan tanah dengan
                                                                                            melakukan
                                                                                            pengolahan tanah dan pemupukan
                                                                                            sesuai
                                                                                            kebutuhan. Benih kedelai ditanam
                                                                                            pada
                                                                                            kedalaman yang sesuai dan diberi
                                                                                            jarak
                                                                                            tanam yang cukup agar tanaman
                                                                                            dapat
                                                                                            tumbuh dengan optimal. Selama
                                                                                            masa
                                                                                            pertumbuhan, perhatikan
                                                                                            penyiraman yang
                                                                                            cukup terutama pada fase awal
                                                                                            pertumbuhan, serta lakukan
                                                                                            pengendalian
                                                                                            hama dan penyakit secara
                                                                                            teratur. Dengan
                                                                                            perawatan yang tepat, tanaman
                                                                                            kedelai
                                                                                            dapat tumbuh subur dan
                                                                                            menghasilkan
                                                                                            hasil panen yang baik.
                                                                                        </p>
                                                                                    </blockquote>
                                                                                </div>
                                                                            </div>
                                                                            <!-- /.swiper-wrapper -->
                                                                        </div>
                                                                        <!-- /.swiper -->
                                                                    </div>
                                                                    <!-- /.swiper-container -->
                                                                </div>
                                                                <!--/div -->
                                                            </div>
                                                            <!--/column -->
                                                        </div>
                                                        <!--/.row -->
                                                    </div>
                                                </div>
                                            </div>
                                        @elseif ($jenisTanaman1 === 'Semangka')
                                            <div class="row gx-0">
                                                <div class="col-lg-12">
                                                    <div class="card shadow-lg mb-5 mt-5">
                                                        <div class="row gx-0">
                                                            <div class="col-lg-3 image-wrapper bg-image bg-cover rounded-top rounded-lg-start"
                                                                data-image-src="{{ asset('home/assets/gambar/semangka.jpg') }}">
                                                            </div>
                                                            <div class="col-lg-9">
                                                                <div class="p-3 p-md-4 p-lg-3">
                                                                    <div class="swiper-container dots-closer mb-4"
                                                                        data-margin="30" data-dots="true">
                                                                        <div class="swiper">
                                                                            <div class="swiper-wrapper">
                                                                                <div class="swiper-slide">
                                                                                    <blockquote class="">
                                                                                        <h1><strong>Semangka</strong></h1>
                                                                                        <p>Tanaman semangka (Citrullus
                                                                                            lanatus)
                                                                                            adalah tanaman merambat yang
                                                                                            tumbuh
                                                                                            optimal di iklim tropis dan
                                                                                            subtropis
                                                                                            dengan suhu yang hangat hingga
                                                                                            panas dan
                                                                                            paparan sinar matahari langsung.
                                                                                            Semangka tumbuh paling baik di
                                                                                            tanah
                                                                                            yang kaya akan bahan organik,
                                                                                            memiliki
                                                                                            drainase yang baik, dan memiliki
                                                                                            pH
                                                                                            tanah yang netral hingga sedikit
                                                                                            asam.
                                                                                            Untuk menanam semangka,
                                                                                            persiapkan lahan
                                                                                            yang terkena sinar matahari
                                                                                            penuh dan
                                                                                            bebas dari hama dan gulma. Benih
                                                                                            semangka dapat ditanam langsung
                                                                                            di tanah
                                                                                            dengan kedalaman yang sesuai,
                                                                                            atau dapat
                                                                                            juga ditanam dalam pot atau
                                                                                            bedengan.
                                                                                            Pastikan untuk memberikan ruang
                                                                                            yang
                                                                                            cukup antar tanaman agar
                                                                                            memiliki tempat
                                                                                            untuk merambat. Selama masa
                                                                                            pertumbuhan,
                                                                                            pastikan tanah tetap lembab
                                                                                            dengan
                                                                                            melakukan penyiraman secara
                                                                                            teratur,
                                                                                            hindari genangan air, dan
                                                                                            berikan pupuk
                                                                                            organik secara berkala untuk
                                                                                            memastikan
                                                                                            pertumbuhan yang optimal. Dengan
                                                                                            perawatan yang tepat, semangka
                                                                                            dapat
                                                                                            tumbuh subur dan menghasilkan
                                                                                            buah yang
                                                                                            manis dan segar.
                                                                                        </p>
                                                                                    </blockquote>
                                                                                </div>
                                                                            </div>
                                                                            <!-- /.swiper-wrapper -->
                                                                        </div>
                                                                        <!-- /.swiper -->
                                                                    </div>
                                                                    <!-- /.swiper-container -->
                                                                </div>
                                                                <!--/div -->
                                                            </div>
                                                            <!--/column -->
                                                        </div>
                                                        <!--/.row -->
                                                    </div>
                                                </div>
                                            </div>
                                        @endif

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
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
