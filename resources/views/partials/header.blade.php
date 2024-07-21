<!-- ======= Header ======= -->
<header id="header" class="d-flex align-items-center">
    <div class="container d-flex align-items-center">

        <div class="logo me-auto">
            <h1><a href="/">
                    <img src="{{ asset('storage/' . $logo->logo) }}" alt="Logo">
                </a></h1>
        </div>

        <nwav id="navbar" class="navbar">
            <ul>
                <li><a class="nav-link scrollto {{ Request::is('/') ? 'active' : '' }}" href="/">Beranda</a></li>
                <li class="dropdown"><a href="#" class="{{ Request::is('wilayah', 'sejarah', 'visi-misi', 'perangkat-desa', 'peta-desa', 'data-desa') ? 'active' : '' }}"><span>Profil Dusun</span> <i class="bi bi-chevron-down"></i></a>
                    <ul>
                        <li><a href="/wilayah" class="{{ Request::is('wilayah') ? 'active' : '' }}">Wilayah</a></li>
                        <li><a href="/sejarah" class="{{ Request::is('sejarah') ? 'active' : '' }}">Sejarah</a></li>
                        <li><a href="/visi-misi" class="{{ Request::is('visi-misi') ? 'active' : '' }}">Visi & Misi</a></li>
                        <li><a href="/perangkat-desa" class="{{ Request::is('perangkat-desa') ? 'active' : '' }}">Perangkat Dusun</a></li>
                        <li><a href="/peta-desa" class="{{ Request::is('peta-desa') ? 'active' : '' }}">Peta Dusun</a></li>
                        <li><a href="/data-desa" class="{{ Request::is('data-desa') ? 'active' : '' }}">Data Dusun</a></li>
                    </ul>
                </li>
                <li class="dropdown"><a href="#" class="{{ Request::is('pengumuman', 'berita', 'gallery', 'apbdesa') ? 'active' : '' }}"><span>Informasi</span> <i class="bi bi-chevron-down"></i></a>
                    <ul>
                        <li><a href="/pengumuman" class="{{ Request::is('pengumuman') ? 'active' : '' }}">Pengumuman</a></li>
                        <li><a href="/berita" class="{{ Request::is('berita') ? 'active' : '' }}">Berita</a></li>
                        <li><a href="/gallery" class="{{ Request::is('gallery') ? 'active' : '' }}">Gallery</a></li>
                        {{-- <li><a href="/apbdesa" class="{{ Request::is('apbdesa') ? 'active' : '' }}">APBDesa</a></li> --}}
                    </ul>
                </li>
                <li><a class="nav-link scrollto {{ Request::is('umkm') ? 'active' : '' }}" href="/umkm">Umkm</a></li>
                <li><a class="nav-link scrollto {{ Request::is('kontak') ? 'active' : '' }}" href="/kontak">Kontak kami</a></li>
                <li>
                    <a href="/login" class="nav-link scrollto {{ Request::is('login') ? 'active' : '' }}">Masuk</a>
                </li>
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nwav><!-- .navbar -->

    </div>
</header><!-- End Header -->
