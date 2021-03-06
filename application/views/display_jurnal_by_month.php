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
		<h3>Jurnal Umum </h3>
	<!--	<?php echo form_open('c_main/search_transaksi');?>
			<center>
				<tr>
					<td>Search By Nama</td>
					<td><input type="text" id="keyword" name="keyword" size="20" required/>
                                            <input class="btn btn-default" type="submit" value="Search"/></td>
				
			</center>
		<?php echo form_close(); ?>
        -->    
        <!-- <?php echo form_open('c_main/sort_jurnal_by_date'); ?>
                    <td>Sort By Date : </td>
                    <td><input  type="date" name="sort_date">
                        <input class="btn btn-default" type="submit" value="Sort by Date"/></td>
                    <?php echo form_close(); ?>
                   --> 
                    <?php echo form_open('c_main/sort_jurnal_by_month'); ?>
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
		<tr bgcolor="green"><th>Tanggal</th><th>No Ref</th><th>Deskripsi</th><th>Debit</th> <th>Credit</th>
                
		<?php
                if (is_array($results) || is_object($results))
        {       
                       
                    
    		foreach($results as $data)
		{ 
                    $tanggal_transaksi=date_create($data->Tanggal); 
		?>
		
		<tr><td><?php echo  date_format($tanggal_transaksi
                        , ' jS F Y');; ?></td>
		<td ><?php echo $data->No_Ref; ?></td>
		<td><?php echo $data->Deskripsi; ?></td>
                <?php if ($data->Debit!=0) 
                {
                    $pemasukan=$data->Debit;
                    $pengeluaran=null;                   
                }    
                    else 
                    {
                    $pemasukan=null;
                    $pengeluaran=$data->Credit;
                    
                    }
                    
                ?>
                <td ><?php echo 'Rp '.number_format(($pemasukan),0); ?></td>
                <td><?php echo 'Rp '.number_format(($pengeluaran),0) ?></td>
               
		</tr>
		
		<?php
		}
         }        
		?>

                <tr>
                    
                    <td>Total</td>
                    <td></td>
                    <td></td>
                    <td><?php  
            $total_query="SELECT SUM(Debit) AS TotalTransaksi FROM akuntansi_perusahaan where Month(Tanggal)='".$month."' AND Year(Tanggal)='".$year."'";
            $cdresult=mysql_query($total_query) or die ("Query to get data from firsttable failed: ".mysql_error());
            while ($cdrow=mysql_fetch_array($cdresult)) {
            $jumlah_pemasukan=$cdrow["TotalTransaksi"];
            }
            echo 'Rp '.number_format(($jumlah_pemasukan),0);
            
            
            ?></td>
               
               <td><?php  
            $total_query="SELECT SUM(Credit) AS TotalTransaksi FROM akuntansi_perusahaan where Month(Tanggal)='".$month."' AND Year(Tanggal)='".$year."'";
            $cdresult=mysql_query($total_query) or die ("Query to get data from firsttable failed: ".mysql_error());
            while ($cdrow=mysql_fetch_array($cdresult)) {
            $jumlah_pengeluaran=$cdrow["TotalTransaksi"];
            }
            echo 'Rp '.number_format(($jumlah_pengeluaran),0);
            
            
            ?></td> 
               
                <tr>
                <td>Laba/Rugi</td>
                    <td></td>
                    <td></td>
                    <td>
                    <?php 
                    $selisih=$jumlah_pemasukan>$jumlah_pengeluaran;
                    if($selisih==TRUE)
                    {
                        echo '<td bgcolor="#66ff99" >'.'Rp '.number_format(($jumlah_pemasukan-$jumlah_pengeluaran),0);
                    }
                    
                    else
                    {
                        echo '<td bgcolor="#ff3333">'.'Rp '.number_format(($jumlah_pengeluaran-$jumlah_pemasukan),0);
                    }
                    
                    ?>
                    </td>
                </tr>
                    
                </tr>    
                
			<tr>
	<td colspan=2 class = "halaman"><p><?php echo $links; ?></p></td>
	</tr>
	 </table>
	 <p><button type="button" ><?php echo anchor('c_main/tambah_transaksi/','Insert');?></button></p>
      </div>
        
        <?php if ($this->session->flashdata('something')) {?>

        <div id="notifications"><?php echo ('#myModal7').modal('show'); ; }?></div>

    </div>
    
    <div class="modal fade" id="myModal7" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document" style="margin-top:150px">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Respon</h4>
      </div>
      <div class="modal-body">
        <p class="modal-body">
		Ketika kelebihan glukosa dengan memakan makanan yang kaya akan karbohidrat maka glukosa akan tersimpan didalam hati dan otot dalam bentuk glikogen. Pertanyaan yang Anda pilih sudah baik namun sayangnya, pertanyaan tersebut kurang tepat untuk pembelajaran kita kali ini. Mungkin Anda memiliki pertanyaan lainnya, Anda dapat memilih pertanyaan lain.
		
		</p>
      </div>

    </div>
      
  </div>
</div>    

    


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="<?php echo base_url()?>assets/js/bootstrap.min.js"></script>
  </body>
</html>
