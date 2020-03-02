<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="../../docs-assets/ico/favicon.png">

    <title>Homepage</title>

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

  <body><script type='text/javascript' language='javascript' src='/B1D671CF-E532-4481-99AA-19F420D90332/netdefender/hui/ndhui.js?0=0&amp;0=0&amp;0=0'></script>

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
		  <li class="active"><?php echo anchor('c_main/user_area', 'Home'); ?> </li>
                <li> <?php echo anchor('c_main/display_member', 'Data Member'); ?> </li>                 <div class="dropdown">                 <button class="dropbtn">Laporan Akuntansi</button>             <div class="dropdown-content">             <li><?php echo anchor('c_main/display_jurnal_umum', 'Jurnal Umum'); ?> </li>             <li><?php echo anchor('c_main/display_pilih_akun', 'Buku Besar'); ?> </li>              <li><?php echo anchor('c_main/display_pilih_bulan_profit', 'P/L Statement'); ?> </li>             </div> </div>
                <li><?php echo anchor('c_main/display_trainer', 'Data Trainer'); ?></li>
                <li ><?php echo anchor('c_main/display_transaksi', 'Data Transaksi'); ?></li>
                <li><?php echo anchor('c_main/display_pembayaran_member', 'Data Pembayaran'); ?></li>
                <li><?php echo anchor('c_main/display_alat_latihan', 'Data Alat Latihan'); ?></li>
                <li><?php echo anchor('c_main/display_jadwal_latihan', 'Jadwal Latihan'); ?></li>
		<li><?php echo anchor('c_main/display_kehadiran', 'Kehadiran'); ?> </li> 		
 
				
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
       <h1>Welcome!</h1>
        <p>Aplikasi ini mempunyai fitur Member,Trainer,Kehadiran,Data Transaksi,Data Pembayaran,dan Jadwal Latihan.
		Untuk Mengakses fitur ini cukup pilih opsi yang ada di menu homepage.Selamat Menggunakan Aplikasi ini!</p>
        
      </div>
    </div>

    <div class="container">
      <!-- Example row of columns -->
      <div class="row">
        <div class="col-md-4">
            <img src="<?php echo base_url()?>assets/img/1463661357_weightlift.png">
          <h2>Fitur  Member</h2>
          <p>Fitur  member adalah fitur untuk menambahkan member,mengubah data member,serta menghapus member</p>
          <p><a class="btn btn-default" href="display_member" role="button">Click &raquo;</a></p>
        </div>
        <div class="col-md-4">
            <img src="<?php echo base_url()?>assets/img/1463661411_hand_biceps.png">
          <h2>Fitur Trainer</h2>
          <p>Fitur  trainer adalah fitur untuk menambahkan trainer,mengubah data trainer,serta menghapus trainer.</p>
          <p><a class="btn btn-default" href="display_trainer" role="button">Click &raquo;</a></p>
       </div>
        <div class="col-md-4">
           <img src="<?php echo base_url()?>assets/img/1463661288_clipboard.png">
          <h2>Fitur Kehadiran</h2>
          <p>FItur Kehadiran adalah fitur untuk menambahkan kehadiran member.</p>
          <p><a class="btn btn-default" href="display_kehadiran" role="button">Click &raquo;</a></p>
        </div>
      </div>
          
       <div class="row">   
         <div class="col-md-4">
           <img src="<?php echo base_url()?>assets/img/1463661032_Money-Increase.png">
          <h2>Fitur Data Transaksi</h2>
          <p>FItur data Transaksi adalah fitur untuk mengelola data transaksi</p>
          <p><a class="btn btn-default" href="display_transaksi" role="button">Click &raquo;</a></p>
        </div>
          
           <div class="col-md-4">
           <img src="<?php echo base_url()?>assets/img/1463661089_Money.png">
          <h2>Fitur Data Pembayaran</h2>
          <p>FItur Data Pembayaran adalah fitur untuk mengelola data pembayaran</p>
          <p><a class="btn btn-default" href="display_pembayaran_member" role="button">Click &raquo;</a></p>
        </div>
          
          <div class="col-md-4">
          <img src="<?php echo base_url()?>assets/img/schedule.png">
          <h2>Fitur Data Jadwal Latihan</h2>
          <p>FItur Data Jadwal Latihan adalah fitur untuk mengelola data jadwal latihan</p>
          <p><a class="btn btn-default" href="display_jadwal_latihan.php" role="button">Click &raquo;</a></p>
        </div>
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
