<main class="page landing-page">
    <?php foreach ($landing->result_array() as $i) :
        $id_landing = $i['id_landing'];
        $judul = $i['judul'];
        $isi = $i['isi'];
        $foto = $i['foto'];
    endforeach;
    ?>
    <section class="clean-block clean-hero" style="color: rgba(17,17,17,0.85);background: url(<?= base_url() ?>user/assets/img/tech/<?= $foto ?>) center / cover;">
        <div class="text">
            <h1 class="text-capitalize text-center" style="color: rgb(234,178,39);font-weight: bold;font-style: italic;"><?= $judul ?></h1>
            <p style="color: rgb(234,178,39);font-size: 15px;line-height: 18px;"><?= $isi ?><br>
            </p>
            <a href="#info"><button class="btn btn-outline-light btn-lg" type="button">Learn More</button></a>
        </div>
    </section>
    <section id="info" class="clean-block clean-info dark">
        <div class="container">
            <?php foreach ($welcome->result_array() as $i) :
                $id_welcome = $i['id_welcome'];
                $judul_1 = $i['judul_1'];
                $judul_2 = $i['judul_2'];
                $isi_1 = $i['isi_1'];
                $isi_2 = $i['isi_2'];
                $foto = $i['foto'];
            endforeach;
            ?>
            <div class="block-heading">
                <h2 class="text-info mt-5"><?= $judul_1 ?></h2>
                <p><?= $isi_1 ?></p>
            </div>
            <div class="row align-items-center">
                <div class="col-md-6">
                    <img class="img-thumbnail" src="<?= base_url() ?>user/assets/img/tech/<?= $foto ?>">
                </div>
                <div class="col-md-6">
                    <h3><?= $judul_2 ?></h3>
                    <div class="getting-started-info">
                        <p><?= $isi_2 ?></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="clean-block features">
        <div class="container">
            <div class="block-heading">
                <?php foreach ($layanan->result_array() as $i) :
                    $id_layanan = $i['id_layanan'];
                    $judul_1 = $i['judul_1'];
                    $judul_2 = $i['judul_2'];
                    $judul_3 = $i['judul_3'];
                    $isi_1 = $i['isi_1'];
                    $isi_2 = $i['isi_2'];
                    $isi_3 = $i['isi_3'];
                endforeach;
                ?>
                <h2 class="text-info"><?= $judul_1 ?></h2>
                <p><?= $isi_1 ?></p>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-5 feature-box"><i class="fas fa-truck icon"></i>
                    <h4><?= $judul_2 ?></h4>
                    <p><?= $isi_2 ?></p>
                </div>
                <div class="col-md-5 feature-box"><i class="fas fa-car-side icon"></i>
                    <h4><?= $judul_3 ?></h4>
                    <p><?= $isi_3 ?></p>
                </div>
            </div>
        </div>
    </section>
    <section class="clean-block features">
        <div class="container">
            <div class="block-heading">
                <h2 class="text-info"><?= $jasa_judul ?></h2>
                <p><?= $jasa_isi ?></p>
                <div class="row">
                    <?php foreach ($jasa->result_array() as $i) :
                        $id_jasa_konten = $i['id_jasa_konten'];
                        $judul = $i['judul'];
                        $foto = $i['foto'];
                    ?>
                        <div class="col-md-6 mb-lg-0" style="padding: 10px;">
                            <div class="hover hover-5 text-white rounded"><img src="<?php echo base_url() . 'user/assets/img/jasa/' . $foto; ?>" alt="image">
                                <div class="hover-overlay"></div>
                                <div class="hover-5-content">
                                    <h2 class="text-uppercase hover-5-title font-weight-light mb-0" style="font-weight: bold;">
                                        <strong class="font-weight-bold text-white"><?= $judul ?></strong>&nbsp;</h2>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
                <a href="<?= base_url('Jasa') ?>"><button class="btn btn-outline-light btn-lg" type="button">Cek Harga</button></a>
            </div>
        </div>
    </section>
    <section class="clean-block clean-catalog dark">
        <div class="container">
            <div class="block-heading">
                <h2 class="text-info"><?= $rental_judul ?></h2>
                <p><?= $rental_isi ?></p>
            </div>
            <div class="row justify-content-center">
                <?php foreach ($rental->result_array() as $i) :
                    $id_rental = $i['id_rental'];
                    $nama = $i['nama'];
                    $harga = $i['harga'];
                    $foto = $i['foto'];
                ?>
                    <div class="col-sm-6 col-lg-4">
                        <div class="card clean-card text-center"><img class="card-img-top w-100 d-block" src="<?php echo base_url() . 'user/assets/img/rental/' . $foto; ?>">
                            <div class="card-body info">
                                <h4 class="card-title"><?= $nama ?></h4>
                                <p class="card-text"><?= 'Rp ' . $harga . ' / 12 jam' ?></p>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
    <section class="clean-block about-us">
        <div class="container">
            <div class="block-heading">
                <h2 class="text-info"><?= $testi_judul ?></h2>
                <p><?= $testi_isi ?></p>
            </div>
            <div class="row justify-content-center">
                <?php foreach ($testi->result_array() as $i) :
                    $id_testi = $i['id_testi'];
                    $nama = $i['nama'];
                    $testi = $i['testi'];
                    $foto = $i['foto'];
                ?>
                    <div class="col-sm-6 col-lg-4">
                        <div class="card clean-card text-center"><img class="card-img-top w-100 d-block" src="<?= base_url() ?>user/assets/img/avatars/<?= $foto ?>">
                            <div class="card-body info">
                                <h4 class="card-title"><?= $nama ?></h4>
                                <p class="card-text"><?= $testi ?></p>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
</main>