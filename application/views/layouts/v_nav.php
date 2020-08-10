<body>
    <nav class="navbar navbar-light navbar-expand-lg fixed-top bg-white clean-navbar">
        <div class="container"><a class="navbar-brand logo" href="<?= base_url('beranda') ?>"><img style="width: 50px;height: 50px;" src="<?= base_url() ?>user/assets/img/WhatsApp_Image_2020-07-22_at_00-removebg-preview.png"></a><button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navcol-1">
                <ul class="nav navbar-nav ml-auto">
                    <li class="nav-item" role="presentation"><a class="nav-link <?= $active1 ?>" href="<?= base_url('beranda') ?> ">Home</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link <?= $active2 ?>" href="<?= base_url('jasa') ?>">Pengiriman Barang</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link <?= $active3 ?>" href="<?= base_url('rental') ?>">Rental</a></li>
                </ul>
            </div>
        </div>
    </nav>