<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="../../docs-assets/ico/favicon.png">

    <title>Laporan</title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url()?>assets/css/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<?php echo base_url() ?>assets/jumbotron.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy this line! -->
    <!--[if lt IE 9]><script src="../../docs-assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
  <script type="text/javascript"></script><link rel='stylesheet' type='text/css' href='/B1D671CF-E532-4481-99AA-19F420D90332/netdefender/hui/ndhui.css' /></head>

  <body background="<?php echo base_url()?>assets/wallpaper/wallpaper06.jpg"><script type='text/javascript' language='javascript' src='/B1D671CF-E532-4481-99AA-19F420D90332/netdefender/hui/ndhui.js?0=0&amp;0=0&amp;0=0'></script>

    <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
		              <div class="navbar-collapse collapse">
              <ul class="nav navbar-nav">
		  <li><?php echo anchor('c_main/user_area', 'Home'); ?> </li>
                <li > <?php echo anchor('c_main/display_member', 'Data Member'); ?> </li>                 <div class="dropdown">                 <button class="dropbtn">Laporan Akuntansi</button>             <div class="dropdown-content">             <li><?php echo anchor('c_main/display_jurnal_umum', 'Jurnal Umum'); ?> </li>             <li><?php echo anchor('c_main/display_pilih_akun', 'Buku Besar'); ?> </li>              <li><?php echo anchor('c_main/display_pilih_bulan_profit', 'P/L Statement'); ?> </li>             </div> </div>
                <li><?php echo anchor('c_main/display_trainer', 'Data Trainer'); ?></li>
                <li><?php echo anchor('c_main/display_transaksi', 'Data Transaksi'); ?></li>
                <li><?php echo anchor('c_main/display_pembayaran_member', 'Data Pembayaran'); ?></li>
                <li><?php echo anchor('c_main/display_alat_latihan', 'Data Alat Latihan'); ?></li>
                <li><?php echo anchor('c_main/display_jadwal_latihan', 'Jadwal Latihan'); ?></li>
          		<li><?php echo anchor('c_main/display_kehadiran', 'Kehadiran'); ?> </li> 		<li class="active"><?php echo anchor('c_main/display_laporan', 'Laporan'); ?></li>
				
                <li><?php echo anchor('c_login/logout', 'Logout'); ?></li>
				 </ul>
            </div>
        </div>
        <div class="navbar-collapse collapse">
			
        </div><!--/.navbar-collapse -->
      </div>
    </div>

    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron">
      <div class="container">
       <h1>Fitur Laporan</h1>
        <p>Berikut ini adalah fitur-fitur laporan yang dapat digunakan yaitu laporan member, laporan trainer, laporan kehadiran,
         laporan data transaksi, laporan data pembayaran</p>
        
      </div>
    </div>

    <div class="container" style="background-color:whitesmoke">
      <!-- Example row of columns -->
      <div class="row">
        <div class="col-md-4">
            <img src="<?php echo base_url()?>assets/img/report_member.png">
          <h2>Laporan Member</h2>
          <p>Laporan member terdiri dari laporan member berdasarkan umur,laporan member berdasarkan bulan pendaftaran</p>
          <p><a class="btn btn-default" href="display_laporan_member" role="button">Click &raquo;</a></p>
        </div>
        <div class="col-md-4">
            <img src="<?php echo base_url()?>assets/img/report_trainer.png">
          <h2>Laporan Trainer</h2>
          <p>Laporan trainer terdiri dari laporan trainer melatih member,.</p>
          <p><a class="btn btn-default" href="display_laporan_trainer" role="button">Click &raquo;</a></p>
       </div>
        <div class="col-md-4">
           <img src="<?php echo base_url()?>assets/img/report_kehadiran.png">
          <h2>Laporan Kehadiran</h2>
          <p>Laporan kehadiran terdiri dari rekap laporan per hari,bulan, dan tahun.</p>
          <p><a class="btn btn-default" href="display_laporan_kehadiran" role="button">Click &raquo;</a></p>
        </div>
      </div>
          
       <div class="row">   
         <div class="col-md-4">
           <img src="<?php echo base_url()?>assets/img/report_transaksi.png">
          <h2>Laporan Data Transaksi</h2>
          <p>Laporan data transaksi terdiri dari laporan data transaksi per hari,per bulan, dan per tahun</p>
          <p><a class="btn btn-default" href="display_laporan_transaksi" role="button">Click &raquo;</a></p>
        </div>

           <!--
           <div class="col-md-4">
           <img src="<?php echo base_url()?>assets/img/report_pembayaran.png">
          <h2>Laporan Data Pembayaran</h2>
          <p>Laporan data pembayaran terdiri dari laporan pembayaran berdasarkan status pembayaran member</p>
          <p><a class="btn btn-default" href="display_pembayaran_member" role="button">Click &raquo;</a></p>
        </div>
           -->
      </div>
      
      
      

      <hr>
	
		<div class="navbar-collapse collapse">
      <footer>
        <p>&copy;Aplikasi Administrasi Fitness</p>
      </footer>
	  </div>
    </div> <!-- /container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="<?php echo base_url()?>assets/js/bootstrap.min.js"></script>
  </body>
</html>
