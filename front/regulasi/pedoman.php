 <style type="text/css">
     #search-btn {
         width: 10%;
         padding: 10px 15px;
         border: none;
         background-color: #1e56dc;
         color: #fff;
         border-radius: 4px;
         cursor: pointer;
         font-size: 20px;
         border-radius: 0px 5px 5px 0px;
     }

     /* Untuk layar HP dan Tablet */
     @media (max-width: 992px) {
         .search-bar {
             flex-direction: column;
         }

         #search-input,
         #search-btn {
             width: 100%;
             margin: 5px 0;
             /* Menambahkan margin agar tombol terpisah */
         }
     }
 </style>
 <div id="system-message-container">
 </div>

 <div class="page-header">
     <h1>Pedoman <button id="search-btn" class="search-btn pull-right"><i class="fas fa-search"></i> Cari</button>
         <input type="text" class="form-control pull-right" id="search-input" name="" style="height: 42px;"
             placeholder="Cari">

     </h1>
 </div>
 <form class="fabrikForm form-search"
     action="/produk-standardisasi/peraturan?resetfilters=0&amp;clearordering=0&amp;clearfilters=0" method="post"
     id="listform_5_com_fabrik_5" name="fabrikList">

     <div class="fabrikDataContainer">
         <div class="col-xs-12">
             <div class="row" id="newsList">
                 <?php 
      $judul[]="Pedoman Mitigasi Risiko 3-MCPDE dan GE pada Minyak Goreng Sawit";
      $judul[]="Pedoman Mitigasi Risiko Keberadaan Residu Antibiotik dan Mikrob Resistan Antibiotik pada Pangan Olahan";
      $judul[]="Pedoman Mitigasi Risiko: Penggunaan Bahan Penolong Nitrogen Cair pada Pangan Olahan";
      $judul[]="Pedoman Implementasi Periklanan Pangan Olahan";
      $judul[]="Pedoman Mitigasi Risiko Cemaran Etilen Glikol (EG) dan Dietilen Glikol (DEG) Pada Pangan Olahan";
      $judul[]="Pedoman Mitigasi Risiko Kesehatan Senyawa Etilen Oksida_2_6-DIPN dan 9_10-AQ";
      $judul[]="Komik Pangan Jajanan Anak Sekolah Untuk Pencapaian Gizi Seimbang Bagi Anak Sekolah";
      $judul[]="Pedoman Cara Pengolahan dan Penanganan Pangan Olahan Beku Yang Baik";
      $judul[]="Pedoman Implementasi Regulasi Makanan Pendamping Air Susu Ibu (Mp-Asi) untuk Pelaku Usaha Mikro, Kecil, dan Menengah (UMKM)";
      $judul[]="Pedoman Label Pangan Olahan - Susu Kental dan Analognya";
      $judul[]="Pedoman Pangan Jajanan Anak Sekolah untuk Pencapaian Gizi Seimbang";
      $judul[]="Pedoman Pangan Siap Saji (Terkemas)";
      $judul[]="Pedoman Implementasi Peraturan Badan POM No. 20 Tahun 2019 tentang Kemasan Pangan";
      $judul[]="Pedoman Label Pangan Olahan";
      $judul[]="Pedoman Menurunkan Cemaran Akrilamida dalam Kopi Olahan";
      $judul[]="Pedoman Pengkajian Bahan Baku Pangan";
      $judul[]="Pedoman Produksi dan Distribusi Pangan Olahan Pada Masa Status Darurat Kesehatan COVID 19 di Indonesia";
      $judul[]="Pedoman dan Kriteria Plastik Berbahan Polyethylene Terephtalate (PET) Daur Ulang Yang Aman Untuk Kemasan Pangan";
      $judul[]="Pedoman Evaluasi Mutu Gizi dan Non Gizi Pangan";
      $judul[]="Pedoman Implementasi Pelabelan Pangan Olahan - Pencantuman Jumlah Bahan Baku dan Informasi Alergen";
      $judul[]="Pedoman Implementasi Peraturan di Bidang Pangan Olahan Tertentu";
      $judul[]="Pedoman Penerapan Peraturan Badan POM Tentang Cemaran Mikroba dalam Pangan Olahan";
      $judul[]="Pedoman Perhitungan Karakteristik Dasar Kategori Pangan";
      $judul[]="Pedoman Spesifikasi dan Penggunaan Bahan Dasar Permen Karet";

      $pdf[]="https://standarpangan.pom.go.id/dokumen/pedoman/Pedoman_Mitigasi_Risiko_3-MCPDE_GE.pdf";
      $pdf[]="https://standarpangan.pom.go.id/dokumen/pedoman/Pedoman_Mitigasi_Risiko_Keberadaan_Residu_Antibiotik_dan_Mikrob_Resistan_Antibiotik_pada_Pangan_Olahan.pdf";
      $pdf[]="https://standarpangan.pom.go.id/dokumen/pedoman/Pedoman_Mitigasi_Risiko_Penggunaan_Bahan_Penolong_Nitrogen_Cair_pada_Pangan_Olahan.pdf";
      $pdf[]="https://standarpangan.pom.go.id/dokumen/pedoman/_Sumber_Elektronis__Pedoman_Implementasi_Periklanan_Pangan_Olahan.pdf";
      $pdf[]="https://standarpangan.pom.go.id/dokumen/pedoman/_E-BOOK__Pedoman_Mitigasi_Risiko_EG_DEG_Pangan_Olahan_ISBN.pdf";
      $pdf[]="https://standarpangan.pom.go.id/dokumen/pedoman/Pedoman_Mitigasi_Risiko_Kesehatan_Senyawa_Etilen_Oksida__2_6-DIPN_dan_9_10-AQ.pdf";
      $pdf[]="https://standarpangan.pom.go.id/dokumen/pedoman/Komik_Pangan_Jajanan_Anak_Sekolah_Untuk_Pencapaian_Gizi_Seimbang_Bagi_Anak_Sekolah.pdf";
      $pdf[]="https://standarpangan.pom.go.id/dokumen/pedoman/Pedoman-Cara-Pengolahan-dan-Penanganan-Pangan-Olahan-Beku-Yang-Baik.pdf";
      $pdf[]="https://standarpangan.pom.go.id/dokumen/pedoman/Pedoman_Implementasi_Regulasi_Makanan_Pendamping_Air_Susu_Ibu__Mp-Asi__untuk_Pelaku_Usaha_Mikro__Kecil__dan_Menengah__UMKM_.pdf";
      $pdf[]="https://standarpangan.pom.go.id/dokumen/pedoman/Pedoman-Label-Susu-Kental-dan-Analognya.pdf";
      $pdf[]="https://standarpangan.pom.go.id/dokumen/pedoman/Pedoman_Pangan_Jajanan_Anak_Sekolah_untuk_Pencapaian_Gizi_Seimbang.pdf";
      $pdf[]="https://standarpangan.pom.go.id/dokumen/pedoman/Pedoman_Pangan_Siap_Saji_Terkemas.pdf";
      $pdf[]="https://standarpangan.pom.go.id/dokumen/pedoman/Pedoman-Implementasi-Peraturan-Badan-POM-No-20-Tahun-2019-tentang-Kemasan-Pangan.pdf";
      $pdf[]="https://standarpangan.pom.go.id/dokumen/pedoman/Pedoman_Label_Pangan_Olahan.pdf";
      $pdf[]="https://standarpangan.pom.go.id/dokumen/pedoman/Pedoman_Menurunkan_Cemaran_Akrilamida_dalam_Kopi_Olahan.pdf";
      $pdf[]="https://standarpangan.pom.go.id/dokumen/pedoman/Pedoman-Pengkajian-Bahan-Baku-Pangan.pdf";
      $pdf[]="https://standarpangan.pom.go.id/dokumen/pedoman/Pedoman-Produksi-dan-Distribusi-Pangan-Olahan-Pada-Masa-Status-Darurat-Kesehatan-Covid-19-di-Indonesia.pdf";
      $pdf[]="https://standarpangan.pom.go.id/dokumen/pedoman/Pedoman-Kriteria-PET-Daur-Ulang.pdf";
      $pdf[]="https://standarpangan.pom.go.id/dokumen/pedoman/Pedoman-Evaluasi-Mutu-Gizi-dan-Non-Gizi-Pangan.pdf";
      $pdf[]="https://standarpangan.pom.go.id/dokumen/pedoman/Pedoman_Implementasi_Pelabelan_Pangan_Olahan_-_Pencantuman_Jumlah_Bahan_Baku_dan_Informasi_Alergen.pdf";
      $pdf[]="https://standarpangan.pom.go.id/dokumen/pedoman/Buku-Pedoman-Implementasi-Peraturan-Bidang-POT.pdf";
      $pdf[]="https://standarpangan.pom.go.id/dokumen/pedoman/Pedoman-Penerapan-Peraturan-Badan-POM-Tentang-Cemaran-Mikroba-dalam-Pangan-Olahan.pdf";
      $pdf[]="https://standarpangan.pom.go.id/dokumen/pedoman/Pedoman-Perhitungan-Karakteristik-Dasar-Kategori-Pangan.pdf";
      $pdf[]="https://standarpangan.pom.go.id/dokumen/pedoman/Pedoman-Spesifikasi-dan-Penggunaan-Bahan-Dasar-Permen-Karet.pdf";


    ?>
                 <?php for ($i=1; $i <= 24; $i++) { ?>
                 <div class="col-sm-3" style="padding: 4px;">
                     <div class="col-sm-12 pedoman">
                         <a href="<?= $pdf[($i-1)] ?>" download="Pedoman_Mitigasi_Risiko_3-MCPDE_GE" target="_blank">
                             <img src="/assets/pedoman/Pedoman (0)-<?= $i<10?'0'.$i:$i ?>.jpg">
                             <span title="<?= $judul[($i-1)] ?>"><?= substr($judul[($i-1)],0,2200) ?></span><br>
                             <span>2024</span>
                         </a>
                     </div>
                 </div>
                 <?php } ?>
             </div>
         </div>
         <input type="hidden" name="option" value="com_fabrik">
         <input type="hidden" name="orderdir" value="">
         <input type="hidden" name="orderby" value="">
         <input type="hidden" name="view" value="list">
         <input type="hidden" name="listid" value="5">
         <input type="hidden" name="listref" value="5_com_fabrik_5">
         <input type="hidden" name="Itemid" value="244">
         <input type="hidden" name="fabrik_referrer" value="">
         <input type="hidden" name="d4d4d6ee0bd87d4b70149a2b0222ad5e" value="1">
         <input type="hidden" name="format" value="html">
         <input type="hidden" name="packageId" value="0">
         <input type="hidden" name="task" value="">
         <input type="hidden" name="fabrik_listplugin_name" value="">
         <input type="hidden" name="fabrik_listplugin_renderOrder" value="">
         <input type="hidden" name="fabrik_listplugin_options" value="">
         <input type="hidden" name="incfilters" value="1">
     </div>
 </form>

 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

 <script>
     // Data Berita
     var berita = [{
             image: 'Pedoman (0)-01',
             judul: 'Pedoman Mitigasi Risiko 3-MCPDE dan GE pada Minyak Goreng Sawit',
             file: 'https://standarpangan.pom.go.id/dokumen/pedoman/Pedoman_Mitigasi_Risiko_3-MCPDE_GE.pdf',
             tahun: '2023'
         },
         {
             image: 'Pedoman (0)-02',
             judul: 'Pedoman Mitigasi Risiko Keberadaan Residu Antibiotik dan Mikrob Resistan Antibiotik pada Pangan Olahan',
             file: 'https://standarpangan.pom.go.id/dokumen/pedoman/Pedoman_Mitigasi_Risiko_Keberadaan_Residu_Antibiotik_dan_Mikrob_Resistan_Antibiotik_pada_Pangan_Olahan.pdf',
             tahun: '2023'
         },
         {
             image: 'Pedoman (0)-03',
             judul: 'Pedoman Mitigasi Risiko: Penggunaan Bahan Penolong Nitrogen Cair pada Pangan Olahan',
             file: 'https://standarpangan.pom.go.id/dokumen/pedoman/Pedoman_Mitigasi_Risiko_Penggunaan_Bahan_Penolong_Nitrogen_Cair_pada_Pangan_Olahan.pdf',
             tahun: '2023'
         },
         {
             image: 'Pedoman (0)-04',
             judul: 'Pedoman Implementasi Periklanan Pangan Olahan',
             file: 'https://standarpangan.pom.go.id/dokumen/pedoman/_Sumber_Elektronis__Pedoman_Implementasi_Periklanan_Pangan_Olahan.pdf',
             tahun: '2022'
         },
         {
             image: 'Pedoman (0)-05',
             judul: 'Pedoman Mitigasi Risiko Cemaran Etilen Glikol (EG) dan Dietilen Glikol (DEG) Pada Pangan Olahan',
             file: 'https://standarpangan.pom.go.id/dokumen/pedoman/_E-BOOK__Pedoman_Mitigasi_Risiko_EG_DEG_Pangan_Olahan_ISBN.pdf',
             tahun: '2022'
         },
         {
             image: 'Pedoman (0)-06',
             judul: 'Pedoman Mitigasi Risiko Kesehatan Senyawa Etilen Oksida_2_6-DIPN dan 9_10-AQ',
             file: 'https://standarpangan.pom.go.id/dokumen/pedoman/Pedoman_Mitigasi_Risiko_Kesehatan_Senyawa_Etilen_Oksida__2_6-DIPN_dan_9_10-AQ.pdf',
             tahun: '2022'
         },
         {
             image: 'Pedoman (0)-07',
             judul: 'Komik Pangan Jajanan Anak Sekolah Untuk Pencapaian Gizi Seimbang Bagi Anak Sekolah',
             file: 'https://standarpangan.pom.go.id/dokumen/pedoman/Komik_Pangan_Jajanan_Anak_Sekolah_Untuk_Pencapaian_Gizi_Seimbang_Bagi_Anak_Sekolah.pdf',
             tahun: '2021'
         },
         {
             image: 'Pedoman (0)-08',
             judul: 'Pedoman Cara Pengolahan dan Penanganan Pangan Olahan Beku Yang Baik',
             file: 'https://standarpangan.pom.go.id/dokumen/pedoman/Pedoman-Cara-Pengolahan-dan-Penanganan-Pangan-Olahan-Beku-Yang-Baik.pdf',
             tahun: '2021'
         },
         {
             image: 'Pedoman (0)-09',
             judul: 'Pedoman Implementasi Regulasi Makanan Pendamping Air Susu Ibu (Mp-Asi) untuk Pelaku Usaha Mikro, Kecil, dan Menengah (UMKM)',
             file: 'https://standarpangan.pom.go.id/dokumen/pedoman/Pedoman_Implementasi_Regulasi_Makanan_Pendamping_Air_Susu_Ibu__Mp-Asi__untuk_Pelaku_Usaha_Mikro__Kecil__dan_Menengah__UMKM_.pdf',
             tahun: '2021'
         },
         {
             image: 'Pedoman (0)-10',
             judul: 'Pedoman Label Pangan Olahan - Susu Kental dan Analognya',
             file: 'https://standarpangan.pom.go.id/dokumen/pedoman/Pedoman-Label-Susu-Kental-dan-Analognya.pdf',
             tahun: '2021'
         },
         {
             image: 'Pedoman (0)-11',
             judul: 'Pedoman Pangan Jajanan Anak Sekolah untuk Pencapaian Gizi Seimbang',
             file: 'https://standarpangan.pom.go.id/dokumen/pedoman/Pedoman_Pangan_Jajanan_Anak_Sekolah_untuk_Pencapaian_Gizi_Seimbang.pdf',
             tahun: '2021'
         },
         {
             image: 'Pedoman (0)-12',
             judul: 'Pedoman Pangan Siap Saji (Terkemas)',
             file: 'https://standarpangan.pom.go.id/dokumen/pedoman/Pedoman_Pangan_Siap_Saji_Terkemas.pdf',
             tahun: '2021'
         },
         {
             image: 'Pedoman (0)-13',
             judul: 'Pedoman Implementasi Peraturan Badan POM No. 20 Tahun 2019 tentang Kemasan Pangan',
             file: 'https://standarpangan.pom.go.id/dokumen/pedoman/Pedoman-Implementasi-Peraturan-Badan-POM-No-20-Tahun-2019-tentang-Kemasan-Pangan.pdf',
             tahun: '2020'
         },
         {
             image: 'Pedoman (0)-14',
             judul: 'Pedoman Label Pangan Olahan',
             file: 'https://standarpangan.pom.go.id/dokumen/pedoman/Pedoman_Label_Pangan_Olahan.pdf',
             tahun: '2020'
         },
         {
             image: 'Pedoman (0)-15',
             judul: 'Pedoman Menurunkan Cemaran Akrilamida dalam Kopi Olahan',
             file: 'https://standarpangan.pom.go.id/dokumen/pedoman/Pedoman_Menurunkan_Cemaran_Akrilamida_dalam_Kopi_Olahan.pdf',
             tahun: '2020'
         },
         {
             image: 'Pedoman (0)-16',
             judul: 'Pedoman Pengkajian Bahan Baku Pangan',
             file: 'https://standarpangan.pom.go.id/dokumen/pedoman/Pedoman-Pengkajian-Bahan-Baku-Pangan.pdf',
             tahun: '2020'
         },
         {
             image: 'Pedoman (0)-17',
             judul: 'Pedoman Produksi dan Distribusi Pangan Olahan Pada Masa Status Darurat Kesehatan COVID 19 di Indonesia',
             file: 'https://standarpangan.pom.go.id/dokumen/pedoman/Pedoman-Produksi-dan-Distribusi-Pangan-Olahan-Pada-Masa-Status-Darurat-Kesehatan-Covid-19-di-Indonesia.pdf',
             tahun: '2020'
         },
         {
             image: 'Pedoman (0)-18',
             judul: 'Pedoman dan Kriteria Plastik Berbahan Polyethylene Terephtalate (PET) Daur Ulang Yang Aman Untuk Kemasan Pangan',
             file: 'https://standarpangan.pom.go.id/dokumen/pedoman/Pedoman-Kriteria-PET-Daur-Ulang.pdf',
             tahun: '2019'
         },
         {
             image: 'Pedoman (0)-19',
             judul: 'Pedoman Evaluasi Mutu Gizi dan Non Gizi Pangan',
             file: 'https://standarpangan.pom.go.id/dokumen/pedoman/Pedoman-Evaluasi-Mutu-Gizi-dan-Non-Gizi-Pangan.pdf',
             tahun: '2019'
         },
         {
             image: 'Pedoman (0)-20',
             judul: 'Pedoman Implementasi Pelabelan Pangan Olahan - Pencantuman Jumlah Bahan Baku dan Informasi Alergen',
             file: 'https://standarpangan.pom.go.id/dokumen/pedoman/Pedoman_Implementasi_Pelabelan_Pangan_Olahan_-_Pencantuman_Jumlah_Bahan_Baku_dan_Informasi_Alergen.pdf',
             tahun: '2019'
         },
         {
             image: 'Pedoman (0)-21',
             judul: 'Pedoman Implementasi Peraturan di Bidang Pangan Olahan Tertentu',
             file: 'https://standarpangan.pom.go.id/dokumen/pedoman/Buku-Pedoman-Implementasi-Peraturan-Bidang-POT.pdf',
             tahun: '2019'
         },
         {
             image: 'Pedoman (0)-22',
             judul: 'Pedoman Penerapan Peraturan Badan POM Tentang Cemaran Mikroba dalam Pangan Olahan',
             file: 'https://standarpangan.pom.go.id/dokumen/pedoman/Pedoman-Penerapan-Peraturan-Badan-POM-Tentang-Cemaran-Mikroba-dalam-Pangan-Olahan.pdf',
             tahun: '2019'
         },
         {
             image: 'Pedoman (0)-23',
             judul: 'Pedoman Perhitungan Karakteristik Dasar Kategori Pangan',
             file: 'https://standarpangan.pom.go.id/dokumen/pedoman/Pedoman-Perhitungan-Karakteristik-Dasar-Kategori-Pangan.pdf',
             tahun: '2019'
         },
         {
             image: 'Pedoman (0)-24',
             judul: 'Pedoman Spesifikasi dan Penggunaan Bahan Dasar Permen Karet',
             file: 'https://standarpangan.pom.go.id/dokumen/pedoman/Pedoman-Spesifikasi-dan-Penggunaan-Bahan-Dasar-Permen-Karet.pdf',
             tahun: '2019'
         },
         {
             image: 'Pedoman (0)-25',
             judul: 'Policy Brief Formaldehida Dalam Pangan Olahan Yang Terbentuk Karena Proses',
             file: 'https://standarpangan.pom.go.id/dokumen/pedoman/Pedoman-Formaldehida.pdf',
             tahun: '2019'
         },
         {
             image: 'Pedoman (0)-26',
             judul: 'Pedoman Cokelat',
             file: 'https://standarpangan.pom.go.id/dokumen/pedoman/Pedoman_Cokelat.pdf',
             tahun: '2017'
         },
         {
             image: 'Pedoman (0)-27',
             judul: 'Pedoman Kerja Codex Revisi 1',
             file: 'https://standarpangan.pom.go.id/dokumen/pedoman/Panduan-Codex-Rev1.pdf',
             tahun: '2017'
         },
         {
             image: 'Pedoman (0)-28',
             judul: 'Modul Bimbingan Teknis Implementasi Standar Mutu dan Keamanan Pangan UMKM',
             file: 'https://standarpangan.pom.go.id/dokumen/pedoman/Modul_Bimbingan_Teknis_Implementasi_Standar_Mutu_dan_Keamanan_Pangan_UMKM.pdf',
             tahun: '2015'
         },
         {
             image: 'Pedoman (0)-29',
             judul: 'Pedoman Cara Menggoreng Pangan yang Baik Untuk Usaha Mikro, Kecil, dan Menengah (UMKM)',
             file: 'https://standarpangan.pom.go.id/dokumen/pedoman/Pedoman_Cara_Menggoreng_UMKM.pdf',
             tahun: '2015'
         },
         {
             image: 'Pedoman (0)-30',
             judul: 'Pedoman Penggunaan Bahan Tambahan Pangan Pada Produk Hasil Olahan Biji-bijian dan Umbi Untuk Usaha Mikro, Kecil, dan Menengah (UMKM)',
             file: 'https://standarpangan.pom.go.id/dokumen/pedoman/Pedoman_Penggunaan_BTP_Pada_Produk_Hasil_Olahan_Biji-bijian_dan_Umbi.pdf',
             tahun: '2015'
         },
         {
             image: 'Pedoman (0)-31',
             judul: 'Pedoman Penggunaan Bahan Tambahan Pangan Pada Produk Tepung dan Hasil Olahannya Untuk Usaha Mikro, Kecil, dan Menengah (UMKM)',
             file: 'https://standarpangan.pom.go.id/dokumen/pedoman/Pedoman_Penggunaan_BTP_Pada_Produk_Tepung_dan_Hasil_Olahannya.pdf',
             tahun: '2015'
         },
         {
             image: 'Pedoman (0)-32',
             judul: 'Tanya Jawab Seputar Bahan Tambahan Pangan',
             file: 'https://standarpangan.pom.go.id/dokumen/pedoman/Tanya_Jawab_Seputar_BTP.pdf',
             tahun: '2014'
         },
         {
             image: 'Pedoman (0)-33',
             judul: 'Tanya Jawab Seputar Pelabelan Pangan Olahan',
             file: 'https://standarpangan.pom.go.id/dokumen/pedoman/Tanya_Jawab_Seputar_Pelabelan_Pangan_Olahan.pdf',
             tahun: '2014'
         },
         {
             image: 'Pedoman (0)-34',
             judul: 'Buku Informasi Kandungan Gizi Pangan Jajanan Anak Sekolah',
             file: 'https://standarpangan.pom.go.id/dokumen/pedoman/Buku_Informasi_Kandungan_Gizi_PJAS.pdf',
             tahun: '2013'
         },
         {
             image: 'Pedoman (0)-35',
             judul: 'Buku Pedoman Pangan Jajanan Anak Sekolah untuk Pencapaian Gizi Seimbang (Orang Tua, Guru, Pengelola Kantin)',
             file: 'https://standarpangan.pom.go.id/dokumen/pedoman/Buku_Pedoman_PJAS_untuk_Pencapaian_Gizi_Seimbang__Orang_Tua__Guru__Pengelola_Kantin_.pdf',
             tahun: '2013'
         },
         {
             image: 'Pedoman (0)-36',
             judul: 'Buku Pedoman Pangan Jajanan Anak Sekolah untuk Pencapaian Gizi Seimbang (Pengawas dan/atau Penyuluh)',
             file: 'https://standarpangan.pom.go.id/dokumen/pedoman/Buku_Pedoman_PJAS_untuk_Pencapaian_Gizi_Seimbang__Pengawas_dan-atau_Penyuluh_.pdf',
             tahun: '2013'
         },
         {
             image: 'Pedoman (0)-37',
             judul: 'Buku Pedoman Pangan Jajanan Anak Sekolah tentang Cemaran',
             file: 'https://standarpangan.pom.go.id/dokumen/pedoman/Buku_Pedoman_PJAS_tentang_Cemaran.pdf',
             tahun: '2012'
         },
         {
             image: 'Pedoman (0)-38',
             judul: 'Pedoman Informasi dan Pembacaan Standar Bahan Tambahan Pangan untuk Industri Pangan Siap Saji dan Industri Rumah Tangga',
             file: 'https://standarpangan.pom.go.id/dokumen/pedoman/Buku_Pedoman_PJAS_untuk_BTP.pdf',
             tahun: '2012'
         },
         {
             image: 'Pedoman (0)-39',
             judul: 'Pedoman Penggunaan Bahan Tambahan Pangan pada Pangan Industri Rumah Tangga dan Pangan Siap Saji Sebagai Pangan Jajanan Anak Sekolah',
             file: 'https://standarpangan.pom.go.id/dokumen/pedoman/Buku_Pedoman_PJAS_untuk_Penggunaan_BTP.pdf',
             tahun: '2012'
         },
         {
             image: 'Pedoman (0)-40',
             judul: 'Petunjuk Meminimalkan Terbentuknya Cemaran Kimia pada Pangan Siap Saji dan Pangan Industri Rumah Tangga Sebagai Pangan Jajanan Anak Sekolah',
             file: 'https://standarpangan.pom.go.id/dokumen/pedoman/Petunjuk_Meminimalkan_Cemaran_Kimia.pdf',
             tahun: '2012'
         }
     ];

     function tampilkanBerita(beritaArr) {
         const newsList = document.getElementById('newsList');
         newsList.innerHTML = '';
         // Menentukan jumlah item yang akan ditampilkan per baris (dalam hal ini lima)
         const itemsPerRow = 4;
         const totalBerita = beritaArr.length;
         const totalRows = Math.ceil(totalBerita / itemsPerRow);
         for (let i = 0; i < totalRows; i++) {
             const row = document.createElement('div');
             row.classList.add('row', 'mx-auto', 'd-flex',
             'justify-content-center'); // Menambahkan kelas 'd-flex' dan 'justify-content-center' untuk flexbox
             for (let j = i * itemsPerRow; j < Math.min((i + 1) * itemsPerRow, totalBerita); j++) {
                 const berita = beritaArr[j];
                 const col = document.createElement('div');
                 col.classList.add('col-lg-3', 'col-md-3', 'col-sm-12', 'col-xs-12', 'news-item', 'text-center');
                 col.innerHTML = `
            <div class="col-sm-12 pedoman">
                <img src="/assets/pedoman/${berita.image}.jpg">
                <span>${berita.judul}</span><br>
                <span>${berita.tahun}</span>
            </div>

            `;
                 row.appendChild(col);
                 // Menambahkan event listener untuk setiap judul berita
                 // const judulBerita = col.querySelector('.berita-judul');
                 // judulBerita.addEventListener('mouseenter', function () {
                 //     judulBerita.style.color = '#1e56dc'; // Mengubah warna tulisan menjadi biru ketika kursor mendekati
                 // });
                 // judulBerita.addEventListener('mouseleave', function () {
                 //     judulBerita.style.color = ''; // Mengembalikan warna tulisan ke semula setelah kursor meninggalkan judul berita
                 // });
             }
             newsList.appendChild(row);
         }
     }
     // Event listener untuk pencarian saat tombol 'Cari' ditekan
     document.getElementById('search-btn').addEventListener('click', function() {
         const searchTerm = document.getElementById('search-input').value.toLowerCase();
         const filteredBerita = berita.filter(function(berita) {
             return berita.judul.toLowerCase().includes(searchTerm) || berita.file.toLowerCase()
                 .includes(searchTerm);
         });
         tampilkanBerita(filteredBerita);
     });
     // Tampilkan berita awal saat halaman dimuat
     tampilkanBerita(berita);
 </script>