<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>
    {{-- CSS --}}
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- Bootstrap icons-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
    <!-- Google fonts-->
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link href="https://fonts.googleapis.com/css2?family=Newsreader:ital,wght@0,600;1,600&amp;display=swap"
        rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css2?family=Mulish:ital,wght@0,300;0,500;0,600;0,700;1,300;1,500;1,600;1,700&amp;display=swap"
        rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Kanit:ital,wght@0,400;1,400&amp;display=swap"
        rel="stylesheet" />
    <!-- Core theme CSS (includes Bootstrap)-->
    {{-- JS --}}
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
</head>

<body id="page-top">
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top shadow-sm" style="background-color: #126E6A;"
        id="mainNav">
        <div class="container px-5">
            <a class="navbar-brand fw-bold text-white" href="#page-top">E-Pengaduan</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive"
                aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                Menu
                <i class="bi-list"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ms-auto me-4 my-3 my-lg-0">
                    <li class="nav-item"><a class="nav-link me-lg-3 text-white" href="#tata cara">Tata Cara
                            Pengaduan</a></li>
                </ul>
                <button class="btn btn-primary rounded-pill px-3 mb-2 mb-lg-0" data-bs-toggle="modal"
                    data-bs-target="#LoginModal">
                    <span class="d-flex align-items-center">
                        <span class="large">Login</span>
                    </span>
                </button>
            </div>
        </div>
    </nav>
    <!-- Mashead header-->
    <header class="masthead">
        <div class="container px-5 border-dark">
            <div class="card p-5 shadow p-3">
                <div class="row gx-5 align-items-center">
                    <div class="col-lg-12 pt-4">
                        <!-- Mashead text and app badges-->
                        <div class="card shadow p-3 mt-5 p-4" style="height: 50%; background-color: #54CAC6;">
                            <div class="row">
                                <h5 class="text-white">Pilih Klasifikasi Pengaduan</h5>
                                <div class="col-md-4 border dark">
                                    <div class="form-group">
                                        <div class="mt-2 mb-2">
                                            <input class="form-group-input" type="radio" name="layanan"
                                                id="layanan_pendidikan" value="layanan_pendidikan" checked>
                                            <label class="form-group-label text-white" for="layanan_pendidikan">
                                                Layanan Pendidikan
                                            </label>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="mb-2">
                                            <input class="form-group-input" type="radio" name="layanan"
                                                id="layanan_pesantren_asrama" value="layanan_pesantren_asrama">
                                            <label class="form-group-label text-white" for="layanan_pesantren_asrama">
                                                Layanan Kepesantrenan dan Asrama
                                            </label>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="mb-2">
                                            <input class="form-group-input" type="radio" name="layanan"
                                                id="layanan_sarana_prasarana" value="layanan_sarana_prasarana">
                                            <label class="form-group-label text-white" for="layanan_sarana_prasarana">
                                                Layanan Sarana dan Prasarana
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 border dark">
                                    <div class="form-group">
                                        <div class="mb-2">
                                            <input class="form-group-input" type="radio" name="layanan"
                                                id="layanan_keuangan" value="layanan_keuangan">
                                            <label class="form-group-label text-white" for="layanan_keuangan">
                                                Layanan Keuangan
                                            </label>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="mb-2">
                                            <input class="form-group-input" type="radio" name="layanan"
                                                id="layanan_marketing_informasi" value="layanan_marketing_informasi">
                                            <label class="form-group-label text-white"
                                                for="layanan_marketing_informasi">
                                                Layanan Marketing dan Informasi
                                            </label>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="mb-2">
                                            <input class="form-group-input" type="radio" name="layanan"
                                                id="layanan_bisnis" value="layanan_bisnis">
                                            <label class="form-group-label text-white" for="layanan_bisnis">
                                                Layanan Bisnis
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 border dark">
                                    <div class="form-group">
                                        <div class="mb-2">
                                            <input class="form-group-input" type="radio" name="layanan"
                                                id="layanan_perundungan" value="layanan_perundungan">
                                            <label class="form-group-label text-white" for="layanan_perundungan">
                                                Layanan Perundungan
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="mt-5 text-center" id="pengaduan">
                            <h5>Silahkan Sampaikan Pengaduan Anda</h5>
                        </div>
                        <div class="p-5">
                            <div class="form-group">
                                <div class="mb-3 mt-2">
                                    <label for="exampleFormControlInput1" class="form-label">Nama<span
                                            style="color: red;">*</span></label>
                                    <input type="text" class="form-control" name="nama">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="mb-3">
                                    <label for="exampleFormControlTextarea1" class="form-label">No HP<span
                                            style="color: red;">*</span></label>
                                    <input type="text" class="form-control" name="no_hp">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="mb-3">
                                    <label for="exampleFormControlTextarea1" class="form-label">Email</label>
                                    <input type="text" class="form-control" name="email">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="mb-3">
                                    <label for="exampleFormControlTextarea1" class="form-label">Judul Pengaduan<span
                                            style="color: red;">*</span></label>
                                    <input type="text" class="form-control" name="judul">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="mb-3">
                                    <label for="exampleFormControlTextarea1" class="form-label">Tingkat
                                        Pendidikan<span style="color: red;">*</span></label>
                                    <input type="text" class="form-control" name="tingkat_pendidikan">
                                </div>
                            </div>
                            <div class="form-group" id="kategori_select">
                                <div class="mb-3">
                                    <label for="kategori" class="form-label">Kategori
                                        Pelayanan Sarana dan Prasarana<span style="color: red;">*</span></label>
                                    <select class="form-select" name="kategori_pelayanan" id="kategori">
                                        <option selected>Pilih kategori pelayanan Sarana dan Prasarana</option>
                                        <option value="1">Fasilitas</option>
                                        <option value="2">IT</option>
                                        <option value="3">Keamanan</option>
                                        <option value="4">Kebersihan</option>
                                        <option value="5">Menu Makan</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group" id="kategori_marketing">
                                <div class="mb-3">
                                    <label for="kategori" class="form-label">Kategori
                                        Pelayanan Marketing dan Informasi<span style="color: red;">*</span></label>
                                    <select class="form-select" name="kategori_pelayanan_marketing" id="kategori">
                                        <option selected>Pilih kategori pelayanan Marketing dan Informasi</option>
                                        <option value="1">Pelayanan Informasi</option>
                                        <option value="2">Media Promosi</option>
                                        <option value="3">Lainnya</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group" id="kategori_bisnis">
                                <div class="mb-3">
                                    <label for="kategori" class="form-label">Kategori
                                        Pelayanan Bisnis<span style="color: red;">*</span></label>
                                    <select class="form-select" name="kategori_pelayanan_bisnis" id="kategori">
                                        <option selected>Pilih kategori pelayanan Bisnis</option>
                                        <option value="1">Laundry</option>
                                        <option value="2">Antar Jemput</option>
                                        <option value="3">AHA Mart</option>
                                        <option value="4">Kutubuku</option>
                                        <option value="5">Barbershop</option>
                                        <option value="6">AHA Food Garden</option>
                                        <option value="7">AHA Music Course</option>
                                        <option value="8">Catering</option>
                                        <option value="9">Yuk! Travel</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="mb-3">
                                    <label for="exampleFormControlTextarea1" class="form-label">Uraian Pengaduan<span
                                            style="color: red;">*</span></label>
                                    <textarea class="form-control" name="uraian_pengaduan"></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="mb-3">
                                    <label for="exampleFormControlTextarea1" class="form-label">Lampiran<span
                                            style="color: red;">*</span></label>
                                    <input type="file" class="form-control" name="foto">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="mb-3">
                                    <label for="exampleFormControlTextarea1" class="form-label">Tanggal Kejadian<span
                                            style="color: red;">*</span></label>
                                    <input type="date" class="form-control" name="tgl_kejadian">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="mb-3">
                                    <label for="exampleFormControlTextarea1" class="form-label">Lokasi Kejadian<span
                                            style="color: red;">*</span></label>
                                    <input type="text" class="form-control" name="lokasi">
                                </div>
                            </div>
                        </div>
                        <div class="text-center">
                            <button class="btn btn-primary">Kirim Pengaduan</button>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <!-- Masthead device mockup feature-->
                        <div class="masthead-device-mockup">
                            <div class="device-wrapper">
                                <div class="device" data-device="iPhoneX" data-orientation="portrait"
                                    data-color="black">
                                    <div class="screen bg-black">
                                        <!-- PUT CONTENTS HERE:-->
                                        <!-- * * This can be a video, image, or just about anything else.-->
                                        <!-- * * Set the max width of your media to 100% and the height to-->
                                        <!-- * * 100% like the demo example below.-->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Quote/testimonial aside-->
    <aside class="text-center bg-gradient-primary-to-secondary">
        <div class="container px-5">
            <div class="row gx-5 justify-content-center">
                <div class="col-xl-8">
                    <div class="h2 fs-1 text-white mb-4">"An intuitive solution to a common problem that we all face,
                        wrapped up in a single app!"</div>
                </div>
            </div>
        </div>
    </aside>
    <!-- App features section-->
    <section id="tata cara">
        <div class="container px-5">
            <div class="row gx-5 align-items-center">
                <div class="col-lg-8 order-lg-1 mb-5 mb-lg-0">
                    {{-- tata cara pengaduan --}}
                </div>

            </div>
        </div>
    </section>
    <!-- Call to action section-->
    <section class="cta">
        <div class="cta-content">
            <div class="container px-5">
                <h2 class="text-white display-1 lh-1 mb-4">
                    Stop waiting.
                    <br />
                    Start building.
                </h2>
                <a class="btn btn-outline-light py-3 px-4 rounded-pill"
                    href="https://startbootstrap.com/theme/new-age" target="_blank">Download for free</a>
            </div>
        </div>
    </section>
    <!-- Footer-->
    <footer class="bg-black text-center py-5">
        <div class="container px-5">
            <div class="text-white-50 small">
                <div class="mb-2">&copy;Yayasan Islam Alhamidiyah</div>
            </div>
        </div>
    </footer>
    <!-- Login Modal-->
    <div class="modal" tabindex="-1" id="LoginModal">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Login</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="{{ url('login') }}">
                        <div class="form-group">
                            <label for="email">Email address:</label>
                            <input type="email" class="form-control" id="email">
                        </div>
                        <div class="form-group">
                            <label for="pwd">Password:</label>
                            <input type="password" class="form-control" id="pwd">
                        </div>
                        <div class="checkbox">
                            <label><input type="checkbox"> Remember me</label>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-info">Login</button>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
<script>
    $(document).ready(function() {
        $("#kategori_select").hide();
        $("#kategori_marketing").hide();
        $("#kategori_bisnis").hide();
        $("input[name=layanan]").change(function() {
            if ($("#layanan_sarana_prasarana").is(':checked')) {
                $("#kategori_select").show();
                $("#kategori_marketing").hide();
                $("#kategori_bisnis").hide();
            } else if ($("#layanan_marketing_informasi").is(':checked')) {
                $("#kategori_select").hide();
                $("#kategori_marketing").show();
                $("#kategori_bisnis").hide();
            } else if ($("#layanan_bisnis").is(':checked')) {
                $("#kategori_select").hide();
                $("#kategori_bisnis").show();
                $("#kategori_marketing").hide();
            } else {
                $("#kategori_select").hide();
                $("#kategori_marketing").hide();
                $("#kategori_bisnis").hide();
            }
        });
    });
</script>
