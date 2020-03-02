<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="../../docs-assets/ico/favicon.png">

    <title>Data Kehadiran Member</title>

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

  <body background="<?php echo base_url()?>assets/wallpaper/wallpaper05.jpg"><script type='text/javascript' language='javascript' src='/B1D671CF-E532-4481-99AA-19F420D90332/netdefender/hui/ndhui.js?0=0&amp;0=0&amp;0=0'></script>

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
                <li> <?php echo anchor('c_main/display_member', 'Data Member'); ?> </li>                 <div class="dropdown">                 <button class="dropbtn">Laporan Akuntansi</button>             <div class="dropdown-content">             <li><?php echo anchor('c_main/display_jurnal_umum', 'Jurnal Umum'); ?> </li>             <li><?php echo anchor('c_main/display_pilih_akun', 'Buku Besar'); ?> </li>              <li><?php echo anchor('c_main/display_pilih_bulan_profit', 'P/L Statement'); ?> </li>             </div> </div>
                <li><?php echo anchor('c_main/display_trainer', 'Data Trainer'); ?></li>  <li><?php echo anchor('c_main/display_transaksi', 'Data Transaksi'); ?></li>                 <li><?php echo anchor('c_main/display_pembayaran_member', 'Data Pembayaran'); ?></li>                <li><?php echo anchor('c_main/display_alat_latihan', 'Data Alat Latihan'); ?></li>                 <li><?php echo anchor('c_main/display_jadwal_latihan', 'Jadwal Latihan'); ?></li>
		<li class="active"> <?php echo anchor('c_main/display_kehadiran', 'Kehadiran'); ?> </li>
                
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
        <table  Align="center" class="table table-bordered opik">
		<h3>Data Kehadiran Member </h3>
		<tr><th>NO</th><th>NAMA</th><th>No Loker</th><th>Jam_Masuk</th><th>Jam_Keluar</th><th>Hari</th> 
		</tr>
		
		<?php
		foreach($results as $data)
		{
                    $tanggal_daftar=date_create($data->Hari);
		?>
		
		<tr><td><?php echo $data->No_Kehadiran; ?></td>
		<td><?php echo $data->Nama; ?></td>
		<td><?php echo $data->No_Loker; ?></td>
                <td><?php echo $data->Jam_Masuk; ?></td>
                
                <td><?php
                
                if($data->Jam_Keluar!=NULL)
                {
                echo $data->Jam_Keluar;
                }
                
                else
                    
                {
                     echo anchor('c_main/update_kehadiran/'.$data->No_Kehadiran,'Masukan Jam Keluar');
                }
                
                ?>
                </td>
		<td><?php echo date_format($tanggal_daftar, 'l jS F Y'); ; ?></td>
		<?php
		}
		?><tr>
			
	<td colspan=2 class = "halaman"><p><?php echo $links; ?></p></td>
	</tr>
	</table>
	 <p><button type="button" ><?php echo anchor('c_main/tambah_kehadiran/','Insert Kehadiran');?></button></p>
      </div>
    </div>

    


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="<?php echo base_url()?>assets/js/bootstrap.min.js"></script>
  </body>
</html>
