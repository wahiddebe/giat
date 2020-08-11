<main class="page">
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
        <table id="example" class=" my-4 table table-striped table-bordered" cellspacing="0" width="100%">
          <thead>
            <tr>
              <th rowspan="2">Tujuan</th>
              <th colspan="2">Penawaran Vendor</th>
              <th colspan="2">Penawaran Ekspedisi</th>
            </tr>
            <tr>
              <th>CDE</th>
              <th>CDD</th>
              <th>CDE</th>
              <th>CDD</th>
            </tr>
          </thead>
          <tbody>
            <?php
            $no = 0;
            foreach ($harga->result_array() as $i) :
              $no++;
              $id_jasa = $i['id_jasa'];
              $tujuan = $i['tujuan'];
              $vendor_cde = $i['vendor_cde'];
              $ex_cde = $i['ex_cde'];
              $vendor_cdd = $i['vendor_cdd'];
              $ex_cdd = $i['ex_cdd'];

            ?>
              <tr>
                <td><?= $tujuan ?></td>
                <td><?= $vendor_cde ?></td>
                <td><?= $vendor_cdd ?></td>
                <td><?= $ex_cde ?></td>
                <td><?= $ex_cdd ?></td>
              </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
      </div>
    </div>
  </section>
  <div class="container-fluid py-5"></div>
</main>
<a href="https://api.whatsapp.com/send?phone=62<?= $no_hp ?>" class="d-flex justify-content-center align-items-center" id="wp" target="_blank">
  <i class="fa fa-whatsapp d-flex justify-content-center align-items-center">
  </i>
</a>
</body>