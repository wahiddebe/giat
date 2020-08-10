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
          Jasa
          <small></small>
        </h1>
        <ol class="breadcrumb">
          <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
          <li><a href="#">Tabel</a></li>
        </ol>
      </section>

      <!-- Main content -->
      <section class="content">

        <!-- SELECT2 EXAMPLE -->
        <div class="box box-default">

          <form action="<?php echo base_url() . 'admin/jasa/simpan_jasa' ?>" method="post" enctype="multipart/form-data">
            <div class="box-body">
              <div class="form-group">
                <label for="">Tujuan</label>
                <input name="tujuan" type="text" class="form-control" id="" placeholder="Masukan Tujuan">
              </div>
              <label for="">Penawaran Vendor</label>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="">CDE (Rp)</label>
                    <input name="vendor_cde" type="number" class="form-control" id="" placeholder="CDE">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="">CDD (Rp)</label>
                    <input name="vendor_cdd" type="number" class="form-control" id="" placeholder="CDD">
                  </div>
                </div>
              </div>
              <label for="">Penawaran Ekspedisi</label>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="">CDE (Rp)</label>
                    <input name="ex_cde" type="number" class="form-control" id="" placeholder="CDE">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="">CDD (Rp)</label>
                    <input name="ex_cdd" type="number" class="form-control" id="" placeholder="CDD">
                  </div>
                </div>
              </div>
            </div>
            <!-- /.box-body -->

            <div class="box-footer">
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>

      </section>
      <!-- /.content -->
    </div>

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