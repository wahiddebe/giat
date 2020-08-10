<!--Counter Inbox-->

<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Giat Sanjaya | Jasa Pengiriman</title>
  <!-- Tell the browser to be responsive to screen width -->
  <link rel="shorcut icon" type="text/css" href="<?= base_url() ?>user/assets/img/WhatsApp_Image_2020-07-22_at_00-removebg-preview.png">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="<?php echo base_url() . 'assets/bootstrap/css/bootstrap.min.css' ?>">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url() . 'assets/font-awesome/css/font-awesome.min.css' ?>">
  <!-- Ionicons -->
  <!-- jvectormap -->
  <link rel="stylesheet" href="<?php echo base_url() . 'assets/plugins/jvectormap/jquery-jvectormap-1.2.2.css' ?>">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url() . 'assets/dist/css/AdminLTE.min.css' ?>">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="<?php echo base_url() . 'assets/dist/css/skins/_all-skins.min.css' ?>">


</head>

<body class="hold-transition skin-blue sidebar-mini">
  <div class="wrapper">

    <!--Header-->
    <?php
    $this->load->view('admin/v_header');
    $this->load->view('admin/v_sidebar');
    ?>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <h1>
          Foto Konten
          <small></small>
        </h1>
        <ol class="breadcrumb">
          <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
          <li><a href="#">Foto Konten</a></li>
        </ol>
      </section>

      <!-- Main content -->
      <section class="content">
        <div class="row">
          <div class="col-xs-12">
            <div class="box">

              <div class="box">
                <div class="box-header">
                  <a class="btn btn-success btn-flat" href="<?php echo base_url() . 'admin/jasa/add_konten_jasa' ?>"><span class="fa fa-plus"></span> Add Gambar</a>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                  <table id="example1" class="table table-striped" style="font-size:13px;">
                    <thead>
                      <tr>
                        <th>Gambar</th>
                        <th>Judul</th>
                        <th style="text-align:right;">Aksi</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                      $no = 0;
                      foreach ($data->result_array() as $i) :
                        $no++;
                        $id_jasa_konten = $i['id_jasa_konten'];
                        $judul = $i['judul'];
                        $foto = $i['foto'];

                      ?>
                        <tr>
                          <td><img src="<?php echo base_url() . 'user/assets/img/jasa/' . $foto; ?>" style="width:90px;"></td>
                          <td><?php echo $judul; ?></td>
                          <td style="text-align:right;">
                            <a class="btn" href="<?php echo base_url() . 'admin/jasa/get_edit_konten/' . $id_jasa_konten; ?>"><span class="fa fa-pencil"></span></a>
                            <a class="btn" data-toggle="modal" data-target="#ModalHapus<?php echo $id_jasa_konten; ?>"><span class="fa fa-trash"></span></a>
                          </td>
                        </tr>
                      <?php endforeach; ?>
                    </tbody>
                  </table>
                </div>
                <!-- /.box-body -->
              </div>
              <!-- /.box -->
            </div>
            <!-- /.col -->
          </div>
          <!-- /.row -->
      </section>
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    <?php foreach ($data->result_array() as $i) :
      $id_jasa_konten = $i['id_jasa_konten'];
      $judul = $i['judul'];
      $foto = $i['foto'];
    ?>
      <!--Modal Hapus Pengguna-->
      <div class="modal fade" id="ModalHapus<?php echo $id_jasa_konten; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><span class="fa fa-close"></span></span></button>
              <h4 class="modal-title" id="myModalLabel">Hapus</h4>
            </div>
            <form class="form-horizontal" action="<?php echo base_url() . 'admin/jasa/hapus_konten_jasa' ?>" method="post" enctype="multipart/form-data">
              <div class="modal-body">
                <input type="hidden" name="kode" value="<?php echo $id_jasa_konten; ?>" />
                <input type="hidden" value="<?php echo $foto; ?>" name="gambar">
                <p>Apakah Anda yakin mau menghapus <b><?php echo $judul; ?></b> ?</p>

              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default btn-flat" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary btn-flat" id="simpan">Hapus</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    <?php endforeach; ?>
    <footer class="main-footer">
      <div class="pull-right hidden-xs">
        <b>Version</b> 1.0
      </div>
      <strong>Copyright &copy; 2020 <a href="http://aksantara.digital">Aksantara Digital</a>.</strong> All rights reserved.
    </footer>


  </div>
  <!-- ./wrapper -->

  <!-- jQuery 2.2.3 -->
  <script src="<?php echo base_url() . 'assets/plugins/jQuery/jquery-2.2.3.min.js' ?>"></script>
  <!-- Bootstrap 3.3.6 -->
  <script src="<?php echo base_url() . 'assets/bootstrap/js/bootstrap.min.js' ?>"></script>
  <!-- FastClick -->
  <script src="<?php echo base_url() . 'assets/plugins/fastclick/fastclick.js' ?>"></script>
  <!-- AdminLTE App -->
  <script src="<?php echo base_url() . 'assets/dist/js/app.min.js' ?>"></script>
  <!-- Sparkline -->
  <script src="<?php echo base_url() . 'assets/plugins/sparkline/jquery.sparkline.min.js' ?>"></script>
  <!-- jvectormap -->
  <script src="<?php echo base_url() . 'assets/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js' ?>"></script>
  <script src="<?php echo base_url() . 'assets/plugins/jvectormap/jquery-jvectormap-world-mill-en.js' ?>"></script>
  <!-- SlimScroll 1.3.0 -->
  <script src="<?php echo base_url() . 'assets/plugins/slimScroll/jquery.slimscroll.min.js' ?>"></script>
  <!-- ChartJS 1.0.1 -->
  <script src="<?php echo base_url() . 'assets/plugins/chartjs/Chart.min.js' ?>"></script>
  <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
  <script src="<?php echo base_url() . 'assets/dist/js/pages/dashboard2.js' ?>"></script>
  <!-- AdminLTE for demo purposes -->
  <script src="<?php echo base_url() . 'assets/dist/js/demo.js' ?>"></script>

  <script>
    var lineChartData = {
      labels: <?php echo json_encode($bulan); ?>,
      datasets: [

        {
          fillColor: "rgba(60,141,188,0.9)",
          strokeColor: "rgba(60,141,188,0.8)",
          pointColor: "#3b8bba",
          pointStrokeColor: "#fff",
          pointHighlightFill: "#fff",
          pointHighlightStroke: "rgba(152,235,239,1)",
          data: <?php echo json_encode($value); ?>
        }

      ]

    }

    var myLine = new Chart(document.getElementById("canvas").getContext("2d")).Line(lineChartData);

    var canvas = new Chart(myLine).Line(lineChartData, {
      scaleShowGridLines: true,
      scaleGridLineColor: "rgba(0,0,0,.005)",
      scaleGridLineWidth: 0,
      scaleShowHorizontalLines: true,
      scaleShowVerticalLines: true,
      bezierCurve: true,
      bezierCurveTension: 0.4,
      pointDot: true,
      pointDotRadius: 4,
      pointDotStrokeWidth: 1,
      pointHitDetectionRadius: 2,
      datasetStroke: true,
      tooltipCornerRadius: 2,
      datasetStrokeWidth: 2,
      datasetFill: true,
      legendTemplate: "<ul class=\"<%=name.toLowerCase()%>-legend\"><% for (var i=0; i<datasets.length; i++){%><li><span style=\"background-color:<%=datasets[i].strokeColor%>\"></span><%if(datasets[i].label){%><%=datasets[i].label%><%}%></li><%}%></ul>",
      responsive: true
    });
  </script>

</body>

</html>