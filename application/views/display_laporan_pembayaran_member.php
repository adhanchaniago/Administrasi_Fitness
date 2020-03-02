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
                <li > <?php echo anchor('c_main/display_member', 'Data Member'); ?> </li>                 <div class="dropdown">                 <button class="dropbtn">Laporan Akuntansi</button>             <div class="dropdown-content">             <li><?php echo anchor('c_main/display_jurnal_umum', 'Jurnal Umum'); ?> </li>             <li><?php echo anchor('c_main/display_pilih_akun', 'Buku Besar'); ?> </li>              <li><?php echo anchor('c_main/display_pilih_bulan_profit', 'P/L Statement'); ?> </li>             </div> </div>
                <li><?php echo anchor('c_main/display_trainer', 'Data Trainer'); ?></li>
                <li><?php echo anchor('c_main/display_transaksi', 'Data Transaksi'); ?></li>
                <li ><?php echo anchor('c_main/display_pembayaran_member', 'Data Pembayaran'); ?></li>
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
          <table  Align="center" class="table table-bordered laporan ">
             <?php 
                $dateObj   = DateTime::createFromFormat('!m', $month);
                $monthName = $dateObj->format('F'); // March
            ?>
		<h3>Laporan Pembayaran  Member pada bulan <?php echo $monthName.' '.$year ;?> </h3>
		<?php echo form_open('c_main/search_umur_member');?>
			<center>
				<tr>
					<td>Sortir berdasarkan umur</td>
                                        <td><input type="number" id="keyword" name="batas_umur" size="20" required/>
                                            Sampai dengan
                                        <input type="number" id="keyword" name="batas_umur2" size="20" required/>   
                                        </td>
                                        
                                        <td><input class="btn btn-default" type="submit" value="Search"/></td>
               <?php echo form_close();?>                         
                                        <?php echo form_open('c_main/sort_member_by_month_paid'); ?>
                    <td>
                    Sort By Month
                   
                    <select id="sort_month" name="sort_month" placeholder="Isi No Loker">
        
                      <?php
            
                      for($i=1;$i<=30;$i++) {
                         echo "<option>
                           $i
                          </option>";
            
                         }
                
                      ?>
    
                </select>
                    
                    <select align="right" id="sort_year" name="sort_year" placeholder="Isi No Loker">
        
                      <?php
            
                      for($i=2016;$i<=2050;$i++) {
                         echo "<option>
                           $i
                          </option>";
            
                         }
                
                      ?>
    
                </select>
                    
                    <input class="btn btn-default" type="submit" value="Sort by Month"/></td>
                <?php echo form_close(); ?>
				</tr>
			</center>
		</form>
		<tr bgcolor="green"><th>No ID</th><th>Nama</th><th>Alamat</th> <th>Umur</th> <th>Jenis Kelamin</th> <th>Tanggal Pendaftaran</th> 
                <th>Tanggal Pembayaran</th> <th>Status Pembayaran</th>
                <th>Status Pembayaran 2</th> 
                <th>Jumlah Pembayaran</th>
                <th>Program Latihan</th> <th>Nama_Trainer</th> 
		 </tr>
		
		<?php
                 if (is_array($results) || is_object($results))
        {
		foreach($results as $data)
		{ 
                    $tanggal_daftar=date_create($data->Tanggal_Pendaftaran);
                    $tanggal_bayar =date_create($data->Tanggal_Pembayaran);
		?>
		
		<tr><td><?php echo $data->ID_Member; ?></td>
		<td ><?php echo $data->Nama_Member; ?></td>
		<td><?php echo $data->Alamat_Member; ?></td>
		<td><?php echo $data->Umur; ?></td>
		<td><?php echo $data->Jenis_Kelamin; ?></td>
		<td><?php echo date_format($tanggal_daftar
                        , 'l jS F Y'); ; ?></td>
                <td><?php echo date_format($tanggal_bayar
                        , 'l jS F Y'); ; ?></td>
                <td><?php echo $data->Status_Pembayaran; ?></td>
                <td><?php echo $data->Status_Pembayaran2; ?></td>
                 <td><?php echo 'Rp '.number_format($data->Jumlah_Pembayaran); ?></td>
		<td><?php echo $data->Program_Latihan; ?></td>
		<td><?php echo $data->Nama_Trainer; ?></td>
		</tr>
		
		<?php
		}
        }       
		?>

			<tr>
			
	<td colspan=2 class = "halaman"><p><?php echo $links; ?></p></td>
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
</html>
