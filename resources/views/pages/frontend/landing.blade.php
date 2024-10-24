@extends('layouts.frontend.main')

@section('content')

<div class="container">
    <div class="row align-items-center">
        <div class="col-md-6">
            <h5 class="display-5">Mari kita jelajahi dan bergabung dalam <a href="#" class="text-decoration-underline">kegiatan</a> Nahdlatul Ulama.</h5>
            <p class="lead">Nahdlatul Ulama (NU) adalah organisasi Islam terbesar di Indonesia yang telah terbukti efektif dalam membina umat dan membangun bangsa. Sudah ratusan program yang terlaksana dengan baik. Jadi, tunggu apa lagi? Bergabunglah sekarang juga dan rasakan manfaatnya!</p>
            <a href="#" class="btn btn-success btn-lg">Lihat Program NU</a>
        </div>
        <div class="col-md-6 text-center p-0">
            <img src="https://i0.wp.com/www.islamramah.co/wp-content/uploads/2022/09/IAhqUD3pTN.jpg?fit=1280%2C720&ssl=1" class="img-fluid" alt="Banner Image">
        </div>
    </div>
    <div class="row">
        <div class="col-md-6 bg-success text-white p-5">
            <h2>Selamat datang di Sistem Informasi Nahdlatul Ulama</h2>
            <p>Platform ini menyediakan berbagai informasi tentang kegiatan, program, dan perkembangan Nahdlatul Ulama di seluruh Indonesia. Sistem ini bertujuan untuk memudahkan warga NU dan masyarakat umum dalam mengakses informasi terkini tentang NU.</p>
        </div>
        <div class="col-md-6 bg-light p-5">
            <div class="d-flex justify-content-center mb-3">
                <span class="badge bg-primary me-2">Pendidikan</span>
                <span class="badge bg-warning text-dark me-2">Dakwah</span>
                <span class="badge bg-info text-dark me-2">Sosial</span>
                <span class="badge bg-secondary">Ekonomi</span>
            </div>
            <p>Di platform kami, Anda akan menemukan beragam kategori kegiatan NU yang telah kami tampilkan, sehingga Anda memiliki banyak opsi untuk dieksplorasi dan berpartisipasi.</p>
        </div>
    </div>
</div>

<div class="container my-5">
    <div class="row align-items-center">
        <div class="col-md-6 text-center" style="max-height: 450px; overflow: hidden;">
            <img src="https://3.bp.blogspot.com/-HLZK11i9Kww/Wvzn732hJXI/AAAAAAAABjI/Q5-sebqa9FwCgEreZuTF1YzyIN5XbExTACK4BGAYYCw/s1600/NU.jpg" class="img-fluid" alt="Mask Group Image">
        </div>
        <div class="col-md-6">
            <h2>Yuk, mari kita bergabung dalam kegiatan-kegiatan NU</h2>
            <div class="mt-4">
                <h5><i class='bx bx-group'></i> Pengajian dan Majelis Taklim</h5>
                <p>Anda memiliki kesempatan untuk mengikuti pengajian dan majelis taklim yang diselenggarakan oleh ulama NU. Ini membuka pintu untuk memperdalam ilmu agama dan memperkuat iman.</p>
            </div>
            <div class="mt-4">
                <h5><i class='bx bx-book'></i> Pendidikan dan Pesantren</h5>
                <p>NU memiliki banyak lembaga pendidikan dan pesantren yang berkualitas. Bergabunglah untuk mendapatkan pendidikan Islam yang komprehensif dan berkarakter.</p>
            </div>
            <div class="mt-4">
                <h5><i class='bx bx-heart'></i> Kegiatan Sosial dan Kemanusiaan</h5>
                <p>NU aktif dalam berbagai kegiatan sosial dan kemanusiaan. Ikut serta dalam kegiatan ini untuk membantu sesama dan meningkatkan kepedulian sosial Anda.</p>
            </div>
        </div>
    </div>
</div>

