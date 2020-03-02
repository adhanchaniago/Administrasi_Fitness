<!DOCTYPE html>
<html lang="en">
<?php echo form_open('c_main/update2_pembayaran');?>
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
                <li > <?php echo anchor('c_main/display_member', 'Data Member'); ?> </li>                 <div class="dropdown">                 <button class="dropbtn">Laporan Akuntansi</button>             <div class="dropdown-content">             <li><?php echo anchor('c_main/display_jurnal_umum', 'Jurnal Umum'); ?> </li>             <li><?php echo anchor('c_main/display_pilih_akun', 'Buku Besar'); ?> </li>              <li><?php echo anchor('c_main/display_pilih_bulan_profit', 'P/L Statement'); ?> </li>             </div> </div>
                <li><?php echo anchor('c_main/display_trainer', 'Data Trainer'); ?></li>
                 <li><?php echo anchor('c_main/display_pembayaran_member', 'Data Pembayaran'); ?></li>
                <li class="active"><?php echo anchor('c_main/display_pembayaran_member', 'Data Pembayaran'); ?></li>
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
        <table  Align="center" class="table table-bordered opik">
		<h3>Data Member </h3>	
      <?php
		foreach($list_data->result()as $row){
			$id_member=$row->ID_Member;
			$nama_member=$row->Nama_Member;
			$tanggal_pendaftaran=date_create($row->Tanggal_Pendaftaran);
			$tanggal_pembayaran=date_create($row->Tanggal_Pembayaran);
			$status_pembayaran=$row->Status_Pembayaran;
                        $status_pembayaran_2=$row->Status_Pembayaran2;
			$jumlah_pembayaran=$row->Jumlah_Pembayaran;
			
			
		}
		?>		
	<tr>
	<th>Nama :</th>
	<td><input  type = "text" value = "<?php echo $nama_member ?>" disabled ></td>
        <input name= "nama_member" type = "hidden" value = "<?php echo $nama_member ?>">
	<input name= "id_member" type = "text" value = "<?php echo $id_member ?>" hidden >
	</tr>

	<tr>
	<th>Tanggal Pendaftaran :</th>
	<td>
        <input name= "tanggal_pendaftaran" type = "text" value = "<?php echo date_format($tanggal_pendaftaran
                        , 'l jS F Y'); ; ?>" disabled> </td>
	</tr>
	
	<tr>
	<th>Tanggal Pembayaran :</th>
	<td><?php echo date_format($tanggal_pembayaran
                        , 'l jS F Y'); ; ?> </td>
        <input name= "tanggal_pembayaran" type = "text" value = "<?php echo $row->Tanggal_Pembayaran ?>" hidden >
	</tr>
        
        <tr>
	<th>Status Pembayaran :</th>
	<td><?php echo $status_pembayaran?> </td>
	</tr>
        
        <tr>
	<th>Status Pembayaran2 :</th>
	<td><?php echo $status_pembayaran2?> </td>
	</tr>
	
	<tr>
	<th>Jumlah Pembayaran :</th>
	<td><input type = "text" value = "<?php echo $jumlah_pembayaran?>" disabled> </td>
        <input name= "biaya_latihan" type = "text" value = "<?php echo $jumlah_pembayaran?>" hidden> 
	</tr>
        
        
	<td style="color:blue;"><?php echo form_error('status');?></td>
	<input name = "author" type = "hidden" placeholder="Isi Keterangan" value = "<?php echo $username?>" >
        <?php
                
                $now = new DateTime();
                $hari=$now->format('Y-m-d');    // MySQL datetime format
      
              ?>
        <input name = "hari" type = "hidden" placeholder="Isi Waktu " value = "<?php echo $hari ?> " >   
	<tr>
            <td> <input class="btn btn-default" type="submit" name="submit" ></td>
	</tr>
	 </table>
      </div>
    </div>

    


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="<?php echo base_url()?>assets/js/bootstrap.min.js"></script>
  </body>
  <?php echo form_close();?>
</html>
