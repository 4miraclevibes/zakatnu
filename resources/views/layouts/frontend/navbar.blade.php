<nav class="navbar navbar-expand-lg navbar-dark bg-success">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">
            <img src="https://1.bp.blogspot.com/-eQaLq4sqKdU/YARIIRtlYpI/AAAAAAAAIbM/bu3J4geILWgLU1Qm73gkiUT1yGlhOdFTwCLcBGAsYHQ/w1200-h630-p-k-no-nu/Download-Logo-Nahdlatul-Ulama-PNG-dan-CDR.jpg" alt="Logo NU" style="max-height: 40px;">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link {{ Route::is('landing') ? 'active' : '' }}" aria-current="page" href="{{ route('landing') }}">Beranda</a>
                </li>
                @if (Route::is('landing'))
                <li class="nav-item">
                    <a class="nav-link" href="#donations">Program</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#transactions">Transaksi</a>
                </li>
                @endif
                <li class="nav-item">
                    <a class="nav-link" href="#">Tentang NU</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Kontak</a>
                </li>
            </ul>
            @if (Auth::check())
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <form action="{{ route('logout') }}" method="post">
                            @csrf
                            <button type="submit" class="nav-link btn btn-link">Keluar</button>
                        </form>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('dashboard') }}">Dashboard</a>
                    </li>
                </ul>
            @else
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('login') }}">Masuk</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link btn btn-outline-light" href="#">Daftar</a>
                </li>
            </ul>
            @endif
        </div>
    </div>
</nav>