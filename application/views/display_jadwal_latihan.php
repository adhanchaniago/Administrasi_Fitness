<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="../../docs-assets/ico/favicon.png">

    <title>Aplikasi Pengelolaan Tempat Fitness</title>

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
                <li><?php echo anchor('c_main/display_trainer', 'Data Trainer'); ?></li>
                 <li><?php echo anchor('c_main/display_transaksi', 'Data Transaksi'); ?></li>
                 <li><?php echo anchor('c_main/display_pembayaran_member', 'Data Pembayaran'); ?></li>
                <li><?php echo anchor('c_main/display_alat_latihan', 'Data Alat Latihan'); ?></li>
                <li class="active"><?php echo anchor('c_main/display_jadwal_latihan', 'Jadwal Latihan'); ?></li>
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
        <table  Align="center" class="table table-bordered opik ">
		<h3>Data Jadwal Latihan </h3>
		<?php echo form_open('c_main/search_jadwal');?>
			<center>
				<tr>
					<td>Search By Nama</td>
					<td><input type="text" id="keyword" name="keyword" size="20" required/></td>
                                        <td><input class="btn btn-default" type="submit" value="Search"/></td>
				</tr>
			</center>
		</form>
		<tr bgcolor="green"><th>Nama Trainer</th><th>Senin</th><th>Selasa</th><th>Rabu</th><th>Kamis</th><th>Jumat</th>
                <th>Sabtu</th>    
		<th>Update</th> <th>Delete</th> </tr>
		
		<?php
                if (is_array($results) || is_object($results))
        {
    		foreach($results as $data)
		{ 
		?>
		
		<td ><?php echo $data->Nama_Trainer; ?></td>
		<td><?php echo $data->Jadwal_1; ?></td>
                <td><?php echo $data->Jadwal_2; ?></td>
                <td><?php echo $data->Jadwal_3; ?></td>
                <td><?php echo $data->Jadwal_4; ?></td>
                <td><?php echo $data->Jadwal_5; ?></td>
                <td><?php echo $data->Jadwal_6; ?></td>
		<td><?php echo anchor('c_main/update1_jadwal/'.$data->Nama_Trainer,'Edit');?></td>
		<td><?php echo anchor('c_main/hapus_jadwal_latihan/'.$data->Nama_Trainer,'Hapus');?></td></tr>
		
		<?php
		}
         }        
		?>

			<tr>
			
	<td colspan=2 class = "halaman"><p><?php echo $links; ?></p></td>
	</tr>
	 </table>
	 <p><button type="button" ><?php echo anchor('c_main/tambah_jadwal_latihan/','Insert');?></button></p>
      </div>
    </div>

    


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="<?php echo base_url()?>assets/js/bootstrap.min.js"></script>
  </body>
</html>
<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

