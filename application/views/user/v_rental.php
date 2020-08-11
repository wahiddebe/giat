<main class="page catalog-page">
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

</main>
<a href="https://api.whatsapp.com/send?phone=62<?= $no_hp_rental ?>" class="d-flex justify-content-center align-items-center" id="wp" target="_blank">
    <i class="fa fa-whatsapp d-flex justify-content-center align-items-center">
    </i>
</a>
</body>