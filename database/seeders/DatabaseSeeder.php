<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Peta;
use App\Models\Umkm;
use App\Models\User;
use App\Models\Agama;
use App\Models\Situs;
use App\Models\Berita;
use App\Models\Kontak;
use App\Models\Slider;
use App\Models\Sejarah;
use App\Models\Wilayah;
use App\Models\Kategori;
use App\Models\VisiMisi;
use App\Models\Pekerjaan;
use App\Models\PostStatus;
use App\Models\VideoProfil;
use App\Models\JenisKelamin;
use App\Models\PerangkatDesa;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::create([
            'foto'      => 'img-profil/user-1.jpg',
            'name'      => 'admin',
            'email'     => 'admin@gmail.com',
            'password'  => 1234
        ]);

        Slider::create([
            'judul'         => 'Website Dusun Teken',
            'deskripsi'     => 'Dusun Teken adalah sebuah dusun yang berada di kawasan Desa Tileng, Kecamatan Girisubo, Kabupaten Gunungkidul, Daerah Istimewa Yogyakarta. Website ini merupakan portal informasi resmi Dusun Teken.',
            'link_btn'      => '#',
            'img_slider'    => 'img-slider/slide-1.jpg'
        ]);
        Slider::create([
            'judul'         => 'Sejarah Dusun',
            'deskripsi'     => 'Dusun Teken merupakan bagian dari Desa Tileng yang memiliki kekayaan budaya dan tradisi. Terletak di Kecamatan Girisubo, Kabupaten Gunungkidul, Daerah Istimewa Yogyakarta.',
            'link_btn'      => '#',
            'img_slider'    => 'img-slider/slide-2.jpg'
        ]);
        Slider::create([
            'judul'         => 'Visi & Misi',
            'deskripsi'     => 'Mewujudkan Dusun Teken yang maju, mandiri, dan sejahtera melalui gotong royong dan pembangunan yang berkelanjutan.',
            'link_btn'      => '#',
            'img_slider'    => 'img-slider/slide-3.jpg'
        ]);

        PostStatus::create([
            'status'    => 'draft'
        ]);
        PostStatus::create([
            'status'    => 'publish'
        ]);

        Kategori::create([
            'kategori'  => 'Teknologi',
            'slug'      => 'teknologi',
            'user_id'   => 1
        ]);
        Kategori::create([
            'kategori'  => 'Kesenian',
            'slug'      => 'kesenian',
            'user_id'   => 1
        ]);

        Wilayah::create([
            'judul' => 'Wilayah Dusun Teken',
            'body'  => 'Dusun Teken adalah sebuah dusun yang berada di kawasan Desa Tileng, Kecamatan Girisubo, Kabupaten Gunungkidul, Daerah Istimewa Yogyakarta. Dusun Teken memiliki potensi alam dan budaya yang khas, dengan masyarakat yang mayoritas bekerja di sektor pertanian, peternakan, dan usaha mikro kecil menengah. Wilayah Dusun Teken dikelilingi oleh perbukitan dan persawahan yang hijau, menciptakan pemandangan alam yang indah dan asri.',
            'user_id'   => 1
        ]);

        Sejarah::create([
            'judul' => 'Sejarah Dusun Teken',
            'body'  => 'Dusun Teken merupakan bagian dari Desa Tileng yang terletak di Kecamatan Girisubo, Kabupaten Gunungkidul, Daerah Istimewa Yogyakarta. Sejarah Dusun Teken tidak terlepas dari sejarah Desa Tileng yang memiliki akar budaya dan tradisi yang kuat. Masyarakat Dusun Teken dikenal dengan semangat gotong royong dan kearifan lokal yang masih terjaga hingga saat ini. Dusun Teken terus berkembang seiring waktu, dengan berbagai pembangunan infrastruktur dan pemberdayaan masyarakat yang dilakukan secara bertahap.',
            'user_id'   => 1
        ]);

        VisiMisi::create([
            'visi'      =>  'Terwujudnya Dusun Teken yang maju, mandiri, sejahtera, dan berbudaya',
            'misi'      =>  ' - Meningkatkan perekonomian masyarakat melalui pengembangan potensi pertanian, peternakan, dan UMKM
                            - Meningkatkan kualitas sumber daya manusia melalui pendidikan dan pelatihan keterampilan
                            - Meningkatkan kesadaran masyarakat akan pentingnya gotong royong dan kelestarian lingkungan
                            - Mengembangkan potensi wisata dan budaya lokal Dusun Teken',
            'user_id'   => 1
        ]);

        PerangkatDesa::create([
            'nama'      => 'Dwi Purnomo',
            'foto'      => 'img-perangkat/team-1.jpg',
            'jabatan'   => 'Kepala Desa',
            'user_id'   => 1
        ]);
        PerangkatDesa::create([
            'nama'      => 'Cahyo Anggoro',
            'foto'      => 'img-perangkat/team-2.jpg',
            'jabatan'   => 'Sekretaris Desa',
            'user_id'   => 1
        ]);
        PerangkatDesa::create([
            'nama'      => 'Ahmad Mubarok',
            'foto'      => 'img-perangkat/team-3.jpg',
            'jabatan'   => 'Kepala Urusan Umum',
            'user_id'   => 1
        ]);
        PerangkatDesa::create([
            'nama'      => 'Qoriatu Fajar',
            'foto'      => 'img-perangkat/team-4.jpg',
            'jabatan'   => 'Kepala Dusun',
            'user_id'   => 1
        ]);

        Agama::create([
            'agama'     => 'Islam',
            'penganut'  => 100,
            'user_id'   => 1
        ]);
        Agama::create([
            'agama'     => 'Kristen',
            'penganut'  => 30,
            'user_id'   => 1
        ]);
        Agama::create([
            'agama'     => 'Katolik',
            'penganut'  => 20,
            'user_id'   => 1
        ]);
        Agama::create([
            'agama'     => 'Hindu',
            'penganut'  => 10,
            'user_id'   => 1
        ]);
        Agama::create([
            'agama'     => 'Budha',
            'penganut'  => 15,
            'user_id'   => 1
        ]);
        Agama::create([
            'agama'     => 'Konghucu',
            'penganut'  => 6,
            'user_id'   => 1
        ]);

        JenisKelamin::create([
            'jenis_kelamin' => 'Laki-laki',
            'jumlah'        => 70,
            'user_id'       => 1
        ]);
        JenisKelamin::create([
            'jenis_kelamin' => 'Perempuan',
            'jumlah'        => 55,
            'user_id'       => 1
        ]);

        Pekerjaan::create([
            'pekerjaan'     => 'Petani',
            'jumlah'        => 55,
            'user_id'       => 1
        ]);
        Pekerjaan::create([
            'pekerjaan'     => 'Pegawai Negeri',
            'jumlah'        => 14,
            'user_id'       => 1
        ]);
        Pekerjaan::create([
            'pekerjaan'     => 'Belum/Tidak bekerja',
            'jumlah'        => 10,
            'user_id'       => 1
        ]);
        Pekerjaan::create([
            'pekerjaan'     => 'Pensiunan',
            'jumlah'        => 20,
            'user_id'       => 1
        ]);
        Peta::create([
            'judul'         => 'Peta Dusun Teken',
            'alamat'        => 'Teken, Tileng, Girisubo, Gunungkidul',
            'user_id'       => 1
        ]);

        Kontak::create([
            'lokasi'    => 'Teken, Tileng, Girisubo, Gunungkidul, DI Yogyakarta',
            'email'     => 'dusunteken@gmail.com',
            'no_hp'     => '081234567890',
            'user_id'   => 1
        ]);

        VideoProfil::create([
            'url_video' => 'https://www.youtube.com/embed/CCDemVVMzOo',
            'user_id'   => 1
        ]);

        Situs::create([
            'logo'      => 'img-logo/logo-dusun-teken.png',
            'nm_desa'   => 'Dusun Teken',
            'kecamatan' => 'Girisubo',
            'kabupaten' => 'Gunungkidul',
            'provinsi'  => 'Daerah Istimewa Yogyakarta',
            'kode_pos'  => 55883,
            'user_id'   =>  1
        ]);
    }
}
