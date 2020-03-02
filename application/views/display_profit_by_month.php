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
                <li > <?php echo anchor('c_main/display_member', 'Data Member'); ?> </li>
                <div class="dropdown">
                    <li class="active"><button class="dropbtn active">Laporan Akuntansi</button> </li>
                <div class="dropdown-content">
                <li><?php echo anchor('c_main/display_jurnal_umum', 'Jurnal Umum'); ?> </li><li><?php echo anchor('c_main/display_pilih_akun', 'Buku Besar'); ?> </li>              <li><?php echo anchor('c_main/display_pilih_bulan_profit', 'P/L Statement'); ?> </li>             </div> </div>
                <li><?php echo anchor('c_main/display_trainer', 'Data Trainer'); ?></li>
                <li><?php echo anchor('c_main/display_transaksi', 'Data Transaksi'); ?></li>
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
        <table  Align="center" class="table opik">
            <?php 
                $dateObj   = DateTime::createFromFormat('!m', $month);
                $monthName = $dateObj->format('F'); 
            ?>
		<h3><?php echo $monthName.' '.$year;?> </h3>
		
                <h3>Profit/Loss Statement </h3>
		<tr bgcolor="green"><th>Pemasukan</th><th>Jumlah</th>
		<?php
                $param=0;
          $total_query_pemasukan="SELECT Deskripsi,Debit FROM akuntansi_perusahaan where (Debit !=$param AND Month(Tanggal)='".$bulan."') AND Year(Tanggal)='".$year."'  ";
            $cdresult_pemasukan=mysql_query($total_query_pemasukan) or die ("Query to get data from firsttable failed: ".mysql_error());
            while($cdrow=mysql_fetch_array($cdresult_pemasukan))
        {       $jumlah_uang=number_format(($cdrow["Debit"]),0);
               echo  ' <tr> <td>'.$cdrow["Deskripsi"].'</td><td> Rp '.$jumlah_uang.' </td> </tr>';       
                    
        }	
		?>

		
		<?php
		
         $param=0;
          $total_query_debit="SELECT SUM(Debit) AS TotalTransaksi FROM akuntansi_perusahaan where (Debit !=$param AND Month(Tanggal)='".$bulan."') AND Year(Tanggal)='".$year."'  ";
            $cdresult_debit=mysql_query($total_query_debit) or die ("Query to get data from firsttable failed: ".mysql_error());
            while ($cdrow=mysql_fetch_array($cdresult_debit)) {
            $jumlah_pemasukan=$cdrow["TotalTransaksi"];
            }
            echo '<tr><td>Total </td>'.'<td>  Rp '.number_format(($jumlah_pemasukan),0).'</td>';
                
		?>

               
                
	 </table>
         
          <table  Align="center" class="table opik">
              <tr bgcolor="green"><th>Pengeluaran</th><th>Jumlah</th>
                <?php
                $param=0;
          $total_query_pemasukan="SELECT Deskripsi,Credit FROM akuntansi_perusahaan where (Credit !=$param AND Month(Tanggal)='".$bulan."') AND Year(Tanggal)='".$year."'  ";
            $cdresult_pemasukan=mysql_query($total_query_pemasukan) or die ("Query to get data from firsttable failed: ".mysql_error());
            while($cdrow=mysql_fetch_array($cdresult_pemasukan))
        {       $jumlah_uang_kredit=number_format(($cdrow["Credit"]),0);
               echo  ' <tr> <td>'.$cdrow["Deskripsi"].'</td><td> Rp '.$jumlah_uang_kredit.' </td> </tr>';       
                    
    		
		?>

		
		<?php
		
         }        
           $param=0;
          $total_query_credit="SELECT SUM(Credit) AS TotalTransaksi FROM akuntansi_perusahaan where (Credit !=$param AND Month(Tanggal)='".$bulan."') AND Year(Tanggal)='".$year."'  ";
            $cdresult_credit=mysql_query($total_query_credit) or die ("Query to get data from firsttable failed: ".mysql_error());
            while ($cdrow=mysql_fetch_array($cdresult_credit)) {
            $jumlah_pengeluaran=$cdrow["TotalTransaksi"];
            }
            echo '<tr><td>Total </td>'.'<td>  Rp '.number_format(($jumlah_pengeluaran),0).'</td>';
            
		?>    
              
                    
                </tr>    
          </table> 
          
         <?php echo 'Total Laba/Rugi = Rp '.number_format($jumlah_pemasukan-$jumlah_pengeluaran,0);?>
         
      </div>

    


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="<?php echo base_url()?>assets/js/bootstrap.min.js"></script>
  </body>
  
</html>