<div class="container my-5">
    <h2 class="mb-4">Jelajahi Kegiatan NU berdasarkan Kategori</h2>
    <p>Ingin berpartisipasi? <a href="#" class="text-decoration-underline">Lihat Jadwal Kegiatan</a></p>
    <div class="row">
        <div class="col-md-3 mb-4">
            <div class="card h-100">
                <div class="card-body">
                    <h5 class="card-title">Pendidikan</h5>
                    <p class="card-text"><i class='bx bxs-star'></i> 4.85/5</p>
                    <p class="card-text">1853 peserta</p>
                </div>
            </div>
        </div>
        <div class="col-md-3 mb-4">
            <div class="card h-100">
                <div class="card-body">
                    <h5 class="card-title">Dakwah</h5>
                    <p class="card-text"><i class='bx bxs-star'></i> 4.8/5</p>
                    <p class="card-text">2940 peserta</p>
                </div>
            </div>
        </div>
        <div class="col-md-3 mb-4">
            <div class="card h-100">
                <div class="card-body">
                    <h5 class="card-title">Sosial & Kemanusiaan</h5>
                    <p class="card-text"><i class='bx bxs-star'></i> 4.91/5</p>
                    <p class="card-text">968 relawan</p>
                </div>
            </div>
        </div>
        <div class="col-md-3 mb-4">
            <div class="card h-100">
                <div class="card-body">
                    <h5 class="card-title">Ekonomi & Koperasi</h5>
                    <p class="card-text"><i class='bx bxs-star'></i> 4.77/5</p>
                    <p class="card-text">392 anggota</p>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container my-5">
    <div class="row align-items-center bg-success">
        <div class="col-md-8 text-white p-5">
            <h2 class="display-5">Selamat datang di <br>Sistem Informasi NU</h2>
            <p>Platform ini menyediakan berbagai informasi tentang kegiatan dan program Nahdlatul Ulama di seluruh Indonesia. Sistem ini bertujuan untuk memudahkan warga NU dan masyarakat umum dalam mengakses informasi terkini tentang NU.</p>
            <ul class="list-unstyled">
                <li class="mb-2"><i class='bx bx-check'></i> Informasi kegiatan NU terkini</li>
                <li class="mb-2"><i class='bx bx-check'></i> Akses mudah untuk semua kalangan</li>
                <li class="mb-2"><i class='bx bx-check'></i> Fitur yang user-friendly</li>
            </ul>
            <a href="#" class="btn btn-light">Pelajari lebih lanjut</a>
        </div>
        <div class="col-md-4 text-center p-0" style="max-height: 450px; overflow: hidden;">
            <img src="https://th.bing.com/th/id/OIP.jzAtAaTmsouXWDaugJh-cQHaNU?rs=1&pid=ImgDetMain" class="img-fluid" alt="People Image">
        </div>
    </div>
</div>

<div class="container my-5" id="transactions">
    @include('pages.frontend.transactions')
</div>

<div class="container my-5" id="donations">
    @include('pages.frontend.donations')
</div>

<div class="container my-5 text-center">
    <div class="row">
        <div class="col-md-4">
            <h3>40+ juta</h3>
            <p>Anggota NU di Seluruh Indonesia</p>
        </div>
        <div class="col-md-4">
            <h3>30.000+</h3>
            <p>Pesantren NU di Indonesia</p>
        </div>
        <div class="col-md-4">
            <h3>360K+</h3>
            <p>Masjid dan Musholla NU</p>
        </div>
    </div>
</div>

<div class="container my-5">
    <div class="row align-items-center">
        <div class="col-md-4 text-center">
            <img src="{{ asset('frontend/assets/images/costumer.svg') }}" class="img-fluid" alt="Customer Image">
        </div>
        <div class="col-md-8">
            <h5 class="text-success">Testimoni</h5>
            <h2>Apa kata mereka tentang NU</h2>
            <p>"Saya sangat senang dengan adanya Sistem Informasi NU ini. Sangat memudahkan saya untuk mendapatkan informasi terkini tentang kegiatan dan program NU di daerah saya. Semoga sistem ini terus dikembangkan untuk kemaslahatan umat."</p>
            <div class="d-flex align-items-center">
                <img src="{{ asset('assets/img/avatars/1.png') }}" class="rounded-circle me-3" alt="Customer Avatar" width="50" height="50">
                <div>
                    <h5 class="mb-0">H. Ahmad Shodiq</h5>
                    <p class="mb-0">Anggota NU</p>
                    <div class="text-warning">
                        <i class='bx bxs-star'></i>
                        <i class='bx bxs-star'></i>
                        <i class='bx bxs-star'></i>
                        <i class='bx bxs-star'></i>
                        <i class='bx bxs-star'></i>
                    </div>
                </div>
            </div>
            <a href="#" class="btn btn-success mt-4">Lihat Semua Testimoni</a>
        </div>
    </div>
</div>

<div class="container my-5 bg-light">
    <div class="row align-items-center">
        <div class="col-md-8">
            <h2 class="display-5">Bergabunglah dengan NU, <em>Wujudkan Islam Rahmatan Lil 'Alamin</em>.</h2>
            <a href="#" class="btn btn-success btn-lg mt-3">Gabung NU Sekarang</a>
        </div>
        <div class="col-md-4 text-center">
            <img src="{{ asset('frontend/assets/images/doable.svg') }}" class="img-fluid" alt="Doable Image">
        </div>
    </div>
</div>

@endsection