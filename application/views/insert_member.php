<!DOCTYPE html>
<html lang="en">
<?php echo form_open('c_main/tambah');?>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="../../docs-assets/ico/favicon.png">
    <script language="JavaScript">
    function handleSelect() {
     if (document.getElementById("regular").checked) {
         document.getElementById('namatrainer').disabled = true;
     } else {
         document.getElementById('namatrainer').disabled = false;
     }
 }	
 
 function handleSelect_2() {
     if (document.getElementById("regular").checked) {
         document.getElementById('namatrainer').disabled = true;
     } else {
         document.getElementById('namatrainer').disabled = false;
     }
 }	
</script>
<script type="text/javascript" href="<?php echo base_url()?>assets/js/autoNumeric.js"></script>
<script type="text/json" href="<?php echo base_url()?>assets/js/autoNumeric.jquery.json"></script>
<script type="text/javascript">
jQuery(function($) {
    $('.auto').autoNumeric('init');
});
</script>
<style>
input[type="text"] {
	text-align:right;
}
.method {
	margin-top: 25px;
	margin-bottom:25px;
}
.method td {
	height:25px;
}
</style>


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
                <li class="active"> <?php echo anchor('c_main/display_member', 'Data Member'); ?> </li>                 <div class="dropdown">                 <button class="dropbtn">Laporan Akuntansi</button>             <div class="dropdown-content">             <li><?php echo anchor('c_main/display_jurnal_umum', 'Jurnal Umum'); ?> </li>             <li><?php echo anchor('c_main/display_pilih_akun', 'Buku Besar'); ?> </li>              <li><?php echo anchor('c_main/display_pilih_bulan_profit', 'P/L Statement'); ?> </li>             </div> </div>
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
          <table  Align="center" class="opik" border="1" style="border-color:black">
		<h3>Data Member </h3>			
	<tr>
	<th>Nama :</th>
	<td ><input name = "nama" type = "text" placeholder="Isi Nama Member" value = "" ></td>
	<td style="color:blue;"><?php echo form_error('nama');?></td>
	</tr>
	
	<tr>
	<th >Alamat :</th>
	<td ><input name = "alamat" type = "text" placeholder="Isi Alamat Member" value = "" ></td>
	<td style="color:blue;"><?php echo form_error('alamat');?></td>
	</tr>
	
	<tr>
	<th>Tanggal Lahir :</th>
	<td ><input name = "tanggallahir" type = "date" placeholder="Isi Umur Member" value = "" ></td>
	<td style="color:blue;"><?php echo form_error('umur');?></td>
	</tr>
	
	<tr>
	<th>Jenis Kelamin :</th>
	<td ><input type="radio" name="jeniskelamin" value="Male">Male</input>
      <input type="radio" name="jeniskelamin" value="Female">Female</input></td>
	  <td style="color:blue;"><?php echo form_error('jeniskelamin');?></td>
	</tr>
	
	<tr>
	<th>Tanggal Pendaftaran :</th>
	<td ><input name = "tanggalpendaftaran" type = "date" placeholder="Isi Tanggal Pendaftaran" value = "" ></td>
	<td style="color:blue;"><?php echo form_error('tanggalpendaftaran');?></td>
	</tr>
	
        
	<tr>
	<th>Program Latihan :</th>
	<td><input  onclick="handleSelect()" id="privat"  type="radio" name="programlatihan" value="Privat">Privat</input>
      <input onclick="handleSelect()" id="regular" type="radio" name="programlatihan" value="Regular">Regular</input></td>
	  <td style="color:blue;"><?php echo form_error('programlatihan');?></td>
	</tr>
       
	
        <tr>
	<th>Trainer :</th>
	<td> <select id="namatrainer" name="namatrainer">
        
            <?php
            $cdquery="SELECT Nama_Trainer FROM trainer";
            $cdresult=mysql_query($cdquery) or die ("Query to get data from firsttable failed: ".mysql_error());
            
            while ($cdrow=mysql_fetch_array($cdresult)) {
            $cdTitle=$cdrow["Nama_Trainer"];
                echo "<option>
                    $cdTitle
                </option>";
            
            }
                
            ?>
    
        </select></td>
	  <td style="color:blue;"><?php echo form_error('programlatihan');?></td>
	</tr>    
        
	
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
