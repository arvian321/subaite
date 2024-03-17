<div id="t3-content" class="t3-content col-xs-12 col-sm-8 col-sm-push-4 col-md-8 col-md-push-2">
    <div class="page-header clearfix">
        <h1 class="page-title">Pelaksana Pelayanan</h1>
    </div>

    <div class="item-page clearfix">

        <!-- Article -->
        <article itemscope="" itemtype="http://schema.org/Article">
            <meta itemprop="inLanguage" content="en-GB">
            <meta itemprop="url" content="/pelaksana-pelayanan">
            <meta itemscope="" itemprop="mainEntityOfPage" itemtype="http://schema.org/WebPage"
                itemid="/pelaksana-pelayanan">

            <meta content="2022-12-05T22:21:23+07:00" itemprop="dateModified">

            <meta content="2021-08-30T22:23:30+07:00" itemprop="datePublished">

            <span itemprop="author" style="display: none;">
                <span itemprop="name">Sabo Hermawan</span>
                <span itemtype="https://schema.org/Organization" itemscope="" itemprop="publisher"
                    style="display: none;">
                    <span itemtype="https://schema.org/ImageObject" itemscope="" itemprop="logo">
                        <img itemprop="url" alt="logo"
                            src="https://standarpangan.pom.go.id//templates/ja_company/images/logo.png">
                        <meta content="auto" itemprop="width">
                        <meta content="auto" itemprop="height">
                    </span>
                    <meta content="Sabo Hermawan" itemprop="name">
                </span>
            </span>
            <!--e:Validate structured data-->

            <!-- Aside -->
            <!-- //Aside -->

            <meta content="Pelaksana Pelayanan" itemprop="headline">

            <section class="article-content clearfix" itemprop="articleBody">
                <div class="chartjs-size-monitor"
                    style="position: absolute; inset: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;">
                    <div class="chartjs-size-monitor-expand"
                        style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;">
                        <div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0"></div>
                    </div>
                    <div class="chartjs-size-monitor-shrink"
                        style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;">
                        <div style="position:absolute;width:200%;height:200%;left:0; top:0"></div>
                    </div>
                </div>
                <div class="chartjs-size-monitor"
                    style="position: absolute; inset: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;">
                    <div class="chartjs-size-monitor-expand"
                        style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;">
                        <div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0"></div>
                    </div>
                    <div class="chartjs-size-monitor-shrink"
                        style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;">
                        <div style="position:absolute;width:200%;height:200%;left:0; top:0"></div>
                    </div>
                </div>

                <style>
                    .buttons {
                        margin-top: 3rem;
                        display: flex;
                        justify-content: center;
                    }

                    .buttons__pay {
                        /*👉left: 45%;
    position: relative;👈*/
                        font-family: "Roboto", sans-serif;
                        padding: 12px 52px;
                        margin: 0;
                        background: rgb(41, 78, 123);
                        border: 2px solid rgba(41, 78, 123);
                        color: white;
                        font-size: 1.5rem;
                        text-decoration: none;
                        -webkit-appearance: none;
                        cursor: pointer;
                    }

                    .buttons__pay:hover,
                    .buttons__pay:focus {
                        background-color: rgba(187, 190, 237);
                        opacity: .7;
                        color: gray;
                        cursor: pointer;
                        padding: 8px 28px;
                        margin: 4px 24px;
                        -webkit-transition: .45s .08s;
                        -o-transition: .45s .08s;
                        transition: .45s .08s;
                    }
                </style>
                <div class="row clearfix" style="justify-content: center; text-align: center; float:center;">
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12"><img class=""
                            src="https://standarpangan.pom.go.id/images/feature/view_sk.jpg" alt="SK_Petugas"
                            data-original="https://standarpangan.pom.go.id/images/feature/view_sk.jpg"
                            style="display: block;"><a
                            href="/images/feature/2_SK_Petugas_YanblikPengaduan_2022_tubel.pdf" target="_blank"><button
                                class="buttons__pay">Lihat Dokumen SK Petugas</button></a><br><br></div>
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12"><img class=""
                            src="https://standarpangan.pom.go.id/images/feature/view_pdk.jpg" alt="Pendidikan_Petugas"
                            data-original="https://standarpangan.pom.go.id/images/feature/view_pdk.jpg"
                            style="display: block;"><a href="/images/feature/file_pelaksana_pelayanan.pdf"
                            target="_blank"><button class="buttons__pay">Lihat Dokumen Pendidikan Petugas</button></a>
                    </div>
                </div>
                <div style="margin-top: 100px;"></div>
                <canvas id="jabatan" width="846" height="423" style="display: block; width: 846px; height: 423px;"
                    class="chartjs-render-monitor"></canvas>
                <div style="margin-top: 100px;"></div>
                <canvas id="pendidikan" width="846" height="423" style="display: block; width: 846px; height: 423px;"
                    class="chartjs-render-monitor"></canvas>

                <script>
                    var optionsOne = {
                        type: 'doughnut',
                        data: {
                            labels: [
                                "Pengawas Farmasi dan Makanan Madya",
                                "Pengawas Farmasi dan Makanan Muda",
                                "Pengawas Farmasi dan Makanan Pertama",
                                "Pengawas Farmasi dan Makanan Penyelia",
                                "Pranata Komputer Pertama",
                                "Pengadministrasi Keuangan",
                                "Analis Data dan Informasi",
                                "Pengelola Pengadaan Barang dan Jasa Pertama",
                                "Analis Pengelola BMN",
                                "Arsiparis Terampil",
                                "Analis SDM Aparatur",
                                "Analis Penyusunan Standard dan Peraturan",
                                "Analis Pengelolaan Keuangan APBN Ahli Muda"
                            ],
                            datasets: [{
                                label: "Jumlah",
                                backgroundColor: ["#46BFBD", "#FF4069", "#4D5360", "#949FB1", "#FDB45C",
                                    "#9C49C3", "#0B9CFD", "#C8C2BC", "#F2DAC3", "#F1CA89", "#CC9B6D",
                                    "#9E7641", "#85603F"
                                ],
                                //data: [9, 41, 23, 2, 2, 5, 5, 2, 2, 2, 2, 2, 2] 
                                data: [4, 18, 10, 1, 1, 2, 2, 1, 1, 1, 1, 1, 1]
                            }]
                        },
                        options: {
                            title: {
                                display: true,
                                fontSize: 20,
                                text: ['Berdasarkan Jabatan'],
                            },
                            legend: {
                                display: true,
                                position: 'right',
                                labels: {
                                    padding: 15,
                                    fontSize: 12
                                }
                            },
                            tooltips: {
                                callbacks: {
                                    label: function(tooltipItem, data) {
                                        var dataset = data.datasets[tooltipItem.datasetIndex];
                                        var meta = dataset._meta[Object.keys(dataset._meta)[0]];
                                        var total = meta.total;
                                        var currentValue = dataset.data[tooltipItem.index];
                                        var percentage = parseFloat((currentValue / total * 100).toFixed(1));
                                        return currentValue + ' (' + percentage + '%)';
                                    },
                                    title: function(tooltipItem, data) {
                                        return data.labels[tooltipItem[0].index];
                                    }
                                }
                            }
                        }
                    }
                    var optionsTwo = {
                        type: 'doughnut',
                        data: {
                            labels: [
                                "S3", "Apoteker", "S2-Bioteknologi", "S2-Teknologi Pangan / Ilmu Pangan",
                                "S2-Ilmu Kimia", "S2-Ilmu Herbal Medik", "S2-Gizi Kesehatan Masyarakat",
                                "S2-Hygiene Industri", "S1-Teknologi Pangan", "S1-Ilmu Gizi",
                                "S1-Rekayasa Hayati", "S1-Biologi", "S1-Hukum", "S1-Statistika",
                                "S1-Sistem Informasi", "S1-Teknik Informatika", "S1-Akuntansi", "S1-Pendidikan",
                                "D3-Akuntansi", "D3-Arsiparis", "D3-Manajemen Informatika", "SMA/SMK"
                            ],
                            datasets: [{
                                label: "Jumlah",
                                backgroundColor: ["#46BFBD", "#FF4069", "#4D5360", "#949FB1", "#FDB45C",
                                    "#9C49C3", "#0B9CFD", "#C8C2BC", "#F2DAC3", "#F1CA89", "#CC9B6D",
                                    "#9E7641", "#85603F", "#46BFBD", "#FF4069", "#4D5360", "#949FB1",
                                    "#FDB45C", "#9C49C3", "#0B9CFD", "#C8C2BC", "#F2DAC3"
                                ],
                                data: [1, 17, 1, 9, 1, 2, 2, 1, 6, 1, 1, 1, 1, 1, 2, 2, 4, 1, 2, 1, 1, 3]
                            }]
                        },
                        options: {
                            title: {
                                display: true,
                                fontSize: 20,
                                text: ['Berdasarkan Jenjang Pendidikan'],
                            },
                            legend: {
                                display: true,
                                position: 'right',
                                labels: {
                                    padding: 20,
                                    fontSize: 12
                                }
                            },
                            tooltips: {
                                callbacks: {
                                    label: function(tooltipItem, data) {
                                        var dataset = data.datasets[tooltipItem.datasetIndex];
                                        var meta = dataset._meta[Object.keys(dataset._meta)[0]];
                                        var total = meta.total;
                                        var currentValue = dataset.data[tooltipItem.index];
                                        var percentage = parseFloat((currentValue / total * 100).toFixed(1));
                                        return currentValue + ' (' + percentage + '%)';
                                    },
                                    title: function(tooltipItem, data) {
                                        return data.labels[tooltipItem[0].index];
                                    }
                                }
                            }
                        }
                    }
                    var ctxOne = document.getElementById('jabatan').getContext('2d');
                    new Chart(ctxOne, optionsOne);
                    var ctxTwo = document.getElementById('pendidikan').getContext('2d');
                    new Chart(ctxTwo, optionsTwo);
                </script>
                <p></p>
            </section>

            <!-- footer -->
            <!-- //footer -->

        </article>
        <!-- //Article -->

    </div>
</div>